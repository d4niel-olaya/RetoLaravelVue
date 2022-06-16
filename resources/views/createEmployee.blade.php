<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Crear empleado</h1>
    @isset($state)
        @if($state == 'ok')
            <h2>Empleado creado</h2>
        @endif
    @endisset
    <div>

    </div class="container">
        <form action="{{route('Create')}}" method="post">
        @csrf
            <label for="" class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control">
            <br>
            <label for="">Apellido</label>
            <input type="text" name="apellido">
            <br>
            <label for="">Sexo</label>
            <select name="sexo" id="">
                <option value="1">Masculino</option>
                <option value="2">Femenino</option>
            </select>
            <select name="tipoc" id="">
                <option value="1">Ops</option>
                <option value="2">Definido</option>
                <option value="3">Indefinido</option>
            </select>
            <button class="btn btn-primary">
                Enviar
            </button>
        </form>
        <a href="/">Volver</a>
    </div>
</body>
</html>