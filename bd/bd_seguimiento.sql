-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-01-2019 a las 04:12:36
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_seguimiento`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bolsat`
--

CREATE TABLE `bolsat` (
  `id_bolsa` int(11) NOT NULL,
  `cargo` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `vacantes` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `salario` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_registro` date DEFAULT NULL,
  `fecha_modificacion` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `bolsat`
--

INSERT INTO `bolsat` (`id_bolsa`, `cargo`, `id_empresa`, `vacantes`, `salario`, `fecha_registro`, `fecha_modificacion`) VALUES
(1, 'PHP Developer', 1, '2', '2000.00', '2018-07-13', '2019-01-11'),
(2, 'DESARROLLADOR BACKEND', 1, '1', '3000', '2018-07-16', NULL),
(3, 'ANALISTA DE BASE DE DATOS SQL SERVER', 1, '2', '2500', '2018-08-16', '2018-07-21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datosacadem`
--

CREATE TABLE `datosacadem` (
  `idda` int(11) NOT NULL,
  `id_egresado` int(11) NOT NULL,
  `tipoform` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `institucion` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `fechainicio` date NOT NULL,
  `fechafin` date NOT NULL,
  `mencion` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `pais` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `datosacadem`
--

INSERT INTO `datosacadem` (`idda`, `id_egresado`, `tipoform`, `institucion`, `fechainicio`, `fechafin`, `mencion`, `pais`) VALUES
(1, 3, 'MAESTRIA', 'Universidad Ricardo Palma', '2004-09-16', '2006-10-21', 'Ciencia de Datos', 'Peru'),
(2, 4, 'SEGUNDA ESPECIALIDAD PROFESIONAL', 'CIBERTEC', '2017-04-03', '2018-04-06', 'DESARROLLADOR FRONTEND', 'PERU'),
(3, 27, 'MAESTRIA', 'Universidad Ricardo Palma', '2017-09-20', '2017-09-20', 'Ciencia de Datos', 'Peru'),
(4, 28, 'MAESTRIA', 'Universidad Nacional de IngenierÃ­a', '2017-11-23', '0000-00-00', 'NULL', 'NULL'),
(5, 29, 'MAESTRIA', 'Universidad Nacional Mayor de San Marcos', '2017-09-24', '0000-00-00', 'MaestrÃ­a en Seguridad InformÃ¡tica', 'Peru'),
(6, 10, 'DOCTORADO', 'Universidad Nacional Mayor de San Marcos', '2017-07-21', '0000-00-00', 'TecnologÃ­as de la InformaciÃ³n', 'PerÃº'),
(7, 11, 'MAESTRIA', 'Universidad Ricardo Palma', '2018-08-09', '0000-00-00', 'MaestrÃ­a en TecnologÃ­as de la InformaciÃ³n', 'PerÃº'),
(8, 12, 'DOCTORADO', 'Universidad Nacional Mayor de San Marcos', '2017-07-21', '0000-00-00', 'IngenierÃ­a InformÃ¡tica', 'PerÃº'),
(9, 13, 'MAESTRIA', 'Universidad Ricardo Palma', '2018-08-09', '2017-04-12', 'MaestrÃ­a en Seguridad InformÃ¡tica', 'PerÃº'),
(10, 30, 'MAESTRIA', 'Universidad Nacional de IngenierÃ­a', '2017-05-03', '0000-00-00', 'Maestria en IngenierÃ­a Industrial', 'PerÃº'),
(12, 32, 'NULL', 'NULL', '0000-00-00', '0000-00-00', 'NULL', 'NULL');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datosacadem_univ`
--

CREATE TABLE `datosacadem_univ` (
  `iddau` int(11) NOT NULL,
  `id_egresado` int(11) NOT NULL,
  `anio_ingreso` year(4) DEFAULT NULL,
  `anio_egreso` year(4) DEFAULT NULL,
  `segunda_carrera` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_segunda_carrera` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `univ_segunda_carrera` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `anio_ingreso_sc` year(4) DEFAULT NULL,
  `anio_egreso_sc` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `datosacadem_univ`
--

INSERT INTO `datosacadem_univ` (`iddau`, `id_egresado`, `anio_ingreso`, `anio_egreso`, `segunda_carrera`, `nombre_segunda_carrera`, `univ_segunda_carrera`, `anio_ingreso_sc`, `anio_egreso_sc`) VALUES
(1, 3, 2005, 2010, 'NO', '', '', 0000, 0000),
(2, 4, 2005, 2010, 'SI', 'IngenierÃ­a Civil', 'Universidad Nacional de IngenierÃ­a', 2012, 2017),
(3, 27, 2004, 2008, 'SI', 'INGENIERIA DE SOFTWA', 'UNIVERSIDAD NACIONAL MAYOR DE SAN MARCOS', 2009, 2013),
(4, 28, 2006, 2010, 'NO', '', '', 0000, 0000),
(5, 29, 2006, 2010, 'NO', '', '', 0000, 0000),
(6, 10, 2005, 2010, 'NO', '', '', 0000, 0000),
(7, 11, 2005, 2010, 'NO', '', '', 0000, 0000),
(8, 12, 0000, 2010, 'NO', '', '', 0000, 0000),
(9, 13, 0000, 2010, 'NO', '', '', 0000, 0000),
(10, 30, 2005, 2010, 'SI', 'IngenierÃ­a Industrial', 'Universidad Nacional Mayor de San Marcos', 2011, 2015),
(12, 32, 2001, 2006, 'SI', 'NULL', 'NULL', 0000, 0000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datoslaborales`
--

CREATE TABLE `datoslaborales` (
  `iddl` int(11) NOT NULL,
  `id_egresado` int(11) NOT NULL,
  `condicion_w` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `empresa_w` varchar(254) COLLATE utf8_spanish_ci NOT NULL,
  `sector_w` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `area_w` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `cargo_w` varchar(254) COLLATE utf8_spanish_ci NOT NULL,
  `sueldo_w` float NOT NULL,
  `direccion_w` varchar(254) COLLATE utf8_spanish_ci NOT NULL,
  `region_w` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `provincia_w` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `distrito_w` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `datoslaborales`
--

INSERT INTO `datoslaborales` (`iddl`, `id_egresado`, `condicion_w`, `empresa_w`, `sector_w`, `area_w`, `cargo_w`, `sueldo_w`, `direccion_w`, `region_w`, `provincia_w`, `distrito_w`) VALUES
(1, 3, 'NOMBRADO', 'UNIVERSIDAD NACIONAL DANIEL ALCIDES CARRION', 'PRIVADO', 'Redes', 'Analista en redes', 2500, 'Av. Proceres 567', 'PASCO', 'PASCO', 'YANACANCHA'),
(2, 4, 'CONTRATADO', 'MINERA CERRO S.A.C.', 'PRIVADO', 'INTELIGENCIA DE NEGOCIOS', 'Jefe de Proyectos', 3000, 'Paragsha ', 'PASCO', 'PASCO', 'SIMON BOLIVAR'),
(3, 27, 'NOMBRADO', 'BBVA', 'PRIVADO', 'InformÃ¡tica', 'Analista de Datos', 3500, 'Av. JosÃ© Carlos MariÃ¡tegui 328', 'Lima', 'Lima', 'San Isidro'),
(4, 28, 'CONTRATADO', 'BBVA', 'PRIVADO', 'TI', 'Data Science', 5000, 'Av. JosÃ© Carlos MariÃ¡tegui 328', 'Lima', 'Lima', 'Pueblo Libre'),
(5, 29, 'NOMBRADO', 'Banco de la NaciÃ³n', 'PUBLICO', 'InformÃ¡tica', 'Gerente de TI', 4000, 'Av. JosÃ© Carlos MariÃ¡tegui 328', 'Pasco', 'Pasco', 'Yanacancha'),
(6, 30, 'NOMBRADO', 'SENATI', 'PRIVADO', 'Docencia', 'DOCENTE', 2500, 'Av. Tupac Amaru 1524', 'Lima', 'Lima', 'Independencia'),
(8, 32, 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 0, 'NULL', 'NULL', 'NULL', 'NULL');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `egresado`
--

CREATE TABLE `egresado` (
  `id` int(11) NOT NULL,
  `codigo_matricula` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `clave` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `dni` int(8) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `apellido_paterno` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellido_materno` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nombres` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `sexo` char(1) COLLATE utf8_spanish_ci DEFAULT NULL,
  `phone_fijo` int(7) DEFAULT NULL,
  `phone_celular` int(9) DEFAULT NULL,
  `email` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ciudad` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `region` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `provincia` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `distrito` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `direccion` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `facebook` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `twiter` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `linkedln` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `egresado`
--

INSERT INTO `egresado` (`id`, `codigo_matricula`, `clave`, `dni`, `fecha_nacimiento`, `apellido_paterno`, `apellido_materno`, `nombres`, `sexo`, `phone_fijo`, `phone_celular`, `email`, `ciudad`, `region`, `provincia`, `distrito`, `direccion`, `facebook`, `twiter`, `linkedln`) VALUES
(3, '0011303025', '0011303025', 80214065, '2000-10-01', 'LOPEZ', 'VILLENA', 'JHONN BEKER', 'M', 425262, 975490485, 'lovijb@hotmail.com', 'Cerro de Pasco', 'LIMA', 'LIMA', 'ATE', 'FUNDO LA ESTRELLA M.41 DEP G 5', 'xxxx', 'xxxx', 'xxxx'),
(4, '0012343043', '0012343043', 41205372, '1989-10-01', 'CARHUAZ', 'GUILLERMO', 'RUDY', 'M', 0, 912345698, 'RCARHUASG@HOTMAIL.COM', 'NULL', 'NULL', 'NULL', 'NULL', 'Jr. Tupac Amaru 356', 'NULL', 'NULL', 'NULL'),
(5, '0014503048', '0014503048', 41344848, NULL, 'GOMEZ', 'AMPUDIA', 'NORMA LUZ', 'F', NULL, 944689064, 'norma505@hotmail.com', '', 'pasco', 'pasco', 'simon bolivar', 'ProlongaciÃ³n 28 de julio NÂº 49', '', '', ''),
(6, '0021303083', '0021303083', 41708815, NULL, 'ROBLES', 'ALMERCO', 'YENA MARITZA', 'F', NULL, 998878438, 'yen mar08@hotmail.com', '', 'PASCO', 'PASCO', 'YANACANCHA', 'MARTIRES DE RANCAS S/N - GERAR', '', '', ''),
(7, '0021303234', '0021303234', 42330280, NULL, 'PALMA', 'ROMERO', 'MARCO ANTONIO', 'M', NULL, 2147483647, 'lmarcopalmaromero@gmail.com', '', 'PASCO', 'PASCO', 'CHAUPIMARCA', 'AV. LA PLATA MZ C LT. 9', '', '', ''),
(8, '0022203215', '0022203215', 4068217, NULL, 'VALER', 'ESPINOZA', 'DINA MARIA', 'F', NULL, 938230194, 'dvejr@hotmail.com', '', 'pasco', 'pasco', 'chaupimarca', 'Barrio SAanta Rosa S/n', '', '', ''),
(9, '0022313084', '0022313084', 41253625, NULL, 'LOPEZ', 'AGUIRRE', 'LUZ AURORA', 'M', NULL, 995014175, 'PLO-600 @HOTMAIL COM.', '', 'PASCO', 'PASCO', 'YANACANCHA', 'Jr. ANTONIO MARTINEZ NÂº 208', '', '', ''),
(10, '0022333087', '0022333087', 40652842, '0000-00-00', 'ESTRELLA', 'CHACA', 'YUSSY ERIKA', 'F', 0, 952915718, 'XIAUYUM@HOTMAIL', '', 'JUNIN', 'JUNIN', 'CHILCA', 'AV. TUPAC AMARU N- 009 HUANCAY', '', '', ''),
(11, '0022363095', '0022363095', 10125195, '0000-00-00', 'SANCHEZ', 'ARCOS', 'JUAN DAVID', 'M', 0, 998803861, 'david.snb@hotmail.com', '', 'Pasco', 'PASCO', 'yanacancha', 'Jr. Columna Pasco 201 san juan', '', '', ''),
(12, '0024103101', '0024103101', 40786121, '0000-00-00', 'ATENCIO', 'MU?OZ', 'JUAN ALEJANDRO', 'M', 0, 980092405, 'jotomou14800@gmail.com', '', 'PASCO', 'PASCO', 'SIMON BOLIVAR', 'Jr.28 DE JULIO NÂº 240', '', '', ''),
(13, '0025303036', '0025303036', 42127500, '0000-00-00', 'ESPINOZA', 'ZEVALLOS', 'INDIRA GHANDI', 'F', 0, 987987123, 'igezon1@hotmail.com', '', 'PASCO', 'PASCO', 'VICCO', 'AV.CERRO DE PASCO 1398', '', '', ''),
(14, '0025403130', '0025403130', 40190942, NULL, 'COLINA', 'ANTAZU', 'GEORJET JESUS', 'M', NULL, 957473688, 'eltunchilocs@gmail.com', '', 'pasco', 'oxapampa', 'chontabamba', 'cc.nn.comunidad nativa shachop', '', '', ''),
(15, '0025503224', '0025503224', 41508101, NULL, 'ALVAREZ', 'JARA', 'IVAN CARLOS', 'M', NULL, 953565445, 'NEMESIS_JAS@HOTMAIL.COM', '', 'JUNIN', 'CHANCHAMAYO', 'LA MERCED', 'AVENIDA CARRETERA CENTRAL KM 0', '', '', ''),
(16, '0026103040', '0026103040', 4072212, NULL, 'RAMOS', 'MONTALVO', 'MIGUEL ANGEL', 'M', NULL, 963952731, 'marflys@hotmail.com', '', 'pasco', 'pasco', 'huariaca', 'Jr. carrion N? 332', '', '', ''),
(17, '0035603018', '0035603018', 41950464, NULL, 'RAMOS', 'LOPEZ', 'CESAR', 'M', NULL, 930605687, 'cesar-ramos-2003@hotmail.com', '', 'huancavelica', 'huancavelica', 'huancavelica', 'Pje.Larrauri 185 barrio yanana', '', '', ''),
(18, '0042203025', '0042203025', 42247065, NULL, 'COLQUI', 'PONCE', 'DEYSI DI GREGORY', 'F', NULL, 946036372, 'mydeysi@hotmail.com', '', 'PASCO', 'PASCO', 'CHAUPIMARCA', 'AV.MOGUEGUA No. 177', '', '', ''),
(19, '0043203066', '0043203066', 41577485, NULL, 'ROMERO', 'GONZALES', 'ROCIO MILAGROS', 'F', NULL, 997798730, '', '', 'junin', 'tarma', 'tarma', 'Jr. Vista Alegre 438', '', '', ''),
(20, '0051103074', '0051103074', 41590051, NULL, 'MORALES', 'POMA', 'RICARDO JESUS', 'M', NULL, 963982022, 'ricardomp30@hotmail.com', '', 'PASCO', 'PASCO', 'CHAUPIMARCA', 'JR. LEONCIO PRADO N? 188', '', '', ''),
(21, '0051203178', '0051203178', 41224734, NULL, 'CALZADA', 'MUÑOZ', 'GINA KELA', 'F', NULL, 920356361, '', '', 'pasco', 'pasco', 'yanacancha', '', '', '', ''),
(22, '0072913254', '0072913254', 4072309, NULL, 'TORRES', 'MINAYA', 'ESTHER', 'F', NULL, 0, 'esthertorresmu@hotmail.com', '', 'PASCO', 'DANIEL A. CARRION', 'YANAHUANCA', 'BARRIO FATIMA', '', '', ''),
(23, '0072913272', '0072913272', 4010082, NULL, 'BARRERA', 'CORDOVA', 'ELIAS DAVID', 'M', NULL, 945778655, 'dayvis_eduper@hotmail.com', '', 'PASCO', 'PASCO', 'YANACANCHA', 'Av. Daniel A. Carrion N? 404 S', '', '', ''),
(24, '0072913316', '0072913316', 45986754, NULL, 'TRAVEZA?O', 'VELASQUEZ', 'NILTON LUIS', 'M', NULL, 995199104, 'luis_20066@hotmail.com', '', 'PASCO', 'PASCO', 'YANACANCHA', 'JR. SAN MARTIN N? 606', '', '', ''),
(25, '0072913521', '0072913521', 20883193, NULL, 'VICENTE', 'MAXIMILIANO', 'ISAIAS EUGENIO', 'M', NULL, 964836538, 'isaias_evm@hotmail.com', '', 'JUNIN', 'JUNIN', 'ONDORES', 'Jr. CULTURAL S/N', '', '', ''),
(26, '0091103112', '0091103112', 40347605, NULL, 'CRISTOBAL', 'MINALAYA', 'JOHAN', 'M', NULL, 2147483647, 'crismiloh@hotmail.com', '', 'PASCO', 'PASCO', 'CHAUPIMARCA', 'JR.CHOPTOGOSHO S/N CHAUPIMARCA', '', '', ''),
(27, '1444402011', '1444402011', 45676251, '2016-01-16', 'RIVERA', 'ATENCIO', 'ELIANA', 'F', 425262, 975429272, 'yesel1601@hotmail.com', 'Cerro de Pasco', 'Pasco', 'Pasco', 'Chaupimarca', 'Jr. Huancavelica 183', 'NULL', 'xxxx', 'NULL'),
(28, '1212121212', '1212121212', 41414141, '1987-06-02', 'TORALVA', 'CORDOVA', 'MIKHAEL', 'M', 0, 991354331, 'miki_t0287@hotmail.com', 'Cerro de Pasco', 'Pasco', 'Pasco', 'Chaupimarca', 'Jr. Huancavelica 183', 'NULL', 'xxxx', 'xxxx'),
(29, '1010101010', '1010101010', 44444444, '1989-09-24', 'ASCANOA', 'SANCHEZ', 'GERARDO LUIS', 'M', 0, 912345698, 'gascanoa@gmail.com', 'Huancayo', 'Junin', 'Huancayo', 'El Tambo', 'Jr. Tumbes 219', 'NULL', 'NULL', 'NULL'),
(30, '1111111111', '1111111111', 43434343, '1988-04-03', 'LEON', 'HUAYANAY', 'LAURA SOCORRO', 'F', 0, 951951951, 'dsocorro@gmail.com', 'Cerro de Pasco', 'Pasco', 'Pasco', 'Yanacancha', 'Jr. Oxapampa 164', 'NULL', 'NULL', 'NULL'),
(32, '1616161616', '1616161616', 47474747, '2017-10-06', 'DE LA CRUZ', 'ROJAS', 'SUSANA', 'F', 0, 975429272, 'gascanoa@gmail.com', 'Cerro de Pasco', 'Pasco', 'Pasco', 'Chaupimarca', 'Jr. Huancavelica 183', 'NULL', 'NULL', 'NULL');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `id_empresa` int(11) NOT NULL,
  `nro_ruc` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `razon_social` varchar(254) COLLATE utf8_spanish_ci NOT NULL,
  `sector` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `pagina_web` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono_fijo` int(7) DEFAULT NULL,
  `telefono_celular` int(9) DEFAULT NULL,
  `fecha_registro` date DEFAULT NULL,
  `fecha_modificacion` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id_empresa`, `nro_ruc`, `razon_social`, `sector`, `pagina_web`, `telefono_fijo`, `telefono_celular`, `fecha_registro`, `fecha_modificacion`) VALUES
(1, '20193980644', 'DIRECCION REGIONAL DE SALUD PASCO', 'PUBLICO', 'http://diresapasco.gob.pe/pagina/convocatorias/', 422071, 956231254, '2018-07-20', NULL),
(2, '20151454788', 'TEKTON LABS', 'PRIVADO', 'https://www.tektonlabs.com/approach', 7456215, 954789546, '2018-07-21', NULL),
(4, '20222222222', 'SENATI', 'PRIVADO', 'senati.com.pe', 421248, 987987987, NULL, NULL),
(5, '20515826590', 'WISSEN GROUP', 'PRIVADO', 'www.wissengroup.com', 72365214, 954789562, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `f_egresado`
--

CREATE TABLE `f_egresado` (
  `id_img` int(11) NOT NULL,
  `id_egresado` int(11) NOT NULL,
  `eg_img` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `f_egresado`
--

INSERT INTO `f_egresado` (`id_img`, `id_egresado`, `eg_img`) VALUES
(1, 30, ''),
(2, 31, 'NULL'),
(3, 3, '182780.jpg'),
(4, 32, 'NULL'),
(5, 32, '360582.jpg'),
(6, 4, '486630.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajoeg`
--

CREATE TABLE `trabajoeg` (
  `id_te` int(11) NOT NULL,
  `id_egresado` int(11) NOT NULL,
  `estado_w` char(2) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_registro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `trabajoeg`
--

INSERT INTO `trabajoeg` (`id_te`, `id_egresado`, `estado_w`, `fecha_registro`) VALUES
(1, 7, 'SI', '2018-10-06'),
(2, 4, 'NO', '2018-10-06'),
(3, 3, 'SI', '2018-10-10'),
(4, 5, 'SI', '2018-10-10'),
(5, 8, 'NO', '2018-10-02'),
(6, 6, 'NO', '2018-10-02'),
(7, 9, 'SI', '2018-10-10'),
(8, 10, 'NO', '2018-10-03'),
(9, 11, 'SI', '2018-10-10'),
(10, 12, 'NO', '2018-10-03'),
(11, 29, 'SI', '0000-00-00'),
(12, 30, 'SI', '0000-00-00'),
(14, 32, 'SI', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `apellidos` varchar(254) COLLATE latin1_spanish_ci NOT NULL,
  `dni` int(8) NOT NULL,
  `estado` char(1) COLLATE latin1_spanish_ci DEFAULT NULL,
  `nombre_usuario` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `pass` varchar(20) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nombre`, `apellidos`, `dni`, `estado`, `nombre_usuario`, `pass`) VALUES
(1, 'Yessenia', 'Huaman Atencio', 45675645, 'A', 'yessadmin', '1234'),
(2, 'Kaly Zulema', 'CRISTOBAL ALCANTARA', 42193611, 'I', 'kalyta12', 'kaly'),
(3, 'Paola Pamela', 'CRUZ RAFAEL', 67898767, 'A', 'Pame', '123'),
(4, 'Sharon', 'HUAMAN QUISPE', 80987898, 'I', 'sharisx', '1243');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bolsat`
--
ALTER TABLE `bolsat`
  ADD PRIMARY KEY (`id_bolsa`),
  ADD KEY `fkbolsat_empresa` (`id_empresa`);

--
-- Indices de la tabla `datosacadem`
--
ALTER TABLE `datosacadem`
  ADD PRIMARY KEY (`idda`),
  ADD KEY `fkdatosacadem_egresado` (`id_egresado`);

--
-- Indices de la tabla `datosacadem_univ`
--
ALTER TABLE `datosacadem_univ`
  ADD PRIMARY KEY (`iddau`),
  ADD KEY `fkdatosacademuniv_egresado` (`id_egresado`);

--
-- Indices de la tabla `datoslaborales`
--
ALTER TABLE `datoslaborales`
  ADD PRIMARY KEY (`iddl`),
  ADD KEY `fkdatoslaborales_egresado` (`id_egresado`);

--
-- Indices de la tabla `egresado`
--
ALTER TABLE `egresado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id_empresa`);

--
-- Indices de la tabla `f_egresado`
--
ALTER TABLE `f_egresado`
  ADD PRIMARY KEY (`id_img`);

--
-- Indices de la tabla `trabajoeg`
--
ALTER TABLE `trabajoeg`
  ADD PRIMARY KEY (`id_te`),
  ADD KEY `fktrabajoeg_egresado` (`id_egresado`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datosacadem`
--
ALTER TABLE `datosacadem`
  MODIFY `idda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `datoslaborales`
--
ALTER TABLE `datoslaborales`
  MODIFY `iddl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `f_egresado`
--
ALTER TABLE `f_egresado`
  MODIFY `id_img` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `bolsat`
--
ALTER TABLE `bolsat`
  ADD CONSTRAINT `fkbolsat_empresa` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id_empresa`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `datosacadem`
--
ALTER TABLE `datosacadem`
  ADD CONSTRAINT `fkdatosacadem_egresado` FOREIGN KEY (`id_egresado`) REFERENCES `egresado` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `datosacadem_univ`
--
ALTER TABLE `datosacadem_univ`
  ADD CONSTRAINT `fkdatosacademuniv_egresado` FOREIGN KEY (`id_egresado`) REFERENCES `egresado` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `datoslaborales`
--
ALTER TABLE `datoslaborales`
  ADD CONSTRAINT `fkdatoslaborales_egresado` FOREIGN KEY (`id_egresado`) REFERENCES `egresado` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `trabajoeg`
--
ALTER TABLE `trabajoeg`
  ADD CONSTRAINT `fktrabajoeg_egresado` FOREIGN KEY (`id_egresado`) REFERENCES `egresado` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
