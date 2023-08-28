<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;
use Illuminate\Broadcasting\Channel;
use Illuminate\Support\Facades\Artisan;
use PhpParser\Node\Arg;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $locations = Location::all();

        return response()->json($locations);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $locations = new Location();
        $locations -> name = $request -> name;
        $locations -> type = $request -> type;
        $locations -> dimension = $request -> dimension;
        $locations -> residents = $request -> residents;
        $locations -> url = $request -> url;
        $locations -> created = $request -> created;

        $locations -> save();
    }
    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $locations = Location::findOrFail($request->id);
        $locations = new Location();
        $locations->name = $request->name;
        $locations->type = $request->type;
        $locations->dimension = $request->dimension;
        $locations->residents = $request->residents;
        $locations->url = $request->url;
        $locations->created = $request->created;
    
        $locations -> save();

        return $locations;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $locations = Location::destroy($request->id);

        return $locations;
    }
}
