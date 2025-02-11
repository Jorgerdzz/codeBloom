-- phpMyAdmin SQL Dump
-- version 5.2.1deb3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 02-02-2025 a las 12:15:58
-- Versión del servidor: 10.11.8-MariaDB-0ubuntu0.24.04.1
-- Versión de PHP: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cine`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Entradas`
--

CREATE TABLE `Entradas` (
  `id` int(11) NOT NULL,
  `asiento` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_pase` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Pases`
--

CREATE TABLE `Pases` (
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `id_pelicula` int(11) NOT NULL,
  `id_sala` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Peliculas`
--

CREATE TABLE `Peliculas` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `fecha_estreno` date NOT NULL,
  `duracion` int(11) NOT NULL,
  `reparto` varchar(255) NOT NULL,
  `calificacion_edad` int(11) NOT NULL,
  `sinopsis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `Peliculas`
--

INSERT INTO `Peliculas` (`id`, `titulo`, `direccion`, `fecha_estreno`, `duracion`, `reparto`, `calificacion_edad`, `sinopsis`) VALUES
(1, 'Sonic 3 - La película', 'Jeff Fowler', '2024-12-25', 110, 'Jim Carrey, Ben Schwartz, Idris Elba, Keanu Reeves', 7, 'Sonic, Knuckles y Tails se reúnen para enfrentarse a un nuevo y poderoso adversario, Shadow, un misterioso villano cuyos poderes no se parecen a nada de lo que nuestros héroes han conocido hasta ahora. Con sus facultades superadas en todos los sentidos, el Equipo Sonic tendrá que establecer una insólita alianza con la esperanza de detener a Shadow y proteger el planeta.'),
(2, 'Psicosis', 'Alfred Hitchcock', '1960-06-16', 109, 'Anthony Perkins, Janet Leigh, Vera Miles', 16, 'Marion Crane, una joven secretaria, tras cometer el robo de un dinero en su empresa, huye de la ciudad y, después de conducir durante horas, decide descansar en un pequeño y apartado motel de carretera regentado por un tímido joven, Norman Bates, que vive en la casa de al lado con su madre.'),
(3, 'Red One', 'Jake Kasdan', '2024-11-06', 123, 'Dwayne Johnson, Chris Evans, Lucy Liu, J.K. Simmons', 7, 'Tras el secuestro de Papá Noel, el Jefe de Seguridad del Polo Norte (Dwayne Johnson) debe formar equipo con el cazarrecompensas más infame del mundo (Chris Evans) en una misión trotamundos llena de acción para salvar la Navidad.'),
(4, '12 hombres sin piedad', 'Sidney Lumet', '1957-04-10', 95, 'Henry Fonda, Lee J. Cobb, Jack Warden, E.G. Marshall, Martin Balsam', 0, 'Los doce miembros de un jurado deben juzgar a un adolescente acusado de haber matado a su padre. Todos menos uno están convencidos de la culpabilidad del acusado. El que disiente intenta con sus razonamientos introducir en el debate una duda razonable que haga recapacitar a sus compañeros para que cambien el sentido de su voto.'),
(5, 'Bitelchús Bitelchús', 'Tim Burton', '2024-12-02', 104, 'Michael Keaton, Winona Ryder, Jenna Ortega, Catherine O\'Hara, Justin Theroux, Monica Bellucci, Willem Dafoe', 12, 'Tras una inesperada tragedia familiar, tres generaciones de la familia Deetz regresan a Winter River. La vida de Lydia, todavía atormentada por Bitelchús, da un vuelco cuando su rebelde hija adolescente, Astrid, descubre la misteriosa maqueta de la ciudad en el desván y el portal al Más Allá se abre accidentalmente. Con los problemas que se avecinan en ambos reinos, es sólo cuestión de tiempo que alguien diga el nombre de Bitelchús tres veces y el travieso demonio regrese para desatar su propio caos.'),
(6, 'Un lugar en ninguna parte', 'Sidney Lumet', '1988-09-09', 116, 'River Phoenix, Christine Lahti, Judd Hirsch, Martha Plimpton', 12, 'Un matrimonio esconde un oscuro pasado: durante su juventud en los años 60 fueron militantes de un grupo radical violento. Un atentado con bomba, que causó varios heridos graves, los ha obligado a vivir clandestinamente y a cambiar continuamente de domicilio y de nombres para evitar ser localizados por el FBI.'),
(7, 'Jurado Nº 2', 'Clint Eastwood', '2024-12-15', 110, 'Nicholas Hoult, Toni Collette, J.K. Simmons, Kiefer Sutherland', 12, 'Justin Kemp, un hombre de familia, mientras forma parte de un jurado en un juicio por asesinato, se encuentra luchando con un serio dilema moral. Uno que podría utilizar para influir en el veredicto del jurado y potencialmente condenar (o liberar) al asesino acusado.'),
(8, 'Centauros del desierto', 'John Ford', '1956-05-16', 119, 'John Wayne, Jeffrey Hunter, Vera Miles, Natalie Wood', 12, 'Texas. En 1868, tres años después de la guerra de Secesión, Ethan Edwards, un hombre solitario, vuelve derrotado a su hogar. La persecución de los comanches que han raptado a una de sus sobrinas se convertirá en un modo de vida para él y para Martin, un muchacho mestizo adoptado por su familia.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Salas`
--

CREATE TABLE `Salas` (
  `id` int(11) NOT NULL,
  `butacas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `Salas`
--

INSERT INTO `Salas` (`id`, `butacas`) VALUES
(1, 200),
(2, 200);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuarios`
--

CREATE TABLE `Usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `contrasena` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Entradas`
--
ALTER TABLE `Entradas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_pase` (`id_pase`);

--
-- Indices de la tabla `Pases`
--
ALTER TABLE `Pases`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Pases_ibfk_1` (`id_pelicula`),
  ADD KEY `Pases_ibfk_2` (`id_sala`);

--
-- Indices de la tabla `Peliculas`
--
ALTER TABLE `Peliculas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `Salas`
--
ALTER TABLE `Salas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `clientes_correo_unique` (`correo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Entradas`
--
ALTER TABLE `Entradas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Pases`
--
ALTER TABLE `Pases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Peliculas`
--
ALTER TABLE `Peliculas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Entradas`
--
ALTER TABLE `Entradas`
  ADD CONSTRAINT `Entradas_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `Usuarios` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `Entradas_ibfk_2` FOREIGN KEY (`id_pase`) REFERENCES `Pases` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `Pases`
--
ALTER TABLE `Pases`
  ADD CONSTRAINT `Pases_ibfk_1` FOREIGN KEY (`id_pelicula`) REFERENCES `Peliculas` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `Pases_ibfk_2` FOREIGN KEY (`id_sala`) REFERENCES `Salas` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
