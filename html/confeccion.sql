-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-11-2021 a las 04:47:43
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.4.23

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
-- Estructura de tabla para la tabla `registroop`
--

CREATE TABLE `registroop` (
  `id_op` int(11) NOT NULL,
  `op_num` varchar(6) NOT NULL DEFAULT '999',
  `date_op` date NOT NULL,
  `horae_op` time NOT NULL,
  `horas_op` time NOT NULL,
  `descanso_op` time NOT NULL,
  `sam_op` float NOT NULL,
  `operarios_op` int(2) NOT NULL,
  `unidades_op` int(6) NOT NULL,
  `referencia_op` varchar(30) NOT NULL,
  `estampado_op` varchar(30) NOT NULL,
  `tallas_op` varchar(20) NOT NULL DEFAULT 'sin select',
  `color1_op` varchar(10) DEFAULT NULL,
  `color2_op` varchar(10) DEFAULT NULL,
  `color3_op` varchar(10) DEFAULT NULL,
  `color4_op` varchar(10) DEFAULT NULL,
  `color5_op` varchar(10) DEFAULT NULL,
  `color6_op` varchar(10) DEFAULT NULL,
  `notas_op` text NOT NULL DEFAULT '\'Sin notas\'',
  `asignacion` varchar(20) NOT NULL DEFAULT 'no asignado',
  `verificacion` varchar(27) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `registroop`
--

INSERT INTO `registroop` (`id_op`, `op_num`, `date_op`, `horae_op`, `horas_op`, `descanso_op`, `sam_op`, `operarios_op`, `unidades_op`, `referencia_op`, `estampado_op`, `tallas_op`, `color1_op`, `color2_op`, `color3_op`, `color4_op`, `color5_op`, `color6_op`, `notas_op`, `asignacion`, `verificacion`) VALUES
(1, '1000', '0000-00-00', '18:13:00', '21:13:00', '00:00:30', 3.56, 10, 381, 'tr-23', 'yu78', '3-6-9', '#d51010', '#ffffff', 'sin select', 'sin select', 'sin select', 'sin select', '', 'usuario1', 'usuario10000-00-00'),
(2, '1001', '0000-00-00', '06:00:00', '15:00:00', '00:00:30', 3.56, 10, 1296, '23-2', '23-45', '3-6-9', '#eaed0c', '#f6eeee', 'sin select', 'sin select', 'sin select', 'sin select', '', 'usuario3', 'usuario30000-00-00'),
(3, '1002', '2021-10-22', '06:00:00', '15:00:00', '00:00:30', 3.56, 10, 1296, 'fsfsd-*21', 'bhcbc32', '3-6-9', '#e02929', '#f1e9e9', 'sin select', 'sin select', 'sin select', 'sin select', '', 'usuario2', 'usuario22021-10-22'),
(4, '1003', '2021-10-22', '19:27:00', '23:59:00', '00:00:30', 3.25, 10, 708, '12', '33', '333', 'sin select', 'sin select', 'sin select', 'sin select', 'sin select', 'sin select', '', 'usuario3', 'usuario32021-10-22'),
(5, '1004', '0000-00-00', '19:36:00', '22:36:00', '00:00:10', 3.2, 10, 560, '11', '11', '11', 'sin select', 'sin select', 'sin select', 'sin select', 'sin select', 'sin select', '', 'usuario3', 'usuario30000-00-00'),
(6, '1005', '2021-10-25', '06:00:00', '15:00:00', '00:00:30', 3.56, 10, 1296, 'farae', 'farallon', 's-m-l', 'sin select', 'sin select', 'sin select', 'sin select', 'sin select', 'sin select', '', 'usuario1', 'usuario12021-10-25'),
(7, '1006', '2021-10-25', '06:00:00', '15:00:00', '00:00:30', 3.56, 10, 1296, 'habana', 'exodo', 's-m', '#fafafa', '#8c7ef1', 'sin select', 'sin select', 'sin select', 'sin select', 'entrega para Medellin.', 'usuario3', 'usuario32021-10-25');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registroop`
--
ALTER TABLE `registroop`
  ADD PRIMARY KEY (`id_op`),
  ADD UNIQUE KEY `op_num` (`op_num`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registroop`
--
ALTER TABLE `registroop`
  MODIFY `id_op` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
