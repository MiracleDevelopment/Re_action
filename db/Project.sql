-- -------------------------------
-- Initialize DB & TB
-- -------------------------------

DROP DATABASE IF EXISTS ShopDB;
CREATE DATABASE ShopDB;

USE ShopDB;

CREATE TABLE Member_TB (
	member_id INT AUTO_INCREMENT,
    firstname VARCHAR(30),
    lastname VARCHAR(30),
    username VARCHAR(30),
    password VARCHAR(30),
    address VARCHAR(100),
    email VARCHAR(30),
    birthday DATE,
    UNIQUE uq_username (username),
    UNIQUE uq_email (email),
    PRIMARY KEY(member_id)
);

CREATE TABLE Item_TB (
	item_id INT AUTO_INCREMENT,
    item_name VARCHAR(30),
    item_description TEXT,
    price INT,
    type VARCHAR(15),
    image_url VARCHAR(100),
    PRIMARY KEY(item_id)
);

CREATE TABLE Popular_TB (
	id_type INT,
	i_id TEXT
);

CREATE TABLE History_TB(
	m_id INT,
    i_id INT,
    count INT,
    date_sold DATE
);




-- -------------------------------
-- ADD CONSTRIANT
-- -------------------------------


ALTER TABLE History_TB 
ADD CONSTRAINT FOREIGN KEY his_mid_fk (m_id) REFERENCES Member_TB (member_id)
ON UPDATE CASCADE 
ON DELETE CASCADE;

ALTER TABLE History_TB 
ADD CONSTRAINT FOREIGN KEY his_iid_fk (i_id) REFERENCES Item_TB (item_id)
ON UPDATE CASCADE 
ON DELETE CASCADE;

-- -------------------------------
-- INSERT
-- -------------------------------

INSERT Member_TB (member_id,firstname,lastname,username,password,address,email) VALUES
(1,"chanon", "temchai", "realtime", "pass1", "61/83", "nonkung8899@hotmail.com"),
(2,"ChatChai","Saiya","ChatChai01","pass2","61/84","nungyoung@gmail.com"),
(3,"Warawut","Haiya","Warawut01","pass3","61/85","jung@gmail.com"),
(4,"Turk","SaveState","Turk01","pass4","61/86","standart@gmail.com"), 
(5,"Thanawat","Warachai","Thanawat01","pass5","61/87","Thanawat@gmail.com"),
(6,"FourMod","ModMod","FourMod01","pass6","61/88","FourMode@gmail.com"),
(7,"admin","admin","admin","admin","61/88","admin@gmail.com");

INSERT Item_TB (item_id,item_name, price, type,image_url) VALUES
(1,"Garlic Bread", 100,"pasta", "image/xxx.png"),
(2,"Chicken Wings ",200,"pasta","image/chicken.jpg"),
(3,"Mushroom Spaghetti",150,"pasta","image/spicy.png"),
(4,"Bacon Topping",180,"pasta","image/Salad.png"),
(5,"Potato",300,"pasta","image/Potato.jpg");

INSERT History_TB(m_id,i_id,count,date_sold) VALUES
(1,2,2,"2013-04-1"),
(4,3,1,"2013-04-2"),
(5,2,2,"2014-05-6"),
(5,1,2,"2014-05-6");


SELECT * FROM Member_TB;
SELECT * FROM Item_TB;
SELECT * FROM History_TB;
SELECT * FROM Popular_TB;

/*DELETE From Member_TB where member_id = 1;*/

/*SELECT COUNT(*) FROM History_TB ORDER BY i_id DESC;*/
