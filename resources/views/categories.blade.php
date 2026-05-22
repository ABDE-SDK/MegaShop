@extends('layouts.app')

@section('content')

        <main>
            <div class="breadcrumb">
                <a href={{ route('home') }}>Accueil</a>
                <span>/</span>
                <strong>{{ $categories[$slug]['name'] }}</strong>
            </div>
            
            <h1 class="page-title">{{ $categories[$slug]['name'] }}</h1>

            <div class="products-grid">
                @foreach ($products[$slug] as $product)
                    <div class="product-card">
                        <div class="product-image">{{ $product['image']}}</div>
                        <div class="product-info">
                            <div class="product-name">{{ $product['name'] }}</div>
                            <div class="product-price">{{ $product['price'] }} €</div>
                            <div class="product-description">{{ $product['description'] }}</div>
                            <a href={{ route('produit', ['id' => $product['id']])  }} class="btn">Détails</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </main>
        
@endsection
