CREATE TABLE employee (
   rowID SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
   employeeID CHAR(8) NOT NULL,
   first_name VARCHAR(25) NOT NULL,
   last_name VARCHAR(35) NOT NULL,
   email VARCHAR(55) NOT NULL,
   phone CHAR(10) NOT NULL,
   salary DECIMAL(8,2) NOT NULL,
   PRIMARY KEY(rowID)
)