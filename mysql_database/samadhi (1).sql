-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2021 at 09:01 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `samadhi`
--

-- --------------------------------------------------------

--
-- Table structure for table `child`
--

CREATE TABLE `child` (
  `id` int(11) NOT NULL,
  `initial_name` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `bod` varchar(255) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `child`
--

INSERT INTO `child` (`id`, `initial_name`, `full_name`, `bod`, `gender`, `image`) VALUES
(3, 'akalanka', 'akalanka', '2021-08-04', 'Male', '61195d9dae7573.22713188.png'),
(4, 'vinul', 'thilaka', '2021-08-04', 'Male', '61195dc95d55c3.72829867.png'),
(5, 'sashini', 'wani', '1997-07-16', 'Female', '61195df4e6d426.58329474.png');

-- --------------------------------------------------------

--
-- Table structure for table `donar`
--

CREATE TABLE `donar` (
  `id` int(11) NOT NULL,
  `donar_name` varchar(255) NOT NULL,
  `c_number` int(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donar`
--

INSERT INTO `donar` (`id`, `donar_name`, `c_number`, `address`, `amount`, `date`) VALUES
(2, 'sithum', 714820364, 'kandy', 180000, '2021-08-15 18:04:27'),
(3, 'sashini', 2147483647, 'colombo', 1466565, '2021-08-15 18:33:59');

-- --------------------------------------------------------

--
-- Table structure for table `labor`
--

CREATE TABLE `labor` (
  `id` int(11) NOT NULL,
  `initial_name` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `bod` varchar(255) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `c_number` int(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `post` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `labor`
--

INSERT INTO `labor` (`id`, `initial_name`, `full_name`, `first_name`, `bod`, `gender`, `c_number`, `address`, `post`) VALUES
(2, 'kalan', 'kalaa', 'bhgya', '2018-02-14', 'Female', 773311587, '348/10, Maligathenna,', 'Moonligh'),
(3, 'rajitha', 'madushan', 'madushan', '2019-06-20', 'Male', 714820364, '348/10, Maligathenna,', 'Moonligh');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `initial_name` varchar(255) NOT NULL,
  `bod` varchar(255) NOT NULL,
  `nic` int(12) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `c_number` int(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `post` int(9) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `first_name`, `last_name`, `initial_name`, `bod`, `nic`, `gender`, `c_number`, `address`, `email`, `post`, `image`) VALUES
(1, 'Abhiru', 'Wijesinghe', 'Abhiru Wijesinghe', '2021-08-06', 2147483647, 'on', 714820364, '348/10, Maligathenna,', 'sdad', 0, '61193d67511564.24713653.png'),
(2, 'ananda', 'wije', 'ananada', '2021-08-04', 1944949499, 'on', 16199191, 'asdada', '1adada', 0, '61195ba4850d71.03756874.png'),
(3, 'sashini', 'wanige', 'wanige', '2017-01-02', 16161616, 'on', 773311587, '348/10, Maligathenna,', 'adasdad', 0, '61195fbca2b678.98293127.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `c_number` int(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `first_name`, `last_name`, `c_number`, `address`, `password`) VALUES
(2, 'qwe', 'Abhiru', 'Wijesinghe', 714820364, '348/10, Maligathenna,', '$2y$10$hrRPUcklx1Q4jQ60Ou13CulExXTJvb1PqQ8YxfSDU1sBedEC0V/AO'),
(3, 'sithum', 'sithum', 'bas', 45679, 'asdad', '$2y$10$V13W.RkuypfD3Fa8a8QOeO7DgZjR8xj9J6U4QUyEtuvHWQ.INxTmy'),
(4, 'Vodka', 'Abhiru', 'Wijesinghe', 714820364, '348/10, Maligathenna,', '$2y$10$/RiIYRo324pyKPmHtEYpJOjh4gDp2hXpw3lZwCLdgtlIfZ45x/cea');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `child`
--
ALTER TABLE `child`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donar`
--
ALTER TABLE `donar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `labor`
--
ALTER TABLE `labor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
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
-- AUTO_INCREMENT for table `child`
--
ALTER TABLE `child`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `donar`
--
ALTER TABLE `donar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `labor`
--
ALTER TABLE `labor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
