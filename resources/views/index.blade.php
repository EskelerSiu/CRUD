<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Vista creada desde el blade y llamada desde el controlador</h1>
    <p><a href="{{ route('gamesCreate')}}"> Nuevo videoJuego</a></p>
    <h2>Listado de juegos</h2>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Categoria_id</th>
                <th>Creado</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($games as $game)
            <tr>
                <th>{{ $game->id }}</th>
                <th><a href="{{route('viewGame',$game->id)}}"> {{$game->name}}</a></th>
                <th>{{$game->category_id}}</th>
                <th>{{$game->created_at}}</th>
                <th>
                    @if ($game->active)
                    <span style="color: green">Activo</span>
                    @else
                    <span style="color: red">Inactivo</span>
                    @endif
                    
                  </th>
                  <th>
                    <a href="{{ route('deleteGame',$game->id) }}">Eliminar</a>
                  </th>

                
            </tr>
            @empty
                
            @endforelse
            
        </tbody>
    </table>
   
    
    
</body>
</html>