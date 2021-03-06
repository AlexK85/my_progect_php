SET NAMES utf8;
DROP TABLE IF EXISTS catalogs_ajax;
CREATE TABLE catalogs_ajax (
  id INT(11) NOT NULL AUTO_INCREMENT,
  name TINYTEXT NOT NULL,
  pos INT(11) NOT NULL,
  is_active TINYINT(1) NOT NULL DEFAULT 1,
  parent_id INT(11) NOT NULL,
  PRIMARY KEY (id)
);
INSERT INTO catalogs_ajax VALUES(1, 'Материнские платы', 1, 1, 0);
INSERT INTO catalogs_ajax VALUES(2, 'Жесткие диски', 2, 1, 0);
INSERT INTO catalogs_ajax VALUES(3, 'Видеокарты', 3, 1, 0);
INSERT INTO catalogs_ajax VALUES(4, 'Процессоры', 4, 1, 0);
INSERT INTO catalogs_ajax VALUES(5, 'ASUS', 1, 1, 1);
INSERT INTO catalogs_ajax VALUES(6, 'Biostar', 2, 1, 1);
INSERT INTO catalogs_ajax VALUES(7, 'Foxconn', 3, 1, 1);
INSERT INTO catalogs_ajax VALUES(8, 'GIGABYTE', 4, 1, 1);
INSERT INTO catalogs_ajax VALUES(9, 'Intel', 5, 1, 1);
INSERT INTO catalogs_ajax VALUES(10, 'MSI', 6, 1, 1);
INSERT INTO catalogs_ajax VALUES(11, 'Supermicro', 7, 1, 1);
INSERT INTO catalogs_ajax VALUES(12, 'Hitachi', 1, 1, 2);
INSERT INTO catalogs_ajax VALUES(13, 'Samsung', 2, 1, 2);
INSERT INTO catalogs_ajax VALUES(14, 'Seagate', 3, 1, 2);
INSERT INTO catalogs_ajax VALUES(15, 'Western Digital', 4, 1, 2);
INSERT INTO catalogs_ajax VALUES(16, 'ASUS', 1, 1, 3);
INSERT INTO catalogs_ajax VALUES(17, 'GIGABYTE', 2, 1, 3);
INSERT INTO catalogs_ajax VALUES(18, 'MSI', 3, 1, 3);
INSERT INTO catalogs_ajax VALUES(19, 'Sapphire', 4, 1, 3);
INSERT INTO catalogs_ajax VALUES(20, 'AMD', 1, 1, 4);
INSERT INTO catalogs_ajax VALUES(21, 'Intel', 2, 1, 4);