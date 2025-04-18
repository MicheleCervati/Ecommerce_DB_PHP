<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="listaProdotti.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css" rel="stylesheet">
</head>
<body>

    <!-- Icona del carrello per schermi piccoli -->
    <div class="d-lg-none position-fixed bottom-0 end-0 p-3">
        <button id="cart-icon" class="btn btn-primary">
            <i class="bi bi-cart"></i>
        </button>
    </div>

    <!-- Sidebar -->
    <div class="d-flex flex-column flex-shrink-0 p-3 bg-light vh-100 position-fixed end-0" id="sidebar">
        <h4>Carrello</h4>
        <ul class="list-unstyled cart-items-container" id="cart-items"></ul>
        <button id="checkout-button" class="btn btn-secondary mt-auto">Vai al pagamento</button>
    </div>

    <!-- Main Content -->
    <div class="container py-5" id="main-content">
        <h1 class="text-center mb-5">Prodotti</h1>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4" id="product-container">
            <!-- I prodotti verranno generati dinamicamente qui -->
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="listaProdotti.js"></script>
    <script src="redirectProdotti.js"></script>
    <script src="sidebar.js"></script>
</body>
</html>