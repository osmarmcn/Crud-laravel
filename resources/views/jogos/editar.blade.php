@extends('layout.app')


@section('title','edição')



@section('content')

<div class="container mt-5" >
    <h1>Editar jogo</h1>

    <div>
        <a href=""></a>
    </div>

    <form action="{{route('jogos-store')}}" method="POST">
    @csrf
        <div class="form-group">
            <div class="form-group mb-3">
                <label for="nome">Nome</label>
                <input type="text" class="form-control mt-1" name="nome" value="{{$jogos->nome}}" placeholder="digite o nome...">
            </div>
            <div class="form-group mb-3">
                <label for="categoria">Categória</label>
                <input type="text" class="form-control mt-1" name="categoria" value="{{$jogos->categoria}}" placeholder="digite a categoria...">
            </div>
            <div class="form-group mb-3">
                <label for="ano_criacao">Ano de criação</label>
                <input type="number" class="form-control mt-1" name="ano_criacao" value="{{$jogos->ano_criacao}}" placeholder="digite o ano do jogo...">
            </div>
            <div class="form-group mb-3">
                <label for="valor">Valor</label>
                <input type="number" class="form-control mt-1" name="valor" value="{{$jogos->valor}}" placeholder="digite o valor do jogo...">
            </div>
            <div class="form-group mb-3">

                <input type="submit" class="btn btn-success" name="submit" value="atualizar">
            </div>

        </div>
    </form>
</div>

@endsection
