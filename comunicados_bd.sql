-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-06-2017 a las 21:29:57
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `comunicados_bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `courses`
--

CREATE TABLE `courses` (
  `id` int(8) NOT NULL,
  `grado` varchar(150) NOT NULL,
  `nivel` varchar(100) NOT NULL,
  `aula` varchar(20) NOT NULL,
  `turno` varchar(150) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `courses`
--

INSERT INTO `courses` (`id`, `grado`, `nivel`, `aula`, `turno`, `updated_at`, `created_at`) VALUES
(1, 'primero', 'Primario', '404', 'mañana', '2017-06-24 03:43:23', '0000-00-00 00:00:00'),
(2, 'segundo', 'Primario', '345', 'tarde', '2017-06-24 03:43:23', '0000-00-00 00:00:00'),
(3, 'septimo', 'Secundario', '345', 'tarde', '2017-06-24 03:43:23', '0000-00-00 00:00:00'),
(4, 'sexto', 'secundaria', '87', 'tarde', '2017-06-24 03:43:28', '2017-06-24 03:43:28'),
(5, 'primero', 'secundaria', '7', 'tarde', '2017-06-24 03:43:28', '2017-06-24 03:43:28'),
(6, 'segundo', 'secundaria', '208', 'mañana', '2017-06-24 03:43:28', '2017-06-24 03:43:28'),
(7, 'sexto', 'primaria', '106', 'tarde', '2017-06-24 03:43:28', '2017-06-24 03:43:28'),
(8, 'quinto', 'primaria', '96', 'mañana', '2017-06-24 03:43:28', '2017-06-24 03:43:28'),
(9, 'sexto', 'secundaria', '140', 'mañana', '2017-06-24 03:43:29', '2017-06-24 03:43:29'),
(10, 'tercero', 'primaria', '246', 'mañana', '2017-06-24 03:43:29', '2017-06-24 03:43:29'),
(11, 'cuarto', 'secundaria', '192', 'tarde', '2017-06-24 03:43:29', '2017-06-24 03:43:29'),
(12, 'cuarto', 'secundaria', '191', 'mañana', '2017-06-24 03:43:29', '2017-06-24 03:43:29'),
(13, 'quinto', 'secundaria', '134', 'tarde', '2017-06-24 03:43:29', '2017-06-24 03:43:29'),
(14, 'tercero', 'secundaria', '235', 'tarde', '2017-06-24 03:43:29', '2017-06-24 03:43:29'),
(15, 'quinto', 'primaria', '99', 'mañana', '2017-06-24 03:43:29', '2017-06-24 03:43:29'),
(16, 'tercero', 'secundaria', '203', 'tarde', '2017-06-24 03:43:29', '2017-06-24 03:43:29'),
(17, 'tercero', 'secundaria', '63', 'tarde', '2017-06-24 03:43:29', '2017-06-24 03:43:29'),
(18, 'tercero', 'secundaria', '124', 'mañana', '2017-06-24 03:43:29', '2017-06-24 03:43:29'),
(19, 'sexto', 'primaria', '18', 'tarde', '2017-06-24 03:43:29', '2017-06-24 03:43:29'),
(20, 'primero', 'primaria', '137', 'tarde', '2017-06-24 03:43:29', '2017-06-24 03:43:29'),
(21, 'segundo', 'secundaria', '132', 'mañana', '2017-06-24 03:43:29', '2017-06-24 03:43:29'),
(22, 'segundo', 'primaria', '207', 'tarde', '2017-06-24 03:43:29', '2017-06-24 03:43:29'),
(23, 'tercero', 'secundaria', '78', 'tarde', '2017-06-24 03:43:29', '2017-06-24 03:43:29'),
(24, 'primero', 'secundaria', '216', 'mañana', '2017-06-24 03:43:29', '2017-06-24 03:43:29'),
(25, 'primero', 'secundaria', '90', 'tarde', '2017-06-24 03:43:29', '2017-06-24 03:43:29'),
(26, 'tercero', 'primaria', '108', 'mañana', '2017-06-24 03:43:29', '2017-06-24 03:43:29'),
(27, 'segundo', 'primaria', '156', 'tarde', '2017-06-24 03:43:29', '2017-06-24 03:43:29'),
(28, 'primero', 'secundaria', '206', 'tarde', '2017-06-24 03:43:29', '2017-06-24 03:43:29'),
(29, 'segundo', 'secundaria', '210', 'mañana', '2017-06-24 03:43:29', '2017-06-24 03:43:29'),
(30, 'tercero', 'secundaria', '120', 'tarde', '2017-06-24 03:43:29', '2017-06-24 03:43:29'),
(31, 'sexto', 'primaria', '69', 'tarde', '2017-06-24 03:43:29', '2017-06-24 03:43:29'),
(32, 'cuarto', 'secundaria', '221', 'tarde', '2017-06-24 03:43:29', '2017-06-24 03:43:29'),
(33, 'cuarto', 'secundaria', '72', 'mañana', '2017-06-24 03:43:29', '2017-06-24 03:43:29'),
(34, 'segundo', 'secundaria', '12', 'tarde', '2017-06-24 03:43:29', '2017-06-24 03:43:29'),
(35, 'cuarto', 'primaria', '227', 'tarde', '2017-06-24 03:43:29', '2017-06-24 03:43:29'),
(36, 'sexto', 'secundaria', '117', 'tarde', '2017-06-24 03:43:30', '2017-06-24 03:43:30'),
(37, 'quinto', 'secundaria', '239', 'tarde', '2017-06-24 03:43:30', '2017-06-24 03:43:30'),
(38, 'primero', 'secundaria', '78', 'tarde', '2017-06-24 03:43:30', '2017-06-24 03:43:30'),
(39, 'tercero', 'primaria', '210', 'mañana', '2017-06-24 03:43:30', '2017-06-24 03:43:30'),
(40, 'quinto', 'primaria', '194', 'tarde', '2017-06-24 03:43:30', '2017-06-24 03:43:30'),
(41, 'segundo', 'primaria', '157', 'mañana', '2017-06-24 03:43:30', '2017-06-24 03:43:30'),
(42, 'primero', 'primaria', '200', 'mañana', '2017-06-24 03:43:30', '2017-06-24 03:43:30'),
(43, 'cuarto', 'primaria', '39', 'tarde', '2017-06-24 03:43:30', '2017-06-24 03:43:30'),
(44, 'primero', 'primaria', '192', 'mañana', '2017-06-24 03:43:30', '2017-06-24 03:43:30'),
(45, 'primero', 'secundaria', '239', 'tarde', '2017-06-24 03:43:30', '2017-06-24 03:43:30'),
(46, 'quinto', 'secundaria', '132', 'tarde', '2017-06-24 03:43:30', '2017-06-24 03:43:30'),
(47, 'tercero', 'secundaria', '110', 'tarde', '2017-06-24 03:43:30', '2017-06-24 03:43:30'),
(48, 'primero', 'secundaria', '194', 'mañana', '2017-06-24 03:43:30', '2017-06-24 03:43:30'),
(49, 'sexto', 'secundaria', '148', 'mañana', '2017-06-24 03:43:30', '2017-06-24 03:43:30'),
(50, 'sexto', 'primaria', '50', 'tarde', '2017-06-24 03:43:30', '2017-06-24 03:43:30'),
(51, 'tercero', 'primaria', '98', 'tarde', '2017-06-24 03:43:30', '2017-06-24 03:43:30'),
(52, 'primero', 'secundaria', '209', 'mañana', '2017-06-24 03:43:30', '2017-06-24 03:43:30'),
(53, 'primero', 'secundaria', '211', 'tarde', '2017-06-24 03:43:30', '2017-06-24 03:43:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluations`
--

CREATE TABLE `evaluations` (
  `id` int(20) NOT NULL,
  `materia_id` int(40) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nota_promedio` float NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `evaluations`
--

INSERT INTO `evaluations` (`id`, `materia_id`, `fecha`, `nota_promedio`, `updated_at`, `created_at`) VALUES
(1, 1, '2017-06-24 05:20:25', 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 2, '2017-06-24 05:20:25', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 2, '2017-06-13 03:00:00', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 3, '2017-06-05 03:00:00', 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 4, '2017-06-01 03:00:00', 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 6, '2017-04-10 03:00:00', 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 12, '2017-03-07 03:00:00', 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 12, '2017-06-24 05:22:53', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 14, '2017-05-16 03:00:00', 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 10, '2017-06-06 03:00:00', 8, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 16, '2017-06-06 03:00:00', 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 19, '2017-06-24 05:28:00', 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 11, '2017-06-06 03:18:00', 8, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 10, '2017-06-06 03:00:00', 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 9, '2017-06-06 03:00:00', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 8, '2017-06-06 03:00:00', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 7, '2017-06-06 03:00:00', 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 6, '2017-06-06 03:00:00', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 5, '2017-06-06 03:00:00', 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 4, '2017-06-06 03:00:00', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 3, '2017-06-06 03:00:00', 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 2, '2017-06-06 03:00:00', 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 1, '2017-06-06 03:00:00', 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `messages`
--

CREATE TABLE `messages` (
  `id` int(20) NOT NULL,
  `titulo` varchar(150) NOT NULL,
  `asunto` varchar(200) NOT NULL,
  `mensaje` varchar(250) NOT NULL,
  `mensaje_padre_id` int(100) DEFAULT NULL,
  `mensaje_tipo_id` int(11) NOT NULL,
  `user_envia` int(20) NOT NULL,
  `escuela_id` int(20) NOT NULL,
  `adjunto` varchar(250) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `messages`
--

INSERT INTO `messages` (`id`, `titulo`, `asunto`, `mensaje`, `mensaje_padre_id`, `mensaje_tipo_id`, `user_envia`, `escuela_id`, `adjunto`, `created_at`, `updated_at`) VALUES
(1, 'Titulo', 'Soluta voluptates qui distinctio magnam expedita necessitatibus aliquid.', 'Quis aspernatur saepe non dolores voluptatem molestiae. Ipsam voluptates voluptatum id perferendis consequatur. Sit omnis et hic consequuntur minima. Assumenda dolores nesciunt voluptatibus consectetur cum suscipit.', 9, 4, 25600951, 20, 'asada', '2017-06-29 08:16:59', '2017-06-24 01:45:18'),
(2, 'Titulo', 'Nobis esse qui voluptatem et quia asperiores quisquam.', 'Et quasi vel consequatur rerum facere. Qui recusandae possimus nostrum.\nQuas minus deleniti soluta doloremque est accusamus. Dicta adipisci alias alias cumque rem dignissimos error. Ipsum perferendis atque voluptatem voluptas.', 20, 3, 14567834, 2, '', '2017-06-29 08:17:03', '2017-06-24 01:45:18'),
(3, 'Titulo', 'Repellat minima aspernatur nesciunt quidem ducimus nihil at.', 'Laborum omnis nobis eum mollitia facilis eum. Aut officiis aut autem temporibus. Tenetur error in placeat voluptatibus blanditiis.', 18, 1, 31789457, 15, 'csacsac', '2017-06-30 05:51:22', '2017-06-24 01:45:18'),
(4, 'Titulo', 'A impedit in corporis.', 'Dolorum unde aperiam debitis accusantium id et. Aliquam rem nemo quas voluptates qui. Temporibus ea quae quod nemo sed dolore. Nostrum et praesentium eveniet occaecati.', 24, 2, 14567834, 7, '', '2017-06-29 08:17:09', '2017-06-24 01:45:18'),
(5, 'Titulo', 'Error velit excepturi deleniti delectus cum quam sed.', 'Ab repellat magni eum ipsum voluptate. Voluptatum et est repellendus necessitatibus. Consequatur est accusantium atque aspernatur qui. Minus dolore cum sint a amet omnis.', 26, 4, 36013877, 3, '', '2017-06-29 08:17:12', '2017-06-24 01:45:18'),
(6, 'Titulo', 'Quis laudantium enim modi molestiae enim aspernatur pariatur necessitatibus.', 'Sint perspiciatis sit perferendis nihil. Recusandae qui quia iusto rerum dolorem qui. Et necessitatibus asperiores et enim ut blanditiis nihil quia.', 18, 4, 20456732, 9, '', '2017-06-29 08:17:15', '2017-06-24 01:45:18'),
(7, '', 'Occaecati ea id quas esse molestiae.', 'Magni beatae voluptatem sit maiores et cupiditate consequatur. Et fugiat eveniet excepturi ullam fugiat sint. Illum a et voluptatem in corporis aut. In aspernatur tenetur aut molestiae cumque.', 9, 1, 28210268, 10, '', '2017-06-24 01:45:18', '2017-06-24 01:45:18'),
(8, '', 'Hic et debitis aspernatur eligendi reiciendis eum rerum.', 'Quaerat rem harum accusantium aliquid sint. Est a quis qui quaerat aut perspiciatis. Est perspiciatis atque cum laudantium tenetur doloremque. Atque culpa optio non velit cumque.', 5, 1, 20456732, 20, '', '2017-06-24 01:45:18', '2017-06-24 01:45:18'),
(9, '', 'Error dolores eum sit. Incidunt aliquid illo officia.', 'Iste nisi libero pariatur. Neque et id ut odit quasi. Voluptatem aut necessitatibus id et odio. Eos doloribus modi dolores eius labore maxime magni.', 24, 3, 28210268, 18, '', '2017-06-24 01:45:18', '2017-06-24 01:45:18'),
(10, '', 'Doloribus dicta officiis necessitatibus suscipit porro.', 'Magni cum et ut et non totam totam est. Qui nisi quam nihil quibusdam voluptatem totam nobis. Id molestiae et aut sint voluptatem et iste.', 15, 3, 28152998, 16, '', '2017-06-24 01:45:18', '2017-06-24 01:45:18'),
(11, '', 'Repudiandae illum dolores error at ea accusantium.', 'Consequatur quaerat ipsam labore quia fuga quis omnis. Cupiditate excepturi quae suscipit iste. Ipsam rerum optio est totam recusandae debitis excepturi maiores.', 27, 1, 26919051, 16, '', '2017-06-24 01:45:18', '2017-06-24 01:45:18'),
(12, '', 'Et at vel recusandae ut magni qui. Est dolor voluptate beatae laborum.', 'Totam tenetur omnis distinctio nostrum suscipit commodi. Voluptas enim maiores molestiae. Beatae quisquam impedit voluptas culpa.', 20, 3, 29578561, 3, '', '2017-06-24 01:45:18', '2017-06-24 01:45:18'),
(13, '', 'Excepturi officia repudiandae molestias.', 'Rerum pariatur expedita mollitia esse ullam explicabo odit laudantium. Qui hic velit qui et nihil. Vel est nemo est quasi nihil nam rerum eaque. Necessitatibus repellat sint doloribus enim.', 36, 4, 28176536, 6, '', '2017-06-24 01:45:18', '2017-06-24 01:45:18'),
(14, '', 'Eveniet veritatis rem dolores maxime repellat facere.', 'Ad numquam rem dolores quaerat officia et. Voluptatem aut distinctio accusantium molestiae fuga omnis. Perspiciatis minima tenetur rerum ut. Rem non consequuntur optio eius neque dicta voluptate.', 32, 3, 24567849, 25, '', '2017-06-24 01:45:18', '2017-06-24 01:45:18'),
(15, '', 'Doloribus similique dignissimos eum. Aliquam minus odio corporis delectus.', 'Et voluptatem minima dolorem assumenda laborum voluptatem beatae aut. Similique nulla aut dignissimos illum asperiores est impedit ea.', 7, 2, 28152998, 20, '', '2017-06-24 01:45:18', '2017-06-24 01:45:18'),
(16, '', 'Unde nihil aut velit et velit quia. Ut laudantium aliquid corrupti ea.', 'Veniam repellat non aspernatur aut. Aut eligendi suscipit dolores et. Blanditiis id in doloribus eligendi iste magnam quidem. Est ea veritatis possimus qui vel ad.', 19, 3, 31789457, 4, '', '2017-06-24 01:45:18', '2017-06-24 01:45:18'),
(17, '', 'Consequatur facere id et ipsam quasi vitae possimus.', 'Et nisi placeat aut perspiciatis quaerat dolor eum sint. Et eius tempore qui pariatur nisi. Repellendus ipsa necessitatibus atque ipsam veritatis aperiam. Dolore in qui quia dolorem blanditiis fuga in.', 20, 4, 20456732, 8, '', '2017-06-24 01:45:18', '2017-06-24 01:45:18'),
(18, '', 'Libero officiis asperiores est aut ex.', 'Repellat quae eum odio adipisci voluptas. Et nihil aut cum aliquam ab nulla ut. Ut eum dolore recusandae aut enim nostrum eligendi.', 18, 2, 36013877, 25, '', '2017-06-24 01:45:18', '2017-06-24 01:45:18'),
(19, '', 'Cumque ipsa reprehenderit provident aut.', 'Molestias sit dolorum reiciendis. Aut soluta omnis enim rerum labore. Recusandae dolorem facilis quibusdam odio at qui voluptate. Ea consequatur placeat sequi alias fugiat illum autem.', 18, 4, 29578561, 6, '', '2017-06-24 01:45:18', '2017-06-24 01:45:18'),
(20, '', 'Repudiandae beatae modi rerum deserunt facilis ullam et.', 'Qui impedit voluptatem alias numquam. Illum distinctio asperiores ducimus id. Saepe alias voluptatibus ipsa aut.', 39, 1, 33213897, 13, '', '2017-06-24 01:45:18', '2017-06-24 01:45:18'),
(21, '', 'Suscipit inventore fuga voluptas inventore optio. Autem quos totam libero.', 'Distinctio accusantium magni velit sit voluptates. Non eius ullam animi voluptatem nemo quasi. Reiciendis fugiat vitae non harum magni. Distinctio assumenda atque aliquam minima.', 33, 1, 34869444, 25, '', '2017-06-24 01:45:18', '2017-06-24 01:45:18'),
(22, '', 'Sint necessitatibus laudantium ullam veritatis doloribus recusandae et.', 'Pariatur illo natus sequi est possimus beatae. Aliquid impedit ut autem. Molestiae unde est autem voluptas animi consequatur ut. Numquam repudiandae fugiat quas nihil.', 12, 3, 36259443, 22, '', '2017-06-24 01:45:18', '2017-06-24 01:45:18'),
(23, '', 'Natus quo in magni aut.', 'Alias est est tempora officia. Quas consequatur similique laudantium assumenda voluptatem. Minus animi quasi corrupti cum accusamus amet. Praesentium perspiciatis dolor ut delectus error provident.', 33, 2, 27723208, 7, '', '2017-06-24 01:45:18', '2017-06-24 01:45:18'),
(24, '', 'Fugiat aut unde omnis cupiditate inventore placeat ea.', 'Facilis doloremque quis non nostrum facere accusantium. Nam vitae et ea dolorem voluptates nihil. Nobis et porro neque.\nRepellat sed exercitationem rerum facilis. Sunt earum molestiae pariatur. Placeat nemo sed impedit eligendi.', 21, 4, 26982512, 25, '', '2017-06-24 01:45:18', '2017-06-24 01:45:18'),
(25, '', 'Quo fugit modi recusandae illum odio.', 'Laboriosam animi mollitia et odit et voluptates. Deserunt fuga tempore fugiat dignissimos et sit vero. Ut eligendi quidem quis blanditiis et ad.', 3, 4, 31789457, 17, '', '2017-06-24 01:45:19', '2017-06-24 01:45:19'),
(26, '', 'Exercitationem rerum repellendus consequatur rerum suscipit ad dolor.', 'Dicta et dolores doloremque animi et aut deleniti. Rerum consectetur porro veniam dolores rerum at. Facilis aliquid est id eum sit. Maiores sequi est soluta voluptas laborum occaecati. Dolores necessitatibus quaerat aut officiis.', 33, 4, 24567849, 10, '', '2017-06-24 01:45:19', '2017-06-24 01:45:19'),
(27, '', 'Soluta molestiae rem aut vel harum.', 'Consectetur dolor voluptatem facilis minus aspernatur ut veritatis. Ducimus in a mollitia omnis quos hic. Porro blanditiis officiis asperiores dolores.', 1, 4, 14567834, 8, '', '2017-06-24 01:45:19', '2017-06-24 01:45:19'),
(28, '', 'Placeat consectetur sint beatae.', 'Magnam quae et saepe aut aut nihil aliquid. Est similique quo ducimus. Officia voluptatum blanditiis sed rerum ratione ut.', 10, 4, 33213897, 16, '', '2017-06-24 01:45:19', '2017-06-24 01:45:19'),
(29, '', 'Molestias omnis et earum animi.', 'Voluptatem amet asperiores qui et id. Aut architecto sit est omnis modi accusamus. Delectus sed quia est eos vel nisi impedit quidem. Sit quasi omnis similique deleniti iusto nihil sed deleniti.', 33, 2, 35246252, 21, '', '2017-06-24 01:45:19', '2017-06-24 01:45:19'),
(30, '', 'Eos libero accusamus dolores fugiat est praesentium rerum.', 'Hic nisi rerum quo ut. Sint optio possimus et adipisci accusantium vero ut. Voluptas consequuntur sit at molestiae voluptas sequi explicabo. Quod illum voluptas facilis et veritatis totam placeat culpa.', 7, 4, 32718449, 9, '', '2017-06-24 01:45:19', '2017-06-24 01:45:19'),
(31, '', 'Architecto et reprehenderit necessitatibus esse commodi.', 'Labore et quia sunt ipsum quia voluptatem ratione. Consectetur enim occaecati eum nisi molestiae ut ipsum quis. Aut ipsum ratione et facere.', 37, 1, 26031051, 2, '', '2017-06-24 01:45:19', '2017-06-24 01:45:19'),
(32, '', 'Quia debitis possimus deserunt quo quis dignissimos.', 'Exercitationem laboriosam omnis voluptatem enim architecto quisquam nemo. Sit dolores nihil qui facere. Eum eius harum corrupti cum placeat molestias quaerat.', 9, 4, 35246252, 15, '', '2017-06-24 01:45:19', '2017-06-24 01:45:19'),
(33, '', 'Et provident distinctio facere laboriosam totam eius.', 'Suscipit esse fugit et possimus quae sapiente sed. Qui et id minus magni et inventore aut. Impedit exercitationem ea iure sed aut pariatur.', 5, 1, 32267202, 6, '', '2017-06-24 01:45:19', '2017-06-24 01:45:19'),
(34, '', 'Sint voluptate ratione eligendi rem architecto odio impedit.', 'Itaque adipisci rerum fugiat voluptatum exercitationem non quia laboriosam. Qui sint sint enim tempore eum est est. Et deserunt est fugit sed ipsam voluptatibus. Nesciunt aut expedita quas ex aperiam.', 27, 2, 38353549, 18, '', '2017-06-24 01:45:19', '2017-06-24 01:45:19'),
(35, '', 'Impedit et libero recusandae ut nihil. Incidunt et minima corrupti et sed.', 'Voluptas sit ipsa quo unde corrupti. Magni at eveniet error fugiat est. Voluptatem a aut consequatur fuga incidunt enim alias.', 10, 4, 35246252, 4, '', '2017-06-24 01:45:19', '2017-06-24 01:45:19'),
(36, '', 'Unde quasi fugit quis sint et.', 'Enim delectus sint vel fugit iusto velit corrupti in. Cum similique amet rem veniam laboriosam aut. Dolor et necessitatibus nihil suscipit dolorem. Qui est deleniti qui ullam laudantium natus.', 16, 3, 32238237, 22, '', '2017-06-24 01:45:19', '2017-06-24 01:45:19'),
(37, '', 'Praesentium repellat facere natus quasi explicabo. Quae numquam rerum suscipit.', 'Quia doloremque vero sint. Sapiente in nobis et. Quia excepturi cumque et sit ipsam mollitia et. Unde omnis corrupti fugiat quis amet.\nTempora distinctio repellat vel non. Odio aut distinctio architecto tenetur aut.', 1, 1, 32238237, 20, '', '2017-06-24 01:45:19', '2017-06-24 01:45:19'),
(38, '', 'Molestias nostrum officia optio eligendi.', 'Ipsa quo ipsum quia soluta laudantium. Laboriosam odio perspiciatis sed sit nesciunt. Saepe sapiente laborum voluptas quia voluptatem consequuntur. Ullam beatae animi quibusdam cupiditate magnam repellendus similique.', 24, 3, 38989824, 13, '', '2017-06-24 01:45:19', '2017-06-24 01:45:19'),
(39, '', 'Cupiditate blanditiis deserunt quo dicta fugiat.', 'Error voluptatem rerum aut vero. Ipsam ut qui nisi et eum. Quo ducimus provident sunt tenetur consectetur dolor sit.', 14, 2, 28176536, 14, '', '2017-06-24 01:45:19', '2017-06-24 01:45:19'),
(40, '', 'Recusandae natus minus ut consequatur.', 'Ex eligendi beatae et est reprehenderit nam vitae. Et tenetur recusandae vel nihil. Odio qui voluptatem occaecati illo ut ab. Voluptatum magni soluta voluptatem harum rerum debitis.', 35, 2, 24567849, 21, '', '2017-06-24 01:45:19', '2017-06-24 01:45:19'),
(41, '', 'Qui id et sed dicta ut alias eum.', 'Voluptatum ut nam doloremque unde. Architecto omnis aut sapiente eos rerum in fugiat. Nesciunt sunt magnam et voluptas sunt.', 26, 3, 28210268, 4, '', '2017-06-24 01:45:19', '2017-06-24 01:45:19'),
(42, '', 'Ab sapiente id fuga. Omnis qui nobis similique quia.', 'Aliquid ea autem non aperiam totam. Esse exercitationem ipsum aut culpa accusantium facere deserunt. Iste dolore eligendi enim dolore at est aperiam.', 12, 1, 29578561, 22, '', '2017-06-24 01:45:19', '2017-06-24 01:45:19'),
(43, '', 'Vero aut quia in iusto. Quam aut sed maxime ut veniam neque quas deleniti.', 'Aut inventore eum rerum placeat et. Voluptas nostrum sit ad ipsa. Dicta ut perspiciatis nemo optio et voluptatum. Maxime magnam iusto sed quasi doloremque necessitatibus.', 25, 4, 34869444, 6, '', '2017-06-24 01:45:19', '2017-06-24 01:45:19'),
(44, '', 'Sit natus voluptas in aut quaerat sint optio.', 'Et ab voluptatem assumenda aut. Tempore quia vitae eum. Nulla voluptas quis aut et.', 32, 4, 26982512, 18, '', '2017-06-24 01:45:19', '2017-06-24 01:45:19'),
(45, '', 'Voluptatem voluptatem sunt ad rerum harum modi.', 'Nihil est occaecati corrupti alias omnis. Aspernatur sint a veniam. Voluptatibus ut laboriosam soluta. Quasi eveniet officiis recusandae.', 16, 4, 28210268, 6, '', '2017-06-24 01:45:19', '2017-06-24 01:45:19'),
(46, '', 'Qui ipsam excepturi tenetur sed alias perferendis et quo.', 'Sit enim assumenda non et adipisci et sapiente voluptates. Voluptatibus et corrupti enim assumenda aspernatur occaecati.', 30, 4, 32267202, 23, '', '2017-06-24 01:45:19', '2017-06-24 01:45:19'),
(47, '', 'Corrupti consequuntur vero deserunt sed placeat dolore ut.', 'Molestias sapiente perferendis id voluptatum. Est ratione voluptatibus iure et. Reprehenderit corporis voluptate id iusto optio. Dolorum in pariatur minus recusandae odit ea.', 14, 1, 25600951, 15, '', '2017-06-24 01:45:19', '2017-06-24 01:45:19'),
(48, '', 'Illo at dolorum consequatur. Odio possimus ad veritatis debitis eveniet.', 'Accusantium non nemo nemo nihil aliquid dolores. Rem ut repellendus nesciunt qui cupiditate. Voluptatem suscipit sed sed repellat. Qui ut nulla aperiam eum vero et.', 40, 4, 35246252, 6, '', '2017-06-24 01:45:19', '2017-06-24 01:45:19'),
(49, '', 'Natus dolorem dolor nemo molestias harum dolor.', 'Nobis soluta nam ad dignissimos eveniet. Libero voluptate quis iure suscipit saepe consequatur enim.', 3, 4, 27723208, 5, '', '2017-06-24 01:45:19', '2017-06-24 01:45:19'),
(50, '', 'Maxime odio cum maiores minus et ipsam.', 'Neque recusandae ullam distinctio ut repellat. Corrupti dolorum explicabo iste corrupti et sint totam.\nOdio velit nisi quibusdam saepe quidem et. Dolor sapiente quam ullam aut hic consequatur. Non quos est dolor.', 11, 1, 32238237, 6, '', '2017-06-24 01:45:19', '2017-06-24 01:45:19'),
(51, '', 'Accusantium magnam minima fugit a laudantium hic.', 'Praesentium sit quae ea quia maxime eligendi laboriosam. Qui nemo aut odit impedit. Eveniet consequatur cupiditate est qui expedita dolores. Inventore recusandae magni maiores.', 31, 1, 26310659, 14, '', '2017-06-24 01:46:52', '2017-06-24 01:46:52'),
(52, '', 'Et quae omnis quibusdam amet vitae est omnis.', 'Provident id iste facere consequatur perspiciatis exercitationem. Reprehenderit non fugit et et non.', 14, 2, 38146895, 14, '', '2017-06-24 01:46:52', '2017-06-24 01:46:52'),
(53, '', 'Tenetur fugiat nulla ipsa facilis numquam eum odio.', 'Est similique consequatur quis eum. Numquam itaque molestiae reiciendis voluptatem quas et. Laborum porro voluptatibus alias asperiores assumenda nostrum. Dolor molestiae odit quasi.', 1, 3, 27585342, 19, '', '2017-06-24 01:46:52', '2017-06-24 01:46:52'),
(54, '', 'Totam quasi beatae sequi voluptas at dolor et praesentium.', 'Consequatur quas quasi alias velit at omnis. Asperiores incidunt magni enim.\nAut ut rerum assumenda quam nulla ut. Commodi quas unde id est eos. Nesciunt et sint qui. Amet magni adipisci velit quis labore.', 7, 3, 33252721, 13, '', '2017-06-24 01:46:52', '2017-06-24 01:46:52'),
(55, '', 'Doloribus nobis cum deleniti animi alias.', 'Sint doloribus dolores id rerum et dolore delectus. Tenetur animi nemo fugiat est dolorum. Est pariatur voluptatum nihil magnam fuga. Quasi et dolorem iure dolor.', 34, 1, 38146895, 3, '', '2017-06-24 01:46:52', '2017-06-24 01:46:52'),
(56, '', 'Consectetur ullam assumenda provident ut debitis labore eos incidunt.', 'Omnis inventore maiores non cumque soluta assumenda. Ea architecto iure vero eum qui amet. Asperiores et voluptates voluptates minima.', 12, 1, 36668518, 8, '', '2017-06-24 01:46:52', '2017-06-24 01:46:52'),
(57, '', 'Laboriosam adipisci accusantium magni assumenda ab et aut.', 'Occaecati expedita nisi possimus quia est. Illum dolor ducimus fugiat et voluptatem aut voluptatem. Hic sunt error eum aliquid. Laborum soluta voluptatibus ut aliquam dolor et eos.', 39, 3, 34996571, 14, '', '2017-06-24 01:46:52', '2017-06-24 01:46:52'),
(58, '', 'Quidem doloribus et quo corrupti rerum rerum. Dolore possimus amet deserunt.', 'Eos dolores consectetur eos ratione consectetur. Quisquam et et voluptas ut et occaecati. Corporis et explicabo error animi temporibus. Quia quia qui animi officia.', 29, 1, 38467797, 2, '', '2017-06-24 01:46:52', '2017-06-24 01:46:52'),
(59, '', 'Ducimus et pariatur incidunt vel fuga. Est modi ut atque.', 'Nihil tempora reprehenderit et dolor corporis. Libero sunt odit beatae quia repellat ipsam. Architecto cupiditate quidem quaerat libero ratione. In architecto aliquam est.', 19, 2, 33252721, 9, '', '2017-06-24 01:46:52', '2017-06-24 01:46:52'),
(60, '', 'Possimus necessitatibus voluptas recusandae cupiditate.', 'Sunt sit voluptas provident. Laudantium pariatur optio rerum sit adipisci. Repellat eos perspiciatis quia debitis iste. Id similique accusantium et nisi laboriosam quod ipsum. Sed voluptate est voluptatem consequatur facilis.', 35, 1, 36668518, 23, '', '2017-06-24 01:46:52', '2017-06-24 01:46:52'),
(61, '', 'Occaecati hic ad vero doloribus. Ex aut ut tenetur similique.', 'Et quae maiores incidunt laudantium praesentium qui doloremque. Quidem soluta ipsam eius veniam temporibus nesciunt ab. Est perferendis dolor facilis ut. Tenetur eos qui ut in.', 2, 1, 31462260, 8, '', '2017-06-24 01:46:52', '2017-06-24 01:46:52'),
(62, '', 'Soluta a velit vero ut quidem ex vel. Sapiente ut perspiciatis sit sit est.', 'Qui ab minus facere quos tempora omnis nesciunt. Qui sit cumque quia rerum.', 33, 4, 10580881, 11, '', '2017-06-24 01:46:52', '2017-06-24 01:46:52'),
(63, '', 'A voluptas voluptate suscipit aliquam eligendi.', 'Quas nobis perspiciatis porro placeat omnis laboriosam. Voluptatem quaerat nihil aliquid fuga. Omnis ut tempore necessitatibus qui. Fugit natus deleniti expedita vitae iste. Aut veniam rerum quidem et ut facere.', 2, 1, 28249639, 17, '', '2017-06-24 01:46:52', '2017-06-24 01:46:52'),
(64, '', 'Quidem mollitia deserunt harum quia.', 'Est accusantium molestiae neque. Porro vitae modi incidunt. Esse doloribus voluptate dolor. Nulla nemo autem repudiandae aliquid in aliquid illo magnam.', 13, 2, 35888974, 15, '', '2017-06-24 01:46:52', '2017-06-24 01:46:52'),
(65, '', 'Sed amet quia fuga omnis aut et. Accusamus dolor nisi qui quaerat harum totam.', 'Perferendis omnis numquam ipsum doloribus exercitationem. Beatae dicta sunt voluptatem qui accusamus sapiente aspernatur. Similique voluptatem sint nobis provident.', 35, 3, 34246240, 25, '', '2017-06-24 01:46:52', '2017-06-24 01:46:52'),
(66, '', 'Nihil culpa et eius molestiae optio voluptas distinctio non.', 'Ab doloremque repellendus ullam. Rerum illum est qui in atque sit repudiandae. Rerum non distinctio ut ex aspernatur unde. Commodi fuga velit a commodi provident voluptate nihil.', 23, 1, 33247459, 10, '', '2017-06-24 01:46:52', '2017-06-24 01:46:52'),
(67, '', 'Similique et consequatur qui facilis odit nemo atque.', 'Molestias possimus eos minima dolorem natus voluptas. Voluptatem dolores libero modi voluptatem. Autem molestiae fugiat rerum quae nostrum nostrum.', 32, 2, 36564793, 7, '', '2017-06-24 01:46:52', '2017-06-24 01:46:52'),
(68, '', 'Dolor incidunt delectus qui ea et minus. Dolor aut et asperiores est cumque.', 'Deleniti magni quia voluptatem aut temporibus voluptatem. Ea ipsam sed non ullam reprehenderit dignissimos omnis magnam. Placeat eaque atque in ut rerum.', 35, 3, 28249639, 17, '', '2017-06-24 01:46:52', '2017-06-24 01:46:52'),
(69, '', 'Quae dolorum doloribus iusto. Commodi explicabo voluptatem sit.', 'Maxime corrupti nam qui beatae neque id. Et est perspiciatis dolore repellendus dolor est. Aut facilis corrupti in quam ullam et. Eaque tempora doloribus dolorem tempora rerum quia eligendi.', 4, 3, 36668518, 20, '', '2017-06-24 01:46:53', '2017-06-24 01:46:53'),
(70, '', 'Beatae iusto aut repellat repudiandae earum sit quia.', 'Nihil reprehenderit assumenda fugit quo maiores sit voluptates. Et qui culpa accusamus est autem occaecati voluptas totam.', 11, 2, 34996571, 12, '', '2017-06-24 01:46:53', '2017-06-24 01:46:53'),
(71, '', 'Voluptas repellat rerum rerum dicta sed dolor.', 'Voluptatum odit tenetur ut amet modi molestias architecto. Necessitatibus aperiam velit atque et nam.\nUt tempore qui et dolor. Aut error tempore dolor. Numquam delectus nulla magnam voluptatum maxime eius similique.', 12, 4, 36773726, 23, '', '2017-06-24 01:46:53', '2017-06-24 01:46:53'),
(72, '', 'Minus quo ut voluptatum amet. Quia qui sed omnis laudantium.', 'Commodi et qui magni est accusantium sit. Reiciendis ipsa nisi maxime aut sint omnis cupiditate odio. Voluptates quia fugit minima omnis quia quidem.', 25, 2, 25616127, 2, '', '2017-06-24 01:46:53', '2017-06-24 01:46:53'),
(73, '', 'Asperiores natus voluptatibus facilis non est. Error dicta aut qui vero nobis.', 'Voluptatem totam minima autem sunt doloremque atque. Ullam occaecati deleniti molestiae. Consequatur voluptatem neque architecto quia dolores.', 26, 2, 36773726, 2, '', '2017-06-24 01:46:53', '2017-06-24 01:46:53'),
(74, '', 'Iste quam dicta error fuga laboriosam.', 'Aut consequuntur ipsa velit est corporis molestias dolorum. Sit commodi veritatis quia adipisci blanditiis necessitatibus. Molestiae dolor est amet autem aspernatur illo. Quo ex dolores quidem possimus asperiores molestias quas.', 38, 4, 33173727, 15, '', '2017-06-24 01:46:53', '2017-06-24 01:46:53'),
(75, '', 'Quis aperiam atque maxime aut eligendi.', 'Ut atque animi quod accusantium earum voluptatibus cumque. Ab ea dolorem ratione voluptatem. Et mollitia aperiam asperiores enim nesciunt. Id harum quia non.', 13, 2, 33247459, 17, '', '2017-06-24 01:46:53', '2017-06-24 01:46:53'),
(76, '', 'Ratione ullam minus consequatur quaerat asperiores omnis provident.', 'Sint repellendus dolores voluptates sed nihil laboriosam recusandae consequuntur. Commodi eum quia inventore cupiditate dolores rerum. Et qui placeat fuga praesentium vel.', 33, 1, 33247459, 4, '', '2017-06-24 01:46:53', '2017-06-24 01:46:53'),
(77, '', 'Asperiores possimus neque est et incidunt. Error qui dolores perferendis.', 'Odit et ut enim. Enim nulla enim sunt commodi quo. Commodi quo neque autem quasi eligendi voluptatem libero ad. Totam assumenda veniam ut molestias omnis facere.', 27, 1, 30266025, 10, '', '2017-06-24 01:46:53', '2017-06-24 01:46:53'),
(78, '', 'Porro tempore et quis inventore ea soluta. Est et harum quidem est sint est.', 'Amet molestiae nihil dolorem quisquam et deserunt. At aut saepe rerum deserunt aut non. Voluptas libero est culpa omnis. Nisi non est illum dolorem deserunt in.', 3, 4, 38581317, 18, '', '2017-06-24 01:46:53', '2017-06-24 01:46:53'),
(79, '', 'Voluptas accusamus ipsa quia recusandae quas.', 'Quaerat provident velit minima aut. Occaecati ratione velit perferendis debitis accusamus omnis. Rerum qui deserunt aspernatur optio nobis natus eum.', 15, 2, 37797071, 15, '', '2017-06-24 01:46:53', '2017-06-24 01:46:53'),
(80, '', 'Officiis veritatis harum ullam veritatis incidunt vel.', 'Autem nesciunt mollitia totam et. Vel impedit itaque sit ea voluptatibus. Unde accusantium labore expedita odit vero. Molestiae sunt molestiae repellat veniam quasi.', 12, 1, 36295193, 1, '', '2017-06-24 01:46:53', '2017-06-24 01:46:53'),
(81, '', 'Non ea eos est architecto. Harum et error error laboriosam.', 'Qui saepe molestias soluta. Iure vel nostrum voluptatem aut est deserunt consequatur et. Corporis est deserunt beatae qui.\nRerum explicabo voluptate eligendi eaque. Sit sit eveniet architecto quia vitae perferendis.', 13, 1, 25616127, 11, '', '2017-06-24 01:46:53', '2017-06-24 01:46:53'),
(82, '', 'Voluptatem sit quam ut cum maxime.', 'Quidem quaerat qui omnis ut. Corporis vel possimus quo suscipit. Maiores nam voluptatem molestiae doloribus. Dolorem molestiae sunt nam expedita.', 29, 1, 28249639, 24, '', '2017-06-24 01:46:53', '2017-06-24 01:46:53'),
(83, '', 'Sunt qui accusamus in non ad dolorem est.', 'Nam ut similique expedita consequuntur nisi ea. Perspiciatis dicta nam iure aut et. Veniam aut tenetur est non optio ut est. Ratione quia soluta ducimus earum in ipsa.', 36, 3, 34088611, 24, '', '2017-06-24 01:46:53', '2017-06-24 01:46:53'),
(84, '', 'Sit laboriosam maxime aut odio similique pariatur expedita.', 'Delectus aliquam in voluptate perferendis et omnis est qui. Qui necessitatibus earum illo in voluptatem est velit. Labore atque accusamus culpa fugiat.', 7, 1, 38146895, 4, '', '2017-06-24 01:46:53', '2017-06-24 01:46:53'),
(85, '', 'Maiores ea nostrum similique animi.', 'Et tenetur saepe doloribus ut qui. Sequi libero doloribus libero rerum assumenda. Qui hic necessitatibus eum incidunt molestias labore numquam. Rerum eligendi rerum vitae quis incidunt consequatur.', 19, 3, 34088611, 7, '', '2017-06-24 01:46:53', '2017-06-24 01:46:53'),
(86, '', 'Nostrum aliquid et commodi maiores et tempore.', 'Veritatis et maiores excepturi cum. Voluptates eum voluptatem eaque id et recusandae. Repellendus porro maxime facere error.', 37, 2, 37393168, 18, '', '2017-06-24 01:46:53', '2017-06-24 01:46:53'),
(87, '', 'Amet voluptatem soluta modi id nihil minima autem amet.', 'Magni perferendis consequuntur at nemo ratione. Nemo cumque sunt aut temporibus nemo numquam. A voluptas ipsum eos rerum mollitia.', 28, 2, 36668518, 7, '', '2017-06-24 01:46:53', '2017-06-24 01:46:53'),
(88, '', 'Voluptatem vero et sed in veniam voluptatem dolorum omnis.', 'Architecto voluptate perferendis perspiciatis. Amet maiores optio ut rem. Voluptatem voluptatem nesciunt distinctio labore. Quibusdam blanditiis itaque modi consequuntur nulla qui. Nam quam cum porro minima non voluptatem aperiam.', 31, 2, 37393168, 21, '', '2017-06-24 01:46:53', '2017-06-24 01:46:53'),
(89, '', 'Rerum earum quam voluptatum porro rerum dolores voluptas.', 'Voluptatem consectetur quod sunt et nam quas. Similique est est enim itaque ut non. Cupiditate et recusandae quas ut iusto. Et veniam harum rem qui unde quisquam nulla.', 39, 3, 36773726, 4, '', '2017-06-24 01:46:53', '2017-06-24 01:46:53'),
(90, '', 'Ut porro omnis dolor cupiditate pariatur similique eos.', 'Ea recusandae voluptatem neque esse. Alias eos voluptatum est aut. Quia nostrum quisquam dolorum aut. Ab cum qui placeat ipsa autem beatae culpa.', 12, 1, 33173727, 3, '', '2017-06-24 01:46:53', '2017-06-24 01:46:53'),
(91, '', 'Exercitationem accusamus commodi repellendus tenetur iure quae.', 'Et accusantium consequuntur voluptatem doloremque quisquam dolorum. Corrupti facere sed dolorem aut et nostrum perspiciatis. Nesciunt omnis laboriosam quibusdam laborum sed.', 16, 3, 34246240, 23, '', '2017-06-24 01:46:53', '2017-06-24 01:46:53'),
(92, '', 'Omnis optio eaque possimus dolor. Unde id illo omnis qui.', 'Et quasi qui adipisci non aut. Est ut repellat voluptatem velit vel eos. Aut explicabo ex dolore asperiores id.', 15, 2, 35888974, 19, '', '2017-06-24 01:46:53', '2017-06-24 01:46:53'),
(93, '', 'Est possimus inventore expedita possimus fuga.', 'Aperiam excepturi aut et nostrum voluptatum delectus deserunt. Sit dignissimos dolorem repellendus enim. A omnis debitis itaque voluptate. Sit eaque corporis voluptates natus laboriosam qui dignissimos in.', 13, 1, 34996571, 18, '', '2017-06-24 01:46:53', '2017-06-24 01:46:53'),
(94, '', 'Quam vel cum voluptate sunt. Possimus voluptatem ex eligendi vitae.', 'Cum molestiae dolore ullam et. Pariatur quas quas est dolorum est. Vero rerum quas ex nihil voluptatem magnam.', 14, 4, 30709798, 16, '', '2017-06-24 01:46:53', '2017-06-24 01:46:53'),
(95, '', 'Repudiandae non est alias aut non labore magni ut.', 'Iusto tempora sint enim quas ratione non. Perspiciatis aliquid aliquam molestiae enim molestias maiores nisi numquam. Consequatur ea et ea praesentium nam. Inventore ducimus voluptas aut quibusdam voluptas.', 32, 1, 38467797, 8, '', '2017-06-24 01:46:53', '2017-06-24 01:46:53'),
(96, '', 'Qui soluta sed ab porro sequi expedita.', 'Nulla beatae occaecati ratione at et et illum. Eos facere amet tempora quam. Possimus ut omnis et dicta est.', 16, 1, 38467797, 5, '', '2017-06-24 01:46:53', '2017-06-24 01:46:53'),
(97, '', 'Nihil corporis autem aliquam et voluptas minus laboriosam.', 'Deleniti ullam quia ullam aliquid. Et quae mollitia at qui earum qui et. Sed sit eum id veniam sint sit alias. Itaque explicabo eveniet quia praesentium voluptas.', 13, 3, 36295193, 22, '', '2017-06-24 01:46:53', '2017-06-24 01:46:53'),
(98, '', 'Et ut modi itaque ab eaque. Ab incidunt molestiae qui sed repellendus eum.', 'Facilis vitae necessitatibus molestias amet sunt. Odit et et nisi rerum doloribus earum eveniet.\nIpsa unde consectetur aut. Nihil ipsa quia dolores architecto. Harum dolorem nesciunt et incidunt quasi.', 7, 4, 30709798, 21, '', '2017-06-24 01:46:53', '2017-06-24 01:46:53'),
(99, '', 'Eum omnis ut accusantium vel hic dolor est iste.', 'Ullam ut porro sit vel culpa. Excepturi quia qui omnis enim optio molestiae. Quidem placeat culpa tenetur est sint.\nQuidem molestias nisi quis recusandae. Impedit nihil temporibus hic atque.', 12, 3, 34246240, 14, '', '2017-06-24 01:46:53', '2017-06-24 01:46:53'),
(100, '', 'Rerum dicta eius non suscipit sed et qui.', 'Eum temporibus veritatis dolores. Dolorem provident reiciendis consequuntur qui dolor rerum. Sint aliquid velit quibusdam quia eos et. Sit est asperiores suscipit.', 22, 1, 33247459, 6, '', '2017-06-24 01:46:53', '2017-06-24 01:46:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `messages_types`
--

CREATE TABLE `messages_types` (
  `id` int(20) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `es_general?` tinyint(1) NOT NULL,
  `requiere_firma?` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `messages_types`
--

INSERT INTO `messages_types` (`id`, `tipo`, `es_general?`, `requiere_firma?`) VALUES
(1, 'General', 1, 0),
(2, 'Permiso', 1, 1),
(3, 'Mensaje privado', 0, 1),
(4, 'Citatorio', 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `message_recipient`
--

CREATE TABLE `message_recipient` (
  `id` int(20) NOT NULL,
  `mensaje_id` int(20) NOT NULL,
  `recibe_dni` int(20) NOT NULL,
  `fue_leido` tinyint(1) NOT NULL DEFAULT '0',
  `fue_firmado` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `message_recipient`
--

INSERT INTO `message_recipient` (`id`, `mensaje_id`, `recibe_dni`, `fue_leido`, `fue_firmado`, `created_at`, `updated_at`) VALUES
(1, 61, 33252721, 0, 0, '2017-06-24 02:27:28', '2017-06-24 02:27:28'),
(2, 54, 34996571, 1, 0, '2017-06-24 02:27:28', '2017-06-24 02:27:28'),
(3, 17, 32704909, 1, 1, '2017-06-24 02:27:29', '2017-06-24 02:27:29'),
(4, 41, 33252721, 0, 1, '2017-06-24 02:27:29', '2017-06-24 02:27:29'),
(5, 48, 27581130, 0, 0, '2017-06-24 02:27:29', '2017-06-24 02:27:29'),
(6, 52, 37961840, 0, 1, '2017-06-24 02:27:29', '2017-06-24 02:27:29'),
(7, 5, 25616127, 1, 1, '2017-06-24 02:27:29', '2017-06-24 02:27:29'),
(8, 60, 26310659, 0, 1, '2017-06-24 02:27:29', '2017-06-24 02:27:29'),
(9, 40, 36564793, 0, 1, '2017-06-24 02:27:29', '2017-06-24 02:27:29'),
(10, 5, 38581317, 1, 1, '2017-06-24 02:27:29', '2017-06-24 02:27:29'),
(11, 21, 28249639, 1, 1, '2017-06-24 02:27:29', '2017-06-24 02:27:29'),
(12, 70, 27581130, 1, 1, '2017-06-24 02:27:29', '2017-06-24 02:27:29'),
(13, 40, 38467797, 1, 0, '2017-06-24 02:27:29', '2017-06-24 02:27:29'),
(14, 5, 38467797, 1, 1, '2017-06-24 02:27:29', '2017-06-24 02:27:29'),
(15, 79, 10580881, 1, 0, '2017-06-24 02:27:29', '2017-06-24 02:27:29'),
(16, 24, 33473119, 1, 1, '2017-06-24 02:27:29', '2017-06-24 02:27:29'),
(17, 54, 36390173, 1, 1, '2017-06-24 02:27:29', '2017-06-24 02:27:29'),
(18, 13, 30266025, 0, 0, '2017-06-24 02:27:29', '2017-06-24 02:27:29'),
(19, 74, 37393168, 0, 1, '2017-06-24 02:27:29', '2017-06-24 02:27:29'),
(20, 29, 33769925, 0, 1, '2017-06-24 02:27:29', '2017-06-24 02:27:29'),
(21, 4, 33769925, 1, 1, '2017-06-24 02:27:29', '2017-06-24 02:27:29'),
(22, 38, 37797071, 0, 1, '2017-06-24 02:27:29', '2017-06-24 02:27:29'),
(23, 52, 31462260, 0, 1, '2017-06-24 02:27:29', '2017-06-24 02:27:29'),
(24, 17, 27581130, 0, 1, '2017-06-24 02:27:29', '2017-06-24 02:27:29'),
(25, 44, 37393168, 1, 0, '2017-06-24 02:27:29', '2017-06-24 02:27:29'),
(26, 22, 28249639, 1, 0, '2017-06-24 02:27:29', '2017-06-24 02:27:29'),
(27, 68, 38467797, 0, 1, '2017-06-24 02:27:30', '2017-06-24 02:27:30'),
(28, 70, 25616127, 1, 0, '2017-06-24 02:27:30', '2017-06-24 02:27:30'),
(29, 31, 10580881, 0, 1, '2017-06-24 02:27:30', '2017-06-24 02:27:30'),
(30, 7, 36564793, 0, 0, '2017-06-24 02:27:30', '2017-06-24 02:27:30'),
(31, 36, 34088611, 0, 0, '2017-06-24 02:27:30', '2017-06-24 02:27:30'),
(32, 69, 33173727, 1, 1, '2017-06-24 02:27:30', '2017-06-24 02:27:30'),
(33, 71, 36390173, 1, 1, '2017-06-24 02:27:30', '2017-06-24 02:27:30'),
(34, 51, 33769925, 0, 0, '2017-06-24 02:27:30', '2017-06-24 02:27:30'),
(35, 43, 35888974, 1, 0, '2017-06-24 02:27:30', '2017-06-24 02:27:30'),
(36, 38, 10580881, 0, 0, '2017-06-24 02:27:30', '2017-06-24 02:27:30'),
(37, 30, 36564793, 1, 1, '2017-06-24 02:27:30', '2017-06-24 02:27:30'),
(38, 79, 38146895, 1, 1, '2017-06-24 02:27:30', '2017-06-24 02:27:30'),
(39, 19, 35888974, 1, 0, '2017-06-24 02:27:30', '2017-06-24 02:27:30'),
(40, 37, 26310659, 0, 0, '2017-06-24 02:27:30', '2017-06-24 02:27:30'),
(41, 45, 30725613, 1, 0, '2017-06-24 02:27:30', '2017-06-24 02:27:30'),
(42, 39, 33173727, 1, 1, '2017-06-24 02:27:30', '2017-06-24 02:27:30'),
(43, 55, 30709798, 0, 0, '2017-06-24 02:27:30', '2017-06-24 02:27:30'),
(44, 1, 10580881, 1, 1, '2017-06-24 02:27:30', '2017-06-24 02:27:30'),
(45, 48, 25616127, 1, 0, '2017-06-24 02:27:30', '2017-06-24 02:27:30'),
(46, 35, 26310659, 0, 0, '2017-06-24 02:27:30', '2017-06-24 02:27:30'),
(47, 41, 34246240, 0, 1, '2017-06-24 02:27:30', '2017-06-24 02:27:30'),
(48, 55, 10580881, 0, 1, '2017-06-24 02:27:30', '2017-06-24 02:27:30'),
(49, 3, 37961840, 1, 1, '2017-06-24 02:27:30', '2017-06-24 02:27:30'),
(50, 77, 26310659, 1, 1, '2017-06-24 02:27:30', '2017-06-24 02:27:30'),
(51, 28, 33247459, 0, 0, '2017-06-24 02:27:30', '2017-06-24 02:27:30'),
(52, 52, 37961840, 0, 1, '2017-06-24 02:27:30', '2017-06-24 02:27:30'),
(53, 5, 35888974, 1, 0, '2017-06-24 02:27:31', '2017-06-24 02:27:31'),
(54, 17, 38581317, 0, 1, '2017-06-24 02:27:31', '2017-06-24 02:27:31'),
(55, 78, 37393168, 1, 0, '2017-06-24 02:27:31', '2017-06-24 02:27:31'),
(56, 61, 36295193, 0, 0, '2017-06-24 02:27:31', '2017-06-24 02:27:31'),
(57, 73, 30266025, 1, 0, '2017-06-24 02:27:31', '2017-06-24 02:27:31'),
(58, 52, 34088611, 1, 1, '2017-06-24 02:27:31', '2017-06-24 02:27:31'),
(59, 10, 34088611, 1, 1, '2017-06-24 02:27:31', '2017-06-24 02:27:31'),
(60, 8, 33247459, 1, 0, '2017-06-24 02:27:31', '2017-06-24 02:27:31'),
(61, 10, 26310659, 0, 1, '2017-06-24 02:27:31', '2017-06-24 02:27:31'),
(62, 53, 37393168, 1, 0, '2017-06-24 02:27:31', '2017-06-24 02:27:31'),
(63, 56, 33173727, 1, 0, '2017-06-24 02:27:31', '2017-06-24 02:27:31'),
(64, 64, 30266025, 1, 1, '2017-06-24 02:27:31', '2017-06-24 02:27:31'),
(65, 16, 35888974, 0, 1, '2017-06-24 02:27:31', '2017-06-24 02:27:31'),
(66, 38, 30725613, 0, 1, '2017-06-24 02:27:31', '2017-06-24 02:27:31'),
(67, 52, 34088611, 1, 1, '2017-06-24 02:27:31', '2017-06-24 02:27:31'),
(68, 49, 34088611, 0, 1, '2017-06-24 02:27:31', '2017-06-24 02:27:31'),
(69, 19, 27585342, 0, 1, '2017-06-24 02:27:31', '2017-06-24 02:27:31'),
(70, 10, 30709798, 1, 1, '2017-06-24 02:27:31', '2017-06-24 02:27:31'),
(71, 34, 38581317, 1, 0, '2017-06-24 02:27:31', '2017-06-24 02:27:31'),
(72, 75, 31462260, 1, 1, '2017-06-24 02:27:31', '2017-06-24 02:27:31'),
(73, 14, 37797071, 0, 0, '2017-06-24 02:27:31', '2017-06-24 02:27:31'),
(74, 25, 36668518, 0, 0, '2017-06-24 02:27:31', '2017-06-24 02:27:31'),
(75, 53, 10580881, 1, 0, '2017-06-24 02:27:31', '2017-06-24 02:27:31'),
(76, 40, 25616127, 0, 0, '2017-06-24 02:27:31', '2017-06-24 02:27:31'),
(77, 49, 33769925, 0, 1, '2017-06-24 02:27:31', '2017-06-24 02:27:31'),
(78, 67, 37393168, 0, 1, '2017-06-24 02:27:32', '2017-06-24 02:27:32'),
(79, 59, 10580881, 1, 1, '2017-06-24 02:27:32', '2017-06-24 02:27:32'),
(80, 42, 33247459, 1, 0, '2017-06-24 02:27:32', '2017-06-24 02:27:32'),
(81, 25, 31462260, 0, 0, '2017-06-24 02:27:32', '2017-06-24 02:27:32'),
(82, 43, 38146895, 0, 0, '2017-06-24 02:27:32', '2017-06-24 02:27:32'),
(83, 32, 27585342, 1, 1, '2017-06-24 02:27:32', '2017-06-24 02:27:32'),
(84, 31, 36564793, 0, 0, '2017-06-24 02:27:32', '2017-06-24 02:27:32'),
(85, 56, 32704909, 0, 0, '2017-06-24 02:27:32', '2017-06-24 02:27:32'),
(86, 4, 33247459, 0, 1, '2017-06-24 02:27:32', '2017-06-24 02:27:32'),
(87, 67, 38467797, 1, 1, '2017-06-24 02:27:32', '2017-06-24 02:27:32'),
(88, 30, 37797071, 1, 1, '2017-06-24 02:27:32', '2017-06-24 02:27:32'),
(89, 53, 36668518, 1, 1, '2017-06-24 02:27:32', '2017-06-24 02:27:32'),
(90, 51, 30725613, 0, 1, '2017-06-24 02:27:32', '2017-06-24 02:27:32'),
(91, 67, 36668518, 1, 1, '2017-06-24 02:27:32', '2017-06-24 02:27:32'),
(92, 74, 26310659, 1, 0, '2017-06-24 02:27:32', '2017-06-24 02:27:32'),
(93, 68, 36390173, 0, 0, '2017-06-24 02:27:32', '2017-06-24 02:27:32'),
(94, 18, 35888974, 1, 1, '2017-06-24 02:27:32', '2017-06-24 02:27:32'),
(95, 56, 33252721, 1, 1, '2017-06-24 02:27:32', '2017-06-24 02:27:32'),
(96, 15, 34996571, 0, 1, '2017-06-24 02:27:32', '2017-06-24 02:27:32'),
(97, 65, 36564793, 0, 0, '2017-06-24 02:27:32', '2017-06-24 02:27:32'),
(98, 71, 34246240, 0, 0, '2017-06-24 02:27:32', '2017-06-24 02:27:32'),
(99, 24, 10580881, 1, 0, '2017-06-24 02:27:32', '2017-06-24 02:27:32'),
(100, 16, 26310659, 1, 0, '2017-06-24 02:27:32', '2017-06-24 02:27:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_06_16_125554_create_courses_table', 0),
(4, '2017_06_16_125554_create_evaluations_table', 0),
(5, '2017_06_16_125554_create_messages_table', 0),
(6, '2017_06_16_125554_create_messages_types_table', 0),
(7, '2017_06_16_125554_create_parent_message_table', 0),
(8, '2017_06_16_125554_create_parents_table', 0),
(9, '2017_06_16_125554_create_password_resets_table', 0),
(10, '2017_06_16_125554_create_permissions_table', 0),
(11, '2017_06_16_125554_create_role_permission_table', 0),
(12, '2017_06_16_125554_create_roles_table', 0),
(13, '2017_06_16_125554_create_schedules_table', 0),
(14, '2017_06_16_125554_create_school_staff_table', 0),
(15, '2017_06_16_125554_create_schools_table', 0),
(16, '2017_06_16_125554_create_security_administrators_table', 0),
(17, '2017_06_16_125554_create_staff_role_table', 0),
(18, '2017_06_16_125554_create_staff_school_courses_table', 0),
(19, '2017_06_16_125554_create_student_course_subject_table', 0),
(20, '2017_06_16_125554_create_student_evaluation_table', 0),
(21, '2017_06_16_125554_create_student_message_table', 0),
(22, '2017_06_16_125554_create_student_parent_table', 0),
(23, '2017_06_16_125554_create_students_table', 0),
(24, '2017_06_16_125554_create_subjects_table', 0),
(25, '2017_06_16_125554_create_users_table', 0),
(26, '2017_06_16_125559_add_foreign_keys_to_courses_table', 0),
(27, '2017_06_16_125559_add_foreign_keys_to_evaluations_table', 0),
(28, '2017_06_16_125559_add_foreign_keys_to_messages_table', 0),
(29, '2017_06_16_125559_add_foreign_keys_to_parent_message_table', 0),
(30, '2017_06_16_125559_add_foreign_keys_to_parents_table', 0),
(31, '2017_06_16_125559_add_foreign_keys_to_role_permission_table', 0),
(32, '2017_06_16_125559_add_foreign_keys_to_school_staff_table', 0),
(33, '2017_06_16_125559_add_foreign_keys_to_staff_role_table', 0),
(34, '2017_06_16_125559_add_foreign_keys_to_staff_school_courses_table', 0),
(35, '2017_06_16_125559_add_foreign_keys_to_student_course_subject_table', 0),
(36, '2017_06_16_125559_add_foreign_keys_to_student_evaluation_table', 0),
(37, '2017_06_16_125559_add_foreign_keys_to_student_message_table', 0),
(38, '2017_06_16_125559_add_foreign_keys_to_student_parent_table', 0),
(39, '2017_06_16_125559_add_foreign_keys_to_students_table', 0),
(40, '2017_06_16_125559_add_foreign_keys_to_subjects_table', 0),
(41, '2017_06_16_140957_create_courses_table', 0),
(42, '2017_06_16_140957_create_evaluations_table', 0),
(43, '2017_06_16_140957_create_messages_table', 0),
(44, '2017_06_16_140957_create_messages_types_table', 0),
(45, '2017_06_16_140957_create_parent_message_table', 0),
(46, '2017_06_16_140957_create_parents_table', 0),
(47, '2017_06_16_140957_create_password_resets_table', 0),
(48, '2017_06_16_140957_create_permissions_table', 0),
(49, '2017_06_16_140957_create_role_permission_table', 0),
(50, '2017_06_16_140957_create_roles_table', 0),
(51, '2017_06_16_140957_create_schedules_table', 0),
(52, '2017_06_16_140957_create_school_staff_table', 0),
(53, '2017_06_16_140957_create_schools_table', 0),
(54, '2017_06_16_140957_create_security_administrators_table', 0),
(55, '2017_06_16_140957_create_staff_role_table', 0),
(56, '2017_06_16_140957_create_staff_school_courses_table', 0),
(57, '2017_06_16_140957_create_student_course_subject_table', 0),
(58, '2017_06_16_140957_create_student_evaluation_table', 0),
(59, '2017_06_16_140957_create_student_message_table', 0),
(60, '2017_06_16_140957_create_student_parent_table', 0),
(61, '2017_06_16_140957_create_students_table', 0),
(62, '2017_06_16_140957_create_subjects_table', 0),
(63, '2017_06_16_140957_create_users_table', 0),
(64, '2017_06_16_141001_add_foreign_keys_to_courses_table', 0),
(65, '2017_06_16_141001_add_foreign_keys_to_evaluations_table', 0),
(66, '2017_06_16_141001_add_foreign_keys_to_messages_table', 0),
(67, '2017_06_16_141001_add_foreign_keys_to_parent_message_table', 0),
(68, '2017_06_16_141001_add_foreign_keys_to_parents_table', 0),
(69, '2017_06_16_141001_add_foreign_keys_to_role_permission_table', 0),
(70, '2017_06_16_141001_add_foreign_keys_to_school_staff_table', 0),
(71, '2017_06_16_141001_add_foreign_keys_to_staff_role_table', 0),
(72, '2017_06_16_141001_add_foreign_keys_to_staff_school_courses_table', 0),
(73, '2017_06_16_141001_add_foreign_keys_to_student_course_subject_table', 0),
(74, '2017_06_16_141001_add_foreign_keys_to_student_evaluation_table', 0),
(75, '2017_06_16_141001_add_foreign_keys_to_student_message_table', 0),
(76, '2017_06_16_141001_add_foreign_keys_to_student_parent_table', 0),
(77, '2017_06_16_141001_add_foreign_keys_to_students_table', 0),
(78, '2017_06_16_141001_add_foreign_keys_to_subjects_table', 0),
(79, '2017_06_23_004056_create_courses_table', 0),
(80, '2017_06_23_004056_create_evaluations_table', 0),
(81, '2017_06_23_004056_create_messages_table', 0),
(82, '2017_06_23_004056_create_messages_types_table', 0),
(83, '2017_06_23_004056_create_parent_message_table', 0),
(84, '2017_06_23_004056_create_parents_table', 0),
(85, '2017_06_23_004056_create_password_resets_table', 0),
(86, '2017_06_23_004056_create_permissions_table', 0),
(87, '2017_06_23_004056_create_role_permission_table', 0),
(88, '2017_06_23_004056_create_roles_table', 0),
(89, '2017_06_23_004056_create_schedules_table', 0),
(90, '2017_06_23_004056_create_school_staff_table', 0),
(91, '2017_06_23_004056_create_schools_table', 0),
(92, '2017_06_23_004056_create_security_admins_table', 0),
(93, '2017_06_23_004056_create_staff_role_table', 0),
(94, '2017_06_23_004056_create_staff_school_courses_table', 0),
(95, '2017_06_23_004056_create_student_course_subject_table', 0),
(96, '2017_06_23_004056_create_student_evaluation_table', 0),
(97, '2017_06_23_004056_create_student_message_table', 0),
(98, '2017_06_23_004056_create_student_parent_table', 0),
(99, '2017_06_23_004056_create_students_table', 0),
(100, '2017_06_23_004056_create_subjects_table', 0),
(101, '2017_06_23_004056_create_users_table', 0),
(102, '2017_06_23_004100_add_foreign_keys_to_courses_table', 0),
(103, '2017_06_23_004100_add_foreign_keys_to_evaluations_table', 0),
(104, '2017_06_23_004100_add_foreign_keys_to_messages_table', 0),
(105, '2017_06_23_004100_add_foreign_keys_to_parent_message_table', 0),
(106, '2017_06_23_004100_add_foreign_keys_to_parents_table', 0),
(107, '2017_06_23_004100_add_foreign_keys_to_role_permission_table', 0),
(108, '2017_06_23_004100_add_foreign_keys_to_school_staff_table', 0),
(109, '2017_06_23_004100_add_foreign_keys_to_security_admins_table', 0),
(110, '2017_06_23_004100_add_foreign_keys_to_staff_role_table', 0),
(111, '2017_06_23_004100_add_foreign_keys_to_staff_school_courses_table', 0),
(112, '2017_06_23_004100_add_foreign_keys_to_student_course_subject_table', 0),
(113, '2017_06_23_004100_add_foreign_keys_to_student_evaluation_table', 0),
(114, '2017_06_23_004100_add_foreign_keys_to_student_message_table', 0),
(115, '2017_06_23_004100_add_foreign_keys_to_student_parent_table', 0),
(116, '2017_06_23_004100_add_foreign_keys_to_students_table', 0),
(117, '2017_06_23_004100_add_foreign_keys_to_subjects_table', 0),
(118, '2017_06_23_220351_create_courses_table', 0),
(119, '2017_06_23_220351_create_evaluations_table', 0),
(120, '2017_06_23_220351_create_message_recipient_table', 0),
(121, '2017_06_23_220351_create_messages_table', 0),
(122, '2017_06_23_220351_create_messages_types_table', 0),
(123, '2017_06_23_220351_create_parents_table', 0),
(124, '2017_06_23_220351_create_password_resets_table', 0),
(125, '2017_06_23_220351_create_permissions_table', 0),
(126, '2017_06_23_220351_create_role_permission_table', 0),
(127, '2017_06_23_220351_create_roles_table', 0),
(128, '2017_06_23_220351_create_school_staff_table', 0),
(129, '2017_06_23_220351_create_schools_table', 0),
(130, '2017_06_23_220351_create_security_admins_table', 0),
(131, '2017_06_23_220351_create_staff_role_table', 0),
(132, '2017_06_23_220351_create_staff_school_courses_table', 0),
(133, '2017_06_23_220351_create_student_course_subject_table', 0),
(134, '2017_06_23_220351_create_student_evaluation_table', 0),
(135, '2017_06_23_220351_create_student_parent_table', 0),
(136, '2017_06_23_220351_create_students_table', 0),
(137, '2017_06_23_220351_create_subjects_table', 0),
(138, '2017_06_23_220351_create_users_table', 0),
(139, '2017_06_23_220354_add_foreign_keys_to_evaluations_table', 0),
(140, '2017_06_23_220354_add_foreign_keys_to_message_recipient_table', 0),
(141, '2017_06_23_220354_add_foreign_keys_to_messages_table', 0),
(142, '2017_06_23_220354_add_foreign_keys_to_parents_table', 0),
(143, '2017_06_23_220354_add_foreign_keys_to_role_permission_table', 0),
(144, '2017_06_23_220354_add_foreign_keys_to_school_staff_table', 0),
(145, '2017_06_23_220354_add_foreign_keys_to_security_admins_table', 0),
(146, '2017_06_23_220354_add_foreign_keys_to_staff_role_table', 0),
(147, '2017_06_23_220354_add_foreign_keys_to_staff_school_courses_table', 0),
(148, '2017_06_23_220354_add_foreign_keys_to_student_course_subject_table', 0),
(149, '2017_06_23_220354_add_foreign_keys_to_student_evaluation_table', 0),
(150, '2017_06_23_220354_add_foreign_keys_to_student_parent_table', 0),
(151, '2017_06_23_220354_add_foreign_keys_to_students_table', 0),
(152, '2017_06_23_220354_add_foreign_keys_to_subjects_table', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parents`
--

CREATE TABLE `parents` (
  `dni` int(20) NOT NULL,
  `llave_publica` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `parents`
--

INSERT INTO `parents` (`dni`, `llave_publica`) VALUES
(10580881, 0),
(25616127, 0),
(26310659, 0),
(27581130, 0),
(27585342, 0),
(28249639, 0),
(30266025, 0),
(30709798, 0),
(30725613, 0),
(31462260, 0),
(32704909, 0),
(33173727, 0),
(33252721, 0),
(34088611, 0),
(36390173, 0),
(36564793, 0),
(36668518, 0),
(37393168, 0),
(37797071, 0),
(37961840, 0),
(38467797, 0),
(38581317, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('emi.serkin@gmail.com', '$2y$10$ugV47uN/O3P5PP9N1d4.Def2vGuGkXr.us807wG2ev49ztrJzMvty', '2017-06-27 05:49:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id` int(20) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `permissions`
--

INSERT INTO `permissions` (`id`, `nombre`, `descripcion`) VALUES
(1, 'Asistencias', ''),
(2, 'Calificaciones', ''),
(3, 'Evaluaciones', ''),
(4, 'Mensajes Privados', 'Mensajes privados- Persona a persona'),
(5, 'Justificativo Medico', ''),
(6, 'Roles', 'Funciones propias del administrador de seguridad'),
(7, 'Mensajes Generales', 'Mensajes a toda la comunidad educativa'),
(8, 'Eventos Calendario', ''),
(9, 'Estadisticas', ''),
(10, 'Permisos', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `cargo` varchar(100) NOT NULL,
  `crea_dni` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `cargo`, `crea_dni`) VALUES
(2, 'Director', 35246252),
(3, 'Preceptor', 35246252),
(4, 'Profesor', 35246252),
(5, 'Maestro', 35246252);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_permission`
--

CREATE TABLE `role_permission` (
  `id_rol` int(20) NOT NULL,
  `id_permiso` int(20) NOT NULL,
  `admin_asigna` int(20) NOT NULL,
  `consultar` tinyint(1) NOT NULL DEFAULT '0',
  `agregar` tinyint(1) NOT NULL DEFAULT '0',
  `editar` tinyint(1) NOT NULL DEFAULT '0',
  `eliminar` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `role_permission`
--

INSERT INTO `role_permission` (`id_rol`, `id_permiso`, `admin_asigna`, `consultar`, `agregar`, `editar`, `eliminar`) VALUES
(2, 4, 35246252, 1, 1, 0, 0),
(2, 6, 35246252, 1, 0, 0, 0),
(2, 7, 35246252, 1, 1, 1, 1),
(2, 8, 35246252, 1, 1, 1, 1),
(2, 9, 35246252, 1, 0, 0, 0),
(3, 1, 35246252, 1, 1, 1, 1),
(3, 2, 35246252, 0, 0, 1, 0),
(3, 4, 35246252, 1, 1, 1, 1),
(3, 5, 35246252, 1, 0, 0, 1),
(3, 6, 35246252, 1, 0, 0, 0),
(3, 7, 35246252, 1, 1, 1, 0),
(3, 8, 35246252, 1, 1, 1, 1),
(4, 2, 35246252, 1, 1, 1, 1),
(4, 3, 35246252, 1, 1, 1, 1),
(4, 4, 35246252, 1, 1, 0, 1),
(4, 5, 35246252, 1, 0, 0, 0),
(4, 6, 35246252, 1, 0, 0, 0),
(4, 7, 35246252, 1, 0, 0, 0),
(4, 8, 35246252, 1, 1, 1, 0),
(5, 1, 35246252, 1, 1, 1, 1),
(5, 2, 35246252, 1, 1, 1, 1),
(5, 3, 35246252, 1, 1, 1, 1),
(5, 4, 35246252, 1, 1, 0, 0),
(5, 6, 35246252, 1, 0, 0, 0),
(5, 7, 35246252, 1, 0, 0, 0),
(5, 8, 35246252, 1, 1, 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `schools`
--

CREATE TABLE `schools` (
  `id` int(11) NOT NULL,
  `modalidad` varchar(150) DEFAULT NULL,
  `nivel` varchar(150) DEFAULT NULL,
  `numero` int(10) DEFAULT NULL,
  `nombre` varchar(150) NOT NULL,
  `direccion` varchar(250) NOT NULL,
  `localidad` varchar(250) NOT NULL,
  `provincia` varchar(200) NOT NULL,
  `telefono` int(11) DEFAULT NULL,
  `fax` int(11) DEFAULT NULL,
  `email` varchar(150) NOT NULL,
  `pagina_web` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `schools`
--

INSERT INTO `schools` (`id`, `modalidad`, `nivel`, `numero`, `nombre`, `direccion`, `localidad`, `provincia`, `telefono`, `fax`, `email`, `pagina_web`, `created_at`, `updated_at`) VALUES
(1, 'tecnica', 'secundaria', 12, 'Italia', 'Ituzaingo 4089', 'San Justo', 'Buenos Aires', 46695686, NULL, 'tecnica12@yahoo.com.ar', 'tecnica12italia.com.ar', NULL, '0000-00-00 00:00:00'),
(2, 'Educación Artística', 'secundario', 325, 'Howell and Sons', 'Suite 740', 'Moron', 'La Pampa', 49591797, 51821475, 'alisha21@example.net', 'http://www.luettgen.com/qui-voluptatem-voluptas-animi-aut-asperiores-ipsa-in-ut.html', '2017-06-23 21:07:01', '2017-06-23 21:07:01'),
(3, 'Educación Rural', 'primario', 491, 'Pollich, McLaughlin and Ferry', 'Suite 753', 'Bella Vista', 'Córdoba', 45843031, 59732935, 'kerluke.marge@example.net', 'http://hackett.com/', '2017-06-23 21:07:01', '2017-06-23 21:07:01'),
(4, 'Educación Intercultural Bilingüe', 'primario', 281, 'Abbott, Hansen and Little', 'Apt. 001', 'Bella Vista', 'Buenos Aires', 47713257, 57172955, 'river.flatley@example.net', 'http://www.greenholt.net/iste-voluptatibus-id-consequatur.html', '2017-06-23 21:07:01', '2017-06-23 21:07:01'),
(5, 'Educación Técnico Profesional', 'secundario', 45, 'Marquardt-Predovic', 'Apt. 899', 'Rosario', 'Catamarca', 46374947, 55750678, 'orland12@example.net', 'http://www.yundt.com/', '2017-06-23 21:07:01', '2017-06-23 21:07:01'),
(6, 'Educación Especial', 'secundario', 191, 'Yundt-Keeling', 'Suite 913', 'Moron', 'San Luis', 43534870, 56668946, 'kemmer.antonia@example.com', 'http://www.feil.biz/error-voluptas-sunt-sit-doloremque-non-et', '2017-06-23 21:07:01', '2017-06-23 21:07:01'),
(7, 'Educación Rural', 'secundario', 430, 'Kemmer-Lubowitz', 'Apt. 896', 'San Justo', 'Córdoba', 44140349, 53321238, 'gleichner.laurine@example.com', 'http://www.stamm.com/quas-quia-eum-magni-optio.html', '2017-06-23 21:07:01', '2017-06-23 21:07:01'),
(8, 'Educación Intercultural Bilingüe', 'secundario', 127, 'Fisher-Dickens', 'Apt. 989', 'La Plata', 'Catamarca', 49446158, 54749849, 'langosh.guillermo@example.com', 'http://www.koepp.com/mollitia-illo-aut-quasi-repellendus-cumque.html', '2017-06-23 21:07:01', '2017-06-23 21:07:01'),
(9, 'Educación Especial', 'secundario', 49, 'Zboncak Group', 'Apt. 276', 'San Justo', 'Catamarca', 47316133, 57997631, 'chase.ward@example.com', 'https://www.lebsack.com/accusamus-ipsa-in-dolor-ut-non-ipsa-sed-possimus', '2017-06-23 21:07:01', '2017-06-23 21:07:01'),
(10, 'Educación Especial', 'secundario', 181, 'Volkman and Sons', 'Apt. 830', 'Bella Vista', 'Santa Fe', 49436326, 56904368, 'onader@example.org', 'http://www.gutmann.com/', '2017-06-23 21:07:02', '2017-06-23 21:07:02'),
(11, 'Educación Rural', 'secundario', 90, 'Conroy and Sons', 'Apt. 339', 'Bella Vista', 'Córdoba', 40951928, 52197363, 'katrine38@example.org', 'http://www.maggio.net/', '2017-06-23 21:07:02', '2017-06-23 21:07:02'),
(12, 'Educación Especial', 'primario', 376, 'Kertzmann-Morar', 'Apt. 277', 'Rosario', 'Formosa', 46781549, 58771181, 'myrtice85@example.com', 'https://www.paucek.com/ut-expedita-cum-minus-non-officiis-id', '2017-06-23 21:07:02', '2017-06-23 21:07:02'),
(13, 'Educación Técnico Profesional', 'primario', 434, 'Zboncak, Treutel and Ferry', 'Apt. 147', 'La Plata', 'San Luis', 41693882, 51172370, 'vidal.leffler@example.net', 'http://www.nikolaus.com/', '2017-06-23 21:07:02', '2017-06-23 21:07:02'),
(14, 'Educación Permanente de Jóvenes y Adultos', 'primario', 394, 'Ankunding-Gerhold', 'Apt. 241', 'La Plata', 'La Pampa', 49443824, 55106746, 'celine45@example.com', 'http://www.nienow.biz/molestiae-et-veritatis-provident-nihil-nulla', '2017-06-23 21:07:02', '2017-06-23 21:07:02'),
(15, 'Educación Especial', 'secundario', 76, 'Mertz Group', 'Suite 707', 'Rosario', 'San Luis', 46164191, 58512421, 'dawn.crooks@example.net', 'http://ritchie.biz/sed-possimus-fuga-qui', '2017-06-23 21:07:02', '2017-06-23 21:07:02'),
(16, 'Educación Rural', 'secundario', 87, 'Will, Lueilwitz and Stiedemann', 'Apt. 454', 'Ramos Mejía', 'Córdoba', 47878808, 53915839, 'qrice@example.com', 'http://anderson.info/', '2017-06-23 21:07:02', '2017-06-23 21:07:02'),
(17, 'Educación Técnico Profesional', 'primario', 220, 'Kertzmann-Heidenreich', 'Suite 572', 'Liniers', 'San Luis', 44750914, 59325874, 'christa.schimmel@example.net', 'http://hayes.net/provident-consequatur-numquam-optio-ea-iure.html', '2017-06-23 21:07:02', '2017-06-23 21:07:02'),
(18, 'Educación Artística', 'secundario', 330, 'Kirlin, Senger and Ebert', 'Suite 871', 'Ramos Mejía', 'Córdoba', 48904778, 57634622, 'kallie.dickinson@example.org', 'http://streich.com/velit-consectetur-iusto-deleniti-ut-quaerat', '2017-06-23 21:07:02', '2017-06-23 21:07:02'),
(19, 'Educación Rural', 'secundario', 369, 'Brown LLC', 'Apt. 612', 'Rosario', 'San Luis', 47513538, 57879979, 'hdare@example.net', 'http://schmeler.com/', '2017-06-23 21:07:02', '2017-06-23 21:07:02'),
(20, 'Educación Técnico Profesional', 'primario', 432, 'Heaney, Schiller and Romaguera', 'Apt. 734', 'Rosario', 'Buenos Aires', 42421177, 52545571, 'walter.kurt@example.org', 'https://reichert.com/rerum-impedit-impedit-quisquam-sed.html', '2017-06-23 21:07:02', '2017-06-23 21:07:02'),
(21, 'Educación Artística', 'secundario', 194, 'O\'Keefe, Nitzsche and Spencer', 'Apt. 313', 'Moron', 'Catamarca', 44326615, 58809326, 'morar.lura@example.com', 'https://mayert.net/eos-aut-sunt-quia-enim-eos-neque.html', '2017-06-23 21:07:02', '2017-06-23 21:07:02'),
(22, 'Educación Permanente de Jóvenes y Adultos', 'secundario', 16, 'Brown PLC', 'Apt. 276', 'Liniers', 'La Pampa', 46453713, 56295214, 'maximillia.bins@example.net', 'http://www.gulgowski.com/impedit-iure-beatae-ipsa-nam-vitae', '2017-06-23 21:07:02', '2017-06-23 21:07:02'),
(23, 'Educación Intercultural Bilingüe', 'secundario', 237, 'Daniel, Langosh and Jaskolski', 'Suite 972', 'Ramos Mejía', 'Córdoba', 46544039, 52599503, 'beahan.nicola@example.org', 'http://hayes.com/nam-voluptatum-et-dolor-ab-cupiditate-quidem-in.html', '2017-06-23 21:07:02', '2017-06-23 21:07:02'),
(24, 'Educación Especial', 'primario', 22, 'Carroll Ltd', 'Apt. 584', 'Moron', 'Santa Fe', 41517604, 57057247, 'bosco.buford@example.net', 'http://www.collier.info/voluptatem-quis-et-cupiditate-dolorem', '2017-06-23 21:07:02', '2017-06-23 21:07:02'),
(25, 'Educación Rural', 'primario', 440, 'Boyer-Hettinger', 'Suite 674', 'San Justo', 'Santa Fe', 47484990, 53627021, 'schaefer.jaquelin@example.com', 'http://www.lakin.com/et-voluptatem-tempora-cupiditate-asperiores-in-quos-et', '2017-06-23 21:07:02', '2017-06-23 21:07:02'),
(26, 'Educación Intercultural Bilingüe', 'secundario', 226, 'Kuvalis, Dare and Kemmer', 'Suite 118', 'Moron', 'San Luis', 44232579, 58142504, 'julius.cremin@example.org', 'http://kessler.biz/eligendi-in-cupiditate-dolorem', '2017-06-23 21:07:02', '2017-06-23 21:07:02'),
(27, 'Educación Técnico Profesional', 'secundario', 271, 'Borer-Hegmann', 'Suite 639', 'Liniers', 'La Pampa', 49489223, 50182378, 'enoch15@example.com', 'https://www.rempel.com/at-eum-repellendus-ex', '2017-06-23 21:07:02', '2017-06-23 21:07:02'),
(28, 'Educación Rural', 'secundario', 40, 'Schinner, McClure and Ortiz', 'Apt. 869', 'Liniers', 'Santa Fe', 45042704, 56138510, 'charlotte93@example.net', 'http://ebert.net/accusantium-commodi-voluptas-et-velit-omnis-cumque', '2017-06-23 21:07:02', '2017-06-23 21:07:02'),
(29, 'Educación Intercultural Bilingüe', 'primario', 195, 'Purdy-Gutkowski', 'Suite 970', 'La Plata', 'La Rioja', 48333107, 57083483, 'waino59@example.org', 'http://www.beier.org/ea-corrupti-magni-sequi-aut.html', '2017-06-23 21:07:02', '2017-06-23 21:07:02'),
(30, 'Educación Intercultural Bilingüe', 'secundario', 110, 'Bailey, DuBuque and Farrell', 'Suite 092', 'Rosario', 'Santa Fe', 42834032, 59526634, 'prosacco.ignacio@example.org', 'http://treutel.com/quo-unde-ea-omnis-molestiae.html', '2017-06-23 21:07:02', '2017-06-23 21:07:02'),
(31, 'Educación Técnico Profesional', 'primario', 324, 'Beahan Inc', 'Suite 521', 'La Plata', 'Córdoba', 42815310, 59871915, 'allene55@example.org', 'https://bode.com/ad-itaque-tempore-molestias-velit-rerum.html', '2017-06-23 21:07:02', '2017-06-23 21:07:02'),
(32, 'Educación Artística', 'secundario', 75, 'Jacobson, Littel and Oberbrunner', 'Apt. 645', 'Moron', 'La Pampa', 43085204, 59004194, 'metz.felicia@example.net', 'http://schulist.org/officia-officia-aspernatur-impedit-dolores-consequatur-non.html', '2017-06-23 21:07:02', '2017-06-23 21:07:02'),
(33, 'Educación Rural', 'secundario', 475, 'Bartoletti-Stamm', 'Apt. 528', 'Rosario', 'La Rioja', 43520013, 58151985, 'ima54@example.org', 'http://www.schamberger.biz/ducimus-animi-sed-dolorem-eos-est-ex-hic.html', '2017-06-23 21:07:02', '2017-06-23 21:07:02'),
(34, 'Educación Especial', 'secundario', 207, 'Reinger and Sons', 'Apt. 458', 'Ramos Mejía', 'San Luis', 41071181, 57162611, 'gutkowski.jeramie@example.net', 'https://nienow.com/consequatur-magnam-perspiciatis-tempora-est-molestiae.html', '2017-06-23 21:07:02', '2017-06-23 21:07:02'),
(35, 'Educación Artística', 'secundario', 328, 'Casper-Smith', 'Apt. 742', 'Bella Vista', 'La Rioja', 48748635, 58299342, 'madalyn85@example.net', 'http://www.schowalter.com/', '2017-06-23 21:07:02', '2017-06-23 21:07:02'),
(36, 'Educación Permanente de Jóvenes y Adultos', 'secundario', 425, 'Mertz PLC', 'Apt. 248', 'Moron', 'La Rioja', 45567034, 57737268, 'agreenfelder@example.com', 'http://www.bernhard.com/iure-sunt-voluptatem-dolorem-occaecati-aut-hic-doloremque', '2017-06-23 21:07:02', '2017-06-23 21:07:02'),
(37, 'Educación Intercultural Bilingüe', 'secundario', 14, 'Rodriguez-Schulist', 'Suite 936', 'San Justo', 'La Rioja', 49656227, 57297460, 'trunolfsson@example.org', 'http://rowe.com/iusto-qui-laboriosam-ut-velit-dolorum', '2017-06-23 21:07:02', '2017-06-23 21:07:02'),
(38, 'Educación Artística', 'primario', 21, 'Krajcik Inc', 'Apt. 202', 'Moron', 'Santa Fe', 41848861, 59682711, 'pcronin@example.com', 'http://hudson.info/', '2017-06-23 21:07:02', '2017-06-23 21:07:02'),
(39, 'Educación Intercultural Bilingüe', 'secundario', 174, 'Hickle, Marquardt and Goodwin', 'Apt. 044', 'San Justo', 'Buenos Aires', 48569620, 51250768, 'pattie.reichert@example.net', 'http://mosciski.com/veritatis-et-nihil-consequatur-vitae-tempora-inventore-voluptatem', '2017-06-23 21:07:02', '2017-06-23 21:07:02'),
(40, 'Educación Intercultural Bilingüe', 'secundario', 165, 'Weimann PLC', 'Apt. 972', 'La Plata', 'Buenos Aires', 43282029, 59299507, 'sarai.heller@example.org', 'http://bartoletti.com/eius-officiis-sed-totam-temporibus-laudantium-recusandae-est', '2017-06-23 21:07:02', '2017-06-23 21:07:02'),
(41, 'Educación Técnico Profesional', 'secundario', 143, 'Daugherty-Windler', 'Apt. 065', 'La Plata', 'La Rioja', 46907281, 54270632, 'johnathan.vandervort@example.net', 'http://www.rice.biz/quisquam-ex-voluptatibus-commodi-ad-corrupti-nisi', '2017-06-23 21:07:02', '2017-06-23 21:07:02'),
(42, 'Educación Artística', 'secundario', 200, 'Olson and Sons', 'Suite 934', 'Rosario', 'Santa Fe', 47432060, 55931077, 'ohoeger@example.com', 'https://schimmel.com/consectetur-dolor-libero-molestiae-doloremque-qui.html', '2017-06-23 21:07:02', '2017-06-23 21:07:02'),
(43, 'Educación Rural', 'secundario', 398, 'Reynolds-Wehner', 'Apt. 681', 'Moron', 'Córdoba', 42770430, 54727696, 'dion51@example.org', 'http://www.rippin.com/', '2017-06-23 21:07:02', '2017-06-23 21:07:02'),
(44, 'Educación Técnico Profesional', 'secundario', 175, 'Hagenes-Homenick', 'Apt. 578', 'Ramos Mejía', 'La Pampa', 47779365, 51166594, 'alize47@example.net', 'http://www.kreiger.biz/', '2017-06-23 21:07:02', '2017-06-23 21:07:02'),
(45, 'Educación Artística', 'secundario', 17, 'Nitzsche Ltd', 'Apt. 100', 'San Justo', 'Formosa', 40529841, 52924483, 'jenkins.candice@example.org', 'http://dooley.org/sit-sunt-illo-perspiciatis', '2017-06-23 21:07:02', '2017-06-23 21:07:02'),
(46, 'Educación Intercultural Bilingüe', 'secundario', 315, 'Hane-Herman', 'Suite 788', 'La Plata', 'La Rioja', 44854020, 55047463, 'jtrantow@example.net', 'http://anderson.com/consequuntur-commodi-sequi-dignissimos-officiis-in-consequatur-quisquam', '2017-06-23 21:07:02', '2017-06-23 21:07:02'),
(47, 'Educación Técnico Profesional', 'secundario', 214, 'Hoppe Inc', 'Apt. 670', 'La Plata', 'Buenos Aires', 49596986, 50284777, 'hnader@example.com', 'http://christiansen.com/', '2017-06-23 21:07:02', '2017-06-23 21:07:02'),
(48, 'Educación Permanente de Jóvenes y Adultos', 'primario', 278, 'Zboncak PLC', 'Suite 468', 'Rosario', 'La Pampa', 40468132, 59981364, 'shields.elsa@example.org', 'http://www.lindgren.com/non-eum-vero-eveniet-et-dolor-necessitatibus-minima-quam.html', '2017-06-23 21:07:03', '2017-06-23 21:07:03'),
(49, 'Educación Intercultural Bilingüe', 'primario', 102, 'Braun, Bednar and Luettgen', 'Apt. 533', 'San Justo', 'La Rioja', 40932997, 55865096, 'kohler.corine@example.org', 'http://www.lowe.biz/', '2017-06-23 21:07:03', '2017-06-23 21:07:03'),
(50, 'Educación Artística', 'secundario', 306, 'McGlynn-Langworth', 'Apt. 533', 'Liniers', 'La Pampa', 43483378, 51504779, 'murray.malika@example.net', 'http://bashirian.biz/', '2017-06-23 21:07:03', '2017-06-23 21:07:03'),
(51, 'Educación Intercultural Bilingüe', 'secundario', 283, 'Smith, Sporer and Rowe', 'Apt. 583', 'Rosario', 'San Luis', 48532899, 50713953, 'pfeffer.asa@example.net', 'http://www.jacobs.com/repudiandae-enim-eaque-facere-nesciunt-nulla.html', '2017-06-23 21:07:03', '2017-06-23 21:07:03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `school_staff`
--

CREATE TABLE `school_staff` (
  `dni` int(20) NOT NULL,
  `n_legajo` varchar(250) NOT NULL,
  `fecha_alta` date NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `school_staff`
--

INSERT INTO `school_staff` (`dni`, `n_legajo`, `fecha_alta`, `estado`, `created_at`, `updated_at`, `deleted_at`) VALUES
(14567834, '20987654', '2017-06-23', 1, '2017-06-23 22:07:53', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24567849, '4444444444444', '2017-06-23', 1, '2017-06-30 18:22:27', '2017-06-30 18:22:27', '0000-00-00 00:00:00'),
(25600951, '37725831', '2017-06-23', 1, '2017-06-23 22:27:11', '2017-06-23 22:27:11', '0000-00-00 00:00:00'),
(26919051, '1563708902', '2017-06-23', 1, '2017-06-23 22:27:11', '2017-06-23 22:27:11', '0000-00-00 00:00:00'),
(27723208, '1562985766', '2017-06-23', 1, '2017-06-23 22:27:11', '2017-06-23 22:27:11', '0000-00-00 00:00:00'),
(28176536, '362841533', '2017-06-23', 1, '2017-06-23 22:27:11', '2017-06-23 22:27:11', '0000-00-00 00:00:00'),
(28210268, '64845959', '2017-06-23', 1, '2017-06-23 22:22:31', '2017-06-23 22:22:31', '0000-00-00 00:00:00'),
(31789457, '345671234', '2017-06-23', 1, '2017-06-23 22:07:53', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32718449, '907566063', '2017-06-23', 1, '2017-06-23 22:27:11', '2017-06-23 22:27:11', '0000-00-00 00:00:00'),
(34869444, '769897986', '2017-06-23', 1, '2017-06-23 22:22:31', '2017-06-23 22:22:31', '0000-00-00 00:00:00'),
(35246252, '24567123', '2017-06-23', 1, '2017-06-23 22:07:53', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36013877, '580052295', '2017-06-23', 1, '2017-06-23 22:27:11', '2017-06-23 22:27:11', '0000-00-00 00:00:00'),
(36259443, '1457048366', '2017-06-23', 1, '2017-06-23 22:27:11', '2017-06-23 22:27:11', '0000-00-00 00:00:00'),
(36306268, '304675874', '2017-06-23', 1, '2017-06-23 22:22:31', '2017-06-23 22:22:31', '0000-00-00 00:00:00'),
(38353549, '1032761537', '2017-06-23', 1, '2017-06-23 22:22:31', '2017-06-23 22:22:31', '0000-00-00 00:00:00'),
(38989824, '1398091941', '2017-06-23', 1, '2017-06-23 22:22:31', '2017-06-23 22:22:31', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `security_admins`
--

CREATE TABLE `security_admins` (
  `dni` int(20) NOT NULL,
  `escuela_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `security_admins`
--

INSERT INTO `security_admins` (`dni`, `escuela_id`) VALUES
(35246252, 1),
(11111111, 2),
(11111112, 4),
(11111113, 18);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `staff_role`
--

CREATE TABLE `staff_role` (
  `dni` int(20) NOT NULL,
  `rol_id` int(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `staff_role`
--

INSERT INTO `staff_role` (`dni`, `rol_id`, `created_at`, `updated_at`) VALUES
(14567834, 5, NULL, NULL),
(24567849, 3, NULL, NULL),
(25600951, 3, '2017-06-23 22:38:27', '2017-06-23 22:38:27'),
(25600951, 4, '2017-06-23 22:38:26', '2017-06-23 22:38:26'),
(25600951, 5, '2017-06-23 22:38:27', '2017-06-23 22:38:27'),
(26919051, 3, '2017-06-23 22:38:27', '2017-06-23 22:38:27'),
(27723208, 2, '2017-06-23 22:38:27', '2017-06-23 22:38:27'),
(27723208, 4, '2017-06-23 22:38:27', '2017-06-23 22:38:27'),
(27723208, 5, '2017-06-23 22:38:27', '2017-06-23 22:38:27'),
(28176536, 2, '2017-06-23 22:38:27', '2017-06-23 22:38:27'),
(28176536, 3, '2017-06-23 22:38:27', '2017-06-23 22:38:27'),
(28210268, 2, '2017-06-23 22:38:27', '2017-06-23 22:38:27'),
(28210268, 4, '2017-06-23 22:38:26', '2017-06-23 22:38:26'),
(31789457, 4, NULL, NULL),
(34869444, 2, '2017-06-23 22:38:27', '2017-06-23 22:38:27'),
(34869444, 4, '2017-06-23 22:38:27', '2017-06-23 22:38:27'),
(34869444, 5, '2017-06-23 22:38:27', '2017-06-23 22:38:27'),
(35246252, 2, NULL, NULL),
(36013877, 4, '2017-06-23 22:38:27', '2017-06-23 22:38:27'),
(36013877, 5, '2017-06-23 22:38:27', '2017-06-23 22:38:27'),
(36259443, 2, '2017-06-23 22:38:27', '2017-06-23 22:38:27'),
(36259443, 5, '2017-06-23 22:38:27', '2017-06-23 22:38:27'),
(36306268, 3, '2017-06-23 22:38:26', '2017-06-23 22:38:26'),
(38353549, 4, '2017-06-23 22:38:27', '2017-06-23 22:38:27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `staff_school_courses`
--

CREATE TABLE `staff_school_courses` (
  `dni` int(20) NOT NULL,
  `escuela_id` int(20) NOT NULL,
  `curso_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `staff_school_courses`
--

INSERT INTO `staff_school_courses` (`dni`, `escuela_id`, `curso_id`) VALUES
(14567834, 1, 6),
(14567834, 2, 4),
(24567849, 2, 6),
(24567849, 4, 12),
(26919051, 4, 14),
(28176536, 18, 17);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `students`
--

CREATE TABLE `students` (
  `dni` int(20) NOT NULL,
  `n_matricula` varchar(40) NOT NULL,
  `fecha_inscripcion` date NOT NULL DEFAULT '2017-06-23'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `students`
--

INSERT INTO `students` (`dni`, `n_matricula`, `fecha_inscripcion`) VALUES
(20456732, '321738412840912', '2017-06-23'),
(26031051, '327456281649217491', '2017-06-23'),
(26982512, '6218756491247912', '2017-06-23'),
(27214037, '437284732840932843242', '2017-06-23'),
(28152998, '312894710925', '2017-06-23'),
(29578561, '3215785632749312', '2017-06-23'),
(32238237, '382197497532123', '0000-00-00'),
(32267202, '6574674970232135', '0000-00-00'),
(33213897, '56398473184320', '2017-06-23'),
(33247459, '467543917032840293', '2017-06-23'),
(33473119, '5789754397504385304', '2017-06-23'),
(33769925, '47328957237592', '2017-06-23'),
(34246240, '5478574038305989304', '2017-06-23'),
(34996571, '432679196798466904', '2017-06-23'),
(35888974, '57439764085e30485\'329', '2017-06-23'),
(36295193, '43287865974398543085034', '2017-06-23'),
(36773726, '574357430850345345', '2017-06-23'),
(38146895, '432890458096745098560943', '2017-06-23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `student_course_subject`
--

CREATE TABLE `student_course_subject` (
  `alumno_id` int(11) NOT NULL,
  `materia_id` int(11) NOT NULL,
  `curso_id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `asiste` tinyint(1) NOT NULL,
  `justificativo_url` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `student_course_subject`
--

INSERT INTO `student_course_subject` (`alumno_id`, `materia_id`, `curso_id`, `fecha`, `asiste`, `justificativo_url`, `updated_at`, `created_at`) VALUES
(20456732, 6, 11, '2015-01-23', 1, '', '2017-06-24 04:32:41', '2017-06-24 04:26:49'),
(20456732, 17, 32, '1970-05-30', 0, '', '2017-06-26 18:49:21', '2017-06-24 04:26:49'),
(20456732, 44, 11, '2012-10-23', 0, '/img/users/justificativos/1.jpg,', '2017-06-24 04:26:49', '2017-06-24 04:26:49'),
(20456732, 47, 10, '1975-06-03', 0, '/img/users/justificativos/1.jpg,', '2017-06-24 04:26:49', '2017-06-24 04:26:49'),
(26031051, 16, 33, '2011-12-31', 1, '', '2017-06-24 04:32:41', '2017-06-24 04:26:50'),
(26031051, 17, 41, '2015-02-15', 0, '/img/users/justificativos/1.jpg,', '2017-06-24 04:26:49', '2017-06-24 04:26:49'),
(26031051, 19, 21, '1976-11-16', 0, '/img/users/justificativos/1.jpg,', '2017-06-24 04:26:49', '2017-06-24 04:26:49'),
(26031051, 31, 24, '1977-05-31', 1, '', '2017-06-24 04:32:41', '2017-06-24 04:26:49'),
(26031051, 40, 2, '2017-06-02', 0, '/img/users/justificativos/1.jpg,', '2017-06-24 04:26:49', '2017-06-24 04:26:49'),
(26982512, 14, 43, '2004-10-23', 0, '/img/users/justificativos/1.jpg,', '2017-06-24 04:26:49', '2017-06-24 04:26:49'),
(26982512, 28, 13, '2007-02-03', 0, '/img/users/justificativos/1.jpg,', '2017-06-24 04:26:49', '2017-06-24 04:26:49'),
(26982512, 41, 17, '1972-07-15', 1, '', '2017-06-24 04:32:41', '2017-06-24 04:26:49'),
(27214037, 1, 5, '1990-11-03', 1, '', '2017-06-24 04:32:41', '2017-06-24 04:26:49'),
(27214037, 16, 29, '1974-08-22', 0, '/img/users/justificativos/1.jpg,', '2017-06-24 04:26:49', '2017-06-24 04:26:49'),
(27214037, 28, 50, '1995-03-08', 1, '', '2017-06-24 04:32:41', '2017-06-24 04:26:49'),
(27214037, 46, 51, '1976-02-06', 1, '', '2017-06-24 04:32:41', '2017-06-24 04:26:48'),
(28152998, 26, 49, '1998-07-24', 1, '', '2017-06-24 04:32:41', '2017-06-24 04:26:49'),
(28152998, 45, 25, '1971-03-03', 0, '/img/users/justificativos/1.jpg,', '2017-06-24 04:26:48', '2017-06-24 04:26:48'),
(29578561, 42, 48, '2010-03-15', 1, '', '2017-06-24 04:32:41', '2017-06-24 04:26:49'),
(29578561, 48, 7, '1973-12-20', 0, '/img/users/justificativos/1.jpg,', '2017-06-24 04:26:49', '2017-06-24 04:26:49'),
(32238237, 34, 24, '1971-11-11', 0, '/img/users/justificativos/1.jpg,', '2017-06-24 04:26:50', '2017-06-24 04:26:50'),
(32267202, 7, 13, '2005-08-25', 1, '', '2017-06-24 04:32:41', '2017-06-24 04:26:50'),
(32267202, 9, 29, '1980-03-15', 1, '', '2017-06-24 04:32:41', '2017-06-24 04:26:49'),
(32267202, 12, 40, '1977-08-13', 1, '', '2017-06-24 04:32:41', '2017-06-24 04:26:49'),
(32267202, 16, 36, '2011-09-01', 1, '', '2017-06-24 04:32:41', '2017-06-24 04:26:49'),
(32267202, 48, 37, '2016-11-27', 0, '/img/users/justificativos/1.jpg,', '2017-06-24 04:26:48', '2017-06-24 04:26:48'),
(33247459, 4, 31, '1999-06-22', 1, '', '2017-06-24 04:32:41', '2017-06-24 04:26:49'),
(33247459, 8, 28, '2003-12-16', 1, '', '2017-06-24 04:32:41', '2017-06-24 04:26:48'),
(33247459, 13, 22, '1987-03-13', 0, '', '2017-06-24 04:28:02', '2017-06-24 04:26:49'),
(33247459, 22, 43, '1980-10-18', 0, '/img/users/justificativos/1.jpg,', '2017-06-24 04:26:49', '2017-06-24 04:26:49'),
(33247459, 40, 39, '1973-01-15', 1, '', '2017-06-24 04:32:41', '2017-06-24 04:26:50'),
(33473119, 9, 51, '2010-05-19', 0, '/img/users/justificativos/1.jpg,', '2017-06-24 04:26:49', '2017-06-24 04:26:49'),
(33473119, 14, 40, '1970-07-01', 1, '', '2017-06-24 04:32:41', '2017-06-24 04:26:48'),
(33473119, 22, 29, '1971-07-24', 0, '/img/users/justificativos/1.jpg,', '2017-06-24 04:26:49', '2017-06-24 04:26:49'),
(33473119, 23, 17, '2009-06-28', 0, '/img/users/justificativos/1.jpg,', '2017-06-24 04:26:50', '2017-06-24 04:26:50'),
(33473119, 28, 31, '1974-06-26', 1, '', '2017-06-24 04:32:41', '2017-06-24 04:26:50'),
(33473119, 31, 30, '2006-05-05', 0, '/img/users/justificativos/1.jpg,', '2017-06-24 04:26:49', '2017-06-24 04:26:49'),
(33473119, 36, 51, '1990-12-03', 0, '/img/users/justificativos/1.jpg,', '2017-06-24 04:26:49', '2017-06-24 04:26:49'),
(33473119, 37, 16, '1992-08-23', 1, '', '2017-06-24 04:28:12', '2017-06-24 04:26:50'),
(33769925, 12, 45, '1971-06-23', 0, '/img/users/justificativos/1.jpg,', '2017-06-24 04:26:49', '2017-06-24 04:26:49'),
(33769925, 44, 30, '1986-07-29', 1, '', '2017-06-24 04:32:41', '2017-06-24 04:26:50'),
(34246240, 17, 29, '1978-07-14', 1, '', '2017-06-24 04:32:41', '2017-06-24 04:26:49'),
(34246240, 18, 42, '1997-12-06', 1, '', '2017-06-24 04:28:17', '2017-06-24 04:26:49'),
(34996571, 15, 13, '2012-04-23', 1, '', '2017-06-24 04:32:41', '2017-06-24 04:26:48'),
(34996571, 21, 40, '2007-03-24', 1, '', '2017-06-24 04:28:07', '2017-06-24 04:26:49'),
(34996571, 22, 9, '1973-06-16', 0, '/img/users/justificativos/1.jpg,', '2017-06-24 04:26:48', '2017-06-24 04:26:48'),
(34996571, 30, 6, '1985-07-08', 0, '', '2017-06-24 04:27:35', '2017-06-24 04:26:50'),
(34996571, 35, 49, '1984-03-02', 1, '', '2017-06-24 04:28:09', '2017-06-24 04:26:49'),
(34996571, 46, 26, '2008-03-15', 1, '', '2017-06-24 04:32:41', '2017-06-24 04:26:49'),
(35888974, 13, 42, '1970-04-14', 0, '/img/users/justificativos/1.jpg,', '2017-06-24 04:26:49', '2017-06-24 04:26:49'),
(35888974, 37, 24, '1980-07-17', 1, '', '2017-06-24 04:32:41', '2017-06-24 04:26:50'),
(36295193, 24, 30, '1971-10-10', 0, '/img/users/justificativos/1.jpg,', '2017-06-24 04:26:49', '2017-06-24 04:26:49'),
(36773726, 25, 36, '2012-10-06', 0, '/img/users/justificativos/1.jpg,', '2017-06-24 04:26:49', '2017-06-24 04:26:49'),
(36773726, 35, 15, '1985-03-19', 1, '', '2017-06-24 04:32:41', '2017-06-24 04:26:49'),
(38146895, 48, 12, '1985-10-06', 0, '/img/users/justificativos/1.jpg,', '2017-06-24 04:26:50', '2017-06-24 04:26:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `student_evaluation`
--

CREATE TABLE `student_evaluation` (
  `alumno_id` int(11) NOT NULL,
  `evaluacion_id` int(11) NOT NULL,
  `calificacion` int(4) NOT NULL,
  `esta_aprobado?` tinyint(1) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `student_evaluation`
--

INSERT INTO `student_evaluation` (`alumno_id`, `evaluacion_id`, `calificacion`, `esta_aprobado?`, `fecha`, `updated_at`, `created_at`) VALUES
(20456732, 18, 47, 1, '2015-02-18 03:00:00', '2017-06-24 05:38:07', '2017-06-24 05:38:07'),
(26031051, 1, 44, 0, '1992-04-22 03:00:00', '2017-06-24 05:38:06', '2017-06-24 05:38:06'),
(26031051, 9, 35, 0, '1982-07-21 03:00:00', '2017-06-24 05:38:06', '2017-06-24 05:38:06'),
(26031051, 15, 2, 1, '1976-05-11 03:00:00', '2017-06-24 05:38:05', '2017-06-24 05:38:05'),
(26031051, 16, 52, 1, '1986-01-27 03:00:00', '2017-06-24 05:38:06', '2017-06-24 05:38:06'),
(26031051, 18, 8, 1, '2012-09-17 03:00:00', '2017-06-24 05:38:07', '2017-06-24 05:38:07'),
(26982512, 7, 40, 1, '1977-01-19 03:00:00', '2017-06-24 05:38:48', '2017-06-24 05:38:48'),
(26982512, 9, 43, 1, '2005-04-12 03:00:00', '2017-06-24 05:38:06', '2017-06-24 05:38:06'),
(27214037, 7, 18, 1, '1985-09-12 03:00:00', '2017-06-24 05:38:06', '2017-06-24 05:38:06'),
(27214037, 8, 31, 0, '2009-01-29 03:00:00', '2017-06-24 05:38:07', '2017-06-24 05:38:07'),
(28152998, 12, 9, 1, '2012-12-16 03:00:00', '2017-06-24 05:38:06', '2017-06-24 05:38:06'),
(28152998, 21, 8, 0, '2013-02-03 03:00:00', '2017-06-24 05:38:06', '2017-06-24 05:38:06'),
(29578561, 4, 18, 1, '1977-06-30 03:00:00', '2017-06-24 05:38:48', '2017-06-24 05:38:48'),
(29578561, 10, 23, 1, '1978-05-27 03:00:00', '2017-06-24 05:38:06', '2017-06-24 05:38:06'),
(29578561, 11, 12, 1, '1970-03-01 03:00:00', '2017-06-24 05:38:06', '2017-06-24 05:38:06'),
(29578561, 12, 35, 1, '2014-12-13 03:00:00', '2017-06-24 05:38:06', '2017-06-24 05:38:06'),
(29578561, 16, 3, 0, '2001-06-03 03:00:00', '2017-06-24 05:38:07', '2017-06-24 05:38:07'),
(32238237, 7, 30, 0, '1999-03-02 03:00:00', '2017-06-24 05:38:07', '2017-06-24 05:38:07'),
(32238237, 14, 39, 0, '2008-11-08 03:00:00', '2017-06-24 05:38:07', '2017-06-24 05:38:07'),
(32238237, 17, 49, 1, '2000-11-29 03:00:00', '2017-06-24 05:38:07', '2017-06-24 05:38:07'),
(32267202, 8, 15, 1, '2015-04-02 03:00:00', '2017-06-24 05:38:06', '2017-06-24 05:38:06'),
(32267202, 14, 38, 0, '1981-07-16 03:00:00', '2017-06-24 05:38:07', '2017-06-24 05:38:07'),
(32267202, 20, 53, 1, '1983-02-02 03:00:00', '2017-06-24 05:38:06', '2017-06-24 05:38:06'),
(32267202, 22, 37, 1, '2005-05-03 03:00:00', '2017-06-24 05:38:06', '2017-06-24 05:38:06'),
(33213897, 1, 33, 0, '2005-01-26 03:00:00', '2017-06-24 05:38:07', '2017-06-24 05:38:07'),
(33213897, 7, 30, 1, '2013-08-21 03:00:00', '2017-06-24 05:38:06', '2017-06-24 05:38:06'),
(33213897, 14, 21, 1, '2007-01-22 03:00:00', '2017-06-24 05:38:07', '2017-06-24 05:38:07'),
(33247459, 4, 19, 0, '1981-04-16 03:00:00', '2017-06-24 05:38:06', '2017-06-24 05:38:06'),
(33247459, 8, 22, 0, '1976-03-29 03:00:00', '2017-06-24 05:38:06', '2017-06-24 05:38:06'),
(33247459, 10, 18, 1, '1992-03-24 03:00:00', '2017-06-24 05:38:48', '2017-06-24 05:38:48'),
(33769925, 3, 28, 0, '1988-12-05 03:00:00', '2017-06-24 05:38:06', '2017-06-24 05:38:06'),
(33769925, 10, 45, 0, '1973-01-05 03:00:00', '2017-06-24 05:38:48', '2017-06-24 05:38:48'),
(33769925, 17, 3, 0, '1980-12-10 03:00:00', '2017-06-24 05:38:06', '2017-06-24 05:38:06'),
(34246240, 16, 21, 1, '1982-12-25 03:00:00', '2017-06-24 05:38:06', '2017-06-24 05:38:06'),
(34996571, 15, 50, 1, '2007-11-24 03:00:00', '2017-06-24 05:38:07', '2017-06-24 05:38:07'),
(34996571, 18, 49, 0, '1974-02-13 03:00:00', '2017-06-24 05:38:48', '2017-06-24 05:38:48'),
(35888974, 12, 40, 1, '2007-07-30 03:00:00', '2017-06-24 05:38:48', '2017-06-24 05:38:48'),
(35888974, 14, 16, 1, '1977-10-30 03:00:00', '2017-06-24 05:38:06', '2017-06-24 05:38:06'),
(36295193, 5, 13, 1, '2017-03-27 03:00:00', '2017-06-24 05:38:07', '2017-06-24 05:38:07'),
(36295193, 11, 5, 0, '1981-10-01 03:00:00', '2017-06-24 05:38:06', '2017-06-24 05:38:06'),
(36295193, 18, 21, 0, '1977-07-08 03:00:00', '2017-06-24 05:38:06', '2017-06-24 05:38:06'),
(36773726, 3, 53, 1, '2004-10-23 03:00:00', '2017-06-24 05:38:07', '2017-06-24 05:38:07'),
(36773726, 11, 1, 0, '1980-04-19 03:00:00', '2017-06-24 05:38:07', '2017-06-24 05:38:07'),
(36773726, 23, 21, 1, '1991-08-31 03:00:00', '2017-06-24 05:38:06', '2017-06-24 05:38:06'),
(38146895, 6, 24, 0, '1982-01-17 03:00:00', '2017-06-24 05:38:06', '2017-06-24 05:38:06'),
(38146895, 13, 35, 1, '1976-06-17 03:00:00', '2017-06-24 05:38:48', '2017-06-24 05:38:48'),
(38146895, 16, 53, 0, '2007-07-06 03:00:00', '2017-06-24 05:38:06', '2017-06-24 05:38:06'),
(38146895, 21, 12, 1, '2009-12-05 03:00:00', '2017-06-24 05:38:06', '2017-06-24 05:38:06'),
(38146895, 22, 8, 0, '1986-10-26 03:00:00', '2017-06-24 05:38:06', '2017-06-24 05:38:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `student_parent`
--

CREATE TABLE `student_parent` (
  `alumno_id` int(11) NOT NULL,
  `padre_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `student_parent`
--

INSERT INTO `student_parent` (`alumno_id`, `padre_id`, `created_at`, `updated_at`) VALUES
(20456732, 36390173, '2017-06-24 02:06:32', '2017-06-24 02:06:32'),
(26031051, 33252721, '2017-06-24 02:06:32', '2017-06-24 02:06:32'),
(26982512, 27581130, '2017-06-24 02:06:31', '2017-06-24 02:06:31'),
(28152998, 26310659, '2017-06-24 02:06:31', '2017-06-24 02:06:31'),
(28152998, 34088611, '2017-06-24 02:06:32', '2017-06-24 02:06:32'),
(28152998, 37961840, '2017-06-24 02:06:31', '2017-06-24 02:06:31'),
(29578561, 25616127, '2017-06-24 02:06:31', '2017-06-24 02:06:31'),
(29578561, 36564793, '2017-06-24 02:06:32', '2017-06-24 02:06:32'),
(32238237, 33252721, '2017-06-24 02:06:31', '2017-06-24 02:06:31'),
(32267202, 33252721, '2017-06-24 02:06:31', '2017-06-24 02:06:31'),
(32267202, 38581317, '2017-06-24 02:06:31', '2017-06-24 02:06:31'),
(33473119, 27585342, '2017-06-24 02:06:31', '2017-06-24 02:06:31'),
(33769925, 27585342, '2017-06-24 02:06:31', '2017-06-24 02:06:31'),
(34246240, 34088611, '2017-06-24 02:06:31', '2017-06-24 02:06:31'),
(34996571, 38467797, '2017-06-24 02:06:32', '2017-06-24 02:06:32'),
(34996571, 38581317, '2017-06-24 02:06:32', '2017-06-24 02:06:32'),
(35888974, 27581130, '2017-06-24 02:06:31', '2017-06-24 02:06:31'),
(35888974, 33173727, '2017-06-24 02:06:31', '2017-06-24 02:06:31'),
(35888974, 34088611, '2017-06-24 02:06:32', '2017-06-24 02:06:32'),
(35888974, 37797071, '2017-06-24 02:06:32', '2017-06-24 02:06:32'),
(36295193, 28249639, '2017-06-24 02:06:31', '2017-06-24 02:06:31'),
(36295193, 33173727, '2017-06-24 02:06:31', '2017-06-24 02:06:31'),
(38146895, 37797071, '2017-06-24 02:06:31', '2017-06-24 02:06:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subjects`
--

CREATE TABLE `subjects` (
  `id` int(20) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `profesor` int(40) NOT NULL,
  `dia_cursada` varchar(100) NOT NULL,
  `hora_cursada` time NOT NULL,
  `escuela_id` int(100) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `subjects`
--

INSERT INTO `subjects` (`id`, `titulo`, `profesor`, `dia_cursada`, `hora_cursada`, `escuela_id`, `updated_at`, `created_at`) VALUES
(1, 'Matemática', 34869444, 'Jueves', '20:25:01', 50, '2017-06-24 04:16:39', '2017-06-24 04:16:39'),
(2, 'Ciencias Sociales', 27723208, 'Jueves', '22:25:41', 37, '2017-06-24 04:16:39', '2017-06-24 04:16:39'),
(3, 'Lengua', 34869444, 'Viernes', '11:44:23', 6, '2017-06-24 04:16:39', '2017-06-24 04:16:39'),
(4, 'Ciencias Sociales', 25600951, 'Viernes', '13:32:05', 30, '2017-06-24 04:16:39', '2017-06-24 04:16:39'),
(5, 'Inglés', 28210268, 'Miercoles', '11:26:57', 15, '2017-06-24 04:16:39', '2017-06-24 04:16:39'),
(6, 'Ciencias Sociales', 36013877, 'Miercoles', '13:34:27', 7, '2017-06-24 04:16:39', '2017-06-24 04:16:39'),
(7, 'Ed. física', 31789457, 'Jueves', '10:55:58', 17, '2017-06-24 04:16:39', '2017-06-24 04:16:39'),
(8, 'Ed. física', 36259443, 'Miercoles', '01:08:32', 3, '2017-06-24 04:16:39', '2017-06-24 04:16:39'),
(9, 'Matemática', 34869444, 'Viernes', '05:55:21', 45, '2017-06-24 04:16:39', '2017-06-24 04:16:39'),
(10, 'Ciencias Naturales', 31789457, 'Jueves', '05:55:00', 22, '2017-06-24 04:16:39', '2017-06-24 04:16:39'),
(11, 'Inglés', 34869444, 'Miercoles', '01:27:57', 21, '2017-06-24 04:16:39', '2017-06-24 04:16:39'),
(12, 'Inglés', 38353549, 'Martes', '21:11:54', 34, '2017-06-24 04:16:39', '2017-06-24 04:16:39'),
(13, 'Informática', 34869444, 'Viernes', '23:25:13', 23, '2017-06-24 04:16:39', '2017-06-24 04:16:39'),
(14, 'Ed. física', 14567834, 'Jueves', '17:14:47', 41, '2017-06-24 04:16:39', '2017-06-24 04:16:39'),
(15, 'Ciencias Naturales', 27723208, 'Viernes', '15:37:09', 37, '2017-06-24 04:16:40', '2017-06-24 04:16:40'),
(16, 'Inglés', 34869444, 'Jueves', '20:21:22', 48, '2017-06-24 04:16:40', '2017-06-24 04:16:40'),
(17, 'Ed. física', 25600951, 'Lunes', '06:16:32', 45, '2017-06-24 04:16:40', '2017-06-24 04:16:40'),
(18, 'Informática', 36013877, 'Viernes', '12:00:27', 32, '2017-06-24 04:16:40', '2017-06-24 04:16:40'),
(19, 'Música', 25600951, 'Miercoles', '18:47:26', 46, '2017-06-24 04:16:40', '2017-06-24 04:16:40'),
(20, 'Música', 25600951, 'Viernes', '03:02:12', 36, '2017-06-24 04:16:40', '2017-06-24 04:16:40'),
(21, 'Ciencias Sociales', 28210268, 'Lunes', '05:49:35', 51, '2017-06-24 04:16:40', '2017-06-24 04:16:40'),
(22, 'Ed. física', 25600951, 'Miercoles', '12:10:02', 51, '2017-06-24 04:16:40', '2017-06-24 04:16:40'),
(23, 'Lengua', 27723208, 'Miercoles', '21:01:45', 21, '2017-06-24 04:16:40', '2017-06-24 04:16:40'),
(24, 'Ed. física', 38353549, 'Lunes', '14:03:31', 25, '2017-06-24 04:16:40', '2017-06-24 04:16:40'),
(25, 'Matemática', 14567834, 'Miercoles', '07:44:40', 19, '2017-06-24 04:16:40', '2017-06-24 04:16:40'),
(26, 'Lengua', 36259443, 'Jueves', '07:53:47', 24, '2017-06-24 04:16:40', '2017-06-24 04:16:40'),
(27, 'Música', 34869444, 'Viernes', '21:23:08', 41, '2017-06-24 04:16:40', '2017-06-24 04:16:40'),
(28, 'Música', 25600951, 'Jueves', '05:56:29', 24, '2017-06-24 04:16:40', '2017-06-24 04:16:40'),
(29, 'Inglés', 34869444, 'Viernes', '00:47:01', 23, '2017-06-24 04:16:40', '2017-06-24 04:16:40'),
(30, 'Inglés', 27723208, 'Viernes', '19:35:24', 47, '2017-06-24 04:16:40', '2017-06-24 04:16:40'),
(31, 'Ciencias Sociales', 36013877, 'Martes', '00:53:10', 7, '2017-06-24 04:16:40', '2017-06-24 04:16:40'),
(32, 'Ciencias Naturales', 36013877, 'Viernes', '10:46:35', 22, '2017-06-24 04:16:40', '2017-06-24 04:16:40'),
(33, 'Ciencias Naturales', 36013877, 'Jueves', '09:21:40', 46, '2017-06-24 04:16:40', '2017-06-24 04:16:40'),
(34, 'Ed. física', 27723208, 'Viernes', '22:14:41', 1, '2017-06-24 04:16:40', '2017-06-24 04:16:40'),
(35, 'Música', 34869444, 'Jueves', '14:59:36', 8, '2017-06-24 04:16:40', '2017-06-24 04:16:40'),
(36, 'Música', 36013877, 'Lunes', '08:25:39', 18, '2017-06-24 04:16:40', '2017-06-24 04:16:40'),
(37, 'Ed. física', 36013877, 'Viernes', '02:43:48', 12, '2017-06-24 04:16:40', '2017-06-24 04:16:40'),
(38, 'Ed. física', 36013877, 'Lunes', '14:27:51', 11, '2017-06-24 04:16:40', '2017-06-24 04:16:40'),
(39, 'Matemática', 25600951, 'Jueves', '03:33:58', 21, '2017-06-24 04:16:40', '2017-06-24 04:16:40'),
(40, 'Ciencias Naturales', 31789457, 'Miercoles', '12:41:36', 20, '2017-06-24 04:16:40', '2017-06-24 04:16:40'),
(41, 'Ciencias Sociales', 38353549, 'Lunes', '23:59:42', 20, '2017-06-24 04:16:40', '2017-06-24 04:16:40'),
(42, 'Ed. física', 36013877, 'Viernes', '12:51:54', 3, '2017-06-24 04:16:40', '2017-06-24 04:16:40'),
(43, 'Ciencias Sociales', 31789457, 'Viernes', '09:28:33', 34, '2017-06-24 04:16:40', '2017-06-24 04:16:40'),
(44, 'Inglés', 27723208, 'Martes', '04:43:59', 50, '2017-06-24 04:16:40', '2017-06-24 04:16:40'),
(45, 'Ciencias Naturales', 36013877, 'Lunes', '05:41:57', 51, '2017-06-24 04:16:40', '2017-06-24 04:16:40'),
(46, 'Ciencias Naturales', 36259443, 'Viernes', '18:45:44', 10, '2017-06-24 04:16:40', '2017-06-24 04:16:40'),
(47, 'Informática', 38353549, 'Miercoles', '20:22:22', 43, '2017-06-24 04:16:40', '2017-06-24 04:16:40'),
(48, 'Música', 38353549, 'Miercoles', '19:38:58', 10, '2017-06-24 04:16:40', '2017-06-24 04:16:40'),
(49, 'Música', 36013877, 'Jueves', '01:52:31', 40, '2017-06-24 04:16:41', '2017-06-24 04:16:41'),
(50, 'Música', 34869444, 'Jueves', '13:55:42', 18, '2017-06-24 04:16:41', '2017-06-24 04:16:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `dni` int(20) NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexo` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `celular` int(11) DEFAULT NULL,
  `direccion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `localidad` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provincia` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto_url` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `tipo` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `dni`, `nombre`, `apellido`, `sexo`, `email`, `password`, `fecha_nacimiento`, `telefono`, `celular`, `direccion`, `localidad`, `provincia`, `foto_url`, `tipo`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 10580881, 'Don Carlos', 'Fernandez', 'masculino', 'padre@email.com', '123456', '1957-06-09', 4657895, 1167813289, 'Pringles 2098', 'San Justo, La Matanza', 'Buenos Aires', '', 'tutor', NULL, '2017-06-23 03:00:00', '2017-06-23 03:00:00', '0000-00-00 00:00:00'),
(2, 11111111, 'carlos', 'segundo', NULL, 'prueba@gmail.com', '$2y$10$gto9/5qbA6rnCZ5R0dwG..x1PWjNc9c7MfLbnjQHeFfAipwLqEtYu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin', 'lpncgjexkjU0pWcDRa6xfOxSZWPzmZEUaeT5C02tMbxD0IyPyLSbUobm2xyO', '2017-06-27 04:43:30', '2017-06-27 04:43:30', '0000-00-00 00:00:00'),
(59, 11111112, 'carlitos 2', 'bueno', NULL, 'prueba02@gmail.com', '$2y$10$npvDWLZcccVG37tEm.Swq.vkBTVKZ3YJdOd2qqrV8RKenj.jZuI8u', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin', '2NGL73t8eQ3qhYpOMRYwwvGKk5vuk01KdyLTtu3YBk5KWKWCkijHdBQ3rBBj', '2017-06-27 05:01:34', '2017-06-27 05:01:34', '0000-00-00 00:00:00'),
(60, 11111113, 'calitos', 'ssssss', NULL, 'prueba03@gmail.com', '$2y$10$iFhNlMQLQMteRsSd9KsUPePu/vZxGcvh.T1MGYgyQv3L3Yh05X42.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin', 'pGZlcSkV2WuXQXk47usduwDVKoS59FUidyCNMNTdCEXajBrV1MJrWaavAm2m', '2017-06-27 05:26:46', '2017-06-27 05:26:46', '0000-00-00 00:00:00'),
(3, 14567834, 'Alicia ', 'Guiroa', 'femenino', 'maestra@email.com', '123456', '1976-11-23', 43278943, 1115578993, 'Pedro Cuevas 7823', 'San Justo, La Matanza', 'Buenos Aires', '', 'personal', NULL, '2017-06-23 03:00:00', '2017-06-23 03:00:00', '0000-00-00 00:00:00'),
(4, 20456732, 'Jaimito', 'Fernandez', 'masculino', 'alumno@email.com', '$2y$10$gto9/5qbA6rnCZ5R0dwG..x1PWjNc9c7MfLbnjQHeFfAipwLqEtYu', '2005-05-22', 44442389, 1509876457, 'Pringles 2098', 'San Justo, La Matanza', 'Buenos Aires', '', 'alumno', 'tbilpyxMUwNt79PCTXCdslSn4yjnC96vUQPuXk5CmCqyh1WQpLhM6Z5OlW3D', '2017-06-22 03:00:00', '2017-06-22 03:00:00', '0000-00-00 00:00:00'),
(5, 24567849, 'Juan Pablo', 'Gonzalez', 'masculino', 'preceptor@email.com', '123456', '1978-06-04', 48984327, 1567349867, 'Mendoza 1762', 'San Justo, La Matanza', 'Buenos Aires', '', 'personal', NULL, '2017-06-23 03:00:00', '2017-06-23 03:00:00', '0000-00-00 00:00:00'),
(6, 25600951, 'Mabel', 'Ziemann', 'femenino', 'edwina03@example.org', '$2y$10$xBs/TpOzAlfmNuAy6QeYHu81ZgwMuuwEx3tevLC8REbLQCMwYkIHm', '2004-12-04', 47477850, 1588954309, 'Apt. 758', 'Bella Vista', 'Formosa', 'http://lorempixel.com/640/480/?99661', 'personal', 'f9p42iksdpOo2atmtH6H2wU5zOYJzZRDl3ykGNGc0atUlSGqR73FtdN3TH7h', '2017-06-23 08:30:27', '2017-06-23 08:30:27', '0000-00-00 00:00:00'),
(7, 25616127, 'Roy', 'Turcotte', 'femenino', 'hartmann.judy@example.com', '$2y$10$Ylxbf9jxXNH5H2ij0U8fvue2SWv/5s8j3gPQwnLhLkyT0x0iP3bou', '1971-02-14', 46632685, 1526966472, 'Suite 658', 'Bella Vista', 'La Pampa', 'http://lorempixel.com/640/480/?58855', 'tutor', 'CvUPpfkm64', '2017-06-23 08:30:27', '2017-06-23 08:30:27', '0000-00-00 00:00:00'),
(8, 26031051, 'Ludwig', 'Beer', 'femenino', 'amanda.stroman@example.com', '$2y$10$mKGjGgXFZdyIO.d34.W9F.02af.3NdkBtjSEKHoa/PINEkSzrVE1u', '1970-10-17', 41578559, 1554227817, 'Apt. 738', 'Bella Vista', 'La Rioja', 'http://lorempixel.com/640/480/?86039', 'alumno', 'pxwnQLNWqQ', '2017-06-23 08:30:27', '2017-06-23 08:30:27', '0000-00-00 00:00:00'),
(9, 26310659, 'Serenity', 'Nikolaus', 'femenino', 'hgerlach@example.com', '$2y$10$BDtxj1HsRonRoE1Yz9bUEe7om/GapUT.PLSa2Ok4gQRMysJPwjMZe', '1978-12-12', 40100772, 1581382712, 'Apt. 235', 'San Justo', 'Santa Fe', 'http://lorempixel.com/640/480/?11180', 'tutor', 'qJXuzjNciE', '2017-06-23 08:30:27', '2017-06-23 08:30:27', '0000-00-00 00:00:00'),
(10, 26919051, 'Haylee', 'Hermann', 'femenino', 'margot.bogan@example.com', '$2y$10$iu5cUocyUc8ZwqsqB6gtmea8Y3fJzPb66ysn6ulsYIqcwI0pDWB7u', '2005-09-11', 44470335, 1520308292, 'Suite 267', 'La Plata', 'Buenos Aires', 'http://lorempixel.com/640/480/?72068', 'personal', 'h1M1qgnK8J', '2017-06-23 08:30:27', '2017-06-23 08:30:27', '0000-00-00 00:00:00'),
(11, 26982512, 'Natalie', 'Daugherty', 'masculino', 'boyle.marcia@example.net', '$2y$10$fZAJjn8VCZcvlJESNpKzMufZxBmITMQuVm4nTqVUaDhpJdkYbC8ca', '2008-03-07', 47500109, 1598660883, 'Suite 228', 'Rosario', 'Catamarca', 'http://lorempixel.com/640/480/?52855', 'alumno', 'vhxOFFCJKF', '2017-06-23 08:30:27', '2017-06-23 08:30:27', '0000-00-00 00:00:00'),
(12, 27214037, 'Calista', 'Reilly', 'masculino', 'rippin.rashad@example.com', '$2y$10$SYTfuMUe.OybrF0gG1b42ezwfoR2hBC62UbRRcpTzg5Rc5H9kMlDK', '1988-06-29', 45817848, 1520071132, 'Suite 304', 'San Justo', 'La Rioja', 'http://lorempixel.com/640/480/?83079', 'alumno', 'cZVi6DHkb6', '2017-06-23 08:30:27', '2017-06-23 08:30:27', '0000-00-00 00:00:00'),
(13, 27581130, 'Bart', 'Nader', 'femenino', 'tremblay.jess@example.org', '$2y$10$GzWqQJ.Wjuoo3QHgw0.9JeD4waZv1BZ9mk5wf.G76.lGy4jEk3PvK', '1993-12-02', 48985703, 1585280946, 'Apt. 029', 'Moron', 'La Pampa', 'http://lorempixel.com/640/480/?43616', 'tutor', '66MjNLwGq6', '2017-06-23 08:30:26', '2017-06-23 08:30:26', '0000-00-00 00:00:00'),
(14, 27585342, 'Abel', 'Stokes', 'femenino', 'collins.crawford@example.org', '$2y$10$HP5.VOv3lAUtPrZNb/N21OcYOwDwZCBTtAi4jbcVtr0GN3IdffsaO', '2009-09-01', 43312372, 1565919935, 'Suite 049', 'San Justo', 'Formosa', 'http://lorempixel.com/640/480/?56571', 'tutor', 'EChCD5e8rz', '2017-06-23 08:30:27', '2017-06-23 08:30:27', '0000-00-00 00:00:00'),
(15, 27723208, 'Adalberto', 'Haag', 'femenino', 'verda35@example.org', '$2y$10$hvWIC17A/sV/e/sSawL4huwF0zkgzGo8VQ3Ot.dwh7mPsC/mkDlfC', '2015-11-21', 40178937, 1599920595, 'Suite 941', 'Liniers', 'San Luis', 'http://lorempixel.com/640/480/?86284', 'personal', 'QaWEBlLsFJ', '2017-06-23 08:30:27', '2017-06-23 08:30:27', '0000-00-00 00:00:00'),
(16, 28152998, 'Lauriane', 'Koch', 'masculino', 'horace40@example.org', '$2y$10$dTFqLtRZ0GppEyXOPya36uPFYH/VZzDcrfrXhLTqXQUnrL7K80hUW', '2007-12-17', 46664748, 1516440931, 'Apt. 098', 'Ramos Mejía', 'Santa Fe', 'http://lorempixel.com/640/480/?65611', 'alumno', 'vpNKRtugdV', '2017-06-23 08:30:26', '2017-06-23 08:30:26', '0000-00-00 00:00:00'),
(17, 28176536, 'Leon', 'Ratke', 'femenino', 'laverne48@example.net', '$2y$10$Avo93TxEy1ebS5UyPsNrGe06yDZfVY/ZlPkdRm9e1cRPQNqZdL9QC', '2011-10-15', 44957079, 1501285713, 'Suite 003', 'Ramos Mejía', 'Buenos Aires', 'http://lorempixel.com/640/480/?44173', 'personal', 'RjQ3Bz7FEp', '2017-06-23 08:30:27', '2017-06-23 08:30:27', '0000-00-00 00:00:00'),
(18, 28210268, 'Demarco', 'Sporer', 'masculino', 'julius71@example.org', '$2y$10$ncKf13B8MQwryMQ3hQMI1eyCR35fMUyNzP3cu2J5rl/ksvavH4sL2', '2013-02-06', 48604373, 1548464857, 'Apt. 858', 'Liniers', 'Buenos Aires', 'http://lorempixel.com/640/480/?53606', 'personal', 'XhW8dgLxRtdgeJvwgyroVqyRkqLDRfPtLOX6Hr5t0VjU7mF3oeCyKJe2Nzx4', '2017-06-23 08:30:27', '2017-06-23 08:30:27', '0000-00-00 00:00:00'),
(19, 28249639, 'Aylin', 'Davis', 'masculino', 'dgislason@example.org', '$2y$10$77AiT3YMfDIglSZSf5TEwOyBcLj2Cx1qK/WX0jUXkbzCkUhR.ug/S', '2006-08-01', 43222679, 1557145938, 'Apt. 911', 'Rosario', 'Catamarca', 'http://lorempixel.com/640/480/?57861', 'tutor', 'mChr7m4KOh8mfDM9MhvPV21Izsz90s8f9inDJR5yQBdbvakgJTMFjYrpASTQ', '2017-06-23 08:30:27', '2017-06-23 08:30:27', '0000-00-00 00:00:00'),
(20, 29578561, 'Geoffrey', 'Will', 'masculino', 'vruecker@example.com', '$2y$10$jKSke73jdNTcXXT2AKZzIe8c7w27apOc3yDymOFOmdWvdPDImAfiC', '1971-07-03', 46692059, 1543492925, 'Apt. 428', 'San Justo', 'San Luis', 'http://lorempixel.com/640/480/?59465', 'alumno', 'XJ2buIcv0Ecv2AkXzvYFKgkfrDYGat4cUmZgtqmwDKiC9I5tYn0XTHrsisAP', '2017-06-23 08:30:27', '2017-06-23 08:30:27', '0000-00-00 00:00:00'),
(21, 30266025, 'Linnie', 'Russel', 'masculino', 'robel.faustino@example.org', '$2y$10$.eTjlrkbRdyFX1IFMwsgieJxofJQ5wY.79u/37gxo/mNA2SERN8q.', '2001-02-20', 42206847, 1526505054, 'Suite 050', 'San Justo', 'La Rioja', 'http://lorempixel.com/640/480/?14525', 'tutor', 'YK5OuAUY6H', '2017-06-23 08:30:27', '2017-06-23 08:30:27', '0000-00-00 00:00:00'),
(58, 30709798, 'Murl', 'Kihn', 'masculino', 'jessie90@example.com', '$2y$10$on6ZoyHocnK0mOHsZJeRuebvfGAhadgyK6G2bbvzdEkrkvxMWLFt6', '2008-10-18', 46132945, 1553607282, 'Apt. 411', 'Moron', 'Buenos Aires', 'http://lorempixel.com/640/480/?51710', 'tutor', 'Zu9WGi63A0', '2017-06-23 08:30:28', '2017-06-23 08:30:28', '0000-00-00 00:00:00'),
(22, 30725613, 'Lambert', 'Abernathy', 'masculino', 'pstroman@example.com', '$2y$10$/dmf7tWEjPjv.PXPr30pmuRqXhuJ6JuMlIOXoApsTEaV4Up88EH6C', '1989-12-16', 44600985, 1564809217, 'Apt. 415', 'Liniers', 'Santa Fe', 'http://lorempixel.com/640/480/?13294', 'tutor', 'qG3otSeKI7', '2017-06-23 08:30:27', '2017-06-23 08:30:27', '0000-00-00 00:00:00'),
(23, 31462260, 'Ross', 'Reilly', 'femenino', 'orn.blanca@example.com', '$2y$10$T44PJVqh9c/od0w8I3/fqeFxVB6ywLAaUm1c/s1JUqb9CrO9zSn.e', '1989-10-05', 47296249, 1548837760, 'Suite 348', 'Moron', 'La Pampa', 'http://lorempixel.com/640/480/?13701', 'tutor', 'zJD1koD0qo', '2017-06-23 08:30:27', '2017-06-23 08:30:27', '0000-00-00 00:00:00'),
(24, 31789457, 'Margatita', 'Villafañe', 'femenino', 'profesor@email.com', '123456', '1985-07-01', 46573298, 1567209735, 'Avenida de Mayo 2019', 'Ramos Mejía, La Matanza', 'Buenos Aires', '', 'personal', NULL, '2017-06-22 03:00:00', '2017-06-22 03:00:00', '0000-00-00 00:00:00'),
(25, 32238237, 'Beulah', 'Schinner', 'femenino', 'elvera03@example.net', '$2y$10$zp02yDYeAkBbJRRsG.4VXuo.p68i9lYUvKkQdDcI.QkijljL3OnBO', '1990-10-01', 43770455, 1547793328, 'Apt. 101', 'Rosario', 'Formosa', 'http://lorempixel.com/640/480/?77577', 'alumno', 'lnJObhtH4F', '2017-06-23 08:30:27', '2017-06-23 08:30:27', '0000-00-00 00:00:00'),
(27, 32267202, 'Benedict', 'Swift', 'femenino', 'assunta54@example.com', '$2y$10$0p19Tn2QnXv1R8KBu6PV.uxULLFlllaqwzQ9fb2pYffMj5bVwykn.', '1988-02-18', 44100212, 1558682867, 'Apt. 417', 'Ramos Mejía', 'Buenos Aires', 'http://lorempixel.com/640/480/?40522', 'alumno', '3BjmiGF5fj', '2017-06-23 08:30:26', '2017-06-23 08:30:26', '0000-00-00 00:00:00'),
(28, 32704909, 'Nelle', 'Kovacek', 'femenino', 'reuben.kuphal@example.com', '$2y$10$6mfawxLJvXDl/6hFa51mJemHTECaiM0EgEOXQQX4QPBGlUFvxF4hu', '1982-08-11', 49792454, 1560814530, 'Apt. 041', 'Bella Vista', 'La Pampa', 'http://lorempixel.com/640/480/?46410', 'tutor', 'QOhRPxPiFZ', '2017-06-23 08:30:27', '2017-06-23 08:30:27', '0000-00-00 00:00:00'),
(29, 32718449, 'Lawrence', 'Kreiger', 'femenino', 'felipa.ferry@example.org', '$2y$10$KXzltKTa3IS4hAIJqXsJuuqTLmOtRyV16ft8JnYExiqYY2j5/V1Wq', '2003-04-21', 44701987, 1517068669, 'Apt. 286', 'Liniers', 'San Luis', 'http://lorempixel.com/640/480/?14160', 'personal', 'UAy7DES9Qh', '2017-06-23 08:30:28', '2017-06-23 08:30:28', '0000-00-00 00:00:00'),
(30, 33173727, 'Ambrose', 'Jakubowski', 'masculino', 'ewald91@example.org', '$2y$10$R9MbW6slnROP5YCrZZppJOXyMQrRzuwUv7AoGRiRuFiXFobiPkJ1i', '2005-08-22', 46715939, 1500471564, 'Suite 037', 'Bella Vista', 'La Rioja', 'http://lorempixel.com/640/480/?65846', 'tutor', 'PYLBIlpgJP', '2017-06-23 08:30:28', '2017-06-23 08:30:28', '0000-00-00 00:00:00'),
(31, 33213897, 'Genevieve', 'Marquardt', 'femenino', 'janet.klein@example.com', '$2y$10$J9Cvyn7RJrisBnC3tkhhBO7QfTo43QuSRGueJPcUQqAepbeh58ZZ2', '1981-09-29', 44820671, 1546879093, 'Suite 676', 'San Justo', 'Buenos Aires', 'http://lorempixel.com/640/480/?21883', 'alumno', 'd4rqRQ7Jwh', '2017-06-23 08:30:26', '2017-06-23 08:30:26', '0000-00-00 00:00:00'),
(32, 33247459, 'Justen', 'Heaney', 'masculino', 'yundt.bailey@example.com', '$2y$10$Bz8jQS..CSjGdRx.N7j7qObXK3VDvQ1LlPlwt474A2zES9rlxMEQa', '1977-11-20', 45025423, 1533830896, 'Apt. 600', 'San Justo', 'La Rioja', 'http://lorempixel.com/640/480/?19943', 'alumno', 'Q39SSm8owG', '2017-06-23 08:30:26', '2017-06-23 08:30:26', '0000-00-00 00:00:00'),
(33, 33252721, 'Avis', 'McDermott', 'masculino', 'jordane.bayer@example.net', '$2y$10$C32eXRvCN8UddocicaGXQ.QnZ8WFrTl3HDKDoUrcChu/aLo7urZFi', '2012-10-30', 43764148, 1536788337, 'Apt. 770', 'Rosario', 'Santa Fe', 'http://lorempixel.com/640/480/?52195', 'tutor', 'UzlQvHVDrm', '2017-06-23 08:30:27', '2017-06-23 08:30:27', '0000-00-00 00:00:00'),
(34, 33473119, 'Janick', 'Jakubowski', 'femenino', 'rogelio40@example.com', '$2y$10$EiFJHeDtj/leFYTLZyNVz.pxhD.FFq7Yf7/Dd1OWnxOds1gcRT/Ga', '1976-08-02', 44339817, 1596092778, 'Apt. 184', 'Rosario', 'Catamarca', 'http://lorempixel.com/640/480/?61241', 'alumno', 'HbH5dNV2cg', '2017-06-23 08:30:28', '2017-06-23 08:30:28', '0000-00-00 00:00:00'),
(35, 33769925, 'Jena', 'Goldner', 'masculino', 'dortha.jast@example.net', '$2y$10$2ZiNyyJRziBBpbTc1D..F.BOTLND9g1Qw8h.K42ayqqVPb6KmeF/2', '2001-10-18', 48423738, 1520739877, 'Suite 317', 'Bella Vista', 'Santa Fe', 'http://lorempixel.com/640/480/?89605', 'alumno', '0Ioy9uiEwd', '2017-06-23 08:30:27', '2017-06-23 08:30:27', '0000-00-00 00:00:00'),
(36, 34088611, 'Solon', 'Schowalter', 'masculino', 'fjohnston@example.org', '$2y$10$2q.GP.wFv/96JFI7RayK1OTCdlN24VnMkUEkc2P.hFbFNzccLhf5.', '2012-05-30', 44554613, 1567234642, 'Suite 864', 'Bella Vista', 'Córdoba', 'http://lorempixel.com/640/480/?42323', 'tutor', 'WhhoYvZsAe', '2017-06-23 08:30:27', '2017-06-23 08:30:27', '0000-00-00 00:00:00'),
(37, 34246240, 'Dorcas', 'Turner', 'femenino', 'jparisian@example.org', '$2y$10$2K6Ja8C8R5M6VyPhCHhX6ePdFbhFi26/cg.EAC9hEusZZeHCyCgiC', '2012-08-12', 46158584, 1572807092, 'Apt. 361', 'Bella Vista', 'Formosa', 'http://lorempixel.com/640/480/?52304', 'alumno', '9ImuTtpvPO', '2017-06-23 08:30:27', '2017-06-23 08:30:27', '0000-00-00 00:00:00'),
(38, 34869444, 'Rafael', 'Gottlieb', 'femenino', 'michele89@example.com', '$2y$10$VTnFJVO0MvhKZ8NAV2BTMuDhmqh4OAWW1AHQskjAc78lsAk1vJbz2', '2005-01-18', 45981377, 1558634297, 'Suite 523', 'Bella Vista', 'Buenos Aires', 'http://lorempixel.com/640/480/?58545', 'personal', 'NWd4s0sI0g', '2017-06-23 08:30:27', '2017-06-23 08:30:27', '0000-00-00 00:00:00'),
(39, 34996571, 'Gerardo', 'Stiedemann', 'femenino', 'graham.mittie@example.com', '$2y$10$.IIenJyi6EqCQDiuACSLj.yaQVRHusIkGvd1pCfry5muwNpyt9ANi', '2002-03-31', 44725167, 1559749686, 'Suite 172', 'Rosario', 'La Rioja', 'http://lorempixel.com/640/480/?53684', 'alumno', '9b3WCXLi94', '2017-06-23 08:30:28', '2017-06-23 08:30:28', '0000-00-00 00:00:00'),
(40, 35246252, 'Emiliano', 'Serkin', 'masculino', 'emi.serkin@gmail.com', '$2y$10$gto9/5qbA6rnCZ5R0dwG..x1PWjNc9c7MfLbnjQHeFfAipwLqEtYu', '1990-03-03', 46516782, 1531811718, 'Av. Presidente Peron 3393', 'San Justo, La Matanza', 'Buenos Aires', '', 'admin', 'QbithjAEQDRphzXqXEvSPEceWG9aHA9AIOj63XIe0psXjcl0KTD9PmueJfVS', '2017-06-16 03:00:00', '2017-06-16 03:00:00', '0000-00-00 00:00:00'),
(41, 35888974, 'Carleton', 'Prohaska', 'femenino', 'athena.will@example.com', '$2y$10$4T5uVy8tX7Dr5KL679p5kOl8Ve.wd1aKTof.fwI.jB9uxaKVqzYue', '1998-05-05', 44743822, 1525997572, 'Suite 197', 'San Justo', 'Córdoba', 'http://lorempixel.com/640/480/?22471', 'alumno', 'yd5LqsgOnq', '2017-06-23 08:30:26', '2017-06-23 08:30:26', '0000-00-00 00:00:00'),
(42, 36013877, 'Lesly', 'Farrell', 'masculino', 'alejandrin.robel@example.org', '$2y$10$cmRIwngNr.eFgionKwQ.KeljZy8.pet3OmnvTytQj6Tv9N9I3lf9m', '1982-05-31', 0, 1592031491, 'Apt. 876', 'La Plata', 'La Rioja', 'http://lorempixel.com/640/480/?76908', 'personal', 'B6gJcYyMTg', '2017-06-23 08:30:28', '2017-06-23 08:30:28', '0000-00-00 00:00:00'),
(43, 36259443, 'Daron', 'Ferry', 'masculino', 'hannah.dicki@example.com', '$2y$10$PusAh/gpTnpSIHiAvMQhVubnzCi2oK4ECLEXooBPViIG9NTxkI9Ze', '1977-07-26', 47629144, 1535672119, 'Suite 422', 'Moron', 'Santa Fe', 'http://lorempixel.com/640/480/?91148', 'personal', '4UOaTQsLoS', '2017-06-23 08:30:27', '2017-06-23 08:30:27', '0000-00-00 00:00:00'),
(44, 36295193, 'Shanny', 'Thiel', 'masculino', 'sabryna62@example.com', '$2y$10$PG/Q0GbJufV2YNR.CKVUuevrb80qQNNFWh3s39rNRHYioMAvW.OzC', '1971-03-18', 46365519, 1584105344, 'Suite 241', 'San Justo', 'Catamarca', 'http://lorempixel.com/640/480/?37731', 'alumno', 'NbP88p1GMY', '2017-06-23 08:30:27', '2017-06-23 08:30:27', '0000-00-00 00:00:00'),
(45, 36306268, 'Morgan', 'Johns', 'femenino', 'gerald.kub@example.net', '$2y$10$j/V.WJ8KAW5C4ie0u0SF6OTEr1iPqyhxJ.qVqdTbXWjRpE4aHrj5q', '1991-05-07', 40741730, 1583793260, 'Suite 793', 'Rosario', 'La Pampa', 'http://lorempixel.com/640/480/?66207', 'personal', 'mkQZUf21wv', '2017-06-23 08:30:27', '2017-06-23 08:30:27', '0000-00-00 00:00:00'),
(46, 36390173, 'Austin', 'Emmerich', 'femenino', 'ljohnson@example.net', '$2y$10$11jDfw2Kwf5/O.dJeTJhqe2HF1haG5E9zi8vFKN3pnUQeA7j856Li', '1983-11-24', 43592537, 1574010745, 'Apt. 237', 'La Plata', 'Buenos Aires', 'http://lorempixel.com/640/480/?34976', 'tutor', 'HcLaSv3Q5k', '2017-06-23 08:30:28', '2017-06-23 08:30:28', '0000-00-00 00:00:00'),
(47, 36564793, 'Henry', 'Mitchell', 'femenino', 'rodriguez.eden@example.net', '$2y$10$uyDtj/tYWBPjeIDfOqjfr.gpk55GXyJOHEXoqFRXAfrrQCzfY6uri', '1974-04-10', 44429348, 1509629033, 'Suite 109', 'Moron', 'Catamarca', 'http://lorempixel.com/640/480/?31064', 'tutor', 'DK24XTUoaE', '2017-06-23 08:30:26', '2017-06-23 08:30:26', '0000-00-00 00:00:00'),
(48, 36668518, 'Dangelo', 'Gorczany', 'femenino', 'damon.walsh@example.org', '$2y$10$GUBFMj3g7Unlv9z/Jd/8Je5ofveZhp3c2XU/jk/84cNpWrwvUsitS', '2011-06-19', 45049035, 1520744872, 'Apt. 715', 'Liniers', 'La Rioja', 'http://lorempixel.com/640/480/?65375', 'tutor', 'r8uWGEyo76', '2017-06-23 08:30:27', '2017-06-23 08:30:27', '0000-00-00 00:00:00'),
(49, 36773726, 'Gayle', 'Mills', 'femenino', 'wintheiser.berneice@example.net', '$2y$10$wGm3cMQS8s9ZHuWmxHMofeBM6yUr5nuk0Alg1BmK3tY7zTRPTtRvW', '1986-07-27', 46869645, 1574338194, 'Apt. 711', 'Ramos Mejía', 'Formosa', 'http://lorempixel.com/640/480/?77291', 'alumno', 'vbIVfLvVzA', '2017-06-23 08:30:27', '2017-06-23 08:30:27', '0000-00-00 00:00:00'),
(50, 37393168, 'Cole', 'Gulgowski', 'femenino', 'showe@example.org', '$2y$10$K3b48r1I5NqnZZqHoyZ2DeSFKvUsIqhp1msr4Pp4AqeTrciz3ARvu', '1980-12-20', 40934654, 1505353939, 'Suite 590', 'Rosario', 'La Rioja', 'http://lorempixel.com/640/480/?85560', 'tutor', 'TAeMxpMqdO', '2017-06-23 08:30:27', '2017-06-23 08:30:27', '0000-00-00 00:00:00'),
(51, 37797071, 'Jaqueline', 'Rempel', 'masculino', 'uwalker@example.com', '$2y$10$c.im9hMZffWKYnxeyTxKR.AVBeJyfbhaf3Q2UoGu1WESnFIWHnBTy', '2005-01-18', 40729973, 1525002883, 'Apt. 931', 'San Justo', 'Formosa', 'http://lorempixel.com/640/480/?75012', 'tutor', 'rsS3G0ObCL', '2017-06-23 08:30:27', '2017-06-23 08:30:27', '0000-00-00 00:00:00'),
(52, 37961840, 'Yoshiko', 'Wiegand', 'masculino', 'kconn@example.com', '$2y$10$IzlFEdJOB9rDM3vAp5QMMuYCIYd77lq69M6a1MQs0sICxcHsYlUxO', '1998-11-15', 47487657, 1524369691, 'Apt. 291', 'San Justo', 'Catamarca', 'http://lorempixel.com/640/480/?44196', 'tutor', 'XkGoqlNUMV', '2017-06-23 08:30:27', '2017-06-23 08:30:27', '0000-00-00 00:00:00'),
(53, 38146895, 'Rhianna', 'Powlowski', 'femenino', 'kaleb70@example.com', '$2y$10$VjOGzssv88IIZjFEotG5N.xjg2xFOqXdw0XdR9LuMJbQQtnK3eXWG', '1986-07-08', 48800133, 1590280772, 'Suite 734', 'Moron', 'Catamarca', 'http://lorempixel.com/640/480/?71885', 'alumno', 'Yn56eMRBCn', '2017-06-23 08:30:26', '2017-06-23 08:30:26', '0000-00-00 00:00:00'),
(54, 38353549, 'Arnulfo', 'Reinger', 'masculino', 'gilda75@example.com', '$2y$10$t4IPQluajlQrzXPj41aoHOyTfzPCVhcpmYg1.1Waf/7JO9IeS3H4.', '1990-12-05', 41094419, 1592911942, 'Apt. 325', 'La Plata', 'Córdoba', 'http://lorempixel.com/640/480/?75889', 'personal', 'AMZFHAjyRndPlOOFXSuPA8NnBwHBSywTVjQjiaSzi9dqCPfzO33ujg25S9O4', '2017-06-23 08:30:27', '2017-06-23 08:30:27', '0000-00-00 00:00:00'),
(55, 38467797, 'Lurline', 'Kuvalis', 'masculino', 'ibarton@example.com', '$2y$10$zAffRpNcz0tRg3LarRRGMOUNWkZSiDgLnKQjKDs15Fe8GrV2kfr7G', '1986-02-07', 49551516, 1597962812, 'Apt. 649', 'San Justo', 'Buenos Aires', 'http://lorempixel.com/640/480/?80649', 'tutor', 'Ugdkio5ZIE', '2017-06-23 08:30:28', '2017-06-23 08:30:28', '0000-00-00 00:00:00'),
(56, 38581317, 'Davin', 'Sporer', 'femenino', 'gayle12@example.org', '$2y$10$GiGmXxVi7Ov3f.msh4peA.3KB6lk.NvoZD7d/.zumJnCgIRTnyrrS', '1974-04-19', 49235793, 1531825126, 'Suite 295', 'Ramos Mejía', 'La Rioja', 'http://lorempixel.com/640/480/?69285', 'tutor', 'P4Jim669pc', '2017-06-23 08:30:27', '2017-06-23 08:30:27', '0000-00-00 00:00:00'),
(57, 38989824, 'Deanna', 'Roberts', 'masculino', 'jaquelin17@example.com', '$2y$10$XIYV1oQB8DbRt3fJdgAQNOxVbReeSTS/PjmwVX6ELfhkxxMo0fQ9q', '1978-12-30', 46693923, 1531329371, 'Suite 799', 'Ramos Mejía', 'Santa Fe', 'http://lorempixel.com/640/480/?26365', 'personal', 'SaFFN4PzPy', '2017-06-23 08:30:27', '2017-06-23 08:30:27', '0000-00-00 00:00:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `courses_schedules` (`turno`);

--
-- Indices de la tabla `evaluations`
--
ALTER TABLE `evaluations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `evaluations_subjects` (`materia_id`);

--
-- Indices de la tabla `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `messages_type` (`mensaje_tipo_id`),
  ADD KEY `escuela_id` (`escuela_id`),
  ADD KEY `mensaje_padre_id` (`mensaje_padre_id`),
  ADD KEY `user_envia` (`user_envia`);

--
-- Indices de la tabla `messages_types`
--
ALTER TABLE `messages_types`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `message_recipient`
--
ALTER TABLE `message_recipient`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mensaje_id` (`mensaje_id`),
  ADD KEY `recibe_dni` (`recibe_dni`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`dni`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `role_permission`
--
ALTER TABLE `role_permission`
  ADD PRIMARY KEY (`id_rol`,`id_permiso`,`admin_asigna`),
  ADD KEY `id_permiso` (`id_permiso`),
  ADD KEY `admin_asigna` (`admin_asigna`);

--
-- Indices de la tabla `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `school_staff`
--
ALTER TABLE `school_staff`
  ADD PRIMARY KEY (`dni`);

--
-- Indices de la tabla `security_admins`
--
ALTER TABLE `security_admins`
  ADD PRIMARY KEY (`dni`),
  ADD KEY `escuela_id` (`escuela_id`);

--
-- Indices de la tabla `staff_role`
--
ALTER TABLE `staff_role`
  ADD PRIMARY KEY (`dni`,`rol_id`),
  ADD KEY `rol_id` (`rol_id`);

--
-- Indices de la tabla `staff_school_courses`
--
ALTER TABLE `staff_school_courses`
  ADD PRIMARY KEY (`dni`,`escuela_id`,`curso_id`),
  ADD KEY `escuela_id` (`escuela_id`),
  ADD KEY `curso_id` (`curso_id`);

--
-- Indices de la tabla `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`dni`);

--
-- Indices de la tabla `student_course_subject`
--
ALTER TABLE `student_course_subject`
  ADD PRIMARY KEY (`alumno_id`,`materia_id`),
  ADD KEY `student_course_subject_subject` (`materia_id`),
  ADD KEY `student_course_subject_course` (`curso_id`);

--
-- Indices de la tabla `student_evaluation`
--
ALTER TABLE `student_evaluation`
  ADD PRIMARY KEY (`alumno_id`,`evaluacion_id`),
  ADD KEY `student_evaluation_evaluations` (`evaluacion_id`);

--
-- Indices de la tabla `student_parent`
--
ALTER TABLE `student_parent`
  ADD PRIMARY KEY (`alumno_id`,`padre_id`),
  ADD KEY `student_parent_parents` (`padre_id`);

--
-- Indices de la tabla `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subjects_teacher` (`profesor`),
  ADD KEY `escuela_id` (`escuela_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`dni`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT de la tabla `evaluations`
--
ALTER TABLE `evaluations`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT de la tabla `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT de la tabla `messages_types`
--
ALTER TABLE `messages_types`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `message_recipient`
--
ALTER TABLE `message_recipient`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;
--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `schools`
--
ALTER TABLE `schools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT de la tabla `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `evaluations`
--
ALTER TABLE `evaluations`
  ADD CONSTRAINT `evaluations_subjects` FOREIGN KEY (`materia_id`) REFERENCES `subjects` (`id`);

--
-- Filtros para la tabla `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_2` FOREIGN KEY (`escuela_id`) REFERENCES `schools` (`id`),
  ADD CONSTRAINT `messages_ibfk_3` FOREIGN KEY (`mensaje_padre_id`) REFERENCES `messages` (`id`),
  ADD CONSTRAINT `messages_ibfk_4` FOREIGN KEY (`user_envia`) REFERENCES `users` (`dni`),
  ADD CONSTRAINT `messages_type` FOREIGN KEY (`mensaje_tipo_id`) REFERENCES `messages_types` (`id`);

--
-- Filtros para la tabla `message_recipient`
--
ALTER TABLE `message_recipient`
  ADD CONSTRAINT `message_recipient_ibfk_1` FOREIGN KEY (`mensaje_id`) REFERENCES `messages` (`id`),
  ADD CONSTRAINT `message_recipient_ibfk_2` FOREIGN KEY (`recibe_dni`) REFERENCES `users` (`dni`);

--
-- Filtros para la tabla `parents`
--
ALTER TABLE `parents`
  ADD CONSTRAINT `parents_ibfk_1` FOREIGN KEY (`dni`) REFERENCES `users` (`dni`);

--
-- Filtros para la tabla `role_permission`
--
ALTER TABLE `role_permission`
  ADD CONSTRAINT `role_permission_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `role_permission_ibfk_2` FOREIGN KEY (`id_permiso`) REFERENCES `permissions` (`id`),
  ADD CONSTRAINT `role_permission_ibfk_3` FOREIGN KEY (`admin_asigna`) REFERENCES `security_admins` (`dni`);

--
-- Filtros para la tabla `school_staff`
--
ALTER TABLE `school_staff`
  ADD CONSTRAINT `staff_users` FOREIGN KEY (`dni`) REFERENCES `users` (`dni`);

--
-- Filtros para la tabla `security_admins`
--
ALTER TABLE `security_admins`
  ADD CONSTRAINT `security_admins_ibfk_2` FOREIGN KEY (`escuela_id`) REFERENCES `schools` (`id`),
  ADD CONSTRAINT `security_admins_ibfk_3` FOREIGN KEY (`dni`) REFERENCES `users` (`dni`);

--
-- Filtros para la tabla `staff_role`
--
ALTER TABLE `staff_role`
  ADD CONSTRAINT `staff_role_ibfk_1` FOREIGN KEY (`dni`) REFERENCES `school_staff` (`dni`),
  ADD CONSTRAINT `staff_role_ibfk_2` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`id`);

--
-- Filtros para la tabla `staff_school_courses`
--
ALTER TABLE `staff_school_courses`
  ADD CONSTRAINT `staff_school_courses_ibfk_1` FOREIGN KEY (`dni`) REFERENCES `school_staff` (`dni`),
  ADD CONSTRAINT `staff_school_courses_ibfk_2` FOREIGN KEY (`escuela_id`) REFERENCES `schools` (`id`),
  ADD CONSTRAINT `staff_school_courses_ibfk_3` FOREIGN KEY (`curso_id`) REFERENCES `courses` (`id`);

--
-- Filtros para la tabla `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_users` FOREIGN KEY (`dni`) REFERENCES `users` (`dni`);

--
-- Filtros para la tabla `student_course_subject`
--
ALTER TABLE `student_course_subject`
  ADD CONSTRAINT `student_course_subject_course` FOREIGN KEY (`curso_id`) REFERENCES `courses` (`id`),
  ADD CONSTRAINT `student_course_subject_student` FOREIGN KEY (`alumno_id`) REFERENCES `students` (`dni`),
  ADD CONSTRAINT `student_course_subject_subject` FOREIGN KEY (`materia_id`) REFERENCES `subjects` (`id`);

--
-- Filtros para la tabla `student_evaluation`
--
ALTER TABLE `student_evaluation`
  ADD CONSTRAINT `student_evaluation_evaluations` FOREIGN KEY (`evaluacion_id`) REFERENCES `evaluations` (`id`),
  ADD CONSTRAINT `student_evaluation_students` FOREIGN KEY (`alumno_id`) REFERENCES `students` (`dni`);

--
-- Filtros para la tabla `student_parent`
--
ALTER TABLE `student_parent`
  ADD CONSTRAINT `student_parent_parents` FOREIGN KEY (`padre_id`) REFERENCES `parents` (`dni`),
  ADD CONSTRAINT `student_parent_students` FOREIGN KEY (`alumno_id`) REFERENCES `students` (`dni`);

--
-- Filtros para la tabla `subjects`
--
ALTER TABLE `subjects`
  ADD CONSTRAINT `subjects_ibfk_1` FOREIGN KEY (`escuela_id`) REFERENCES `schools` (`id`),
  ADD CONSTRAINT `subjects_teacher` FOREIGN KEY (`profesor`) REFERENCES `school_staff` (`dni`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
