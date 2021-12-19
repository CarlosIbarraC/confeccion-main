-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-11-2021 a las 09:51:42
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `confeccion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datosop`
--

CREATE TABLE `datosop` (
  `id` int(10) NOT NULL,
  `op_numero` varchar(10) NOT NULL,
  `acumulado_op` int(8) NOT NULL,
  `startOp` time NOT NULL,
  `minutos_op` time NOT NULL,
  `rotas` int(4) NOT NULL,
  `SinConfeccion` int(4) NOT NULL,
  `segundas` int(4) NOT NULL,
  `noConforme` int(4) NOT NULL,
  `estado` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `datosop`
--

INSERT INTO `datosop` (`id`, `op_numero`, `acumulado_op`, `startOp`, `minutos_op`, `rotas`, `SinConfeccion`, `segundas`, `noConforme`, `estado`) VALUES
(7, '1000', 0, '00:00:00', '00:00:00', 0, 0, 0, 0, ''),
(8, '1001', 46, '00:00:00', '00:00:00', 16, 22, 5, 25, ''),
(10, '1002', 29, '00:00:00', '00:00:00', 20, 0, 0, 2, ''),
(11, '1003', 35, '00:00:00', '00:00:00', 40, 6, 16, 12, ''),
(12, '1004', 22, '00:00:00', '00:00:00', 3, 2, 4, 2, ''),
(13, '1005', 10, '00:00:00', '00:00:00', 0, 0, 0, 0, ''),
(14, '1006', 0, '00:00:00', '00:00:00', 0, 0, 0, 0, ''),
(15, '1007', 0, '00:00:00', '00:00:00', 0, 0, 0, 0, ''),
(16, '1008', 0, '00:00:00', '00:00:00', 0, 0, 0, 0, ''),
(26, '', 0, '00:00:00', '00:00:00', 0, 0, 0, 0, ''),
(38, '1009', 37, '00:00:00', '00:00:00', 0, 0, 0, 0, ''),
(39, '1010', 241, '00:00:00', '00:00:00', 0, 0, 0, 1, ''),
(40, '1011', 53, '00:00:00', '00:00:00', 0, 0, 0, 0, ''),
(41, '1013', 0, '00:00:00', '00:00:00', 0, 0, 0, 0, ''),
(42, '1012', 0, '00:00:00', '00:00:00', 0, 0, 0, 0, ''),
(43, '1014', 80, '00:00:00', '00:00:00', 0, 0, 0, 0, ''),
(44, '1015', 10, '00:00:00', '00:00:00', 0, 0, 0, 0, ''),
(45, '1016', 0, '00:00:00', '00:00:00', 0, 0, 0, 0, ''),
(46, '1019', 30, '00:00:00', '00:00:00', 3, 5, 0, 2, ''),
(47, '1018', 63, '00:00:00', '00:00:00', 3, 1, 6, 8, ''),
(48, '1017', 38, '00:00:00', '00:00:00', 4, 2, 2, 4, ''),
(50, '1020', 41, '00:00:00', '00:00:00', 3, 2, 3, 2, ''),
(51, '1021', 17, '00:00:00', '00:00:00', 3, 2, 5, 2, ''),
(53, '1022', 0, '00:00:00', '00:00:00', 0, 0, 0, 0, ''),
(54, '1023', 6, '00:00:00', '00:00:00', 0, 0, 3, 0, ''),
(55, '1025', 0, '00:00:00', '00:00:00', 0, 0, 0, 0, ''),
(56, '1026', 55, '00:00:00', '00:00:00', 3, 5, 4, 12, ''),
(57, '1027', 45, '00:00:00', '00:00:00', 0, 0, 0, 10, ''),
(58, '1029', 17, '00:00:00', '00:00:00', 2, 2, 2, 0, ''),
(59, '1028', 0, '00:00:00', '00:00:00', 0, 0, 0, 0, ''),
(60, '1031', 0, '00:00:00', '00:00:00', 0, 0, 0, 0, ''),
(61, '1030', 10, '00:00:00', '00:00:00', 4, 9, 6, 9, 'cerrado');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datosop`
--
ALTER TABLE `datosop`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `op_numero` (`op_numero`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datosop`
--
ALTER TABLE `datosop`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
