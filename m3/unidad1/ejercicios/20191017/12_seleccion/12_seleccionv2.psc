Algoritmo seleccionv2
	hora <- 0
	minuto <- 0
	seg <- 0
	salida <- 0
	// Si salida es 24 hay algo mal
	Escribir 'Introduce la hora'
	Leer hora
	Escribir 'Introduce el minuto'
	Leer minuto
	Escribir 'Introduce el segundo'
	Leer seg
	Si hora<=23 Entonces
		Si minuto<=59 Entonces
			Si seg<=59 Entonces
				salida <- 25 // Todo bien
			SiNo
				salida <- 24
			FinSi
		SiNo
			salida <- 24
		FinSi
		Si salida==24 Entonces
			Escribir 'Metiste algún dato mal'
		SiNo
			seg <- seg+1
			Si seg=60 Entonces
				seg <- 0
				minuto <- minuto+1
				Si minuto=60 Entonces
					minuto <- 0
					hora <- hora+1
					Si hora=24 Entonces
						hora <- 0
					FinSi
				FinSi
			FinSi
			Escribir 'Son las ',hora,':',minuto,':',seg
		FinSi
	SiNo
		salida <- 24
	FinSi
FinAlgoritmo

