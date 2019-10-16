Algoritmo mayor3
	// Introduzco tres números y me devuelve el mayor
	num1 <- 0
	num2 <- 0
	num3 <- 0
	salida <- 0
	
	Escribir 'Escribe el primer número'
	Leer num1
	Escribir 'Escribe el segundo número'
	Leer num2
	Escribir 'Escribe el tercer número'
	Leer num3
	
	Si num1>num2 Entonces
		Si num1>num3 Entonces
			salida <- num1
		SiNo
			salida <- num3
		FinSi
	SiNo
		Si num2>num3 Entonces
			salida <- num2
		SiNo
			salida <- num3
		FinSi
	FinSi
	
	Escribir "El número mayor es " salida
	
FinAlgoritmo

