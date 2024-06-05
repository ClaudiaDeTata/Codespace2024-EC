-- Create the CRM database
CREATE DATABASE crm;

-- Switch to the CRM database
USE crm;

-- Create the customers table
CREATE TABLE customers (
  id INT PRIMARY KEY AUTO_INCREMENT, 
  first_name VARCHAR(255) NOT NULL, 
  last_name VARCHAR(255) NOT NULL, 
  phone VARCHAR(15) NOT NULL, 
  email VARCHAR(255)
);

-- Insert sample data into the customers table
INSERT INTO customers (first_name, last_name, phone, email)
VALUES 
  ('John', 'Doe', '(408)-987-7654', 'john.doe@mysqltutorial.org'), 
  ('Lily', 'Bush', '(408)-987-7985', 'lily.bush@mysqltutorial.org');

-- Select all records from the customers table
SELECT * FROM customers;

-- Create roles for CRM
CREATE ROLE crm_dev;
CREATE ROLE crm_read;
CREATE ROLE crm_write;

-- Grant permissions to roles
GRANT ALL ON crm.* TO crm_dev;
GRANT SELECT ON crm.* TO crm_read;
GRANT INSERT, UPDATE, DELETE ON crm.* TO crm_write;

-- Create users with their respective passwords
CREATE USER crm_dev1@localhost IDENTIFIED BY 'Secure$1782';

CREATE USER crm_read1@localhost IDENTIFIED BY 'Secure$5432';

CREATE USER crm_write1@localhost IDENTIFIED BY 'Secure$9075';

CREATE USER crm_write2@localhost IDENTIFIED BY 'Secure$3452';

-- Grant roles to users
GRANT crm_dev TO crm_dev1@localhost;

GRANT crm_read TO crm_read1@localhost;

GRANT crm_read TO crm_write1@localhost;

GRANT crm_write TO crm_write1@localhost;

GRANT crm_read TO crm_write2@localhost;

GRANT crm_write TO crm_write2@localhost;

-- Show grants for specific users
SHOW GRANTS FOR crm_dev1@localhost;

-- Activate the role
SET ROLE 'crm_write';

-- Show the currently active roles
SELECT CURRENT_ROLE();

-- Show the grants for the user
SHOW GRANTS FOR 'crm_write1'@'localhost';

-- Set the default role for the user crm_read1@localhost
SET DEFAULT ROLE crm_read;

-- Count the number of customers in the customers table
SELECT COUNT(*) FROM customers;

-- Delete all records from the customers table
DELETE FROM customers;

-- Unset any currently active roles for the session
SET ROLE NONE;

-- Set the role for the current session
SET ROLE role_name;

-- Reset the current session's roles to their default settings
SET DEFAULT ROLE;


-- Set the roles for the current session
SET ROLE role1, role2;

-- Revoke insert, update, and delete privileges on all tables in the crm database from the crm_write role
REVOKE INSERT, UPDATE, DELETE ON crm.* FROM crm_write;

-- Grant insert, update, and delete privileges on all tables in the crm database to the crm_write role
GRANT INSERT, UPDATE, DELETE ON crm.* TO crm_write;

-- Drop multiple roles
DROP ROLE role1, role2;

-- Drop the roles crm_read and crm_write
DROP ROLE crm_read, crm_write;

-- Create a new user crm_dev2 with the password Secure$6275 for localhost
CREATE USER 'crm_dev2'@'localhost' IDENTIFIED BY 'Secure$6275';

-- Grant the same privileges held by crm_dev1@localhost to crm_dev2@localhost
GRANT crm_dev1@localhost TO crm_dev2@localhost;











-- Show grants for specific users
SHOW GRANTS FOR crm_dev1@localhost;
SHOW GRANTS FOR crm_write1@localhost USING crm_write;

