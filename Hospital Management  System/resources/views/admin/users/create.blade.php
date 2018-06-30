<form method="POST" action = '/users'>
	{{ csrf_field() }}


	<input type="text" name="name">
	<input type="text" name="email">
	<input type="text" name="password">
<input type="submit" value="Create">
</form>