-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 04, 2024 at 05:18 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myDataWeb`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `username`, `password`, `email`, `firstname`, `lastname`) VALUES
(81, '1', '1', 'huudung2004kt@gmail.com', NULL, NULL),
(82, 'user', '1', NULL, NULL, NULL),
(83, 'huudung', '1', NULL, NULL, NULL),
(84, 'sd18313', '1', NULL, NULL, NULL),
(85, 'pppp', '1', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bannerbot`
--

CREATE TABLE `bannerbot` (
  `id` int(11) NOT NULL,
  `img` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bannerbot`
--

INSERT INTO `bannerbot` (`id`, `img`) VALUES
(1, 'https://gamek.mediacdn.vn/133514250583805952/2022/1/6/photo-1-16414684310751492131631.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bannermid`
--

CREATE TABLE `bannermid` (
  `id` int(11) NOT NULL,
  `img` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bannermid`
--

INSERT INTO `bannermid` (`id`, `img`) VALUES
(2, 'https://toquoc.mediacdn.vn/280518851207290880/2022/7/23/dragon-ball-super-super-hero-peronajes-confirmados-game4v-1649264491-58-1658542494293-16585424943691750246891.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bannertop`
--

CREATE TABLE `bannertop` (
  `id` int(11) NOT NULL,
  `title` varchar(111) DEFAULT NULL,
  `button` varchar(111) DEFAULT NULL,
  `img` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bannertop`
--

INSERT INTO `bannertop` (`id`, `title`, `button`, `img`) VALUES
(1, 'Try to become better more than yesterday', 'Read more', 'https://image.api.playstation.com/vulcan/ap/rnd/202301/0921/AiE5XQ6Yzy2tO7zCn2P0J8lZ.png');

-- --------------------------------------------------------

--
-- Table structure for table `cartlast`
--

CREATE TABLE `cartlast` (
  `id` int(11) NOT NULL,
  `img` varchar(500) DEFAULT NULL,
  `title` varchar(111) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cartlast`
--

INSERT INTO `cartlast` (`id`, `img`, `title`, `description`) VALUES
(1, 'https://m.media-amazon.com/images/M/MV5BNDYyNTJkNmItYjgxNC00ODliLTg2MGMtZjkxNjEwYzdjNjUxXkEyXkFqcGdeQXVyNTA4NzY1MzY@._V1_FMjpg_UX1000_.jpg', 'Porsche Travel Experience. Driving fun meets wanderlust – inspiration with every kilometre.', 'See the journey as the destination. And discover the most beautiful corners of the world. In the sportiest way imaginable – at the wheel of a Porsche.'),
(2, 'https://cdn.oneesports.vn/cdn-data/sites/4/2023/10/DragonBallDaima_GokuVegeta.jpg', 'Porsche Travel Experience. Driving fun meets wanderlust – inspiration with every kilometre.', 'See the journey as the destination. And discover the most beautiful corners of the world. In the sportiest way imaginable – at the wheel of a '),
(3, 'https://i.ytimg.com/vi/srHv8vjhtXY/maxresdefault.jpg', 'Porsche Travel Experience. Driving fun meets wanderlust – inspiration with every kilometre.', 'See the journey as the destination. And discover the most beautiful corners of the world. In the sportiest way imaginable – at the wheel of a ');

-- --------------------------------------------------------

--
-- Table structure for table `cartmid`
--

CREATE TABLE `cartmid` (
  `id` int(11) NOT NULL,
  `title` varchar(111) DEFAULT NULL,
  `button` varchar(111) DEFAULT NULL,
  `img` varchar(500) DEFAULT NULL,
  `description` varchar(111) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cartmid`
--

INSERT INTO `cartmid` (`id`, `title`, `button`, `img`, `description`) VALUES
(1, 'Begin your experience', 'Read more', 'https://m.media-amazon.com/images/S/pv-target-images/e1a8302d3b618d91ef5ff9175acf0fc8650c4d3d209b0642cf4c76829eaf5c54.jpg', 'this id description'),
(2, 'Begin your experience', 'Read more', 'https://m.media-amazon.com/images/S/pv-target-images/e1a8302d3b618d91ef5ff9175acf0fc8650c4d3d209b0642cf4c76829eaf5c54.jpg', 'this id description'),
(3, 'Begin your experience', 'Read more', 'https://m.media-amazon.com/images/S/pv-target-images/e1a8302d3b618d91ef5ff9175acf0fc8650c4d3d209b0642cf4c76829eaf5c54.jpg', 'this id description');

-- --------------------------------------------------------

--
-- Table structure for table `cartmid2`
--

CREATE TABLE `cartmid2` (
  `id` int(11) NOT NULL,
  `title` varchar(111) DEFAULT NULL,
  `button` varchar(111) DEFAULT NULL,
  `img` varchar(111) DEFAULT NULL,
  `description` varchar(111) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cartmid2`
--

INSERT INTO `cartmid2` (`id`, `title`, `button`, `img`, `description`) VALUES
(1, NULL, 'Read ++', 'https://static1.srcdn.com/wordpress/wp-content/uploads/2022/11/four-star-dragon-ball.jpg', 'hahhah nothing is forever'),
(2, NULL, 'Read ++', 'https://static1.srcdn.com/wordpress/wp-content/uploads/2022/11/four-star-dragon-ball.jpg', 'hahhah nothing is forever'),
(3, NULL, 'Read ++', 'https://static1.srcdn.com/wordpress/wp-content/uploads/2022/11/four-star-dragon-ball.jpg', 'hahhah nothing is forever');

-- --------------------------------------------------------

--
-- Table structure for table `cartnav`
--

CREATE TABLE `cartnav` (
  `id` int(11) NOT NULL,
  `title` varchar(111) DEFAULT NULL,
  `description` varchar(111) DEFAULT NULL,
  `img` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cartnav`
--

INSERT INTO `cartnav` (`id`, `title`, `description`, `img`) VALUES
(1, 'trackttt', 'hahahah', 'https://assets-prd.ignimgs.com/2023/10/12/dragon-ball-daima-button-1697147664709.jpg'),
(2, 'Ice', 'hâhhha', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTjDX9GeybAmb5E1TU-GeVbuHVtYT9_2n86hA&s'),
(3, 'Enjoi', 'kkk', 'https://images.squarespace-cdn.com/content/v1/571abd61e3214001fb3b9966/1b0f0c7b-7b0c-412a-8de3-f131c1e07f94/One+Piece+100.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bannerbot`
--
ALTER TABLE `bannerbot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bannermid`
--
ALTER TABLE `bannermid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bannertop`
--
ALTER TABLE `bannertop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cartlast`
--
ALTER TABLE `cartlast`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cartmid`
--
ALTER TABLE `cartmid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cartmid2`
--
ALTER TABLE `cartmid2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cartnav`
--
ALTER TABLE `cartnav`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `bannerbot`
--
ALTER TABLE `bannerbot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bannermid`
--
ALTER TABLE `bannermid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bannertop`
--
ALTER TABLE `bannertop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cartlast`
--
ALTER TABLE `cartlast`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cartmid`
--
ALTER TABLE `cartmid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cartmid2`
--
ALTER TABLE `cartmid2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cartnav`
--
ALTER TABLE `cartnav`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
