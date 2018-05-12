
/* Create Artists Table */
CREATE TABLE `project_spotify`.`artists` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE = InnoDB;


/* INSERT INTO Statements */
INSERT INTO `artists` (`id`, `name`)
VALUES
  (NULL, 'Leandro Da Silva')

INSERT INTO `artists` (`id`, `name`)
VALUES
  (NULL, 'CID')

INSERT INTO `artists` (`id`, `name`)
VALUES
  (NULL, 'Gianni Blu')

INSERT INTO `artists` (`id`, `name`)
VALUES
  (NULL, 'Anto & Lyle M')
