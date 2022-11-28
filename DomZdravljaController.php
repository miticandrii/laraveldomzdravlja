<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\DomZdravlja;
use Illuminate\Http\Request;
use App\Http\Resources\DomZdravljaResource;
use Illuminate\Support\Facades\Validator;

class DomZdravljaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $domovizdravlja = DomZdravlja::all();
        return DomZdravljaResource::collection($domovizdravlja); 

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
     * @param  \App\Models\DomZdravlja  $domZdravlja
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $domzdravlja = DomZdravlja::find($id);
        return new DomZdravljaResource($domzdravlja);
     
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DomZdravlja  $domZdravlja
     * @return \Illuminate\Http\Response
     */
    public function edit(DomZdravlja $domZdravlja)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DomZdravlja  $domZdravlja
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'naziv' => 'required|string',
            'adresa' => 'required|string',
            'email' => 'required|email',
            'grad' => 'required|string',
		    'zastupnik' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $domzdravlja = DomZdravlja::find($id);

        if ($domzdravlja) {
            $domzdravlja->naziv = $request->naziv;
            $domzdravlja->adresa = $request->adresa;
            $domzdravlja->email = $request->email;
            $domzdravlja->grad = $request->grad;
            $domzdravlja->zastupnik = $request->zastupnik;


            $domzdravlja->save();


            return response()->json('Dom zdravlja je izmenjen!');
        } else {
            return response()->json('Dom zdravlja sa traženim id-em ne postoji u bazi podataka!');

        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DomZdravlja  $domZdravlja
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $domzdravlja = DomZdravlja::find($id);
        if ($domzdravlja) {
            $domzdravlja->delete();
            return response()->json(['Dom zdravlja je obrisana!', new DomZdravljaResource($domzdravlja)]);
        } else {
            return response()->json('Dom zdravlja sa traženim id-em ne postoji u bazi podataka!');
        }
    }

}
