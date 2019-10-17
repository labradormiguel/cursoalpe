Algoritmo seleccion
	num1 <- 0
	num2 <- 0
	Escribir "Introduce un número"
	Leer num1
	Escribir "Y ahora otro número"
	Leer num2
	Si num1 == num2 Entonces
		Escribir "Son iguales"
	SiNo
		Si num1 > num2 Entonces
			Escribir num1 " es mayor que " num2
		SiNo
			Escribir num2 " es mayor que " num1
		FinSi
	FinSi
FinAlgoritmo

