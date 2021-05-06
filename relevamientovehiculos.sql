-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-05-2021 a las 19:08:38
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `relevamientovehiculos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `predio`
--

CREATE TABLE `predio` (
  `idVehiculo` int(11) NOT NULL,
  `municipio` varchar(255) NOT NULL,
  `nomaperesp` varchar(255) NOT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `almacena` varchar(2) NOT NULL,
  `titularterreno` varchar(255) NOT NULL,
  `dimensionmtr2` varchar(255) NOT NULL,
  `cantidadvehiculos` varchar(11) NOT NULL,
  `comentarioadicional` varchar(255) NOT NULL,
  `fechaAlta` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `predio`
--

INSERT INTO `predio` (`idVehiculo`, `municipio`, `nomaperesp`, `direccion`, `almacena`, `titularterreno`, `dimensionmtr2`, `cantidadvehiculos`, `comentarioadicional`, `fechaAlta`) VALUES
(20, 'Prueba Ultima', 'Asdsadsad Sdf Dsfds', 'una dirección Número N°156, la plata', 'Sí', 'Publico', '45343', '34', 'asdsadsa', '2021-03-30');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `predio`
--
ALTER TABLE `predio`
  ADD PRIMARY KEY (`idVehiculo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `predio`
--
ALTER TABLE `predio`
  MODIFY `idVehiculo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
