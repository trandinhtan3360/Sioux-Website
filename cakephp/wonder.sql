<<<<<<< HEAD
-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2017 at 05:50 AM
-- Server version: 5.6.25
-- PHP Version: 5.5.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wonder`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rght` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `parent_id`, `lft`, `rght`) VALUES
(1, 'Nguoi tim nguoi giup viec', NULL, NULL, NULL),
(2, 'Nguoi giup viec', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `content` text,
  `email` varchar(50) DEFAULT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `subject`, `content`, `email`, `date`) VALUES
(1, 'K', 'Loi nguoi dung', 'acbdefgh', 'taolachuoi@gmail.com', NULL),
(2, 'F', 'Xu Ly', 'lkjjhgff', 'langjg@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE IF NOT EXISTS `countries` (
  `id` int(11) NOT NULL,
  `city` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `city`) VALUES
(1, 'Da Nang'),
(2, 'Ho Chi Minh'),
(3, 'Ha Noi');

-- --------------------------------------------------------

--
-- Table structure for table `invitations`
--

CREATE TABLE IF NOT EXISTS `invitations` (
  `id` int(11) NOT NULL,
  `sender_id` int(11) DEFAULT NULL,
  `status` int(1) DEFAULT NULL COMMENT 'Giống như cái role'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `content` text,
  `salaries_id` int(11) DEFAULT NULL,
  `time_parts_id` int(11) DEFAULT NULL,
  `countries_id` int(11) DEFAULT NULL,
  `users_id` int(11) DEFAULT NULL,
  `categories_id` int(11) DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `salaries_id`, `time_parts_id`, `countries_id`, `users_id`, `categories_id`, `start_date`, `end_date`) VALUES
(1, 'Tim nguoi giup viec', 'Ngay xua ngay xua co mot nguoi nao do', 5, 2, 1, 1, 2, NULL, NULL),
(2, 'Tim nguoi giup viec', 'Ngay xua ngay xua co mot nguoi nao do', 2, 2, 2, 1, 2, NULL, NULL),
(3, 'Tim nguoi giup viec', 'Ngay xua ngay xua co mot nguoi nao do', 6, 1, 3, 1, 2, NULL, NULL),
(4, 'Tim nguoi giup viec', 'Ngay xua ngay xua co mot nguoi nao do', 3, 2, 1, 1, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `salaries`
--

CREATE TABLE IF NOT EXISTS `salaries` (
  `id` int(11) NOT NULL,
  `salaries` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salaries`
--

INSERT INTO `salaries` (`id`, `salaries`) VALUES
(1, '< 500.000'),
(2, '500.000 - 1.000.000'),
(3, '1.000.000 - 2.000.000'),
(4, '2.00.000 - 3.000.000'),
(5, '3.000.000 - 4.000.000'),
(6, '4.000.000 - 5.000.000'),
(7, '> 5.000.000');

-- --------------------------------------------------------

--
-- Table structure for table `time_parts`
--

CREATE TABLE IF NOT EXISTS `time_parts` (
  `id` int(11) NOT NULL,
  `type` varchar(50) DEFAULT NULL COMMENT '1: Part time, 2:full time'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `time_parts`
--

INSERT INTO `time_parts` (`id`, `type`) VALUES
(1, 'Part time'),
(2, 'Full time');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `dob` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `role` int(11) DEFAULT NULL COMMENT ' 0 admin 1 employer 2 employee',
  `status` int(1) DEFAULT NULL COMMENT 'waiting job or got job'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `username`, `password`, `email`, `address`, `dob`, `phone`, `image`, `description`, `role`, `status`) VALUES
(1, 'Not', 'not2017', '123456', 'not@gmail.com', '09 Hoang Dang', '15/02/1997', '0938884495', NULL, 'Quan tri', 0, NULL),
(2, 'Hoang Dai Gia', 'hoanggia', '123456789', 'nguoi1@gmail.com', '09 Bach Dang', '10/01/1989', '0928889945', NULL, 'Nguoi cham chi nhat nha', 2, NULL),
(3, 'Le Thi Ngoc', 'ngocle', '123456789', 'nguoi2@gmail.com', '09 Le Duan', '15/06/1984', '01452124125', NULL, 'Tim nguoi giup viec', 1, NULL),
(4, 'Le Van Teo', 'leteo', '123456789', 'nguoi3@gmail.com', '09 Hoang Dieu', '19/02/1985', '0928889944', NULL, 'Nguoi cham chi', 2, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invitations`
--
ALTER TABLE `invitations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salaries`
--
ALTER TABLE `salaries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `time_parts`
--
ALTER TABLE `time_parts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `invitations`
--
ALTER TABLE `invitations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `salaries`
--
ALTER TABLE `salaries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `time_parts`
--
ALTER TABLE `time_parts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
=======
CREATE DATABASE wonder;
USE wonder;


DROP TABLE IF EXISTS posts;
DROP TABLE IF EXISTS invitations;
DROP TABLE IF EXISTS users;
DROP TABLE IF EXISTS countries;
DROP TABLE IF EXISTS salaries;
DROP TABLE IF EXISTS time_parts;
DROP TABLE IF EXISTS contacts;
DROP TABLE IF EXISTS categories;
  

CREATE TABLE countries (
	id INT(11) NOT NULL AUTO_INCREMENT,
    city VARCHAR(50),
    PRIMARY KEY(id)
);

INSERT INTO countries (id, city) 
VALUE 	(1,'Da Nang'),
		(2,'Ho Chi Minh'),
		(3,'Ha Noi');


CREATE TABLE salaries (
	id int(11) NOT NULL AUTO_INCREMENT,
    salaries VARCHAR(50),
    PRIMARY KEY(id)
);

INSERT INTO salaries (id, salaries) 
VALUES 	(1,'< 500.000'),
		(2,'500.000 - 1.000.000'),
        (3,'1.000.000 - 2.000.000'),
        (4,'2.000.000 - 3.000.000'),
        (5,'3.000.000 - 4.000.000'),
        (6,'4.000.000 - 5.000.000'),
        (7,'> 5.000.000');

CREATE TABLE time_parts (
	id INT(11) NOT NULL AUTO_INCREMENT,
    type VARCHAR(50) comment "1: Part time, 2:full time",
    PRIMARY KEY(id)
);

INSERT INTO time_parts (id, type) 
VALUES 	(1,'Part time'),
		(2,'Full time');

CREATE TABLE contacts (
	id INT(11) NOT NULL AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    subject VARCHAR(50) NOT NULL,
    content TEXT,
    email VARCHAR(50),
	date DATETIME,
    PRIMARY KEY(id)
);

INSERT INTO contacts (id, name, subject, content, email) 
VALUES 	(1,'K','Loi nguoi dung','acbdefgh','taolachuoi@gmail.com'),
		(2,'F','Xu Ly','lkjjhgff','langjg@gmail.com');


CREATE TABLE categories (
	id INT(11) NOT NULL AUTO_INCREMENT,
    name VARCHAR(50),
    parent_id INT(11),
    lft INT(11),
    rght INT(11),
    PRIMARY KEY(id)
);

INSERT INTO categories (id, name,parent_id, lft, rght) 
VALUES 	(1,'Nguoi tim nguoi giup viec',NULL,NULL,NULL),
		(2,'Nguoi giup viec',NULL,NULL,NULL);



CREATE TABLE users (
	id INT(11) NOT NULL AUTO_INCREMENT,
    full_name VARCHAR(100) NOT NULL,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL,
    email VARCHAR(50),
	address VARCHAR(50),
    dob VARCHAR(50),
    phone VARCHAR(20),
    image VARCHAR(250),
    description varchar(255), 
    role INT(11) comment " 0 admin 1 employer 2 employee",
    status INT(1) comment "waiting job or got job",
    PRIMARY KEY(id)
);

INSERT INTO users (id, full_name, username, password, email, address, dob, phone, description, role) 
VALUES 	(1,'Not','not2017','123456','not@gmail.com','09 Hoang Dang','15/02/1997','0938884495','Quan tri',0),
		(2,'Hoang Dai Gia','hoanggia','123456789','nguoi1@gmail.com','09 Bach Dang','10/01/1989','0928889945','Nguoi cham chi nhat nha',2),
        (3,'Le Thi Ngoc','ngocle','123456789','nguoi2@gmail.com','09 Le Duan','15/06/1984','01452124125','Tim nguoi giup viec',1),
        (4,'Le Van Teo','leteo','123456789','nguoi3@gmail.com','09 Hoang Dieu','19/02/1985','0928889944','Nguoi cham chi',2);



CREATE TABLE invitations (
	id INT(11) NOT NULL AUTO_INCREMENT,
    sender_id INT(11),
    receiver_id INT(11),
    status INT(1) comment "Giống như cái role",
	PRIMARY KEY(id)
);


CREATE TABLE posts (
	id INT(11) NOT NULL AUTO_INCREMENT,
	title VARCHAR(100),
    content TEXT,
	salaries_id INT(11),
    time_parts_id INT(11),
    countries_id INT(11),
    users_id INT(11),
    categories_id INT(11),
    start_date DATETIME,
    end_date DATETIME,
    PRIMARY KEY(id)
);

INSERT INTO posts (id, title, content, salaries_id, time_parts_id, countries_id, users_id, categories_id) 
VALUES 	(1,'Tim nguoi giup viec','Ngay xua ngay xua co mot nguoi nao do',5,2,1,1,2),
		(2,'Tim nguoi giup viec','Ngay xua ngay xua co mot nguoi nao do',2,2,2,1,2),
        (3,'Tim nguoi giup viec','Ngay xua ngay xua co mot nguoi nao do',6,1,3,1,2),
        (4,'Tim nguoi giup viec','Ngay xua ngay xua co mot nguoi nao do',3,2,1,1,2);



	ALTER TABLE invitations ADD FOREIGN KEY (sender_id) REFERENCES users(id);
    ALTER TABLE invitations ADD FOREIGN KEY (receiver_id) REFERENCES users(id);

	ALTER TABLE posts ADD FOREIGN KEY (salaries_id) REFERENCES salaries(id);
    ALTER TABLE posts ADD FOREIGN KEY (time_parts_id) REFERENCES time_parts(id);
    ALTER TABLE posts ADD FOREIGN KEY (countries_id) REFERENCES countries(id);
    ALTER TABLE posts ADD FOREIGN KEY (users_id) REFERENCES users(id);
    ALTER TABLE posts ADD FOREIGN KEY (categories_id) REFERENCES categories(id);
   
   
>>>>>>> origin/post
