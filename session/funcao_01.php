<?php 

require_once("config.php");

// mostra onde esta sendo salvo o arquivo temp da sessão
echo session_save_path();


var_dump(session_status());

echo "<br>";
echo "<br>";
echo "<br>";



switch (session_status()) {
	case PHP_SESSION_DISABLED:

		echo "as sessões estiverem desabilitadas";		
		break;

	case PHP_SESSION_NONE:

		echo "as sessões estiverem habilitadas, mas nenhuma exitir";		
		break;	

	case PHP_SESSION_ACTIVE:

		echo "as sessões estiverem habilitadas, e uma exitir";		
		break;
}

 
 ?>