@extends('layouts.main')

@section('title','Cadastro de usuario')

@section('content')

<h1> Cadastrar Materiais</h1>
<form>
  <div class="form-group">
      <label for="inputDescricao1">Descrição</label>
      <input type="text" class="form-control" id="inputDescricao" aria-describedby="nomeHelp" placeholder="Descrição">
     </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Patrimônio</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Numero Patrimonio">
    <small id="emailHelp" class="form-text text-muted">Informar numero de patrimônio, caso o material possua.</small>
  </div>
  <div class="form-group">
    <label for="inputAddress2">Quantidade</label>
    <input type="text" class="form-control" id="inputDescricao" placeholder="Descrição">
    <small id="emailHelp" class="form-text text-muted">Quantidade disponível em estoque</small>
  </div>  
  <button type="submit" class="btn btn-primary">Salvar</button>
</form>

@endsection