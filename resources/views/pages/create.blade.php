@extends('layouts.main-layout')
@section('content')
    <section>
        <h2>
            Create new user
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

        <form action="{{ route('store') }}" method="POST">

            @method("POST")
            @csrf

            <label for="name">Name:</label>
            <input type="text" name="name" placeholder="name"><br>
            <label for="lastname">Latsname:</label>
            <input type="text" name="lastname" placeholder="lastname"><br>
            <label for="date of birth">Date of birth:</label>
            <input type="date" name="date of birth" placeholder="date of birth"><br>
            <label for="username">Username:</label>
            <input type="text" name="username" placeholder="username"><br>
            <label for="email">Email:</label>
            <input type="text" name="email" placeholder="email"><br>
            <label for="password">Password:</label>
            <input type="password" name="password" placeholder="password"><br>
            <input type="submit" value="CREATE">
        </form>

        <a href="{{ route('home') }}">Go back to users list</a>
    </section>
@endsection