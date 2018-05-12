
/* Create Songs Table */
CREATE TABLE `project_spotify`.`Songs` ( `id` INT NOT NULL AUTO_INCREMENT , `title` VARCHAR(255) NOT NULL , `artist` INT NOT NULL , `album` INT NOT NULL , `genre` INT NOT NULL , `duration` VARCHAR(8) NOT NULL , `path` VARCHAR(500) NOT NULL , `albumOrder` INT NOT NULL , `plays` INT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
