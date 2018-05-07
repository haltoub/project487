DROP TABLE IF EXISTS  mytable;

CREATE TABLE mytable(
  id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  personName varchar(255)Not NULL,
  suggestions varchar(200)Not NULL,
  email varchar(40)Not NULL,
  phoneNumber varchar(250)NOT NULL
);
