
@extends('layouts.master')

@section('content')
 
  <div id="wrapper">

    @include('registers.partials.menu')
       

      
        <div class="container-fluid">

        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">

              <div class="alert alert-success border-left-success"> Urakaza neza {{Auth::user()->userable->first_name}}!</div>
       
<div class="alert"><center><a class="btn btn-success"  href="{{route('registers.newCustomer')}}">Kanda hano wandike umugenzi </a></center> </div>
         
              </div>
            </div>
          </div>
        </div>

           
          


        </div>
       

      </div>
      
  @endsection  