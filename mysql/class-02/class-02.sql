-- How to create a database named 'ecommerce'
CREATE DATABASE ecommerce;

-- How to create a table named 'customers' with specified columns
-- Note: It's best practice to define data types and constraints for each column.
CREATE TABLE customers(
    id INT PRIMARY KEY AUTO_INCREMENT, -- Example: Integer ID, primary key, auto-incrementing
    firstName VARCHAR(255),            -- Example: Variable character string for first name
    lastName VARCHAR(255),             -- Example: Variable character string for last name
    email VARCHAR(255) UNIQUE,         -- Example: Unique email address
    phone VARCHAR(20),                 -- Example: Phone number as a string
    city VARCHAR(255),
    address VARCHAR(255)
);

-- How to add a single row of data into the 'customers' table
INSERT INTO customers(firstName, lastName, email, phone, city, address)
VALUES
('Abdul', 'Karim', 'abdul.karim@example.com', '01710000001', 'Dhaka', '123 Gulshan-1');

-- How to select all columns and all rows from the 'customers' table
SELECT * FROM customers;

-- How to select a specific single column (firstName) from the 'customers' table
SELECT firstName FROM customers;

-- How to select desired multiple columns (city, address) from the 'customers' table
SELECT city, address FROM customers;

-- How to select all columns from 'customers' where the city is 'Dhaka'
SELECT * FROM customers WHERE city = "Dhaka";

-- How to select the email column from 'customers' where the city is 'Dhaka'
SELECT email FROM customers WHERE city='Dhaka';

-- How to select all columns from 'customers' where the city is 'Dhaka' AND the last name is 'Rahman'
SELECT * FROM customers WHERE city='Dhaka' AND lastName ='Rahman';

-- How to select all columns from 'customers' where the city is 'Khulna' AND the last name is 'Rahman'
SELECT * FROM customers WHERE city ='Khulna' AND lastName ='Rahman';

-- How to select all columns from 'customers' where the city is one of 'Dhaka', 'Khulna', or 'Sylhet'
SELECT * FROM customers WHERE city IN('Dhaka','Khulna','Sylhet');

-- How to select only unique city names from the 'customers' table
SELECT DISTINCT city FROM customers;

-- How to select the first 10 rows from the 'customers' table
SELECT * FROM customers LIMIT 10;

-- How to select 5 rows from the 'customers' table, starting from the 11th row (after the first 10)
SELECT * FROM customers LIMIT 10,5;

-- How to select all columns from 'customers' starting from the 3rd row (offset 2) and retrieve all subsequent rows
SELECT * FROM customers LIMIT 10 OFFSET 2; -- This will get 10 rows starting from offset 2

-- How to select all columns from 'customers' where the 'id' is between 10 and 20 (inclusive)
SELECT * FROM customers WHERE id BETWEEN 10 AND 20;

-- How to select all columns from 'customers' and order the results by 'firstName' in ascending order
SELECT * FROM customers ORDER BY firstName ASC;

-- How to select all columns from 'customers' and order the results by 'firstName' in descending order
SELECT * FROM customers ORDER BY firstName DESC;

-- How to select the first 4 rows from 'customers' ordered by 'firstName' in ascending order
SELECT * FROM customers ORDER BY firstName ASC LIMIT 4;

-- How to select all columns from 'customers' where the 'email' contains "rahman" anywhere in the string
SELECT * FROM customers WHERE email LIKE "%rahman%";

-- How to select all columns from 'customers' where the 'firstName' starts with "S"
SELECT * FROM customers WHERE firstName LIKE "S%";

-- How to select all columns from 'customers' where the 'firstName' contains "S" anywhere in the string
SELECT * FROM customers WHERE firstName LIKE "%S%";

-- How to select all columns from 'customers' where the 'phone' ends with "001"
SELECT * FROM customers WHERE phone LIKE "%001";

-- How to drop the 'products' table if it exists, preventing an error if it doesn't
DROP TABLE IF EXISTS products;

-- How to rename a column in the 'customers' table from 'phone' to 'phone_number'
ALTER TABLE customers RENAME COLUMN phone TO phone_number;

ALTER TABLE customers CHANGE COLUMN phone phone_number VARCHAR(20); -- Replace VARCHAR(20) with the actual data type of your phone column


-- How to rename the 'customers' table to 'clients'
RENAME TABLE customers TO clients;

-- How to remove all rows from the 'clients' table, but keep the table structure
TRUNCATE TABLE clients;
