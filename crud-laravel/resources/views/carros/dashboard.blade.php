@extends('layouts.main')

@section('titlePage', 'Todos Carros')

@section('content')

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Modelo</th>
                <th scope="col">Marca</th>
                <th scope="col">Ano</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($carros as $carro)
                <tr>
                    <td>{{ $carro->modelo }}</td>
                    <td>{{ $carro->marca }}</td>
                    <td>{{ $carro->ano }}</td>
                    <th>
                        <a href="{{ route('carros.edit', $carro->id) }}" class="btn btn-success"> Editar </a>
                        <form action="{{ route('carros.destroy', $carro->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Deletar</button>
                        </form>
                    </th>
                </tr>
            @endforeach

        </tbody>
    </table>

@endsection
