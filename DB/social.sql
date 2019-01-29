CREATE SCHEMA social;

CREATE TABLE social.author
(
    id SERIAL       PRIMARY KEY,
    username        VARCHAR(100) NOT NULL UNIQUE,
    password        VARCHAR(100) NOT NULL,
    display_name    VARCHAR(100) NOT NULL
);

CREATE TABLE social.post (
    id serial   PRIMARY KEY,
    author_id   int REFERENCES social.author(id),
    content     varchar(1000),
    date        date
);

CREATE TABLE social.comment (
    id serial   PRIMARY KEY,
    author_id   int REFERENCES social.author(id),
    post_id     int REFERENCES social.post (id),
    content     varchar(1000),
    date        date
);
