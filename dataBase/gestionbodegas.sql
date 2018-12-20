-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-12-2018 a las 14:03:24
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gestionbodegas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bodegas`
--

CREATE TABLE `bodegas` (
  `nombre` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(35) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(35) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` int(9) NOT NULL,
  `personaContacto` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `annoFundacion` int(4) NOT NULL,
  `disponibleRestaurante` tinyint(1) NOT NULL,
  `disponibleHotel` tinyint(1) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `bodegas`
--

INSERT INTO `bodegas` (`nombre`, `direccion`, `email`, `telefono`, `personaContacto`, `annoFundacion`, `disponibleRestaurante`, `disponibleHotel`, `id`) VALUES
('Bodega verde', 'Calle verde 9', 'hok@gmail.com', 945637263, 'Juan', 2001, 0, 1, 9),
('Vinos adrian', 'Calle golun 2', 'folo@gmail.com', 657488374, 'Pepe', 1997, 1, 0, 10),
('Vinos galones', 'Calle federico 4', 'alpe@gmail.com', 657488394, 'Dalas', 1990, 0, 1, 13),
('Vinos rodolf', 'Calle pepito 7', 'lgon@gmail.com', 657483771, 'Hodei', 1996, 1, 0, 14),
('Vinos julios', 'Calle el pel 6', 'delo@gmail.com', 675848732, 'Julio', 1890, 1, 1, 15),
('Bodega HQ', 'Calle gerni 8', 'alua@gmail.com', 946577478, 'Alucard', 1780, 1, 1, 16),
('Vinos querty', 'Calle alfonso 13', 'emil@gmail.com', 956748832, 'Emilio', 1980, 1, 1, 17),
('Vinos grandes', 'Calle rulin 8', 'peld@gmail.com', 657477832, 'Pedro', 1994, 1, 1, 18),
('Vinos hondon', 'Calle presto 1', 'nonchi@gmail.com', 654773882, 'Kevin', 2001, 1, 1, 19),
('Bodega arty', 'Calle wendi 5', 'dolores@gmail.com', 945637281, 'Drako', 1723, 1, 1, 20),
('Vinos amarelo', 'Calle dolor 2', 'seld@gmail.com', 657488372, 'Zulu', 1890, 1, 1, 21),
('Vinos santiago', 'Calle alcala 5', 'fonsi@gmail.com', 964773821, 'Wendy', 1765, 1, 1, 22),
('Vinos alfedro', 'Calle virotiana 8', 'qonchi@gmail.com', 657477832, 'Conchi', 1900, 1, 1, 23),
('Vinos pele', 'Calle olvi 4', 'doctri@gmail.com', 674663721, '', 0, 1, 1, 24);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vinos`
--

CREATE TABLE `vinos` (
  `nombre` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `anno` int(4) NOT NULL,
  `alcohol` double NOT NULL,
  `tipoVino` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `id` int(11) NOT NULL,
  `idBodega` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `vinos`
--

INSERT INTO `vinos` (`nombre`, `descripcion`, `anno`, `alcohol`, `tipoVino`, `id`, `idBodega`) VALUES
('Jolin', 'algo amargo pero te encantara', 1998, 7.5, 'Tinto', 1, 9),
('Peko', 'Muy dulce', 2002, 5, 'Espumoso', 4, 10),
('Goples', 'Echo con las mejores uvas', 2001, 4, 'Blanco', 5, 9);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bodegas`
--
ALTER TABLE `bodegas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `vinos`
--
ALTER TABLE `vinos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `fk_vinos_bodegas` (`idBodega`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bodegas`
--
ALTER TABLE `bodegas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `vinos`
--
ALTER TABLE `vinos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `vinos`
--
ALTER TABLE `vinos`
  ADD CONSTRAINT `fk_vinos_bodegas` FOREIGN KEY (`idBodega`) REFERENCES `bodegas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
