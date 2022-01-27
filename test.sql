-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2022 at 07:36 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `knjige`
--

CREATE TABLE `knjige` (
  `Sifra` int(11) NOT NULL,
  `Naziv` text NOT NULL,
  `Autor` varchar(30) NOT NULL,
  `Zanr` varchar(15) NOT NULL,
  `Jezik` varchar(15) NOT NULL,
  `Cena` decimal(10,0) NOT NULL,
  `Slike` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `knjige`
--

INSERT INTO `knjige` (`Sifra`, `Naziv`, `Autor`, `Zanr`, `Jezik`, `Cena`, `Slike`) VALUES
(1, 'Rat i mir', 'Lav Nikolajevič Tolstoj', 'klasici', 'srpski', '3600', 'img-knjige/1.jpg'),
(2, 'Braća Karamazovi', 'Fjodor Mihajlovič Dostojevski', 'klasici', 'ruski', '1500', 'img-knjige/2.jpg'),
(3, 'Igra prestola', 'Džordž R. R. Martin', 'fantastika', 'srpski', '2600', 'img-knjige/3.jpg'),
(4, 'Čovek po imenu Uve', 'Frederik Bakman', 'drama', 'srpski', '990', 'img-knjige/4.jpg'),
(5, 'Hari Poter i dvorana tajni', 'Džoan K. Rouling', 'fantastika', 'srpski', '1200', 'img-knjige/5.jpg'),
(6, 'Hari Poter i red feniksa', 'Džoan K. Rouling', 'fantastika', 'srpski', '1200', 'img-knjige/6.jpg'),
(7, 'Hari Poter i ukleto dete', 'Džoan K. Rouling', 'fantastika', 'srpski', '1200', 'img-knjige/7.jpg'),
(8, 'Zli dusi', 'Fjodor Mihajlovič Dostojevski', 'klasici', 'ruski', '1500', 'img-knjige/8.jpg'),
(9, 'Forest Gump', 'Vinston Grum', 'drama', 'srpski', '1250', 'img-knjige/9.jpg'),
(10, 'Velika očekivanja', 'Čarls Dikens', 'klasici', 'engleski', '2560', 'img-knjige/10.jpg'),
(11, 'Romani', 'Franc Kafka', 'klasici', 'srpski', '5600', 'img-knjige/11.jpg'),
(12, 'Orkanski visovi', 'Emili Bronte', 'klasici', 'engleski', '1678', 'img-knjige/12.jpg'),
(13, 'Mansfild Park', 'Džejn Ostin', 'klasici', 'engleski', '1000', 'img-knjige/13.jpg'),
(14, 'Ana Karenjina', 'Lav Nikolajevič Tolstoj', 'klasici', 'ruski', '2600', 'img-knjige/14.jpg'),
(15, 'Oliver Tvist', 'Čarls Dikens', 'klasici', 'engleski', '1250', 'img-knjige/15.jpg'),
(16, 'Cvrčak na ognjištu', 'Čarls Dikens', 'klasici', 'engleski', '990', 'img-knjige/16.jpg'),
(17, 'Hari Poter i vatreni pehar', 'Džoan K. Rouling', 'fantastika', 'engleski', '3600', 'img-knjige/17.jpg'),
(18, 'Hari Poter i relikvije smrti', 'Džoan K. Rouling', 'fantastika', 'engleski', '990', 'img-knjige/18.jpg'),
(19, 'Hari Poter i zatvorenik iz Askabana', 'Džoan K. Rouling', 'fantastika', 'engleski', '3600', 'img-knjige/19.jpg'),
(20, 'Hari Poter i polukrvni princ', 'Džoan K. Rouling', 'fantastika', 'engleski', '1250', 'img-knjige/20.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

CREATE TABLE `korisnici` (
  `id` int(11) NOT NULL,
  `korisnickoime` varchar(25) DEFAULT NULL,
  `sifra` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`id`, `korisnickoime`, `sifra`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `knjige`
--
ALTER TABLE `knjige`
  ADD PRIMARY KEY (`Sifra`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
