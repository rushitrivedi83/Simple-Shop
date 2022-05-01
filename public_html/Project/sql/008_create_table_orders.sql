CREATE TABLE IF NOT EXISTS Orders(
    id int AUTO_INCREMENT PRIMARY KEY,
    user_id int,
    created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    total_price float,
    address varchar(255),
    payment_method varchar(30),
    money_received float,
    FOREIGN KEY (user_id) REFERENCES Users(id)
)