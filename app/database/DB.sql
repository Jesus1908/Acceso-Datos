
create database veterinaria;
use veterinaria;

create table propietarios
(
  idpropietario  int auto_increment primary key,
  apellidos      varchar(40) not null,
  nombre         varchar(40) not null
)ENGINE = INNODB;

create table mascotas
(
  idmascota     int auto_increment primary key,
  idpropietario int not null,
  tipo          enum('Perro', 'Gato') not null,
  nombre        varchar(40) not null,
  color         varchar(40) not null,
  genero        enum('hembra', 'macho'),
  vivo          enum('si', 'no') not null default 'si',
  constraint fk_idpropietario foreign key (idpropietario) references propietarios(idpropietario)
)ENGINE = INNODB;
insert into propietarios (apellidos, nombre) values 
('Omar', 'Pachas'),
('Lopez', 'Maria');
SELECT * FROM propietarios;

insert into mascotas (idpropietario, tipo, nombre, color, genero) values 
(1, 'Perro', 'Peluche', 'Marron', 'macho'),
(1, 'Gato', 'Tom', 'Blanco', 'macho'),
(2, 'Gato', 'Michi', 'Blanco', 'macho'),
(2, 'Gato', 'Pepe', 'Negro', 'macho');

SELECT 
  MA.idmascota,
  MA.nombre,
  MA.tipo,
  MA.color,
  MA.genero,
  CONCAT(PR.apellidos, ' ', PR.nombre) AS propietario
FROM mascotas MA 
INNER JOIN propietarios PR ON MA.idpropietario = PR.idpropietario 
ORDER BY MA.nombre;

SELECT 
  PR.idpropietario,
  CONCAT(PR.apellidos, ' ', PR.nombre) AS propietario,
  MA.idmascota,
  MA.nombre AS nombre_mascota,
  MA.tipo
FROM propietarios PR
INNER JOIN mascotas MA ON PR.idpropietario = MA.idpropietario
ORDER BY PR.idpropietario, MA.nombre;
