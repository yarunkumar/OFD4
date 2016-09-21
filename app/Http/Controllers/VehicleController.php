<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Vehicle;

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
        $vehicle = Vehicle::findOrFail($van_no);
        return view('vehicles.show',compact('vehicle'));
        
    }


    public function create()
    {
        return view('vehicles.create');
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
        $customer=Customer::find($id);
        return view('customers.edit',compact('customer'));
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
        $customer= new Customer($request->all());
        $customer=Customer::find($id);
        $customer->update($request->all());
        return redirect('customers');
    }

    public function destroy($id)
    {
        Customer::find($id)->delete();
        return redirect('customers');
    }
public function stringify($id)
{
    $customer = Customer::where('cust_number', $id)->select('cust_number','name','address','city','state','zip','home_phone','cell_phone')->first();

    $customer = $customer->toArray();
    return response()->json($customer);
}

   //
}
