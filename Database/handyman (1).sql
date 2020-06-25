-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2017 at 09:43 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `handyman`
--

-- --------------------------------------------------------

--
-- Table structure for table `carpenter`
--

CREATE TABLE `carpenter` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `cost` int(11) NOT NULL,
  `rating` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carpenter`
--

INSERT INTO `carpenter` (`id`, `name`, `cost`, `rating`) VALUES
(1, 'Sarthak Joshi', 580, 3.4),
(2, 'Mehul Roy', 670, 3.9),
(3, 'John D\'Souza', 850, 4.3),
(4, 'Animesh Gaikwad', 400, 3),
(5, 'Parth Sinha', 700, 4),
(6, 'Kailash Das', 300, 2.9),
(7, 'Jayesh Nambiar', 945, 4.8);

-- --------------------------------------------------------

--
-- Table structure for table `computer_technician`
--

CREATE TABLE `computer_technician` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `cost` int(10) NOT NULL,
  `rating` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `computer_technician`
--

INSERT INTO `computer_technician` (`id`, `name`, `cost`, `rating`) VALUES
(1, 'Suhas Shelke', 400, 3.9),
(2, 'Karan Maitra', 600, 4.2),
(3, 'Vicky Malhotra', 800, 4.9),
(4, 'Abdul Khan', 250, 2.6),
(5, 'Jatan Sapru', 300, 3.1),
(6, 'Nilesh Sahu', 450, 4.1),
(7, 'Rajesh Kumar', 350, 3.5);

-- --------------------------------------------------------

--
-- Table structure for table `electrician`
--

CREATE TABLE `electrician` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `cost` int(10) NOT NULL,
  `rating` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `electrician`
--

INSERT INTO `electrician` (`id`, `name`, `cost`, `rating`) VALUES
(1, 'Sardar Quereshi', 250, 3.7),
(2, 'Faizal shaikh', 200, 2.9),
(3, 'Prem kumar', 300, 4),
(4, 'Ratan kumar singh', 325, 4.1),
(5, 'nandan kumar', 275, 3.9),
(6, 'unmesh gupta', 350, 4.3),
(7, 'anish gaitonde', 400, 4.9);

-- --------------------------------------------------------

--
-- Table structure for table `painter`
--

CREATE TABLE `painter` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `cost` int(10) NOT NULL,
  `rating` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `painter`
--

INSERT INTO `painter` (`id`, `name`, `cost`, `rating`) VALUES
(1, 'Jignesh gada', 700, 3.5),
(2, 'Amey kulkarni', 650, 3.2),
(3, 'Mohit nandkarni', 750, 3.8),
(4, 'Rakesh singh', 720, 3.9),
(5, 'Ramesh pawar', 770, 4.7),
(6, 'Raj iyer', 750, 4.6),
(7, 'Azhar shaikh', 630, 2.9);

-- --------------------------------------------------------

--
-- Table structure for table `plumber`
--

CREATE TABLE `plumber` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `cost` int(11) NOT NULL,
  `rating` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plumber`
--

INSERT INTO `plumber` (`id`, `name`, `cost`, `rating`) VALUES
(1, 'Ravindra koli', 200, 3.8),
(2, 'Rohit rahane', 250, 4.4),
(3, 'Bhuvi kumar', 150, 3.3),
(4, 'Mohamad siraj', 175, 3.5),
(5, 'Hiten bhatia', 225, 4),
(6, 'Sahil hira', 250, 4.5),
(7, 'Popatlal mishra', 235, 4.2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `address`, `city`) VALUES
(1, 'Vinay', 'Ambre', 'vinayambre7@gmail.com', '1234', 'Belapur', 'Mumbai'),
(2, 'Rishabh', 'Gajra', 'rgrishigajra@gmail.com', '1234', '!507,2/c,Dreams,Bhandup', 'Mumbai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carpenter`
--
ALTER TABLE `carpenter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `computer_technician`
--
ALTER TABLE `computer_technician`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `electrician`
--
ALTER TABLE `electrician`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `painter`
--
ALTER TABLE `painter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plumber`
--
ALTER TABLE `plumber`
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
-- AUTO_INCREMENT for table `carpenter`
--
ALTER TABLE `carpenter`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `computer_technician`
--
ALTER TABLE `computer_technician`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `electrician`
--
ALTER TABLE `electrician`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `painter`
--
ALTER TABLE `painter`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `plumber`
--
ALTER TABLE `plumber`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
