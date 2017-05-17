<?php
$exercise_1a = "CREATE TABLE Destinations (id int, user_id int, address varchar(255), lat decimal(13,10), long decimal(13,10), PRIMARY KEY(id), FOREIGN KEY(user_id), REFERENCES Users (id))";
$exercise_1b = "CREATE TABLE Items_Orders (id int AUTO_INCREMENT, item_id int NOT_NULL, order_id int NOT_NULL, PRIMARY KEY (id), FOREIGN KEY (order_id) REFERENCES orders(order_id), FOREIGN KEY (item_id) REFERENCES items(item_id)";
$exercise_1c = "INSERT INTO Items_Orders (order_id, item_id) VALUES (6,2)";
$exercise_1d = "SELECT * FROM Items WHERE price > 50 ORDER BY price ASC";
$exercise_1e = "INSERT INTO Orders (description) VALUES (przykładowy opis 1)";
$exercise_1f = "DELETE FROM Users WHERE id = 10";
$exercise_1g = "";
