<?php

/**
 * MegaShop - Fichier de Données PHP
 * Contient toutes les données nécessaires pour dynamiser le site
 * Date: 22 février 2026
 */

// ============================================
// 1. CONFIGURATION DU SITE
// ============================================


// Informations de l'entreprise
$config = [
    'company' => [
        'name' => 'MegaShop',
        'siret' => '123 456 789 00012',
        'address' => '123 Avenue du Commerce',
        'city' => 'Paris',
        'zip' => '75001',
        'country' => 'France',
        'phone' => '+212 1 23 45 67 89',
        'email' => 'info@megashop.com',
        'support_email' => 'support@megashop.com',
        'sales_email' => 'ventes@megashop.com',
    ],
    'contact' => [
        'phone_general' => '+212 1 23 45 67 89',
        'phone_support' => '+212 1 23 45 67 00',
        'phone_sales' => '+212 1 23 45 67 99',
    ],
    'hours' => [
        'monday_friday' => '9:00 - 18:00',
        'saturday' => '10:00 - 16:00',
        'sunday' => 'Fermé',
    ],
    'social' => [
        'facebook' => 'https://facebook.com/megashop',
        'instagram' => 'https://instagram.com/megashop',
        'twitter' => 'https://twitter.com/megashop',
        'youtube' => 'https://youtube.com/megashop',
    ],
];

// ============================================
// 2. CATÉGORIES DE PRODUITS
// ============================================
$categories = [
    'informatique' => [
        'id' => 'informatique',
        'name' => 'Informatique',
        'slug' => 'informatique',
        'icon' => '💻',
        'description' => 'Ordinateurs, laptops, accessoires informatiques et bien plus...',
        'url' => 'informatique.php',
    ],
    'petit-electromenager' => [
        'id' => 'petit_electromenager',
        'name' => 'Petit Électroménager',
        'slug' => 'petit-electromenager',
        'icon' => '🍳',
        'description' => 'Cafetières, grille-pain, mixeurs, robots culinaires...',
        'url' => 'petit-electromenager.php',
    ],
    'grand-electromenager' => [
        'id' => 'grand_electromenager',
        'name' => 'Grand Électroménager',
        'slug' => 'grand-electromenager',
        'icon' => '❄️',
        'description' => 'Réfrigérateurs, lave-linge, lave-vaisselle, fours...',
        'url' => 'grand-electromenager.php',
    ],
];

// ============================================
// 3. PRODUITS - INFORMATIQUE
// ============================================
$products['informatique'] = [
    [
        'id' => 1,
        'category' => 'informatique',
        'name' => 'Ordinateur Portable Pro',
        'price' => 1299.99,
        'description' => 'Intel i7, 16GB RAM, SSD 512GB',
        'stock' => 5,
        'image' => 'ordinateur-portable-pro.jpg',
        'specs' => [
            'Processeur' => 'Intel Core i7-13700K',
            'RAM' => '16 GB DDR5',
            'Stockage' => 'SSD NVMe 512 GB',
            'Écran' => '15.6" IPS 1920x1080',
            'Carte Graphique' => 'NVIDIA RTX 4060',
            'Batterie' => '80 Wh (10 heures autonomie)',
            'Poids' => '1.8 kg',
            'Couleur' => 'Gris Sidéral',
        ],
        'ports' => [
            '2x USB-C Thunderbolt 4',
            '2x USB-A 3.2',
            '1x HDMI 2.1',
            '1x Jack audio 3.5mm',
            'WiFi 6E 802.11ax',
            'Bluetooth 5.3',
        ],
        'details' => 'L\'Ordinateur Portable Pro est conçu pour les professionnels qui exigent performance et mobilité.',
        'rating' => 4.8,
        'reviews' => 156,
    ],
    [
        'id' => 2,
        'category' => 'informatique',
        'name' => 'PC Bureau Gaming',
        'price' => 1899.99,
        'description' => 'RTX 4070, i9, 32GB RAM',
        'stock' => 3,
        'image' => 'pc-bureau-gaming.jpg',
        'specs' => [
            'Processeur' => 'Intel Core i9-13900K',
            'GPU' => 'NVIDIA RTX 4070',
            'RAM' => '32 GB DDR5',
            'Stockage' => 'SSD 1TB',
            'Alimentation' => '850W',
        ],
        'rating' => 4.9,
        'reviews' => 89,
    ],
    [
        'id' => 3,
        'category' => 'informatique',
        'name' => 'Tablette 12 pouces',
        'price' => 599.99,
        'description' => 'OLED, 128GB, Stylet inclus',
        'stock' => 8,
        'image' => 'tablette-12-pouces.jpg',
        'specs' => [
            'Écran' => '12" OLED 2560x1600',
            'Processeur' => 'Apple M2',
            'RAM' => '8GB',
            'Stockage' => '128GB',
            'Batterie' => '40Wh (12 heures)',
        ],
        'rating' => 4.7,
        'reviews' => 234,
    ],
    [
        'id' => 4,
        'category' => 'informatique',
        'name' => 'Clavier Mécanique RGB',
        'price' => 179.99,
        'description' => 'Switches personnalisées, Rétroéclairage',
        'stock' => 12,
        'image' => 'clavier-mecanique-rgb.jpg',
        'specs' => [
            'Type' => 'Mécanique',
            'Layout' => 'AZERTY',
            'Rétroéclairage' => 'RGB par touche',
            'Connectivité' => 'USB-C',
        ],
        'rating' => 4.6,
        'reviews' => 145,
    ],
    [
        'id' => 5,
        'category' => 'informatique',
        'name' => 'Souris Gamer Wireless',
        'price' => 89.99,
        'description' => '12000 DPI, Batterie 100h',
        'stock' => 15,
        'image' => 'souris-gamer-wireless.jpg',
        'specs' => [
            'DPI' => 'Jusqu\'à 12000',
            'Capteur' => 'PMW3389',
            'Autonomie' => '100 heures',
            'Boutons' => '11',
        ],
        'rating' => 4.5,
        'reviews' => 98,
    ],
    [
        'id' => 6,
        'category' => 'informatique',
        'name' => 'Écran 4K 27 pouces',
        'price' => 449.99,
        'description' => '144Hz, HDR, USB-C',
        'stock' => 4,
        'image' => 'ecran-4k-27.jpg',
        'specs' => [
            'Résolution' => 'UHD 4K 3840x2160',
            'Fréquence' => '144Hz',
            'Panel' => 'IPS',
            'USB-C' => '90W Power Delivery',
        ],
        'rating' => 4.8,
        'reviews' => 76,
    ],
    [
        'id' => 7,
        'category' => 'informatique',
        'name' => 'Casque Bluetooth Pro',
        'price' => 249.99,
        'description' => 'Réduction active, 40h autonomie',
        'stock' => 10,
        'image' => 'casque-bluetooth-pro.jpg',
        'specs' => [
            'Réduction Bruit' => 'Active ANC',
            'Autonomie' => '40 heures',
            'Codec' => 'LDAC, AAC',
            'Poids' => '250g',
        ],
        'rating' => 4.7,
        'reviews' => 523,
    ],
    [
        'id' => 8,
        'category' => 'informatique',
        'name' => 'Webcam 4K Auto-focus',
        'price' => 129.99,
        'description' => 'Microphone intégré, Vision nocturne',
        'stock' => 7,
        'image' => 'webcam-4k.jpg',
        'specs' => [
            'Résolution' => '4K 30fps / 1080p 60fps',
            'Champ de vision' => '90°',
            'Microphone' => 'Stéréo intégré',
            'Vision nocturne' => 'Oui',
        ],
        'rating' => 4.4,
        'reviews' => 112,
    ],
];

// ============================================
// 4. PRODUITS - PETIT ÉLECTROMÉNAGER
// ============================================
$products['petit-electromenager'] = [
    [
        'id' => 21,
        'category' => 'petit-electromenager',
        'name' => 'Cafetière Programmable',
        'price' => 79.99,
        'description' => '12 tasses, Minuteur programmable',
        'stock' => 6,
        'image' => 'cafetiere-programmable.jpg',
        'specs' => [
            'Capacité' => '12 tasses',
            'Programmable' => 'Oui (24h)',
            'Puissance' => '1000W',
            'Filtre' => 'Réutilisable',
        ],
        'rating' => 4.5,
        'reviews' => 67,
    ],
    [
        'id' => 22,
        'category' => 'petit-electromenager',
        'name' => 'Grille-pain Premium',
        'price' => 49.99,
        'description' => '4 fentes, 7 niveaux de cuisson',
        'stock' => 11,
        'image' => 'grille-pain-premium.jpg',
        'specs' => [
            'Fentes' => '4',
            'Niveaux' => '7',
            'Puissance' => '1500W',
            'Fonction Dégivrage' => 'Oui',
        ],
        'rating' => 4.3,
        'reviews' => 45,
    ],
    [
        'id' => 23,
        'category' => 'petit-electromenager',
        'name' => 'Blender Haute Vitesse',
        'price' => 129.99,
        'description' => '2000W, 8 vitesses, Bol sans BPA',
        'stock' => 5,
        'image' => 'blender-haute-vitesse.jpg',
        'specs' => [
            'Puissance' => '2000W',
            'Vitesses' => '8',
            'Capacité' => '1.5L',
            'Sans BPA' => 'Oui',
        ],
        'rating' => 4.6,
        'reviews' => 198,
    ],
    [
        'id' => 24,
        'category' => 'petit-electromenager',
        'name' => 'Bouilloire Électrique Sans Fil',
        'price' => 34.99,
        'description' => 'Arrêt automatique, 1.7L',
        'stock' => 20,
        'image' => 'bouilloire-sans-fil.jpg',
        'specs' => [
            'Capacité' => '1.7L',
            'Temps de chauffe' => '3-5 minutes',
            'Arrêt auto' => 'Oui',
            'Puissance' => '2200W',
        ],
        'rating' => 4.4,
        'reviews' => 234,
    ],
    [
        'id' => 25,
        'category' => 'petit-electromenager',
        'name' => 'Robot Culinaire Multifonction',
        'price' => 189.99,
        'description' => '15 accessoires, 1200W',
        'stock' => 3,
        'image' => 'robot-culinaire.jpg',
        'specs' => [
            'Puissance' => '1200W',
            'Accessoires' => '15',
            'Capacité' => '3.5L',
            'Vitesses' => '12',
        ],
        'rating' => 4.7,
        'reviews' => 156,
    ],
    [
        'id' => 26,
        'category' => 'petit-electromenager',
        'name' => 'Micro-ondes Numérique',
        'price' => 99.99,
        'description' => '800W, 20L, Mode grill',
        'stock' => 8,
        'image' => 'micro-ondes.jpg',
        'specs' => [
            'Puissance' => '800W',
            'Capacité' => '20L',
            'Programmes' => '10',
            'Grill' => 'Oui',
        ],
        'rating' => 4.5,
        'reviews' => 89,
    ],
    [
        'id' => 27,
        'category' => 'petit-electromenager',
        'name' => 'Fer à Repasser Vapeur',
        'price' => 59.99,
        'description' => '2400W, Semelle en céramique',
        'stock' => 9,
        'image' => 'fer-repasser.jpg',
        'specs' => [
            'Puissance' => '2400W',
            'Semelle' => 'Céramique',
            'Vapeur' => 'Oui',
            'Réservoir' => '200ml',
        ],
        'rating' => 4.3,
        'reviews' => 67,
    ],
    [
        'id' => 28,
        'category' => 'petit-electromenager',
        'name' => 'Appareil à Raclette Électrique',
        'price' => 44.99,
        'description' => '4 portions, Non-adhésif',
        'stock' => 14,
        'image' => 'raclette-electrique.jpg',
        'specs' => [
            'Portions' => '4',
            'Surface' => 'Non-adhésif',
            'Puissance' => '600W',
            'Thermostat' => 'Oui',
        ],
        'rating' => 4.2,
        'reviews' => 43,
    ],
    [
        'id' => 29,
        'category' => 'petit-electromenager',
        'name' => 'Aspirateur Sans Fil Cyclonique',
        'price' => 299.99,
        'description' => '60 min autonomie, Programmable',
        'stock' => 2,
        'image' => 'aspirateur-sans-fil.jpg',
        'specs' => [
            'Autonomie' => '60 minutes',
            'Cyclonique' => 'Oui',
            'Puissance' => '200W',
            'Programmable' => 'Oui',
        ],
        'rating' => 4.6,
        'reviews' => 112,
    ],
];

// ============================================
// 5. PRODUITS - GRAND ÉLECTROMÉNAGER
// ============================================
$products['grand-electromenager'] = [
    [
        'id' => 41,
        'category' => 'grand-electromenager',
        'name' => 'Réfrigérateur Connecté',
        'price' => 1499.99,
        'description' => 'French Door, 620L, WiFi intégré',
        'stock' => 1,
        'image' => 'refrigerateur-connecte.jpg',
        'specs' => [
            'Type' => 'French Door',
            'Capacité' => '620L',
            'Classe' => 'A+++',
            'Connectivité' => 'WiFi',
            'Écran' => 'Tactile 7"',
        ],
        'rating' => 4.8,
        'reviews' => 76,
    ],
    [
        'id' => 42,
        'category' => 'grand-electromenager',
        'name' => 'Lave-linge Haut de Gamme',
        'price' => 899.99,
        'description' => '9kg, A+++, 1400 tours/min',
        'stock' => 2,
        'image' => 'lave-linge-haut-gamme.jpg',
        'specs' => [
            'Capacité' => '9kg',
            'Classe' => 'A+++',
            'Vitesse' => '1400 tours/min',
            'Programmes' => '15',
        ],
        'rating' => 4.7,
        'reviews' => 134,
    ],
    [
        'id' => 43,
        'category' => 'grand-electromenager',
        'name' => 'Lave-vaisselle Encastrable',
        'price' => 599.99,
        'description' => '14 couverts, A+++, 42dB',
        'stock' => 4,
        'image' => 'lave-vaisselle.jpg',
        'specs' => [
            'Couverts' => '14',
            'Classe' => 'A+++',
            'Bruit' => '42dB',
            'Programmes' => '8',
        ],
        'rating' => 4.6,
        'reviews' => 98,
    ],
    [
        'id' => 44,
        'category' => 'grand-electromenager',
        'name' => 'Cuisinière Multi-fonction',
        'price' => 749.99,
        'description' => 'Induction, Convection, Vapeur',
        'stock' => 3,
        'image' => 'cuisiniere-multifonction.jpg',
        'specs' => [
            'Table' => 'Induction',
            'Four' => 'Convection + Vapeur',
            'Puissance' => '7000W',
        ],
        'rating' => 4.5,
        'reviews' => 67,
    ],
    [
        'id' => 45,
        'category' => 'grand-electromenager',
        'name' => 'Four Électrique Premium',
        'price' => 599.99,
        'description' => '80L, Nettoyage automatique',
        'stock' => 2,
        'image' => 'four-electrique.jpg',
        'specs' => [
            'Capacité' => '80L',
            'Classe' => 'A',
            'Nettoyage' => 'Automatique',
            'Fonctions' => '10',
        ],
        'rating' => 4.7,
        'reviews' => 89,
    ],
    [
        'id' => 46,
        'category' => 'grand-electromenager',
        'name' => 'Congélateur Vertical',
        'price' => 449.99,
        'description' => '260L, A+, Décongélation rapide',
        'stock' => 5,
        'image' => 'congelateur-vertical.jpg',
        'specs' => [
            'Capacité' => '260L',
            'Classe' => 'A+',
            'Décongélation' => 'Rapide',
        ],
        'rating' => 4.4,
        'reviews' => 54,
    ],
    [
        'id' => 47,
        'category' => 'grand-electromenager',
        'name' => 'Climatiseur Réversible',
        'price' => 1299.99,
        'description' => '3000W, Chauffage + Refroidissement',
        'stock' => 2,
        'image' => 'climatiseur-reversible.jpg',
        'specs' => [
            'Puissance' => '3000W',
            'Réversible' => 'Oui',
            'Classe' => 'A+++',
            'Bruit' => '24dB',
        ],
        'rating' => 4.8,
        'reviews' => 142,
    ],
    [
        'id' => 48,
        'category' => 'grand-electromenager',
        'name' => 'Sèche-linge Condensation',
        'price' => 649.99,
        'description' => '8kg, A++, Capteur humidité',
        'stock' => 3,
        'image' => 'seche-linge.jpg',
        'specs' => [
            'Capacité' => '8kg',
            'Classe' => 'A++',
            'Technologie' => 'Pompe à chaleur',
        ],
        'rating' => 4.5,
        'reviews' => 76,
    ],
    [
        'id' => 49,
        'category' => 'grand-electromenager',
        'name' => 'Radiateur Électrique Connecté',
        'price' => 399.99,
        'description' => '2000W, WiFi, Thermostat',
        'stock' => 8,
        'image' => 'radiateur-connecte.jpg',
        'specs' => [
            'Puissance' => '2000W',
            'WiFi' => 'Oui',
            'Thermostat' => 'Programmable',
            'Détecteur' => 'Présence',
        ],
        'rating' => 4.6,
        'reviews' => 203,
    ],
];

// ============================================
// 6. PAGES DU SITE
// ============================================
$pages = [
    'accueil' => [
        'id' => 'accueil',
        'title' => 'Accueil - MegaShop',
        'url' => 'home.blade.php',
        'description' => 'Page d\'accueil du site MegaShop',
    ],
    'informatique' => [
        'id' => 'informatique',
        'title' => 'Informatique - MegaShop',
        'url' => 'informatique.php',
        'description' => 'Catégorie Informatique',
    ],
    'petit-electromenager' => [
        'id' => 'petit_electromenager',
        'title' => 'Petit Électroménager - MegaShop',
        'url' => 'pages/petit-electromenager.php',
        'description' => 'Catégorie Petit Électroménager',
    ],
    'grand-electromenager' => [
        'id' => 'grand_electromenager',
        'title' => 'Grand Électroménager - MegaShop',
        'url' => 'pages/grand-electromenager.php',
        'description' => 'Catégorie Grand Électroménager',
    ],
    'produit_detail' => [
        'id' => 'produit_detail',
        'title' => 'Détail Produit - MegaShop',
        'url' => 'pages/produit-detail.php',
        'description' => 'Page de détail d\'un produit',
    ],
    'cgv' => [
        'id' => 'cgv',
        'title' => 'CGV - MegaShop',
        'url' => 'pages/cgv.php',
        'description' => 'Conditions Générales de Vente',
    ],
    'contact' => [
        'id' => 'contact',
        'title' => 'Contact - MegaShop',
        'url' => 'contact.blade.php',
        'description' => 'Page de contact',
    ],
];

// ============================================
// 7. CONDITIONS GÉNÉRALES DE VENTE
// ============================================
$cgv = 
[
    [
        'id' => 1,
        'title' => 'Dispositions Générales',
        'section' => [
            [
                'subtitle' => null,
                'content' => "Les présentes Conditions Générales de Vente régissent les relations commerciales entre MegaShop (ci-après « le vendeur ») et ses clients (ci-après « l'acheteur »). Tout achat implique l'acceptation inconditionnelle de ces conditions."
            ],
            [
                'subtitle' => null,
                'content' => "MegaShop est une entreprise proposant la vente de produits électroniques et électroménagers par voie électronique. L'accès au site marchand implique l'acceptation des conditions qui y figurent."
            ]
        ]
    ],

    [
        'id' => 2,
        'title' => 'Offres de Produits',
        'section' => [
            [
                'subtitle' => 'Validité des Offres',
                'content' => "Les produits présentés sur le site sont offerts à titre informatif. Les prix affichés sont valables au moment de leur publication et peuvent être modifiés sans préavis. Les offres sont valables sous réserve de disponibilité en stock."
            ],
            [
                'subtitle' => 'Description des Produits',
                'content' => "Les descriptions, photographies et caractéristiques des produits présentés sur le site sont aussi précises que possible. Cependant, MegaShop ne peut garantir l'absence d'erreur ou d'omission."
            ]
        ]
    ],

    [
        'id' => 3,
        'title' => 'Commandes et Confirmation',
        'section' => [
            [
                'subtitle' => 'Processus de Commande',
                'content' => "La commande en ligne constitue une offre d'achat. La confirmation de commande n'est effective que lorsque MegaShop a confirmé par écrit (email) l'acceptation de la commande et le paiement a été reçu."
            ],
            [
                'subtitle' => 'Droit de Rétractation',
                'content' => "Conformément à la loi, vous disposez d'un délai de 30 jours à compter de la réception de votre commande pour exercer votre droit de rétractation sans motif et sans pénalité."
            ],
            [
                'subtitle' => 'Conditions de Retour',
                'content' => [
                    "Le produit doit être retourné dans son emballage d'origine, en parfait état",
                    "Les frais de retour sont à la charge de l'acheteur sauf si le retour est dû à un défaut",
                    "Le remboursement sera effectué sous 14 jours suivant la réception du produit"
                ]
            ]
        ]
    ],

    [
        'id' => 4,
        'title' => 'Conditions de Règlement',
        'section' => [
            [
                'subtitle' => 'Modes de Paiement',
                'content' => [
                    "Carte bancaire (Visa, MasterCard, American Express)",
                    "Virement bancaire",
                    "PayPal",
                    "Paiement en 3 ou 4 fois sans frais"
                ]
            ],
            [
                'subtitle' => 'Sécurité des Paiements',
                'content' => "Tous les paiements en ligne sont sécurisés via HTTPS et 3D Secure."
            ],
            [
                'subtitle' => 'Facture',
                'content' => "Une facture numérique est envoyée après paiement."
            ]
        ]
    ],

    [
        'id' => 5,
        'title' => 'Conditions de Livraison',
        'section' => [
            [
                'subtitle' => 'Zones de Livraison',
                'content' => "Livraison en France et Belgique."
            ],
            [
                'subtitle' => 'Délais de Livraison',
                'content' => [
                    "Standard : 5 à 7 jours",
                    "Express : 2 à 3 jours",
                    "Retrait magasin : immédiat"
                ]
            ],
            [
                'subtitle' => 'Frais de Livraison',
                'content' => "Gratuite à partir de 50€, sinon 5.99€."
            ],
            [
                'subtitle' => 'Responsabilité',
                'content' => "MegaShop n'est pas responsable des retards externes."
            ]
        ]
    ],

    [
        'id' => 6,
        'title' => 'Garantie et Service Après-Vente',
        'section' => [
            [
                'subtitle' => 'Garantie Légale',
                'content' => "Garantie de 2 ans."
            ],
            [
                'subtitle' => 'Service Technique',
                'content' => "Support via email et téléphone."
            ],
            [
                'subtitle' => 'Exclusions',
                'content' => [
                    "Mauvaise utilisation",
                    "Usure normale",
                    "Dommages physiques",
                    "Réparations non autorisées"
                ]
            ]
        ]
    ],

    [
        'id' => 7,
        'title' => 'Responsabilité',
        'section' => [
            [
                'subtitle' => 'Limitation',
                'content' => "Responsabilité limitée au montant de la commande."
            ],
            [
                'subtitle' => 'Disponibilité',
                'content' => "Site disponible 24h/24 sauf maintenance."
            ]
        ]
    ],

    [
        'id' => 8,
        'title' => 'Propriété Intellectuelle',
        'section' => [
            [
                'subtitle' => null,
                'content' => "Tous les contenus sont protégés."
            ]
        ]
    ],

    [
        'id' => 9,
        'title' => 'Protection des Données',
        'section' => [
            [
                'subtitle' => null,
                'content' => "Les données sont protégées selon le RGPD."
            ]
        ]
    ],

    [
        'id' => 10,
        'title' => 'Modification des CGV',
        'section' => [
            [
                'subtitle' => null,
                'content' => "MegaShop peut modifier les CGV à tout moment."
            ]
        ]
    ],

    [
        'id' => 11,
        'title' => 'Loi Applicable',
        'section' => [
            [
                'subtitle' => null,
                'content' => "Soumis à la loi française."
            ]
        ]
    ],

    [
        'id' => 12,
        'title' => 'Contact',
        'section' => [
            [
                'subtitle' => null,
                'content' => [
                    "Siège : 123 Avenue du Commerce, Paris",
                    "Email : support@megashop.com",
                    "Téléphone : +212 1 23 45 67 89",
                    "SIRET : 123 456 789 00012"
                ]
            ]
        ]
    ],
];

// ============================================
// 8. FAQ - QUESTIONS FRÉQUEMMENT POSÉES
// ============================================
$faq =
[
    [
        'id' => 1,
        'question' => 'Quelle est la durée standard de livraison ?',
        'answer' => 'La livraison standard prend 5 à 7 jours ouvrables. Une livraison express est également disponible en 2 à 3 jours ouvrables.',
    ],
    [
        'id' => 2,
        'question' => 'Comment puis-je retourner un produit ?',
        'answer' => 'Vous disposez de 30 jours pour retourner votre produit. Veuillez nous contacter pour obtenir une étiquette de retour.',
    ],
    [
        'id' => 3,
        'question' => 'Acceptez-vous les paiements en plusieurs fois ?',
        'answer' => 'Oui, nous proposons le paiement en 3 ou 4 fois sans frais pour les achats supérieurs à 100 €.',
    ],
    [
        'id' => 4,
        'question' => 'Comment puis-je suivre ma commande ?',
        'answer' => 'Un numéro de suivi vous sera envoyé par email après la confirmation de votre commande.',
    ],
    [
        'id' => 5,
        'question' => 'Proposez-vous une garantie sur vos produits ?',
        'answer' => 'Tous nos produits bénéficient d\'une garantie légale de 2 ans.',
    ],
]
;

// ============================================
// 9. NAVIGATION DU SITE
// ============================================
$navigation = [
    [
        'label' => 'Accueil',
        'url' => 'home.blade.php',
        'active' => false,
    ],
    [
        'label' => 'Informatique',
        'url' => 'categories/informatique.blade.php',
        'active' => false,
    ],
    [
        'label' => 'Petit Électroménager',
        'url' => 'categories/petit-electromenager.blade.php',
        'active' => false,
    ],
    [
        'label' => 'Grand Électroménager',
        'url' => 'categories/grand-electromenager.blade.php',
        'active' => false,
    ],
    [
        'label' => 'CGV',
        'url' => 'cgv.blade.php',
        'active' => false,
    ],
    [
        'label' => 'Contact',
        'url' => 'contact.blade.php',
        'active' => false,
    ],
];

