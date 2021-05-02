
-- Abril-19-2021
-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-04-2021 a las 17:58:53
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdbasehotel1`
--
Drop database if EXISTS `bdbasehotel1`;
CREATE DATABASE IF NOT EXISTS `bdbasehotel1` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `bdbasehotel1`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbaccesibilidadtr`
--

DROP TABLE IF EXISTS `tbaccesibilidadtr`;
CREATE TABLE `tbaccesibilidadtr` (
  `idAccesibilidadTr` int(11) NOT NULL,
  `desAccesibilidad` varchar(25) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbaccesibilidadtr`
--

INSERT INTO `tbaccesibilidadtr` (`idAccesibilidadTr`, `desAccesibilidad`, `status`) VALUES
(1, 'ascensor', 1),
(2, 'escalera electrica', 1),
(3, ' accesible en silla de ru', 1),
(4, 'WC con barras de apoyo', 1),
(5, 'Bañera adaptada', 1),
(6, 'WC Elevado', 1),
(7, 'Via acceso asfaltada', 1),
(8, 'Instalacion Electrica Sub', 1),
(9, 'Sistema Iluninacion', 1),
(10, 'Abastecimiento de agua', 1),
(11, 'Acceso con-ingreso-KL-3', 1),
(12, 'Acceso con-pasadizo-ST-1', 1),
(13, 'Acceso con-acometida-MN-3', 1),
(14, 'Acceso con-garaje-GH-3', 1),
(15, 'Acceso con-camino-ST-2', 1),
(16, 'Acceso con-paso-TU-4', 1),
(17, 'Acceso con-acometida-IJ-4', 1),
(18, 'Acceso con-camino-WX-4', 1),
(19, 'Acceso con-camino-DE-5', 1),
(20, 'Acceso con-ingreso-KL-5', 1),
(21, 'Acceso con-camino-VW-4', 1),
(22, 'Acceso con-garaje-NO-4', 1),
(23, 'Acceso con-entrada-QR-2', 1),
(24, 'Acceso con-ingreso-ST-2', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbcapacidadtr`
--

DROP TABLE IF EXISTS `tbcapacidadtr`;
CREATE TABLE `tbcapacidadtr` (
  `idCapacidadTr` int(11) NOT NULL,
  `nitDni` varchar(15) DEFAULT NULL,
  `Id_tipoTr` int(11) DEFAULT NULL,
  `nroPisos` int(11) DEFAULT 0,
  `NroCabanas` int(11) DEFAULT 0,
  `NroCarpas` int(11) DEFAULT NULL,
  `Aforo_persona` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbcapacidadtr`
--

INSERT INTO `tbcapacidadtr` (`idCapacidadTr`, `nitDni`, `Id_tipoTr`, `nroPisos`, `NroCabanas`, `NroCarpas`, `Aforo_persona`, `status`) VALUES
(1, '11111', 1, 3, 0, 0, 100, 1),
(2, '11112', 2, 0, 10, 0, 120, 1),
(3, '11113', 3, 0, 0, 100, 150, 1),
(4, '11114', 4, 0, 8, 0, 200, 1),
(5, '11115', 5, 3, 0, 20, 130, 1),
(6, '11116', 6, 0, 10, 30, 250, 1),
(7, '11117', 7, 5, 8, 20, 350, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbcateroiafron`
--

DROP TABLE IF EXISTS `tbcateroiafron`;
CREATE TABLE `tbcateroiafron` (
  `id` int(11) NOT NULL,
  `iconCategory` varchar(100) DEFAULT NULL,
  `nomCategory` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime NOT NULL,
  `pidepersona` tinyint(4) NOT NULL DEFAULT 1,
  `pidefecha` tinyint(4) NOT NULL DEFAULT 1,
  `pidelugar` tinyint(4) NOT NULL DEFAULT 1,
  `estado` tinyint(4) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbcateroiafron`
--

INSERT INTO `tbcateroiafron` (`id`, `iconCategory`, `nomCategory`, `description`, `created_at`, `pidepersona`, `pidefecha`, `pidelugar`, `estado`) VALUES
(1, NULL, 'Paquetes', 'Short1', '2018-10-15 03:16:26', 1, 1, 1, 1),
(2, NULL, 'Finca', 'Falda2', '2018-10-15 03:16:36', 1, 0, 0, 1),
(3, NULL, 'Hotel', 'Set3', '2018-10-15 03:16:44', 0, 1, 1, 1),
(4, NULL, 'Paquete ecoturismo', 'Blusa4', '2018-10-15 03:16:54', 0, 0, 1, 1),
(5, NULL, 'Ruta', 'Top5', '2018-10-15 03:17:03', 1, 1, 0, 1),
(6, NULL, 'Jean', 'Jean6', '2018-10-15 03:17:14', 1, 1, 1, 1),
(7, NULL, 'Falda short', 'Falda short7', '2018-10-15 03:17:27', 1, 1, 1, 1),
(8, NULL, 'Enterito', 'Enterito8', '2018-10-15 03:17:37', 1, 1, 1, 1),
(9, NULL, 'Bluson', 'Bluson9', '2018-10-15 08:19:29', 1, 1, 1, 1),
(10, NULL, 'Vestido', 'Vestido10', '2018-10-15 08:22:53', 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbciudades`
--

DROP TABLE IF EXISTS `tbciudades`;
CREATE TABLE `tbciudades` (
  `idCiudad` int(11) NOT NULL,
  `iddpto` int(11) NOT NULL,
  `codCiudad` int(11) NOT NULL,
  `nomCiudad` varchar(40) NOT NULL,
  `status` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbciudades`
--

INSERT INTO `tbciudades` (`idCiudad`, `iddpto`, `codCiudad`, `nomCiudad`, `status`) VALUES
(1, 1, 1, 'El Encanto', 1),
(2, 1, 2, 'La Chorrera', 1),
(3, 1, 3, 'La Pedrera', 1),
(4, 1, 4, 'La Victoria', 1),
(5, 1, 5, 'Leticia', 1),
(6, 1, 6, 'Miriti - Parana', 1),
(7, 1, 7, 'Puerto Alegria', 1),
(8, 1, 8, 'Puerto Arica', 1),
(9, 1, 9, 'Puerto Nariño', 1),
(10, 1, 10, 'Puerto Santander', 1),
(11, 1, 11, 'Tarapaca', 1),
(12, 2, 12, 'Abejorral', 1),
(13, 2, 13, 'Abriaqui', 1),
(14, 2, 14, 'Alejandria', 1),
(15, 2, 15, 'Amaga', 1),
(16, 2, 16, 'Amalfi', 1),
(17, 2, 17, 'Andes', 1),
(18, 2, 18, 'Angelopolis', 1),
(19, 2, 19, 'Angostura', 1),
(20, 2, 20, 'Anori', 1),
(21, 2, 21, 'Anza', 1),
(22, 2, 22, 'Apartado', 1),
(23, 2, 23, 'Arboletes', 1),
(24, 2, 24, 'Argelia', 1),
(25, 2, 25, 'Armenia', 1),
(26, 2, 26, 'Barbosa', 1),
(27, 2, 27, 'Bello', 1),
(28, 2, 28, 'Belmira', 1),
(29, 2, 29, 'Betania', 1),
(30, 2, 30, 'Betulia', 1),
(31, 2, 31, 'Briceño', 1),
(32, 2, 32, 'Buritica', 1),
(33, 2, 33, 'Caceres', 1),
(34, 2, 34, 'Caicedo', 1),
(35, 2, 35, 'Caldas', 1),
(36, 2, 36, 'Campamento', 1),
(37, 2, 37, 'Cañasgordas', 1),
(38, 2, 38, 'Caracoli', 1),
(39, 2, 39, 'Caramanta', 1),
(40, 2, 40, 'Carepa', 1),
(41, 2, 41, 'Carolina', 1),
(42, 2, 42, 'Caucasia', 1),
(43, 2, 43, 'Chigorodo', 1),
(44, 2, 44, 'Cisneros', 1),
(45, 2, 45, 'Ciudad Bolivar', 1),
(46, 2, 46, 'Cocorna', 1),
(47, 2, 47, 'Concepcion', 1),
(48, 2, 48, 'Concordia', 1),
(49, 2, 49, 'Copacabana', 1),
(50, 2, 50, 'Dabeiba', 1),
(51, 2, 51, 'Don Matias', 1),
(52, 2, 52, 'Ebejico', 1),
(53, 2, 53, 'El Bagre', 1),
(54, 2, 54, 'El Carmen De Viboral', 1),
(55, 2, 55, 'El Santuario', 1),
(56, 2, 56, 'Entrerrios', 1),
(57, 2, 57, 'Envigado', 1),
(58, 2, 58, 'Fredonia', 1),
(59, 2, 59, 'Frontino', 1),
(60, 2, 60, 'Giraldo', 1),
(61, 2, 61, 'Girardota', 1),
(62, 2, 62, 'Gomez Plata', 1),
(63, 2, 63, 'Granada', 1),
(64, 2, 64, 'Guadalupe', 1),
(65, 2, 65, 'Guarne', 1),
(66, 2, 66, 'Guatape', 1),
(67, 2, 67, 'Heliconia', 1),
(68, 2, 68, 'Hispania', 1),
(69, 2, 69, 'Itagui', 1),
(70, 2, 70, 'Ituango', 1),
(71, 2, 71, 'Jardin', 1),
(72, 2, 72, 'Jerico', 1),
(73, 2, 73, 'La Ceja', 1),
(74, 2, 74, 'La Estrella', 1),
(75, 2, 75, 'La Pintada', 1),
(76, 2, 76, 'La Union', 1),
(77, 2, 77, 'Liborina', 1),
(78, 2, 78, 'Maceo', 1),
(79, 2, 79, 'Marinilla', 1),
(80, 2, 80, 'Medellin', 1),
(81, 2, 81, 'Montebello', 1),
(82, 2, 82, 'Murindo', 1),
(83, 2, 83, 'Mutata', 1),
(84, 2, 84, 'Nariño', 1),
(85, 2, 85, 'Nechi', 1),
(86, 2, 86, 'Necocli', 1),
(87, 2, 87, 'Olaya', 1),
(88, 2, 88, 'Peðol', 1),
(89, 2, 89, 'Peque', 1),
(90, 2, 90, 'Pueblorrico', 1),
(91, 2, 91, 'Puerto Berrio', 1),
(92, 2, 92, 'Puerto Nare', 1),
(93, 2, 93, 'Puerto Triunfo', 1),
(94, 2, 94, 'Remedios', 1),
(95, 2, 95, 'Retiro', 1),
(96, 2, 96, 'Rionegro', 1),
(97, 2, 97, 'Sabanalarga', 1),
(98, 2, 98, 'Sabaneta', 1),
(99, 2, 99, 'Salgar', 1),
(100, 2, 100, 'San Andres De Cuerquia', 1),
(101, 2, 101, 'San Carlos', 1),
(102, 2, 102, 'San Francisco', 1),
(103, 2, 103, 'San Jeronimo', 1),
(104, 2, 104, 'San Jose De La Montaña', 1),
(105, 2, 105, 'San Juan De Uraba', 1),
(106, 2, 106, 'San Luis', 1),
(107, 2, 107, 'San Pedro', 1),
(108, 2, 108, 'San Pedro De Uraba', 1),
(109, 2, 109, 'San Rafael', 1),
(110, 2, 110, 'San Roque', 1),
(111, 2, 111, 'San Vicente', 1),
(112, 2, 112, 'Santa Barbara', 1),
(113, 2, 113, 'Santa Rosa De Osos', 1),
(114, 2, 114, 'Santafe De Antioquia', 1),
(115, 2, 115, 'Santo Domingo', 1),
(116, 2, 116, 'Segovia', 1),
(117, 2, 117, 'Sonson', 1),
(118, 2, 118, 'Sopetran', 1),
(119, 2, 119, 'Tamesis', 1),
(120, 2, 120, 'Taraza', 1),
(121, 2, 121, 'Tarso', 1),
(122, 2, 122, 'Titiribi', 1),
(123, 2, 123, 'Toledo', 1),
(124, 2, 124, 'Turbo', 1),
(125, 2, 125, 'Uramita', 1),
(126, 2, 126, 'Urrao', 1),
(127, 2, 127, 'Valdivia', 1),
(128, 2, 128, 'Valparaiso', 1),
(129, 2, 129, 'Vegachi', 1),
(130, 2, 130, 'Venecia', 1),
(131, 2, 131, 'Vigia Del Fuerte', 1),
(132, 2, 132, 'Yali', 1),
(133, 2, 133, 'Yarumal', 1),
(134, 2, 134, 'Yolombo', 1),
(135, 2, 135, 'Yondo', 1),
(136, 2, 136, 'Zaragoza', 1),
(137, 3, 137, 'Arauca', 1),
(138, 3, 138, 'Arauquita', 1),
(139, 3, 139, 'Cravo Norte', 1),
(140, 3, 140, 'Fortul', 1),
(141, 3, 141, 'Puerto Rondon', 1),
(142, 3, 142, 'Saravena', 1),
(143, 3, 143, 'Tame', 1),
(144, 4, 144, 'Baranoa', 1),
(145, 4, 145, 'Barranquilla', 1),
(146, 4, 146, 'Campo De La Cruz', 1),
(147, 4, 147, 'Candelaria', 1),
(148, 4, 148, 'Galapa', 1),
(149, 4, 149, 'Juan De Acosta', 1),
(150, 4, 150, 'Luruaco', 1),
(151, 4, 151, 'Malambo', 1),
(152, 4, 152, 'Manati', 1),
(153, 4, 153, 'Palmar De Varela', 1),
(154, 4, 154, 'Piojo', 1),
(155, 4, 155, 'Polonuevo', 1),
(156, 4, 156, 'Ponedera', 1),
(157, 4, 157, 'Puerto Colombia', 1),
(158, 4, 158, 'Repelon', 1),
(159, 4, 159, 'Sabanagrande', 1),
(160, 4, 160, 'Sabanalarga', 1),
(161, 4, 161, 'Santa Lucia', 1),
(162, 4, 162, 'Santo Tomas', 1),
(163, 4, 163, 'Soledad', 1),
(164, 4, 164, 'Suan', 1),
(165, 4, 165, 'Tubara', 1),
(166, 4, 166, 'Usiacuri', 1),
(167, 5, 167, 'Achi', 1),
(168, 5, 168, 'Altos Del Rosario', 1),
(169, 5, 169, 'Arenal', 1),
(170, 5, 170, 'Arjona', 1),
(171, 5, 171, 'Arroyohondo', 1),
(172, 5, 172, 'Barranco De Loba', 1),
(173, 5, 173, 'Calamar', 1),
(174, 5, 174, 'Cantagallo', 1),
(175, 5, 175, 'Cartagena', 1),
(176, 5, 176, 'Cicuco', 1),
(177, 5, 177, 'Clemencia', 1),
(178, 5, 178, 'Cordoba', 1),
(179, 5, 179, 'El Carmen De Bolivar', 1),
(180, 5, 180, 'El Guamo', 1),
(181, 5, 181, 'El Peñon', 1),
(182, 5, 182, 'Hatillo De Loba', 1),
(183, 5, 183, 'Magangue', 1),
(184, 5, 184, 'Mahates', 1),
(185, 5, 185, 'Margarita', 1),
(186, 5, 186, 'Maria La Baja', 1),
(187, 5, 187, 'Mompos', 1),
(188, 5, 188, 'Montecristo', 1),
(189, 5, 189, 'Morales', 1),
(190, 5, 190, 'Norosi', 1),
(191, 5, 191, 'Pinillos', 1),
(192, 5, 192, 'Regidor', 1),
(193, 5, 193, 'Rio Viejo', 1),
(194, 5, 194, 'San Cristobal', 1),
(195, 5, 195, 'San Estanislao', 1),
(196, 5, 196, 'San Fernando', 1),
(197, 5, 197, 'San Jacinto', 1),
(198, 5, 198, 'San Jacinto Del Cauca', 1),
(199, 5, 199, 'San Juan Nepomuceno', 1),
(200, 5, 200, 'San Martin De Loba', 1),
(201, 5, 201, 'San Pablo', 1),
(202, 5, 202, 'Santa Catalina', 1),
(203, 5, 203, 'Santa Rosa', 1),
(204, 5, 204, 'Santa Rosa Del Sur', 1),
(205, 5, 205, 'Simiti', 1),
(206, 5, 206, 'Soplaviento', 1),
(207, 5, 207, 'Talaigua Nuevo', 1),
(208, 5, 208, 'Tiquisio', 1),
(209, 5, 209, 'Turbaco', 1),
(210, 5, 210, 'Turbana', 1),
(211, 5, 211, 'Villanueva', 1),
(212, 5, 212, 'Zambrano', 1),
(213, 6, 213, 'Almeida', 1),
(214, 6, 214, 'Aquitania', 1),
(215, 6, 215, 'Arcabuco', 1),
(216, 6, 216, 'Belen', 1),
(217, 6, 217, 'Berbeo', 1),
(218, 6, 218, 'Beteitiva', 1),
(219, 6, 219, 'Boavita', 1),
(220, 6, 220, 'Boyaca', 1),
(221, 6, 221, 'Briceño', 1),
(222, 6, 222, 'Buenavista', 1),
(223, 6, 223, 'Busbanza', 1),
(224, 6, 224, 'Caldas', 1),
(225, 6, 225, 'Campohermoso', 1),
(226, 6, 226, 'Cerinza', 1),
(227, 6, 227, 'Chinavita', 1),
(228, 6, 228, 'Chiquinquira', 1),
(229, 6, 229, 'Chiquiza', 1),
(230, 6, 230, 'Chiscas', 1),
(231, 6, 231, 'Chita', 1),
(232, 6, 232, 'Chitaraque', 1),
(233, 6, 233, 'Chivata', 1),
(234, 6, 234, 'Chivor', 1),
(235, 6, 235, 'Cienega', 1),
(236, 6, 236, 'Combita', 1),
(237, 6, 237, 'Coper', 1),
(238, 6, 238, 'Corrales', 1),
(239, 6, 239, 'Covarachia', 1),
(240, 6, 240, 'Cubara', 1),
(241, 6, 241, 'Cucaita', 1),
(242, 6, 242, 'Cuitiva', 1),
(243, 6, 243, 'Duitama', 1),
(244, 6, 244, 'El Cocuy', 1),
(245, 6, 245, 'El Espino', 1),
(246, 6, 246, 'Firavitoba', 1),
(247, 6, 247, 'Floresta', 1),
(248, 6, 248, 'Gachantiva', 1),
(249, 6, 249, 'Gameza', 1),
(250, 6, 250, 'Garagoa', 1),
(251, 6, 251, 'Gsican', 1),
(252, 6, 252, 'Guacamayas', 1),
(253, 6, 253, 'Guateque', 1),
(254, 6, 254, 'Guayata', 1),
(255, 6, 255, 'Iza', 1),
(256, 6, 256, 'Jenesano', 1),
(257, 6, 257, 'Jerico', 1),
(258, 6, 258, 'La Capilla', 1),
(259, 6, 259, 'La Uvita', 1),
(260, 6, 260, 'La Victoria', 1),
(261, 6, 261, 'Labranzagrande', 1),
(262, 6, 262, 'Macanal', 1),
(263, 6, 263, 'Maripi', 1),
(264, 6, 264, 'Miraflores', 1),
(265, 6, 265, 'Mongua', 1),
(266, 6, 266, 'Mongui', 1),
(267, 6, 267, 'Moniquira', 1),
(268, 6, 268, 'Motavita', 1),
(269, 6, 269, 'Muzo', 1),
(270, 6, 270, 'Nobsa', 1),
(271, 6, 271, 'Nuevo Colon', 1),
(272, 6, 272, 'Oicata', 1),
(273, 6, 273, 'Otanche', 1),
(274, 6, 274, 'Pachavita', 1),
(275, 6, 275, 'Paez', 1),
(276, 6, 276, 'Paipa', 1),
(277, 6, 277, 'Pajarito', 1),
(278, 6, 278, 'Panqueba', 1),
(279, 6, 279, 'Pauna', 1),
(280, 6, 280, 'Paya', 1),
(281, 6, 281, 'Paz De Rio', 1),
(282, 6, 282, 'Pesca', 1),
(283, 6, 283, 'Pisba', 1),
(284, 6, 284, 'Puerto Boyaca', 1),
(285, 6, 285, 'Quipama', 1),
(286, 6, 286, 'Ramiriqui', 1),
(287, 6, 287, 'Raquira', 1),
(288, 6, 288, 'Rondon', 1),
(289, 6, 289, 'Saboya', 1),
(290, 6, 290, 'Sachica', 1),
(291, 6, 291, 'Samaca', 1),
(292, 6, 292, 'San Eduardo', 1),
(293, 6, 293, 'San Jose De Pare', 1),
(294, 6, 294, 'San Luis De Gaceno', 1),
(295, 6, 295, 'San Mateo', 1),
(296, 6, 296, 'San Miguel De Sema', 1),
(297, 6, 297, 'San Pablo De Borbur', 1),
(298, 6, 298, 'Santa Maria', 1),
(299, 6, 299, 'Santa Rosa De Viterbo', 1),
(300, 6, 300, 'Santa Sofia', 1),
(301, 6, 301, 'Santana', 1),
(302, 6, 302, 'Sativanorte', 1),
(303, 6, 303, 'Sativasur', 1),
(304, 6, 304, 'Siachoque', 1),
(305, 6, 305, 'Soata', 1),
(306, 6, 306, 'Socha', 1),
(307, 6, 307, 'Socota', 1),
(308, 6, 308, 'Sogamoso', 1),
(309, 6, 309, 'Somondoco', 1),
(310, 6, 310, 'Sora', 1),
(311, 6, 311, 'Soraca', 1),
(312, 6, 312, 'Sotaquira', 1),
(313, 6, 313, 'Susacon', 1),
(314, 6, 314, 'Sutamarchan', 1),
(315, 6, 315, 'Sutatenza', 1),
(316, 6, 316, 'Tasco', 1),
(317, 6, 317, 'Tenza', 1),
(318, 6, 318, 'Tibana', 1),
(319, 6, 319, 'Tibasosa', 1),
(320, 6, 320, 'Tinjaca', 1),
(321, 6, 321, 'Tipacoque', 1),
(322, 6, 322, 'Toca', 1),
(323, 6, 323, 'Togsi', 1),
(324, 6, 324, 'Topaga', 1),
(325, 6, 325, 'Tota', 1),
(326, 6, 326, 'Tunja', 1),
(327, 6, 327, 'Tunungua', 1),
(328, 6, 328, 'Turmeque', 1),
(329, 6, 329, 'Tuta', 1),
(330, 6, 330, 'Tutaza', 1),
(331, 6, 331, 'Umbita', 1),
(332, 6, 332, 'Ventaquemada', 1),
(333, 6, 333, 'Villa De Leyva', 1),
(334, 6, 334, 'Viracacha', 1),
(335, 6, 335, 'Zetaquira', 1),
(336, 7, 336, 'Aguadas', 1),
(337, 7, 337, 'Anserma', 1),
(338, 7, 338, 'Aranzazu', 1),
(339, 7, 339, 'Belalcazar', 1),
(340, 7, 340, 'Chinchina', 1),
(341, 7, 341, 'Filadelfia', 1),
(342, 7, 342, 'La Dorada', 1),
(343, 7, 343, 'La Merced', 1),
(344, 7, 344, 'Manizales', 1),
(345, 7, 345, 'Manzanares', 1),
(346, 7, 346, 'Marmato', 1),
(347, 7, 347, 'Marquetalia', 1),
(348, 7, 348, 'Marulanda', 1),
(349, 7, 349, 'Neira', 1),
(350, 7, 350, 'Norcasia', 1),
(351, 7, 351, 'Pacora', 1),
(352, 7, 352, 'Palestina', 1),
(353, 7, 353, 'Pensilvania', 1),
(354, 7, 354, 'Riosucio', 1),
(355, 7, 355, 'Risaralda', 1),
(356, 7, 356, 'Salamina', 1),
(357, 7, 357, 'Samana', 1),
(358, 7, 358, 'San Jose', 1),
(359, 7, 359, 'Supia', 1),
(360, 7, 360, 'Victoria', 1),
(361, 7, 361, 'Villamaria', 1),
(362, 7, 362, 'Viterbo', 1),
(363, 8, 363, 'Albania', 1),
(364, 8, 364, 'Belen De Los Andaquies', 1),
(365, 8, 365, 'Cartagena Del Chaira', 1),
(366, 8, 366, 'Curillo', 1),
(367, 8, 367, 'El Doncello', 1),
(368, 8, 368, 'El Paujil', 1),
(369, 8, 369, 'Florencia', 1),
(370, 8, 370, 'La Montañita', 1),
(371, 8, 371, 'Milan', 1),
(372, 8, 372, 'Morelia', 1),
(373, 8, 373, 'Puerto Rico', 1),
(374, 8, 374, 'San Jose Del Fragua', 1),
(375, 8, 375, 'San Vicente Del Caguan', 1),
(376, 8, 376, 'Solano', 1),
(377, 8, 377, 'Solita', 1),
(378, 8, 378, 'Valparaiso', 1),
(379, 9, 379, 'Aguazul', 1),
(380, 9, 380, 'Chameza', 1),
(381, 9, 381, 'Hato Corozal', 1),
(382, 9, 382, 'La Salina', 1),
(383, 9, 383, 'Mani', 1),
(384, 9, 384, 'Monterrey', 1),
(385, 9, 385, 'Nunchia', 1),
(386, 9, 386, 'Orocue', 1),
(387, 9, 387, 'Paz De Ariporo', 1),
(388, 9, 388, 'Pore', 1),
(389, 9, 389, 'Recetor', 1),
(390, 9, 390, 'Sabanalarga', 1),
(391, 9, 391, 'Sacama', 1),
(392, 9, 392, 'San Luis De Palenque', 1),
(393, 9, 393, 'Tamara', 1),
(394, 9, 394, 'Tauramena', 1),
(395, 9, 395, 'Trinidad', 1),
(396, 9, 396, 'Villanueva', 1),
(397, 9, 397, 'Yopal', 1),
(398, 10, 398, 'Almaguer', 1),
(399, 10, 399, 'Argelia', 1),
(400, 10, 400, 'Balboa', 1),
(401, 10, 401, 'Bolivar', 1),
(402, 10, 402, 'Buenos Aires', 1),
(403, 10, 403, 'Cajibio', 1),
(404, 10, 404, 'Caldono', 1),
(405, 10, 405, 'Caloto', 1),
(406, 10, 406, 'Corinto', 1),
(407, 10, 407, 'El Tambo', 1),
(408, 10, 408, 'Florencia', 1),
(409, 10, 409, 'Guachene', 1),
(410, 10, 410, 'Guapi', 1),
(411, 10, 411, 'Inza', 1),
(412, 10, 412, 'Jambalo', 1),
(413, 10, 413, 'La Sierra', 1),
(414, 10, 414, 'La Vega', 1),
(415, 10, 415, 'Lopez', 1),
(416, 10, 416, 'Mercaderes', 1),
(417, 10, 417, 'Miranda', 1),
(418, 10, 418, 'Morales', 1),
(419, 10, 419, 'Padilla', 1),
(420, 10, 420, 'Paez', 1),
(421, 10, 421, 'Patia', 1),
(422, 10, 422, 'Piamonte', 1),
(423, 10, 423, 'Piendamo', 1),
(424, 10, 424, 'Popayan', 1),
(425, 10, 425, 'Puerto Tejada', 1),
(426, 10, 426, 'Purace', 1),
(427, 10, 427, 'Rosas', 1),
(428, 10, 428, 'San Sebastian', 1),
(429, 10, 429, 'Santa Rosa', 1),
(430, 10, 430, 'Santander De Quilichao', 1),
(431, 10, 431, 'Silvia', 1),
(432, 10, 432, 'Sotara', 1),
(433, 10, 433, 'Suarez', 1),
(434, 10, 434, 'Sucre', 1),
(435, 10, 435, 'Timbio', 1),
(436, 10, 436, 'Timbiqui', 1),
(437, 10, 437, 'Toribio', 1),
(438, 10, 438, 'Totoro', 1),
(439, 10, 439, 'Villa Rica', 1),
(440, 11, 440, 'Aguachica', 1),
(441, 11, 441, 'Agustin Codazzi', 1),
(442, 11, 442, 'Astrea', 1),
(443, 11, 443, 'Becerril', 1),
(444, 11, 444, 'Bosconia', 1),
(445, 11, 445, 'Chimichagua', 1),
(446, 11, 446, 'Chiriguana', 1),
(447, 11, 447, 'Curumani', 1),
(448, 11, 448, 'El Copey', 1),
(449, 11, 449, 'El Paso', 1),
(450, 11, 450, 'Gamarra', 1),
(451, 11, 451, 'Gonzalez', 1),
(452, 11, 452, 'La Gloria', 1),
(453, 11, 453, 'La Jagua De Ibirico', 1),
(454, 11, 454, 'La Paz', 1),
(455, 11, 455, 'Manaure', 1),
(456, 11, 456, 'Pailitas', 1),
(457, 11, 457, 'Pelaya', 1),
(458, 11, 458, 'Pueblo Bello', 1),
(459, 11, 459, 'Rio De Oro', 1),
(460, 11, 460, 'San Alberto', 1),
(461, 11, 461, 'San Diego', 1),
(462, 11, 462, 'San Martin', 1),
(463, 11, 463, 'Tamalameque', 1),
(464, 11, 464, 'Valledupar', 1),
(465, 12, 465, 'Acandi', 1),
(466, 12, 466, 'Alto Baudo', 1),
(467, 12, 467, 'Atrato', 1),
(468, 12, 468, 'Bagado', 1),
(469, 12, 469, 'Bahia Solano', 1),
(470, 12, 470, 'Bajo Baudo', 1),
(471, 12, 471, 'Bojaya', 1),
(472, 12, 472, 'Carmen Del Darien', 1),
(473, 12, 473, 'Certegui', 1),
(474, 12, 474, 'Condoto', 1),
(475, 12, 475, 'El Canton Del San Pablo', 1),
(476, 12, 476, 'El Carmen De Atrato', 1),
(477, 12, 477, 'El Litoral Del San Juan', 1),
(478, 12, 478, 'Istmina', 1),
(479, 12, 479, 'Jurado', 1),
(480, 12, 480, 'Lloro', 1),
(481, 12, 481, 'Medio Atrato', 1),
(482, 12, 482, 'Medio Baudo', 1),
(483, 12, 483, 'Medio San Juan', 1),
(484, 12, 484, 'Novita', 1),
(485, 12, 485, 'Nuqui', 1),
(486, 12, 486, 'Quibdo', 1),
(487, 12, 487, 'Rio Iro', 1),
(488, 12, 488, 'Rio Quito', 1),
(489, 12, 489, 'Riosucio', 1),
(490, 12, 490, 'San Jose Del Palmar', 1),
(491, 12, 491, 'Sipi', 1),
(492, 12, 492, 'Tado', 1),
(493, 12, 493, 'Unguia', 1),
(494, 12, 494, 'Union Panamericana', 1),
(495, 13, 495, 'Ayapel', 1),
(496, 13, 496, 'Buenavista', 1),
(497, 13, 497, 'Canalete', 1),
(498, 13, 498, 'Cerete', 1),
(499, 13, 499, 'Chima', 1),
(500, 13, 500, 'Chinu', 1),
(501, 13, 501, 'Cienaga De Oro', 1),
(502, 13, 502, 'Cotorra', 1),
(503, 13, 503, 'La Apartada', 1),
(504, 13, 504, 'Lorica', 1),
(505, 13, 505, 'Los Cordobas', 1),
(506, 13, 506, 'Momil', 1),
(507, 13, 507, 'Montelibano', 1),
(508, 13, 508, 'Monteria', 1),
(509, 13, 509, 'Moñitos', 1),
(510, 13, 510, 'Planeta Rica', 1),
(511, 13, 511, 'Pueblo Nuevo', 1),
(512, 13, 512, 'Puerto Escondido', 1),
(513, 13, 513, 'Puerto Libertador', 1),
(514, 13, 514, 'Purisima', 1),
(515, 13, 515, 'Sahagun', 1),
(516, 13, 516, 'San Andres Sotavento', 1),
(517, 13, 517, 'San Antero', 1),
(518, 13, 518, 'San Bernardo Del Viento', 1),
(519, 13, 519, 'San Carlos', 1),
(520, 13, 520, 'San Pelayo', 1),
(521, 13, 521, 'Tierralta', 1),
(522, 13, 522, 'Valencia', 1),
(523, 14, 523, 'Agua De Dios', 1),
(524, 14, 524, 'Alban', 1),
(525, 14, 525, 'Anapoima', 1),
(526, 14, 526, 'Anolaima', 1),
(527, 14, 527, 'Apulo', 1),
(528, 14, 528, 'Arbelaez', 1),
(529, 14, 529, 'Beltran', 1),
(530, 14, 530, 'Bituima', 1),
(531, 14, 531, 'Bogota, D.C.', 1),
(532, 14, 532, 'Bojaca', 1),
(533, 14, 533, 'Cabrera', 1),
(534, 14, 534, 'Cachipay', 1),
(535, 14, 535, 'Cajica', 1),
(536, 14, 536, 'Caparrapi', 1),
(537, 14, 537, 'Caqueza', 1),
(538, 14, 538, 'Carmen De Carupa', 1),
(539, 14, 539, 'Chaguani', 1),
(540, 14, 540, 'Chia', 1),
(541, 14, 541, 'Chipaque', 1),
(542, 14, 542, 'Choachi', 1),
(543, 14, 543, 'Choconta', 1),
(544, 14, 544, 'Cogua', 1),
(545, 14, 545, 'Cota', 1),
(546, 14, 546, 'Cucunuba', 1),
(547, 14, 547, 'El Colegio', 1),
(548, 14, 548, 'El Peñon', 1),
(549, 14, 549, 'El Rosal', 1),
(550, 14, 550, 'Facatativa', 1),
(551, 14, 551, 'Fomeque', 1),
(552, 14, 552, 'Fosca', 1),
(553, 14, 553, 'Funza', 1),
(554, 14, 554, 'Fuquene', 1),
(555, 14, 555, 'Fusagasuga', 1),
(556, 14, 556, 'Gachala', 1),
(557, 14, 557, 'Gachancipa', 1),
(558, 14, 558, 'Gacheta', 1),
(559, 14, 559, 'Gama', 1),
(560, 14, 560, 'Girardot', 1),
(561, 14, 561, 'Granada', 1),
(562, 14, 562, 'Guacheta', 1),
(563, 14, 563, 'Guaduas', 1),
(564, 14, 564, 'Guasca', 1),
(565, 14, 565, 'Guataqui', 1),
(566, 14, 566, 'Guatavita', 1),
(567, 14, 567, 'Guayabal De Siquima', 1),
(568, 14, 568, 'Guayabetal', 1),
(569, 14, 569, 'Gutierrez', 1),
(570, 14, 570, 'Jerusalen', 1),
(571, 14, 571, 'Junin', 1),
(572, 14, 572, 'La Calera', 1),
(573, 14, 573, 'La Mesa', 1),
(574, 14, 574, 'La Palma', 1),
(575, 14, 575, 'La Peña', 1),
(576, 14, 576, 'La Vega', 1),
(577, 14, 577, 'Lenguazaque', 1),
(578, 14, 578, 'Macheta', 1),
(579, 14, 579, 'Madrid', 1),
(580, 14, 580, 'Manta', 1),
(581, 14, 581, 'Medina', 1),
(582, 14, 582, 'Mosquera', 1),
(583, 14, 583, 'Nariño', 1),
(584, 14, 584, 'Nemocon', 1),
(585, 14, 585, 'Nilo', 1),
(586, 14, 586, 'Nimaima', 1),
(587, 14, 587, 'Nocaima', 1),
(588, 14, 588, 'Pacho', 1),
(589, 14, 589, 'Paime', 1),
(590, 14, 590, 'Pandi', 1),
(591, 14, 591, 'Paratebueno', 1),
(592, 14, 592, 'Pasca', 1),
(593, 14, 593, 'Puerto Salgar', 1),
(594, 14, 594, 'Puli', 1),
(595, 14, 595, 'Quebradanegra', 1),
(596, 14, 596, 'Quetame', 1),
(597, 14, 597, 'Quipile', 1),
(598, 14, 598, 'Ricaurte', 1),
(599, 14, 599, 'San Antonio Del Tequendama', 1),
(600, 14, 600, 'San Bernardo', 1),
(601, 14, 601, 'San Cayetano', 1),
(602, 14, 602, 'San Francisco', 1),
(603, 14, 603, 'San Juan De Rio Seco', 1),
(604, 14, 604, 'Sasaima', 1),
(605, 14, 605, 'Sesquile', 1),
(606, 14, 606, 'Sibate', 1),
(607, 14, 607, 'Silvania', 1),
(608, 14, 608, 'Simijaca', 1),
(609, 14, 609, 'Soacha', 1),
(610, 14, 610, 'Sopo', 1),
(611, 14, 611, 'Subachoque', 1),
(612, 14, 612, 'Suesca', 1),
(613, 14, 613, 'Supata', 1),
(614, 14, 614, 'Susa', 1),
(615, 14, 615, 'Sutatausa', 1),
(616, 14, 616, 'Tabio', 1),
(617, 14, 617, 'Tausa', 1),
(618, 14, 618, 'Tena', 1),
(619, 14, 619, 'Tenjo', 1),
(620, 14, 620, 'Tibacuy', 1),
(621, 14, 621, 'Tibirita', 1),
(622, 14, 622, 'Tocaima', 1),
(623, 14, 623, 'Tocancipa', 1),
(624, 14, 624, 'Topaipi', 1),
(625, 14, 625, 'Ubala', 1),
(626, 14, 626, 'Ubaque', 1),
(627, 14, 627, 'Une', 1),
(628, 14, 628, 'Utica', 1),
(629, 14, 629, 'Venecia', 1),
(630, 14, 630, 'Vergara', 1),
(631, 14, 631, 'Viani', 1),
(632, 14, 632, 'Villa De San Diego De Ubate', 1),
(633, 14, 633, 'Villagomez', 1),
(634, 14, 634, 'Villapinzon', 1),
(635, 14, 635, 'Villeta', 1),
(636, 14, 636, 'Viota', 1),
(637, 14, 637, 'Yacopi', 1),
(638, 14, 638, 'Zipacon', 1),
(639, 14, 639, 'Zipaquira', 1),
(640, 15, 640, 'Barranco Minas', 1),
(641, 15, 641, 'Cacahual', 1),
(642, 15, 642, 'Inirida', 1),
(643, 15, 643, 'La Guadalupe', 1),
(644, 15, 644, 'Mapiripana', 1),
(645, 15, 645, 'Morichal', 1),
(646, 15, 646, 'Pana Pana', 1),
(647, 15, 647, 'Puerto Colombia', 1),
(648, 15, 648, 'San Felipe', 1),
(649, 16, 649, 'Calamar', 1),
(650, 16, 650, 'El Retorno', 1),
(651, 16, 651, 'Miraflores', 1),
(652, 16, 652, 'San Jose Del Guaviare', 1),
(653, 17, 653, 'Albania', 1),
(654, 17, 654, 'Barrancas', 1),
(655, 17, 655, 'Dibulla', 1),
(656, 17, 656, 'Distraccion', 1),
(657, 17, 657, 'El Molino', 1),
(658, 17, 658, 'Fonseca', 1),
(659, 17, 659, 'Hatonuevo', 1),
(660, 17, 660, 'La Jagua Del Pilar', 1),
(661, 17, 661, 'Maicao', 1),
(662, 17, 662, 'Manaure', 1),
(663, 17, 663, 'Riohacha', 1),
(664, 17, 664, 'San Juan Del Cesar', 1),
(665, 17, 665, 'Uribia', 1),
(666, 17, 666, 'Urumita', 1),
(667, 17, 667, 'Villanueva', 1),
(668, 18, 668, 'Acevedo', 1),
(669, 18, 669, 'Agrado', 1),
(670, 18, 670, 'Aipe', 1),
(671, 18, 671, 'Algeciras', 1),
(672, 18, 672, 'Altamira', 1),
(673, 18, 673, 'Baraya', 1),
(674, 18, 674, 'Campoalegre', 1),
(675, 18, 675, 'Colombia', 1),
(676, 18, 676, 'Elias', 1),
(677, 18, 677, 'Garzon', 1),
(678, 18, 678, 'Gigante', 1),
(679, 18, 679, 'Guadalupe', 1),
(680, 18, 680, 'Hobo', 1),
(681, 18, 681, 'Iquira', 1),
(682, 18, 682, 'Isnos', 1),
(683, 18, 683, 'La Argentina', 1),
(684, 18, 684, 'La Plata', 1),
(685, 18, 685, 'Nataga', 1),
(686, 18, 686, 'Neiva', 1),
(687, 18, 687, 'Oporapa', 1),
(688, 18, 688, 'Paicol', 1),
(689, 18, 689, 'Palermo', 1),
(690, 18, 690, 'Palestina', 1),
(691, 18, 691, 'Pital', 1),
(692, 18, 692, 'Pitalito', 1),
(693, 18, 693, 'Rivera', 1),
(694, 18, 694, 'Saladoblanco', 1),
(695, 18, 695, 'San Agustin', 1),
(696, 18, 696, 'Santa Maria', 1),
(697, 18, 697, 'Suaza', 1),
(698, 18, 698, 'Tarqui', 1),
(699, 18, 699, 'Tello', 1),
(700, 18, 700, 'Teruel', 1),
(701, 18, 701, 'Tesalia', 1),
(702, 18, 702, 'Timana', 1),
(703, 18, 703, 'Villavieja', 1),
(704, 18, 704, 'Yaguara', 1),
(705, 19, 705, 'Algarrobo', 1),
(706, 19, 706, 'Aracataca', 1),
(707, 19, 707, 'Ariguani', 1),
(708, 19, 708, 'Cerro San Antonio', 1),
(709, 19, 709, 'Chibolo', 1),
(710, 19, 710, 'Cienaga', 1),
(711, 19, 711, 'Concordia', 1),
(712, 19, 712, 'El Banco', 1),
(713, 19, 713, 'El Piñon', 1),
(714, 19, 714, 'El Reten', 1),
(715, 19, 715, 'Fundacion', 1),
(716, 19, 716, 'Guamal', 1),
(717, 19, 717, 'Nueva Granada', 1),
(718, 19, 718, 'Pedraza', 1),
(719, 19, 719, 'Pijiño Del Carmen', 1),
(720, 19, 720, 'Pivijay', 1),
(721, 19, 721, 'Plato', 1),
(722, 19, 722, 'Puebloviejo', 1),
(723, 19, 723, 'Remolino', 1),
(724, 19, 724, 'Sabanas De San Angel', 1),
(725, 19, 725, 'Salamina', 1),
(726, 19, 726, 'San Sebastian De Buenavista', 1),
(727, 19, 727, 'San Zenon', 1),
(728, 19, 728, 'Santa Ana', 1),
(729, 19, 729, 'Santa Barbara De Pinto', 1),
(730, 19, 730, 'Santa Marta', 1),
(731, 19, 731, 'Sitionuevo', 1),
(732, 19, 732, 'Tenerife', 1),
(733, 19, 733, 'Zapayan', 1),
(734, 19, 734, 'Zona Bananera', 1),
(735, 20, 735, 'Acacias', 1),
(736, 20, 736, 'Barranca De Upia', 1),
(737, 20, 737, 'Cabuyaro', 1),
(738, 20, 738, 'Castilla La Nueva', 1),
(739, 20, 739, 'Cubarral', 1),
(740, 20, 740, 'Cumaral', 1),
(741, 20, 741, 'El Calvario', 1),
(742, 20, 742, 'El Castillo', 1),
(743, 20, 743, 'El Dorado', 1),
(744, 20, 744, 'Fuente De Oro', 1),
(745, 20, 745, 'Granada', 1),
(746, 20, 746, 'Guamal', 1),
(747, 20, 747, 'La Macarena', 1),
(748, 20, 748, 'Lejanias', 1),
(749, 20, 749, 'Mapiripan', 1),
(750, 20, 750, 'Mesetas', 1),
(751, 20, 751, 'Puerto Concordia', 1),
(752, 20, 752, 'Puerto Gaitan', 1),
(753, 20, 753, 'Puerto Lleras', 1),
(754, 20, 754, 'Puerto Lopez', 1),
(755, 20, 755, 'Puerto Rico', 1),
(756, 20, 756, 'Restrepo', 1),
(757, 20, 757, 'San Carlos De Guaroa', 1),
(758, 20, 758, 'San Juan De Arama', 1),
(759, 20, 759, 'San Juanito', 1),
(760, 20, 760, 'San Martin', 1),
(761, 20, 761, 'Uribe', 1),
(762, 20, 762, 'Villavicencio', 1),
(763, 20, 763, 'Vistahermosa', 1),
(764, 21, 764, 'Alban', 1),
(765, 21, 765, 'Aldana', 1),
(766, 21, 766, 'Ancuya', 1),
(767, 21, 767, 'Arboleda', 1),
(768, 21, 768, 'Barbacoas', 1),
(769, 21, 769, 'Belen', 1),
(770, 21, 770, 'Buesaco', 1),
(771, 21, 771, 'Chachagsi', 1),
(772, 21, 772, 'Colon', 1),
(773, 21, 773, 'Consaca', 1),
(774, 21, 774, 'Contadero', 1),
(775, 21, 775, 'Cordoba', 1),
(776, 21, 776, 'Cuaspud', 1),
(777, 21, 777, 'Cumbal', 1),
(778, 21, 778, 'Cumbitara', 1),
(779, 21, 779, 'El Charco', 1),
(780, 21, 780, 'El Peñol', 1),
(781, 21, 781, 'El Rosario', 1),
(782, 21, 782, 'El Tablon De Gomez', 1),
(783, 21, 783, 'El Tambo', 1),
(784, 21, 784, 'Francisco Pizarro', 1),
(785, 21, 785, 'Funes', 1),
(786, 21, 786, 'Guachucal', 1),
(787, 21, 787, 'Guaitarilla', 1),
(788, 21, 788, 'Gualmatan', 1),
(789, 21, 789, 'Iles', 1),
(790, 21, 790, 'Imues', 1),
(791, 21, 791, 'Ipiales', 1),
(792, 21, 792, 'La Cruz', 1),
(793, 21, 793, 'La Florida', 1),
(794, 21, 794, 'La Llanada', 1),
(795, 21, 795, 'La Tola', 1),
(796, 21, 796, 'La Union', 1),
(797, 21, 797, 'Leiva', 1),
(798, 21, 798, 'Linares', 1),
(799, 21, 799, 'Los Andes', 1),
(800, 21, 800, 'Magsi', 1),
(801, 21, 801, 'Mallama', 1),
(802, 21, 802, 'Mosquera', 1),
(803, 21, 803, 'Nariño', 1),
(804, 21, 804, 'Olaya Herrera', 1),
(805, 21, 805, 'Ospina', 1),
(806, 21, 806, 'Pasto', 1),
(807, 21, 807, 'Policarpa', 1),
(808, 21, 808, 'Potosi', 1),
(809, 21, 809, 'Providencia', 1),
(810, 21, 810, 'Puerres', 1),
(811, 21, 811, 'Pupiales', 1),
(812, 21, 812, 'Ricaurte', 1),
(813, 21, 813, 'Roberto Payan', 1),
(814, 21, 814, 'Samaniego', 1),
(815, 21, 815, 'San Andres De Tumaco', 1),
(816, 21, 816, 'San Bernardo', 1),
(817, 21, 817, 'San Lorenzo', 1),
(818, 21, 818, 'San Pablo', 1),
(819, 21, 819, 'San Pedro De Cartago', 1),
(820, 21, 820, 'Sandona', 1),
(821, 21, 821, 'Santa Barbara', 1),
(822, 21, 822, 'Santacruz', 1),
(823, 21, 823, 'Sapuyes', 1),
(824, 21, 824, 'Taminango', 1),
(825, 21, 825, 'Tangua', 1),
(826, 21, 826, 'Tuquerres', 1),
(827, 21, 827, 'Yacuanquer', 1),
(828, 22, 828, 'Abrego', 1),
(829, 22, 829, 'Arboledas', 1),
(830, 22, 830, 'Bochalema', 1),
(831, 22, 831, 'Bucarasica', 1),
(832, 22, 832, 'Cachira', 1),
(833, 22, 833, 'Cacota', 1),
(834, 22, 834, 'Chinacota', 1),
(835, 22, 835, 'Chitaga', 1),
(836, 22, 836, 'Convencion', 1),
(837, 22, 837, 'Cucuta', 1),
(838, 22, 838, 'Cucutilla', 1),
(839, 22, 839, 'Durania', 1),
(840, 22, 840, 'El Carmen', 1),
(841, 22, 841, 'El Tarra', 1),
(842, 22, 842, 'El Zulia', 1),
(843, 22, 843, 'Gramalote', 1),
(844, 22, 844, 'Hacari', 1),
(845, 22, 845, 'Herran', 1),
(846, 22, 846, 'La Esperanza', 1),
(847, 22, 847, 'La Playa', 1),
(848, 22, 848, 'Labateca', 1),
(849, 22, 849, 'Los Patios', 1),
(850, 22, 850, 'Lourdes', 1),
(851, 22, 851, 'Mutiscua', 1),
(852, 22, 852, 'Ocaña', 1),
(853, 22, 853, 'Pamplona', 1),
(854, 22, 854, 'Pamplonita', 1),
(855, 22, 855, 'Puerto Santander', 1),
(856, 22, 856, 'Ragonvalia', 1),
(857, 22, 857, 'Salazar', 1),
(858, 22, 858, 'San Calixto', 1),
(859, 22, 859, 'San Cayetano', 1),
(860, 22, 860, 'Santiago', 1),
(861, 22, 861, 'Sardinata', 1),
(862, 22, 862, 'Silos', 1),
(863, 22, 863, 'Teorama', 1),
(864, 22, 864, 'Tibu', 1),
(865, 22, 865, 'Toledo', 1),
(866, 22, 866, 'Villa Caro', 1),
(867, 22, 867, 'Villa Del Rosario', 1),
(868, 23, 868, 'Colon', 1),
(869, 23, 869, 'Leguizamo', 1),
(870, 23, 870, 'Mocoa', 1),
(871, 23, 871, 'Orito', 1),
(872, 23, 872, 'Puerto Asis', 1),
(873, 23, 873, 'Puerto Caicedo', 1),
(874, 23, 874, 'Puerto Guzman', 1),
(875, 23, 875, 'San Francisco', 1),
(876, 23, 876, 'San Miguel', 1),
(877, 23, 877, 'Santiago', 1),
(878, 23, 878, 'Sibundoy', 1),
(879, 23, 879, 'Valle Del Guamuez', 1),
(880, 23, 880, 'Villagarzon', 1),
(881, 24, 881, 'Armenia', 1),
(882, 24, 882, 'Buenavista', 1),
(883, 24, 883, 'Calarca', 1),
(884, 24, 884, 'Circasia', 1),
(885, 24, 885, 'Cordoba', 1),
(886, 24, 886, 'Filandia', 1),
(887, 24, 887, 'Genova', 1),
(888, 24, 888, 'La Tebaida', 1),
(889, 24, 889, 'Montenegro', 1),
(890, 24, 890, 'Pijao', 1),
(891, 24, 891, 'Quimbaya', 1),
(892, 24, 892, 'Salento', 1),
(893, 25, 893, 'Apia', 1),
(894, 25, 894, 'Balboa', 1),
(895, 25, 895, 'Belen De Umbria', 1),
(896, 25, 896, 'Dosquebradas', 1),
(897, 25, 897, 'Guatica', 1),
(898, 25, 898, 'La Celia', 1),
(899, 25, 899, 'La Virginia', 1),
(900, 25, 900, 'Marsella', 1),
(901, 25, 901, 'Mistrato', 1),
(902, 25, 902, 'Pereira', 1),
(903, 25, 903, 'Pueblo Rico', 1),
(904, 25, 904, 'Quinchia', 1),
(905, 25, 905, 'Santa Rosa De Cabal', 1),
(906, 25, 906, 'Santuario', 1),
(907, 26, 907, 'Providencia', 1),
(908, 26, 908, 'San Andres', 1),
(909, 27, 909, 'Aguada', 1),
(910, 27, 910, 'Albania', 1),
(911, 27, 911, 'Aratoca', 1),
(912, 27, 912, 'Barbosa', 1),
(913, 27, 913, 'Barichara', 1),
(914, 27, 914, 'Barrancabermeja', 1),
(915, 27, 915, 'Betulia', 1),
(916, 27, 916, 'Bolivar', 1),
(917, 27, 917, 'Bucaramanga', 1),
(918, 27, 918, 'Cabrera', 1),
(919, 27, 919, 'California', 1),
(920, 27, 920, 'Capitanejo', 1),
(921, 27, 921, 'Carcasi', 1),
(922, 27, 922, 'Cepita', 1),
(923, 27, 923, 'Cerrito', 1),
(924, 27, 924, 'Charala', 1),
(925, 27, 925, 'Charta', 1),
(926, 27, 926, 'Chima', 1),
(927, 27, 927, 'Chipata', 1),
(928, 27, 928, 'Cimitarra', 1),
(929, 27, 929, 'Concepcion', 1),
(930, 27, 930, 'Confines', 1),
(931, 27, 931, 'Contratacion', 1),
(932, 27, 932, 'Coromoro', 1),
(933, 27, 933, 'Curiti', 1),
(934, 27, 934, 'El Carmen De Chucuri', 1),
(935, 27, 935, 'El Guacamayo', 1),
(936, 27, 936, 'El Peñon', 1),
(937, 27, 937, 'El Playon', 1),
(938, 27, 938, 'Encino', 1),
(939, 27, 939, 'Enciso', 1),
(940, 27, 940, 'Florian', 1),
(941, 27, 941, 'Floridablanca', 1),
(942, 27, 942, 'Galan', 1),
(943, 27, 943, 'Gambita', 1),
(944, 27, 944, 'Giron', 1),
(945, 27, 945, 'Gsepsa', 1),
(946, 27, 946, 'Guaca', 1),
(947, 27, 947, 'Guadalupe', 1),
(948, 27, 948, 'Guapota', 1),
(949, 27, 949, 'Guavata', 1),
(950, 27, 950, 'Hato', 1),
(951, 27, 951, 'Jesus Maria', 1),
(952, 27, 952, 'Jordan', 1),
(953, 27, 953, 'La Belleza', 1),
(954, 27, 954, 'La Paz', 1),
(955, 27, 955, 'Landazuri', 1),
(956, 27, 956, 'Lebrija', 1),
(957, 27, 957, 'Los Santos', 1),
(958, 27, 958, 'Macaravita', 1),
(959, 27, 959, 'Malaga', 1),
(960, 27, 960, 'Matanza', 1),
(961, 27, 961, 'Mogotes', 1),
(962, 27, 962, 'Molagavita', 1),
(963, 27, 963, 'Ocamonte', 1),
(964, 27, 964, 'Oiba', 1),
(965, 27, 965, 'Onzaga', 1),
(966, 27, 966, 'Palmar', 1),
(967, 27, 967, 'Palmas Del Socorro', 1),
(968, 27, 968, 'Paramo', 1),
(969, 27, 969, 'Piedecuesta', 1),
(970, 27, 970, 'Pinchote', 1),
(971, 27, 971, 'Puente Nacional', 1),
(972, 27, 972, 'Puerto Parra', 1),
(973, 27, 973, 'Puerto Wilches', 1),
(974, 27, 974, 'Rionegro', 1),
(975, 27, 975, 'Sabana De Torres', 1),
(976, 27, 976, 'San Andres', 1),
(977, 27, 977, 'San Benito', 1),
(978, 27, 978, 'San Gil', 1),
(979, 27, 979, 'San Joaquin', 1),
(980, 27, 980, 'San Jose De Miranda', 1),
(981, 27, 981, 'San Miguel', 1),
(982, 27, 982, 'San Vicente De Chucuri', 1),
(983, 27, 983, 'Santa Barbara', 1),
(984, 27, 984, 'Santa Helena Del Opon', 1),
(985, 27, 985, 'Simacota', 1),
(986, 27, 986, 'Socorro', 1),
(987, 27, 987, 'Suaita', 1),
(988, 27, 988, 'Sucre', 1),
(989, 27, 989, 'Surata', 1),
(990, 27, 990, 'Tona', 1),
(991, 27, 991, 'Valle De San Jose', 1),
(992, 27, 992, 'Velez', 1),
(993, 27, 993, 'Vetas', 1),
(994, 27, 994, 'Villanueva', 1),
(995, 27, 995, 'Zapatoca', 1),
(996, 28, 996, 'Buenavista', 1),
(997, 28, 997, 'Caimito', 1),
(998, 28, 998, 'Chalan', 1),
(999, 28, 999, 'Coloso', 1),
(1000, 28, 1000, 'Corozal', 1),
(1001, 28, 1001, 'Coveñas', 1),
(1002, 28, 1002, 'El Roble', 1),
(1003, 28, 1003, 'Galeras', 1),
(1004, 28, 1004, 'Guaranda', 1),
(1005, 28, 1005, 'La Union', 1),
(1006, 28, 1006, 'Los Palmitos', 1),
(1007, 28, 1007, 'Majagual', 1),
(1008, 28, 1008, 'Morroa', 1),
(1009, 28, 1009, 'Ovejas', 1),
(1010, 28, 1010, 'Palmito', 1),
(1011, 28, 1011, 'Sampues', 1),
(1012, 28, 1012, 'San Benito Abad', 1),
(1013, 28, 1013, 'San Juan De Betulia', 1),
(1014, 28, 1014, 'San Luis De Since', 1),
(1015, 28, 1015, 'San Marcos', 1),
(1016, 28, 1016, 'San Onofre', 1),
(1017, 28, 1017, 'San Pedro', 1),
(1018, 28, 1018, 'Santiago De Tolu', 1),
(1019, 28, 1019, 'Sincelejo', 1),
(1020, 28, 1020, 'Sucre', 1),
(1021, 28, 1021, 'Tolu Viejo', 1),
(1022, 29, 1022, 'Alpujarra', 1),
(1023, 29, 1023, 'Alvarado', 1),
(1024, 29, 1024, 'Ambalema', 1),
(1025, 29, 1025, 'Anzoategui', 1),
(1026, 29, 1026, 'Armero', 1),
(1027, 29, 1027, 'Ataco', 1),
(1028, 29, 1028, 'Cajamarca', 1),
(1029, 29, 1029, 'Carmen De Apicala', 1),
(1030, 29, 1030, 'Casabianca', 1),
(1031, 29, 1031, 'Chaparral', 1),
(1032, 29, 1032, 'Coello', 1),
(1033, 29, 1033, 'Coyaima', 1),
(1034, 29, 1034, 'Cunday', 1),
(1035, 29, 1035, 'Dolores', 1),
(1036, 29, 1036, 'Espinal', 1),
(1037, 29, 1037, 'Falan', 1),
(1038, 29, 1038, 'Flandes', 1),
(1039, 29, 1039, 'Fresno', 1),
(1040, 29, 1040, 'Guamo', 1),
(1041, 29, 1041, 'Herveo', 1),
(1042, 29, 1042, 'Honda', 1),
(1043, 29, 1043, 'Ibague', 1),
(1044, 29, 1044, 'Icononzo', 1),
(1045, 29, 1045, 'Lerida', 1),
(1046, 29, 1046, 'Libano', 1),
(1047, 29, 1047, 'Mariquita', 1),
(1048, 29, 1048, 'Melgar', 1),
(1049, 29, 1049, 'Murillo', 1),
(1050, 29, 1050, 'Natagaima', 1),
(1051, 29, 1051, 'Ortega', 1),
(1052, 29, 1052, 'Palocabildo', 1),
(1053, 29, 1053, 'Piedras', 1),
(1054, 29, 1054, 'Planadas', 1),
(1055, 29, 1055, 'Prado', 1),
(1056, 29, 1056, 'Purificacion', 1),
(1057, 29, 1057, 'Rioblanco', 1),
(1058, 29, 1058, 'Roncesvalles', 1),
(1059, 29, 1059, 'Rovira', 1),
(1060, 29, 1060, 'Saldaña', 1),
(1061, 29, 1061, 'San Antonio', 1),
(1062, 29, 1062, 'San Luis', 1),
(1063, 29, 1063, 'Santa Isabel', 1),
(1064, 29, 1064, 'Suarez', 1),
(1065, 29, 1065, 'Valle De San Juan', 1),
(1066, 29, 1066, 'Venadillo', 1),
(1067, 29, 1067, 'Villahermosa', 1),
(1068, 29, 1068, 'Villarrica', 1),
(1069, 30, 1069, 'Alcala', 1),
(1070, 30, 1070, 'Andalucia', 1),
(1071, 30, 1071, 'Ansermanuevo', 1),
(1072, 30, 1072, 'Argelia', 1),
(1073, 30, 1073, 'Bolivar', 1),
(1074, 30, 1074, 'Buenaventura', 1),
(1075, 30, 1075, 'Bugalagrande', 1),
(1076, 30, 1076, 'Caicedonia', 1),
(1077, 30, 1077, 'Cali', 1),
(1078, 30, 1078, 'Calima', 1),
(1079, 30, 1079, 'Candelaria', 1),
(1080, 30, 1080, 'Cartago', 1),
(1081, 30, 1081, 'Dagua', 1),
(1082, 30, 1082, 'El Aguila', 1),
(1083, 30, 1083, 'El Cairo', 1),
(1084, 30, 1084, 'El Cerrito', 1),
(1085, 30, 1085, 'El Dovio', 1),
(1086, 30, 1086, 'Florida', 1),
(1087, 30, 1087, 'Ginebra', 1),
(1088, 30, 1088, 'Guacari', 1),
(1089, 30, 1089, 'Guadalajara De Buga', 1),
(1090, 30, 1090, 'Jamundi', 1),
(1091, 30, 1091, 'La Cumbre', 1),
(1092, 30, 1092, 'La Union', 1),
(1093, 30, 1093, 'La Victoria', 1),
(1094, 30, 1094, 'Obando', 1),
(1095, 30, 1095, 'Palmira', 1),
(1096, 30, 1096, 'Pradera', 1),
(1097, 30, 1097, 'Restrepo', 1),
(1098, 30, 1098, 'Riofrio', 1),
(1099, 30, 1099, 'Roldanillo', 1),
(1100, 30, 1100, 'San Pedro', 1),
(1101, 30, 1101, 'Sevilla', 1),
(1102, 30, 1102, 'Toro', 1),
(1103, 30, 1103, 'Trujillo', 1),
(1104, 30, 1104, 'Tulua', 1),
(1105, 30, 1105, 'Ulloa', 1),
(1106, 30, 1106, 'Versalles', 1),
(1107, 30, 1107, 'Vijes', 1),
(1108, 30, 1108, 'Yotoco', 1),
(1109, 30, 1109, 'Yumbo', 1),
(1110, 30, 1110, 'Zarzal', 1),
(1111, 31, 1111, 'Caruru', 1),
(1112, 31, 1112, 'Mitu', 1),
(1113, 31, 1113, 'Pacoa', 1),
(1114, 31, 1114, 'Papunaua', 1),
(1115, 31, 1115, 'Taraira', 1),
(1116, 31, 1116, 'Yavarate', 1),
(1117, 32, 1117, 'Cumaribo', 1),
(1118, 32, 1118, 'La Primavera', 1),
(1119, 32, 1119, 'Puerto Carreño', 1),
(1120, 32, 1120, 'Santa Rosalia', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbdeptos`
--

DROP TABLE IF EXISTS `tbdeptos`;
CREATE TABLE `tbdeptos` (
  `iddpto` int(11) NOT NULL,
  `codDpto` int(11) NOT NULL,
  `nomDpto` varchar(15) NOT NULL,
  `idpais` int(11) NOT NULL,
  `status` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbdeptos`
--

INSERT INTO `tbdeptos` (`iddpto`, `codDpto`, `nomDpto`, `idpais`, `status`) VALUES
(1, 1, 'Amazonas', 1, 1),
(2, 2, 'Antioquia', 1, 1),
(3, 3, 'Arauca', 1, 1),
(4, 4, 'Atlantico', 1, 1),
(5, 5, 'Bolivar', 1, 1),
(6, 6, 'Boyaca', 1, 1),
(7, 7, 'Caldas', 1, 1),
(8, 8, 'Caqueta', 1, 1),
(9, 9, 'Casanare', 1, 1),
(10, 10, 'Cauca', 1, 1),
(11, 11, 'Cesar', 1, 1),
(12, 12, 'Choco', 1, 1),
(13, 13, 'Cordoba', 1, 1),
(14, 14, 'Cundinamarca', 1, 1),
(15, 15, 'Guainia', 1, 1),
(16, 16, 'Guaviare', 1, 1),
(17, 17, 'Guajira ', 1, 1),
(18, 18, 'Huila ', 1, 1),
(19, 19, 'Magdalena', 1, 1),
(20, 20, 'Meta', 1, 1),
(21, 21, 'Nariño', 1, 1),
(22, 22, 'Norte de Santan', 1, 1),
(23, 23, 'Putumayo', 1, 1),
(24, 24, 'Quindio', 1, 1),
(25, 25, 'Risaralda', 1, 1),
(26, 26, 'San Andres', 1, 1),
(27, 27, 'Santander', 1, 1),
(28, 28, 'Sucre', 1, 1),
(29, 29, 'Tolima', 1, 1),
(30, 30, 'Valle del cauca', 1, 1),
(31, 31, 'Vaupes', 1, 1),
(32, 32, 'Vichada', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbdescripciontr`
--

DROP TABLE IF EXISTS `tbdescripciontr`;
CREATE TABLE `tbdescripciontr` (
  `IdDescripcionTr` int(11) NOT NULL,
  `detalleDescripcion` varchar(250) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbdescripciontr`
--

INSERT INTO `tbdescripciontr` (`IdDescripcionTr`, `detalleDescripcion`, `status`) VALUES
(1, 'Situada en la vía Tocaima – Viotá y está especialmente diseñada para descansar y descomunicarse del mundo exterior, gozando de una piscina cómoda, mangos y limones propios de la finca. La cabaña cuenta con las siguientes características:', 1),
(2, 'Habitacion con vista al mar amobladas', 1),
(3, 'Hermosos paisajes de Antioquia', 1),
(4, 'El Bleu Hills Glamping Llanogrande está situado en Rionegro, en la región de Antioquia, y ofrece alojamiento con aparcamiento privado gratuito y acceso a una bañera de hidromasaje.', 1),
(5, 'El Chalet Ecoturismo La Nohelia, situado en Jericó, rodeado por los cultivos de café famosos de la zona, ofrece restaurante y préstamo de bicicletas.', 1),
(6, 'El Santa Fé Hostel se encuentra a 3,8 km del parque acuático Kanaloa. El camping proporciona WiFi gratuita. El aeropuerto Olaya Herrera, el más cercano, está a 62 km del camping.', 1),
(7, 'El Aguayacanes se encuentra en San Rafael y ofrece un jardín. Guatapé se encuentra a 15 km del camping, mientras que Barbosa está a 38 km.', 1),
(8, 'Colombia cuenta con un sistema de Parques Nacionales Naturales que permite al visitante apreciar la majestuosidad de nuestra geografía, así como la riqueza de nuestra fauna y flora. Conoce algunas curiosidades de Colombia ', 1),
(9, ' El primer Parque Nacional Natural de Colombia fue La Cueva de los Guácharos, declarado el 9 de noviembre de 1960. Por esa razón, en esta fecha se celebra el Día de los Parques Naturales en nuestro país. ', 1),
(10, 'El Parque Nacional Natural Uramba Bahía Málaga.  se ubica en las costas del pacífico colombiano y es reconocido internacionalmente por ser un privilegiado escenario para apreciar la migración de ballenas jorobadas', 1),
(11, 'El Parque Las Orquídeas se presenta como uno de los lugares ideales para observar nuestra diversidad de flora y fauna.', 1),
(12, 'Las 15.000 hectáreas del Parque Natural Nacional Tayrona ofrecen al visitante una paradisíaca combinación de naturaleza, historia precolombina, aventura y relajación.', 1),
(13, 'La Playa La Aguada, ubicada en el Parque Natural Utría, es la primera playa de Colombia con certificación en turismo sostenible.', 1),
(14, 'Colombia es uno de los países con más biodiversidad en el mundo, los colores, la fauna y la flora que lo caracterizan son motivo de orgullo.', 1),
(15, 'Parque Nacional Natural Amacayacu,  en el Amazonas, con más de 40 años de historia representa el 40% del Trapecio Amazónico y debido a su ecosistema de selva húmeda tropical cálida y bosques inundables', 1),
(16, 'Parque Nacional Natural Farallones de Cali, son formaciones rocosas que se encuentran en la Cordillera Occidental de los Andes. Si tu elección es la vertiente oriental, la recomendación es ir en enero y marzo y luego de julio a agosto.', 1),
(17, 'Santuario de Fauna y Flora Otún Quimbaya, Ubicado en el flanco occidental de la Cordillera Central, en el departamento de Risaralda, el Santuario de Fauna y Flora Otún Quimbaya es un destino ecoturístico del Paisaje Cultural Cafetero.', 1),
(18, 'Parque Nacional Natural Tatamá,  podrás conocer tres importantes páramos colombianos, el Tatamá, el Frontino y el Duende, sin duda será una experiencia invaluable que te hará disfrutar de la biodiversidad colombiana.', 1),
(19, 'Reserva Natural Cañón del Río Claro Ubicado en Antioquia, la biodiversidad de esta región es conocida como la cuenca media del Río Magdalena, además está situada en el piedemonte oriental de la Cordillera Central colombiana.', 1),
(20, 'Parque Nacional Natural Las Orquídeas,  sus variados paisajes, además de una gran biodiversidad de ecosistemas, abundantes orquídeas y otras especies asociadas.', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbestadohabitacion`
--

DROP TABLE IF EXISTS `tbestadohabitacion`;
CREATE TABLE `tbestadohabitacion` (
  `idEstadoh` int(11) NOT NULL,
  `nomEstado` varchar(40) NOT NULL,
  `status` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbestadohabitacion`
--

INSERT INTO `tbestadohabitacion` (`idEstadoh`, `nomEstado`, `status`) VALUES
(1, 'DISPONIBLE', 1),
(2, 'OCUPADA', 1),
(3, 'RESERVADA', 1),
(4, 'MANTENIMIENTO', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbestadoreserva`
--

DROP TABLE IF EXISTS `tbestadoreserva`;
CREATE TABLE `tbestadoreserva` (
  `idestador` int(11) NOT NULL,
  `nomEstador` varchar(40) NOT NULL,
  `status` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbestadoreserva`
--

INSERT INTO `tbestadoreserva` (`idestador`, `nomEstador`, `status`) VALUES
(1, 'TOMADA', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbfactura`
--

DROP TABLE IF EXISTS `tbfactura`;
CREATE TABLE `tbfactura` (
  `idFactura` int(11) NOT NULL,
  `idRegistro` int(11) NOT NULL,
  `idnitHotel` int(11) NOT NULL,
  `fecFactura` date NOT NULL,
  `status` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbfamiliares`
--

DROP TABLE IF EXISTS `tbfamiliares`;
CREATE TABLE `tbfamiliares` (
  `idfamiliar` int(11) NOT NULL,
  `idtipoDoc` int(11) NOT NULL,
  `idRegistro` int(11) NOT NULL,
  `nroDocumento` int(11) NOT NULL,
  `nomFamiliar` varchar(20) NOT NULL,
  `apeFamiliar` varchar(20) NOT NULL,
  `fecNacido` datetime NOT NULL,
  `status` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbhabitacion`
--

DROP TABLE IF EXISTS `tbhabitacion`;
CREATE TABLE `tbhabitacion` (
  `idHabitacion` int(11) NOT NULL,
  `idorg` int(11) NOT NULL DEFAULT 0,
  `nroHabitacion` int(11) NOT NULL,
  `idtipoHab` int(11) NOT NULL,
  `idEstadoh` int(11) NOT NULL,
  `preciohab` int(11) NOT NULL,
  `status` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbhabitacion`
--

INSERT INTO `tbhabitacion` (`idHabitacion`, `idorg`, `nroHabitacion`, `idtipoHab`, `idEstadoh`, `preciohab`, `status`) VALUES
(1, 1, 101, 1, 1, 150, 1),
(2, 1, 105, 1, 1, 1, 1),
(3, 1, 103, 2, 1, 150, 1),
(4, 1, 104, 2, 1, 111, 1),
(5, 1, 102, 2, 4, 1500, 1),
(6, 1, 108, 1, 1, 1500, 1),
(7, 1, 110, 2, 1, 100, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbhabitacionxpiso`
--

DROP TABLE IF EXISTS `tbhabitacionxpiso`;
CREATE TABLE `tbhabitacionxpiso` (
  `idppal` int(11) NOT NULL,
  `idOrg` int(11) NOT NULL,
  `nroPisoHab` varchar(200) DEFAULT '',
  `areaHabitacion` int(11) DEFAULT 0,
  `idMobiliarioTr` varchar(200) DEFAULT '',
  `cantidad` varchar(200) DEFAULT '',
  `tbAccesibilidadTr` varchar(200) DEFAULT '',
  `rutaImagen` varchar(100) DEFAULT '',
  `IdDescripcionTr` varchar(200) DEFAULT '',
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbhabitacionxpiso`
--

INSERT INTO `tbhabitacionxpiso` (`idppal`, `idOrg`, `nroPisoHab`, `areaHabitacion`, `idMobiliarioTr`, `cantidad`, `tbAccesibilidadTr`, `rutaImagen`, `IdDescripcionTr`, `status`) VALUES
(1, 1, '1-01', 24, '01-02-03-04-06-09-11', '1-1-1-1-3-2-1', '04-05-06', 'dir1-01/imgHab/', '01-02-03', 1),
(2, 1, '1-02', 26, '02-03-04-06-09-11', '1-1-1-1-3-2-2', '04-06', 'dir1-02/imgHab/', '01-03-04', 1),
(3, 1, '1-03', 30, '01-03-04-06-09-11', '1-1-1-1-3-2-3', '04-05-07', 'dir1-03/imgHab/', '01-02-05', 1),
(4, 1, '1-04', 24, '01-02-03-04-09-11', '1-1-1-1-3-2-4', '04-07', 'dir1-04/imgHab/', '01-02-06', 1),
(5, 1, '2-01', 26, '01-03-04-05-06-09', '1-1-1-1-3-2-5', '04-05-08', 'dir2-01/imgHab/', '01-02-07', 1),
(6, 1, '2-02', 30, '01-02-03-04-06-09', '1-1-1-1-3-2-6', '04-08', 'dir2-02/imgHab/', '01-02-03', 1),
(7, 1, '2-03', 24, '01-02-03-04-06-10', '1-1-1-1-3-2-7', '04-05-09', 'dir2-03/imgHab/', '01-03-04', 1),
(8, 1, '2-04', 26, '01-02-03-04-06-10', '1-1-1-1-3-2-8', '04-09', 'dir2-04/imgHab/', '01-02-05', 1),
(9, 2, '1-01', 30, '01-03-04-05', '2-1-1-1', '04-05-10', 'dir1-01/imgHab/', '01-02-06', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbhabmobiliario`
--

DROP TABLE IF EXISTS `tbhabmobiliario`;
CREATE TABLE `tbhabmobiliario` (
  `idhabMobiliario` int(11) NOT NULL,
  `nroHabitacion` int(11) NOT NULL,
  `idHabitacion` int(11) NOT NULL,
  `idMobiliario` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `status` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbhabmobiliario`
--

INSERT INTO `tbhabmobiliario` (`idhabMobiliario`, `nroHabitacion`, `idHabitacion`, `idMobiliario`, `cantidad`, `status`) VALUES
(6, 104, 4, 4, 1, 1),
(7, 104, 4, 1, 1, 1),
(8, 104, 4, 2, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbhotelcliente`
--

DROP TABLE IF EXISTS `tbhotelcliente`;
CREATE TABLE `tbhotelcliente` (
  `idnitHotel` int(11) NOT NULL,
  `nitHotel` varchar(20) NOT NULL DEFAULT '1',
  `idCiudad` int(11) NOT NULL DEFAULT 1 COMMENT 'Relacionar con la tabla ciudades-tbmunicipio',
  `nomHotel` varchar(50) NOT NULL,
  `dirHotel` varchar(50) NOT NULL,
  `telHotel1` varchar(12) NOT NULL,
  `telHotel2` varchar(12) DEFAULT NULL,
  `correoHotel` varchar(60) NOT NULL,
  `tipoHotel` int(11) DEFAULT NULL COMMENT 'Relacionar con la tabla tipos de hoteles(Servicios-tbcateroiafron)',
  `Administrador` varchar(40) DEFAULT NULL,
  `idRedes` int(11) DEFAULT NULL COMMENT 'Relacionar con la tabla redesSociales',
  `aforo` int(11) DEFAULT NULL,
  `tipoHabitaciones` int(11) DEFAULT NULL COMMENT 'Relacionar con la tabla tipo habitaciones(Sencilla, doble...)-tbtypohabitacion',
  `status` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbhotelcliente`
--

INSERT INTO `tbhotelcliente` (`idnitHotel`, `nitHotel`, `idCiudad`, `nomHotel`, `dirHotel`, `telHotel1`, `telHotel2`, `correoHotel`, `tipoHotel`, `Administrador`, `idRedes`, `aforo`, `tipoHabitaciones`, `status`) VALUES
(1, '123', 39, 'Primer Hotel', 'dir-primer hotel', '123', NULL, 'hotel1@correo.com', 1, NULL, NULL, NULL, 0, 1),
(2, '234', 39, 'Segundo Hotel', 'dir-Segundo', '300', NULL, 'hotel2@correo.com', 2, NULL, NULL, NULL, NULL, 1),
(3, '456', 39, 'Terrcer Hotel', 'Dir-3er hotel', '458', NULL, 'hotel3@correo.com', 1, NULL, NULL, NULL, NULL, 1),
(4, '457', 39, '4to hotel', 'dir-4to-hotel', '547', NULL, 'hotel4@correo.com', 2, NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbinfohotel`
--

DROP TABLE IF EXISTS `tbinfohotel`;
CREATE TABLE `tbinfohotel` (
  `idnitHotel` int(11) NOT NULL,
  `nomHotel` varchar(50) NOT NULL,
  `dirHotel` varchar(50) NOT NULL,
  `telHotel` varchar(12) NOT NULL,
  `correoHotel` varchar(60) NOT NULL,
  `status` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbinstalacionestr`
--

DROP TABLE IF EXISTS `tbinstalacionestr`;
CREATE TABLE `tbinstalacionestr` (
  `idInstalacionTr` int(11) NOT NULL,
  `desInstalacion` varchar(50) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbinstalacionestr`
--

INSERT INTO `tbinstalacionestr` (`idInstalacionTr`, `desInstalacion`, `status`) VALUES
(1, 'Gimnasio', 1),
(2, 'Jakuzzi', 1),
(3, 'Parking', 1),
(4, 'Baños y Duchas(camping)', 1),
(5, 'Pileta tonificante', 1),
(6, 'Ducha escocesa', 1),
(7, 'Sauna finlandesa', 1),
(8, 'Cabinas de tratamientos y masajes', 1),
(9, 'Baño turco', 1),
(10, 'Spa propio', 1),
(11, 'Cajeros automaticos', 1),
(12, 'Servicio médico externo, primeros auxilios', 1),
(13, 'Servicio de transfer', 1),
(14, 'Servicio de habitaciones', 1),
(15, 'Servicio de lavandería', 1),
(16, 'Servicios de teleconferencia disponibles', 1),
(17, 'Salón de juegos', 1),
(18, 'Estanque de Peces', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblogin`
--

DROP TABLE IF EXISTS `tblogin`;
CREATE TABLE `tblogin` (
  `id` int(11) NOT NULL,
  `usname` varchar(30) DEFAULT NULL,
  `pass` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tblogin`
--

INSERT INTO `tblogin` (`id`, `usname`, `pass`) VALUES
(1, 'Admin', '1234'),
(2, 'Prasath', '12345'),
(3, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbmedioreserva`
--

DROP TABLE IF EXISTS `tbmedioreserva`;
CREATE TABLE `tbmedioreserva` (
  `idmedio` int(11) NOT NULL,
  `nomMedio` varchar(15) DEFAULT NULL,
  `status` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbmedioreserva`
--

INSERT INTO `tbmedioreserva` (`idmedio`, `nomMedio`, `status`) VALUES
(1, 'WEBK', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbmenu`
--

DROP TABLE IF EXISTS `tbmenu`;
CREATE TABLE `tbmenu` (
  `idmenu` int(11) NOT NULL,
  `titmenu` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `lnkmenu` varchar(150) COLLATE utf8_spanish_ci NOT NULL DEFAULT '#',
  `posMenu` tinyint(4) NOT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbmenu`
--

INSERT INTO `tbmenu` (`idmenu`, `titmenu`, `lnkmenu`, `posMenu`, `estado`) VALUES
(1, 'Maestros', '#', 1, 1),
(2, 'Modulos casos', '#', 2, 1),
(3, 'Modulos abogados', '#', 3, 1),
(4, 'Consultas', '#', 4, 1),
(5, 'Informes', '#', 5, 1),
(6, 'Herramientas', '#', 6, 1),
(7, 'Empleados', '#', 3, 1),
(8, 'Pruebas', '#', 7, 1),
(9, 'Prueba grande', '#', 9, 1),
(10, 'Prueba 22000', '#', 10, 1),
(11, 'Modulo tercero', '#', 2, 1),
(12, 'Modulo cliente', '#', 2, 1),
(13, 'Prueba Certficados', '#', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbmobiliario`
--

DROP TABLE IF EXISTS `tbmobiliario`;
CREATE TABLE `tbmobiliario` (
  `idMobiliario` int(11) NOT NULL,
  `nomMobiliario` varchar(60) NOT NULL,
  `desMobiliario` varchar(60) NOT NULL,
  `preciocompra` decimal(15,2) NOT NULL,
  `status` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbmobiliario`
--

INSERT INTO `tbmobiliario` (`idMobiliario`, `nomMobiliario`, `desMobiliario`, `preciocompra`, `status`) VALUES
(1, 'CAMA', 'MADERA', '1.00', 1),
(2, 'CAMA CUNA', 'MADERA', '120.00', 1),
(3, 'CAMA DOBLE', 'MADERA ROBLE, BORDADOS EN ACERO', '1850000.00', 1),
(4, 'TV 45', 'MARCA SAMSUNG', '1100000.00', 1),
(5, 'TV 65', 'MARCA LG', '1150000.00', 1),
(6, 'NEVERA 12PIES', 'MARCA CENTRALES', '1350000.00', 1),
(7, 'MESA NOCHE', 'MADERA', '35000.00', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbmunicipios`
--

DROP TABLE IF EXISTS `tbmunicipios`;
CREATE TABLE `tbmunicipios` (
  `idCiudad` int(11) NOT NULL,
  `iddpto` int(11) NOT NULL,
  `codCiudad` int(11) NOT NULL,
  `nomCiudad` varchar(40) NOT NULL,
  `status` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbmunicipios`
--

INSERT INTO `tbmunicipios` (`idCiudad`, `iddpto`, `codCiudad`, `nomCiudad`, `status`) VALUES
(1, 1, 1, 'El Encanto', 1),
(2, 1, 2, 'La Chorrera', 1),
(3, 1, 3, 'La Pedrera', 1),
(4, 1, 4, 'La Victoria', 1),
(5, 1, 5, 'Leticia', 1),
(6, 1, 6, 'Miriti - Parana', 1),
(7, 1, 7, 'Puerto Alegria', 1),
(8, 1, 8, 'Puerto Arica', 1),
(9, 1, 9, 'Puerto Nariño', 1),
(10, 1, 10, 'Puerto Santander', 1),
(11, 1, 11, 'Tarapaca', 1),
(12, 2, 12, 'Abejorral', 1),
(13, 2, 13, 'Abriaqui', 1),
(14, 2, 14, 'Alejandria', 1),
(15, 2, 15, 'Amaga', 1),
(16, 2, 16, 'Amalfi', 1),
(17, 2, 17, 'Andes', 1),
(18, 2, 18, 'Angelopolis', 1),
(19, 2, 19, 'Angostura', 1),
(20, 2, 20, 'Anori', 1),
(21, 2, 21, 'Anza', 1),
(22, 2, 22, 'Apartado', 1),
(23, 2, 23, 'Arboletes', 1),
(24, 2, 24, 'Argelia', 1),
(25, 2, 25, 'Armenia', 1),
(26, 2, 26, 'Barbosa', 1),
(27, 2, 27, 'Bello', 1),
(28, 2, 28, 'Belmira', 1),
(29, 2, 29, 'Betania', 1),
(30, 2, 30, 'Betulia', 1),
(31, 2, 31, 'Briceño', 1),
(32, 2, 32, 'Buritica', 1),
(33, 2, 33, 'Caceres', 1),
(34, 2, 34, 'Caicedo', 1),
(35, 2, 35, 'Caldas', 1),
(36, 2, 36, 'Campamento', 1),
(37, 2, 37, 'Cañasgordas', 1),
(38, 2, 38, 'Caracoli', 1),
(39, 2, 39, 'Caramanta', 1),
(40, 2, 40, 'Carepa', 1),
(41, 2, 41, 'Carolina', 1),
(42, 2, 42, 'Caucasia', 1),
(43, 2, 43, 'Chigorodo', 1),
(44, 2, 44, 'Cisneros', 1),
(45, 2, 45, 'Ciudad Bolivar', 1),
(46, 2, 46, 'Cocorna', 1),
(47, 2, 47, 'Concepcion', 1),
(48, 2, 48, 'Concordia', 1),
(49, 2, 49, 'Copacabana', 1),
(50, 2, 50, 'Dabeiba', 1),
(51, 2, 51, 'Don Matias', 1),
(52, 2, 52, 'Ebejico', 1),
(53, 2, 53, 'El Bagre', 1),
(54, 2, 54, 'El Carmen De Viboral', 1),
(55, 2, 55, 'El Santuario', 1),
(56, 2, 56, 'Entrerrios', 1),
(57, 2, 57, 'Envigado', 1),
(58, 2, 58, 'Fredonia', 1),
(59, 2, 59, 'Frontino', 1),
(60, 2, 60, 'Giraldo', 1),
(61, 2, 61, 'Girardota', 1),
(62, 2, 62, 'Gomez Plata', 1),
(63, 2, 63, 'Granada', 1),
(64, 2, 64, 'Guadalupe', 1),
(65, 2, 65, 'Guarne', 1),
(66, 2, 66, 'Guatape', 1),
(67, 2, 67, 'Heliconia', 1),
(68, 2, 68, 'Hispania', 1),
(69, 2, 69, 'Itagui', 1),
(70, 2, 70, 'Ituango', 1),
(71, 2, 71, 'Jardin', 1),
(72, 2, 72, 'Jerico', 1),
(73, 2, 73, 'La Ceja', 1),
(74, 2, 74, 'La Estrella', 1),
(75, 2, 75, 'La Pintada', 1),
(76, 2, 76, 'La Union', 1),
(77, 2, 77, 'Liborina', 1),
(78, 2, 78, 'Maceo', 1),
(79, 2, 79, 'Marinilla', 1),
(80, 2, 80, 'Medellin', 1),
(81, 2, 81, 'Montebello', 1),
(82, 2, 82, 'Murindo', 1),
(83, 2, 83, 'Mutata', 1),
(84, 2, 84, 'Nariño', 1),
(85, 2, 85, 'Nechi', 1),
(86, 2, 86, 'Necocli', 1),
(87, 2, 87, 'Olaya', 1),
(88, 2, 88, 'Peðol', 1),
(89, 2, 89, 'Peque', 1),
(90, 2, 90, 'Pueblorrico', 1),
(91, 2, 91, 'Puerto Berrio', 1),
(92, 2, 92, 'Puerto Nare', 1),
(93, 2, 93, 'Puerto Triunfo', 1),
(94, 2, 94, 'Remedios', 1),
(95, 2, 95, 'Retiro', 1),
(96, 2, 96, 'Rionegro', 1),
(97, 2, 97, 'Sabanalarga', 1),
(98, 2, 98, 'Sabaneta', 1),
(99, 2, 99, 'Salgar', 1),
(100, 2, 100, 'San Andres De Cuerquia', 1),
(101, 2, 101, 'San Carlos', 1),
(102, 2, 102, 'San Francisco', 1),
(103, 2, 103, 'San Jeronimo', 1),
(104, 2, 104, 'San Jose De La Montaña', 1),
(105, 2, 105, 'San Juan De Uraba', 1),
(106, 2, 106, 'San Luis', 1),
(107, 2, 107, 'San Pedro', 1),
(108, 2, 108, 'San Pedro De Uraba', 1),
(109, 2, 109, 'San Rafael', 1),
(110, 2, 110, 'San Roque', 1),
(111, 2, 111, 'San Vicente', 1),
(112, 2, 112, 'Santa Barbara', 1),
(113, 2, 113, 'Santa Rosa De Osos', 1),
(114, 2, 114, 'Santafe De Antioquia', 1),
(115, 2, 115, 'Santo Domingo', 1),
(116, 2, 116, 'Segovia', 1),
(117, 2, 117, 'Sonson', 1),
(118, 2, 118, 'Sopetran', 1),
(119, 2, 119, 'Tamesis', 1),
(120, 2, 120, 'Taraza', 1),
(121, 2, 121, 'Tarso', 1),
(122, 2, 122, 'Titiribi', 1),
(123, 2, 123, 'Toledo', 1),
(124, 2, 124, 'Turbo', 1),
(125, 2, 125, 'Uramita', 1),
(126, 2, 126, 'Urrao', 1),
(127, 2, 127, 'Valdivia', 1),
(128, 2, 128, 'Valparaiso', 1),
(129, 2, 129, 'Vegachi', 1),
(130, 2, 130, 'Venecia', 1),
(131, 2, 131, 'Vigia Del Fuerte', 1),
(132, 2, 132, 'Yali', 1),
(133, 2, 133, 'Yarumal', 1),
(134, 2, 134, 'Yolombo', 1),
(135, 2, 135, 'Yondo', 1),
(136, 2, 136, 'Zaragoza', 1),
(137, 3, 137, 'Arauca', 1),
(138, 3, 138, 'Arauquita', 1),
(139, 3, 139, 'Cravo Norte', 1),
(140, 3, 140, 'Fortul', 1),
(141, 3, 141, 'Puerto Rondon', 1),
(142, 3, 142, 'Saravena', 1),
(143, 3, 143, 'Tame', 1),
(144, 4, 144, 'Baranoa', 1),
(145, 4, 145, 'Barranquilla', 1),
(146, 4, 146, 'Campo De La Cruz', 1),
(147, 4, 147, 'Candelaria', 1),
(148, 4, 148, 'Galapa', 1),
(149, 4, 149, 'Juan De Acosta', 1),
(150, 4, 150, 'Luruaco', 1),
(151, 4, 151, 'Malambo', 1),
(152, 4, 152, 'Manati', 1),
(153, 4, 153, 'Palmar De Varela', 1),
(154, 4, 154, 'Piojo', 1),
(155, 4, 155, 'Polonuevo', 1),
(156, 4, 156, 'Ponedera', 1),
(157, 4, 157, 'Puerto Colombia', 1),
(158, 4, 158, 'Repelon', 1),
(159, 4, 159, 'Sabanagrande', 1),
(160, 4, 160, 'Sabanalarga', 1),
(161, 4, 161, 'Santa Lucia', 1),
(162, 4, 162, 'Santo Tomas', 1),
(163, 4, 163, 'Soledad', 1),
(164, 4, 164, 'Suan', 1),
(165, 4, 165, 'Tubara', 1),
(166, 4, 166, 'Usiacuri', 1),
(167, 5, 167, 'Achi', 1),
(168, 5, 168, 'Altos Del Rosario', 1),
(169, 5, 169, 'Arenal', 1),
(170, 5, 170, 'Arjona', 1),
(171, 5, 171, 'Arroyohondo', 1),
(172, 5, 172, 'Barranco De Loba', 1),
(173, 5, 173, 'Calamar', 1),
(174, 5, 174, 'Cantagallo', 1),
(175, 5, 175, 'Cartagena', 1),
(176, 5, 176, 'Cicuco', 1),
(177, 5, 177, 'Clemencia', 1),
(178, 5, 178, 'Cordoba', 1),
(179, 5, 179, 'El Carmen De Bolivar', 1),
(180, 5, 180, 'El Guamo', 1),
(181, 5, 181, 'El Peñon', 1),
(182, 5, 182, 'Hatillo De Loba', 1),
(183, 5, 183, 'Magangue', 1),
(184, 5, 184, 'Mahates', 1),
(185, 5, 185, 'Margarita', 1),
(186, 5, 186, 'Maria La Baja', 1),
(187, 5, 187, 'Mompos', 1),
(188, 5, 188, 'Montecristo', 1),
(189, 5, 189, 'Morales', 1),
(190, 5, 190, 'Norosi', 1),
(191, 5, 191, 'Pinillos', 1),
(192, 5, 192, 'Regidor', 1),
(193, 5, 193, 'Rio Viejo', 1),
(194, 5, 194, 'San Cristobal', 1),
(195, 5, 195, 'San Estanislao', 1),
(196, 5, 196, 'San Fernando', 1),
(197, 5, 197, 'San Jacinto', 1),
(198, 5, 198, 'San Jacinto Del Cauca', 1),
(199, 5, 199, 'San Juan Nepomuceno', 1),
(200, 5, 200, 'San Martin De Loba', 1),
(201, 5, 201, 'San Pablo', 1),
(202, 5, 202, 'Santa Catalina', 1),
(203, 5, 203, 'Santa Rosa', 1),
(204, 5, 204, 'Santa Rosa Del Sur', 1),
(205, 5, 205, 'Simiti', 1),
(206, 5, 206, 'Soplaviento', 1),
(207, 5, 207, 'Talaigua Nuevo', 1),
(208, 5, 208, 'Tiquisio', 1),
(209, 5, 209, 'Turbaco', 1),
(210, 5, 210, 'Turbana', 1),
(211, 5, 211, 'Villanueva', 1),
(212, 5, 212, 'Zambrano', 1),
(213, 6, 213, 'Almeida', 1),
(214, 6, 214, 'Aquitania', 1),
(215, 6, 215, 'Arcabuco', 1),
(216, 6, 216, 'Belen', 1),
(217, 6, 217, 'Berbeo', 1),
(218, 6, 218, 'Beteitiva', 1),
(219, 6, 219, 'Boavita', 1),
(220, 6, 220, 'Boyaca', 1),
(221, 6, 221, 'Briceño', 1),
(222, 6, 222, 'Buenavista', 1),
(223, 6, 223, 'Busbanza', 1),
(224, 6, 224, 'Caldas', 1),
(225, 6, 225, 'Campohermoso', 1),
(226, 6, 226, 'Cerinza', 1),
(227, 6, 227, 'Chinavita', 1),
(228, 6, 228, 'Chiquinquira', 1),
(229, 6, 229, 'Chiquiza', 1),
(230, 6, 230, 'Chiscas', 1),
(231, 6, 231, 'Chita', 1),
(232, 6, 232, 'Chitaraque', 1),
(233, 6, 233, 'Chivata', 1),
(234, 6, 234, 'Chivor', 1),
(235, 6, 235, 'Cienega', 1),
(236, 6, 236, 'Combita', 1),
(237, 6, 237, 'Coper', 1),
(238, 6, 238, 'Corrales', 1),
(239, 6, 239, 'Covarachia', 1),
(240, 6, 240, 'Cubara', 1),
(241, 6, 241, 'Cucaita', 1),
(242, 6, 242, 'Cuitiva', 1),
(243, 6, 243, 'Duitama', 1),
(244, 6, 244, 'El Cocuy', 1),
(245, 6, 245, 'El Espino', 1),
(246, 6, 246, 'Firavitoba', 1),
(247, 6, 247, 'Floresta', 1),
(248, 6, 248, 'Gachantiva', 1),
(249, 6, 249, 'Gameza', 1),
(250, 6, 250, 'Garagoa', 1),
(251, 6, 251, 'Gsican', 1),
(252, 6, 252, 'Guacamayas', 1),
(253, 6, 253, 'Guateque', 1),
(254, 6, 254, 'Guayata', 1),
(255, 6, 255, 'Iza', 1),
(256, 6, 256, 'Jenesano', 1),
(257, 6, 257, 'Jerico', 1),
(258, 6, 258, 'La Capilla', 1),
(259, 6, 259, 'La Uvita', 1),
(260, 6, 260, 'La Victoria', 1),
(261, 6, 261, 'Labranzagrande', 1),
(262, 6, 262, 'Macanal', 1),
(263, 6, 263, 'Maripi', 1),
(264, 6, 264, 'Miraflores', 1),
(265, 6, 265, 'Mongua', 1),
(266, 6, 266, 'Mongui', 1),
(267, 6, 267, 'Moniquira', 1),
(268, 6, 268, 'Motavita', 1),
(269, 6, 269, 'Muzo', 1),
(270, 6, 270, 'Nobsa', 1),
(271, 6, 271, 'Nuevo Colon', 1),
(272, 6, 272, 'Oicata', 1),
(273, 6, 273, 'Otanche', 1),
(274, 6, 274, 'Pachavita', 1),
(275, 6, 275, 'Paez', 1),
(276, 6, 276, 'Paipa', 1),
(277, 6, 277, 'Pajarito', 1),
(278, 6, 278, 'Panqueba', 1),
(279, 6, 279, 'Pauna', 1),
(280, 6, 280, 'Paya', 1),
(281, 6, 281, 'Paz De Rio', 1),
(282, 6, 282, 'Pesca', 1),
(283, 6, 283, 'Pisba', 1),
(284, 6, 284, 'Puerto Boyaca', 1),
(285, 6, 285, 'Quipama', 1),
(286, 6, 286, 'Ramiriqui', 1),
(287, 6, 287, 'Raquira', 1),
(288, 6, 288, 'Rondon', 1),
(289, 6, 289, 'Saboya', 1),
(290, 6, 290, 'Sachica', 1),
(291, 6, 291, 'Samaca', 1),
(292, 6, 292, 'San Eduardo', 1),
(293, 6, 293, 'San Jose De Pare', 1),
(294, 6, 294, 'San Luis De Gaceno', 1),
(295, 6, 295, 'San Mateo', 1),
(296, 6, 296, 'San Miguel De Sema', 1),
(297, 6, 297, 'San Pablo De Borbur', 1),
(298, 6, 298, 'Santa Maria', 1),
(299, 6, 299, 'Santa Rosa De Viterbo', 1),
(300, 6, 300, 'Santa Sofia', 1),
(301, 6, 301, 'Santana', 1),
(302, 6, 302, 'Sativanorte', 1),
(303, 6, 303, 'Sativasur', 1),
(304, 6, 304, 'Siachoque', 1),
(305, 6, 305, 'Soata', 1),
(306, 6, 306, 'Socha', 1),
(307, 6, 307, 'Socota', 1),
(308, 6, 308, 'Sogamoso', 1),
(309, 6, 309, 'Somondoco', 1),
(310, 6, 310, 'Sora', 1),
(311, 6, 311, 'Soraca', 1),
(312, 6, 312, 'Sotaquira', 1),
(313, 6, 313, 'Susacon', 1),
(314, 6, 314, 'Sutamarchan', 1),
(315, 6, 315, 'Sutatenza', 1),
(316, 6, 316, 'Tasco', 1),
(317, 6, 317, 'Tenza', 1),
(318, 6, 318, 'Tibana', 1),
(319, 6, 319, 'Tibasosa', 1),
(320, 6, 320, 'Tinjaca', 1),
(321, 6, 321, 'Tipacoque', 1),
(322, 6, 322, 'Toca', 1),
(323, 6, 323, 'Togsi', 1),
(324, 6, 324, 'Topaga', 1),
(325, 6, 325, 'Tota', 1),
(326, 6, 326, 'Tunja', 1),
(327, 6, 327, 'Tunungua', 1),
(328, 6, 328, 'Turmeque', 1),
(329, 6, 329, 'Tuta', 1),
(330, 6, 330, 'Tutaza', 1),
(331, 6, 331, 'Umbita', 1),
(332, 6, 332, 'Ventaquemada', 1),
(333, 6, 333, 'Villa De Leyva', 1),
(334, 6, 334, 'Viracacha', 1),
(335, 6, 335, 'Zetaquira', 1),
(336, 7, 336, 'Aguadas', 1),
(337, 7, 337, 'Anserma', 1),
(338, 7, 338, 'Aranzazu', 1),
(339, 7, 339, 'Belalcazar', 1),
(340, 7, 340, 'Chinchina', 1),
(341, 7, 341, 'Filadelfia', 1),
(342, 7, 342, 'La Dorada', 1),
(343, 7, 343, 'La Merced', 1),
(344, 7, 344, 'Manizales', 1),
(345, 7, 345, 'Manzanares', 1),
(346, 7, 346, 'Marmato', 1),
(347, 7, 347, 'Marquetalia', 1),
(348, 7, 348, 'Marulanda', 1),
(349, 7, 349, 'Neira', 1),
(350, 7, 350, 'Norcasia', 1),
(351, 7, 351, 'Pacora', 1),
(352, 7, 352, 'Palestina', 1),
(353, 7, 353, 'Pensilvania', 1),
(354, 7, 354, 'Riosucio', 1),
(355, 7, 355, 'Risaralda', 1),
(356, 7, 356, 'Salamina', 1),
(357, 7, 357, 'Samana', 1),
(358, 7, 358, 'San Jose', 1),
(359, 7, 359, 'Supia', 1),
(360, 7, 360, 'Victoria', 1),
(361, 7, 361, 'Villamaria', 1),
(362, 7, 362, 'Viterbo', 1),
(363, 8, 363, 'Albania', 1),
(364, 8, 364, 'Belen De Los Andaquies', 1),
(365, 8, 365, 'Cartagena Del Chaira', 1),
(366, 8, 366, 'Curillo', 1),
(367, 8, 367, 'El Doncello', 1),
(368, 8, 368, 'El Paujil', 1),
(369, 8, 369, 'Florencia', 1),
(370, 8, 370, 'La Montañita', 1),
(371, 8, 371, 'Milan', 1),
(372, 8, 372, 'Morelia', 1),
(373, 8, 373, 'Puerto Rico', 1),
(374, 8, 374, 'San Jose Del Fragua', 1),
(375, 8, 375, 'San Vicente Del Caguan', 1),
(376, 8, 376, 'Solano', 1),
(377, 8, 377, 'Solita', 1),
(378, 8, 378, 'Valparaiso', 1),
(379, 9, 379, 'Aguazul', 1),
(380, 9, 380, 'Chameza', 1),
(381, 9, 381, 'Hato Corozal', 1),
(382, 9, 382, 'La Salina', 1),
(383, 9, 383, 'Mani', 1),
(384, 9, 384, 'Monterrey', 1),
(385, 9, 385, 'Nunchia', 1),
(386, 9, 386, 'Orocue', 1),
(387, 9, 387, 'Paz De Ariporo', 1),
(388, 9, 388, 'Pore', 1),
(389, 9, 389, 'Recetor', 1),
(390, 9, 390, 'Sabanalarga', 1),
(391, 9, 391, 'Sacama', 1),
(392, 9, 392, 'San Luis De Palenque', 1),
(393, 9, 393, 'Tamara', 1),
(394, 9, 394, 'Tauramena', 1),
(395, 9, 395, 'Trinidad', 1),
(396, 9, 396, 'Villanueva', 1),
(397, 9, 397, 'Yopal', 1),
(398, 10, 398, 'Almaguer', 1),
(399, 10, 399, 'Argelia', 1),
(400, 10, 400, 'Balboa', 1),
(401, 10, 401, 'Bolivar', 1),
(402, 10, 402, 'Buenos Aires', 1),
(403, 10, 403, 'Cajibio', 1),
(404, 10, 404, 'Caldono', 1),
(405, 10, 405, 'Caloto', 1),
(406, 10, 406, 'Corinto', 1),
(407, 10, 407, 'El Tambo', 1),
(408, 10, 408, 'Florencia', 1),
(409, 10, 409, 'Guachene', 1),
(410, 10, 410, 'Guapi', 1),
(411, 10, 411, 'Inza', 1),
(412, 10, 412, 'Jambalo', 1),
(413, 10, 413, 'La Sierra', 1),
(414, 10, 414, 'La Vega', 1),
(415, 10, 415, 'Lopez', 1),
(416, 10, 416, 'Mercaderes', 1),
(417, 10, 417, 'Miranda', 1),
(418, 10, 418, 'Morales', 1),
(419, 10, 419, 'Padilla', 1),
(420, 10, 420, 'Paez', 1),
(421, 10, 421, 'Patia', 1),
(422, 10, 422, 'Piamonte', 1),
(423, 10, 423, 'Piendamo', 1),
(424, 10, 424, 'Popayan', 1),
(425, 10, 425, 'Puerto Tejada', 1),
(426, 10, 426, 'Purace', 1),
(427, 10, 427, 'Rosas', 1),
(428, 10, 428, 'San Sebastian', 1),
(429, 10, 429, 'Santa Rosa', 1),
(430, 10, 430, 'Santander De Quilichao', 1),
(431, 10, 431, 'Silvia', 1),
(432, 10, 432, 'Sotara', 1),
(433, 10, 433, 'Suarez', 1),
(434, 10, 434, 'Sucre', 1),
(435, 10, 435, 'Timbio', 1),
(436, 10, 436, 'Timbiqui', 1),
(437, 10, 437, 'Toribio', 1),
(438, 10, 438, 'Totoro', 1),
(439, 10, 439, 'Villa Rica', 1),
(440, 11, 440, 'Aguachica', 1),
(441, 11, 441, 'Agustin Codazzi', 1),
(442, 11, 442, 'Astrea', 1),
(443, 11, 443, 'Becerril', 1),
(444, 11, 444, 'Bosconia', 1),
(445, 11, 445, 'Chimichagua', 1),
(446, 11, 446, 'Chiriguana', 1),
(447, 11, 447, 'Curumani', 1),
(448, 11, 448, 'El Copey', 1),
(449, 11, 449, 'El Paso', 1),
(450, 11, 450, 'Gamarra', 1),
(451, 11, 451, 'Gonzalez', 1),
(452, 11, 452, 'La Gloria', 1),
(453, 11, 453, 'La Jagua De Ibirico', 1),
(454, 11, 454, 'La Paz', 1),
(455, 11, 455, 'Manaure', 1),
(456, 11, 456, 'Pailitas', 1),
(457, 11, 457, 'Pelaya', 1),
(458, 11, 458, 'Pueblo Bello', 1),
(459, 11, 459, 'Rio De Oro', 1),
(460, 11, 460, 'San Alberto', 1),
(461, 11, 461, 'San Diego', 1),
(462, 11, 462, 'San Martin', 1),
(463, 11, 463, 'Tamalameque', 1),
(464, 11, 464, 'Valledupar', 1),
(465, 12, 465, 'Acandi', 1),
(466, 12, 466, 'Alto Baudo', 1),
(467, 12, 467, 'Atrato', 1),
(468, 12, 468, 'Bagado', 1),
(469, 12, 469, 'Bahia Solano', 1),
(470, 12, 470, 'Bajo Baudo', 1),
(471, 12, 471, 'Bojaya', 1),
(472, 12, 472, 'Carmen Del Darien', 1),
(473, 12, 473, 'Certegui', 1),
(474, 12, 474, 'Condoto', 1),
(475, 12, 475, 'El Canton Del San Pablo', 1),
(476, 12, 476, 'El Carmen De Atrato', 1),
(477, 12, 477, 'El Litoral Del San Juan', 1),
(478, 12, 478, 'Istmina', 1),
(479, 12, 479, 'Jurado', 1),
(480, 12, 480, 'Lloro', 1),
(481, 12, 481, 'Medio Atrato', 1),
(482, 12, 482, 'Medio Baudo', 1),
(483, 12, 483, 'Medio San Juan', 1),
(484, 12, 484, 'Novita', 1),
(485, 12, 485, 'Nuqui', 1),
(486, 12, 486, 'Quibdo', 1),
(487, 12, 487, 'Rio Iro', 1),
(488, 12, 488, 'Rio Quito', 1),
(489, 12, 489, 'Riosucio', 1),
(490, 12, 490, 'San Jose Del Palmar', 1),
(491, 12, 491, 'Sipi', 1),
(492, 12, 492, 'Tado', 1),
(493, 12, 493, 'Unguia', 1),
(494, 12, 494, 'Union Panamericana', 1),
(495, 13, 495, 'Ayapel', 1),
(496, 13, 496, 'Buenavista', 1),
(497, 13, 497, 'Canalete', 1),
(498, 13, 498, 'Cerete', 1),
(499, 13, 499, 'Chima', 1),
(500, 13, 500, 'Chinu', 1),
(501, 13, 501, 'Cienaga De Oro', 1),
(502, 13, 502, 'Cotorra', 1),
(503, 13, 503, 'La Apartada', 1),
(504, 13, 504, 'Lorica', 1),
(505, 13, 505, 'Los Cordobas', 1),
(506, 13, 506, 'Momil', 1),
(507, 13, 507, 'Montelibano', 1),
(508, 13, 508, 'Monteria', 1),
(509, 13, 509, 'Moñitos', 1),
(510, 13, 510, 'Planeta Rica', 1),
(511, 13, 511, 'Pueblo Nuevo', 1),
(512, 13, 512, 'Puerto Escondido', 1),
(513, 13, 513, 'Puerto Libertador', 1),
(514, 13, 514, 'Purisima', 1),
(515, 13, 515, 'Sahagun', 1),
(516, 13, 516, 'San Andres Sotavento', 1),
(517, 13, 517, 'San Antero', 1),
(518, 13, 518, 'San Bernardo Del Viento', 1),
(519, 13, 519, 'San Carlos', 1),
(520, 13, 520, 'San Pelayo', 1),
(521, 13, 521, 'Tierralta', 1),
(522, 13, 522, 'Valencia', 1),
(523, 14, 523, 'Agua De Dios', 1),
(524, 14, 524, 'Alban', 1),
(525, 14, 525, 'Anapoima', 1),
(526, 14, 526, 'Anolaima', 1),
(527, 14, 527, 'Apulo', 1),
(528, 14, 528, 'Arbelaez', 1),
(529, 14, 529, 'Beltran', 1),
(530, 14, 530, 'Bituima', 1),
(531, 14, 531, 'Bogota, D.C.', 1),
(532, 14, 532, 'Bojaca', 1),
(533, 14, 533, 'Cabrera', 1),
(534, 14, 534, 'Cachipay', 1),
(535, 14, 535, 'Cajica', 1),
(536, 14, 536, 'Caparrapi', 1),
(537, 14, 537, 'Caqueza', 1),
(538, 14, 538, 'Carmen De Carupa', 1),
(539, 14, 539, 'Chaguani', 1),
(540, 14, 540, 'Chia', 1),
(541, 14, 541, 'Chipaque', 1),
(542, 14, 542, 'Choachi', 1),
(543, 14, 543, 'Choconta', 1),
(544, 14, 544, 'Cogua', 1),
(545, 14, 545, 'Cota', 1),
(546, 14, 546, 'Cucunuba', 1),
(547, 14, 547, 'El Colegio', 1),
(548, 14, 548, 'El Peñon', 1),
(549, 14, 549, 'El Rosal', 1),
(550, 14, 550, 'Facatativa', 1),
(551, 14, 551, 'Fomeque', 1),
(552, 14, 552, 'Fosca', 1),
(553, 14, 553, 'Funza', 1),
(554, 14, 554, 'Fuquene', 1),
(555, 14, 555, 'Fusagasuga', 1),
(556, 14, 556, 'Gachala', 1),
(557, 14, 557, 'Gachancipa', 1),
(558, 14, 558, 'Gacheta', 1),
(559, 14, 559, 'Gama', 1),
(560, 14, 560, 'Girardot', 1),
(561, 14, 561, 'Granada', 1),
(562, 14, 562, 'Guacheta', 1),
(563, 14, 563, 'Guaduas', 1),
(564, 14, 564, 'Guasca', 1),
(565, 14, 565, 'Guataqui', 1),
(566, 14, 566, 'Guatavita', 1),
(567, 14, 567, 'Guayabal De Siquima', 1),
(568, 14, 568, 'Guayabetal', 1),
(569, 14, 569, 'Gutierrez', 1),
(570, 14, 570, 'Jerusalen', 1),
(571, 14, 571, 'Junin', 1),
(572, 14, 572, 'La Calera', 1),
(573, 14, 573, 'La Mesa', 1),
(574, 14, 574, 'La Palma', 1),
(575, 14, 575, 'La Peña', 1),
(576, 14, 576, 'La Vega', 1),
(577, 14, 577, 'Lenguazaque', 1),
(578, 14, 578, 'Macheta', 1),
(579, 14, 579, 'Madrid', 1),
(580, 14, 580, 'Manta', 1),
(581, 14, 581, 'Medina', 1),
(582, 14, 582, 'Mosquera', 1),
(583, 14, 583, 'Nariño', 1),
(584, 14, 584, 'Nemocon', 1),
(585, 14, 585, 'Nilo', 1),
(586, 14, 586, 'Nimaima', 1),
(587, 14, 587, 'Nocaima', 1),
(588, 14, 588, 'Pacho', 1),
(589, 14, 589, 'Paime', 1),
(590, 14, 590, 'Pandi', 1),
(591, 14, 591, 'Paratebueno', 1),
(592, 14, 592, 'Pasca', 1),
(593, 14, 593, 'Puerto Salgar', 1),
(594, 14, 594, 'Puli', 1),
(595, 14, 595, 'Quebradanegra', 1),
(596, 14, 596, 'Quetame', 1),
(597, 14, 597, 'Quipile', 1),
(598, 14, 598, 'Ricaurte', 1),
(599, 14, 599, 'San Antonio Del Tequendama', 1),
(600, 14, 600, 'San Bernardo', 1),
(601, 14, 601, 'San Cayetano', 1),
(602, 14, 602, 'San Francisco', 1),
(603, 14, 603, 'San Juan De Rio Seco', 1),
(604, 14, 604, 'Sasaima', 1),
(605, 14, 605, 'Sesquile', 1),
(606, 14, 606, 'Sibate', 1),
(607, 14, 607, 'Silvania', 1),
(608, 14, 608, 'Simijaca', 1),
(609, 14, 609, 'Soacha', 1),
(610, 14, 610, 'Sopo', 1),
(611, 14, 611, 'Subachoque', 1),
(612, 14, 612, 'Suesca', 1),
(613, 14, 613, 'Supata', 1),
(614, 14, 614, 'Susa', 1),
(615, 14, 615, 'Sutatausa', 1),
(616, 14, 616, 'Tabio', 1),
(617, 14, 617, 'Tausa', 1),
(618, 14, 618, 'Tena', 1),
(619, 14, 619, 'Tenjo', 1),
(620, 14, 620, 'Tibacuy', 1),
(621, 14, 621, 'Tibirita', 1),
(622, 14, 622, 'Tocaima', 1),
(623, 14, 623, 'Tocancipa', 1),
(624, 14, 624, 'Topaipi', 1),
(625, 14, 625, 'Ubala', 1),
(626, 14, 626, 'Ubaque', 1),
(627, 14, 627, 'Une', 1),
(628, 14, 628, 'Utica', 1),
(629, 14, 629, 'Venecia', 1),
(630, 14, 630, 'Vergara', 1),
(631, 14, 631, 'Viani', 1),
(632, 14, 632, 'Villa De San Diego De Ubate', 1),
(633, 14, 633, 'Villagomez', 1),
(634, 14, 634, 'Villapinzon', 1),
(635, 14, 635, 'Villeta', 1),
(636, 14, 636, 'Viota', 1),
(637, 14, 637, 'Yacopi', 1),
(638, 14, 638, 'Zipacon', 1),
(639, 14, 639, 'Zipaquira', 1),
(640, 15, 640, 'Barranco Minas', 1),
(641, 15, 641, 'Cacahual', 1),
(642, 15, 642, 'Inirida', 1),
(643, 15, 643, 'La Guadalupe', 1),
(644, 15, 644, 'Mapiripana', 1),
(645, 15, 645, 'Morichal', 1),
(646, 15, 646, 'Pana Pana', 1),
(647, 15, 647, 'Puerto Colombia', 1),
(648, 15, 648, 'San Felipe', 1),
(649, 16, 649, 'Calamar', 1),
(650, 16, 650, 'El Retorno', 1),
(651, 16, 651, 'Miraflores', 1),
(652, 16, 652, 'San Jose Del Guaviare', 1),
(653, 17, 653, 'Albania', 1),
(654, 17, 654, 'Barrancas', 1),
(655, 17, 655, 'Dibulla', 1),
(656, 17, 656, 'Distraccion', 1),
(657, 17, 657, 'El Molino', 1),
(658, 17, 658, 'Fonseca', 1),
(659, 17, 659, 'Hatonuevo', 1),
(660, 17, 660, 'La Jagua Del Pilar', 1),
(661, 17, 661, 'Maicao', 1),
(662, 17, 662, 'Manaure', 1),
(663, 17, 663, 'Riohacha', 1),
(664, 17, 664, 'San Juan Del Cesar', 1),
(665, 17, 665, 'Uribia', 1),
(666, 17, 666, 'Urumita', 1),
(667, 17, 667, 'Villanueva', 1),
(668, 18, 668, 'Acevedo', 1),
(669, 18, 669, 'Agrado', 1),
(670, 18, 670, 'Aipe', 1),
(671, 18, 671, 'Algeciras', 1),
(672, 18, 672, 'Altamira', 1),
(673, 18, 673, 'Baraya', 1),
(674, 18, 674, 'Campoalegre', 1),
(675, 18, 675, 'Colombia', 1),
(676, 18, 676, 'Elias', 1),
(677, 18, 677, 'Garzon', 1),
(678, 18, 678, 'Gigante', 1),
(679, 18, 679, 'Guadalupe', 1),
(680, 18, 680, 'Hobo', 1),
(681, 18, 681, 'Iquira', 1),
(682, 18, 682, 'Isnos', 1),
(683, 18, 683, 'La Argentina', 1),
(684, 18, 684, 'La Plata', 1),
(685, 18, 685, 'Nataga', 1),
(686, 18, 686, 'Neiva', 1),
(687, 18, 687, 'Oporapa', 1),
(688, 18, 688, 'Paicol', 1),
(689, 18, 689, 'Palermo', 1),
(690, 18, 690, 'Palestina', 1),
(691, 18, 691, 'Pital', 1),
(692, 18, 692, 'Pitalito', 1),
(693, 18, 693, 'Rivera', 1),
(694, 18, 694, 'Saladoblanco', 1),
(695, 18, 695, 'San Agustin', 1),
(696, 18, 696, 'Santa Maria', 1),
(697, 18, 697, 'Suaza', 1),
(698, 18, 698, 'Tarqui', 1),
(699, 18, 699, 'Tello', 1),
(700, 18, 700, 'Teruel', 1),
(701, 18, 701, 'Tesalia', 1),
(702, 18, 702, 'Timana', 1),
(703, 18, 703, 'Villavieja', 1),
(704, 18, 704, 'Yaguara', 1),
(705, 19, 705, 'Algarrobo', 1),
(706, 19, 706, 'Aracataca', 1),
(707, 19, 707, 'Ariguani', 1),
(708, 19, 708, 'Cerro San Antonio', 1),
(709, 19, 709, 'Chibolo', 1),
(710, 19, 710, 'Cienaga', 1),
(711, 19, 711, 'Concordia', 1),
(712, 19, 712, 'El Banco', 1),
(713, 19, 713, 'El Piñon', 1),
(714, 19, 714, 'El Reten', 1),
(715, 19, 715, 'Fundacion', 1),
(716, 19, 716, 'Guamal', 1),
(717, 19, 717, 'Nueva Granada', 1),
(718, 19, 718, 'Pedraza', 1),
(719, 19, 719, 'Pijiño Del Carmen', 1),
(720, 19, 720, 'Pivijay', 1),
(721, 19, 721, 'Plato', 1),
(722, 19, 722, 'Puebloviejo', 1),
(723, 19, 723, 'Remolino', 1),
(724, 19, 724, 'Sabanas De San Angel', 1),
(725, 19, 725, 'Salamina', 1),
(726, 19, 726, 'San Sebastian De Buenavista', 1),
(727, 19, 727, 'San Zenon', 1),
(728, 19, 728, 'Santa Ana', 1),
(729, 19, 729, 'Santa Barbara De Pinto', 1),
(730, 19, 730, 'Santa Marta', 1),
(731, 19, 731, 'Sitionuevo', 1),
(732, 19, 732, 'Tenerife', 1),
(733, 19, 733, 'Zapayan', 1),
(734, 19, 734, 'Zona Bananera', 1),
(735, 20, 735, 'Acacias', 1),
(736, 20, 736, 'Barranca De Upia', 1),
(737, 20, 737, 'Cabuyaro', 1),
(738, 20, 738, 'Castilla La Nueva', 1),
(739, 20, 739, 'Cubarral', 1),
(740, 20, 740, 'Cumaral', 1),
(741, 20, 741, 'El Calvario', 1),
(742, 20, 742, 'El Castillo', 1),
(743, 20, 743, 'El Dorado', 1),
(744, 20, 744, 'Fuente De Oro', 1),
(745, 20, 745, 'Granada', 1),
(746, 20, 746, 'Guamal', 1),
(747, 20, 747, 'La Macarena', 1),
(748, 20, 748, 'Lejanias', 1),
(749, 20, 749, 'Mapiripan', 1),
(750, 20, 750, 'Mesetas', 1),
(751, 20, 751, 'Puerto Concordia', 1),
(752, 20, 752, 'Puerto Gaitan', 1),
(753, 20, 753, 'Puerto Lleras', 1),
(754, 20, 754, 'Puerto Lopez', 1),
(755, 20, 755, 'Puerto Rico', 1),
(756, 20, 756, 'Restrepo', 1),
(757, 20, 757, 'San Carlos De Guaroa', 1),
(758, 20, 758, 'San Juan De Arama', 1),
(759, 20, 759, 'San Juanito', 1),
(760, 20, 760, 'San Martin', 1),
(761, 20, 761, 'Uribe', 1),
(762, 20, 762, 'Villavicencio', 1),
(763, 20, 763, 'Vistahermosa', 1),
(764, 21, 764, 'Alban', 1),
(765, 21, 765, 'Aldana', 1),
(766, 21, 766, 'Ancuya', 1),
(767, 21, 767, 'Arboleda', 1),
(768, 21, 768, 'Barbacoas', 1),
(769, 21, 769, 'Belen', 1),
(770, 21, 770, 'Buesaco', 1),
(771, 21, 771, 'Chachagsi', 1),
(772, 21, 772, 'Colon', 1),
(773, 21, 773, 'Consaca', 1),
(774, 21, 774, 'Contadero', 1),
(775, 21, 775, 'Cordoba', 1),
(776, 21, 776, 'Cuaspud', 1),
(777, 21, 777, 'Cumbal', 1),
(778, 21, 778, 'Cumbitara', 1),
(779, 21, 779, 'El Charco', 1),
(780, 21, 780, 'El Peñol', 1),
(781, 21, 781, 'El Rosario', 1),
(782, 21, 782, 'El Tablon De Gomez', 1),
(783, 21, 783, 'El Tambo', 1),
(784, 21, 784, 'Francisco Pizarro', 1),
(785, 21, 785, 'Funes', 1),
(786, 21, 786, 'Guachucal', 1),
(787, 21, 787, 'Guaitarilla', 1),
(788, 21, 788, 'Gualmatan', 1),
(789, 21, 789, 'Iles', 1),
(790, 21, 790, 'Imues', 1),
(791, 21, 791, 'Ipiales', 1),
(792, 21, 792, 'La Cruz', 1),
(793, 21, 793, 'La Florida', 1),
(794, 21, 794, 'La Llanada', 1),
(795, 21, 795, 'La Tola', 1),
(796, 21, 796, 'La Union', 1),
(797, 21, 797, 'Leiva', 1),
(798, 21, 798, 'Linares', 1),
(799, 21, 799, 'Los Andes', 1),
(800, 21, 800, 'Magsi', 1),
(801, 21, 801, 'Mallama', 1),
(802, 21, 802, 'Mosquera', 1),
(803, 21, 803, 'Nariño', 1),
(804, 21, 804, 'Olaya Herrera', 1),
(805, 21, 805, 'Ospina', 1),
(806, 21, 806, 'Pasto', 1),
(807, 21, 807, 'Policarpa', 1),
(808, 21, 808, 'Potosi', 1),
(809, 21, 809, 'Providencia', 1),
(810, 21, 810, 'Puerres', 1),
(811, 21, 811, 'Pupiales', 1),
(812, 21, 812, 'Ricaurte', 1),
(813, 21, 813, 'Roberto Payan', 1),
(814, 21, 814, 'Samaniego', 1),
(815, 21, 815, 'San Andres De Tumaco', 1),
(816, 21, 816, 'San Bernardo', 1),
(817, 21, 817, 'San Lorenzo', 1),
(818, 21, 818, 'San Pablo', 1),
(819, 21, 819, 'San Pedro De Cartago', 1),
(820, 21, 820, 'Sandona', 1),
(821, 21, 821, 'Santa Barbara', 1),
(822, 21, 822, 'Santacruz', 1),
(823, 21, 823, 'Sapuyes', 1),
(824, 21, 824, 'Taminango', 1),
(825, 21, 825, 'Tangua', 1),
(826, 21, 826, 'Tuquerres', 1),
(827, 21, 827, 'Yacuanquer', 1),
(828, 22, 828, 'Abrego', 1),
(829, 22, 829, 'Arboledas', 1),
(830, 22, 830, 'Bochalema', 1),
(831, 22, 831, 'Bucarasica', 1),
(832, 22, 832, 'Cachira', 1),
(833, 22, 833, 'Cacota', 1),
(834, 22, 834, 'Chinacota', 1),
(835, 22, 835, 'Chitaga', 1),
(836, 22, 836, 'Convencion', 1),
(837, 22, 837, 'Cucuta', 1),
(838, 22, 838, 'Cucutilla', 1),
(839, 22, 839, 'Durania', 1),
(840, 22, 840, 'El Carmen', 1),
(841, 22, 841, 'El Tarra', 1),
(842, 22, 842, 'El Zulia', 1),
(843, 22, 843, 'Gramalote', 1),
(844, 22, 844, 'Hacari', 1),
(845, 22, 845, 'Herran', 1),
(846, 22, 846, 'La Esperanza', 1),
(847, 22, 847, 'La Playa', 1),
(848, 22, 848, 'Labateca', 1),
(849, 22, 849, 'Los Patios', 1),
(850, 22, 850, 'Lourdes', 1),
(851, 22, 851, 'Mutiscua', 1),
(852, 22, 852, 'Ocaña', 1),
(853, 22, 853, 'Pamplona', 1),
(854, 22, 854, 'Pamplonita', 1),
(855, 22, 855, 'Puerto Santander', 1),
(856, 22, 856, 'Ragonvalia', 1),
(857, 22, 857, 'Salazar', 1),
(858, 22, 858, 'San Calixto', 1),
(859, 22, 859, 'San Cayetano', 1),
(860, 22, 860, 'Santiago', 1),
(861, 22, 861, 'Sardinata', 1),
(862, 22, 862, 'Silos', 1),
(863, 22, 863, 'Teorama', 1),
(864, 22, 864, 'Tibu', 1),
(865, 22, 865, 'Toledo', 1),
(866, 22, 866, 'Villa Caro', 1),
(867, 22, 867, 'Villa Del Rosario', 1),
(868, 23, 868, 'Colon', 1),
(869, 23, 869, 'Leguizamo', 1),
(870, 23, 870, 'Mocoa', 1),
(871, 23, 871, 'Orito', 1),
(872, 23, 872, 'Puerto Asis', 1),
(873, 23, 873, 'Puerto Caicedo', 1),
(874, 23, 874, 'Puerto Guzman', 1),
(875, 23, 875, 'San Francisco', 1),
(876, 23, 876, 'San Miguel', 1),
(877, 23, 877, 'Santiago', 1),
(878, 23, 878, 'Sibundoy', 1),
(879, 23, 879, 'Valle Del Guamuez', 1),
(880, 23, 880, 'Villagarzon', 1),
(881, 24, 881, 'Armenia', 1),
(882, 24, 882, 'Buenavista', 1),
(883, 24, 883, 'Calarca', 1),
(884, 24, 884, 'Circasia', 1),
(885, 24, 885, 'Cordoba', 1),
(886, 24, 886, 'Filandia', 1),
(887, 24, 887, 'Genova', 1),
(888, 24, 888, 'La Tebaida', 1),
(889, 24, 889, 'Montenegro', 1),
(890, 24, 890, 'Pijao', 1),
(891, 24, 891, 'Quimbaya', 1),
(892, 24, 892, 'Salento', 1),
(893, 25, 893, 'Apia', 1),
(894, 25, 894, 'Balboa', 1),
(895, 25, 895, 'Belen De Umbria', 1),
(896, 25, 896, 'Dosquebradas', 1),
(897, 25, 897, 'Guatica', 1),
(898, 25, 898, 'La Celia', 1),
(899, 25, 899, 'La Virginia', 1),
(900, 25, 900, 'Marsella', 1),
(901, 25, 901, 'Mistrato', 1),
(902, 25, 902, 'Pereira', 1),
(903, 25, 903, 'Pueblo Rico', 1),
(904, 25, 904, 'Quinchia', 1),
(905, 25, 905, 'Santa Rosa De Cabal', 1),
(906, 25, 906, 'Santuario', 1),
(907, 26, 907, 'Providencia', 1),
(908, 26, 908, 'San Andres', 1),
(909, 27, 909, 'Aguada', 1),
(910, 27, 910, 'Albania', 1),
(911, 27, 911, 'Aratoca', 1),
(912, 27, 912, 'Barbosa', 1),
(913, 27, 913, 'Barichara', 1),
(914, 27, 914, 'Barrancabermeja', 1),
(915, 27, 915, 'Betulia', 1),
(916, 27, 916, 'Bolivar', 1),
(917, 27, 917, 'Bucaramanga', 1),
(918, 27, 918, 'Cabrera', 1),
(919, 27, 919, 'California', 1),
(920, 27, 920, 'Capitanejo', 1),
(921, 27, 921, 'Carcasi', 1),
(922, 27, 922, 'Cepita', 1),
(923, 27, 923, 'Cerrito', 1),
(924, 27, 924, 'Charala', 1),
(925, 27, 925, 'Charta', 1),
(926, 27, 926, 'Chima', 1),
(927, 27, 927, 'Chipata', 1),
(928, 27, 928, 'Cimitarra', 1),
(929, 27, 929, 'Concepcion', 1),
(930, 27, 930, 'Confines', 1),
(931, 27, 931, 'Contratacion', 1),
(932, 27, 932, 'Coromoro', 1),
(933, 27, 933, 'Curiti', 1),
(934, 27, 934, 'El Carmen De Chucuri', 1),
(935, 27, 935, 'El Guacamayo', 1),
(936, 27, 936, 'El Peñon', 1),
(937, 27, 937, 'El Playon', 1),
(938, 27, 938, 'Encino', 1),
(939, 27, 939, 'Enciso', 1),
(940, 27, 940, 'Florian', 1),
(941, 27, 941, 'Floridablanca', 1),
(942, 27, 942, 'Galan', 1),
(943, 27, 943, 'Gambita', 1),
(944, 27, 944, 'Giron', 1),
(945, 27, 945, 'Gsepsa', 1),
(946, 27, 946, 'Guaca', 1),
(947, 27, 947, 'Guadalupe', 1),
(948, 27, 948, 'Guapota', 1),
(949, 27, 949, 'Guavata', 1),
(950, 27, 950, 'Hato', 1),
(951, 27, 951, 'Jesus Maria', 1),
(952, 27, 952, 'Jordan', 1),
(953, 27, 953, 'La Belleza', 1),
(954, 27, 954, 'La Paz', 1),
(955, 27, 955, 'Landazuri', 1),
(956, 27, 956, 'Lebrija', 1),
(957, 27, 957, 'Los Santos', 1),
(958, 27, 958, 'Macaravita', 1),
(959, 27, 959, 'Malaga', 1),
(960, 27, 960, 'Matanza', 1),
(961, 27, 961, 'Mogotes', 1),
(962, 27, 962, 'Molagavita', 1),
(963, 27, 963, 'Ocamonte', 1),
(964, 27, 964, 'Oiba', 1),
(965, 27, 965, 'Onzaga', 1),
(966, 27, 966, 'Palmar', 1),
(967, 27, 967, 'Palmas Del Socorro', 1),
(968, 27, 968, 'Paramo', 1),
(969, 27, 969, 'Piedecuesta', 1),
(970, 27, 970, 'Pinchote', 1),
(971, 27, 971, 'Puente Nacional', 1),
(972, 27, 972, 'Puerto Parra', 1),
(973, 27, 973, 'Puerto Wilches', 1),
(974, 27, 974, 'Rionegro', 1),
(975, 27, 975, 'Sabana De Torres', 1),
(976, 27, 976, 'San Andres', 1),
(977, 27, 977, 'San Benito', 1),
(978, 27, 978, 'San Gil', 1),
(979, 27, 979, 'San Joaquin', 1),
(980, 27, 980, 'San Jose De Miranda', 1),
(981, 27, 981, 'San Miguel', 1),
(982, 27, 982, 'San Vicente De Chucuri', 1),
(983, 27, 983, 'Santa Barbara', 1),
(984, 27, 984, 'Santa Helena Del Opon', 1),
(985, 27, 985, 'Simacota', 1),
(986, 27, 986, 'Socorro', 1),
(987, 27, 987, 'Suaita', 1),
(988, 27, 988, 'Sucre', 1),
(989, 27, 989, 'Surata', 1),
(990, 27, 990, 'Tona', 1),
(991, 27, 991, 'Valle De San Jose', 1),
(992, 27, 992, 'Velez', 1),
(993, 27, 993, 'Vetas', 1),
(994, 27, 994, 'Villanueva', 1),
(995, 27, 995, 'Zapatoca', 1),
(996, 28, 996, 'Buenavista', 1),
(997, 28, 997, 'Caimito', 1),
(998, 28, 998, 'Chalan', 1),
(999, 28, 999, 'Coloso', 1),
(1000, 28, 1000, 'Corozal', 1),
(1001, 28, 1001, 'Coveñas', 1),
(1002, 28, 1002, 'El Roble', 1),
(1003, 28, 1003, 'Galeras', 1),
(1004, 28, 1004, 'Guaranda', 1),
(1005, 28, 1005, 'La Union', 1),
(1006, 28, 1006, 'Los Palmitos', 1),
(1007, 28, 1007, 'Majagual', 1),
(1008, 28, 1008, 'Morroa', 1),
(1009, 28, 1009, 'Ovejas', 1),
(1010, 28, 1010, 'Palmito', 1),
(1011, 28, 1011, 'Sampues', 1),
(1012, 28, 1012, 'San Benito Abad', 1),
(1013, 28, 1013, 'San Juan De Betulia', 1),
(1014, 28, 1014, 'San Luis De Since', 1),
(1015, 28, 1015, 'San Marcos', 1),
(1016, 28, 1016, 'San Onofre', 1),
(1017, 28, 1017, 'San Pedro', 1),
(1018, 28, 1018, 'Santiago De Tolu', 1),
(1019, 28, 1019, 'Sincelejo', 1),
(1020, 28, 1020, 'Sucre', 1),
(1021, 28, 1021, 'Tolu Viejo', 1),
(1022, 29, 1022, 'Alpujarra', 1),
(1023, 29, 1023, 'Alvarado', 1),
(1024, 29, 1024, 'Ambalema', 1),
(1025, 29, 1025, 'Anzoategui', 1),
(1026, 29, 1026, 'Armero', 1),
(1027, 29, 1027, 'Ataco', 1),
(1028, 29, 1028, 'Cajamarca', 1),
(1029, 29, 1029, 'Carmen De Apicala', 1),
(1030, 29, 1030, 'Casabianca', 1),
(1031, 29, 1031, 'Chaparral', 1),
(1032, 29, 1032, 'Coello', 1),
(1033, 29, 1033, 'Coyaima', 1),
(1034, 29, 1034, 'Cunday', 1),
(1035, 29, 1035, 'Dolores', 1),
(1036, 29, 1036, 'Espinal', 1),
(1037, 29, 1037, 'Falan', 1),
(1038, 29, 1038, 'Flandes', 1),
(1039, 29, 1039, 'Fresno', 1),
(1040, 29, 1040, 'Guamo', 1),
(1041, 29, 1041, 'Herveo', 1),
(1042, 29, 1042, 'Honda', 1),
(1043, 29, 1043, 'Ibague', 1),
(1044, 29, 1044, 'Icononzo', 1),
(1045, 29, 1045, 'Lerida', 1),
(1046, 29, 1046, 'Libano', 1),
(1047, 29, 1047, 'Mariquita', 1),
(1048, 29, 1048, 'Melgar', 1),
(1049, 29, 1049, 'Murillo', 1),
(1050, 29, 1050, 'Natagaima', 1),
(1051, 29, 1051, 'Ortega', 1),
(1052, 29, 1052, 'Palocabildo', 1),
(1053, 29, 1053, 'Piedras', 1),
(1054, 29, 1054, 'Planadas', 1),
(1055, 29, 1055, 'Prado', 1),
(1056, 29, 1056, 'Purificacion', 1),
(1057, 29, 1057, 'Rioblanco', 1),
(1058, 29, 1058, 'Roncesvalles', 1),
(1059, 29, 1059, 'Rovira', 1),
(1060, 29, 1060, 'Saldaña', 1),
(1061, 29, 1061, 'San Antonio', 1),
(1062, 29, 1062, 'San Luis', 1),
(1063, 29, 1063, 'Santa Isabel', 1),
(1064, 29, 1064, 'Suarez', 1),
(1065, 29, 1065, 'Valle De San Juan', 1),
(1066, 29, 1066, 'Venadillo', 1),
(1067, 29, 1067, 'Villahermosa', 1),
(1068, 29, 1068, 'Villarrica', 1),
(1069, 30, 1069, 'Alcala', 1),
(1070, 30, 1070, 'Andalucia', 1),
(1071, 30, 1071, 'Ansermanuevo', 1),
(1072, 30, 1072, 'Argelia', 1),
(1073, 30, 1073, 'Bolivar', 1),
(1074, 30, 1074, 'Buenaventura', 1),
(1075, 30, 1075, 'Bugalagrande', 1),
(1076, 30, 1076, 'Caicedonia', 1),
(1077, 30, 1077, 'Cali', 1),
(1078, 30, 1078, 'Calima', 1),
(1079, 30, 1079, 'Candelaria', 1),
(1080, 30, 1080, 'Cartago', 1),
(1081, 30, 1081, 'Dagua', 1),
(1082, 30, 1082, 'El Aguila', 1),
(1083, 30, 1083, 'El Cairo', 1),
(1084, 30, 1084, 'El Cerrito', 1),
(1085, 30, 1085, 'El Dovio', 1),
(1086, 30, 1086, 'Florida', 1),
(1087, 30, 1087, 'Ginebra', 1),
(1088, 30, 1088, 'Guacari', 1),
(1089, 30, 1089, 'Guadalajara De Buga', 1),
(1090, 30, 1090, 'Jamundi', 1),
(1091, 30, 1091, 'La Cumbre', 1),
(1092, 30, 1092, 'La Union', 1),
(1093, 30, 1093, 'La Victoria', 1),
(1094, 30, 1094, 'Obando', 1),
(1095, 30, 1095, 'Palmira', 1),
(1096, 30, 1096, 'Pradera', 1),
(1097, 30, 1097, 'Restrepo', 1),
(1098, 30, 1098, 'Riofrio', 1),
(1099, 30, 1099, 'Roldanillo', 1),
(1100, 30, 1100, 'San Pedro', 1),
(1101, 30, 1101, 'Sevilla', 1),
(1102, 30, 1102, 'Toro', 1),
(1103, 30, 1103, 'Trujillo', 1),
(1104, 30, 1104, 'Tulua', 1),
(1105, 30, 1105, 'Ulloa', 1),
(1106, 30, 1106, 'Versalles', 1),
(1107, 30, 1107, 'Vijes', 1),
(1108, 30, 1108, 'Yotoco', 1),
(1109, 30, 1109, 'Yumbo', 1),
(1110, 30, 1110, 'Zarzal', 1),
(1111, 31, 1111, 'Caruru', 1),
(1112, 31, 1112, 'Mitu', 1),
(1113, 31, 1113, 'Pacoa', 1),
(1114, 31, 1114, 'Papunaua', 1),
(1115, 31, 1115, 'Taraira', 1),
(1116, 31, 1116, 'Yavarate', 1),
(1117, 32, 1117, 'Cumaribo', 1),
(1118, 32, 1118, 'La Primavera', 1),
(1119, 32, 1119, 'Puerto Carreño', 1),
(1120, 32, 1120, 'Santa Rosalia', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbocupaciones`
--

DROP TABLE IF EXISTS `tbocupaciones`;
CREATE TABLE `tbocupaciones` (
  `idOcupacion` int(11) NOT NULL,
  `nomOcupacion` varchar(40) NOT NULL,
  `status` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbocupaciones`
--

INSERT INTO `tbocupaciones` (`idOcupacion`, `nomOcupacion`, `status`) VALUES
(1, 'COMERCIANTES', 1),
(2, 'ABOGADO', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tborganizacion`
--

DROP TABLE IF EXISTS `Tborganizacion`;
CREATE TABLE `Tborganizacion` (
  `idOrg`         int not NULL primary key auto_increment,
  `nitDni`        varchar(15) DEFAULT '',
  `nroPisos`      int DEFAULT 0,
  `desGeneral1`   varchar(250) DEFAULT '',
  `desGeneral2`   varchar(250) DEFAULT '',  
  `idCiudad`      int DEFAULT 0,
  `nombOrg`       varchar(60) DEFAULT '',
  `dirbOrg`       varchar(50) DEFAULT '',
  `noTelf1`       varchar(15) DEFAULT '',
  `noTelf2`       varchar(15) DEFAULT '',
  `emailOrg`      varchar(100) DEFAULT '',
  `nroHabXpiso`   int DEFAULT 0,
  `aforoPersonas` int DEFAULT 0,
  `rutaImagen`    varchar(100) DEFAULT '',
  `status`        tinyint  not null DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tborganizacion`
--

insert into `Tborganizacion`  values(1  ,  '11111'   ,   2  ,'Situada en la vía Tocaima – Viotá y está especialmente diseñada para descansar y descomunicarse del mundo exterior, gozando de una piscina cómoda, mangos y limones propios de la finca. La cabaña cuenta con las siguientes características:'   ,   'Si quieres dedicarte a contemplar la naturaleza, tienes las aguas cristalinas que han descendido desde lo alto de los picos nevados,'   ,  39  ,  ' Hotel numero-1'  ,  'direccion del hotel-1'  ,  '315-315-3010'  ,  '320-315-2015'  ,  'correohotelnumero148@correo.com'  ,  10  ,  96  ,  'dir1/imgHotel/'  ,  1);
insert into `Tborganizacion`  values(2  ,  '11112'   ,   1  ,'Habitacion con vista al mar amobladas'   ,   'El arco iris se derritió y está en La Macarena, viaja en un río de 5 colores: amarillo, azul, rojo, verde y rosado, principalmente.'   ,  39  ,  ' Hotel numero-2'  ,  'direccion del hotel-2'  ,  '315-315-3031'  ,  '320-315-2231'  ,  'correohotelnumero147@correo.com'  ,  5  ,  80  ,  'dir2/imgHotel/'  ,  1);
insert into `Tborganizacion`  values(3  ,  '11113'   ,   1  ,'Hermosos paisajes de Antioquia'   ,   'En los departamentos de Huila y Tolima, (entre los que se encuentra este desierto), se celebran las fiestas de San Pedro y San Juan, y el Festival Folclórico y Reinado para Nacional del Bambuco'   ,  39  ,  ' Hotel numero-3'  ,  'direccion del hotel-3'  ,  '315-315-3052'  ,  '320-315-2447'  ,  'correohotelnumero160@correo.com'  ,  4  ,  99  ,  'dir3/imgHotel/'  ,  1);
insert into `Tborganizacion`  values(4  ,  '11114'   ,   2  ,'El Bleu Hills Glamping Llanogrande está situado en Rionegro, en la región de Antioquia, y ofrece alojamiento con aparcamiento privado gratuito y acceso a una bañera de hidromasaje.'   ,   'A los pies del Pilón de Azúcar, un monte que funciona como atractivo turístico, se extiende la Playa de Oro, cuyo color le da el nombre y que se presta para descansar en la misma con una sombra natural hasta eso de las 2:00 p.m'   ,  39  ,  ' Hotel numero-4'  ,  'direccion del hotel-4'  ,  '315-315-3073'  ,  '320-315-2663'  ,  'correohotelnumero142@correo.com'  ,  10  ,  115  ,  'dir4/imgHotel/'  ,  1);
insert into `Tborganizacion`  values(5  ,  '11115'   ,   1  ,'El Chalet Ecoturismo La Nohelia, situado en Jericó, rodeado por los cultivos de café famosos de la zona, ofrece restaurante y préstamo de bicicletas.'   ,   ' por el avistamiento de las ballenas yubartas que, huyendo de las aguas frías de la Antártida, llegan hasta estas costas para aparearse en la región que se ha denominado la salacuna de estos mamíferos y para los colombianos.'   ,  39  ,  ' Hotel numero-5'  ,  'direccion del hotel-5'  ,  '315-315-3094'  ,  '320-315-2879'  ,  'correohotelnumero145@correo.com'  ,  5  ,  95  ,  'dir5/imgHotel/'  ,  1);
insert into `Tborganizacion`  values(6  ,  '11116'   ,   2  ,'El Santa Fé Hostel se encuentra a 3,8 km del parque acuático Kanaloa. El camping proporciona WiFi gratuita. El aeropuerto Olaya Herrera, el más cercano, está a 62 km del camping.'   ,   'las caminatas o cabalgatas que se ofrecen este santuario natural ubicado dentro del Parque Nacional de los Nevados o de sus hermosos jardines'   ,  39  ,  ' Hotel numero-6'  ,  'direccion del hotel-6'  ,  '315-315-3115'  ,  '320-315-3095'  ,  'correohotelnumero108@correo.com'  ,  7  ,  97  ,  'dir6/imgHotel/'  ,  1);
insert into `Tborganizacion`  values(7  ,  '11117'   ,   2  ,'El Aguayacanes se encuentra en San Rafael y ofrece un jardín. Guatapé se encuentra a 15 km del camping, mientras que Barbosa está a 38 km.'   ,   'Este volcán se eleva hasta los 5.400 mt. de altura y si subes, te encontrarás con la nieve hacia los 4.800 mt.; desde 1.985 la capa de nieve ha venido reduciéndose'   ,  39  ,  ' Hotel numero-7'  ,  'direccion del hotel-7'  ,  '315-315-3136'  ,  '320-315-3311'  ,  'correohotelnumero191@correo.com'  ,  10  ,  90  ,  'dir7/imgHotel/'  ,  1);
insert into `Tborganizacion`  values(8  ,  '11118'   ,   2  ,'Colombia cuenta con un sistema de Parques Nacionales Naturales que permite al visitante apreciar la majestuosidad de nuestra geografía, así como la riqueza de nuestra fauna y flora. Conoce algunas curiosidades de Colombia '   ,   'La Laguna de la Plaza, el Púlpito del diablo o el Pan de azúcar, permanecen en la memoria de los más aventureros. Aquí puedes practicar senderismo, montañismo y escalada'   ,  39  ,  ' Hotel numero-8'  ,  'direccion del hotel-8'  ,  '315-315-3157'  ,  '320-315-3527'  ,  'correohotelnumero144@correo.com'  ,  10  ,  111  ,  'dir8/imgHotel/'  ,  1);
insert into `Tborganizacion`  values(9  ,  '11119'   ,   2  ,' El primer Parque Nacional Natural de Colombia fue La Cueva de los Guácharos, declarado el 9 de noviembre de 1960. Por esa razón, en esta fecha se celebra el Día de los Parques Naturales en nuestro país. '   ,   'Reserva Natural Victoria Regia, que lleva el nombre del nenúfar o lirio de agua más grande entre todos y que solo se da en La Amazonía'   ,  39  ,  ' Hotel numero-9'  ,  'direccion del hotel-9'  ,  '315-315-3178'  ,  '320-315-3743'  ,  'correohotelnumero125@correo.com'  ,  9  ,  119  ,  'dir9/imgHotel/'  ,  1);
insert into `Tborganizacion`  values(10  ,  '11120'   ,   1  ,'El Parque Nacional Natural Uramba Bahía Málaga.  se ubica en las costas del pacífico colombiano y es reconocido internacionalmente por ser un privilegiado escenario para apreciar la migración de ballenas jorobadas'   ,   'El Monumento a la Santandereanidad, el torrentismo, visitar el mercado campesino o entrar al Acuaparque Nacional del Chicamocha, pueden ser algunos de los planes a realizar en este increíble parque'   ,  39  ,  ' Hotel numero-10'  ,  'direccion del hotel-10'  ,  '315-315-3199'  ,  '320-315-3959'  ,  'correohotelnumero165@correo.com'  ,  1  ,  70  ,  'dir10/imgHotel/'  ,  1);
insert into `Tborganizacion`  values(11  ,  '11121'   ,   3  ,'El Parque Las Orquídeas se presenta como uno de los lugares ideales para observar nuestra diversidad de flora y fauna.'   ,   'Se encuentra en medio del océano Atlántico, conocida por su clima, en la que podemos encontrar maravillosos paisajes, playas de piedras, acantilados increíbles , bosques frondosos y algunos de los mejores parques botánicos del mundo'   ,  39  ,  ' Hotel numero-11'  ,  'direccion del hotel-11'  ,  '315-315-3220'  ,  '320-315-4175'  ,  'correohotelnumero110@correo.com'  ,  7  ,  144  ,  'dir11/imgHotel/'  ,  1);
insert into `Tborganizacion`  values(12  ,  '11122'   ,   3  ,'Las 15.000 hectáreas del Parque Natural Nacional Tayrona ofrecen al visitante una paradisíaca combinación de naturaleza, historia precolombina, aventura y relajación.'   ,   'Se puede llegar a este lugar para explorar las minas de sal que están abiertas al público, donde se pueden apreciar los increíbles espejos de agua adecuados con hermosa iluminación'   ,  39  ,  ' Hotel numero-12'  ,  'direccion del hotel-12'  ,  '315-315-3241'  ,  '320-315-4391'  ,  'correohotelnumero118@correo.com'  ,  10  ,  158  ,  'dir12/imgHotel/'  ,  1);
insert into `Tborganizacion`  values(13  ,  '11123'   ,   3  ,'La Playa La Aguada, ubicada en el Parque Natural Utría, es la primera playa de Colombia con certificación en turismo sostenible.'   ,   'El Tuparro es una reserva natural que ofrece al visitante hermosos ríos, gran variedad de vegetación, la posibilidad de ver jaguares, tapires y animales de la región, además de cientos de especies de aves'   ,  39  ,  ' Hotel numero-13'  ,  'direccion del hotel-13'  ,  '315-315-3262'  ,  '320-315-4607'  ,  'correohotelnumero120@correo.com'  ,  7  ,  128  ,  'dir13/imgHotel/'  ,  1);
insert into `Tborganizacion`  values(14  ,  '11124'   ,   2  ,'Colombia es uno de los países con más biodiversidad en el mundo, los colores, la fauna y la flora que lo caracterizan son motivo de orgullo.'   ,   'Ofrece paisajes espectaculares pasando por desiertos, playas, bahías con flamencos rosados y gigantes dunas de arena dorada. '   ,  39  ,  ' Hotel numero-14'  ,  'direccion del hotel-14'  ,  '315-315-3283'  ,  '320-315-4823'  ,  'correohotelnumero192@correo.com'  ,  1  ,  115  ,  'dir14/imgHotel/'  ,  1);
insert into `Tborganizacion`  values(15  ,  '11125'   ,   1  ,'Parque Nacional Natural Amacayacu,  en el Amazonas, con más de 40 años de historia representa el 40% del Trapecio Amazónico y debido a su ecosistema de selva húmeda tropical cálida y bosques inundables'   ,   ' Caño Cristales, llamado por muchos como el “río más hermoso del mundo”. Esto es debido a los diversos colores que se pueden observar en el fondo gracias a la presencia de plantas acuáticas que le dan esas tonalidades características'   ,  39  ,  ' Hotel numero-15'  ,  'direccion del hotel-15'  ,  '315-315-3304'  ,  '320-315-5039'  ,  'correohotelnumero166@correo.com'  ,  5  ,  68  ,  'dir15/imgHotel/'  ,  1);
insert into `Tborganizacion`  values(16  ,  '11126'   ,   2  ,'Parque Nacional Natural Farallones de Cali, son formaciones rocosas que se encuentran en la Cordillera Occidental de los Andes. Si tu elección es la vertiente oriental, la recomendación es ir en enero y marzo y luego de julio a agosto.'   ,   'Una hermosa reserva donde se observa el paso del río en medio de un cañón con hermosas formaciones en mármol. En Río Claro se pueden hacer actividades como rafting, canopy, exploración de las cavernas y avistamiento de aves.'   ,  39  ,  ' Hotel numero-16'  ,  'direccion del hotel-16'  ,  '315-315-3325'  ,  '320-315-5255'  ,  'correohotelnumero109@correo.com'  ,  4  ,  113  ,  'dir16/imgHotel/'  ,  1);
insert into `Tborganizacion`  values(17  ,  '11127'   ,   1  ,'Santuario de Fauna y Flora Otún Quimbaya, Ubicado en el flanco occidental de la Cordillera Central, en el departamento de Risaralda, el Santuario de Fauna y Flora Otún Quimbaya es un destino ecoturístico del Paisaje Cultural Cafetero.'   ,   'Una montaña que sobresale entre la selva, y con toda razón, ya que en ella se observan una serie de pinturas rupestres que conforman un hermoso mural de color rojizo y de gran valor histórico'   ,  39  ,  ' Hotel numero-17'  ,  'direccion del hotel-17'  ,  '315-315-3346'  ,  '320-315-5471'  ,  'correohotelnumero139@correo.com'  ,  3  ,  73  ,  'dir17/imgHotel/'  ,  1);
insert into `Tborganizacion`  values(18  ,  '11128'   ,   1  ,'Parque Nacional Natural Tatamá,  podrás conocer tres importantes páramos colombianos, el Tatamá, el Frontino y el Duende, sin duda será una experiencia invaluable que te hará disfrutar de la biodiversidad colombiana.'   ,   'No hay carros ni motos, todo el pueblo se recorre a pie, y hay un mirador para disfrutar la espectacular vista que este pueblo tiene para ofrecer.'   ,  39  ,  ' Hotel numero-18'  ,  'direccion del hotel-18'  ,  '315-315-3367'  ,  '320-315-5687'  ,  'correohotelnumero140@correo.com'  ,  5  ,  79  ,  'dir18/imgHotel/'  ,  1);
insert into `Tborganizacion`  values(19  ,  '11129'   ,   2  ,'Reserva Natural Cañón del Río Claro Ubicado en Antioquia, la biodiversidad de esta región es conocida como la cuenca media del Río Magdalena, además está situada en el piedemonte oriental de la Cordillera Central colombiana.'   ,   'La construcción es de estilo neogótico y está hecha en piedra gris y blanca. Ha sido catalogada como una de las iglesias más bonitas del mundo por el diario británico The Telegraph'   ,  39  ,  ' Hotel numero-19'  ,  'direccion del hotel-19'  ,  '315-315-3388'  ,  '320-315-5903'  ,  'correohotelnumero131@correo.com'  ,  8  ,  115  ,  'dir19/imgHotel/'  ,  1);
insert into `Tborganizacion`  values(20  ,  '11130'   ,   1  ,'Parque Nacional Natural Las Orquídeas,  sus variados paisajes, además de una gran biodiversidad de ecosistemas, abundantes orquídeas y otras especies asociadas.'   ,   'Esta área protegida de 6 km cuadrados, alberga formaciones milenarias creadas a partir del viento y el agua y que ha dado lugar a columnas, pedestales cuevas y cavernas, que forman un paisaje único de formas quebradizas y erosionadas.'   ,  39  ,  ' Hotel numero-20'  ,  'direccion del hotel-20'  ,  '315-315-3409'  ,  '320-315-6119'  ,  'correohotelnumero186@correo.com'  ,  3  ,  67  ,  'dir20/imgHotel/'  ,  1);
insert into `Tborganizacion`  values(21  ,  '11131'   ,   1  ,'Situada en la vía Tocaima – Viotá y está especialmente diseñada para descansar y descomunicarse del mundo exterior, gozando de una piscina cómoda, mangos y limones propios de la finca. La cabaña cuenta con las siguientes características:'   ,   'Parque Natural Chingaza se encuentra entre los 800 y 4.020 msnm. Extensión es de 53.385 hectáreas y tiene cuatro tipos de clima: cálido, templado, frío y páramo. La temperatura oscila entre los 4 y los 21.5 grados centígrados'   ,  39  ,  ' Hotel numero-21'  ,  'direccion del hotel-21'  ,  '315-315-3410'  ,  '320-315-6120'  ,  'correohotelnumero106@correo.com'  ,  5  ,  75  ,  'dir21/imgHotel/'  ,  1);
insert into `Tborganizacion`  values(22  ,  '11132'   ,   2  ,'Habitacion con vista al mar amobladas'   ,   'El Cañón de Chicamocha estuvo nominado para ser incluído como una de las siete maravillas naturales del mundo. Es uno de los principales atractivos de Santander, pues sus paradisíacos paisajes lo convierten en un espectáculo visual único'   ,  39  ,  ' Hotel numero-22'  ,  'direccion del hotel-22'  ,  '315-315-3411'  ,  '320-315-6121'  ,  'correohotelnumero128@correo.com'  ,  10  ,  97  ,  'dir22/imgHotel/'  ,  1);
insert into `Tborganizacion`  values(23  ,  '11133'   ,   1  ,'Hermosos paisajes de Antioquia'   ,   'Los bosques andinos, páramos y glaciar son sus ecosistemas predominantes.  cuenta con hermosos paisajes formados por las cuencas hidrográficas de algunos ríos, como: el Totarito, el Azufrado, el Otún, Gualí y el Campoalegre, entre otros.'   ,  39  ,  ' Hotel numero-23'  ,  'direccion del hotel-23'  ,  '315-315-3412'  ,  '320-315-6122'  ,  'correohotelnumero162@correo.com'  ,  5  ,  53  ,  'dir23/imgHotel/'  ,  1);
insert into `Tborganizacion`  values(24  ,  '11134'   ,   2  ,'El Bleu Hills Glamping Llanogrande está situado en Rionegro, en la región de Antioquia, y ofrece alojamiento con aparcamiento privado gratuito y acceso a una bañera de hidromasaje.'   ,   'Este nevado tiene una altura de 5.220 posee la masa glaciar más pequeña de Colombia.  Sus paisajes llaman la atención de montañistas de todo el mundo, quienes asumen el reto de escalar la majestuosa montaña'   ,  39  ,  ' Hotel numero-24'  ,  'direccion del hotel-24'  ,  '315-315-3413'  ,  '320-315-6123'  ,  'correohotelnumero119@correo.com'  ,  4  ,  99  ,  'dir24/imgHotel/'  ,  1);
insert into `Tborganizacion`  values(25  ,  '11135'   ,   3  ,'El Chalet Ecoturismo La Nohelia, situado en Jericó, rodeado por los cultivos de café famosos de la zona, ofrece restaurante y préstamo de bicicletas.'   ,   'Conocido también con el nombre de Paramillo del Cisne.  ubicado en la Cordillera Central, en el interior del Parque Nacional Natural Los Nevados. Tiene una altura de 4.636 msnm.'   ,  39  ,  ' Hotel numero-25'  ,  'direccion del hotel-25'  ,  '315-315-3414'  ,  '320-315-6124'  ,  'correohotelnumero184@correo.com'  ,  7  ,  172  ,  'dir25/imgHotel/'  ,  1);
insert into `Tborganizacion`  values(26  ,  '11136'   ,   1  ,'El Santa Fé Hostel se encuentra a 3,8 km del parque acuático Kanaloa. El camping proporciona WiFi gratuita. El aeropuerto Olaya Herrera, el más cercano, está a 62 km del camping.'   ,   'Sus paisajes de caminos empedrados y grandes rocas blancas, ascienden hacia los vestigios de lo que fue el hábitat de los antepasados prehispánicos, asentados en las partes altas y en el litoral, desde los siglos VI y VII y hasta el siglo XVI.'   ,  39  ,  ' Hotel numero-26'  ,  'direccion del hotel-26'  ,  '315-315-3415'  ,  '320-315-6125'  ,  'correohotelnumero105@correo.com'  ,  3  ,  66  ,  'dir26/imgHotel/'  ,  1);
insert into `Tborganizacion`  values(27  ,  '11137'   ,   1  ,'El Aguayacanes se encuentra en San Rafael y ofrece un jardín. Guatapé se encuentra a 15 km del camping, mientras que Barbosa está a 38 km.'   ,   'La principal ciudad turística del golfo es Tolú. A cinco kilómetros de su centro, se encuentran «Las Playas del Francés», cuyos paisajes se caracterizan por sus arenas blancas.'   ,  39  ,  ' Hotel numero-27'  ,  'direccion del hotel-27'  ,  '315-315-3416'  ,  '320-315-6126'  ,  'correohotelnumero159@correo.com'  ,  1  ,  85  ,  'dir27/imgHotel/'  ,  1);
insert into `Tborganizacion`  values(28  ,  '11138'   ,   1  ,'Colombia cuenta con un sistema de Parques Nacionales Naturales que permite al visitante apreciar la majestuosidad de nuestra geografía, así como la riqueza de nuestra fauna y flora. Conoce algunas curiosidades de Colombia '   ,   'En esta península estan los hermosísimos paisajes del Cabo de la Vela, un imponente terreno desértico habitado, en su mayoría, por la cultura wayúu. Los indígenas le llaman Jepirra. Para ellos, se trata de un territorio sagrado.'   ,  39  ,  ' Hotel numero-28'  ,  'direccion del hotel-28'  ,  '315-315-3417'  ,  '320-315-6127'  ,  'correohotelnumero177@correo.com'  ,  2  ,  59  ,  'dir28/imgHotel/'  ,  1);
insert into `Tborganizacion`  values(29  ,  '11139'   ,   1  ,' El primer Parque Nacional Natural de Colombia fue La Cueva de los Guácharos, declarado el 9 de noviembre de 1960. Por esa razón, en esta fecha se celebra el Día de los Parques Naturales en nuestro país. '   ,   'Impactantes paisajes que ofrece la montaña más alta de Colombia, compuestos por los valles que forman los ríos Ranchería y Cesar. Se encuentra el Parque Arqueológico Teyuna “Ciudad Perdida”, es una inimaginable de bellísimos paisajes.'   ,  39  ,  ' Hotel numero-29'  ,  'direccion del hotel-29'  ,  '315-315-3418'  ,  '320-315-6128'  ,  'correohotelnumero107@correo.com'  ,  4  ,  67  ,  'dir29/imgHotel/'  ,  1);
insert into `Tborganizacion`  values(30  ,  '11140'   ,   2  ,'El Parque Nacional Natural Uramba Bahía Málaga.  se ubica en las costas del pacífico colombiano y es reconocido internacionalmente por ser un privilegiado escenario para apreciar la migración de ballenas jorobadas'   ,   'Contiene una gran variedad de ecosistemas que van desde el selvático hasta el marino, dando vida a paisajes majestuosos formados por manglares, arrecifes coralinos, estuarios y fondo marino y litoral de más de 10.000 hectáreas de Océano'   ,  39  ,  ' Hotel numero-30'  ,  'direccion del hotel-30'  ,  '315-315-3419'  ,  '320-315-6129'  ,  'correohotelnumero173@correo.com'  ,  3  ,  118  ,  'dir30/imgHotel/'  ,  1);
insert into `Tborganizacion`  values(31  ,  '11141'   ,   3  ,'El Parque Las Orquídeas se presenta como uno de los lugares ideales para observar nuestra diversidad de flora y fauna.'   ,   'Por su importancia físico biótica, origina los más bellos paisajes imaginables. entre ellos puede apreciarse en Caño Cristales, además de enormes cascadas, como la de Caño Canoas, Soplaculos, el Salto del Mico, el Salto de Yarumales y muchas mas'   ,  39  ,  ' Hotel numero-31'  ,  'direccion del hotel-31'  ,  '315-315-3420'  ,  '320-315-6130'  ,  'correohotelnumero189@correo.com'  ,  4  ,  235  ,  'dir31/imgHotel/'  ,  1);
insert into `Tborganizacion`  values(32  ,  '11142'   ,   2  ,'Las 15.000 hectáreas del Parque Natural Nacional Tayrona ofrecen al visitante una paradisíaca combinación de naturaleza, historia precolombina, aventura y relajación.'   ,   'Región de increíbles paisajes, delimitada por el Río Orinoco. la actividad económica es la ganadería, la agricultura y la extracción de petróleo. Allí, se encuentra Caño Limón, y diversos proyectos energéticos basados en la energía eólica.'   ,  39  ,  ' Hotel numero-32'  ,  'direccion del hotel-32'  ,  '315-315-3421'  ,  '320-315-6131'  ,  'correohotelnumero130@correo.com'  ,  1  ,  112  ,  'dir32/imgHotel/'  ,  1);
insert into `Tborganizacion`  values(33  ,  '11143'   ,   3  ,'La Playa La Aguada, ubicada en el Parque Natural Utría, es la primera playa de Colombia con certificación en turismo sostenible.'   ,   'La Sierra o Serranía de Chiribiquete:  en conjunto de la Serranía de la Macarena y la Sierra de Naquén, son los sistemas montañosos más importantes de la región amazónica colombiana, ofrecen majestuosos paisajes llenos de historia.'   ,  39  ,  ' Hotel numero-33'  ,  'direccion del hotel-33'  ,  '315-315-3422'  ,  '320-315-6132'  ,  'correohotelnumero166@correo.com'  ,  3  ,  176  ,  'dir33/imgHotel/'  ,  1);
insert into `Tborganizacion`  values(34  ,  '11144'   ,   1  ,'Colombia es uno de los países con más biodiversidad en el mundo, los colores, la fauna y la flora que lo caracterizan son motivo de orgullo.'   ,   'El Trapecio Amazónico hace parte de una reserva natural llamada Parque Nacional Natural Amacayacu, traduce «Ríos de las Hamacas» en la lengua Quechua. fue creado a mediados de los años 70 para preservar la vida salvaje del Amazonas'   ,  39  ,  ' Hotel numero-34'  ,  'direccion del hotel-34'  ,  '315-315-3423'  ,  '320-315-6133'  ,  'correohotelnumero159@correo.com'  ,  3  ,  75  ,  'dir34/imgHotel/'  ,  1);
insert into `Tborganizacion`  values(35  ,  '11145'   ,   1  ,'Santuario de Fauna y Flora Otún Quimbaya, Ubicado en el flanco occidental de la Cordillera Central, en el departamento de Risaralda, el Santuario de Fauna y Flora Otún Quimbaya es un destino ecoturístico del Paisaje Cultural Cafetero.'   ,   'Su cuenca hidrográfica también es la de mayor superficie en el mundo y, allí, se sustenta la selva amazónica. Su zona forestal de 483.119 km², es compartida por Brasil, Venezuela, Perú, Bolivia, Ecuador, Guyana y Suriname'   ,  39  ,  ' Hotel numero-35'  ,  'direccion del hotel-35'  ,  '315-315-3424'  ,  '320-315-6134'  ,  'correohotelnumero133@correo.com'  ,  1  ,  56  ,  'dir35/imgHotel/'  ,  1);
insert into `Tborganizacion`  values(36  ,  '11146'   ,   3  ,'Parque Nacional Natural Tatamá,  podrás conocer tres importantes páramos colombianos, el Tatamá, el Frontino y el Duende, sin duda será una experiencia invaluable que te hará disfrutar de la biodiversidad colombiana.'   ,   'La isla Malpelo tiene hermosos paisajes en sus acantiladas costas de formación volcánica. Está rodeada por once islotes de pequeños, conocidos como: «Los Mosqueteros», «Vagamares y La Torta» y «Los Tres Reyes».'   ,  39  ,  ' Hotel numero-36'  ,  'direccion del hotel-36'  ,  '315-315-3425'  ,  '320-315-6135'  ,  'correohotelnumero102@correo.com'  ,  10  ,  239  ,  'dir36/imgHotel/'  ,  1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbpaises`
--

DROP TABLE IF EXISTS `tbpaises`;
CREATE TABLE `tbpaises` (
  `idpais` int(11) NOT NULL,
  `nomPais` varchar(100) DEFAULT NULL,
  `status` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbpaises`
--

INSERT INTO `tbpaises` (`idpais`, `nomPais`, `status`) VALUES
(1, 'Colombia', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbpermisos`
--

DROP TABLE IF EXISTS `tbpermisos`;
CREATE TABLE `tbpermisos` (
  `idPermiso` int(11) NOT NULL,
  `idEmpleado` int(11) NOT NULL,
  `idmenu` int(11) NOT NULL,
  `idsubmenu` int(11) NOT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbpermisos`
--

INSERT INTO `tbpermisos` (`idPermiso`, `idEmpleado`, `idmenu`, `idsubmenu`, `estado`) VALUES
(1, 1, 1, 1, 1),
(2, 1, 1, 2, 1),
(3, 1, 1, 3, 1),
(4, 1, 1, 4, 1),
(5, 1, 1, 5, 1),
(6, 1, 1, 6, 1),
(7, 1, 2, 7, 1),
(8, 1, 2, 8, 1),
(9, 1, 3, 9, 1),
(10, 1, 3, 10, 1),
(11, 1, 4, 11, 1),
(12, 1, 5, 12, 1),
(13, 1, 5, 13, 1),
(14, 1, 6, 14, 1),
(15, 1, 6, 15, 1),
(16, 1, 6, 16, 1),
(17, 1, 6, 17, 1),
(18, 1, 7, 18, 1),
(19, 1, 7, 19, 1),
(20, 1, 7, 20, 1),
(21, 1, 9, 1, 1),
(22, 25, 1, 2, 1),
(23, 25, 2, 7, 1),
(24, 25, 3, 9, 1),
(25, 2, 4, 11, 1),
(26, 2, 5, 12, 1),
(27, 2, 5, 13, 1),
(28, 2, 6, 14, 1),
(29, 2, 6, 15, 1),
(30, 2, 7, 20, 1),
(31, 1, 8, 19, 1),
(32, 1, 10, 21, 1),
(33, 1, 1, 22, 1),
(34, 1, 11, 1, 1),
(35, 1, 12, 1, 1),
(36, 1, 13, 27, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbpersonas`
--

DROP TABLE IF EXISTS `tbpersonas`;
CREATE TABLE `tbpersonas` (
  `idCedula` int(11) NOT NULL,
  `idtipoDoc` int(11) NOT NULL,
  `nomPersona` varchar(20) NOT NULL,
  `apePersona` varchar(20) NOT NULL,
  `fecNacido` date NOT NULL,
  `telPersona` varchar(12) DEFAULT NULL,
  `correoPersona` varchar(60) DEFAULT NULL,
  `tipoPersona` int(11) NOT NULL,
  `passPersona` varchar(25) NOT NULL,
  `idOcupacion` int(11) NOT NULL,
  `status` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbproductofactura`
--

DROP TABLE IF EXISTS `tbproductofactura`;
CREATE TABLE `tbproductofactura` (
  `idrelacion` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `iva` decimal(8,2) NOT NULL,
  `precioUni` decimal(8,2) NOT NULL,
  `idFactura` int(11) NOT NULL,
  `idproducto` int(11) NOT NULL,
  `status` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbproductos`
--

DROP TABLE IF EXISTS `tbproductos`;
CREATE TABLE `tbproductos` (
  `idproducto` int(11) NOT NULL,
  `nomproducto` varchar(35) NOT NULL,
  `idUnidadm` int(11) NOT NULL,
  `impto` decimal(8,2) NOT NULL,
  `precio` decimal(8,2) NOT NULL,
  `iva` decimal(8,2) NOT NULL,
  `canExiste` int(11) NOT NULL,
  `status` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbproductos`
--

INSERT INTO `tbproductos` (`idproducto`, `nomproducto`, `idUnidadm`, `impto`, `precio`, `iva`, `canExiste`, `status`) VALUES
(1, 'Coca cola', 1, '1.00', '2500.00', '19.00', 10, 1),
(2, 'CERVEZA', 3, '3.00', '1.00', '15.00', 2, 1),
(3, 'gaseosa', 2, '1.00', '1.00', '12.00', 5, 1),
(4, 'papel', 4, '12.00', '2.00', '1500.00', 12, 1),
(5, 'aguardiente', 4, '12.00', '3.00', '1500.00', 10, 1),
(6, 'AGUA CON GAS', 2, '33.00', '122.00', '15.00', 12, 1),
(7, 'limonada', 2, '3.00', '10.00', '160.00', 12, 1),
(8, 'COBIJA', 2, '3.00', '12.00', '111.00', 1, 1),
(9, 'MELOCOTON', 2, '15.00', '12.00', '999999.99', 11, 1),
(10, 'TUTTI FRUTTI', 2, '15.00', '12.00', '111.00', 11, 1),
(11, 'MELON', 2, '1.00', '12.00', '111112.00', 112, 1),
(12, 'GAEOSASSS', 1, '1.00', '1.00', '1.00', 1, 1),
(13, 'JABON', 2, '152.00', '1500.00', '150.00', 15000, 1),
(14, 'SHAMPOO', 2, '12.00', '1.00', '111.00', 1, 1),
(15, 'PAPEL HIGIENICO', 2, '10.00', '19.00', '2000.00', 10, 1),
(16, 'JUGO DE MELON', 5, '1.00', '1.00', '150.00', 5, 1),
(17, 'Cerveza ligth', 5, '100.00', '150.00', '2200.00', 25, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbredsocial`
--

DROP TABLE IF EXISTS `tbredsocial`;
CREATE TABLE `tbredsocial` (
  `idUnidadm` int(11) NOT NULL,
  `nomUnidadm` varchar(25) DEFAULT NULL,
  `status` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbredsocial`
--

INSERT INTO `tbredsocial` (`idUnidadm`, `nomUnidadm`, `status`) VALUES
(0, 'youtube', 1),
(1, 'Facebook', 1),
(3, 'Twitter', 1),
(4, 'Linkedin', 1),
(5, 'Instagram', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbregistroreserva`
--

DROP TABLE IF EXISTS `tbregistroreserva`;
CREATE TABLE `tbregistroreserva` (
  `idRegistro` int(11) NOT NULL,
  `idorg` int(11) NOT NULL,
  `fecReserva` datetime NOT NULL,
  `fecRegistro` datetime NOT NULL,
  `fecSalida` datetime NOT NULL,
  `idorigenCliente` int(11) NOT NULL,
  `idDestinoCliente` int(11) NOT NULL,
  `idestadoReserva` int(11) NOT NULL,
  `idCedula` int(11) NOT NULL,
  `idmedio` int(11) NOT NULL,
  `canAdultoRegistrada` tinyint(4) NOT NULL DEFAULT 0,
  `canAdultosConfirmada` tinyint(4) NOT NULL DEFAULT 0,
  `canMenorRegistrada` tinyint(4) NOT NULL DEFAULT 0,
  `canMenorConfirmada` tinyint(4) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbrelhotelcategoria`
--

DROP TABLE IF EXISTS `tbrelhotelcategoria`;
CREATE TABLE `tbrelhotelcategoria` (
  `idRelacion` int(11) NOT NULL,
  `idnitHotel` int(11) NOT NULL DEFAULT 1 COMMENT 'clave principal  tabla tbhotelCliente',
  `idCategoria` int(11) NOT NULL DEFAULT 1 COMMENT 'clave principal  tabla tbcateroiafron(id)',
  `nroHabitaciones` tinyint(4) NOT NULL DEFAULT 1,
  `status` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbrelhotelcategoria`
--

INSERT INTO `tbrelhotelcategoria` (`idRelacion`, `idnitHotel`, `idCategoria`, `nroHabitaciones`, `status`) VALUES
(1, 1, 1, 1, 1),
(2, 1, 2, 10, 1),
(3, 1, 3, 5, 1),
(4, 2, 1, 4, 1),
(5, 2, 2, 1, 1),
(6, 3, 1, 5, 1),
(7, 4, 2, 4, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbrelorgaccesibilidad`
--

DROP TABLE IF EXISTS `tbrelorgaccesibilidad`;
CREATE TABLE `tbrelorgaccesibilidad` (
  `idrelorgAccesibilidad` int(11) NOT NULL,
  `idOrg` int(11) NOT NULL,
  `idAccesibilidadTr` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbrelorgaccesibilidad`
--

INSERT INTO `tbrelorgaccesibilidad` (`idrelorgAccesibilidad`, `idOrg`, `idAccesibilidadTr`, `status`) VALUES
(1, 1, 1, 1),
(2, 1, 2, 1),
(3, 1, 3, 1),
(4, 1, 4, 1),
(5, 2, 1, 1),
(6, 2, 2, 1),
(7, 2, 10, 1),
(8, 2, 11, 1),
(9, 2, 12, 1),
(10, 2, 14, 1),
(11, 3, 1, 1),
(12, 3, 4, 1),
(13, 3, 5, 1),
(14, 3, 6, 1),
(15, 4, 1, 1),
(16, 4, 2, 1),
(17, 4, 15, 1),
(18, 4, 8, 1),
(19, 4, 3, 1),
(20, 4, 18, 1),
(21, 5, 1, 1),
(22, 5, 2, 1),
(23, 5, 3, 1),
(24, 5, 5, 1),
(25, 5, 15, 1),
(26, 5, 16, 1),
(27, 5, 10, 1),
(28, 5, 17, 1),
(29, 6, 1, 1),
(30, 6, 2, 1),
(31, 6, 3, 1),
(32, 6, 4, 1),
(33, 6, 9, 1),
(34, 6, 11, 1),
(35, 6, 13, 1),
(36, 6, 14, 1),
(37, 7, 1, 1),
(38, 7, 2, 1),
(39, 7, 3, 1),
(40, 7, 8, 1),
(41, 7, 9, 1),
(42, 7, 11, 1),
(43, 7, 12, 1),
(44, 7, 13, 1),
(45, 8, 10, 1),
(46, 8, 3, 1),
(47, 8, 5, 1),
(48, 8, 6, 1),
(49, 8, 7, 1),
(50, 8, 8, 1),
(51, 8, 10, 1),
(52, 8, 1, 1),
(53, 8, 15, 1),
(54, 9, 1, 1),
(55, 9, 2, 1),
(56, 9, 4, 1),
(57, 9, 11, 1),
(58, 9, 10, 1),
(59, 9, 12, 1),
(60, 9, 14, 1),
(61, 9, 15, 1),
(62, 9, 16, 1),
(63, 9, 20, 1),
(64, 10, 1, 1),
(65, 10, 2, 1),
(66, 10, 3, 1),
(67, 10, 15, 1),
(68, 10, 13, 1),
(69, 10, 14, 1),
(70, 10, 16, 1),
(71, 10, 17, 1),
(72, 10, 18, 1),
(73, 10, 19, 1),
(74, 10, 6, 1),
(75, 10, 8, 1),
(76, 10, 9, 1),
(77, 11, 1, 1),
(78, 11, 2, 1),
(79, 11, 3, 1),
(80, 11, 4, 1),
(81, 11, 7, 1),
(82, 11, 8, 1),
(83, 11, 10, 1),
(84, 11, 12, 1),
(85, 11, 13, 1),
(86, 11, 14, 1),
(87, 11, 15, 1),
(88, 11, 16, 1),
(89, 11, 18, 1),
(90, 11, 20, 1),
(91, 12, 1, 1),
(92, 12, 2, 1),
(93, 12, 3, 1),
(94, 12, 4, 1),
(95, 12, 7, 1),
(96, 12, 9, 1),
(97, 12, 10, 1),
(98, 12, 11, 1),
(99, 12, 13, 1),
(100, 12, 15, 1),
(101, 12, 16, 1),
(102, 12, 18, 1),
(103, 13, 1, 1),
(104, 13, 6, 1),
(105, 13, 8, 1),
(106, 13, 10, 1),
(107, 13, 11, 1),
(108, 13, 16, 1),
(109, 13, 18, 1),
(110, 13, 19, 1),
(111, 13, 20, 1),
(112, 13, 7, 1),
(113, 14, 1, 1),
(114, 14, 2, 1),
(115, 14, 4, 1),
(116, 14, 6, 1),
(117, 14, 7, 1),
(118, 14, 11, 1),
(119, 14, 13, 1),
(120, 14, 14, 1),
(121, 14, 19, 1),
(122, 14, 18, 1),
(123, 14, 3, 1),
(124, 15, 1, 1),
(125, 15, 4, 1),
(126, 15, 6, 1),
(127, 15, 7, 1),
(128, 15, 11, 1),
(129, 15, 12, 1),
(130, 15, 13, 1),
(131, 15, 14, 1),
(132, 15, 15, 1),
(133, 15, 17, 1),
(134, 15, 16, 1),
(135, 16, 1, 1),
(136, 16, 2, 1),
(137, 16, 3, 1),
(138, 16, 4, 1),
(139, 16, 5, 1),
(140, 16, 6, 1),
(141, 16, 7, 1),
(142, 16, 8, 1),
(143, 16, 9, 1),
(144, 16, 10, 1),
(145, 16, 11, 1),
(146, 16, 12, 1),
(147, 16, 13, 1),
(148, 16, 14, 1),
(149, 16, 16, 1),
(150, 16, 17, 1),
(151, 17, 1, 1),
(152, 17, 3, 1),
(153, 17, 4, 1),
(154, 17, 5, 1),
(155, 17, 6, 1),
(156, 17, 7, 1),
(157, 17, 8, 1),
(158, 17, 9, 1),
(159, 17, 10, 1),
(160, 17, 11, 1),
(161, 17, 12, 1),
(162, 17, 15, 1),
(163, 17, 18, 1),
(164, 17, 20, 1),
(165, 18, 1, 1),
(166, 18, 3, 1),
(167, 18, 4, 1),
(168, 18, 6, 1),
(169, 18, 7, 1),
(170, 18, 8, 1),
(171, 18, 9, 1),
(172, 18, 10, 1),
(173, 18, 11, 1),
(174, 18, 14, 1),
(175, 18, 15, 1),
(176, 18, 16, 1),
(177, 18, 17, 1),
(178, 18, 19, 1),
(179, 18, 20, 1),
(180, 19, 1, 1),
(181, 19, 2, 1),
(182, 19, 3, 1),
(183, 19, 4, 1),
(184, 19, 5, 1),
(185, 19, 6, 1),
(186, 19, 7, 1),
(187, 19, 10, 1),
(188, 19, 12, 1),
(189, 19, 13, 1),
(190, 19, 14, 1),
(191, 19, 15, 1),
(192, 19, 18, 1),
(193, 19, 19, 1),
(194, 19, 20, 1),
(195, 20, 1, 1),
(196, 20, 2, 1),
(197, 20, 3, 1),
(198, 20, 4, 1),
(199, 20, 5, 1),
(200, 20, 6, 1),
(201, 20, 7, 1),
(202, 20, 9, 1),
(203, 20, 11, 1),
(204, 20, 12, 1),
(205, 20, 13, 1),
(206, 20, 14, 1),
(207, 20, 15, 1),
(208, 20, 16, 1),
(209, 20, 17, 1),
(210, 20, 19, 1),
(211, 21, 1, 1),
(212, 21, 3, 1),
(213, 21, 4, 1),
(214, 21, 5, 1),
(215, 21, 6, 1),
(216, 21, 7, 1),
(217, 21, 8, 1),
(218, 21, 9, 1),
(219, 21, 10, 1),
(220, 21, 12, 1),
(221, 21, 13, 1),
(222, 21, 14, 1),
(223, 21, 15, 1),
(224, 21, 16, 1),
(225, 21, 17, 1),
(226, 21, 19, 1),
(227, 21, 20, 1),
(228, 22, 1, 1),
(229, 22, 2, 1),
(230, 22, 2, 1),
(231, 22, 3, 1),
(232, 22, 4, 1),
(233, 22, 5, 1),
(234, 22, 6, 1),
(235, 22, 7, 1),
(236, 22, 8, 1),
(237, 22, 9, 1),
(238, 22, 10, 1),
(239, 22, 11, 1),
(240, 22, 12, 1),
(241, 22, 13, 1),
(242, 22, 15, 1),
(243, 22, 16, 1),
(244, 22, 17, 1),
(245, 23, 1, 1),
(246, 23, 2, 1),
(247, 23, 3, 1),
(248, 23, 4, 1),
(249, 23, 5, 1),
(250, 23, 7, 1),
(251, 23, 8, 1),
(252, 23, 9, 1),
(253, 23, 10, 1),
(254, 23, 12, 1),
(255, 23, 13, 1),
(256, 23, 14, 1),
(257, 23, 17, 1),
(258, 23, 18, 1),
(259, 23, 19, 1),
(260, 23, 20, 1),
(261, 24, 2, 1),
(262, 24, 3, 1),
(263, 24, 4, 1),
(264, 24, 5, 1),
(265, 24, 6, 1),
(266, 24, 7, 1),
(267, 24, 8, 1),
(268, 24, 9, 1),
(269, 24, 10, 1),
(270, 24, 11, 1),
(271, 24, 12, 1),
(272, 24, 13, 1),
(273, 24, 14, 1),
(274, 24, 15, 1),
(275, 24, 16, 1),
(276, 24, 17, 1),
(277, 24, 18, 1),
(278, 24, 19, 1),
(279, 24, 20, 1),
(280, 25, 1, 1),
(281, 25, 2, 1),
(282, 25, 3, 1),
(283, 25, 4, 1),
(284, 25, 6, 1),
(285, 25, 8, 1),
(286, 25, 9, 1),
(287, 25, 11, 1),
(288, 25, 13, 1),
(289, 25, 14, 1),
(290, 25, 15, 1),
(291, 25, 1, 1),
(292, 25, 7, 1),
(293, 25, 19, 1),
(294, 25, 20, 1),
(295, 26, 3, 1),
(296, 26, 4, 1),
(297, 26, 5, 1),
(298, 26, 6, 1),
(299, 26, 8, 1),
(300, 26, 9, 1),
(301, 26, 10, 1),
(302, 26, 12, 1),
(303, 26, 13, 1),
(304, 26, 14, 1),
(305, 26, 15, 1),
(306, 26, 16, 1),
(307, 26, 19, 1),
(308, 26, 20, 1),
(309, 27, 1, 1),
(310, 27, 2, 1),
(311, 27, 3, 1),
(312, 27, 4, 1),
(313, 27, 5, 1),
(314, 27, 7, 1),
(315, 27, 8, 1),
(316, 27, 9, 1),
(317, 27, 11, 1),
(318, 27, 13, 1),
(319, 27, 15, 1),
(320, 27, 16, 1),
(321, 27, 17, 1),
(322, 27, 18, 1),
(323, 27, 19, 1),
(324, 28, 1, 1),
(325, 28, 2, 1),
(326, 28, 3, 1),
(327, 28, 4, 1),
(328, 28, 5, 1),
(329, 28, 6, 1),
(330, 28, 7, 1),
(331, 28, 8, 1),
(332, 28, 9, 1),
(333, 28, 10, 1),
(334, 28, 11, 1),
(335, 28, 13, 1),
(336, 28, 14, 1),
(337, 28, 15, 1),
(338, 28, 16, 1),
(339, 28, 17, 1),
(340, 28, 18, 1),
(341, 28, 19, 1),
(342, 28, 20, 1),
(343, 29, 1, 1),
(344, 29, 2, 1),
(345, 29, 3, 1),
(346, 29, 4, 1),
(347, 29, 6, 1),
(348, 29, 7, 1),
(349, 29, 8, 1),
(350, 29, 11, 1),
(351, 29, 12, 1),
(352, 29, 14, 1),
(353, 29, 15, 1),
(354, 29, 17, 1),
(355, 29, 18, 1),
(356, 29, 20, 1),
(357, 30, 1, 1),
(358, 30, 2, 1),
(359, 30, 3, 1),
(360, 30, 4, 1),
(361, 30, 5, 1),
(362, 30, 6, 1),
(363, 30, 7, 1),
(364, 30, 8, 1),
(365, 30, 9, 1),
(366, 30, 10, 1),
(367, 30, 11, 1),
(368, 30, 12, 1),
(369, 30, 13, 1),
(370, 30, 14, 1),
(371, 30, 15, 1),
(372, 30, 17, 1),
(373, 30, 19, 1),
(374, 30, 20, 1),
(375, 31, 1, 1),
(376, 31, 2, 1),
(377, 31, 3, 1),
(378, 31, 4, 1),
(379, 31, 5, 1),
(380, 31, 6, 1),
(381, 31, 9, 1),
(382, 31, 11, 1),
(383, 31, 12, 1),
(384, 31, 13, 1),
(385, 31, 16, 1),
(386, 31, 18, 1),
(387, 31, 19, 1),
(388, 31, 20, 1),
(389, 32, 1, 1),
(390, 32, 2, 1),
(391, 32, 3, 1),
(392, 32, 4, 1),
(393, 32, 5, 1),
(394, 32, 6, 1),
(395, 32, 7, 1),
(396, 32, 8, 1),
(397, 32, 9, 1),
(398, 32, 11, 1),
(399, 32, 12, 1),
(400, 32, 13, 1),
(401, 32, 14, 1),
(402, 32, 15, 1),
(403, 32, 16, 1),
(404, 32, 17, 1),
(405, 32, 18, 1),
(406, 32, 19, 1),
(407, 32, 20, 1),
(408, 33, 1, 1),
(409, 33, 2, 1),
(410, 33, 3, 1),
(411, 33, 4, 1),
(412, 33, 5, 1),
(413, 33, 6, 1),
(414, 33, 9, 1),
(415, 33, 10, 1),
(416, 33, 11, 1),
(417, 33, 12, 1),
(418, 33, 13, 1),
(419, 33, 14, 1),
(420, 33, 15, 1),
(421, 33, 16, 1),
(422, 33, 17, 1),
(423, 33, 18, 1),
(424, 33, 19, 1),
(425, 33, 20, 1),
(426, 34, 1, 1),
(427, 34, 2, 1),
(428, 34, 3, 1),
(429, 34, 4, 1),
(430, 34, 5, 1),
(431, 34, 6, 1),
(432, 34, 7, 1),
(433, 34, 8, 1),
(434, 34, 9, 1),
(435, 34, 10, 1),
(436, 34, 11, 1),
(437, 34, 12, 1),
(438, 34, 13, 1),
(439, 34, 15, 1),
(440, 34, 16, 1),
(441, 34, 17, 1),
(442, 34, 18, 1),
(443, 34, 19, 1),
(444, 34, 20, 1),
(445, 35, 1, 1),
(446, 35, 3, 1),
(447, 35, 4, 1),
(448, 35, 5, 1),
(449, 35, 6, 1),
(450, 35, 7, 1),
(451, 35, 8, 1),
(452, 35, 9, 1),
(453, 35, 11, 1),
(454, 35, 12, 1),
(455, 35, 13, 1),
(456, 35, 14, 1),
(457, 35, 15, 1),
(458, 35, 16, 1),
(459, 35, 18, 1),
(460, 35, 20, 1),
(461, 36, 1, 1),
(462, 36, 2, 1),
(463, 36, 3, 1),
(464, 36, 5, 1),
(465, 36, 6, 1),
(466, 36, 7, 1),
(467, 36, 8, 1),
(468, 36, 9, 1),
(469, 36, 10, 1),
(470, 36, 11, 1),
(471, 36, 12, 1),
(472, 36, 13, 1),
(473, 36, 15, 1),
(474, 36, 16, 1),
(475, 36, 18, 1),
(476, 36, 19, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbrelorgdescripcion`
--

DROP TABLE IF EXISTS `tbrelorgdescripcion`;
CREATE TABLE `tbrelorgdescripcion` (
  `idrelorgDescripcion` int(11) NOT NULL,
  `idOrg` int(11) NOT NULL,
  `IdDescripcionTr` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbrelorgdescripcion`
--

INSERT INTO `tbrelorgdescripcion` (`idrelorgDescripcion`, `idOrg`, `IdDescripcionTr`, `status`) VALUES
(1, 1, 1, 1),
(2, 1, 2, 1),
(3, 1, 4, 1),
(4, 1, 3, 1),
(5, 2, 10, 1),
(6, 2, 19, 1),
(7, 2, 3, 1),
(8, 2, 4, 1),
(9, 3, 12, 1),
(10, 3, 13, 1),
(11, 3, 15, 1),
(12, 4, 1, 1),
(13, 4, 3, 1),
(14, 4, 6, 1),
(15, 4, 7, 1),
(16, 5, 11, 1),
(17, 5, 12, 1),
(18, 5, 13, 1),
(19, 5, 10, 1),
(20, 5, 16, 1),
(21, 6, 1, 1),
(22, 6, 13, 1),
(23, 6, 14, 1),
(24, 6, 16, 1),
(25, 6, 18, 1),
(26, 7, 1, 1),
(27, 7, 2, 1),
(28, 7, 3, 1),
(29, 7, 4, 1),
(30, 7, 5, 1),
(31, 8, 2, 1),
(32, 8, 3, 1),
(33, 8, 4, 1),
(34, 8, 17, 1),
(35, 8, 18, 1),
(36, 9, 20, 1),
(37, 9, 17, 1),
(38, 9, 13, 1),
(39, 9, 10, 1),
(40, 9, 2, 1),
(41, 9, 3, 1),
(42, 10, 1, 1),
(43, 10, 2, 1),
(44, 10, 20, 1),
(45, 10, 3, 1),
(46, 10, 19, 1),
(47, 11, 1, 1),
(48, 11, 2, 1),
(49, 11, 4, 1),
(50, 11, 5, 1),
(51, 11, 8, 1),
(52, 12, 19, 1),
(53, 12, 18, 1),
(54, 12, 17, 1),
(55, 12, 5, 1),
(56, 12, 4, 1),
(57, 12, 2, 1),
(58, 13, 11, 1),
(59, 13, 1, 1),
(60, 13, 2, 1),
(61, 13, 4, 1),
(62, 13, 9, 1),
(63, 13, 14, 1),
(64, 14, 14, 1),
(65, 14, 11, 1),
(66, 14, 10, 1),
(67, 14, 6, 1),
(68, 14, 3, 1),
(69, 14, 4, 1),
(70, 15, 1, 1),
(71, 15, 2, 1),
(72, 15, 3, 1),
(73, 15, 4, 1),
(74, 15, 5, 1),
(75, 16, 20, 1),
(76, 16, 18, 1),
(77, 16, 16, 1),
(78, 16, 5, 1),
(79, 16, 6, 1),
(80, 16, 8, 1),
(81, 17, 1, 1),
(82, 17, 2, 1),
(83, 17, 3, 1),
(84, 17, 4, 1),
(85, 17, 5, 1),
(86, 17, 8, 1),
(87, 17, 9, 1),
(88, 18, 20, 1),
(89, 18, 19, 1),
(90, 18, 11, 1),
(91, 18, 5, 1),
(92, 18, 6, 1),
(93, 18, 7, 1),
(94, 19, 4, 1),
(95, 19, 5, 1),
(96, 19, 6, 1),
(97, 19, 7, 1),
(98, 19, 11, 1),
(99, 19, 15, 1),
(100, 20, 1, 1),
(101, 20, 2, 1),
(102, 20, 11, 1),
(103, 20, 15, 1),
(104, 20, 14, 1),
(105, 20, 16, 1),
(106, 21, 1, 1),
(107, 21, 2, 1),
(108, 21, 3, 1),
(109, 21, 5, 1),
(110, 21, 8, 1),
(111, 21, 9, 1),
(112, 22, 1, 1),
(113, 22, 6, 1),
(114, 22, 8, 1),
(115, 22, 9, 1),
(116, 22, 10, 1),
(117, 23, 10, 1),
(118, 23, 12, 1),
(119, 23, 14, 1),
(120, 23, 17, 1),
(121, 23, 18, 1),
(122, 24, 10, 1),
(123, 24, 12, 1),
(124, 24, 13, 1),
(125, 24, 8, 1),
(126, 24, 9, 1),
(127, 24, 4, 1),
(128, 25, 1, 1),
(129, 25, 6, 1),
(130, 25, 7, 1),
(131, 25, 8, 1),
(132, 25, 10, 1),
(133, 25, 15, 1),
(134, 26, 14, 1),
(135, 26, 15, 1),
(136, 26, 7, 1),
(137, 26, 8, 1),
(138, 26, 2, 1),
(139, 26, 1, 1),
(140, 27, 8, 1),
(141, 27, 9, 1),
(142, 27, 10, 1),
(143, 27, 11, 1),
(144, 27, 12, 1),
(145, 27, 2, 1),
(146, 28, 1, 1),
(147, 28, 6, 1),
(148, 28, 7, 1),
(149, 28, 8, 1),
(150, 28, 9, 1),
(151, 28, 11, 1),
(152, 29, 2, 1),
(153, 29, 3, 1),
(154, 29, 8, 1),
(155, 29, 1, 1),
(156, 29, 5, 1),
(157, 29, 6, 1),
(158, 30, 1, 1),
(159, 30, 11, 1),
(160, 30, 14, 1),
(161, 30, 3, 1),
(162, 30, 4, 1),
(163, 30, 5, 1),
(164, 30, 16, 1),
(165, 31, 1, 1),
(166, 31, 14, 1),
(167, 31, 13, 1),
(168, 31, 9, 1),
(169, 31, 2, 1),
(170, 32, 1, 1),
(171, 32, 7, 1),
(172, 32, 2, 1),
(173, 32, 3, 1),
(174, 32, 4, 1),
(175, 32, 16, 1),
(176, 32, 5, 1),
(177, 33, 18, 1),
(178, 33, 20, 1),
(179, 33, 17, 1),
(180, 33, 2, 1),
(181, 33, 10, 1),
(182, 33, 3, 1),
(183, 34, 1, 1),
(184, 34, 2, 1),
(185, 34, 3, 1),
(186, 34, 4, 1),
(187, 34, 5, 1),
(188, 34, 6, 1),
(189, 35, 1, 1),
(190, 35, 6, 1),
(191, 35, 3, 1),
(192, 35, 2, 1),
(193, 35, 3, 1),
(194, 35, 3, 1),
(195, 36, 9, 1),
(196, 36, 6, 1),
(197, 36, 8, 1),
(198, 36, 10, 1),
(199, 36, 3, 1),
(200, 36, 4, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbrelorginstalacion`
--

DROP TABLE IF EXISTS `tbrelorginstalacion`;
CREATE TABLE `tbrelorginstalacion` (
  `idrelorgInstalacion` int(11) NOT NULL,
  `idOrg` int(11) NOT NULL,
  `idInstalacionTr` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbrelorginstalacion`
--

INSERT INTO `tbrelorginstalacion` (`idrelorgInstalacion`, `idOrg`, `idInstalacionTr`, `status`) VALUES
(1, 1, 1, 1),
(2, 1, 2, 1),
(3, 1, 3, 1),
(4, 1, 4, 1),
(5, 1, 5, 1),
(6, 1, 7, 1),
(7, 1, 9, 1),
(8, 1, 11, 1),
(9, 1, 12, 1),
(10, 2, 1, 1),
(11, 2, 2, 1),
(12, 2, 5, 1),
(13, 2, 6, 1),
(14, 2, 7, 1),
(15, 2, 8, 1),
(16, 2, 9, 1),
(17, 2, 11, 1),
(18, 2, 12, 1),
(19, 2, 15, 1),
(20, 2, 16, 1),
(21, 2, 17, 1),
(22, 3, 3, 1),
(23, 3, 5, 1),
(24, 3, 6, 1),
(25, 3, 8, 1),
(26, 3, 10, 1),
(27, 3, 11, 1),
(28, 3, 12, 1),
(29, 3, 13, 1),
(30, 3, 14, 1),
(31, 4, 1, 1),
(32, 4, 2, 1),
(33, 4, 4, 1),
(34, 4, 5, 1),
(35, 4, 6, 1),
(36, 4, 7, 1),
(37, 4, 8, 1),
(38, 4, 9, 1),
(39, 4, 11, 1),
(40, 4, 13, 1),
(41, 4, 14, 1),
(42, 4, 15, 1),
(43, 4, 18, 1),
(44, 5, 1, 1),
(45, 5, 2, 1),
(46, 5, 3, 1),
(47, 5, 5, 1),
(48, 5, 6, 1),
(49, 5, 7, 1),
(50, 5, 9, 1),
(51, 5, 10, 1),
(52, 5, 13, 1),
(53, 5, 15, 1),
(54, 5, 16, 1),
(55, 6, 1, 1),
(56, 6, 3, 1),
(57, 6, 9, 1),
(58, 6, 8, 1),
(59, 6, 2, 1),
(60, 6, 9, 1),
(61, 6, 17, 1),
(62, 7, 1, 1),
(63, 7, 2, 1),
(64, 7, 3, 1),
(65, 7, 4, 1),
(66, 7, 4, 1),
(67, 7, 5, 1),
(68, 7, 8, 1),
(69, 7, 9, 1),
(70, 7, 10, 1),
(71, 7, 11, 1),
(72, 7, 12, 1),
(73, 7, 13, 1),
(74, 7, 18, 1),
(75, 8, 1, 1),
(76, 8, 2, 1),
(77, 8, 3, 1),
(78, 8, 4, 1),
(79, 8, 5, 1),
(80, 8, 6, 1),
(81, 8, 7, 1),
(82, 8, 8, 1),
(83, 8, 10, 1),
(84, 8, 11, 1),
(85, 8, 12, 1),
(86, 8, 13, 1),
(87, 8, 15, 1),
(88, 8, 16, 1),
(89, 9, 1, 1),
(90, 9, 2, 1),
(91, 9, 3, 1),
(92, 9, 4, 1),
(93, 9, 5, 1),
(94, 9, 6, 1),
(95, 9, 7, 1),
(96, 9, 8, 1),
(97, 9, 9, 1),
(98, 9, 10, 1),
(99, 9, 11, 1),
(100, 9, 12, 1),
(101, 9, 14, 1),
(102, 9, 15, 1),
(103, 9, 16, 1),
(104, 9, 17, 1),
(105, 9, 18, 1),
(106, 10, 1, 1),
(107, 10, 2, 1),
(108, 10, 3, 1),
(109, 10, 4, 1),
(110, 10, 7, 1),
(111, 10, 8, 1),
(112, 10, 11, 1),
(113, 10, 12, 1),
(114, 10, 13, 1),
(115, 10, 14, 1),
(116, 10, 15, 1),
(117, 10, 16, 1),
(118, 10, 17, 1),
(119, 11, 1, 1),
(120, 11, 2, 1),
(121, 11, 4, 1),
(122, 11, 5, 1),
(123, 11, 6, 1),
(124, 11, 7, 1),
(125, 11, 8, 1),
(126, 11, 12, 1),
(127, 11, 13, 1),
(128, 11, 14, 1),
(129, 11, 15, 1),
(130, 11, 16, 1),
(131, 11, 18, 1),
(132, 12, 1, 1),
(133, 12, 2, 1),
(134, 12, 4, 1),
(135, 12, 5, 1),
(136, 12, 6, 1),
(137, 12, 7, 1),
(138, 12, 9, 1),
(139, 12, 11, 1),
(140, 12, 12, 1),
(141, 12, 13, 1),
(142, 12, 14, 1),
(143, 12, 15, 1),
(144, 12, 16, 1),
(145, 12, 17, 1),
(146, 13, 1, 1),
(147, 13, 2, 1),
(148, 13, 3, 1),
(149, 13, 4, 1),
(150, 13, 5, 1),
(151, 13, 7, 1),
(152, 13, 8, 1),
(153, 13, 9, 1),
(154, 13, 10, 1),
(155, 13, 11, 1),
(156, 13, 12, 1),
(157, 13, 13, 1),
(158, 13, 14, 1),
(159, 13, 15, 1),
(160, 13, 16, 1),
(161, 13, 18, 1),
(162, 14, 1, 1),
(163, 14, 2, 1),
(164, 14, 3, 1),
(165, 14, 4, 1),
(166, 14, 6, 1),
(167, 14, 8, 1),
(168, 14, 9, 1),
(169, 14, 10, 1),
(170, 14, 11, 1),
(171, 14, 12, 1),
(172, 14, 13, 1),
(173, 14, 14, 1),
(174, 14, 15, 1),
(175, 14, 16, 1),
(176, 14, 17, 1),
(177, 14, 18, 1),
(178, 15, 2, 1),
(179, 15, 3, 1),
(180, 15, 4, 1),
(181, 15, 6, 1),
(182, 15, 7, 1),
(183, 15, 9, 1),
(184, 15, 11, 1),
(185, 15, 12, 1),
(186, 15, 14, 1),
(187, 15, 15, 1),
(188, 15, 16, 1),
(189, 15, 17, 1),
(190, 16, 1, 1),
(191, 16, 2, 1),
(192, 16, 3, 1),
(193, 16, 4, 1),
(194, 16, 5, 1),
(195, 16, 7, 1),
(196, 16, 10, 1),
(197, 16, 11, 1),
(198, 16, 12, 1),
(199, 16, 13, 1),
(200, 16, 15, 1),
(201, 16, 16, 1),
(202, 16, 18, 1),
(203, 17, 1, 1),
(204, 17, 4, 1),
(205, 17, 5, 1),
(206, 17, 6, 1),
(207, 17, 7, 1),
(208, 17, 8, 1),
(209, 17, 10, 1),
(210, 17, 11, 1),
(211, 17, 12, 1),
(212, 17, 13, 1),
(213, 17, 14, 1),
(214, 17, 15, 1),
(215, 17, 17, 1),
(216, 17, 18, 1),
(217, 18, 1, 1),
(218, 18, 2, 1),
(219, 18, 3, 1),
(220, 18, 4, 1),
(221, 18, 5, 1),
(222, 18, 6, 1),
(223, 18, 7, 1),
(224, 18, 8, 1),
(225, 18, 10, 1),
(226, 18, 11, 1),
(227, 18, 13, 1),
(228, 18, 14, 1),
(229, 18, 15, 1),
(230, 18, 17, 1),
(231, 18, 18, 1),
(232, 19, 2, 1),
(233, 19, 3, 1),
(234, 19, 4, 1),
(235, 19, 5, 1),
(236, 19, 6, 1),
(237, 19, 7, 1),
(238, 19, 8, 1),
(239, 19, 9, 1),
(240, 19, 11, 1),
(241, 19, 12, 1),
(242, 19, 13, 1),
(243, 19, 15, 1),
(244, 19, 16, 1),
(245, 19, 18, 1),
(246, 20, 1, 1),
(247, 20, 3, 1),
(248, 20, 4, 1),
(249, 20, 5, 1),
(250, 20, 7, 1),
(251, 20, 9, 1),
(252, 20, 11, 1),
(253, 20, 13, 1),
(254, 20, 14, 1),
(255, 20, 15, 1),
(256, 20, 16, 1),
(257, 20, 17, 1),
(258, 20, 18, 1),
(259, 21, 2, 1),
(260, 21, 4, 1),
(261, 21, 5, 1),
(262, 21, 6, 1),
(263, 21, 7, 1),
(264, 21, 8, 1),
(265, 21, 9, 1),
(266, 21, 10, 1),
(267, 21, 11, 1),
(268, 21, 12, 1),
(269, 21, 13, 1),
(270, 21, 16, 1),
(271, 21, 18, 1),
(272, 22, 1, 1),
(273, 22, 7, 1),
(274, 22, 8, 1),
(275, 22, 9, 1),
(276, 22, 10, 1),
(277, 22, 13, 1),
(278, 22, 14, 1),
(279, 22, 15, 1),
(280, 22, 16, 1),
(281, 23, 2, 1),
(282, 23, 4, 1),
(283, 23, 5, 1),
(284, 23, 6, 1),
(285, 23, 7, 1),
(286, 23, 8, 1),
(287, 23, 9, 1),
(288, 23, 10, 1),
(289, 23, 11, 1),
(290, 23, 12, 1),
(291, 23, 13, 1),
(292, 23, 14, 1),
(293, 23, 15, 1),
(294, 23, 17, 1),
(295, 23, 18, 1),
(296, 24, 1, 1),
(297, 24, 2, 1),
(298, 24, 4, 1),
(299, 24, 5, 1),
(300, 24, 7, 1),
(301, 24, 8, 1),
(302, 24, 9, 1),
(303, 24, 11, 1),
(304, 24, 12, 1),
(305, 24, 13, 1),
(306, 24, 14, 1),
(307, 24, 17, 1),
(308, 24, 18, 1),
(309, 25, 1, 1),
(310, 25, 3, 1),
(311, 25, 4, 1),
(312, 25, 5, 1),
(313, 25, 6, 1),
(314, 25, 7, 1),
(315, 25, 9, 1),
(316, 25, 11, 1),
(317, 25, 12, 1),
(318, 25, 13, 1),
(319, 25, 14, 1),
(320, 25, 15, 1),
(321, 25, 16, 1),
(322, 25, 17, 1),
(323, 25, 18, 1),
(324, 26, 1, 1),
(325, 26, 2, 1),
(326, 26, 4, 1),
(327, 26, 5, 1),
(328, 26, 6, 1),
(329, 26, 8, 1),
(330, 26, 9, 1),
(331, 26, 10, 1),
(332, 26, 11, 1),
(333, 26, 12, 1),
(334, 26, 13, 1),
(335, 26, 14, 1),
(336, 26, 15, 1),
(337, 26, 16, 1),
(338, 26, 17, 1),
(339, 26, 18, 1),
(340, 27, 2, 1),
(341, 27, 3, 1),
(342, 27, 4, 1),
(343, 27, 5, 1),
(344, 27, 8, 1),
(345, 27, 10, 1),
(346, 27, 11, 1),
(347, 27, 12, 1),
(348, 27, 13, 1),
(349, 27, 14, 1),
(350, 27, 15, 1),
(351, 27, 16, 1),
(352, 27, 17, 1),
(353, 27, 18, 1),
(354, 28, 1, 1),
(355, 28, 6, 1),
(356, 28, 7, 1),
(357, 28, 8, 1),
(358, 28, 9, 1),
(359, 28, 10, 1),
(360, 28, 11, 1),
(361, 28, 12, 1),
(362, 28, 13, 1),
(363, 28, 16, 1),
(364, 28, 17, 1),
(365, 28, 18, 1),
(366, 29, 1, 1),
(367, 29, 2, 1),
(368, 29, 3, 1),
(369, 29, 5, 1),
(370, 29, 8, 1),
(371, 29, 9, 1),
(372, 29, 10, 1),
(373, 29, 11, 1),
(374, 29, 12, 1),
(375, 29, 13, 1),
(376, 29, 15, 1),
(377, 29, 16, 1),
(378, 29, 17, 1),
(379, 30, 2, 1),
(380, 30, 3, 1),
(381, 30, 4, 1),
(382, 30, 5, 1),
(383, 30, 7, 1),
(384, 30, 8, 1),
(385, 30, 9, 1),
(386, 30, 11, 1),
(387, 30, 12, 1),
(388, 30, 13, 1),
(389, 30, 14, 1),
(390, 30, 15, 1),
(391, 30, 16, 1),
(392, 30, 17, 1),
(393, 30, 18, 1),
(394, 31, 1, 1),
(395, 31, 2, 1),
(396, 31, 4, 1),
(397, 31, 6, 1),
(398, 31, 8, 1),
(399, 31, 9, 1),
(400, 31, 11, 1),
(401, 31, 13, 1),
(402, 31, 14, 1),
(403, 31, 15, 1),
(404, 31, 17, 1),
(405, 31, 18, 1),
(406, 32, 1, 1),
(407, 32, 3, 1),
(408, 32, 4, 1),
(409, 32, 5, 1),
(410, 32, 6, 1),
(411, 32, 7, 1),
(412, 32, 9, 1),
(413, 32, 10, 1),
(414, 32, 12, 1),
(415, 32, 13, 1),
(416, 32, 14, 1),
(417, 32, 15, 1),
(418, 32, 16, 1),
(419, 32, 17, 1),
(420, 33, 1, 1),
(421, 33, 3, 1),
(422, 33, 5, 1),
(423, 33, 6, 1),
(424, 33, 9, 1),
(425, 33, 12, 1),
(426, 33, 15, 1),
(427, 33, 16, 1),
(428, 33, 17, 1),
(429, 33, 18, 1),
(430, 34, 1, 1),
(431, 34, 2, 1),
(432, 34, 4, 1),
(433, 34, 5, 1),
(434, 34, 6, 1),
(435, 34, 10, 1),
(436, 34, 11, 1),
(437, 34, 14, 1),
(438, 34, 15, 1),
(439, 34, 17, 1),
(440, 34, 18, 1),
(441, 35, 1, 1),
(442, 35, 2, 1),
(443, 35, 3, 1),
(444, 35, 5, 1),
(445, 35, 6, 1),
(446, 35, 7, 1),
(447, 35, 8, 1),
(448, 35, 9, 1),
(449, 35, 10, 1),
(450, 35, 11, 1),
(451, 35, 12, 1),
(452, 35, 14, 1),
(453, 35, 15, 1),
(454, 35, 17, 1),
(455, 35, 18, 1),
(456, 36, 1, 1),
(457, 36, 2, 1),
(458, 36, 3, 1),
(459, 36, 4, 1),
(460, 36, 6, 1),
(461, 36, 8, 1),
(462, 36, 9, 1),
(463, 36, 11, 1),
(464, 36, 13, 1),
(465, 36, 14, 1),
(466, 36, 15, 1),
(467, 36, 16, 1),
(468, 36, 17, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbrelorgredes`
--

DROP TABLE IF EXISTS `tbrelorgredes`;
CREATE TABLE `tbrelorgredes` (
  `idrelorgRedes` int(11) NOT NULL,
  `idOrg` int(11) NOT NULL,
  `idRedsocialtr` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbrelorgservicios`
--

DROP TABLE IF EXISTS `tbrelorgservicios`;
CREATE TABLE `tbrelorgservicios` (
  `idrelorgServicios` int(11) NOT NULL,
  `idOrg` int(11) NOT NULL,
  `idServicioTr` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbrelorgservicios`
--

INSERT INTO `tbrelorgservicios` (`idrelorgServicios`, `idOrg`, `idServicioTr`, `status`) VALUES
(1, 1, 1, 1),
(2, 1, 3, 1),
(3, 1, 4, 1),
(4, 1, 5, 1),
(5, 1, 6, 1),
(6, 1, 7, 1),
(7, 1, 8, 1),
(8, 1, 9, 1),
(9, 1, 10, 1),
(10, 1, 13, 1),
(11, 1, 14, 1),
(12, 1, 18, 1),
(13, 1, 19, 1),
(14, 1, 21, 1),
(15, 2, 1, 1),
(16, 2, 3, 1),
(17, 2, 4, 1),
(18, 2, 5, 1),
(19, 2, 6, 1),
(20, 2, 7, 1),
(21, 2, 8, 1),
(22, 2, 10, 1),
(23, 2, 12, 1),
(24, 2, 14, 1),
(25, 2, 15, 1),
(26, 2, 16, 1),
(27, 2, 17, 1),
(28, 2, 19, 1),
(29, 2, 20, 1),
(30, 2, 21, 1),
(31, 3, 1, 1),
(32, 3, 5, 1),
(33, 3, 7, 1),
(34, 3, 8, 1),
(35, 3, 9, 1),
(36, 3, 10, 1),
(37, 3, 11, 1),
(38, 3, 12, 1),
(39, 3, 13, 1),
(40, 3, 14, 1),
(41, 3, 15, 1),
(42, 3, 17, 1),
(43, 3, 18, 1),
(44, 4, 1, 1),
(45, 4, 2, 1),
(46, 4, 3, 1),
(47, 4, 5, 1),
(48, 4, 7, 1),
(49, 4, 8, 1),
(50, 4, 10, 1),
(51, 4, 11, 1),
(52, 4, 12, 1),
(53, 4, 13, 1),
(54, 4, 14, 1),
(55, 4, 16, 1),
(56, 4, 18, 1),
(57, 4, 19, 1),
(58, 4, 20, 1),
(59, 4, 21, 1),
(60, 5, 1, 1),
(61, 5, 3, 1),
(62, 5, 4, 1),
(63, 5, 5, 1),
(64, 5, 7, 1),
(65, 5, 8, 1),
(66, 5, 9, 1),
(67, 5, 10, 1),
(68, 5, 11, 1),
(69, 5, 12, 1),
(70, 5, 14, 1),
(71, 5, 15, 1),
(72, 5, 16, 1),
(73, 5, 17, 1),
(74, 5, 19, 1),
(75, 5, 20, 1),
(76, 5, 21, 1),
(77, 6, 1, 1),
(78, 6, 2, 1),
(79, 6, 3, 1),
(80, 6, 4, 1),
(81, 6, 5, 1),
(82, 6, 6, 1),
(83, 6, 8, 1),
(84, 6, 9, 1),
(85, 6, 10, 1),
(86, 6, 14, 1),
(87, 6, 15, 1),
(88, 6, 17, 1),
(89, 6, 18, 1),
(90, 6, 19, 1),
(91, 6, 20, 1),
(92, 7, 1, 1),
(93, 7, 3, 1),
(94, 7, 4, 1),
(95, 7, 5, 1),
(96, 7, 6, 1),
(97, 7, 7, 1),
(98, 7, 8, 1),
(99, 7, 9, 1),
(100, 7, 10, 1),
(101, 7, 12, 1),
(102, 7, 14, 1),
(103, 7, 15, 1),
(104, 7, 16, 1),
(105, 7, 19, 1),
(106, 7, 20, 1),
(107, 7, 21, 1),
(108, 8, 1, 1),
(109, 8, 2, 1),
(110, 8, 4, 1),
(111, 8, 5, 1),
(112, 8, 7, 1),
(113, 8, 11, 1),
(114, 8, 13, 1),
(115, 8, 14, 1),
(116, 8, 15, 1),
(117, 8, 16, 1),
(118, 8, 17, 1),
(119, 8, 18, 1),
(120, 8, 19, 1),
(121, 8, 20, 1),
(122, 8, 21, 1),
(123, 9, 1, 1),
(124, 9, 2, 1),
(125, 9, 3, 1),
(126, 9, 5, 1),
(127, 9, 6, 1),
(128, 9, 8, 1),
(129, 9, 9, 1),
(130, 9, 11, 1),
(131, 9, 12, 1),
(132, 9, 14, 1),
(133, 9, 15, 1),
(134, 9, 17, 1),
(135, 9, 18, 1),
(136, 9, 19, 1),
(137, 9, 20, 1),
(138, 9, 21, 1),
(139, 10, 3, 1),
(140, 10, 4, 1),
(141, 10, 6, 1),
(142, 10, 7, 1),
(143, 10, 8, 1),
(144, 10, 9, 1),
(145, 10, 10, 1),
(146, 10, 11, 1),
(147, 10, 12, 1),
(148, 10, 13, 1),
(149, 10, 14, 1),
(150, 10, 16, 1),
(151, 10, 18, 1),
(152, 10, 19, 1),
(153, 10, 20, 1),
(154, 11, 2, 1),
(155, 11, 3, 1),
(156, 11, 5, 1),
(157, 11, 6, 1),
(158, 11, 7, 1),
(159, 11, 9, 1),
(160, 11, 10, 1),
(161, 11, 14, 1),
(162, 11, 15, 1),
(163, 11, 16, 1),
(164, 11, 17, 1),
(165, 11, 18, 1),
(166, 11, 19, 1),
(167, 11, 21, 1),
(168, 12, 2, 1),
(169, 12, 3, 1),
(170, 12, 4, 1),
(171, 12, 5, 1),
(172, 12, 6, 1),
(173, 12, 8, 1),
(174, 12, 9, 1),
(175, 12, 10, 1),
(176, 12, 11, 1),
(177, 12, 13, 1),
(178, 12, 14, 1),
(179, 12, 15, 1),
(180, 12, 16, 1),
(181, 12, 17, 1),
(182, 12, 19, 1),
(183, 12, 11, 1),
(184, 12, 13, 1),
(185, 12, 15, 1),
(186, 12, 16, 1),
(187, 12, 17, 1),
(188, 12, 19, 1),
(189, 13, 3, 1),
(190, 13, 4, 1),
(191, 13, 5, 1),
(192, 13, 6, 1),
(193, 13, 8, 1),
(194, 13, 9, 1),
(195, 13, 10, 1),
(196, 13, 11, 1),
(197, 13, 12, 1),
(198, 13, 13, 1),
(199, 13, 14, 1),
(200, 13, 15, 1),
(201, 13, 16, 1),
(202, 13, 17, 1),
(203, 13, 18, 1),
(204, 13, 19, 1),
(205, 13, 20, 1),
(206, 14, 1, 1),
(207, 14, 2, 1),
(208, 14, 3, 1),
(209, 14, 4, 1),
(210, 14, 5, 1),
(211, 14, 7, 1),
(212, 14, 8, 1),
(213, 14, 9, 1),
(214, 14, 10, 1),
(215, 14, 11, 1),
(216, 14, 12, 1),
(217, 14, 13, 1),
(218, 14, 14, 1),
(219, 14, 15, 1),
(220, 14, 16, 1),
(221, 14, 17, 1),
(222, 14, 18, 1),
(223, 14, 20, 1),
(224, 14, 21, 1),
(225, 15, 1, 1),
(226, 15, 3, 1),
(227, 15, 5, 1),
(228, 15, 6, 1),
(229, 15, 7, 1),
(230, 15, 8, 1),
(231, 15, 9, 1),
(232, 15, 10, 1),
(233, 15, 12, 1),
(234, 15, 13, 1),
(235, 15, 14, 1),
(236, 15, 16, 1),
(237, 15, 18, 1),
(238, 15, 19, 1),
(239, 15, 20, 1),
(240, 15, 21, 1),
(241, 16, 1, 1),
(242, 16, 3, 1),
(243, 16, 6, 1),
(244, 16, 7, 1),
(245, 16, 9, 1),
(246, 16, 11, 1),
(247, 16, 12, 1),
(248, 16, 13, 1),
(249, 16, 14, 1),
(250, 16, 15, 1),
(251, 16, 16, 1),
(252, 16, 17, 1),
(253, 16, 19, 1),
(254, 16, 20, 1),
(255, 16, 21, 1),
(256, 17, 1, 1),
(257, 17, 2, 1),
(258, 17, 3, 1),
(259, 17, 5, 1),
(260, 17, 7, 1),
(261, 17, 8, 1),
(262, 17, 9, 1),
(263, 17, 10, 1),
(264, 17, 11, 1),
(265, 17, 14, 1),
(266, 17, 15, 1),
(267, 17, 16, 1),
(268, 17, 17, 1),
(269, 17, 18, 1),
(270, 17, 19, 1),
(271, 17, 20, 1),
(272, 17, 21, 1),
(273, 18, 1, 1),
(274, 18, 3, 1),
(275, 18, 4, 1),
(276, 18, 5, 1),
(277, 18, 6, 1),
(278, 18, 7, 1),
(279, 18, 8, 1),
(280, 18, 10, 1),
(281, 18, 11, 1),
(282, 18, 12, 1),
(283, 18, 14, 1),
(284, 18, 16, 1),
(285, 18, 17, 1),
(286, 18, 18, 1),
(287, 18, 20, 1),
(288, 18, 21, 1),
(289, 19, 1, 1),
(290, 19, 2, 1),
(291, 19, 3, 1),
(292, 19, 4, 1),
(293, 19, 5, 1),
(294, 19, 6, 1),
(295, 19, 9, 1),
(296, 19, 10, 1),
(297, 19, 11, 1),
(298, 19, 12, 1),
(299, 19, 13, 1),
(300, 19, 15, 1),
(301, 19, 16, 1),
(302, 19, 17, 1),
(303, 19, 18, 1),
(304, 19, 20, 1),
(305, 19, 21, 1),
(306, 20, 1, 1),
(307, 20, 2, 1),
(308, 20, 3, 1),
(309, 20, 4, 1),
(310, 20, 5, 1),
(311, 20, 6, 1),
(312, 20, 7, 1),
(313, 20, 9, 1),
(314, 20, 10, 1),
(315, 20, 11, 1),
(316, 20, 12, 1),
(317, 20, 14, 1),
(318, 20, 15, 1),
(319, 20, 17, 1),
(320, 20, 18, 1),
(321, 20, 19, 1),
(322, 20, 20, 1),
(323, 20, 21, 1),
(324, 21, 1, 1),
(325, 21, 2, 1),
(326, 21, 3, 1),
(327, 21, 4, 1),
(328, 21, 6, 1),
(329, 21, 7, 1),
(330, 21, 8, 1),
(331, 21, 10, 1),
(332, 21, 11, 1),
(333, 21, 12, 1),
(334, 21, 13, 1),
(335, 21, 15, 1),
(336, 21, 16, 1),
(337, 21, 17, 1),
(338, 21, 18, 1),
(339, 21, 19, 1),
(340, 21, 20, 1),
(341, 21, 21, 1),
(342, 22, 1, 1),
(343, 22, 2, 1),
(344, 22, 3, 1),
(345, 22, 4, 1),
(346, 22, 5, 1),
(347, 22, 6, 1),
(348, 22, 9, 1),
(349, 22, 10, 1),
(350, 22, 11, 1),
(351, 22, 12, 1),
(352, 22, 13, 1),
(353, 22, 14, 1),
(354, 22, 16, 1),
(355, 22, 18, 1),
(356, 22, 19, 1),
(357, 22, 20, 1),
(358, 22, 21, 1),
(359, 23, 1, 1),
(360, 23, 3, 1),
(361, 23, 4, 1),
(362, 23, 5, 1),
(363, 23, 6, 1),
(364, 23, 7, 1),
(365, 23, 8, 1),
(366, 23, 10, 1),
(367, 23, 11, 1),
(368, 23, 12, 1),
(369, 23, 13, 1),
(370, 23, 14, 1),
(371, 23, 15, 1),
(372, 23, 16, 1),
(373, 23, 17, 1),
(374, 23, 18, 1),
(375, 23, 20, 1),
(376, 23, 21, 1),
(377, 24, 1, 1),
(378, 24, 2, 1),
(379, 24, 3, 1),
(380, 24, 5, 1),
(381, 24, 6, 1),
(382, 24, 7, 1),
(383, 24, 8, 1),
(384, 24, 9, 1),
(385, 24, 10, 1),
(386, 24, 11, 1),
(387, 24, 14, 1),
(388, 24, 15, 1),
(389, 24, 16, 1),
(390, 24, 18, 1),
(391, 24, 19, 1),
(392, 24, 20, 1),
(393, 24, 21, 1),
(394, 25, 1, 1),
(395, 25, 3, 1),
(396, 25, 4, 1),
(397, 25, 5, 1),
(398, 25, 6, 1),
(399, 25, 7, 1),
(400, 25, 10, 1),
(401, 25, 11, 1),
(402, 25, 12, 1),
(403, 25, 13, 1),
(404, 25, 14, 1),
(405, 25, 15, 1),
(406, 25, 18, 1),
(407, 25, 20, 1),
(408, 25, 21, 1),
(409, 26, 1, 1),
(410, 26, 2, 1),
(411, 26, 3, 1),
(412, 26, 4, 1),
(413, 26, 5, 1),
(414, 26, 7, 1),
(415, 26, 8, 1),
(416, 26, 11, 1),
(417, 26, 12, 1),
(418, 26, 13, 1),
(419, 26, 14, 1),
(420, 26, 17, 1),
(421, 26, 19, 1),
(422, 26, 20, 1),
(423, 26, 21, 1),
(424, 27, 2, 1),
(425, 27, 4, 1),
(426, 27, 5, 1),
(427, 27, 7, 1),
(428, 27, 8, 1),
(429, 27, 10, 1),
(430, 27, 11, 1),
(431, 27, 12, 1),
(432, 27, 13, 1),
(433, 27, 14, 1),
(434, 27, 15, 1),
(435, 27, 17, 1),
(436, 27, 19, 1),
(437, 27, 20, 1),
(438, 28, 1, 1),
(439, 28, 2, 1),
(440, 28, 3, 1),
(441, 28, 4, 1),
(442, 28, 5, 1),
(443, 28, 6, 1),
(444, 28, 7, 1),
(445, 28, 8, 1),
(446, 28, 9, 1),
(447, 28, 10, 1),
(448, 28, 11, 1),
(449, 28, 14, 1),
(450, 28, 15, 1),
(451, 28, 18, 1),
(452, 28, 19, 1),
(453, 28, 20, 1),
(454, 28, 21, 1),
(455, 29, 1, 1),
(456, 29, 2, 1),
(457, 29, 3, 1),
(458, 29, 4, 1),
(459, 29, 6, 1),
(460, 29, 8, 1),
(461, 29, 9, 1),
(462, 29, 10, 1),
(463, 29, 12, 1),
(464, 29, 13, 1),
(465, 29, 14, 1),
(466, 29, 16, 1),
(467, 29, 17, 1),
(468, 29, 19, 1),
(469, 29, 20, 1),
(470, 30, 2, 1),
(471, 30, 3, 1),
(472, 30, 5, 1),
(473, 30, 6, 1),
(474, 30, 7, 1),
(475, 30, 8, 1),
(476, 30, 9, 1),
(477, 30, 10, 1),
(478, 30, 13, 1),
(479, 30, 15, 1),
(480, 30, 16, 1),
(481, 30, 17, 1),
(482, 30, 19, 1),
(483, 30, 18, 1),
(484, 30, 20, 1),
(485, 31, 1, 1),
(486, 31, 2, 1),
(487, 31, 3, 1),
(488, 31, 4, 1),
(489, 31, 5, 1),
(490, 31, 8, 1),
(491, 31, 9, 1),
(492, 31, 12, 1),
(493, 31, 14, 1),
(494, 31, 15, 1),
(495, 31, 18, 1),
(496, 31, 19, 1),
(497, 31, 20, 1),
(498, 32, 2, 1),
(499, 32, 3, 1),
(500, 32, 4, 1),
(501, 32, 5, 1),
(502, 32, 6, 1),
(503, 32, 7, 1),
(504, 32, 8, 1),
(505, 32, 9, 1),
(506, 32, 10, 1),
(507, 32, 11, 1),
(508, 32, 12, 1),
(509, 32, 13, 1),
(510, 32, 14, 1),
(511, 32, 15, 1),
(512, 32, 16, 1),
(513, 32, 19, 1),
(514, 32, 20, 1),
(515, 32, 21, 1),
(516, 33, 1, 1),
(517, 33, 4, 1),
(518, 33, 6, 1),
(519, 33, 8, 1),
(520, 33, 9, 1),
(521, 33, 11, 1),
(522, 33, 12, 1),
(523, 33, 14, 1),
(524, 33, 15, 1),
(525, 33, 16, 1),
(526, 33, 17, 1),
(527, 34, 1, 1),
(528, 34, 2, 1),
(529, 34, 3, 1),
(530, 34, 4, 1),
(531, 34, 6, 1),
(532, 34, 7, 1),
(533, 34, 8, 1),
(534, 34, 9, 1),
(535, 34, 10, 1),
(536, 34, 11, 1),
(537, 34, 12, 1),
(538, 34, 13, 1),
(539, 34, 14, 1),
(540, 34, 15, 1),
(541, 34, 16, 1),
(542, 34, 17, 1),
(543, 34, 19, 1),
(544, 34, 20, 1),
(545, 34, 21, 1),
(546, 35, 3, 1),
(547, 35, 6, 1),
(548, 35, 8, 1),
(549, 35, 9, 1),
(550, 35, 10, 1),
(551, 35, 11, 1),
(552, 35, 13, 1),
(553, 35, 15, 1),
(554, 35, 16, 1),
(555, 35, 17, 1),
(556, 35, 18, 1),
(557, 35, 19, 1),
(558, 35, 20, 1),
(559, 35, 21, 1),
(560, 36, 1, 1),
(561, 36, 2, 1),
(562, 36, 3, 1),
(563, 36, 5, 1),
(564, 36, 6, 1),
(565, 36, 8, 1),
(566, 36, 10, 1),
(567, 36, 11, 1),
(568, 36, 12, 1),
(569, 36, 13, 1),
(570, 36, 14, 1),
(571, 36, 16, 1),
(572, 36, 17, 1),
(573, 36, 18, 1),
(574, 36, 19, 1),
(575, 36, 20, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbrelorgtiponegocio`
--

DROP TABLE IF EXISTS `tbrelorgtiponegocio`;
CREATE TABLE `tbrelorgtiponegocio` (
  `idrelorgTiponegocio` int(11) NOT NULL,
  `idOrg` int(11) NOT NULL,
  `idTipoTr` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbrelorgtiponegocio`
--

INSERT INTO `tbrelorgtiponegocio` (`idrelorgTiponegocio`, `idOrg`, `idTipoTr`, `status`) VALUES
(1, 1, 1, 1),
(2, 1, 2, 1),
(3, 1, 4, 1),
(4, 1, 5, 1),
(5, 1, 6, 1),
(6, 1, 7, 1),
(7, 2, 1, 1),
(8, 2, 2, 1),
(9, 2, 3, 1),
(10, 2, 4, 1),
(11, 3, 1, 1),
(12, 3, 2, 1),
(13, 3, 3, 1),
(14, 3, 5, 1),
(15, 4, 1, 1),
(16, 4, 2, 1),
(17, 4, 4, 1),
(18, 4, 5, 1),
(19, 5, 1, 1),
(20, 5, 3, 1),
(21, 5, 4, 1),
(22, 5, 5, 1),
(23, 5, 7, 1),
(24, 6, 1, 1),
(25, 6, 2, 1),
(26, 7, 2, 1),
(27, 7, 3, 1),
(28, 7, 4, 1),
(29, 8, 1, 1),
(30, 8, 5, 1),
(31, 8, 3, 1),
(32, 9, 1, 1),
(33, 9, 3, 1),
(34, 10, 1, 1),
(35, 10, 4, 1),
(36, 10, 6, 1),
(37, 10, 7, 1),
(38, 11, 2, 1),
(39, 11, 6, 1),
(40, 12, 1, 1),
(41, 12, 2, 1),
(42, 12, 3, 1),
(43, 13, 1, 1),
(44, 13, 3, 1),
(45, 13, 5, 1),
(46, 14, 2, 1),
(47, 14, 4, 1),
(48, 14, 6, 1),
(49, 15, 1, 1),
(50, 15, 2, 1),
(51, 15, 4, 1),
(52, 15, 5, 1),
(53, 16, 3, 1),
(54, 16, 5, 1),
(55, 16, 7, 1),
(56, 17, 1, 1),
(57, 17, 2, 1),
(58, 17, 3, 1),
(59, 17, 4, 1),
(60, 17, 5, 1),
(61, 18, 2, 1),
(62, 18, 5, 1),
(63, 18, 6, 1),
(64, 19, 1, 1),
(65, 19, 2, 1),
(66, 19, 3, 1),
(67, 19, 4, 1),
(68, 20, 1, 1),
(69, 20, 2, 1),
(70, 20, 4, 1),
(71, 21, 2, 1),
(72, 21, 3, 1),
(73, 21, 4, 1),
(74, 22, 1, 1),
(75, 22, 2, 1),
(76, 22, 3, 1),
(77, 22, 4, 1),
(78, 23, 3, 1),
(79, 23, 4, 1),
(80, 23, 5, 1),
(81, 24, 2, 1),
(82, 24, 4, 1),
(83, 24, 5, 1),
(84, 25, 1, 1),
(85, 25, 2, 1),
(86, 25, 3, 1),
(87, 26, 1, 1),
(88, 26, 2, 1),
(89, 26, 3, 1),
(90, 26, 4, 1),
(91, 27, 3, 1),
(92, 27, 4, 1),
(93, 27, 5, 1),
(94, 27, 6, 1),
(95, 28, 2, 1),
(96, 28, 3, 1),
(97, 28, 4, 1),
(98, 28, 5, 1),
(99, 29, 3, 1),
(100, 29, 4, 1),
(101, 29, 5, 1),
(102, 30, 1, 1),
(103, 30, 2, 1),
(104, 30, 3, 1),
(105, 31, 2, 1),
(106, 31, 4, 1),
(107, 31, 7, 1),
(108, 32, 2, 1),
(109, 32, 3, 1),
(110, 32, 4, 1),
(111, 33, 2, 1),
(112, 33, 5, 1),
(113, 33, 7, 1),
(114, 34, 1, 1),
(115, 34, 6, 1),
(116, 34, 7, 1),
(117, 35, 1, 1),
(118, 35, 2, 1),
(119, 35, 3, 1),
(120, 35, 4, 1),
(121, 36, 2, 1),
(122, 36, 3, 1),
(123, 36, 4, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbreltypohabitacionhotel`
--

DROP TABLE IF EXISTS `tbreltypohabitacionhotel`;
CREATE TABLE `tbreltypohabitacionhotel` (
  `idrelacion` int(11) NOT NULL,
  `idnitHotel` int(11) NOT NULL COMMENT 'Clave primaria tbHotelCliente',
  `idtipoHab` int(11) NOT NULL COMMENT 'Clave primaria tbtypoHabitacion',
  `canHabitaciones` tinyint(4) DEFAULT NULL,
  `status` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='relacionar typoHabitacion-tbHotelCliente';

--
-- Volcado de datos para la tabla `tbreltypohabitacionhotel`
--

INSERT INTO `tbreltypohabitacionhotel` (`idrelacion`, `idnitHotel`, `idtipoHab`, `canHabitaciones`, `status`) VALUES
(1, 0, 0, NULL, 1),
(2, 0, 0, NULL, 1),
(3, 0, 0, NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbrgtrohabitacion`
--

DROP TABLE IF EXISTS `tbrgtrohabitacion`;
CREATE TABLE `tbrgtrohabitacion` (
  `idrgtroHabitacion` int(11) NOT NULL,
  `idRegistro` int(11) NOT NULL,
  `idHabitacion` int(11) NOT NULL,
  `fecocupadaInicio` date NOT NULL,
  `fecocupadaFinal` date NOT NULL,
  `status` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbroles`
--

DROP TABLE IF EXISTS `tbroles`;
CREATE TABLE `tbroles` (
  `idRol` int(11) NOT NULL,
  `nomRol` varchar(40) NOT NULL,
  `status` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbrolespersonas`
--

DROP TABLE IF EXISTS `tbrolespersonas`;
CREATE TABLE `tbrolespersonas` (
  `idrelacion` int(11) NOT NULL,
  `idCedula` int(11) NOT NULL,
  `idRol` int(11) NOT NULL,
  `status` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbserviciostr`
--

DROP TABLE IF EXISTS `tbserviciostr`;
CREATE TABLE `tbserviciostr` (
  `idServicioTr` int(11) NOT NULL,
  `descServicio` varchar(40) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbserviciostr`
--

INSERT INTO `tbserviciostr` (`idServicioTr`, `descServicio`, `status`) VALUES
(1, 'Piscina', 1),
(2, 'WiFi', 1),
(3, 'Bar', 1),
(4, 'Restaurante', 1),
(5, 'Parqueadero', 1),
(6, 'Paseo millonario', 1),
(7, 'Zonas fumadores', 1),
(8, 'servicio-1-2-3-con-3035 abc 65454', 1),
(9, 'servicio-1-con-2525 abc 25002', 1),
(10, 'servicio-1-con-4651 abc 82168', 1),
(11, 'servicio-1-2-3-con-3837 abc 70062', 1),
(12, 'servicio-1-con-2405 abc 52542', 1),
(13, 'servicio-1-con-2942 abc 49092', 1),
(14, 'servicio-1-con-4671 abc 64280', 1),
(15, 'servicio-1-2-3-con-1769 abc 41898', 1),
(16, 'servicio-1-con-1791 abc 36463', 1),
(17, 'Servicio-1-2-con-1788 abc 84120', 1),
(18, 'Servicio-1-2-con-4964 abc 26296', 1),
(19, 'servicio-1-con-4852 abc 84673', 1),
(20, 'servicio-1-con-4788 abc 30457', 1),
(21, 'servicio-1-con-3767 abc 13342', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbsubcategoria`
--

DROP TABLE IF EXISTS `tbsubcategoria`;
CREATE TABLE `tbsubcategoria` (
  `id` int(11) NOT NULL,
  `idCategoria` int(11) NOT NULL DEFAULT 1 COMMENT 'Para relacionar con tbCateroiaFron',
  `iconCategory` varchar(100) DEFAULT NULL,
  `nomsubCategory` varchar(25) NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime NOT NULL,
  `estado` tinyint(4) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabla subcategria para que el usuario seleccione';

--
-- Volcado de datos para la tabla `tbsubcategoria`
--

INSERT INTO `tbsubcategoria` (`id`, `idCategoria`, `iconCategory`, `nomsubCategory`, `description`, `created_at`, `estado`) VALUES
(1, 1, NULL, 'Casa finca', 'Short1', '2018-10-15 03:16:26', 1),
(2, 1, NULL, 'Finca', 'Falda2', '2018-10-15 03:16:36', 1),
(3, 1, NULL, 'Hostal campesino', 'Set3', '2018-10-15 03:16:44', 1),
(4, 2, NULL, 'Con piscina', 'Blusa4', '2018-10-15 03:16:54', 1),
(5, 2, NULL, 'Ecologica', 'Top5', '2018-10-15 03:17:03', 1),
(6, 3, NULL, 'Jean', 'Jean6', '2018-10-15 03:17:14', 1),
(7, 3, NULL, 'Falda short', 'Falda short7', '2018-10-15 03:17:27', 1),
(8, 4, NULL, 'Enterito', 'Enterito8', '2018-10-15 03:17:37', 1),
(9, 4, NULL, 'Bluson', 'Bluson9', '2018-10-15 08:19:29', 1),
(10, 5, NULL, 'Vestido', 'Vestido10', '2018-10-15 08:22:53', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbsubmenu`
--

DROP TABLE IF EXISTS `tbsubmenu`;
CREATE TABLE `tbsubmenu` (
  `idSubmenu` int(11) NOT NULL,
  `idmenu` int(11) NOT NULL,
  `titsubmenu` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `lnksubmenu` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `possubmenu` tinyint(4) NOT NULL DEFAULT 1,
  `estado` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbsubmenu`
--

INSERT INTO `tbsubmenu` (`idSubmenu`, `idmenu`, `titsubmenu`, `lnksubmenu`, `possubmenu`, `estado`) VALUES
(1, 1, 'Estado civil', 'prgestadocivil/Index.php', 1, 1),
(2, 1, 'Municipios', 'prgmunicipio/Index.php', 2, 1),
(3, 1, 'Tipo documento', 'prgtipodoc/Index.php', 3, 1),
(4, 1, 'Tipo empleado', 'prgtipoEmpleado/Index.php', 4, 1),
(5, 1, 'Tipo Vivienda', 'prgVivienda/Index.php', 5, 1),
(6, 1, 'Estrato', 'prgEstrato/Index.php', 6, 1),
(7, 2, 'Tipo caso', 'prgtiocasos/Index.php', 1, 1),
(8, 2, 'Detalle Caso', 'prgDetallecaso/Index.php', 2, 1),
(9, 3, 'Especialidades', 'prgSpecialAbogado/Index.php', 1, 1),
(10, 3, 'Datos Generales', 'prgEmpleado/prgpag00.php', 2, 1),
(11, 4, 'Datos Generales', 'prgDatosEmpleados/Index.php', 1, 1),
(12, 5, 'Informe nro-1', 'prgconsulta1/Index.php', 1, 1),
(13, 5, 'Informe nro', 'prgconsulta2/Index.php', 2, 1),
(14, 6, 'Copia Seguridad', 'prgInforme1/Index.php', 1, 1),
(15, 6, 'Permisos', 'prgInforme2/Index.php', 2, 1),
(16, 6, 'Menus', 'prgInforme3/Index.php', 3, 1),
(17, 6, 'Informe-4', 'prgInforme4/Index.php', 4, 0),
(18, 7, 'Datos Basicos', 'prgEmpleado/Index.php?x=1', 1, 1),
(19, 8, 'Pruebas datos', 'prgpruebas/prgpag00.php', 2, 1),
(20, 9, 'Base con 16000', 'prgOpciones/Index.php', 1, 1),
(21, 10, 'Tabla con 22000', 'prgDemo/index.php', 1, 1),
(22, 1, 'Area derecho', 'prgAreaderecho/Index.php', 2, 1),
(23, 1, 'Comunas', 'prgcomuna/Index.php', 3, 1),
(24, 11, 'Matricular tercero', 'prgtercero/index.php', 1, 1),
(25, 12, 'Matricular cliente', 'prgclientes/index.php', 1, 1),
(26, 12, 'Tipo cliente', 'prgtipocliente/Index.php', 2, 1),
(27, 13, 'Consultar', 'prgcertificados/indexbusca.php', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbtiponegociotr`
--

DROP TABLE IF EXISTS `tbtiponegociotr`;
CREATE TABLE `tbtiponegociotr` (
  `idTipoTr` int(11) NOT NULL,
  `desTiponegocio` varchar(40) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbtiponegociotr`
--

INSERT INTO `tbtiponegociotr` (`idTipoTr`, `desTiponegocio`, `status`) VALUES
(1, 'Hotel', 1),
(2, 'Cabaña', 1),
(3, 'Camping', 1),
(4, 'Hotel & Cabaña', 1),
(5, 'Hotel & camping', 1),
(6, 'Cabaña & camping', 1),
(7, 'Hotel, Cabaña y camping', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbtmpgeneral`
--

DROP TABLE IF EXISTS `tbtmpgeneral`;
CREATE TABLE `tbtmpgeneral` (
  `idgeneral` int(11) NOT NULL,
  `codtipo` int(11) DEFAULT NULL,
  `descampo` varchar(50) DEFAULT NULL,
  `tokenuser` varchar(100) DEFAULT NULL,
  `tipoprocess` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbtypodocumento`
--

DROP TABLE IF EXISTS `tbtypodocumento`;
CREATE TABLE `tbtypodocumento` (
  `idtipoDoc` int(11) NOT NULL,
  `nomtipoDoc` varchar(40) NOT NULL,
  `status` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbtypodocumento`
--

INSERT INTO `tbtypodocumento` (`idtipoDoc`, `nomtipoDoc`, `status`) VALUES
(1, 'Cedula', 1),
(2, 'Tarjeta identidad', 1),
(3, 'Cedula Extranjera', 1),
(4, 'Pasaporte', 1),
(5, 'tipo-1', 1),
(6, 'tipo-2202', 1),
(7, 'tipo-3', 1),
(8, 'tipo-4', 1),
(9, 'tipo-5', 1),
(10, 'tipo-6', 1),
(11, 'tipo-7', 1),
(12, 'tipo-8', 1),
(13, 'tipo-9', 1),
(14, 'tipo-10', 1),
(15, 'tipo-110', 1),
(16, 'tipo-12', 1),
(17, 'tipo-13', 1),
(18, 'tipo-14', 1),
(19, 'tipo-15', 1),
(20, 'tipo-16', 1),
(21, 'tipo-170', 1),
(33, 'tipop-999', 1),
(42, 'aaaaa', 1),
(43, 'tarjeta membresia', 1),
(44, 'tipo-991', 1),
(45, 'cartulina', 1),
(46, 'carticas', 1),
(47, 'cartulina plastificada111', 1),
(48, 'aaaaa1', 1),
(49, 'nuevo tipo documento-1', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbtypohabitacion`
--

DROP TABLE IF EXISTS `tbtypohabitacion`;
CREATE TABLE `tbtypohabitacion` (
  `idtipoHab` int(11) NOT NULL,
  `nomTipo` varchar(20) NOT NULL,
  `desTipo` varchar(60) NOT NULL,
  `rutaimagen` varchar(100) DEFAULT '',
  `status` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbtypohabitacion`
--

INSERT INTO `tbtypohabitacion` (`idtipoHab`, `nomTipo`, `desTipo`, `rutaimagen`, `status`) VALUES
(1, 'SUITE CATEGORIA', 'TV, JACUZI', '', 1),
(2, 'SENCILLA', 'CAMA SENCILLA, NOCHERO, TV, BAñO INTERNO', '', 1),
(3, 'SENCILLA DOBLE', 'CON CAMA DOBLE, SIN BAñO', '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbundmedida`
--

DROP TABLE IF EXISTS `tbundmedida`;
CREATE TABLE `tbundmedida` (
  `idUnidadm` int(11) NOT NULL,
  `nomUnidadm` varchar(25) DEFAULT NULL,
  `status` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbundmedida`
--

INSERT INTO `tbundmedida` (`idUnidadm`, `nomUnidadm`, `status`) VALUES
(1, 'BOLSA LITRO 1000ML', 1),
(2, '350ML', 1),
(3, 'BOLSA 500ML', 1),
(4, 'BOTELLA LITRO 1000ML', 1),
(5, 'LATA X 350ML', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tmpmobiliario`
--

DROP TABLE IF EXISTS `tmpmobiliario`;
CREATE TABLE `tmpmobiliario` (
  `idtmp` int(11) NOT NULL,
  `nrohab` int(11) NOT NULL,
  `keyhab` int(11) NOT NULL,
  `keymob` int(11) NOT NULL,
  `nommob` varchar(80) NOT NULL,
  `canmov` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `xx1`
--

DROP TABLE IF EXISTS `xx1`;
CREATE TABLE `xx1` (
  `c` int(11) NOT NULL,
  `idorg` int(11) NOT NULL DEFAULT 0,
  `nitdni` varchar(15) NOT NULL DEFAULT ' ',
  `nomborg` varchar(60) NOT NULL DEFAULT ' ',
  `rutaimagen` varchar(100) NOT NULL DEFAULT ' ',
  `idtipotr` varchar(250) NOT NULL DEFAULT ' ',
  `IdDescripcionTr` varchar(250) NOT NULL DEFAULT ' '
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `xx1`
--

INSERT INTO `xx1` (`c`, `idorg`, `nitdni`, `nomborg`, `rutaimagen`, `idtipotr`, `IdDescripcionTr`) VALUES
(1, 1, '11111', 'Hotel numero-1', 'dir1/imgHotel/', '1-2-3-4', '1-3'),
(2, 3, '11113', 'Hotel numero-3', 'dir3/imgHotel/', '4-1-6', '1-5'),
(3, 4, '11114', 'Hotel numero-4', 'dir4/imgHotel/', '5-1', '2-7-6');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `xxbasica`
--

DROP TABLE IF EXISTS `xxbasica`;
CREATE TABLE `xxbasica` (
  `c` int(11) NOT NULL,
  `idorg` int(11) NOT NULL DEFAULT 0,
  `nitdni` varchar(15) NOT NULL DEFAULT ' ',
  `nomborg` varchar(60) NOT NULL DEFAULT ' ',
  `rutaimagen` varchar(100) NOT NULL DEFAULT ' ',
  `idtipotr` varchar(250) NOT NULL DEFAULT ' ',
  `IdDescripcionTr` varchar(250) NOT NULL DEFAULT ' ',
  `tokenser` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbaccesibilidadtr`
--
ALTER TABLE `tbaccesibilidadtr`
  ADD PRIMARY KEY (`idAccesibilidadTr`);

--
-- Indices de la tabla `tbcapacidadtr`
--
ALTER TABLE `tbcapacidadtr`
  ADD PRIMARY KEY (`idCapacidadTr`);

--
-- Indices de la tabla `tbcateroiafron`
--
ALTER TABLE `tbcateroiafron`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbciudades`
--
ALTER TABLE `tbciudades`
  ADD PRIMARY KEY (`idCiudad`),
  ADD KEY `iddpto` (`iddpto`);

--
-- Indices de la tabla `tbdeptos`
--
ALTER TABLE `tbdeptos`
  ADD PRIMARY KEY (`iddpto`),
  ADD KEY `idpais` (`idpais`);

--
-- Indices de la tabla `tbdescripciontr`
--
ALTER TABLE `tbdescripciontr`
  ADD PRIMARY KEY (`IdDescripcionTr`);

--
-- Indices de la tabla `tbestadohabitacion`
--
ALTER TABLE `tbestadohabitacion`
  ADD PRIMARY KEY (`idEstadoh`);

--
-- Indices de la tabla `tbestadoreserva`
--
ALTER TABLE `tbestadoreserva`
  ADD PRIMARY KEY (`idestador`);

--
-- Indices de la tabla `tbfactura`
--
ALTER TABLE `tbfactura`
  ADD PRIMARY KEY (`idFactura`),
  ADD KEY `idRegistro` (`idRegistro`),
  ADD KEY `idnitHotel` (`idnitHotel`);

--
-- Indices de la tabla `tbfamiliares`
--
ALTER TABLE `tbfamiliares`
  ADD PRIMARY KEY (`idfamiliar`),
  ADD KEY `idRegistro` (`idRegistro`),
  ADD KEY `idtipoDoc` (`idtipoDoc`);

--
-- Indices de la tabla `tbhabitacion`
--
ALTER TABLE `tbhabitacion`
  ADD PRIMARY KEY (`idHabitacion`),
  ADD KEY `idEstadoh` (`idEstadoh`),
  ADD KEY `idtipoHab` (`idtipoHab`);

--
-- Indices de la tabla `tbhabitacionxpiso`
--
ALTER TABLE `tbhabitacionxpiso`
  ADD PRIMARY KEY (`idppal`);

--
-- Indices de la tabla `tbhabmobiliario`
--
ALTER TABLE `tbhabmobiliario`
  ADD PRIMARY KEY (`idhabMobiliario`),
  ADD KEY `idHabitacion` (`idHabitacion`),
  ADD KEY `idMobiliario` (`idMobiliario`);

--
-- Indices de la tabla `tbhotelcliente`
--
ALTER TABLE `tbhotelcliente`
  ADD PRIMARY KEY (`idnitHotel`);

--
-- Indices de la tabla `tbinfohotel`
--
ALTER TABLE `tbinfohotel`
  ADD PRIMARY KEY (`idnitHotel`);

--
-- Indices de la tabla `tbinstalacionestr`
--
ALTER TABLE `tbinstalacionestr`
  ADD PRIMARY KEY (`idInstalacionTr`);

--
-- Indices de la tabla `tblogin`
--
ALTER TABLE `tblogin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbmedioreserva`
--
ALTER TABLE `tbmedioreserva`
  ADD PRIMARY KEY (`idmedio`);

--
-- Indices de la tabla `tbmenu`
--
ALTER TABLE `tbmenu`
  ADD PRIMARY KEY (`idmenu`);

--
-- Indices de la tabla `tbmobiliario`
--
ALTER TABLE `tbmobiliario`
  ADD PRIMARY KEY (`idMobiliario`);

--
-- Indices de la tabla `tbmunicipios`
--
ALTER TABLE `tbmunicipios`
  ADD PRIMARY KEY (`idCiudad`),
  ADD KEY `iddpto` (`iddpto`);

--
-- Indices de la tabla `tbocupaciones`
--
ALTER TABLE `tbocupaciones`
  ADD PRIMARY KEY (`idOcupacion`);

--
-- Indices de la tabla `tborganizacion`
--
-- ALTER TABLE `tborganizacion`
--   ADD PRIMARY KEY (`idOrg`);

--
-- Indices de la tabla `tbpaises`
--
ALTER TABLE `tbpaises`
  ADD PRIMARY KEY (`idpais`);

--
-- Indices de la tabla `tbpermisos`
--
ALTER TABLE `tbpermisos`
  ADD PRIMARY KEY (`idPermiso`);

--
-- Indices de la tabla `tbpersonas`
--
ALTER TABLE `tbpersonas`
  ADD PRIMARY KEY (`idCedula`),
  ADD KEY `idtipoDoc` (`idtipoDoc`),
  ADD KEY `idOcupacion` (`idOcupacion`);

--
-- Indices de la tabla `tbproductofactura`
--
ALTER TABLE `tbproductofactura`
  ADD PRIMARY KEY (`idrelacion`),
  ADD KEY `idFactura` (`idFactura`),
  ADD KEY `idproducto` (`idproducto`);

--
-- Indices de la tabla `tbproductos`
--
ALTER TABLE `tbproductos`
  ADD PRIMARY KEY (`idproducto`),
  ADD KEY `idUnidadm` (`idUnidadm`);

--
-- Indices de la tabla `tbredsocial`
--
ALTER TABLE `tbredsocial`
  ADD PRIMARY KEY (`idUnidadm`);

--
-- Indices de la tabla `tbregistroreserva`
--
ALTER TABLE `tbregistroreserva`
  ADD PRIMARY KEY (`idRegistro`),
  ADD KEY `idorigenCliente` (`idorigenCliente`),
  ADD KEY `idDestinoCliente` (`idDestinoCliente`),
  ADD KEY `idestadoReserva` (`idestadoReserva`),
  ADD KEY `idmedio` (`idmedio`),
  ADD KEY `idCedula` (`idCedula`);

--
-- Indices de la tabla `tbrelhotelcategoria`
--
ALTER TABLE `tbrelhotelcategoria`
  ADD PRIMARY KEY (`idRelacion`);

--
-- Indices de la tabla `tbrelorgaccesibilidad`
--
ALTER TABLE `tbrelorgaccesibilidad`
  ADD PRIMARY KEY (`idrelorgAccesibilidad`);

--
-- Indices de la tabla `tbrelorgdescripcion`
--
ALTER TABLE `tbrelorgdescripcion`
  ADD PRIMARY KEY (`idrelorgDescripcion`);

--
-- Indices de la tabla `tbrelorginstalacion`
--
ALTER TABLE `tbrelorginstalacion`
  ADD PRIMARY KEY (`idrelorgInstalacion`);

--
-- Indices de la tabla `tbrelorgredes`
--
ALTER TABLE `tbrelorgredes`
  ADD PRIMARY KEY (`idrelorgRedes`);

--
-- Indices de la tabla `tbrelorgservicios`
--
ALTER TABLE `tbrelorgservicios`
  ADD PRIMARY KEY (`idrelorgServicios`);

--
-- Indices de la tabla `tbrelorgtiponegocio`
--
ALTER TABLE `tbrelorgtiponegocio`
  ADD PRIMARY KEY (`idrelorgTiponegocio`);

--
-- Indices de la tabla `tbreltypohabitacionhotel`
--
ALTER TABLE `tbreltypohabitacionhotel`
  ADD PRIMARY KEY (`idrelacion`);

--
-- Indices de la tabla `tbrgtrohabitacion`
--
ALTER TABLE `tbrgtrohabitacion`
  ADD PRIMARY KEY (`idrgtroHabitacion`),
  ADD KEY `idRegistro` (`idRegistro`),
  ADD KEY `idHabitacion` (`idHabitacion`);

--
-- Indices de la tabla `tbroles`
--
ALTER TABLE `tbroles`
  ADD PRIMARY KEY (`idRol`);

--
-- Indices de la tabla `tbrolespersonas`
--
ALTER TABLE `tbrolespersonas`
  ADD PRIMARY KEY (`idrelacion`),
  ADD KEY `idCedula` (`idCedula`),
  ADD KEY `idRol` (`idRol`);

--
-- Indices de la tabla `tbserviciostr`
--
ALTER TABLE `tbserviciostr`
  ADD PRIMARY KEY (`idServicioTr`);

--
-- Indices de la tabla `tbsubcategoria`
--
ALTER TABLE `tbsubcategoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbsubmenu`
--
ALTER TABLE `tbsubmenu`
  ADD PRIMARY KEY (`idSubmenu`);

--
-- Indices de la tabla `tbtiponegociotr`
--
ALTER TABLE `tbtiponegociotr`
  ADD PRIMARY KEY (`idTipoTr`);

--
-- Indices de la tabla `tbtmpgeneral`
--
ALTER TABLE `tbtmpgeneral`
  ADD PRIMARY KEY (`idgeneral`);

--
-- Indices de la tabla `tbtypodocumento`
--
ALTER TABLE `tbtypodocumento`
  ADD PRIMARY KEY (`idtipoDoc`);

--
-- Indices de la tabla `tbtypohabitacion`
--
ALTER TABLE `tbtypohabitacion`
  ADD PRIMARY KEY (`idtipoHab`);

--
-- Indices de la tabla `tbundmedida`
--
ALTER TABLE `tbundmedida`
  ADD PRIMARY KEY (`idUnidadm`);

--
-- Indices de la tabla `tmpmobiliario`
--
ALTER TABLE `tmpmobiliario`
  ADD PRIMARY KEY (`idtmp`);

--
-- Indices de la tabla `xx1`
--
ALTER TABLE `xx1`
  ADD PRIMARY KEY (`c`);

--
-- Indices de la tabla `xxbasica`
--
ALTER TABLE `xxbasica`
  ADD PRIMARY KEY (`c`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbaccesibilidadtr`
--
ALTER TABLE `tbaccesibilidadtr`
  MODIFY `idAccesibilidadTr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `tbcapacidadtr`
--
ALTER TABLE `tbcapacidadtr`
  MODIFY `idCapacidadTr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tbcateroiafron`
--
ALTER TABLE `tbcateroiafron`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT de la tabla `tbciudades`
--
ALTER TABLE `tbciudades`
  MODIFY `idCiudad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1121;

--
-- AUTO_INCREMENT de la tabla `tbdeptos`
--
ALTER TABLE `tbdeptos`
  MODIFY `iddpto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT de la tabla `tbdescripciontr`
--
ALTER TABLE `tbdescripciontr`
  MODIFY `IdDescripcionTr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `tbestadohabitacion`
--
ALTER TABLE `tbestadohabitacion`
  MODIFY `idEstadoh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tbestadoreserva`
--
ALTER TABLE `tbestadoreserva`
  MODIFY `idestador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbfactura`
--
ALTER TABLE `tbfactura`
  MODIFY `idFactura` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbfamiliares`
--
ALTER TABLE `tbfamiliares`
  MODIFY `idfamiliar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbhabitacion`
--
ALTER TABLE `tbhabitacion`
  MODIFY `idHabitacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tbhabitacionxpiso`
--
ALTER TABLE `tbhabitacionxpiso`
  MODIFY `idppal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `tbhabmobiliario`
--
ALTER TABLE `tbhabmobiliario`
  MODIFY `idhabMobiliario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tbhotelcliente`
--
ALTER TABLE `tbhotelcliente`
  MODIFY `idnitHotel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tbinfohotel`
--
ALTER TABLE `tbinfohotel`
  MODIFY `idnitHotel` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbinstalacionestr`
--
ALTER TABLE `tbinstalacionestr`
  MODIFY `idInstalacionTr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `tblogin`
--
ALTER TABLE `tblogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tbmedioreserva`
--
ALTER TABLE `tbmedioreserva`
  MODIFY `idmedio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbmenu`
--
ALTER TABLE `tbmenu`
  MODIFY `idmenu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `tbmobiliario`
--
ALTER TABLE `tbmobiliario`
  MODIFY `idMobiliario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tbmunicipios`
--
ALTER TABLE `tbmunicipios`
  MODIFY `idCiudad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1121;

--
-- AUTO_INCREMENT de la tabla `tbocupaciones`
--
ALTER TABLE `tbocupaciones`
  MODIFY `idOcupacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tborganizacion`
--
ALTER TABLE `tborganizacion`
  MODIFY `idOrg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `tbpaises`
--
ALTER TABLE `tbpaises`
  MODIFY `idpais` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbpermisos`
--
ALTER TABLE `tbpermisos`
  MODIFY `idPermiso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `tbpersonas`
--
ALTER TABLE `tbpersonas`
  MODIFY `idCedula` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbproductofactura`
--
ALTER TABLE `tbproductofactura`
  MODIFY `idrelacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbproductos`
--
ALTER TABLE `tbproductos`
  MODIFY `idproducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `tbredsocial`
--
ALTER TABLE `tbredsocial`
  MODIFY `idUnidadm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tbregistroreserva`
--
ALTER TABLE `tbregistroreserva`
  MODIFY `idRegistro` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbrelorgaccesibilidad`
--
ALTER TABLE `tbrelorgaccesibilidad`
  MODIFY `idrelorgAccesibilidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=477;

--
-- AUTO_INCREMENT de la tabla `tbrelorgdescripcion`
--
ALTER TABLE `tbrelorgdescripcion`
  MODIFY `idrelorgDescripcion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT de la tabla `tbrelorginstalacion`
--
ALTER TABLE `tbrelorginstalacion`
  MODIFY `idrelorgInstalacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=469;

--
-- AUTO_INCREMENT de la tabla `tbrelorgredes`
--
ALTER TABLE `tbrelorgredes`
  MODIFY `idrelorgRedes` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbrelorgservicios`
--
ALTER TABLE `tbrelorgservicios`
  MODIFY `idrelorgServicios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=576;

--
-- AUTO_INCREMENT de la tabla `tbrelorgtiponegocio`
--
ALTER TABLE `tbrelorgtiponegocio`
  MODIFY `idrelorgTiponegocio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT de la tabla `tbreltypohabitacionhotel`
--
ALTER TABLE `tbreltypohabitacionhotel`
  MODIFY `idrelacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tbrgtrohabitacion`
--
ALTER TABLE `tbrgtrohabitacion`
  MODIFY `idrgtroHabitacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbroles`
--
ALTER TABLE `tbroles`
  MODIFY `idRol` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbrolespersonas`
--
ALTER TABLE `tbrolespersonas`
  MODIFY `idrelacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbserviciostr`
--
ALTER TABLE `tbserviciostr`
  MODIFY `idServicioTr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `tbsubcategoria`
--
ALTER TABLE `tbsubcategoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `tbsubmenu`
--
ALTER TABLE `tbsubmenu`
  MODIFY `idSubmenu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `tbtiponegociotr`
--
ALTER TABLE `tbtiponegociotr`
  MODIFY `idTipoTr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tbtmpgeneral`
--
ALTER TABLE `tbtmpgeneral`
  MODIFY `idgeneral` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `tbtypodocumento`
--
ALTER TABLE `tbtypodocumento`
  MODIFY `idtipoDoc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT de la tabla `tbtypohabitacion`
--
ALTER TABLE `tbtypohabitacion`
  MODIFY `idtipoHab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tbundmedida`
--
ALTER TABLE `tbundmedida`
  MODIFY `idUnidadm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tmpmobiliario`
--
ALTER TABLE `tmpmobiliario`
  MODIFY `idtmp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT de la tabla `xx1`
--
ALTER TABLE `xx1`
  MODIFY `c` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `xxbasica`
--
ALTER TABLE `xxbasica`
  MODIFY `c` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbciudades`
--
ALTER TABLE `tbciudades`
  ADD CONSTRAINT `tbciudades_ibfk_1` FOREIGN KEY (`iddpto`) REFERENCES `tbdeptos` (`iddpto`);

--
-- Filtros para la tabla `tbdeptos`
--
ALTER TABLE `tbdeptos`
  ADD CONSTRAINT `tbdeptos_ibfk_1` FOREIGN KEY (`idpais`) REFERENCES `tbpaises` (`idpais`);

--
-- Filtros para la tabla `tbfactura`
--
ALTER TABLE `tbfactura`
  ADD CONSTRAINT `tbfactura_ibfk_1` FOREIGN KEY (`idRegistro`) REFERENCES `tbregistroreserva` (`idRegistro`),
  ADD CONSTRAINT `tbfactura_ibfk_2` FOREIGN KEY (`idnitHotel`) REFERENCES `tbinfohotel` (`idnitHotel`);

--
-- Filtros para la tabla `tbfamiliares`
--
ALTER TABLE `tbfamiliares`
  ADD CONSTRAINT `tbfamiliares_ibfk_1` FOREIGN KEY (`idRegistro`) REFERENCES `tbregistroreserva` (`idRegistro`),
  ADD CONSTRAINT `tbfamiliares_ibfk_2` FOREIGN KEY (`idtipoDoc`) REFERENCES `tbtypodocumento` (`idtipoDoc`);

--
-- Filtros para la tabla `tbhabitacion`
--
ALTER TABLE `tbhabitacion`
  ADD CONSTRAINT `tbhabitacion_ibfk_1` FOREIGN KEY (`idEstadoh`) REFERENCES `tbestadohabitacion` (`idEstadoh`),
  ADD CONSTRAINT `tbhabitacion_ibfk_2` FOREIGN KEY (`idtipoHab`) REFERENCES `tbtypohabitacion` (`idtipoHab`);

--
-- Filtros para la tabla `tbhabmobiliario`
--
ALTER TABLE `tbhabmobiliario`
  ADD CONSTRAINT `tbhabmobiliario_ibfk_1` FOREIGN KEY (`idHabitacion`) REFERENCES `tbhabitacion` (`idHabitacion`),
  ADD CONSTRAINT `tbhabmobiliario_ibfk_2` FOREIGN KEY (`idMobiliario`) REFERENCES `tbmobiliario` (`idMobiliario`);

--
-- Filtros para la tabla `tbpersonas`
--
ALTER TABLE `tbpersonas`
  ADD CONSTRAINT `tbpersonas_ibfk_1` FOREIGN KEY (`idtipoDoc`) REFERENCES `tbtypodocumento` (`idtipoDoc`),
  ADD CONSTRAINT `tbpersonas_ibfk_2` FOREIGN KEY (`idOcupacion`) REFERENCES `tbocupaciones` (`idOcupacion`);

--
-- Filtros para la tabla `tbproductofactura`
--
ALTER TABLE `tbproductofactura`
  ADD CONSTRAINT `tbproductofactura_ibfk_1` FOREIGN KEY (`idFactura`) REFERENCES `tbfactura` (`idFactura`),
  ADD CONSTRAINT `tbproductofactura_ibfk_2` FOREIGN KEY (`idproducto`) REFERENCES `tbproductos` (`idproducto`);

--
-- Filtros para la tabla `tbproductos`
--
ALTER TABLE `tbproductos`
  ADD CONSTRAINT `tbproductos_ibfk_1` FOREIGN KEY (`idUnidadm`) REFERENCES `tbundmedida` (`idUnidadm`);

--
-- Filtros para la tabla `tbregistroreserva`
--
ALTER TABLE `tbregistroreserva`
  ADD CONSTRAINT `tbregistroreserva_ibfk_1` FOREIGN KEY (`idorigenCliente`) REFERENCES `tbciudades` (`idCiudad`),
  ADD CONSTRAINT `tbregistroreserva_ibfk_2` FOREIGN KEY (`idDestinoCliente`) REFERENCES `tbciudades` (`idCiudad`),
  ADD CONSTRAINT `tbregistroreserva_ibfk_3` FOREIGN KEY (`idestadoReserva`) REFERENCES `tbestadoreserva` (`idestador`),
  ADD CONSTRAINT `tbregistroreserva_ibfk_4` FOREIGN KEY (`idmedio`) REFERENCES `tbmedioreserva` (`idmedio`),
  ADD CONSTRAINT `tbregistroreserva_ibfk_5` FOREIGN KEY (`idCedula`) REFERENCES `tbpersonas` (`idCedula`);

--
-- Filtros para la tabla `tbrgtrohabitacion`
--
ALTER TABLE `tbrgtrohabitacion`
  ADD CONSTRAINT `tbrgtrohabitacion_ibfk_1` FOREIGN KEY (`idRegistro`) REFERENCES `tbregistroreserva` (`idRegistro`),
  ADD CONSTRAINT `tbrgtrohabitacion_ibfk_2` FOREIGN KEY (`idHabitacion`) REFERENCES `tbhabitacion` (`idHabitacion`);

--
-- Filtros para la tabla `tbrolespersonas`
--
ALTER TABLE `tbrolespersonas`
  ADD CONSTRAINT `tbrolespersonas_ibfk_1` FOREIGN KEY (`idCedula`) REFERENCES `tbpersonas` (`idCedula`),
  ADD CONSTRAINT `tbrolespersonas_ibfk_2` FOREIGN KEY (`idRol`) REFERENCES `tbroles` (`idRol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
