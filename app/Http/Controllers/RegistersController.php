<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Agent;
use App\Volonteer;
use App\Motar;
use App\Customer;
use Auth;
use Hash;

use Alert;

class RegistersController extends Controller
{
   function index(){

 return view('registers.index');
   }


   function newCustomer(){

    return view('registers.newCustomer');
      }



      function storeNewCustomer(Request $request){


       $request->validate([

        'first_name'=>'required',
        'last_name'=>'required',
        'destination'=>'required',
        'district'=>'required',
        'arrivalTime'=>'required',
        'plate'=>'required',
        'phone_number'=>'required',
       

       ]);

       $customer = new Customer;

       $customer->first_name=$request->first_name;
       $customer->last_name=$request->last_name;
       $customer->phone_number=$request->phone_number;
       $customer->district=$request->district;
       $customer->arrivalTime=$request->arrivalTime;
       $customer->vehicle_plate=$request->plate;
       $customer->destination=$request->destination;
       $customer->user_id=Auth::user()->id;
       $customer->save();
       

       

       
       
       

        return redirect()->back()->with('success', 'Byakunze kwandika umugenzi');
          }


          function customers(){

            $customers=Auth::user()->customers;

            return view('registers.customers',['customers'=>$customers]);
          }


          function y(){
            $a= new User;
            $a->email="admin@admin.com";
            $a->password=Hash::make("admin");
            $a->userable_type="App\admin";
            $a->userable_id=1;
            $a->save();
            Alert::success('Success Title', 'Success Message');


          }
}
