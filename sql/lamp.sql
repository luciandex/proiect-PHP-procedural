-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 21, 2020 at 11:05 PM
-- Server version: 5.7.29
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lamp`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(10) NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `short` text COLLATE utf8_unicode_ci NOT NULL,
  `author` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `inextenso` text CHARACTER SET utf8 COLLATE utf8_romanian_ci NOT NULL,
  `comments` int(4) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Blog Archive';

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `url`, `title`, `img`, `short`, `author`, `inextenso`, `comments`, `created`) VALUES
(1, '/blog-post.php', 'Moneda de 50 de lei din 2019 &hellip;', 'img/blog/blog-1.jpg', 'BNR a lansat in circuitul numismatic o moneda din aur cu tema Istoria aurului', 'User One', '<div class=\"post-cont\">\n<p>consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident minim veniam.</p>\n<p class=\"special\">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>\n<p>consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident minim veniam.</p>\n</div>', 38, '2020-02-21 20:21:19'),
(2, '/blog-post.php', 'Growth your business strategy', 'img/blog/blog-2.jpg', 'Exercitation ullamco laboris nisi ut aliquip ex ea commodo.', 'User Two', '<div class=\"post-cont\">\r\n<p>consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident minim veniam.</p>\r\n<p class=\"special\">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>\r\n<p>consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident minim veniam.</p>\r\n</div>', 38, '2020-02-16 19:36:37'),
(3, '/blog-post.php', 'Digital service marketing agency', 'img/blog/blog-3.jpg', 'Exercitation ullamco laboris nisi ut aliquip ex ea commodo.', 'User Three', '<div class=\"post-cont\">\r\n<p>consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident minim veniam.</p>\r\n<p class=\"special\">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>\r\n<p>consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident minim veniam.</p>\r\n</div>', 38, '2020-02-16 19:36:39'),
(4, '/blog-post.php', 'Business adviser analyzing financial', 'img/blog/blog-4.jpg', 'Exercitation ullamco laboris nisi ut aliquip ex ea commodo.', 'User Four', '<div class=\"post-cont\">\r\n<p>consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident minim veniam.</p>\r\n<p class=\"special\">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>\r\n<p>consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident minim veniam.</p>\r\n</div>', 38, '2020-02-16 19:36:42');

-- --------------------------------------------------------

--
-- Table structure for table `market`
--

CREATE TABLE `market` (
  `id` int(255) NOT NULL,
  `name` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `description` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` smallint(255) NOT NULL,
  `old_price` smallint(255) NOT NULL,
  `link` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `market`
--

INSERT INTO `market` (`id`, `name`, `description`, `price`, `old_price`, `link`, `image`, `date_added`) VALUES
(1, 'Yellow lightbulb', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet.', 600, 550, 'javascript:void(0)', '/img/shop/product-01.jpg', '2020-02-21 22:41:29'),
(2, 'Leather watch', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet.', 500, 350, 'javascript:void(0)', '/img/shop/product-02.jpg', '2020-02-21 22:46:13'),
(3, 'High-heeled shoe', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet.', 200, 100, 'javascript:void(0)', '/img/shop/product-03.jpg', '2020-02-21 22:46:13'),
(4, 'Apple laptop', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet.', 1200, 989, 'javascript:void(0)', '/img/shop/product-04.jpg', '2020-02-21 22:46:13');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` tinyint(3) NOT NULL COMMENT 'Primary Key',
  `code` char(60) COLLATE utf8_unicode_ci NOT NULL,
  `name` char(60) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Menu name',
  `create_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `code`, `name`, `create_at`, `updated_at`) VALUES
(1, 'social-media', 'Social Media', '2020-02-01 12:12:12', '2020-02-08 18:30:25'),
(2, 'main-menu', 'Main Menu', '2020-02-01 12:12:12', '2020-02-01 13:59:53'),
(3, 'q-link1', 'Quick Links1', '2020-02-12 18:57:11', '2020-02-12 18:57:11'),
(4, 'q-link2', 'Quick Links2', '2020-02-12 18:57:11', '2020-02-12 18:57:11'),
(5, 'serv', 'Services', '2020-02-16 12:44:47', '2020-02-16 12:45:04'),
(6, 'proj', 'Projects', '2020-02-16 12:44:47', '2020-02-16 20:48:27');

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` smallint(6) NOT NULL,
  `menu_id` tinyint(4) NOT NULL,
  `parent_id` tinyint(3) NOT NULL DEFAULT '0',
  `url` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  `text` char(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `icon` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `parent_id`, `url`, `text`, `icon`, `created_at`, `updated_at`) VALUES
(2, 1, 1, 'javascript:void(0)', NULL, 'fab fa-facebook-f', '2020-02-10 18:25:17', '2020-02-11 18:19:30'),
(3, 2, 1, 'javascript:void(0)', NULL, 'fab fa-twitter', '2020-02-10 18:25:17', '2020-02-10 18:25:17'),
(4, 3, 1, 'javascript:void(0)', NULL, 'fab fa-google-plus', '2020-02-10 18:25:17', '2020-02-10 18:25:17'),
(5, 4, 1, 'javascript:void(0)', NULL, 'fab fa-youtube', '2020-02-10 18:25:17', '2020-02-10 18:25:17'),
(6, 5, 1, 'javascript:void(0)', NULL, 'fab fa-linkedin', '2020-02-10 18:25:17', '2020-02-10 18:25:17'),
(7, 1, 2, 'index.php', 'Home', NULL, '2020-02-10 18:34:27', '2020-02-10 19:01:03'),
(8, 2, 2, 'portofolio.php', 'Portofolio', NULL, '2020-02-10 18:34:27', '2020-02-16 14:01:03'),
(9, 3, 2, 'blog-archive.php', 'Blog', NULL, '2020-02-10 18:34:27', '2020-02-10 19:01:22'),
(10, 4, 2, 'market.php', 'Market', NULL, '2020-02-10 18:34:27', '2020-02-16 23:57:48'),
(11, 5, 2, 'contact.php', 'Contact', NULL, '2020-02-10 18:34:27', '2020-02-10 19:01:40'),
(13, 1, 3, 'javascript:void(0)', 'News', NULL, '2020-02-12 17:14:11', '2020-02-12 17:14:11'),
(14, 2, 3, 'javascript:void(0)', 'History', NULL, '2020-02-12 17:14:11', '2020-02-12 17:14:11'),
(15, 3, 3, 'javascript:void(0)', 'Community', NULL, '2020-02-12 17:14:11', '2020-02-12 17:14:11'),
(16, 4, 3, 'javascript:void(0)', 'Services', NULL, '2020-02-12 17:14:11', '2020-02-16 14:02:16'),
(17, 5, 3, 'javascript:void(0)', 'Safety', NULL, '2020-02-12 17:14:11', '2020-02-12 17:14:11'),
(18, 1, 4, 'javascript:void(0)', 'Construction', NULL, '2020-02-12 17:14:11', '2020-02-12 17:14:11'),
(19, 2, 4, 'javascript:void(0)', 'Case Studies', NULL, '2020-02-12 17:14:11', '2020-02-12 17:14:11'),
(20, 3, 4, 'javascript:void(0)', 'Blog Detail', NULL, '2020-02-12 17:14:11', '2020-02-12 17:14:11'),
(21, 4, 4, 'javascript:void(0)', 'Sales Services', NULL, '2020-02-12 17:14:11', '2020-02-12 17:14:11'),
(22, 5, 4, 'javascript:void(0)', 'Services Details', NULL, '2020-02-12 17:14:11', '2020-02-16 12:46:01');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `readed` tinyint(1) NOT NULL DEFAULT '0',
  `name` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(127) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `readed`, `name`, `email`, `subject`, `message`, `created_at`) VALUES
(1, 0, 'aaayyy', 'aaa@aaa.a', '222223', 'sshhhhhhhhhhhhhh', '2020-02-18 19:43:33'),
(3, 0, 'qwqwqw', 'erere@ewtrwr.aert', 'jhgkukvjhrk', 'wvrtjhgbtjhgjhwv \r\nkyfcyrkeuyvckreuvt', '2020-02-18 19:46:29'),
(8, 0, 'avrtvrev', 'dbfdbdf@sdgdf.cdom', '111115435', '7995775246545', '2020-02-19 00:22:46'),
(18, 0, 'dbfdbfdb', 'dbfdbdf@sdgdf.com', 'frgergeqg', 'fdhsdfhdhfddafh', '2020-02-19 00:49:46'),
(29, 0, 'dbfdbfdb', 'dbfdbdf@sdgdf.com', 'frgergeqg', 'afasfssafasfaffa', '2020-02-19 01:14:28'),
(35, 0, 'dbfdbfdb', 'dbfdbdf@sdgdf.com', 'frgergeqg', 'rtunumyumumu', '2020-02-19 01:34:14'),
(38, 0, 'dbfdbfdb', 'dbfdbdf@sdgdf.com', 'frgergeqg', 'vtreryntrumum', '2020-02-19 01:47:50'),
(39, 0, 'dbfdbfdb', 'aaa@aaa.a', 'frgergeqg', 'brewwnwn75', '2020-02-19 01:48:32'),
(59, 0, 'fhdfd', 'adfg@gh.com', 'dfsbsf', '                  hgikvfyuifyuiugy                  ', '2020-02-19 20:48:59'),
(97, 0, 'user', 'user@user.com', 'dfsdfsgdsfag', '                         sdagdsagsdgs           ', '2020-02-19 22:15:21'),
(101, 0, 'user', 'user@user.com', '3333333333333', '', '2020-02-19 23:46:37'),
(106, 0, 'user', 'user@user.com', '3333333333333', '                                                                        ', '2020-02-20 00:00:38'),
(107, 0, 'user', 'user@user.com', '3333333333333', '                                                                        ', '2020-02-20 00:02:04'),
(109, 0, 'assdfgd', 'adfg@gh.com', 'dfsbsf', 'sagdfagfdgfdgdf', '2020-02-20 19:45:51'),
(111, 0, 'ssss', 'sss@sss.ss', 'frgergeqg', 'uhgfjhhghj', '2020-02-21 21:07:53'),
(112, 0, 'ssss', 'sss@sss.ss', 'frgergeqg', 'afdshfhfgh', '2020-02-21 21:38:56'),
(113, 0, 'ssss', 'sss@sss.ss', 'frgergeqg', 'afdshfhfgh', '2020-02-21 21:41:51'),
(114, 0, 'user', 'dbfdbdf@sdgdf.com', 'aaaaaaa', 'ybtrunytyim', '2020-02-21 21:42:49'),
(115, 0, 'ssss', 'sss@sss.ss', 'frgergeqg', 'dfgfgfvdfvb', '2020-02-21 21:45:01'),
(116, 0, 'user', 'aaa@aaa.a', 'frgergeqg', 'segrgsdgdd', '2020-02-21 21:51:54'),
(117, 0, 'user', 'aaa@aaa.a', 'frgergeqg', 'segrgsdgdd', '2020-02-21 21:52:53');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` smallint(50) NOT NULL,
  `item_logo` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `item_logo`, `created_at`, `updated_at`) VALUES
(1, '/img/partners/client-01.png', '2020-02-11 19:09:37', '2020-02-11 19:09:37'),
(2, '/img/partners/client-02.png', '2020-02-11 19:09:37', '2020-02-11 19:09:37'),
(3, '/img/partners/client-03.png', '2020-02-11 19:09:37', '2020-02-11 19:09:37'),
(4, '/img/partners/client-04.png', '2020-02-11 19:09:37', '2020-02-11 19:09:37'),
(5, '/img/partners/client-05.png', '2020-02-11 19:09:37', '2020-02-11 19:09:37'),
(6, '/img/partners/client-06.png', '2020-02-11 19:09:37', '2020-02-11 19:09:37');

-- --------------------------------------------------------

--
-- Table structure for table `portofolio`
--

CREATE TABLE `portofolio` (
  `id` tinyint(100) NOT NULL,
  `parent` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `project` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `image` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `portofolio`
--

INSERT INTO `portofolio` (`id`, `parent`, `project`, `image`, `created_at`) VALUES
(1, 'design', 'Creative Book', 'img/projects/project-1b.jpg', '2020-02-16 22:24:57'),
(2, 'design', 'Responsive Design', 'img/projects/project-2b.jpg', '2020-02-16 22:25:05'),
(3, 'develop', 'Design Mockup', 'img/projects/project-3b.jpg', '2020-02-16 22:24:42'),
(4, 'graphic', 'Watch Mockup', 'img/projects/project-4b.jpg', '2020-02-16 22:25:14'),
(5, 'develop', 'Creative Design', 'img/projects/project-5b.jpg', '2020-02-16 22:24:47'),
(6, 'design', 'Responsive Design', 'img/projects/project-6b.jpg', '2020-02-16 22:25:08');

-- --------------------------------------------------------

--
-- Table structure for table `project_group`
--

CREATE TABLE `project_group` (
  `id` int(50) NOT NULL,
  `category` char(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `project_group`
--

INSERT INTO `project_group` (`id`, `category`) VALUES
(2, 'design'),
(1, 'develop'),
(3, 'graphic');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(255) NOT NULL,
  `icon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `service` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `icon`, `service`, `description`, `created_at`) VALUES
(1, 'icon-tools ', 'Constant Marketing', 'Exhaustive technology of implementing multi purpose projects is putting your project successful.', '2020-02-16 21:03:43'),
(2, 'icon-layers', 'Saving Investment', 'Exhaustive technology of implementing multi purpose projects is putting your project successful.', '2020-02-16 21:03:35'),
(3, 'icon-gears', 'Detail Report', 'Exhaustive technology of implementing multi purpose projects is putting your project successful.', '2020-02-16 21:03:24'),
(4, 'icon-mobile', 'Investment Plan', 'Exhaustive technology of implementing multi purpose projects is putting your project successful.', '2020-02-16 21:03:17'),
(5, 'icon-presentation', 'Media Marketing', 'Exhaustive technology of implementing multi purpose projects is putting your project successful.', '2020-02-16 21:03:06'),
(6, 'icon-genius', 'Finance Analysis', 'Exhaustive technology of implementing multi purpose projects is putting your project successful.', '2020-02-16 21:03:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_login` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user`, `pass`, `email`, `created_at`, `updated_at`, `last_login`) VALUES
(1, 'admin', 'd482c96fccbc506713019af8b586b28c', 'admin@admin.com', '2020-02-18 19:34:16', '2020-02-20 18:35:21', '2020-02-20 18:35:21'),
(2, 'user', '803ee5edb90b84c42a6b0054b2046ae5', 'user@user.com', '2020-02-18 19:33:38', '2020-02-21 22:03:24', '2020-02-21 22:03:24'),
(3, 'wewe', '3f786ac472a53d352717189350919976', 'wewe@wewe.we', '2020-02-18 19:37:30', '2020-02-18 19:38:02', NULL),
(4, 'eee', '86fd3b043a148f079f35d9b1ac0ec836', 'eee@wewe.we', '2020-02-18 19:41:40', '2020-02-18 19:41:40', NULL),
(5, 'ssss', 'c08c740fa9cc5912301787869940c159', 'sss@sss.ss', '2020-02-20 18:07:24', '2020-02-21 21:05:07', '2020-02-21 21:05:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title` (`title`);

--
-- Indexes for table `market`
--
ALTER TABLE `market`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent_id` (`parent_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject` (`subject`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portofolio`
--
ALTER TABLE `portofolio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `proj_gr` (`parent`);

--
-- Indexes for table `project_group`
--
ALTER TABLE `project_group`
  ADD PRIMARY KEY (`category`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user` (`user`),
  ADD KEY `pass` (`pass`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `market`
--
ALTER TABLE `market`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` tinyint(3) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key', AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;
--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` smallint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `portofolio`
--
ALTER TABLE `portofolio`
  MODIFY `id` tinyint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_ibfk_1` FOREIGN KEY (`parent_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `portofolio`
--
ALTER TABLE `portofolio`
  ADD CONSTRAINT `proj_gr` FOREIGN KEY (`parent`) REFERENCES `project_group` (`category`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
