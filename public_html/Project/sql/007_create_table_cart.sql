CREATE TABLE IF NOT EXISTS Cart(
    id int AUTO_INCREMENT PRIMARY KEY,
    product_id int,
    desired_quantity int,
    user_id int,
	unit_price float,
    created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    modified TIMESTAMP DEFAULT CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES Users(id),
    FOREIGN KEY (product_id) REFERENCES Products(id),
    UNIQUE KEY (user_id, product_id),
    check(desired_quantity > 0)
)