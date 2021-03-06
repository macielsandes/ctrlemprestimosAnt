@extends('layouts.main')
@section('title','Materiais')
@section('content')
   <!--Cadastrando novo material -->
<div class="container-fluid"> 
  <a type="button" class="btn btn-primary" href="{{route('material.create') }}">Cadastrar</a>
</div>

<div class="container-fluid">
  <h5>Materiais</h5> 
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Descrição</th>
          <th scope="col">Serie:</th>
          <th scope="col">Categoria</th>
          <th scope="col">Quantidade</th>
        </tr>
      </thead>
      <body>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
          <td>0</td>
          <!-- Button trigger modal -->
          <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"> Editar</button>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"> Excluir</button></td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
          <td>0</td>
          <!-- Button trigger modal -->
          <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"> Editar</button>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"> Excluir</button></td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td colspan="2">Larry the Bird</td>
          <td>@twitter</td>
          <td>14</td>
          <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"> Editar</button>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"> Excluir</button></td>
        </tr>
      </tbody>
    </table>
<div>
<div class="container-fluid">
  <nav aria-label="Navegação das páginas">
    <ul class="pagination">
      <li class="page-item"><a class="page-link" href="#">Anterior</a></li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item"><a class="page-link" href="#">Próximo</a></li>
    </ul>
  </nav>
</div>
@endsection