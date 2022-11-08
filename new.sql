-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2022 at 06:11 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `date`) VALUES
(1, 'admin', 'admin@gmail.com', '123456', '2022-10-22 14:08:07');

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `link` varchar(100) NOT NULL,
  `category` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `title`, `image`, `link`, `category`, `status`, `date`) VALUES
(1, 'tv ads', 'assets/images/ads/ads-2.gif', 'abc', 'main-banner', 0, '2022-10-25 01:49:04'),
(2, 'tv ads', 'assets/images/ads/ads-1.gif', 'abc', 'main-banner', 0, '2022-10-25 01:49:12'),
(3, 'tv ads', 'assets/images/ads/ads-3.gif', 'abc', 'main-banner', 0, '2022-10-25 01:49:18'),
(5, 'salar', 'assets/images/ads/sidebanner-1.gif', '123', 'sidebanner', 0, '2022-10-25 01:53:12'),
(6, 'salar', 'assets/images/ads/sidebanner-2.gif', '123', 'sidebanner', 0, '2022-10-25 01:54:15'),
(9, 'salar', 'assets/images/ads/sidebanner-1.gif', '123', 'sidebanner', 0, '2022-10-25 02:25:33'),
(10, 'salar', 'assets/images/ads/sidebanner-2.gif', '123', 'sidebanner', 0, '2022-10-25 02:25:39'),
(15, 'salar', 'assets/images/ads/sidebanner-1.gif', '123', 'sidebanner', 0, '2022-10-25 02:25:33');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `movie-name` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `movie-name`, `image`, `date`) VALUES
(1, 'kgf', 'assets/images/banner-1.png', '2022-10-22 15:29:46'),
(2, 'pk', 'assets/images/banner-2.png', '2022-10-22 15:29:49'),
(3, 'abcd', 'assets/images/banner-3.png', '2022-10-22 15:29:55'),
(4, 'RAEES', 'assets/images/webimages/banner-2.png', '2022-10-25 08:14:18');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `movie-id` int(11) NOT NULL,
  `series_id` int(11) NOT NULL,
  `episode_id` int(11) NOT NULL,
  `season_id` int(11) NOT NULL,
  `comments` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `movie-id`, `series_id`, `episode_id`, `season_id`, `comments`, `date`) VALUES
(20, 16, 0, 0, 0, 'nice movie pk', '2022-11-05 08:30:34'),
(21, 5, 0, 0, 0, 'welldone', '2022-11-05 08:30:54'),
(22, 0, 2, 0, 0, 'sdgbfjnm,', '2022-11-05 08:32:05'),
(23, 0, 0, 0, 0, 'jhhkjhkl', '2022-11-05 08:35:15'),
(24, 0, 2, 0, 0, 'jhhkjhkl', '2022-11-05 08:35:54'),
(25, 0, 2, 0, 0, 'jhhkjhkl', '2022-11-05 08:36:42'),
(26, 0, 1, 0, 0, 'nice', '2022-11-05 08:37:50'),
(32, 0, 2, 2, 1, 'jgghk', '2022-11-05 09:13:23'),
(33, 0, 2, 2, 1, 'nice episode', '2022-11-05 09:18:30'),
(34, 0, 2, 2, 1, '2014', '2022-11-05 09:19:43'),
(35, 0, 1, 6, 2, 'safgvf', '2022-11-05 11:05:58'),
(36, 15, 0, 0, 0, 'jhhkjhkl', '2022-11-05 11:19:38'),
(37, 0, 2, 2, 1, 'dfghgjh', '2022-11-05 11:35:32'),
(38, 11, 0, 0, 0, 'gdfhb', '2022-11-05 15:04:03'),
(39, 0, 1, 1, 1, 'zxvfcn ', '2022-11-05 15:30:28'),
(40, 17, 0, 0, 0, 'dsdfvb', '2022-11-05 17:01:11'),
(41, 17, 0, 0, 0, 'bhfgvb nvhbm,jh', '2022-11-05 17:01:16'),
(42, 17, 0, 0, 0, 'Unlimited storage, unmetered bandwidth, unbeatable hosting - HostGator’s got ya covered. Shared web hosting plans from HostGator get your site off the ground quickly & affordably. PCMag® Editors’ Choice. Unmetered Disk Space. Free Website Templates. Free SSL.', '2022-11-05 17:01:30');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `iso` char(2) NOT NULL,
  `name` varchar(80) NOT NULL,
  `nicename` varchar(80) NOT NULL,
  `iso3` char(3) DEFAULT NULL,
  `numcode` smallint(6) DEFAULT NULL,
  `phonecode` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `iso`, `name`, `nicename`, `iso3`, `numcode`, `phonecode`) VALUES
(1, 'AF', 'AFGHANISTAN', 'Afghanistan', 'AFG', 4, 93),
(2, 'AL', 'ALBANIA', 'Albania', 'ALB', 8, 355),
(3, 'DZ', 'ALGERIA', 'Algeria', 'DZA', 12, 213),
(4, 'AS', 'AMERICAN SAMOA', 'American Samoa', 'ASM', 16, 1684),
(5, 'AD', 'ANDORRA', 'Andorra', 'AND', 20, 376),
(6, 'AO', 'ANGOLA', 'Angola', 'AGO', 24, 244),
(7, 'AI', 'ANGUILLA', 'Anguilla', 'AIA', 660, 1264),
(8, 'AQ', 'ANTARCTICA', 'Antarctica', NULL, NULL, 0),
(9, 'AG', 'ANTIGUA AND BARBUDA', 'Antigua and Barbuda', 'ATG', 28, 1268),
(10, 'AR', 'ARGENTINA', 'Argentina', 'ARG', 32, 54),
(11, 'AM', 'ARMENIA', 'Armenia', 'ARM', 51, 374),
(12, 'AW', 'ARUBA', 'Aruba', 'ABW', 533, 297),
(13, 'AU', 'AUSTRALIA', 'Australia', 'AUS', 36, 61),
(14, 'AT', 'AUSTRIA', 'Austria', 'AUT', 40, 43),
(15, 'AZ', 'AZERBAIJAN', 'Azerbaijan', 'AZE', 31, 994),
(16, 'BS', 'BAHAMAS', 'Bahamas', 'BHS', 44, 1242),
(17, 'BH', 'BAHRAIN', 'Bahrain', 'BHR', 48, 973),
(18, 'BD', 'BANGLADESH', 'Bangladesh', 'BGD', 50, 880),
(19, 'BB', 'BARBADOS', 'Barbados', 'BRB', 52, 1246),
(20, 'BY', 'BELARUS', 'Belarus', 'BLR', 112, 375),
(21, 'BE', 'BELGIUM', 'Belgium', 'BEL', 56, 32),
(22, 'BZ', 'BELIZE', 'Belize', 'BLZ', 84, 501),
(23, 'BJ', 'BENIN', 'Benin', 'BEN', 204, 229),
(24, 'BM', 'BERMUDA', 'Bermuda', 'BMU', 60, 1441),
(25, 'BT', 'BHUTAN', 'Bhutan', 'BTN', 64, 975),
(26, 'BO', 'BOLIVIA', 'Bolivia', 'BOL', 68, 591),
(27, 'BA', 'BOSNIA AND HERZEGOVINA', 'Bosnia and Herzegovina', 'BIH', 70, 387),
(28, 'BW', 'BOTSWANA', 'Botswana', 'BWA', 72, 267),
(29, 'BV', 'BOUVET ISLAND', 'Bouvet Island', NULL, NULL, 0),
(30, 'BR', 'BRAZIL', 'Brazil', 'BRA', 76, 55),
(31, 'IO', 'BRITISH INDIAN OCEAN TERRITORY', 'British Indian Ocean Territory', NULL, NULL, 246),
(32, 'BN', 'BRUNEI DARUSSALAM', 'Brunei Darussalam', 'BRN', 96, 673),
(33, 'BG', 'BULGARIA', 'Bulgaria', 'BGR', 100, 359),
(34, 'BF', 'BURKINA FASO', 'Burkina Faso', 'BFA', 854, 226),
(35, 'BI', 'BURUNDI', 'Burundi', 'BDI', 108, 257),
(36, 'KH', 'CAMBODIA', 'Cambodia', 'KHM', 116, 855),
(37, 'CM', 'CAMEROON', 'Cameroon', 'CMR', 120, 237),
(38, 'CA', 'CANADA', 'Canada', 'CAN', 124, 1),
(39, 'CV', 'CAPE VERDE', 'Cape Verde', 'CPV', 132, 238),
(40, 'KY', 'CAYMAN ISLANDS', 'Cayman Islands', 'CYM', 136, 1345),
(41, 'CF', 'CENTRAL AFRICAN REPUBLIC', 'Central African Republic', 'CAF', 140, 236),
(42, 'TD', 'CHAD', 'Chad', 'TCD', 148, 235),
(43, 'CL', 'CHILE', 'Chile', 'CHL', 152, 56),
(44, 'CN', 'CHINA', 'China', 'CHN', 156, 86),
(45, 'CX', 'CHRISTMAS ISLAND', 'Christmas Island', NULL, NULL, 61),
(46, 'CC', 'COCOS (KEELING) ISLANDS', 'Cocos (Keeling) Islands', NULL, NULL, 672),
(47, 'CO', 'COLOMBIA', 'Colombia', 'COL', 170, 57),
(48, 'KM', 'COMOROS', 'Comoros', 'COM', 174, 269),
(49, 'CG', 'CONGO', 'Congo', 'COG', 178, 242),
(50, 'CD', 'CONGO, THE DEMOCRATIC REPUBLIC OF THE', 'Congo, the Democratic Republic of the', 'COD', 180, 242),
(51, 'CK', 'COOK ISLANDS', 'Cook Islands', 'COK', 184, 682),
(52, 'CR', 'COSTA RICA', 'Costa Rica', 'CRI', 188, 506),
(53, 'CI', 'COTE D\'IVOIRE', 'Cote D\'Ivoire', 'CIV', 384, 225),
(54, 'HR', 'CROATIA', 'Croatia', 'HRV', 191, 385),
(55, 'CU', 'CUBA', 'Cuba', 'CUB', 192, 53),
(56, 'CY', 'CYPRUS', 'Cyprus', 'CYP', 196, 357),
(57, 'CZ', 'CZECH REPUBLIC', 'Czech Republic', 'CZE', 203, 420),
(58, 'DK', 'DENMARK', 'Denmark', 'DNK', 208, 45),
(59, 'DJ', 'DJIBOUTI', 'Djibouti', 'DJI', 262, 253),
(60, 'DM', 'DOMINICA', 'Dominica', 'DMA', 212, 1767),
(61, 'DO', 'DOMINICAN REPUBLIC', 'Dominican Republic', 'DOM', 214, 1809),
(62, 'EC', 'ECUADOR', 'Ecuador', 'ECU', 218, 593),
(63, 'EG', 'EGYPT', 'Egypt', 'EGY', 818, 20),
(64, 'SV', 'EL SALVADOR', 'El Salvador', 'SLV', 222, 503),
(65, 'GQ', 'EQUATORIAL GUINEA', 'Equatorial Guinea', 'GNQ', 226, 240),
(66, 'ER', 'ERITREA', 'Eritrea', 'ERI', 232, 291),
(67, 'EE', 'ESTONIA', 'Estonia', 'EST', 233, 372),
(68, 'ET', 'ETHIOPIA', 'Ethiopia', 'ETH', 231, 251),
(69, 'FK', 'FALKLAND ISLANDS (MALVINAS)', 'Falkland Islands (Malvinas)', 'FLK', 238, 500),
(70, 'FO', 'FAROE ISLANDS', 'Faroe Islands', 'FRO', 234, 298),
(71, 'FJ', 'FIJI', 'Fiji', 'FJI', 242, 679),
(72, 'FI', 'FINLAND', 'Finland', 'FIN', 246, 358),
(73, 'FR', 'FRANCE', 'France', 'FRA', 250, 33),
(74, 'GF', 'FRENCH GUIANA', 'French Guiana', 'GUF', 254, 594),
(75, 'PF', 'FRENCH POLYNESIA', 'French Polynesia', 'PYF', 258, 689),
(76, 'TF', 'FRENCH SOUTHERN TERRITORIES', 'French Southern Territories', NULL, NULL, 0),
(77, 'GA', 'GABON', 'Gabon', 'GAB', 266, 241),
(78, 'GM', 'GAMBIA', 'Gambia', 'GMB', 270, 220),
(79, 'GE', 'GEORGIA', 'Georgia', 'GEO', 268, 995),
(80, 'DE', 'GERMANY', 'Germany', 'DEU', 276, 49),
(81, 'GH', 'GHANA', 'Ghana', 'GHA', 288, 233),
(82, 'GI', 'GIBRALTAR', 'Gibraltar', 'GIB', 292, 350),
(83, 'GR', 'GREECE', 'Greece', 'GRC', 300, 30),
(84, 'GL', 'GREENLAND', 'Greenland', 'GRL', 304, 299),
(85, 'GD', 'GRENADA', 'Grenada', 'GRD', 308, 1473),
(86, 'GP', 'GUADELOUPE', 'Guadeloupe', 'GLP', 312, 590),
(87, 'GU', 'GUAM', 'Guam', 'GUM', 316, 1671),
(88, 'GT', 'GUATEMALA', 'Guatemala', 'GTM', 320, 502),
(89, 'GN', 'GUINEA', 'Guinea', 'GIN', 324, 224),
(90, 'GW', 'GUINEA-BISSAU', 'Guinea-Bissau', 'GNB', 624, 245),
(91, 'GY', 'GUYANA', 'Guyana', 'GUY', 328, 592),
(92, 'HT', 'HAITI', 'Haiti', 'HTI', 332, 509),
(93, 'HM', 'HEARD ISLAND AND MCDONALD ISLANDS', 'Heard Island and Mcdonald Islands', NULL, NULL, 0),
(94, 'VA', 'HOLY SEE (VATICAN CITY STATE)', 'Holy See (Vatican City State)', 'VAT', 336, 39),
(95, 'HN', 'HONDURAS', 'Honduras', 'HND', 340, 504),
(96, 'HK', 'HONG KONG', 'Hong Kong', 'HKG', 344, 852),
(97, 'HU', 'HUNGARY', 'Hungary', 'HUN', 348, 36),
(98, 'IS', 'ICELAND', 'Iceland', 'ISL', 352, 354),
(99, 'IN', 'INDIA', 'India', 'IND', 356, 91),
(100, 'ID', 'INDONESIA', 'Indonesia', 'IDN', 360, 62),
(101, 'IR', 'IRAN, ISLAMIC REPUBLIC OF', 'Iran, Islamic Republic of', 'IRN', 364, 98),
(102, 'IQ', 'IRAQ', 'Iraq', 'IRQ', 368, 964),
(103, 'IE', 'IRELAND', 'Ireland', 'IRL', 372, 353),
(104, 'IL', 'ISRAEL', 'Israel', 'ISR', 376, 972),
(105, 'IT', 'ITALY', 'Italy', 'ITA', 380, 39),
(106, 'JM', 'JAMAICA', 'Jamaica', 'JAM', 388, 1876),
(107, 'JP', 'JAPAN', 'Japan', 'JPN', 392, 81),
(108, 'JO', 'JORDAN', 'Jordan', 'JOR', 400, 962),
(109, 'KZ', 'KAZAKHSTAN', 'Kazakhstan', 'KAZ', 398, 7),
(110, 'KE', 'KENYA', 'Kenya', 'KEN', 404, 254),
(111, 'KI', 'KIRIBATI', 'Kiribati', 'KIR', 296, 686),
(112, 'KP', 'KOREA, DEMOCRATIC PEOPLE\'S REPUBLIC OF', 'Korea, Democratic People\'s Republic of', 'PRK', 408, 850),
(113, 'KR', 'KOREA, REPUBLIC OF', 'Korea, Republic of', 'KOR', 410, 82),
(114, 'KW', 'KUWAIT', 'Kuwait', 'KWT', 414, 965),
(115, 'KG', 'KYRGYZSTAN', 'Kyrgyzstan', 'KGZ', 417, 996),
(116, 'LA', 'LAO PEOPLE\'S DEMOCRATIC REPUBLIC', 'Lao People\'s Democratic Republic', 'LAO', 418, 856),
(117, 'LV', 'LATVIA', 'Latvia', 'LVA', 428, 371),
(118, 'LB', 'LEBANON', 'Lebanon', 'LBN', 422, 961),
(119, 'LS', 'LESOTHO', 'Lesotho', 'LSO', 426, 266),
(120, 'LR', 'LIBERIA', 'Liberia', 'LBR', 430, 231),
(121, 'LY', 'LIBYAN ARAB JAMAHIRIYA', 'Libyan Arab Jamahiriya', 'LBY', 434, 218),
(122, 'LI', 'LIECHTENSTEIN', 'Liechtenstein', 'LIE', 438, 423),
(123, 'LT', 'LITHUANIA', 'Lithuania', 'LTU', 440, 370),
(124, 'LU', 'LUXEMBOURG', 'Luxembourg', 'LUX', 442, 352),
(125, 'MO', 'MACAO', 'Macao', 'MAC', 446, 853),
(126, 'MK', 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF', 'Macedonia, the Former Yugoslav Republic of', 'MKD', 807, 389),
(127, 'MG', 'MADAGASCAR', 'Madagascar', 'MDG', 450, 261),
(128, 'MW', 'MALAWI', 'Malawi', 'MWI', 454, 265),
(129, 'MY', 'MALAYSIA', 'Malaysia', 'MYS', 458, 60),
(130, 'MV', 'MALDIVES', 'Maldives', 'MDV', 462, 960),
(131, 'ML', 'MALI', 'Mali', 'MLI', 466, 223),
(132, 'MT', 'MALTA', 'Malta', 'MLT', 470, 356),
(133, 'MH', 'MARSHALL ISLANDS', 'Marshall Islands', 'MHL', 584, 692),
(134, 'MQ', 'MARTINIQUE', 'Martinique', 'MTQ', 474, 596),
(135, 'MR', 'MAURITANIA', 'Mauritania', 'MRT', 478, 222),
(136, 'MU', 'MAURITIUS', 'Mauritius', 'MUS', 480, 230),
(137, 'YT', 'MAYOTTE', 'Mayotte', NULL, NULL, 269),
(138, 'MX', 'MEXICO', 'Mexico', 'MEX', 484, 52),
(139, 'FM', 'MICRONESIA, FEDERATED STATES OF', 'Micronesia, Federated States of', 'FSM', 583, 691),
(140, 'MD', 'MOLDOVA, REPUBLIC OF', 'Moldova, Republic of', 'MDA', 498, 373),
(141, 'MC', 'MONACO', 'Monaco', 'MCO', 492, 377),
(142, 'MN', 'MONGOLIA', 'Mongolia', 'MNG', 496, 976),
(143, 'MS', 'MONTSERRAT', 'Montserrat', 'MSR', 500, 1664),
(144, 'MA', 'MOROCCO', 'Morocco', 'MAR', 504, 212),
(145, 'MZ', 'MOZAMBIQUE', 'Mozambique', 'MOZ', 508, 258),
(146, 'MM', 'MYANMAR', 'Myanmar', 'MMR', 104, 95),
(147, 'NA', 'NAMIBIA', 'Namibia', 'NAM', 516, 264),
(148, 'NR', 'NAURU', 'Nauru', 'NRU', 520, 674),
(149, 'NP', 'NEPAL', 'Nepal', 'NPL', 524, 977),
(150, 'NL', 'NETHERLANDS', 'Netherlands', 'NLD', 528, 31),
(151, 'AN', 'NETHERLANDS ANTILLES', 'Netherlands Antilles', 'ANT', 530, 599),
(152, 'NC', 'NEW CALEDONIA', 'New Caledonia', 'NCL', 540, 687),
(153, 'NZ', 'NEW ZEALAND', 'New Zealand', 'NZL', 554, 64),
(154, 'NI', 'NICARAGUA', 'Nicaragua', 'NIC', 558, 505),
(155, 'NE', 'NIGER', 'Niger', 'NER', 562, 227),
(156, 'NG', 'NIGERIA', 'Nigeria', 'NGA', 566, 234),
(157, 'NU', 'NIUE', 'Niue', 'NIU', 570, 683),
(158, 'NF', 'NORFOLK ISLAND', 'Norfolk Island', 'NFK', 574, 672),
(159, 'MP', 'NORTHERN MARIANA ISLANDS', 'Northern Mariana Islands', 'MNP', 580, 1670),
(160, 'NO', 'NORWAY', 'Norway', 'NOR', 578, 47),
(161, 'OM', 'OMAN', 'Oman', 'OMN', 512, 968),
(162, 'PK', 'PAKISTAN', 'Pakistan', 'PAK', 586, 92),
(163, 'PW', 'PALAU', 'Palau', 'PLW', 585, 680),
(164, 'PS', 'PALESTINIAN TERRITORY, OCCUPIED', 'Palestinian Territory, Occupied', NULL, NULL, 970),
(165, 'PA', 'PANAMA', 'Panama', 'PAN', 591, 507),
(166, 'PG', 'PAPUA NEW GUINEA', 'Papua New Guinea', 'PNG', 598, 675),
(167, 'PY', 'PARAGUAY', 'Paraguay', 'PRY', 600, 595),
(168, 'PE', 'PERU', 'Peru', 'PER', 604, 51),
(169, 'PH', 'PHILIPPINES', 'Philippines', 'PHL', 608, 63),
(170, 'PN', 'PITCAIRN', 'Pitcairn', 'PCN', 612, 0),
(171, 'PL', 'POLAND', 'Poland', 'POL', 616, 48),
(172, 'PT', 'PORTUGAL', 'Portugal', 'PRT', 620, 351),
(173, 'PR', 'PUERTO RICO', 'Puerto Rico', 'PRI', 630, 1787),
(174, 'QA', 'QATAR', 'Qatar', 'QAT', 634, 974),
(175, 'RE', 'REUNION', 'Reunion', 'REU', 638, 262),
(176, 'RO', 'ROMANIA', 'Romania', 'ROM', 642, 40),
(177, 'RU', 'RUSSIAN FEDERATION', 'Russian Federation', 'RUS', 643, 70),
(178, 'RW', 'RWANDA', 'Rwanda', 'RWA', 646, 250),
(179, 'SH', 'SAINT HELENA', 'Saint Helena', 'SHN', 654, 290),
(180, 'KN', 'SAINT KITTS AND NEVIS', 'Saint Kitts and Nevis', 'KNA', 659, 1869),
(181, 'LC', 'SAINT LUCIA', 'Saint Lucia', 'LCA', 662, 1758),
(182, 'PM', 'SAINT PIERRE AND MIQUELON', 'Saint Pierre and Miquelon', 'SPM', 666, 508),
(183, 'VC', 'SAINT VINCENT AND THE GRENADINES', 'Saint Vincent and the Grenadines', 'VCT', 670, 1784),
(184, 'WS', 'SAMOA', 'Samoa', 'WSM', 882, 684),
(185, 'SM', 'SAN MARINO', 'San Marino', 'SMR', 674, 378),
(186, 'ST', 'SAO TOME AND PRINCIPE', 'Sao Tome and Principe', 'STP', 678, 239),
(187, 'SA', 'SAUDI ARABIA', 'Saudi Arabia', 'SAU', 682, 966),
(188, 'SN', 'SENEGAL', 'Senegal', 'SEN', 686, 221),
(189, 'CS', 'SERBIA AND MONTENEGRO', 'Serbia and Montenegro', NULL, NULL, 381),
(190, 'SC', 'SEYCHELLES', 'Seychelles', 'SYC', 690, 248),
(191, 'SL', 'SIERRA LEONE', 'Sierra Leone', 'SLE', 694, 232),
(192, 'SG', 'SINGAPORE', 'Singapore', 'SGP', 702, 65),
(193, 'SK', 'SLOVAKIA', 'Slovakia', 'SVK', 703, 421),
(194, 'SI', 'SLOVENIA', 'Slovenia', 'SVN', 705, 386),
(195, 'SB', 'SOLOMON ISLANDS', 'Solomon Islands', 'SLB', 90, 677),
(196, 'SO', 'SOMALIA', 'Somalia', 'SOM', 706, 252),
(197, 'ZA', 'SOUTH AFRICA', 'South Africa', 'ZAF', 710, 27),
(198, 'GS', 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS', 'South Georgia and the South Sandwich Islands', NULL, NULL, 0),
(199, 'ES', 'SPAIN', 'Spain', 'ESP', 724, 34),
(200, 'LK', 'SRI LANKA', 'Sri Lanka', 'LKA', 144, 94),
(201, 'SD', 'SUDAN', 'Sudan', 'SDN', 736, 249),
(202, 'SR', 'SURINAME', 'Suriname', 'SUR', 740, 597),
(203, 'SJ', 'SVALBARD AND JAN MAYEN', 'Svalbard and Jan Mayen', 'SJM', 744, 47),
(204, 'SZ', 'SWAZILAND', 'Swaziland', 'SWZ', 748, 268),
(205, 'SE', 'SWEDEN', 'Sweden', 'SWE', 752, 46),
(206, 'CH', 'SWITZERLAND', 'Switzerland', 'CHE', 756, 41),
(207, 'SY', 'SYRIAN ARAB REPUBLIC', 'Syrian Arab Republic', 'SYR', 760, 963),
(208, 'TW', 'TAIWAN, PROVINCE OF CHINA', 'Taiwan, Province of China', 'TWN', 158, 886),
(209, 'TJ', 'TAJIKISTAN', 'Tajikistan', 'TJK', 762, 992),
(210, 'TZ', 'TANZANIA, UNITED REPUBLIC OF', 'Tanzania, United Republic of', 'TZA', 834, 255),
(211, 'TH', 'THAILAND', 'Thailand', 'THA', 764, 66),
(212, 'TL', 'TIMOR-LESTE', 'Timor-Leste', NULL, NULL, 670),
(213, 'TG', 'TOGO', 'Togo', 'TGO', 768, 228),
(214, 'TK', 'TOKELAU', 'Tokelau', 'TKL', 772, 690),
(215, 'TO', 'TONGA', 'Tonga', 'TON', 776, 676),
(216, 'TT', 'TRINIDAD AND TOBAGO', 'Trinidad and Tobago', 'TTO', 780, 1868),
(217, 'TN', 'TUNISIA', 'Tunisia', 'TUN', 788, 216),
(218, 'TR', 'TURKEY', 'Turkey', 'TUR', 792, 90),
(219, 'TM', 'TURKMENISTAN', 'Turkmenistan', 'TKM', 795, 7370),
(220, 'TC', 'TURKS AND CAICOS ISLANDS', 'Turks and Caicos Islands', 'TCA', 796, 1649),
(221, 'TV', 'TUVALU', 'Tuvalu', 'TUV', 798, 688),
(222, 'UG', 'UGANDA', 'Uganda', 'UGA', 800, 256),
(223, 'UA', 'UKRAINE', 'Ukraine', 'UKR', 804, 380),
(224, 'AE', 'UNITED ARAB EMIRATES', 'United Arab Emirates', 'ARE', 784, 971),
(225, 'GB', 'UNITED KINGDOM', 'United Kingdom', 'GBR', 826, 44),
(226, 'US', 'UNITED STATES', 'United States', 'USA', 840, 1),
(227, 'UM', 'UNITED STATES MINOR OUTLYING ISLANDS', 'United States Minor Outlying Islands', NULL, NULL, 1),
(228, 'UY', 'URUGUAY', 'Uruguay', 'URY', 858, 598),
(229, 'UZ', 'UZBEKISTAN', 'Uzbekistan', 'UZB', 860, 998),
(230, 'VU', 'VANUATU', 'Vanuatu', 'VUT', 548, 678),
(231, 'VE', 'VENEZUELA', 'Venezuela', 'VEN', 862, 58),
(232, 'VN', 'VIET NAM', 'Viet Nam', 'VNM', 704, 84),
(233, 'VG', 'VIRGIN ISLANDS, BRITISH', 'Virgin Islands, British', 'VGB', 92, 1284),
(234, 'VI', 'VIRGIN ISLANDS, U.S.', 'Virgin Islands, U.s.', 'VIR', 850, 1340),
(235, 'WF', 'WALLIS AND FUTUNA', 'Wallis and Futuna', 'WLF', 876, 681),
(236, 'EH', 'WESTERN SAHARA', 'Western Sahara', 'ESH', 732, 212),
(237, 'YE', 'YEMEN', 'Yemen', 'YEM', 887, 967),
(238, 'ZM', 'ZAMBIA', 'Zambia', 'ZMB', 894, 260),
(239, 'ZW', 'ZIMBABWE', 'Zimbabwe', 'ZWE', 716, 263);

-- --------------------------------------------------------

--
-- Table structure for table `episode`
--

CREATE TABLE `episode` (
  `id` int(11) NOT NULL,
  `series_id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(200) NOT NULL,
  `link` varchar(200) NOT NULL,
  `trailer_link` varchar(200) NOT NULL,
  `download_link` varchar(200) NOT NULL,
  `season` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `episode`
--

INSERT INTO `episode` (`id`, `series_id`, `title`, `description`, `image`, `link`, `trailer_link`, `download_link`, `season`, `date`) VALUES
(1, 2, 'episode no 1', '', 'assets/images/cardposter-04.jpg', 'https://www.youtube.com/embed/ZNeGF-PvRHY', '', '', 1, '2022-11-07 14:41:22'),
(2, 6, 'episode no 2', '', 'assets/images/cardposter-06.png', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', '', '', 1, '2022-11-07 14:41:24'),
(3, 1, 'episode no 1', '', 'assets/images/cardposter-05.jpg', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', '', '', 1, '2022-11-07 14:41:26'),
(4, 2, 'episode no 1', '', 'assets/images/cardposter-07.png', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', '', '', 2, '2022-11-07 14:41:29'),
(5, 2, 'episode no 3', '', 'assets/images/cardposter-03.webp', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', '', '', 2, '2022-11-07 14:41:32'),
(6, 6, 'episode no 1', '', 'assets/images/cardposter-04.jpg', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', '', '', 2, '2022-11-07 14:43:17'),
(14, 1, 'episode no 3', '', 'assets/images/cardposter-04.jpg', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', '', '', 2, '2022-11-07 14:41:14'),
(15, 2, 'episode no 5', '', 'assets/images/cardposter-02.jpg', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', '', '', 2, '2022-11-07 14:41:35');

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`id`, `name`, `date`) VALUES
(1, 'Action', '2022-11-05 13:08:25'),
(2, 'Animation', '2022-11-05 13:08:25'),
(3, 'Comedy', '2022-11-05 13:08:25'),
(4, 'Crime', '2022-11-05 13:08:25'),
(5, 'Drama', '2022-11-05 13:08:25'),
(6, 'Experimental', '2022-11-05 13:08:25'),
(7, 'Fantasy', '2022-11-05 13:08:25'),
(8, 'Historical', '2022-11-05 13:08:25'),
(9, 'Horror', '2022-11-05 13:08:25'),
(10, 'Romance', '2022-11-05 13:08:25'),
(11, 'Science Fiction', '2022-11-05 13:12:17'),
(12, 'Thriller', '2022-11-05 13:12:17');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `movie_link` varchar(100) NOT NULL,
  `download_link` varchar(100) NOT NULL,
  `trailer_link` varchar(100) NOT NULL,
  `release_year` int(11) NOT NULL,
  `director_name` varchar(50) NOT NULL,
  `movie_star` varchar(200) NOT NULL,
  `country` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`id`, `title`, `description`, `movie_link`, `download_link`, `trailer_link`, `release_year`, `director_name`, `movie_star`, `country`, `image`, `genre`, `date`) VALUES
(1, 'kgf', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, reprehenderit saepe aut, deserunt eligendi pariatur fugiat harum eum distinctio id asperiores, magnam sequi. Veritatis quia nostrum cum, mollitia quaerat deleniti?', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 2017, 'Joseph Kosinski', 'Jennifer Connelly, Miles Teller, Tom Cruise', 'pakistan', 'assets/images/cardposter-01.jpg', 'Action', '2022-11-05 16:03:06'),
(3, 'pk', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, reprehenderit saepe aut, deserunt eligendi pariatur fugiat harum eum distinctio id asperiores, magnam sequi. Veritatis quia nostrum cum, mollitia quaerat deleniti?', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 2015, 'Joseph Kosinski', 'Jennifer Connelly, Miles Teller, Tom Cruise', 'pakistan', 'assets/images/cardposter-03.webp', 'Action', '2022-11-05 16:03:09'),
(4, 'joker', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, reprehenderit saepe aut, deserunt eligendi pariatur fugiat harum eum distinctio id asperiores, magnam sequi. Veritatis quia nostrum cum, mollitia quaerat deleniti?', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 2015, 'Joseph Kosinski', 'Jennifer Connelly, Miles Teller, Tom Cruise', 'pakistan', 'assets/images/cardposter-04.jpg', 'Action', '2022-11-05 16:03:14'),
(5, 'don', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, reprehenderit saepe aut, deserunt eligendi pariatur fugiat harum eum distinctio id asperiores, magnam sequi. Veritatis quia nostrum cum, mollitia quaerat deleniti?', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 2018, 'Joseph Kosinski', 'Jennifer Connelly, Miles Teller, Tom Cruise', 'pakistan', 'assets/images/cardposter-05.jpg', 'Comedy', '2022-11-05 16:03:29'),
(6, 'kgf', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, reprehenderit saepe aut, deserunt eligendi pariatur fugiat harum eum distinctio id asperiores, magnam sequi. Veritatis quia nostrum cum, mollitia quaerat deleniti?', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 2022, 'Joseph Kosinski', 'Jennifer Connelly, Miles Teller, Tom Cruise', 'pakistan', 'assets/images/cardposter-06.png', 'Comedy', '2022-11-05 16:03:34'),
(11, 'Mirzapur', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, reprehenderit saepe aut, deserunt eligendi pariatur fugiat harum eum distinctio id asperiores, magnam sequi. Veritatis quia nostrum cum, mollitia quaerat deleniti?', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 2022, 'Joseph Kosinski', 'Jennifer Connelly, Miles Teller, Tom Cruise', 'pakistan', 'assets/images/cardposter-07.png', 'Horror', '2022-11-05 16:03:49'),
(15, 'kgf', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, reprehenderit saepe aut, deserunt eligendi pariatur fugiat harum eum distinctio id asperiores, magnam sequi. Veritatis quia nostrum cum, mollitia quaerat deleniti?', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 2017, 'Joseph Kosinski', 'Jennifer Connelly, Miles Teller, Tom Cruise', 'pakistan', 'assets/images/cardposter-01.jpg', 'Horror', '2022-11-05 16:03:53'),
(16, 'pk', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, reprehenderit saepe aut, deserunt eligendi pariatur fugiat harum eum distinctio id asperiores, magnam sequi. Veritatis quia nostrum cum, mollitia quaerat deleniti?', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 2015, 'Joseph Kosinski', 'Jennifer Connelly, Miles Teller, Tom Cruise', 'pakistan', 'assets/images/cardposter-03.webp', 'Movie', '2022-10-25 09:38:26'),
(17, 'joker', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, reprehenderit saepe aut, deserunt eligendi pariatur fugiat harum eum distinctio id asperiores, magnam sequi. Veritatis quia nostrum cum, mollitia quaerat deleniti?', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 2015, 'Joseph Kosinski', 'Jennifer Connelly, Miles Teller, Tom Cruise', 'pakistan', 'assets/images/cardposter-04.jpg', 'Movie', '2022-10-25 09:38:31'),
(18, 'don', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, reprehenderit saepe aut, deserunt eligendi pariatur fugiat harum eum distinctio id asperiores, magnam sequi. Veritatis quia nostrum cum, mollitia quaerat deleniti?', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 2018, 'Joseph Kosinski', 'Jennifer Connelly, Miles Teller, Tom Cruise', 'pakistan', 'assets/images/cardposter-05.jpg', 'Movie', '2022-10-25 09:38:36'),
(19, 'kgf', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, reprehenderit saepe aut, deserunt eligendi pariatur fugiat harum eum distinctio id asperiores, magnam sequi. Veritatis quia nostrum cum, mollitia quaerat deleniti?', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 2022, 'Joseph Kosinski', 'Jennifer Connelly, Miles Teller, Tom Cruise', 'pakistan', 'assets/images/cardposter-06.png', 'Movie', '2022-10-25 09:42:16'),
(20, 'Mirzapur', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, reprehenderit saepe aut, deserunt eligendi pariatur fugiat harum eum distinctio id asperiores, magnam sequi. Veritatis quia nostrum cum, mollitia quaerat deleniti?', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 2022, 'Joseph Kosinski', 'Jennifer Connelly, Miles Teller, Tom Cruise', 'pakistan', 'assets/images/cardposter-07.png', 'Movie', '2022-10-24 14:46:15'),
(21, 'kgf', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, reprehenderit saepe aut, deserunt eligendi pariatur fugiat harum eum distinctio id asperiores, magnam sequi. Veritatis quia nostrum cum, mollitia quaerat deleniti?', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 2017, 'Joseph Kosinski', 'Jennifer Connelly, Miles Teller, Tom Cruise', 'pakistan', 'assets/images/cardposter-01.jpg', 'Drama', '2022-10-24 15:17:27'),
(22, 'pk', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, reprehenderit saepe aut, deserunt eligendi pariatur fugiat harum eum distinctio id asperiores, magnam sequi. Veritatis quia nostrum cum, mollitia quaerat deleniti?', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 2015, 'Joseph Kosinski', 'Jennifer Connelly, Miles Teller, Tom Cruise', 'pakistan', 'assets/images/cardposter-03.webp', 'Drama', '2022-10-25 09:38:26'),
(23, 'joker', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, reprehenderit saepe aut, deserunt eligendi pariatur fugiat harum eum distinctio id asperiores, magnam sequi. Veritatis quia nostrum cum, mollitia quaerat deleniti?', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 2015, 'Joseph Kosinski', 'Jennifer Connelly, Miles Teller, Tom Cruise', 'pakistan', 'assets/images/cardposter-04.jpg', 'Drama', '2022-10-25 09:38:31'),
(24, 'don', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, reprehenderit saepe aut, deserunt eligendi pariatur fugiat harum eum distinctio id asperiores, magnam sequi. Veritatis quia nostrum cum, mollitia quaerat deleniti?', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 2018, 'Joseph Kosinski', 'Jennifer Connelly, Miles Teller, Tom Cruise', 'pakistan', 'assets/images/cardposter-05.jpg', 'Drama', '2022-10-25 09:38:36'),
(25, 'kgf', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, reprehenderit saepe aut, deserunt eligendi pariatur fugiat harum eum distinctio id asperiores, magnam sequi. Veritatis quia nostrum cum, mollitia quaerat deleniti?', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 2022, 'Joseph Kosinski', 'Jennifer Connelly, Miles Teller, Tom Cruise', 'pakistan', 'assets/images/cardposter-06.png', 'Drama', '2022-10-25 09:42:16'),
(27, 'kgf', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, reprehenderit saepe aut, deserunt eligendi pariatur fugiat harum eum distinctio id asperiores, magnam sequi. Veritatis quia nostrum cum, mollitia quaerat deleniti?', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 2017, 'Joseph Kosinski', 'Jennifer Connelly, Miles Teller, Tom Cruise', 'pakistan', 'assets/images/cardposter-01.jpg', 'Drama', '2022-10-24 15:17:27'),
(37, 'dsfvbgv', 'fvbgn', 'DN B', 'AZS V', 'SADFH ', 2003, 'ASDXFB ', 'AZSD ', 'INDIA', 'assets/images/webimages/cardposter-01.jpg', 'Romance', '2022-11-07 12:54:17');

-- --------------------------------------------------------

--
-- Table structure for table `season`
--

CREATE TABLE `season` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `season`
--

INSERT INTO `season` (`id`, `name`, `date`) VALUES
(1, '1', '2022-11-07 09:09:02'),
(2, '2', '2022-11-07 09:09:02'),
(3, '3', '2022-11-07 09:09:02'),
(4, '4', '2022-11-07 09:09:02'),
(5, '5', '2022-11-07 09:09:02');

-- --------------------------------------------------------

--
-- Table structure for table `series`
--

CREATE TABLE `series` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(200) NOT NULL,
  `series_link` varchar(200) NOT NULL,
  `download_link` varchar(200) NOT NULL,
  `trailer` varchar(200) NOT NULL,
  `release_year` varchar(200) NOT NULL,
  `director_name` varchar(200) NOT NULL,
  `series_star` varchar(200) NOT NULL,
  `country` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `series`
--

INSERT INTO `series` (`id`, `title`, `description`, `image`, `series_link`, `download_link`, `trailer`, `release_year`, `director_name`, `series_star`, `country`, `date`) VALUES
(1, 'mirzapur', 'hak-Hee works for a big law firm. She is willing to take any risk to win a case and has become an ace attorney at the law fir', 'assets/images/cardposter-09.jpg', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', '2010', 'Joseph Kosinski', 'Jennifer Connelly, Miles Teller, Tom Cruise', 'india', '2022-11-07 09:11:06'),
(2, 'money heist', 'hak-Hee works for a big law firm. She is willing to take any risk to win a case and has become an ace attorney at the law fir', 'assets/images/cardposter-10.webp', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', '2012', 'Joseph Kosinski', 'Jennifer Connelly, Miles Teller, Tom Cruise', 'spain', '2022-11-03 10:24:30'),
(6, '13 Reason why', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, reprehenderit saepe aut, deserunt eligendi pariatur fugiat harum eum distinctio id asperiores, magnam sequi. Veritatis quia nostrum cum, mollitia quaerat deleniti?', 'assets/images/webimages/cardposter-05.png', '', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', '', '2003', 'abc', 'abc', 'india', '2022-11-07 13:08:28');

-- --------------------------------------------------------

--
-- Table structure for table `year`
--

CREATE TABLE `year` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `year`
--

INSERT INTO `year` (`id`, `name`, `date`) VALUES
(1, '2001', '2022-11-05 13:36:08'),
(3, '2002', '2022-11-05 13:37:26'),
(4, '2003', '2022-11-05 13:37:26'),
(5, '2004', '2022-11-05 13:37:26'),
(6, '2005', '2022-11-05 13:37:26'),
(7, '2006', '2022-11-05 13:37:26'),
(8, '2007', '2022-11-05 13:37:26'),
(9, '2008', '2022-11-05 13:37:26'),
(10, '2009', '2022-11-05 13:37:26'),
(11, '2010', '2022-11-05 13:37:26'),
(12, '2011', '2022-11-05 13:37:26'),
(13, '2012', '2022-11-05 13:37:26'),
(14, '2013', '2022-11-05 13:37:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `episode`
--
ALTER TABLE `episode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `season`
--
ALTER TABLE `season`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `series`
--
ALTER TABLE `series`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `year`
--
ALTER TABLE `year`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;

--
-- AUTO_INCREMENT for table `episode`
--
ALTER TABLE `episode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `season`
--
ALTER TABLE `season`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `series`
--
ALTER TABLE `series`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `year`
--
ALTER TABLE `year`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
