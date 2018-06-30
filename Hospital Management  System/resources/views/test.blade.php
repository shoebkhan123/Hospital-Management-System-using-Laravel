This is a Test file

@foreach($list as $data)
	<tr>
		<td>{{$data['id']}}</td>
		<td>{{$data['name']}}</td>
		<td>{{$data['dob']}}</td>
	</tr>
@endforeach
</table>

<hr>
<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>
<body>

<input type="button" name="" id="add" value="ADD">
<input type="text" name="" id="list">

<script>
	$(function()
{
    $('#add').click(function()
    {
    	$(#list).clone().attr('id', 'list' + $(this).index()).inserAfter('#list');
    })
})
</script>
</body>
</html>
