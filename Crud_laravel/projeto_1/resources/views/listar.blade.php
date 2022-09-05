@extends('layouts.main')

@section('title', 'Listar usuarios')

@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Usuarios cadastrados</h1>
</div>

<div class="col-md-10 offset-md-1 dashboard-cadastro-container">
    @if(count($cadastro) > 0)
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Endereco</th>
                <th scope="col">Cidade</th>
                <th scope="col">Estado</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
    <tbody>
        @foreach($cadastro as $cadastros)
            <tr>
                <td></td>
                <td>{{ $cadastros->nome }}</td>
                <td>{{ $cadastros->telefone }}</td>
                <td>{{ $cadastros->cidade }}</td>
                <td>{{ $cadastros->estado }}</td>
                <td>
                    <a href="/listar/edit/{{ $cadastros->id }}" class="btn btn-warning edit-btn"><ion-icon name="create-outline"></ion-icon> Editar</a>
                    <form action="/listar/{{ $cadastros->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger delete-btn"><ion-icon name="trash-outline"></ion-icon> Excluir</button>
                    </form>
                    
                </td>
            </tr>
        @endforeach
        
    </tbody>

    </table>
    @else
        <p>Voce ainda nao tem registros.</p>
    @endif
</div>

@endsection