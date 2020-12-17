<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Mail\RevisorRequest;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    public function index()
    {   
        
        $categories = Category::all();
        
        $announcements = Announcement::all();
        
        View::share('categories', $categories);
        
        return view('home', compact ('announcements','categories'));
    }

    public function formRevisor()
    {
        return view ('revisor.formrevisor');
    }

}
