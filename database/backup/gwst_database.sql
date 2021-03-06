-- phpMyAdmin SQL Dump
-- version 4.6.3
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Июл 26 2016 г., 17:58
-- Версия сервера: 10.1.14-MariaDB
-- Версия PHP: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `gwst_database`
--

-- --------------------------------------------------------

--
-- Структура таблицы `countries`
--

CREATE TABLE `countries` (
  `id` int(10) UNSIGNED NOT NULL,
  `country_code` varchar(2) NOT NULL,
  `country_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `countries`
--

INSERT INTO `countries` (`id`, `country_code`, `country_name`) VALUES
(1, 'AF', 'Afghanistan'),
(2, 'AL', 'Albania'),
(3, 'DZ', 'Algeria'),
(4, 'DS', 'American Samoa'),
(5, 'AD', 'Andorra'),
(6, 'AO', 'Angola'),
(7, 'AI', 'Anguilla'),
(8, 'AQ', 'Antarctica'),
(9, 'AG', 'Antigua and Barbuda'),
(10, 'AR', 'Argentina'),
(11, 'AM', 'Armenia'),
(12, 'AW', 'Aruba'),
(13, 'AU', 'Australia'),
(14, 'AT', 'Austria'),
(15, 'AZ', 'Azerbaijan'),
(16, 'BS', 'Bahamas'),
(17, 'BH', 'Bahrain'),
(18, 'BD', 'Bangladesh'),
(19, 'BB', 'Barbados'),
(20, 'BY', 'Belarus'),
(21, 'BE', 'Belgium'),
(22, 'BZ', 'Belize'),
(23, 'BJ', 'Benin'),
(24, 'BM', 'Bermuda'),
(25, 'BT', 'Bhutan'),
(26, 'BO', 'Bolivia'),
(27, 'BA', 'Bosnia and Herzegovina'),
(28, 'BW', 'Botswana'),
(29, 'BV', 'Bouvet Island'),
(30, 'BR', 'Brazil'),
(31, 'IO', 'British Indian Ocean Territory'),
(32, 'BN', 'Brunei Darussalam'),
(33, 'BG', 'Bulgaria'),
(34, 'BF', 'Burkina Faso'),
(35, 'BI', 'Burundi'),
(36, 'KH', 'Cambodia'),
(37, 'CM', 'Cameroon'),
(38, 'CA', 'Canada'),
(39, 'CV', 'Cape Verde'),
(40, 'KY', 'Cayman Islands'),
(41, 'CF', 'Central African Republic'),
(42, 'TD', 'Chad'),
(43, 'CL', 'Chile'),
(44, 'CN', 'China'),
(45, 'CX', 'Christmas Island'),
(46, 'CC', 'Cocos (Keeling) Islands'),
(47, 'CO', 'Colombia'),
(48, 'KM', 'Comoros'),
(49, 'CG', 'Congo'),
(50, 'CK', 'Cook Islands'),
(51, 'CR', 'Costa Rica'),
(52, 'HR', 'Croatia (Hrvatska)'),
(53, 'CU', 'Cuba'),
(54, 'CY', 'Cyprus'),
(55, 'CZ', 'Czech Republic'),
(56, 'DK', 'Denmark'),
(57, 'DJ', 'Djibouti'),
(58, 'DM', 'Dominica'),
(59, 'DO', 'Dominican Republic'),
(60, 'TP', 'East Timor'),
(61, 'EC', 'Ecuador'),
(62, 'EG', 'Egypt'),
(63, 'SV', 'El Salvador'),
(64, 'GQ', 'Equatorial Guinea'),
(65, 'ER', 'Eritrea'),
(66, 'EE', 'Estonia'),
(67, 'ET', 'Ethiopia'),
(68, 'FK', 'Falkland Islands (Malvinas)'),
(69, 'FO', 'Faroe Islands'),
(70, 'FJ', 'Fiji'),
(71, 'FI', 'Finland'),
(72, 'FR', 'France'),
(73, 'FX', 'France, Metropolitan'),
(74, 'GF', 'French Guiana'),
(75, 'PF', 'French Polynesia'),
(76, 'TF', 'French Southern Territories'),
(77, 'GA', 'Gabon'),
(78, 'GM', 'Gambia'),
(79, 'GE', 'Georgia'),
(80, 'DE', 'Germany'),
(81, 'GH', 'Ghana'),
(82, 'GI', 'Gibraltar'),
(83, 'GK', 'Guernsey'),
(84, 'GR', 'Greece'),
(85, 'GL', 'Greenland'),
(86, 'GD', 'Grenada'),
(87, 'GP', 'Guadeloupe'),
(88, 'GU', 'Guam'),
(89, 'GT', 'Guatemala'),
(90, 'GN', 'Guinea'),
(91, 'GW', 'Guinea-Bissau'),
(92, 'GY', 'Guyana'),
(93, 'HT', 'Haiti'),
(94, 'HM', 'Heard and Mc Donald Islands'),
(95, 'HN', 'Honduras'),
(96, 'HK', 'Hong Kong'),
(97, 'HU', 'Hungary'),
(98, 'IS', 'Iceland'),
(99, 'IN', 'India'),
(100, 'IM', 'Isle of Man'),
(101, 'ID', 'Indonesia'),
(102, 'IR', 'Iran (Islamic Republic of)'),
(103, 'IQ', 'Iraq'),
(104, 'IE', 'Ireland'),
(105, 'IL', 'Israel'),
(106, 'IT', 'Italy'),
(107, 'CI', 'Ivory Coast'),
(108, 'JE', 'Jersey'),
(109, 'JM', 'Jamaica'),
(110, 'JP', 'Japan'),
(111, 'JO', 'Jordan'),
(112, 'KZ', 'Kazakhstan'),
(113, 'KE', 'Kenya'),
(114, 'KI', 'Kiribati'),
(115, 'KP', 'Korea, Democratic People\'s Republic of'),
(116, 'KR', 'Korea, Republic of'),
(117, 'XK', 'Kosovo'),
(118, 'KW', 'Kuwait'),
(119, 'KG', 'Kyrgyzstan'),
(120, 'LA', 'Lao People\'s Democratic Republic'),
(121, 'LV', 'Latvia'),
(122, 'LB', 'Lebanon'),
(123, 'LS', 'Lesotho'),
(124, 'LR', 'Liberia'),
(125, 'LY', 'Libyan Arab Jamahiriya'),
(126, 'LI', 'Liechtenstein'),
(127, 'LT', 'Lithuania'),
(128, 'LU', 'Luxembourg'),
(129, 'MO', 'Macau'),
(130, 'MK', 'Macedonia'),
(131, 'MG', 'Madagascar'),
(132, 'MW', 'Malawi'),
(133, 'MY', 'Malaysia'),
(134, 'MV', 'Maldives'),
(135, 'ML', 'Mali'),
(136, 'MT', 'Malta'),
(137, 'MH', 'Marshall Islands'),
(138, 'MQ', 'Martinique'),
(139, 'MR', 'Mauritania'),
(140, 'MU', 'Mauritius'),
(141, 'TY', 'Mayotte'),
(142, 'MX', 'Mexico'),
(143, 'FM', 'Micronesia, Federated States of'),
(144, 'MD', 'Moldova, Republic of'),
(145, 'MC', 'Monaco'),
(146, 'MN', 'Mongolia'),
(147, 'ME', 'Montenegro'),
(148, 'MS', 'Montserrat'),
(149, 'MA', 'Morocco'),
(150, 'MZ', 'Mozambique'),
(151, 'MM', 'Myanmar'),
(152, 'NA', 'Namibia'),
(153, 'NR', 'Nauru'),
(154, 'NP', 'Nepal'),
(155, 'NL', 'Netherlands'),
(156, 'AN', 'Netherlands Antilles'),
(157, 'NC', 'New Caledonia'),
(158, 'NZ', 'New Zealand'),
(159, 'NI', 'Nicaragua'),
(160, 'NE', 'Niger'),
(161, 'NG', 'Nigeria'),
(162, 'NU', 'Niue'),
(163, 'NF', 'Norfolk Island'),
(164, 'MP', 'Northern Mariana Islands'),
(165, 'NO', 'Norway'),
(166, 'OM', 'Oman'),
(167, 'PK', 'Pakistan'),
(168, 'PW', 'Palau'),
(169, 'PS', 'Palestine'),
(170, 'PA', 'Panama'),
(171, 'PG', 'Papua New Guinea'),
(172, 'PY', 'Paraguay'),
(173, 'PE', 'Peru'),
(174, 'PH', 'Philippines'),
(175, 'PN', 'Pitcairn'),
(176, 'PL', 'Poland'),
(177, 'PT', 'Portugal'),
(178, 'PR', 'Puerto Rico'),
(179, 'QA', 'Qatar'),
(180, 'RE', 'Reunion'),
(181, 'RO', 'Romania'),
(182, 'RU', 'Russian Federation'),
(183, 'RW', 'Rwanda'),
(184, 'KN', 'Saint Kitts and Nevis'),
(185, 'LC', 'Saint Lucia'),
(186, 'VC', 'Saint Vincent and the Grenadines'),
(187, 'WS', 'Samoa'),
(188, 'SM', 'San Marino'),
(189, 'ST', 'Sao Tome and Principe'),
(190, 'SA', 'Saudi Arabia'),
(191, 'SN', 'Senegal'),
(192, 'RS', 'Serbia'),
(193, 'SC', 'Seychelles'),
(194, 'SL', 'Sierra Leone'),
(195, 'SG', 'Singapore'),
(196, 'SK', 'Slovakia'),
(197, 'SI', 'Slovenia'),
(198, 'SB', 'Solomon Islands'),
(199, 'SO', 'Somalia'),
(200, 'ZA', 'South Africa'),
(201, 'GS', 'South Georgia South Sandwich Islands'),
(202, 'ES', 'Spain'),
(203, 'LK', 'Sri Lanka'),
(204, 'SH', 'St. Helena'),
(205, 'PM', 'St. Pierre and Miquelon'),
(206, 'SD', 'Sudan'),
(207, 'SR', 'Suriname'),
(208, 'SJ', 'Svalbard and Jan Mayen Islands'),
(209, 'SZ', 'Swaziland'),
(210, 'SE', 'Sweden'),
(211, 'CH', 'Switzerland'),
(212, 'SY', 'Syrian Arab Republic'),
(213, 'TW', 'Taiwan'),
(214, 'TJ', 'Tajikistan'),
(215, 'TZ', 'Tanzania, United Republic of'),
(216, 'TH', 'Thailand'),
(217, 'TG', 'Togo'),
(218, 'TK', 'Tokelau'),
(219, 'TO', 'Tonga'),
(220, 'TT', 'Trinidad and Tobago'),
(221, 'TN', 'Tunisia'),
(222, 'TR', 'Turkey'),
(223, 'TM', 'Turkmenistan'),
(224, 'TC', 'Turks and Caicos Islands'),
(225, 'TV', 'Tuvalu'),
(226, 'UG', 'Uganda'),
(227, 'UA', 'Ukraine'),
(228, 'AE', 'United Arab Emirates'),
(229, 'GB', 'United Kingdom'),
(230, 'US', 'United States'),
(231, 'UM', 'United States minor outlying islands'),
(232, 'UY', 'Uruguay'),
(233, 'UZ', 'Uzbekistan'),
(234, 'VU', 'Vanuatu'),
(235, 'VA', 'Vatican City State'),
(236, 'VE', 'Venezuela'),
(237, 'VN', 'Vietnam'),
(238, 'VG', 'Virgin Islands (British)'),
(239, 'VI', 'Virgin Islands (U.S.)'),
(240, 'WF', 'Wallis and Futuna Islands'),
(241, 'EH', 'Western Sahara'),
(242, 'YE', 'Yemen'),
(243, 'YU', 'Yugoslavia'),
(244, 'ZR', 'Zaire'),
(245, 'ZM', 'Zambia'),
(246, 'ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Структура таблицы `languages`
--

CREATE TABLE `languages` (
  `id` int(10) UNSIGNED NOT NULL,
  `language` varchar(255) DEFAULT NULL,
  `iso_639-1` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `languages`
--

INSERT INTO `languages` (`id`, `language`, `iso_639-1`) VALUES
(1, 'English', 'en'),
(2, 'Afar', 'aa'),
(3, 'Abkhazian', 'ab'),
(4, 'Afrikaans', 'af'),
(5, 'Amharic', 'am'),
(6, 'Arabic', 'ar'),
(7, 'Assamese', 'as'),
(8, 'Aymara', 'ay'),
(9, 'Azerbaijani', 'az'),
(10, 'Bashkir', 'ba'),
(11, 'Belarusian', 'be'),
(12, 'Bulgarian', 'bg'),
(13, 'Bihari', 'bh'),
(14, 'Bislama', 'bi'),
(15, 'Bengali/Bangla', 'bn'),
(16, 'Tibetan', 'bo'),
(17, 'Breton', 'br'),
(18, 'Catalan', 'ca'),
(19, 'Corsican', 'co'),
(20, 'Czech', 'cs'),
(21, 'Welsh', 'cy'),
(22, 'Danish', 'da'),
(23, 'German', 'de'),
(24, 'Bhutani', 'dz'),
(25, 'Greek', 'el'),
(26, 'Esperanto', 'eo'),
(27, 'Spanish', 'es'),
(28, 'Estonian', 'et'),
(29, 'Basque', 'eu'),
(30, 'Persian', 'fa'),
(31, 'Finnish', 'fi'),
(32, 'Fiji', 'fj'),
(33, 'Faeroese', 'fo'),
(34, 'French', 'fr'),
(35, 'Frisian', 'fy'),
(36, 'Irish', 'ga'),
(37, 'Scots/Gaelic', 'gd'),
(38, 'Galician', 'gl'),
(39, 'Guarani', 'gn'),
(40, 'Gujarati', 'gu'),
(41, 'Hausa', 'ha'),
(42, 'Hindi', 'hi'),
(43, 'Croatian', 'hr'),
(44, 'Hungarian', 'hu'),
(45, 'Armenian', 'hy'),
(46, 'Interlingua', 'ia'),
(47, 'Interlingue', 'ie'),
(48, 'Inupiak', 'ik'),
(49, 'Indonesian', 'in'),
(50, 'Icelandic', 'is'),
(51, 'Italian', 'it'),
(52, 'Hebrew', 'iw'),
(53, 'Japanese', 'ja'),
(54, 'Yiddish', 'ji'),
(55, 'Javanese', 'jw'),
(56, 'Georgian', 'ka'),
(57, 'Kazakh', 'kk'),
(58, 'Greenlandic', 'kl'),
(59, 'Cambodian', 'km'),
(60, 'Kannada', 'kn'),
(61, 'Korean', 'ko'),
(62, 'Kashmiri', 'ks'),
(63, 'Kurdish', 'ku'),
(64, 'Kirghiz', 'ky'),
(65, 'Latin', 'la'),
(66, 'Lingala', 'ln'),
(67, 'Laothian', 'lo'),
(68, 'Lithuanian', 'lt'),
(69, 'Latvian/Lettish', 'lv'),
(70, 'Malagasy', 'mg'),
(71, 'Maori', 'mi'),
(72, 'Macedonian', 'mk'),
(73, 'Malayalam', 'ml'),
(74, 'Mongolian', 'mn'),
(75, 'Moldavian', 'mo'),
(76, 'Marathi', 'mr'),
(77, 'Malay', 'ms'),
(78, 'Maltese', 'mt'),
(79, 'Burmese', 'my'),
(80, 'Nauru', 'na'),
(81, 'Nepali', 'ne'),
(82, 'Dutch', 'nl'),
(83, 'Norwegian', 'no'),
(84, 'Occitan', 'oc'),
(85, '(Afan)/Oromoor/Oriya', 'om'),
(86, 'Punjabi', 'pa'),
(87, 'Polish', 'pl'),
(88, 'Pashto/Pushto', 'ps'),
(89, 'Portuguese', 'pt'),
(90, 'Quechua', 'qu'),
(91, 'Rhaeto-Romance', 'rm'),
(92, 'Kirundi', 'rn'),
(93, 'Romanian', 'ro'),
(94, 'Russian', 'ru'),
(95, 'Kinyarwanda', 'rw'),
(96, 'Sanskrit', 'sa'),
(97, 'Sindhi', 'sd'),
(98, 'Sangro', 'sg'),
(99, 'Serbo-Croatian', 'sh'),
(100, 'Singhalese', 'si'),
(101, 'Slovak', 'sk'),
(102, 'Slovenian', 'sl'),
(103, 'Samoan', 'sm'),
(104, 'Shona', 'sn'),
(105, 'Somali', 'so'),
(106, 'Albanian', 'sq'),
(107, 'Serbian', 'sr'),
(108, 'Siswati', 'ss'),
(109, 'Sesotho', 'st'),
(110, 'Sundanese', 'su'),
(111, 'Swedish', 'sv'),
(112, 'Swahili', 'sw'),
(113, 'Tamil', 'ta'),
(114, 'Telugu', 'te'),
(115, 'Tajik', 'tg'),
(116, 'Thai', 'th'),
(117, 'Tigrinya', 'ti'),
(118, 'Turkmen', 'tk'),
(119, 'Tagalog', 'tl'),
(120, 'Setswana', 'tn'),
(121, 'Tonga', 'to'),
(122, 'Turkish', 'tr'),
(123, 'Tsonga', 'ts'),
(124, 'Tatar', 'tt'),
(125, 'Twi', 'tw'),
(126, 'Ukrainian', 'uk'),
(127, 'Urdu', 'ur'),
(128, 'Uzbek', 'uz'),
(129, 'Vietnamese', 'vi'),
(130, 'Volapuk', 'vo'),
(131, 'Wolof', 'wo'),
(132, 'Xhosa', 'xh'),
(133, 'Yoruba', 'yo'),
(134, 'Chinese', 'zh'),
(135, 'Zulu', 'zu');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2016_07_12_172339_create_users_table', 1),
('2016_07_13_092729_create_vacancies_table', 1),
('2016_07_13_101301_create_password_resets_table', 1),
('2016_07_14_133324_create_languages_table', 1),
('2016_07_14_134520_create_vacancy_langs_table', 1),
('2016_07_14_141928_create_countries_table', 2),
('2016_07_14_181530_add_salary_education', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@mail.ru', '$2y$10$k6639i7QNJcAfG/IgwJ6Zewq6UJZrzLAc5dDZUmn2qHqSEPHVQ73C', 'pIRi73tBdfs27ZuCMCrXoOePGH7Wp2EEg6QYFjbC3nZJOjvHjrBLGK6zDaE6', '2016-07-14 10:59:55', '2016-07-18 12:32:38');

-- --------------------------------------------------------

--
-- Структура таблицы `vacancies`
--

CREATE TABLE `vacancies` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text,
  `country` varchar(50) NOT NULL,
  `position` varchar(100) NOT NULL,
  `sex` enum('Мужчина','Женщина','Все') NOT NULL,
  `age_from` int(10) UNSIGNED NOT NULL,
  `age_to` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `salary_from` int(10) UNSIGNED NOT NULL,
  `salary_to` int(10) UNSIGNED DEFAULT NULL,
  `education` enum('неполное высшее образование','базовое высшее образование','полное высшее образование','полное среднее образование','неполное среднее образование','среднее специальное образование') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `vacancies`
--

INSERT INTO `vacancies` (`id`, `name`, `description`, `country`, `position`, `sex`, `age_from`, `age_to`, `created_at`, `updated_at`, `salary_from`, `salary_to`, `education`) VALUES
(39, 'ЗАО БухКреп', 'Nulla repellat dolores magnam in rem cupiditate. Explicabo error aspernatur et corporis.', '69', 'quibusdam', 'Все', 37, 55, NULL, NULL, 337, 3484, 'базовое высшее образование'),
(40, 'ОАО ТрансТеле', 'Iure alias et ipsum. Aut dolores earum saepe. Occaecati eveniet quia aut similique.', '20', 'deleniti', 'Женщина', 29, 26, NULL, NULL, 253, 3224, 'полное среднее образование'),
(41, 'ОАО ТелеТяжЖелДор', 'Repellat sunt id quasi consequuntur et voluptate vitae. Numquam animi corporis amet aut atque eum.', '26', 'beatae', 'Мужчина', 36, 60, NULL, NULL, 438, 888, 'неполное среднее образование'),
(42, 'ООО ТелеТяжАлмаз', 'Sapiente velit nulla nihil unde iste qui. Quia et hic dolores quos.', '27', 'sit', 'Женщина', 35, 27, NULL, NULL, 163, 2455, 'среднее специальное образование'),
(43, 'ОАО БухРосМоторМаш', 'Quia ut ratione placeat. Nihil nihil ipsam modi aliquam. Est facilis ipsam dolor quia non.', '161', 'rerum', 'Мужчина', 22, 58, NULL, NULL, 338, 3019, 'полное высшее образование'),
(44, 'ООО Компания СтройЖелДорАсбоцемент', 'Quibusdam alias quis blanditiis quis. Ut et voluptatem recusandae at. Dolore quis quos et et.', '26', 'quisquam', 'Все', 38, 38, NULL, NULL, 146, 3976, 'базовое высшее образование'),
(45, 'ООО ТекстильАсбоцемент', 'Sit libero beatae incidunt aut vel. Id odit repellendus iusto.', '208', 'optio', 'Все', 24, 51, NULL, NULL, 252, 3910, 'полное высшее образование'),
(46, 'ООО Компания Лифт', 'Sequi quae velit ex earum. Error aut accusantium vel dolor ut non in.', '212', 'iusto', 'Женщина', 23, 28, NULL, NULL, 395, 1161, 'неполное среднее образование'),
(47, 'ЗАО ОблМоторТелеЛизинг', 'Culpa nihil exercitationem tempora aut eos quos veniam. Qui dolorum eos earum nulla incidunt aut.', '197', 'quidem', 'Женщина', 19, 33, NULL, NULL, 240, 1024, 'среднее специальное образование'),
(48, 'ООО ГаражЭлектро', 'Voluptatem quia quia id sed. Non qui alias sed ab ab. Sit repellat doloribus corrupti autem.', '148', 'soluta', 'Все', 24, 57, NULL, NULL, 244, 3287, 'полное среднее образование'),
(49, 'ООО Компания ЖелДор', 'Voluptatem voluptas ea magni molestiae quo. Neque et ut officiis.', '147', 'facere', 'Все', 40, 52, NULL, NULL, 471, 2425, 'полное высшее образование'),
(50, 'ООО БашкирМетизЭлектроЛизинг', 'Consequuntur ut aspernatur accusantium libero. Consequatur consequatur aut laboriosam voluptatibus.', '131', 'autem', 'Женщина', 35, 49, NULL, NULL, 487, 2681, 'среднее специальное образование'),
(51, 'ОАО ХозБух', 'Vitae natus et sed sapiente iure iste quia. Maiores iusto necessitatibus aut sit eveniet id.', '135', 'labore', 'Женщина', 24, 59, NULL, NULL, 489, 1824, 'базовое высшее образование'),
(52, 'ОАО ЭлектроСтройТех', 'Sunt autem sint ut. Et omnis non maxime voluptatum.', '164', 'hic', 'Женщина', 26, 27, NULL, NULL, 324, 3967, 'полное высшее образование'),
(53, 'ООО Метиз', 'Eveniet est magni debitis nobis aut enim. Fugit aut placeat provident maiores.', '15', 'eligendi', 'Мужчина', 22, 48, NULL, NULL, 313, 2194, 'полное высшее образование'),
(54, 'ОАО ЖелДорГаражЖелДор', 'Vel sed corporis sint atque provident ab dolores. Et qui et omnis numquam consequatur.', '53', 'quis', 'Женщина', 36, 31, NULL, NULL, 112, 1219, 'среднее специальное образование'),
(55, 'ООО Компания Строй', 'Cum a enim voluptatem aut a aut aliquid velit. Sequi dolorem nulla perferendis.', '66', 'tempore', 'Женщина', 32, 58, NULL, NULL, 376, 2023, 'неполное высшее образование'),
(56, 'ООО Компания ТехСтройРос', 'Autem voluptatem at earum eum quia vero repellat. Animi quis aut dolorem possimus.', '101', 'tempore', 'Все', 29, 22, NULL, NULL, 198, 1040, 'полное среднее образование'),
(57, 'ООО Компания РосРосЭлектро', 'Explicabo repellendus eos ut. Vitae rerum commodi rerum. Repellendus laboriosam fugit id.', '188', 'cum', 'Все', 23, 36, NULL, NULL, 185, 2413, 'полное высшее образование'),
(58, 'ООО Компания ТелеТверьМотор', 'Aut et ut dolor eaque. Velit debitis assumenda iste voluptatem. Beatae enim dolore et ad nobis.', '193', 'sit', 'Женщина', 24, 24, NULL, NULL, 261, 2302, 'полное среднее образование'),
(59, 'ОАО Тверь', 'Perspiciatis culpa delectus necessitatibus et doloremque. Magni aut dolore in ea et eligendi.', '6', 'molestiae', 'Мужчина', 28, 27, NULL, NULL, 469, 1557, 'полное среднее образование'),
(60, 'ОАО ТекстильТехТверьНаладка', 'Iusto esse esse non aut. Magnam magni itaque veritatis nobis. Et ut quis voluptas dolorem cum odio.', '137', 'aut', 'Все', 29, 52, NULL, NULL, 410, 561, 'неполное высшее образование'),
(61, 'ЗАО УралАсбоцементУралПром', 'Et iste vitae vel quasi. Suscipit assumenda quasi dicta pariatur. Quo perferendis optio qui quos.', '229', 'adipisci', 'Женщина', 27, 54, NULL, NULL, 208, 2300, 'полное высшее образование'),
(62, 'ООО АвтоХозХоз-М', 'Ut vitae natus dolorem nihil. Aut ea aliquam enim ullam ipsa mollitia aut omnis.', '27', 'accusantium', 'Все', 33, 28, NULL, NULL, 383, 2155, 'полное среднее образование'),
(63, 'ООО Компания РосХозЭлектроПром', 'Doloremque ullam consequatur aut quia fugit sit. Aperiam quisquam enim voluptate dolores.', '234', 'eaque', 'Все', 33, 37, NULL, NULL, 242, 2532, 'неполное высшее образование'),
(64, 'Test', 'Test', '1', 'Test', 'Мужчина', 18, 20, '2016-07-18 12:43:12', '2016-07-18 12:43:12', 500, 1000, 'неполное высшее образование');

-- --------------------------------------------------------

--
-- Структура таблицы `vacancy_langs`
--

CREATE TABLE `vacancy_langs` (
  `vac_id` int(10) UNSIGNED NOT NULL,
  `lang_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `vacancy_langs`
--

INSERT INTO `vacancy_langs` (`vac_id`, `lang_id`) VALUES
(64, 1),
(64, 2),
(64, 3);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Индексы таблицы `vacancies`
--
ALTER TABLE `vacancies`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `vacancy_langs`
--
ALTER TABLE `vacancy_langs`
  ADD PRIMARY KEY (`vac_id`,`lang_id`),
  ADD KEY `vacancy_langs_lang_id_foreign` (`lang_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;
--
-- AUTO_INCREMENT для таблицы `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `vacancies`
--
ALTER TABLE `vacancies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `vacancy_langs`
--
ALTER TABLE `vacancy_langs`
  ADD CONSTRAINT `vacancy_langs_lang_id_foreign` FOREIGN KEY (`lang_id`) REFERENCES `languages` (`id`),
  ADD CONSTRAINT `vacancy_langs_vac_id_foreign` FOREIGN KEY (`vac_id`) REFERENCES `vacancies` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
