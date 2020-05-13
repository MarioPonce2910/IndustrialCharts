@extends('layouts.app');
@section('content')
    @guest
        <h1>Please Login</h1>
    @else
        @foreach ($sensors as $sensor)
        <h1>{{$sensor}}</h1>
        @endforeach
    @endguest
@endsection
