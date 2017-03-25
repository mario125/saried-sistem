-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-03-2017 a las 23:59:21
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbsaried`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bien`
--

CREATE TABLE `bien` (
  `id_bien` int(11) NOT NULL,
  `cod_bien` varchar(20) NOT NULL,
  `cod_patrimonio` varchar(50) NOT NULL,
  `cod_interno` varchar(50) NOT NULL,
  `tip_bien` varchar(50) NOT NULL,
  `det_bien` text NOT NULL,
  `fec_bien` varchar(40) NOT NULL,
  `can_bien` int(11) NOT NULL,
  `val_bien` decimal(12,2) NOT NULL,
  `fot_bien` varchar(400) NOT NULL,
  `reg_bien` int(11) NOT NULL,
  `est_bien` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `id_cargo` int(11) NOT NULL,
  `pre_cargo` varchar(100) NOT NULL,
  `ofi_cargo` varchar(50) NOT NULL,
  `pre_cargo_a` varchar(100) NOT NULL,
  `fun_p_cargo` varchar(20) NOT NULL,
  `fec_p_cargo` varchar(50) NOT NULL,
  `resepciona_cargo` varchar(100) NOT NULL,
  `dev_cargo` varchar(100) NOT NULL,
  `fun_d_cargo` char(20) NOT NULL,
  `fec_d_cargo` varchar(50) NOT NULL,
  `id_bien` int(11) NOT NULL,
  `cod_bien` varchar(15) NOT NULL,
  `est_cargo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='fun_p_cargo';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_user` int(11) NOT NULL,
  `dni_user` char(8) COLLATE utf8_spanish_ci NOT NULL,
  `nom_user` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `ape_user` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `tel_user` varchar(9) COLLATE utf8_spanish_ci NOT NULL,
  `dir_user` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nic_user` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `pas_user` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `con_user` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `est_user` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `fot_user` varchar(400) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_user`, `dni_user`, `nom_user`, `ape_user`, `tel_user`, `dir_user`, `nic_user`, `pas_user`, `con_user`, `est_user`, `fot_user`) VALUES
(13, '00000000', 'ADMIN', 'ADMIN ADMIN', '000000000', 'ADMIN', 'ADMIN', 'ADMIN', 'CONTRATADO', 'ACTIVO', 'fotos/FB_IMG_1470115251128.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bien`
--
ALTER TABLE `bien`
  ADD PRIMARY KEY (`id_bien`),
  ADD UNIQUE KEY `cod_bien` (`cod_bien`),
  ADD UNIQUE KEY `cod_bien_2` (`cod_bien`),
  ADD KEY `fk_usuario_id` (`reg_bien`);

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`id_cargo`),
  ADD KEY `fk_bien_id` (`id_bien`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bien`
--
ALTER TABLE `bien`
  MODIFY `id_bien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `id_cargo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `bien`
--
ALTER TABLE `bien`
  ADD CONSTRAINT `fk_usuario_id` FOREIGN KEY (`reg_bien`) REFERENCES `usuario` (`id_user`);

--
-- Filtros para la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD CONSTRAINT `fk_bien_id` FOREIGN KEY (`id_bien`) REFERENCES `bien` (`id_bien`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
