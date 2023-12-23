@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Locations</h2>
        <a href="/locations/create" class="btn btn-primary mb-3">Add Location</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($locations as $location)
                    <tr>
                        <td>{{ $location->id }}</td>
                        <td>{{ $location->name }}</td>
                        <td>
                            <a href="/locations/{{ $location->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                            <form action="/locations/{{ $location->id }}" method="POST" style="display: inline;">
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
