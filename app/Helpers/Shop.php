<?php
// ============================================
// 10. FONCTIONS UTILITAIRES
// ============================================
/**
 * Récupère tous les produits d'une catégorie
 *
 * @param  string  $category
 * @return array
 */
function getProductsByCategory($category)
{
    global $products;

    return isset($products[$category]) ? $products[$category] : [];
}

/**
 * Récupère un produit par son ID
 *
 * @param  int  $id
 * @return array|null
 */
function getProductById($id)
{
    global $products;
    foreach ($products as $category => $items) {
        foreach ($items as $product) {
            if ($product['id'] == $id) {
                return $product;
            }
        }
    }

    return null;
}

/**
 * Récupère une catégorie par son ID
 *
 * @param  string  $id
 * @return array|null
 */
function getCategoryById($id)
{
    global $categories;

    return isset($categories[$id]) ? $categories[$id] : null;
}

/**
 * Formate le prix en euros
 *
 * @param  float  $price
 * @return string
 */
function formatPrice($price)
{
    return number_format($price, 2, ',', ' ').' €';
}

/**
 * Génère l'URL d'une catégorie
 *
 * @param  string  $slug
 * @return string
 */
function getCategoryUrl($slug)
{
    return 'pages/'.$slug.'.php';
}

/**
 * Génère l'URL d'un produit
 *
 * @param  int  $productId
 * @param  string  $productName
 * @return string
 */
function getProductUrl($productId, $productName = '')
{
    $slug = strtolower(str_replace(' ', '-', $productName));

    return '/produit-detail.php?id='.$productId.'&name='.$slug;
}

/**
 * Vérifie la disponibilité d'un produit
 */
function isProductAvailable(int $stock): bool
{
    return $stock > 0;
}

/**
 * Récupère les produits en vedette (stock > 0 et rating > 4.5)
 *@return array
 */
function getFeaturedProducts($products)
{
    $featured = [];

    foreach ($products as $items) {
        foreach ($items as $product) {
            if ($product['stock'] > 0 && isset($product['rating'])) {
                $featured[] = $product;
            }
        }
    }

    usort($featured, function ($a, $b) {
        return $b['rating'] <=> $a['rating'];
    });

    return array_slice($featured, 0, 3);
}

?>

?>
