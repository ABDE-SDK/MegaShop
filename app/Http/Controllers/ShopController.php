<?php

namespace App\Http\Controllers;

class ShopController extends Controller
{
    public function home()
    {
        include base_path('config/data.php');

        $featuredProducts = getFeaturedProducts($products);

        return view('home', [
            'categories' => $categories,
            'featuredProducts' => $featuredProducts
        ]);
    }

    public function cgv()
    {
        include base_path('config/data.php');
        
        return view('cgv', compact('cgv'));
    }

    public function contact()
{
    include base_path('config/data.php');

    return view('contact', compact('config', 'faq'));
}
}
