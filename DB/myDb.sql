
#I just use \i DB/myDb.sql to add all of this information into my database

CREATE TABLE author
(
    id SERIAL       PRIMARY KEY,
    username        VARCHAR(100) NOT NULL UNIQUE,
    password        VARCHAR(100) NOT NULL,
    display_name    VARCHAR(100) NOT NULL
);

CREATE TABLE post (
    id serial   PRIMARY KEY,
    author_id   int REFERENCES author(id),
    content     varchar(1000),
    date        date
);

CREATE TABLE comment (
    id serial   PRIMARY KEY,
    author_id   int REFERENCES author(id),
    post_id     int REFERENCES post (id),
    content     varchar(1000),
    date        date
);
