# HeidiSQL Dump 
#
# --------------------------------------------------------
# Host:                         localhost
# Database:                     atleticweb
# Server version:               5.7.11
# Server OS:                    Win64
# Target compatibility:         ANSI SQL
# HeidiSQL version:             4.0
# Date/time:                    2016-09-30 03:39:23
# --------------------------------------------------------

/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ANSI,NO_BACKSLASH_ESCAPES';*/
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;*/


#
# Database structure for database 'atleticweb'
#

CREATE DATABASE /*!32312 IF NOT EXISTS*/ "atleticweb" /*!40100 DEFAULT CHARACTER SET utf8 */;

USE "atleticweb";


#
# Table structure for table 'atletas'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ "atletas" (
  "idATLETA" int(5) unsigned NOT NULL AUTO_INCREMENT,
  "nombreATLETA" varchar(50) NOT NULL,
  "edadATLETA" int(2) NOT NULL,
  "origenATLETA" varchar(50) NOT NULL,
  "disciplinATLETA" varchar(30) NOT NULL,
  PRIMARY KEY ("idATLETA"),
  UNIQUE KEY "idATLETA" ("idATLETA"),
  KEY "idATLETA_2" ("idATLETA","nombreATLETA")
) AUTO_INCREMENT=21;



#
# Dumping data for table 'atletas'
#

LOCK TABLES "atletas" WRITE;
/*!40000 ALTER TABLE "atletas" DISABLE KEYS;*/
REPLACE INTO "atletas" ("idATLETA", "nombreATLETA", "edadATLETA", "origenATLETA", "disciplinATLETA") VALUES
	('2','Marcos Inzaurralde',21,'Uruguay','NataciÃ³n');
REPLACE INTO "atletas" ("idATLETA", "nombreATLETA", "edadATLETA", "origenATLETA", "disciplinATLETA") VALUES
	('3','Cristian',22,'Belga','Judo');
REPLACE INTO "atletas" ("idATLETA", "nombreATLETA", "edadATLETA", "origenATLETA", "disciplinATLETA") VALUES
	('4','Luis',24,'Sueco','Natacion');
REPLACE INTO "atletas" ("idATLETA", "nombreATLETA", "edadATLETA", "origenATLETA", "disciplinATLETA") VALUES
	('5','Santiago',23,'Sueco','Remo');
REPLACE INTO "atletas" ("idATLETA", "nombreATLETA", "edadATLETA", "origenATLETA", "disciplinATLETA") VALUES
	('6','Anatur',26,'Sueco','Judo');
REPLACE INTO "atletas" ("idATLETA", "nombreATLETA", "edadATLETA", "origenATLETA", "disciplinATLETA") VALUES
	('9','Susano',27,'Sueco','Boxeo');
REPLACE INTO "atletas" ("idATLETA", "nombreATLETA", "edadATLETA", "origenATLETA", "disciplinATLETA") VALUES
	('10','Angel',25,'Belga','Judo');
REPLACE INTO "atletas" ("idATLETA", "nombreATLETA", "edadATLETA", "origenATLETA", "disciplinATLETA") VALUES
	('15','Pedro',25,'Holanda','Boxeo');
REPLACE INTO "atletas" ("idATLETA", "nombreATLETA", "edadATLETA", "origenATLETA", "disciplinATLETA") VALUES
	('16','Jorge',20,'Suenga','Boxeo');
REPLACE INTO "atletas" ("idATLETA", "nombreATLETA", "edadATLETA", "origenATLETA", "disciplinATLETA") VALUES
	('18','Julio',24,'Uruguay','Remo');
REPLACE INTO "atletas" ("idATLETA", "nombreATLETA", "edadATLETA", "origenATLETA", "disciplinATLETA") VALUES
	('20','Josue',25,'Portugal','NataciÃ³n');
/*!40000 ALTER TABLE "atletas" ENABLE KEYS;*/
UNLOCK TABLES;


#
# Table structure for table 'disciplinas'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ "disciplinas" (
  "idDIS" int(5) unsigned NOT NULL AUTO_INCREMENT,
  "nombreDIS" varchar(50) NOT NULL,
  PRIMARY KEY ("idDIS")
) AUTO_INCREMENT=22;



#
# Dumping data for table 'disciplinas'
#

LOCK TABLES "disciplinas" WRITE;
/*!40000 ALTER TABLE "disciplinas" DISABLE KEYS;*/
REPLACE INTO "disciplinas" ("idDIS", "nombreDIS") VALUES
	('19','NataciÃ³n');
REPLACE INTO "disciplinas" ("idDIS", "nombreDIS") VALUES
	('15','Nado Sincronizado');
REPLACE INTO "disciplinas" ("idDIS", "nombreDIS") VALUES
	('16','Salto con garrocha');
REPLACE INTO "disciplinas" ("idDIS", "nombreDIS") VALUES
	('13','100 metros llano');
REPLACE INTO "disciplinas" ("idDIS", "nombreDIS") VALUES
	('3','Remo');
REPLACE INTO "disciplinas" ("idDIS", "nombreDIS") VALUES
	('2','Anillas');
REPLACE INTO "disciplinas" ("idDIS", "nombreDIS") VALUES
	('1','Judo');
/*!40000 ALTER TABLE "disciplinas" ENABLE KEYS;*/
UNLOCK TABLES;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE;*/
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;*/
