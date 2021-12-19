-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-11-2021 a las 09:52:36
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
(10, '1000', '2021-11-07', '06:00:00', '15:00:00', '00:00:30', 3.25, 10, 1492, 'trabor', 'capri', 's-m-l', 'sin select', 'sin select', 'sin select', 'sin select', 'sin select', 'sin select', '', 'usuario1', 'usuario12021-11-07'),
(11, '1001', '2021-11-07', '06:00:00', '15:00:00', '00:00:30', 3.21, 25, 3805, 'triangulo', 'canaris', '4-6-8', '#ca1c1c', '#c0a911', '#17e88d', 'sin select', 'sin select', 'sin select', 'infantil promocion', 'usuario2', 'usuario22021-11-07'),
(12, '1002', '2021-11-08', '06:00:00', '15:00:00', '00:00:30', 4.25, 8, 923, 'violeta', 'axus', 'm', 'sin select', 'sin select', 'sin select', 'sin select', 'sin select', 'sin select', '', 'usuario4', 'usuario42021-11-08'),
(13, '1003', '2021-11-08', '12:20:00', '16:20:00', '00:00:10', 2.56, 5, 392, 'camaleon', 'titanic', 's-m-l', 'sin select', 'sin select', 'sin select', 'sin select', 'sin select', 'sin select', '', 'usuario2', 'usuario22021-11-08'),
(14, '1004', '2021-11-08', '06:00:00', '15:00:00', '00:00:30', 3.41, 6, 830, 'violeta', 'azul', 's-m', 'sin select', 'sin select', 'sin select', 'sin select', 'sin select', 'sin select', '', 'usuario1', 'usuario12021-11-08'),
(15, '1005', '2021-11-09', '06:00:00', '15:00:00', '00:00:30', 3.25, 8, 1194, 'San antonio', 'kl-9067', 's-m-l', '#ef2525', '#16bb74', '#381acb', 'sin select', 'sin select', 'sin select', 'esta para enrega el viernes', 'usuario1', 'usuario12021-11-09'),
(16, '1006', '2021-11-09', '06:00:00', '15:00:00', '00:00:30', 3.45, 8, 1088, 'pluton', 'naranja76', 's-m-l', 'sin select', 'sin select', 'sin select', 'sin select', 'sin select', 'sin select', 'almacenes de medellin', 'usuario6', 'usuario62021-11-09'),
(17, '1007', '2021-11-09', '06:00:00', '15:00:00', '00:00:30', 4.11, 9, 1097, 'leones', 'africa 78', 's', 'sin select', 'sin select', 'sin select', 'sin select', 'sin select', 'sin select', 'carga para catalogo', 'usuario5', 'usuario52021-11-09'),
(18, '1008', '2021-11-09', '06:00:00', '15:00:00', '00:00:30', 3.54, 8, 1046, 'bogota', 'sensacion 89', '16-18', 'sin select', 'sin select', 'sin select', 'sin select', 'sin select', 'sin select', 'alternativo jovenes', 'usuario4', 'usuario42021-11-09'),
(19, '1009', '2021-11-10', '19:54:00', '23:59:00', '00:00:10', 2.45, 5, 427, 'casa 4', 'gracia', 's-m-l', 'sin select', 'sin select', 'sin select', 'sin select', 'sin select', 'sin select', '', 'usuario1', 'usuario12021-11-10'),
(20, '1010', '2021-11-10', '06:00:00', '15:00:00', '00:00:30', 3.56, 8, 1037, 'bdgdgd', 'kvbkkfg', 'kgvfkg', 'sin select', 'sin select', 'sin select', 'sin select', 'sin select', 'sin select', '', 'usuario3', 'usuario32021-11-10'),
(21, '1011', '2021-11-13', '06:00:00', '15:00:00', '00:00:30', 3.25, 9, 1343, 'carro loco', 'bladimir', 's-m-l', 'sin select', 'sin select', 'sin select', 'sin select', 'sin select', 'sin select', '', 'usuario1', 'usuario12021-11-13'),
(22, '1012', '2021-11-14', '06:00:00', '15:00:00', '00:00:30', 3.12, 12, 1912, 'jhsdr', 'hsdhhsd', 'hjshh', 'sin select', 'sin select', 'sin select', 'sin select', 'sin select', 'sin select', '', 'usuario3', 'usuario32021-11-14'),
(23, '1013', '2021-11-14', '06:00:00', '15:00:00', '00:00:30', 3.52, 8, 1055, 'kdhdf', 'ohgs', 'loj', 'sin select', 'sin select', 'sin select', 'sin select', 'sin select', 'sin select', '', 'usuario1', 'usuario12021-11-14'),
(24, '1014', '2021-11-15', '06:00:00', '15:00:00', '00:00:30', 2.36, 6, 1176, 'kfgkgf3', 'kfkjkfp05', 'xse', 'sin select', 'sin select', 'sin select', 'sin select', 'sin select', 'sin select', '', 'usuario1', 'usuario12021-11-15'),
(25, '1015', '2021-11-17', '06:00:00', '15:00:00', '00:00:30', 3.21, 6, 913, 'unica', 'real', 'S-M-L', 'sin select', 'sin select', 'sin select', 'sin select', 'sin select', 'sin select', '', 'usuario1', 'usuario12021-11-17'),
(26, '1016', '2021-11-17', '06:00:00', '15:00:00', '00:00:20', 2.56, 10, 1772, 'JALAPE', 'BLANCO', 'S-M', 'sin select', 'sin select', 'sin select', 'sin select', 'sin select', 'sin select', '', 'usuario2', 'usuario22021-11-17'),
(27, '1017', '2021-11-18', '06:00:00', '15:00:00', '00:00:30', 3.45, 9, 1224, 'telones', 'tren', 's-m', 'sin select', 'sin select', 'sin select', 'sin select', 'sin select', 'sin select', '', 'usuario5', 'usuario52021-11-18'),
(28, '1018', '2021-11-18', '06:00:00', '15:00:00', '00:00:20', 2.59, 8, 1394, 'carros', 'violeta', 's-m-l', 'sin select', 'sin select', 'sin select', 'sin select', 'sin select', 'sin select', '', 'usuario3', 'usuario32021-11-18'),
(29, '1019', '2021-11-18', '06:00:00', '15:00:00', '00:00:30', 4.25, 8, 923, 'telerfono', 'rtetales', 'w-f', 'sin select', 'sin select', 'sin select', 'sin select', 'sin select', 'sin select', '', 'usuario2', 'usuario22021-11-18'),
(30, '1020', '2021-11-18', '06:00:00', '15:00:00', '00:00:25', 4.21, 11, 1302, 'carlos plus', 'emmanuel', 's-m-l', 'sin select', 'sin select', 'sin select', 'sin select', 'sin select', 'sin select', '', 'usuario6', 'usuario62021-11-18'),
(31, '1021', '2021-11-18', '06:00:00', '15:00:00', '00:00:30', 3.26, 10, 1485, 'klm', 'avianca', 'm-l', 'sin select', 'sin select', 'sin select', 'sin select', 'sin select', 'sin select', '', 'usuario4', 'usuario42021-11-18'),
(32, '1022', '2021-11-18', '06:00:00', '15:00:00', '00:00:30', 3.25, 12, 1791, 'mono', 'africa', 's-m-l', 'sin select', 'sin select', 'sin select', 'sin select', 'sin select', 'sin select', '', 'usuario1', 'usuario12021-11-18'),
(33, '1023', '2021-11-19', '06:02:00', '15:00:00', '00:00:30', 3.25, 10, 1486, 'neptuno', 'blender', 'sml', 'sin select', 'sin select', 'sin select', 'sin select', 'sin select', 'sin select', '', 'usuario1', 'usuario12021-11-19'),
(34, '1024', '2021-11-19', '06:00:00', '15:00:00', '00:00:30', 2.59, 6, 1025, 'kapital', 'bogota', 's-m-l', 'sin select', 'sin select', 'sin select', 'sin select', 'sin select', 'sin select', '', 'no asignado', NULL),
(35, '1025', '2021-11-21', '03:00:00', '10:00:00', '00:00:30', 3.25, 11, 1255, 'junin', 'capital', 's-m-l', 'sin select', 'sin select', 'sin select', 'sin select', 'sin select', 'sin select', '', 'usuario2', 'usuario22021-11-21'),
(36, '1026', '2021-11-22', '06:00:00', '15:00:00', '00:00:30', 3.26, 10, 1485, 'karpatos', 'pablo 3', 's-m-l', 'sin select', 'sin select', 'sin select', 'sin select', 'sin select', 'sin select', '', 'usuario1', 'usuario12021-11-22'),
(37, '1027', '2021-11-23', '06:00:00', '15:00:00', '00:00:30', 3.42, 7, 964, 'california', 'galletas', 's-m-l', 'sin select', 'sin select', 'sin select', 'sin select', 'sin select', 'sin select', '', 'usuario2', 'usuario22021-11-23'),
(38, '1028', '2021-11-24', '06:00:00', '15:00:00', '00:00:30', 3.52, 10, 1318, 'kalima', 'darien', '2-3-6', 'sin select', 'sin select', 'sin select', 'sin select', 'sin select', 'sin select', '', 'usuario4', 'usuario42021-11-24'),
(39, '1029', '2021-11-24', '06:00:00', '15:00:00', '00:00:30', 2.56, 12, 2086, 'basica rey', 'brujas', 's-m-l', 'sin select', 'sin select', 'sin select', 'sin select', 'sin select', 'sin select', '', 'usuario3', 'usuario32021-11-24'),
(40, '1030', '2021-11-25', '06:00:00', '15:00:00', '00:00:30', 2.59, 12, 2051, 'cuantico', 'arboles', 'sml', 'sin select', 'sin select', 'sin select', 'sin select', 'sin select', 'sin select', '', 'usuario1', 'usuario12021-11-25'),
(41, '1031', '2021-11-25', '06:00:00', '15:00:00', '00:00:20', 3.21, 10, 1552, 'Corintios', 'San judas', 'm-l', 'sin select', 'sin select', 'sin select', 'sin select', 'sin select', 'sin select', '', 'usuario4', 'usuario42021-11-25');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registroop`
--
ALTER TABLE `registroop`
  ADD PRIMARY KEY (`id_op`),
  ADD UNIQUE KEY `op_num` (`op_num`),
  ADD UNIQUE KEY `secundario` (`verificacion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registroop`
--
ALTER TABLE `registroop`
  MODIFY `id_op` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
