<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">

	@include('hospitall.client.layouts.nav')

	<title>Home Page</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css')}}">

</head>
<body style="background-image: url('http://www.munsonhealthcare.org/upload/MediaGallery/Albums/101/Items/28231HomepageGraphics_CAD_ER.jpg'); background-repeat: no-repeat; background-size: cover;">
<div class="container">
	@if(session('success'))
		<div class="alert alert-warning">

			{{session('success')}}
		</div>
	@endif
	<br>
<div align="center">
 <h1 style="font-family: 'Roboto Slab', serif;
color: midnightblue ; " ><b>Future strong Memorial Hospital</b></h1>
 <p style="font-size: 20px;" class=""><b>Fast. Friendly. Accurate. For all patients.</b></p>
 </div>
 <div class="container">
 @include('hospitall.client.layouts.timetable');
  
</div>

<footer class="mastfoot mt-auto">
        <div class="inner">
          <p align="center" class="text-danger">Copyright by <span><i class="fas fa-copyright"></i>

</span> 2018 <a href="#"></a>, by <a href="#">Tanya Hospitals</a></p>
        </div>
      </footer>
</body>
</html>