@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Create Customer</h2>
        <form action="/customers" method="POST">
            @csrf
            <div class="form-group">
                <label for="location_id">Location:</label>
                <select class="form-control" id="location_id" name="location_id" required>
                    @foreach($locations as $location)
                        <option value="{{ $location->id }}">{{ $location->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="trip_id">Trip:</label>
                <select class="form-control" id="trip_id" name="trip_id" required>
                    @foreach($trips as $trip)
                        <option value="{{ $trip->id }}">{{ $trip->bus_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="mobile_number">Mobile Number:</label>
                <input type="text" class="form-control" id="mobile_number" name="mobile_number" required>
            </div>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="total_fare">Total Fare:</label>
                <input type="number" class="form-control" id="total_fare" name="total_fare" step="0.01" required>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
