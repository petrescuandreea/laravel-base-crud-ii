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

    public function show($id) {

        $user = User::findOrFail($id);

        return view('pages.show', compact('user'));
    }

    public function create() {

        return view('pages.create');
    }
}
