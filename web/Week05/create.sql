DROP TABLE IF EXISTS family_members;
DROP TABLE IF EXISTS relationship;

CREATE TABLE relationship
( id            SERIAL          NOT NULL    PRIMARY KEY
, description   VARCHAR(100)    NOT NULL
);

CREATE TABLE family_members
( id                SERIAL          NOT NULL    PRIMARY KEY
, first_name        VARCHAR(100)    NOT NULL
, last_name         VARCHAR(100)    NOT NULL
, relationship_id   INT             NOT NULL    REFERENCES relationship(id)
);

INSERT INTO relationship( description) VALUES( 'Mother');
INSERT INTO relationship( description) VALUES( 'Father');
INSERT INTO relationship( description) VALUES( 'Brother');
INSERT INTO relationship( description) VALUES( 'Sister');

INSERT INTO family_members(first_name, last_name, relationship_id) VALUES('Lisa', 'Hanks', 1);
INSERT INTO family_members(first_name, last_name, relationship_id) VALUES('Devron', 'Hanks', 2);
INSERT INTO family_members(first_name, last_name, relationship_id) VALUES('Matthew', 'Hanks', 3);
INSERT INTO family_members(first_name, last_name, relationship_id) VALUES('Sarah', 'Hanks', 4);
INSERT INTO family_members(first_name, last_name, relationship_id) VALUES('Michael', 'Hanks', 3);
INSERT INTO family_members(first_name, last_name, relationship_id) VALUES('Susan', 'Hanks', 4);
INSERT INTO family_members(first_name, last_name, relationship_id) VALUES('Bryan', 'Hanks', 3);
INSERT INTO family_members(first_name, last_name, relationship_id) VALUES('Holly', 'Hanks', 4);