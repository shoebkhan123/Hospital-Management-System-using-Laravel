<title>Patient Search page
</title>
<link href="https://fonts.googleapis.com/css?family=Aldrich" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Kavivanar&amp;subset=tamil" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Boogaloo" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
	<style type="text/css">
		#f{
			color: white;
		}
	</style>
<body style="background-image: url('http://static.tumblr.com/de007354a0218a3e9a5385b5c700f949/gb8rzxa/TTEmi2ut1/tumblr_static_afi-trees-fog-brown.jpg'); background-repeat: no-repeat; background-size: cover;">
		@include('hospitall.client.layouts.nav')


	<div class="container">
		@if(session('success'))
		<div class="alert alert-danger">

			{{session('success')}}
		</div>
	@endif
		<h1 align="center" class="text-warning" style="font-family: 'Boogaloo', cursive;">Patient Search page</h1>
		<hr>
	<form action="{{URL::to('/search')}}" method="POST" role="search">
          {{ csrf_field() }}
          <br><br>
             <div class="input-group">
               <input type="search" name="q" placeholder="Search Here!!">
                 <button type="submit" class="btn btn-danger"><span><i class="fas fa-search"></i>

Search</span></button>
                <span><h3 class="text-info" style="color: red; font-family: 'Kavivanar', cursive; margin-left: 10px;">Use for Search <b>Id</b> or <b>Name</b> or <b>Phone no</b> or <b>Gender</b>.</h3></span>
                <br>
            </div>
    </form>
                    <h5 style="color: red; font-family: 'Kavivanar', cursive;
">*Note:<span > For perfect search, search by Id only.</span></h5>

    <hr>
    <br>
@if(isset($details))
<div class="container">
<table class="table table-striped task-table">
	<thead style="background-color: black;">
		<tr>
			<th id="f">id</th>
			<th id="f">Name</th>
			<th id="f">DOB</th>
			<th id="f">Gender</th>
			<th id="f">Email</th>
			<th id="f">Address</th>
			<th id="f">Phone</th>
			<th id="f">Created_at</th>

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
			
		</tr>
		@endforeach
	</tbody>
</table>

@endif

</div>
</div>

</body>
