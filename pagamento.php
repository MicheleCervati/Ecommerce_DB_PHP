<!DOCTYPE html>
<html lang="it"></html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina di Pagamento</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Informazioni di Pagamento</h2>
        <form id="payment-form">
            <div class="form-group">
                <label for="cardName">Nome sulla Carta</label>
                <input type="text" class="form-control" id="cardName" required>
            </div>
            <div class="form-group">
                <label for="cardNumber">Numero della Carta</label>
                <input type="text" class="form-control" id="cardNumber" required>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="expiryDate">Data di Scadenza</label>
                    <input type="text" class="form-control" id="expiryDate" placeholder="MM/AA" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="cvv">CVV</label>
                    <input type="text" class="form-control" id="cvv" required>
                </div>
            </div>
            <h4 class="mb-3">Indirizzo di Spedizione</h4>
            <div class="form-group">
                <label for="fullName">Nome Completo</label>
                <input type="text" class="form-control" id="fullName" required>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" required>
            </div>
            <div class="form-group">
                <label for="city">City</label>
                <input type="text" class="form-control" id="city" required>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="state">State</label>
                    <input type="text" class="form-control" id="state" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="zip">Zip Code</label>
                    <input type="text" class="form-control" id="zip" required>
                </div>
            </div>
            <h4 class="mb-3">Payment Method</h4>
            <div class="form-group">
                <label for="paymentMethod">Select Payment Method</label>
                <select class="form-control" id="paymentMethod" required>
                    <option value="creditCard">Credit Card</option>
                    <option value="paypal">PayPal</option>
                    <option value="bankTransfer">Bank Transfer</option>
                </select>
            </div>
            <button type="submit" onclick="alert('grazie per l acquisto')" class="btn btn-primary">Submit Payment</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="pagamento.js"></script>
</body>
</html></div>