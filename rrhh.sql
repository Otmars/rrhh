-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-12-2021 a las 08:52:30
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `rrhh`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `ID_Cursos` int(11) NOT NULL,
  `ID_user` int(11) DEFAULT NULL,
  `Titulo` varchar(30) DEFAULT NULL,
  `Descripcion` varchar(60) DEFAULT NULL,
  `Fecha_Inicio` date DEFAULT NULL,
  `Fecha_Final` date DEFAULT NULL,
  `Costo` varchar(30) DEFAULT NULL,
  `Imagen` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`ID_Cursos`, `ID_user`, `Titulo`, `Descripcion`, `Fecha_Inicio`, `Fecha_Final`, `Costo`, `Imagen`) VALUES
(1, NULL, 'whatsapp', '2436587iuyhtrg', '2021-06-30', '2021-07-04', '234', 'WhatsApp Image 2021-06-28 at 11.14.02.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos`
--

CREATE TABLE `documentos` (
  `id_doc` int(11) NOT NULL,
  `ID_user` int(11) DEFAULT NULL,
  `documento` varchar(50) DEFAULT NULL,
  `tema` varchar(50) DEFAULT NULL,
  `descargar` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `ID_Eventos` int(11) NOT NULL,
  `ID_user` int(11) DEFAULT NULL,
  `Titulo` varchar(20) DEFAULT NULL,
  `Descripcion` varchar(60) DEFAULT NULL,
  `Imagen` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`ID_Eventos`, `ID_user`, `Titulo`, `Descripcion`, `Imagen`) VALUES
(1, NULL, 'D navegacion', 'asdsvdfasdfsvfafs', 'fono.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `ID` int(11) NOT NULL,
  `USUARIO` varchar(50) DEFAULT NULL,
  `PASSWORD` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`ID`, `USUARIO`, `PASSWORD`) VALUES
(1, 'AdministradorRRHH', 'administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_cursos`
--

CREATE TABLE `registro_cursos` (
  `ID_Participante` int(11) NOT NULL,
  `ID_Cursos` int(11) DEFAULT NULL,
  `ID_user` int(11) DEFAULT NULL,
  `Nombre_Part` varchar(30) DEFAULT NULL,
  `Carrera` varchar(40) DEFAULT NULL,
  `Correo` varchar(60) DEFAULT NULL,
  `Telef_cel` int(11) DEFAULT NULL,
  `Curso` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registro_cursos`
--

INSERT INTO `registro_cursos` (`ID_Participante`, `ID_Cursos`, `ID_user`, `Nombre_Part`, `Carrera`, `Correo`, `Telef_cel`, `Curso`) VALUES
(1, NULL, NULL, 'ronaldo', 'ing sistremas', 'ejemplo@gmail.com', 12345, 'XD');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `validar_cert`
--

CREATE TABLE `validar_cert` (
  `ID_Validar` int(90) UNSIGNED NOT NULL,
  `ID_user` int(11) DEFAULT NULL,
  `Nombres` varchar(50) DEFAULT NULL,
  `Apellidos` varchar(50) DEFAULT NULL,
  `cod_qr` varchar(50) DEFAULT NULL,
  `CI` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `org` varchar(50) DEFAULT NULL,
  `certde` varchar(50) DEFAULT NULL,
  `Doc` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `validar_cert`
--

INSERT INTO `validar_cert` (`ID_Validar`, `ID_user`, `Nombres`, `Apellidos`, `cod_qr`, `CI`, `fecha`, `org`, `certde`, `Doc`) VALUES
(1, NULL, 'Ronaldo', 'Callsaya Abalos', 'qwer-qwer-qwer', 10080423, '2021-12-08', 'FUL', 'participacion', 'FORM.RRHH.RC-IVA.001.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videos`
--

CREATE TABLE `videos` (
  `id_video` int(11) NOT NULL,
  `ID_user` int(11) DEFAULT NULL,
  `video` varchar(50) DEFAULT NULL,
  `titulo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`ID_Cursos`);

--
-- Indices de la tabla `documentos`
--
ALTER TABLE `documentos`
  ADD PRIMARY KEY (`id_doc`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`ID_Eventos`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `registro_cursos`
--
ALTER TABLE `registro_cursos`
  ADD PRIMARY KEY (`ID_Participante`);

--
-- Indices de la tabla `validar_cert`
--
ALTER TABLE `validar_cert`
  ADD PRIMARY KEY (`ID_Validar`);

--
-- Indices de la tabla `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id_video`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `ID_Cursos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `documentos`
--
ALTER TABLE `documentos`
  MODIFY `id_doc` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `ID_Eventos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `registro_cursos`
--
ALTER TABLE `registro_cursos`
  MODIFY `ID_Participante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `validar_cert`
--
ALTER TABLE `validar_cert`
  MODIFY `ID_Validar` int(90) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
