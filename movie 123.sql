-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2022 at 06:22 PM
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
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `link` varchar(100) NOT NULL,
  `category` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `title`, `image`, `link`, `category`, `status`, `date`) VALUES
(1, 'tv ads', 'assets/images/ads/ads-2.gif', 'abc', 'main-banner', 0, '2022-10-25 01:49:04'),
(2, 'tv ads', 'assets/images/ads/ads-1.gif', 'abc', 'main-banner', 0, '2022-10-25 01:49:12'),
(3, 'tv ads', 'assets/images/ads/ads-3.gif', 'abc', 'main-banner', 0, '2022-10-25 01:49:18'),
(5, 'salar', 'assets/images/ads/sidebanner-1.gif', '123', 'sidebanner', 0, '2022-10-25 01:53:12'),
(6, 'salar', 'assets/images/ads/sidebanner-2.gif', '123', 'sidebanner', 0, '2022-10-25 01:54:15'),
(9, 'salar', 'assets/images/ads/sidebanner-1.gif', '123', 'sidebanner', 0, '2022-10-25 02:25:33'),
(10, 'salar', 'assets/images/ads/sidebanner-2.gif', '123', 'sidebanner', 0, '2022-10-25 02:25:39'),
(15, 'salar', 'assets/images/ads/sidebanner-1.gif', '123', 'sidebanner', 0, '2022-10-25 02:25:33');

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
(3, 'abcd', 'assets/images/banner-3.png', '2022-10-22 15:29:55'),
(4, 'RAEES', 'assets/images/webimages/banner-2.png', '2022-10-25 08:14:18');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `movie-id` int(11) NOT NULL,
  `comments` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `movie-id`, `comments`, `date`) VALUES
(1, 3, 'hello', '2022-10-25 16:08:14'),
(2, 3, 'dfgsdgvbc', '2022-10-25 16:15:11'),
(3, 3, 'hammad', '2022-10-25 16:16:44'),
(4, 3, 'ansab', '2022-10-25 16:17:05');

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
(3, 'pk', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, reprehenderit saepe aut, deserunt eligendi pariatur fugiat harum eum distinctio id asperiores, magnam sequi. Veritatis quia nostrum cum, mollitia quaerat deleniti?', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 2015, 'Joseph Kosinski', 'Jennifer Connelly, Miles Teller, Tom Cruise', 'pakistan', 'assets/images/cardposter-03.webp', 'Series', '2022-10-25 09:38:26'),
(4, 'joker', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, reprehenderit saepe aut, deserunt eligendi pariatur fugiat harum eum distinctio id asperiores, magnam sequi. Veritatis quia nostrum cum, mollitia quaerat deleniti?', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 2015, 'Joseph Kosinski', 'Jennifer Connelly, Miles Teller, Tom Cruise', 'pakistan', 'assets/images/cardposter-04.jpg', 'Series', '2022-10-25 09:38:31'),
(5, 'don', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, reprehenderit saepe aut, deserunt eligendi pariatur fugiat harum eum distinctio id asperiores, magnam sequi. Veritatis quia nostrum cum, mollitia quaerat deleniti?', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 2018, 'Joseph Kosinski', 'Jennifer Connelly, Miles Teller, Tom Cruise', 'pakistan', 'assets/images/cardposter-05.jpg', 'Series', '2022-10-25 09:38:36'),
(6, 'kgf', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, reprehenderit saepe aut, deserunt eligendi pariatur fugiat harum eum distinctio id asperiores, magnam sequi. Veritatis quia nostrum cum, mollitia quaerat deleniti?', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 2022, 'Joseph Kosinski', 'Jennifer Connelly, Miles Teller, Tom Cruise', 'pakistan', 'assets/images/cardposter-06.png', 'series', '2022-10-25 09:42:16'),
(11, 'Mirzapur', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, reprehenderit saepe aut, deserunt eligendi pariatur fugiat harum eum distinctio id asperiores, magnam sequi. Veritatis quia nostrum cum, mollitia quaerat deleniti?', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 2022, 'Joseph Kosinski', 'Jennifer Connelly, Miles Teller, Tom Cruise', 'pakistan', 'assets/images/cardposter-07.png', 'Series', '2022-10-24 14:46:15'),
(15, 'kgf', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, reprehenderit saepe aut, deserunt eligendi pariatur fugiat harum eum distinctio id asperiores, magnam sequi. Veritatis quia nostrum cum, mollitia quaerat deleniti?', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 2017, 'Joseph Kosinski', 'Jennifer Connelly, Miles Teller, Tom Cruise', 'pakistan', 'assets/images/cardposter-01.jpg', 'Movie', '2022-10-24 15:17:27'),
(16, 'pk', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, reprehenderit saepe aut, deserunt eligendi pariatur fugiat harum eum distinctio id asperiores, magnam sequi. Veritatis quia nostrum cum, mollitia quaerat deleniti?', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 2015, 'Joseph Kosinski', 'Jennifer Connelly, Miles Teller, Tom Cruise', 'pakistan', 'assets/images/cardposter-03.webp', 'Movie', '2022-10-25 09:38:26'),
(17, 'joker', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, reprehenderit saepe aut, deserunt eligendi pariatur fugiat harum eum distinctio id asperiores, magnam sequi. Veritatis quia nostrum cum, mollitia quaerat deleniti?', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 2015, 'Joseph Kosinski', 'Jennifer Connelly, Miles Teller, Tom Cruise', 'pakistan', 'assets/images/cardposter-04.jpg', 'Movie', '2022-10-25 09:38:31'),
(18, 'don', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, reprehenderit saepe aut, deserunt eligendi pariatur fugiat harum eum distinctio id asperiores, magnam sequi. Veritatis quia nostrum cum, mollitia quaerat deleniti?', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 2018, 'Joseph Kosinski', 'Jennifer Connelly, Miles Teller, Tom Cruise', 'pakistan', 'assets/images/cardposter-05.jpg', 'Movie', '2022-10-25 09:38:36'),
(19, 'kgf', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, reprehenderit saepe aut, deserunt eligendi pariatur fugiat harum eum distinctio id asperiores, magnam sequi. Veritatis quia nostrum cum, mollitia quaerat deleniti?', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 2022, 'Joseph Kosinski', 'Jennifer Connelly, Miles Teller, Tom Cruise', 'pakistan', 'assets/images/cardposter-06.png', 'Movie', '2022-10-25 09:42:16'),
(20, 'Mirzapur', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, reprehenderit saepe aut, deserunt eligendi pariatur fugiat harum eum distinctio id asperiores, magnam sequi. Veritatis quia nostrum cum, mollitia quaerat deleniti?', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 2022, 'Joseph Kosinski', 'Jennifer Connelly, Miles Teller, Tom Cruise', 'pakistan', 'assets/images/cardposter-07.png', 'Movie', '2022-10-24 14:46:15'),
(21, 'kgf', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, reprehenderit saepe aut, deserunt eligendi pariatur fugiat harum eum distinctio id asperiores, magnam sequi. Veritatis quia nostrum cum, mollitia quaerat deleniti?', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 2017, 'Joseph Kosinski', 'Jennifer Connelly, Miles Teller, Tom Cruise', 'pakistan', 'assets/images/cardposter-01.jpg', 'Drama', '2022-10-24 15:17:27'),
(22, 'pk', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, reprehenderit saepe aut, deserunt eligendi pariatur fugiat harum eum distinctio id asperiores, magnam sequi. Veritatis quia nostrum cum, mollitia quaerat deleniti?', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 2015, 'Joseph Kosinski', 'Jennifer Connelly, Miles Teller, Tom Cruise', 'pakistan', 'assets/images/cardposter-03.webp', 'Drama', '2022-10-25 09:38:26'),
(23, 'joker', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, reprehenderit saepe aut, deserunt eligendi pariatur fugiat harum eum distinctio id asperiores, magnam sequi. Veritatis quia nostrum cum, mollitia quaerat deleniti?', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 2015, 'Joseph Kosinski', 'Jennifer Connelly, Miles Teller, Tom Cruise', 'pakistan', 'assets/images/cardposter-04.jpg', 'Drama', '2022-10-25 09:38:31'),
(24, 'don', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, reprehenderit saepe aut, deserunt eligendi pariatur fugiat harum eum distinctio id asperiores, magnam sequi. Veritatis quia nostrum cum, mollitia quaerat deleniti?', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 2018, 'Joseph Kosinski', 'Jennifer Connelly, Miles Teller, Tom Cruise', 'pakistan', 'assets/images/cardposter-05.jpg', 'Drama', '2022-10-25 09:38:36'),
(25, 'kgf', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, reprehenderit saepe aut, deserunt eligendi pariatur fugiat harum eum distinctio id asperiores, magnam sequi. Veritatis quia nostrum cum, mollitia quaerat deleniti?', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 2022, 'Joseph Kosinski', 'Jennifer Connelly, Miles Teller, Tom Cruise', 'pakistan', 'assets/images/cardposter-06.png', 'Drama', '2022-10-25 09:42:16'),
(27, 'kgf', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, reprehenderit saepe aut, deserunt eligendi pariatur fugiat harum eum distinctio id asperiores, magnam sequi. Veritatis quia nostrum cum, mollitia quaerat deleniti?', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 2017, 'Joseph Kosinski', 'Jennifer Connelly, Miles Teller, Tom Cruise', 'pakistan', 'assets/images/cardposter-01.jpg', 'Drama', '2022-10-24 15:17:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
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
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
