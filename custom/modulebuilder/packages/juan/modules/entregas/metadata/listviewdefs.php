<?php
$module_name = 'juan_entregas';
$listViewDefs [$module_name] = 
array (
  'NOMBRE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_NOMBRE',
    'width' => '10%',
    'default' => true,
  ),
  'FECHA' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHA',
    'width' => '10%',
    'default' => true,
  ),
  'TIPO' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_TIPO',
    'width' => '10%',
    'default' => false,
  ),
  'LUAGARES' => 
  array (
    'type' => 'dynamicenum',
    'studio' => 'visible',
    'label' => 'LBL_LUAGARES',
    'width' => '10%',
    'default' => false,
  ),
);
;
?>
