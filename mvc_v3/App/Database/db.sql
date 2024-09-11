sqlite3 users.db

CREATE TABLE users (
    user_id   INTEGER PRIMARY KEY NOT NULL,
    user_name TEXT,
    user_age  INT
);

INSERT INTO users (user_name, user_age) VALUES
    ('Ethan', 23),
    ('Grace', 48),
    ('Lucas', 52),
    ('Oscar', 19),
    ('Chloe', 34);