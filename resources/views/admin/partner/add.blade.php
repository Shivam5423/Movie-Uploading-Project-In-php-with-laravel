

<form action="{{route('partner.save')}}" method="POST" 
enctype="multipart/form-data">
	@csrf
	<p>
		Parnter Name :<input type="text" name="name" />
	</p>

	<p>
		Parnter Description :
		<textarea name="description"></textarea>
	</p>

	<p>
		Parnter Since :
		<input type="date" name="since" />
	</p>

	<p>
		Select Picture :<input type="file" name="partner_pic" />
	</p>
	<input type="submit" name="sub-btn" value="Add Partner"/>
</form>

