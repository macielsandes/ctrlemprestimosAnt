<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaterialController extends Controller
{    
    public function index(){   
        return view ('material');
     }

    public function cadastro(){   
        return view ('material/create');
     }

}
