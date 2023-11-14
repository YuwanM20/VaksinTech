-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 03, 2022 at 03:09 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vaksincovid-19`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flag_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `short_name`, `flag_img`, `country_code`, `created_at`, `updated_at`) VALUES
(1, 'Afghanistan', 'AF', NULL, '93', '2022-09-12 08:58:43', '2022-09-12 08:58:43'),
(2, 'Albania', 'AL', NULL, '355', '2022-09-12 08:58:43', '2022-09-12 08:58:43'),
(3, 'Algeria', 'DZ', NULL, '213', '2022-09-12 08:58:43', '2022-09-12 08:58:43'),
(4, 'American Samoa', 'AS', NULL, '1684', '2022-09-12 08:58:43', '2022-09-12 08:58:43'),
(5, 'Andorra', 'AD', NULL, '376', '2022-09-12 08:58:44', '2022-09-12 08:58:44'),
(6, 'Angola', 'AO', NULL, '244', '2022-09-12 08:58:44', '2022-09-12 08:58:44'),
(7, 'Anguilla', 'AI', NULL, '1264', '2022-09-12 08:58:44', '2022-09-12 08:58:44'),
(8, 'Antarctica', 'AQ', NULL, '0', '2022-09-12 08:58:44', '2022-09-12 08:58:44'),
(9, 'Antigua And Barbuda', 'AG', NULL, '1268', '2022-09-12 08:58:44', '2022-09-12 08:58:44'),
(10, 'Argentina', 'AR', NULL, '54', '2022-09-12 08:58:44', '2022-09-12 08:58:44'),
(11, 'Armenia', 'AM', NULL, '374', '2022-09-12 08:58:44', '2022-09-12 08:58:44'),
(12, 'Aruba', 'AW', NULL, '297', '2022-09-12 08:58:44', '2022-09-12 08:58:44'),
(13, 'Australia', 'AU', NULL, '61', '2022-09-12 08:58:44', '2022-09-12 08:58:44'),
(14, 'Austria', 'AT', NULL, '43', '2022-09-12 08:58:44', '2022-09-12 08:58:44'),
(15, 'Azerbaijan', 'AZ', NULL, '994', '2022-09-12 08:58:44', '2022-09-12 08:58:44'),
(16, 'Bahamas The', 'BS', NULL, '1242', '2022-09-12 08:58:44', '2022-09-12 08:58:44'),
(17, 'Bahrain', 'BH', NULL, '973', '2022-09-12 08:58:44', '2022-09-12 08:58:44'),
(18, 'Bangladesh', 'BD', NULL, '880', '2022-09-12 08:58:44', '2022-09-12 08:58:44'),
(19, 'Barbados', 'BB', NULL, '1246', '2022-09-12 08:58:44', '2022-09-12 08:58:44'),
(20, 'Belarus', 'BY', NULL, '375', '2022-09-12 08:58:44', '2022-09-12 08:58:44'),
(21, 'Belgium', 'BE', NULL, '32', '2022-09-12 08:58:44', '2022-09-12 08:58:44'),
(22, 'Belize', 'BZ', NULL, '501', '2022-09-12 08:58:44', '2022-09-12 08:58:44'),
(23, 'Benin', 'BJ', NULL, '229', '2022-09-12 08:58:44', '2022-09-12 08:58:44'),
(24, 'Bermuda', 'BM', NULL, '1441', '2022-09-12 08:58:44', '2022-09-12 08:58:44'),
(25, 'Bhutan', 'BT', NULL, '975', '2022-09-12 08:58:44', '2022-09-12 08:58:44'),
(26, 'Bolivia', 'BO', NULL, '591', '2022-09-12 08:58:44', '2022-09-12 08:58:44'),
(27, 'Bosnia and Herzegovina', 'BA', NULL, '387', '2022-09-12 08:58:44', '2022-09-12 08:58:44'),
(28, 'Botswana', 'BW', NULL, '267', '2022-09-12 08:58:44', '2022-09-12 08:58:44'),
(29, 'Bouvet Island', 'BV', NULL, '0', '2022-09-12 08:58:44', '2022-09-12 08:58:44'),
(30, 'Brazil', 'BR', NULL, '55', '2022-09-12 08:58:44', '2022-09-12 08:58:44'),
(31, 'British Indian Ocean Territory', 'IO', NULL, '246', '2022-09-12 08:58:44', '2022-09-12 08:58:44'),
(32, 'Brunei', 'BN', NULL, '673', '2022-09-12 08:58:44', '2022-09-12 08:58:44'),
(33, 'Bulgaria', 'BG', NULL, '359', '2022-09-12 08:58:44', '2022-09-12 08:58:44'),
(34, 'Burkina Faso', 'BF', NULL, '226', '2022-09-12 08:58:44', '2022-09-12 08:58:44'),
(35, 'Burundi', 'BI', NULL, '257', '2022-09-12 08:58:44', '2022-09-12 08:58:44'),
(36, 'Cambodia', 'KH', NULL, '855', '2022-09-12 08:58:45', '2022-09-12 08:58:45'),
(37, 'Cameroon', 'CM', NULL, '237', '2022-09-12 08:58:45', '2022-09-12 08:58:45'),
(38, 'Canada', 'CA', NULL, '1', '2022-09-12 08:58:45', '2022-09-12 08:58:45'),
(39, 'Cape Verde', 'CV', NULL, '238', '2022-09-12 08:58:45', '2022-09-12 08:58:45'),
(40, 'Cayman Islands', 'KY', NULL, '1345', '2022-09-12 08:58:45', '2022-09-12 08:58:45'),
(41, 'Central African Republic', 'CF', NULL, '236', '2022-09-12 08:58:45', '2022-09-12 08:58:45'),
(42, 'Chad', 'TD', NULL, '235', '2022-09-12 08:58:45', '2022-09-12 08:58:45'),
(43, 'Chile', 'CL', NULL, '56', '2022-09-12 08:58:45', '2022-09-12 08:58:45'),
(44, 'China', 'CN', NULL, '86', '2022-09-12 08:58:45', '2022-09-12 08:58:45'),
(45, 'Christmas Island', 'CX', NULL, '61', '2022-09-12 08:58:45', '2022-09-12 08:58:45'),
(46, 'Cocos (Keeling) Islands', 'CC', NULL, '672', '2022-09-12 08:58:45', '2022-09-12 08:58:45'),
(47, 'Colombia', 'CO', NULL, '57', '2022-09-12 08:58:45', '2022-09-12 08:58:45'),
(48, 'Comoros', 'KM', NULL, '269', '2022-09-12 08:58:45', '2022-09-12 08:58:45'),
(49, 'Cook Islands', 'CK', NULL, '682', '2022-09-12 08:58:45', '2022-09-12 08:58:45'),
(50, 'Costa Rica', 'CR', NULL, '506', '2022-09-12 08:58:45', '2022-09-12 08:58:45'),
(51, 'Cote D\'Ivoire (Ivory Coast)', 'CI', NULL, '225', '2022-09-12 08:58:45', '2022-09-12 08:58:45'),
(52, 'Croatia (Hrvatska)', 'HR', NULL, '385', '2022-09-12 08:58:45', '2022-09-12 08:58:45'),
(53, 'Cuba', 'CU', NULL, '53', '2022-09-12 08:58:45', '2022-09-12 08:58:45'),
(54, 'Cyprus', 'CY', NULL, '357', '2022-09-12 08:58:45', '2022-09-12 08:58:45'),
(55, 'Czech Republic', 'CZ', NULL, '420', '2022-09-12 08:58:45', '2022-09-12 08:58:45'),
(56, 'Democratic Republic Of The Congo', 'CD', NULL, '243', '2022-09-12 08:58:45', '2022-09-12 08:58:45'),
(57, 'Denmark', 'DK', NULL, '45', '2022-09-12 08:58:45', '2022-09-12 08:58:45'),
(58, 'Djibouti', 'DJ', NULL, '253', '2022-09-12 08:58:45', '2022-09-12 08:58:45'),
(59, 'Dominica', 'DM', NULL, '1767', '2022-09-12 08:58:45', '2022-09-12 08:58:45'),
(60, 'Dominican Republic', 'DO', NULL, '1809', '2022-09-12 08:58:45', '2022-09-12 08:58:45'),
(61, 'East Timor', 'TP', NULL, '670', '2022-09-12 08:58:45', '2022-09-12 08:58:45'),
(62, 'Ecuador', 'EC', NULL, '593', '2022-09-12 08:58:45', '2022-09-12 08:58:45'),
(63, 'Egypt', 'EG', NULL, '20', '2022-09-12 08:58:45', '2022-09-12 08:58:45'),
(64, 'El Salvador', 'SV', NULL, '503', '2022-09-12 08:58:45', '2022-09-12 08:58:45'),
(65, 'Equatorial Guinea', 'GQ', NULL, '240', '2022-09-12 08:58:45', '2022-09-12 08:58:45'),
(66, 'Eritrea', 'ER', NULL, '291', '2022-09-12 08:58:45', '2022-09-12 08:58:45'),
(67, 'Estonia', 'EE', NULL, '372', '2022-09-12 08:58:45', '2022-09-12 08:58:45'),
(68, 'Ethiopia', 'ET', NULL, '251', '2022-09-12 08:58:45', '2022-09-12 08:58:45'),
(69, 'Falkland Islands', 'FK', NULL, '500', '2022-09-12 08:58:45', '2022-09-12 08:58:45'),
(70, 'Faroe Islands', 'FO', NULL, '298', '2022-09-12 08:58:46', '2022-09-12 08:58:46'),
(71, 'Fiji Islands', 'FJ', NULL, '679', '2022-09-12 08:58:46', '2022-09-12 08:58:46'),
(72, 'Finland', 'FI', NULL, '358', '2022-09-12 08:58:46', '2022-09-12 08:58:46'),
(73, 'France', 'FR', NULL, '33', '2022-09-12 08:58:46', '2022-09-12 08:58:46'),
(74, 'French Guiana', 'GF', NULL, '594', '2022-09-12 08:58:46', '2022-09-12 08:58:46'),
(75, 'French Polynesia', 'PF', NULL, '689', '2022-09-12 08:58:46', '2022-09-12 08:58:46'),
(76, 'French Southern Territories', 'TF', NULL, '0', '2022-09-12 08:58:46', '2022-09-12 08:58:46'),
(77, 'Gabon', 'GA', NULL, '241', '2022-09-12 08:58:46', '2022-09-12 08:58:46'),
(78, 'Gambia The', 'GM', NULL, '220', '2022-09-12 08:58:46', '2022-09-12 08:58:46'),
(79, 'Georgia', 'GE', NULL, '995', '2022-09-12 08:58:46', '2022-09-12 08:58:46'),
(80, 'Germany', 'DE', NULL, '49', '2022-09-12 08:58:46', '2022-09-12 08:58:46'),
(81, 'Ghana', 'GH', NULL, '233', '2022-09-12 08:58:46', '2022-09-12 08:58:46'),
(82, 'Gibraltar', 'GI', NULL, '350', '2022-09-12 08:58:46', '2022-09-12 08:58:46'),
(83, 'Greece', 'GR', NULL, '30', '2022-09-12 08:58:46', '2022-09-12 08:58:46'),
(84, 'Greenland', 'GL', NULL, '299', '2022-09-12 08:58:46', '2022-09-12 08:58:46'),
(85, 'Grenada', 'GD', NULL, '1473', '2022-09-12 08:58:46', '2022-09-12 08:58:46'),
(86, 'Guadeloupe', 'GP', NULL, '590', '2022-09-12 08:58:46', '2022-09-12 08:58:46'),
(87, 'Guam', 'GU', NULL, '1671', '2022-09-12 08:58:46', '2022-09-12 08:58:46'),
(88, 'Guatemala', 'GT', NULL, '502', '2022-09-12 08:58:46', '2022-09-12 08:58:46'),
(89, 'Guernsey and Alderney', 'XU', NULL, '44', '2022-09-12 08:58:46', '2022-09-12 08:58:46'),
(90, 'Guinea', 'GN', NULL, '224', '2022-09-12 08:58:46', '2022-09-12 08:58:46'),
(91, 'Guinea-Bissau', 'GW', NULL, '245', '2022-09-12 08:58:46', '2022-09-12 08:58:46'),
(92, 'Guyana', 'GY', NULL, '592', '2022-09-12 08:58:46', '2022-09-12 08:58:46'),
(93, 'Haiti', 'HT', NULL, '509', '2022-09-12 08:58:46', '2022-09-12 08:58:46'),
(94, 'Heard and McDonald Islands', 'HM', NULL, '0', '2022-09-12 08:58:46', '2022-09-12 08:58:46'),
(95, 'Honduras', 'HN', NULL, '504', '2022-09-12 08:58:46', '2022-09-12 08:58:46'),
(96, 'Hong Kong S.A.R.', 'HK', NULL, '852', '2022-09-12 08:58:46', '2022-09-12 08:58:46'),
(97, 'Hungary', 'HU', NULL, '36', '2022-09-12 08:58:46', '2022-09-12 08:58:46'),
(98, 'Iceland', 'IS', NULL, '354', '2022-09-12 08:58:46', '2022-09-12 08:58:46'),
(99, 'India', 'IN', NULL, '91', '2022-09-12 08:58:47', '2022-09-12 08:58:47'),
(100, 'Indonesia', 'ID', NULL, '62', '2022-09-12 08:58:47', '2022-09-12 08:58:47'),
(101, 'Iran', 'IR', NULL, '98', '2022-09-12 08:58:47', '2022-09-12 08:58:47'),
(102, 'Iraq', 'IQ', NULL, '964', '2022-09-12 08:58:47', '2022-09-12 08:58:47'),
(103, 'Ireland', 'IE', NULL, '353', '2022-09-12 08:58:47', '2022-09-12 08:58:47'),
(104, 'Israel', 'IL', NULL, '972', '2022-09-12 08:58:47', '2022-09-12 08:58:47'),
(105, 'Italy', 'IT', NULL, '39', '2022-09-12 08:58:47', '2022-09-12 08:58:47'),
(106, 'Jamaica', 'JM', NULL, '1876', '2022-09-12 08:58:47', '2022-09-12 08:58:47'),
(107, 'Japan', 'JP', NULL, '81', '2022-09-12 08:58:47', '2022-09-12 08:58:47'),
(108, 'Jersey', 'XJ', NULL, '44', '2022-09-12 08:58:47', '2022-09-12 08:58:47'),
(109, 'Jordan', 'JO', NULL, '962', '2022-09-12 08:58:47', '2022-09-12 08:58:47'),
(110, 'Kazakhstan', 'KZ', NULL, '7', '2022-09-12 08:58:47', '2022-09-12 08:58:47'),
(111, 'Kenya', 'KE', NULL, '254', '2022-09-12 08:58:47', '2022-09-12 08:58:47'),
(112, 'Kiribati', 'KI', NULL, '686', '2022-09-12 08:58:47', '2022-09-12 08:58:47'),
(113, 'Korea North', 'KP', NULL, '850', '2022-09-12 08:58:47', '2022-09-12 08:58:47'),
(114, 'Korea South', 'KR', NULL, '82', '2022-09-12 08:58:47', '2022-09-12 08:58:47'),
(115, 'Kuwait', 'KW', NULL, '965', '2022-09-12 08:58:47', '2022-09-12 08:58:47'),
(116, 'Kyrgyzstan', 'KG', NULL, '996', '2022-09-12 08:58:47', '2022-09-12 08:58:47'),
(117, 'Laos', 'LA', NULL, '856', '2022-09-12 08:58:47', '2022-09-12 08:58:47'),
(118, 'Latvia', 'LV', NULL, '371', '2022-09-12 08:58:47', '2022-09-12 08:58:47'),
(119, 'Lebanon', 'LB', NULL, '961', '2022-09-12 08:58:47', '2022-09-12 08:58:47'),
(120, 'Lesotho', 'LS', NULL, '266', '2022-09-12 08:58:47', '2022-09-12 08:58:47'),
(121, 'Liberia', 'LR', NULL, '231', '2022-09-12 08:58:47', '2022-09-12 08:58:47'),
(122, 'Libya', 'LY', NULL, '218', '2022-09-12 08:58:47', '2022-09-12 08:58:47'),
(123, 'Liechtenstein', 'LI', NULL, '423', '2022-09-12 08:58:47', '2022-09-12 08:58:47'),
(124, 'Lithuania', 'LT', NULL, '370', '2022-09-12 08:58:47', '2022-09-12 08:58:47'),
(125, 'Luxembourg', 'LU', NULL, '352', '2022-09-12 08:58:47', '2022-09-12 08:58:47'),
(126, 'Macau S.A.R.', 'MO', NULL, '853', '2022-09-12 08:58:48', '2022-09-12 08:58:48'),
(127, 'Macedonia', 'MK', NULL, '389', '2022-09-12 08:58:48', '2022-09-12 08:58:48'),
(128, 'Madagascar', 'MG', NULL, '261', '2022-09-12 08:58:48', '2022-09-12 08:58:48'),
(129, 'Malawi', 'MW', NULL, '265', '2022-09-12 08:58:48', '2022-09-12 08:58:48'),
(130, 'Malaysia', 'MY', NULL, '60', '2022-09-12 08:58:48', '2022-09-12 08:58:48'),
(131, 'Maldives', 'MV', NULL, '960', '2022-09-12 08:58:48', '2022-09-12 08:58:48'),
(132, 'Mali', 'ML', NULL, '223', '2022-09-12 08:58:48', '2022-09-12 08:58:48'),
(133, 'Malta', 'MT', NULL, '356', '2022-09-12 08:58:48', '2022-09-12 08:58:48'),
(134, 'Man (Isle of)', 'XM', NULL, '44', '2022-09-12 08:58:48', '2022-09-12 08:58:48'),
(135, 'Marshall Islands', 'MH', NULL, '692', '2022-09-12 08:58:48', '2022-09-12 08:58:48'),
(136, 'Martinique', 'MQ', NULL, '596', '2022-09-12 08:58:48', '2022-09-12 08:58:48'),
(137, 'Mauritania', 'MR', NULL, '222', '2022-09-12 08:58:48', '2022-09-12 08:58:48'),
(138, 'Mauritius', 'MU', NULL, '230', '2022-09-12 08:58:48', '2022-09-12 08:58:48'),
(139, 'Mayotte', 'YT', NULL, '269', '2022-09-12 08:58:48', '2022-09-12 08:58:48'),
(140, 'Mexico', 'MX', NULL, '52', '2022-09-12 08:58:48', '2022-09-12 08:58:48'),
(141, 'Micronesia', 'FM', NULL, '691', '2022-09-12 08:58:48', '2022-09-12 08:58:48'),
(142, 'Moldova', 'MD', NULL, '373', '2022-09-12 08:58:48', '2022-09-12 08:58:48'),
(143, 'Monaco', 'MC', NULL, '377', '2022-09-12 08:58:48', '2022-09-12 08:58:48'),
(144, 'Mongolia', 'MN', NULL, '976', '2022-09-12 08:58:48', '2022-09-12 08:58:48'),
(145, 'Montserrat', 'MS', NULL, '1664', '2022-09-12 08:58:48', '2022-09-12 08:58:48'),
(146, 'Morocco', 'MA', NULL, '212', '2022-09-12 08:58:48', '2022-09-12 08:58:48'),
(147, 'Mozambique', 'MZ', NULL, '258', '2022-09-12 08:58:48', '2022-09-12 08:58:48'),
(148, 'Myanmar', 'MM', NULL, '95', '2022-09-12 08:58:48', '2022-09-12 08:58:48'),
(149, 'Namibia', 'NA', NULL, '264', '2022-09-12 08:58:48', '2022-09-12 08:58:48'),
(150, 'Nauru', 'NR', NULL, '674', '2022-09-12 08:58:48', '2022-09-12 08:58:48'),
(151, 'Nepal', 'NP', NULL, '977', '2022-09-12 08:58:48', '2022-09-12 08:58:48'),
(152, 'Netherlands Antilles', 'AN', NULL, '599', '2022-09-12 08:58:48', '2022-09-12 08:58:48'),
(153, 'Netherlands The', 'NL', NULL, '31', '2022-09-12 08:58:48', '2022-09-12 08:58:48'),
(154, 'New Caledonia', 'NC', NULL, '687', '2022-09-12 08:58:48', '2022-09-12 08:58:48'),
(155, 'New Zealand', 'NZ', NULL, '64', '2022-09-12 08:58:48', '2022-09-12 08:58:48'),
(156, 'Nicaragua', 'NI', NULL, '505', '2022-09-12 08:58:48', '2022-09-12 08:58:48'),
(157, 'Niger', 'NE', NULL, '227', '2022-09-12 08:58:49', '2022-09-12 08:58:49'),
(158, 'Nigeria', 'NG', NULL, '234', '2022-09-12 08:58:49', '2022-09-12 08:58:49'),
(159, 'Niue', 'NU', NULL, '683', '2022-09-12 08:58:49', '2022-09-12 08:58:49'),
(160, 'Norfolk Island', 'NF', NULL, '672', '2022-09-12 08:58:49', '2022-09-12 08:58:49'),
(161, 'Northern Mariana Islands', 'MP', NULL, '1670', '2022-09-12 08:58:49', '2022-09-12 08:58:49'),
(162, 'Norway', 'NO', NULL, '47', '2022-09-12 08:58:49', '2022-09-12 08:58:49'),
(163, 'Oman', 'OM', NULL, '968', '2022-09-12 08:58:49', '2022-09-12 08:58:49'),
(164, 'Pakistan', 'PK', NULL, '92', '2022-09-12 08:58:49', '2022-09-12 08:58:49'),
(165, 'Palau', 'PW', NULL, '680', '2022-09-12 08:58:49', '2022-09-12 08:58:49'),
(166, 'Palestinian Territory Occupied', 'PS', NULL, '970', '2022-09-12 08:58:49', '2022-09-12 08:58:49'),
(167, 'Panama', 'PA', NULL, '507', '2022-09-12 08:58:49', '2022-09-12 08:58:49'),
(168, 'Papua new Guinea', 'PG', NULL, '675', '2022-09-12 08:58:49', '2022-09-12 08:58:49'),
(169, 'Paraguay', 'PY', NULL, '595', '2022-09-12 08:58:49', '2022-09-12 08:58:49'),
(170, 'Peru', 'PE', NULL, '51', '2022-09-12 08:58:49', '2022-09-12 08:58:49'),
(171, 'Philippines', 'PH', NULL, '63', '2022-09-12 08:58:49', '2022-09-12 08:58:49'),
(172, 'Pitcairn Island', 'PN', NULL, '0', '2022-09-12 08:58:49', '2022-09-12 08:58:49'),
(173, 'Poland', 'PL', NULL, '48', '2022-09-12 08:58:49', '2022-09-12 08:58:49'),
(174, 'Portugal', 'PT', NULL, '351', '2022-09-12 08:58:49', '2022-09-12 08:58:49'),
(175, 'Puerto Rico', 'PR', NULL, '1787', '2022-09-12 08:58:49', '2022-09-12 08:58:49'),
(176, 'Qatar', 'QA', NULL, '974', '2022-09-12 08:58:49', '2022-09-12 08:58:49'),
(177, 'Republic Of The Congo', 'CG', NULL, '242', '2022-09-12 08:58:49', '2022-09-12 08:58:49'),
(178, 'Reunion', 'RE', NULL, '262', '2022-09-12 08:58:49', '2022-09-12 08:58:49'),
(179, 'Romania', 'RO', NULL, '40', '2022-09-12 08:58:49', '2022-09-12 08:58:49'),
(180, 'Russia', 'RU', NULL, '70', '2022-09-12 08:58:49', '2022-09-12 08:58:49'),
(181, 'Rwanda', 'RW', NULL, '250', '2022-09-12 08:58:49', '2022-09-12 08:58:49'),
(182, 'Saint Helena', 'SH', NULL, '290', '2022-09-12 08:58:49', '2022-09-12 08:58:49'),
(183, 'Saint Kitts And Nevis', 'KN', NULL, '1869', '2022-09-12 08:58:49', '2022-09-12 08:58:49'),
(184, 'Saint Lucia', 'LC', NULL, '1758', '2022-09-12 08:58:49', '2022-09-12 08:58:49'),
(185, 'Saint Pierre and Miquelon', 'PM', NULL, '508', '2022-09-12 08:58:49', '2022-09-12 08:58:49'),
(186, 'Saint Vincent And The Grenadines', 'VC', NULL, '1784', '2022-09-12 08:58:49', '2022-09-12 08:58:49'),
(187, 'Samoa', 'WS', NULL, '684', '2022-09-12 08:58:49', '2022-09-12 08:58:49'),
(188, 'San Marino', 'SM', NULL, '378', '2022-09-12 08:58:49', '2022-09-12 08:58:49'),
(189, 'Sao Tome and Principe', 'ST', NULL, '239', '2022-09-12 08:58:49', '2022-09-12 08:58:49'),
(190, 'Saudi Arabia', 'SA', NULL, '966', '2022-09-12 08:58:49', '2022-09-12 08:58:49'),
(191, 'Senegal', 'SN', NULL, '221', '2022-09-12 08:58:49', '2022-09-12 08:58:49'),
(192, 'Serbia', 'RS', NULL, '381', '2022-09-12 08:58:50', '2022-09-12 08:58:50'),
(193, 'Seychelles', 'SC', NULL, '248', '2022-09-12 08:58:50', '2022-09-12 08:58:50'),
(194, 'Sierra Leone', 'SL', NULL, '232', '2022-09-12 08:58:50', '2022-09-12 08:58:50'),
(195, 'Singapore', 'SG', NULL, '65', '2022-09-12 08:58:50', '2022-09-12 08:58:50'),
(196, 'Slovakia', 'SK', NULL, '421', '2022-09-12 08:58:50', '2022-09-12 08:58:50'),
(197, 'Slovenia', 'SI', NULL, '386', '2022-09-12 08:58:50', '2022-09-12 08:58:50'),
(198, 'Smaller Territories of the UK', 'XG', NULL, '44', '2022-09-12 08:58:50', '2022-09-12 08:58:50'),
(199, 'Solomon Islands', 'SB', NULL, '677', '2022-09-12 08:58:50', '2022-09-12 08:58:50'),
(200, 'Somalia', 'SO', NULL, '252', '2022-09-12 08:58:50', '2022-09-12 08:58:50'),
(201, 'South Africa', 'ZA', NULL, '27', '2022-09-12 08:58:50', '2022-09-12 08:58:50'),
(202, 'South Georgia', 'GS', NULL, '0', '2022-09-12 08:58:50', '2022-09-12 08:58:50'),
(203, 'South Sudan', 'SS', NULL, '211', '2022-09-12 08:58:50', '2022-09-12 08:58:50'),
(204, 'Spain', 'ES', NULL, '34', '2022-09-12 08:58:50', '2022-09-12 08:58:50'),
(205, 'Sri Lanka', 'LK', NULL, '94', '2022-09-12 08:58:50', '2022-09-12 08:58:50'),
(206, 'Sudan', 'SD', NULL, '249', '2022-09-12 08:58:50', '2022-09-12 08:58:50'),
(207, 'Suriname', 'SR', NULL, '597', '2022-09-12 08:58:50', '2022-09-12 08:58:50'),
(208, 'Svalbard And Jan Mayen Islands', 'SJ', NULL, '47', '2022-09-12 08:58:50', '2022-09-12 08:58:50'),
(209, 'Swaziland', 'SZ', NULL, '268', '2022-09-12 08:58:50', '2022-09-12 08:58:50'),
(210, 'Sweden', 'SE', NULL, '46', '2022-09-12 08:58:50', '2022-09-12 08:58:50'),
(211, 'Switzerland', 'CH', NULL, '41', '2022-09-12 08:58:50', '2022-09-12 08:58:50'),
(212, 'Syria', 'SY', NULL, '963', '2022-09-12 08:58:50', '2022-09-12 08:58:50'),
(213, 'Taiwan', 'TW', NULL, '886', '2022-09-12 08:58:50', '2022-09-12 08:58:50'),
(214, 'Tajikistan', 'TJ', NULL, '992', '2022-09-12 08:58:50', '2022-09-12 08:58:50'),
(215, 'Tanzania', 'TZ', NULL, '255', '2022-09-12 08:58:50', '2022-09-12 08:58:50'),
(216, 'Thailand', 'TH', NULL, '66', '2022-09-12 08:58:50', '2022-09-12 08:58:50'),
(217, 'Togo', 'TG', NULL, '228', '2022-09-12 08:58:50', '2022-09-12 08:58:50'),
(218, 'Tokelau', 'TK', NULL, '690', '2022-09-12 08:58:50', '2022-09-12 08:58:50'),
(219, 'Tonga', 'TO', NULL, '676', '2022-09-12 08:58:50', '2022-09-12 08:58:50'),
(220, 'Trinidad And Tobago', 'TT', NULL, '1868', '2022-09-12 08:58:50', '2022-09-12 08:58:50'),
(221, 'Tunisia', 'TN', NULL, '216', '2022-09-12 08:58:50', '2022-09-12 08:58:50'),
(222, 'Turkey', 'TR', NULL, '90', '2022-09-12 08:58:50', '2022-09-12 08:58:50'),
(223, 'Turkmenistan', 'TM', NULL, '7370', '2022-09-12 08:58:50', '2022-09-12 08:58:50'),
(224, 'Turks And Caicos Islands', 'TC', NULL, '1649', '2022-09-12 08:58:50', '2022-09-12 08:58:50'),
(225, 'Tuvalu', 'TV', NULL, '688', '2022-09-12 08:58:51', '2022-09-12 08:58:51'),
(226, 'Uganda', 'UG', NULL, '256', '2022-09-12 08:58:51', '2022-09-12 08:58:51'),
(227, 'Ukraine', 'UA', NULL, '380', '2022-09-12 08:58:51', '2022-09-12 08:58:51'),
(228, 'United Arab Emirates', 'AE', NULL, '971', '2022-09-12 08:58:51', '2022-09-12 08:58:51'),
(229, 'United Kingdom', 'GB', NULL, '44', '2022-09-12 08:58:51', '2022-09-12 08:58:51'),
(230, 'United States', 'US', NULL, '1', '2022-09-12 08:58:51', '2022-09-12 08:58:51'),
(231, 'United States Minor Outlying Islands', 'UM', NULL, '1', '2022-09-12 08:58:51', '2022-09-12 08:58:51'),
(232, 'Uruguay', 'UY', NULL, '598', '2022-09-12 08:58:51', '2022-09-12 08:58:51'),
(233, 'Uzbekistan', 'UZ', NULL, '998', '2022-09-12 08:58:51', '2022-09-12 08:58:51'),
(234, 'Vanuatu', 'VU', NULL, '678', '2022-09-12 08:58:51', '2022-09-12 08:58:51'),
(235, 'Vatican City State (Holy See)', 'VA', NULL, '39', '2022-09-12 08:58:51', '2022-09-12 08:58:51'),
(236, 'Venezuela', 'VE', NULL, '58', '2022-09-12 08:58:51', '2022-09-12 08:58:51'),
(237, 'Vietnam', 'VN', NULL, '84', '2022-09-12 08:58:51', '2022-09-12 08:58:51'),
(238, 'Virgin Islands (British)', 'VG', NULL, '1284', '2022-09-12 08:58:51', '2022-09-12 08:58:51'),
(239, 'Virgin Islands (US)', 'VI', NULL, '1340', '2022-09-12 08:58:51', '2022-09-12 08:58:51'),
(240, 'Wallis And Futuna Islands', 'WF', NULL, '681', '2022-09-12 08:58:51', '2022-09-12 08:58:51'),
(241, 'Western Sahara', 'EH', NULL, '212', '2022-09-12 08:58:51', '2022-09-12 08:58:51'),
(242, 'Yemen', 'YE', NULL, '967', '2022-09-12 08:58:51', '2022-09-12 08:58:51'),
(243, 'Yugoslavia', 'YU', NULL, '38', '2022-09-12 08:58:51', '2022-09-12 08:58:51'),
(244, 'Zambia', 'ZM', NULL, '260', '2022-09-12 08:58:51', '2022-09-12 08:58:51'),
(245, 'Zimbabwe', 'ZW', NULL, '263', '2022-09-12 08:58:51', '2022-09-12 08:58:51');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` bigint(20) NOT NULL,
  `nama_petugas` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `username`, `password`, `status`) VALUES
(1, 'Yuwan', 'yuwan147', 'yuwan147', 1),
(3, 'Afina Dina', 'DinaCANS', 'dinaa147', 1),
(4, 'Aditiya', 'aditiya147', 'aditiya147', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'yuwann', 'yuwan147@gmail.com', NULL, '$2y$10$J47Vp48AuNJ7DLq6g3oLRu4g1KzEMzzQ1b27Of88IzscCDVfKTOVW', NULL, '2022-09-04 08:29:09', '2022-09-04 08:29:09'),
(4, 'Bjorka', 'bjorka147@gmail.com', NULL, '$2y$10$k3MbWPvObN/XZIR1jInCf.aFs1PDthxIUPqVjis6bOffy5SHJKAia', NULL, '2022-09-19 00:10:03', '2022-09-19 00:10:03');

-- --------------------------------------------------------

--
-- Table structure for table `vaksinasi`
--

CREATE TABLE `vaksinasi` (
  `id_vaksinasi` int(11) NOT NULL,
  `deskripsi_priode` varchar(150) NOT NULL,
  `tanggal_vaksin` datetime NOT NULL,
  `nik_warga` bigint(20) NOT NULL,
  `id_petugas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vaksinasi`
--

INSERT INTO `vaksinasi` (`id_vaksinasi`, `deskripsi_priode`, `tanggal_vaksin`, `nik_warga`, `id_petugas`) VALUES
(1, '3', '2022-09-08 14:47:13', 1234567887654321, 1),
(2, '3 - Booster', '2022-09-22 11:09:00', 12345676574323456, 3),
(3, '5 - UMBRELLA VAKSIN CORPORATION', '2022-09-22 11:17:00', 6767676767676767, 3),
(4, '5 - UMBRELLA VAKSIN CORPORATION', '2022-09-24 12:55:00', 87654321234567898, 4);

-- --------------------------------------------------------

--
-- Table structure for table `warga`
--

CREATE TABLE `warga` (
  `id` int(11) NOT NULL,
  `nik` varchar(250) NOT NULL,
  `nama_warga` varchar(250) NOT NULL,
  `negara` varchar(250) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_hp` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `warga`
--

INSERT INTO `warga` (`id`, `nik`, `nama_warga`, `negara`, `tanggal_lahir`, `no_hp`, `email`) VALUES
(7, '1232123212321232', 'Anonymus', '+93 Afghanistan', '2022-09-14', '085633843865', 'Anonymus88@gmail.com'),
(8, '12345676574323456', 'Bjorka', '+62 Indonesia', '1993-08-19', '085607843335', 'Bjorka@DNXX.com'),
(9, '6767676767676767', 'iqbal', '+380 Ukraine', '2022-09-22', '082123454321', 'iqbalganteng79@gmail.com'),
(10, '9099992233443322', 'gilang', '+380 Ukraine', '2022-09-22', '086444333213', 'gataumas@gmail.com'),
(11, '87654321234567898', 'bily', '+81 Japan', '2022-09-24', '085666444333', 'bilybjorka@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vaksinasi`
--
ALTER TABLE `vaksinasi`
  ADD PRIMARY KEY (`id_vaksinasi`);

--
-- Indexes for table `warga`
--
ALTER TABLE `warga`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=246;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vaksinasi`
--
ALTER TABLE `vaksinasi`
  MODIFY `id_vaksinasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `warga`
--
ALTER TABLE `warga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
