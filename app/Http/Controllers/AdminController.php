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

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        //$this->middleware(['verified','auth'])->except(['find_district','find_sector','find_cell']);;
    }
   
    function index(){

       
        $customers=Customer::all()->count();
        return view('admin.index',['customers'=>$customers]);
    }




    function customers(){

        $customers=Customer::all();
        return view('admin.customers',['customers'=>$customers]);
    }

    function filterHandler(Request $request){


        $c = Customer::query();
       // $province=$request->input('province');
        
         $district=$request->input('district');
         $date=$request->input('date');
         $plate=$request->input('plate');
         $start=$request->input('start');
         $end=$request->input('end');

        // $sector=$request->input('sector');
        // $start=$request->input('start_date');
        // $end=$request->input('end_date');
        // $user_id = Auth::user()->id;
        
        // if (!empty($province)) {
        //    $c = $c->where('province', $province);
      //  }
        
         if (!empty($district)) {
            $c = $c->where('district', $district);
        }
        if (!empty($plate)) {
            $c = $c->where('vehicle_plate', $plate);
        }
        
      



        
        if (!empty($start and $end)) {

            $request->session()->put('start',$start);
            $request->session()->put('end',$end);
        
            if($start!=$end)
            {
              
                $c=$c->whereBetween('created_at', [$start, $end]);
            }
        
            else{
                $c = $c->where('created_at',$start);  
        
            }
         
        }

       
     
        
        
        
        
        $c = $c->get();
        $customers=$c;
        
        if(count($customers)>0){
        
        $number=count($customers);
           
        

      
            
            return view('admin.filterResult',['customers'=>$customers])->with('success', 'Your query returned');
                                                
                                                
            
        }
        
        
        return redirect()->back()->with('info', 'No result found for your query'); 

    }
}
