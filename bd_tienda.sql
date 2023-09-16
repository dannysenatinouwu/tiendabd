-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-08-2023 a las 05:04:20
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_tienda`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `ObtenerDetallesProducto` (IN `producto_id` INT)   BEGIN
    SELECT p.nombre_producto AS nombre_producto, t.nombre_talla, c.nombre_color,cantidad_disponible
    FROM productos p
    INNER JOIN producto_color_talla pct ON p.id_producto = pct.id_producto
    INNER JOIN colores c ON pct.id_color = c.id_color
    INNER JOIN tallas t ON pct.id_talla = t.id_talla
    WHERE p.id_producto = producto_id;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colores`
--

CREATE TABLE `colores` (
  `id_color` int(11) NOT NULL,
  `nombre_color` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `colores`
--

INSERT INTO `colores` (`id_color`, `nombre_color`) VALUES
(1, 'Rojo'),
(2, 'Azul'),
(3, 'Verde'),
(4, 'Negro'),
(5, 'Blanco');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `categoria` varchar(10) NOT NULL,
  `nombre_producto` varchar(20) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `precio_producto` decimal(10,2) DEFAULT NULL,
  `imagen` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `categoria`, `nombre_producto`, `descripcion`, `precio_producto`, `imagen`) VALUES
(1122, 'POLO', 'Camisa Vaquera', 'descripcion de camisa vaquera', 55.20, 2107235),
(2341, 'POLO', 'Nerio', 'descripcion nerio', 37.95, 2107231),
(3322, 'POLO', 'Blusa Elegante', 'descripcion blusa elegante', 28.75, 2107237),
(4512, 'POLO', 'Polo Clásico', 'descripcion polo clasico', 49.80, 2107233),
(4567, 'POLO', 'Short Deport.', 'descripcion short deport', 19.99, 2107239),
(5678, 'CAMISA', 'Pant. Deportivo', 'descripcion pant. deportivo', 40.15, 2107236),
(7890, 'CAMISA', 'Chaqueta Cuero', 'descripcion chaqueta cuero', 37.90, 2107238),
(8765, 'CAMISA', 'Camiseta Trop.', 'descripcion camiseta trop', 22.50, 2107232),
(9876, 'CAMISA', 'Vestido Prim.', 'descripcion vestido prim.', 31.25, 2107234);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_color_talla`
--

CREATE TABLE `producto_color_talla` (
  `id_producto_color_talla` int(11) NOT NULL,
  `id_producto` int(11) DEFAULT NULL,
  `id_color` int(11) DEFAULT NULL,
  `id_talla` int(11) DEFAULT NULL,
  `cantidad_disponible` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `producto_color_talla`
--

INSERT INTO `producto_color_talla` (`id_producto_color_talla`, `id_producto`, `id_color`, `id_talla`, `cantidad_disponible`) VALUES
(1, 1122, 3, 1, 50),
(2, 1122, 3, 2, 30),
(3, 2341, 2, 1, 25),
(4, 2341, 4, 3, 40),
(5, 3322, 1, 4, 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tallas`
--

CREATE TABLE `tallas` (
  `id_talla` int(11) NOT NULL,
  `nombre_talla` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tallas`
--

INSERT INTO `tallas` (`id_talla`, `nombre_talla`) VALUES
(1, 'S'),
(2, 'M'),
(3, 'L'),
(4, 'XL');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `colores`
--
ALTER TABLE `colores`
  ADD PRIMARY KEY (`id_color`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `producto_color_talla`
--
ALTER TABLE `producto_color_talla`
  ADD PRIMARY KEY (`id_producto_color_talla`),
  ADD KEY `id_producto` (`id_producto`),
  ADD KEY `id_color` (`id_color`),
  ADD KEY `id_talla` (`id_talla`);

--
-- Indices de la tabla `tallas`
--
ALTER TABLE `tallas`
  ADD PRIMARY KEY (`id_talla`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `producto_color_talla`
--
ALTER TABLE `producto_color_talla`
  ADD CONSTRAINT `producto_color_talla_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`),
  ADD CONSTRAINT `producto_color_talla_ibfk_2` FOREIGN KEY (`id_color`) REFERENCES `colores` (`id_color`),
  ADD CONSTRAINT `producto_color_talla_ibfk_3` FOREIGN KEY (`id_talla`) REFERENCES `tallas` (`id_talla`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
