<!DOCTYPE html>
<html>
<head>
	<title>Edit The Role</title>
</head>
<body>
	<h1>Edit Role</h1>
 
	@foreach($role as $key)
<form action="update" method="post">
	@csrf
	<input type="text" name="id" value="{{$key->id}}">
	<p>
	    <input type="text" name="role" value="{{$key->role}}"/>
    </p>
	<input type="submit" name="edit-btn" value="EDIT"/>
</form>
@endforeach

</body>
</html>