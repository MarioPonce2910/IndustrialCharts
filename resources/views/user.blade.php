@extends('layouts.app');
@section('content')
    @guest
        <h1>Please Login</h1>
    @else
            @if (session('message'))
            <div class="alert alert-danger">
                {{ session('message') }}
            </div>
            @endif
            
                {{$errors}}
            
        @foreach ($user as $data)
           @if (Auth::user()->id == 1)
                <div class="card-body">
                    <form method="POST" action="{{ route('users.psw') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control"  name="password" >
                                <input id="id" type="password" name="id" class="d-none form-control" value="{{$data->id}}">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    RST
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
           @endif  
        @endforeach
        
    @endguest
@endsection
