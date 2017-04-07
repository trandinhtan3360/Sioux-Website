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
   
   