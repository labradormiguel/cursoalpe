<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="container-fluid">
<div class="pt-3 pl-4 row">
    <form method="get" action="<?= $this->crearRuta(["accion"=>"ejercicio1"]) ?>">
        <div>
            <label for="n1">Número 1
                <input type="text" name="numero[]" id="n1" required>
            </label>
        </div>
        <div>
            <label for="n2">Número 2
                <input type="text" name="numero[]" id="n2" required>
            </label>
        </div>
        <div>
            <label for="n3">Número 3
                <input type="text" name="numero[]" id="n3" required>
            </label>
        </div>

        <div>
            <button class="btn btn-primary">Mostrar</button>
        </div>
    </form>
</div>
</div>