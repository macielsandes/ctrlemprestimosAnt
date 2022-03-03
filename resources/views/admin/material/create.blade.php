@extends('layouts.main')

@section('title','Cadastrar material')

@section('content')     
       
<!--Form de cadastro de um novo material-->
      <form action="{{ route('material.store')}}" method = "post">
        @csrf
      <div class="form-group mb-3">
            <label for="Descricao">Descrição:</label>
            <input type="text" class="form-control form-control-sm" id="descricao" aria-describedby="nomeHelp" placeholder="Descrição">
        </div>
        <div class="form-group mb-3">
          <label for="inputDescricao1">TAG:</label>
          <input type="text" class="form-control form-control-sm" id="tag" placeholder="TAG">
        </div>
        <div class="form-group mb-3">
          <label for="inputAddress">Patrimônio</label>
          <input type="text" class="form-control form-control-sm" id="numpatrimonio" placeholder="Patrimônio">
          <small id="emailHelp" class="form-text text-muted">Numero do Patrimonio</small>
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
          <input type="text" class="form-control form-control-sm" id="quantidade" placeholder="Quantidade">
          <small id="emailHelp" class="form-text text-muted">Quantidade disponível</small>
        </div> 
    </div>     
    <div class="modal-footer">
            <button type="button" class="btn btn-primary">Enviar</button
            </div>
          </div>    
      <div>
</form>
    <!--Fim do form de cadastro de material-->
</div>
   @endsection
