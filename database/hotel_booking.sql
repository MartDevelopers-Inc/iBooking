-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 30, 2022 at 08:34 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` varchar(200) NOT NULL,
  `admin_name` varchar(200) DEFAULT NULL,
  `admin_mobile` varchar(200) DEFAULT NULL,
  `admin_email` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_mobile`, `admin_email`) VALUES
('efa27769c933a6c073c48d91207a46', 'System Admin', '+254737229776', 'sysadmin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` varchar(200) NOT NULL,
  `booking_user_id` varchar(200) NOT NULL,
  `booking_ref` varchar(200) DEFAULT NULL,
  `booking_description` longtext DEFAULT NULL,
  `booking_host_service_id` varchar(200) NOT NULL,
  `booking_date` varchar(200) DEFAULT NULL,
  `booking_time` varchar(200) DEFAULT NULL,
  `booking_requested_start_date` varchar(200) DEFAULT NULL,
  `booking_requested_start_time` varchar(200) DEFAULT NULL,
  `booking_requested_end_date` varchar(200) DEFAULT NULL,
  `booking_requested_end_time` varchar(200) DEFAULT NULL,
  `booking_status` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `booking_user_id`, `booking_ref`, `booking_description`, `booking_host_service_id`, `booking_date`, `booking_time`, `booking_requested_start_date`, `booking_requested_start_time`, `booking_requested_end_date`, `booking_requested_end_time`, `booking_status`) VALUES
('fb37cc5456deb65ea4f7cda3b19507406d33be8bcca1', '25e2030e22cad437d4019c9023a8974f7178905e85ed', 'URXLK46103', 'I need to book your condo for a couple of days.', '0754a1fbcf3006851d3716f9ea033bfb89ad989c3b3b', '2022-03-30', '09:00', '2022-04-08', '20:00', '2022-04-06', '12:00', 'Approved'),
('fbd885861bdcda0bfa7251c82bb18d0da946f8a97952', 'efa27769c933a6c073c48d91207a464c7cd0e9c49005', 'YHUVN12586', 'I need to book your condo for a couple of days.', '0754a1fbcf3006851d3716f9ea033bfb89ad989c3b3b', '2022-03-30', '12:00', '2022-04-01', '21:00', '2022-04-09', '08:00', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `host`
--

CREATE TABLE `host` (
  `host_id` varchar(200) NOT NULL,
  `host_name` varchar(200) DEFAULT NULL,
  `host_phone_no` varchar(200) DEFAULT NULL,
  `host_email` varchar(200) DEFAULT NULL,
  `host_address` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `host`
--

INSERT INTO `host` (`host_id`, `host_name`, `host_phone_no`, `host_email`, `host_address`) VALUES
('2258ed024562b73df5bb7264e736c16c10e985c4a997', 'Janet Jackson Doe', '+12-9009843-09', 'jjd@m.com', '123 Demo'),
('5a404e1a06d97f6e55e85b4c9a2bce2252c92d1ee209', 'Thomas Jacksons', '+12-9313009843', 'thomasj@m.com', '123 Demo'),
('5b964674c221d8d24204b5e88a1358e06fc10ce2bf22', 'Jane Doe', '+12-9009843', 'janedoe@m.com', '123 Demo');

-- --------------------------------------------------------

--
-- Table structure for table `host_service`
--

CREATE TABLE `host_service` (
  `host_service_id` varchar(200) NOT NULL,
  `host_service_host_id` varchar(200) NOT NULL,
  `host_service_service_id` varchar(200) NOT NULL,
  `host_service_description` longtext DEFAULT NULL,
  `host_service_cost_description` longtext DEFAULT NULL,
  `host_service_location` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `host_service`
--

INSERT INTO `host_service` (`host_service_id`, `host_service_host_id`, `host_service_service_id`, `host_service_description`, `host_service_cost_description`, `host_service_location`) VALUES
('0754a1fbcf3006851d3716f9ea033bfb89ad989c3b3b', '5a404e1a06d97f6e55e85b4c9a2bce2252c92d1ee209', '718e2e3a95671833832a4838170e5481022db39e4e21', 'Clean condo, free wifi, running water, serene environment overlooking the city', 'Ksh 1900 Per Night', '9027 Lakeview'),
('0fad87034f200957eeeb3f9fd908331970a4826c51d2', '5a404e1a06d97f6e55e85b4c9a2bce2252c92d1ee209', '718e2e3a95671833832a4838170e5481022db39e4e21', 'Exquisite condos over the hills', 'Ksh1500 Per Night', '89-Strt Chicago'),
('48db6e0e1b4f03515720ca02326a8607134057a73f6d', '5a404e1a06d97f6e55e85b4c9a2bce2252c92d1ee209', '9999132413fsdvas ', 'Exquisite, single room hotel wiith a nice view of the city', 'Ksh 500 Per Night', '127 Lakeview'),
('dedb251273c29eca10fa378c52615b890905384e2191', '5b964674c221d8d24204b5e88a1358e06fc10ce2bf22', '718e2e3a95671833832a4838170e5481022db39e4e21', 'A palace in the hills overlooking the city for rent out.', 'Ksh 1400 Per Night', '90 Milwaukee');

-- --------------------------------------------------------

--
-- Table structure for table `host_service_files`
--

CREATE TABLE `host_service_files` (
  `file_id` varchar(200) NOT NULL,
  `file_type` varchar(200) DEFAULT NULL,
  `file_data` longtext DEFAULT NULL,
  `file_host_service_id` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `host_service_files`
--

INSERT INTO `host_service_files` (`file_id`, `file_type`, `file_data`, `file_host_service_id`) VALUES
('1694e480208fe7d2289364dc1cd1a17e3bbdbf659f2f', 'Images', 'image-4.jpg', '0754a1fbcf3006851d3716f9ea033bfb89ad989c3b3b'),
('5a4059c6a729edb3a9ac775f8fe47a4e91ccc6082007', 'Image', '48db6e0e1b4f03515720ca02326a8607134057a73f6dimage-5.jpg', '48db6e0e1b4f03515720ca02326a8607134057a73f6d'),
('821d1ec25ad111a4b65dafa201aa47154cb02cf89c47', 'Image', '0754a1fbcf3006851d3716f9ea033bfb89ad989c3b3bimage-3.jpg', '0754a1fbcf3006851d3716f9ea033bfb89ad989c3b3b'),
('9c91f1bd849d014f528b48925756fcb035aab15874c1', 'Image', '0754a1fbcf3006851d3716f9ea033bfb89ad989c3b3bimage-2.jpg', '0754a1fbcf3006851d3716f9ea033bfb89ad989c3b3b'),
('9df14fe79f6a36d26373d6b931a65658502d850f09f1', 'Image', 'dedb251273c29eca10fa378c52615b890905384e2191image-6.jpg', 'dedb251273c29eca10fa378c52615b890905384e2191'),
('aaf28af41200693c6644de62f7ed8c8167842f7c98e6', 'Image', 'dedb251273c29eca10fa378c52615b890905384e2191image-5.jpg', 'dedb251273c29eca10fa378c52615b890905384e2191'),
('ba7bbe2c1334444219da552a51638dfd814ccc99c595', 'Image', '0fad87034f200957eeeb3f9fd908331970a4826c51d2image-4.jpg', '0fad87034f200957eeeb3f9fd908331970a4826c51d2');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` varchar(200) NOT NULL,
  `login_email` varchar(200) DEFAULT NULL,
  `login_password` varchar(200) DEFAULT NULL,
  `login_rank` varchar(200) DEFAULT NULL,
  `login_user_id` varchar(200) DEFAULT NULL,
  `login_admin_id` varchar(200) DEFAULT NULL,
  `login_host_id` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `login_email`, `login_password`, `login_rank`, `login_user_id`, `login_admin_id`, `login_host_id`) VALUES
('0f299f6401509092fe3e3100dd47a4045a50338d244a', 'ab90@gmail.com', 'a69681bcf334ae130217fea4505fd3c994f5683f', 'User', '3095d236a6a559becb32cf25ff0e86c97ebf2e173447', NULL, NULL),
('30ca17717a3c0e8f013f6424072466bddedaaefc7585', 'thomasj@m.com', 'a69681bcf334ae130217fea4505fd3c994f5683f', 'Host', NULL, NULL, '5a404e1a06d97f6e55e85b4c9a2bce2252c92d1ee209'),
('3922d2808dfd38feb8bf12e3a71e696ff09146c6f132', 'janedoe@m.com', 'a69681bcf334ae130217fea4505fd3c994f5683f', 'Host', NULL, NULL, '2258ed024562b73df5bb7264e736c16c10e985c4a997'),
('8d525a405c8d0be9522fd4a7c3967504da2b3dcfb476', 'janedoe@m.com', 'a69681bcf334ae130217fea4505fd3c994f5683f', 'Host', NULL, NULL, '5b964674c221d8d24204b5e88a1358e06fc10ce2bf22'),
('944ae7e3550a49181b329220360debc0d989b9b9d892', 'janet@gmail.com', 'a69681bcf334ae130217fea4505fd3c994f5683f', 'User', 'efa27769c933a6c073c48d91207a464c7cd0e9c49005', NULL, NULL),
('a69681bcf334ae1305fd3c994f5683f', 'sysadmin@gmail.com', 'a69681bcf334ae130217fea4505fd3c994f5683f', 'Administrator', NULL, 'efa27769c933a6c073c48d91207a46', NULL),
('bbdd68dff770c22b8dab0ba0829286ec9c0017ba7d6e', 'alexisbd12@gmail.com', 'a69681bcf334ae130217fea4505fd3c994f5683f', 'User', '25e2030e22cad437d4019c9023a8974f7178905e85ed', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` varchar(200) NOT NULL,
  `payment_amount` varchar(200) DEFAULT NULL,
  `payment_date` varchar(200) DEFAULT NULL,
  `payment_mode` varchar(200) DEFAULT NULL,
  `payment_booking_id` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `payment_amount`, `payment_date`, `payment_mode`, `payment_booking_id`) VALUES
('0911b99d7ca74f9f53ec51106d1819f243ea54527f52', '55000', '2022-03-29', 'Debit / Credit Card', 'fbd885861bdcda0bfa7251c82bb18d0da946f8a97952'),
('d10ca36d27d858644e900adc948138952ebe0d3b4e56', '10000', '2022-03-30', 'Cash', 'fb37cc5456deb65ea4f7cda3b19507406d33be8bcca1');

-- --------------------------------------------------------

--
-- Table structure for table `service_types`
--

CREATE TABLE `service_types` (
  `service_id` varchar(200) NOT NULL,
  `service_name` varchar(200) DEFAULT NULL,
  `service_number` varchar(200) DEFAULT NULL,
  `service_description` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_types`
--

INSERT INTO `service_types` (`service_id`, `service_name`, `service_number`, `service_description`) VALUES
('718e2e3a95671833832a4838170e5481022db39e4e21', 'Condo Hosting', 'ZDBFN15307', 'I have a condo up in the hills, which i need to host a user for a pocket friendly price.'),
('87654567845678', 'Hosting ', '001', 'Curious which components explicitly require our JavaScript and Popper? Click the show components link below. If you’re at all unsure about the general page structure, keep reading for an example page template.'),
('9999132413fsdvas ', 'Renting ', '002', 'Curious which components explicitly require our JavaScript and Popper? Click the show components link below. If you’re at all unsure about the general page structure, keep reading for an example page template.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` varchar(200) NOT NULL,
  `user_name` varchar(200) DEFAULT NULL,
  `user_mobile` varchar(200) DEFAULT NULL,
  `user_email` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_mobile`, `user_email`) VALUES
('25e2030e22cad437d4019c9023a8974f7178905e85ed', 'Alexis Baldwin', '+25412345689', 'alexis12@gmail.com'),
('3095d236a6a559becb32cf25ff0e86c97ebf2e173447', 'Baldwin Alec', '+00987654335', 'ab90@gmail.com'),
('efa27769c933a6c073c48d91207a464c7cd0e9c49005', 'Janet D Monroe', '+900-099423', 'janet@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `BookingUserID` (`booking_user_id`),
  ADD KEY `BookingHostServiceID` (`booking_host_service_id`);

--
-- Indexes for table `host`
--
ALTER TABLE `host`
  ADD PRIMARY KEY (`host_id`);

--
-- Indexes for table `host_service`
--
ALTER TABLE `host_service`
  ADD PRIMARY KEY (`host_service_id`),
  ADD KEY `HostServiceHostID` (`host_service_host_id`),
  ADD KEY `HostServiceServiceId` (`host_service_service_id`);

--
-- Indexes for table `host_service_files`
--
ALTER TABLE `host_service_files`
  ADD PRIMARY KEY (`file_id`),
  ADD KEY `HostServiceID` (`file_host_service_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`),
  ADD KEY `LoginUserID` (`login_user_id`),
  ADD KEY `LoginAdminID` (`login_admin_id`),
  ADD KEY `LoginHostID` (`login_host_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `PaymentBookingID` (`payment_booking_id`);

--
-- Indexes for table `service_types`
--
ALTER TABLE `service_types`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `BookingHostServiceID` FOREIGN KEY (`booking_host_service_id`) REFERENCES `host_service` (`host_service_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `BookingUserID` FOREIGN KEY (`booking_user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `host_service`
--
ALTER TABLE `host_service`
  ADD CONSTRAINT `HostServiceHostID` FOREIGN KEY (`host_service_host_id`) REFERENCES `host` (`host_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `HostServiceServiceId` FOREIGN KEY (`host_service_service_id`) REFERENCES `service_types` (`service_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `host_service_files`
--
ALTER TABLE `host_service_files`
  ADD CONSTRAINT `HostServiceID` FOREIGN KEY (`file_host_service_id`) REFERENCES `host_service` (`host_service_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `LoginAdminID` FOREIGN KEY (`login_admin_id`) REFERENCES `admin` (`admin_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `LoginHostID` FOREIGN KEY (`login_host_id`) REFERENCES `host` (`host_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `LoginUserID` FOREIGN KEY (`login_user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `PaymentBookingID` FOREIGN KEY (`payment_booking_id`) REFERENCES `booking` (`booking_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
