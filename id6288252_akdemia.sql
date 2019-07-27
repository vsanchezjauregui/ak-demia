-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 27, 2019 at 05:25 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id6288252_akdemia`
--
CREATE DATABASE IF NOT EXISTS `id6288252_akdemia` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `id6288252_akdemia`;

-- --------------------------------------------------------

--
-- Table structure for table `canton`
--

DROP TABLE IF EXISTS `canton`;
CREATE TABLE IF NOT EXISTS `canton` (
  `numeroCanton` int(11) NOT NULL AUTO_INCREMENT,
  `numeroProvincia` int(11) NOT NULL,
  `nombre` varchar(30) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`numeroCanton`),
  KEY `numeroProvincia` (`numeroProvincia`)
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `canton`
--

INSERT INTO `canton` (`numeroCanton`, `numeroProvincia`, `nombre`) VALUES
(1, 1, 'San Jose'),
(2, 1, 'Escazu'),
(3, 1, 'Desamparados'),
(4, 1, 'Puriscal'),
(5, 1, 'Aserri'),
(6, 1, 'Mora'),
(7, 1, 'Goicoechea'),
(8, 1, 'Santa Ana'),
(9, 1, 'Alajuelita'),
(10, 1, 'Vasquez de Coronado'),
(11, 1, 'Acosta'),
(12, 1, 'Tibas'),
(13, 1, 'Moravia'),
(14, 1, 'Montes de Oca'),
(15, 1, 'Turrubares'),
(16, 1, 'Dota'),
(17, 1, 'Curridabat'),
(18, 1, 'Perez Zeledon'),
(19, 1, 'Leon Cortez'),
(20, 2, 'Alajuela'),
(21, 2, 'San Ramon'),
(22, 2, 'Grecia'),
(23, 2, 'San Mateo'),
(24, 2, 'Atenas'),
(25, 2, 'Naranjo'),
(26, 2, 'Palmares'),
(27, 2, 'Poas'),
(28, 2, 'Orotina'),
(29, 2, 'San Carlos'),
(30, 2, 'Alfaro Ruiz'),
(31, 2, 'Valverde Vega'),
(32, 2, 'Upala'),
(33, 2, 'Los Chiles'),
(34, 2, 'Guatuso'),
(35, 3, 'Cartago'),
(36, 3, 'Paraiso'),
(37, 3, 'La Union'),
(38, 3, 'Jimenez'),
(39, 3, 'Turrialba'),
(40, 3, 'Alvarado'),
(41, 3, 'Oreamuno'),
(42, 3, 'El Guarco'),
(43, 4, 'Heredia'),
(44, 4, 'Barva'),
(45, 4, 'Santo Domingo'),
(46, 4, 'Santa Barbara'),
(47, 4, 'San Rafael'),
(48, 4, 'San Isidro'),
(49, 4, 'Belen'),
(50, 4, 'Flores'),
(51, 4, 'San Pablo'),
(52, 4, 'Sarapiqui'),
(53, 5, 'Liberia'),
(54, 5, 'Nicoya'),
(55, 5, 'Santa Cruz'),
(56, 5, 'Bagaces'),
(57, 5, 'Carrillo'),
(58, 5, 'Cañas'),
(59, 5, 'Abangares'),
(60, 5, 'Tilaran'),
(61, 5, 'Nandayure'),
(62, 5, 'La Cruz'),
(63, 5, 'Hojancha'),
(64, 6, 'Puntarenas'),
(65, 6, 'Esparza'),
(66, 6, 'Buenos Aires'),
(67, 6, 'Montes de Oro'),
(68, 6, 'Osa'),
(69, 6, 'Aguirre'),
(70, 6, 'Golfito'),
(71, 6, 'Coto Brus'),
(72, 6, 'Parrita'),
(73, 6, 'Corredores'),
(74, 6, 'Garabito'),
(75, 7, 'Limon'),
(76, 7, 'Pococi'),
(77, 7, 'Siquirres'),
(78, 7, 'Talamanca'),
(79, 7, 'Matina'),
(80, 7, 'Guacimo');

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

DROP TABLE IF EXISTS `careers`;
CREATE TABLE IF NOT EXISTS `careers` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `career_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `career_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_faculty` int(10) UNSIGNED DEFAULT NULL,
  `career_level` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `career_modality` int(11) NOT NULL,
  `career_duration` int(11) NOT NULL,
  `career_cheif` int(10) UNSIGNED DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `careers_career_name_unique` (`career_name`),
  KEY `id_faculty` (`id_faculty`),
  KEY `career_cheif` (`career_cheif`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`id`, `career_name`, `career_description`, `id_faculty`, `career_level`, `career_modality`, `career_duration`, `career_cheif`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ingeniería De Sistemas', 'El egresado del programa de Ingeniería en Sistemas Computacionales será capaz de identificar y resolver problemas susceptibles de ser atendidos mediante sistemas y tecnologías informáticas y computacionales, desarrollando e innovando con un enfoque sistemático que conduzca a la viabilidad social.', 1, 'bach', 4, 8, 19, NULL, '2018-08-05 13:31:03', '2018-08-05 17:47:14'),
(3, 'Enseñanza Del Inglés', 'Formar profesionales en la enseñanza del inglés capaces desatisfacer las necesidades educativas del país. Facilitar al educando los conocimientos, habilidades y actitudes para que pueda comunicarse con fluidez y con un dominio lingüístico en el idioma inglés.', 4, 'bach', 4, 9, 16, NULL, '2018-08-05 16:38:21', '2018-08-05 17:50:14'),
(5, 'Educación Preescolar', 'El propósito general de la educación preescolar es propiciar el desarrollo integral y armónico del niño a través de los campos formativos de desarrollo personal y social, lenguaje y comunicación, pensamiento matemático, exploración y conocimiento del mundo, expresión y apreciación artística, desarrollo físico y salud.', 4, 'bach', 4, 8, 18, NULL, '2018-08-05 17:15:58', '2018-08-05 17:49:34'),
(6, 'Administración De Recursos Humanos', 'La administración de los Recursos Humanos tiene como objetivo básico contribuir al éxito de la empresa o corporación. Objetivos Funcionales. Mantener la contribución del departamento de recursos humanos a un nivel apropiado a las necesidades de la organización, es una prioridad absoluta. Objetivos Sociales.', 5, 'bach', 4, 8, 17, NULL, '2018-08-06 21:33:15', '2018-08-07 12:24:45');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

DROP TABLE IF EXISTS `countries`;
CREATE TABLE IF NOT EXISTS `countries` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `code` smallint(6) DEFAULT NULL,
  `iso3166a1` char(2) DEFAULT NULL,
  `iso3166a2` char(3) DEFAULT NULL,
  `nombre` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=241 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `code`, `iso3166a1`, `iso3166a2`, `nombre`) VALUES
(1, 4, 'AF', 'AFG', 'Afganistán'),
(2, 248, 'AX', 'ALA', 'Islas Gland'),
(3, 8, 'AL', 'ALB', 'Albania'),
(4, 276, 'DE', 'DEU', 'Alemania'),
(5, 20, 'AD', 'AND', 'Andorra'),
(6, 24, 'AO', 'AGO', 'Angola'),
(7, 660, 'AI', 'AIA', 'Anguilla'),
(8, 10, 'AQ', 'ATA', 'Antártida'),
(9, 28, 'AG', 'ATG', 'Antigua y Barbuda'),
(10, 530, 'AN', 'ANT', 'Antillas Holandesas'),
(11, 682, 'SA', 'SAU', 'Arabia Saudí'),
(12, 12, 'DZ', 'DZA', 'Argelia'),
(13, 32, 'AR', 'ARG', 'Argentina'),
(14, 51, 'AM', 'ARM', 'Armenia'),
(15, 533, 'AW', 'ABW', 'Aruba'),
(16, 36, 'AU', 'AUS', 'Australia'),
(17, 40, 'AT', 'AUT', 'Austria'),
(18, 31, 'AZ', 'AZE', 'Azerbaiyán'),
(19, 44, 'BS', 'BHS', 'Bahamas'),
(20, 48, 'BH', 'BHR', 'Bahréin'),
(21, 50, 'BD', 'BGD', 'Bangladesh'),
(22, 52, 'BB', 'BRB', 'Barbados'),
(23, 112, 'BY', 'BLR', 'Bielorrusia'),
(24, 56, 'BE', 'BEL', 'Bélgica'),
(25, 84, 'BZ', 'BLZ', 'Belice'),
(26, 204, 'BJ', 'BEN', 'Benin'),
(27, 60, 'BM', 'BMU', 'Bermudas'),
(28, 64, 'BT', 'BTN', 'Bhután'),
(29, 68, 'BO', 'BOL', 'Bolivia'),
(30, 70, 'BA', 'BIH', 'Bosnia y Herzegovina'),
(31, 72, 'BW', 'BWA', 'Botsuana'),
(32, 74, 'BV', 'BVT', 'Isla Bouvet'),
(33, 76, 'BR', 'BRA', 'Brasil'),
(34, 96, 'BN', 'BRN', 'Brunéi'),
(35, 100, 'BG', 'BGR', 'Bulgaria'),
(36, 854, 'BF', 'BFA', 'Burkina Faso'),
(37, 108, 'BI', 'BDI', 'Burundi'),
(38, 132, 'CV', 'CPV', 'Cabo Verde'),
(39, 136, 'KY', 'CYM', 'Islas Caimán'),
(40, 116, 'KH', 'KHM', 'Camboya'),
(41, 120, 'CM', 'CMR', 'Camerún'),
(42, 124, 'CA', 'CAN', 'Canadá'),
(43, 140, 'CF', 'CAF', 'República Centroafricana'),
(44, 148, 'TD', 'TCD', 'Chad'),
(45, 203, 'CZ', 'CZE', 'República Checa'),
(46, 152, 'CL', 'CHL', 'Chile'),
(47, 156, 'CN', 'CHN', 'China'),
(48, 196, 'CY', 'CYP', 'Chipre'),
(49, 162, 'CX', 'CXR', 'Isla de Navidad'),
(50, 336, 'VA', 'VAT', 'Ciudad del Vaticano'),
(51, 166, 'CC', 'CCK', 'Islas Cocos'),
(52, 170, 'CO', 'COL', 'Colombia'),
(53, 174, 'KM', 'COM', 'Comoras'),
(54, 180, 'CD', 'COD', 'República Democrática del Congo'),
(55, 178, 'CG', 'COG', 'Congo'),
(56, 184, 'CK', 'COK', 'Islas Cook'),
(57, 408, 'KP', 'PRK', 'Corea del Norte'),
(58, 410, 'KR', 'KOR', 'Corea del Sur'),
(59, 384, 'CI', 'CIV', 'Costa de Marfil'),
(60, 188, 'CR', 'CRI', 'Costa Rica'),
(61, 191, 'HR', 'HRV', 'Croacia'),
(62, 192, 'CU', 'CUB', 'Cuba'),
(63, 208, 'DK', 'DNK', 'Dinamarca'),
(64, 212, 'DM', 'DMA', 'Dominica'),
(65, 214, 'DO', 'DOM', 'República Dominicana'),
(66, 218, 'EC', 'ECU', 'Ecuador'),
(67, 818, 'EG', 'EGY', 'Egipto'),
(68, 222, 'SV', 'SLV', 'El Salvador'),
(69, 784, 'AE', 'ARE', 'Emiratos Árabes Unidos'),
(70, 232, 'ER', 'ERI', 'Eritrea'),
(71, 703, 'SK', 'SVK', 'Eslovaquia'),
(72, 705, 'SI', 'SVN', 'Eslovenia'),
(73, 724, 'ES', 'ESP', 'España'),
(74, 581, 'UM', 'UMI', 'Islas ultramarinas de Estados Unidos'),
(75, 840, 'US', 'USA', 'Estados Unidos'),
(76, 233, 'EE', 'EST', 'Estonia'),
(77, 231, 'ET', 'ETH', 'Etiopía'),
(78, 234, 'FO', 'FRO', 'Islas Feroe'),
(79, 608, 'PH', 'PHL', 'Filipinas'),
(80, 246, 'FI', 'FIN', 'Finlandia'),
(81, 242, 'FJ', 'FJI', 'Fiyi'),
(82, 250, 'FR', 'FRA', 'Francia'),
(83, 266, 'GA', 'GAB', 'Gabón'),
(84, 270, 'GM', 'GMB', 'Gambia'),
(85, 268, 'GE', 'GEO', 'Georgia'),
(86, 239, 'GS', 'SGS', 'Islas Georgias del Sur y Sandwich del Sur'),
(87, 288, 'GH', 'GHA', 'Ghana'),
(88, 292, 'GI', 'GIB', 'Gibraltar'),
(89, 308, 'GD', 'GRD', 'Granada'),
(90, 300, 'GR', 'GRC', 'Grecia'),
(91, 304, 'GL', 'GRL', 'Groenlandia'),
(92, 312, 'GP', 'GLP', 'Guadalupe'),
(93, 316, 'GU', 'GUM', 'Guam'),
(94, 320, 'GT', 'GTM', 'Guatemala'),
(95, 254, 'GF', 'GUF', 'Guayana Francesa'),
(96, 324, 'GN', 'GIN', 'Guinea'),
(97, 226, 'GQ', 'GNQ', 'Guinea Ecuatorial'),
(98, 624, 'GW', 'GNB', 'Guinea-Bissau'),
(99, 328, 'GY', 'GUY', 'Guyana'),
(100, 332, 'HT', 'HTI', 'Haití'),
(101, 334, 'HM', 'HMD', 'Islas Heard y McDonald'),
(102, 340, 'HN', 'HND', 'Honduras'),
(103, 344, 'HK', 'HKG', 'Hong Kong'),
(104, 348, 'HU', 'HUN', 'Hungría'),
(105, 356, 'IN', 'IND', 'India'),
(106, 360, 'ID', 'IDN', 'Indonesia'),
(107, 364, 'IR', 'IRN', 'Irán'),
(108, 368, 'IQ', 'IRQ', 'Iraq'),
(109, 372, 'IE', 'IRL', 'Irlanda'),
(110, 352, 'IS', 'ISL', 'Islandia'),
(111, 376, 'IL', 'ISR', 'Israel'),
(112, 380, 'IT', 'ITA', 'Italia'),
(113, 388, 'JM', 'JAM', 'Jamaica'),
(114, 392, 'JP', 'JPN', 'Japón'),
(115, 400, 'JO', 'JOR', 'Jordania'),
(116, 398, 'KZ', 'KAZ', 'Kazajstán'),
(117, 404, 'KE', 'KEN', 'Kenia'),
(118, 417, 'KG', 'KGZ', 'Kirguistán'),
(119, 296, 'KI', 'KIR', 'Kiribati'),
(120, 414, 'KW', 'KWT', 'Kuwait'),
(121, 418, 'LA', 'LAO', 'Laos'),
(122, 426, 'LS', 'LSO', 'Lesotho'),
(123, 428, 'LV', 'LVA', 'Letonia'),
(124, 422, 'LB', 'LBN', 'Líbano'),
(125, 430, 'LR', 'LBR', 'Liberia'),
(126, 434, 'LY', 'LBY', 'Libia'),
(127, 438, 'LI', 'LIE', 'Liechtenstein'),
(128, 440, 'LT', 'LTU', 'Lituania'),
(129, 442, 'LU', 'LUX', 'Luxemburgo'),
(130, 446, 'MO', 'MAC', 'Macao'),
(131, 807, 'MK', 'MKD', 'ARY Macedonia'),
(132, 450, 'MG', 'MDG', 'Madagascar'),
(133, 458, 'MY', 'MYS', 'Malasia'),
(134, 454, 'MW', 'MWI', 'Malawi'),
(135, 462, 'MV', 'MDV', 'Maldivas'),
(136, 466, 'ML', 'MLI', 'Malí'),
(137, 470, 'MT', 'MLT', 'Malta'),
(138, 238, 'FK', 'FLK', 'Islas Malvinas'),
(139, 580, 'MP', 'MNP', 'Islas Marianas del Norte'),
(140, 504, 'MA', 'MAR', 'Marruecos'),
(141, 584, 'MH', 'MHL', 'Islas Marshall'),
(142, 474, 'MQ', 'MTQ', 'Martinica'),
(143, 480, 'MU', 'MUS', 'Mauricio'),
(144, 478, 'MR', 'MRT', 'Mauritania'),
(145, 175, 'YT', 'MYT', 'Mayotte'),
(146, 484, 'MX', 'MEX', 'México'),
(147, 583, 'FM', 'FSM', 'Micronesia'),
(148, 498, 'MD', 'MDA', 'Moldavia'),
(149, 492, 'MC', 'MCO', 'Mónaco'),
(150, 496, 'MN', 'MNG', 'Mongolia'),
(151, 500, 'MS', 'MSR', 'Montserrat'),
(152, 508, 'MZ', 'MOZ', 'Mozambique'),
(153, 104, 'MM', 'MMR', 'Myanmar'),
(154, 516, 'NA', 'NAM', 'Namibia'),
(155, 520, 'NR', 'NRU', 'Nauru'),
(156, 524, 'NP', 'NPL', 'Nepal'),
(157, 558, 'NI', 'NIC', 'Nicaragua'),
(158, 562, 'NE', 'NER', 'Níger'),
(159, 566, 'NG', 'NGA', 'Nigeria'),
(160, 570, 'NU', 'NIU', 'Niue'),
(161, 574, 'NF', 'NFK', 'Isla Norfolk'),
(162, 578, 'NO', 'NOR', 'Noruega'),
(163, 540, 'NC', 'NCL', 'Nueva Caledonia'),
(164, 554, 'NZ', 'NZL', 'Nueva Zelanda'),
(165, 512, 'OM', 'OMN', 'Omán'),
(166, 528, 'NL', 'NLD', 'Países Bajos'),
(167, 586, 'PK', 'PAK', 'Pakistán'),
(168, 585, 'PW', 'PLW', 'Palau'),
(169, 275, 'PS', 'PSE', 'Palestina'),
(170, 591, 'PA', 'PAN', 'Panamá'),
(171, 598, 'PG', 'PNG', 'Papúa Nueva Guinea'),
(172, 600, 'PY', 'PRY', 'Paraguay'),
(173, 604, 'PE', 'PER', 'Perú'),
(174, 612, 'PN', 'PCN', 'Islas Pitcairn'),
(175, 258, 'PF', 'PYF', 'Polinesia Francesa'),
(176, 616, 'PL', 'POL', 'Polonia'),
(177, 620, 'PT', 'PRT', 'Portugal'),
(178, 630, 'PR', 'PRI', 'Puerto Rico'),
(179, 634, 'QA', 'QAT', 'Qatar'),
(180, 826, 'GB', 'GBR', 'Reino Unido'),
(181, 638, 'RE', 'REU', 'Reunión'),
(182, 646, 'RW', 'RWA', 'Ruanda'),
(183, 642, 'RO', 'ROU', 'Rumania'),
(184, 643, 'RU', 'RUS', 'Rusia'),
(185, 732, 'EH', 'ESH', 'Sahara Occidental'),
(186, 90, 'SB', 'SLB', 'Islas Salomón'),
(187, 882, 'WS', 'WSM', 'Samoa'),
(188, 16, 'AS', 'ASM', 'Samoa Americana'),
(189, 659, 'KN', 'KNA', 'San Cristóbal y Nevis'),
(190, 674, 'SM', 'SMR', 'San Marino'),
(191, 666, 'PM', 'SPM', 'San Pedro y Miquelón'),
(192, 670, 'VC', 'VCT', 'San Vicente y las Granadinas'),
(193, 654, 'SH', 'SHN', 'Santa Helena'),
(194, 662, 'LC', 'LCA', 'Santa Lucía'),
(195, 678, 'ST', 'STP', 'Santo Tomé y Príncipe'),
(196, 686, 'SN', 'SEN', 'Senegal'),
(197, 891, 'CS', 'SCG', 'Serbia y Montenegro'),
(198, 690, 'SC', 'SYC', 'Seychelles'),
(199, 694, 'SL', 'SLE', 'Sierra Leona'),
(200, 702, 'SG', 'SGP', 'Singapur'),
(201, 760, 'SY', 'SYR', 'Siria'),
(202, 706, 'SO', 'SOM', 'Somalia'),
(203, 144, 'LK', 'LKA', 'Sri Lanka'),
(204, 748, 'SZ', 'SWZ', 'Suazilandia'),
(205, 710, 'ZA', 'ZAF', 'Sudáfrica'),
(206, 736, 'SD', 'SDN', 'Sudán'),
(207, 752, 'SE', 'SWE', 'Suecia'),
(208, 756, 'CH', 'CHE', 'Suiza'),
(209, 740, 'SR', 'SUR', 'Surinam'),
(210, 744, 'SJ', 'SJM', 'Svalbard y Jan Mayen'),
(211, 764, 'TH', 'THA', 'Tailandia'),
(212, 158, 'TW', 'TWN', 'Taiwán'),
(213, 834, 'TZ', 'TZA', 'Tanzania'),
(214, 762, 'TJ', 'TJK', 'Tayikistán'),
(215, 86, 'IO', 'IOT', 'Territorio Británico del Océano Índico'),
(216, 260, 'TF', 'ATF', 'Territorios Australes Franceses'),
(217, 626, 'TL', 'TLS', 'Timor Oriental'),
(218, 768, 'TG', 'TGO', 'Togo'),
(219, 772, 'TK', 'TKL', 'Tokelau'),
(220, 776, 'TO', 'TON', 'Tonga'),
(221, 780, 'TT', 'TTO', 'Trinidad y Tobago'),
(222, 788, 'TN', 'TUN', 'Túnez'),
(223, 796, 'TC', 'TCA', 'Islas Turcas y Caicos'),
(224, 795, 'TM', 'TKM', 'Turkmenistán'),
(225, 792, 'TR', 'TUR', 'Turquía'),
(226, 798, 'TV', 'TUV', 'Tuvalu'),
(227, 804, 'UA', 'UKR', 'Ucrania'),
(228, 800, 'UG', 'UGA', 'Uganda'),
(229, 858, 'UY', 'URY', 'Uruguay'),
(230, 860, 'UZ', 'UZB', 'Uzbekistán'),
(231, 548, 'VU', 'VUT', 'Vanuatu'),
(232, 862, 'VE', 'VEN', 'Venezuela'),
(233, 704, 'VN', 'VNM', 'Vietnam'),
(234, 92, 'VG', 'VGB', 'Islas Vírgenes Británicas'),
(235, 850, 'VI', 'VIR', 'Islas Vírgenes de los Estados Unidos'),
(236, 876, 'WF', 'WLF', 'Wallis y Futuna'),
(237, 887, 'YE', 'YEM', 'Yemen'),
(238, 262, 'DJ', 'DJI', 'Yibuti'),
(239, 894, 'ZM', 'ZMB', 'Zambia'),
(240, 716, 'ZW', 'ZWE', 'Zimbabue');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
  `id_course` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `courses_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` int(11) NOT NULL,
  `week_time` int(11) NOT NULL,
  `credits` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_course`),
  UNIQUE KEY `courses_courses_name_unique` (`courses_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `distrito`
--

DROP TABLE IF EXISTS `distrito`;
CREATE TABLE IF NOT EXISTS `distrito` (
  `numeroDistrito` int(11) NOT NULL AUTO_INCREMENT,
  `numeroCanton` int(11) NOT NULL,
  `nombre` varchar(30) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`numeroDistrito`),
  KEY `numeroCanton` (`numeroCanton`)
) ENGINE=InnoDB AUTO_INCREMENT=468 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `distrito`
--

INSERT INTO `distrito` (`numeroDistrito`, `numeroCanton`, `nombre`) VALUES
(1, 1, 'Carmen'),
(2, 1, 'Merced'),
(3, 1, 'Hospital'),
(4, 1, 'Catedral'),
(5, 1, 'Zapote'),
(6, 1, 'San Francisco de Dos Rios'),
(7, 1, 'Uruca'),
(8, 1, 'Mata Redonda'),
(9, 1, 'Pavas'),
(10, 1, 'Hatillo'),
(11, 1, 'San Sebastian'),
(12, 2, 'Escazu'),
(13, 2, 'San Antonio'),
(14, 2, 'San Rafael'),
(15, 3, 'Desamparados'),
(16, 3, 'San Miguel'),
(17, 3, 'San Juan de Dios'),
(18, 3, 'San Rafael'),
(19, 3, 'San Antonio'),
(20, 3, 'Frailes'),
(21, 3, 'Patarra'),
(22, 3, 'San Cristobal'),
(23, 3, 'Rosario'),
(24, 3, 'Damas'),
(25, 3, 'San Rafael Abajo'),
(26, 3, 'Gravillas'),
(27, 4, 'Santiago'),
(28, 4, 'Mercedes Sur'),
(29, 4, 'Barbacoas'),
(30, 4, 'Grito Alto'),
(31, 4, 'San Rafael'),
(32, 4, 'Candelarita'),
(33, 4, 'Desamparaditos'),
(34, 4, 'San Antonio'),
(35, 4, 'Chires'),
(36, 4, 'Tarrazu'),
(37, 4, 'San Marcos'),
(38, 4, 'San Lorenzo'),
(39, 4, 'San Carlos'),
(40, 5, 'Aserri'),
(41, 5, 'Tarbaca'),
(42, 5, 'Vuelta de Jorco'),
(43, 5, 'San Gabriel'),
(44, 5, 'Legua'),
(45, 5, 'Monterrey'),
(46, 5, 'Salitrillos'),
(47, 6, 'Colon'),
(48, 6, 'Guayabo'),
(49, 6, 'Tabarcia'),
(50, 6, 'Piedras Negras'),
(51, 6, 'Picagres'),
(52, 7, 'Guadalupe'),
(53, 7, 'San Francisco'),
(54, 7, 'Calle Blancos'),
(55, 7, 'Mata de Platano'),
(56, 7, 'Ipis'),
(57, 7, 'Rancho Redondo'),
(58, 7, 'Purral'),
(59, 8, 'Santa Ana'),
(60, 8, 'Salitral'),
(61, 8, 'Pozos'),
(62, 8, 'Uruca'),
(63, 8, 'Piedades'),
(64, 8, 'Brasil'),
(65, 9, 'Alajuelita'),
(66, 9, 'San Josecito'),
(67, 9, 'San Antonio'),
(68, 9, 'Concepcion'),
(69, 9, 'San Felipe'),
(70, 10, 'San Isidro'),
(71, 10, 'San Rafael'),
(72, 10, 'Jesus (Dulce Nombre)'),
(73, 10, 'Patalillo'),
(74, 10, 'Cascajal'),
(75, 11, 'San Ignacio'),
(76, 11, 'Guaitil'),
(77, 11, 'Palmichal'),
(78, 11, 'Cangrejal'),
(79, 11, 'Sabanillas'),
(80, 12, 'San Juan'),
(81, 12, 'Cinco Esquinas'),
(82, 12, 'Anselmo Llorente'),
(83, 12, 'Leon XIII'),
(84, 12, 'Colima'),
(85, 13, 'San Vicente'),
(86, 13, 'San Jeronimo'),
(87, 13, 'Trinidad'),
(88, 14, 'San Pedro'),
(89, 14, 'Sabanilla'),
(90, 14, 'Mercedes(Betania)'),
(91, 14, 'San Rafael'),
(92, 15, 'San Pablo'),
(93, 15, 'San Pedro'),
(94, 15, 'San Juan de Mata'),
(95, 15, 'San Luis'),
(96, 16, 'Santa Maria'),
(97, 16, 'Jardin'),
(98, 16, 'Copey'),
(99, 16, 'Curridabat'),
(100, 17, 'Granadilla'),
(101, 17, 'Sanchez'),
(102, 17, 'Tirrases'),
(103, 17, 'Curridabat'),
(104, 18, 'San Isidro del General'),
(105, 18, 'General'),
(106, 18, 'Daniel Flores'),
(107, 18, 'Rivas'),
(108, 18, 'San Pedro'),
(109, 18, 'Platanares'),
(110, 18, 'Pejibaye'),
(111, 18, 'Cajon'),
(112, 18, 'Baru'),
(113, 18, 'Rio Nuevo'),
(114, 18, 'El Páramo'),
(115, 19, 'San Pablo'),
(116, 19, 'San Andres'),
(117, 19, 'Llano Bonito'),
(118, 19, 'San Isidro'),
(119, 19, 'Santa Cruz'),
(120, 19, 'San Antonio'),
(121, 20, 'Alajuela'),
(122, 20, 'Carrizal'),
(123, 20, 'San Antonio'),
(124, 20, 'Guacima'),
(125, 20, 'San Isidro'),
(126, 20, 'Sabanilla'),
(127, 20, 'San Rafael'),
(128, 20, 'Rio Segundo'),
(129, 20, 'Desamparados'),
(130, 20, 'Turrucares'),
(131, 20, 'Tambor'),
(132, 20, 'Garita'),
(133, 20, 'Sarapiqui'),
(134, 21, 'San Ramon'),
(135, 21, 'Santiago'),
(136, 21, 'San Juan'),
(137, 21, 'Piedades Norte'),
(138, 21, 'Piedades Sur'),
(139, 21, 'San Rafael'),
(140, 21, 'San Isidro'),
(141, 21, 'Angeles'),
(142, 21, 'Alfaro'),
(143, 21, 'Volio'),
(144, 21, 'Concepcion'),
(145, 21, 'Zapotal'),
(146, 21, 'Peñas Blancas'),
(147, 22, 'Grecia'),
(148, 22, 'San Isidro'),
(149, 22, 'San Jose'),
(150, 22, 'San Roque'),
(151, 22, 'Tacares'),
(152, 22, 'Rio Cuarto'),
(153, 22, 'Puente de Piedra'),
(154, 22, 'Bolivar'),
(155, 23, 'San Mateo'),
(156, 23, 'Desmonte'),
(157, 23, 'Jesus Maria'),
(158, 24, 'Atenas'),
(159, 24, 'Jesus'),
(160, 24, 'Mercedes'),
(161, 24, 'San Isidro'),
(162, 24, 'Concepcion'),
(163, 24, 'San Jose'),
(164, 24, 'Santa Eulalia'),
(165, 25, 'Naranjo'),
(166, 25, 'San Miguel'),
(167, 25, 'San Jose'),
(168, 25, 'Cirri Sur'),
(169, 25, 'San Jeronimo'),
(170, 25, 'San Juan'),
(171, 25, 'Rosario'),
(172, 26, 'Palmares'),
(173, 26, 'Zaragoza'),
(174, 26, 'Buenos Aires'),
(175, 26, 'Santiago'),
(176, 26, 'Candelaria'),
(177, 26, 'Esquipulas'),
(178, 26, 'Granja'),
(179, 27, 'San Pedro'),
(180, 27, 'San Juan'),
(181, 27, 'San Rafael'),
(182, 27, 'Carrillos'),
(183, 27, 'Sabana Redonda'),
(184, 28, 'Orotina'),
(185, 28, 'Mastate'),
(186, 28, 'Hacienda Vieja'),
(187, 28, 'Coyolar'),
(188, 28, 'Ceiba'),
(189, 29, 'Quesada'),
(190, 29, 'Florencia'),
(191, 29, 'Buenavista'),
(192, 29, 'Aguas Zarcas'),
(193, 29, 'Venecia'),
(194, 29, 'Pital'),
(195, 29, 'Fortuna'),
(196, 29, 'Tigra'),
(197, 29, 'Palmera'),
(198, 29, 'Venado'),
(199, 29, 'Cutris'),
(200, 29, 'Monterrey'),
(201, 29, 'Pocosol'),
(202, 30, 'Zarcero'),
(203, 30, 'Laguna'),
(204, 30, 'Tapezco'),
(205, 30, 'Guadalupe'),
(206, 30, 'Palmira'),
(207, 30, 'Zapote'),
(208, 30, 'Brisas'),
(209, 31, 'Sarchi Norte'),
(210, 31, 'Sarchi Sur'),
(211, 31, 'Toro Amarillo'),
(212, 31, 'San Pedro'),
(213, 31, 'Rodriguez'),
(214, 32, 'Upala'),
(215, 32, 'Aguas Claras'),
(216, 32, 'San Jose (Pizote)'),
(217, 32, 'Bijagua'),
(218, 32, 'Delicias'),
(219, 32, 'Dos Rios (Colonia Mayorga)'),
(220, 32, 'Yolillal'),
(221, 33, 'Los Chiles'),
(222, 33, 'Caño Negro'),
(223, 33, 'El Amparo'),
(224, 33, 'San Jorge'),
(225, 34, 'San Rafael'),
(226, 34, 'Buena Vista'),
(227, 34, 'Cote'),
(228, 35, 'Oriental'),
(229, 35, 'Occidental'),
(230, 35, 'Carmen'),
(231, 35, 'San Nicolas'),
(232, 35, 'Aguacaliente (San Francisco)'),
(233, 35, 'Guadalupe (Arenilla)'),
(234, 35, 'Corralillo'),
(235, 35, 'Tierra Blanca'),
(236, 35, 'Dulce Nombre'),
(237, 35, 'Llano Grande'),
(238, 35, 'Quebradilla'),
(239, 36, 'Paraiso'),
(240, 36, 'Santiago'),
(241, 36, 'Orosi'),
(242, 36, 'Cachi'),
(243, 36, 'Llanos de Santa Lucia'),
(244, 37, 'Tres Rios'),
(245, 37, 'San Diego'),
(246, 37, 'San Juan'),
(247, 37, 'San Rafael'),
(248, 37, 'Concepcion'),
(249, 37, 'Dulce Nombre'),
(250, 37, 'San Ramon'),
(251, 37, 'Rio Azul'),
(252, 38, 'Juan Viñas'),
(253, 38, 'Tucurrique'),
(254, 38, 'Pejibaye'),
(255, 39, 'Turrialba'),
(256, 39, 'La Suiza'),
(257, 39, 'Peralta'),
(258, 39, 'Santa cruz'),
(259, 39, 'Santa Teresita'),
(260, 39, 'Pavones'),
(261, 39, 'Tuis'),
(262, 39, 'Tayutic'),
(263, 39, 'Santa Rosa'),
(264, 39, 'Tres Equis'),
(265, 39, 'La Isabel'),
(266, 39, 'Chirripo'),
(267, 40, 'Pacayas'),
(268, 40, 'Cervantes'),
(269, 40, 'Capellades'),
(270, 41, 'San Rafael'),
(271, 41, 'Cot'),
(272, 41, 'Potrero Cerrado'),
(273, 41, 'Cipreses'),
(274, 41, 'Santa Rosa'),
(275, 42, 'Tejar'),
(276, 42, 'San Isidro'),
(277, 42, 'Tobosi'),
(278, 42, 'Patio de Agua'),
(279, 43, 'Heredia'),
(280, 43, 'Mercedes'),
(281, 43, 'San Francisco'),
(282, 43, 'Ulloa'),
(283, 43, 'Varablanca'),
(284, 44, 'Barva'),
(285, 44, 'San Pedro'),
(286, 44, 'San Pablo'),
(287, 44, 'San Roque'),
(288, 44, 'Santa Lucia'),
(289, 44, 'San Jose de la Montaña'),
(290, 45, 'Santo Domingo'),
(291, 45, 'San Vicente'),
(292, 45, 'San Miguel'),
(293, 45, 'Paracito'),
(294, 45, 'Santo Tomas'),
(295, 45, 'Santa Rosa'),
(296, 45, 'Tures'),
(297, 45, 'Para'),
(298, 46, 'Santa Barbara'),
(299, 46, 'San Pedro'),
(300, 46, 'San Juan'),
(301, 46, 'Jesus'),
(302, 46, 'Santo Domingo'),
(303, 46, 'Puraba'),
(304, 47, 'San Rafael'),
(305, 47, 'San Josecito'),
(306, 47, 'Santiago'),
(307, 47, 'Angeles'),
(308, 47, 'Concepcion'),
(309, 48, 'San Isidro'),
(310, 48, 'San Jose'),
(311, 48, 'Concepcion'),
(312, 48, 'San Francisco'),
(313, 49, 'San Antonio'),
(314, 49, 'Ribera'),
(315, 49, 'Asuncion'),
(316, 50, 'San Joaquin de Flores'),
(317, 50, 'Barrantes'),
(318, 50, 'Llorente'),
(319, 51, 'San Pablo'),
(320, 51, 'Rincon de Sabanilla'),
(321, 52, 'Puerto Viejo'),
(322, 52, 'La Virgen'),
(323, 52, 'Horquetas'),
(324, 52, 'Llanuras del Gaspar'),
(325, 52, 'Cureña'),
(326, 53, 'Liberia'),
(327, 53, 'Cañas Dulces'),
(328, 53, 'Mayorga'),
(329, 53, 'Nacascolo'),
(330, 53, 'Curubande'),
(331, 54, 'Nicoya'),
(332, 54, 'Mansion'),
(333, 54, 'San Antonio'),
(334, 54, 'Quebrada Honda'),
(335, 54, 'Samara'),
(336, 54, 'Nosara'),
(337, 54, 'Belen de Nosarita'),
(338, 55, 'Santa Cruz'),
(339, 55, 'Bolson'),
(340, 55, 'Veintisiete de Abril'),
(341, 55, 'Tempate'),
(342, 55, 'Cartagena'),
(343, 55, 'Coajiniquil'),
(344, 55, 'Diria'),
(345, 55, 'Cabo Velas'),
(346, 55, 'Tamarindo'),
(347, 56, 'Bagaces'),
(348, 56, 'Fortuna'),
(349, 56, 'Mogote'),
(350, 56, 'Rio Naranjo'),
(351, 57, 'Filadelfia'),
(352, 57, 'Palmira'),
(353, 57, 'Sardinal'),
(354, 57, 'Belen'),
(355, 58, 'Cañas'),
(356, 58, 'Palmira'),
(357, 58, 'San Miguel'),
(358, 58, 'Bebedero'),
(359, 58, 'Porozal'),
(360, 59, 'Juntas'),
(361, 59, 'Sierra'),
(362, 59, 'San Juan'),
(363, 59, 'Colorado'),
(364, 60, 'Tilaran'),
(365, 60, 'Quebrada Grande'),
(366, 60, 'Tronadora'),
(367, 60, 'Santa Rosa'),
(368, 60, 'Libano'),
(369, 60, 'Tierras Morenas'),
(370, 60, 'Arenal'),
(371, 61, 'Carmona'),
(372, 61, 'Santa Rita'),
(373, 61, 'Zapotal'),
(374, 61, 'San Pablo'),
(375, 61, 'Porvenir'),
(376, 61, 'Bejuco'),
(377, 60, 'La Cruz'),
(378, 60, 'Santa Cecilia'),
(379, 60, 'Garita'),
(380, 60, 'Santa Elena'),
(381, 61, 'Hojancha'),
(382, 61, 'Monte Romo'),
(383, 61, 'Puerto Carrillo'),
(384, 61, 'Huacas'),
(385, 62, 'Puntarenas'),
(386, 62, 'Pitahaya'),
(387, 62, 'Chomes'),
(388, 62, 'Lepanto'),
(389, 62, 'Paquera'),
(390, 62, 'Manzanillo'),
(391, 62, 'Guacimal'),
(392, 62, 'Barranca'),
(393, 62, 'Monte Verde'),
(394, 62, 'Isla del Coco'),
(395, 62, 'Cobano'),
(396, 62, 'Chacarita'),
(397, 62, 'Chira'),
(398, 62, 'Acapulco'),
(399, 62, 'El Roble'),
(400, 62, 'Arancibia'),
(401, 63, 'Espiritu Santo'),
(402, 63, 'San Juan Grande'),
(403, 63, 'Macacona'),
(404, 63, 'San Rafael'),
(405, 63, 'San Jeronimo'),
(406, 64, 'Buenos Aires'),
(407, 64, 'Volcan'),
(408, 64, 'Potrero Grande'),
(409, 64, 'Boruca'),
(410, 64, 'Pilas'),
(411, 64, 'Colinas'),
(412, 64, 'Changuenas'),
(413, 64, 'Biolley'),
(414, 65, 'Miramar'),
(415, 65, 'Union'),
(416, 65, 'San Isidro'),
(417, 66, 'Cortes'),
(418, 66, 'Palmar'),
(419, 66, 'Sierpe'),
(420, 66, 'Bahia Ballena'),
(421, 66, 'Piedras Blancas'),
(422, 67, 'Quepos'),
(423, 67, 'Savegre'),
(424, 67, 'Naranjito'),
(425, 68, 'Golfito'),
(426, 68, 'Jimenez'),
(427, 68, 'Guaycar'),
(428, 68, 'Corredor'),
(429, 69, 'San Vito'),
(430, 69, 'Sabalito'),
(431, 69, 'Aguabuena'),
(432, 69, 'Limoncito'),
(433, 69, 'Pittier'),
(434, 70, 'Parrita'),
(435, 71, 'Corredores'),
(436, 71, 'La Cuesta'),
(437, 71, 'Canoas'),
(438, 71, 'Laurel'),
(439, 72, 'Jaco'),
(440, 72, 'Tarcoles'),
(441, 73, 'Limon'),
(442, 73, 'Valle la Estrella'),
(443, 73, 'Rio Blanco'),
(444, 73, 'Matama'),
(445, 74, 'Guapiles'),
(446, 74, 'Jimenez'),
(447, 74, 'Rita'),
(448, 74, 'Roxana'),
(449, 74, 'Cariari'),
(450, 74, 'Colorado'),
(451, 75, 'Siquirres'),
(452, 75, 'Pacuarito'),
(453, 75, 'Florida'),
(454, 75, 'Germania'),
(455, 75, 'Cairo'),
(456, 75, 'Alegria'),
(457, 76, 'Bratsi'),
(458, 76, 'Sixaola'),
(459, 76, 'Cahuita'),
(460, 77, 'Matina'),
(461, 77, 'Batan'),
(462, 77, 'Carrandi'),
(463, 78, 'Guacimo'),
(464, 78, 'Mercedes'),
(465, 78, 'Pocora'),
(466, 78, 'Rio Jimenez'),
(467, 78, 'Duacari');

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

DROP TABLE IF EXISTS `faculties`;
CREATE TABLE IF NOT EXISTS `faculties` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `faculty_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `faculty_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_teacher` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `faculties_faculty_name_unique` (`faculty_name`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`id`, `faculty_name`, `faculty_description`, `id_teacher`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ingeniería', NULL, 21, NULL, '2018-07-30 12:32:10', '2018-08-05 17:17:18'),
(4, 'Educación', NULL, 18, NULL, '2018-08-02 15:22:04', '2018-08-05 14:01:39'),
(5, 'Administración', NULL, 17, NULL, '2018-08-03 02:55:21', '2018-08-05 14:01:55'),
(6, 'Centro De Formación Superior', NULL, 20, NULL, '2018-08-05 14:02:37', '2018-08-05 15:21:04'),
(10, 'Medicina', 'Formar médicos generales altamente calificados que sean capaces de preservar la salud individual y colectiva; de diagnosticar, tratar y rehabilitar al enfermo; ejercer su profesión sobre principios éticos bien cimentados y con conocimientos sustentados científicamente que le permitan obtener una visión integral del enfermo y su entorno. Mejorar la calidad del primer nivel de atención médica, a través de la actualización médica continua que les permita a sus alumnos, conocer y participar en las soluciones de los problemas de salud que se presenten tanto en el ámbito regional como a nivel nacional. Propiciar la continuación de estudios de posgrado entre los alumnos que así lo decidan y favorecer la investigación básica, clínica y epidemiológica.', 24, NULL, '2018-08-07 13:05:28', '2018-08-07 13:28:45');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_0000001_create_users_table', 1),
(2, '2014_10_12_0000002_create_faculties_table', 1),
(3, '2014_10_12_0000003_create_careers_table', 1),
(4, '2014_10_12_0000004_create_subjects_table', 1),
(5, '2014_10_12_0000005_create_courses_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `provincia`
--

DROP TABLE IF EXISTS `provincia`;
CREATE TABLE IF NOT EXISTS `provincia` (
  `numeroProvincia` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`numeroProvincia`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `provincia`
--

INSERT INTO `provincia` (`numeroProvincia`, `nombre`) VALUES
(1, 'San Jose'),
(2, 'Alajuela'),
(3, 'Cartago'),
(4, 'Heredia'),
(5, 'Guanacaste'),
(6, 'Puntarenas'),
(7, 'Limon');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

DROP TABLE IF EXISTS `subjects`;
CREATE TABLE IF NOT EXISTS `subjects` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `subject_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time_t` int(11) NOT NULL,
  `time_p` int(11) NOT NULL,
  `time_l` int(11) NOT NULL,
  `credits` int(11) NOT NULL,
  `code` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `subjects_subject_name_unique` (`subject_name`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `subject_name`, `subject_description`, `time_t`, `time_p`, `time_l`, `credits`, `code`, `remember_token`, `created_at`, `updated_at`) VALUES
(36, 'Fundamentos De Computación', 'En esta asignatura se le darán los conocimientos básicos para el manejo de la computadora como recurso de trabajo en su área de trabajo', 4, 0, 0, 4, 'INFO-102', NULL, '2018-08-12 15:07:21', '2018-08-12 15:07:21'),
(37, 'Inglés I', '1.- Adquirir la capacidad de expresarse oralmente y por escrito de forma eficaz en las situaciones habituales de comunicación a través de tareas específicas.<br>\r\n2.- Desarrollar destrezas comunicativas tanto receptivas como productivas con el fin de realizar intercambios de información tanto dentro como fuera del aula.\r\n3.-Leer diversos tipos de textos de forma comprensiva y autónoma con el fin de acceder a fuentes de información variadas y como medio para conocer culturas y formas de vivir distintas a las propias.\r\n4.- Transferir al conocimiento de la lengua extranjera, las estrategias de comunicación adquiridas en la lengua materna o en el aprendizaje de otras lenguas con el fin de realizar tareas interactivas en situaciones reales o simuladas.', 4, 0, 0, 4, 'GDI-101', NULL, '2018-08-12 15:11:16', '2018-09-11 12:42:50'),
(38, 'Programación Básica', 'Objetivo General: Proporcionar al estudiante los conceptos necesarios para el análisis, diseño y desarrollo de algoritmos básicos y su respectiva implementación en un lenguaje de programación. Objetivos Específicos: Introducir los conceptos básicos de programación.', 2, 0, 2, 4, 'INFO-101', NULL, '2018-08-12 15:12:28', '2018-08-12 15:12:28'),
(39, 'Técnicas De Comunicación', 'Enseñar al alumno los recursos emocionales y técnicos que le \r\npermitirán comunicar de forma eficiente en presentaciones, pequeños discursos y también en relaciones profesionales y personales teniendo en cuenta el léxico, la actitud, las emociones y la estructura del discurso. En la asignatura también se trabajan técnicas de comunicación escrita.', 4, 0, 0, 4, 'GHUM-081', NULL, '2018-08-12 15:13:49', '2018-08-12 15:13:49');

-- --------------------------------------------------------

--
-- Table structure for table `subject_career`
--

DROP TABLE IF EXISTS `subject_career`;
CREATE TABLE IF NOT EXISTS `subject_career` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_career` int(10) UNSIGNED NOT NULL,
  `id_subject` int(10) UNSIGNED NOT NULL,
  `period` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_subject` (`id_subject`),
  KEY `id_career` (`id_career`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subject_career`
--

INSERT INTO `subject_career` (`id`, `id_career`, `id_subject`, `period`, `created_at`, `updated_at`) VALUES
(42, 6, 37, 3, NULL, '2018-08-18 20:08:13'),
(43, 3, 37, 1, NULL, '2018-08-16 15:02:52'),
(44, 5, 37, 1, NULL, '2018-08-18 03:18:33'),
(45, 1, 37, 1, NULL, '2018-08-16 20:24:16'),
(47, 1, 38, 2, NULL, '2018-09-11 12:48:18'),
(48, 6, 39, 1, NULL, '2018-08-16 20:51:12'),
(49, 3, 39, 1, NULL, '2018-08-16 15:02:57'),
(50, 5, 39, 1, NULL, '2018-08-18 03:18:58'),
(51, 1, 39, 1, NULL, '2018-08-16 14:52:10'),
(54, 1, 36, 1, NULL, '2018-08-18 20:25:49');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

DROP TABLE IF EXISTS `teachers`;
CREATE TABLE IF NOT EXISTS `teachers` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_num` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` enum('male','female') COLLATE utf8mb4_unicode_ci NOT NULL,
  `cell_phone` int(11) NOT NULL,
  `home_phone` int(11) DEFAULT NULL,
  `work_phone` int(11) DEFAULT NULL,
  `nationality` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `degree` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `province` int(11) NOT NULL,
  `canton` int(11) NOT NULL,
  `district` int(11) NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `last_name`, `email`, `id_num`, `gender`, `cell_phone`, `home_phone`, `work_phone`, `nationality`, `degree`, `province`, `canton`, `district`, `address`, `created_at`, `updated_at`) VALUES
(8, 'Manuel', 'Picado Abarca', 'mapia@gmail.com', '7-4108-5209', 'male', 12456324, 68465165, NULL, 'CR', 'Licenciado', 1, 3, 15, 'De la Iglesia central de San Miguel, 200M norte y 150 este', '2018-07-25 20:09:18', '2018-07-30 02:11:03'),
(9, 'José', 'Corrales', 'josecorrales@gmail.com', '3-0000-0333', 'male', 88882324, NULL, NULL, 'CR', 'Lic', 1, 1, 1, NULL, '2018-07-26 04:17:08', '2018-08-05 17:48:17'),
(15, 'Roberto', 'Chacón', 'roberto@universidad.edu', '3-2135-4321', 'male', 81321651, NULL, NULL, 'CR', 'Licenciado', 1, 7, 7, NULL, '2018-08-05 13:47:27', '2018-08-05 13:47:27'),
(16, 'Brian', 'Medina', 'brian@universidad.edu', '3-2465-3465', 'male', 84213546, NULL, NULL, 'CR', 'Licenciado', 4, 43, 43, NULL, '2018-08-05 13:48:23', '2018-08-05 13:48:23'),
(17, 'Braulio', 'Gutiérrez', 'braulio@universidad.com', '3-2132-1654', 'male', 65413216, NULL, NULL, 'CR', 'Master', 2, 20, 20, NULL, '2018-08-05 13:49:36', '2018-08-05 13:49:36'),
(18, 'Lizbeth', 'Cano', 'lizbeth@universidad.edu', '6-5462-3168', 'female', 16546216, NULL, NULL, 'CR', 'Master', 3, 37, 37, NULL, '2018-08-05 13:50:15', '2018-08-05 13:50:15'),
(19, 'Jorge', 'Román', 'jorge@akdemia.ml', '1-2234-6355', 'male', 84654987, NULL, NULL, 'CR', 'Licenciado', 1, 3, 15, NULL, '2018-08-05 13:59:01', '2018-08-05 17:48:01'),
(20, 'Pedro', 'Soto', 'perdo@akdemial.ml', '1-2465-4324', 'male', 16546516, NULL, NULL, 'CR', 'Licenciado', 2, 20, 20, NULL, '2018-08-05 14:03:41', '2018-08-05 14:03:41'),
(21, 'Edwin', 'López', 'edwin@akmdemia.ml', '2-6543-2168', 'male', 85599658, NULL, NULL, 'CR', 'Licenciado', 2, 22, 147, NULL, '2018-08-05 14:25:52', '2018-08-05 17:47:36'),
(24, 'Alvaro', 'Pérez', 'alvaro@akdemia.ml', '2-1654-6516', 'male', 86548252, NULL, NULL, 'VE', 'Doctor', 3, 42, 42, NULL, '2018-08-07 13:01:21', '2018-08-07 13:01:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `user_type`, `remember_token`, `created_at`, `updated_at`) VALUES
(19, 'Victor Sanchez', 'vsanchezjauregui@gmail.com', '$2y$10$exSYJBOQcRTNggY1w6huJ.ghcqCWc9kcuZqoSwjpeptIfgC4J3Xky', 'admin', 'e6INpxg76EX0s09EBFjDnGtBNvGq2hqRyQmfrsw15mQyOVAcwNgoSY0espWJ', '2018-07-22 20:44:24', '2018-07-27 20:42:42'),
(20, 'Pablo Cordero', 'pacv.cristiano@hotmail.com', '$2y$10$ODD0g3QouzlMPla76sfGSuYy9ur5TKg61aNbr5ew29HY3H1G2rGPa', 'user', 'J4kJGoGaZXtzClz2NqhJptgdhuJmTzxyQAxpSM9wrOdAYOWW9qLF0bEkFswD', '2018-07-26 04:15:06', '2018-07-29 21:04:15'),
(22, 'Victor Usuario', 'vsanchezjauregui@hotmail.com', '$2y$10$O23iCOAZkKK.M3wHmPXjQOMwfKN/WGFMad3i0MqDYr78XzZmNarnS', 'user', 'gqA6lKh2qmSjcXmsXzkEXAisbgSsD3dIUyirYx9IhzQdnMBXN9E84vFieJRG', '2018-08-19 16:59:23', '2018-08-19 16:59:23');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `canton`
--
ALTER TABLE `canton`
  ADD CONSTRAINT `canton_ibfk_1` FOREIGN KEY (`numeroProvincia`) REFERENCES `provincia` (`numeroProvincia`);

--
-- Constraints for table `careers`
--
ALTER TABLE `careers`
  ADD CONSTRAINT `careers_ibfk_1` FOREIGN KEY (`id_faculty`) REFERENCES `faculties` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `careers_ibfk_2` FOREIGN KEY (`career_cheif`) REFERENCES `teachers` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `distrito`
--
ALTER TABLE `distrito`
  ADD CONSTRAINT `distrito_ibfk_1` FOREIGN KEY (`numeroCanton`) REFERENCES `canton` (`numeroCanton`);

--
-- Constraints for table `subject_career`
--
ALTER TABLE `subject_career`
  ADD CONSTRAINT `subject_career_ibfk_1` FOREIGN KEY (`id_subject`) REFERENCES `subjects` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `subject_career_ibfk_2` FOREIGN KEY (`id_career`) REFERENCES `careers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
