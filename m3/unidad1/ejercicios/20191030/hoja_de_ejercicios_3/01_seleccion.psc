Algoritmo Ejercicio1
	numero <- 0
	numero1 <- 0
	salida <- ''
	Escribir 'Introduce un número'
	Leer numero
	Escribir 'Introduce un número'
	Leer numero1
	Si numero > numero1 Entonces
		salida <- 'tipo 1'
	SiNo
		Si numero == numero1 Entonces
			salida <- 'tipo 2'
		SiNo
			salida <- 'tipo 3'
			Si numero1 > 10 Entonces
				salida <- 'tipo 31'
			SiNo
				salida <- 'tipo 32'
			FinSi
		FinSi
	FinSi
	Escribir salida
FinAlgoritmo

