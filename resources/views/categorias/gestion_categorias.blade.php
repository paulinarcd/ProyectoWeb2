<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container text-center">
        <div>
            <h1>Crear categoria:</h1>
            <form action="{{route('categorias.index')}}" method="post">
                @csrf
                <label for="name">Ingrese el nombre del autor</label>
                <input type="text" name="NombreCategoria" id="nombre" class="form-control mb-3" required>
                <button type="submit" class="btn btn-success">Guardar</button>
            </form>
        </div>
        <script>
            var name = document.getElementById('nombre').value;
        </script>
       
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>


<h1>Crear Categorias</h1>
        <form action="{{route('categorias.index')}}" method="post">
                @csrf
                <label for="nombre">Ingrese nombre de la Categoria</label>
                <input type="text" name="NombreCategoria" id="nombre" class="form-control mb-3" required>
                <button type="submit" class="btn btn-success">Guardar</button>
            </form>
        </div>
        <script>
            var nombre= document.getElementById('nombre').value;
        </script>
