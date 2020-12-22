<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use App\Jobs\ResizeImage;
use App\Mail\RevisorRequest;
use App\Models\Announcement;
use Illuminate\Http\Request;
use App\Models\RequestRevisor;
use App\Models\AnnouncementImage;
use Illuminate\Support\Facades\Bus;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use App\Jobs\GoogleVisionRemoveFaces;
use Illuminate\Support\Facades\Storage;
use App\Jobs\GoogleVisionSafeLabelImage;
use App\Jobs\GoogleVisionSafeSearchImage;
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
         $newFilePath = "public/announcements/{$a->id}/{$fileName}";
         
         Storage::move($image,$newFilePath);

         $i->file = $newFilePath;
         $i->announcement_id = $a->id;
         
         $i->save();
         
         Bus::chain([
            new GoogleVisionSafeSearchImage($i->id),
            new GoogleVisionSafeLabelImage($i->id),
            new GoogleVisionRemoveFaces($i->id),
            new ResizeImage($i->file, 300,200),
            new ResizeImage($i->file, 430,230),
            new ResizeImage($i->file, 655,450),
            new ResizeImage($i->file, 780,450)
         ])->dispatch();
         
      
      }
      
      File::deleteDirectory(storage_path("/app/public/temp/{$uniqueSecret}"));

      return redirect()->route('home')->with('announcement.create.success','ANUNCIO CREADO CON EXITO');

      

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

      $FilePath = $request->file('file')->store("public/temp/{$uniqueSecret}");

      dispatch(new ResizeImage($FilePath, 120, 120));




      session()->push("images.{$uniqueSecret}", $FilePath);
      return response()->json(
         
         [
            'id'=>$FilePath
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

     $data = [];

     foreach($images as $image){
        $data[] = [
           'id' => $image,
           'src' => AnnouncementImage::getUrlByFilePath($image, 120, 120),
           'name' => basename($image),
           'size' => Storage::size($image)
        ];
     }
     return response()->json($data);
   }
   
   public function formContact()

   {  $announcement = Announcement::all();
      
      return view ('announcement.formcontact',compact('announcement'));
   }

   public function requestRevisor (Request $request){

      $email = Auth::user()->email; 
      $name = Auth::user()->name;

      if($r=RequestRevisor::where('email',$email)->first()){
         $r->count++;
      }
      else{
         
         $r = new RequestRevisor;
         $r->name = $name;
         $r->email = $email;
         $r->reason = $request->input('reason');

      }

      $r->save();

      Mail::to('admin@admin.com')->send(new RevisorRequest($r));

      return redirect()->route('home')->with('announcement.create.success','SOLICITUD ENVIADA');
  }
}
