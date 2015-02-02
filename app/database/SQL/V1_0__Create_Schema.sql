/* Written on 5/29/2014, MyMovieDB Create Schema Script /*

/* Create Database and set MySQL to use it /*
CREATE DATABASE MyMovieDB;
Use MyMovieDB;

GRANT ALL PRIVILEGES ON MyMovieDB.* TO 'movieman'@'localhost' IDENTIFIED BY 'WatchMovies';
GRANT ALL PRIVILEGES ON MyMovieDB.* TO 'movieman'@'%' IDENTIFIED BY 'WatchMovies';

/* Create Users Table /*
drop table if exists users;
CREATE TABLE users
(
id MEDIUMINT NOT NULL AUTO_INCREMENT primary key,
givenname VARCHAR(50),
surname VARCHAR(50),
username VARCHAR(50),
email VARCHAR(50),
photo VARCHAR(100),
password VARCHAR(100),
password_temp VARCHAR(100),
resetcode VARCHAR(100),
access VARCHAR(50),
active VARCHAR(5),
isdel VARCHAR(5),
last_login TIMESTAMP,
remember_token VARCHAR(75),
created_at TIMESTAMP,
updated_at TIMESTAMP
)engine=innodb;

/* Create Admin User /*
INSERT INTO users(
id,givenname,surname,username,email,photo,password,password_temp,resetcode,access,active,isdel,last_login,created_at,updated_at)
VALUES
(NULL,"Admin","Istrator","admin","admin@laravel_aj",NULL,password,NULL,NULL,
1,0,NULL,NULL,NULL,NULL);