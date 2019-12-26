<?php
spl_autoload_register(function ($nombre_clase) {
    include $nombre_clase . '.php';
});
use clases\Persona;
use clases\Estudiante;
use clases\Materias;
use clases\Profesor;
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            
            $objeto = new Persona("alumno1",32);
            var_dump([$objeto]);
            //echo $objeto;
            
            $objetoEstudiante = new Estudiante("alumno2",50,[8,7,6],"Carrera");
            var_dump($objetoEstudiante);
            echo $objetoEstudiante;
            $objetoEstudiante->setNotas([1,2,3,4]);
            var_dump($objetoEstudiante);
            echo $objetoEstudiante->getNotas();
            
            $objetoMateria = new Materias("fisica", 25);
            $objetoProfesor = new Profesor("Pepe",56,$objetoMateria,10,1200);
            var_dump($objetoProfesor);
            $objetoProfesor->getMateria()->setNombre("Lengua");
            var_dump($objetoMateria);
            var_dump($objetoProfesor);

        ?>
    </body>
</html>
