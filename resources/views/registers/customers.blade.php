@extends('layouts.master')

@section('content')
  <!-- Page Wrapper -->
  <div id="wrapper">

    @include('registers.partials.menu')
  

      
        <div class="container-fluid">

            <div class="alert alert-warning">
<center> Nta mugenzi numwe wari wandika </center>

<p>  <center> <a href="{{route('registers.newCustomer')}}" class="btn btn-success"> Kanda hano wandike Umugenzi mushya</a> </center></p>

            </div>
         

            @if($customers->count()!=0)
            <a href="{{route('registers.newCustomer')}}" class="btn btn-success"> Umugenzi mushya</a>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Abagenzi </h6> 
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                            <th>Izina</th>
                            <th>Irindi zina</th>
                            <th>Igihe yaziye</th>
                           
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                            <th>Izina</th>
                            <th>Irindi zina</th>
                            <th>Igihe yaziye</th>
                         
                        </tr>
                      </tfoot>
                      <tbody>


                        @foreach($customers as $customer)
                        <tr>
                            <td>{{$customer->first_name}}</td>
                            <td>{{$customer->last_name}}</td>
                            <td>{{$customer->arrivalTime}}</td>
                           
                          </tr>
                         
    
                        @endforeach
                        
                        </tbody>
                    </table>
                  </div>
                </div>
              </div>

              @endif

        </div>
     

      </div>


  @endsection  