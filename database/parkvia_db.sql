-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 14-10-2026 a las 21:50:39
-- Versión del servidor: 8.0.30
-- Versión de PHP: 8.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `parkvia_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agente_notificacions`
--

CREATE TABLE `agente_notificacions` (
  `id` bigint UNSIGNED NOT NULL,
  `clave` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datos` json DEFAULT NULL,
  `enviado_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `agente_notificacions`
--

INSERT INTO `agente_notificacions` (`id`, `clave`, `tipo`, `datos`, `enviado_at`, `created_at`, `updated_at`) VALUES
(4, 'salida_mensual:28:2026-10-16', 'SALIDA_MENSUAL', '{\"vehiculo_id\": 3, \"fecha_objetivo\": \"2026-10-16\", \"propietario_id\": 2, \"ingreso_salida_id\": 28}', '2026-10-14 21:45:15', '2026-10-14 21:45:12', '2026-10-14 21:45:15'),
(5, 'espacios:inicio:0:1:2026-10-14', 'ESPACIOS_DISPONIBLES', '{\"cantidad\": 0, \"propietario_id\": 1, \"cantidad_anterior\": null}', '2026-10-14 21:47:30', '2026-10-14 21:47:27', '2026-10-14 21:47:30'),
(6, 'estado_espacios_disponibles', 'ESTADO_ESPACIOS', '{\"cantidad\": 28}', '2026-10-14 21:49:02', '2026-10-14 21:47:30', '2026-10-14 21:49:02'),
(7, 'espacios:0:28:1:2026-10-14', 'ESPACIOS_DISPONIBLES', '{\"cantidad\": 28, \"propietario_id\": 1, \"cantidad_anterior\": 0}', '2026-10-14 21:49:02', '2026-10-14 21:48:59', '2026-10-14 21:49:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cobros`
--

CREATE TABLE `cobros` (
  `id` bigint UNSIGNED NOT NULL,
  `salida_id` bigint UNSIGNED NOT NULL,
  `vehiculo_id` bigint UNSIGNED NOT NULL,
  `tarifa_id` bigint UNSIGNED NOT NULL,
  `tiempo_cobrado` int NOT NULL,
  `fecha_reg` date NOT NULL,
  `hora` time NOT NULL,
  `hora_ingreso` time NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `total` decimal(24,2) NOT NULL,
  `status` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cobros`
--

INSERT INTO `cobros` (`id`, `salida_id`, `vehiculo_id`, `tarifa_id`, `tiempo_cobrado`, `fecha_reg`, `hora`, `hora_ingreso`, `fecha_ingreso`, `total`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 1, 1, '2026-10-13', '10:42:00', '10:41:00', '2026-10-13', 40.00, 1, '2026-10-13 14:42:16', '2026-10-13 14:42:16'),
(2, 4, 2, 1, 1, '2026-10-13', '10:45:00', '10:44:00', '2026-10-13', 40.00, 1, '2026-10-13 14:45:09', '2026-10-13 14:45:09'),
(3, 6, 1, 1, 1, '2026-10-13', '11:13:00', '11:13:00', '2026-10-13', 40.00, 1, '2026-10-13 15:13:46', '2026-10-13 15:13:46'),
(4, 8, 1, 1, 1, '2026-10-13', '11:14:00', '11:14:00', '2026-10-13', 40.00, 1, '2026-10-13 15:14:47', '2026-10-13 15:14:47'),
(5, 10, 2, 1, 1, '2026-10-13', '11:17:00', '11:16:00', '2026-10-13', 40.00, 1, '2026-10-13 15:17:23', '2026-10-13 15:17:23'),
(6, 12, 1, 1, 1, '2026-10-13', '11:21:00', '11:20:00', '2026-10-13', 40.00, 1, '2026-10-13 15:21:11', '2026-10-13 15:21:11'),
(7, 14, 2, 1, 1, '2026-10-13', '11:24:00', '11:24:00', '2026-10-13', 40.00, 1, '2026-10-13 15:24:20', '2026-10-13 15:24:20'),
(8, 18, 1, 1, 1, '2026-10-14', '16:08:00', '16:05:00', '2026-10-14', 40.00, 1, '2026-10-14 20:08:23', '2026-10-14 20:08:23'),
(9, 20, 1, 1, 1, '2026-10-14', '16:13:00', '16:11:00', '2026-10-14', 40.00, 1, '2026-10-14 20:13:49', '2026-10-14 20:13:49'),
(10, 22, 1, 1, 1, '2026-10-14', '16:35:00', '16:14:00', '2026-10-14', 40.00, 1, '2026-10-14 20:35:23', '2026-10-14 20:35:23'),
(11, 24, 1, 1, 1, '2026-10-14', '16:39:00', '16:37:00', '2026-10-14', 40.00, 1, '2026-10-14 20:39:55', '2026-10-14 20:39:55'),
(12, 26, 1, 1, 1, '2026-10-14', '17:11:00', '16:53:00', '2026-10-14', 40.00, 1, '2026-10-14 21:11:19', '2026-10-14 21:11:19'),
(13, 28, 3, 2, 672, '2026-10-14', '17:15:00', '17:15:00', '2026-10-14', 3300.00, 1, '2026-10-14 21:15:13', '2026-10-14 21:15:13'),
(14, 34, 4, 2, 672, '2026-10-14', '17:24:00', '17:23:00', '2026-10-14', 3300.00, 1, '2026-10-14 21:24:54', '2026-10-14 21:24:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_usuarios`
--

CREATE TABLE `datos_usuarios` (
  `id` bigint UNSIGNED NOT NULL,
  `nom` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `apep` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `apem` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ci` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ci_exp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dir` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fono` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cel` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `datos_usuarios`
--

INSERT INTO `datos_usuarios` (`id`, `nom`, `apep`, `apem`, `ci`, `ci_exp`, `dir`, `email`, `fono`, `cel`, `foto`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'JUAN', 'PERES', 'MAMANI', '123456', 'LP', 'LOS PEDREGALES #23', 'JUAN@GMAIL.COM', '222222', '78787878', 'JPERESJUAN1791814445.png', 2, '2026-10-12 14:14:05', '2026-10-12 14:14:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE `empresas` (
  `id` bigint UNSIGNED NOT NULL,
  `cod` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nit` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nro_aut` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nro_emp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pais` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dpto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ciudad` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `zona` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `calle` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nro` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fono` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cel` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fax` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `casilla` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `web` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `actividad_eco` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`id`, `cod`, `nit`, `nro_aut`, `nro_emp`, `name`, `alias`, `pais`, `dpto`, `ciudad`, `zona`, `calle`, `nro`, `email`, `fono`, `cel`, `fax`, `casilla`, `web`, `logo`, `actividad_eco`, `created_at`, `updated_at`) VALUES
(1, '0', '0', '0', '0', 'PARKVIA S.A.', 'PARKVIA', 'BOLIVIA', 'LA PAZ', 'LA PAZ', 'ZONA CENTRAL', 'CALLE CENTRAL', '3', '', '0', '0', '', '', '', 'PARKVIA_1791220011.jpg', 'CON FINES DE LUCRO', '2022-05-19 14:55:14', '2026-10-05 17:07:03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturas`
--

CREATE TABLE `facturas` (
  `id` bigint UNSIGNED NOT NULL,
  `cobro_id` bigint UNSIGNED NOT NULL,
  `a_nombre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nit` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nro_factura` bigint NOT NULL,
  `codigo_control` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `qr` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` decimal(24,2) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `fecha_emision` date NOT NULL,
  `estado` int NOT NULL,
  `observacion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `facturas`
--

INSERT INTO `facturas` (`id`, `cobro_id`, `a_nombre`, `nit`, `nro_factura`, `codigo_control`, `qr`, `total`, `fecha`, `hora`, `fecha_emision`, `estado`, `observacion`, `created_at`, `updated_at`) VALUES
(1, 1, 'GONZALES', '234234234', 10001, 'C4-CD-DC-75-C5', '10001_1791902536.png', 40.00, '2026-10-13', '10:42:00', '2027-04-13', 1, '', '2026-10-13 14:42:16', '2026-10-13 14:42:16'),
(2, 2, 'GONZALES', '234234234', 10002, 'E5-8D-46-9B-4C', '10002_1791902709.png', 40.00, '2026-10-13', '10:45:00', '2027-04-13', 1, '', '2026-10-13 14:45:09', '2026-10-13 14:45:09'),
(3, 3, 'GONZALES', '234234234', 10003, 'A2-31-2A-CE-D3', '10003_1791904426.png', 40.00, '2026-10-13', '11:13:00', '2027-04-13', 1, '', '2026-10-13 15:13:46', '2026-10-13 15:13:46'),
(4, 4, 'GONZALES', '234234234', 10004, '26-56-73-79-3E', '10004_1791904487.png', 40.00, '2026-10-13', '11:14:00', '2027-04-13', 1, '', '2026-10-13 15:14:47', '2026-10-13 15:14:47'),
(5, 5, 'GONZALES', '234234234', 10005, '94-96-85-65-FB', '10005_1791904643.png', 40.00, '2026-10-13', '11:17:00', '2027-04-13', 1, '', '2026-10-13 15:17:23', '2026-10-13 15:17:23'),
(6, 6, 'GONZALES', '234234234', 10006, 'A7-32-D4-87-E9', '10006_1791904871.png', 40.00, '2026-10-13', '11:21:00', '2027-04-13', 1, '', '2026-10-13 15:21:11', '2026-10-13 15:21:11'),
(7, 7, 'ERIC GONZALES', '234234234', 10007, '63-CE-82-89-81', '10007_1791905060.png', 40.00, '2026-10-13', '11:24:00', '2027-04-13', 1, '', '2026-10-13 15:24:20', '2026-10-13 15:24:33'),
(8, 8, 'GONZALES', '234234234', 10008, '34-CB-8A-E2-72', '10008_1792008503.png', 40.00, '2026-10-14', '16:08:00', '2027-04-14', 1, '', '2026-10-14 20:08:23', '2026-10-14 20:08:23'),
(9, 9, 'GONZALES', '234234234', 10009, '44-B2-D2-BB-B9', '10009_1792008829.png', 40.00, '2026-10-14', '16:13:00', '2027-04-14', 1, '', '2026-10-14 20:13:49', '2026-10-14 20:13:49'),
(10, 10, 'GONZALES', '234234234', 10010, 'BA-D7-23-81-8F', '10010_1792010123.png', 40.00, '2026-10-14', '16:35:00', '2027-04-14', 1, '', '2026-10-14 20:35:23', '2026-10-14 20:35:23'),
(11, 11, 'GONZALES', '234234234', 10011, '26-93-4A-96-D2', '10011_1792010395.png', 40.00, '2026-10-14', '16:39:00', '2027-04-14', 1, '', '2026-10-14 20:39:55', '2026-10-14 20:39:55'),
(12, 12, 'GONZALES', '234234234', 10012, '3F-D4-12-23-53', '10012_1792012279.png', 40.00, '2026-10-14', '17:11:00', '2027-04-14', 1, '', '2026-10-14 21:11:19', '2026-10-14 21:11:19'),
(13, 13, 'PERES', '324234234', 10013, 'BE-AA-F1-E9-91', '10013_1792012513.png', 3300.00, '2026-10-14', '17:15:00', '2027-04-14', 1, 'COBRO ANTICIPADO POR PARQUEO DE 672 HORAS O MAS', '2026-10-14 21:15:13', '2026-10-14 21:15:13'),
(14, 14, 'PERES', '324234234', 10014, '2A-E1-58-EF-44', '10014_1792013094.png', 3300.00, '2026-10-14', '17:24:00', '2027-04-14', 1, 'COBRO ANTICIPADO POR PARQUEO DE 672 HORAS O MAS', '2026-10-14 21:24:54', '2026-10-14 21:24:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingreso_salidas`
--

CREATE TABLE `ingreso_salidas` (
  `id` bigint UNSIGNED NOT NULL,
  `vehiculo_id` int UNSIGNED NOT NULL,
  `accion` enum('INGRESO','SALIDA') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `hora` time NOT NULL,
  `observacion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha_reg` date NOT NULL,
  `tipo` enum('NORMAL','INGRESO MENSUAL','SALIDA MENSUAL','HISTORICO') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `ingreso_salidas`
--

INSERT INTO `ingreso_salidas` (`id`, `vehiculo_id`, `accion`, `hora`, `observacion`, `fecha_reg`, `tipo`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'INGRESO', '10:41:00', '', '2026-10-13', 'NORMAL', 1, '2026-10-13 14:42:07', '2026-10-13 14:42:07'),
(2, 1, 'SALIDA', '10:42:00', '', '2026-10-13', 'NORMAL', 1, '2026-10-13 14:42:16', '2026-10-13 14:42:16'),
(3, 2, 'INGRESO', '10:44:00', '', '2026-10-13', 'NORMAL', 1, '2026-10-13 14:45:02', '2026-10-13 14:45:02'),
(4, 2, 'SALIDA', '10:45:00', '', '2026-10-13', 'NORMAL', 1, '2026-10-13 14:45:09', '2026-10-13 14:45:09'),
(5, 1, 'INGRESO', '11:13:00', NULL, '2026-10-13', 'NORMAL', 1, '2026-10-13 15:13:43', '2026-10-13 15:13:43'),
(6, 1, 'SALIDA', '11:13:00', NULL, '2026-10-13', 'NORMAL', 1, '2026-10-13 15:13:46', '2026-10-13 15:13:46'),
(7, 1, 'INGRESO', '11:14:00', NULL, '2026-10-13', 'NORMAL', 1, '2026-10-13 15:14:32', '2026-10-13 15:14:32'),
(8, 1, 'SALIDA', '11:14:00', NULL, '2026-10-13', 'NORMAL', 1, '2026-10-13 15:14:47', '2026-10-13 15:14:47'),
(9, 2, 'INGRESO', '11:16:00', NULL, '2026-10-13', 'NORMAL', 1, '2026-10-13 15:16:57', '2026-10-13 15:16:57'),
(10, 2, 'SALIDA', '11:17:00', NULL, '2026-10-13', 'NORMAL', 1, '2026-10-13 15:17:23', '2026-10-13 15:17:23'),
(11, 1, 'INGRESO', '11:20:00', NULL, '2026-10-13', 'NORMAL', 1, '2026-10-13 15:20:56', '2026-10-13 15:20:56'),
(12, 1, 'SALIDA', '11:21:00', NULL, '2026-10-13', 'NORMAL', 1, '2026-10-13 15:21:11', '2026-10-13 15:21:11'),
(13, 2, 'INGRESO', '11:24:00', NULL, '2026-10-13', 'NORMAL', 1, '2026-10-13 15:24:03', '2026-10-13 15:24:03'),
(14, 2, 'SALIDA', '11:24:00', NULL, '2026-10-13', 'NORMAL', 1, '2026-10-13 15:24:20', '2026-10-13 15:24:20'),
(17, 1, 'INGRESO', '16:05:00', NULL, '2026-10-14', 'NORMAL', 1, '2026-10-14 20:05:58', '2026-10-14 20:05:58'),
(18, 1, 'SALIDA', '16:08:00', NULL, '2026-10-14', 'NORMAL', 1, '2026-10-14 20:08:23', '2026-10-14 20:08:23'),
(19, 1, 'INGRESO', '16:11:00', NULL, '2026-10-14', 'NORMAL', 1, '2026-10-14 20:11:21', '2026-10-14 20:11:21'),
(20, 1, 'SALIDA', '16:13:00', NULL, '2026-10-14', 'NORMAL', 1, '2026-10-14 20:13:49', '2026-10-14 20:13:49'),
(21, 1, 'INGRESO', '16:14:00', NULL, '2026-10-14', 'NORMAL', 1, '2026-10-14 20:14:54', '2026-10-14 20:14:54'),
(22, 1, 'SALIDA', '16:35:00', NULL, '2026-10-14', 'NORMAL', 1, '2026-10-14 20:35:23', '2026-10-14 20:35:23'),
(23, 1, 'INGRESO', '16:37:00', NULL, '2026-10-14', 'NORMAL', 1, '2026-10-14 20:37:59', '2026-10-14 20:37:59'),
(24, 1, 'SALIDA', '16:39:00', NULL, '2026-10-14', 'NORMAL', 1, '2026-10-14 20:39:55', '2026-10-14 20:39:55'),
(25, 1, 'INGRESO', '16:53:00', NULL, '2026-10-14', 'NORMAL', 1, '2026-10-14 20:53:21', '2026-10-14 20:53:21'),
(26, 1, 'SALIDA', '17:11:00', NULL, '2026-10-14', 'NORMAL', 1, '2026-10-14 21:11:19', '2026-10-14 21:11:19'),
(27, 3, 'INGRESO', '17:15:00', NULL, '2026-10-14', 'INGRESO MENSUAL', 1, '2026-10-14 21:15:13', '2026-10-14 21:15:13'),
(28, 3, 'SALIDA', '17:15:00', NULL, '2026-11-11', 'SALIDA MENSUAL', 1, '2026-10-14 21:15:13', '2026-10-14 21:15:13'),
(29, 3, 'SALIDA', '17:21:00', NULL, '2026-10-14', 'HISTORICO', 1, '2026-10-14 21:21:24', '2026-10-14 21:21:24'),
(30, 3, 'INGRESO', '17:21:00', NULL, '2026-10-14', 'HISTORICO', 1, '2026-10-14 21:21:45', '2026-10-14 21:21:45'),
(31, 3, 'SALIDA', '17:22:00', NULL, '2026-10-14', 'HISTORICO', 1, '2026-10-14 21:22:05', '2026-10-14 21:22:05'),
(32, 3, 'INGRESO', '17:22:00', NULL, '2026-10-14', 'HISTORICO', 1, '2026-10-14 21:22:31', '2026-10-14 21:22:31'),
(33, 4, 'INGRESO', '17:23:00', NULL, '2026-10-14', 'INGRESO MENSUAL', 1, '2026-10-14 21:24:54', '2026-10-14 21:24:54'),
(34, 4, 'SALIDA', '17:24:00', NULL, '2026-11-11', 'SALIDA MENSUAL', 1, '2026-10-14 21:24:54', '2026-10-14 21:24:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `log_seguimientos`
--

CREATE TABLE `log_seguimientos` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `accion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `modulo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `log_seguimientos`
--

INSERT INTO `log_seguimientos` (`id`, `user_id`, `accion`, `descripcion`, `modulo`, `fecha`, `hora`, `created_at`, `updated_at`) VALUES
(1, 1, 'CREACIÓN', 'EL USUARIO admin REGISTRO UN NUEVO USUARIO', 'USUARIOS', '2026-10-12', '10:14:05', '2026-10-12 14:14:05', '2026-10-12 14:14:05'),
(2, 1, 'MODIFICACIÓN', 'EL USUARIO admin MODIFICÓ UN REGISTRO DE USUARIO', 'USUARIOS', '2026-10-12', '10:18:33', '2026-10-12 14:18:33', '2026-10-12 14:18:33'),
(3, 1, 'MODIFICACIÓN', 'EL USUARIO admin MODIFICÓ UN REGISTRO DE USUARIO', 'USUARIOS', '2026-10-12', '10:18:44', '2026-10-12 14:18:44', '2026-10-12 14:18:44'),
(4, 1, 'MODIFICACIÓN', 'EL USUARIO admin MODIFICÓ UN REGISTRO DE USUARIO', 'USUARIOS', '2026-10-12', '10:20:05', '2026-10-12 14:20:05', '2026-10-12 14:20:05'),
(5, 1, 'MODIFICACIÓN', 'EL USUARIO admin MODIFICÓ UN REGISTRO DE USUARIO', 'USUARIOS', '2026-10-12', '10:20:11', '2026-10-12 14:20:11', '2026-10-12 14:20:11'),
(6, 1, 'CREACIÓN', 'EL USUARIO admin REGISTRO UNA NUEVA TARIFA', 'TARIFAS', '2026-10-12', '10:25:17', '2026-10-12 14:25:17', '2026-10-12 14:25:17'),
(7, 1, 'MODIFICACIÓN', 'EL USUARIO admin MODIFICÓ UN REGISTRO TARIFA', 'TARIFAS', '2026-10-12', '10:26:10', '2026-10-12 14:26:10', '2026-10-12 14:26:10'),
(8, 1, 'MODIFICACIÓN', 'EL USUARIO admin MODIFICÓ UN REGISTRO TARIFA', 'TARIFAS', '2026-10-12', '10:26:18', '2026-10-12 14:26:18', '2026-10-12 14:26:18'),
(9, 1, 'ELIMINACIÓN', 'EL USUARIO admin ELIMINÓ UN REGISTRO TARIFA', 'TARIFAS', '2026-10-12', '10:26:23', '2026-10-12 14:26:23', '2026-10-12 14:26:23'),
(10, 1, 'CREACIÓN', 'EL USUARIO admin REGISTRÓ UN NUEVO PROPIETARIO', 'PROPIETARIOS', '2026-10-12', '10:31:52', '2026-10-12 14:31:52', '2026-10-12 14:31:52'),
(11, 1, 'MODIFICACIÓN', 'EL USUARIO admin MODIFICÓ UN REGISTRO PROPIETARIO', 'PROPIETARIOS', '2026-10-12', '10:34:44', '2026-10-12 14:34:44', '2026-10-12 14:34:44'),
(12, 1, 'CREACIÓN', 'EL USUARIO admin REGISTRO UN NUEVO TIPO DE VEHICULO', 'TIPO DE VEHICULOS', '2026-10-12', '10:44:13', '2026-10-12 14:44:13', '2026-10-12 14:44:13'),
(13, 1, 'MODIFICACIÓN', 'EL USUARIO admin MODIFICÓ UN REGISTRO TIPO DE VEHICULO', 'TIPO DE VEHICULOS', '2026-10-12', '10:44:32', '2026-10-12 14:44:32', '2026-10-12 14:44:32'),
(14, 1, 'CREACIÓN', 'EL USUARIO admin REGISTRO UN NUEVO TIPO DE VEHICULO', 'TIPO DE VEHICULOS', '2026-10-12', '10:44:59', '2026-10-12 14:44:59', '2026-10-12 14:44:59'),
(15, 1, 'CREACIÓN', 'EL USUARIO admin REGISTRO UNA NUEVA TARIFA', 'TARIFAS', '2026-10-12', '10:45:42', '2026-10-12 14:45:42', '2026-10-12 14:45:42'),
(16, 1, 'MODIFICACIÓN', 'EL USUARIO admin MODIFICÓ UN REGISTRO TARIFA', 'TARIFAS', '2026-10-12', '10:45:49', '2026-10-12 14:45:49', '2026-10-12 14:45:49'),
(17, 1, 'CREACIÓN', 'EL USUARIO admin REGISTRO UN VEHICULO', 'VEHICULOS', '2026-10-12', '10:50:15', '2026-10-12 14:50:15', '2026-10-12 14:50:15'),
(18, 1, 'MODIFICACIÓN', 'EL USUARIO admin MODIFICO UN VEHICULO', 'VEHICULOS', '2026-10-12', '10:50:31', '2026-10-12 14:50:31', '2026-10-12 14:50:31'),
(19, 1, 'MODIFICACIÓN', 'EL USUARIO admin MODIFICO UN VEHICULO', 'VEHICULOS', '2026-10-12', '10:50:36', '2026-10-12 14:50:36', '2026-10-12 14:50:36'),
(20, 1, 'CREACIÓN', 'EL USUARIO admin REGISTRO UN VEHICULO', 'VEHICULOS', '2026-10-12', '10:56:40', '2026-10-12 14:56:40', '2026-10-12 14:56:40'),
(21, 1, 'CREACIÓN', 'EL USUARIO admin REGISTRO UNA NUEVA SECCIÓN', 'SECCIONES', '2026-10-12', '11:07:28', '2026-10-12 15:07:28', '2026-10-12 15:07:28'),
(22, 1, 'MODIFICACIÓN', 'EL USUARIO admin MODIFICÓ UNA SECCIÓN', 'SECCIONES', '2026-10-12', '11:07:50', '2026-10-12 15:07:50', '2026-10-12 15:07:50'),
(23, 1, 'ELIMINACIÓN', 'EL USUARIO admin ELIMINÓ UNA SECCIÓN', 'SECCIONES', '2026-10-12', '11:09:45', '2026-10-12 15:09:45', '2026-10-12 15:09:45'),
(24, 1, 'CREACIÓN', 'EL USUARIO admin REGISTRO UNA NUEVA SECCIÓN', 'SECCIONES', '2026-10-12', '11:10:25', '2026-10-12 15:10:25', '2026-10-12 15:10:25'),
(25, 1, 'CREACIÓN', 'EL USUARIO admin REGISTRO UN INGRESO/SALIDA', 'INGRESOS Y SALIDAS', '2026-10-12', '11:26:50', '2026-10-12 15:26:50', '2026-10-12 15:26:50'),
(26, 1, 'CREACIÓN', 'EL USUARIO admin REGISTRO UN INGRESO/SALIDA', 'INGRESOS Y SALIDAS', '2026-10-13', '10:25:37', '2026-10-13 14:25:37', '2026-10-13 14:25:37'),
(27, 1, 'CREACIÓN', 'EL USUARIO admin REGISTRO UN INGRESO/SALIDA', 'INGRESOS Y SALIDAS', '2026-10-13', '10:29:36', '2026-10-13 14:29:36', '2026-10-13 14:29:36'),
(28, 1, 'CREACIÓN', 'EL USUARIO admin REGISTRO UN INGRESO/SALIDA', 'INGRESOS Y SALIDAS', '2026-10-13', '10:31:44', '2026-10-13 14:31:44', '2026-10-13 14:31:44'),
(29, 1, 'CREACIÓN', 'EL USUARIO admin REGISTRO UN INGRESO/SALIDA', 'INGRESOS Y SALIDAS', '2026-10-13', '10:42:07', '2026-10-13 14:42:07', '2026-10-13 14:42:07'),
(30, 1, 'CREACIÓN', 'EL USUARIO admin REGISTRO UN INGRESO/SALIDA', 'INGRESOS Y SALIDAS', '2026-10-13', '10:45:02', '2026-10-13 14:45:02', '2026-10-13 14:45:02'),
(31, 2, 'CREACIÓN', 'EL USUARIO JPERES REGISTRO UN COBRO', 'COBROS', '2026-10-13', '11:23:01', '2026-10-13 15:23:01', '2026-10-13 15:23:01'),
(32, 2, 'CREACIÓN', 'EL USUARIO JPERES REGISTRO UN COBRO', 'COBROS', '2026-10-13', '11:23:08', '2026-10-13 15:23:08', '2026-10-13 15:23:08'),
(33, 2, 'CREACIÓN', 'EL USUARIO JPERES REGISTRO UN COBRO', 'COBROS', '2026-10-13', '11:23:15', '2026-10-13 15:23:15', '2026-10-13 15:23:15'),
(34, 2, 'CREACIÓN', 'EL USUARIO JPERES REGISTRO UN COBRO', 'COBROS', '2026-10-13', '11:23:20', '2026-10-13 15:23:20', '2026-10-13 15:23:20'),
(35, 2, 'CREACIÓN', 'EL USUARIO JPERES REGISTRO UN COBRO', 'COBROS', '2026-10-13', '11:23:24', '2026-10-13 15:23:24', '2026-10-13 15:23:24'),
(36, 2, 'CREACIÓN', 'EL USUARIO JPERES REGISTRO UN COBRO', 'COBROS', '2026-10-13', '11:23:32', '2026-10-13 15:23:32', '2026-10-13 15:23:32'),
(37, 2, 'CREACIÓN', 'EL USUARIO JPERES REGISTRO UN COBRO', 'COBROS', '2026-10-13', '11:24:33', '2026-10-13 15:24:33', '2026-10-13 15:24:33'),
(38, 1, 'MODIFICACIÓN', 'EL USUARIO admin MODIFICÓ UN REGISTRO PROPIETARIO', 'PROPIETARIOS', '2026-10-14', '16:04:24', '2026-10-14 20:04:24', '2026-10-14 20:04:24'),
(39, 1, 'MODIFICACIÓN', 'EL USUARIO admin MODIFICÓ UN REGISTRO PROPIETARIO', 'PROPIETARIOS', '2026-10-14', '16:04:47', '2026-10-14 20:04:47', '2026-10-14 20:04:47'),
(40, 2, 'CREACIÓN', 'EL USUARIO JPERES REGISTRO UN COBRO', 'COBROS', '2026-10-14', '16:47:03', '2026-10-14 20:47:03', '2026-10-14 20:47:03'),
(41, 2, 'CREACIÓN', 'EL USUARIO JPERES REGISTRO UN COBRO', 'COBROS', '2026-10-14', '16:48:57', '2026-10-14 20:48:57', '2026-10-14 20:48:57'),
(42, 2, 'CREACIÓN', 'EL USUARIO JPERES REGISTRO UN COBRO', 'COBROS', '2026-10-14', '16:53:31', '2026-10-14 20:53:31', '2026-10-14 20:53:31'),
(43, 2, 'CREACIÓN', 'EL USUARIO JPERES REGISTRO UN COBRO', 'COBROS', '2026-10-14', '16:54:19', '2026-10-14 20:54:19', '2026-10-14 20:54:19'),
(44, 1, 'CREACIÓN', 'EL USUARIO admin REGISTRO UNA NUEVA TARIFA', 'TARIFAS', '2026-10-14', '16:58:12', '2026-10-14 20:58:12', '2026-10-14 20:58:12'),
(45, 1, 'CREACIÓN', 'EL USUARIO admin REGISTRÓ UN NUEVO PROPIETARIO', 'PROPIETARIOS', '2026-10-14', '16:58:33', '2026-10-14 20:58:33', '2026-10-14 20:58:33'),
(46, 1, 'CREACIÓN', 'EL USUARIO admin REGISTRO UN VEHICULO', 'VEHICULOS', '2026-10-14', '16:59:05', '2026-10-14 20:59:05', '2026-10-14 20:59:05'),
(47, 2, 'CREACIÓN', 'EL USUARIO JPERES REGISTRO UN COBRO', 'COBROS', '2026-10-14', '17:11:46', '2026-10-14 21:11:46', '2026-10-14 21:11:46'),
(48, 2, 'CREACIÓN', 'EL USUARIO JPERES REGISTRO UN COBRO', 'COBROS', '2026-10-14', '17:20:46', '2026-10-14 21:20:46', '2026-10-14 21:20:46'),
(49, 2, 'CREACIÓN', 'EL USUARIO JPERES REGISTRO UN VEHICULO', 'VEHICULOS', '2026-10-14', '17:23:35', '2026-10-14 21:23:35', '2026-10-14 21:23:35'),
(50, 2, 'CREACIÓN', 'EL USUARIO JPERES REGISTRO UN COBRO', 'COBROS', '2026-10-14', '17:25:26', '2026-10-14 21:25:26', '2026-10-14 21:25:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mapeos`
--

CREATE TABLE `mapeos` (
  `id` bigint UNSIGNED NOT NULL,
  `nom` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ubicacion_id` bigint UNSIGNED NOT NULL,
  `ocupado` int DEFAULT NULL,
  `vehiculo_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `mapeos`
--

INSERT INTO `mapeos` (`id`, `nom`, `ubicacion_id`, `ocupado`, `vehiculo_id`, `created_at`, `updated_at`) VALUES
(1, 'A', 1, 0, 0, '2026-10-12 15:10:24', '2026-10-14 21:11:19'),
(2, 'B', 1, 0, 0, '2026-10-12 15:10:24', '2026-10-13 14:26:14'),
(3, 'C', 1, 1, 4, '2026-10-12 15:10:24', '2026-10-14 21:24:54'),
(4, 'D', 1, 1, 3, '2026-10-12 15:10:24', '2026-10-14 21:15:13'),
(5, 'E', 1, 0, 0, '2026-10-12 15:10:24', '2026-10-12 15:10:24'),
(6, 'F', 1, 0, 0, '2026-10-12 15:10:24', '2026-10-12 15:10:24'),
(7, 'G', 1, 0, 0, '2026-10-12 15:10:24', '2026-10-12 15:10:24'),
(8, 'H', 1, 0, 0, '2026-10-12 15:10:24', '2026-10-12 15:10:24'),
(9, 'I', 1, 0, 0, '2026-10-12 15:10:24', '2026-10-12 15:10:24'),
(10, 'J', 1, 0, 0, '2026-10-12 15:10:24', '2026-10-12 15:10:24'),
(11, 'K', 1, 0, 0, '2026-10-12 15:10:24', '2026-10-12 15:10:24'),
(12, 'L', 1, 0, 0, '2026-10-12 15:10:24', '2026-10-12 15:26:50'),
(13, 'M', 1, 0, 0, '2026-10-12 15:10:24', '2026-10-12 15:10:24'),
(14, 'N', 1, 0, 0, '2026-10-12 15:10:24', '2026-10-12 15:10:24'),
(15, 'O', 1, 0, 0, '2026-10-12 15:10:24', '2026-10-12 15:10:24'),
(16, 'P', 1, 0, 0, '2026-10-12 15:10:24', '2026-10-12 15:10:24'),
(17, 'Q', 1, 0, 0, '2026-10-12 15:10:24', '2026-10-12 15:10:24'),
(18, 'R', 1, 0, 0, '2026-10-12 15:10:25', '2026-10-12 15:10:25'),
(19, 'S', 1, 0, 0, '2026-10-12 15:10:25', '2026-10-12 15:10:25'),
(20, 'T', 1, 0, 0, '2026-10-12 15:10:25', '2026-10-12 15:10:25'),
(21, 'U', 1, 0, 0, '2026-10-12 15:10:25', '2026-10-12 15:10:25'),
(22, 'V', 1, 0, 0, '2026-10-12 15:10:25', '2026-10-12 15:10:25'),
(23, 'W', 1, 0, 0, '2026-10-12 15:10:25', '2026-10-12 15:10:25'),
(24, 'X', 1, 0, 0, '2026-10-12 15:10:25', '2026-10-12 15:10:25'),
(25, 'Y', 1, 0, 0, '2026-10-12 15:10:25', '2026-10-12 15:10:25'),
(26, 'Z', 1, 0, 0, '2026-10-12 15:10:25', '2026-10-12 15:10:25'),
(27, 'A-1', 1, 0, 0, '2026-10-12 15:10:25', '2026-10-12 15:10:25'),
(28, 'B-2', 1, 0, 0, '2026-10-12 15:10:25', '2026-10-12 15:10:25'),
(29, 'C-3', 1, 0, 0, '2026-10-12 15:10:25', '2026-10-12 15:10:25'),
(30, 'D-4', 1, 0, 0, '2026-10-12 15:10:25', '2026-10-12 15:10:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2026_09_30_140849_create_datos_usuarios_table', 1),
(3, '2026_09_30_150906_create_empresas_table', 1),
(4, '2026_10_01_100050_create_ubicacions_table', 1),
(5, '2026_10_01_100205_create_tarifas_table', 1),
(6, '2026_10_01_100217_create_propietarios_table', 1),
(7, '2026_10_01_100218_create_tipo_vehiculos_table', 1),
(8, '2026_10_01_100219_create_vehiculos_table', 1),
(9, '2026_10_01_100314_create_ingreso_salidas_table', 1),
(10, '2026_10_01_100350_create_notificacion_usuarios_table', 1),
(11, '2026_10_01_103301_create_mapeos_table', 1),
(12, '2026_10_01_103302_create_cobros_table', 1),
(13, '2026_10_01_103303_create_facturas_table', 1),
(14, '2026_10_02_095509_create_salidas_table', 1),
(15, '2026_10_03_211403_create_pendientes_table', 1),
(16, '2026_10_08_144916_create_log_seguimientos_table', 1),
(17, '2026_10_08_171904_create_permisos_table', 1),
(18, '2026_10_08_171918_create_user_permisos_table', 1),
(19, '2026_10_14_173330_create_agente_notificacions_table', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notificacion_usuarios`
--

CREATE TABLE `notificacion_usuarios` (
  `id` bigint UNSIGNED NOT NULL,
  `ingresoSalida_id` bigint UNSIGNED NOT NULL,
  `hora` time NOT NULL,
  `fecha` date NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `visto` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `notificacion_usuarios`
--

INSERT INTO `notificacion_usuarios` (`id`, `ingresoSalida_id`, `hora`, `fecha`, `user_id`, `visto`, `created_at`, `updated_at`) VALUES
(1, 1, '10:41:00', '2026-10-13', 1, 1, '2026-10-13 14:42:07', '2026-10-13 15:14:07'),
(2, 1, '10:41:00', '2026-10-13', 2, 1, '2026-10-13 14:42:07', '2026-10-13 15:21:18'),
(3, 2, '10:42:00', '2026-10-13', 1, 1, '2026-10-13 14:42:16', '2026-10-13 15:14:07'),
(4, 2, '10:42:00', '2026-10-13', 2, 1, '2026-10-13 14:42:16', '2026-10-13 15:21:18'),
(5, 3, '10:44:00', '2026-10-13', 1, 1, '2026-10-13 14:45:02', '2026-10-13 15:14:07'),
(6, 3, '10:44:00', '2026-10-13', 2, 1, '2026-10-13 14:45:02', '2026-10-13 15:21:18'),
(7, 4, '10:45:00', '2026-10-13', 1, 1, '2026-10-13 14:45:09', '2026-10-13 15:14:07'),
(8, 4, '10:45:00', '2026-10-13', 2, 1, '2026-10-13 14:45:09', '2026-10-13 15:21:18'),
(9, 5, '11:13:00', '2026-10-13', 1, 1, '2026-10-13 15:13:43', '2026-10-13 15:14:07'),
(10, 5, '11:13:00', '2026-10-13', 2, 1, '2026-10-13 15:13:43', '2026-10-13 15:21:18'),
(11, 6, '11:13:00', '2026-10-13', 1, 1, '2026-10-13 15:13:46', '2026-10-13 15:14:07'),
(12, 6, '11:13:00', '2026-10-13', 2, 1, '2026-10-13 15:13:46', '2026-10-13 15:21:18'),
(13, 7, '11:14:00', '2026-10-13', 1, 0, '2026-10-13 15:14:32', '2026-10-13 15:14:32'),
(14, 7, '11:14:00', '2026-10-13', 2, 1, '2026-10-13 15:14:32', '2026-10-13 15:21:18'),
(15, 8, '11:14:00', '2026-10-13', 1, 0, '2026-10-13 15:14:47', '2026-10-13 15:14:47'),
(16, 8, '11:14:00', '2026-10-13', 2, 1, '2026-10-13 15:14:47', '2026-10-13 15:21:18'),
(17, 9, '11:16:00', '2026-10-13', 1, 0, '2026-10-13 15:16:57', '2026-10-13 15:16:57'),
(18, 9, '11:16:00', '2026-10-13', 2, 1, '2026-10-13 15:16:57', '2026-10-13 15:21:18'),
(19, 10, '11:17:00', '2026-10-13', 1, 0, '2026-10-13 15:17:23', '2026-10-13 15:17:23'),
(20, 10, '11:17:00', '2026-10-13', 2, 1, '2026-10-13 15:17:23', '2026-10-13 15:21:18'),
(21, 11, '11:20:00', '2026-10-13', 1, 0, '2026-10-13 15:20:56', '2026-10-13 15:20:56'),
(22, 11, '11:20:00', '2026-10-13', 2, 1, '2026-10-13 15:20:56', '2026-10-13 15:21:18'),
(23, 12, '11:21:00', '2026-10-13', 1, 0, '2026-10-13 15:21:11', '2026-10-13 15:21:11'),
(24, 12, '11:21:00', '2026-10-13', 2, 1, '2026-10-13 15:21:11', '2026-10-13 15:21:18'),
(25, 13, '11:24:00', '2026-10-13', 1, 0, '2026-10-13 15:24:03', '2026-10-13 15:24:03'),
(26, 13, '11:24:00', '2026-10-13', 2, 0, '2026-10-13 15:24:03', '2026-10-13 15:24:03'),
(27, 14, '11:24:00', '2026-10-13', 1, 0, '2026-10-13 15:24:20', '2026-10-13 15:24:20'),
(28, 14, '11:24:00', '2026-10-13', 2, 0, '2026-10-13 15:24:20', '2026-10-13 15:24:20'),
(33, 17, '16:05:00', '2026-10-14', 1, 0, '2026-10-14 20:05:58', '2026-10-14 20:05:58'),
(34, 17, '16:05:00', '2026-10-14', 2, 0, '2026-10-14 20:05:58', '2026-10-14 20:05:58'),
(35, 18, '16:08:00', '2026-10-14', 1, 0, '2026-10-14 20:08:23', '2026-10-14 20:08:23'),
(36, 18, '16:08:00', '2026-10-14', 2, 0, '2026-10-14 20:08:23', '2026-10-14 20:08:23'),
(37, 19, '16:11:00', '2026-10-14', 1, 0, '2026-10-14 20:11:21', '2026-10-14 20:11:21'),
(38, 19, '16:11:00', '2026-10-14', 2, 0, '2026-10-14 20:11:21', '2026-10-14 20:11:21'),
(39, 20, '16:13:00', '2026-10-14', 1, 0, '2026-10-14 20:13:49', '2026-10-14 20:13:49'),
(40, 20, '16:13:00', '2026-10-14', 2, 0, '2026-10-14 20:13:49', '2026-10-14 20:13:49'),
(41, 21, '16:14:00', '2026-10-14', 1, 0, '2026-10-14 20:14:54', '2026-10-14 20:14:54'),
(42, 21, '16:14:00', '2026-10-14', 2, 0, '2026-10-14 20:14:54', '2026-10-14 20:14:54'),
(43, 22, '16:35:00', '2026-10-14', 1, 0, '2026-10-14 20:35:23', '2026-10-14 20:35:23'),
(44, 22, '16:35:00', '2026-10-14', 2, 0, '2026-10-14 20:35:23', '2026-10-14 20:35:23'),
(45, 23, '16:37:00', '2026-10-14', 1, 0, '2026-10-14 20:37:59', '2026-10-14 20:37:59'),
(46, 23, '16:37:00', '2026-10-14', 2, 0, '2026-10-14 20:37:59', '2026-10-14 20:37:59'),
(47, 24, '16:39:00', '2026-10-14', 1, 0, '2026-10-14 20:39:55', '2026-10-14 20:39:55'),
(48, 24, '16:39:00', '2026-10-14', 2, 0, '2026-10-14 20:39:55', '2026-10-14 20:39:55'),
(49, 25, '16:53:00', '2026-10-14', 1, 0, '2026-10-14 20:53:21', '2026-10-14 20:53:21'),
(50, 25, '16:53:00', '2026-10-14', 2, 0, '2026-10-14 20:53:21', '2026-10-14 20:53:21'),
(51, 26, '17:11:00', '2026-10-14', 1, 0, '2026-10-14 21:11:19', '2026-10-14 21:11:19'),
(52, 26, '17:11:00', '2026-10-14', 2, 0, '2026-10-14 21:11:19', '2026-10-14 21:11:19'),
(53, 27, '17:15:00', '2026-10-14', 1, 0, '2026-10-14 21:15:13', '2026-10-14 21:15:13'),
(54, 27, '17:15:00', '2026-10-14', 2, 0, '2026-10-14 21:15:13', '2026-10-14 21:15:13'),
(55, 29, '17:21:00', '2026-10-14', 1, 0, '2026-10-14 21:21:24', '2026-10-14 21:21:24'),
(56, 29, '17:21:00', '2026-10-14', 2, 0, '2026-10-14 21:21:24', '2026-10-14 21:21:24'),
(57, 30, '17:21:00', '2026-10-14', 1, 0, '2026-10-14 21:21:45', '2026-10-14 21:21:45'),
(58, 30, '17:21:00', '2026-10-14', 2, 0, '2026-10-14 21:21:45', '2026-10-14 21:21:45'),
(59, 31, '17:22:00', '2026-10-14', 1, 0, '2026-10-14 21:22:05', '2026-10-14 21:22:05'),
(60, 31, '17:22:00', '2026-10-14', 2, 0, '2026-10-14 21:22:05', '2026-10-14 21:22:05'),
(61, 32, '17:22:00', '2026-10-14', 1, 0, '2026-10-14 21:22:31', '2026-10-14 21:22:31'),
(62, 32, '17:22:00', '2026-10-14', 2, 0, '2026-10-14 21:22:31', '2026-10-14 21:22:31'),
(63, 33, '17:23:00', '2026-10-14', 1, 0, '2026-10-14 21:24:54', '2026-10-14 21:24:54'),
(64, 33, '17:23:00', '2026-10-14', 2, 0, '2026-10-14 21:24:54', '2026-10-14 21:24:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pendientes`
--

CREATE TABLE `pendientes` (
  `id` bigint UNSIGNED NOT NULL,
  `rfid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `registrado` enum('SI','NO') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `id` bigint UNSIGNED NOT NULL,
  `modulo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`id`, `modulo`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'TODOS', NULL, NULL, '2022-09-17 03:16:26', '2022-09-17 03:16:26'),
(2, 'USUARIOS', 'users.index', 'VER LA LISTA DE USUARIOS', '2022-09-17 03:16:26', '2022-09-17 03:16:26'),
(3, 'USUARIOS', 'users.create', 'CREAR USUARIOS', '2022-09-17 03:16:26', '2022-09-17 03:16:26'),
(4, 'USUARIOS', 'users.edit', 'EDITAR USUARIOS', '2022-09-17 03:16:26', '2022-09-17 03:16:26'),
(5, 'USUARIOS', 'users.destroy', 'ELIMINAR USUARIOS', '2022-09-17 03:16:26', '2022-09-17 03:16:26'),
(6, 'TARIFAS', 'tarifas.index', 'VER LA LISTA DE TARIFAS', '2022-09-17 03:16:26', '2022-09-17 03:16:26'),
(7, 'TARIFAS', 'tarifas.create', 'CREAR TARIFAS', '2022-09-17 03:16:26', '2022-09-17 03:16:26'),
(8, 'TARIFAS', 'tarifas.edit', 'EDITAR TARIFAS', '2022-09-17 03:16:26', '2022-09-17 03:16:26'),
(9, 'TARIFAS', 'tarifas.destroy', 'ELIMINAR TARIFAS', '2022-09-17 03:16:26', '2022-09-17 03:16:26'),
(10, 'PROPIETARIOS', 'propietarios.index', 'VER LA LISTA DE PROPIETARIOS', '2022-09-17 03:16:26', '2022-09-17 03:16:26'),
(11, 'PROPIETARIOS', 'propietarios.create', 'CREAR PROPIETARIOS', '2022-09-17 03:16:26', '2022-09-17 03:16:26'),
(12, 'PROPIETARIOS', 'propietarios.edit', 'EDITAR PROPIETARIOS', '2022-09-17 03:16:26', '2022-09-17 03:16:26'),
(13, 'PROPIETARIOS', 'propietarios.destroy', 'ELIMINAR PROPIETARIOS', '2022-09-17 03:16:26', '2022-09-17 03:16:26'),
(14, 'VEHICULOS', 'vehiculos.index', 'VER LA LISTA DE VEHICULOS', '2022-09-17 03:16:26', '2022-09-17 03:16:26'),
(15, 'VEHICULOS', 'vehiculos.create', 'CREAR VEHICULOS', '2022-09-17 03:16:26', '2022-09-17 03:16:26'),
(16, 'VEHICULOS', 'vehiculos.edit', 'EDITAR VEHICULOS', '2022-09-17 03:16:26', '2022-09-17 03:16:26'),
(17, 'VEHICULOS', 'vehiculos.destroy', 'ELIMINAR VEHICULOS', '2022-09-17 03:16:26', '2022-09-17 03:16:26'),
(18, 'TIPO DE VEHICULOS', 'tipos.index', 'VER LA LISTA DE TIPO DE VEHICULOS', '2022-09-17 03:16:26', '2022-09-17 03:16:26'),
(19, 'TIPO DE VEHICULOS', 'tipos.create', 'CREAR TIPO DE VEHICULOS', '2022-09-17 03:16:26', '2022-09-17 03:16:26'),
(20, 'TIPO DE VEHICULOS', 'tipos.edit', 'EDITAR TIPO DE VEHICULOS', '2022-09-17 03:16:26', '2022-09-17 03:16:26'),
(21, 'TIPO DE VEHICULOS', 'tipos.destroy', 'ELIMINAR TIPO DE VEHICULOS', '2022-09-17 03:16:26', '2022-09-17 03:16:26'),
(22, 'SECCIONES', 'secciones.index', 'VER LA LISTA DE SECCIONES', '2022-09-17 03:16:26', '2022-09-17 03:16:26'),
(23, 'SECCIONES', 'secciones.create', 'CREAR SECCIONES - UBICACIONES', '2022-09-17 03:16:26', '2022-09-17 03:16:26'),
(24, 'SECCIONES', 'secciones.edit', 'EDITAR SECCIONES - UBICACIONES', '2022-09-17 03:16:26', '2022-09-17 03:16:26'),
(25, 'SECCIONES', 'secciones.destroy', 'ELIMINAR SECCIONES - UBICACIONES', '2022-09-17 03:16:26', '2022-09-17 03:16:26'),
(26, 'COBROS', 'cobros.index', 'VER LA LISTA DE COBROS', '2022-09-17 03:16:26', '2022-09-17 03:16:26'),
(27, 'COBROS', 'cobros.create', 'REGISTRAR COBROS', '2022-09-17 03:16:26', '2022-09-17 03:16:26'),
(29, 'COBROS', 'cobros.destroy', 'ELIMINAR COBROS', '2022-09-17 03:16:26', '2022-09-17 03:16:26'),
(30, 'INGRESOS Y SALIDAS', 'ingresos_salidas.index', 'VER LA LISTA DE INGREOS Y SALIDAS', '2022-09-17 03:16:26', '2022-09-17 03:16:26'),
(31, 'INGRESOS Y SALIDAS', 'ingresos_salidas.create', 'REGISTRAR INGREOS Y SALIDAS', '2022-09-17 03:16:26', '2022-09-17 03:16:26'),
(34, 'REPORTES', 'reportes.index', 'VER Y GENERAR REPORTES', '2022-09-17 03:16:26', '2022-09-17 03:16:26'),
(35, 'EMPRESA', 'empresa.index', 'VER INFORMACIÓN DE LA EMPRESA', '2022-09-17 03:16:26', '2022-09-17 03:16:26'),
(36, 'EMPRESA', 'empresa.edit', 'EDITAR INFORMACIÓN DE LA EMPRESA', '2022-09-17 03:16:26', '2022-09-17 03:16:26'),
(37, 'USUARIOS PERMISOS', 'user_permisos.index', 'VER LA LISTA DE PERMISOS DE UN USUARIO', '2022-09-17 03:16:26', '2022-09-17 03:16:26'),
(38, 'USUARIOS PERMISOS', 'user_permisos.edit', 'MODIFICAR LOS PERMISOS DE USUARIOS', '2022-09-17 03:16:26', '2022-09-17 03:16:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propietarios`
--

CREATE TABLE `propietarios` (
  `id` bigint UNSIGNED NOT NULL,
  `nom` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `apep` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `apem` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ci` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ci_exp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dir` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fono` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cel` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `correo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_reg` date NOT NULL,
  `status` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `propietarios`
--

INSERT INTO `propietarios` (`id`, `nom`, `apep`, `apem`, `ci`, `ci_exp`, `dir`, `fono`, `cel`, `correo`, `foto`, `fecha_reg`, `status`, `created_at`, `updated_at`) VALUES
(1, 'PEDRO', 'GONZALES', 'MAMANI', '234234234', 'LP', 'LOS OLIVOS #12312', '22222', '78787878', 'victorgonzalo.as@gmail.com', 'GONZALESPEDRO1791815512.jpg', '2026-10-12', 1, '2026-10-12 14:31:52', '2026-10-14 20:04:47'),
(2, 'JUAN', 'PERES', 'MAMANI', '324234234', 'LP', 'LOS OLIVOS #12312', '', '', 'victorgonzalo.as@gmail.com', 'user_default.png', '2026-10-14', 1, '2026-10-14 20:58:33', '2026-10-14 20:58:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salidas`
--

CREATE TABLE `salidas` (
  `id` bigint UNSIGNED NOT NULL,
  `salida_id` int UNSIGNED NOT NULL,
  `cobrado` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `salidas`
--

INSERT INTO `salidas` (`id`, `salida_id`, `cobrado`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '2026-10-13 14:42:16', '2026-10-13 15:23:01'),
(2, 4, 1, '2026-10-13 14:45:10', '2026-10-13 15:23:08'),
(3, 6, 1, '2026-10-13 15:13:46', '2026-10-13 15:23:15'),
(4, 8, 1, '2026-10-13 15:14:47', '2026-10-13 15:23:20'),
(5, 10, 1, '2026-10-13 15:17:23', '2026-10-13 15:23:24'),
(6, 12, 1, '2026-10-13 15:21:11', '2026-10-13 15:23:32'),
(7, 14, 1, '2026-10-13 15:24:20', '2026-10-13 15:24:33'),
(8, 18, 1, '2026-10-14 20:08:23', '2026-10-14 20:47:03'),
(9, 20, 1, '2026-10-14 20:13:49', '2026-10-14 20:48:54'),
(10, 22, 1, '2026-10-14 20:35:23', '2026-10-14 20:53:28'),
(11, 24, 1, '2026-10-14 20:39:55', '2026-10-14 20:54:15'),
(12, 26, 1, '2026-10-14 21:11:19', '2026-10-14 21:11:43'),
(13, 28, 1, '2026-10-14 21:15:13', '2026-10-14 21:20:43'),
(14, 34, 1, '2026-10-14 21:24:54', '2026-10-14 21:25:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarifas`
--

CREATE TABLE `tarifas` (
  `id` bigint UNSIGNED NOT NULL,
  `nom` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `horas` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio` decimal(24,2) NOT NULL,
  `fecha_reg` date NOT NULL,
  `descripcion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tarifas`
--

INSERT INTO `tarifas` (`id`, `nom`, `horas`, `precio`, `fecha_reg`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'TARIFA 1', '1', 40.00, '2026-10-12', 'NUEVA DESC TARIFA 1', '2026-10-12 14:45:42', '2026-10-12 14:45:49'),
(2, 'MENSUAL', '672', 3300.00, '2026-10-14', '', '2026-10-14 20:58:12', '2026-10-14 20:58:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_vehiculos`
--

CREATE TABLE `tipo_vehiculos` (
  `id` bigint UNSIGNED NOT NULL,
  `nom` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tipo_vehiculos`
--

INSERT INTO `tipo_vehiculos` (`id`, `nom`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'TIPO 1', 'NUEVO TIPO 1', '2026-10-12 14:44:13', '2026-10-12 14:44:32'),
(2, 'TIPO 2', '', '2026-10-12 14:44:59', '2026-10-12 14:44:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubicacions`
--

CREATE TABLE `ubicacions` (
  `id` bigint UNSIGNED NOT NULL,
  `nom` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `capacidad` int NOT NULL,
  `descripcion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `ubicacions`
--

INSERT INTO `ubicacions` (`id`, `nom`, `capacidad`, `descripcion`, `status`, `created_at`, `updated_at`) VALUES
(1, 'SECCION 1', 30, '', 1, '2026-10-12 15:10:24', '2026-10-12 15:10:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` enum('ADMINISTRADOR','AUXILIAR','CONTROL') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `tipo`, `foto`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$12$RomXeiiYajoMy0i6aKwI6O98RZVkmChVKZFm8D73mNXdegRFjsdqC', 'ADMINISTRADOR', 'user_default.png', 1, '2022-09-16 23:16:26', '2026-10-11 15:30:28'),
(2, 'JPERES', '$2y$12$.kzvXCQ2jZmuNe6mw8lL7ux81A32FsPoT0lXUKUD8f1W.emsec.H6', 'AUXILIAR', 'user_default.png', 1, '2026-10-12 14:14:05', '2026-10-12 14:20:11'),
(3, 'CONTROL1', '$2y$12$d6lvSSI6R4IDX4kj76cwVuH0pjqoqA5pY2oY2tszO0FqKUC.0mlo.', 'CONTROL', 'user_default.png', 1, '2026-10-13 15:09:28', '2026-10-13 15:09:28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_permisos`
--

CREATE TABLE `user_permisos` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `permiso_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `user_permisos`
--

INSERT INTO `user_permisos` (`id`, `user_id`, `permiso_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2022-09-16 23:16:26', '2022-09-16 23:16:26'),
(2, 2, 10, '2026-10-12 14:14:05', '2026-10-12 14:14:05'),
(3, 2, 11, '2026-10-12 14:14:05', '2026-10-12 14:14:05'),
(4, 2, 12, '2026-10-12 14:14:05', '2026-10-12 14:14:05'),
(5, 2, 13, '2026-10-12 14:14:05', '2026-10-12 14:14:05'),
(6, 2, 14, '2026-10-12 14:14:05', '2026-10-12 14:14:05'),
(7, 2, 15, '2026-10-12 14:14:05', '2026-10-12 14:14:05'),
(8, 2, 16, '2026-10-12 14:14:05', '2026-10-12 14:14:05'),
(9, 2, 17, '2026-10-12 14:14:05', '2026-10-12 14:14:05'),
(10, 2, 18, '2026-10-12 14:14:05', '2026-10-12 14:14:05'),
(11, 2, 19, '2026-10-12 14:14:05', '2026-10-12 14:14:05'),
(12, 2, 20, '2026-10-12 14:14:05', '2026-10-12 14:14:05'),
(13, 2, 21, '2026-10-12 14:14:05', '2026-10-12 14:14:05'),
(14, 2, 22, '2026-10-12 14:14:05', '2026-10-12 14:14:05'),
(15, 2, 23, '2026-10-12 14:14:05', '2026-10-12 14:14:05'),
(16, 2, 24, '2026-10-12 14:14:05', '2026-10-12 14:14:05'),
(17, 2, 25, '2026-10-12 14:14:05', '2026-10-12 14:14:05'),
(18, 2, 26, '2026-10-12 14:14:05', '2026-10-12 14:14:05'),
(19, 2, 29, '2026-10-12 14:14:05', '2026-10-12 14:14:05'),
(20, 2, 30, '2026-10-12 14:14:05', '2026-10-12 14:14:05'),
(21, 2, 31, '2026-10-12 14:14:05', '2026-10-12 14:14:05'),
(22, 2, 34, '2026-10-12 14:14:05', '2026-10-12 14:14:05'),
(23, 2, 27, '2026-10-13 15:22:32', '2026-10-13 15:22:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE `vehiculos` (
  `id` bigint UNSIGNED NOT NULL,
  `placa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marca` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `modelo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nom` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_id` bigint UNSIGNED NOT NULL,
  `propietario_id` bigint UNSIGNED NOT NULL,
  `tarifa_id` bigint UNSIGNED NOT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `rfid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_reg` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `vehiculos`
--

INSERT INTO `vehiculos` (`id`, `placa`, `marca`, `modelo`, `nom`, `tipo_id`, `propietario_id`, `tarifa_id`, `foto`, `rfid`, `fecha_reg`, `status`, `created_at`, `updated_at`) VALUES
(1, '6576-WEQ', 'TOYOTA', 'MODELO', 'VEHICULO 1', 2, 1, 1, 'VEHICULO_16576-WEQ1791816615.webp', '123', '2026-10-12', 1, '2026-10-12 14:50:15', '2026-10-12 14:50:36'),
(2, '', '', '', 'VEHICULO 2', 2, 1, 1, 'VEHICULO_21791817000.jpg', '1234', '2026-10-12', 1, '2026-10-12 14:56:40', '2026-10-12 14:56:40'),
(3, '4545-ETT', 'TOYOTA', 'MODELO', 'VEHICULO 3', 2, 2, 2, 'vehiculo_default.jpg', '333', '2026-10-14', 1, '2026-10-14 20:59:05', '2026-10-14 20:59:05'),
(4, '4545-UUU', '', '', 'VEHICULO 4', 2, 2, 2, 'vehiculo_default.jpg', '456', '2026-10-14', 1, '2026-10-14 21:23:35', '2026-10-14 21:23:35');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agente_notificacions`
--
ALTER TABLE `agente_notificacions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `agente_notificacions_clave_unique` (`clave`);

--
-- Indices de la tabla `cobros`
--
ALTER TABLE `cobros`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cobros_salida_id_foreign` (`salida_id`),
  ADD KEY `cobros_vehiculo_id_foreign` (`vehiculo_id`),
  ADD KEY `cobros_tarifa_id_foreign` (`tarifa_id`);

--
-- Indices de la tabla `datos_usuarios`
--
ALTER TABLE `datos_usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `datos_usuarios_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `facturas_cobro_id_foreign` (`cobro_id`);

--
-- Indices de la tabla `ingreso_salidas`
--
ALTER TABLE `ingreso_salidas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `log_seguimientos`
--
ALTER TABLE `log_seguimientos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mapeos`
--
ALTER TABLE `mapeos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mapeos_ubicacion_id_foreign` (`ubicacion_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `notificacion_usuarios`
--
ALTER TABLE `notificacion_usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notificacion_usuarios_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `pendientes`
--
ALTER TABLE `pendientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `propietarios`
--
ALTER TABLE `propietarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `salidas`
--
ALTER TABLE `salidas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tarifas`
--
ALTER TABLE `tarifas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_vehiculos`
--
ALTER TABLE `tipo_vehiculos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ubicacions`
--
ALTER TABLE `ubicacions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user_permisos`
--
ALTER TABLE `user_permisos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `vehiculos_rfid_unique` (`rfid`),
  ADD KEY `vehiculos_tipo_id_foreign` (`tipo_id`),
  ADD KEY `vehiculos_propietario_id_foreign` (`propietario_id`),
  ADD KEY `vehiculos_tarifa_id_foreign` (`tarifa_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `agente_notificacions`
--
ALTER TABLE `agente_notificacions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `cobros`
--
ALTER TABLE `cobros`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `datos_usuarios`
--
ALTER TABLE `datos_usuarios`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `facturas`
--
ALTER TABLE `facturas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `ingreso_salidas`
--
ALTER TABLE `ingreso_salidas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `log_seguimientos`
--
ALTER TABLE `log_seguimientos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `mapeos`
--
ALTER TABLE `mapeos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `notificacion_usuarios`
--
ALTER TABLE `notificacion_usuarios`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT de la tabla `pendientes`
--
ALTER TABLE `pendientes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `propietarios`
--
ALTER TABLE `propietarios`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `salidas`
--
ALTER TABLE `salidas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `tarifas`
--
ALTER TABLE `tarifas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipo_vehiculos`
--
ALTER TABLE `tipo_vehiculos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `ubicacions`
--
ALTER TABLE `ubicacions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `user_permisos`
--
ALTER TABLE `user_permisos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cobros`
--
ALTER TABLE `cobros`
  ADD CONSTRAINT `cobros_salida_id_foreign` FOREIGN KEY (`salida_id`) REFERENCES `ingreso_salidas` (`id`),
  ADD CONSTRAINT `cobros_tarifa_id_foreign` FOREIGN KEY (`tarifa_id`) REFERENCES `tarifas` (`id`),
  ADD CONSTRAINT `cobros_vehiculo_id_foreign` FOREIGN KEY (`vehiculo_id`) REFERENCES `vehiculos` (`id`);

--
-- Filtros para la tabla `datos_usuarios`
--
ALTER TABLE `datos_usuarios`
  ADD CONSTRAINT `datos_usuarios_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD CONSTRAINT `facturas_cobro_id_foreign` FOREIGN KEY (`cobro_id`) REFERENCES `cobros` (`id`);

--
-- Filtros para la tabla `mapeos`
--
ALTER TABLE `mapeos`
  ADD CONSTRAINT `mapeos_ubicacion_id_foreign` FOREIGN KEY (`ubicacion_id`) REFERENCES `ubicacions` (`id`);

--
-- Filtros para la tabla `notificacion_usuarios`
--
ALTER TABLE `notificacion_usuarios`
  ADD CONSTRAINT `notificacion_usuarios_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD CONSTRAINT `vehiculos_propietario_id_foreign` FOREIGN KEY (`propietario_id`) REFERENCES `propietarios` (`id`),
  ADD CONSTRAINT `vehiculos_tarifa_id_foreign` FOREIGN KEY (`tarifa_id`) REFERENCES `tarifas` (`id`),
  ADD CONSTRAINT `vehiculos_tipo_id_foreign` FOREIGN KEY (`tipo_id`) REFERENCES `tipo_vehiculos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
