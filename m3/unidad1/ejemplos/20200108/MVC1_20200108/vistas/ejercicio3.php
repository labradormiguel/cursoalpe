<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
    <div class="container-fluid">
    <div class="pl-4 pt-3 row">
        <form method="get" action="<?= $this->crearRuta(["accion"=>"ejercicio3"]) ?>">  
            <div>
                <label for="n3">Número 1
                    <input type="number" name="numeros[]" id="n1" required>
                </label>
            </div>
            <div>
                <label for="n3">Número 2
                    <input type="number" name="numeros[]" id="n2" required>
                </label>
            </div>
            <div>
                <label for="n3">Número 3
                    <input type="number" name="numeros[]" id="n3" required>
                </label>
            </div>

            <div>
                <button class="btn btn-primary">Mostrar resultados</button>
            </div>
        </form>
    </div>
    </div>
    </body>
</html>