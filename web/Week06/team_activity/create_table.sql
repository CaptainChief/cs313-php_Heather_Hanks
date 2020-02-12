-- Create a table called topic with two columns: 
-- id and name. Then, manually insert into this table the following 
-- topics: Faith, Sacrifice, Charity.
DROP TABLE topic_scripture;
DROP TABLE topics;
-- DROP TABLE scriptures;


CREATE TABLE topics
( id    SERIAL      NOT NULL    PRIMARY kEY
, name  VARCHAR(20) NOT NULL
);

INSERT INTO topics(name) VALUES('Faith');
INSERT INTO topics(name) VALUES('Sacrifice');
INSERT INTO topics(name) VALUES('Charity');

-- Create another table to link scriptures to topics. 
-- (This is a many-to-many relationship, so it requires another table 
-- or the linking). Make sure to include foreign keys constraints.
CREATE TABLE scriptures
( id        SERIAL       NOT NULL    PRIMARY KEY
, book      VARCHAR(20)  NOT NULL
, chapter   INT          NOT NULL
, verse     INT          NOT NULL
, content   VARCHAR(200) NOT NULL
);

INSERT INTO scriptures(book, chapter, verse, content) 
VALUES('John', 1, 5, 'And the light shineth in darkness; and the darkness comprehended it not.');
INSERT INTO scriptures(book, chapter, verse, content) VALUES('D&C', 88, 49, '49 The alight shineth in darkness, and the darkness comprehendeth it not; nevertheless, the day shall come when you shall bcomprehend even God, being quickened in him and by him.');
INSERT INTO scriptures(book, chapter, verse, content) VALUES('D&C', 93, 28, 'He that akeepeth his commandments receiveth btruth and clight, until he is glorified in truth and dknoweth all things.');
INSERT INTO scriptures(book, chapter, verse, content) VALUES('Mosiah', 16, 9, 'He is the alight and the life of the world; yea, a light that is endless, that can never be darkened; yea, and also a life which is endless, that there can be no more death.');




CREATE TABLE topic_scripture
( id            SERIAL  NOT NULL
, topic_id      INT     NOT NULL
, scripture_id  INT     NOT NULL
, PRIMARY KEY(id)
, FOREIGN KEY(topic_id)     REFERENCES topics(id)
, FOREIGN KEY(scripture_id) REFERENCES scriptures(id)
);
