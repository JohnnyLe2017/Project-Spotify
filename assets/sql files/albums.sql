
/* Create Album Table */
CREATE TABLE `project_spotify`.`albums` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(255) NOT NULL,
  `artist` INT NOT NULL,
  `genre` INT NOT NULL,
  `artworkPath` VARCHAR(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE = InnoDB;


/* Single INSERT INTO Statement */
INSERT INTO `albums` (
  `id`, `title`, `artist`, `genre`, `artworkPath`
)
VALUES
  (
    NULL, 'So Excited (Calippo Remix)',
    '1', '1', 'assets/images/artwork/selected01.JPG'
  );


/* INSERT INTO Statements */
INSERT INTO `albums` (
  `id`, `title`, `artist`, `genre`, `artworkPath`
)
VALUES
  (
    NULL, 'So Excited (Calippo Remix)',
    '1', '1', 'assets/images/artwork/selected01.JPG'
  ),
  (
    NULL, 'Bad For Me (ft. Sizzy Rocket)',
    '2', '1', 'assets/images/artwork/selected02.JPG'
  ),
  (
    NULL, 'Right Amount Of Wrong (TRU Concept Remix)',
    '3', '1', 'assets/images/artwork/selected03.JPG'
  ),
  (
    NULL, 'With You', '4', '1', 'assets/images/artwork/selected04.JPG'
  );
