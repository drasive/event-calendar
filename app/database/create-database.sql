-- MySQL Script generated by MySQL Workbench
-- 11/17/14 21:59:27
-- Model: New Model    Version: 1.0
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema eventcalendar
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `eventcalendar` ;
CREATE SCHEMA IF NOT EXISTS `eventcalendar` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `eventcalendar` ;

-- -----------------------------------------------------
-- Table `eventcalendar`.`genres`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `eventcalendar`.`genres` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(50) NOT NULL,
  `created_at` DATETIME NOT NULL,
  `updated_at` DATETIME NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `eventcalendar`.`events`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `eventcalendar`.`events` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `genre_id` INT UNSIGNED NOT NULL,
  `name` VARCHAR(150) NOT NULL,
  `description` VARCHAR(500) NOT NULL,
  `duration` TIME NOT NULL,
  `cast` VARCHAR(500) NULL,
  `image_path` VARCHAR(260) NULL,
  `image_description` VARCHAR(250) NULL,
  `created_at` DATETIME NOT NULL,
  `updated_at` DATETIME NULL,
  PRIMARY KEY (`id`),
  INDEX `idx_genre_id` (`genre_id` ASC),
  CONSTRAINT `fk_Events_Genre_Id`
    FOREIGN KEY (`genre_id`)
    REFERENCES `eventcalendar`.`genres` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `eventcalendar`.`links`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `eventcalendar`.`links` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `event_id` INT UNSIGNED NOT NULL,
  `url` VARCHAR(255) NOT NULL,
  `name` VARCHAR(50) NULL,
  `created_at` DATETIME NOT NULL,
  `updated_at` DATETIME NULL,
  PRIMARY KEY (`id`),
  INDEX `idx_event_id` (`event_id` ASC),
  CONSTRAINT `fk_Links_Event_Id`
    FOREIGN KEY (`event_id`)
    REFERENCES `eventcalendar`.`events` (`id`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `eventcalendar`.`shows`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `eventcalendar`.`shows` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `event_id` INT UNSIGNED NOT NULL,
  `date` DATE NOT NULL,
  `time` TIME NOT NULL,
  `created_at` DATETIME NOT NULL,
  `updated_at` DATETIME NULL,
  PRIMARY KEY (`id`),
  INDEX `idx_event_id` (`event_id` ASC),
  CONSTRAINT `fk_Shows_Event_Id`
    FOREIGN KEY (`event_id`)
    REFERENCES `eventcalendar`.`events` (`id`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `eventcalendar`.`price_groups`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `eventcalendar`.`price_groups` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(35) NOT NULL,
  `price` DECIMAL(8,2) UNSIGNED NOT NULL,
  `created_at` DATETIME NOT NULL,
  `updated_at` DATETIME NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `eventcalendar`.`event_price_group`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `eventcalendar`.`event_price_group` (
  `event_id` INT UNSIGNED NOT NULL,
  `price_group_id` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`event_id`, `price_group_id`),
  INDEX `idx_price_group_id` (`price_group_id` ASC),
  INDEX `idx_event_id` (`event_id` ASC),
  CONSTRAINT `fk_Event_PriceGroups_PriceGroup_Id`
    FOREIGN KEY (`price_group_id`)
    REFERENCES `eventcalendar`.`price_groups` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Event_PriceGroups_Event_Id`
    FOREIGN KEY (`event_id`)
    REFERENCES `eventcalendar`.`events` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `eventcalendar`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `eventcalendar`.`users` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(254) NOT NULL,
  `password` VARCHAR(128) NOT NULL,
  `remember_token` VARCHAR(100) NULL,
  `created_at` DATETIME NOT NULL,
  `updated_at` DATETIME NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `idx_email` (`email` ASC))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
