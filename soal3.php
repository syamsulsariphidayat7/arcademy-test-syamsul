<?php 
	
	function gambar($jumlah='')
	{
		$jumlah = $jumlah;

		if ($jumlah % 2 == 1) {
			for ($i=1; $i <= $jumlah; $i++) { 
				if ($i % 2 == 1) {
					@$show.='=';
				}else{
					@$show.='*';
				}
			}

			for ($i=1; $i <= $jumlah ; $i++) { 
				echo $show;
				echo "<br>";
			}
		}else{
			$hasil = "harus ganjil";
		}		
	}

	print_r(gambar(9));
?>