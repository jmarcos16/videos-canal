@extends('layouts.main')

@section('titlePage', 'Editando carro')

@section('content')
    <h3>Editando {{ $carro->modelo }}</h3>
    <form action="{{ route('carros.update', $carro->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Modelo do carro</label>
            <input type="text" name="modelo" class="form-control shadow-none" placeholder="Modelo do automovel"
                value="{{ $carro->modelo }}">
        </div>
        <div class="form-group">
            <label>Marca do carro</label>
            <input type="text" name="marca" class="form-control shadow-none" placeholder="Marca do automovel"
                value="{{ $carro->marca }}">
        </div>
        <div class="form-group">
            <label>Ano do modelo</label>
            <input type="date" name="date" class="form-control shadow-none" placeholder="Marca do automovel"
                value="{{ $carro->ano }}">
        </div>

        <button type="submit" class="btn btn-primary mt-2">Editar Modelo</button>
    </form>
@endsection
