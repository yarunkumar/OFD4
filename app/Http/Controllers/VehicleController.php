<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Vehicle;

use App\Station;

class VehicleController extends Controller
{
  //
    public function index()
    {
        //
        $vehicles= Vehicle::all();
        return view('vehicles.index',compact('vehicles'));
    }

    public function show($id)
    {
        $vehicle = Vehicle::findOrFail($id);
        return view('vehicles.show',compact('vehicle'));
        
    }


    public function create()
    {
        $stations = Station::lists('id');
        return view('vehicles.create', compact('vehicles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)   
    {
       $vehicle= new Vehicle($request->all());
       $vehicle->save();
              return redirect('vehicles');
    }

    public function edit($id)
    {
        $vehicle=Vehicle::find($id);
        return view('vehicles.edit',compact('vehicle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id,Request $request)
    {
        //
        $vehicle= new Vehicle($request->all());
        $vehicle=Vehicle::find($id);
        $vehicle->update($request->all());
        return redirect('vehicles');
    }

    public function destroy($id)
    {
        Vehicle::find($id)->delete();
        return redirect('vehicles');
    }


   //
}
