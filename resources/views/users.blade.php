@extends('layouts.app');
@section('content')
    @guest
        <h1>Please Login</h1>
    @else
        @foreach ($users as $user)
           
                <div class="card-body">
                    <p>{{$user->name}}</p>
                    @if (Auth::user()->id == 1)
                        <a href="{{ route('users.user', ['user' => $user->id]) }}"><button type="button" class="btn btn-primary">Pass Reset</button></a>
                    @endif 
                </div> 
        @endforeach
        
    @endguest
@endsection
