-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-01-2021 a las 00:36:19
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `login_register_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarioss`
--

CREATE TABLE `usuarioss` (
  `id` int(11) NOT NULL,
  `nombre_completo` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `correo` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `tipo.usuario` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `usuario` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `contrasena` varchar(8) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `usuarioss`
--

INSERT INTO `usuarioss` (`id`, `nombre_completo`, `correo`, `tipo.usuario`, `usuario`, `contrasena`) VALUES
(1, 'Yerandee Reyes', 'yeraglez98@gmail.com', 'tipo A', 'Yerandee', '123456'),
(2, 'Jose Armando Ramirez Escudero', 'mailto:raptos97@gmail.com', 'tipo B', 'Armando', '1234569');
(3, 'Max Diaz de Jesus', 'mailto:maxdiaz97@gmail.com', 'tipo B', 'Max', '1234');
--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarioss`
--
ALTER TABLE `usuarioss`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
