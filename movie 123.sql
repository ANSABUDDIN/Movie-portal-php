-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2022 at 06:12 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `date`) VALUES
(1, 'admin', 'admin@gmail.com', '123456', '2022-10-22 14:08:07');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `movie-name` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `movie-name`, `image`, `date`) VALUES
(1, 'kgf', 'assets/images/banner-1.png', '2022-10-22 15:29:46'),
(2, 'pk', 'assets/images/banner-2.png', '2022-10-22 15:29:49'),
(3, 'abcd', 'assets/images/banner-3.png', '2022-10-22 15:29:55');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `movie_link` varchar(100) NOT NULL,
  `download_link` varchar(100) NOT NULL,
  `trailer_link` varchar(100) NOT NULL,
  `release_year` int(11) NOT NULL,
  `director_name` varchar(50) NOT NULL,
  `movie_star` varchar(200) NOT NULL,
  `country` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL,
  `category` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`id`, `title`, `description`, `movie_link`, `download_link`, `trailer_link`, `release_year`, `director_name`, `movie_star`, `country`, `image`, `category`, `date`) VALUES
(1, 'kgf', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, reprehenderit saepe aut, deserunt eligendi pariatur fugiat harum eum distinctio id asperiores, magnam sequi. Veritatis quia nostrum cum, mollitia quaerat deleniti?', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 2017, 'Joseph Kosinski', 'Jennifer Connelly, Miles Teller, Tom Cruise', 'pakistan', 'assets/images/cardposter-01.jpg', 'Series', '2022-10-24 15:17:27'),
(3, 'pk', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, reprehenderit saepe aut, deserunt eligendi pariatur fugiat harum eum distinctio id asperiores, magnam sequi. Veritatis quia nostrum cum, mollitia quaerat deleniti?', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 2015, 'Joseph Kosinski', 'Jennifer Connelly, Miles Teller, Tom Cruise', 'pakistan', 'assets/images/cardposter-03.webp', 'Movie', '2022-10-24 15:20:59'),
(4, 'joker', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, reprehenderit saepe aut, deserunt eligendi pariatur fugiat harum eum distinctio id asperiores, magnam sequi. Veritatis quia nostrum cum, mollitia quaerat deleniti?', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 2015, 'Joseph Kosinski', 'Jennifer Connelly, Miles Teller, Tom Cruise', 'pakistan', 'assets/images/cardposter-04.jpg', 'Movie', '2022-10-24 14:45:34'),
(5, 'don', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, reprehenderit saepe aut, deserunt eligendi pariatur fugiat harum eum distinctio id asperiores, magnam sequi. Veritatis quia nostrum cum, mollitia quaerat deleniti?', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 2018, 'Joseph Kosinski', 'Jennifer Connelly, Miles Teller, Tom Cruise', 'pakistan', 'assets/images/cardposter-05.jpg', 'Drama', '2022-10-24 14:45:50'),
(6, 'kgf', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, reprehenderit saepe aut, deserunt eligendi pariatur fugiat harum eum distinctio id asperiores, magnam sequi. Veritatis quia nostrum cum, mollitia quaerat deleniti?', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 2022, 'Joseph Kosinski', 'Jennifer Connelly, Miles Teller, Tom Cruise', 'pakistan', 'assets/images/cardposter-06.png', 'Drama', '2022-10-24 15:31:06'),
(11, 'Mirzapur', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, reprehenderit saepe aut, deserunt eligendi pariatur fugiat harum eum distinctio id asperiores, magnam sequi. Veritatis quia nostrum cum, mollitia quaerat deleniti?', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 2022, 'Joseph Kosinski', 'Jennifer Connelly, Miles Teller, Tom Cruise', 'pakistan', 'assets/images/cardposter-07.png', 'Series', '2022-10-24 14:46:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
