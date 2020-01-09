<form method="get" action="<?= $this->crearRuta(["accion"=>"ejercicio1"]) ?>">
    <div>
        <label for="n1">Número 1
            <input type="text" name="numero[]" id="n1">
        </label>
    </div>
    <div>
        <label for="n2">Número 2
            <input type="text" name="numero[]" id="n2">
        </label>
    </div>
    <div>
        <label for="n3">Número 3
            <input type="text" name="numero[]" id="n3">
        </label>
    </div>
    
    <div>
        <button>Mostrar</button>
    </div>
</form>