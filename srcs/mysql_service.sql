CREATE DATABASE server_database;
CREATE USER 'odomenic'@'localhost' IDENTIFIED BY 'odomenic21';
GRANT ALL PRIVILEGES ON server_database.* TO 'odomenic'@'localhost';
FLUSH PRIVILEGES;
