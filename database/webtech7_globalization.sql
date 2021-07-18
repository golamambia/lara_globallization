-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 17, 2021 at 03:22 PM
-- Server version: 10.3.27-MariaDB-cll-lve
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webtech7_globalization`
--

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gs_category`
--

CREATE TABLE `gs_category` (
  `id` int(10) NOT NULL,
  `name` varchar(191) DEFAULT NULL,
  `slug` varchar(191) NOT NULL,
  `image` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '''0''=>''Inactive'', ''1''=>''Active''',
  `rank` int(10) NOT NULL DEFAULT 0,
  `parent_id` bigint(20) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gs_country`
--

CREATE TABLE `gs_country` (
  `id` int(11) NOT NULL,
  `country_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL COMMENT '''0''=>''Inactive'', ''1''=>''Active''',
  `rank` int(10) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gs_country`
--

INSERT INTO `gs_country` (`id`, `country_name`, `image`, `status`, `rank`, `created_at`, `updated_at`) VALUES
(2, 'United Kingdom', '1626096607cityimg1.jpg', 1, 1, '2021-07-12 05:30:07', '2021-07-15 04:44:49'),
(3, 'China', '1626097382cityimg2.jpg', 1, 2, '2021-07-12 05:43:02', '2021-07-16 11:34:03'),
(4, 'USA', '1626097670cityimg3.jpg', 1, 4, '2021-07-12 05:47:50', '2021-07-15 04:45:17'),
(5, 'India', '1626097687cityimg4.jpg', 1, 5, '2021-07-12 05:48:07', '2021-07-15 04:45:26'),
(6, 'Australia', '1626097728cityimg5.jpg', 1, 6, '2021-07-12 05:48:48', '2021-07-15 04:45:56'),
(7, 'Canada', '1626097754cityimg6.jpg', 1, 7, '2021-07-12 05:49:14', '2021-07-15 04:46:06'),
(8, 'New Zealand', '1626097785cityimg7.jpg', 1, 8, '2021-07-12 05:49:45', '2021-07-15 04:46:14'),
(9, 'Brazil', '1626097904cityimg8.jpg', 1, 9, '2021-07-12 05:51:44', '2021-07-15 04:46:23'),
(10, 'Mexico', '1626097925cityimg9.jpg', 1, 10, '2021-07-12 05:52:05', '2021-07-15 04:46:32');

-- --------------------------------------------------------

--
-- Table structure for table `gs_email_template`
--

CREATE TABLE `gs_email_template` (
  `id` int(2) NOT NULL,
  `registration_email` longtext NOT NULL,
  `user_registration_email_to_admin` text DEFAULT NULL,
  `forgotpass_email` longtext NOT NULL,
  `referral_email` text DEFAULT NULL,
  `account_approved_email` text DEFAULT NULL,
  `password_change_email` text DEFAULT NULL,
  `order_email` longtext DEFAULT NULL,
  `order_email_to_admin` text DEFAULT NULL,
  `order_complete_email` text DEFAULT NULL,
  `order_complete_email_to_admin` text DEFAULT NULL,
  `order_accept_email` text DEFAULT NULL,
  `order_cancel_email` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gs_email_template`
--

INSERT INTO `gs_email_template` (`id`, `registration_email`, `user_registration_email_to_admin`, `forgotpass_email`, `referral_email`, `account_approved_email`, `password_change_email`, `order_email`, `order_email_to_admin`, `order_complete_email`, `order_complete_email_to_admin`, `order_accept_email`, `order_cancel_email`) VALUES
(1, '<p style=\"text-align: left;\">Hello&nbsp;{#Firstname#},</p><p style=\"text-align: left;\">Welcome to Offneeds, and thank you for joining the family!</p><div><div style=\"text-align: left;\">Your account has been created.</div><div style=\"text-align: left;\">To get started, login with your user details at:</div><div style=\"text-align: left;\"><br></div><div><br></div><div><a href=\"{#Loginurl#}\" class=\"custom-button\" target=\"_blank\" style=\"mso-style-priority:100 !important;text-decoration:none;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:helvetica, \'helvetica neue\', arial, verdana, sans-serif;font-size:16px;color:#FFFFFF;border-style:solid;border-color:#056B4E;border-width:15px 30px;display:inline-block;background:#056B4E;border-radius:4px;font-weight:normal;font-style:normal;line-height:19px;width:auto;text-align:center\">Login</a></div></div><div><br></div><p style=\"text-align: left;\">Email / Username:&nbsp;<span style=\"font-weight: 700;\">{#Email#}</span></p><p style=\"text-align: left;\">Password: <b>{#Password#}</b></p>\r\n\r\n<p style=\"text-align: left;\">Thank you,</p><p style=\"text-align: left;\">The Offneeds Team</p><p style=\"text-align: left;\">P.S. If you have any questions or need any assistance, reply to this email and our friendly support staff can help you out.</p>', '<p>Hello {#Firstname#},</p><p>A new user has been registered. Details have been given below.</p> <p>{#UserDetails#}. </p><p>Thank you,</p><p>The Juve Team<br></p>', '<p style=\"text-align: left;\">Dear Member,</p>\r\n\r\n<p style=\"text-align: left;\">Please <a href=\"{#ResetPasswordLink#}\">click here</a> to reset your password or directly open the below link.</p>\r\n\r\n<p style=\"text-align: left;\">{#ResetPasswordLink#}</p><p style=\"text-align: left;\"><br></p><p style=\"text-align: left;\">Regards,</p><p style=\"text-align: left;\"><span style=\"color: rgb(51, 51, 51); font-size: 11.9px;\">{#Sitename#}</span><br></p>', '<p style=\"text-align: left;\">Hello,</p><p style=\"text-align: left;\">{#Fullname#} has invited you to register on&nbsp; \"{#Sitename#}\".</p><p style=\"text-align: left;\">Thank you,</p><p style=\"text-align: left;\">The Offneeds Team<br></p><div><br></div><p><br></p>', '<p style=\"text-align: left;\"><b>Hello {#Fullname#},</b></p>\r\n<table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" role=\"presentation\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\"> \r\n                     <tbody><tr style=\"border-collapse:collapse\"> \r\n                      <td align=\"center\" class=\"es-m-txt-c\" style=\"padding:0;Margin:0\"><p style=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:22px;font-family:helvetica, \'helvetica neue\', arial, verdana, sans-serif;line-height:33px;color:#434343\"><strong>Your account has been approved!</strong></p></td> \r\n                     </tr> \r\n                     <tr style=\"border-collapse:collapse\"> \r\n                      <td align=\"center\" style=\"padding:0;Margin:0;padding-left:10px;padding-right:10px;padding-top:30px\"><span class=\"es-button-border\" style=\"border-style:solid;border-color:transparent;background:#056B4E;border-width:0px;display:inline-block;border-radius:4px;width:auto\"><a href=\"{#Loginurl#}\" class=\"es-button\" target=\"_blank\" style=\"mso-style-priority:100 !important;text-decoration:none;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:helvetica, \'helvetica neue\', arial, verdana, sans-serif;font-size:16px;color:#FFFFFF;border-style:solid;border-color:#056B4E;border-width:15px 30px;display:inline-block;background:#056B4E;border-radius:4px;font-weight:normal;font-style:normal;line-height:19px;width:auto;text-align:center\">Login my account</a></span></td> \r\n                     </tr> \r\n                   </tbody></table>', '<p>Hi &nbsp;{#Fullname#},</p><p>The password for your Offneeds&nbsp;Account was recently changed.</p><p><br></p>\r\n\r\n<p>If you did not change your password, please notify our support team at support@offneeds.com<br></p>\r\n\r\n<p>Thank you,</p><p>The Offneeds&nbsp;Team</p>', '<table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" role=\"presentation\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\"> \r\n                     <tbody><tr style=\"border-collapse:collapse\"> \r\n                      <td align=\"center\" class=\"es-m-txt-c\" style=\"padding:0;Margin:0\">\r\n<h3>Thank you!</h3>\r\n<h4>Your order number is: <span>{#OrderID#}</span></h4>\r\n<p style=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:22px;font-family:helvetica, \'helvetica neue\', arial, verdana, sans-serif;line-height:33px;color:#434343\"><br></p></td> \r\n                     </tr> \r\n                     <tr style=\"border-collapse:collapse\"> \r\n                      <td align=\"center\" style=\"padding:0;Margin:0;padding-left:10px;padding-right:10px;padding-top:30px\"><span class=\"es-button-border\" style=\"border-style:solid;border-color:transparent;background:#056B4E;border-width:0px;display:inline-block;border-radius:4px;width:auto\"><a href=\"{#MyOrderurl#}\" class=\"es-button\" target=\"_blank\" style=\"mso-style-priority:100 !important;text-decoration:none;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:helvetica, \'helvetica neue\', arial, verdana, sans-serif;font-size:16px;color:#FFFFFF;border-style:solid;border-color:#056B4E;border-width:15px 30px;display:inline-block;background:#056B4E;border-radius:4px;font-weight:normal;font-style:normal;line-height:19px;width:auto;text-align:center\">My Order</a></span></td> \r\n                     </tr> \r\n                   </tbody></table>', '<table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" role=\"presentation\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\"> \r\n                     <tbody><tr style=\"border-collapse:collapse\"> \r\n                      <td align=\"center\" class=\"es-m-txt-c\" style=\"padding:0;Margin:0\">\r\n<h3>Dear Admin!</h3>\r\n<h4>Order number is: <span>{#OrderID#}</span></h4>\r\n</td> \r\n                     </tr> \r\n                   </tbody></table>', '<table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" role=\"presentation\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\"> \r\n                     <tbody><tr style=\"border-collapse:collapse\"> \r\n                      <td align=\"center\" class=\"es-m-txt-c\" style=\"padding:0;Margin:0\">\r\n<h3>Dear {#Fullname#}!</h3>\r\n<h4>Order number is: <span>{#OrderID#}</span></h4>\r\n</td> \r\n                     </tr> \r\n                   </tbody></table>', '<table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" role=\"presentation\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\"> \r\n                     <tbody><tr style=\"border-collapse:collapse\"> \r\n                      <td align=\"center\" class=\"es-m-txt-c\" style=\"padding:0;Margin:0\">\r\n<h3>Dear Admin!</h3>\r\n<h4>Order number is: <span>{#OrderID#}</span></h4>\r\n</td> \r\n                     </tr> \r\n                   </tbody></table>', '<table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" role=\"presentation\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\"> \r\n                     <tbody><tr style=\"border-collapse:collapse\"> \r\n                      <td align=\"center\" class=\"es-m-txt-c\" style=\"padding:0;Margin:0\">\r\n<h3>Dear {#Fullname#}!</h3>\r\n<h4>Order number is: <span>{#OrderID#}</span></h4>\r\n</td> \r\n                     </tr> \r\n                   </tbody></table>', '<h3>Dear {#Fullname#}!</h3>\r\n<h4 style=\"text-align: center; \">Order number is: <span>{#OrderID#}</span></h4><h4 style=\"text-align: center; \"><span>Order has been cancelled.</span></h4>');

-- --------------------------------------------------------

--
-- Table structure for table `gs_settings`
--

CREATE TABLE `gs_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `group` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gs_settings`
--

INSERT INTO `gs_settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', 'Globalization Solutions', '', 'text', 1, 'Site'),
(2, 'site.logo', 'Site Logo', '1625497065logo.png', '', 'image', 2, 'Site'),
(3, 'admin.pagination', 'Admin Pagination', '25', '', 'text', 1, 'Admin'),
(4, 'site.pagination', 'Front-end Pagination', '10', '', 'text', 1, 'Site'),
(5, 'site.meta_title', 'Meta Title', 'Globalization', '', 'text', 1, 'Site'),
(6, 'site.meta_keyword', 'Meta Keyword', 'Globalization', '', 'text', 1, 'Site'),
(7, 'site.meta_description', 'Meta Description', 'Globalization', '', 'text', 1, 'Site'),
(8, 'site.meta_image', 'Meta Image', '', '', 'image', 1, 'Site'),
(9, 'site.logo2', 'Site Logo 2', '1625497065favicon.png', '', 'image', 2, 'Site'),
(10, 'site.contact_email', 'Contact Email', 'contact_email8989@yopmail.com', '', 'text', 1, 'Site'),
(11, 'site.support_email', 'Support Email', 'support@globalizationsolutions.com', '', 'text', 1, 'Site'),
(12, 'site.address', 'Address', '215 Ann Arbor Rd, Suite 304\r\nPlumouth, MI 48170\r\nUnited States', '', 'text', 1, 'Site'),
(13, 'site.email', 'Site Email', 'info@globalizationsolutions.com', '', 'text', 1, 'Site'),
(14, 'site.phone', 'Site Phone', '+1 (734) 927-3175', '', 'text', 1, 'Site'),
(15, 'site.facebook_link', 'Site Facebook', 'https://www.facebook.com/', '', 'text', 1, 'Site'),
(16, 'site.twitter_link', 'Site Twitter', 'https://twitter.com/', '', 'text', 1, 'Site'),
(17, 'site.instagram_link', 'Site Instagram', 'https://www.instagram.com/', '', 'text', 1, 'Site'),
(18, 'site.youtube_link', 'Site Youtube', NULL, '', 'text', 1, 'Site'),
(19, 'site.message_show_time', 'Site Message Show Time', '10', '', 'text', 1, 'Site'),
(20, 'site.inner_logo', 'Site Inner Page Logo', '1625497065final-logo.png', '', 'text', 1, 'Site'),
(21, 'site.footer_logo', 'Site Footer Logo', '1625497065logofooter.png', '', 'text', 1, 'Site'),
(22, 'site.footer1_title', 'Site Footer1 Title', 'With a global footprint!', '', 'text', 1, 'Site'),
(25, 'site.footer2_sub_title', 'Site Footer2 Sub Title', 'Corporate Overview', '', 'text', 1, 'Site'),
(26, 'site.footer3_title', 'Site Footer3 Title', 'Services', '', 'text', 1, 'Site'),
(23, 'site.footer_map', 'Site Footer map', '1625237492ft-map.svg', '', 'text', 1, 'Site'),
(24, 'site.footer2_title', 'Site Footer2 Title', 'About Us', '', 'text', 1, 'Site'),
(27, 'site.footer4_title', 'Site Footer4 Title', NULL, '', 'text', 1, 'Site'),
(28, 'site.footer5_title', 'Site Footer5 Title', 'Contact Us', '', 'text', 1, 'Site'),
(29, 'site.footer5_sub_title', 'Site Footer5 Sub Title', 'Global Headquarters', '', 'text', 1, 'Site');

-- --------------------------------------------------------

--
-- Table structure for table `gs_testimonial`
--

CREATE TABLE `gs_testimonial` (
  `id` int(10) NOT NULL,
  `name` varchar(191) DEFAULT NULL,
  `designation` varchar(191) DEFAULT NULL,
  `rank` int(10) NOT NULL DEFAULT 0,
  `image` text DEFAULT NULL,
  `body` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '''0''=>''Inactive'', ''1''=>''Active''',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gs_testimonial`
--

INSERT INTO `gs_testimonial` (`id`, `name`, `designation`, `rank`, `image`, `body`, `status`, `created_at`, `updated_at`) VALUES
(1, 'John Smith', 'Service Taken : cloud 3', 1, NULL, '<p>Search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', 1, '2021-05-19 09:22:49', '2021-07-14 09:48:04'),
(2, 'Randi Moore', 'Service Taken : cloud 4', 5, NULL, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type.</p>', 1, '2021-05-19 09:29:56', '2021-07-03 06:14:25'),
(3, 'Brenda Walker', 'Service Taken : cloud 2', 2, NULL, '<p>Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot;.</p>', 1, '2021-05-19 09:34:30', '2021-07-03 06:12:49'),
(4, 'Lorenzo Vanpelt', 'Banner', 3, NULL, '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable.</p>', 1, '2021-05-19 09:35:03', '2021-07-03 05:59:15'),
(5, 'Dixie Kersey', 'Service Taken : cloud', 4, NULL, '<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced.</p>', 1, '2021-05-19 09:35:49', '2021-07-03 06:15:28'),
(6, 'Matt Larson', 'Project Head', 6, NULL, '<p>Test</p>', 1, '2021-07-03 05:51:09', '2021-07-14 09:50:49');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `page_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `posttype` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'page' COMMENT '''page'',''service''',
  `bannerimage` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bannertext` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `display_in` int(5) NOT NULL DEFAULT 0 COMMENT '''0''=>''None'', ''1''=>''Header'', ''2''=>''Footer'', ''3''=>''Header & Footer''',
  `menu_order` int(10) NOT NULL DEFAULT 0,
  `menu_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_template` int(10) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `page_name`, `page_title`, `body`, `posttype`, `bannerimage`, `bannertext`, `image2`, `slug`, `meta_title`, `meta_keyword`, `meta_description`, `parent_id`, `display_in`, `menu_order`, `menu_link`, `page_template`, `created_at`, `updated_at`) VALUES
(1, 'Home', NULL, NULL, 'page', NULL, NULL, NULL, 'home', 'Global Expansion and Payroll Solutions | Globalization Solutions', 'global expansion, business expansion, payroll services, go global,  talent management, hr management', 'Simplify and expedite global expansion in 170+ countries, enabling companies to hire international employees without setting up a subsidiary and start operations within days.', 0, 3, 1, NULL, 0, '2021-07-08 10:18:59', NULL),
(2, 'About Us', 'About Us', NULL, 'page', NULL, NULL, NULL, 'about-us', 'About Us', 'About Us', 'About Us', 0, 3, 2, NULL, 2, '2021-07-12 08:23:12', NULL),
(3, 'Services', 'Services', NULL, 'page', NULL, NULL, NULL, 'services', 'Services', 'Services', 'Services', 0, 3, 3, NULL, 6, '2021-07-12 14:20:27', NULL),
(4, 'Careers', 'Careers', NULL, 'page', NULL, NULL, NULL, 'careers', 'Careers', 'Careers', 'Careers', 0, 3, 5, NULL, 4, '2021-07-12 09:43:24', NULL),
(5, 'Our Global Reach', 'Our Global Reach', NULL, 'page', NULL, NULL, NULL, 'our-global-reach', 'Our Global Reach', 'Our Global Reach', 'Our Global Reach', 0, 3, 4, NULL, 3, '2021-07-12 11:54:57', NULL),
(6, 'Contact Us', 'Contact Us', NULL, 'page', NULL, NULL, NULL, 'contact-us', 'Contact Us', 'Contact Us', 'Contact Us', 0, 3, 6, NULL, 5, '2021-07-12 14:20:27', NULL),
(7, 'Global EOR Services', 'Global EOR Services', NULL, 'service', NULL, NULL, NULL, 'global-eor-services', 'Global Employer of Record | Globalization Solutions', 'global employer of record, employer of record solutions, employer of record services, EOR, international expansion, global business', 'As a Global Employer of Record we help companies to expand in 170+ countries without setting an entity and start operations in as little as 48 hours.', 3, 3, 11, NULL, 7, '2021-07-14 16:15:07', NULL),
(8, 'Peo Service', 'Peo Service', NULL, 'service', NULL, NULL, NULL, 'peo-service', 'Peo Service', 'Peo Service', 'Peo Service', 3, 3, 12, NULL, 6, '2021-07-16 15:52:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pages_extra`
--

CREATE TABLE `pages_extra` (
  `id` bigint(20) NOT NULL,
  `page_id` int(10) NOT NULL,
  `type` int(10) NOT NULL,
  `section_type` int(10) NOT NULL,
  `title` varchar(191) DEFAULT NULL,
  `image` varchar(191) DEFAULT NULL,
  `image2` text DEFAULT NULL,
  `body` text DEFAULT NULL,
  `sub_title` varchar(191) DEFAULT NULL,
  `btn_text` varchar(191) DEFAULT NULL,
  `btn_url` text DEFAULT NULL,
  `rank` int(10) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages_extra`
--

INSERT INTO `pages_extra` (`id`, `page_id`, `type`, `section_type`, `title`, `image`, `image2`, `body`, `sub_title`, `btn_text`, `btn_url`, `rank`) VALUES
(1, 1, 1, 1, 'Making Global <strong>Expansion Simple And Affordable</strong>', '1625739539banner1.jpg', '', '<p>Expanding to single country or multiple countries, we make it easy to manage and start operating in as little as 48 hrs.</p>', NULL, 'contact Us', '#', 1),
(2, 1, 1, 1, 'Hassle Free<strong>Global Payroll Solutions</strong>', '1625744259banner2.jpg', '', '<p>Simple, Flexible, Fully Compliant Payroll Management. Pay your employees anytime, anywhere.&nbsp;</p>', NULL, 'Contact Us', '#', 2),
(3, 1, 2, 17, 'ABOUT US', '1625825935aboutimg.png', '1625825935icon2.png', '<p>Award-winning global supplier of complete staffing solutions, payroll services, employer of record solutions, global project management, global hr, and compliance management. At Globalization Solutions, we understand the difficulties that companies face when trying to hire and deploy staff or navigate complex foreign jurisdictions.&nbsp;</p>\r\n\r\n<div class=\"row\">\r\n<div class=\"col-lg-6 col-md-6\">\r\n<div class=\"aboutus_textbox\">\r\n<h4>Global Presence</h4>\r\n\r\n<p>Expand confidently in 170+ countries with our expertise &amp; global PEO services.</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-lg-6 col-md-6\">\r\n<div class=\"aboutus_textbox\">\r\n<h4>End to End Services</h4>\r\n\r\n<p>Flexible end-to-end solutions covering as much or as little as required, from sourcing talent.</p>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<p>We are committed to providing our clients with comprehensive, cost-effective solutions tailored to their specific business needs.</p>', 'Welcome to  <strong>Globalization Solution</strong>', 'Read More', '#', 1),
(4, 1, 3, 14, 'Achieve Your Expansion <strong>Goals With Experts!</strong>', '1625825935servesimg2.jpg', '', '<p>Globalization Solutions services cater to all your business needs and enable you to establish and grow your presence globally, with full support and assistance at every step of the way.</p>', 'Our services', NULL, NULL, 1),
(5, 1, 4, 19, 'Global Talent Aquisition', '1625826160servicesimg2.jpg', '1625826160icon2.png', '<p>Employ top talent based on expertise beyond geographical boundaries, get business rolling now...Read More</p>', NULL, NULL, NULL, 1),
(6, 1, 4, 19, 'Global Expansion Solutions', '1625828811servicesimg3.jpg', '1625828811icon3.png', '<p>Employ top talent based on expertise beyond geographical boundaries, get business rolling now...Read More</p>', NULL, NULL, NULL, 2),
(7, 1, 4, 19, 'Global Employer of Record', '1625828811servicesimg1.jpg', '1625828811icon1.png', '<p>Ensure your global workforce is employed and paid on time and with 100% compliance....Read More</p>', NULL, NULL, NULL, 3),
(8, 1, 5, 14, 'How Globalization  <strong>Solutions Work?</strong>', '', '', '<p>When you join hands with Globalization Solutions, you are provided with hassle-free international hiring and can commence operations within days. We enable you to hire without an entity and make global expansion easier for you while dealing with all complexities.</p>', 'How It Work', NULL, NULL, 1),
(9, 1, 6, 16, 'Select the Talent', '1625829181workicon1.png', '', '<p>You can search for a candidate or let us assist you.</p>', NULL, NULL, NULL, 1),
(10, 1, 6, 16, 'Onboard Employees', '1625829319workicon2.png', '', '<p>We enable quick onboarding of employees to your organization.</p>', NULL, NULL, NULL, 2),
(11, 1, 6, 16, 'Leave Everything on us', '1625829319workicon3.png', '', '<p>Our Global PEO takes care of all in-country compliances from tax, payroll to employee management.</p>', NULL, NULL, NULL, 3),
(12, 1, 6, 16, 'You are All Set', '1625829319workicon4.png', '', '<p>Start operating globally in no time and further your business expansion.</p>', NULL, NULL, NULL, 4),
(13, 1, 7, 14, 'Our  <strong>Global Reach </strong>', '', '', '<p>Compliantly hire contractors and employees in 170+ countries around the world. No matter where your workforce lives, you&#39;re covered.</p>', 'Our Location', NULL, NULL, 1),
(14, 1, 8, 8, 'What Makes <strong>Globalization Solutions Different?</strong>', '', '', NULL, 'What we do', NULL, NULL, 1),
(15, 1, 9, 16, 'Expedite Global Expansion', '1625829771servicesimg1.jpg', '', '<p>With Globalization Solution&rsquo;s Strong global presence, companies can quickly start their business operations in any country worldwide. Expanding overseas is easy with our EOR assistance because it takes care of all your HR and payroll responsibilities with total compliance. We enable you to expand globally without establishing a new entity, which means you can reduce the expansion cost.</p>', '01.', NULL, NULL, 1),
(16, 1, 9, 16, 'Hire Market\'s Best Talent', '1625829872servicesimg2.jpg', '', '<p>Ease off your overseas hiring overseas with Globalization Solution&rsquo;s professional assistance. Our in-house industry experts find and recruit the most suited professionals for your project. Be it any country, we enable companies to get the best talents onboard in compliance with country labor laws. Let us manage all your employee responsibilities including HR, Tax, Payroll and Benefits.</p>', '02.', NULL, NULL, 2),
(17, 1, 9, 16, 'Unrivaled Expertise', '1625829872servicesimg3.jpg', '', '<p>The best way to streamline business operation is to rely on expertise. The professional team at Globalization Solutions excels in catering to your unique business needs and provides customized solutions. Expanding on unfamiliar ground brings complexities and we are expert in dealing with the same. Go global without worrying about in-country regulations and compliance.</p>', '03.', NULL, NULL, 3),
(18, 1, 10, 16, 'Why <strong>Work with Us</strong>', '1625830151workwithusbg.jpg', '', '<ul>\r\n	<li>We have a presence in 170+&nbsp;countries across 5 Continents.</li>\r\n	<li>Our local entity helps you setup and run business within hours.</li>\r\n	<li>No need to setup a subsidiary.</li>\r\n	<li>Our services are 100% compliant.</li>\r\n	<li><a class=\"btn btn-custom mt-4\" href=\"#\">Learn More</a></li>\r\n</ul>', 'Benefit from our  worldwide presence', NULL, NULL, 1),
(19, 1, 11, 7, 'Want to take on <strong>the global marketplace with confidence and peace of mind?</strong> Let us know we will care of the rest.', '', '', NULL, NULL, 'contact Us', '#', 1),
(59, 2, 8, 17, 'Work with Us', '1626079212workwithusbg.jpg', '', '<p>See what it&rsquo;s like to be part of an international team that works hard, but plays hard, too. Our people are passionate, our work is results-driven, and our perks exceed expectations.</p>', NULL, 'contact us', '#', 1),
(56, 2, 7, 16, 'Comprehensive Approach', '1626079135workicon2.png', '', '<p>At Globalization Solutions, we make sure all your requirements are fulfilled in the best possible ways. Our services are tailored according to your business requirements.</p>', NULL, NULL, NULL, 2),
(57, 2, 7, 16, 'Overseas Expansion Partner', '1626079135workicon3.png', '', '<p>Be it hiring a global workforce, managing payroll, compliance, or taxation we will guide you with top-notch services.</p>', NULL, NULL, NULL, 3),
(58, 2, 7, 16, 'End to End Service Delivery', '1626079135workicon4.png', '', '<p>SFlexible, end-to-end solution covering as much or as little as required, from sourcing talent to on-boarding and payrolling.</p>', NULL, NULL, NULL, 4),
(55, 2, 7, 16, 'Transparent Strategies', '1626079039workicon1.png', '', '<p>We conduct every service associated with company Globalization and workforce hiring maintaining only legal and transparent strategies.</p>', NULL, NULL, NULL, 1),
(54, 2, 6, 13, 'Why choose <strong>Globalization Solutions?</strong>', '', '', '<p>When you join hands with Globalization Solutions, you are provided with hassle-free international hiring and can commence operations within days.<br />\r\nWe enable you hire without an entity and make global expansion.</p>', NULL, NULL, NULL, 1),
(53, 2, 5, 16, 'Collaborative', '1626078943servicesimg5.jpg', '', '<p>We make sure our clients are always treated as a business partner and not as a customer. We believe in growing up as an organization with our clients, by guiding them through the ventures of Globalization and maintaining a business overseas and thereby gaining appreciation from them and growing up as a company as well.</p>', 'approach', NULL, NULL, 2),
(52, 2, 5, 16, 'Get an opportunity to', '1626078903servicesimg4.jpg', '', '<p>A well-knit association created in the local market by our team at Globalization Solutions will provide a golden opportunity for companies joining hands with us in accessing local assets. We make sure that the best candidates are chosen for creating your company&#39;s workforce and only the best local assistance is provided to them.</p>', 'utilize local  assets', NULL, NULL, 1),
(46, 2, 4, 16, 'Integrity', '1626078730ourcore_icon1.png', '', '<p>Striving at all times to do what&rsquo;s right and adhere to the highest ethical standards.</p>', NULL, NULL, NULL, 1),
(47, 2, 4, 16, 'Respect', '1626078841ourcore_icon2.png', '', '<p>Value the perspectives and expertise of our employees and allow the best ideas and insights to surface.</p>', NULL, NULL, NULL, 2),
(48, 2, 4, 16, 'Excellence', '1626078841ourcore_icon3.png', '', '<p>Achieving high-quality results by continuous improvement and superb execution.</p>', NULL, NULL, NULL, 3),
(49, 2, 4, 16, 'Partnerships', '1626078841ourcore_icon4.png', '', '<p>We value the importance of understanding your history and motivations.</p>', NULL, NULL, NULL, 4),
(50, 2, 4, 16, 'Community', '1626078841ourcore_icon5.png', '', '<p>Working as a team gives us the ability to work together toward a common vision.</p>', NULL, NULL, NULL, 5),
(51, 2, 4, 16, 'Innovation', '1626078841ourcore_icon6.png', '', '<p>Going beyond the commonplace to break new ground.</p>', NULL, NULL, NULL, 6),
(37, 2, 1, 17, 'Our Company<strong>About Us</strong>', '1626078431innerbanner.jpg', '', '<p>Our global business moves quickly, but we never forget that our clients, employees, and community make us who we are.</p>', NULL, 'Contact Us', '#', 1),
(38, 2, 2, 16, 'Our', '1626078431aboutinnerimg.png', '', '<p>The story of our International national support group started with a request from a client. Infotree had become an established leader in US based HR and Project Support services. One of our largest customers asked if we would be willing to assume the Employer of Record and Management of a large project in Costa Rica. We agreed knowing very little about what it would take to accomplish the task. Through the use of local experts and internal restricting we launched a group that not only accomplished the goals of our client but did so with excellent results. The same client as us to do the same thing in another LATAM country and then a third.</p>\r\n\r\n<p>By the third country Infotree had established a strong methodology for success. The service offering was rolled out to our other customers and they jumped on the idea. Within 24 months Infotree had established offices in 23 countries for managing employer of records, projects and HR issues for dozens of clients. From then till now we never looked back and managed to establish ourselves as one of the market leading business service provider. Globalization Solutions proudly serves more than 250 of the Global 1000, numerous government agencies, and some of the world&rsquo;s largest nonprofit organizations. Our sustained growth is attributed to our focus and commitment to our thousands of full-time professionals.</p>', 'Journey', NULL, NULL, 1),
(39, 2, 3, 13, 'Our <strong>Global Reach</strong>', '', '', '<p>Globalization Solutions services cater to all your business needs and enable you to<br />\r\nestablish and grow your presence globally,</p>', NULL, NULL, NULL, 1),
(60, 4, 1, 17, 'Fast-Track Your Career Development', '1626083837innerbanner10.jpg', '', '<p>Gain invaluable experience from a supportive, fast-moving, and people-focused team.</p>', 'Careers', 'contact us', '#', 1),
(61, 4, 3, 15, 'Passionate and Motivated Individuals thrusts us for <strong>our Upcoming Journey</strong>', '', '', '<p>When you start working with Globalization Solutions, you will feel empowered and motivated. We are proud that our people are the backbone of our organization who motivate us to succeed in our different business ventures.</p>\r\n\r\n<p>At Globalization Solutions, our employees strongly believe in the mission and vision of our organization. Since we are one of the most trusted expansion partners, we want forward-thinking as well as dynamic people who will help us to grow and achieve new milestones.</p>\r\n\r\n<p>A collective celebration of success, the motto for people first, and work-life balance are some of the core values of our organization. If you are someone who associates themselves with our values, then reach our team today.</p>', NULL, 'Apply Job', '#', 1),
(119, 3, 2, 16, 'Expand to Global', '1626442992aboutinnerimg2.png', '', '<p>Expanding your business to foreign markets is not easy as it involves numerous challenges and can be time-consuming, confusing, and a drain on resources. It can take weeks or months to set up a foreign subsidiary. Globalization Solutions simplifies your strategic expansion with all-in-one international growth platform saving cost and time.</p>\r\n\r\n<p>With our professional HR and Project management solutions, any company can start its business on to foreign land with no delay. With our global offices and in-country experts, we handle all complexities making your growth hassle-free giving you the confidence of managing business with ease.</p>\r\n\r\n<p>Alternatively, if you wish to establish your own entity in any country, we can assist you with the financial and legal complexities of your company&#39;s incorporation. With our global presence in 174+ countries, we can ensure that your company abides with all legal compliances with local laws.</p>\r\n\r\n<p>With Globalization Solutions, you will not have to keep tabs on expense reimbursements, taxes, benefits, legal changes, and payroll for your employees overseas. We take care of it from start to finish and everything in between.</p>', 'Markets with Confidence', NULL, NULL, 1),
(62, 4, 4, 13, 'Grow with us at<strong> Globalization Solutions</strong>', '', '', '<p>At Globalization Solutions, we believe in creating a people-oriented culture through which<br />\r\nour team members can grow and develop their professional careers.</p>', NULL, NULL, NULL, 1),
(63, 4, 5, 16, 'Global Presence', '', '', '<p>We are currently spread to different parts of the world. This global reach will also help us to provide multiple opportunities regarding relocation.</p>', 'fas fa-globe-americas', NULL, NULL, 1),
(64, 4, 5, 16, 'Steps Towards Advancement', '', '', '<p>At Globalization Solutions, opportunities are infinite. We encourage our employees to take on challenging and demanding projects so that they can utilize their potential abilities and continue to grow in their journey.</p>', 'fas fa-industry', NULL, NULL, 2),
(65, 4, 5, 16, 'Recognition', '', '', '<p>Recognition is a significant factor for us, as our mantra is People first. When we notice employees living our values, we try to encourage them with various initiatives so as to keep them motivated and encouraged.</p>', 'fas fa-trophy', NULL, NULL, 3),
(66, 4, 5, 16, 'Salary And Perks', '', '', '<p>We provide not only a compensative base pay but also various incentives regarding health, dental, vision, and life insurance plans. We also have various bonus programs whereby by adding hard work, you will get rewarded.</p>', 'fas fa-dollar-sign', NULL, NULL, 4),
(67, 4, 5, 16, 'Work-Life Balance', '', '', '<p>At Globalization Solutions, we believe in creating a workspace that establishes a healthy relationship between professional and personal life. For this, we have various parental leave, paid time off, paid vacations, remote working facilities, as well as various other elements wherein you will feel motivated to work.</p>', 'far fa-life-ring', NULL, NULL, 5),
(68, 4, 5, 16, 'Diverse Workplace Culture', '', '', '<p>At Globalization Solutions, we believe in a diverse and inclusive culture. Hence, we have employees from far-reaching countries. We try to create a holistic and inclusive culture celebrating the success of each and everybody and leveraging on the differences of employees when working as a team.</p>', 'fas fa-hourglass-half', NULL, NULL, 6),
(70, 4, 6, 5, NULL, '', '', NULL, NULL, 'Apply Job', '#', 1),
(71, 4, 7, 17, 'Work with Us', '1626085045workwithusbg.jpg', '', '<p>See what it&rsquo;s like to be part of an international team that works hard, but plays hard, too. Our people are passionate, our work is results-driven, and our perks exceed expectations.</p>', NULL, 'Know More', '#', 1),
(73, 5, 1, 17, 'Presence', '1626091123innerbanner2.jpg', '', '<p>Our Global PEO &amp; Employer of Record Solutions makes hiring fast, fully compliant and let you operate in as little as 48 hrs.</p>', 'Our Global', 'Contact Us', '#', 1),
(74, 5, 2, 16, 'Get Benefit From', '1626091250aboutinnerimg1.png', '', '<p>A successful expansion of business to international markets and deployment of the global workforce becomes more critical without experienced in-country workforce partner. Here at Globalization Solutions, we help people get paid in over 170+ countries through our global managed payroll and workforce solutions abiding with all legal compliances with local laws.</p>\r\n\r\n<p>Compliantly hire contractors and employees in 170+ countries around the world. No matter where your workforce lives, you&#39;re covered.</p>', 'Our Global Presence', NULL, NULL, 1),
(75, 5, 3, 2, 'Explore Our Global Reach', '', '', NULL, NULL, NULL, NULL, 1),
(76, 6, 1, 16, 'Contact Us', '1626099700innerbanner3.jpg', '', '<p>Your trusted partner for global expansion.</p>', NULL, NULL, NULL, 1),
(77, 6, 2, 13, 'Get in <strong>Touch</strong>', '', '', '<p>If you would like to talk to us about any of our services or if you have any questions, please fill out the form.</p>', NULL, NULL, NULL, 1),
(78, 6, 3, 2, 'Our Phone', '', '', NULL, NULL, NULL, NULL, 1),
(79, 6, 4, 2, 'For information about Globalization Solutions', '', '', NULL, NULL, NULL, NULL, 1),
(80, 6, 5, 2, 'Need help?', '', '', NULL, NULL, NULL, NULL, 1),
(81, 6, 6, 2, 'Global head Office', '', '', NULL, NULL, NULL, NULL, 1),
(82, 6, 7, 2, 'We’re Social', '', '', NULL, NULL, NULL, NULL, 1),
(83, 6, 8, 13, 'How Can We <strong>Assist You?</strong>', '', '', '<p>Submit the form below and we will contact you within one business day.</p>', NULL, NULL, NULL, 1),
(84, 6, 9, 6, NULL, '', '', NULL, NULL, 'Submit', NULL, 1),
(85, 6, 10, 2, 'EMEA', '', '', NULL, NULL, NULL, NULL, 1),
(86, 6, 11, 13, 'Hanover', '', '', '<p>7312 Parkway Drive Hanover MD 21076 United States</p>\r\n\r\n<ul>\r\n	<li><strong>Phone:</strong> 410-579-3240</li>\r\n	<li><strong>Email:</strong> demo@gmail.com</li>\r\n</ul>', NULL, NULL, NULL, 1),
(87, 6, 11, 13, 'Jacksonville', '', '', '<p>10748 Deerwood Park Blvd Floor 2 Jacksonville FL 32246 United States</p>\r\n\r\n<ul>\r\n	<li><strong>Phone:</strong> 410-579-3240</li>\r\n	<li><strong>Email:</strong> demo@gmail.com</li>\r\n</ul>', NULL, NULL, NULL, 2),
(88, 6, 11, 13, 'Kirkland', '', '', '<p>10220 NE Points Drive Kirkland WA 98033 United States</p>\r\n\r\n<ul>\r\n	<li><strong>Phone:</strong> 410-579-3240</li>\r\n	<li><strong>Email:</strong> demo@gmail.com</li>\r\n</ul>', NULL, NULL, NULL, 3),
(92, 6, 13, 13, 'Bracknell', '', '', '<p>3rd Floor, Maxis 2 Western Road Bracknell Berkshire, RG12 1RT United Kingdom</p>\r\n\r\n<ul>\r\n	<li><strong>Phone:</strong> 410-579-3240</li>\r\n	<li><strong>Email:</strong> demo@gmail.com</li>\r\n</ul>', NULL, NULL, NULL, 3),
(90, 6, 13, 13, 'Belgium', '', '', '<p>9, Rue Guimard 1040 Etterbeek Brussels Belgium</p>\r\n\r\n<ul>\r\n	<li><strong>Phone:</strong> 410-579-3240</li>\r\n	<li><strong>Email:</strong> demo@gmail.com</li>\r\n</ul>', NULL, NULL, NULL, 1),
(98, 7, 2, 13, 'Go Global Quick, <strong>Easy and Stay Compliant</strong>', '', '', '<p>Expansion of your brand overseas will require a lot of effort and time. It will demand you to break the barriers existing in the legal procedures of employment and the complexities associated with global, regional as well as local compliance. In order to do it efficiently, you need a trustable and efficient guide, like Employer of Record services, to let your business be successful on the foreign land as well.</p>\r\n\r\n<p>Our Employer of record services is designed keeping in mind the sole purpose of nullifying the extreme costs that go behind the incorporation of legal entities. When you outsource your employment responsibilities to an Employer of Record, you are freeing your company from handling complicated processes associated with the laws and also reducing the chances of compliance risks and liabilities from arising. We pledge to present you with efficient employment services to uplift your business with the best workforce.</p>\r\n\r\n<p>Let us become a trusted part of your business which you can rely on.</p>', NULL, NULL, NULL, 2),
(91, 6, 13, 13, 'Birmingham', '', '', '<p>WeWork 55 Colmore Row Birmingham B3 2AA United Kingdom</p>\r\n\r\n<ul>\r\n	<li><strong>Phone:</strong> 410-579-3240</li>\r\n	<li><strong>Email:</strong> demo@gmail.com</li>\r\n</ul>', NULL, NULL, NULL, 2),
(97, 7, 1, 1, 'Employer of Record<strong>Facilitating Quick International Hiring</strong>', '1626279307innerbanner8.jpg', '', '<p>Hire compliantly and manage your Global teams with professional support!</p>', NULL, NULL, NULL, 1),
(89, 6, 12, 2, 'AMERICAS', '', '', NULL, NULL, NULL, NULL, 1),
(93, 6, 13, 13, 'Belgium', '', '', '<p>9, Rue Guimard 1040 Etterbeek Brussels Belgium</p>\r\n\r\n<ul>\r\n	<li><strong>Phone:</strong> 410-579-3240</li>\r\n	<li><strong>Email:</strong> demo@gmail.com</li>\r\n</ul>', NULL, NULL, NULL, 4),
(94, 6, 13, 13, 'Birmingham', '', '', '<p>WeWork 55 Colmore Row Birmingham B3 2AA United Kingdom</p>\r\n\r\n<ul>\r\n	<li><strong>Phone:</strong> 410-579-3240</li>\r\n	<li><strong>Email:</strong> demo@gmail.com</li>\r\n</ul>', NULL, NULL, NULL, 5),
(96, 1, 12, 8, 'What Our <strong>Clients Say</strong>', '', '', NULL, 'Client Feedback', NULL, NULL, 1),
(95, 6, 13, 13, 'Bracknell', '', '', '<p>3rd Floor, Maxis 2 Western Road Bracknell Berkshire, RG12 1RT United Kingdom</p>\r\n\r\n<ul>\r\n	<li><strong>Phone:</strong> 410-579-3240</li>\r\n	<li><strong>Email:</strong> demo@gmail.com</li>\r\n</ul>', NULL, NULL, NULL, 6),
(99, 7, 3, 2, 'Our <strong>Employer of Record Benefits</strong>', '', '', NULL, NULL, NULL, NULL, 3),
(100, 7, 4, 16, 'Risk Mitigation', '1626331117services_icon1.png', '', '<p>We acting as employer start managing compliance obligations immediately, eliminating your exposure to risk and panelties.</p>', NULL, NULL, NULL, 4),
(101, 7, 4, 16, 'Hiring Scalability', '1626334850services_icon2.png', '', '<p>Be it a single employee or you require to hire a team to carry out your project, we assist you accordingly.</p>', NULL, NULL, NULL, 5),
(102, 7, 4, 16, 'Quick On-boarding', '1626334850services_icon4.png', '', '<p>We ensure to deploy team efficiently and quickly so that you can start your business operations without delay in as little as 48 hours.</p>', NULL, NULL, NULL, 6),
(103, 7, 4, 16, 'Downsizing Liabilities', '1626334850services_icon3.png', '', '<p>We take charge of your HR, Payroll and legal compliances, and let you focus on business growth without worries.</p>', NULL, NULL, NULL, 7),
(104, 7, 4, 16, 'Project Management', '1626334851services_icon5.png', '', '<p>We provide End to End Project Management that is effective, efficient and organized.</p>', NULL, NULL, NULL, 8),
(105, 7, 4, 16, 'Benefits Management', '1626334851services_icon6.png', '', '<p>We provide complete satutory benefits as required by local law. Additional non-mandatory benefits can be tailored and arranged as per requirement.</p>', NULL, NULL, NULL, 9),
(106, 7, 5, 16, 'Global Hiring  <strong>Made Easy</strong>', '1626335279Global_Hiring_Made_Easy.jpg', '', '<p>Globalization Solutions provides unbiased end-to-end assistance focusing on your worker&#39;s success while taking your business to newer heights internationally. Right from acquiring worldwide talent to immigration, personal support and payroll, our experienced management is prepared to support you with your in-country contract requirement whenever needed.</p>\r\n\r\n<p>We possess huge in-country amenities and ability to help you at every step of your journey for global acclamation and recognition.</p>', 'Recognize and recruit the best talent', NULL, NULL, 1),
(107, 7, 5, 16, 'Delegation and <strong>Dedication</strong>', '1626340397Dedication_and_Deligation.jpg', '', '<p>By enabling you to hire anywhere across the world without setting up an entity is what comes as our prime responsibility. Utilizing our services, you can ease off the worries of finding the right fit for your organization and save time and money. Outsourcing professional Employer of Record helps you enjoy risk mitigation, stay complaint and reduce costs.</p>\r\n\r\n<p>By using our Employer of Record services, you delegate HR, employee management and payroll responsibilities to us and we dedicatedly fulfill the same. Our professional guidance and legal aid let you stay ahead of the game in international markets.</p>', 'Increase productivity with dedicated support', NULL, NULL, 2),
(108, 7, 5, 16, 'Saving on Setting up <strong>Subsidiary Cost</strong>', '1626340397Save_on_Subsidary_cost.jpg', '', '<p>Setting up a subsidiary overseas or in another country not only costs a humongous amount of money but will also demand a lot of time. With Globalization solutions, you will not have to worry about all of this; we will reduce your chances of causing liabilities and also will take away the extra hassle so that you can focus on your business. With Globalization Solutions, you will save up to 60% of the cost that goes behind setting up a subsidiary overseas.</p>', 'Save and expand', NULL, NULL, 3),
(109, 7, 6, 13, 'What is an <strong>Employer of Record?</strong>', '', '', '<p>A professional Employer of Record or EOR is the guiding source for business houses taking their operational global. Establishing your company in different countries requires sound knowledge of in-country requirements and we ensure to provide the same. From finding the best talents across the globe to on boarding them and from managing payroll to complying legalities, we take the journey together as your reliable partner. By assisting you hire in your desired country with efficiently and transparency, we let you enjoy the employee satisfaction and ease you off with worries. Win over the challenges of global business expansion with our professional Employer of Record assistance.</p>', NULL, NULL, NULL, 1),
(110, 7, 6, 13, 'How <strong>Our Employer Of Record Works?</strong>', '', '', '<p>Globalization Solutions serves as your professional Employer of Record, shouldering all the responsibilities on your behalf. We take care of hiring employees, managing HR &amp; payroll operations and assisting you with legal requirements on unfamiliar grounds. As your Employer of Record, we have all the required credentials to assist you with international employee management. While you stay responsible for routine business operations, we ensure to provide all the legal and professional assistance to make it smooth.</p>', NULL, NULL, NULL, 2),
(111, 7, 6, 13, 'Globalization Solution <strong>step-by-step guide</strong>', '', '', '<p>If you are looking forward to expanding your business overseas to make your brand a global name, then choosing Globalization solutions for our Employer of Record services is a great option. We will not only take away the burden from your shoulders but will also make sure your company achieves its business goals effortlessly.Here is how the Globalization solutions&rsquo; Employer of record services work</p>', NULL, NULL, NULL, 3),
(118, 4, 2, 13, 'Opportunities are Infinite in your  <strong>journey at Globalization Solutions</strong>', '', '', '<p>At Globalization Solutions, we try to develop careers instead of providing jobs. We try to provide the kind of work which you would find meaningful. At Globalization Solutions, you are given opportunities to challenge yourself and explore your abilities. When you join us, you would be working with our global teams, which comprises various hardworking and passionate individuals. At Globalization Solutions, we inspire people to break down barriers and thrive upon their abilities. Sounds appealing? Come join us</p>', NULL, NULL, NULL, 1),
(120, 3, 3, 14, 'Our Global', '', '', '<p>Globalization Solutions services cater to all your business needs and enable you to<br />\r\nestablish and grow your presence globally,</p>', 'Expansion Offerings', NULL, NULL, 1),
(121, 3, 4, 17, 'Global Employer of Record', '1626443265services_icon1.png', '', '<p>Your global workforce is employed and paid on time and with 100% compliance.</p>', NULL, 'Read More', '#', 1),
(122, 3, 4, 17, 'Global Talent Aquisition', '1626445936services_icon2.png', '', '<p>Employ countries top talent based on expertise beyond boundaries, get business rolling without wasting time.</p>', NULL, 'Read More', '#', 2),
(123, 3, 4, 17, 'Global Expansion Solution', '1626445936services_icon3.png', '', '<p>10X your global sales without financial and business risks with our international PEO services.</p>', NULL, 'Read More', '#', 3),
(124, 3, 4, 17, 'Global Project Management', '1626445936services_icon4.png', '', '<p>Expedite &amp; Simplify your global expansion with industry experts.</p>', NULL, 'Read More', '#', 4),
(112, 7, 7, 16, 'Communication is established', '1626341028listicon1.png', '', '<p>Our team first communicates with our clients; we believe in proper engagement because that helps us to understand their requirements and also their business protocols.</p>', NULL, NULL, NULL, 1),
(113, 7, 7, 16, 'Employment initiation', '1626341028listicon2.png', '', '<p>Next, we plan to initiate the process of employment by drafting a contract for the employees who will be representing the workforce of our client&#39;s company. These contracts are made keeping in mind the prevailing in-country labor laws and other tax regulations.</p>', NULL, NULL, NULL, 2),
(114, 7, 7, 16, 'Administrative assistance', '1626341028listicon3.png', '', '<p>Next, we will be taking care of legal aspects that work behind the process of employment like immigration, procuring work permits, tax registrations, designing the insurance plan for the employee, etc., so that the administration process is carried on smoothly.</p>', NULL, NULL, NULL, 3),
(115, 7, 7, 16, 'Payroll management', '1626341028listicon4.png', '', '<p>The monthly payroll management process is carried on with paying the required taxes to the country&#39;s government, and also security deposits are managed. This is followed by providing pays slips with detailed calculations to the employees as well.</p>', NULL, NULL, NULL, 4),
(116, 7, 7, 16, 'Management of administration issues', '1626341028listicon5.png', '', '<p>Globalization Solutions make sure the administration process associated with the employment sector is run smoothly, starting from employment-related queries to issues arising with statutory declarations; everything is handled by our team.</p>', NULL, NULL, NULL, 5),
(117, 7, 7, 16, 'Management of offboarding', '1626341028listimg.png', '', '<p>The process of offboarding is also managed by our team efficiently, and we make sure the employee moving or leaving is assisted properly, their visa is managed along with other things like the closing of bank accounts, deregistering the candidate from the payroll records, etc. followed by informing the authorities.</p>', NULL, NULL, NULL, 6),
(125, 3, 4, 17, 'Global Payroll & Tax', '1626445936services_icon5.png', '', '<p>We take care of entire payroll for our client&rsquo;s in whichever country they wish to expand.</p>', NULL, 'Read More', '#', 5),
(126, 3, 4, 17, 'Global HR Solutions', '1626445936services_icon6.png', '', '<p>Our clients can outsource their global HR &amp; compliance management,</p>', NULL, 'Read More', '#', 6),
(127, 3, 4, 17, 'Multi Jurisdictional Billing & Payment', '1626445977services_icon6.png', '', '<p>We provide a simple solution to manage multiple global offices and payments in one currency.</p>', NULL, 'Read More', '#', 7),
(128, 3, 4, 17, 'Global Mobility & Immigration', '1626446005services_icon6.png', '', '<p>Simplify employee mobility. We will take care of corporate relocation and management services.</p>', NULL, 'Read More', '#', 8),
(129, 3, 5, 16, 'Unmatched Global &', '1626446256servicesimg4.jpg', '', '<p>With our offices in over 174+ countries across 5 continents our in-country experts ensure you&rsquo;re paying and managing your global workforce compliantly with no delays.</p>', 'Local Market Expertise', NULL, NULL, 1),
(130, 3, 6, 16, 'With Globalization', '1626448004workwithusbg1.jpg', '', '<ul>\r\n	<li>Start operating in new countries in as little as 48 hours.</li>\r\n	<li>Global expansion without setting a local entity.</li>\r\n	<li>Focus on expansion without wasting time on managing compliances.</li>\r\n	<li>Managing and monitoring your teams with our intuitive cloud platform.</li>\r\n	<li>24/7 customer support.</li>\r\n	<li>Save up to 60% on traditional expansion costs.</li>\r\n</ul>', 'Solutions !!', NULL, NULL, 1),
(131, 3, 5, 16, 'Trusted Business', '1626448004servicesimg5.jpg', '', '<p>Forget about the complexities of international expansion. Our team of experts will streamline and expedite your global expansion and provide all services under one roof. Expanding to a single country of multiple countries together, leave it on us we will take all your headache.</p>', 'Partner', NULL, NULL, 2),
(132, 3, 1, 1, 'Service Overview<strong>Global Expansion Business Solutions</strong>', '1626448267innerbanner5.jpg', '', '<p>Expand to Global Markets with Confidence!</p>', NULL, 'contact Us', '#', 1),
(133, 8, 1, 1, NULL, '1626450769innerbanner12.jpg', '', NULL, NULL, NULL, NULL, 1),
(134, 8, 2, 16, 'Deploy Staff Quickly and Compliantly in', '', '', NULL, 'International Market', NULL, NULL, 1),
(135, 8, 3, 14, 'Our International', '', '', NULL, 'PEO Services Benefits', NULL, NULL, 1),
(136, 8, 4, 17, 'Streamline Global Expansion', '', '', NULL, NULL, NULL, NULL, 1),
(137, 8, 5, 16, 'Global Expansion', '', '', NULL, 'Made Easy', NULL, NULL, 1),
(138, 8, 6, 16, 'Why Choose Our International', '', '', NULL, 'PEO Services?', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('wtm.dev2020@gmail.com', '$2y$10$pPPO36QDWU5C5DDpkURhbuMV1rnc/tVD6R9GwnjUk1yaTM7tZoApy', '2021-07-08 01:22:56');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `add_module` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edit_module` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `view_module` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delete_module` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`, `add_module`, `edit_module`, `view_module`, `delete_module`) VALUES
(1, 'admin', 'Administrator', '2020-07-07 06:50:45', '2021-02-01 05:45:11', 'test,dashboard,order,transaction,payment_request,earning,page,user', 'test,dashboard,order,transaction,payment_request,earning,page,user', 'test,dashboard,order,transaction,payment_request,earning,page,user', 'test,dashboard,order,transaction,payment_request,earning,page,user'),
(2, 'customer', 'Customer', '2020-07-07 06:50:45', '2021-02-02 03:20:11', 'test', 'test,order,page', 'test,dashboard,order,transaction,page', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(5) NOT NULL DEFAULT 0,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '''0''=>''Inactive'', ''1''=>''Active'', ''2''=>''Deleted Account''',
  `avatar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `already_logged` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `status`, `avatar`, `last_login`, `already_logged`, `created_at`, `updated_at`) VALUES
(1, 1, 'Super Admin', 'wtm.dev2020@gmail.com', '2021-07-01 19:30:00', '$2y$10$fafvoHo6AAqo2XOy8HjFq.ENezfr17PcQ7XcZAJ1DWb1wLp1poDeq', NULL, 1, NULL, '2021-07-16 23:13:53', 1, '2021-07-02 05:30:27', '2021-07-02 05:30:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gs_category`
--
ALTER TABLE `gs_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gs_country`
--
ALTER TABLE `gs_country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gs_email_template`
--
ALTER TABLE `gs_email_template`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gs_settings`
--
ALTER TABLE `gs_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gs_testimonial`
--
ALTER TABLE `gs_testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Indexes for table `pages_extra`
--
ALTER TABLE `pages_extra`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(250));

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gs_category`
--
ALTER TABLE `gs_category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gs_country`
--
ALTER TABLE `gs_country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `gs_settings`
--
ALTER TABLE `gs_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `gs_testimonial`
--
ALTER TABLE `gs_testimonial`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pages_extra`
--
ALTER TABLE `pages_extra`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
