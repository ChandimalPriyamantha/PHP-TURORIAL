-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema bict
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema bict
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `bict` DEFAULT CHARACTER SET latin1 ;
USE `bict` ;

-- -----------------------------------------------------
-- Table `bict`.`student_table`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bict`.`student_table` (
  `studentid` VARCHAR(45) NOT NULL,
  `studentt_name` VARCHAR(45) NULL DEFAULT NULL,
  `age` INT(11) NULL DEFAULT NULL,
  `subject` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`studentid`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `bict`.`subject_table`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bict`.`subject_table` (
  `subject_code` VARCHAR(45) NULL DEFAULT NULL,
  `subject_name` VARCHAR(45) NULL DEFAULT NULL,
  `credits` INT(11) NULL DEFAULT NULL)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `bict`.`user_table`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bict`.`user_table` (
  `user_id` INT(11) NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(45) NULL DEFAULT NULL,
  `password` VARCHAR(45) NULL DEFAULT NULL,
  `email` VARCHAR(45) NULL DEFAULT NULL,
  `role` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`))
ENGINE = InnoDB
AUTO_INCREMENT = 14
DEFAULT CHARACTER SET = latin1;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
