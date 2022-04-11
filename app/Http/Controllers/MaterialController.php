<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    public function index()
    {
        $material= Material::get();

        //dd ($materials);
        // usar a palavra Compact indica que sera retornado um Array (isto é usado em PHP)
       return view('admin.material.material', compact('material')); 
    }

    public function create()
    {
        return view('admin.material.create');
    }

   public function store(Request $request)
   {
       $material= Material::get();
       //return redirect() -> material;
       return view('admin.material.material', compact('material'));
    }
}
