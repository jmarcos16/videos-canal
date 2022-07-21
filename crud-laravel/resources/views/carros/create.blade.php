@extends('layouts.main')

@section('titlePage', 'Novos Carros')

@section('content')
    <h3>Novos Carros</h3>
    <form action="{{ route('carro.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Modelo do carro</label>
            <input type="text" name="modelo" class="form-control shadow-none" placeholder="Modelo do automovel">
        </div>
        <div class="form-group">
            <label>Marca do carro</label>
            <input type="text" name="marca" class="form-control shadow-none" placeholder="Marca do automovel">
        </div>
        <div class="form-group">
            <label>Ano do modelo</label>
            <input type="date" name="date" class="form-control shadow-none" placeholder="Marca do automovel">
        </div>

        <button type="submit" class="btn btn-primary mt-2">Adicionar Modelo</button>
    </form>
@endsection
