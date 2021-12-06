@extends('layouts.main')

@section('title','Cadastro de Materiais')

@section('content')
  <div class="container-fluid">
  <h2>Materiais</h2>
  <!--Form usado no Laravel-->
  <form method="POST" action="material">
    @csrf
      <div class="form-group mb-3">
          <label for="inputDescricao1">Descrição:</label>
          <input type="text" class="form-control form-control-sm" id="inputDescricao" aria-describedby="nomeHelp" placeholder="Computador/notebook/projetor">
      </div>
      <div class="form-group mb-3">
        <label for="inputDescricao1">Número de serie:</label>
        <input type="text" class="form-control form-control-sm" id="inputAddress" placeholder="Serie">
      </div>
      <div class="form-group mb-3">
        <label for="inputAddress">Patrimônio</label>
        <input type="text" class="form-control form-control-sm" id="inputAddress" placeholder="Numero Patrimonio">
        <small id="emailHelp" class="form-text text-muted">Informar numero de patrimônio, caso o material possua.</small>
      </div>
      <div class="form-group mb-3">  
      <select class="form-select form-select-sm" aria-label=".form-select-sm example">
        <option selected>Categoria:</option>
        <option value="1">Notebook</option>
        <option value="2">Acessório</option>
        <option value="3">Projetor</option>
      </select>
      </div>
      <div class="form-group mb-3">
        <label for="inputAddress2">Quantidade:</label>
        <input type="text" class="form-control form-control-sm" id="inputDescricao" placeholder="Quantidade">
        <small id="emailHelp" class="form-text text-muted">Quantidade disponível</small>
      </div>  
      <button type="submit" class="btn btn-primary">Salvar</button>
      </div>
    </form>  
  </div>
@endsection