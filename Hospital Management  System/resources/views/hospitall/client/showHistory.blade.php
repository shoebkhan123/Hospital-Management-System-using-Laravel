@extends('hospitall.client.layouts.main')

@section('content')
	<br>
	<h1 class = "text-warning" align="center">Pateint History</h1>
	<div class="jumbotron">

	<h4>Patient ID: {{$id}}</h4>
	<h4>Ptient Name: </h4>
	</div>
	<br>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>diseases types</th>
				<th>Answer</th>
				<th>Registered At</th>
				<th>Visit ID</th>

			</tr>
		</thead>

		<tbody>
			@foreach($rd as $i)
				<tr>
					<td>{{$i->types}}</td>
					<td>{{$i->answer}}</td>
					<td>{{$i->createdAt}}</td>
					<td>{{$i->visitId}}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@include('hospitall.client.deseaseForm')
	  
@endsection