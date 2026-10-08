-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 05-10-2026 a las 01:18:08
-- Versión del servidor: 12.2.2-MariaDB
-- Versión de PHP: 8.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registros_meteocs`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calidad_aire`
--
CREATE DATABASE registros_meteocs;

USE DATABASE registros_meteocs;

CREATE TABLE `calidad_aire` (
  `ppm` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cantidad_humo`
--

CREATE TABLE `cantidad_humo` (
  `pm` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `humedad_ambiente`
--

CREATE TABLE `humedad_ambiente` (
  `porcentaje` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

--
-- Volcado de datos para la tabla `humedad_ambiente`
--

INSERT INTO `humedad_ambiente` (`porcentaje`, `fecha`, `hora`) VALUES
(4, '2026-10-04', '19:10:37'),
(4, '2026-10-04', '19:10:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `humedad_superficie`
--

CREATE TABLE `humedad_superficie` (
  `porcentaje` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

--
-- Volcado de datos para la tabla `humedad_superficie`
--

INSERT INTO `humedad_superficie` (`porcentaje`, `fecha`, `hora`) VALUES
(5, '2026-10-04', '19:10:37'),
(5, '2026-10-04', '19:10:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `luz`
--

CREATE TABLE `luz` (
  `cantidad` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

--
-- Volcado de datos para la tabla `luz`
--

INSERT INTO `luz` (`cantidad`, `fecha`, `hora`) VALUES
(3, '2026-10-04', '19:10:37'),
(3, '2026-10-04', '19:10:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `precipitacion`
--

CREATE TABLE `precipitacion` (
  `mm` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temperatura`
--

CREATE TABLE `temperatura` (
  `grados` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

--
-- Volcado de datos para la tabla `temperatura`
--

INSERT INTO `temperatura` (`grados`, `fecha`, `hora`) VALUES
(1, '2026-10-04', '19:10:37'),
(1, '2026-10-04', '19:10:42');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
