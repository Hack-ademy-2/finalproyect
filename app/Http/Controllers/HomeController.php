<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index()
    {
        return view('home');
    }

    public function newAnnouncement() 
    {   
        $this->middleware('auth');
        return view('announcement.new'); 
    }


    public function createAnnouncement(Request $request)
    {   
        $this->middleware('auth');

        $nuevoanuncio = new Announcement();
        $nuevoanuncio->title = $request->input('title');
        $nuevoanuncio->body = $request->input('body');
        $nuevoanuncio->save();
        return redirect()->route('home');
    }
}
