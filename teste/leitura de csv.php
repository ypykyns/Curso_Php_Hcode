<?php

  $arquivo = "teste.csv";

 
   $i = 0;
   if (file_exists($arquivo)) {

	   $file = fopen($arquivo, 'r');

		while (($row = fgetcsv($file)) !== FALSE) {

			$info = $row[0];  	

		   	$i++;

		   	echo $info."<br>";
		}

	   	fclose($file);
	   	#unlink($arquivo); 	  
	}


?>
