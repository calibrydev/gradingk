-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2024 at 06:30 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tester`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'Admin', 'karani@gmail.com', '121212');

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE `admission` (
  `id` int(10) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`id`, `user_id`, `username`) VALUES
(32, 'MC242301', 'Mark'),
(33, 'MC242302', 'Mark'),
(34, 'MC242303', 'Faith Munyiri '),
(35, 'MC242304', 'Michael'),
(36, 'MC242305', 'Faith'),
(37, 'MC242306', 'Mark');

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` int(20) NOT NULL,
  `unitname` varchar(20) NOT NULL,
  `teacher` varchar(20) NOT NULL,
  `satelite` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `tid` varchar(10) NOT NULL,
  `credithours` int(10) NOT NULL,
  `createdat` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `updatedat` int(6) NOT NULL,
  `unitcode` varchar(20) NOT NULL,
  `department` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL,
  `sem` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `unitname`, `teacher`, `satelite`, `date`, `tid`, `credithours`, `createdat`, `updatedat`, `unitcode`, `department`, `level`, `sem`, `email`) VALUES
(9, 'Bibiology', 'markas kareiku', 'Nairobi', '2024-02-19', '123l', 2, '2024-02-20 22:48:34.609195', 0, '', '', '', '', ''),
(11, 'Bibiology', 'markas kareiku', 'Nairobi', '2024-02-19', '123l', 2, '2024-02-20 22:48:43.826690', 0, '', '', '', '', ''),
(12, 'hermaneutics', 'markas kareiku', 'Nairobi', '2024-02-20', '123k', 2, '2024-02-20 22:49:10.483567', 0, '', '', '', '', ''),
(13, 'soteriology', 'kariku maina', 'kirigiti', '2024-02-22', '123m', 2, '2024-02-20 22:48:58.044191', 0, '', '', '', '', ''),
(14, 'Prayer Principles', 'karunu kimeu', 'kirigiti', '2024-02-23', '123l', 2, '2024-02-20 22:49:17.338123', 0, '', '', '', '', ''),
(15, 'Gospels', 'mwangi nelson', 'kirigiti', '2024-02-15', '123j', 2, '2024-02-20 22:48:51.379546', 0, '', '', '', '', ''),
(16, 'calculus2', 'maina kamau', 'kirigiti', '2024-02-22', '123l', 0, '2024-02-21 00:47:44.447481', 0, '', '', '', '', ''),
(17, 'Faith', 'karunu kimeu', 'Nairobi', '2024-02-29', '123j', 2, '2024-02-21 10:40:44.852515', 0, 'BCE', 'Bible', 'Diploma', '1', 'kimeu@gmail.com'),
(18, 'Prayer proper', 'kariku maina', 'kirigiti', '2024-02-23', '123l', 2, '2024-02-21 13:14:29.211127', 0, 'PP1', 'Bible', 'Diploma', '1', 'Calibrymark@gmail.co');

-- --------------------------------------------------------

--
-- Table structure for table `enrolled`
--

CREATE TABLE `enrolled` (
  `id` int(10) NOT NULL,
  `adm` varchar(10) NOT NULL,
  `unitname` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'pending',
  `teacher` varchar(20) NOT NULL,
  `unitcode` varchar(20) NOT NULL,
  `tid` varchar(20) NOT NULL,
  `satelite` varchar(10) NOT NULL,
  `hours` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enrolled`
--

INSERT INTO `enrolled` (`id`, `adm`, `unitname`, `status`, `teacher`, `unitcode`, `tid`, `satelite`, `hours`) VALUES
(169, 'MC243300', 'Bibiology', 'pending', 'markas kareiku', '', '', '', 0),
(170, 'MC243304', 'Bibiology', 'pending', 'markas kareiku', '', '', '', 0),
(171, 'MC243305', 'Bibiology', 'pending', 'markas kareiku', '', '', '', 0),
(172, 'MC243306', 'Bibiology', 'pending', 'markas kareiku', '', '', '', 0),
(173, 'MC243300', 'hermaneutics', 'pending', 'markas kareiku', '', '', '', 0),
(174, 'MC243304', 'hermaneutics', 'pending', 'markas kareiku', '', '', '', 0),
(175, 'MC243305', 'hermaneutics', 'pending', 'markas kareiku', '', '', '', 0),
(176, 'MC243306', 'hermaneutics', 'pending', 'markas kareiku', '', '', '', 0),
(177, 'MC243300', 'Faith', 'pending', 'karunu kimeu', '', '', '', 0),
(178, 'MC243304', 'Faith', 'pending', 'karunu kimeu', '', '', '', 0),
(179, 'MC243305', 'Faith', 'pending', 'karunu kimeu', '', '', '', 0),
(180, 'MC243306', 'Faith', 'pending', 'karunu kimeu', '', '', '', 0),
(181, 'MC243301', 'Prayer Principles', 'pending', 'karunu kimeu', '', '', '', 0),
(182, 'MC243302', 'Prayer Principles', 'pending', 'karunu kimeu', '', '', '', 0),
(183, 'MC243303', 'Prayer Principles', 'pending', 'karunu kimeu', '', '', '', 0),
(184, 'MC243307', 'Prayer Principles', 'pending', 'karunu kimeu', '', '', '', 0),
(185, 'MC243313', 'Prayer Principles', 'pending', 'karunu kimeu', '', '', '', 0),
(186, 'MC243301', 'soteriology', 'pending', 'kariku maina', '', '', '', 0),
(187, 'MC243302', 'soteriology', 'pending', 'kariku maina', '', '', '', 0),
(188, 'MC243303', 'soteriology', 'pending', 'kariku maina', '', '', '', 0),
(189, 'MC243307', 'soteriology', 'pending', 'kariku maina', '', '', '', 0),
(190, 'MC243313', 'soteriology', 'pending', 'kariku maina', '', '', '', 0),
(191, 'MC243301', 'Gospels', 'pending', 'mwangi nelson', '', '', '', 0),
(192, 'MC243302', 'Gospels', 'pending', 'mwangi nelson', '', '', '', 0),
(193, 'MC243303', 'Gospels', 'pending', 'mwangi nelson', '', '', '', 0),
(194, 'MC243307', 'Gospels', 'pending', 'mwangi nelson', '', '', '', 0),
(195, 'MC243313', 'Gospels', 'pending', 'mwangi nelson', '', '', '', 0),
(196, 'MC243308', 'Prayer Principles', 'pending', 'karunu kimeu', '', '', '', 0),
(197, 'MC243309', 'Prayer Principles', 'pending', 'karunu kimeu', '', '', '', 0),
(198, 'MC243310', 'hermaneutics', 'pending', 'markas kareiku', '', '', '', 0),
(199, 'MC243311', 'hermaneutics', 'pending', 'markas kareiku', '', '', '', 0),
(200, 'MC243312', 'hermaneutics', 'pending', 'markas kareiku', '', '', '', 0),
(201, 'MC243300', 'Bibiology', 'pending', 'markas kareiku', '', '', '', 0),
(202, 'MC243304', 'Bibiology', 'pending', 'markas kareiku', '', '', '', 0),
(203, 'MC243305', 'Bibiology', 'pending', 'markas kareiku', '', '', '', 0),
(204, 'MC243306', 'Bibiology', 'pending', 'markas kareiku', '', '', '', 0),
(205, 'MC243301', 'Prayer Principles', 'pending', 'karunu kimeu', '', '', '', 0),
(206, 'MC243302', 'Prayer Principles', 'pending', 'karunu kimeu', '', '', '', 0),
(207, 'MC243303', 'Prayer Principles', 'pending', 'karunu kimeu', '', '', '', 0),
(208, 'MC243307', 'Prayer Principles', 'pending', 'karunu kimeu', '', '', '', 0),
(209, 'MC243313', 'Prayer Principles', 'pending', 'karunu kimeu', '', '', '', 0),
(210, 'MC243308', 'Gospels', 'pending', 'mwangi nelson', '', '', '', 0),
(211, 'MC243309', 'Gospels', 'pending', 'mwangi nelson', '', '', '', 0),
(212, 'MC243301', 'calculus2', 'pending', 'maina kamau', '', '', '', 0),
(213, 'MC243302', 'calculus2', 'pending', 'maina kamau', '', '', '', 0),
(214, 'MC243303', 'calculus2', 'pending', 'maina kamau', '', '', '', 0),
(215, 'MC243307', 'calculus2', 'pending', 'maina kamau', '', '', '', 0),
(216, 'MC243313', 'calculus2', 'pending', 'maina kamau', '', '', '', 0),
(217, 'MC243301', 'calculus2', 'pending', 'maina kamau', '', '', '', 0),
(218, 'MC243302', 'calculus2', 'pending', 'maina kamau', '', '', '', 0),
(219, 'MC243303', 'calculus2', 'pending', 'maina kamau', '', '', '', 0),
(220, 'MC243307', 'calculus2', 'pending', 'maina kamau', '', '', '', 0),
(221, 'MC243313', 'calculus2', 'pending', 'maina kamau', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `enrollment`
--

CREATE TABLE `enrollment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `unitcode` varchar(255) NOT NULL,
  `adm` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `id` int(20) UNSIGNED NOT NULL,
  `adm` varchar(255) NOT NULL,
  `unitcode` varchar(255) NOT NULL,
  `mark` int(11) NOT NULL,
  `grade` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gradess`
--

CREATE TABLE `gradess` (
  `id` int(20) NOT NULL,
  `adm` varchar(20) NOT NULL,
  `unit` varchar(20) NOT NULL,
  `mark` varchar(20) NOT NULL,
  `grade` varchar(20) NOT NULL,
  `weight` float NOT NULL,
  `credithours` int(10) NOT NULL,
  `qpoints` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gradess`
--

INSERT INTO `gradess` (`id`, `adm`, `unit`, `mark`, `grade`, `weight`, `credithours`, `qpoints`) VALUES
(21, 'MC243300', 'hermaneutics', '69', 'C', 2, 2, 4),
(22, 'MC243300', 'Bibiology', '93', 'A-', 3.7, 2, 7),
(23, 'MC243300', 'Faith', '66', 'C', 2, 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `studentdetails`
--

CREATE TABLE `studentdetails` (
  `adm` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `satelite` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `semester` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentdetails`
--

INSERT INTO `studentdetails` (`adm`, `email`, `password`, `name`, `address`, `phone`, `satelite`, `level`, `semester`) VALUES
('MC243300', 'kamau@gmail.com', '121212', 'Mwangi Brian Kamau', 'Kimbo', 759598543, 'Nairobi', 'Diploma', 6),
('MC243301', 'njoki@gmail.com', '121212', 'Cecilia Njoki', 'Kimbo', 522524, 'kirigiti', 'Diploma', 6),
('MC243302', 'omosh@gmail.com', '121212', 'Omondi Dennis  ', 'kakamega', 12311, 'kirigiti', 'Diploma', 6),
('MC243303', 'osher@gmail.com', '121212', 'Osher wairimu', '12311441', 123111110, 'kirigiti', 'Diploma', 6),
('MC243304', 'frank@gmail.com', '$2y$10$JiDzX/4qEoggjtTQeIJ/2Oa54fXKg1ybDBLE7ircGoYFXF3M3Fn06', 'frank juma', 'kisumu', 522524, 'Nairobi', 'Diploma', 6),
('MC243305', 'njeri@gmail.com', '$2y$10$USqtpMQpfPKOcEQrbnvv2unT7MHD/sZqY2hI0Xcq1rITla3MisQ4a', 'eunice njeri', 'ruiru', 522524, 'Nairobi', 'Diploma', 6),
('MC243306', 'kipkoech@gmail.com', '$2y$10$UuNXiIr18aAQE0gwTfwBUeUeusWJ.aXs3J45WJuDr/KMjHFwuosbq', 'biden donald kipkoech', 'eldoret', 12311, 'Nairobi', 'Diploma', 6),
('MC243307', 'donald@gmail.com', '$2y$10$.ldylTi8mOpOYFM3opdzLeZHnvYY8fqIMme65496vWVK4kW758Ii.', 'donald trump', 'usa', 12311, 'kirigiti', 'Diploma', 6),
('MC243308', 'tata@gmail.com', '$2y$10$W.kwpYjM.PRev4fpCZdECOZb.EedYTenLkxxuz1xKB2nsVnXbFHs6', 'celine tata', '1313139', 12311, 'kirigiti', 'certificate', 6),
('MC243309', 'thoita@gmail.com', '$2y$10$730Co9uknUAPyU23vF8q8uBr3KEJKAh7BjqRWpI1pWTbWGsLtVadS', 'james thoita', 'embu', 721560589, 'kirigiti', 'certificate', 6),
('MC243310', 'otien@gmail.com', '121212', 'eugene otieno', 'ruiru', 12311, 'Nairobi', 'certificate', 6),
('MC243311', 'mbuga@gmail.com', '121212', 'onesmus mbuga', '1313139', 12311, 'Nairobi', 'certificate', 6),
('MC243312', 'neka@gmail.com', '121212', 'njomu neka', '12311441', 12311, 'Nairobi', 'certificate', 6),
('MC243313', 'orange@gmail.com', '121212', 'kimani orange', '12121', 12311, 'kirigiti', 'Diploma', 6),
('MC243314', 'njogu@gmail.com', '121212', 'njogu James Kamau', 'Kimbo', 721560589, 'Nairobi', 'Diploma', 1);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(10) NOT NULL,
  `tid` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `tid`, `name`, `email`) VALUES
(1, '1212f', 'MarkasB kareiku', 'Calibrymar');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(10) NOT NULL,
  `tid` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `phone` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `tid`, `name`, `email`, `password`, `phone`) VALUES
(1, '1212f', 'markas kareiku', 'kareiku@gmail.com', '121212', 7214557),
(2, '123j', 'michael ndun\'gu', 'ndungu@gmail.com', '121212', 72145543),
(3, '123k', 'kariku maina', 'maina@gmail.com', '121212', 72333659),
(4, '123l', 'mwangi nelson', 'nelson@gmail.com', '121212', 72145434),
(6, '123l', 'karunu kimeu', 'Calibrymark@gmail.co', '121212', 721444449),
(8, '123l', 'Daniel Mwaura', 'Mwaura@gmail.com', '121212', 759598543),
(10, '123m', 'maina kamau', 'kamau@gmail.com', '121212', 72112874);

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `unitcode` varchar(255) NOT NULL,
  `unitname` varchar(255) NOT NULL,
  `credithours` int(11) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `unitss`
--

CREATE TABLE `unitss` (
  `unitcode` varchar(20) NOT NULL,
  `unitname` varchar(20) NOT NULL,
  `credithours` int(20) NOT NULL,
  `level` varchar(20) NOT NULL,
  `year` int(20) NOT NULL,
  `sem` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `unitss`
--

INSERT INTO `unitss` (`unitcode`, `unitname`, `credithours`, `level`, `year`, `sem`) VALUES
('BCO', 'Vision', 2, 'Diploma', 2, 1),
('BCC', 'Distributed Computin', 2, 'Diploma', 2, 2),
('BDA', 'calculus2', 2, 'Diploma', 2, 1),
('BDA', 'programming', 2, 'Diploma', 1, 2),
('BCP', 'calculus1', 2, 'Diploma', 1, 1),
('BDA', 'programming1', 2, 'Diploma', 2, 2),
('BCD', 'literature', 2, 'Diploma', 2, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enrolled`
--
ALTER TABLE `enrolled`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enrollment`
--
ALTER TABLE `enrollment`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `enrollment_unitcode_unique` (`unitcode`),
  ADD UNIQUE KEY `enrollment_adm_unique` (`adm`);

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `grades_adm_unique` (`adm`),
  ADD UNIQUE KEY `grades_unitcode_unique` (`unitcode`);

--
-- Indexes for table `gradess`
--
ALTER TABLE `gradess`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentdetails`
--
ALTER TABLE `studentdetails`
  ADD PRIMARY KEY (`adm`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`unitcode`),
  ADD KEY `units_unitname_foreign` (`unitname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admission`
--
ALTER TABLE `admission`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `enrolled`
--
ALTER TABLE `enrolled`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=222;

--
-- AUTO_INCREMENT for table `enrollment`
--
ALTER TABLE `enrollment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gradess`
--
ALTER TABLE `gradess`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `enrollment`
--
ALTER TABLE `enrollment`
  ADD CONSTRAINT `enrollment_adm_foreign` FOREIGN KEY (`adm`) REFERENCES `studentdetails` (`adm`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `enrollment_unitcode_foreign` FOREIGN KEY (`unitcode`) REFERENCES `studentdetails` (`adm`) ON UPDATE NO ACTION;

--
-- Constraints for table `grades`
--
ALTER TABLE `grades`
  ADD CONSTRAINT `grades_adm_foreign` FOREIGN KEY (`adm`) REFERENCES `studentdetails` (`adm`);

--
-- Constraints for table `units`
--
ALTER TABLE `units`
  ADD CONSTRAINT `units_unitname_foreign` FOREIGN KEY (`unitname`) REFERENCES `enrollment` (`unitcode`) ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
