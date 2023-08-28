<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;
use Illuminate\Broadcasting\Channel;
use Illuminate\Support\Facades\Artisan;
use PhpParser\Node\Arg;

class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $characters = Character::all();

        return response()->json($characters);
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
        $characters = new Character();
        $characters -> name = $request -> name;
        $characters -> status = $request -> status;
        $characters -> species = $request -> species;
        $characters -> type = $request -> type;
        $characters -> gender = $request -> gender;
        $characters -> origin = $request -> origin;
        $characters -> location = $request -> location;
        $characters -> image = $request -> image;
        $characters -> episode = $request -> episode;
        $characters -> url = $request -> url;
        $characters -> created = $request -> created;

        $characters -> save();
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
        $characters = Character::findOrFail($request->id);
        $characters -> name = $request -> name;
        $characters -> status = $request -> status;
        $characters -> species = $request -> species;
        $characters -> type = $request -> type;
        $characters -> gender = $request -> gender;
        $characters -> origin = $request -> origin;
        $characters -> location = $request -> location;
        $characters -> image = $request -> image;
        $characters -> episode = $request -> episode;
        $characters -> url = $request -> url;
        $characters -> created = $request -> created;
    
        $characters -> save();

        return $characters;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $characters = Character::destroy($request->id);

        return $characters;
    }
}
