/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : siades_beta

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2017-08-19 00:31:18
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for alumno
-- ----------------------------
DROP TABLE IF EXISTS `alumno`;
CREATE TABLE `alumno` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nie` char(20) NOT NULL,
  `Foto` blob,
  `Estado` bit(1) DEFAULT NULL,
  `Medicado` char(2) DEFAULT NULL,
  `Id_discapacidad` int(200) NOT NULL,
  `Id_persona` int(255) NOT NULL,
  `Id_religion` int(255) NOT NULL,
  PRIMARY KEY (`Id`) USING BTREE,
  KEY `Id_discapacidad` (`Id_discapacidad`) USING BTREE,
  KEY `Id_persona` (`Id_persona`) USING BTREE,
  KEY `Id_religion` (`Id_religion`) USING BTREE,
  CONSTRAINT `alumno_ibfk_1` FOREIGN KEY (`Id_discapacidad`) REFERENCES `discapacidad` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `alumno_ibfk_2` FOREIGN KEY (`Id_persona`) REFERENCES `persona` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `alumno_ibfk_3` FOREIGN KEY (`Id_religion`) REFERENCES `religion` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of alumno
-- ----------------------------
INSERT INTO `alumno` VALUES ('1', '165165', null, '', 'no', '1', '1', '1');

-- ----------------------------
-- Table structure for anio_lectivo
-- ----------------------------
DROP TABLE IF EXISTS `anio_lectivo`;
CREATE TABLE `anio_lectivo` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Anio` varchar(50) DEFAULT NULL,
  `Estado` char(255) DEFAULT NULL,
  PRIMARY KEY (`Id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of anio_lectivo
-- ----------------------------
INSERT INTO `anio_lectivo` VALUES ('1', '2018', '1');

-- ----------------------------
-- Table structure for becado
-- ----------------------------
DROP TABLE IF EXISTS `becado`;
CREATE TABLE `becado` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Observacion` varchar(400) DEFAULT NULL,
  `Id_matricula` int(255) NOT NULL,
  PRIMARY KEY (`Id`) USING BTREE,
  KEY `Id_matricula` (`Id_matricula`) USING BTREE,
  CONSTRAINT `becado_ibfk_1` FOREIGN KEY (`Id_matricula`) REFERENCES `matricula` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of becado
-- ----------------------------

-- ----------------------------
-- Table structure for carga_docente
-- ----------------------------
DROP TABLE IF EXISTS `carga_docente`;
CREATE TABLE `carga_docente` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Id_turno` int(11) NOT NULL,
  `Id_seccion` int(255) NOT NULL,
  `Id_materia` int(255) NOT NULL,
  `Id_docente` int(255) NOT NULL,
  PRIMARY KEY (`Id`) USING BTREE,
  KEY `Id_turno` (`Id_turno`) USING BTREE,
  KEY `Id_seccion` (`Id_seccion`) USING BTREE,
  KEY `Id_materia` (`Id_materia`) USING BTREE,
  KEY `Id_docente` (`Id_docente`) USING BTREE,
  CONSTRAINT `carga_docente_ibfk_1` FOREIGN KEY (`Id_turno`) REFERENCES `turno` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `carga_docente_ibfk_2` FOREIGN KEY (`Id_seccion`) REFERENCES `seccion` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `carga_docente_ibfk_3` FOREIGN KEY (`Id_materia`) REFERENCES `materias` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `carga_docente_ibfk_4` FOREIGN KEY (`Id_docente`) REFERENCES `docente` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of carga_docente
-- ----------------------------
INSERT INTO `carga_docente` VALUES ('1', '1', '1', '1', '1');

-- ----------------------------
-- Table structure for ciclo
-- ----------------------------
DROP TABLE IF EXISTS `ciclo`;
CREATE TABLE `ciclo` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of ciclo
-- ----------------------------
INSERT INTO `ciclo` VALUES ('1', '1');

-- ----------------------------
-- Table structure for conducta
-- ----------------------------
DROP TABLE IF EXISTS `conducta`;
CREATE TABLE `conducta` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nota` decimal(10,0) DEFAULT NULL,
  `Id_indicador` int(255) NOT NULL,
  PRIMARY KEY (`Id`) USING BTREE,
  KEY `Id_indicador` (`Id_indicador`) USING BTREE,
  CONSTRAINT `conducta_ibfk_1` FOREIGN KEY (`Id_indicador`) REFERENCES `indicador` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of conducta
-- ----------------------------

-- ----------------------------
-- Table structure for departamento
-- ----------------------------
DROP TABLE IF EXISTS `departamento`;
CREATE TABLE `departamento` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of departamento
-- ----------------------------
INSERT INTO `departamento` VALUES ('1', 'San Salvador');

-- ----------------------------
-- Table structure for deserciones
-- ----------------------------
DROP TABLE IF EXISTS `deserciones`;
CREATE TABLE `deserciones` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Fecha` date DEFAULT NULL,
  `Motivo` varchar(300) DEFAULT NULL,
  `Id_matricula` int(255) NOT NULL,
  PRIMARY KEY (`Id`) USING BTREE,
  KEY `Id_matricula` (`Id_matricula`) USING BTREE,
  CONSTRAINT `deserciones_ibfk_1` FOREIGN KEY (`Id_matricula`) REFERENCES `matricula` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of deserciones
-- ----------------------------

-- ----------------------------
-- Table structure for detalle_matricula
-- ----------------------------
DROP TABLE IF EXISTS `detalle_matricula`;
CREATE TABLE `detalle_matricula` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Id_documento` int(255) NOT NULL,
  `Id_matricula` int(255) NOT NULL,
  PRIMARY KEY (`Id`) USING BTREE,
  KEY `Id_documento` (`Id_documento`) USING BTREE,
  KEY `Id_matricula` (`Id_matricula`) USING BTREE,
  CONSTRAINT `detalle_matricula_ibfk_1` FOREIGN KEY (`Id_documento`) REFERENCES `documentos` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `detalle_matricula_ibfk_2` FOREIGN KEY (`Id_matricula`) REFERENCES `matricula` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of detalle_matricula
-- ----------------------------

-- ----------------------------
-- Table structure for detalle_notas
-- ----------------------------
DROP TABLE IF EXISTS `detalle_notas`;
CREATE TABLE `detalle_notas` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nota` decimal(10,0) DEFAULT NULL,
  `Id_nota` int(11) NOT NULL,
  `Id_conducta` int(11) NOT NULL,
  `Id_tipoactiv` int(11) NOT NULL,
  PRIMARY KEY (`Id`) USING BTREE,
  KEY `Id_nota` (`Id_nota`) USING BTREE,
  KEY `Id_conducta` (`Id_conducta`) USING BTREE,
  KEY `Id_tipoactiv` (`Id_tipoactiv`) USING BTREE,
  CONSTRAINT `detalle_notas_ibfk_1` FOREIGN KEY (`Id_nota`) REFERENCES `notas` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `detalle_notas_ibfk_2` FOREIGN KEY (`Id_conducta`) REFERENCES `conducta` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `detalle_notas_ibfk_3` FOREIGN KEY (`Id_tipoactiv`) REFERENCES `tipo_actividad` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of detalle_notas
-- ----------------------------

-- ----------------------------
-- Table structure for discapacidad
-- ----------------------------
DROP TABLE IF EXISTS `discapacidad`;
CREATE TABLE `discapacidad` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`Id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of discapacidad
-- ----------------------------
INSERT INTO `discapacidad` VALUES ('1', 'Ninguna');

-- ----------------------------
-- Table structure for docente
-- ----------------------------
DROP TABLE IF EXISTS `docente`;
CREATE TABLE `docente` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Foto` blob,
  `Id_persona` int(255) NOT NULL,
  PRIMARY KEY (`Id`) USING BTREE,
  KEY `Id_persona` (`Id_persona`) USING BTREE,
  CONSTRAINT `docente_ibfk_1` FOREIGN KEY (`Id_persona`) REFERENCES `persona` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of docente
-- ----------------------------
INSERT INTO `docente` VALUES ('1', null, '3');

-- ----------------------------
-- Table structure for documentos
-- ----------------------------
DROP TABLE IF EXISTS `documentos`;
CREATE TABLE `documentos` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(100) DEFAULT NULL,
  `Descripcion` varchar(400) DEFAULT NULL,
  PRIMARY KEY (`Id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of documentos
-- ----------------------------
INSERT INTO `documentos` VALUES ('1', 'Partida Nacimiento', 'Pruenklclk');

-- ----------------------------
-- Table structure for encargado
-- ----------------------------
DROP TABLE IF EXISTS `encargado`;
CREATE TABLE `encargado` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Otros_familiares` varchar(200) DEFAULT NULL,
  `Id_persona` int(255) NOT NULL,
  `Id_parentezco` int(255) NOT NULL,
  PRIMARY KEY (`Id`) USING BTREE,
  KEY `Id_persona` (`Id_persona`) USING BTREE,
  KEY `Id_parentezco` (`Id_parentezco`) USING BTREE,
  CONSTRAINT `encargado_ibfk_1` FOREIGN KEY (`Id_persona`) REFERENCES `persona` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `encargado_ibfk_2` FOREIGN KEY (`Id_parentezco`) REFERENCES `parentezco` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of encargado
-- ----------------------------
INSERT INTO `encargado` VALUES ('1', '0', '2', '1');

-- ----------------------------
-- Table structure for escuela_especial
-- ----------------------------
DROP TABLE IF EXISTS `escuela_especial`;
CREATE TABLE `escuela_especial` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`,`Nombre`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of escuela_especial
-- ----------------------------
INSERT INTO `escuela_especial` VALUES ('1', 'Ninguna');

-- ----------------------------
-- Table structure for grado
-- ----------------------------
DROP TABLE IF EXISTS `grado`;
CREATE TABLE `grado` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(255) DEFAULT NULL,
  `Id_ciclo` int(255) NOT NULL,
  PRIMARY KEY (`Id`) USING BTREE,
  KEY `Id_ciclo` (`Id_ciclo`) USING BTREE,
  CONSTRAINT `grado_ibfk_1` FOREIGN KEY (`Id_ciclo`) REFERENCES `ciclo` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of grado
-- ----------------------------
INSERT INTO `grado` VALUES ('1', '9', '1');

-- ----------------------------
-- Table structure for indicador
-- ----------------------------
DROP TABLE IF EXISTS `indicador`;
CREATE TABLE `indicador` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`Id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of indicador
-- ----------------------------

-- ----------------------------
-- Table structure for materias
-- ----------------------------
DROP TABLE IF EXISTS `materias`;
CREATE TABLE `materias` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`Id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of materias
-- ----------------------------
INSERT INTO `materias` VALUES ('1', 'Analisis de sistemas');

-- ----------------------------
-- Table structure for materia_nivel
-- ----------------------------
DROP TABLE IF EXISTS `materia_nivel`;
CREATE TABLE `materia_nivel` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Id_materia` int(11) NOT NULL,
  `Id_nivelacademico` int(11) NOT NULL,
  PRIMARY KEY (`Id`) USING BTREE,
  KEY `Id_materia` (`Id_materia`) USING BTREE,
  KEY `Id_nivelacademico` (`Id_nivelacademico`) USING BTREE,
  CONSTRAINT `materia_nivel_ibfk_1` FOREIGN KEY (`Id_materia`) REFERENCES `materias` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `materia_nivel_ibfk_2` FOREIGN KEY (`Id_nivelacademico`) REFERENCES `nivel_academico` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of materia_nivel
-- ----------------------------

-- ----------------------------
-- Table structure for matricula
-- ----------------------------
DROP TABLE IF EXISTS `matricula`;
CREATE TABLE `matricula` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Fecha` date DEFAULT NULL,
  `Observaciones` varchar(300) DEFAULT NULL,
  `Nhermanos` int(5) DEFAULT NULL,
  `Repite_grado` char(2) DEFAULT NULL,
  `Id_refuerzo` int(255) DEFAULT NULL,
  `Id_documento` int(255) DEFAULT NULL,
  `Id_alumno` int(11) DEFAULT NULL,
  `Id_aniolectivo` int(255) DEFAULT NULL,
  `Id_parentezco` int(255) DEFAULT NULL,
  `Id_cargadocente` int(255) DEFAULT NULL,
  `Id_seccion` int(255) DEFAULT NULL,
  `Id_Turno` int(11) DEFAULT NULL,
  `Institicion_procedente` varchar(200) DEFAULT NULL,
  `Id_escuelaespecial` int(255) DEFAULT NULL,
  PRIMARY KEY (`Id`) USING BTREE,
  KEY `Id_refuerzo` (`Id_refuerzo`) USING BTREE,
  KEY `Id_documento` (`Id_documento`) USING BTREE,
  KEY `Id_alumno` (`Id_alumno`) USING BTREE,
  KEY `Id_aniolectivo` (`Id_aniolectivo`) USING BTREE,
  KEY `Id_parentezco` (`Id_parentezco`) USING BTREE,
  KEY `Id_cargadocente` (`Id_cargadocente`) USING BTREE,
  KEY `Id_seccion` (`Id_seccion`) USING BTREE,
  KEY `Id_Turno` (`Id_Turno`) USING BTREE,
  KEY `Id_escuelaespecial` (`Id_escuelaespecial`) USING BTREE,
  CONSTRAINT `matricula_ibfk_1` FOREIGN KEY (`Id_refuerzo`) REFERENCES `refuerzo` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `matricula_ibfk_2` FOREIGN KEY (`Id_documento`) REFERENCES `documentos` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `matricula_ibfk_3` FOREIGN KEY (`Id_alumno`) REFERENCES `alumno` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `matricula_ibfk_4` FOREIGN KEY (`Id_aniolectivo`) REFERENCES `anio_lectivo` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `matricula_ibfk_5` FOREIGN KEY (`Id_parentezco`) REFERENCES `parentezco` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `matricula_ibfk_6` FOREIGN KEY (`Id_cargadocente`) REFERENCES `carga_docente` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `matricula_ibfk_7` FOREIGN KEY (`Id_seccion`) REFERENCES `seccion` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `matricula_ibfk_8` FOREIGN KEY (`Id_Turno`) REFERENCES `turno` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `matricula_ibfk_9` FOREIGN KEY (`Id_escuelaespecial`) REFERENCES `escuela_especial` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of matricula
-- ----------------------------
INSERT INTO `matricula` VALUES ('4', null, 'At w3schools.com you will learn how to make a website. We offer free tutorials in all web development technologies.', '1', 'Si', null, '1', '1', '1', '1', '1', '1', '1', 'INA', '1');
INSERT INTO `matricula` VALUES ('5', null, 'At w3schools.com you will learn how to make a website. We offer free tutorials in all web development technologies.', '1', 'Si', null, '1', '1', '1', '1', '1', '1', '1', 'ITCHA', '1');
INSERT INTO `matricula` VALUES ('6', null, 'At w3schools.com you will learn how to make a website. We offer free tutorials in all web development technologies.', '1', 'Si', null, '1', '1', '1', '1', '1', '1', '1', 'ITCHA', '1');

-- ----------------------------
-- Table structure for municipio
-- ----------------------------
DROP TABLE IF EXISTS `municipio`;
CREATE TABLE `municipio` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(150) DEFAULT NULL,
  `Id_departamento` int(11) NOT NULL,
  PRIMARY KEY (`Id`) USING BTREE,
  KEY `Id_departamento` (`Id_departamento`) USING BTREE,
  CONSTRAINT `municipio_ibfk_1` FOREIGN KEY (`Id_departamento`) REFERENCES `departamento` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of municipio
-- ----------------------------
INSERT INTO `municipio` VALUES ('1', 'Aguilares', '1');

-- ----------------------------
-- Table structure for nivel_academico
-- ----------------------------
DROP TABLE IF EXISTS `nivel_academico`;
CREATE TABLE `nivel_academico` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of nivel_academico
-- ----------------------------

-- ----------------------------
-- Table structure for notas
-- ----------------------------
DROP TABLE IF EXISTS `notas`;
CREATE TABLE `notas` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Pac` decimal(2,0) DEFAULT NULL,
  `Pai` decimal(2,0) DEFAULT NULL,
  `Pp` decimal(2,0) DEFAULT NULL,
  `Pg` decimal(2,0) DEFAULT NULL,
  `Trimestre` varchar(100) DEFAULT NULL,
  `Id_cargad` int(11) NOT NULL,
  `Id_matricula` int(11) NOT NULL,
  `Id_materianivel` int(11) NOT NULL,
  PRIMARY KEY (`Id`) USING BTREE,
  KEY `Id_cargad` (`Id_cargad`) USING BTREE,
  KEY `Id_matricula` (`Id_matricula`) USING BTREE,
  KEY `Id_materianivel` (`Id_materianivel`) USING BTREE,
  CONSTRAINT `notas_ibfk_1` FOREIGN KEY (`Id_cargad`) REFERENCES `carga_docente` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `notas_ibfk_2` FOREIGN KEY (`Id_matricula`) REFERENCES `matricula` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `notas_ibfk_3` FOREIGN KEY (`Id_materianivel`) REFERENCES `materia_nivel` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of notas
-- ----------------------------

-- ----------------------------
-- Table structure for parentezco
-- ----------------------------
DROP TABLE IF EXISTS `parentezco`;
CREATE TABLE `parentezco` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of parentezco
-- ----------------------------
INSERT INTO `parentezco` VALUES ('1', 'Padre');

-- ----------------------------
-- Table structure for persona
-- ----------------------------
DROP TABLE IF EXISTS `persona`;
CREATE TABLE `persona` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(150) DEFAULT NULL,
  `Apellido` varchar(150) DEFAULT NULL,
  `Fecha_nacimiento` date DEFAULT NULL,
  `Sexo` char(1) DEFAULT NULL,
  `Dui` char(10) DEFAULT NULL,
  `Direccion` text,
  `Telefono` char(9) DEFAULT NULL,
  `Ncasa` char(5) DEFAULT NULL,
  `Estado_familiar` char(2) DEFAULT NULL,
  `Id_municipio` int(255) NOT NULL,
  `Id_profesion` int(255) NOT NULL,
  PRIMARY KEY (`Id`) USING BTREE,
  KEY `Id_profesion` (`Id_profesion`) USING BTREE,
  KEY `Id_municipio` (`Id_municipio`) USING BTREE,
  CONSTRAINT `persona_ibfk_1` FOREIGN KEY (`Id_profesion`) REFERENCES `profesion` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `persona_ibfk_2` FOREIGN KEY (`Id_municipio`) REFERENCES `municipio` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of persona
-- ----------------------------
INSERT INTO `persona` VALUES ('1', 'Jairo Ernesto', 'Velasquez', '1994-11-21', 'M', '05079610-6', 'Santa Eugenia', '72003590', '12', null, '1', '1');
INSERT INTO `persona` VALUES ('2', 'Adonay', 'nsdndsk', '2017-08-14', 'M', '05079610-6', 'SDSDSD', '72003590', '32', '1', '1', '1');
INSERT INTO `persona` VALUES ('3', 'Javier', 'Zelaya', '2017-08-06', 'M', '050796106', 'FGFGFG', '72003590', '25', null, '1', '1');

-- ----------------------------
-- Table structure for profesion
-- ----------------------------
DROP TABLE IF EXISTS `profesion`;
CREATE TABLE `profesion` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`Id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of profesion
-- ----------------------------
INSERT INTO `profesion` VALUES ('1', 'Lic Educacion');

-- ----------------------------
-- Table structure for refuerzo
-- ----------------------------
DROP TABLE IF EXISTS `refuerzo`;
CREATE TABLE `refuerzo` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Tipo_refuerzo` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`Id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of refuerzo
-- ----------------------------

-- ----------------------------
-- Table structure for religion
-- ----------------------------
DROP TABLE IF EXISTS `religion`;
CREATE TABLE `religion` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of religion
-- ----------------------------
INSERT INTO `religion` VALUES ('1', 'bv');

-- ----------------------------
-- Table structure for seccion
-- ----------------------------
DROP TABLE IF EXISTS `seccion`;
CREATE TABLE `seccion` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` char(1) DEFAULT NULL,
  `Id_grado` int(255) NOT NULL,
  PRIMARY KEY (`Id`) USING BTREE,
  KEY `Id_grado` (`Id_grado`) USING BTREE,
  CONSTRAINT `seccion_ibfk_1` FOREIGN KEY (`Id_grado`) REFERENCES `grado` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of seccion
-- ----------------------------
INSERT INTO `seccion` VALUES ('1', 'A', '1');

-- ----------------------------
-- Table structure for tipo_actividad
-- ----------------------------
DROP TABLE IF EXISTS `tipo_actividad`;
CREATE TABLE `tipo_actividad` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`Id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of tipo_actividad
-- ----------------------------

-- ----------------------------
-- Table structure for turno
-- ----------------------------
DROP TABLE IF EXISTS `turno`;
CREATE TABLE `turno` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of turno
-- ----------------------------
INSERT INTO `turno` VALUES ('1', 'Mañana');
