<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmprestimoController extends Controller
{
    public function index(){   
        return view ('emprestimo');
     }
}
