<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Trip;
use Illuminate\Http\Request;

class TripController extends Controller
{
    public function index()
    {
        $trips = Trip::with(['fromLocation', 'toLocation'])->get();
        return view('trips.index', compact('trips'));
    }

    public function create()
    {
        $locations = Location::all();
        return view('trips.create', compact('locations'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'from_location_id' => 'required|exists:locations,id',
            'to_location_id' => 'required|exists:locations,id',
            'bus_name' => 'required|string',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i',
            'fare' => 'required|numeric',
        ]);

        Trip::create($request->all());

        return redirect('/trips')->with('success', 'Trip created successfully.');
    }

    public function edit($id)
    {
        $trip = Trip::findOrFail($id);
        $locations = Location::all();
        return view('trips.edit', compact('trip', 'locations'));
    }

    public function update(Request $request, $id)
    {
        $trip = Trip::findOrFail($id);

        $request->validate([
            'from_location_id' => 'required|exists:locations,id',
            'to_location_id' => 'required|exists:locations,id',
            'bus_name' => 'required|string',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i',
            'fare' => 'required|numeric',
        ]);

        $trip->update($request->all());

        return redirect('/trips')->with('success', 'Trip updated successfully.');
    }

    public function destroy($id)
    {
        $trip = Trip::findOrFail($id);
        $trip->delete();

        return redirect('/trips')->with('success', 'Trip deleted successfully.');
    }
}
