-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 12-10-2026 a las 15:33:19
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
(25, 1, 'CREACIÓN', 'EL USUARIO admin REGISTRO UN INGRESO/SALIDA', 'INGRESOS Y SALIDAS', '2026-10-12', '11:26:50', '2026-10-12 15:26:50', '2026-10-12 15:26:50');

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
(1, 'A', 1, 0, 0, '2026-10-12 15:10:24', '2026-10-12 15:26:34'),
(2, 'B', 1, 0, 0, '2026-10-12 15:10:24', '2026-10-12 15:10:24'),
(3, 'C', 1, 0, 0, '2026-10-12 15:10:24', '2026-10-12 15:10:24'),
(4, 'D', 1, 0, 0, '2026-10-12 15:10:24', '2026-10-12 15:10:24'),
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
(18, '2026_10_08_171918_create_user_permisos_table', 1);

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
(1, 'PEDRO', 'GONZALES', 'MAMANI', '234234234', 'LP', 'LOS OLIVOS #12312', '22222', '78787878', 'PEDROG@GMAIL.COM', 'GONZALESPEDRO1791815512.jpg', '2026-10-12', 1, '2026-10-12 14:31:52', '2026-10-12 14:34:44');

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
(1, 'TARIFA 1', '1', 40.00, '2026-10-12', 'NUEVA DESC TARIFA 1', '2026-10-12 14:45:42', '2026-10-12 14:45:49');

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
  `tipo` enum('ADMINISTRADOR','AUXILIAR') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
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
(2, 'JPERES', '$2y$12$.kzvXCQ2jZmuNe6mw8lL7ux81A32FsPoT0lXUKUD8f1W.emsec.H6', 'AUXILIAR', 'user_default.png', 1, '2026-10-12 14:14:05', '2026-10-12 14:20:11');

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
(22, 2, 34, '2026-10-12 14:14:05', '2026-10-12 14:14:05');

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
(2, '', '', '', 'VEHICULO 2', 2, 1, 1, 'VEHICULO_21791817000.jpg', '1234', '2026-10-12', 1, '2026-10-12 14:56:40', '2026-10-12 14:56:40');

--
-- Índices para tablas volcadas
--

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
-- AUTO_INCREMENT de la tabla `cobros`
--
ALTER TABLE `cobros`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ingreso_salidas`
--
ALTER TABLE `ingreso_salidas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `log_seguimientos`
--
ALTER TABLE `log_seguimientos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `mapeos`
--
ALTER TABLE `mapeos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `notificacion_usuarios`
--
ALTER TABLE `notificacion_usuarios`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pendientes`
--
ALTER TABLE `pendientes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `propietarios`
--
ALTER TABLE `propietarios`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `salidas`
--
ALTER TABLE `salidas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tarifas`
--
ALTER TABLE `tarifas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `user_permisos`
--
ALTER TABLE `user_permisos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
