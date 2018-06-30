
<h1 class = "text-warning" align="center">Pateint History</h1>
<hr>
<table class="table table-hover">
		<thead>
			<tr>
				<th>diseases types</th>
				<th>Answer</th>
				<th>Created AT</th>
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



