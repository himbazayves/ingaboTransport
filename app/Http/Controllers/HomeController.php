<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Agent;
use App\Customers;
use App\Volonteer;
use App\Motar;
use Alert;

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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

    if(Auth::user()->userable_type=="App\Motar"){

        return redirect()->route('registers.index')->with('success','Winjiye muri conte yawe');
    }



    if(Auth::user()->userable_type=="App\Agent"){

        return redirect()->route('registers.index')->with('success','Winjiye muri conte yawe');
    }



    if(Auth::user()->userable_type=="App\Volonteer"){

        return redirect()->route('registers.index')->with('success','Winjiye muri conte yawe');
    }


    if(Auth::user()->userable_type=="App\admin"){

        return redirect()->route('admin.index')->with('success','Winjiye muri conte yawe');
    }


}
}
