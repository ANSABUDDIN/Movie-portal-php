-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2022 at 05:54 PM
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
  `genre` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`id`, `title`, `description`, `movie_link`, `download_link`, `trailer_link`, `release_year`, `director_name`, `movie_star`, `country`, `image`, `genre`, `date`) VALUES
(1, 'kgf', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, reprehenderit saepe aut, deserunt eligendi pariatur fugiat harum eum distinctio id asperiores, magnam sequi. Veritatis quia nostrum cum, mollitia quaerat deleniti?', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 2017, 'Joseph Kosinski', 'Jennifer Connelly, Miles Teller, Tom Cruise', 'pakistan', 'assets/images/cardposter-01.jpg', 'Action', '2022-11-05 16:03:06'),
(3, 'pk', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, reprehenderit saepe aut, deserunt eligendi pariatur fugiat harum eum distinctio id asperiores, magnam sequi. Veritatis quia nostrum cum, mollitia quaerat deleniti?', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 2015, 'Joseph Kosinski', 'Jennifer Connelly, Miles Teller, Tom Cruise', 'pakistan', 'assets/images/cardposter-03.webp', 'Action', '2022-11-05 16:03:09'),
(4, 'joker', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, reprehenderit saepe aut, deserunt eligendi pariatur fugiat harum eum distinctio id asperiores, magnam sequi. Veritatis quia nostrum cum, mollitia quaerat deleniti?', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 2015, 'Joseph Kosinski', 'Jennifer Connelly, Miles Teller, Tom Cruise', 'pakistan', 'assets/images/cardposter-04.jpg', 'Action', '2022-11-05 16:03:14'),
(5, 'don', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, reprehenderit saepe aut, deserunt eligendi pariatur fugiat harum eum distinctio id asperiores, magnam sequi. Veritatis quia nostrum cum, mollitia quaerat deleniti?', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 2018, 'Joseph Kosinski', 'Jennifer Connelly, Miles Teller, Tom Cruise', 'pakistan', 'assets/images/cardposter-05.jpg', 'Comedy', '2022-11-05 16:03:29'),
(6, 'kgf', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, reprehenderit saepe aut, deserunt eligendi pariatur fugiat harum eum distinctio id asperiores, magnam sequi. Veritatis quia nostrum cum, mollitia quaerat deleniti?', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 2022, 'Joseph Kosinski', 'Jennifer Connelly, Miles Teller, Tom Cruise', 'pakistan', 'assets/images/cardposter-06.png', 'Comedy', '2022-11-05 16:03:34'),
(11, 'Mirzapur', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, reprehenderit saepe aut, deserunt eligendi pariatur fugiat harum eum distinctio id asperiores, magnam sequi. Veritatis quia nostrum cum, mollitia quaerat deleniti?', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 2022, 'Joseph Kosinski', 'Jennifer Connelly, Miles Teller, Tom Cruise', 'pakistan', 'assets/images/cardposter-07.png', 'Horror', '2022-11-05 16:03:49'),
(15, 'kgf', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, reprehenderit saepe aut, deserunt eligendi pariatur fugiat harum eum distinctio id asperiores, magnam sequi. Veritatis quia nostrum cum, mollitia quaerat deleniti?', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 'https://www.youtube-nocookie.com/embed/WwkZqhpE0E4', 2017, 'Joseph Kosinski', 'Jennifer Connelly, Miles Teller, Tom Cruise', 'pakistan', 'assets/images/cardposter-01.jpg', 'Horror', '2022-11-05 16:03:53'),
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
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
