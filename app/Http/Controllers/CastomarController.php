<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\SeatAllocation;
use App\Models\Trip;
use Illuminate\Http\Request;

class CastomarController extends Controller
{
    public function index()
    {
        $customers = SeatAllocation::with(['location', 'trip'])->get();
        return view('customers.index', compact('customers'));
    }

    public function create()
    {
        $locations = Location::all();
        $trips = Trip::all();
        return view('customers.create', compact('locations', 'trips'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'location_id' => 'required|exists:locations,id',
            'trip_id' => 'required|exists:trips,id',
            'mobile_number' => 'required|string',
            'name' => 'required|string',
            'total_fare' => 'required|numeric',
        ]);

        SeatAllocation::create($request->all());

        return redirect('/customers')->with('success', 'Customer created successfully.');
    }

    public function edit($id)
    {
        $customer = SeatAllocation::findOrFail($id);
        $locations = Location::all();
        $trips = Trip::all();
        return view('customers.edit', compact('customer', 'locations', 'trips'));
    }

    public function update(Request $request, $id)
    {
        $customer = SeatAllocation::findOrFail($id);

        $request->validate([
            'location_id' => 'required|exists:locations,id',
            'trip_id' => 'required|exists:trips,id',
            'mobile_number' => 'required|string',
            'name' => 'required|string',
            'total_fare' => 'required|numeric',
        ]);

        $customer->update($request->all());

        return redirect('/customers')->with('success', 'Customer updated successfully.');
    }

    public function destroy($id)
    {
        $customer = SeatAllocation::findOrFail($id);
        $customer->delete();

        return redirect('/customers')->with('success', 'Customer deleted successfully.');
    }
}
