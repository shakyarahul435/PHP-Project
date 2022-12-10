-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2022 at 07:53 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `crudtable`
--

CREATE TABLE `crudtable` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `jewelry` varchar(255) NOT NULL,
  `mobilenumber` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crudtable`
--

INSERT INTO `crudtable` (`id`, `username`, `email`, `password`, `jewelry`, `mobilenumber`) VALUES
(21, 'admin', 'shakyarahul435@gmail.com', '$2y$10$AVIWitx3XnhxsAkHn3wNsO8JWiYQTjuGXgcHA0zF9KcZJrtdbOHV6', '4', '9999'),
(22, 'admin', 'app@gmail.com', '$2y$10$gC.Nnnnj4hirH/X2nQZu4OCkGctSI/0m7N1NTqZVIUK0dFiHbOyvW', '5', ''),
(32, '', '', '$2y$10$lAG2QDSnQvKHsvSq8YwVNeOIDv2sLSmBC89A0Fa5zAaLpnFQ2Qqve', '0', ''),
(33, '', '', '$2y$10$/yz8QwHuSDcwe.6OKcpA0ev1.Emm/4bRtSdd2fCOUyHrCoO0a0pwa', '0', ''),
(34, 'admin', 'admin@gmail.com', '$2y$10$UXyeNwPt60cs1lwwuMe0cOd1TfNGQA5VpyaCSONS.EyuTh2xIQK6K', '1', '9841'),
(35, 'admin', 'admin@gmail.com', '$2y$10$0LfzND2.lrpRJN4ujziB3eGbm5paSY1.EwjxSlYudwQMIGheTnzKK', '3,', '999999'),
(36, 'admin', 'admin@gmail.com', '$2y$10$yt/q.zCp8Hov8uR/SjWeFuIzZMgnjfiRx6CuuFxS7o9ZjpxtpYsaS', '1;', '000'),
(37, 'admin', 'admin@gmail.com', '$2y$10$oPfQqKqAx8.Ags8lZhnlqe6635eAhW/4l7lX6URD058TlzQ0vVXd.', '1,wed4', '98'),
(38, 'hey', 'hellouser@gmail.com', '$2y$10$sseHktAWzOq2iCMJQprJ5er6VJB2A/lvT0CUDTXW1LexDupwfdP12', '1,wed3', '12'),
(39, 'hey', 'admin@gmail.com', '$2y$10$Px6K12gnintXnZHnc5SqdOMLn5tDsB8hOb4ZpUxXY8i38mgEUxDue', '1,weddingSet1', '98'),
(40, 'user', 'user@gmail.com', '$2y$10$09JyMJkSRnElJMALeOrKMO6am2scL1ul66OpcLDHH9S6XTC9DPcA.', '1,weddingSet2', '9841'),
(41, 'admin', 'admin@gmail.com', '$2y$10$nJMusIOXyHtNJA5aK7n0pu6nXPyQhBzm0dO8RTv4XsgtT9Ym6ZpWy', '3,weddingSet1', '123'),
(43, 'hey', 'user@gmail.com', '$2y$10$Y22FREhUbHDBjRv.iKoGGuCtccAZvAUa001S1xi3.pCU3mpKblXZu', '2,weddingSet1', '123'),
(44, 'app', 'app@gmail.com', '$2y$10$RmVe.euooFmF3Ef5fMJOSOE5Hfd0L/cLTvdCtPswlRaIPulAHgkra', '3,weddingSet1', '22'),
(45, 'admin', 'admin@gmail.com', '$2y$10$HSXNuZP8t7V.hYNzBDgdq.CnYcczx.PJ.hkVNQGptnTgSOXgw6MyS', '4,0,0,0,0', '98'),
(46, 'admin', 'admin@gmail.com', '$2y$10$hvy5689KRUl5YQVM9P69Ae2rrUm9laUYuzrrwSQcckdrNBnBrcb6y', '3,0,0,ring3,0', '0'),
(47, 'admin', 'admin@gmail.com', '$2y$10$GnRqr6NH55wo3KDI2o9Ug.CJf3i5.8GXmPgXLztmtPMFajwsQvmKK', '4,0,0,0,tilahari3', '12'),
(48, 'app', 'app@gmail.com', '$2y$10$yq6vOEfebZvnWM1nQmKhu.yiTmZx8Jim60vzZhtcn9svgwjLlFGfK', '3-0,0,ring2,0', '12'),
(49, 'admin', 'admin@gmail.com', '$2y$10$JhfM5q2TT5rOFrZy9n3YXu99bB6U.pRA0vCNDwdk3wE/yY93Y34fe', '4-0,0,0,0', '12'),
(50, 'admin', 'admin@gmail.com', '$2y$10$EJSHO9zrTSLANgS5DsMMZ./jztZzXEiUJ2iLBA4p0iohDQH2jqBmS', '4-0,0,0,0', '12'),
(51, 'admin', 'admin@gmail.com', '$2y$10$dl/rUkm6Q.6dIMD0/lte5uUYggg4xSd2djUP9EDaLSvjjafLzom8S', '4-0,0,0,0', '12'),
(52, 'admin', 'admin@gmail.com', '$2y$10$xy/6UKx2pd.lAi.rE/soFOi99HcwvOrSHwg1A7.PzC37SoxWwT0m6', '4-0,0,0,0', '12'),
(53, 'admin', 'admin@gmail.com', '$2y$10$lRS.xMC8hiFoLFpepv5NTeBOiq99gmONzhcCe94e6fSYCTad/MdEK', '4-0,0,0,0', '12'),
(54, 'admin', 'admin@gmail.com', '$2y$10$qfzv5lXV7WHRhnN2xiPC9.B4PnS44Y9EnAEFcKHxUSre9WooWZRWm', '4-0,0,0,0', '2'),
(55, 'hey', 'aa@gmail.com', '$2y$10$HKbaCfnmA9ObuzSByrUpM.Ud2dbawvfkjZF7.9TgZzuQK78GslmWO', '0-0,0,0,-1', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crudtable`
--
ALTER TABLE `crudtable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crudtable`
--
ALTER TABLE `crudtable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
