CREATE TABLE member_to_vehicle (
   mapID TINYINT UNSIGNED NOT NULL AUTO_INCREMENT,
   memberID SMALLINT UNSIGNED NOT NULL,
   vehicleID TINYINT UNSIGNED NOT NULL,
   PRIMARY KEY(mapID));