@extends('layouts.app')

@section('content')

<main>

    @if($product)

    <!-- 🔹 Breadcrumb -->
    <div class="breadcrumb">
        <a href="{{ route('home') }}">Accueil</a>
        <span>/</span>
        <a href="{{ route('categorie', ['slug' => $product['category']]) }}">
            {{ $product['category'] }}
        </a>
        <span>/</span>
        <strong>{{ $product['name'] }}</strong>
    </div>

    <h1 class="page-title">Détail du Produit</h1>

    <div class="product-detail">

        <!-- 🔹 TOP -->
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; margin-bottom: 40px;">
            
            <!-- IMAGE -->
            <div>
                <img 
                    src="{{ asset('images/' . $product['image']) }}" 
                    alt="{{ $product['name'] }}" 
                    style="width:100%; border-radius:10px;"
                >
            </div>

            <!-- INFO -->
            <div class="product-detail-info">
                <h2>{{ $product['name'] }}</h2>

                <div class="product-detail-price">
                    {{ formatPrice($product['price']) }}
                </div>

                <!-- STOCK -->
                <div style="margin-bottom: 30px;">
                    <h3>Disponibilité</h3>

                    @if(isProductAvailable($product['stock']))
                        <p style="color: green; font-weight: bold;">
                            ✓ En stock ({{ $product['stock'] }} disponibles)
                        </p>
                    @else
                        <p style="color: red; font-weight: bold;">
                            ❌ Rupture de stock
                        </p>
                    @endif
                </div>

                <!-- RATING -->
                @if(isset($product['rating']))
                <div style="margin-bottom: 30px;">
                    <h3>Évaluation</h3>
                    <p style="color: #f39c12;">
                        ⭐ {{ $product['rating'] }}/5 ({{ $product['reviews'] }} avis)
                    </p>
                </div>
                @endif

                <button class="btn btn-secondary" style="width:100%; margin-bottom:10px;">
                    Ajouter au panier
                </button>

                <button class="btn" style="width:100%;">
                    Acheter maintenant
                </button>
            </div>
        </div>

        <!-- 🔹 SPECS + PORTS -->
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px;">

            <!-- SPECS -->
            <div class="product-specs">
                <h3>Caractéristiques</h3>

                @if(isset($product['specs']))
                <ul>
                    @foreach($product['specs'] as $key => $value)
                        <li><strong>{{ $key }} :</strong> {{ $value }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <!-- PORTS -->
            <div class="product-specs">
                <h3>Ports & Connexions</h3>

                @if(isset($product['ports']))
                <ul>
                    @foreach($product['ports'] as $port)
                        <li>{{ $port }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

        </div>

        <!-- 🔹 DESCRIPTION -->
        @if(isset($product['details']))
        <div style="margin-top: 40px; background: #ecf0f1; padding: 25px; border-radius: 8px;">
            <h3>Description</h3>
            <p>{{ $product['details'] }}</p>
        </div>
        @endif

    </div>

    @else
        <p>❌ Produit introuvable</p>
    @endif

</main>

@endsection