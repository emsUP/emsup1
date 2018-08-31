
<?php
if (!defined('sugarEntry') || !sugarEntry)
	die('No es valido');

class HookClase2 {
	function funcionHook2(&$bean, $event, $arguments) {		

		//session_start();
		if ($bean->nombre=="") {
			$_SESSION["estadoEntrega"]="registro_nuevo";
		}		
		else{
			$_SESSION["estadoEntrega"]="registro_actualizado";
		}		

		//*************************************************************************************************+//

		$GLOBALS["log"]->fatal($_SESSION["estadoEntrega"]);
		//exit();
	}
}

?>
