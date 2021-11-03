-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-11-2021 a las 14:42:19
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `casahogar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `animales`
--

CREATE TABLE `animales` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `foto` varchar(500) NOT NULL,
  `edad` int(11) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `animales`
--

INSERT INTO `animales` (`id`, `nombre`, `foto`, `edad`, `descripcion`, `tipo`) VALUES
(1, 'Canela', 'https://firebasestorage.googleapis.com/v0/b/casahogardaniela.appspot.com/o/canela.jpg?alt=media&token=2325aa2b-515d-4a11-a6a9-320205b47fe3', 8, 'Criolla ', 1),
(2, 'Luna', 'https://firebasestorage.googleapis.com/v0/b/casahogardaniela.appspot.com/o/luna.jpg?alt=media&token=6069d488-cb7f-48f7-ae2b-36efd2838f6b', 10, 'french poodle', 1),
(5, 'Polo', 'https://firebasestorage.googleapis.com/v0/b/casahogardaniela.appspot.com/o/polo.jpg?alt=media&token=a6083428-639e-4867-ac91-e11bef05f33b', 4, 'Gato blanco', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `producto` varchar(50) NOT NULL,
  `fotografia` varchar(200) NOT NULL,
  `precio` int(11) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `producto`, `fotografia`, `precio`, `descripcion`, `tipo`) VALUES
(1, 'Cipa Can', 'https://firebasestorage.googleapis.com/v0/b/casahogardaniela.appspot.com/o/cuido1.jpg?alt=media&token=53d847ec-fd4e-4676-9b48-2f1002242fa4', 10000, 'Concentrado de perro', 1),
(3, 'Gatsy ', 'https://firebasestorage.googleapis.com/v0/b/casahogardaniela.appspot.com/o/cuido2.jpg?alt=media&token=94e528dc-e0c1-46e3-bc67-81ce0a6e362b', 14000, 'Cuido de atún', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `animales`
--
ALTER TABLE `animales`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `animales`
--
ALTER TABLE `animales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
