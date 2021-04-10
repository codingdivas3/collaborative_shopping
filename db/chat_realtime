-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 10, 2021 at 05:22 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat_realtime`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `name` varchar(200) NOT NULL,
  `image` varchar(500) NOT NULL,
  `price` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`name`, `image`, `price`) VALUES
('praja', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQaldcclrrvdAtyDMxT215WlilarvJQj8BjuwJgjtRIfA9UDoRvJwbH5w5X-VoJbJ28x4hbIyoP&usqp=CAc', 500),
('praja', 'https://images.unsplash.com/photo-1568252542512-9fe8fe9c87bb?ixid=MXwxMjA3fDB8MHxzZWFyY2h8M3x8ZmFzaGlvbiUyMGRyZXNzfGVufDB8fDB8&ixlib=rb-1.2.1&w=1000&q=80', 700),
('Bhavana', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRTDEB0fD8VMBCMQAC2uQHMSHyYezy3R6J0pzFN6u-c0e9MGwOeV9_0G7a9LOYlprrISak2lZF2&usqp=CAc', 1000),
('Antara', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT0y-5CtidP_hwLACPOpKYskUrUgvT_viK2mwVSgv0gW3iyQxt_Gji6nPUEk-Rc7lHuD-YeGBc&usqp=CAc', 879),
('Antara', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQRSHPghouW3vxzJ9yRb578WaupU47T1dq4XcKNuTJ-a-_MBsh6Vxcm3T3RCmuv5y_P12Pz0LuF&usqp=CAc', 600);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `ke` text NOT NULL,
  `avatar` varchar(500) NOT NULL,
  `message` text NOT NULL,
  `image` varchar(500) NOT NULL,
  `tipe` varchar(200) NOT NULL,
  `date` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `ke`, `avatar`, `message`, `image`, `tipe`, `date`) VALUES
(6, 'praja', 'Public', 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/1024px-User_icon_2.svg.png', 'hi', '', 'rooms', '2021-04-09 13:40:34'),
(7, 'raj', 'Public', 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/1024px-User_icon_2.svg.png', 'hey', '', 'rooms', '2021-04-09 13:41:17'),
(2, 'abc', 'Public', 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/1024px-User_icon_2.svg.png', 'hi', '', 'rooms', '2021-04-09 12:56:09'),
(3, 'cd', 'Public', 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/1024px-User_icon_2.svg.png', 'hell\n', '', 'rooms', '2021-04-09 12:56:49'),
(4, 'praja', 'Public', 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/1024px-User_icon_2.svg.png', 'there', '', 'rooms', '2021-04-09 12:58:15'),
(5, 'praja', 'Public', 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/1024px-User_icon_2.svg.png', 'mask', '', 'rooms', '2021-04-09 12:58:40'),
(14, 'divas', 'Public', 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/1024px-User_icon_2.svg.png', 'h', '1618069193478dWpcy.jpg', 'rooms', '2021-04-10 21:09:57'),
(13, 'divas', 'Public', 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/1024px-User_icon_2.svg.png', 'hi', '', 'rooms', '2021-04-10 21:09:43'),
(8, 'divas', 'Public', 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/1024px-User_icon_2.svg.png', 'cog\n', '', 'rooms', '2021-04-10 20:40:51'),
(9, 'divas', 'Public', 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/1024px-User_icon_2.svg.png', 'hii', '', 'rooms', '2021-04-10 20:51:09'),
(10, 'divas', 'Public', 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/1024px-User_icon_2.svg.png', 'dress', '1618068078630MijXn.jpg', 'rooms', '2021-04-10 20:51:24'),
(11, 'divas', 'Public', 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/1024px-User_icon_2.svg.png', 'hi', '', 'rooms', '2021-04-10 20:58:50'),
(12, 'divas', 'Public', 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/1024px-User_icon_2.svg.png', 'hi', '1618068538809vEsp8.jpg', 'rooms', '2021-04-10 20:59:03'),
(15, 'divas', 'Public', 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/1024px-User_icon_2.svg.png', 'h', '1618069193478dWpcy.jpg', 'rooms', '2021-04-10 21:09:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `ke` int(20) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `avatar` varchar(500) NOT NULL,
  `login` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`ke`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ke`, `name`, `avatar`, `login`, `status`) VALUES
(1, 'bachors', 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/1024px-User_icon_2.svg.png', '2018-08-30 09:21:27', 'online'),
(2, 'abc', 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/1024px-User_icon_2.svg.png', '2021-04-09 12:55:47', 'offline'),
(3, 'cd', 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/1024px-User_icon_2.svg.png', '2021-04-09 12:57:45', 'offline'),
(4, 'praja', 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/1024px-User_icon_2.svg.png', '2021-04-09 13:40:51', 'offline'),
(5, 'raj', 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/1024px-User_icon_2.svg.png', '2021-04-09 17:49:42', 'online'),
(6, 'ab', 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/1024px-User_icon_2.svg.png', '2021-04-10 21:04:12', 'offline'),
(7, 'divas', 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/1024px-User_icon_2.svg.png', '2021-04-10 21:16:32', 'online');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
