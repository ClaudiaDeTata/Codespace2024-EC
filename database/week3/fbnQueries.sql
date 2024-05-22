USE fastburgersnow;

-- retrieve all orders with customers details
SELECT 
    c.customer_id, 
    c.customer_firstname, 
    c.customer_surname, 
    o.order_time, 
    o.order_item, 
    o.order_type
FROM ordering o
JOIN customer c ON o.customer_customer_id = c.customer_id;

-- retrieve staff working in each outlet
SELECT 
    o.outlet_suburb, 
    s.staff_firstname, 
    s.staff_surname
FROM outlet o
JOIN staff s ON o.outlet_id = s.outlet_id;

-- total revenue of each outlet
SELECT 
    o.outlet_suburb, 
    SUM(p.payment_amount) AS total_revenue
FROM outlet o
LEFT JOIN staff s ON o.outlet_id = s.outlet_id
LEFT JOIN ordering ord ON s.staff_id = ord.staff_staff_id
LEFT JOIN payment p ON ord.payment_id = p.payment_id
GROUP BY o.outlet_suburb;

-- outlet suburb with more than 5 orders
SELECT o.outlet_suburb
FROM outlet o
WHERE (SELECT COUNT(*) 
FROM ordering 
WHERE customer_customer_id IN 
(SELECT customer_id FROM customer WHERE customer.customer_id = ordering.customer_customer_id)) > 5;




