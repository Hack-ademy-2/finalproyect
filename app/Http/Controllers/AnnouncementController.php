<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    
   public function index()
   {  
      
      $announcement = Announcement::all();

      return view('announcement.index',compact ('announcement'));

   }

   public function create(Request $request)
   {

      $categories = [
         ['name'=>'Bicicletas'],
         ['name'=>'Coleccionismo'],
         ['name'=>'Consolas y Videojuegos'],
         ['name'=>'Deporte y Ocio'],
         ['name'=>'Electrodomésticos'],
         ['name'=>'Hogar y Jardín'],
         ['name'=>'Inmobiliaria'],
         ['name'=>'Moda y Accesorios'],
         ['name'=>'TV, Audio y Foto'],
         ['name'=>'Servicios'],

      ];
    //$this->middleware('auth');

    return view('announcement.create', compact('categories'));
       
   }

   public function store()
   {
       $announcement = Announcement::create(request()->all());
       return redirect()->route('announcement.index');


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
