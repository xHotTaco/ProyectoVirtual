-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-12-2022 a las 02:10:14
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `brand_hottaco`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_produ` int(11) NOT NULL,
  `tipo_produ` varchar(255) NOT NULL,
  `marca` varchar(255) NOT NULL,
  `name_produ` varchar(50) NOT NULL,
  `img_produ` text NOT NULL,
  `precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_produ`, `tipo_produ`, `marca`, `name_produ`, `img_produ`, `precio`) VALUES
(1, 'Gorra', 'Nike', 'Gorra chida', 'https://www.coppel.com/images/catalog/pr/1390382-1.jpg', 150),
(2, 'Tenis', 'Nike', 'Jordan1 Travis ', 'https://cdn.shopk.it/usercontent/sneakaholic/media/images/square/aa185f9-125026-11.png', 900),
(5, 'Hoodi', 'Supreme', 'SuHoodi', 'https://cf.shopee.com.mx/file/f61151bb19395c9636727652b8547cd9', 1500),
(6, 'Camisa', 'Off-White', 'Camisa Arrow', 'https://cdn-images.farfetch-contents.com/17/59/36/54/17593654_38971387_1000.jpg', 1200),
(7, 'Track Pant', 'Adidas', 'Yeezy', 'https://images.stockx.com/images/adidas-Yeezy-Calabasas-Track-Pant-Core-Mink.jpg?', 1400),
(8, 'Shorts', 'Bape', '', 'https://images.stockx.com/images/BAPE-x-Mitchell-Ness-Los-Angeles-Lakers-Shorts-Purple.jpg?', 2300),
(9, 'Calcetines', 'Bape', 'Socks Bape', 'https://http2.mlstatic.com/D_NQ_NP_865812-MLM51216180762_082022-W.jpg', 600),
(10, 'Bolsa', 'Coach', 'Bolsa Dino', 'https://cdn-images.farfetch-contents.com/19/33/32/20/19333220_42524443_1000.jpg', 3450);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `tipo` int(11) NOT NULL,
  `nombre` varchar(500) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `contra` varchar(50) NOT NULL,
  `numero` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `tipo`, `nombre`, `correo`, `contra`, `numero`) VALUES
(1, 1, 'Carlos', 'admin@gmail.com', 'admin', '1234567891'),
(2, 0, 'Juan', 'j@gmail.com', '123', '1234567891');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_produ`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_produ` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
