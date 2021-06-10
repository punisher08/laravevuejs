<?php

namespace App\Http\Controllers;

use App\Models\Cruds;
use Illuminate\Http\Request;
use DB;

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
        $cruds_data = Cruds::all();
        return response()->json(
            [
                'data' => $cruds_data
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Generator $faker)
    {

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
        $createdCruds = request()->validate([
            'name' => 'required',
            'email' => 'required',
        ]);
     
        $createdCruds = Cruds::create(request()->all());
        return response()->json([
            'data' => $createdCruds
        ]);
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
    public function edit($id)
    {
        //
        $item = Cruds::find($id);
        return response()->json(
            [
                'item' => $item
            ]
        );

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cruds  $cruds
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $website = $request->input('website');

    
    
    //    $createdCruds = Cruds::update(request()->all());
    //    $createdCruds->save();
       $data = array('name' => $name, 'email' => $email, 'website' => $website);
       DB::update('update cruds set name = ?,email = ? , website = ? where id = ?'
       ,[$name,$email,$website,$id]);
   

       return response()->json([
        'data' => $data
        
    ]);
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cruds  $cruds
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $deleted = Cruds::destroy($id);
        $cruds_data = Cruds::all();
        return response()->json(
            [
                'data' => $cruds_data
            ]
        );

        
    }
}
