@extends('layouts.main')

@section('title', 'Cadastrar usuario')

@section('content')
<form action="/cadastrar" method="POST" enctype="multipart/form-data">

    <div id="event-create-container" class="col-md-6 offset-md-3">
            <h1>Cadastre seu usuário</h1>
     @csrf        
    <div id="wraper-form" class="row g-3">
        <div class="col">
            <input type="text" class="form-control" id="telefone" name="nome" placeholder="Nome" >
        </div>
        <div class="col">
        <input type="number" class="form-control" id="telefone" name="telefone" placeholder="Telefone" >
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">Endereço</label>
            <input type="text" class="form-control" id="endereco" name="endereco" >
        </div>
        
        <div class="col-md-6">
            <label for="inputCity" class="form-label">Cidade</label>
            <input type="text" class="form-control" id="cidade" name="cidade" >
        </div>
        <div class="col-md-6">
            <label for="inputCity" class="form-label">Estado</label>
            <input type="text" class="form-control" id="estado" name="estado" >
        </div>

        <div class="col-md-2">
            <label for="inputZip" class="form-label">CEP</label>
            <input type="number" class="form-control" id="cep" name="cep">
        </div>
        
        <div class="col-12">
            <input type="submit" class="btn btn-primary" value="Cadastrar">
        </div>
    </div>
    </div>

</form>

@endsection