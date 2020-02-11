-- Create a table called topic with two columns: 
-- id and name. Then, manually insert into this table the following 
-- topics: Faith, Sacrifice, Charity.
DROP TABLE topic_scripture;
DROP TABLE topics;


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

CREATE TABLE topic_scripture
( id            SERIAL  NOT NULL
, topic_id      INT     NOT NULL
, scripture_id  INT     NOT NULL
, PRIMARY KEY(id)
, FOREIGN KEY(topic_id)     REFERENCES topics(id)
, FOREIGN KEY(scripture_id) REFERENCES scriptures(id)
);
