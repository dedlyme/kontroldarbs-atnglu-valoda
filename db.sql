CREATE DATABASE fruit;


USE fruit; 

CREATE TABLE fruits(
id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	fruit_name VARCHAR(255) NOT NULL,
	Calories DECIMAL(10, 2) NOT NULL
);

INSERT INTO fruits (fruit_name, Calories) VALUES
('Banana', 105),
('Apple', 95);