<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\User;
use Illuminate\Http\Request;

class DashbordController extends Controller
{
    public function index(){
        return view('dashboard')
        ->with('users', User::all()->count())
        ->with('documents', Document::all()->count());
    }
}
