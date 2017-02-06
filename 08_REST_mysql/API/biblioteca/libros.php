<?php
//error_reporting(E_ALL & ~E_DEPRECATED);
 	header('Content-Type: application/json');
 	$username="root";
 	$password="";
 	$hostname="localhost";
    $dbhandle= mysql_connect($hostname, $username, $password)
 	or die("No es posible conectarse a MySql");
 	$selection= mysql_select_db("phpws")
 	or die("Base de datos no disponible");

 	function mostrarTitulos($detalle){
 		if ($detalle=="lista") {
 			$resultado=mysql_query("SELECT titulo FROM libros");
 		}else{
           $resultado=mysql_query("SELECT titulo FROM libros WHERE id=".$detalle);
 		}

 		while ($fila=mysql_fetch_array($resultado)) {
 			$todosLosTitulos[]=$fila;
 		}
 		return $todosLosTitulos;
 	}
 	function mostrarAutores($detalle){
 		if ($detalle=="lista") {
 			$resultado=mysql_query("SELECT autor FROM libros");
 		}else{
           $resultado=mysql_query("SELECT autor FROM libros WHERE id=".$detalle);
 		}

 		while ($fila=mysql_fetch_array($resultado)) {
 			$todosLosTitulos[]=$fila;
 		}
 		return $todosLosTitulos;
 	}
 	if ($_GET['peticion']=='titulo') {
 		$resultados=mostrarTitulos($_GET['detalle']);
 	}else if ($_GET['peticion']=='autor') {
 		$resultados=mostrarAutores($_GET['detalle']);
 	}else{
 		header('HTTP/1.1 405 Method Not Allowed');
 		exit;
 	}
 	echo json_encode($resultados);
?>