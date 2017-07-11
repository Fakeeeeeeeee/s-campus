<?php
	require "lib/nusoap.php";
	
    $wsdl = 'http://smartcampus1.esy.es/soap_lolein.php';

    $client = new nusoap_client($wsdl);
   
   
   
   
   
   
   
    $Buscar = $client->call('buscarAlumno', array('rut' => '12'));
    print_r($Buscar);
	
	print('<br><br>Rut: '.$Buscar['rut']);
	print('<br>Nombre: '.$Buscar['nombre']);
	print('<br>Edad: '.$Buscar['edad']);
	
	
	
	
	
	
	
	
	//$Listado = $client->call('listadoAlumnos', array('orden' => 'nombre'));
    //print_r($Listado);
	
	
	
	
	
	
	
	
	//$Ingresar = $client->call('ingresarAlumno', array('rut' => '333','nombre' => 'c','edad' => '44'));
    //print_r($Ingresar);
	
	
	
	
	
	
	//$Eliminar = $client->call('eliminarAlumno', array('rut' => '20'));
    //print_r($Eliminar);
	
	
	

	/*
    En ocaciones es necesario capturar la excepciones de las llamadas, lo cual se realiza con 
    el try catch capturando el tipo de excepcion SoapFault
    try {
        #llamada al servicio web
    } catch (SoapFault $e) {
        echo var_dump($e);
    }
    */
?>