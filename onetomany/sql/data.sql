
CREATE TABLE categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL
);

CREATE TABLE merchandise (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    category_id INT,
    price DECIMAL(10, 2),
    FOREIGN KEY (category_id) REFERENCES categories(id)
);

INSERT INTO categories (name) VALUES ('Toys'), ('Apparel'), ('Accessories');

INSERT INTO merchandise (name, category_id, price) VALUES 
('Pikachu Plush Toy', 1, 19.99),
('Pokémon T-Shirt', 2, 25.00),
('Pokémon Card Binder', 3, 12.50);