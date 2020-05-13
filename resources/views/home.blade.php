@extends('layouts.app')

@section('content')
    @guest
        <div>

        </div>
    @else
        <div>
            @if (Auth::user()->id == 1)
                <h1>Welcome Admin</h1>
            @else
                <h1>Welcome User</h1>
            @endif
        </div>
    @endguest
@endsection
