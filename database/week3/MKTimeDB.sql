-- Create the database
CREATE DATABASE MKTIME;

-- Use DB
USE MKTIME;

-- Create Customers table
CREATE TABLE Customers (
    CustomerID VARCHAR(10) PRIMARY KEY,
    FirstName VARCHAR(50) NOT NULL,
    LastName VARCHAR(50) NOT NULL,
    Email VARCHAR(100) NOT NULL,
    Password VARCHAR(255) NOT NULL,
    PhoneNumber VARCHAR(15),
    Address VARCHAR(255) NOT NULL,
    City VARCHAR(100) NOT NULL,
    State VARCHAR(100),
    Postcode VARCHAR(20) NOT NULL,
    Country VARCHAR(100) NOT NULL,
    RegistrationDate DATETIME NOT NULL
);

-- Create ProductCategories table
CREATE TABLE ProductCategories (
    CategoryID VARCHAR(10) PRIMARY KEY,
    CategoryName VARCHAR(100) NOT NULL,
    CategoryDescription TEXT
);

-- Create Products table
CREATE TABLE Products (
    ProductID VARCHAR(10) PRIMARY KEY,
    ProductName VARCHAR(255) NOT NULL,
    Brand VARCHAR(100) NOT NULL,
    Description TEXT,
    Price DECIMAL(10, 2) NOT NULL,
    StockQuantity INT NOT NULL,
    CategoryID VARCHAR(10) NOT NULL,
    ImageURL VARCHAR(255),
    Featured BOOLEAN,
    FOREIGN KEY (CategoryID) REFERENCES ProductCategories(CategoryID)
);

-- Create Orders table
CREATE TABLE Orders (
    OrderID VARCHAR(10) PRIMARY KEY,
    CustomerID VARCHAR(10) NOT NULL,
    OrderDate DATETIME NOT NULL,
    TotalAmount DECIMAL(10, 2) NOT NULL,
    ShippingAddress VARCHAR(255) NOT NULL,
    OrderStatus VARCHAR(50) NOT NULL,
    FOREIGN KEY (CustomerID) REFERENCES Customers(CustomerID)
);

-- Create OrderItems table
CREATE TABLE OrderItems (
    OrderItemID VARCHAR(10) PRIMARY KEY,
    OrderID VARCHAR(10) NOT NULL,
    ProductID VARCHAR(10) NOT NULL,
    Quantity INT NOT NULL,
    Price DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (OrderID) REFERENCES Orders(OrderID),
    FOREIGN KEY (ProductID) REFERENCES Products(ProductID)
);

-- Create Reviews table
CREATE TABLE Reviews (
    ReviewID VARCHAR(10) PRIMARY KEY,
    CustomerID VARCHAR(10) NOT NULL,
    ProductID VARCHAR(10) NOT NULL,
    Rating INT NOT NULL,
    ReviewText TEXT,
    ReviewDate DATETIME NOT NULL,
    FOREIGN KEY (CustomerID) REFERENCES Customers(CustomerID),
    FOREIGN KEY (ProductID) REFERENCES Products(ProductID)
);


INSERT INTO Customers (CustomerID, FirstName, LastName, Email, Password, PhoneNumber, AddressLine1, AddressLine2, City, State, ZipCode, Country, RegistrationDate)
VALUES 
('Cust001', 'John', 'Doe', 'john.doe@example.com', 'EncryptedPassword1', '+441314567890', '1 Princes St', 'Apt 1', 'Edinburgh', 'Midlothian', 'EH2 2EQ', 'United Kingdom', '2024-05-01 14:30'),
('Cust002', 'Jane', 'Smith', 'jane.smith@example.com', 'EncryptedPassword2', '+441314567891', '2 George St', 'Suite 2', 'Edinburgh', 'Midlothian', 'EH2 3BU', 'United Kingdom', '2024-05-02 10:20'),
('Cust003', 'James', 'Brown', 'james.brown@example.com', 'EncryptedPassword3', '+441314567892', '3 Royal Mile', 'Flat 3', 'Edinburgh', 'Midlothian', 'EH1 1QS', 'United Kingdom', '2024-05-03 12:45'),
('Cust004', 'Emily', 'Davis', 'emily.davis@example.com', 'EncryptedPassword4', '+441314567893', '4 Queen St', '', 'Edinburgh', 'Midlothian', 'EH2 1JE', 'United Kingdom', '2024-05-04 15:50'),
('Cust005', 'Michael', 'Wilson', 'michael.wilson@example.com', 'EncryptedPassword5', '+441314567894', '5 Castlehill', 'Room 5', 'Edinburgh', 'Midlothian', 'EH1 2NG', 'United Kingdom', '2024-05-05 09:15');

INSERT INTO ProductCategories (CategoryID, CategoryName, CategoryDescription)
VALUES 
('Cat001', 'Luxury', 'High-end luxury watches'),
('Cat002', 'Sport', 'Durable and stylish sports watches'),
('Cat003', 'Classic', 'Timeless classic watch designs'),
('Cat004', 'Digital', 'Modern digital watches with various features'),
('Cat005', 'Smart', 'Smartwatches with connectivity and health tracking features');

INSERT INTO Products (ProductID, ProductName, Brand, Description, Price, StockQuantity, CategoryID, ImageURL, Featured)
VALUES 
('Prod001', 'Rolex Submariner', 'Rolex', 'A classic luxury dive watch.', 8999.99, 5, 'Cat001', 'http://example.com/rolex_submariner.jpg', FALSE),
('Prod002', 'Omega Speedmaster', 'Omega', 'A prestigious chronograph watch.', 6499.99, 8, 'Cat001', 'http://example.com/omega_speedmaster.jpg', TRUE),
('Prod003', 'Tag Heuer Carrera', 'Tag Heuer', 'An elegant racing-inspired watch.', 4999.99, 10, 'Cat002', 'http://example.com/tag_carrera.jpg', FALSE),
('Prod004', 'Casio G-Shock', 'Casio', 'A rugged and durable digital watch.', 199.99, 20, 'Cat004', 'http://example.com/casio_gshock.jpg', TRUE),
('Prod005', 'Apple Watch Series 6', 'Apple', 'A smart watch with advanced features.', 399.99, 15, 'Cat005', 'http://example.com/apple_watch.jpg', TRUE);

INSERT INTO Orders (OrderID, CustomerID, OrderDate, TotalAmount, ShippingAddress, OrderStatus)
VALUES 
('Ord001', 'Cust001', '2024-05-10 14:35', 15499.98, '1 Princes St, Edinburgh, EH2 2EQ, United Kingdom', 'Shipped'),
('Ord002', 'Cust002', '2024-05-11 15:20', 9999.98, '2 George St, Edinburgh, EH2 3BU, United Kingdom', 'Pending'),
('Ord003', 'Cust003', '2024-05-12 10:50', 199.99, '3 Royal Mile, Edinburgh, EH1 1QS, United Kingdom', 'Delivered'),
('Ord004', 'Cust004', '2024-05-13 12:30', 13999.97, '4 Queen St, Edinburgh, EH2 1JE, United Kingdom', 'Shipped'),
('Ord005', 'Cust005', '2024-05-14 09:40', 399.99, '5 Castlehill, Edinburgh, EH1 2NG, United Kingdom', 'Pending');

INSERT INTO OrderItems (OrderItemID, OrderID, ProductID, Quantity, Price)
VALUES 
('OrdItem001', 'Ord001', 'Prod001', 1, 8999.99),
('OrdItem002', 'Ord001', 'Prod002', 1, 6499.99),
('OrdItem003', 'Ord002', 'Prod001', 1, 8999.99),
('OrdItem004', 'Ord002', 'Prod003', 1, 4999.99),
('OrdItem005', 'Ord003', 'Prod004', 1, 199.99),
('OrdItem006', 'Ord004', 'Prod001', 1, 8999.99),
('OrdItem007', 'Ord004', 'Prod003', 1, 4999.99),
('OrdItem008', 'Ord005', 'Prod005', 1, 399.99);

INSERT INTO Reviews (ReviewID, CustomerID, ProductID, Rating, ReviewText, ReviewDate)
VALUES 
('Rev001', 'Cust001', 'Prod001', 5, 'Excellent watch, very pleased with the quality!', '2024-05-15 14:40'),
('Rev002', 'Cust002', 'Prod002', 4, 'Great watch, but a bit pricey.', '2024-05-16 10:25'),
('Rev003', 'Cust003', 'Prod004', 5, 'Very durable and stylish.', '2024-05-17 09:10'),
('Rev004', 'Cust004', 'Prod003', 4, 'Good watch for racing enthusiasts.', '2024-05-18 16:45'),
('Rev005', 'Cust005', 'Prod005', 5, 'Fantastic smart features and very convenient.', '2024-05-19 12:35');

