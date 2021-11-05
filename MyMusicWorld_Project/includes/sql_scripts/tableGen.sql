CREATE TABLE IF NOT EXISTS `User` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(45) NOT NULL,
  `mail` VARCHAR(45) NOT NULL,
  `pfp` BLOB NULL,
  `password` VARCHAR(45) NOT NULL,
  `admin` TINYINT(1) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `Review` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `fk_id_user` INT NOT NULL,
  `type` ENUM('albums', 'tracks') NOT NULL,
  `description` VARCHAR(45) NULL,
  `artist` VARCHAR(45) NOT NULL,
  `content_spotify_id` VARCHAR(45) NOT NULL,
  `review_date` DATE NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_review_user`
    FOREIGN KEY (`fk_id_user`)
    REFERENCES `User` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `List` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `fk_id_user` INT NOT NULL,
  `title` VARCHAR(45) NOT NULL,
  `description` VARCHAR(45) NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_list_user`
    FOREIGN KEY (`fk_id_user`)
    REFERENCES `User` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `Listitem` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `fk_id_list` INT NOT NULL,
  `type` ENUM('albums', 'tracks', 'artists') NOT NULL,
  `item_spotify_id` VARCHAR(45) NOT NULL,
  `date_added` DATE NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_listitem_list`
    FOREIGN KEY (`fk_id_list`)
    REFERENCES `List` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `Reviewlike` (
  `id` INT NOT NULL,
  `fk_id_review` INT NOT NULL,
  `fk_id_user` INT NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_reviewlike_review`
    FOREIGN KEY (`fk_id_review`)
    REFERENCES `Review` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_reviewlike_user`
    FOREIGN KEY (`fk_id_user`)
    REFERENCES `User` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `Favorites` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `fk_id_user` INT NOT NULL,
  `artist_name` VARCHAR(45) NOT NULL,
  `artist_spotify_id` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_favorites_user`
    FOREIGN KEY (`fk_id_user`)
    REFERENCES `user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;