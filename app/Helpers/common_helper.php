<?php

function check_session(){

	 	 $session = session('admin','expired');
	 	
	 	if($session =='expired'){
	 		echo "<script>window.location.href='/admin/'</script>";
	 	}
}
