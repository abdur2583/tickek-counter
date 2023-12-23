@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 mt-3">
                <h1>Ticket Counter</h1>
            </div>
            <div class="col-md-3">
                @if (Route::has('tickets'))
                <div>
                    <a class="btn btn-primary px-5 mt-3" href="{{ route('tickets') }}">Add A bookig</a>
                </div>
                @endif                
            </div>
        </div>  
    </div>
    

<div class="container mt-5 mb-5">
    
    <div class="row">
        <div class="col-sm-8">
        @if (isset($data))
            @foreach ($data as $item)
            <h4>Booking Details</h4>
            <p>Trip Name: <b>{{ $item->distance }}</b></p>
            <p>Date: <b>{{ $item->date }}</b></p>
            <p>Time: <b>{{ $item->date }}</b></p>
            <hr>
            @endforeach
        @endif
</div>
        
<div class="col-4 mt-8">
    <h3>Remaining Tickets</h3>
    @if(isset($seat))
    @foreach ($seat as $seat)
    <p> <h2>{{ $seat->remaining_tickets }}</h2></p>
    @endforeach
       
    @endif
</div>
    @endsection
