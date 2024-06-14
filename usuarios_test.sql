-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-06-2024 a las 04:58:06
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `usuarios_test`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntascuestionariomslq`
--

CREATE TABLE `preguntascuestionariomslq` (
  `idPregunta` int(11) NOT NULL,
  `pregunta` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `preguntascuestionariomslq`
--

INSERT INTO `preguntascuestionariomslq` (`idPregunta`, `pregunta`) VALUES
(1, 'Prefiero las materias que son dificiles o desafiantes, porque aprendo cosas nuevas.'),
(2, 'A diferencia de otras personas, yo siempre espero rendir bien.'),
(3, 'Me pongo tan nervioso en las evaluaciones, que no puedo recordar la información que aprendí.'),
(4, 'Para mí es importante entender lo que se enseña en las clases. '),
(5, 'Me gusta lo que aprendo en clases.'),
(6, 'Sé que entiendo bien las ideas que se dan a conocer en las asignaturas.'),
(7, 'Soy capaz de utilizar lo que aprendo en una asignatura para aplicarlo a otras.'),
(8, 'Siempre espero rendir bien en mis clases.'),
(9, 'Creo que soy un buen estudiante.'),
(10, 'Siempre investigo acerca de temas de los cuales aprenderé cosas nuevas, incluso si son dificiles o requieren más trabajo.'),
(11, 'Tengo certeza de que puedo hacer un buen trabajo en los problemas y tareas que se me dan en las diferentes asignaturas.'),
(12, 'Cuando rindo una evaluación, me siento incómodo y alterado.'),
(13, 'Siento que tendré buenas calificaciones en mis asignaturas.'),
(14, 'Incluso cuando me va mal en una evaluación, trato de aprender de mis errores.'),
(15, 'Creo que lo que se me enseña en mis asignaturas es importante para mí.'),
(16, 'Mis técnicas y hábitos de estudio son muy buenas.'),
(17, 'Creo que lo que aprendemos en las diferentes asignaturas es siempre interesante.'),
(18, 'Comparado con otros estudiantes, creo que sé muchas cosas.'),
(19, 'Sé que lograré aprender las materias de mis asignaturas.'),
(20, 'Siempre me preocupo mucho ante una evaluación.'),
(21, 'Entender mis materias es muy importante para mí.'),
(22, 'Cuando rindo una evaluación pienso en lo mal que me está yendo.'),
(23, 'Cuando estudio para una prueba, trato de relacionar la información de clases y la información de los libros.'),
(24, 'Cuando hago trabajos en casa, trato de recordar lo que dijo el profesor en clases para poder realizar la tarea correctamente.'),
(25, 'Constantemente me hago preguntas para asegurarme de que aprendí bien lo que estudié'),
(26, 'Me es dificil poder determinar cuáles son las ideas principales en las cosas que leo.'),
(27, 'Cuando la materia es difícil, me rindo o simplemente trabajo en las partes más fáciles.'),
(28, 'Cuando estudio, elaboro las ideas importantes con mis propias palabras (no las aprendo de manera textual).'),
(29, 'Siempre trato de entender lo que el profesor dice, incluso si para mí no tiene sentido o es dificil.'),
(30, 'Cuando estudio para una prueba, trato de recordar lo más que se puede.'),
(31, 'Cuando estudio reviso mis apuntes para ayudarme a recordar el resto de la materia.'),
(32, 'Hago ejercicios y completo cuestionarios o guías de trabajo incluso cuando no tengo que hacerlo por obligación.'),
(33, 'Incluso cuando la materia es dificil o incomprensible, trato de seguir trabajando hasta terminar.'),
(34, 'Cuando estudio para una prueba, practico repitiendo los conceptos una y otra vez.'),
(35, 'Antes de empezar a estudiar pienso en las cosas que necesitarė hacer para aprenderme la materia.'),
(36, 'Uso lo que he aprendido anteriormente en otras materias, libros o tareas para entender materias nuevas.'),
(37, 'Usualmente me encuentro leyendo algo para mis clases, pero que no he entendido nada de lo que estoy leyendo.'),
(38, 'Usualmente, cuando el profesor habla, yo pienso en otras cosas y realmente no pongo atención lo que está diciendo.'),
(39, 'Cuando estudio una materia, trato de relacionar todos los temas para que tengan sentido.'),
(40, 'Cuando leo, me detengo de vez en cuando y vuelvo atrás para leer de nuevo lo que ya lei.'),
(41, 'Cuando estudio una materia, me digo a mi mismo las palabras una y otra vez para ayudarme a recordar.'),
(42, 'Subrayo las ideas en mis libros y apuntes para ayudarme a estudiar.'),
(43, 'Me esfuerzo mucho por conseguir buenas calificaciones, incluso si no me gusta la asignatura.'),
(44, 'Cuando leo, trato de conectar aquello que estoy leyendo con lo que ya conozco, sé y manejo.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles_de_usuario`
--

CREATE TABLE `roles_de_usuario` (
  `idRol` int(11) NOT NULL,
  `nombreRol` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `roles_de_usuario`
--

INSERT INTO `roles_de_usuario` (`idRol`, `nombreRol`) VALUES
(1, 'Administrador'),
(2, 'ProfesionalMedico'),
(3, 'Alumno');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre_usuario` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre_usuario`) VALUES
(1, '19152977-4'),
(2, 'gege'),
(3, '8135176-7'),
(4, 'Chile'),
(5, '[value-2]'),
(6, '[value-2]'),
(7, '[value-2]'),
(8, '.11:06:09.'),
(9, '11:06:26'),
(10, '12:06:45'),
(11, '12:06:48'),
(12, '12:06:05'),
(13, '10:06:55');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `preguntascuestionariomslq`
--
ALTER TABLE `preguntascuestionariomslq`
  ADD PRIMARY KEY (`idPregunta`);

--
-- Indices de la tabla `roles_de_usuario`
--
ALTER TABLE `roles_de_usuario`
  ADD PRIMARY KEY (`idRol`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `preguntascuestionariomslq`
--
ALTER TABLE `preguntascuestionariomslq`
  MODIFY `idPregunta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de la tabla `roles_de_usuario`
--
ALTER TABLE `roles_de_usuario`
  MODIFY `idRol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
