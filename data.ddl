CREATE DATABASE usersDB;

DROP TABLE users;
DROP TABLE userdata;

CREATE TABLE users (
    firstname VARCHAR(30),
    lastname VARCHAR(30),
    email VARCHAR(30),
    password VARCHAR(30),
    PRIMARY KEY (email)
);

CREATE TABLE userdata (
    email VARCHAR(30),
    fileId INT IDENTITY,
    filename VARCHAR(30),
    filelocation VARCHAR(30),
    filedescription VARCHAR(100)
    PRIMARY KEY (fileID),
    FORGEIN KEY (email) REFERENCES users(email)
        ON UPDATE CASCADE ON DELETE CASCADE
);