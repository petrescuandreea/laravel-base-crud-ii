@extends('layouts.main-layout')
@section('content')
    <section>

        <h2>Users list:</h2>

        <ul>
            @foreach ($users as $user)

                <li>
                    <a href="#"> 
                        {{ $user -> name }} {{ $user -> lastname }}
                    </a> 
                </li>
                
            @endforeach
        </ul>
    </section>
@endsection