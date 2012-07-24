<?php
/**
 * @author CazaresLuis
 * www.cazaresluis.com
 * @filesource ajaxPhp.php
 * @category ajax
 * 
 * Uso de las funciones date() y phpversion()
 */

$salida = '';
$seconds = 2;

// Verificar si existe la variable GET
if(isset($_GET['accion']))
{
	// Esperamos unos segundos
	// Esto es para probarlo de forma local
	// Debe eliminarse cuando subimos el script a internet
	sleep($seconds);
	
	// Obtener la efcha y hora del servidor
	if($_GET['accion'] == 'fechaServer')
	{
		$salida = date('d-m-Y h:m:i A');
	}
	// Obtener la versi�n de php instalada en el servidor
	elseif($_GET['accion'] == 'phpVersion')
	{
		$salida = phpversion();
	}
}

// Salida de datos
echo $salida;

?>