<?php 

	function data($value1='',$value2='')
	{
		sort($value1);
		sort($value2);

		for ($i=0; $i < count($value1); $i++) { 
			echo("Huruf : ".$value1[$i]);
			echo "<br>";
		}
		echo "========";
		echo "<br>";
		for ($i=0; $i < count($value2); $i++) { 
			echo("Angka : ".$value2[$i]);
			echo "<br>";
		}
	}

	print_r(data(['b','a','c'],['2','1']));

?>