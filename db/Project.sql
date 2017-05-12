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
    phone VARCHAR(50),
    email VARCHAR(30),
    UNIQUE uq_username (username),
    UNIQUE uq_password (password),
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
	id INT,
	imageurl TEXT
);

CREATE TABLE History_TB(
	m_id INT,
    i_id INT,
    count INT,
    date_sold DATE
);

CREATE TABLE Banner_TB(
	b_id INT,
    b_imageurl TEXT
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

INSERT Member_TB (member_id,firstname,lastname,username,password,address,email,phone) VALUES
(1,"chanon", "temchai", "realtime", "pass1", "61/83", "nonkung8899@hotmail.com","02-900-9000"),
(2,"ChatChai","Saiya","ChatChai01","pass2","61/84","nungyoung@gmail.com","02-900-9000"),
(3,"Warawut","Haiya","Warawut01","pass3","61/85","jung@gmail.com","02-900-9000"),
(4,"Turk","SaveState","Turk01","pass4","61/86","standart@gmail.com","02-900-9000"), 
(5,"Thanawat","Warachai","Thanawat01","pass5","61/87","Thanawat@gmail.com","02-900-9000"),
(6,"FourMod","ModMod","FourMod01","pass6","61/88","FourMode@gmail.com","02-900-9000"),
(7,"admin","admin","admin","admin","61/88","admin@gmail.com","02-900-9000");

INSERT Item_TB (item_id,item_name, price, type,image_url) VALUES
(1, "ชุดประหยัด set1", "สปาเก็ตตี้สไปซี่ซีฟู้ด ขนมปังกระเทียมชีส และมะนาวโซดา ในราคาที่ถูกกว่า", 199, "promotion", "image/promotion1.png"),
(2, "ชุดประหยัด set2", "สปาเก็ตตี้ไวท์ครีมซอส ขนมปังกระเทียม และไก่นิวออร์ลีนส์ ในราคาที่ถูกกว่า", 199, "promotion", "image/promotion2.png"),

(3, "สปาเก็ตตี้ไวท์ครีมซอส", "เนื้อที่ย่างบนเปลวไฟจนหอมกรุ่นถึง 2 ชั้น เติมความอร่อยด้วยเบคอนรมควัน กรุบกรอบด้วยผักสด", 149, "pasta", "image/pasta3.png"), 
(4, "สปาเก็ตตี้สไปซี่ซีฟู้ด ", "สปาเก็ตตี้ซีฟู้ดรสชาติแบบไทยๆ จัดจ้านซอสผัดฉ่า เผ็ดถึงใจ", 139, "pasta", "image/pasta1.png"), 
(5, "สปาเก็ตตี้ผัดฉ่า ไส้กรอกไก่", "สปาเก็ตตี้ไส้กรอกไก่ รสชาติแบบไทยๆ จัดจ้านซอสผัดฉ่า เผ็ดถึงใจ", 129, "pasta", "image/pasta5.png"), 

(6, "วอปเปอร์", "เนื้อที่ย่างบนเปลวไฟจนหอมกรุ่นสุกกำลังดี ที่แสนจะเข้ากันกับผักสดใหม่ มะเขือเทศ หอมใหญ่ และแตงกวาดอง", 99, "burger", "image/burger1.png"), 
(7, "มัชรูมสวิส", "เนื้อชิ้นหนา ย่างบนเปลวไฟหอมกรุ่น ราดด้วยเห็ดแชมปิญองชุ่มซอสสูตรพิเศษเฉพาะของเรา เสิร์ฟร้อนๆ บนสวิสชีสหอมกรุ่น", 99, "burger", "image/burger2.png"), 

(8, "ขนมปังกระเทียม", "ขนมปังโรยงาเนื้อนุ่ม อบด้วยเนยกระเทียมหอมกรุ่น", 59, "appetizer", "image/a1.png"), 
(9, "ขนมปังกระเทียมชีส", "พิเศษกับมอสซาเรลล่าชีสบนหน้าขนมปังกระเทียม เพิ่มความเข้มข้นหอมมันอีกระดับ", 69, "appetizer", "image/a2.png"), 
(10, "ชีสซี่ ป๊อป", "แป้งนุ่มนุ่ม สอดไส้ชีสชั้นเลิศ… ชุปเกล็ดขนมปังกรุบกรอบ พร้อมโรยหน้าด้วยผงชีส เพิ่มรสชาติให้อร่อยยิ่งขึ้นด้วยชีสเต็มๆ", 59, "appetizer", "image/a3.png"),
(11, "นักเก็ต", "นักเก็ตไก่เนื้อแน่นหมักเครื่องเทศหอมอร่อย จำนวน 6 ชิ้น เสิร์ฟพร้อมซอสบาร์บีคิวรสเข้มไม่เหมือนใคร", 99, "appetizer", "image/a4.png"),

(12, "โค้ก/สไปรท์/แฟนต้า", "จับคู่มื้ออาหารกับเครื่องดื่มซาบซ่า จะเมนูไหนก็ลงตัว", 35, "drink", "image/d1.png"),
(13, "ชามะนาวเย็น", "มาชาร์ตแบตเติมความสดชื่นด้วยชามะนาวเย็นๆ สักแก้ว กับรสชาติหอมหวาน", 35, "drink", "image/d2.png"),
(14, "มะนาวโซดา", "เติมความสดชื่นด้วยมะนาวโซดา เติมความสดใสให้พร้อมสู้อากาศร้อนได้อีกด้วย", 65, "drink", "image/d3.png"),
;

INSERT History_TB(m_id,i_id,count,date_sold) VALUES
(1,2,2,"2013-04-1"),
(4,3,1,"2013-04-2"),
(4,2,1,"2013-04-2"),
(5,3,2,"2014-05-6"),
(5,4,3,"2017-05-9"),
(4,5,4,"2017-05-12");


INSERT Popular_TB(id,imageurl) VALUES
(1,"image/burger1.png"),
(2,"image/a1.png"),
(3,"image/drink1.png");

INSERT Banner_TB(b_id,b_imageurl) VALUES
(1,"image/promotion.jpg"),
(2,"image/promotion2.jpg"),
(3,"image/1.jpg");



SELECT * FROM Member_TB;
SELECT * FROM Item_TB;
SELECT * FROM History_TB;
SELECT * FROM Banner_TB;
SELECT * FROM Popular_TB;

/*DELETE From Member_TB where member_id = 1;*/

/*SELECT COUNT(*) FROM History_TB ORDER BY i_id DESC;*/
