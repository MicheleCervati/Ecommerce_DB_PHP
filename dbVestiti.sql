CREATE DATABASE ClothingStore;
USE ClothingStore;

-- Tabella principale per i prodotti
CREATE TABLE products (
    id INT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    category VARCHAR(100),
    materiale VARCHAR(100),
    codice_articolo VARCHAR(50) UNIQUE,
    fit VARCHAR(50),
    istruzioni_lavatrice VARCHAR(255)
);

-- Tabella per le varianti di colore
CREATE TABLE colors (
    id INT AUTO_INCREMENT PRIMARY KEY,
    product_id INT,
    color VARCHAR(50),
    image VARCHAR(255),
    price DECIMAL(10,2),
    FOREIGN KEY (product_id) REFERENCES products(id) ON DELETE CASCADE
);

-- Tabella per le taglie disponibili
CREATE TABLE sizes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    color_id INT,
    size VARCHAR(10),
    FOREIGN KEY (color_id) REFERENCES colors(id) ON DELETE CASCADE
);

-- Inserimento dati nei prodotti
INSERT INTO products (id, title, category, materiale, codice_articolo, fit, istruzioni_lavatrice) VALUES
(0, 'Maglietta Balenciaga', 'Magliette', 'Cotone', '123456', 'Regular', 'Lavare a 30°, delicato'),
(1, 'Felpa Hermes', 'Felpe', 'Cotone', '654321', 'Loose', 'Lavare a 30°, delicato'),
(2, 'Pantaloni Gucci', 'Pantaloni', 'Poliestere', '789012', 'Slim', 'Lavare a 40°, delicato'),
(3, 'Gonna Dior', 'Gonne', 'Seta', '345678', 'A-line', 'Lavare a mano, delicato'),
(4, 'Scarpe Nike', 'Scarpe', 'Pelle', '987654', 'Regular', 'Pulire con un panno umido'),
(5, 'Cappotto Zara', 'Cappotti', 'Lana', '112233', 'Regular', 'Lavare a secco'),
(6, 'Giubino Moncler', 'Accessori', 'Nylon', '445566', 'Regular', 'Lavare a 30°, delicato'),
(7, 'Giubino Napapijri', 'Cappotti', 'Poliestere', '778899', 'Regular', 'Lavare a 30°, delicato');

-- Inserimento dati nei colori e prezzi
INSERT INTO colors (product_id, color, image, price) VALUES
(0, 'Rosso', '/img/magliettaRossa.jpg', 19.99),
(0, 'Blu', '/img/magliettaBlu.jpg', 21.99),
(1, 'Blu', '/img/felpaBlu.jpg', 39.99),
(1, 'Grigio', '/img/felpaGrigia.jpg', 42.99),
(2, 'Verde', '/img/pantaloniGucciVerdi.jpg', 29.99),
(2, 'Arancione', '/img/pantaloniGucciArancioni.jpg', 32.99),
(2, 'Viola', '/img/pantaloniGucciViola.jpg', 38.99),
(3, 'Giallo', '/img/gonnaDiorGialla.jpg', 24.99),
(3, 'Rosa', '/img/gonnaDiorRosa.jpg', 26.99),
(4, 'Bianco', '/img/scarpeNikeBianche.jpg', 49.99),
(5, 'Marrone', '/img/cappottoZaraMarrone.jpg', 89.99),
(5, 'Nero', '/img/cappottoZaraNero.jpg', 92.99),
(6, 'Nero', '/img/giubinoMonclerNero.jpg', 129.99),
(7, 'Verde', '/img/giubinoNapapijriVerde.jpg', 89.99),
(7, 'Rosa', '/img/giubinoNapapijriRosa.jpg', 160.99);

-- Inserimento taglie per ogni variante di colore
INSERT INTO sizes (color_id, size) VALUES
(1, 'S'), (1, 'M'), (1, 'XL'),
(2, 'S'), (2, 'M'), (2, 'L'),
(3, 'M'), (3, 'L'), (3, 'XL'),
(4, 'S'), (4, 'M'), (4, 'L'),
(5, 'XS'), (5, 'S'), (5, 'M'), (5, 'L'),
(6, 'S'), (6, 'M'), (6, 'L'), (6, 'XL'),
(7, 'S'), (7, 'M'), (7, 'L'), (7, 'XL'),
(8, 'XS'), (8, 'S'), (8, 'M'),
(9, 'S'), (9, 'M'), (9, 'L'),
(10, '38'), (10, '39'), (10, '40'), (10, '41'),
(11, 'S'), (11, 'M'), (11, 'L'),
(12, 'M'), (12, 'L'), (12, 'XL'),
(13, 'Unica'),
(14, 'S'), (14, 'L'),
(15, 'XXS'), (15, 'XXL');


