DROP TABLE usersite;
DROP TABLE userdata;
DROP TABLE users;
DROP DATABASE IF EXISTS usersdb;

CREATE DATABASE usersdb;
USE usersdb;

CREATE TABLE users (
    firstname VARCHAR(255) NOT NULL,
    lastname VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    PRIMARY KEY (email)
);

CREATE TABLE usersite (
    email VARCHAR(255),
    siteID INT,
    userType VARCHAR(10),
    siteType INT,
    PRIMARY KEY (siteID),
    FOREIGN KEY (email) REFERENCES users(email)
        ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE userdata (
    email VARCHAR(255),
    fileId INT NOT NULL,
    filename VARCHAR(255) NOT NULL,
    filelocation VARCHAR(255) NOT NULL,
    filedescription VARCHAR(255) NOT NULL,
    PRIMARY KEY (fileID),
    FOREIGN KEY (email) REFERENCES users(email)
        ON UPDATE CASCADE ON DELETE CASCADE
);

INSERT INTO users VALUES ('Admin','N', 'admin.n@gmail.com', 'password');
INSERT INTO userSite VALUES ('admin.n@gmail.com', '0', 'ADMIN', '999');