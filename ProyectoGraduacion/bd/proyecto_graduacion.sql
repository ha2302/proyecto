-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-09-2022 a las 19:48:30
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
-- Base de datos: `proyecto_graduacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juegos`
--

CREATE TABLE `juegos` (
  `id_juego` int(11) NOT NULL,
  `nombre_juego` varchar(150) NOT NULL,
  `genero` varchar(150) NOT NULL,
  `plataforma` varchar(150) NOT NULL,
  `descripcion` varchar(900) NOT NULL,
  `portada` varchar(150) NOT NULL,
  `fecha_lanzamiento` date NOT NULL,
  `precio` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `juegos`
--

INSERT INTO `juegos` (`id_juego`, `nombre_juego`, `genero`, `plataforma`, `descripcion`, `portada`, `fecha_lanzamiento`, `precio`) VALUES
(24, 'Call of Duty: Black Ops', 'Shooter', 'XBox', 'Call of Duty Black Ops, es un videojuego de disparos en primera persona de estilo bélico fue desarrollado por Treyarch y distribuido por Activision.', 'call of duty black ops.jpg', '2010-11-09', '29.00'),
(25, 'FIFA 22', 'Fútbol', 'Play Station', 'FIFA 22 es un videojuego desarrollado por EA Vancouver y EA Romania, siendo publicado por EA Sports. Está disponible para PlayStation 4, PlayStation 5, Xbox Series X/S, Xbox One, Microsoft Windows, Google Stadia y Nintendo Switch.', 'fifa23.jpeg', '2021-09-29', '29.99'),
(26, 'Cuphead', 'Aventura', 'Play Station', 'Cuphead es un videojuego perteneciente al género de corre y dispara, publicado por la empresa canadiense StudioMDHR. Fue lanzado al mercado el 29 de septiembre de 2017 para Microsoft Windows, Xbox One y Steam, ​ en 2018 para macOS, en 2019 para Nintendo Switch y en 2020 para PlayStation 4.', 'cuphead.jpg', '2017-09-29', '19.00'),
(27, 'Hollow Knight', 'Metroidvania', 'PC', 'Hollow Knight es un videojuego perteneciente al género metroidvania desarrollado y publicado por Team Cherry. El videojuego fue inicialmente lanzado para Microsoft Windows en febrero de 2017, y más tarde para macOS y Linux en abril de 2017.​ La adaptación para Nintendo Switch fue lanzada el 12 de junio de 2018.', 'hollowknigth.webp', '2017-02-24', '14.99'),
(28, 'Mario Kart 8', 'Carreras', 'Nintendo', 'Mario Kart 8 es un videojuego de carreras desarrollado y publicado por Nintendo para la consola Wii U. Es la undécima entrega de la serie Mario Kart, octava en consolas de Nintendo.', 'mariokart8deluxe.jpg', '2014-05-29', '14.00'),
(29, 'Fortnite', 'Battle Royale', 'PC', 'Fortnite es un videojuego del año 2017 desarrollado por la empresa Epic Games, lanzado como diferentes paquetes de software que presentan diferentes modos de juego, pero que comparten el mismo motor de juego y mecánicas. Fue anunciado en los Spike Video Game Awards en 2011.', 'fortnite.jpg', '2017-07-21', '0.00'),
(30, 'Halo Infinite', 'Shooter', 'XBox', 'Halo Infinite es un videojuego de disparos en primera persona de la franquicia de videojuegos de ciencia ficción creada por Bungie Studios y actualmente desarrollada por 343 Industries. Es exclusivo para las plataformas Xbox One, Microsoft Windows y Xbox Series X|S.', 'Halo_Infinite.png', '2021-11-15', '69.00'),
(31, 'Minecraft', 'Mundo Abierto', 'PC', 'Minecraft es un videojuego de construcción de tipo mundo abierto o sandbox creado originalmente por el sueco Markus Persson, ​ y posteriormente desarrollado por Mojang Studios.​', 'minecraft.png', '2011-04-07', '1.00'),
(32, 'Call of Duty: Warzone', 'Battle Royale', 'PC', 'Call of Duty: Warzone es un videojuego de disparos en primera persona, perteneciente al género Battle royale gratuito, lanzado el 10 de marzo de 2020 para PlayStation 4, PlayStation 5, Xbox One, Xbox Series X|S y Microsoft Windows.', 'warzone.jpg', '2020-03-10', '35.00'),
(33, 'Need for Speed: Most Wanted', 'Carreras', 'PC', 'Need for Speed: Most Wanted es un videojuego de carreras de la saga Need for Speed desarrollado por Electronic Arts y Criterion Games para Xbox 360, PlayStation 3, Wii U, PlayStation Vita y PC. El juego fue lanzado el 31 de octubre de 2012.', 'NFSMW.webp', '2012-10-30', '4.99'),
(34, 'Little Nightmares', 'Terror', 'PC', 'Little Nightmares is a puzzle-platform horror adventure game developed by Tarsier Studios and published by Bandai Namco Entertainment for Microsoft Windows, Nintendo Switch, PlayStation 4, Xbox One, and Stadia.', 'litlenigthmares.webp', '2017-05-08', '0.00'),
(35, 'FIFA 16', 'Fútbol', 'Play Station', 'FIFA 16 es un videojuego de fútbol desarrollado por EA Canadá y publicado por EA Sports. Es el 23.º de la serie y salió a la venta el 22 de septiembre en América del Norte y el 24 de septiembre en Europa.', 'fifa16.jpg', '2015-09-22', '3.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `usuario` varchar(150) NOT NULL,
  `contra` varchar(150) NOT NULL,
  `tcuenta` varchar(150) NOT NULL DEFAULT 'user',
  `estado` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `contra`, `tcuenta`, `estado`) VALUES
(5, 'user', 'admin', 'admin', 'admin', 1),
(6, 'Jorge', 'user', 'user', 'user', 1),
(24, 'Henry Alvarado', 'henry23', 'henry23', 'user', 1),
(25, 'Liones Messi', 'leomessi', 'leomessi', 'admin', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `juegos`
--
ALTER TABLE `juegos`
  ADD PRIMARY KEY (`id_juego`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `juegos`
--
ALTER TABLE `juegos`
  MODIFY `id_juego` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
