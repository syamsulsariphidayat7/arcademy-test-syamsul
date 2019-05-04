<?php 
	
	function validasi($user=null,$pass=null)
	{		
		$username = $user;
		$password = $pass;				

		if (!preg_match("/^[a-z]*$/", $username)) {
			echo $pesan="username Hanya huruf kecil dan tanpa symbol yang dibolehkan";die();
		}elseif (strlen($username) != 8) {
			echo $pesan="username harus 8 karakter";die();			
		}

		if (!preg_match("/^[a-zA-Z0-9 ]*$/", $password)) {
			echo $pesan="kombinasi huruf kecil, besar, angka, dan spasi";die();
		}elseif (strlen($password) < 8) {
			echo $pesan="password kurang dari 8 karakter";die();			
		}
		else{			
			echo $pesan = 'ok';
		}		
	}

	print_r(validasi('bkkkopkp','abhU7uu '));

?>