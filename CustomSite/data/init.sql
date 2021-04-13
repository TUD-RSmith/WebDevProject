CREATE DATABASE databasetest;

use databasetest;

CREATE TABLE users (
                       id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                       firstname VARCHAR(30) NOT NULL,
                       lastname VARCHAR(30) NOT NULL,
                       email VARCHAR(50) NOT NULL,
                       age INT(3),
                       location VARCHAR(50),
                       date TIMESTAMP
                   );

            CREATE TABLE gameinfo (
                       `gameID` INT NOT NULL AUTO_INCREMENT,
                       `gameTitle` VARCHAR(45) NULL,
                       `genre` VARCHAR(45) NULL,
                       `price` FLOAT NULL,
                       PRIMARY KEY (`gameID`)
                    );
