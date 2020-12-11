<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Http\Request;
use App\Models\AnnouncementImage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\AnnouncementRequest;

class AnnouncementController extends Controller
{

   public function __construct()
   {
      $this->middleware('auth');
   }

    
   public function index()
   {  
      
      $announcement = Announcement::all();

      return view('announcement.index');

   }

   public function create(Request $request)
   {
      
      $categories = Category::all();
      $uniqueSecret = $request->old('uniqueSecret', base_convert(sha1(uniqid(mt_rand())),16,36)
      );

      return view('announcement.create', compact('categories', 'uniqueSecret'));
  
      
   }

   public function store(AnnouncementRequest $request)
   {  
      
      //Paso a Paso

      $a = new Announcement();
      $a->title = $request->input('title');
      $a->body = $request->input('body');
      $a->category_id = $request->input('category');
      $a->price = $request->input('price');
      $a->user_id = Auth::id();
      $a->save();

      $uniqueSecret = $request->input('uniqueSecret');
      $images = session()->get("images.{$uniqueSecret}",[]);
      $removedImages = session()->get("removedImages.{$uniqueSecret}",[]);

      $images = array_diff($images,$removedImages);

      foreach($images as $image){

         $i = new AnnouncementImage;

         $fileName = basename($image);
         $newFileName = "/public/announcements/{$a->id}/{$fileName}";
         $file = Storage::move($image,$newFileName);

         $i->file = $newFileName;
         $i->announcement_id = $a->id;
         $i->save();
      }
      
      File::deleteDirectory(storage_path("/app/public/temp/{$uniqueSecret}"));

      return redirect()->route('home')->with('announcement.create.success','Anuncio creado con exito');

      

      //Llamada de golpe
//$announcement = Announcement::create(request()->all());
      //return redirect()->route('announcement.create');


   }

   public function edit()
   {
   
    
   }

   public function update()
   {
       

   }

   public function destroy()
   {
    
    
   }
   
   public function uploadImages(Request $request)
   {
      $uniqueSecret = $request->input('uniqueSecret');

      $fileName = $request->file('file')->store("public/temp/{$uniqueSecret}");
      session()->push("images.{$uniqueSecret}", $fileName);
      return response()->json(
         
         [
            'id'=>$fileName
         ]
      );
   }
   
   public function removeImages(Request $request)
   {
      $uniqueSecret = $request->input('uniqueSecret');
      $fileName = $request->input('id');
      session()->push("removedImages.{$uniqueSecret}", $fileName);
      Storage::delete($fileName);
      return response()->json('ok');
   }
   
   public function getImages(Request $request)
   {
     $uniqueSecret = $request->input('uniqueSecret');
     $images = session()->get("images.{$uniqueSecret}",[]);
     $removedImages = session()->get("removedImages.{$uniqueSecret}",[]);

     $images = array_diff($images, $removedImages);

     foreach($images as $image){
        $data[] = [
           'id' => $image,
           'name' => basename ($image),
           'src' => Storage::url($image),
           'size' => Storage::size($image)
        ];
     }
     return response()->json($data);
   }
   
}
