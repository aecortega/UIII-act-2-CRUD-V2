CREATE DATABASE bd_aeco;

use bd_aeco;

CREATE TABLE productos(
  id_productos INT(11) PRIMARY KEY AUTO_INCREMENT,
  n_producto VARCHAR(50) NOT NULL,
  descripcion VARCHAR(50) NOT NULL,
  precio FLOAT(10,2) NOT NULL,
  talla VARCHAR(50) NOT NULL,
  marca VARCHAR(50) NOT NULL,
  modelo VARCHAR(50) NOT NULL,
  corte VARCHAR(50) NOT NULL,
  color VARCHAR(50) NOT NULL
);

DESCRIBE productos;
