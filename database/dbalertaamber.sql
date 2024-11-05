-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-11-2024 a las 00:59:35
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
-- Base de datos: `dbalertaamber`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anotaciones`
--

CREATE TABLE `anotaciones` (
  `ID_anotacion` int(11) NOT NULL,
  `ID_nino` int(11) NOT NULL,
  `fechaAnotacion` date NOT NULL,
  `responsable` varchar(150) NOT NULL,
  `anotacion` text NOT NULL COMMENT 'Observaciones o novedades del caso'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galeria`
--

CREATE TABLE `galeria` (
  `ID_foto` int(11) NOT NULL,
  `ID_nino` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL COMMENT 'Ruta al archivo con la foto'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ninos`
--

CREATE TABLE `ninos` (
  `ID` int(10) NOT NULL COMMENT 'Autoincremental, ID del niño en el sistema',
  `nombre` varchar(200) NOT NULL COMMENT 'Nombre del niño',
  `fechaNacimiento` date NOT NULL COMMENT 'Fecha de nacimiento para calcular la edad',
  `ciudadNacimiento` varchar(20) NOT NULL COMMENT 'Ciudad, departamento y pais de nacimiento',
  `descripcionNino` text NOT NULL,
  `fotoPrincipal` varchar(100) NOT NULL COMMENT 'Ruta que apunta a la foto principal, ubicada en la carpeta fotos',
  `nombreMadre` varchar(200) NOT NULL,
  `fechaNacimientoMadre` date NOT NULL,
  `ocupacionMadre` varchar(50) NOT NULL,
  `ciudadNacimientoMadre` varchar(100) NOT NULL,
  `telContactoMadre` int(12) NOT NULL,
  `otroTelContactoMadre` int(12) NOT NULL,
  `direccionResidenciaMadre` varchar(100) NOT NULL,
  `otrosDatosContactoMadre` text NOT NULL,
  `nombrePadre` varchar(200) NOT NULL,
  `fechaNacimientoPadre` date NOT NULL,
  `ciudadNacimientoPadre` varchar(100) NOT NULL,
  `ocupacionPadre` varchar(50) NOT NULL,
  `telContactoPadre` int(12) NOT NULL,
  `otroTelContactoPadre` int(12) NOT NULL,
  `direccionResidenciaPadre` varchar(100) NOT NULL,
  `otrosDatosContactoPadre` text NOT NULL,
  `fechaUltimaVista` date NOT NULL,
  `lugarUltimaVista` varchar(150) NOT NULL,
  `detallesDesaparicion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `anotaciones`
--
ALTER TABLE `anotaciones`
  ADD PRIMARY KEY (`ID_anotacion`);

--
-- Indices de la tabla `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`ID_foto`);

--
-- Indices de la tabla `ninos`
--
ALTER TABLE `ninos`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `anotaciones`
--
ALTER TABLE `anotaciones`
  MODIFY `ID_anotacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `galeria`
--
ALTER TABLE `galeria`
  MODIFY `ID_foto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ninos`
--
ALTER TABLE `ninos`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Autoincremental, ID del niño en el sistema';
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
