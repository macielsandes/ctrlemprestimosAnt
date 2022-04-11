@extends('layouts.main')
@section('title','Cadastrar material')
@section('content')   

<div>
<h1>Cadastrar novo material</h1>
       
<!--Form de cadastro de um novo material-->
    <form method = "post" action="{{ route('material.store')}}">
      @csrf
      <div class="form-group mb-3">
          <label for="descricao">Descrição:</label>
          <input type="text" class="form-control form-control-sm" id="descricao" name="descricao" aria-describedby="nomeHelp" placeholder="Descrição">
      </div>
      <div class="form-group mb-3">
        <label for="tag">Serial/TAG:</label>
        <input type="text" class="form-control form-control-sm" id="serial" name="serial" placeholder="TAG">
      </div>
      <div class="form-group mb-3">
        <label for="numpatrimonio">Patrimônio</label>
        <input type="text" class="form-control form-control-sm" id="numpatrimonio" name="numpatrimonio" placeholder="Patrimônio" >
        <small id="emailHelp" class="form-text text-muted">Numero de Patrimônio</small>
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
          <label for="qtd">Quantidade:</label>
          <input type="text" class="form-control form-control-sm" id="qtd" name="qtd" placeholder="Quantidade">
      </div> 
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Salvar</button>
      </div >
  </form>
    <!--Fim do form de cadastro de material-->
</div>
   @endsection
