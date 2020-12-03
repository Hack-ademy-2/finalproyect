<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

   public function create()
   {
      if(!$user_id = Auth::id())
        return redirect()->route('home');
      
      $categories = Category::all();

      return view('announcement.create', compact('categories'));
       
   }

   public function store(AnnouncementRequest $request)
   {  
      //Paso a Paso

      $a = new Announcement();
      $a->title = $request->input('title');
      $a->body = $request->input('body');
      $a->category_id = $request->input('category');
      $a->user_id = Auth::id();
      $a->save();

      return redirect()->route('home')->with('announcement.create.success','Anuncio creado con exito');


      //Llamada de golpe
//$announcement = Announcement::create(request()->all());
      //return redirect()->route('announcement.create');


   }

   public function show()
   {
    

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
}
