<?php

class ViewInicio{
	public static function exibeInicio(){
		echo file_get_contents('../../mvc/view/pages/inicio.html');
	}
}

?>