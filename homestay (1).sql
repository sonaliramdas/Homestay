-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2023 at 08:39 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homestay`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `acid` int(11) NOT NULL,
  `acname` varchar(250) NOT NULL,
  `acdesc` varchar(250) NOT NULL,
  `acimg` varchar(250) NOT NULL,
  `pid` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`acid`, `acname`, `acdesc`, `acimg`, `pid`) VALUES
(1, 'bgjkfskhgfsk', 'jfgwfwarfwartwj', 'upload/a2.jpg', 0),
(2, 'gjsagfjwgfrwg', 'jdggafhgarf', 'upload/a3.jpg', 0),
(4, 'dajgdjgajdgjgdjh', 'gdjjdgajgdjah', 'upload/p2.jpg', 1),
(5, 'Activity1', 'Resort Hotel is an entire service lodging facility that typically includes recreational activities and entertainment. This so-called “resort hotel” is usually located in places frequently visited for recreation and relaxation, such as seashores, beac', 'upload/a3.jpg', 6),
(6, 'Activity2', 'Resort Hotel is an entire service lodging facility that typically includes recreational activities and entertainment. This so-called “resort hotel” is usually located in places frequently visited for recreation and relaxation, such as seashores, beac', 'upload/a2.jpg', 7),
(7, 'Activity3', 'Resort Hotel is an entire service lodging facility that typically includes recreational activities and entertainment. This so-called “resort hotel” is usually located in places frequently visited for recreation and relaxation, such as seashores, beac', 'upload/a.webp', 8),
(8, 'Activity4', 'Resort Hotel is an entire service lodging facility that typically includes recreational activities and entertainment. This so-called “resort hotel” is usually located in places frequently visited for recreation and relaxation, such as seashores, beac', 'upload/a.webp', 9);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(11) NOT NULL,
  `aname` varchar(250) NOT NULL,
  `aemail` varchar(250) NOT NULL,
  `apassword` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `img` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `aname`, `aemail`, `apassword`, `phone`, `img`) VALUES
(3, 'Sonali R DAS', 'sonu@123gmail.com', 'sonu@123', '123456789', 'upload/sss.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `book_id` int(11) NOT NULL,
  `book_date` date NOT NULL,
  `to_date` date DEFAULT NULL,
  `package_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `day` int(11) NOT NULL,
  `people` int(11) NOT NULL,
  `total_pay` int(11) NOT NULL,
  `book-status` varchar(250) NOT NULL,
  `etime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`book_id`, `book_date`, `to_date`, `package_id`, `user_id`, `day`, `people`, `total_pay`, `book-status`, `etime`) VALUES
(1, '2023-06-16', '2023-06-17', 7, 3, 1, 6, 240000, 'checked-in', '2023-06-16 08:51:46');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cid` int(11) NOT NULL,
  `cname` varchar(250) NOT NULL,
  `cdesc` varchar(250) NOT NULL,
  `cimage` varchar(250) NOT NULL,
  `pid` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cid`, `cname`, `cdesc`, `cimage`, `pid`) VALUES
(7, 'Single Beded', 'Resort Hotel is an entire service lodging facility that typically includes recreational activities and entertainment. This so-called “resort hotel” is usually located in places frequently visited for recreation and relaxation, such as seashores, beac', 'upload/sbed1.jpg', 6),
(8, 'Double Beded', 'Resort Hotel is an entire service lodging facility that typically includes recreational activities and entertainment. This so-called “resort hotel” is usually located in places frequently visited for recreation and relaxation, such as seashores, beac', 'upload/res5.webp', 6),
(9, 'Single Beded', 'Resort Hotel is an entire service lodging facility that typically includes recreational activities and entertainment. This so-called “resort hotel” is usually located in places frequently visited for recreation and relaxation, such as seashores, beac', 'upload/res5.webp', 7),
(10, 'Double Beded ', 'Resort Hotel is an entire service lodging facility that typically includes recreational activities and entertainment. This so-called “resort hotel” is usually located in places frequently visited for recreation and relaxation, such as seashores, beac', 'upload/dbed.jpg', 7),
(11, 'Single Beded', 'Resort Hotel is an entire service lodging facility that typically includes recreational activities and entertainment. This so-called “resort hotel” is usually located in places frequently visited for recreation and relaxation, such as seashores, beac', 'upload/sbed1.jpg', 8),
(12, 'Double Beded', 'Resort Hotel is an entire service lodging facility that typically includes recreational activities and entertainment. This so-called “resort hotel” is usually located in places frequently visited for recreation and relaxation, such as seashores, beac', 'upload/dbed.jpg', 8),
(13, 'Single Beded', 'Resort Hotel is an entire service lodging facility that typically includes recreational activities and entertainment. This so-called “resort hotel” is usually located in places frequently visited for recreation and relaxation, such as seashores, beac', 'upload/sbed1.jpg', 9),
(14, 'Double Beded', 'Resort Hotel is an entire service lodging facility that typically includes recreational activities and entertainment. This so-called “resort hotel” is usually located in places frequently visited for recreation and relaxation, such as seashores, beac', 'upload/res5.webp', 9);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fid` int(11) NOT NULL,
  `cid` int(250) NOT NULL,
  `rating` varchar(250) NOT NULL,
  `message` varchar(250) NOT NULL,
  `fdate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fid`, `cid`, `rating`, `message`, `fdate`) VALUES
(3, 5, 'Medium', 'medium', '2023-06-19');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `foid` int(11) NOT NULL,
  `foname` varchar(250) NOT NULL,
  `focategory` varchar(250) NOT NULL,
  `foimg` varchar(250) NOT NULL,
  `price` int(250) NOT NULL,
  `pid` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`foid`, `foname`, `focategory`, `foimg`, `price`, `pid`) VALUES
(4, 'gagdhaghg', '1', 'upload/f2.jpg', 12323, 1),
(5, 'Dosa', '4', 'upload/sinonveg.jpg', 150, 6),
(6, 'Idly', '2', 'upload/niveg.jpg', 123, 7),
(7, 'Samosa', '2', 'upload/chinesenonveg.webp', 45000, 8),
(8, 'Rave Idly', '4', 'upload/ninonveg.jpg', 50000, 9);

-- --------------------------------------------------------

--
-- Table structure for table `foodcategory`
--

CREATE TABLE `foodcategory` (
  `fcid` int(11) NOT NULL,
  `fcname` varchar(250) NOT NULL,
  `fctype` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foodcategory`
--

INSERT INTO `foodcategory` (`fcid`, `fcname`, `fctype`) VALUES
(1, 'cfgsjfgwjf', 'jdgrsahw'),
(2, 'gjsgfhagfwarjh', 'non'),
(4, 'South Indian ', 'Veg');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gaid` int(11) NOT NULL,
  `gadesc` varchar(250) NOT NULL,
  `gaimg` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gaid`, `gadesc`, `gaimg`) VALUES
(1, 'dfghjkjk', 'upload/res1.jpg'),
(2, 'w34677789hvjvbccv', 'upload/res2.webp'),
(5, 'sdfghgfgh', 'upload/res4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `pid` int(11) NOT NULL,
  `pname` varchar(250) NOT NULL,
  `pdesc` varchar(250) NOT NULL,
  `pimg` varchar(250) NOT NULL,
  `pprice` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`pid`, `pname`, `pdesc`, `pimg`, `pprice`) VALUES
(6, 'Silver Package-AC', 'Resort Hotel is an entire service lodging facility that typically includes recreational activities and entertainment. This so-called “resort hotel” is usually located in places frequently visited for recreation and relaxation, such as seashores, beac', 'upload/package1.jpg', 45000),
(7, 'Basic Package Non Ac', 'Resort Hotel is an entire service lodging facility that typically includes recreational activities and entertainment. This so-called “resort hotel” is usually located in places frequently visited for recreation and relaxation, such as seashores, beac', 'upload/package2.jpg', 40000),
(8, 'Family Package', 'Resort Hotel is an entire service lodging facility that typically includes recreational activities and entertainment. This so-called “resort hotel” is usually located in places frequently visited for recreation and relaxation, such as seashores, beac', 'upload/package3.jpg', 49000),
(9, 'Day Out Package', 'Resort Hotel is an entire service lodging facility that typically includes recreational activities and entertainment. This so-called “resort hotel” is usually located in places frequently visited for recreation and relaxation, such as seashores, beac', 'upload/package4.jpg', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payid` int(11) NOT NULL,
  `uid` int(250) NOT NULL,
  `book_id` int(250) NOT NULL,
  `card_number` int(250) NOT NULL,
  `expy` int(250) NOT NULL,
  `cvv` int(250) NOT NULL,
  `amount` int(100) NOT NULL,
  `cardname` varchar(250) NOT NULL,
  `total_pay` int(250) NOT NULL,
  `pstatus` varchar(250) NOT NULL,
  `paydate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payid`, `uid`, `book_id`, `card_number`, `expy`, `cvv`, `amount`, `cardname`, `total_pay`, `pstatus`, `paydate`) VALUES
(10, 3, 1, 2147483647, 3, 123, 240000, 'megha', 240000, 'paid', '2023-06-16');

-- --------------------------------------------------------

--
-- Table structure for table `tourist`
--

CREATE TABLE `tourist` (
  `toid` int(11) NOT NULL,
  `toplace` varchar(250) NOT NULL,
  `toaddress` varchar(250) NOT NULL,
  `toimg` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tourist`
--

INSERT INTO `tourist` (`toid`, `toplace`, `toaddress`, `toimg`) VALUES
(3, 'hill', 'Resort Hotel is an entire service lodging facility that typically includes recreational activities and entertainment. This so-called “resort hotel” is usually located in places frequently visited for recreation and relaxation, such as seashores, beac', 'upload/tourist3.webp'),
(4, 'hill2', 'gdjjdgajgdjah', 'upload/tourist2.webp'),
(5, 'hill3', 'Resort Hotel is an entire service lodging facility that typically includes recreational activities and entertainment. This so-called “resort hotel” is usually located in places frequently visited for recreation and relaxation, such as seashores, beac', 'upload/tourist1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `uname` varchar(250) NOT NULL,
  `uemail` varchar(250) NOT NULL,
  `upassword` varchar(250) NOT NULL,
  `uphone` varchar(250) NOT NULL,
  `uaddress` varchar(250) NOT NULL,
  `uimg` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `uname`, `uemail`, `upassword`, `uphone`, `uaddress`, `uimg`) VALUES
(1, 'sonali R Das', 'sonu123@gmail.com', '12345', '9535770728', 'udupi', 'upload/sss.jpg'),
(5, 'megha', 'megha@123gmail.com', 'megha', '6364366697', 'udupi', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`acid`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`foid`);

--
-- Indexes for table `foodcategory`
--
ALTER TABLE `foodcategory`
  ADD PRIMARY KEY (`fcid`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gaid`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payid`);

--
-- Indexes for table `tourist`
--
ALTER TABLE `tourist`
  ADD PRIMARY KEY (`toid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `acid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `foid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `foodcategory`
--
ALTER TABLE `foodcategory`
  MODIFY `fcid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gaid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tourist`
--
ALTER TABLE `tourist`
  MODIFY `toid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
