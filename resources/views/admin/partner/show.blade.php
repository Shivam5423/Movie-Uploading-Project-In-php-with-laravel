
<h1>Show All the Partners</h1>
<hr/>

@if(count($partners)>0)
  @foreach($partners as $partner)
     <p> {{$partner->name}} </p>
	<p> {{$partner->description}} </p>
	<p> {{$partner->since}} </p>
	For Path : storage/app
	<!-- <p> {{str_replace('public','storage',$partner->partner_pic)}} /></p>
	<p> <img src="/{{str_replace('public','storage',$partner->partner_pic)}}" /></p> -->
    
	For Path : storage/app/public

	<p> <img src="/storage/{{$partner->partner_pic}}" /></p>

  @endforeach
@else
    No Parntership
@endif



