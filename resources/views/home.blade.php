@extends('layouts.app')
@section('title', 'Accueil - MegaShop')


@section('content')

    <main>
        <div class="hero">
            <h1>Bienvenue chez MegaShop</h1>
            <p>Découvrez notre sélection complète d'électronique et d'électroménager</p>
            <a href="#categories" class="btn">Voir nos catégories</a>
        </div>

        <section id="categories">
            <h2 class="page-title">Nos Catégories</h2>
            <div class="categories-grid">
                @foreach ($categories as $categorie)
                    <div class="category-card">
                        <h3>{{ $categorie['icon'] }} {{ $categorie['name'] }}</h3>
                        <p>{{ $categorie['description'] }}</p>
                        <a href="{{ route('categorie', ['slug' => $categorie['slug']]) }}" class="btn">Voir les produits</a>
                    </div>
                @endforeach

            </div>
        </section>

        <section class="featured-products">
            <h2 class="page-title">Produits en Vedette</h2>
            <div class="products-grid">
                @foreach ($featuredProducts as $product)
                    <div class="product-card">
                        <div class="product-image">{{ $product['image'] }}</div>
                            <div class="product-info">
                                <div class="product-name">{{ $product['name'] }}</div>
                                <div class="product-price">{{ $product['price'] }}€</div>
                                <div class="product-description">{{ $product['description'] }}</div>
                                <a href="{{ route('produit', ['id' => $product['id']]) }}" class="btn">Voir les détails</a>
                        </div>
                    </div>
                @endforeach
                
            </div>
        </section>
    </main>
@endsection
