@extends('layouts.main-layout')
@section('content')
    <section>

        <a href="{{ route('create') }}">Create new user</a>
        
        <h2>Users list:</h2>

        <ul>
            @foreach ($users as $user)

                <li>
                    <a href="{{ route('show', $user -> id) }}"> 
                        {{ $user -> name }} {{ $user -> lastname }}
                    </a> 
                    - <a href="{{ route('edit', $user -> id) }}">EDIT</a>
                </li>
                
            @endforeach
        </ul>
    </section>
@endsection