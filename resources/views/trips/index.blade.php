@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Trips</h2>
        <a href="/trips/create" class="btn btn-primary mb-3">Add Trip</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>From</th>
                    <th>To</th>
                    <th>Bus Name</th>
                    <th>Start Time</th>
                    <th>End Time</th>
                    <th>Fare</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($trips as $trip)
                    <tr>
                        <td>{{ $trip->id }}</td>
                        <td>{{ $trip->fromLocation->name }}</td>
                        <td>{{ $trip->toLocation->name }}</td>
                        <td>{{ $trip->bus_name }}</td>
                        <td>{{ $trip->start_time }}</td>
                        <td>{{ $trip->end_time }}</td>
                        <td>{{ $trip->fare }}</td>
                        <td>
                            <a href="/trips/{{ $trip->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                            <form action="/trips/{{ $trip->id }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
