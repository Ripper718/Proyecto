<?php
include('db.php');
//DATOS DE LA BASE DE DATOS
$servername ="localhost";
$username = "root";
$password = "";
$database = "em";

//LE AGREGAMOS FECHA DEL DIA AL RESPALDO
$fecha = date("d_m_Y");

//EL ARCHIVO SALDRA CON EL NOMBRE DE LA BASE DE DATOS MAS LA FECHA
	$salida_sql = $database.'_'.$fecha.'.sql';

//COMANDO PARA EXPORTAR LA BASE DE DATOS
	$respa = "mysqldump --host=$servername --user=$username --password=$password -R -c  --add-drop-table $database > $salida_sql";

	system($respa, $output);

//TRANSOFMRA EL ARCHIVO A .ZIP
	$zip = new ZipArchive(); //Objeto de Libreria ZipArchive
	
	//Construimos el nombre del archivo ZIP Ejemplo: mibase_20160101-081120.zip
	$salida_zip = $database.'_'.$fecha.'.zip';
	
	if($zip->open($salida_zip,ZIPARCHIVE::CREATE)===true) { //Creamos y abrimos el archivo ZIP
		$zip->addFile($salida_sql); //Agregamos el archivo SQL a ZIP
		$zip->close(); //Cerramos el ZIP
		unlink($salida_sql); //Eliminamos el archivo temporal SQL
		header ("Location: $salida_zip"); // Redireccionamos para descargar el Arcivo ZIP
		} else {
		echo 'Error'; //Enviamos el mensaje de error
	}
?>