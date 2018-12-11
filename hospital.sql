/* CREAMOS NUESTRA BASE DE DATOS HOSPITAL */
CREATE DATABASE HOSPITAL;

/* USAMOS NUESTRA BASE DE DATOS HOSPITAL */
USE HOSPITAL;

/* CREAMOS LA TABLA HISTORIA DOCTORES */
CREATE TABLE doctores(
	codigo varchar(4),
	nombres varchar(25),
    apellidos varchar(25)
);

/* CREAMOS LA TABLA PACIENTES */
CREATE TABLE pacientes(
    codigo varchar(4),
    nombres varchar(50),
    enfermedad varchar(27)
);

/* INSERTAMOS DOCTORES */
INSERT INTO doctores VALUES ('D001','Benites Gomez','Rafael Eduardo');
INSERT INTO doctores VALUES ('D002', 'Acevedo Mejía','Enrique Maximiliano');
INSERT INTO doctores VALUES ('D003', 'Aguilar Dorantes','Irma Patricia');
INSERT INTO doctores VALUES ('D004', 'Aragón Jiménez','Castro Alfredo');
INSERT INTO doctores VALUES ('D005', 'Argüello Melgar','Ernesto Eduardo');
INSERT INTO doctores VALUES ('D006', 'Aragón Jiménez','Castro Alfredo');
INSERT INTO doctores VALUES ('D007', 'Anzures Valladares','Martha Concepción');
INSERT INTO doctores VALUES ('D008', 'Antemate Chigo','Miguel Ángel');
INSERT INTO doctores VALUES ('D009', 'Altamirano García','Enrique Alí');
INSERT INTO doctores VALUES ('D010', 'Alonso Ibarra','Pascual Gerardo');

/* INSERTAMOS PACIENTES */
INSERT INTO pacientes VALUES ('P001', 'Alejo Guerrero Víctor Hugo','Leusemia');
INSERT INTO pacientes VALUES ('P002', 'Alderete Porras Jacinta Guillermina','Anorexia');
INSERT INTO pacientes VALUES ('P003', 'Alcoverde Martínez Roberto Antonio','Hepatitis A');
INSERT INTO pacientes VALUES ('P004', 'Alcántar Camacho José Israel','Faringitis');
INSERT INTO pacientes VALUES ('P005', 'García Martínez Miguel Ángel','Bronquios');
INSERT INTO pacientes VALUES ('P006', 'Hernández Hernández Francisco Javier','Bulimia');
INSERT INTO pacientes VALUES ('P007', 'García Hernández Guadalupe Maria','Depresion');
INSERT INTO pacientes VALUES ('P008', 'Carrera Abanto Gisela Estefany','Gastritis');
INSERT INTO pacientes VALUES ('P009', 'Valdivia Soto Astrid Noemi','Lepra');
INSERT INTO pacientes VALUES ('P010', 'Castro Villacampa Alexander Aguilar','Paperas');

/* CONSULTA PARA VER LOS REGISTROS INSERTADOS EN LA TABLA DOCTORES*/
SELECT * FROM doctores;

/* CONSULTA PARA VER LOS REGISTROS INSERTADOS EN LA TABLA PACIENTES*/
SELECT * FROM pacientes;