CREATE DATABASE infoPersonas;

CREATE TABLE `persona` (
  `NroDni` varchar(10) character set utf8 collate utf8_unicode_ci NOT NULL,
  `Apellido` varchar(50) character set utf8 collate utf8_unicode_ci NOT NULL,
  `Nombre` varchar(50) character set utf8 collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`NroDni`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



INSERT INTO `persona` (`NroDni`, `Apellido`, `Nombre`) VALUES 
('28326986', 'Valentin', 'Soto'),
('25963874', 'Miguel', 'Villar')
