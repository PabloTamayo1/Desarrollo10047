CREATE TABLE usuarios(
	id int not null AUTO_INCREMENT PRIMARY KEY,
    usr varchar(20),
    pwd varchar(30)
);

CREATE TABLE contactos (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(50) not null,
  apellido VARCHAR(50) not null,
  direccion VARCHAR(100) not null,
  correo VARCHAR(50) not null,
  telefono VARCHAR(15) not null
);
