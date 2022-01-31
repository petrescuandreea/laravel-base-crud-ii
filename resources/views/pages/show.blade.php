@extends('layouts.main-layout')
@section('content')
    <section>
        <h2>
            User: {{ $user -> name}} {{ $user -> lastname }}
        </h2>
        
        <span>Info</span>
        <p>
            Born on: {{ $user -> date_of_birth}} <br>
            Username: {{ $user -> username}} <br>
            Email: {{ $user -> email }} <br>
            Password: {{ $user -> password }}
        </p>

        <a href="{{ route('home')}}">Go back to users list</a>
    </section>
@endsection