<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="container-fluid">
<div class="pl-4 pt-3 row">
    <form method="get" action="<?= $this->crearRuta(["accion"=>"ejercicio2"]) ?>">
        <div>
            <label for="s1">Texto:
                <input type="text" name="frase" id="s1" required>
            </label>
        </div>

        <div>
            <button class="btn btn-primary">Mostrar</button>
        </div>
    </form>
</div>
</div>