-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-08-2021 a las 06:22:54
-- Versión del servidor: 10.4.16-MariaDB
-- Versión de PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda-deportiva`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `nombre`) VALUES
(1, 'Futbol'),
(2, 'Baloncesto'),
(3, 'Senderismo'),
(4, 'Vóleibol'),
(5, 'Natación'),
(6, 'Artes marciales'),
(7, 'Ciclismo'),
(8, 'Tenis'),
(9, 'Atletismo'),
(10, 'Parkour'),
(11, 'Pantaloneta'),
(12, 'Pantalon'),
(13, 'Sudadera'),
(14, 'Camiseta'),
(15, 'Boxeo'),
(16, 'Buceo'),
(17, 'Polo'),
(18, 'Hockey'),
(19, 'Golf'),
(20, 'Esqui'),
(21, 'PaintBall'),
(22, 'Yoga'),
(23, 'Windsurf'),
(24, 'Tiro Deportivo'),
(25, 'Slackline'),
(26, 'Parapente'),
(27, 'Scooters');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `talla` varchar(50) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` varchar(50) NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `nombre`, `talla`, `cantidad`, `precio`, `id_categoria`) VALUES
(1, 'Deportiva Short Crossfit', 'M', 12, '5000', 11),
(2, 'Balon', '', 100, '13000', 1),
(3, 'Gorro ', '', 50, '6000', 5),
(7, 'Pelota', '', 45, '85000', 2),
(8, 'Pelota', '', 500, '45000', 8),
(9, 'Cinta Negra', 's', 300, '10000', 6),
(10, 'Pantaloneta', 'XL', 645, '89000', 5),
(11, 'Traje', 'XL', 55, '800000', 6),
(12, 'Traje', 'M', 55, '75000', 6),
(13, 'Pelota', '', 400, '35000', 4),
(14, 'Zapatos', '9.5 US', 46, '450000', 9),
(15, 'Bicicleta', '', 10, '5000000', 7),
(16, 'Cuerda', '', 600, '15000', 10),
(17, 'Sudadera', 'XL', 76, '56000', 12),
(18, 'Raqueta', '', 25, '300000', 8),
(19, 'Malla', 'M', 42, '100000', 6),
(20, 'Palo', '', 156, '350000', 17),
(21, 'Guantes', 'S', 156, '150000', 15),
(22, 'Tapete Grande', '', 65, '145000', 22),
(23, 'Palo Golf', '', 69, '650000', 19),
(24, 'Arco De Punteria', '', 56, '1500000', 24),
(25, 'Parapente Small', '', 5, '5000000', 26),
(26, 'Pistola', '', 98, '500000', 21),
(27, 'Camisa Fitnes', 'L', 700, '9000', 14),
(28, 'Camisa Fitnes', 'M', 500, '8000', 14),
(29, 'Camisa Fitnes', 'XL', 400, '12000', 14),
(30, 'Pantaloneta Fitnes', 'M', 800, '8000', 11),
(31, 'Pantaloneta Fitnes', 'S', 500, '5000', 11),
(32, 'Pantaloneta Fitnes', 'XL', 600, '6000', 11),
(33, 'Pantaloneta Fitnes', 'L', 890, '7900', 11),
(34, 'Gafas', '', 150, '15000', 16),
(35, 'Reloj Smart', '', 56, '5600', 9),
(36, 'Tarjeta Roja', '', 900, '1500', 1),
(37, 'Tarjeta Amarilla', '', 900, '1500', 1),
(38, 'Tarjeta Azul', '', 900, '1500', 1),
(39, 'Bolas Pintura Roja', '', 9000, '500', 21),
(40, 'Bolas Pintura Azul', '', 9000, '500', 21),
(41, 'Bolas Pintura Amarilla', '', 9000, '500', 21),
(42, 'Pelota', '', 500, '85000', 19),
(43, 'Porta Envase', '', 600, '5000', 7),
(44, 'Cinta Negra', 'S', 1500, '9000', 6),
(45, 'Cinta Negra', 'M', 1400, '9000', 6),
(46, 'Cinta Negra', 'L', 1500, '9000', 6),
(47, 'Protector Cara', '', 60, '80000', 15),
(48, 'Colombia ', 'L', 100, '500000', 13),
(49, 'Colombia ', 'M', 1000, '655000', 13),
(50, 'Colombia ', 'S', 1000, '500000', 13),
(51, 'Palo Grande', '', 56, '900000', 18),
(52, 'Flecha Small', '', 800, '5000', 24),
(53, 'Fecha Grande', '', 500, '8000', 24),
(54, 'Arco De Punteria', '', 56, '1500000', 24),
(55, 'Parapente Small', '', 5, '5000000', 26),
(56, 'Pistola', '', 98, '500000', 21),
(57, 'Camisa Fitnes', 'L', 700, '9000', 14),
(58, 'Camisa Fitnes', 'M', 500, '8000', 14),
(59, 'Camisa Fitnes', 'XL', 400, '12000', 14),
(60, 'Pantaloneta Fitnes', 'M', 800, '8000', 11),
(61, 'Pantaloneta Fitnes', 'S', 500, '5000', 11),
(62, 'Pantaloneta Fitnes', 'XL', 600, '6000', 11),
(63, 'Pantaloneta Fitnes', 'L', 890, '7900', 11),
(64, 'Gafas', '', 150, '15000', 16),
(65, 'Reloj Smart', '', 56, '5600', 9),
(66, 'Tarjeta Roja', '', 900, '1500', 1),
(67, 'Tarjeta Amarilla', '', 900, '1500', 1),
(68, 'Tarjeta Azul', '', 900, '1500', 1),
(69, 'Bolas Pintura Roja', '', 9000, '500', 21),
(70, 'Bolas Pintura Azul', '', 9000, '500', 21),
(71, 'Bolas Pintura Amarilla', '', 9000, '500', 21),
(72, 'Pelota', '', 500, '85000', 19),
(73, 'Porta Envase', '', 600, '5000', 7),
(74, 'Cinta Negra', 'S', 1500, '9000', 6),
(75, 'Cinta Negra', 'M', 1400, '9000', 6),
(76, 'Cinta Negra', 'L', 1500, '9000', 6),
(77, 'Protector Cara', '', 60, '80000', 15),
(78, 'Colombia ', 'L', 100, '500000', 13),
(79, 'Colombia ', 'M', 1000, '655000', 13),
(80, 'Colombia ', 'S', 1000, '500000', 13),
(81, 'Palo Grande', '', 56, '900000', 18),
(82, 'Flecha Small', '', 800, '5000', 24),
(83, 'Fecha Grande', '', 500, '8000', 24);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
