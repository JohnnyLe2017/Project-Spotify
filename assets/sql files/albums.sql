
CREATE TABLE `project_spotify`.`albums` ( `id` INT NOT NULL AUTO_INCREMENT , `title` VARCHAR(255) NOT NULL , `artist` INT NOT NULL , `genre` INT NOT NULL , `artworkPath` VARCHAR(500) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

/* Single INSERT INTO Statement */
INSERT INTO `albums` (`id`, `title`, `artist`, `genre`, `artworkPath`) VALUES (NULL, 'So Excited (Calippo Remix)', '1', '1', 'assets/images/artwork/selected01.JPG')
