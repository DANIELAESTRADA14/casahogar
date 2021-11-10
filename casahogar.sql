-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-11-2021 a las 01:31:50
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
(1, 'Canela', 'https://firebasestorage.googleapis.com/v0/b/casahogardaniela.appspot.com/o/canela.jpg?alt=media&token=2325aa2b-515d-4a11-a6a9-320205b47fe3', 10, 'Criolla ', 1),
(2, 'Luna', 'https://firebasestorage.googleapis.com/v0/b/casahogardaniela.appspot.com/o/luna.jpg?alt=media&token=6069d488-cb7f-48f7-ae2b-36efd2838f6b', 10, 'french poodle', 1),
(5, 'Polo', 'https://firebasestorage.googleapis.com/v0/b/casahogardaniela.appspot.com/o/polo.jpg?alt=media&token=a6083428-639e-4867-ac91-e11bef05f33b', 3, 'Gato blanco', 2),
(6, 'Troya', 'https://firebasestorage.googleapis.com/v0/b/casahogardaniela.appspot.com/o/caballo1.jpg?alt=media&token=7ff13cc1-c23f-472c-9fef-3b369ca448ce', 3, 'Hembra', 4),
(7, 'Pegaso', 'https://firebasestorage.googleapis.com/v0/b/casahogardaniela.appspot.com/o/caballo2.jfif?alt=media&token=040c2012-7d3a-4c63-9a22-29fa3f5b6c87', 6, 'Macho ', 4),
(8, 'Muffin', 'https://firebasestorage.googleapis.com/v0/b/casahogardaniela.appspot.com/o/gato1.jpg?alt=media&token=1fcafa48-194f-4a66-8f62-e9e8d9238d7f', 1, 'Hembra ', 2),
(9, 'Piolin', 'https://firebasestorage.googleapis.com/v0/b/casahogardaniela.appspot.com/o/pajaro2.jfif?alt=media&token=64a007ec-c31c-4439-a228-fb39b908254b', 0, 'Pelaje suave ', 3),
(10, 'Pepe', 'https://firebasestorage.googleapis.com/v0/b/casahogardaniela.appspot.com/o/pajaro1.jpg?alt=media&token=c08929ba-b5be-4791-aef6-04c530c19340', 3, 'Cantor', 3),
(11, 'Juana', 'https://firebasestorage.googleapis.com/v0/b/casahogardaniela.appspot.com/o/reptil1.jpg?alt=media&token=312e3350-9f1b-4763-8a02-a80d840958d2', 6, 'Condición especial', 5),
(12, 'Linda', 'https://firebasestorage.googleapis.com/v0/b/casahogardaniela.appspot.com/o/reptil3.jpg?alt=media&token=b1e37dc8-0768-47c5-b956-d1b6af52d999', 0, 'Rescatada', 5),
(13, 'Tommy', 'https://firebasestorage.googleapis.com/v0/b/casahogardaniela.appspot.com/o/pero2.jpg?alt=media&token=3edf62a2-4b3d-4b47-9e1e-3178d164f2f5', 10, 'Problemas respiratorios ', 1);

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
(3, 'Gatsy ', 'https://firebasestorage.googleapis.com/v0/b/casahogardaniela.appspot.com/o/cuido2.jpg?alt=media&token=94e528dc-e0c1-46e3-bc67-81ce0a6e362b', 16000, 'Cuido de atún', 1),
(4, 'Comida peces ', 'https://firebasestorage.googleapis.com/v0/b/casahogardaniela.appspot.com/o/alimentos%2Fpeces.jfif?alt=media&token=c7f77414-3321-460a-9e3b-1d9dca54ec20', 8000, 'Comida casera', 1),
(5, 'Refuerzo caballos', 'https://firebasestorage.googleapis.com/v0/b/casahogardaniela.appspot.com/o/alimentos%2Fbrio.jfif?alt=media&token=97a90519-34ed-4e7a-b72b-a08a2095199e', 30000, 'Linea premium', 1),
(6, 'Jabon para perro', 'https://firebasestorage.googleapis.com/v0/b/casahogardaniela.appspot.com/o/aseo%2Fjabon2.jfif?alt=media&token=b7fbc3c4-c842-40c8-b7d8-311d2b5f54bb', 6500, 'Con fragancia suave ', 2),
(7, 'Jabón dermatológico ', 'https://firebasestorage.googleapis.com/v0/b/casahogardaniela.appspot.com/o/aseo%2Faseo2.jfif?alt=media&token=135ecb19-d95b-46b0-9be7-d0a79c940385', 14000, 'Suave con la piel ', 2),
(8, 'Kit limpieza caballos ', 'https://firebasestorage.googleapis.com/v0/b/casahogardaniela.appspot.com/o/aseo%2Faseo3.jfif?alt=media&token=48df7342-94a8-48c4-8b7f-329975c43e52', 45000, 'No incluye balde', 2),
(9, 'Sueter perro', 'https://firebasestorage.googleapis.com/v0/b/casahogardaniela.appspot.com/o/accesorios%2Fropa.jpg?alt=media&token=a665a244-1c0a-4bd2-b97c-731b0f1493d7', 24000, 'Para días frios ', 3),
(10, 'Bufanda para gatos ', 'https://firebasestorage.googleapis.com/v0/b/casahogardaniela.appspot.com/o/accesorios%2Fbufanda.jfif?alt=media&token=bbfa7898-e867-4180-8dbc-b8272ffe4a4e', 16000, 'Varios colores disponibles ', 3),
(11, 'Kit pecera', 'https://firebasestorage.googleapis.com/v0/b/casahogardaniela.appspot.com/o/accesorios%2Fpecera.jpg?alt=media&token=dc6544c6-dd13-47a7-8d57-8249b2fcced3', 56000, 'Incluye solo lo de la foto ', 3),
(12, 'Disfraz Thor mascota', 'https://firebasestorage.googleapis.com/v0/b/casahogardaniela.appspot.com/o/accesorios%2Fdisfraz.jpg?alt=media&token=48f77f81-c472-4d47-ab03-2f1ac1c37a29', 28000, 'Varias tallas disponibles ', 3),
(13, 'Medicina para perros', 'https://firebasestorage.googleapis.com/v0/b/casahogardaniela.appspot.com/o/salud%2Fsalud.jfif?alt=media&token=dd895245-2cfe-4245-a581-7efa928cd04a', 21000, 'Para gripes fuertes ', 4),
(14, 'Jarabe animales ', 'https://firebasestorage.googleapis.com/v0/b/casahogardaniela.appspot.com/o/salud%2Fsalud2.jpg?alt=media&token=eb17a5b4-a53d-4e8c-b927-a9fe1eaaed14', 38000, 'Jarabe para tos ', 4),
(15, 'Refuerzo reptiles ', 'https://firebasestorage.googleapis.com/v0/b/casahogardaniela.appspot.com/o/salud%2Fsalud3.jfif?alt=media&token=cb228422-8acb-419f-9e52-84e687933f52', 28000, 'Leer contraindicaciones ', 4),
(16, 'Juguete para gatos ', 'https://firebasestorage.googleapis.com/v0/b/casahogardaniela.appspot.com/o/juguetes%2Fjuguete.jpg?alt=media&token=0f3da585-ba89-4b8b-aa49-840970f5d8d1', 20000, 'No incluye pelotas', 5),
(17, 'Pelota para perros', 'https://firebasestorage.googleapis.com/v0/b/casahogardaniela.appspot.com/o/juguetes%2Fpelota.jpg?alt=media&token=6140e4c6-03c5-48bc-b6d4-064c03ef86f5', 25000, 'Para razas grandes ', 5);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
