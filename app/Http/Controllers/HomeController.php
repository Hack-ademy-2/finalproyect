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
        return dd('newAnnuouncement'); 
        $this->middleware('auth');
    }
}
