-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 30, 2021 at 07:50 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_guestbook`
--
CREATE DATABASE project_guestbook;
-- --------------------------------------------------------

--
-- Table structure for table `addmessage`
--

CREATE TABLE `addmessage` (
  `id` int(11) NOT NULL,
  `namaPengirim` varchar(128) NOT NULL,
  `tulisanPengirim` varchar(128) NOT NULL,
  `alamatPengirim` varchar(128) NOT NULL,
  `date` varchar(128) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addmessage`
--

INSERT INTO `addmessage` (`id`, `namaPengirim`, `tulisanPengirim`, `alamatPengirim`, `date`, `user_id`) VALUES
(1, 'Leonardus Wiliem Adikusumo', 'Oke', 'Jagoan7', '1970-01-01 01:00:00', 6),
(2, 'Jagoan7', 'Oke', 'Timur', '1970-01-01 01:00:00', 6),
(3, 'Andy', 'Selamat', 'Jakarta', '1970-01-01 01:00:00', 8),
(4, 'abcd', 'aaaaaaa', 'jakarta', '1970-01-01 01:00:00', 10);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(6, 'Leonardus Wiliem Adikusumo', 'spektaxiia3@gmail.com', '$2y$10$X8hiDjj4l4V/ambHQJ9HZutM3ZSecXWJ8SH1M3NkodsZtcKJr2hVe', 2, 1, 1627574383),
(7, 'ha', 'andy@gmail.com', '$2y$10$.HkL/ZEXUVpR.bu3x1s/i.6O49yeudF/PzM1LMecURAzx2m5N31My', 2, 1, 1627575062),
(8, 'Hihi', 'Anddy@gmail.com', '$2y$10$kijNN79RtOkByA2FcyRE2OVB6aXjC0smDR9MK7d7gDHUz/5QRxShy', 2, 1, 1627575495),
(9, 'Andi', 'andi@gmail.com', '$2y$10$8vLA6.tvpp/R.Qdt2tC2Wew8MoM9wTqPmaJw5o7t6bZFCKefIJo56', 2, 1, 1627587348),
(10, 'abcd', 'abcd@gmail.com', '$2y$10$NWT8duZ/GT1URbPfl7jhWOuECsKADDF/IvQntH5ZjtrMS/H3Ac6te', 2, 1, 1627617551);

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(1, 'spektaxiia3@gmail.com', 'EH47u2/5St38fPO5utgqLTYAPhQuTw40ZMydFfn0Nuk=', 1627571931),
(2, 'spektaxiia3@gmail.com', 'PMeJJAEf5XkSev3WK8drMVHhkdCIRWYxquECIWQWA6E=', 1627572045),
(3, 'spektaxiia3@gmail.com', 'PsulKe+jZWFCxU7hwIElSrWjfhAHver7Ubp6tX3pkaA=', 1627572177),
(4, 'spektaxiia3@gmail.com', 'LlXImdjhX+2j9zVz9UPDRpqtV9APsuyfz3dyuPBKktk=', 1627572210),
(5, 'spektaxiia3@gmail.com', 'MPUfIf2ft73XUJRGA03FcuysAC7/4BBxd/pHYo6enng=', 1627572532),
(6, 'spektaxiia3@gmail.com', 'IjcdbaUkNFoLPARtIP6k/dx3P9XejjsMex691w6NGXs=', 1627573154),
(7, 'anddy@gmail.com', 'V14RWbQCYOmaf+3Uw7PNPbMRJ7XslfjxXz20pvrafCA=', 1627575601);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addmessage`
--
ALTER TABLE `addmessage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addmessage`
--
ALTER TABLE `addmessage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
