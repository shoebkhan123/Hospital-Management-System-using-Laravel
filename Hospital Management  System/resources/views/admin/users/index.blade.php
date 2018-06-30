@foreach($users as $user)
	<li>{!! $user['name'] !!} age:{!! $user['age'] !!} from {!! $user['place'] !!}
	</li>

	{{ $user['name'] }}
@endforeach