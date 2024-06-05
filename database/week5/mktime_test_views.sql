USE DATABASE mktime_test;

CREATE VIEW items_view AS
SELECT * FROM items;

CREATE VIEW orders_view AS
SELECT * FROM orders;

CREATE VIEW payment_view AS
SELECT * FROM payment;

CREATE VIEW users_view AS
SELECT * FROM users;