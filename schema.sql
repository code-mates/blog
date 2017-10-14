CREATE database cm_blog;
USE cm_blog;
SHOW databases;
CREATE TABLE cm_blog.article
(article_id int NOT NULL AUTO_INCREMENT Primary Key, author_user_id int NOT NULL, title varchar(35), body text, publish_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP);
CREATE TABLE cm_blog.user
(user_id int NOT NULL AUTO_INCREMENT Primary Key, name varchar(35), emailaddress varchar(80), password varchar (32));
INSERT INTO user (password)
VALUES (MD5('verysecretpassword'));
UPDATE user
SET password = MD5(password);
SELECT * FROM user WHERE password=MD5('verysecretpassword');
