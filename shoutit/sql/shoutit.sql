CREATE DATABASE shoutit;
USE shoutit;

CREATE TABLE shouts (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    user VARCHAR(50),
    message TEXT,
    time TIME
);

INSERT INTO shouts (user, message, time) VALUES ("Dave", "What's goin' on?", "11:23:00");
INSERT INTO shouts (user, message, time) VALUES ("Marko", "Nothing", "11:24:00");
INSERT INTO shouts (user, message, time) VALUES ("Dave", "Damn It!", "11:25:00");
INSERT INTO shouts (user, message, time) VALUES ("Dave", "Damn It!", "11:25:00");
INSERT INTO shouts (user, message, time) VALUES ("Marko", "Let's do something!", "11:26:00");
INSERT INTO shouts (user, message, time) VALUES ("Dave", "Shall We?", "11:27:00");