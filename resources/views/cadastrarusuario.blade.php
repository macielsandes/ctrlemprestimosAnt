@extends('layouts.main')

@section('title','Cadastro de usuario')

@section('content')


<h1> Cadastro de usuário</h1>
<form>
<div class="form-group">
    <label for="Inputnome1">Nome</label>
    <input type="text" class="form-control" id="Inputnome1" aria-describedby="nomeHelp" placeholder="Informar Nome">
    <small id="nameHelp" class="form-text text-muted">Informar nome completo</small>
  </div>    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">E-mail</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">E-mail que será usado</small>
  </div>
  <div class="form-group">
    <label for="formInputPassword">Senha</label>
    <input type="password" class="form-control" id="formInputPassword" placeholder="Password">
    <small id="passwordHelpInline" class="text-muted">
      A senha dever conter de comprimento de 8-20 caracteres, conter letras, numeros e caracter especiais.    
    </small>
  </div>
  <br>
  <button type="submit" class="btn btn-primary">Salvar</button>

</form>


@endsection
