<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future.	'verifica si es nuevo registro',

$hook_version = 1; 
$hook_array = Array(); 
// position, file, function 
$hook_array['before_save'] = Array();
$hook_array['before_save'][] = Array(
	1,
	'custom/modules/juan_entregas/LogicHooks/hookVerifica.php',
	'HookClase2',
	'funcionHook2');

$hook_array['after_save'] = Array();
$hook_array['after_save'][] = Array(
	2,
	'Imprime con echo',
	'custom/modules/juan_entregas/LogicHooks/hookDePrueba.php',
	'HookClase',
	'funcionHook');

/*$hook_array['before_save'][] = Array(
	2,
	'Verifica el campo vacio',
	'custom/modules/juan_entregas/LogicHooks/hookDePruebaJS.php',
	'HookClase',
	'funcionHook'); */

$GLOBALS["log"]->fatal("hola log");
/*
$js_groupings[] = $newGrouping = array(
    'custom/file1.js' => 'custom/modules/juan_entregas/LogicHooks/archivo.js',
);
*/

?>