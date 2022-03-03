<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    public function index()
    {
        $materials = Material::get();
       return view('admin.material.material', compact('materials')); 
    }

    public function create()
    {
        return view('admin.material.create');
    }

   public function store()
   {
       dd('cadastrando');
    }
}
