<?php

	function randstring() {
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < 50; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }
	    return $randomString;
	}


	$randomString1 = array (
	  array("h1","HELLO THERE"),
	  array("span","Hash"),
	  array("p","Hash"),
	  array("h1","Hash")
	);

	for($i = 0 ; $i < 4 ; $i++) {
		$var = randstring();
		$randomString[$i][0] = $randomString1[$i][0];
		$randomString[$i][1] = $randomString1[$i][1];
		$randomString[$i][2] = $var;
	}
    
?>