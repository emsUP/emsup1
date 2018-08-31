<?php
session_start(); //Inicia sesion para obtener la variable de tipo SESSION que contiene la info que va en el word

//crear encabezados para generar WORD
if (isset($_SESSION["docword"])) {
	header("Content-Type: application/vnd.msword");
	header("Expires: 0"); //No cache
	header("Cache-Control: must-revalidate, post-check=0, pre-check=0");//no cache
	header("content-disposition: attachment;filename=reporteDeIngresoDatos.doc");
}

//A partir de aqui todo lo que se imprima abajo sera mostrado en el word

echo $_SESSION["docword"];//Conitiene la informacion que se imprime en word

?>