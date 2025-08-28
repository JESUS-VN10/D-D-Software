-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 13-07-2024 a las 01:00:26
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_d&dsoftware`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `ID` int(11) NOT NULL,
  `ID_transaccion` varchar(20) NOT NULL,
  `Fecha` datetime NOT NULL,
  `Status` varchar(20) NOT NULL,
  `Correo` varchar(100) NOT NULL,
  `ID_cliente` varchar(20) NOT NULL,
  `Total` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_compra`
--

CREATE TABLE `detalle_compra` (
  `ID` int(11) NOT NULL,
  `ID_compra` int(11) NOT NULL,
  `ID_producto` int(11) NOT NULL,
  `Nombre` varchar(200) NOT NULL,
  `Precio` decimal(10,2) NOT NULL,
  `Cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `Producto_ID` int(11) NOT NULL,
  `Nombre` varchar(200) NOT NULL,
  `Precio` decimal(10,2) NOT NULL,
  `Descripcion` text NOT NULL,
  `Descuento` tinyint(3) NOT NULL DEFAULT 0,
  `Activo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`Producto_ID`, `Nombre`, `Precio`, `Descripcion`, `Descuento`, `Activo`) VALUES
(1, 'Nike - Force One', 90.00, 'Nike - Force One', 5, 1),
(2, 'Common Projects Achilles', 80.00, 'Common Projects Achilles', 15, 1),
(3, 'Adidas - Boston Super OG', 110.00, 'Adidas - Boston Super OG', 0, 1),
(4, 'Nike - Air Max 270', 150.00, 'Nike - Air Max 270', 0, 1),
(5, 'Adidas - Ultraboost 21', 170.00, 'Adidas - Ultraboost 21', 0, 1),
(6, 'Puma - Future Rider', 90.00, 'Puma - Future Rider', 0, 1),
(7, 'Reebok - Classic Leather', 85.00, 'Reebok - Classic Leather', 0, 1),
(8, 'New Balance - 574', 95.00, 'New Balance - 574', 0, 1),
(9, 'Under Armour - HOVR Phantom 2', 160.00, 'Under Armour - HOVR Phantom 2', 0, 1),
(10, 'Asics - Gel-Kayano 27', 140.00, 'Asics - Gel-Kayano 27', 0, 1),
(11, 'Converse - Chuck Taylor All Star', 70.00, 'Converse - Chuck Taylor All Star', 0, 1),
(12, 'Vans - Old Skool', 75.00, 'Vans - Old Skool', 0, 1),
(13, 'Fila - Disruptor 2', 80.00, 'Fila - Disruptor 2', 0, 1),
(14, 'Skechers - D\'Lites', 65.00, 'Skechers - D\'Lites', 0, 1),
(15, 'Mizuno - Wave Rider 24', 130.00, 'Mizuno - Wave Rider 24', 0, 1),
(16, 'Brooks - Ghost 13', 120.00, 'Brooks - Ghost 13', 0, 1),
(17, 'Salomon - Speedcross 5', 110.00, 'Salomon - Speedcross 5', 0, 1),
(18, 'Hoka One One - Clifton 7', 135.00, 'Hoka One One - Clifton 7', 0, 1),
(19, 'Saucony - Triumph 18', 125.00, 'Saucony - Triumph 18', 0, 1),
(20, 'Merrell - Moab 2 Ventilator', 100.00, 'Merrell - Moab 2 Ventilator', 0, 1),
(21, 'Columbia - Newton Ridge Plus II', 90.00, 'Columbia - Newton Ridge Plus II', 0, 1),
(22, 'Timberland - Premium 6-Inch Boot', 200.00, 'Timberland - Premium 6-Inch Boot', 0, 1),
(23, 'ECCO - Soft 7 Sneaker', 150.00, 'ECCO - Soft 7 Sneaker', 0, 1),
(24, 'Crocs - Classic Clog', 45.00, 'Crocs - Classic Clog', 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `User_ID` int(11) NOT NULL,
  `Nombre_U` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `Cedula_U` bigint(20) NOT NULL,
  `Correo_electronico` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `Contraseña` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`User_ID`, `Nombre_U`, `Cedula_U`, `Correo_electronico`, `Contraseña`) VALUES
(1, 'Juan Castro', 79480653, 'juan20@gmail.com', '$2y$10$1ur4k0ui7D1KsVUIaSuI8.gQZJed610PD3.O.HL2D9ibEQFjNW5Nu');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `detalle_compra`
--
ALTER TABLE `detalle_compra`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`Producto_ID`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`User_ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `compra`
--
ALTER TABLE `compra`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `detalle_compra`
--
ALTER TABLE `detalle_compra`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `Producto_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
