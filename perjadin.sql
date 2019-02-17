-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2019 at 03:33 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perjadin`
--

-- --------------------------------------------------------

--
-- Table structure for table `rekap`
--

CREATE TABLE `rekap` (
  `id` int(11) NOT NULL,
  `no_srt_tgs` varchar(35) DEFAULT NULL,
  `tgl_srt_tgs` date DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `kgtn_perjadin` text,
  `tgl_berangkat` date DEFAULT NULL,
  `tgl_pulang` date DEFAULT NULL,
  `no_spd` varchar(35) DEFAULT NULL,
  `tgl_spd` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rekap`
--

INSERT INTO `rekap` (`id`, `no_srt_tgs`, `tgl_srt_tgs`, `nama`, `kgtn_perjadin`, `tgl_berangkat`, `tgl_pulang`, `no_spd`, `tgl_spd`) VALUES
(1, '188/TU.00/12/2017/SBPJP', '2018-12-27', 'STA.Munawar', 'Rapat', '2018-01-01', '2018-01-09', 'SPD/001/SBPJP/I/2018', '2018-01-01'),
(3, '188/TU.00/12/2017/SBPJP', '2018-12-27', 'Ahmad Lutfi ', 'Rapat', '2018-01-01', '2018-01-09', 'SPD/002/SBPJP/I/2018', '2018-01-01'),
(4, '189/TU.00/12/2017/SBPJP', '2018-12-27', 'Herman', 'Ke Pustekdata Jakarta', '2018-01-01', '2018-01-09', 'SPD/004/SBPJP/I/2018', '2018-01-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rekap`
--
ALTER TABLE `rekap`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rekap`
--
ALTER TABLE `rekap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
