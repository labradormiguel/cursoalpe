Algoritmo seleccion
	hora <- 0
	minuto <- 0
	seg <- 0
	Repetir
		Escribir "Introduce la hora"
		Leer hora
	Hasta Que hora <= 23
	Repetir
		Escribir "Introduce el minuto"
		Leer minuto
	Hasta Que minuto <= 59
	Repetir
		Escribir "Introduce el segundo"
		Leer seg
	Hasta Que seg <= 59
	seg <- seg+1
	Si seg = 60 Entonces
		seg <- 0
		minuto <- minuto+1
		Si minuto = 60 Entonces
			minuto <- 0
			hora <- hora+1
			Si hora = 24 Entonces
				hora <- 0
			FinSi
		FinSi
	FinSi
	Escribir "Son las " hora ":" minuto ":" seg
FinAlgoritmo

