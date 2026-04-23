<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function categories($slug){
        include base_path('config/data.php');

        return view('categories',compact('slug','categories','products'));
    }
    public function produit($id){
        return view('produit',compact('id'));
    }
}
