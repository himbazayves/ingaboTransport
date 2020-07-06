




@extends('layouts.master')

@section('content')







    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                  </div>
                  @if(session()->has('errors'))

                  <div class="alert border-left-danger bg-light">
                  

                
                      
                       <li>	{{ session()->get('errors') }}</li>
                    
                  </div>
                 
                @endif
            
                  <form  action="{{ route('register') }}" method="post" class="user">
                    @csrf



                    <div class="form-group">
                      

                      <select  name="user_type" class=" form-control   @error('user_typel') is-invalid @enderror">
                        <option class="text-danger" style="text-danger" value="" disabled selected>Hitamo uwo uriwe...</option>
                        <option value="1">umuvolonteri</option>
                        <option value="2">Agenti</option>
                      
                      <option value="3">Motari</option>
                      </select>
                      @error('user_type')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>




                    <div class="form-group">
                      <input name="first_name" type="text" class="form-control form-control-user  @error('first_name') is-invalid @enderror" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Izina...">
                    
                      @error('first_name')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>


                    
                    <div class="form-group">
                      <input name="last_name" type="text" class="form-control form-control-user  @error('last_name') is-invalid @enderror" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Irindi zina...">
                    
                      @error('last_name')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>


                    <div class="form-group">
                      <input name="phone_number" type="text" class="form-control form-control-user  @error('phone_number') is-invalid @enderror" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Numero ya telefone...">
                    
                      @error('phone_number')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>



                    
                    <div class="form-group">
                      <input name="district" type="text" class="form-control form-control-user  @error('district') is-invalid @enderror" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Akarere....">
                    
                      @error('district')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>




                    <div class="form-group">
                      <input name="sector" type="text" class="form-control form-control-user  @error('sector') is-invalid @enderror" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Umurenge....">
                    
                      @error('sector')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>



                    <div class="form-group">
                      <input name="cell" type="text" class="form-control form-control-user  @error('cell') is-invalid @enderror" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Akagali....">
                    
                      @error('cell')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>


                    <div class="form-group">
                      <input name="email" type="email" class="form-control form-control-user  @error('email') is-invalid @enderror" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Emeli...">
                    
                      @error('email')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>

                   




                    <!-- motar -->
                    <div id="motar">


                      <div class="form-group">
                        <input name="plate" type="text" class="form-control form-control-user  @error('plate') is-invalid @enderror" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Pulake y'amoto...">
                      
                        @error('plate')
                                      <span class="invalid-feedback text-danger" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                      </div>
                    </div>


                       <!--end motar -->




                       
                    <!-- motar -->
                    <div id="agent">


                      <div class="form-group">
                        <input name="company" type="text" class="form-control form-control-user  @error('company') is-invalid @enderror" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Kampani ukoreramo...">
                      
                        @error('company')
                                      <span class="invalid-feedback text-danger" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                      </div>
                    </div>


                       <!--end motar -->


                       <div class="form-group">
                         <label for="password"><center> Umubarebanga </center></label>
                        <input name="password" type="password" class="form-control form-control-user  @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                     
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                      </div>

                    <div class="form-group">
                        <input id="password-confirm"  type="password" class="form-control form-control-user" name="password_confirmation" required autocomplete="new-password">
                     
                     
                      </div>
  




            
                
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Register
                    </button>
                    <hr>
                
                 
                  </form>
                  <hr>
                 
                  <div class="text-center">
                    <a class="small" href="/login">Login</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

 
  @endsection