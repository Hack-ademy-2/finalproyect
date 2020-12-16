<?php

namespace App\Http\Controllers;

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
        $revisor = RequestRevisor::where('is_accepted', null)
                        ->orderBy('created_at','desc')
                        ->first();
            return view('admin.home', compact('revisor'));
    
    }
    public function accept($request_revisors_id)
    {
        return $this->setAccepted($request_revisors_id, true);
    }
    public function reject($request_revisors_id)
    {
        return $this->setAccepted($request_revisors_id, false);
    }
    private function setAccepted($request_revisors_id, $value)
    {
        $revisor = RequestRevisor::find($request_revisors_id);
        $revisor->is_accepted = $value;
        $revisor->save();
        return redirect()->route('admin.home');
    }
}
