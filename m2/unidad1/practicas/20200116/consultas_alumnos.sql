-- 1.- Obtener el nombre y la edad de los alumnos matriculados en Secretary

SELECT a1.nombre_al, a1.edad_al, a.cod_as
  FROM estudian e
  JOIN asignaturas a ON e.cod_as = a.cod_as
  JOIN alumnos a1 ON e.dni_al = a1.dni_al
  WHERE a.nombre_as = 'Secretary';

SELECT *
  FROM estudian e
  JOIN asignaturas a ON e.cod_as = a.cod_as
  WHERE a.nombre_as = 'Secretary';  