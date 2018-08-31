<?php
$module_name = 'prue_productos';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'includes'=>
      array(
        0=>
        array(
          'file'=>'custom\modules\prue_productos\js\uno.js'          
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'precio',
            'label' => 'LBL_PRECIO',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'categoria',
            'studio' => 'visible',
            'label' => 'LBL_CATEGORIA',
          ),
          1 => 'description',
        ),
      ),
    ),
  ),
);
;
?>
