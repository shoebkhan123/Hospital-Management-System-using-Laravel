<head>
		<link href="https://fonts.googleapis.com/css?family=Boogaloo" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Rokkitt" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
	<style type="text/css">
		#f{
			color: white;
		}
	th,td{
		font-family: 'Rokkitt', serif;
		font-size: 16px;

	}
	

	</style>
	<title>Patient Search Result Page</title>
</head>
<body>
		@include('hospitall.client.layouts.nav')

@if(session('success'))
		<div class="alert alert-danger">

			{{session('success')}}
		</div>
	@endif
	<div class="container">
<br>
		<h1 align="center" class="text-warning" style="font-family: 'Boogaloo', cursive;">Patient Search Result Page</h1>

    <hr>
    
    <br>
@if(isset($details))
<div class="container">
<table class="table table-striped task-table">
	<thead style="background-color: powderblue;">
		<tr>
			<th id="f">id</th>
			<th id="f">Name</th>
			<th id="f">DOB</th>
			<th id="f">Gender</th>
			<th id="f">Email</th>
			<th id="f">Address</th>
			<th id="f">Phone</th>
			<th id="f">Created_at</th>
			<th id="f">Edit</th>
			<th id="f">Delete</th>
			<th id="f">History</th>

		</tr>
	</thead>
	<tbody>
		@foreach($details as $clients)
		<tr>
			<td class="table-text table-warning">{{ $clients->id}}</td>
			<td>{{ $clients->name}}</td>
			<td>{{ $clients->dob}}</td>
			<td>{{ $clients->gender}}</td>
			<td>{{ $clients->email}}</td>
			<td>{{ $clients->address}}</td>
			<td>{{ $clients->phone}}</td>
			<td>{{ $clients->created_at}}</td>
			<td><a href="{{ url('edit', $clients->id)}}" class="btn btn-info" role="button">Edit</a>
</td><td><form action="{{ url('/destroy' , $clients->id ) }}" method="delete">
    {{ csrf_field() }}
    <button class="btn btn-danger">Delete</button>
</form>

</td><td><form action="{{ url('/history', $clients -> id) }}" >
    {{ csrf_field() }}
    <button class="btn btn-info">History</button>
    
</form>

</td>
		</tr>
		@endforeach
	</tbody>
</table>
@endif

</div>

</div>
 
</body>
