@extends('layouts.main')

@section('title','Cadastro de usuario')

@section('content')

<div class="container-fluid">
<h2> Cadastro de usuário</h2>
  <form>
    <div class="container-fluid">  
        <div class="form-group mb-3">
          <label for="Inputnome1" class="form-label">Nome:</label>
          <input type="text" class="form-control form-control-sm" id="Inputnome1" aria-describedby="nomeHelp" placeholder="Nome Completo">
          </div>
        <div class="form-group mb-3">
          <label for="exampleInputEmail1">E-mail:</label>
          <input type="email" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email@example.com">      
        </div>
        <div class="form-group mb-3">
          <label for="formInputPassword">Senha:</label>
          <input type="password" class="form-control form-control-sm" id="formInputPassword" placeholder="Password">
          <small id="passwordHelpInline" class="text-muted">
            A senha dever conter de comprimento de 8-20 caracteres, conter letras, numeros e caracter especiais.    
          </small>
        </div>
        <h6>Perfil de usuario a ser criado</h6>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">Administrador</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2"> Usuario</label>
        </div>  
          <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
  </form>
</div>

@endsection
