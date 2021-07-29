-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-12-2020 a las 20:14:28
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hotel`
--
CREATE DATABASE IF NOT EXISTS `hotel` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `hotel`;

DELIMITER $$
--
-- Procedimientos
--
DROP PROCEDURE IF EXISTS `SP_newTypoDocumento`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_newTypoDocumento` (IN `pdescripcion` VARCHAR(80))  BEGIN
  DECLARE a int;
  set a = 20;
  SET a = (SELECT COUNT(*) FROM tbtypodocumento WHERE nomtypodocumento =pdescripcion);
  IF a = 0 THEN
    INSERT INTO tbtypodocumento(nomtypodocumento) VALUES(pdescripcion);   
    select 0 as xx;
   else
    select 1 as xx;
   END IF;
 
END$$

DROP PROCEDURE IF EXISTS `SP_oneTypoDocumento`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_oneTypoDocumento` (IN `pcriterio` INT)  BEGIN
	SELECT e.* FROM tbtypodocumento as e Where 1=1 and e.IdtipoDocumento=pcriterio;
END$$

DROP PROCEDURE IF EXISTS `sp_pagtipodocumento`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_pagtipodocumento` (`_flag` INT, `_busca` VARCHAR(200), `_pagina` INT, `_registro` INT)  BEGIN
	if _flag = 1 then
		select * from tbtypodocumento where nomtypodocumento like concat('%',_busca,'%') order by nomtypodocumento desc limit _pagina,_registro;
	else
		SELECT count(IdTipoDocumento) as total FROM tbtypodocumento WHERE nomtypodocumento LIKE CONCAT('%',_busca,'%');
	end if;	
END$$

DROP PROCEDURE IF EXISTS `sp_updateTypoDocumento`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_updateTypoDocumento` (IN `pcriterio` INT, IN `pdescripcion` VARCHAR(80))  BEGIN
  DECLARE a int;
  set a = 20;
  SET a = (SELECT COUNT(*) FROM tbtypodocumento WHERE nomtypodocumento =pdescripcion);
  IF a = 0 THEN
    Update tbtypodocumento set nomtypodocumento = pdescripcion where IdtipoDocumento=pcriterio;   
    select 0 as xx;
   else
    select 1 as xx;
   END IF; 
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE `contact` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `phoneno` int(10) DEFAULT NULL,
  `email` text DEFAULT NULL,
  `cdate` date DEFAULT NULL,
  `approval` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contact`
--

INSERT INTO `contact` (`id`, `fullname`, `phoneno`, `email`, `cdate`, `approval`) VALUES
(1, 'rodolfo', 310, 'lunarg964@gmail.com', '2020-11-23', 'Allowed'),
(2, 'rodolfo', 310, 'lunarg964@gmail.com', '2020-11-23', 'Allowed'),
(3, 'rodolfo', 310, 'lunarg964@gmail.com', '2020-11-23', 'Not Allowed'),
(4, 'Rodolfo luna', 3250, 'lunarg@mio.com', '2020-11-26', 'Allowed'),
(5, 'Rodolfo luna', 3250, 'lunarg@mio.com', '2020-11-26', 'Not Allowed'),
(6, 'Rodolfo luna', 3250, 'lunarg@mio.com', '2020-11-26', 'Not Allowed'),
(7, 'Rodolfo luna', 3250, 'lunarg@mio.com', '2020-11-26', 'Not Allowed');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE `login` (
  `id` int(10) UNSIGNED NOT NULL,
  `usname` varchar(30) DEFAULT NULL,
  `pass` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id`, `usname`, `pass`) VALUES
(1, 'Admin', '1234'),
(2, 'xxxx', '12345'),
(3, 'admin', 'admin'),
(5, 'aaaaaaa11', '121212'),
(6, 'roluguz', '1234*luna');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `newsletterlog`
--

DROP TABLE IF EXISTS `newsletterlog`;
CREATE TABLE `newsletterlog` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(52) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `news` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `newsletterlog`
--

INSERT INTO `newsletterlog` (`id`, `title`, `subject`, `news`) VALUES
(1, 'Promocion', 'Ganga de fin de año', 'Esta es una buena noticia'),
(2, 'Promocion', 'Ganga de fin de año', 'vern y disfruta de la despedida de fin de año');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE `payment` (
  `id` int(11) DEFAULT NULL,
  `title` varchar(5) DEFAULT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `troom` varchar(30) DEFAULT NULL,
  `tbed` varchar(30) DEFAULT NULL,
  `nroom` int(11) DEFAULT NULL,
  `cin` date DEFAULT NULL,
  `cout` date DEFAULT NULL,
  `ttot` double(8,2) DEFAULT NULL,
  `fintot` double(8,2) DEFAULT NULL,
  `mepr` double(8,2) DEFAULT NULL,
  `meal` varchar(30) DEFAULT NULL,
  `btot` double(8,2) DEFAULT NULL,
  `noofdays` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `payment`
--

INSERT INTO `payment` (`id`, `title`, `fname`, `lname`, `troom`, `tbed`, `nroom`, `cin`, `cout`, `ttot`, `fintot`, `mepr`, `meal`, `btot`, `noofdays`) VALUES
(2, 'Dr.', 'Richard ', 'Baily', 'Superior Room', 'Double', 1, '2018-01-05', '2018-01-26', 6720.00, 7123.20, 268.80, 'Breakfast', 134.40, 21),
(3, 'Mr.', 'Carmen', 'Tajada', 'Deluxe Room', 'Double', 1, '2018-02-01', '2018-02-15', 3080.00, 3264.80, 123.20, 'Breakfast', 61.60, 14),
(5, 'Dr.', 'Rodolfo', 'Luna', 'Superior Room', 'Single', 1, '2020-12-20', '2020-12-27', 2240.00, 2352.00, 89.60, 'Full Board', 22.40, 7),
(4, 'Dr.', 'Reyner', 'Baily', 'Guest House', 'Single', 1, '2018-01-16', '2018-01-25', 1620.00, 1701.00, 64.80, 'Full Board', 16.20, 9),
(6, 'Dr.', 'felipe', 'rivera', 'Superior Room', 'Single', 1, '2020-12-13', '2020-12-20', 2240.00, 2352.00, 89.60, 'Full Board', 22.40, 7),
(7, 'Dr.', 'Manolo', 'Pajaro(No vuela)', 'Deluxe Room', 'Triple', 5, '2020-12-27', '2020-11-30', -29700.00, -30591.00, -712.80, 'Full Board', -178.20, -27);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `room`
--

DROP TABLE IF EXISTS `room`;
CREATE TABLE `room` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(15) DEFAULT NULL,
  `bedding` varchar(10) DEFAULT NULL,
  `place` varchar(10) DEFAULT NULL,
  `cusid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `room`
--

INSERT INTO `room` (`id`, `type`, `bedding`, `place`, `cusid`) VALUES
(1, 'Superior Room', 'Single', 'Free', 0),
(2, 'Superior Room', 'Double', 'Free', 0),
(3, 'Superior Room', 'Triple', 'Free', NULL),
(4, 'Single Room', 'Quad', 'Free', NULL),
(5, 'Superior Room', 'Quad', 'Free', NULL),
(6, 'Deluxe Room', 'Single', 'Free', NULL),
(7, 'Deluxe Room', 'Double', 'NotFree', 3),
(8, 'Deluxe Room', 'Triple', 'NotFree', 7),
(9, 'Deluxe Room', 'Quad', 'Free', NULL),
(10, 'Guest House', 'Single', 'NotFree', 4),
(11, 'Guest House', 'Double', 'Free', NULL),
(12, 'Guest House', 'Quad', 'Free', NULL),
(13, 'Single Room', 'Single', 'Free', NULL),
(14, 'Single Room', 'Double', 'Free', NULL),
(15, 'Single Room', 'Triple', 'Free', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roombook`
--

DROP TABLE IF EXISTS `roombook`;
CREATE TABLE `roombook` (
  `id` int(10) UNSIGNED NOT NULL,
  `Title` varchar(5) DEFAULT NULL,
  `FName` text DEFAULT NULL,
  `LName` text DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `National` varchar(30) DEFAULT NULL,
  `Country` varchar(30) DEFAULT NULL,
  `Phone` text DEFAULT NULL,
  `TRoom` varchar(20) DEFAULT NULL,
  `Bed` varchar(10) DEFAULT NULL,
  `NRoom` varchar(2) DEFAULT NULL,
  `Meal` varchar(15) DEFAULT NULL,
  `cin` date DEFAULT NULL,
  `cout` date DEFAULT NULL,
  `stat` varchar(15) DEFAULT NULL,
  `nodays` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `roombook`
--

INSERT INTO `roombook` (`id`, `Title`, `FName`, `LName`, `Email`, `National`, `Country`, `Phone`, `TRoom`, `Bed`, `NRoom`, `Meal`, `cin`, `cout`, `stat`, `nodays`) VALUES
(3, 'Mr.', 'Carmen', 'Tajada', 'carmen@gmail.com', 'Sri Lankan', 'Peru', '923122323', 'Deluxe Room', 'Double', '1', 'Breakfast', '2018-02-01', '2018-02-15', 'Conform', 14),
(4, 'Dr.', 'Reyner', 'Baily', 'ricardocorazondeleon2018@gmail.com', 'Sri Lankan', 'Costa Rica', '923342343', 'Guest House', 'Single', '1', 'Full Board', '2018-01-16', '2018-01-25', 'Conform', 9),
(5, 'Dr.', 'Rodolfo', 'Luna', 'lunarg964@micorreo.com', 'Non Sri Lankan ', 'Colombia', '310', 'Superior Room', 'Single', '1', 'Full Board', '2020-12-20', '2020-12-27', 'Conform', 7),
(7, 'Dr.', 'Manolo', 'Pajaro(No vuela)', 'correo@mio.com', 'Sri Lankan', 'Colombia', '321', 'Deluxe Room', 'Triple', '5', 'Full Board', '2020-12-27', '2020-11-30', 'Conform', -27),
(8, 'Dr.', 'Esteban', 'Quito', 'quitoeste@mio.com', 'Sri Lankan', 'Colombia', '1544', 'Guest House', 'Single', '5', 'Room only', '2020-12-06', '2020-12-19', 'Not Conform', 13);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbtypodocumento`
--

DROP TABLE IF EXISTS `tbtypodocumento`;
CREATE TABLE `tbtypodocumento` (
  `IdTipoDocumento` int(11) NOT NULL,
  `nomtypodocumento` varchar(20) DEFAULT NULL,
  `staus` tinyint(4) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbtypodocumento`
--

INSERT INTO `tbtypodocumento` (`IdTipoDocumento`, `nomtypodocumento`, `staus`) VALUES
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
(33, 'tipop-9991', 1),
(42, 'aaaaa', 1),
(43, 'tarjeta', 1),
(44, 'tipo-991', 1),
(45, 'cartulina', 1),
(46, 'carticas', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `newsletterlog`
--
ALTER TABLE `newsletterlog`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roombook`
--
ALTER TABLE `roombook`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbtypodocumento`
--
ALTER TABLE `tbtypodocumento`
  ADD PRIMARY KEY (`IdTipoDocumento`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `newsletterlog`
--
ALTER TABLE `newsletterlog`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `room`
--
ALTER TABLE `room`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `roombook`
--
ALTER TABLE `roombook`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tbtypodocumento`
--
ALTER TABLE `tbtypodocumento`
  MODIFY `IdTipoDocumento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
