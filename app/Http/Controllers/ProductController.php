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
    include base_path('config/data.php');

    $product = getProductById($products, $id);

    if(!$product){
        abort(404);
    }

    return view('produit', compact('product'));

}
}