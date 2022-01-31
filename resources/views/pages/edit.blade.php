@extends('layouts.main-layout')
@section('content')
    <section>
        <h2>
            Edit user
        </h2>

        {{-- error  --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif 

        <form action="{{ route('update', $user -> id) }}" method="POST">

            @method("POST")
            @csrf

            <label for="name">Name:</label>
            <input type="text" name="name" placeholder="name" value="{{ $user -> name }}"><br>
            <label for="lastname">Latsname:</label>
            <input type="text" name="lastname" placeholder="lastname" value="{{ $user -> lastname }}"><br>
            <label for="date of birth">Date of birth:</label>
            <input type="date" name="date of birth" placeholder="date of birth" value="{{ $user -> date_of_birth }}"><br>
            <label for="username">Username:</label>
            <input type="text" name="username" placeholder="username" value="{{ $user -> username }}"><br>
            <label for="email">Email:</label>
            <input type="text" name="email" placeholder="email" value="{{ $user -> email }}"><br>
            <label for="password">Password:</label>
            <input type="password" name="password" placeholder="password" value="{{ $user -> password }}"><br>
            <input type="submit" value="UPDATE">
        </form>

        <a href="{{ route('home') }}">Go back to users list</a>
    </section>
@endsection