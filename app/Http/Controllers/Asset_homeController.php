<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Asset_home;

class Asset_homeController extends Controller
{
    public function index()
    {
        //
        $asset_homes = Asset_home::all();
        return view('asset_homes.index',compact('asset_homes'));
    }

    public function show($id)
    {
        $station = Station::findOrFail($id);
        return view('stations.show',compact('station'));
    }


    public function create()
    {
        return view('stations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)   
    {
       $station= new Station($request->all());
       $station->save();
              return redirect('stations');
    }

    public function edit($id)
    {
        $station=Station::find($id);
        return view('station.edit',compact('station'));
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
        $station= new Station($request->all());
        $station=Station::find($id);
        $station->update($request->all());
        return redirect('stations');
    }

    public function destroy($id)
    {
        Station::find($id)->delete();
        return redirect('stations');
    }

}
