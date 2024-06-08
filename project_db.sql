-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2024 at 05:22 PM
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
-- Database: `project_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_tb`
--

CREATE TABLE `contact_tb` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `contactsubject` varchar(11) DEFAULT NULL,
  `casedescription` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_tb`
--

INSERT INTO `contact_tb` (`contact_id`, `name`, `phone`, `email`, `contactsubject`, `casedescription`) VALUES
(4, 'sss', 2147483647, 'a@gmail.com', '0', 'errrrrrrrrrrrrrrrrrrrrrrrrrrrrrr'),
(5, 'humira', 2147483647, 'aimanimran78@gmail.com', '0', 'i want to buy a product'),
(6, 'aiman', 2147483647, 'aimanimran78@gmail.com', '0', 'ankah,uag,aug'),
(7, 'aiman', 2147483647, 'aimanimran78@gmail.com', '0', 'anjaojoaja');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` varchar(10) NOT NULL,
  `product_code` varchar(3) DEFAULT NULL,
  `product_name` varchar(20) DEFAULT NULL,
  `product_img` varchar(300) NOT NULL,
  `product_type` varchar(50) DEFAULT NULL,
  `manufacturing_number` int(5) DEFAULT NULL,
  `manufacturing_date` varchar(50) DEFAULT NULL,
  `revise` int(2) DEFAULT NULL,
  `remarks` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_code`, `product_name`, `product_img`, `product_type`, `manufacturing_number`, `manufacturing_date`, `revise`, `remarks`) VALUES
('0002401717', 'bre', 'BREAKERS', 'images/pic2.jpg', 'test_product', 240, '2024-05-20', 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla auctor, vestibulum magna sed, convallis ex.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla aucto'),
('abc0003301', 'abc', 'power supply', 'images/pic5.jpg', 'cpri_product', 330, '2024-05-31', 0, 'all test are cleared'),
('cap5000011', 'cap', 'CAPACITORS', 'images/pic4.jpeg', 'test_product', 160, '2024-05-16', 5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla auctor, vestibulum magna sed, convallis ex.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla aucto'),
('con1001101', 'con', 'Electric Contactor', 'images/pic7.jpg', 'cpri_product', 110, '2024-06-03', 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla auctor, vestibulum magna sed, convallis ex.'),
('dpa1001301', 'dpa', 'Distribution Pnel', 'images/pic8.jpg', 'cpri_product', 130, '2024-06-03', 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla auctor, vestibulum magna sed, convallis ex.'),
('fus1002501', 'fus', 'FUSES', 'images/pic3.jpg', 'test_product', 250, '2024-05-30', 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla auctor, vestibulum magna sed, convallis ex.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla aucto'),
('res2002901', 'res', 'RESISTORS', 'images/pic5.jpeg', 'test_product', 290, '2024-05-31', 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla auctor, vestibulum magna sed, convallis ex.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla aucto'),
('sgs1002501', 'sgs', 'Switch Gears', 'images/pic1.jpg', 'test_product', 250, '2024-06-02', 1, 'Lorem ipsum dolor si'),
('sue1003401', 'sue', 'surge protector', 'images/pic6.jpg', 'cpri_product', 340, '2024-06-02', 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla auctor, vestibulum magna sed, convallis ex.'),
('vol2002301', 'vol', 'voltage regulator', 'images/pic9.jpg', 'cpri_product', 230, '2024-06-03', 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla auctor, vestibulum magna sed, convallis ex.');

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `test_id` bigint(20) NOT NULL,
  `product_id` varchar(10) DEFAULT NULL,
  `test_date` varchar(20) DEFAULT NULL,
  `tester_name` varchar(20) DEFAULT NULL,
  `test_revise` int(11) NOT NULL,
  `detailed_remarks` varchar(50) DEFAULT NULL,
  `test_type` varchar(20) DEFAULT NULL,
  `test_subtype` varchar(20) DEFAULT NULL,
  `test_results` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`test_id`, `product_id`, `test_date`, `tester_name`, `test_revise`, `detailed_remarks`, `test_type`, `test_subtype`, `test_results`) VALUES
(1, 'sgs1002501', '20-3-2024', 'john', 1, 'The overall electrical Testing is pass', 'Electrical Testing', 'Insulation Resistanc', 'pass'),
(2, 'sgs1002501', '20-3-2024', 'john', 1, 'The overall electrical Testing is pass', 'Electrical Testing', 'Contact Resistance T', 'pass'),
(3, 'sgs1002501', '20-3-2024', 'john', 1, 'The overall electrical Testing is pass', 'Electrical Testing', 'Circuit Breaker Timi', 'pass'),
(4, 'sgs1002501', '20-3-2024', 'john', 1, 'The overall mechanical testing is passed', 'Mechanical Testing', 'Visual Inspection', 'pass'),
(5, 'sgs1002501', '20-3-2024', 'john', 1, 'The overall mechanical testing is passed', 'Mechanical Testing', 'Mechanical Operation', 'pass'),
(6, 'sgs1002501', '20-3-2024', 'john', 1, 'The overall mechanical testing is passed', 'Mechanical Testing', 'Operating Force Test', 'pass'),
(7, 'sgs1002501', '2024-05-20', 'john', 1, 'The overall functional testing is passed', 'Functional Testing', 'Protection Relay Tes', 'pass'),
(8, 'sgs1002501', '2024-05-20', 'john', 1, 'The overall functional testing is passed', 'Functional Testing', 'Control Circuit Test', 'pass'),
(9, 'sgs1002501', '2024-05-20', 'john', 1, 'The overall functional testing is passed', 'Functional Testing', 'Over Current Protect', 'pass'),
(10, 'cap5000011', '30-3-2024', 'anna', 0, 'one of the test is not passed', 'Electrical Testing', 'Insulation Resistanc', 'pending'),
(11, 'cap5000011', '30-3-2024', 'anna', 0, 'one of the test is not passed', 'Electrical Testing', 'Contact Resistance T', 'fail'),
(12, 'cap5000011', '30-3-2024', 'anna', 0, 'one of the test is not passed', 'Electrical Testing', 'Circuit Breaker Timi', 'fail'),
(13, 'cap5000011', '30-3-2024', 'anna', 0, 'the test are pending', 'Mechanical Testing', 'Visual Inspection', 'pending'),
(14, 'cap5000011', '30-3-2024', 'anna', 0, 'the test are pending', 'Mechanical Testing', 'Mechanical Operation', 'fail'),
(15, 'cap5000011', '30-3-2024', 'anna', 0, 'the test are pending', 'Mechanical Testing', 'Operating Force Test', 'fail'),
(16, 'cap5000011', '2024-05-30', 'anna', 0, 'the test are in progress', 'Functional Testing', 'Protection Relay Tes', 'fail'),
(17, 'cap5000011', '2024-05-30', 'anna', 0, 'the test are in progress', 'Functional Testing', 'Control Circuit Test', 'pass'),
(18, 'cap5000011', '2024-05-30', 'anna', 0, 'the test are in progress', 'Functional Testing', 'Over Current Protect', 'pending'),
(19, 'res2002901', '25-3-2024', 'imran', 0, 'one of them are pass', 'Electrical Testing', 'Insulation Resistanc', 'pass'),
(20, 'res2002901', '25-3-2024', 'imran', 0, 'one of them are pass', 'Electrical Testing', 'Contact Resistance T', 'pending'),
(21, 'res2002901', '25-3-2024', 'imran', 0, 'one of them are pass', 'Electrical Testing', 'Circuit Breaker Timi', 'pending'),
(22, 'fus1002501', '22-3-2024', 'irfan', 2, 'the test are inprogress\r\n', 'Electrical Testing', 'Insulation Resistanc', 'pass'),
(23, 'fus1002501', '22-3-2024', 'irfan', 2, 'the test are inprogress\r\n', 'Electrical Testing', 'Contact Resistance T', 'fail'),
(24, 'fus1002501', '22-3-2024', 'irfan', 2, 'the test are inprogress\r\n', 'Electrical Testing', 'Circuit Breaker Timi', 'pending'),
(25, '0002401717', '24-4-2024', 'ali', 1, 'the two test are pending', 'Electrical Testing', 'Insulation Resistanc', 'pending'),
(26, '0002401717', '24-4-2024', 'ali', 1, 'the two test are pending', 'Electrical Testing', 'Contact Resistance T', 'pass'),
(27, '0002401717', '24-4-2024', 'ali', 1, 'the two test are pending', 'Electrical Testing', 'Circuit Breaker Timi', 'pass'),
(28, '0002401717', '24-4-2024', 'ali', 0, 'the test are in progress', 'Mechanical Testing', 'Visual Inspection', 'pending'),
(29, '0002401717', '24-4-2024', 'ali', 0, 'the test are in progress', 'Mechanical Testing', 'Mechanical Operation', 'pass'),
(30, '0002401717', '24-4-2024', 'ali', 0, 'the test are in progress', 'Mechanical Testing', 'Operating Force Test', 'fail'),
(31, 'fus1002501', '25-3-2024', 'imran', 1, ' one test in in progress', 'Mechanical Testing', 'Visual Inspection', 'pass'),
(32, 'fus1002501', '25-3-2024', 'imran', 1, ' one test in in progress', 'Mechanical Testing', 'Mechanical Operation', 'pass'),
(33, 'fus1002501', '25-3-2024', 'imran', 1, ' one test in in progress', 'Mechanical Testing', 'Operating Force Test', 'in_progres'),
(34, 'res2002901', '22-3-2024', 'irfan', 0, 'one is failed', 'Mechanical Testing', 'Visual Inspection', 'pass'),
(35, 'res2002901', '22-3-2024', 'irfan', 0, 'one is failed', 'Mechanical Testing', 'Mechanical Operation', 'pass'),
(36, 'res2002901', '22-3-2024', 'irfan', 0, 'one is failed', 'Mechanical Testing', 'Operating Force Test', 'fail'),
(37, '0002401717', '', 'ali', 0, 'the test are in progress', 'Functional Testing', 'Protection Relay Tes', 'pass'),
(38, '0002401717', '', 'ali', 0, 'the test are in progress', 'Functional Testing', 'Control Circuit Test', 'fail'),
(39, '0002401717', '', 'ali', 0, 'the test are in progress', 'Functional Testing', 'Over Current Protect', 'fail'),
(40, 'fus1002501', '2024-06-01', 'imran', 0, 'one of the test are pending', 'Functional Testing', 'Protection Relay Tes', 'pass'),
(41, 'fus1002501', '2024-06-01', 'imran', 0, 'one of the test are pending', 'Functional Testing', 'Control Circuit Test', 'pass'),
(42, 'fus1002501', '2024-06-01', 'imran', 0, 'one of the test are pending', 'Functional Testing', 'Over Current Protect', 'pending'),
(43, 'res2002901', '', 'irfan', 0, 'the one is fail', 'Functional Testing', 'Protection Relay Tes', 'pending'),
(44, 'res2002901', '', 'irfan', 0, 'the one is fail', 'Functional Testing', 'Control Circuit Test', 'pending'),
(45, 'res2002901', '', 'irfan', 0, 'the one is fail', 'Functional Testing', 'Over Current Protect', 'fail');

-- --------------------------------------------------------

--
-- Table structure for table `user_tb`
--

CREATE TABLE `user_tb` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(20) DEFAULT NULL,
  `user_email` varchar(20) DEFAULT NULL,
  `user_password` varchar(20) NOT NULL,
  `user_contact` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_tb`
--

INSERT INTO `user_tb` (`user_id`, `user_name`, `user_email`, `user_password`, `user_contact`) VALUES
(1, '$username', '$useremail', '$hashed_password', 0),
(2, 'aiman12390', 'aiman78@gmail.com', '$2y$10$LK1odrfE/KSFe', 0),
(3, 'Aiman', 'aiman123@gmail.com', '$2y$10$uYjpN.bzT8ba6', 0),
(4, 'Aiman7890', 'pc7915.aimanimran@ga', '$2y$10$rSPLkRhuYj3dX', 0),
(5, 'Imran', 'pc7915.aimanimran@ga', '$2y$10$zwvrhaBkded9R', 0),
(6, '', 'aiman100@gmail.com', '$2y$10$rOsg8BT2ZEDmy', 0),
(7, '', 'aiman100@gmail.com', '$2y$10$fXhx4wz6xtGqd', 301252158),
(8, '$username', '$useremail', '$hashed_password', 0),
(9, '', 'aiman100@gmail.com', '$2y$10$uJxwoKSz06PLj', 301252158),
(10, 'Aiman100', 'aiman100@gmail.com', '$2y$10$AsZQwIjeUVImf', 2147483647),
(11, 'Imran100', 'Imran100@gmail.com', '$2y$10$EguB3MqkySTrj', 2147483647),
(12, 'aiman1230', 'pc7915.aimanimran@ga', '$2y$10$pkZakY0mOeFfm', 2147483647),
(13, 'maryam123', 'aiman78@gmail.com', '$2y$10$GjbuIUe5WuKyP', 2147483647),
(14, 'aliyan', 'aliyan123@gmail.com', '$2y$10$5f19r6iBIzMco', 0),
(15, 'anum', 'pc7915.aimanimran@gm', 'anum123', 0),
(16, '@anum', 'anum123@gmial.com', '$2y$10$KiIEJNNvKIZwl', 0),
(17, 'ayesha', 'ayesha123@gmail.com', '$2y$10$G6eTXyUrRJYPJ', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_tb`
--
ALTER TABLE `contact_tb`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`test_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `user_tb`
--
ALTER TABLE `user_tb`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_tb`
--
ALTER TABLE `contact_tb`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_tb`
--
ALTER TABLE `user_tb`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tests`
--
ALTER TABLE `tests`
  ADD CONSTRAINT `tests_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
