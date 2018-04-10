<h1>Welcome to the Module Page</h1>


<?php
	if($username=="root"&&$password=="root")
	{
		
		echo $page;
			
	}
	else{
		echo "Username or Password incorrect";
	}

?>