-- create the databases
CREATE DATABASE IF NOT EXISTS web-masters;

-- create the users for each database
CREATE USER 'mysql'@'%' IDENTIFIED BY 'mysql';
GRANT CREATE, ALTER, INDEX, LOCK TABLES, REFERENCES, UPDATE, DELETE, DROP, SELECT, INSERT ON `web-masters`.* TO 'mysql'@'%';

FLUSH PRIVILEGES;
