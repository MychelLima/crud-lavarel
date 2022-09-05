@extends('layouts.main')

@section('title', 'Editar endereço: '. $cadastro->id)

@section('content')
<form action="/listar/update/{{ $cadastro->id }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div id="event-create-container" class="col-md-6 offset-md-3">
            <h1>Edite seu endereço</h1>
           
    <div id="wraper-form" class="row g-3">
        <div class="col">
            <input type="text" class="form-control" id="telefone" name="nome" placeholder="Nome" value="{{ $cadastro->nome }}">
        </div>
        <div class="col">
        <input type="number" class="form-control" id="telefone" name="telefone" placeholder="Telefone" value="{{ $cadastro->telefone }}">
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">Endereço</label>
            <input type="text" class="form-control" id="endereco" name="endereco" value="{{ $cadastro->endereco }}">
        </div>
        
        <div class="col-md-6">
            <label for="inputCity" class="form-label">Cidade</label>
            <input type="text" class="form-control" id="cidade" name="cidade" value="{{ $cadastro->cidade }}">
        </div>
        <div class="col-md-6">
            <label for="inputCity" class="form-label">Estado</label>
            <input type="text" class="form-control" id="estado" name="estado" value="{{ $cadastro->estado }}">
        </div>

        <div class="col-md-2">
            <label for="inputZip" class="form-label">CEP</label>
            <input type="number" class="form-control" id="cep" name="cep" value="{{ $cadastro->cep }}">
        </div>
        
        <div class="col-12">
            <input type="submit" class="btn btn-primary" value="Editar cadastro">
            <a href="/listar" class="btn btn-danger delete-btn" >Cancelar</a>
        </div>
    </div>
    </div>

</form>

@endsection