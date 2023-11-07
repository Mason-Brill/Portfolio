-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: db:3306
-- Generation Time: Nov 07, 2023 at 07:33 PM
-- Server version: 8.1.0
-- PHP Version: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lamp_docker`
--

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int NOT NULL,
  `skills` text NOT NULL,
  `description` text NOT NULL,
  `image` int NOT NULL,
  `title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `skills`, `description`, `image`, `title`) VALUES
(1, '-HTML\r\n-CSS\r\n-Python\r\n-Flask\r\n-MySQL\r\n-JavaScript\r\n', 'My first real web application I ever developed was for the University of Tampa, with a team of three other individuals. We were tasked with created a web application that would allow students to reserve a new room on campus called the \"Makerspace\". It was a room for computer science majors that wanted to utilize certain hardware for developing particular projects. Our team created this over the course of a semester and at the end had a fully functioning finished product.', 1, 'Makerspace Web Application'),
(2, '-HTML\r\n-CSS\r\n-JavaScript\r\n-React\r\n-MongoDB\r\n-Express\r\n-Node\r\n-Google API\'s', 'This project was a fun one. It is essentially a Geo-guesser for Tampa Florida. It displays a picture that I took somewhere in Tampa, and then you would be shown the Google maps API and you would need to drag the marker to the location of the picture. It would then tell you how close you were within three decimal places of a mile using an appropriate distance formula.', 2, 'Pin The Bay'),
(3, '-WordPress\r\n-PHP\r\n-HTML\r\n-CSS\r\n-JavaScript\r\n-SEO\r\n-Web Hosting', 'Over the summer of 2023, I had an internship working at a pilates and physical therapy company that needed some support for their website. It was hosted on Go-Daddy, and managed using WordPress. The company was mainly looking for some support on how they could give their website a more updated look, while improving their SEO.', 3, 'EmpowerPT.com'),
(4, '-Linux\r\n-Apache\r\n-MySQL\r\n-PHP\r\n-HTML\r\n-CSS\r\n-JavaScript', 'Of course I cannot forget to mention the website you are currently on! This portfolio website was developed using the LAMP stack alongside other technologies to help put my work on display.', 4, 'This Website!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
