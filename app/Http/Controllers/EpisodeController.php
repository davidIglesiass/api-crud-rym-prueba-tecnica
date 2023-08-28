<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Episode;
use Illuminate\Broadcasting\Channel;
use Illuminate\Support\Facades\Artisan;
use PhpParser\Node\Arg;

class EpisodeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $episodes = Episode::all();

        return response()->json($episodes);
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
        $episodes = new Episode();
        $episodes -> name = $request -> name;
        $episodes -> air_date = $request -> air_date;
        $episodes -> episode = $request -> episode;
        $episodes -> characters = $request -> characters;
        $episodes -> url = $request -> url;
        $episodes -> created = $request -> created;

        $episodes -> save();
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
        $episodes = Episode::findOrFail($request->id);
        $episodes->name = $request->name;
        $episodes->air_date = $request->air_date;
        $episodes->episode = $request->episode;
        $episodes->characters = $request->characters;
        $episodes->url = $request->url;
        $episodes->created = $request->created;
    
        $episodes -> save();

        return $episodes;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $episodes = Episode::destroy($request->id);

        return $episodes;
    }
}
