<?php
header('Content-Type:application/json');
function mostrarAlumno(){
	$alumno=array(
	"nombre" => "Jorge", 
	"apellido" => "Perales",
	"pais" => "Mexico",
	"cursos" => "10",
	"usuario" => "jpd"
		);
	return $alumno;
}
	echo json_encode(mostrarAlumno());
?>