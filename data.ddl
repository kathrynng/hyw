DROP TABLE users;
DROP TABLE userdata;
DROP DATABASE [IF EXISTS] usersdb;

CREATE DATABASE usersdb;
USE usersdb;

CREATE TABLE users (
    firstname VARCHAR(255) NOT NULL,
    lastname VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    PRIMARY KEY (email)
);

CREATE TABLE userdata (
    email VARCHAR(255),
    fileId INT NOT NULL,
    filename VARCHAR(255) NOT NULL,
    filelocation VARCHAR(255) NOT NULL,
    filedescription VARCHAR(255) NOT NULL,
    PRIMARY KEY (fileID),
    FORGEIN KEY (email) REFERENCES users(email)
        ON UPDATE CASCADE ON DELETE CASCADE
);

INSERT INTO users VALUES ('Admin','N', 'admin.n@gmail.com', 'password');