CREATE DATABASE proy_sgtud;
USE proy_sgtud;

CREATE TABLE organizador(
	id int PRIMARY KEY AUTO_INCREMENT,
    codigo_carrera double not null, 
    nombre varchar(50) not null,
    telefono double not null, 
    correo varchar(50) not null,
    habilitado varchar(6)
);

CREATE TABLE torneo(
	id int PRIMARY KEY AUTO_INCREMENT,
    nombre varchar(50) not null,
    descripcion varchar(250),
    precio int not null,
    tipo varchar(50) not null,
    fecha date
);

CREATE TABLE especificacion(
	id int PRIMARY KEY AUTO_INCREMENT,
    especificacion varchar(250),
    id_torneo int,
    foreign key (id_torneo) references torneo (id)
);

CREATE TABLE torneo_organizador(
	id int PRIMARY KEY AUTO_INCREMENT,
    id_organizador int not null,
    foreign key (id_organizador) references organizador (id),
    id_torneo int,
    foreign key (id_torneo) references torneo (id)
);

CREATE TABLE jugador(
	id float PRIMARY KEY AUTO_INCREMENT,
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
	id float PRIMARY KEY AUTO_INCREMENT,
    hora_inicio time not null,
    hora_fin time not null,
    contrincante_1 float not null,
    foreign key (contrincante_1) references jugador(id),
    contrincante_2 float not null,
    foreign key (contrincante_2) references jugador(id),
    id_torneo int,
    foreign key (id_torneo) references torneo (id)
);

-- ORGANIZADOR
    INSERT INTO organizador(codigo_carrera, nombre, telefono, correo, habilitado) 
    VALUES ('20202578111','Dania aguilar','3104855100','daguilarm@udistrital.edu.co', 'SI');

    INSERT INTO organizador(codigo_carrera, nombre, telefono, correo, habilitado) 
    VALUES ('20202578123','Diana Avila','3104839999','adavilam@udistrital.edu.co', 'SI');

-- TORNEO
    INSERT INTO torneo(nombre, descripcion, precio, tipo, fecha) 
    VALUES ('Torneo de Volei a la Media','Es un torneo de Voleibol al que todos están invitados','5000','Voleibol','2023-11-01');

    INSERT INTO torneo(nombre, descripcion, precio, tipo, fecha) 
    VALUES ('Torneo de Ajedrez a la Tecno','Es un torneo de ajedrez al que todos están invitados','10000','Ajedrez','2023-11-03');

    INSERT INTO torneo(nombre, descripcion, precio, tipo, fecha) 
    VALUES ('Torneo de XBOX360 a la Tecno','Es un torneo de Video juegos al que todos están invitados','4000','XBOX360','2023-11-05');

    INSERT INTO torneo(nombre, descripcion, precio, tipo, fecha) 
    VALUES ('Torneo de Baloncesto en el Lectus','Es un torneo de Baloncesto al que todos están invitados','4000','Baloncesto','2023-11-05');

-- ESPECIFICACIONES
    INSERT INTO especificacion(especificacion, id_torneo) 
    VALUES ('Tener más de 15 años','1');

    INSERT INTO especificacion(especificacion, id_torneo) 
    VALUES ('Ser Estudiante activo','1');

-- JUGADOR
    INSERT INTO jugador(codigo_carrera, nombre, telefono, correo, carrera, genero, habilitado, id_torneo) 
    VALUES ('20202578001','Danilo aguilar','3104839100','daguilarm@udistrital.edu.co','Sistemas','M', 'SI','2');

    INSERT INTO jugador(codigo_carrera, nombre, telefono, correo, carrera, genero, habilitado, id_torneo) 
    VALUES ('20202578081','Yohana Avila','3104839109','ayavilam@udistrital.edu.co','Sistemas','F', 'SI','2');

    INSERT INTO jugador(codigo_carrera, nombre, telefono, correo, carrera, genero, habilitado, id_torneo) 
    VALUES ('20202555081','Dayana Avila','3104830109','adavilam@udistrital.edu.co','Mecánica','F', 'SI','1');

-- TORNEO_ORGANIZADOR
    INSERT INTO torneo_organizador(id_organizador, id_torneo) VALUES ('2','2');
    INSERT INTO torneo_organizador(id_organizador, id_torneo) VALUES ('2','1');
    INSERT INTO torneo_organizador(id_organizador, id_torneo) VALUES ('1','1');
