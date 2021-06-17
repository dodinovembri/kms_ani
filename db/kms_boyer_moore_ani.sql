-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2021 at 06:15 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kms_boyer_moore_ani`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `id` int(11) NOT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`id`, `message`, `created_at`) VALUES
(1, 'Staff Ahli Create Lorem Ipsum Content', '2021-06-10 07:07:11'),
(2, 'Staff Ahli Create Tacit Knowledge', '2021-06-13 11:05:03'),
(3, 'Administrator Create Tacit Knowledge', '2021-06-17 11:04:20'),
(4, 'Administrator Create Tacit Knowledge', '2021-06-17 11:05:56'),
(5, 'Administrator Create Tacit Knowledge', '2021-06-17 11:09:33');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `send_to_id` int(11) DEFAULT NULL,
  `send_by_id` int(11) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `send_to_id`, `send_by_id`, `message`, `created_at`) VALUES
(1, 2, 1, 'p', '2021-06-17 11:00:27'),
(2, 2, 1, 'makanlah', '2021-06-17 11:00:32'),
(3, 2, 1, 'a', '2021-06-17 11:00:36'),
(4, 2, 1, 'a', '2021-06-17 11:00:41'),
(5, 3, 1, 'w', '2021-06-17 11:00:47');

-- --------------------------------------------------------

--
-- Table structure for table `explicit_comment`
--

CREATE TABLE `explicit_comment` (
  `id` int(11) NOT NULL,
  `explicit_knowledge_id` int(11) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `creator_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `explicit_comment`
--

INSERT INTO `explicit_comment` (`id`, `explicit_knowledge_id`, `content`, `creator_id`, `created_at`) VALUES
(1, 1, 'dd', 1, '2021-06-17 00:18:29'),
(2, 1, 'ee', 1, '2021-06-17 00:18:33'),
(3, 1, '', 1, '2021-06-17 00:18:48');

-- --------------------------------------------------------

--
-- Table structure for table `explicit_knowledge`
--

CREATE TABLE `explicit_knowledge` (
  `id` int(11) NOT NULL,
  `knowledge_category_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `file` varchar(50) DEFAULT NULL,
  `original_file_name` text DEFAULT NULL,
  `is_visible_to_visitor` tinyint(4) DEFAULT NULL,
  `is_tacit` tinyint(4) DEFAULT 0,
  `status` tinyint(4) DEFAULT NULL,
  `creator_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updater_id` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `explicit_knowledge`
--

INSERT INTO `explicit_knowledge` (`id`, `knowledge_category_id`, `title`, `content`, `file`, `original_file_name`, `is_visible_to_visitor`, `is_tacit`, `status`, `creator_id`, `created_at`, `updater_id`, `updated_at`) VALUES
(1, 1, 'Lorem Ipsum Content', '<p><strong>Lorem Ipsum Content</strong></p><blockquote><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla est purus, ultrices in porttitor in, accumsan non quam. Nam consectetur porttitor rhoncus. Curabitur eu est et leo feugiat auctor vel quis lorem. Ut et ligula dolor, sit amet consequat lorem. Aliquam porta eros sed velit imperdiet egestas. Maecenas tempus eros ut diam ullamcorper id dictum libero tempor. Donec quis augue quis magna condimentum lobortis. Quisque imperdiet ipsum vel magna viverra rutrum</p></blockquote>', '60c2006fd5452.pdf', NULL, 1, 0, 2, 3, '2021-05-12 07:07:11', NULL, NULL),
(2, 1, 'Tacit Knowledge', '<p>sdfsdf</p>', '60cb73bdc2359.pdf', NULL, 1, 0, 2, 1, '2021-06-17 11:09:33', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `help`
--

CREATE TABLE `help` (
  `id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1,
  `creator_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `help`
--

INSERT INTO `help` (`id`, `title`, `content`, `status`, `creator_id`, `created_at`) VALUES
(1, '', '<p>ww</p>', 1, 1, '2021-06-17 10:55:40'),
(2, 'ww', '<p>w</p>', 1, 1, '2021-06-17 10:56:00');

-- --------------------------------------------------------

--
-- Table structure for table `help_comment`
--

CREATE TABLE `help_comment` (
  `id` int(11) NOT NULL,
  `help_id` int(11) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `creator_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `help_comment`
--

INSERT INTO `help_comment` (`id`, `help_id`, `content`, `creator_id`, `created_at`) VALUES
(1, 1, 'q', 1, '2021-06-17 10:55:46'),
(2, 1, 'w', 1, '2021-06-17 10:55:48'),
(3, 2, 'w', 1, '2021-06-17 10:56:03'),
(4, 2, 'e', 1, '2021-06-17 10:56:06');

-- --------------------------------------------------------

--
-- Table structure for table `knowledge_category`
--

CREATE TABLE `knowledge_category` (
  `id` int(11) NOT NULL,
  `category_code` varchar(50) DEFAULT NULL,
  `category_icon` varchar(255) DEFAULT NULL,
  `category_background` varchar(255) DEFAULT NULL,
  `category_title` varchar(255) DEFAULT NULL,
  `category_description` text DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `creator_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updater_id` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `knowledge_category`
--

INSERT INTO `knowledge_category` (`id`, `category_code`, `category_icon`, `category_background`, `category_title`, `category_description`, `status`, `creator_id`, `created_at`, `updater_id`, `updated_at`) VALUES
(1, 'KC1', 'bar-chart', 'primary', 'Category I', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', 1, 1, '2021-06-10 07:04:00', NULL, NULL),
(2, 'KC2', 'book-open', 'secondary', 'Category II', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum ', 1, 1, '2021-06-10 07:03:20', NULL, NULL),
(3, 'KC3', 'camera', 'teal', 'Category III', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.', 1, 1, '2021-06-10 07:03:51', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `knowledge_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `is_tacit` tinyint(4) DEFAULT NULL,
  `is_read` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `user_id`, `knowledge_id`, `title`, `content`, `is_tacit`, `is_read`, `created_at`) VALUES
(1, 1, 1, 'Lorem Ipsum Content', '<p><strong>Lorem Ipsum Content</strong></p><blockquote><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla est purus, ultrices in porttitor in, accumsan non quam. Nam consectetur porttitor rhoncus. Curabitur eu est et leo feugiat auctor vel quis lorem. Ut et ligula dolor, sit amet consequat lorem. Aliquam porta eros sed velit imperdiet egestas. Maecenas tempus eros ut diam ullamcorper id dictum libero tempor. Donec quis augue quis magna condimentum lobortis. Quisque imperdiet ipsum vel magna viverra rutrum</p></blockquote>', 0, 1, '2021-06-10 07:07:11'),
(2, 2, 1, 'Lorem Ipsum Content', '<p><strong>Lorem Ipsum Content</strong></p><blockquote><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla est purus, ultrices in porttitor in, accumsan non quam. Nam consectetur porttitor rhoncus. Curabitur eu est et leo feugiat auctor vel quis lorem. Ut et ligula dolor, sit amet consequat lorem. Aliquam porta eros sed velit imperdiet egestas. Maecenas tempus eros ut diam ullamcorper id dictum libero tempor. Donec quis augue quis magna condimentum lobortis. Quisque imperdiet ipsum vel magna viverra rutrum</p></blockquote>', 0, 1, '2021-06-10 07:07:11'),
(3, 4, 1, 'Lorem Ipsum Content', '<p><strong>Lorem Ipsum Content</strong></p><blockquote><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla est purus, ultrices in porttitor in, accumsan non quam. Nam consectetur porttitor rhoncus. Curabitur eu est et leo feugiat auctor vel quis lorem. Ut et ligula dolor, sit amet consequat lorem. Aliquam porta eros sed velit imperdiet egestas. Maecenas tempus eros ut diam ullamcorper id dictum libero tempor. Donec quis augue quis magna condimentum lobortis. Quisque imperdiet ipsum vel magna viverra rutrum</p></blockquote>', 0, 0, '2021-06-10 07:07:11'),
(4, 5, 1, 'Lorem Ipsum Content', '<p><strong>Lorem Ipsum Content</strong></p><blockquote><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla est purus, ultrices in porttitor in, accumsan non quam. Nam consectetur porttitor rhoncus. Curabitur eu est et leo feugiat auctor vel quis lorem. Ut et ligula dolor, sit amet consequat lorem. Aliquam porta eros sed velit imperdiet egestas. Maecenas tempus eros ut diam ullamcorper id dictum libero tempor. Donec quis augue quis magna condimentum lobortis. Quisque imperdiet ipsum vel magna viverra rutrum</p></blockquote>', 0, 0, '2021-06-10 07:07:11'),
(5, 1, 1, 'Tacit Knowledge', '<p>&nbsp;</p>', 1, 1, '2021-06-13 11:05:03'),
(6, 2, 1, 'Tacit Knowledge', '<p>&nbsp;</p>', 1, 0, '2021-06-13 11:05:03'),
(7, 4, 1, 'Tacit Knowledge', '<p>&nbsp;</p>', 1, 0, '2021-06-13 11:05:03'),
(8, 5, 1, 'Tacit Knowledge', '<p>&nbsp;</p>', 1, 0, '2021-06-13 11:05:03'),
(9, 2, 2, 'Tacit Knowledge', '<p>asa</p>', 1, 0, '2021-06-17 11:04:20'),
(10, 3, 2, 'Tacit Knowledge', '<p>asa</p>', 1, 0, '2021-06-17 11:04:20'),
(11, 4, 2, 'Tacit Knowledge', '<p>asa</p>', 1, 0, '2021-06-17 11:04:20'),
(12, 5, 2, 'Tacit Knowledge', '<p>asa</p>', 1, 0, '2021-06-17 11:04:20'),
(13, 2, 3, 'Tacit Knowledge', '<p>werwe</p>', 1, 0, '2021-06-17 11:05:56'),
(14, 3, 3, 'Tacit Knowledge', '<p>werwe</p>', 1, 0, '2021-06-17 11:05:56'),
(15, 4, 3, 'Tacit Knowledge', '<p>werwe</p>', 1, 0, '2021-06-17 11:05:56'),
(16, 5, 3, 'Tacit Knowledge', '<p>werwe</p>', 1, 0, '2021-06-17 11:05:56'),
(17, 2, 2, 'Tacit Knowledge', '<p>sdfsdf</p>', 0, 0, '2021-06-17 11:09:33'),
(18, 3, 2, 'Tacit Knowledge', '<p>sdfsdf</p>', 0, 0, '2021-06-17 11:09:33'),
(19, 4, 2, 'Tacit Knowledge', '<p>sdfsdf</p>', 0, 0, '2021-06-17 11:09:33'),
(20, 5, 2, 'Tacit Knowledge', '<p>sdfsdf</p>', 0, 0, '2021-06-17 11:09:33');

-- --------------------------------------------------------

--
-- Table structure for table `tacit_comment`
--

CREATE TABLE `tacit_comment` (
  `id` int(11) NOT NULL,
  `tacit_knowledge_id` int(11) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `creator_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tacit_comment`
--

INSERT INTO `tacit_comment` (`id`, `tacit_knowledge_id`, `content`, `creator_id`, `created_at`) VALUES
(1, 1, 'g', 3, '2021-06-13 11:05:12'),
(2, 1, 'dfd', 1, '2021-06-13 11:05:50');

-- --------------------------------------------------------

--
-- Table structure for table `tacit_knowledge`
--

CREATE TABLE `tacit_knowledge` (
  `id` int(11) NOT NULL,
  `knowledge_category_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `is_visible_to_visitor` tinyint(4) DEFAULT NULL,
  `is_tacit` tinyint(4) DEFAULT 1,
  `status` tinyint(4) DEFAULT NULL,
  `creator_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updater_id` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tacit_knowledge`
--

INSERT INTO `tacit_knowledge` (`id`, `knowledge_category_id`, `title`, `content`, `is_visible_to_visitor`, `is_tacit`, `status`, `creator_id`, `created_at`, `updater_id`, `updated_at`) VALUES
(1, 1, 'Tacit Knowledge', '<p>&nbsp;</p>', 1, 1, 2, 3, '2021-05-12 11:05:03', NULL, NULL),
(2, 1, 'Tacit Knowledge', '<p>asa</p>', 1, 1, 2, 1, '2021-06-17 11:04:20', NULL, NULL),
(3, 3, 'Tacit Knowledge', '<p>werwe</p>', 1, 1, 2, 1, '2021-06-17 11:05:56', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nip` varchar(50) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `birth_place` varchar(255) DEFAULT NULL,
  `religion` varchar(50) DEFAULT NULL,
  `sex` bit(1) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role_id` tinyint(4) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nip`, `name`, `email`, `position`, `image`, `birth_place`, `religion`, `sex`, `address`, `phone_number`, `password`, `role_id`, `status`) VALUES
(1, 'ADM001', 'Administrator', 'admin@gmail.com', 'Admin', '60b62725f3d9c.png', 'Jakarta', 'Islam', b'1', 'Jakarta Barat', '082183334456', '21232f297a57a5a743894a0e4a801fc3', 0, 1),
(2, 'KAS001', 'Kasi', 'kasi@gmail.com', 'Kasi', '60b2756740499.png', 'Palembang', 'Islam', b'1', 'Palembang', '081266373362', 'b68fcc3e90e4fecf7182587472526728', 1, 1),
(3, 'SA001', 'Staff Ahli', 'sa@gmail.com', 'Staff Ahli', '60c2009cba399.png', 'Medan', 'Islam', b'1', 'Medan', '085544663524', 'c12e01f2a13ff5587e1e9e4aedb8242d', 2, 1),
(4, 'VI001', 'Visitor', 'visitor@gmail.com', 'Visitor', '60b276a11ceb0.png', 'Lampung', 'Islam', b'1', 'Lampung', '0866775432', 'd41d8cd98f00b204e9800998ecf8427e', 3, 1),
(5, '2234', 'Visitor2', 'v2@gmail.com', 'Staff', '60bb13a4cfa9f.png', '', 'Islam', b'1', '', '', '1b267619c4812cc46ee281747884ca50', 3, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `explicit_comment`
--
ALTER TABLE `explicit_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `explicit_knowledge`
--
ALTER TABLE `explicit_knowledge`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `help`
--
ALTER TABLE `help`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `help_comment`
--
ALTER TABLE `help_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `knowledge_category`
--
ALTER TABLE `knowledge_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tacit_comment`
--
ALTER TABLE `tacit_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tacit_knowledge`
--
ALTER TABLE `tacit_knowledge`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `explicit_comment`
--
ALTER TABLE `explicit_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `explicit_knowledge`
--
ALTER TABLE `explicit_knowledge`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `help`
--
ALTER TABLE `help`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `help_comment`
--
ALTER TABLE `help_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `knowledge_category`
--
ALTER TABLE `knowledge_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tacit_comment`
--
ALTER TABLE `tacit_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tacit_knowledge`
--
ALTER TABLE `tacit_knowledge`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
