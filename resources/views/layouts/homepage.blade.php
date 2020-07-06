<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>IngaboMoto</title>
	<link rel="icon" href="{{asset('frontend/img/Fevicon.png" type="image/png')}}">

  <link rel="stylesheet" href="{{asset('frontend/vendors/bootstrap/bootstrap.min.css')}}">
  

  <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
 <style>

.was-validated :invalid ~ .invalid-feedback,
.was-validated :invalid ~ .invalid-tooltip,
.is-invalid ~ .invalid-feedback,
.is-invalid ~ .invalid-tooltip {
  display: block;
}

.was-validated .form-control:invalid,
.form-control.is-invalid {
  border-color: #e3342f;
  padding-right: calc(1.6em + 0.75rem);
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23e3342f' viewBox='0 0 12 12'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23e3342f' stroke='none'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: right calc(0.4em + 0.1875rem) center;
  background-size: calc(0.8em + 0.375rem) calc(0.8em + 0.375rem);
}

.was-validated .form-control:invalid:focus,
.form-control.is-invalid:focus {
  border-color: #e3342f;
  box-shadow: 0 0 0 0.2rem rgba(227, 52, 47, 0.25);
}

 </style>
</head>
<body>

  <!--================ Header Menu Area start =================-->
  
  <!--================Header Menu Area =================-->


  
  @yield('content')

 
		
 
  <footer class="margin-top:100px" class="fixed-bottom">
		<p>


<center>      <strong> <a href="wwww.rurarerainc.rw"> Powered by <img style="height:100px; width:100px"  src="{{asset('img/logo.jpg')}}" alt="">  Rurarera Inc </a> </strong> </center>

        </p>
				
			
	</footer>




  <script src="{{asset('frontend/vendors/jquery/jquery-3.2.1.min.js')}}"></script>
  <script src="{{asset('frontend/vendors/bootstrap/bootstrap.bundle.min.js')}}"></script>

</body>
</html>