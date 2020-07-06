<?php

namespace App\Http\Controllers;
use App\District;
use App\Sector;
use App\Cell;

use Illuminate\Http\Request;

class HelperController extends Controller
{
    public function find_district($id)
        {
            //$userData['data'] = DB::table('sectors')
            //$district=District::where('name', '=', $id)->get();
     
            $province_id= Province::where('name','=',"$id")
           
            ->latest()
            ->first('id');
            $province_id =  $province_id['id'];
                    
           // $id=$district->id;
            $userData['data']= District::where('province_id', '=', $province_id)
           
            ->orderBy('name', 'asc')
            ->get();
        
         echo json_encode($userData);
         exit;
        }




        public function find_sector($id)
        {
            //$userData['data'] = DB::table('sectors')
            //$district=District::where('name', '=', $id)->get();
     
          //  $district_id= District::where('name', '=', $id)
          $district_id=District::find($id)->id;
            
           
                    
           // $id=$district->id;
            $userData['data']= Sector::where('district_id', '=', $district_id)
           
            ->orderBy('name', 'asc')
            ->get();
        
         echo json_encode($userData);
         exit;
        }
     


        
        public function find_cell($id)
        {
            //$userData['data'] = DB::table('sectors')
            //$district=District::where('name', '=', $id)->get();
     
            $sector= Sector::find($id)->id;
            
                    
           // $id=$district->id;
            $userData['data']= Cell::where('sector_id', $sector)
           
            ->orderBy('name', 'asc')
            ->get();
        
         echo json_encode($userData);
         exit;
        }
     





}
