<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dettaglio Prodotto</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container py-5">
        <div class="row g-4 align-items-center">
            <!-- Immagine prodotto (colonna più grande su schermi grandi) -->
            <div class="col-lg-6">
                <div class="card shadow-sm border-0">
                    <img id="product-image" class="card-img-top img-fluid" alt="Immagine prodotto">
                </div>
            </div>

            <!-- Informazioni prodotto -->
            <div class="col-lg-6">
                <div class="card shadow-sm border-0 p-4">
                    <div class="card-body text-center text-lg-start">
                        <h2 id="product-title" class="fw-bold"></h2>
                        <p id="product-price" class="text-success fs-4 fw-bold"></p>
                        <p id="product-category" class="text-muted"></p>

                        <div class="my-3">
                            <h5>Colori disponibili:</h5>
                            <div id="color-buttons" class="d-flex flex-wrap gap-2"></div>
                        </div>

                        <div class="my-3">
                            <h5>Taglie disponibili:</h5>
                            <div id="size-buttons" class="d-flex flex-wrap gap-2"></div>
                        </div>

                        <button id="add-to-cart" class="btn btn-primary btn-lg w-100" disabled>
                            Aggiungi al Carrello
                        </button>
                        <button id="view-features" class="btn btn-secondary btn-lg w-100 mt-3">
                            Visualizza Caratteristiche
                        </button>
                        <button id="back-to-shopping" class="btn btn-secondary btn-lg w-100 mt-3">
                            Torna allo Shopping
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JS -->
    <script src="prodottoSingolo.js"></script>
</body>
</html>