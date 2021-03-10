<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orders;
use App\Customers;
use App\Http\Controllers\Controller;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['RotaOrders']= Orders::all();
        return view('orders.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $data['RotaCustomers']= Customers::all();
        return view('orders.create',compact('data'));
        return view('orders.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $orders=Orders::insert(
            [
            'customer_fullname' => $request->customer_fullname,
            'orders_no' =>  $request->orders_no,
            'orders_date' => $request->orders_date,
            'product_name' => $request->product_name,
            'product_quantity' =>  $request->product_quantity,
            'product_price' =>  $request->product_price,

            ]);
            if($orders){
                return redirect(route('orders.index'));
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $orders=Orders::where('id',$id)->first();
        
       return view('orders.edit')->with('orders',$orders);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $orders=Orders::Where('id',$id)->update(
            [
                'customer_fullname' => $request->customer_fullname,
                'orders_no' =>  $request->orders_no,
                'orders_date' => $request->orders_date,
                'product_name' => $request->product_name,
                'product_quantity' =>  $request->product_quantity,
                'product_price' =>  $request->product_price,
            ]);
            if($orders){
                return redirect(route('orders.index'));
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
