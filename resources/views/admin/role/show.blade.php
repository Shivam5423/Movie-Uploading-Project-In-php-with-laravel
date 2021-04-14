<a href="{{route('roles.create')}}">Add New Role</a>

<h1>All Available Roles Here </h1>

<table border="1" width="100%" cellspacing="0" cellpadding="6" style="text-align:center;">
    <tr>
    	<th>Id</th>
    	<th>Role</th>
    	<th>Created Date</th>
    	
    	<th>Edit</th>
    	<th>Delete</th>
    </tr>

@foreach ($roles as $role)
    <tr>
    	<td>{{$role->id}}</td>
    	<td>{{$role->role}}</td>
    	<td>{{$role->created_at}}</td>
    	
    	<td><a href="">Edit</a></td>
    	<td><a href="">Delete</a></td>
    </tr>
 @endforeach
</table>
