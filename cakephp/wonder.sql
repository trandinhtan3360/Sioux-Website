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



CREATE TABLE salaries (
	id int(11) NOT NULL AUTO_INCREMENT,
    salaries VARCHAR(50),
    PRIMARY KEY(id)
);


CREATE TABLE time_parts (
	id INT(11) NOT NULL AUTO_INCREMENT,
    type VARCHAR(50) comment "1: Part time, 2:full time",
    PRIMARY KEY(id)
);


CREATE TABLE contacts (
	id INT(11) NOT NULL AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    subject VARCHAR(50) NOT NULL,
    content VARCHAR(50),
    email VARCHAR(50),
	date DATETIME,
    PRIMARY KEY(id)
);



CREATE TABLE categories (
	id INT(11) NOT NULL AUTO_INCREMENT,
    name VARCHAR(50),
    parent_id INT(11),
    lft INT(11),
    rght INT(11),
    PRIMARY KEY(id)
);




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


CREATE TABLE invitations (
	id INT(11) NOT NULL AUTO_INCREMENT,
    owner_id INT(11),
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
	ALTER TABLE invitations ADD FOREIGN KEY (owner_id) REFERENCES users(id);
    ALTER TABLE invitations ADD FOREIGN KEY (receiver_id) REFERENCES users(id);

	ALTER TABLE posts ADD FOREIGN KEY (salaries_id) REFERENCES salaries(id);
    ALTER TABLE posts ADD FOREIGN KEY (time_parts_id) REFERENCES time_parts(id);
    ALTER TABLE posts ADD FOREIGN KEY (countries_id) REFERENCES countries(id);
    ALTER TABLE posts ADD FOREIGN KEY (users_id) REFERENCES users(id);
    ALTER TABLE posts ADD FOREIGN KEY (categories_id) REFERENCES categories(id);
   