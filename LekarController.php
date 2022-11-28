<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Lekar;
use Illuminate\Http\Request;
use App\Http\Resources\LekarResource;


class LekarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lekari = Lekar::all();
        return LekarResource::collection($lekari);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\Lekar  $lekar
     * @return \Illuminate\Http\Response
     */
    public function show(Lekar $lekar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lekar  $lekar
     * @return \Illuminate\Http\Response
     */
    public function edit(Lekar $lekar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lekar  $lekar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lekar $lekar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lekar  $lekar
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lekar = Lekar::find($id);
        if ($lekar) {
            $lekar->delete();
            return response()->json(['Lekar je obrisan!', new LekarResource($lekar)]);
        } else {
            return response()->json('Lekar sa traženim id-em ne postoji u bazi podataka!');
        }
    }

}
