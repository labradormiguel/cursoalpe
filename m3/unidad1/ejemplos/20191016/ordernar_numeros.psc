Algoritmo ordenar_numeros
	num1 <- 0
	num2 <- 0
	num3 <- 0
	primero <- 0
	segundo <- 0
	tercero <- 0
	Escribir 'Introduce el primer número'
	Leer num1
	Escribir 'Introduce el segundo número'
	Leer num2
	Escribir 'Introduce el tercer número'
	Leer num3
	Si num1>num2 Entonces
		Si num1>num3 Entonces
			primero <- num1
			Si num3>num2 Entonces
				segundo <- num3
				tercero <- num2
			SiNo
				segundo <- num2
				tercero <- num3
			FinSi
		SiNo
			primero <- num3
			segundo <- num1
			tercero <- num2
		FinSi
	SiNo
		Si num2>num3 Entonces
			primero <- num2
			Si num3>num1 Entonces
				segundo <- num3
				tercero <- num1
			SiNo
				segundo <- num1
				tercero <- num3
			FinSi
		SiNo
			primero <- num3
			segundo <- num2
			tercero <- num1
		FinSi
	FinSi
	Escribir 'De mayor a menor ',primero,segundo,tercero
FinAlgoritmo

