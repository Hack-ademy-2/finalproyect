<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    
   public function index()
   {
      return view('announcement.index');

   }

   public function create()
   {


    //$this->middleware('auth');

    return view('announcement.create');
       
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
