<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RequestRevisor extends Model
{
    use HasFactory;
    
    static public function ToBeRevisionedCount()
    {   
        return RequestRevisor::all()->count();
    }
}
