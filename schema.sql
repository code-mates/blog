use mysql
DROP DATABASE IF EXISTS cm_blog;

CREATE DATABASE cm_blog;
USE cm_blog;

/* Cannot use "user" for table name, as it is a reserved word in MySQL - changing to "userlist" */
CREATE TABLE userlist (
id int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
/* the user id will be up to 10 digits long, as an integer  */
username varchar(30) NOT NULL,
/* username not to exceed 30 characters, set in varchar to avoid a possible difference in value retrieval due to trailing spaces  */
firstName varchar(30) NOT NULL,
/* same as above - 30 character max, set with varchar as data type */
lastName varchar(30) NOT NULL,
/* same as above - 30 characters max, set with varchar as data type */
email varchar(255) NOT NULL,
/* email set to 255 characters in varchar - this will (hopefully) cover for people with massive emails, and possibly the hashing of emails in the future */
password char(128) NOT NULL,
/* char(128) chosen for "password" to contain all of the 512 bits used in SHA-512 encryption, and should be enough if a lesser method is chosen */
);