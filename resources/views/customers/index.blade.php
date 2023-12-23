@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Customers</h2>
        <a href="/customers/create" class="btn btn-primary mb-3">Add Customer</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Location</th>
                    <th>Trip</th>
                    <th>Mobile Number</th>
                    <th>Name</th>
                    <th>Total Fare</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($customers as $customer)
                    <tr>
                        <td>{{ $customer->id }}</td>
                        <td>{{ $customer->location->name }}</td>
                        <td>{{ $customer->trip->bus_name }}</td>
                        <td>{{ $customer->mobile_number }}</td>
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->total_fare }}</td>
                        <td>
                            <form action="/customers/{{ $customer->id }}" method="POST" style="display: inline;">
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
