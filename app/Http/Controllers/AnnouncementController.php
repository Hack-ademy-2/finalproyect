<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;
use App\Http\Requests\AnnouncementRequest;

class AnnouncementController extends Controller
{
    
   public function index()
   {  
      
      $announcement = Announcement::all();

      return view('announcement.index');

   }

   public function create()
   {
      
    
    //$this->middleware('auth');

    return view('announcement.create');
       
   }

   public function store(AnnouncementRequest $request)
   {  

       $announcement = Announcement::create(request()->all());
       return redirect()->route('announcement.create');


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
