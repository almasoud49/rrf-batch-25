-- Create Table Statement
CREATE TABLE products (
    product_id INT PRIMARY KEY,
    name VARCHAR(255),
    category VARCHAR(100),
    price DECIMAL(10, 2),
    stock_quantity INT,
    description TEXT
);

-- Insert Statements
INSERT INTO products (product_id, name, category, price, stock_quantity, description) VALUES
(1, 'স্যামসাং গ্যালাক্সি এস২০', 'মোবাইল', 89999.00, 15, 'ফ্ল্যাগশিপ স্মার্টফোন');

-- Aggregate Functions
-- Selects the sum of all prices in the products table
SELECT SUM(price) FROM products;

-- Selects the average price of all products
SELECT AVG(price) FROM products;

-- Selects the minimum price among all products
SELECT MIN(price) FROM products;

-- Selects the maximum price among all products
SELECT MAX(price) FROM products;

-- Selects the total number of rows (products) in the table
SELECT COUNT(*) FROM products;

-- Selects the count of unique categories in the products table
SELECT COUNT(DISTINCT category) FROM products;

-- Group By Queries
-- Selects the count of products for each category
SELECT category, COUNT(*) FROM products GROUP BY category;

-- Selects the average price for each category
SELECT category, AVG(price) FROM products GROUP BY category;

-- Selects the total stock quantity for each category
SELECT category, SUM(stock_quantity) FROM products GROUP BY category;

-- Selects the maximum price within each category
SELECT category, MAX(price) FROM products GROUP BY category;

-- Group By with Having Clause
-- Selects categories where the average price of products in that category is greater than 10000
SELECT category, AVG(price) FROM products GROUP BY category HAVING AVG(price) > 10000;

-- Selects categories where the total stock quantity of products in that category is greater than 20
SELECT category, SUM(stock_quantity) FROM products GROUP BY category HAVING SUM(stock_quantity) > 20;

-- Combined Aggregate Functions
-- Selects the total count of products, sum of stock quantity, average price, minimum price, maximum price, and total value of all products (price * stock_quantity)
SELECT COUNT(*), SUM(stock_quantity), AVG(price), MIN(price), MAX(price), SUM(price * stock_quantity) FROM products;

