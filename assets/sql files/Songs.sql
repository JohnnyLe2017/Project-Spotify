
/* Create Songs Table */
CREATE TABLE `project_spotify`.`Songs` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(255) NOT NULL,
  `artist` INT NOT NULL,
  `album` INT NOT NULL,
  `genre` INT NOT NULL,
  `duration` VARCHAR(8) NOT NULL,
  `path` VARCHAR(500) NOT NULL,
  `albumOrder` INT NOT NULL,
  `plays` INT NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE = InnoDB;


/* Song 1 */
INSERT INTO `songs` (
  `id`, `title`, `artist`, `album`, `genre`,
  `duration`, `path`, `albumOrder`,
  `plays`
)
VALUES
  (
    NULL, 'Leandro Da Silva - So Excited (Calippo Remix)',
    '1', '1', '1', '3:25', 'assets/music/selected01.mp3',
    '1', '0'
  )

/* Song 2 */
INSERT INTO `songs` (
  `id`, `title`, `artist`, `album`, `genre`,
  `duration`, `path`, `albumOrder`,
  `plays`
)
VALUES
  (
    NULL, 'CID - Bad For Me (ft. Sizzy Rocket)',
    '1', '2', '1', '3:25', 'assets/music/selected02.mp3',
    '2', '0'
  )

/* Song 3 */
INSERT INTO `songs` (
  `id`, `title`, `artist`, `album`, `genre`,
  `duration`, `path`, `albumOrder`,
  `plays`
)
VALUES
  (
    NULL, 'Gianni Blu - Right Amount Of Wrong (TRU Concept Remix)',
    '1', '3', '1', '3:25', 'assets/music/selected03.mp3',
    '3', '0'
  )

/* Song 4 */
INSERT INTO `songs` (
  `id`, `title`, `artist`, `album`, `genre`,
  `duration`, `path`, `albumOrder`,
  `plays`
)
VALUES
  (
    NULL, 'Leandro Da Silva - So Excited (Calippo Remix)',
    '1', '4', '1', '3:25', 'assets/music/selected04.mp3',
    '4', '0'
  )
