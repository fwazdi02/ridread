


CREATE DATABASE IF NOT EXISTS `ridread_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;

GRANT ALL ON ridread_db.* TO 'admin'@'localhost' IDENTIFIED BY 'ridreadpasswd' ;

USE `ridread_db`;

DROP TABLE IF EXISTS `author`;
CREATE TABLE IF NOT EXISTS `author` (
  `author_id` int(11) NOT NULL AUTO_INCREMENT,
  `author_name` varchar(256) NOT NULL,
  `jen_kel` varchar(32) NOT NULL,
  `kota_lahir` varchar(128) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `bio` varchar(256) NOT NULL,
  `email` varchar(128) NOT NULL,
  `jml_post` int(11) NOT NULL,
  `tgl_join` date NOT NULL,
  `tgl_masuk` datetime NOT NULL,
  `status` varchar(128) NOT NULL DEFAULT 'active',
  PRIMARY KEY (`author_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `comment` varchar(256) NOT NULL,
  `author_id` int(11) DEFAULT NULL,
  `email` varchar(128) NOT NULL,
  `tgl_comment` datetime NOT NULL,
  PRIMARY KEY (`comment_id`),
  KEY `FK_AuthorComment` (`author_id`),
  KEY `FK_CommentInPost` (`post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(256) NOT NULL,
  `konten` text NOT NULL,
  `status` varchar(8) NOT NULL DEFAULT 'publish',
  `author_id` int(11) NOT NULL,
  `tag_id` int(11) DEFAULT NULL,
  `comment_count` int(11) NOT NULL,
  `tgl_post` datetime NOT NULL,
  PRIMARY KEY (`post_id`),
  KEY `FK_Author` (`author_id`),
  KEY `FK_Tag` (`tag_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



DROP TABLE IF EXISTS `quotes`;
CREATE TABLE IF NOT EXISTS `quotes` (
  `quotes_id` int(11) NOT NULL AUTO_INCREMENT,
  `konten` varchar(256) NOT NULL,
  `foot_note` varchar(256) DEFAULT NULL,
  `author_id` int(11) NOT NULL,
  `tgl_post` datetime NOT NULL,
  PRIMARY KEY (`quotes_id`),
  KEY `FK_QuotesAuthor` (`author_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `tag`;
CREATE TABLE IF NOT EXISTS `tag` (
  `tag_id` int(11) NOT NULL AUTO_INCREMENT,
  `tag_name` varchar(128) NOT NULL,
  PRIMARY KEY (`tag_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(128) NOT NULL,
  `passwd` varchar(128) NOT NULL,
  `fname` varchar(128) NOT NULL,
  `lname` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL UNIQUE,
  PRIMARY KEY (`user_id`)
)  ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE `comment`
  ADD CONSTRAINT `FK_AuthorComment` FOREIGN KEY (`author_id`) REFERENCES `author` (`author_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_CommentInPost` FOREIGN KEY (`post_id`) REFERENCES `post` (`post_id`) ON DELETE CASCADE ON UPDATE CASCADE;


ALTER TABLE `post`
  ADD CONSTRAINT `FK_Author` FOREIGN KEY (`author_id`) REFERENCES `author` (`author_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Tag` FOREIGN KEY (`tag_id`) REFERENCES `tag` (`tag_id`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `quotes`
  ADD CONSTRAINT `FK_QuotesAuthor` FOREIGN KEY (`author_id`) REFERENCES `author` (`author_id`) ON DELETE CASCADE ON UPDATE CASCADE;



INSERT INTO `author` (`author_id`, `author_name`, `jen_kel`, `kota_lahir`, `tgl_lahir`, `bio`, `email`, `jml_post`, `tgl_join`, `tgl_masuk`) VALUES
(0, 'Farid Wazdi', 'Laki-Laki', 'Bogor', '1994-07-08', 'Hai.', 'faridwazdi02@gmail.com', 0, '2017-04-20', '2017-04-20 20:52:00'),
(0, 'Saputra Erick', 'Laki-Laki', 'Bogor', '1994-02-14', 'Hai.', 'saputraerick45@gmail.com', 0, '2017-04-20', '2017-04-20 20:52:50');



INSERT INTO `tag` (`tag_id`, `tag_name`) VALUES
(1, 'Uncategories'),
(2, 'Linux'),
(3, 'Java');


INSERT INTO `post` (`post_id`, `title`, `konten`, `status`, `author_id`, `tag_id`, `comment_count`, `tgl_post`) VALUES
(0, 'Java Fundamental', '<p> Lorem ipsum <a href="">dolor</a> sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum...<a href="#">[read more]</a></p>
                    ', 'publish', 1, 2, 0, '2017-04-21 12:55:39'),
(0, 'Tutorial Linux', '<p> Lorem ipsum <a href="">dolor</a> sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum...<a href="#">[read more]</a></p>
                    ', 'publish', 1, 1, 0, '2017-04-21 12:55:41'),
(0, 'Java Fundamental', '<p> Lorem ipsum <a href="">dolor</a> sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum...<a href="#">[read more]</a></p>
                    ', 'publish', 2, 2, 0, '2017-04-21 12:55:39');


INSERT INTO `quotes` (`quotes_id`, `konten`, `foot_note`, `author_id`, `tgl_post`) VALUES
(0, 'Hello World', '', 1, '2017-04-20 20:57:18'),
(0, 'I love you yesterday, i love you still, i always have, i always will', '', 1, '2017-04-20 21:00:57');


INSERT INTO `user`(`user_id`, `username`, `passwd`, `fname`, `lname`, `email`) VALUES 
(0,"admin","administrator","Farid","Wazdi","faridwazdi02@gmail.com") ;