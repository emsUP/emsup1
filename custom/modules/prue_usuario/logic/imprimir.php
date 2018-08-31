<?php 



if(!defined('sugarEntry') || !sugarEntry) die ('Not A Valid Entry Point');


require_once dirname(__FILE__).'/PHPWord-master/src/PhpWord/Autoloader.php';
\PhpOffice\PhpWord\Autoloader::register();

use PhpOffice\PhpWord\TemplateProcessor;


class Imprimir {

	function impri($bean, $event, $arguments){
	
		$GLOBALS["log"]->fatal("Mensaje despues de guardar");


		// Conectarse a y seleccionar una base de datos de MySQL llamada ems
// Nombre de host: 127.0.0.1, nombre de usuario: root, contraseña: vacia, bd: ems
$mysqli = new mysqli('127.0.0.1', 'root', '', 'ems2');

// ¡Oh, no! Existe un error 'connect_errno', fallando así el intento de conexión
if ($mysqli->connect_errno) {
    // La conexión falló. ¿Que vamos a hacer? 
    // Se podría contactar con uno mismo (¿email?), registrar el error, mostrar una bonita página, etc.
    // No se debe revelar información delicada

    // Probemos esto:
    echo "Lo sentimos, este sitio web está experimentando problemas.";

    // Algo que no se debería de hacer en un sitio público, aunque este ejemplo lo mostrará
    // de todas formas, es imprimir información relacionada con errores de MySQL -- se podría registrar
    echo "Error: Fallo al conectarse a MySQL debido a: \n";
    echo "Errno: " . $mysqli->connect_errno . "\n";
    echo "Error: " . $mysqli->connect_error . "\n";
    
    // Podría ser conveniente mostrar algo interesante, aunque nosotros simplemente saldremos
    exit;
}


// Ahora, vamor a usuarios  y a imprimir sus nombres en una lista.

$sql = "SELECT * FROM prue_usuario";
if (!$resultado = $mysqli->query($sql)) {
    echo "Lo sentimos, este sitio web está experimentando problemas.";
    exit;
}

// Imprimir nuestros cinco usuarios aleatorios en una lista, y enlazar cada uno
echo "<ul>\n";
while ($usuario = $resultado->fetch_assoc()) {
  
    $name= $usuario['name'];
    $description= $usuario['description'];
   

    echo $name.' | '.$description;
    echo "<br>";


}
echo "</ul>\n";

// El script automáticamente liberará el resultado y cerrará la conexión
// a MySQL cuando finalice, aunque aquí lo vamos a hacer nostros mismos
$resultado->free();
$mysqli->close();



include 'archivo.php';



$templateWord = new TemplateProcessor('plantilla.docx');
 
$nombre = "Sandra S.L.";
$direccion = "Mi dirección";
$municipio = "Mrd";
$provincia = "Bdj";
$cp = "02541";
$telefono = "24536784";


// --- Asignamos valores a la plantilla
$templateWord->setValue('nombre_empresa',$nombre);
$templateWord->setValue('direccion_empresa',$direccion);
$templateWord->setValue('municipio_empresa',$municipio);
$templateWord->setValue('provincia_empresa',$provincia);
$templateWord->setValue('cp_empresa',$cp);
$templateWord->setValue('telefono_empresa',$telefono);

// --- Guardamos el documento
$templateWord->saveAs('Documento03.docx');

// header("Content-Disposition: attachment; filename=Documento02.docx; charset=iso-8859-1");
// echo file_get_contents('Documento02.docx');






		exit();

	}

}

?>