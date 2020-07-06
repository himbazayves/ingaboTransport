@extends('layouts.master')

@section('content')
  <!-- Page Wrapper -->
  <div id="wrapper">

    @include('admin.partials.menu')
  

      
        <div class="container-fluid">

      <div class="card">

     
        <div class="card-body">

            <a href="{{route('admin.customers')}}" class="btn btn-primary">Back to travels list</a>   <a id="btPrint" onclick="createPDF()" class="d-none d-sm-inline-block btn btn-sm btn-primary text-light shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>

        </div>
      </div>
         

            @if($customers->count()!=0)
         
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Travels </h6> 
                </div>
                <div  class="card-body">
                  <div id="tab" class="table-responsive">
                    <table  class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                            <th>First name</th>
                            <th>Last name</th>
                            <th>Phone number</th>
                            <th>District</th>
                            <th>Vehicle plate</th>
                            <th>Destination</th>
                            <th>Arrival Time</th>
                           
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                            <th>First name</th>
                            <th>Last name</th>
                            <th>Phone number</th>
                            <th>District</th>
                            <th>Vehicle plate</th>
                            <th>Destination</th>
                            <th>Arrival Time</th>
                         
                        </tr>
                      </tfoot>
                      <tbody>


                        @foreach($customers as $customer)
                        <tr>
                            <td>{{$customer->first_name}}</td>
                            <td>{{$customer->last_name}}</td>

                            <td>{{$customer->phone_number}}</td>
                            <td>{{$customer->district}}</td>
                            <td>{{$customer->vehicle_plate}}</td>
                            <td>{{$customer->destination}}</td>

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



      <script>
        function createPDF() {
            var sTable = document.getElementById('tab').innerHTML;
    
            var style = "<style>";
            style = style + "table {width: 100%;font: 17px Calibri;}";
            style = style + "table, th, td {border: solid 1px #DDD; border-collapse: collapse;";
            style = style + "padding: 2px 3px;text-align: center;}";
            style = style + "</style>";
    
            // CREATE A WINDOW OBJECT.
            var win = window.open('', '', 'height=700,width=700');
    
            win.document.write('<html><head>');
            win.document.write('<title>Report </title>');   // <title> FOR PDF HEADER.
            win.document.write(style);          // ADD STYLE INSIDE THE HEAD TAG.
            win.document.write('</head>');
            win.document.write('<body>');
            win.document.write(sTable);         // THE TABLE CONTENTS INSIDE THE BODY TAG.
            win.document.write('</body></html>');
    
            win.document.close(); 	// CLOSE THE CURRENT WINDOW.
    
            win.print();    // PRINT THE CONTENTS.
        }
    </script>

  @endsection  