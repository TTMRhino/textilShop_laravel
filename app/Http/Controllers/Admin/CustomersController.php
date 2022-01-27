<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customers;
use App\Models\Orders;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Customers = Customers::paginate(10);
      
        return view('admin.customers.index',[ 'Customers' => $Customers ]);
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
     * @param  \App\Models\Customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function show(Customers $customers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function edit(Customers $Customer)
    {
        $orders = Orders::where('customers_id', $Customer->id)->get();

        //dd($orders);

        return view('admin.customers.edit',[ 
            'Customers' => $Customer, 
            'Orders' => $orders
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customers $Customer)
    {
       

        $Customer->data = $request->data;
        $Customer->name = $request->name;
        $Customer->phone = $request->phone;
        $Customer->mailindex = $request->mailindex;
        $Customer->city = $request->city;
        $Customer->adress = $request->adress;
        $Customer->comments = $request->comments;
        $Customer->status = $request->status;
        $Customer->orders_id = $request->orders_id;

        $Customer->save();

        return redirect()->back()->withSuccess('Customer edit successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customers $customers)
    {
        //
    }
}
