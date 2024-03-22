


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <style>
        body{
            background-color: #1b1a1ef4;
        }
    </style>
    <header>
        <nav class="navbar bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand text-white fs-2">
                    <img src="{{asset('storage/uploads/images.png')}}" alt="" width="50px" class="navbar-brand">

                    Veterinaria Online.</a>
                {{-- <form class="d-flex" role="search">
                    <button class="btn btn-outline-success" type="submit" value="Buscar">Search</button>
                </form> --}}
                <a href="{{url('veterinaria/create')}}" class="btn btn-outline-success">Nueva mascota</a>

            </div>
        </nav>
    </header>



<table class="table table-dark table-hover mt-5">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre de la mascota:</th>
            <th>Tipo</th>
            <th>Raza</th>
            <th>Edad</th>
            <th>Color</th>
            <th>Foto de la mascota</th>
            <th>Nombre del dueño</th>
            <th>Foto del dueño</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($mascotas as $mascota)
        <tr>
            <td>{{$mascota->id}}</td>
            <td>{{$mascota->nombre_mascota}}</td>
            <td>{{$mascota->tipo}}</td>
            <td>{{$mascota->raza}}</td>
            <td>{{$mascota->edad}}</td>
            <td>{{$mascota->color}}</td>
            <td><img src="{{asset('storage').'/'.$mascota->foto_mascota}}" alt="" width="15%"></td>
            <td>{{$mascota->nombre_dueño}}</td>
            <td><img src="{{asset('storage').'/'.$mascota->foto_dueño}}" alt="" width="15%"></td>
            <td><a href="{{url('/veterinaria/'.$mascota->id.'/edit')}}" class="btn btn-info">Editar</a>
                <form action="{{url('/veterinaria/'.$mascota->id)}}" method="POST">
                    @csrf
                    {{ method_field('DELETE') }}
                    <input type="submit" onclick="return confirm('¿Desea borrar?')" value="Eliminar" class="btn btn-danger">
                </form></td>
        </tr>
            
        @endforeach
        
    </tbody>
</table>
</body>
</html>