-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-05-2022 a las 23:09:22
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(120) NOT NULL,
  `referencia` varchar(200) NOT NULL,
  `precio` float NOT NULL,
  `peso` int(11) NOT NULL,
  `categoria` varchar(200) NOT NULL,
  `stock` int(11) NOT NULL,
  `fecha_creacion` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `nombre`, `referencia`, `precio`, `peso`, `categoria`, `stock`, `fecha_creacion`, `status`) VALUES
(1, 'Producto 1', 'producto1', 2.5, 1, 'LACTEOS', 5, '2022-05-14', 0),
(2, 'Cerveza Cusqueña 6ml', 'Cervezas', 6, 2, 'BEBIDAS ALCOHOLICAS', 2, '2022-05-14', 1),
(3, 'Leche en polvo', 'LECHE', 6.2, 1, 'LACTEOS', 1, '2022-05-11', 1),
(4, 'PISCO QUEBRANTA - 4 GALLOS', 'PISCOS', 45, 1, 'LICORES', 4, '2022-05-12', 1),
(5, 'AZUCAR RUBIA XK', 'AZUCAR', 4.2, 1, 'AZUCAR', 6, '2022-05-10', 1),
(6, 'AYUDIN SAPOLIO ()', 'AYUDIN', 2.2, 1, 'DETERGENTE', 5, '2022-05-15', 1),
(7, 'BICICLETA ELECTRICA', 'CÓDIGO Q2170', 1150, 125, 'VEHICULOS ELECTRICOS', 5, '2022-05-15', 1),
(8, 'BICICLETA ELECTRICA', 'Q2170RT', 950, 85, 'VEHICULOS ELECTRICOS', 10, '2022-05-15', 0),
(9, 'GUITARRA ELECTRICA FENDER', 'P10253', 1852, 3, 'INSTRUMENTOS MUSICALES', 5, '2022-05-15', 1),
(10, 'AMPLIFICADOR FENDER', 'AMP2563', 1650, 18, 'INSTRUMENTOS MUSICALES', 5, '2022-05-15', 1),
(11, 'MICROFONO SHURE', 'micro4522', 400, 2, 'SONIDO', 3, '2022-05-14', 1),
(12, 'IPHONE 12', 'SMARTPHONE452', 3400, 2, 'CELULARES', 130, '2022-05-14', 1),
(13, 'LAPTOP ASUS GAMING', 'LAPTOP45', 4200, 3, 'LAPTOP', 5, '2022-05-15', 1),
(14, 'SAMSUNG GALAXY 20', 'CELULARES', 1800, 2, 'CELULARES', 80, '2022-05-14', 1),
(15, 'CELULAR XIAOMI NOTE PRO 10', 'CODCEL223', 1600, 1, 'CELULARES', 5, '2022-05-14', 1),
(16, 'CERVEZA PILSEN X PACK 12', 'QPILSEN1212', 24, 1, 'BEBIDAS ALCOHOLICAS', 100, '2022-05-15', 0),
(17, 'GAS SOLGAS', 'CON45100', 60, 10, 'COMBUSTIBLES', 15, '2022-05-15', 1),
(18, 'BOLSA DE CEMENTO SOL', 'CEMENTO15023', 28, 30, 'CONSRUCCIÓN', 90, '2022-05-15', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `edad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `edad`) VALUES
(1, 'Jose', 32),
(3, 'Juan', 32),
(4, 'Tatiana', 27);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `id` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad_vendido` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`id`, `id_producto`, `cantidad_vendido`) VALUES
(3, 4, 2),
(4, 7, 1),
(9, 4, 2),
(10, 4, 1),
(11, 4, 2),
(12, 4, 3),
(13, 2, 1),
(14, 4, 3),
(15, 3, 1),
(16, 3, 3),
(17, 3, 1),
(18, 4, 3),
(19, 4, 1),
(20, 12, 20),
(21, 17, 10),
(22, 18, 10),
(23, 18, 50),
(24, 12, 50),
(25, 14, 120);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_producto` (`id_producto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
