@extends('layouts.app')

@section('content')
<h1>{{ $categories[$slug]['name'] }}</h1>

@foreach ($products[$slug] as $product)
    <p>{{ $product['name'] }}</p>
@endforeach
    {{-- @if ($slug == 'informatique')
        <main>
            <div class="breadcrumb">
                <a href={{ route('home') }}>Accueil</a>
                <span>/</span>
                <strong>Informatique</strong>
            </div>

            <h1 class="page-title">💻 Informatique</h1>

            <div class="products-grid">
                <div class="product-card">
                    <div class="product-image">PC Portable</div>
                    <div class="product-info">
                        <div class="product-name">Ordinateur Portable Pro</div>
                        <div class="product-price">1299,99 €</div>
                        <div class="product-description">Intel i7, 16GB RAM, SSD 512GB</div>
                        <a href="produit-detail.html?id=1" class="btn">Détails</a>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">Desktop PC</div>
                    <div class="product-info">
                        <div class="product-name">PC Bureau Gaming</div>
                        <div class="product-price">1899,99 €</div>
                        <div class="product-description">RTX 4070, i9, 32GB RAM</div>
                        <a href="produit-detail.html?id=2" class="btn">Détails</a>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">Tablette</div>
                    <div class="product-info">
                        <div class="product-name">Tablette 12 pouces</div>
                        <div class="product-price">599,99 €</div>
                        <div class="product-description">OLED, 128GB, Stylet inclus</div>
                        <a href="produit-detail.html?id=3" class="btn">Détails</a>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">Clavier Mécanique</div>
                    <div class="product-info">
                        <div class="product-name">Clavier Mécanique RGB</div>
                        <div class="product-price">179,99 €</div>
                        <div class="product-description">Switches personnalisées, Rétroéclairage</div>
                        <a href="produit-detail.html?id=4" class="btn">Détails</a>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">Souris</div>
                    <div class="product-info">
                        <div class="product-name">Souris Gamer Wireless</div>
                        <div class="product-price">89,99 €</div>
                        <div class="product-description">12000 DPI, Batterie 100h</div>
                        <a href="produit-detail.html?id=5" class="btn">Détails</a>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">Écran 4K</div>
                    <div class="product-info">
                        <div class="product-name">Écran 4K 27 pouces</div>
                        <div class="product-price">449,99 €</div>
                        <div class="product-description">144Hz, HDR, USB-C</div>
                        <a href="produit-detail.html?id=6" class="btn">Détails</a>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">Casque Audio</div>
                    <div class="product-info">
                        <div class="product-name">Casque Bluetooth Pro</div>
                        <div class="product-price">249,99 €</div>
                        <div class="product-description">Réduction active, 40h autonomie</div>
                        <a href="produit-detail.html?id=7" class="btn">Détails</a>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">Webcam HD</div>
                    <div class="product-info">
                        <div class="product-name">Webcam 4K Auto-focus</div>
                        <div class="product-price">129,99 €</div>
                        <div class="product-description">Microphone intégré, Vision nocturne</div>
                        <a href="produit-detail.html?id=8" class="btn">Détails</a>
                    </div>
                </div>
            </div>
        </main>
    @elseif($slug == 'petit-electromenager')
        <main>
            <div class="breadcrumb">
                <a href="../index.html">Accueil</a>
                <span>/</span>
                <strong>Petit Électroménager</strong>
            </div>

            <h1 class="page-title">🍳 Petit Électroménager</h1>

            <div class="products-grid">
                <div class="product-card">
                    <div class="product-image">Cafetière</div>
                    <div class="product-info">
                        <div class="product-name">Cafetière Programmable</div>
                        <div class="product-price">79,99 €</div>
                        <div class="product-description">12 tasses, Minuteur programmable</div>
                        <a href="produit-detail.html?id=21" class="btn">Détails</a>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">Grille-pain</div>
                    <div class="product-info">
                        <div class="product-name">Grille-pain Premium</div>
                        <div class="product-price">49,99 €</div>
                        <div class="product-description">4 fentes, 7 niveaux de cuisson</div>
                        <a href="produit-detail.html?id=22" class="btn">Détails</a>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">Mixeur</div>
                    <div class="product-info">
                        <div class="product-name">Blender Haute Vitesse</div>
                        <div class="product-price">129,99 €</div>
                        <div class="product-description">2000W, 8 vitesses, Bol sans BPA</div>
                        <a href="produit-detail.html?id=23" class="btn">Détails</a>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">Bouilloire</div>
                    <div class="product-info">
                        <div class="product-name">Bouilloire Électrique Sans Fil</div>
                        <div class="product-price">34,99 €</div>
                        <div class="product-description">Arrêt automatique, 1.7L</div>
                        <a href="produit-detail.html?id=24" class="btn">Détails</a>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">Robot Culinaire</div>
                    <div class="product-info">
                        <div class="product-name">Robot Culinaire Multifonction</div>
                        <div class="product-price">189,99 €</div>
                        <div class="product-description">15 accessoires, 1200W</div>
                        <a href="produit-detail.html?id=25" class="btn">Détails</a>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">Micro-ondes</div>
                    <div class="product-info">
                        <div class="product-name">Micro-ondes Numérique</div>
                        <div class="product-price">99,99 €</div>
                        <div class="product-description">800W, 20L, Mode grill</div>
                        <a href="produit-detail.html?id=26" class="btn">Détails</a>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">Fer à repasser</div>
                    <div class="product-info">
                        <div class="product-name">Fer à Repasser Vapeur</div>
                        <div class="product-price">59,99 €</div>
                        <div class="product-description">2400W, Semelle en céramique</div>
                        <a href="produit-detail.html?id=27" class="btn">Détails</a>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">Appareil Raclette</div>
                    <div class="product-info">
                        <div class="product-name">Appareil à Raclette Électrique</div>
                        <div class="product-price">44,99 €</div>
                        <div class="product-description">4 portions, Non-adhésif</div>
                        <a href="produit-detail.html?id=28" class="btn">Détails</a>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">Aspirateur</div>
                    <div class="product-info">
                        <div class="product-name">Aspirateur Sans Fil Cyclonique</div>
                        <div class="product-price">299,99 €</div>
                        <div class="product-description">60 min autonomie, Programmable</div>
                        <a href="produit-detail.html?id=29" class="btn">Détails</a>
                    </div>
                </div>
            </div>
        </main>
    @elseif($slug == 'grand-electromenager')
        <main>
            <div class="breadcrumb">
                <a href="../index.html">Accueil</a>
                <span>/</span>
                <strong>Grand Électroménager</strong>
            </div>

            <h1 class="page-title">❄️ Grand Électroménager</h1>

            <div class="products-grid">
                <div class="product-card">
                    <div class="product-image">Réfrigérateur</div>
                    <div class="product-info">
                        <div class="product-name">Réfrigérateur Connecté</div>
                        <div class="product-price">1499,99 €</div>
                        <div class="product-description">French Door, 620L, WiFi intégré</div>
                        <a href="produit-detail.html?id=41" class="btn">Détails</a>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">Lave-linge</div>
                    <div class="product-info">
                        <div class="product-name">Lave-linge Haut de Gamme</div>
                        <div class="product-price">899,99 €</div>
                        <div class="product-description">9kg, A+++, 1400 tours/min</div>
                        <a href="produit-detail.html?id=42" class="btn">Détails</a>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">Lave-vaisselle</div>
                    <div class="product-info">
                        <div class="product-name">Lave-vaisselle Encastrable</div>
                        <div class="product-price">599,99 €</div>
                        <div class="product-description">14 couverts, A+++, 42dB</div>
                        <a href="produit-detail.html?id=43" class="btn">Détails</a>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">Cuisinière</div>
                    <div class="product-info">
                        <div class="product-name">Cuisinière Multi-fonction</div>
                        <div class="product-price">749,99 €</div>
                        <div class="product-description">Induction, Convection, Vapeur</div>
                        <a href="produit-detail.html?id=44" class="btn">Détails</a>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">Four</div>
                    <div class="product-info">
                        <div class="product-name">Four Électrique Premium</div>
                        <div class="product-price">599,99 €</div>
                        <div class="product-description">80L, Nettoyage automatique</div>
                        <a href="produit-detail.html?id=45" class="btn">Détails</a>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">Congélateur</div>
                    <div class="product-info">
                        <div class="product-name">Congélateur Vertical</div>
                        <div class="product-price">449,99 €</div>
                        <div class="product-description">260L, A+, Décongélation rapide</div>
                        <a href="produit-detail.html?id=46" class="btn">Détails</a>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">Climatiseur</div>
                    <div class="product-info">
                        <div class="product-name">Climatiseur Réversible</div>
                        <div class="product-price">1299,99 €</div>
                        <div class="product-description">3000W, Chauffage + Refroidissement</div>
                        <a href="produit-detail.html?id=47" class="btn">Détails</a>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">Sèche-linge</div>
                    <div class="product-info">
                        <div class="product-name">Sèche-linge Condensation</div>
                        <div class="product-price">649,99 €</div>
                        <div class="product-description">8kg, A++, Capteur humidité</div>
                        <a href="produit-detail.html?id=48" class="btn">Détails</a>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">Chauffage</div>
                    <div class="product-info">
                        <div class="product-name">Radiateur Électrique Connecté</div>
                        <div class="product-price">399,99 €</div>
                        <div class="product-description">2000W, WiFi, Thermostat</div>
                        <a href="produit-detail.html?id=49" class="btn">Détails</a>
                    </div>
                </div>
            </div>
        </main>
    @else
        <h1>Catégorie non trouvée</h1>
    @endif --}}
@endsection
