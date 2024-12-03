-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2024 at 11:00 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbalertaamber`
--

-- --------------------------------------------------------

--
-- Table structure for table `anotaciones`
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
-- Table structure for table `galeria`
--

CREATE TABLE `galeria` (
  `ID_foto` int(11) NOT NULL,
  `ID_nino` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL COMMENT 'Ruta al archivo con la foto'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ninos`
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
-- Dumping data for table `ninos`
--

INSERT INTO `ninos` (`ID`, `nombre`, `fechaNacimiento`, `ciudadNacimiento`, `descripcionNino`, `fotoPrincipal`, `nombreMadre`, `fechaNacimientoMadre`, `ocupacionMadre`, `ciudadNacimientoMadre`, `telContactoMadre`, `otroTelContactoMadre`, `direccionResidenciaMadre`, `otrosDatosContactoMadre`, `nombrePadre`, `fechaNacimientoPadre`, `ciudadNacimientoPadre`, `ocupacionPadre`, `telContactoPadre`, `otroTelContactoPadre`, `direccionResidenciaPadre`, `otrosDatosContactoPadre`, `fechaUltimaVista`, `lugarUltimaVista`, `detallesDesaparicion`) VALUES
(1, 'Carlitos Pérez', '2016-11-01', 'Bogotá', 'Niño:\r\n- Edad: 10 años\r\n- Pelo: Castaño claro, corto y despeinado\r\n- Ojos: Cafés.\r\n- Sonrisa: Ancha, con dientes un poco separados\r\n- Rostro: Redondo, con una nariz pequeña y recta\r\n- Cuerpo: Delgado, con brazos y piernas largos\r\n- Vestimenta: Camiseta blanca y pantalones cortos azules, con zapatillas deportivas rojas', '1.jpg', 'Josefina Gómez', '1995-09-07', 'g bfg', 'Cartagena', 123464, 314874, 'dgh fbñdj kvdjñlvcñs dvjs hv ñsv{  ', 'svcsnh s hcuds c sa dc a cas csa ñc as', 'Akjh ds cj d c sdzc ', '1990-11-01', 'Ibagué - Tolima', 'dfds frs gdfvgdfbdgb', 13145646, 49899, 'fv df dfgvdfvafewgtehb', 'sfg rgegvet', '2024-11-04', 'Bogotá, barrio Carvajal', 'Lorem Ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. '),
(2, 'Sofía Canavaro', '2016-10-01', 'Bogotá', 'Niña:\r\n- Edad: 10 años\r\n- Pelo: Castaño claro, corto y despeinado\r\n- Ojos: Cafés.\r\n- Sonrisa: Ancha, con dientes un poco separados\r\n- Rostro: Redondo, con una nariz pequeña y recta\r\n- Cuerpo: Delgado, con brazos y piernas largos\r\n- Vestimenta: Camiseta blanca y pantalones cortos azules, con zapatillas deportivas rojas', '2.jpg', 'Josefina Rodríguez', '1995-09-07', 'g bfg', 'Cartagena', 123464, 314874, 'dgh fbñdj kvdjñlvcñs dvjs hv ñsv{  ', 'svcsnh s hcuds c sa dc a cas csa ñc as', 'Akjh ds cj d c sdzc ', '1990-11-01', 'Ibagué - Tolima', 'dfds frs gdfvgdfbdgb', 13145646, 49899, 'fv df dfgvdfvafewgtehb', 'sfg rgegvet', '2024-11-04', 'Bogotá, barrio Carvajal', ''),
(3, 'Bebé feliz', '0000-00-00', '', '', '3.jpg', '', '0000-00-00', '', '', 0, 0, '', '', '', '0000-00-00', '', '', 0, 0, '', '', '2024-11-30', 'Cartagena, cerca del terminal de transportes', ''),
(4, 'Otro bebé', '0000-00-00', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. ', '4.jpg', '', '0000-00-00', '', '', 0, 0, '', '', '', '0000-00-00', '', '', 0, 0, '', '', '2024-12-01', 'Ibagué, barrio Restrepo', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. '),
(5, 'Barry Allen', '2021-11-11', 'Cali - Colombia', 'Edad: 3 años\r\n\r\nPelo: Pelo largo y rizado, de color rubio claro, con algunos mechones escapados de su cola de caballo.\r\n\r\nOjos: Ojos grandes y expresivos, de color azul claro, con pestañas largas y finas.\r\n\r\nRostro: Rostro ovalado y sonrosado, con una nariz pequeña y recta, y una boca pequeña con labios finos y una sonrisa amplia.\r\n\r\nExpresión: Expresión de alegría y curiosidad, con una mirada brillante y una sonrisa que muestra sus dientes pequeños.\r\n\r\nCuerpo: Cuerpo pequeño y delgado, con brazos y piernas largos y flacos.', '5.jpg', 'María', '1980-02-09', 'Empresaria', 'Ibagué', 547578, 0, 'Calle 8A # 1B Este 94', '', '', '0000-00-00', '', '', 0, 0, '', '', '2024-12-03', 'Cali - Plaza de mercado', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa'),
(6, 'Joselito Carnaval', '2022-11-11', 'Barranquilla', 'Warning: move_uploaded_file(uploads/5.jpg): Failed to open stream: No such file or directory in C:xampphtdocsPSP-Subgrupo-1-Amberhtmlagregar.php on line 26\r\n\r\nWarning: move_uploaded_file(): Unable to move \"C:xampp	mpphpAD4F.tmp\" to \"uploads/5.jpg\" in C:xampphtdocsPSP-Subgrupo-1-Amberhtmlagregar.php on line 26\r\nLo siento, hubo un error al subir tu archivo.Nuevo registro creado correctamente\r\n', '5.jpg', 'Ana', '1990-12-12', 'Doctora', 'Bogotá', 14654, 0, 'Calle 8A # 1B Este 94', '', '', '0000-00-00', '', '', 0, 0, '', '', '2024-12-03', 'Ibagué, barrio Restrepo', 'Lorem Ipsum'),
(7, '1', '0111-11-11', '1', '11', '73d1ac75c85979443d5006e2ae578629.jpg', '1', '0011-11-11', '1', '1', 1, 0, '1', '', '', '0000-00-00', '', '', 0, 0, '', '', '0001-11-11', '1', '1'),
(8, '2', '0022-02-22', '2', '2', '73d1ac75c85979443d5006e2ae578629.jpg', '2', '0002-02-22', '2', '2', 2, 0, '2', '', '', '0000-00-00', '', '', 0, 0, '', '', '0022-02-22', '2', '2'),
(9, '3', '0003-03-31', '3', '3', 'Harry Potter Phone Wallpapers - Top Free Harry Potter Phone Backgrounds - WallpaperAccess.jpeg', '3', '0033-03-31', '3', '3', 3, 0, '3', '', '', '0000-00-00', '', '', 0, 0, '', '', '0033-03-31', '3', '3'),
(10, '3', '0003-03-31', '3', '3', 'Harry Potter Phone Wallpapers - Top Free Harry Potter Phone Backgrounds - WallpaperAccess.jpeg', '3', '0033-03-31', '3', '3', 3, 0, '3', '', '', '0000-00-00', '', '', 0, 0, '', '', '0033-03-31', '3', '3'),
(11, '3', '0003-03-31', '3', '3', 'Harry Potter Phone Wallpapers - Top Free Harry Potter Phone Backgrounds - WallpaperAccess.jpeg', '3', '0033-03-31', '3', '3', 3, 0, '3', '', '', '0000-00-00', '', '', 0, 0, '', '', '0033-03-31', '3', '3'),
(12, '1', '0011-11-11', '1', '1', '73d1ac75c85979443d5006e2ae578629.jpg', '1', '0001-11-11', '1', '1', 1, 0, '1', '', '', '0000-00-00', '', '', 0, 0, '', '', '0011-11-11', '1', '1'),
(13, '2', '0022-02-22', '22', '2', 'Sandro_Botticelli_069.jpg', '2', '0022-02-22', '2', '2', 2, 0, '2', '', '', '0000-00-00', '', '', 0, 0, '', '', '0002-02-22', '2', '2'),
(14, '1', '0001-11-11', '1', '1', 'Sandro_Botticelli_069.jpg', '1', '0111-11-11', '111', '11', 11, 0, '11', '', '', '0000-00-00', '', '', 0, 0, '', '', '0011-11-11', '1', '1'),
(15, '22', '0222-02-22', '22', '2222', 'The_Leaning_Tower_of_Pisa_SB.jpeg.jpeg', '222', '0022-02-22', '22', '2', 22, 0, '222', '', '', '0000-00-00', '', '', 0, 0, '', '', '2222-02-22', '22', '222'),
(16, '55', '0555-05-05', '5555', '55', 'hombre-vitruviano.webp', '55', '0555-05-05', '55', '555', 555, 0, '555', '', '', '0000-00-00', '', '', 0, 0, '', '', '0555-05-05', '555', '555'),
(17, '33', '0033-03-31', '33', '333', 'virgen-canciller-rolin-van-eyck-pintura-gotica.jpg', '33', '0333-03-31', '333', '333', 3333, 0, '333', '', '', '0000-00-00', '', '', 0, 0, '', '', '0033-03-31', '333', '33'),
(18, '11', '0011-11-11', '111', '111', 'Sandro_Botticelli_069.jpg', '1111', '0011-11-11', '111', '11', 11111, 0, '11', '', '', '0000-00-00', '', '', 0, 0, '', '', '0011-11-11', '11', '11'),
(19, 'Niño Pequeño', '2016-11-11', 'Bogotá', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. ', '1.jpg', 'María', '1980-02-04', 'Gerente de una Multinacional', 'New York', 2147483647, 0, 'Calle 8A # 1B Este 94', '', '', '0000-00-00', '', '', 0, 0, '', '', '2024-12-02', 'Bogotá. Parque Simón Bolivar', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. '),
(20, 'Niña', '2023-06-05', 'Medellín', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. ', '2.jpg', 'Josefinha Pintayo', '1982-12-12', 'Congresista', 'Santa Marta', 31654, 0, 'Calle 45 78 65', '', '', '0000-00-00', '', '', 0, 0, '', '', '2024-12-11', 'Medellín', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anotaciones`
--
ALTER TABLE `anotaciones`
  ADD PRIMARY KEY (`ID_anotacion`);

--
-- Indexes for table `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`ID_foto`);

--
-- Indexes for table `ninos`
--
ALTER TABLE `ninos`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anotaciones`
--
ALTER TABLE `anotaciones`
  MODIFY `ID_anotacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galeria`
--
ALTER TABLE `galeria`
  MODIFY `ID_foto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ninos`
--
ALTER TABLE `ninos`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Autoincremental, ID del niño en el sistema', AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
