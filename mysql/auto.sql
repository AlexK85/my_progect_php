CREATE TABLE tbl_auto (
  id INT(11) NOT NULL AUTO_INCREMENT,
  name TINYTEXT NOT NULL,
  PRIMARY KEY (id)
);
INSERT INTO tbl_auto VALUES (NULL, 'Процессоры');
INSERT INTO tbl_auto VALUES (NULL, 'Материнские платы');
INSERT INTO tbl_auto VALUES (NULL, 'Видеоадаптеры');
SELECT * FROM tbl_auto;