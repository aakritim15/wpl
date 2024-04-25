-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2024 at 05:09 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `ID` int(11) NOT NULL,
  `Title` varchar(100) DEFAULT NULL,
  `Director` varchar(100) DEFAULT NULL,
  `Genre` varchar(100) DEFAULT NULL,
  `Release_Year` year(4) DEFAULT NULL,
  `Rating` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`ID`, `Title`, `Director`, `Genre`, `Release_Year`, `Rating`) VALUES
(2, 'Movie 1', 'Minav', 'Comedy', '2004', 5),
(3, 'The Matrix', 'Minav', 'Action', '1999', 4),
(4, 'The Lord of the Rings: The Fellowship of the Ring', 'Peter Jackson', 'Fantasy', '2001', 5),
(5, 'The Shawshank Redemption', 'Frank Darabont', 'Drama', '1994', 5),
(6, 'Inception', 'Christopher Nolan', 'Sci-Fi', '2010', 5),
(7, 'Forrest Gump', 'Robert Zemeckis', 'Drama', '1994', 4),
(8, 'Fight Club', 'David Fincher', 'Drama', '1999', 5),
(9, 'The Dark Knight', 'Christopher Nolan', 'Action', '2008', 5),
(10, 'Pulp Fiction', 'Quentin Tarantino', 'Crime', '1994', 4),
(11, 'The Godfather', 'Francis Ford Coppola', 'Crime', '1972', 5),
(12, 'Goodfellas', 'Martin Scorsese', 'Crime', '1990', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
