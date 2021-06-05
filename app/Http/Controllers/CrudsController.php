<?php

namespace App\Http\Controllers;

use App\Models\Cruds;
use Illuminate\Http\Request;

class CrudsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return response(Cruds::all()->jsonSerialize(), Response::HTTP_OK);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Generator $faker)
    {
        //
        $crud = new Cruds();
        $crud->name = $faker->lexify('????????');
        $crud->color = $faker->boolean ? 'red' : 'green';
        $crud->save();
      
        return response($crud->jsonSerialize(), Response::HTTP_CREATED
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
     * @param  \App\Models\Cruds  $cruds
     * @return \Illuminate\Http\Response
     */
    public function show(Cruds $cruds)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cruds  $cruds
     * @return \Illuminate\Http\Response
     */
    public function edit(Cruds $cruds)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cruds  $cruds
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cruds $cruds)
    {
        //
        $crud = Crud::findOrFail($cruds);
        $crud->color = $request->color;
        $crud->save();
      
        return response(null, Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cruds  $cruds
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cruds $cruds)
    {
        //
        Crud::destroy($cruds);

        return response(null, Response::HTTP_OK);
    }
}
