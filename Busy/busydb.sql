
mysql.exe -u root --password

create database busy;

use busy;


-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema busy
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema busy
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `busy` DEFAULT CHARACTER SET utf8 ;
USE `busy` ;

-- -----------------------------------------------------
-- Table `busy`.`table1`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `busy`.`table1` (
)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `busy`.`Firma`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `busy`.`Firma` (
  `id` INT NOT NULL,
  `navn` VARCHAR(45) NOT NULL,
  `adresse` VARCHAR(45) NOT NULL,
  `orgnummer` VARCHAR(45) NOT NULL,
  `telefon` VARCHAR(45) NULL,
  `web` VARCHAR(45) NULL,
  PRIMARY KEY (`id`));


-- -----------------------------------------------------
-- Table `busy`.`Personer`
-- -----------------------------------------------------
CREATE TABLE personer (
  `id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `fornavn` VARCHAR(45) NULL,
  `etternavn` VARCHAR(45) NULL,
  `telefon` VARCHAR(45) NULL,
  `epost` VARCHAR(45) NULL,
  `firma_id` INT NOT NULL,
  FOREIGN KEY (firma_id) REFERENCES firma(id)
    );
    
   


-- -----------------------------------------------------
-- Table `busy`.`Produkter`
-- -----------------------------------------------------
CREATE TABLE Produkter (
  `id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `navn` VARCHAR(45) NOT NULL,
  `produktbetegnelse` VARCHAR(45) NULL,
  `pris.inn` VARCHAR(45) NULL,
  `pris.ut` VARCHAR(45) NULL,
  `leverandorId` INT NOT NULL,
  FOREIGN KEY (leverandorid) REFERENCES firma(id)
);



-- -----------------------------------------------------
-- Table `busy`.`tilbud`
-- -----------------------------------------------------
CREATE TABLE tilbud (
  `id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `kundeid` INT NOT NULL,
  `kontaktperson` INT NOT NULL,
  `dato DATE` VARCHAR(45) NOT NULL,
  `referanse` VARCHAR(45) NULL,
  FOREIGN KEY (kontaktperson) REFERENCES Personer(id),
  FOREIGN KEY (kundeid) REFERENCES Firma(id)
);


-- -----------------------------------------------------
-- Table `busy`.`tilbudslinjer`
-- -----------------------------------------------------
CREATE TABLE tilbudslinjer (
  `id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `antall` VARCHAR(45) NOT NULL,
  `Produkter_id` INT NOT NULL,
  `tilbud_id` INT NOT NULL,
    FOREIGN KEY (Produkter_id) REFERENCES Produkter(id),
    FOREIGN KEY (tilbud_id) REFERENCES tilbud(id)
);


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;