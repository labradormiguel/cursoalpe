Algoritmo seleccionmultiple
	nota <- 0
	Escribir "Introduce la nota"
	Leer nota
	Si nota >= 5 Entonces
		// Aprobado
		Si nota < 6 Entonces
			Escribir "Suficiente"
		SiNo
			Si nota < 7 Entonces
				Escribir "Bien"
			SiNo
				Si nota < 9 Entonces
					Escribir "Notable"
				SiNo
					Escribir "Sobresaliente"
				FinSi
			FinSi
		FinSi
	SiNo
		// Suspenso
		Si nota < 3 Entonces
			Escribir "Muy deficiente"
		SiNo
			Escribir "Suspenso"
		FinSi
	FinSi
FinAlgoritmo

