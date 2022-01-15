
CREATE TABLE acudiente (
  id int NOT NULL AUTO_INCREMENT,
  nombre varchar(50) NOT NULL,
  apellido varchar(50) NOT NULL,
  genero varchar(20) NOT NULL,
  tipo_documento varchar(40) NOT NULL,
  numero_documento bigint DEFAULT NULL,
  profesion varchar(50) NOT NULL,
  telefono bigint NOT NULL,
  direccion varchar(40) NOT NULL,
  estado varchar(50) NOT NULL,
  PRIMARY KEY (id),
  UNIQUE KEY numero_documento (numero_documento)
); 

CREATE TABLE curso (
  id int NOT NULL AUTO_INCREMENT,
  nombre varchar(30) NOT NULL,
  PRIMARY KEY (id)
); 


CREATE TABLE docente (
  id int NOT NULL AUTO_INCREMENT,
  nombre varchar(50) NOT NULL,
  apellido varchar(50) NOT NULL,
  genero varchar(20) NOT NULL,
  tipo_documento varchar(40) NOT NULL,
  numero_documento bigint NOT NULL,
  profesion varchar(50) NOT NULL,
  telefono bigint NOT NULL,
  contrato varchar(20) NOT NULL,
  valorContrato float NOT NULL,
  direccion varchar(40) NOT NULL,
  estado varchar(50) NOT NULL,
  PRIMARY KEY (id),
  UNIQUE KEY numero_documento (numero_documento)
);


CREATE TABLE estudiante (
  id int NOT NULL AUTO_INCREMENT,
  nombre varchar(50) NOT NULL,
  apellido varchar(50) NOT NULL,
  genero varchar(20) NOT NULL,
  fecha_nacimiento date NOT NULL,
  lugar_nacimiento varchar(50) NOT NULL,
  eps varchar(30) NOT NULL,
  tipo_documento varchar(40) NOT NULL,
  numero_documento bigint DEFAULT NULL,
  direccion varchar(50) NOT NULL,
  estado varchar(50) NOT NULL,
  PRIMARY KEY (id),
  UNIQUE KEY numero_documento (numero_documento)
); 


CREATE TABLE matricula (
  id int NOT NULL AUTO_INCREMENT,
  fecha date NOT NULL,
  valor float NOT NULL,
  fk_numero_documento_estudiante bigint NOT NULL,
  nombre_estudiante varchar(50) NOT NULL,
  apellido_estudiante varchar(50) NOT NULL,
  fk_numero_documento_acudiente bigint NOT NULL,
  nombre_acudiente varchar(50) NOT NULL,
  apellido_acudiente varchar(50) NOT NULL,
  fk_id_curso int NOT NULL,
  estado varchar(50) NOT NULL,
  PRIMARY KEY (id),
  KEY fk_numero_documento_estudiante (fk_numero_documento_estudiante),
  KEY fk_numero_documento_acudiente (fk_numero_documento_acudiente),
  KEY fk_id_curso (fk_id_curso),
  CONSTRAINT matricula_ibfk_1 FOREIGN KEY (fk_numero_documento_estudiante) REFERENCES estudiante (numero_documento),
  CONSTRAINT matricula_ibfk_2 FOREIGN KEY (fk_numero_documento_acudiente) REFERENCES acudiente (numero_documento),
  CONSTRAINT matricula_ibfk_3 FOREIGN KEY (fk_id_curso) REFERENCES curso (id)
);


CREATE TABLE pago_docente (
  id int NOT NULL AUTO_INCREMENT,
  fecha date NOT NULL,
  numDoc_docente bigint NOT NULL,
  valor float NOT NULL,
  nombre_rectora varchar(50) NOT NULL,
  periodo_academico varchar(20) NOT NULL,
  mes_academico varchar(20) NOT NULL,
  PRIMARY KEY (id),
  KEY numDoc_docente (numDoc_docente),
  CONSTRAINT pago_docente_ibfk_1 FOREIGN KEY (numDoc_docente) REFERENCES docente (numero_documento)
); 


CREATE TABLE pension (
  id int NOT NULL AUTO_INCREMENT,
  fecha date NOT NULL,
  valor float NOT NULL,
  nombre_admin varchar(50) NOT NULL,
  periodo_academico varchar(20) NOT NULL,
  mes_academico varchar(20) NOT NULL,
  fk_id_estudiante bigint NOT NULL,
  fk_id_matricula bigint NOT NULL,
  PRIMARY KEY (id)
); 


CREATE TABLE usuarios (
  id int NOT NULL AUTO_INCREMENT,
  nombre varchar(45) NOT NULL,
  tipo_usuario varchar(45) NOT NULL,
  usuario varchar(45) NOT NULL,
  password varchar(45) NOT NULL,
  PRIMARY KEY (id),
  UNIQUE KEY usuario (usuario)
);