




@extends('layouts.master')

@section('content')







    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row ">
            <div class="col-lg-6 d-none d-lg-block bg-login-image">
              <img style="height:100%;width:100%" src="{{asset('frontend/img/r.jpg')}}" alt="">

            </div>
              <div class="col-lg-6 ">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Kwiyandikisha</h1>
                  </div>
                
            
                  <form  action="{{ route('register') }}" method="post" class="user">
                    @csrf



                    <div class="form-group">
                      <label for="user_type">Hitamo uwo uriwe</label>

                      <select onchange="admSelectCheck(this);"  name="user_type" class=" form-control   @error('user_typel') is-invalid @enderror">
                        <option class="text-danger"  value="" disabled selected>Hitamo uwo uriwe...</option>
                        <option value="1" id="voloOp">umuvolonteri</option>
                        <option id="agentOp" value="2">Agenti</option>
                      
                      <option id="motarOp" value="3">Motari</option>
                      </select>
                      @error('user_type')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>




                    <div class="form-group">
                      <label for="user_type">Izina</label>

                      <input name="first_name" type="text" class="form-control   @error('first_name') is-invalid @enderror" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Andika hano izina...">
                    
                      @error('first_name')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>


                    
                    <div class="form-group">
                      <label for="user_type">Irindi zina</label>

                      <input name="last_name" type="text" class="form-control   @error('last_name') is-invalid @enderror" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Andika hano irindi zina...">
                    
                      @error('last_name')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>


                    <div class="form-group">
                      <label for="user_type">Telefone</label>

                      <input name="phone_number" type="text" class="form-control   @error('phone_number') is-invalid @enderror" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Andika hano telefone...">
                    
                      @error('phone_number')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>



                  
                    <div class="form-group">
                      <label for="user_type">Akarere</label>

                      <select onchange="dropdown(this.value);" class="form-control @error('district') is-invalid @enderror" name="district" value="{{ old('district') }}" autocomplete="district" id="district">
                                
                        <option value="" selected disabled>Hitamo akarere</option>
                        @foreach($districts as $district)
                      <option value="{{$district->id}}">{{$district->name}}</option>
                          
                        @endforeach
                    
                    </select>


                     
                    </div>




                    <div class="form-group">
                      <label for="user_type">Umurenge</label>

                      <select onchange="cell_dropdown(this.value);" class="form-control @error('sector') is-invalid @enderror" name="sector" value="{{ old('sector') }}"  autocomplete="sector" id="sector">
                            
                        <option value=""selected disabled>Hitamo umurenge</option>

                      </select>
                      @error('sector')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>



                    <div class="form-group">
                      <label for="user_type">Akagali</label>


                      <select  class="form-control @error('cell') is-invalid @enderror" name="cell" value="{{ old('cell') }}"  autocomplete="cell" id="cell">
                            
                        <option value=""selected disabled>Hitamo umurenge</option>

                      </select>
                 
                      @error('cell')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>


                    <div class="form-group">
                      <label for="user_type">Imeli</label>

                      <input name="email" type="email" class="form-control   @error('email') is-invalid @enderror" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Andika hano imeli...">
                    
                      @error('email')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>

                   




                    <!-- motar -->
                    <div style="display:none" id="motar">


                      <div class="form-group">
                        <label for="user_type">Pulake y'ikinyabiziga</label>

                        <input name="plate" type="text" class="form-control   @error('plate') is-invalid @enderror" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="andika pulake hano...">
                      
                        @error('plate')
                                      <span class="invalid-feedback text-danger" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                      </div>
                    </div>


                       <!--end motar -->




                       
                    <!-- agent -->
                    <div style="display:none" id="agent">


                      <div class="form-group">
                        <label for="user_type">Kampani ukorera</label>

                        <input name="company" type="text" class="form-control   @error('company') is-invalid @enderror" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Andika hano kampani...">
                      
                        @error('company')
                                      <span class="invalid-feedback text-danger" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                      </div>
                    </div>


                       <!--end agent -->


                       <div class="form-group">
                         <label for="password"><center> Ijambobanga </center></label>
                        <input name="password" type="password" class="form-control   @error('password') is-invalid @enderror" name="password" placeholder="Andika Ijambobanga hano...." autocomplete="new-password">
                     
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                      </div>

                    <div class="form-group">
                      <label for="password"><center>Subiramo Ijambobanga </center></label>
                        <input id="password-confirm"  type="password" class="form-control" name="password_confirmation" placeholder="Andika Ijambobanga hano...."  required autocomplete="new-password">
                     
                     
                      </div>
  




            
                
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                    Iyandikishe
                    </button>
                   
                
                 
                  </form>
                  <hr>
                 
                  <div class="text-center">
                    <a class="small" href="/login">Usanzwe ufite conte?(injira)</a>
                  </div>

                  <hr>
                 
                  <div class="text-center">
                    <a class="small" href="/">Ahabanza</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
  <script>


function admSelectCheck(nameSelect)
{
    console.log(nameSelect);
    if(nameSelect){
        volo = document.getElementById("voloOp").value;
        motar = document.getElementById("motarOp").value;
        agent = document.getElementById("agentOp").value;
        if(volo == nameSelect.value){
            document.getElementById("motar").style.display = "none";
            document.getElementById("agent").style.display = "none";
        }
        else if (motar == nameSelect.value){
          document.getElementById("motar").style.display = "block";
            document.getElementById("agent").style.display = "none";
        }

        else{
          document.getElementById("motar").style.display = "none";
            document.getElementById("agent").style.display = "block";

        }
    }
   
}
</script>




 
  @endsection