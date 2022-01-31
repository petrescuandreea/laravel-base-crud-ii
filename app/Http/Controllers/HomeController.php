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

    public function store(Request $request) {

        // validation 
        $data = $request -> validate([

            'name' => 'required|string|max:30',
            'lastname' => 'required|string|max:30',
            'date_of_birth' => 'required|date|',
            'username' => 'required|string|max:30',
            'email' => 'required|string|max:45',
            'password' => 'required|string',
        ]);

        // create new user 
        $user = User::create($data);

        // insert new user in home page 
        // return redirect() -> route('home');

        // show new user details 
        return redirect() -> route('show', $user -> id);

    }

    public function edit($id) {

        // find user to edit
        $user = User::findOrFail($id);

        // go to update "page" 
        return view('pages.edit', compact('user'));
    }

    public function update(Request $request, $id) {

        // validation 
        $data = $request -> validate([

            'name' => 'required|string|max:30',
            'lastname' => 'required|string|max:30',
            'date_of_birth' => 'required|date|',
            'username' => 'required|string|max:30',
            'email' => 'required|string|max:45',
            'password' => 'required|string',
        ]);

        // user to update
        $user = User::findOrFail($id);

        // update user
        $user -> update($data);

        //show uptaded user's details
        return redirect() -> route('show', $user -> id);
    }

    public function delete($id) {

        // user to delete 
        $user = User::findOrFail($id);

        // delete user 
        $user -> delete();

        // return to home page 
        return redirect() -> route('home');
    }
}
