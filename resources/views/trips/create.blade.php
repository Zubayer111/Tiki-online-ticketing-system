@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Create Trip</h2>
        <form action="/trips" method="POST">
            @csrf
            <div class="form-group">
                <label for="from_location_id">From Location:</label>
                <select class="form-control" id="from_location_id" name="from_location_id" required>
                    @foreach($locations as $location)
                        <option value="{{ $location->id }}">{{ $location->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="to_location_id">To Location:</label>
                <select class="form-control" id="to_location_id" name="to_location_id" required>
                    @foreach($locations as $location)
                        <option value="{{ $location->id }}">{{ $location->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="bus_name">Bus Name:</label>
                <input type="text" class="form-control" id="bus_name" name="bus_name" required>
            </div>
            <div class="form-group">
                <label for="start_time">Start Time:</label>
                <input type="time" class="form-control" id="start_time" name="start_time" required>
            </div>
            <div class="form-group">
                <label for="end_time">End Time:</label>
                <input type="time" class="form-control" id="end_time" name="end_time" required>
            </div>
            <div class="form-group">
                <label for="fare">Fare:</label>
                <input type="number" class="form-control" id="fare" name="fare" step="0.01" required>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
