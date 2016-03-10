<?php

require('../view/ViewInicio.php');

$func = $_POST['func'];

switch ($func) {

	case 'login':
	
		ViewInicio::exibeInicio();

	break;

}
	

?>