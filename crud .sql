-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2022 at 05:35 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `jewelry` varchar(255) NOT NULL,
  `mobilenumber` int(11) NOT NULL,
  `imageupload` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `username`, `jewelry`, `mobilenumber`, `imageupload`, `comment`) VALUES
(1, NULL, '2,weddingSet2,necklace1,,', 123, '', '');

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
  `mobilenumber` varchar(255) NOT NULL,
  `imageUpload` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crudtable`
--

INSERT INTO `crudtable` (`id`, `username`, `email`, `password`, `jewelry`, `mobilenumber`, `imageUpload`, `comment`) VALUES
(39, 'hey', 'admin@gmail.com', '$2y$10$Px6K12gnintXnZHnc5SqdOMLn5tDsB8hOb4ZpUxXY8i38mgEUxDue', '1,weddingSet1', '98', '', ''),
(40, 'user', 'user@gmail.com', '$2y$10$09JyMJkSRnElJMALeOrKMO6am2scL1ul66OpcLDHH9S6XTC9DPcA.', '1,weddingSet2', '9841', '', ''),
(41, 'admin', 'admin@gmail.com', '$2y$10$nJMusIOXyHtNJA5aK7n0pu6nXPyQhBzm0dO8RTv4XsgtT9Ym6ZpWy', '3,weddingSet1', '123', '', ''),
(43, 'hey', 'user@gmail.com', '$2y$10$Y22FREhUbHDBjRv.iKoGGuCtccAZvAUa001S1xi3.pCU3mpKblXZu', '2,weddingSet1', '123', '', ''),
(44, 'app', 'app@gmail.com', '$2y$10$RmVe.euooFmF3Ef5fMJOSOE5Hfd0L/cLTvdCtPswlRaIPulAHgkra', '3,weddingSet1', '22', '', ''),
(45, 'admin', 'admin@gmail.com', '$2y$10$HSXNuZP8t7V.hYNzBDgdq.CnYcczx.PJ.hkVNQGptnTgSOXgw6MyS', '4,0,0,0,0', '98', '', ''),
(46, 'admin', 'admin@gmail.com', '$2y$10$hvy5689KRUl5YQVM9P69Ae2rrUm9laUYuzrrwSQcckdrNBnBrcb6y', '3,0,0,ring3,0', '0', '', ''),
(47, 'admin', 'admin@gmail.com', '$2y$10$GnRqr6NH55wo3KDI2o9Ug.CJf3i5.8GXmPgXLztmtPMFajwsQvmKK', '4,0,0,0,tilahari3', '12', '', ''),
(48, 'app', 'app@gmail.com', '$2y$10$yq6vOEfebZvnWM1nQmKhu.yiTmZx8Jim60vzZhtcn9svgwjLlFGfK', '3-0,0,ring2,0', '12', '', ''),
(49, 'user1', 'admin@gmail.com', '$2y$10$..JylpWCWUNBu8magw4xR.Zgt3dwQOK4CTSwFSM0YxmHl1qeCahwC', '4-0,0,0,1', '12', '', ''),
(50, 'admin', 'admin@gmail.com', '$2y$10$EJSHO9zrTSLANgS5DsMMZ./jztZzXEiUJ2iLBA4p0iohDQH2jqBmS', '4-0,0,0,0', '12', '', ''),
(51, 'admin', 'admin@gmail.com', '$2y$10$dl/rUkm6Q.6dIMD0/lte5uUYggg4xSd2djUP9EDaLSvjjafLzom8S', '4-0,0,0,0', '12', '', ''),
(52, 'admin', 'admin@gmail.com', '$2y$10$xy/6UKx2pd.lAi.rE/soFOi99HcwvOrSHwg1A7.PzC37SoxWwT0m6', '4-0,0,0,0', '12', '', ''),
(53, 'admin', 'admin@gmail.com', '$2y$10$lRS.xMC8hiFoLFpepv5NTeBOiq99gmONzhcCe94e6fSYCTad/MdEK', '4-0,0,0,0', '12', '', ''),
(54, 'admin', 'admin@gmail.com', '$2y$10$qfzv5lXV7WHRhnN2xiPC9.B4PnS44Y9EnAEFcKHxUSre9WooWZRWm', '4-0,0,0,0', '2', '', ''),
(55, 'hey', 'aa@gmail.com', '$2y$10$HKbaCfnmA9ObuzSByrUpM.Ud2dbawvfkjZF7.9TgZzuQK78GslmWO', '0-0,0,0,-1', '', '', ''),
(56, 'admin', 'admin@gmail.com', '$2y$10$NPl8zEJibnrt2OzUNkcRLOVTGQADs4ff5rpdLm2Az1eF37zGqi.VO', '3-0,0,ring3,-1', '222', '', ''),
(57, 'error', 'mistake@gm.com', '$2y$10$qNzTdQcvulmYjkZ25G1Lc.gFU8SfXMjpRLJbmFsYqKl2iJHD8rus6', '2-0,necklace2,0,-1', '12', 'FEBQ7809.JPG', ''),
(58, 'vayo ', 'vayoaba@gmail.com', '$2y$10$xhhDDO87ZbN11vEqzXYIE.QtYG/SgMsWrMU7hCN3EYrZVNXEmpFRy', '2-0,necklace1,0,-1', '123', 'IMG_3378.JPG', ''),
(59, 'form', 'vayoaba@gmail.com', '$2y$10$ScnEmVjxMIVreTP.GJprQuiaOAhJqh.B6t4LPeN.OG6/t4gKZsNHy', '1-weddingSet3,0,0,-1', '', '', ''),
(60, 'admion', 'admin@gmail.com', '$2y$10$UcPgZoRcsX.EmCa/5APH8eXJLWF5.mvwb8UTzmEuiggZuN8oalYjS', '2-0,necklace2,0,-1', '', '', ''),
(61, 'admion', 'admin@gmail.com', '$2y$10$g.PSp1PMTSkVPRpVHPpIAu.WmTtODdrRk3DigovobIUcFVLZ5X2xq', '1-weddingSet2,0,0,-1', '', '', ''),
(62, 'admin', 'admin@gmail.com', '$2y$10$/xXssLESL3gJ/BuLIFcNzu3FcsESpr4VvlrwVptrVRcv78E.N9rmm', '1-weddingSet2,0,0,-1', '123456', 'FEBQ7809.JPG', 'asd'),
(63, 'sakyoki', 'safa@gmail.com', '$2y$10$0.bgxUkMfFTi89juNhoF6.IKwgqZWys/oH29Jblv1zVyit7W79hq.', '4-Select WeddingSet,Select Necklace,Select Ring,tilahari1', '123', '130967738_391927805379815_6820303365815076583_n.jpg', 'yoFinish'),
(64, '', '', '$2y$10$zkSeP7722IeLhOmowVyiQ.3jOi/uHVKL/U3.UaIGf7B9UtHJZdFt.', '', '123', 'IMG_3378.JPG', '234'),
(65, 'admin', 'admin@gmail.com', '$2y$10$4QEyfs.GIhTM54A7u5G1wOCHCI.YvN4ISGrBKov46iFlJx/FbDlb6', '1-weddingSet1,,,', '3456', 'FEBQ7809.JPG', 'sdfdg'),
(66, 'dfgf', 'admin@gmail.com', '$2y$10$aXAkLu3WCNjKeRlZmexLEu.NgdRN.g9uRsowurSOaoB8NVF/NErWG', '1-weddingSet1,,,', '3546', 'uploads/130967738_391927805379815_6820303365815076583_n.jpg', 'cv'),
(67, '35', 'admin@gmail.com', '$2y$10$tJLb9KUOaneY8rLmjxwDWunbJ4Q7AZMsNvPGPyu2Wwp8lN7UGKNHi', '1-weddingSet1,,,', '345', 'uploads/130967738_391927805379815_6820303365815076583_n.jpg', 'sdsf'),
(68, 'er', 'admin@gmail.com', '$2y$10$7HzMg/2UWp4/yh77KDs2xe/84ZVlij9MymKUcNF8FBQFy2coq2izW', '1-weddingSet1,,,', '245', 'FEBQ7809.JPG', 'fe'),
(69, 'admin', 'shakyarahul435@gmail.com', '$2y$10$.Eshj5ourzlNKZAq5Yf9L.lrdfef3YYmpE7vi0TvIZFBaNLNmfRs6', '4', '984120', '130967738_391927805379815_6820303365815076583_n.jpg', 'wr'),
(70, 'apple', 'admin@gmail.com', '$2y$10$Y.ENecUkLZ1vdr2fI6HmceA.xyY0Up8PErtJ8sUGfdEMOuxVIK7nS', '1-weddingSet1,,,', '9841000000', 'IMG_3378.JPG', 'this is file'),
(71, 'apple', 'safa@gmail.com', '$2y$10$R1a0hhIbNyu50GgfttkJYu1MAvMfw3TWiQRSrYsfZ1h.muEaMFYLO', '2-,necklace3,,', '984111', '', ''),
(72, 'afsda', 'safa@gmail.com', '$2y$10$F99ciz3vLn9WRO8Wnp4kDe3HHJC3qB98fXRnRNEUMztBn4XRkdvjm', '1-weddingSet3,,,', '894', 'IMG_8352.JPG', 'asdf'),
(73, 'asfd', 'shakya_rahul@rocketmail.com', '$2y$10$b.TYtKWPGpZtVB6F1jXONuJl0.pMXQpUlGLiWOMd6ejsRaErwYxtW', '1-weddingSet2,,,', '656', 'IMG_3378.JPG', 'sfdafdsadfs'),
(74, 'asd', 'asd@gmail.com', '$2y$10$b6BDK0HsCCV2rd0WuCuPd.w8FiU/VctrFzcMF5lZ3FE9qpycxskK2', '2-,necklace1,,', '984', '', ''),
(75, 'ads', 'admin@gmail.com', '$2y$10$9p7PiYx.EaPvUI43XeYpYukhKrdvXzdaSIdkCJ57/bGjZP9Llt6MK', '1-weddingSet2,,,', '546', 'IMG_8352.JPG', 'asd'),
(76, 'asdf', 'admin@gmail.com', '$2y$10$2HZNIpKgDKUzF78udSL0nerZBiiorzgtP17G5XVlx0vrBQUQG5Bia', '1-weddingSet2,,,', '6454', 'IMG_8352.JPG', 'sadf'),
(77, 'sdf', 'asd@gmail.com', '$2y$10$.3F544Ee4BseEkD2yB.bPuMb2MT1unbVh59KFmX1.AWphnaE3b6Fy', '2-,necklace2,,', '651', 'IMG_3391.JPG', 'sdfa'),
(78, 'asd', 'asd@gmail.com', '$2y$10$zyQwxacJ8up5C8BxAxWflemr21Kfd2nlFNZq9MMNAkb/RxaO7Ns.S', '1-weddingSet3,,,', '541', 'FEBQ7809.JPG', 'asd'),
(79, 'asd', 'asd@gmail.com', '$2y$10$/taAziBEcaDOqjU3JcBoJ.e5RjZu3C0NRHURHUtVGGNdhs9dsR/OC', '1-weddingSet1,,,', '65', 'IMG_8352.JPG', 'asd'),
(80, 'asd', 'asd@gmail.com', '$2y$10$CdowqYaUfi9VkT2dzovr7OsupwpZC3kWEITG/h5mqy0vEOz2xfEqy', '1-weddingSet1,,,', '54', 'FEBQ7809.JPG', 'asd'),
(81, 'asd', 'admin@gmail.com', '$2y$10$f4s6rhnD0TlAC/KLBC0rLet84N7dDjgjaIAsdhnNttOxA7WEqBYaq', '1-weddingSet1,,,', '615', 'IMG_3378.JPG', 'asd'),
(82, 'asd', 'admin@gmail.com', '$2y$10$MPLuq4hlvsckzcu00l8OY.y2HAqLmMemji43ha2gHENjPGF6enQIy', '2-,necklace1,,', '165', 'FEBQ7809.JPG', 'asd'),
(83, 'safd', 'admin@gmail.com', '$2y$10$Zlgss6LIyL3UP8JlZkFzfu19tHSAhem8civ5uXfwqpL3Ijw71jEYy', '2-,necklace1,,', '541', 'IMG_3378.JPG', 'safd'),
(84, 'asd', 'admin@gmail.com', '$2y$10$JdSTpsTyVfKpEsT72uqZKOI0NTWRWgopVbcRW1vU1Fgt9KyUHPH5e', '2-,necklace1,,', '651', '', ''),
(85, 'asd', 'admin@gmail.com', '$2y$10$W4P583FiSLULj62zlbmk4ulIe67uXki/wXBv6dPWMMjSyaBbFOaBW', '1-weddingSet2,,,', '51', '', 'asd'),
(86, 'ram', 'ram@gmail.com', '$2y$10$aP7Gq//4zw9H..CdA4df4uRNju5cK4y1BfgldKi9cd4uuRth.hs2u', '1-weddingSet2,,,', '2432', 'FEBQ7809.JPG', 'ads'),
(87, 'ram', 'asd@gmail.com', '$2y$10$hRCOg5ojL3xOAobuDsIyVeRnhlGNmEXPLNp1Vg9aHTk369ltGATlK', 'Select Jewelry-,,,', '123', 'IMG_3378.JPG', 'askldn'),
(88, '123', 'admin@gmail.com', '$2y$10$sqX44rfQypLr/0gywMy3oOoRJBBlcr9okjXHjDpUIwToGFXURvUw.', '2-,necklace2,,', '9841', 'IMG_3378.JPG', 'asfdf'),
(89, '', '', '', '2,,necklace1,,', '123', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobilenumber` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `location`, `username`, `password`, `mobilenumber`, `email`) VALUES
(4, 'rahul', 'shakya', 'bhaktapur', 'admin', '21232f297a57a5a743894a0e4a801fc3', 9841, 'admin@gmail.com'),
(6, 'hello', 'world', 'lalitpur', 'helloWorld', '5d41402abc4b2a76b9719d911017c592', 9851, 'hello@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crudtable`
--
ALTER TABLE `crudtable`
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
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `crudtable`
--
ALTER TABLE `crudtable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
