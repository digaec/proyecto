-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-09-2025 a las 00:01:24
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ecom`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `codigo` varchar(50) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `stock` int(11) NOT NULL DEFAULT 0,
  `fecha_creacion` timestamp NOT NULL DEFAULT current_timestamp(),
  `fecha_actualizacion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `codigo`, `precio`, `stock`, `fecha_creacion`, `fecha_actualizacion`) VALUES
(1, 'Laptop HP Pavilion', 'Laptop con 8GB RAM, 256GB SSD, Intel Core i5', 'LP-HP-001', 899.99, 15, '2025-09-10 00:33:07', '2025-09-10 00:33:07'),
(2, 'Smartphone Samsung Galaxy', 'Teléfono Android con 6.5 pulgadas, 128GB', 'SS-GAL-002', 499.99, 25, '2025-09-10 00:33:07', '2025-09-10 00:33:07'),
(3, 'Auriculares Sony', 'Auriculares inalámbricos con cancelación de ruido', 'AU-SON-003', 199.99, 40, '2025-09-10 00:33:07', '2025-09-10 00:33:07'),
(4, 'Monitor LG 24 pulgadas', 'Monitor Full HD con panel IPS', 'MON-LG-004', 179.99, 12, '2025-09-10 00:33:07', '2025-09-10 00:33:07'),
(5, 'Teclado Mecánico RGB', 'Teclado gaming con retroiluminación RGB', 'TEC-MEC-005', 89.99, 30, '2025-09-10 00:33:07', '2025-09-10 00:33:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `tipo` enum('user','admin') DEFAULT 'user',
  `activo` tinyint(1) DEFAULT 1,
  `fecha_creacion` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `password`, `nombre`, `tipo`, `activo`, `fecha_creacion`) VALUES
(1, 'digaec@gmail.com', '$2y$10$mOeFd7m1O9GaZba41niobelode/Sf1/DpV7CaLd3IxLNLKsIq1EIm', 'Diego', 'user', 1, '2025-09-15 23:04:22'),
(2, 'admin@admin', '$2y$10$vFvN9ba/FEa.1noneOc10eddR/8SC0EGQWEbGx0Gn.xVY5cZoJHAG', 'admin', 'admin', 1, '2025-09-15 23:41:56');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `codigo` (`codigo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
