-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-04-2020 a las 21:43:41
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `francolinoarte`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_contacto`
--

CREATE TABLE `registro_contacto` (
  `id_contacto` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `mensaje` text NOT NULL,
  `referido` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registro_contacto`
--

INSERT INTO `registro_contacto` (`id_contacto`, `nombre`, `mail`, `mensaje`, `referido`) VALUES
(8, 'Graciela VolontÃ©', 'gravo@yahoo.com.ar', 'TenÃ©s programada alguna exposiciÃ³n en una galerÃ­a por Zona Oeste?', 'Amigos.'),
(9, 'Larisa Serrano', 'lari_serrano@hotmail.com', 'HacÃ©s retratos a pedido?', 'Google.'),
(10, 'Oscar Arevalo', 'oa1962@gmail.com', 'Me gusta tu trabajo. ', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registro_contacto`
--
ALTER TABLE `registro_contacto`
  ADD PRIMARY KEY (`id_contacto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registro_contacto`
--
ALTER TABLE `registro_contacto`
  MODIFY `id_contacto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
