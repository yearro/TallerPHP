CREATE TABLE employee (
   rowID SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
   firstname VARCHAR(35) NOT NULL,
   lastname VARCHAR(35) NOT NULL,
   email VARCHAR(55) NOT NULL UNIQUE,
   INDEX (lastname(5)),
   PRIMARY KEY(rowID));