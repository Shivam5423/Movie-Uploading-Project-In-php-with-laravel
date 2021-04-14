<span style="color:green;font-size:19px;text-transform:capitalize;">
	<?php isset($msg['success'])?print($msg['success']):""; ?>
	</span>

<form action="{{route('roles.save')}}" method="POST">
	@csrf
	<p>
		Role :
		<input type="text" name="role" />
    <span style="color:red;font-size:19px;text-transform:capitalize;">
	<?php isset($myerrors['role'])?print($myerrors['role']):""; ?>
	</span>
	</p>
	<input type="submit" name="sub-btn" value="Add"/>
</form>

