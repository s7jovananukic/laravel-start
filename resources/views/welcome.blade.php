@extends('layout')

@section('title', 'Laracasts')

@section('content')

        <h1>My first App</h1>

        <ul>

                @foreach($tasks as $task)
                        <li>{{ $task }}</li>
                @endforeach

        </ul>

@endsection