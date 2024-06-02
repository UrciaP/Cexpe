@extends('layout')

@section('titulo', 'Servicios')


@section('content')
    <h2>Servicios</h2>
    <ul>
        @if($talleres)
            @foreach ($talleres as $item)
                <li>{{$item['titulo']}}</li>
            @endforeach
        @else
            <p>nada</p>
        @endif
    </ul>
@endsection

<!-- @section('listtalleres')
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="#">Danza</a>
        <a class="dropdown-item" href="#">Baile</a>
        <a class="dropdown-item" href="#">Oratoria</a>
        <a class="dropdown-item" href="#">Liderazgo</a>
    </div>
@endsection -->
