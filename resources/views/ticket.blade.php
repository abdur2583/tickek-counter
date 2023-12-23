@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-7">
                <div class="header"><h4>Ticket Booking</h4></div>
                @if (session('stored'))
                    <div class="alert alert-success alert-dismissible">
                        {{ session('stored') }}
                    </div>
                    
                @endif
                <div class="form">
                    <form action="{{ route('store-tickets') }}" method="POST">
                        @csrf
                        <div>
                            <label class="form-label form" for="distance">Choose a Distance:</label>
                            @error('product_name')
                                <p>{{ $message }}</p>
                            @enderror
                            <select name="distance" id="distance">
                                <option value="Dhaka to Chitagong">Dhaka to Chitagong</option>
                                <option value="Dhaka to Comilla">Dhaka to Comilla</option>
                                <option value="Dhaka to Cox bazar">Dhaka to Cox bazar</option>
                              </select>
                        </div>
                        <div>
                            <label class="form-label form" for="date">Choose a Day:</label>
                            @error('product_name')
                                <p>{{ $message }}</p>
                            @enderror
                            <select name="date" id="date">
                                <option value="Sunday">Sunday</option>
                                <option value="Monday">Monday</option>
                                <option value="Wednesday">Wednesday</option>
                              </select>
                        </div>
                        <div>
                            <label class="form-label form" for="time">Choose Time:</label>
                            @error('product_name')
                                <p>{{ $message }}</p>
                            @enderror
                            <select name="time" id="time">
                                <option value="mornig">Morning</option>
                                <option value="Night">Night</option>
                              </select>
                        </div>
                        <div>
                        <div>
                            <label class="form-label form" for="seat">Choose a Seat:</label>
                            @error('product_name')
                                <p>{{ $message }}</p>
                            @enderror
                            <select name="seat" id="seat">
                                <option value="First">First</option>
                                <option value="Middle">Middel</option>
                                <option value="Last">Last</option>
                              </select>
                        </div>
                        <button class="btn btn-primary mt-3" type="submit" name="submit">Submit</button>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
@endsection