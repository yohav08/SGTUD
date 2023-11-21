CREATE DATABASE proy_sgtud;
USE proy_sgtud;

CREATE TABLE torneo(
	id int PRIMARY KEY AUTO_INCREMENT,
    nombre varchar(50) not null,
    descripcion varchar(250),
    precio int not null,
    tipo varchar(50) not null,
    fecha date
);

CREATE TABLE organizador(
	id int PRIMARY KEY AUTO_INCREMENT,
    codigo_carrera double not null, 
    nombre varchar(50) not null,
    telefono double not null, 
    correo varchar(50) not null,
    habilitado varchar(6),
    id_torneo int,
    foreign key (id_torneo) references torneo (id),
    contrasena varchar(50) not null
);

CREATE TABLE especificacion(
	id int PRIMARY KEY AUTO_INCREMENT,
    especificacion varchar(250),
    id_torneo int,
    foreign key (id_torneo) references torneo (id)
);

CREATE TABLE jugador(
	id int PRIMARY KEY AUTO_INCREMENT,
    codigo_carrera double not null, 
    nombre varchar(50) not null,
    telefono double not null, 
    correo varchar(50) not null,
    carrera varchar(50),
    genero varchar(50), 
    habilitado varchar(6),
    id_torneo int,
    foreign key (id_torneo) references torneo (id)
);

CREATE TABLE partido(
	id int PRIMARY KEY AUTO_INCREMENT,
    hora_inicio time not null,
    hora_fin time not null,
    contrincante_1 int not null,
    foreign key (contrincante_1) references jugador(id),
    contrincante_2 int not null,
    foreign key (contrincante_2) references jugador(id),
    id_torneo int,
    foreign key (id_torneo) references torneo (id)
);

-- TORNEO
    INSERT INTO torneo(nombre, descripcion, precio, tipo, fecha) 
    VALUES ('Torneo de Volei a la Media','Es un torneo de Voleibol al que todos están invitados','5000','Voleibol','2023-11-01');

    INSERT INTO torneo(nombre, descripcion, precio, tipo, fecha) 
    VALUES ('Torneo de Ajedrez a la Tecno','Es un torneo de ajedrez al que todos están invitados','10000','Ajedrez','2023-11-03');

    INSERT INTO torneo(nombre, descripcion, precio, tipo, fecha) 
    VALUES ('Torneo de XBOX360 a la Tecno','Es un torneo de Video juegos al que todos están invitados','4000','XBOX360','2023-11-05');

    INSERT INTO torneo(nombre, descripcion, precio, tipo, fecha) 
    VALUES ('Torneo de Baloncesto en el Lectus','Es un torneo de Baloncesto al que todos están invitados','4000','Baloncesto','2023-11-05');

-- ORGANIZADOR
    INSERT INTO organizador(codigo_carrera, nombre, telefono, correo, habilitado, id_torneo, contrasena) 
    VALUES ('20202578111','Daniel Aguilar','3104855100','daguilarm@udistrital.edu.co', 'SI', '1', '123');

    INSERT INTO organizador(codigo_carrera, nombre, telefono, correo, habilitado, id_torneo, contrasena) 
    VALUES ('20202578123','Diana Avila','3104839999','adavilam@udistrital.edu.co', 'SI', '2', '123');

-- ESPECIFICACIONES
    INSERT INTO especificacion(especificacion, id_torneo) 
    VALUES ('Tener más de 15 años','1');

    INSERT INTO especificacion(especificacion, id_torneo) 
    VALUES ('Ser Estudiante activo','1');

    INSERT INTO especificacion(especificacion, id_torneo) 
    VALUES ('Presentar carnet universitario','2');

    INSERT INTO especificacion(especificacion, id_torneo) 
    VALUES ('Ser Estudiante activo','2');

-- JUGADOR
    INSERT INTO jugador(codigo_carrera, nombre, telefono, correo, carrera, genero, habilitado, id_torneo) 
    VALUES ('20202578001','Danilo aguilar','3104839100','daguilarm@udistrital.edu.co','Sistemas','M', 'SI','1');

    INSERT INTO jugador(codigo_carrera, nombre, telefono, correo, carrera, genero, habilitado, id_torneo) 
    VALUES ('20202578081','Yohana Avila','3104839109','ayavilam@udistrital.edu.co','Sistemas','F', 'SI','1');

    INSERT INTO jugador(codigo_carrera, nombre, telefono, correo, carrera, genero, habilitado, id_torneo) 
    VALUES ('20202555084','Dayana Avila','3104830119','adavilam@udistrital.edu.co','Control','F', 'SI','2');

    INSERT INTO jugador(codigo_carrera, nombre, telefono, correo, carrera, genero, habilitado, id_torneo) 
    VALUES ('20202555085','David Campos','3104830129','sdcampos@udistrital.edu.co','Civiles','M', 'SI','2');

    INSERT INTO jugador(codigo_carrera, nombre, telefono, correo, carrera, genero, habilitado, id_torneo) 
    VALUES ('20202555085','Israel Buitrago','3104830159','isbuitrago@udistrital.edu.co','Industrial','M', 'SI','3');

    INSERT INTO jugador(codigo_carrera, nombre, telefono, correo, carrera, genero, habilitado, id_torneo) 
    VALUES ('20202555015','Adriana Rodriguez','3104830359','avrodriguez@udistrital.edu.co','Sistemas','F', 'SI','3');

-- PARTIDO
    INSERT INTO partido(hora_inicio, hora_fin, contrincante_1, contrincante_2, id_torneo) 
    VALUES ('09:30:00','10:00:00','1','2','1');

    INSERT INTO partido(hora_inicio, hora_fin, contrincante_1, contrincante_2, id_torneo) 
    VALUES ('09:30:00','10:00:00','3','4','2');

    INSERT INTO partido(hora_inicio, hora_fin, contrincante_1, contrincante_2, id_torneo) 
    VALUES ('09:30:00','10:00:00','5','6','3');

    