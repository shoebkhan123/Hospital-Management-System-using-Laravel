<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Boogaloo" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Rokkitt" rel="stylesheet">

	<title>patients All Record</title>
@include('hospitall.client.layouts.nav')

<style type="text/css">
	th,td, h1, h6, p{
		
    font-family: "Sans-serif", Times, serif;

	}
</style>
</head>
<body>



	<div class="container">
		@if(session('msg'))
		<div class="alert alert-success">

			{{session('msg')}}
		</div>
	@endif

	<div class="container">
		@if(session('success'))
		<div class="alert alert-danger">

			{{session('success')}}
		</div>
	@endif
		<!--
		<div class="text-center jombotron text-danger"><h1 class="font-weight-bold">patient all Record</h1></div><br>
		  <form method="get" action="client/search"><input type="text"><input type="submit" value="Search"></form>
		 -->
<div class="text-center text-danger">
<h1 class="">Patients Record</h1>
<hr>
		<h6><b>Total {{ $rd->total() }} Patients Record!</b></h6>
	</div>
	<p><b>{{ $rd->count() }} Patients records in this page.</b></p>
		<table class="table table-hover">
			</div>
			<thead class="text-info"><tr class = ""><th>ID</th> <th>Name</th> <th>DOB</th> <th>Gender</th> <th>Email</th><th>Adress</th><th>Phone No</th><th>Visitng date and Time</th><th>Edit</th><th>Delete</th><th>History</th></tr></thead>
		@foreach($rd as $i)
		<tbody>
		<tr>
			<td class="text-warning">{{$i->id}}</td><td >{{$i->name}}</td><td>{{$i->dob}}</td><td>{{$i->gender}}</td><td>{{$i->email}}</td><td>{{$i->address}}</td><td>{{$i->phone}}</td><td>{{$i->created_at}}</td><td><a href="{{ url('edit', $i->id)}}" class="btn btn-info" role="button">Edit</a>
</td><td><form action="{{ url('/destroy' , $i->id ) }}" method="delete">
    {{ csrf_field() }}
    <button style="color: white; background-color: red; font-size: 20px;">X</button>

</form>

</td>
<td><form action="{{ url('/history', $i -> id) }}" >
    {{ csrf_field() }}
    <button class="btn btn-info">History</button>
    
</form>

</td>
</tbody>

		@endforeach
		</table>
		<div  class="col-lg-4 col-lg-offset-4">
		
		{{ $rd->links() }}
		</div>
	</div>
	
</body>
</html>
