<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaymentModel;
use App\Models\ServiceItemsChanges;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $orders = PaymentModel::orderBy('created_at','desc')->get();
        return view('home',compact('orders'));
    }

    // public function Create(Request $request){
    //     $data = new ServiceItemsChanges();
    //     $data->t1 = $request->t1;
    //     $data->t1_price = $request->t1_price;
    //     $data->t2 = $request->t2;
    //     $data->t2_price = $request->t2_price;
    //     $data->t3 = $request->t3;
    //     $data->t3_price = $request->t3_price;
    //     $data->t1Ex1 = $request->t1Ex1;
    //     $data->t1Ex1_price = $request->t1Ex1_price;
    //     $data->t1Ex2 = $request->t1Ex2;
    //     $data->t1Ex2_price = $request->t1Ex2_price;
    //     $data->t2Ex = $request->t2Ex;
    //     $data->t2Ex_price = $request->t2Ex_price;
    //     $data->t3Ex = $request->t3Ex;
    //     $data->t3Ex_price = $request->t3Ex_price;
    //     $data->save();
    //     return back();
    // }

    public function Update(Request $request, $id){
        $data = ServiceItemsChanges::findOrFail($id);
        $data->t1 = $request->t1;
        $data->t1_price = $request->t1_price;
        $data->t2 = $request->t2;
        $data->t2_price = $request->t2_price;
        $data->t3 = $request->t3;
        $data->t3_price = $request->t3_price;
        $data->t1Ex1 = $request->t1Ex1;
        $data->t1Ex1_price = $request->t1Ex1_price;
        $data->t1Ex2 = $request->t1Ex2;
        $data->t1Ex2_price = $request->t1Ex2_price;
        $data->t2Ex = $request->t2Ex;
        $data->t2Ex_price = $request->t2Ex_price;
        $data->t3Ex = $request->t3Ex;
        $data->t3Ex_price = $request->t3Ex_price;
        $data->save();
        return back();
    }

    public function Edit(){
        $items = ServiceItemsChanges::all();
        $id = $items[0]->id;
        $data = ServiceItemsChanges::findOrFail($id);
        return view('edit',compact('items','data'));
    }




}
