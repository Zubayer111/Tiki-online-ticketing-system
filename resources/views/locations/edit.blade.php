@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Location</h2>
        <div class="container">
            <h2>Create Location</h2>
            <form action="/locations" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
