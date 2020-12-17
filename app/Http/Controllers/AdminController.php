<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\RequestRevisor;

class AdminController extends Controller
{
    
    public function __construct()
    {
    $this->middleware('auth.admin');
    }
    
    public function index()
    {
        $revisor = RequestRevisor::orderBy('created_at','desc')->first();
            return view('admin.home', compact('revisor'));
    
    }
    
    public function accept($request_revisor_id)
    {
        return $this->setAccepted($request_revisor_id, true);
    }
    
    public function reject($request_revisor_id)
    {   
        return $this->setAccepted($request_revisor_id, false);
    }

    private function setAccepted($request_revisor_id, $value)
    {
        $request_revisor = RequestRevisor::find($request_revisor_id);

        $revisor = User::where('email',$request_revisor->email)->first();
        $revisor->is_revisor = $value;
        $revisor->save();

        $request_revisor->delete();

        return redirect()->route('admin.home');
    }
}
