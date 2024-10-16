-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2024 at 10:39 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `title` varchar(64) NOT NULL,
  `description` text NOT NULL,
  `technologies` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `date_completed` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `description`, `technologies`, `url`, `date_completed`) VALUES
(10, 'Daft.ie House Price Analysis', 'A detailed analysis of house prices in Ireland using data from Daft.ie. The project involves data wrangling, exploratory data analysis (EDA), and regression models to predict house prices.', 'Python, Pandas, NumPy, Matplotlib, Seaborn, Scikit-learn, statsmodels', 'https://github.com/fernandes-s/Daft_ie', '2024-10-01'),
(11, 'Insurance Cost Analysis', 'An analysis of insurance costs using regression models. The project focuses on identifying key attributes affecting insurance charges through exploratory data analysis (EDA) and predictive modeling.', 'Python, Pandas, NumPy, Matplotlib, Seaborn, Linear Regression, Ridge Regression', 'https://github.com/fernandes-s/insurance_cost_analysis', '2024-09-15'),
(12, 'Craving It Database System', 'Designed an SQL database for managing inventory and sales. Optimized data workflows with stored procedures and views to streamline operations and improve data integrity.', 'MS SQL Server, SQL, Database Design', 'https://github.com/fernandes-s/Craving-IT-DB', '2024-07-15');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `testimonial` text NOT NULL,
  `date_submitted` timestamp NOT NULL DEFAULT current_timestamp(),
  `image_path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `testimonial`, `date_submitted`, `image_path`) VALUES
(1, 'Daniel Fernandes', 'Great worker!!', '2024-10-16 17:23:47', NULL),
(2, 'Ciaran Kelly', 'TEST, BUT IF THIS WORKS I AM FODA!', '2024-10-16 17:31:02', 'uploads/default.jpg'),
(3, 'Ciaran Kelly', 'IF THIS WORKS I AM FODA!', '2024-10-16 17:32:29', 'uploads/1675172046472.jpg'),
(4, 'Representante de Turma', 'teste', '2024-10-16 17:35:28', 'uploads/default.jpg'),
(5, 'Representante de Turma', 'ewibforifqnhewpidoregnpwforenwponorefjwnpgfbnrepf\r\nermgjrepo´gfmrep´mg\r\nrgknre~pf´re,\r\n\r\nt\r\ngt\r\nhtyjmj\r\ntyty\r\nhrt\r\nhjrty\r\nh\r\njmyh', '2024-10-16 17:45:24', 'uploads/default.jpg'),
(6, 'so coool', 'wow\r\nwow\r\nwow\r\nwow\r\nwow\r\nwow\r\nwowwow\r\nwow\r\nwow\r\nwow\r\nwow\r\nwow\r\nwowwow\r\nwow\r\nwow\r\nwow\r\nwow\r\nwow\r\nwowwow\r\nwow\r\nwow\r\nwow\r\nwow\r\nwow\r\nwowwow\r\nwow\r\nwow\r\nwow\r\nwow\r\nwow\r\nwowwow\r\nwow\r\nwow\r\nwow\r\nwow\r\nwow\r\nwowwow\r\nwow\r\nwow\r\nwow\r\nwow\r\nwow\r\nwowwow\r\nwow\r\nwow\r\nwow\r\nwow\r\nwow\r\nwowwow\r\nwow\r\nwow\r\nwow\r\nwow\r\nwow\r\nwowwow\r\nwow\r\nwow\r\nwow\r\nwow\r\nwow\r\nwowwow\r\nwow\r\nwow\r\nwow\r\nwow\r\nwow\r\nwowwow\r\nwow\r\nwow\r\nwow\r\nwow\r\nwow\r\nwowwow\r\nwow\r\nwow\r\nwow\r\nwow\r\nwow\r\nwowwow\r\nwow\r\nwow\r\nwow\r\nwow\r\nwow\r\nwowwow\r\nwow\r\nwow\r\nwow\r\nwow\r\nwow\r\nwowwow\r\nwow\r\nwow\r\nwow\r\nwow\r\nwow\r\nwow', '2024-10-16 19:43:28', 'uploads/20230813_162649.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
