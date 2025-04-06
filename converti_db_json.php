<?php

$dsn = 'mysql:host=localhost;dbname=ClothingStore;charset=utf8';
$username = 'root';
$password = '';

try {
    // Connessione al database
    $pdo = new PDO($dsn, $username, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);

    // Query per ottenere i prodotti
    $stmt = $pdo->query("SELECT * FROM products");
    $products = $stmt->fetchAll();

    $result = [];

    foreach ($products as $product) {
        // Query per ottenere le varianti di colore del prodotto
        $stmt = $pdo->prepare("SELECT * FROM colors WHERE product_id = ?");
        $stmt->execute([$product['id']]);
        $colors = $stmt->fetchAll();

        $productColors = [];

        foreach ($colors as $color) {
            // Query per ottenere le taglie per ogni variante di colore
            $stmt = $pdo->prepare("SELECT size FROM sizes WHERE color_id = ?");
            $stmt->execute([$color['id']]);
            $sizes = $stmt->fetchAll(PDO::FETCH_COLUMN);

            $productColors[] = [
                'color' => $color['color'],
                'sizes' => $sizes,
                'image' => $color['image'],
                'price' => (float) $color['price']
            ];
        }

        $result['products'][] = [
            'id' => $product['id'],
            'title' => $product['title'],
            'colors' => $productColors,
            'category' => $product['category'],
            'materiale' => $product['materiale'],
            'codice_articolo' => $product['codice_articolo'],
            'fit' => $product['fit'],
            'istruzioni_lavatrice' => $product['istruzioni_lavatrice']
        ];
    }

    $fp = fopen('./json/prodotti.json', 'w');
    fwrite($fp, json_encode($result, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

    // Redirect a prodottoSingolo/prodottosingolo.php
    header('Location: ./listaProdotti/listaProdotti.php');
    exit();

} catch (PDOException $e) {
    echo "Errore di connessione: " . $e->getMessage();
}

?>