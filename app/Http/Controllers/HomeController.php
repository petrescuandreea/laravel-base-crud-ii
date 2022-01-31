<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {

        $users = User::all(); 

        return view('pages.home', compact('users'));
    }
}
