CREATE TABLE ta07_user
( id              SERIAL        NOT NULL PRIMARY KEY
, username        VARCHAR (50)  NOT NULL UNIQUE
, userpassword    VARCHAR (1000)  NOT NULL
);
