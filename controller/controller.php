<?php
	function check_name(){
		$check = $_POST['nombre'];
		$numbers = preg_match_all('/[a-z]/i', $check);
		if (strlen($numbers) == strlen($_POST('nombre'))) {
			# code
			echo "AAAAA";
		} else {
			echo "BBBB";
		}
	}

check_name();
echo "afhvgsbhkd";
?>