<?php 
    $cursosURL= 'http://localhost/07_REST_http/API/alumnos/cursos';
    $alumnosURL= 'http://localhost/07_REST_http/API/alumnos/lista';

    $cursosJson=file_get_contents($cursosURL);
    $alumnosJson=file_get_contents($alumnosURL);

    $cursos =  json_decode($cursosJson);
    $alumnos = json_decode($alumnosJson);

    echo'<h1>Alumnos</h1>';
        echo '<ul>';
        foreach ($alumnos as $alumno) {
            echo "<li>".$alumno."</li>";
        }
        echo '</ul>';

    echo'<h2>Cursos Disponibles</h2>';
        foreach ($cursos as $curso) {
            echo "->".$curso."<br>";
        }
?>