@extends('layouts.main')

@section('title','Materiais')

@section('content')

<div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastrar Material</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="POST" action="/cadastromaterial">
          <div class="form-group mb-3">
              <label for="inputDescricao1">Descrição:</label>
              <input type="text" class="form-control form-control-sm" id="inputDescricao" aria-describedby="nomeHelp" placeholder="Computador/notebook/projetor">
          </div>
          <div class="form-group mb-3">
            <label for="inputDescricao1">Número de serie:</label>
            <input type="text" class="form-control form-control-sm" id="inputAddress" placeholder="Serie">
          </div>
          <div class="form-group mb-3">
            <label for="inputAddress">Patrimônio:</label>
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
        </form>  
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Sair</button>
        <button type="button" class="btn btn-primary">Salvar</button>
      </div>
    </div>
  </div>
</div>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Cadastrar
</button>
<div>
  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Excluir
</button>
<div>


<div class="container-fluid">
  <h2> Cadastro de Materiais</h2> 
  <div class="container- fluid">
  <div class="row row-cols-4">
    <div class="col">Descrição</div>
    <div class="col">Número de serie:</div>
    <div class="col">Categoria</div>
    <div class="col">Quantidade</div>
  </div>
</div>
<div>
<nav aria-label="Navegação de página exemplo">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Anterior</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Próximo</a></li>
  </ul>
</nav>

@endsection