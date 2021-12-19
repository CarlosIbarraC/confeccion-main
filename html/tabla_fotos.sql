-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-11-2021 a las 09:52:20
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
-- Estructura de tabla para la tabla `tabla_fotos`
--

CREATE TABLE `tabla_fotos` (
  `id_foto` int(11) NOT NULL,
  `foto_nombre` varchar(50) NOT NULL,
  `foto_op` varchar(10) NOT NULL,
  `foto_posicion` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tabla_fotos`
--

INSERT INTO `tabla_fotos` (`id_foto`, `foto_nombre`, `foto_op`, `foto_posicion`) VALUES
(2, 'frontal.jpg', '1000', '3'),
(3, 'posterior.jpg', '1000', '1'),
(4, 'detalle.jpg', '1000', '2'),
(5, '44fdr.jpg', '457', '4'),
(6, 'fdr.jpg', '457', '4'),
(7, 'frontal.jpg', '1008', '1'),
(8, 'POLAR.jpg', '1008', '2'),
(9, 'bavaria.jpg', '1008', '3'),
(13, 'muestra1.jpg', '1012', '1'),
(14, 'muestra3.jpg', '1012', '2'),
(15, 'muestra2.jpg', '1012', '3'),
(16, 'aorus1.JPG', '1018', '1'),
(17, 'MEMES.png', '1018', '2'),
(18, 'fondp pantalla.jpg', '1018', '3'),
(19, 'Rodillo-hilo-ralla-azul 2-WEB.jpg', '1024', '2'),
(20, 'semi verde 2-epoxico-web.jpg', '1024', '3'),
(21, 'rodillo-hilo-r-a-5-web.jpg', '1024', '1'),
(22, 'pintura.jpg', '1025', '3'),
(23, 'guatape-2.jpg', '1025', '2'),
(24, 'casasPintura.jpg', '1025', '1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tabla_fotos`
--
ALTER TABLE `tabla_fotos`
  ADD PRIMARY KEY (`id_foto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tabla_fotos`
--
ALTER TABLE `tabla_fotos`
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
