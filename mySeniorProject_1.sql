DROP TABLE IF EXISTS  usertable;
CREATE TABLE usertable(
  id int NOT NULL,
  LName varchar(255) NOT NULL,
  FName varchar(100) Not NULL,
  Email varchar(40) Not NULL,
  phone varchar(50) Not NULL,
  BirthDay varchar(13),
  username varchar(20) Not NULL,
  password varchar(128) NOT NULL,
  PRIMARY KEY(username)
);
