<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Agent;
use App\Volonteer;
use App\Motar;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Alert;
use Auth;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */


    public function register(Request $request){
  
        $request->validate([
             
            'first_name'=>'required',
            'last_name'=>'required',
            'user_type'=>'required',
            'district'=>'required',
            'sector'=>'required',
            'cell'=>'required',
            'phone_number'=>'required',
           //'name' => 'required', 'string', 'max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',


        ]);

        if($request->user_type==2){

            $request->validate([
             
                'company'=>'required',
              
    
    
            ]);

           $agent= new Agent;
           $agent->first_name=$request->first_name;
           $agent->last_name=$request->last_name;
           $agent->phone_number=$request->phone_number;
           $agent->district=$request->district;
           $agent->sector=$request->sector;
           //$agent->cell=$request->cell;
           $agent->company=$request->company;

           $agent->save();

           if($agent){
               $user = new User;
               $user->email=$request->email;
               $user->password=Hash::make($request->password);
               $user->userable_type="App\Agent";
               $user->userable_id=$agent->id;
               $user->save();

           }


        }

       elseif ($request->user_type==3){

            $request->validate([
             
                'plate'=>'required',
              
    
    
            ]);



            $motar= new Motar;
            $motar->first_name=$request->first_name;
            $motar->last_name=$request->last_name;
            $motar->phone_number=$request->phone_number;
            $motar->district=$request->district;
            $motar->sector=$request->sector;
           // $motar->cell=$request->cell;
            $motar->plate=$request->plate;
 
            $motar->save();
 
            if($motar){
                $user = new User;
                $user->email=$request->email;
                $user->password=Hash::make($request->password);
                $user->userable_type="App\Motar";
                $user->userable_id=$motar->id;
                $user->save();
 
            }
        }


        else{

            $volo= new Volonteer;
            $volo->first_name=$request->first_name;
            $volo->last_name=$request->last_name;
            $volo->phone_number=$request->phone_number;
            $volo->district=$request->district;
            $volo->sector=$request->sector;
           // $volo->cell=$request->cell;
            
            $volo->save();
 
            if($volo){
                $user = new User;
                $user->email=$request->email;
                $user->password=Hash::make($request->password);
                $user->userable_type="App\Volonteer";
                $user->userable_id=$volo->id;
                $user->save();
 
            }

        }

        Auth::login($user,true);

      
        return redirect($this->redirectPath('/home'))->with('success', 'Kwiyandikisha byakunze!');

    }
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
