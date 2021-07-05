<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Namestaj;
use Illuminate\Http\Request;
use App\Http\Resources\NamestajDTO;
class NamestajController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response=Namestaj::all();
        return $this->sendResponse(NamestajDTO::collection($response));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input=$request->all();
        $namestaj= Namestaj::create($input);
        return $this->sendResponse(NamestajDTO::collection($namestaj));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Namestaj  $namestaj
     * @return \Illuminate\Http\Response
     */
    public function show(Namestaj $namestaj)
    {
        return $this->sendResponse( new NamestajDTO($namestaj));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Namestaj  $namestaj
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Namestaj $namestaj)
    {
        if(isset($request->naziv)){
           $namestaj->naziv=$request->naziv;
        }
        if(isset($request->tip_id)){
            $namestaj->tip_id=$request->tip_id;
        }
        $namestaj->save();
        return sendResponse(new NamestajDTO($namestaj));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Namestaj  $namestaj
     * @return \Illuminate\Http\Response
     */
    public function destroy(Namestaj $namestaj)
    {
        $namestaj->delete();
        return sendResponse("uspesno obrisan namestaj");
    }
}
