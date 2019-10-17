Algoritmo seleccionsimple
	num1 <- 0
	num2 <- 0
	num3 <- 0
	Escribir 'Escribe el primer número'
	Leer num1
	Escribir 'Escribe el segundo número'
	Leer num2
	Escribir 'Escribe el tercer número'
	Leer num3
	Si num1<num2 Entonces
		Si num1<num3 Entonces
			Escribir "El menor es ",num1
		SiNo
			Si num3<num2 Entonces
				Escribir "El menor es " num3
			SiNo
				Escribir "El menor es " num2
			FinSi
		FinSi
	SiNo
		Si num2<num3 Entonces
			Escribir "El menor es " num2
		SiNo
			Si num3<num1 Entonces
				Escribir "El menor es " num3
			SiNo
				Escribir "El menor es " num1
			FinSi
		FinSi
	FinSi
FinAlgoritmo

