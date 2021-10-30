@extends('layouts.main')

@section('title','Materiais')

@section('content')

<h1>Paginas de Materiais</h1>

<div class="collapse navbar-collapse" id="navbarSupportedContent">                
              <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="/">HOME<span class="sr-only"></span></a>
                  </li>
                  <li class="nav-item active">                      
                        <a class="nav-link dropdown-toggle" href="/" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        MATERIAIS
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="/">Cadastrar</a>
                            <a class="dropdown-item" href="/">Editar</a>
                            <a class="dropdown-item" href="/">Excluir</a>
                        </div>
                   </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                        <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                </ul>
                <div>

@endsection




