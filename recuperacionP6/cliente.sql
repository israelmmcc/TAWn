--
-- Base de datos: `cliente`
--

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `mat` int(60) NOT NULL,
  `Nombre` varchar(50) NOT NULL DEFAULT '0',
  `Apellido` varchar(50) NOT NULL DEFAULT '0',
  `Correo` varchar(50) NOT NULL,
  `Carrera` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);



CREATE TABLE `maestros` (
  `id` int(11) NOT NULL,
  `empleado` int(60) NOT NULL,
  `Nombre` varchar(50) NOT NULL DEFAULT '0',
  `Apellido` varchar(50) NOT NULL DEFAULT '0',
  `Correo` varchar(50) NOT NULL,
  `Carrera` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Indices de la tabla `cliente`
--
ALTER TABLE `maestros`
  ADD PRIMARY KEY (`id`);