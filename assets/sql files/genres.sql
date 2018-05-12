
CREATE TABLE `project_spotify`.`genres` ( `id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

INSERT INTO `genres` (`id`, `name`) VALUES (NULL, 'House'), (NULL, 'Pop'), (NULL, 'Rock'), (NULL, 'Hip-Hop'), (NULL, 'Rap'), (NULL, 'Classical'), (NULL, 'Jazz'), (NULL, 'Electronic Dance'), (NULL, 'Popular'), (NULL, 'Punk Rock'), (NULL, 'Heavy Metal'), (NULL, 'Techno'), (NULL, 'Disco'), (NULL, 'Dance'), (NULL, 'Indie Rock');
