CREATE TABLE catalogs_multi_insert (
  catalog_id INT(11) NOT NULL AUTO_INCREMENT,
  name TINYTEXT NOT NULL,
  PRIMARY KEY (catalog_id)
);
INSERT INTO catalogs_multi_insert VALUES (NULL, 'Процессоры'),
(NULL, 'Материнские платы'),
(NULL, 'Видеоадаптеры'),
(NULL, 'Жесткие диски'),
(NULL, 'Оперативная память');