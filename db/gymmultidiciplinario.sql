-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-12-2022 a las 03:15:19
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gymmultidiciplinario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencias`
--

CREATE TABLE `asistencias` (
  `IDasistencia` int(11) NOT NULL,
  `Dia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `disciplinas`
--

CREATE TABLE `disciplinas` (
  `IDdisciplina` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `disciplinas`
--

INSERT INTO `disciplinas` (`IDdisciplina`, `Nombre`) VALUES
(1, 'Gimnasio'),
(2, 'Ballet'),
(3, 'ArtesMarciales');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `IDmaquina` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `usuario` text NOT NULL,
  `password` text NOT NULL,
  `name` text NOT NULL,
  `Rango` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id`, `usuario`, `password`, `name`, `Rango`) VALUES
(1, 'swefwefewf', 'a4VyYPVr', 'secre', 0),
(2, '', 'dRQlidHW', 'Entrenadorwe', 0),
(3, 'Eweweweweewewwe', 'dRQlidHW', 'Entrenadorwe', 0),
(4, 'Eweweweweewewwe', 'dRQlidHW', 'Entrenadorwe', 0),
(5, 'Eweweweweewewwe', 'dRQlidHW', 'Entrenadorwe', 0),
(6, '', 'gdwtDK3c', 'Ibrain', 0),
(7, '123', '123', 'ibrain', 0),
(8, 'amarfef', 'Jm7eHfvT', 'anthoy', 0),
(9, 'xmorarodriguez', 'YnRmAQC7', 'xavier antonio', 0),
(10, 'DNaalPerez', '6EKZjzFt', 'Daniel Antonio', 0),
(11, 'DGonzalezRodriguez', 'W3ACqEdW', 'Daniela Gabriela', 0),
(12, 'RGutierrezMateo', 'LNOfraKg', 'Ricardo Daniel', 0),
(13, 'MNaalPerez', 'usoTTwVc', 'Maria Luisa', 0),
(14, 'SMartinezRodriguez', '3pSK1XjQ', 'Said Jaziel', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maquinas`
--

CREATE TABLE `maquinas` (
  `Id_Maquina` int(11) NOT NULL,
  `Nombre` text NOT NULL,
  `Cantidad` int(50) NOT NULL,
  `Estado` text NOT NULL,
  `Fecha_Compra` text NOT NULL,
  `disciplina` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `maquinas`
--

INSERT INTO `maquinas` (`Id_Maquina`, `Nombre`, `Cantidad`, `Estado`, `Fecha_Compra`, `disciplina`) VALUES
(12, 'Dos pesas de 50 kg', 411, 'Funcional', ' ', 'Gym '),
(13, 'Maillot', 250, 'regular', '2022-12-12', 'ballet'),
(14, 'Guantes de entrenamiento', 600, 'Funcional', '2022-12-10', 'Artes Marciales');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE `pagos` (
  `IDpago` int(11) NOT NULL,
  `Fecha_pago` text NOT NULL,
  `Cantidad` int(50) NOT NULL,
  `ID_registro` int(50) NOT NULL,
  `Nombres` text NOT NULL,
  `Apellidos` text NOT NULL,
  `Disciplina` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pagos`
--

INSERT INTO `pagos` (`IDpago`, `Fecha_pago`, `Cantidad`, `ID_registro`, `Nombres`, `Apellidos`, `Disciplina`) VALUES
(83, '2022-12-07', 400, 4, 'christopher', 'mora ', 'Ballet '),
(84, '2022-12-09', 385, 41, 'xavier', 'Martinez', 'Gym');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registroentrenador`
--

CREATE TABLE `registroentrenador` (
  `ID_entrenador` int(11) NOT NULL,
  `Nombres` varchar(2551) NOT NULL,
  `ApellidoP` text NOT NULL,
  `ApellidoM` text NOT NULL,
  `CorreoElectronico` varchar(255) NOT NULL,
  `usuario` text NOT NULL,
  `Contrasena` varchar(255) NOT NULL,
  `Edad` text NOT NULL,
  `NumTelefono` varchar(255) NOT NULL,
  `NumEmer` text NOT NULL,
  `Direccion` varchar(255) NOT NULL,
  `Disciplina` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registroentrenador`
--

INSERT INTO `registroentrenador` (`ID_entrenador`, `Nombres`, `ApellidoP`, `ApellidoM`, `CorreoElectronico`, `usuario`, `Contrasena`, `Edad`, `NumTelefono`, `NumEmer`, `Direccion`, `Disciplina`) VALUES
(9, 'Daniel Antonio', 'Naal', 'Perez', 'DanielAntonio@gmail.com', 'DNaalPerez', '6EKZjzFt', '22  22', '981 111 0232', '981 111 0232', '43 C. And. Los Aguacates', 'Gym'),
(10, 'Maria Luisa', 'Naal', 'Perez', 'MariaLuisa@gmail.com', 'MNaalPerez', 'usoTTwVc33', '36', '981 892 2323', '981 892 2323', '72 C Prolong Bravo', 'Ballet'),
(11, 'Said Jaziel', 'Martinez', 'Rodriguez', 'SaidJaziel@gmail.com', 'SMartinezRodriguez', '3pSK1XjQ', '38', '981 344 5456', '981 344 5456', '18 Emiliano Zapata', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrosecretaria`
--

CREATE TABLE `registrosecretaria` (
  `ID_Funcionario` int(11) NOT NULL,
  `Nombres` varchar(255) NOT NULL,
  `ApellidoP` text NOT NULL,
  `ApellidoM` text NOT NULL,
  `CorreoElectronico` varchar(255) NOT NULL,
  `usuario` text NOT NULL,
  `Contrasena` varchar(255) NOT NULL,
  `Edad` text NOT NULL,
  `NumTelefono` varchar(255) NOT NULL,
  `NumEmer` text NOT NULL,
  `Direccion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registrosecretaria`
--

INSERT INTO `registrosecretaria` (`ID_Funcionario`, `Nombres`, `ApellidoP`, `ApellidoM`, `CorreoElectronico`, `usuario`, `Contrasena`, `Edad`, `NumTelefono`, `NumEmer`, `Direccion`) VALUES
(17, 'xavier antonio', 'mora', 'rodriguez', 'FhristophermFra66@gmail.com', 'xmorarodriguez', 'YnRmAQC7', '22', '9812434444', '9812434444', '29 Calle Prol. Allende'),
(18, 'Daniela Gabriela', 'Gonzalez', 'Rodriguez', 'DanielaGabriela@gmai.com', 'DGonzalezRodriguez', 'W3ACqEdW', '31', '981 673 2722', '981 673 2722', '253 C. Baja Velocidad'),
(19, 'Ricardo Daniel', 'Gutierrez', 'Mateo', 'RicardoDaniel@gmail.com', 'RGutierrezMateo', 'LNOfraKg', '34', '981 554 4555', '981 554 4555', 'C. López Portillo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrosusuarios`
--

CREATE TABLE `registrosusuarios` (
  `ID_registro` int(11) NOT NULL,
  `Nombres` text NOT NULL,
  `Apellidos` text NOT NULL,
  `CorreoElectronico` text NOT NULL,
  `NumTel` text NOT NULL,
  `Direccion` text NOT NULL,
  `Disciplina` text NOT NULL,
  `NombreTutor` text NOT NULL,
  `NumTutor` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registrosusuarios`
--

INSERT INTO `registrosusuarios` (`ID_registro`, `Nombres`, `Apellidos`, `CorreoElectronico`, `NumTel`, `Direccion`, `Disciplina`, `NombreTutor`, `NumTutor`) VALUES
(4, 'christopher ', 'mora ', 'mateO@gmail.com', '9811991564 ', '13 C Galeana ', 'Gym ', 'Vania Mora ', '981 232 2323 '),
(41, 'xavier', 'Martinez', 'ibraiN12@gmail.com', '981 1126422', '246 C. Aldama\r\n', 'Gym', 'Maria antonia Martinez Tuz', '981 112 6422'),
(42, 'Angel Alberto', 'Ordando', 'AngelAlberto@gmail.com', 'Tuz', '8 Del Duque 2', 'Artes marciales', 'Angela Maria Ek Tuz', '981 232 2323');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(2) NOT NULL,
  `rol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `rol`) VALUES
(1, 'admin'),
(2, 'entrenador'),
(3, 'recepcionista');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `rol_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `password`, `rol_id`) VALUES
(1, 'kevin', 'kevin', 1),
(2, 'daniel', 'daniel', 2),
(3, 'cris', 'cris', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asistencias`
--
ALTER TABLE `asistencias`
  ADD PRIMARY KEY (`IDasistencia`);

--
-- Indices de la tabla `disciplinas`
--
ALTER TABLE `disciplinas`
  ADD PRIMARY KEY (`IDdisciplina`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`IDmaquina`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `maquinas`
--
ALTER TABLE `maquinas`
  ADD PRIMARY KEY (`Id_Maquina`);

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`IDpago`);

--
-- Indices de la tabla `registroentrenador`
--
ALTER TABLE `registroentrenador`
  ADD PRIMARY KEY (`ID_entrenador`);

--
-- Indices de la tabla `registrosecretaria`
--
ALTER TABLE `registrosecretaria`
  ADD PRIMARY KEY (`ID_Funcionario`);

--
-- Indices de la tabla `registrosusuarios`
--
ALTER TABLE `registrosusuarios`
  ADD PRIMARY KEY (`ID_registro`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuarios_ibfk_1` (`rol_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asistencias`
--
ALTER TABLE `asistencias`
  MODIFY `IDasistencia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `disciplinas`
--
ALTER TABLE `disciplinas`
  MODIFY `IDdisciplina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
  MODIFY `IDmaquina` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `maquinas`
--
ALTER TABLE `maquinas`
  MODIFY `Id_Maquina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `IDpago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT de la tabla `registroentrenador`
--
ALTER TABLE `registroentrenador`
  MODIFY `ID_entrenador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `registrosecretaria`
--
ALTER TABLE `registrosecretaria`
  MODIFY `ID_Funcionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `registrosusuarios`
--
ALTER TABLE `registrosusuarios`
  MODIFY `ID_registro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
