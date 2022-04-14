CREATE TABLE IF NOT EXISTS Products(
    id int AUTO_INCREMENT PRIMARY  KEY,
    name varchar(30) UNIQUE, 
    description text,
	category varchar(50),
    stock int DEFAULT  0,
    unit_price float DEFAULT  0.0,
    image text,
	visibility boolean DEFAULT not NULL 0,
    created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    modified TIMESTAMP DEFAULT CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
    check (stock >= 0), 
    check (unit_price >= 0) 
)