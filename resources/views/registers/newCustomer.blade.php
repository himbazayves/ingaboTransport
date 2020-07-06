
@extends('layouts.master')

@section('content')
 
  <div id="wrapper">

    @include('registers.partials.menu')
       

      
        <div class="container-fluid">

          <div class="alert bg-light border-left-success"> <center> <h1 class="h3 mb-4 text-gray-800">Umugenzi mushya</h1></center></div>
       
         

           
          <div class="row justify-content-center">
           
            <div class="col-lg-6">


              <div class="card">

                <div class="card-body">

                <form method="post" action="{{route('registers.storeNewCustomer')}}">
                  @csrf


                    <div class="form-group">
                      <label for="last_name">Izina</label>
                      <input name="first_name" type="text" class="form-control form-control-user  @error('first_name') is-invalid @enderror" value="{{ old('first_name') }}"  autocomplete="first_name" autofocus placeholder="Irindi zina...">
                    
                      @error('first_name')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>


                    <div class="form-group">
                      <label for="last_name">Irindi Izina</label>
                      <input name="last_name" type="text" class="form-control form-control-user  @error('last_name') is-invalid @enderror" value="{{ old('last_name') }}"  autocomplete="last_name"  placeholder="Irindi zina...">
                    
                      @error('last_name')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>



                    <div class="form-group">
                      <label for="phone_number">Numero ya telefone</label>
                      <input name="phone_number" type="text" class="form-control form-control-user  @error('phone_number') is-invalid @enderror" value="{{ old('phone_number') }}"  autocomplete="last_name"  placeholder="Irindi zina...">
                    
                      @error('phone_number')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>




                    <div class="form-group">
                      <label for="district">Akarere</label>
                      <input name="district" type="text" class="form-control form-control-user  @error('district') is-invalid @enderror" value="{{ old('district') }}"  autocomplete="district"  placeholder="Irindi zina...">
                    
                      @error('district')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>


                    @if(Auth::user()->userable_type=="App\Motar")

                  <input type="hidden" name="plate" value="{{Auth::user()->userable->plate}}">

                  @else




                  <div class="form-group">
                    <label for="plate">Pulake y'imodoka</label>
                    <input name="plate" type="text" class="form-control form-control-user  @error('plate') is-invalid @enderror" value="{{ old('plate') }}"  autocomplete="plate"  placeholder="Pulake...">
                  
                    @error('plate')
                                  <span class="invalid-feedback text-danger" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                  </div>




               @endif


               <div class="form-group">
                <label for="destination">Aho agiye</label>
                <input name="destination" type="text" class="form-control form-control-user  @error('destination') is-invalid @enderror" value="{{ old('destination') }}"  autocomplete="arrivalTime"  placeholder="Pulake...">
              
                @error('destination')
                              <span class="invalid-feedback text-danger" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
              </div>


               <div class="form-group">
                <label for="arrivalTime">Igihe yaziye</label>
                <input name="arrivalTime" type="datetime-local" class="form-control form-control-user  @error('arrivalTime') is-invalid @enderror" value="{{ old('arrivalTime') }}"  autocomplete="arrivalTime"  placeholder="Pulake...">
              
                @error('arrivalTime')
                              <span class="invalid-feedback text-danger" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
              </div>




              <button type="submit" class="btn btn-primary">Bika</button>
                  


                  </form>
                </div>
              </div>

            </div>

          </div>


        </div>
       

      </div>
      
  @endsection  