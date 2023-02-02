create database eventhub;

create user 'utas' @'localhost' identified by 'utas';
create user 'utas' @'127.0.0.1' identified by 'utas';

grant all privileges on eventhub.* to 'utas' @'localhost';
grant all privileges on eventhub.* to 'utas' @'127.0.0.1';

use eventhub;

CREATE TABLE `eventhub`.`user` (
    `userID` VARCHAR(15) NOT NULL,
    `FirstName` VARCHAR(20) NOT NULL,
    `LastName` VARCHAR(20) NOT NULL,
    `birthdate` DATE NOT NULL,
    `gender` VARCHAR(10) NOT NULL,
    `email` VARCHAR(30) NOT NULL,
    `nationality` VARCHAR(25) NOT NULL,
    `password` VARCHAR(30) NOT NULL,
    PRIMARY KEY (`email`(30)),
    UNIQUE (`userID`(15))
) ENGINE = InnoDB;


INSERT INTO user VALUES('admin','Event','Hub','2022-06-08','System','admin@eventhub.com','Omani','12345');