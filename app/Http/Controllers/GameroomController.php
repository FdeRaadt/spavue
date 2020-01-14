<?php

namespace App\Http\Controllers;

use App\Gameroom;
use App\Http\Resources\GameroomCollection;
use Illuminate\Http\Request;

class GameroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // load all gamerooms
        $gamerooms = Gameroom::all()->toArray();
        return  array_reverse($gamerooms);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // dd($gameroom);
        

        $gameroom = new Gameroom([
            'name' => $request->input('name'),
            'game' => $request->input('game')
        ]);

        $gameroom->save();
        
        return response()->json('The gameroom has been made!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gameroom  $gameroom
     * @return \Illuminate\Http\Response
     */
    public function show(Gameroom $gameroom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gameroom  $gameroom
     * @return \Illuminate\Http\Response
     */
    public function edit(Gameroom $gameroom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gameroom  $gameroom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gameroom $gameroom)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gameroom  $gameroom
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gameroom $gameroom)
    {
        //
    }
}
