@extends('layouts.app')
@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-sm-6">
            <div class="header"><h4>Add User</h4></div>
            @if (session('message'))
                <div class="alert alert-success alert-dismissible">
                    {{ session('message') }}
                </div>
                
            @endif
            @if (Route::has('store-tickets'))
            <div class="form">
                <form class="form" action="{{ route('store-tickets') }}" method="POST">
                    @csrf
                    <div>
                        <label class="form-label form" for="">User Name</label>
                        @error('user_name')
                            <p>{{ $message }}</p>
                        @enderror
                        <input class="form-control" type="text" name="user_name">
                    </div>
                    <div>
                        <label class="form-label" for="">Email</label>
                        @error('email')
                        {{ $message }}
                        @enderror
                        <input class="form-control" type="text" name="email">
                    </div>
                    <div> 
                    <button class="btn btn-primary mt-3" type="submit" name="submit">Submit</button>
                </form>
            </div>
            @endif
            
        </div>
    </div>
</div>

@endsection