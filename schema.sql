CREATE database cm_blog;
USE cm_blog;
SHOW databases;
CREATE TABLE cm_blog.article
 (article_id int NOT NULL AUTO_INCREMENT Primary Key, author_user_id int NOT NULL, title varchar(35), body text, publish_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP);
