CREATE DATABASE `db_soft_share`;
USE `db_soft_share`;
CREATE TABLE `categories` ( 
	`ID` INT(10) NOT NULL AUTO_INCREMENT ,  
	`Name` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,    
	PRIMARY KEY  (`ID`)
	) ENGINE = InnoDB;
CREATE TABLE `os` ( 
	`OSName` VARCHAR(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,    
	PRIMARY KEY  (`OSName`)
	) ENGINE = InnoDB;
CREATE TABLE `users` ( 
	`ID` INT(10) NOT NULL AUTO_INCREMENT ,  
	`Name` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL ,  
	`Password` CHAR(32) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,  
	`Email` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,  
	`GroupID` INT(1) NOT NULL ,    
	PRIMARY KEY  (`ID`)
	) ENGINE = InnoDB;
CREATE TABLE `comments` ( 
	`ID` INT(10) NOT NULL AUTO_INCREMENT ,  
	`Content` VARCHAR(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,    
	PRIMARY KEY  (`ID`)
	) ENGINE = InnoDB;
CREATE TABLE `products` ( 
	`ID` INT(10) NOT NULL AUTO_INCREMENT ,  
	`size` VARCHAR(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`Name` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,  
	`Company` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,  
	`OS` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
	`Version` VARCHAR(25) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,  
	`UpdateTime` VARCHAR(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,  
	`Tag` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,  
	`Path` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL ,  
	`Logo` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL ,  
	`Rate` INT(1) DEFAULT NULL,  
	`Description` VARCHAR(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,  
	`NumberDownload` INT(10) NOT NULL ,  
	`CateID` INT(10) NOT NULL ,    
	PRIMARY KEY  (`ID`),
	FOREIGN KEY (`CateID`) REFERENCES categories(`ID`)
	) ENGINE = InnoDB;
CREATE TABLE `have_comments` ( 
	`CommentID` INT(10) NOT NULL ,  
	`ProductID` INT(10) NOT NULL ,    
	PRIMARY KEY  (`CommentID`),
	FOREIGN KEY (`CommentID`) REFERENCES comments(`ID`),
	FOREIGN KEY (`ProductID`) REFERENCES products(`ID`)
	) ENGINE = InnoDB;
CREATE TABLE `belong_to_os` ( 
	`OSName` VARCHAR(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,  
	`ProductID` INT(10) NOT NULL ,    
	PRIMARY KEY  (`OSName`, `ProductID`),
	FOREIGN KEY (`OSName`) REFERENCES os(`OSName`),
	FOREIGN KEY (`ProductID`) REFERENCES products(`ID`)

	) ENGINE = InnoDB;
CREATE TABLE `write_comments` ( 
	`commentID` INT(10) NOT NULL ,  
	`userID` INT(10) NOT NULL ,    
	PRIMARY KEY  (`commentID`),
	FOREIGN KEY (`userID`) REFERENCES users(`ID`),
	FOREIGN KEY (`commentID`) REFERENCES comments(`ID`)
	) ENGINE = InnoDB;
