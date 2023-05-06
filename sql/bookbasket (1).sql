-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2021 at 10:39 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookbasket`
--

-- --------------------------------------------------------

--
-- Table structure for table `add`
--

CREATE TABLE `add` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `PAddress` varchar(255) NOT NULL,
  `Phno` varchar(255) NOT NULL,
  `Emailid` varchar(255) NOT NULL,
  `AddvertiseOnWhat` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `AddEmailid` varchar(255) NOT NULL,
  `AddImage` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `addvertise`
--

CREATE TABLE `addvertise` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `PAddress` varchar(255) NOT NULL,
  `Phno` varchar(255) NOT NULL,
  `Emailid` varchar(255) NOT NULL,
  `AddvertiseOnWhat` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `AddEmailid` varchar(255) NOT NULL,
  `AddImage` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addvertise`
--

INSERT INTO `addvertise` (`id`, `name`, `PAddress`, `Phno`, `Emailid`, `AddvertiseOnWhat`, `title`, `body`, `Location`, `contact`, `AddEmailid`, `AddImage`) VALUES
(4, 'agk', 'qsdfghj', '123456', 'agk@gmail.com', 'Coaching', 'college', 'asdfghj', 'asdfgh', '123456', 'agk@gmail.com', 'add/back to school.jpg'),
(3, 'abc', 'dfghj', '789', 'agk@gmail.com', 'Coaching', 'mp', 'fghj', 'dfghjk', '1234567', 'agk@gmail.com', 'add/b.png');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(255) NOT NULL,
  `NameOfBook` varchar(255) NOT NULL,
  `BookAuthorName` varchar(255) NOT NULL,
  `DescriptionOfBook` varchar(255) NOT NULL,
  `NumberOfPages` varchar(255) NOT NULL,
  `EdditionOfBook` varchar(255) NOT NULL,
  `BindingOfBook` varchar(255) NOT NULL,
  `CoverOfBook` varchar(255) NOT NULL,
  `Category` varchar(255) NOT NULL,
  `SuitableFor` varchar(255) NOT NULL,
  `ActualPrice` varchar(255) NOT NULL,
  `SellingPrice` varchar(255) NOT NULL,
  `BookImage` varchar(255) NOT NULL,
  `SName` varchar(255) NOT NULL,
  `SEId` varchar(255) NOT NULL,
  `SPhoNo` varchar(255) NOT NULL,
  `SAdd` varchar(255) NOT NULL,
  `BookStore` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `NameOfBook`, `BookAuthorName`, `DescriptionOfBook`, `NumberOfPages`, `EdditionOfBook`, `BindingOfBook`, `CoverOfBook`, `Category`, `SuitableFor`, `ActualPrice`, `SellingPrice`, `BookImage`, `SName`, `SEId`, `SPhoNo`, `SAdd`, `BookStore`) VALUES
(43, 'Art book', 'mpgka', 'sdfghj', '123', '2', 'Spiral', 'Soft', 'Art & Music', 'All', '50', '30', 'upload/a.png', 'Poojan', 'poojannaik6768@gmail.com', '00000000', 'asdfgh', ''),
(42, 'Cooking Book', 'mk', 'asdfgh', '100', '1', 'Spiral', 'Soft', 'Cooking', 'Children', '500', '400', 'upload/cooking book.jpg', 'Neha', 'nehasatardekar28@gmail.com', '0000000000', 'asdfgh', 'Yes'),
(41, 'Maths tb', 'gka', 'asdfg', '100', '2', 'Normal', 'Hard', 'Textbooks', 'Children', '50', '40', 'upload/Textbook3.jpg', 'Pranesh', 'bandodkarpraneshmohandas.sdcce@vvm.edu.in', '0000000000000', 'asdfghj', 'No'),
(39, 'English Textbook', 'abc', 'asdfgh', '100', '1', 'Spiral', 'Soft', 'Textbooks', 'Children', '50', '20', 'upload/Textbook1.jpg', 'Namita', 'namitamahale310@gmail.com', '0000', 'asdfghjk', ''),
(40, 'Science Text book', 'abc', 'abc', '100', '1', 'Spiral', 'Soft', 'Textbooks', 'Children', '50', '20', 'upload/Textbook5.jpg', 'Disha', 'dishamalvanker@gmail.com', '098765', 'asdfg', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `fb`
--

CREATE TABLE `fb` (
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Rate` varchar(255) NOT NULL,
  `Message` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fb`
--

INSERT INTO `fb` (`Name`, `Email`, `Gender`, `Rate`, `Message`) VALUES
('Radha', 'radha@gmail.com', 'female', '5 - Excellent', 'Very Nice website. '),
('agk', 'agk@gmail.com', 'male', '5 - Excellent', 'asdf'),
('asdfghj', 'abc@gmail.com', 'male', '5 - Excellent', 'sdfghj'),
('gak', 'gak@gmail.com', 'male', '5 - Excellent', 'Very nice.');

-- --------------------------------------------------------

--
-- Table structure for table `insertbook`
--

CREATE TABLE `insertbook` (
  `NameOfBook` varchar(255) NOT NULL,
  `BookAuthorName` varchar(255) NOT NULL,
  `DescriptionOfBook` varchar(255) NOT NULL,
  `NumberOfPages` varchar(255) NOT NULL,
  `EdditionOfBook` varchar(255) NOT NULL,
  `BindingOfBook` varchar(255) NOT NULL,
  `CoverOfBook` varchar(255) NOT NULL,
  `Category` varchar(255) NOT NULL,
  `SuitableFor` varchar(255) NOT NULL,
  `ActualPrice` varchar(255) NOT NULL,
  `SellingPrice` varchar(255) NOT NULL,
  `BookImage` varchar(255) NOT NULL,
  `SName` varchar(255) NOT NULL,
  `SEId` varchar(255) NOT NULL,
  `SPhoNo` varchar(255) NOT NULL,
  `SAdd` varchar(255) NOT NULL,
  `BookStore` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `insertbook`
--

INSERT INTO `insertbook` (`NameOfBook`, `BookAuthorName`, `DescriptionOfBook`, `NumberOfPages`, `EdditionOfBook`, `BindingOfBook`, `CoverOfBook`, `Category`, `SuitableFor`, `ActualPrice`, `SellingPrice`, `BookImage`, `SName`, `SEId`, `SPhoNo`, `SAdd`, `BookStore`) VALUES
('English Textbook', 'abc', 'abc', '100', '1', 'Normal', 'Soft', 'Textbooks', 'Children', '50', '20', 'upload/Textbook1.jpg', 'gk', 'abc@gmail.com', '9876543', 'sdfghj', 'No'),
('English Textbook', 'abc', 'abc', '100', '1', 'Normal', 'Soft', 'Textbooks', 'Children', '50', '20', 'upload/Textbook1.jpg', 'gk', 'abc@gmail.com', '9876543', 'sdfghj', 'No'),
('English Textbook', 'abc', 'abc', '100', '1', 'Normal', 'Soft', 'Textbooks', 'Children', '50', '20', 'upload/Textbook1.jpg', 'gk', 'abc@gmail.com', '9876543', 'sdfghj', 'No'),
('English Textbook', 'abc', 'abc', '100', '1', 'Normal', 'Soft', 'Textbooks', 'Children', '50', '20', 'upload/Textbook1.jpg', 'gk', 'abc@gmail.com', '9876543', 'sdfghj', 'No'),
('English Textbook', 'abc', 'abc', '100', '1', 'Normal', 'Soft', 'Textbooks', 'Children', '50', '20', 'upload/Textbook1.jpg', 'gk', 'abc@gmail.com', '9876543', 'sdfghj', 'No'),
('English Textbook', 'abc', 'abc', '100', '1', 'Normal', 'Soft', 'Textbooks', 'Children', '50', '20', 'upload/Textbook1.jpg', 'gk', 'abc@gmail.com', '9876543', 'sdfghj', 'No'),
('English Textbook', 'abc', 'jhgf', '100', '1', 'Spiral', 'Hard', 'Textbooks', 'Children', '50', '20', 'upload/Diary5.jpg', 'gk', 'abc@gmail.com', '9876543', 'ytgfdxzvb', 'Yes'),
('English Textbook', 'abc', 'jhgf', '100', '1', 'Spiral', 'Hard', 'Textbooks', 'Children', '50', '20', 'upload/Diary5.jpg', 'gk', 'abc@gmail.com', '9876543', 'ytgfdxzvb', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `loginregister`
--

CREATE TABLE `loginregister` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loginregister`
--

INSERT INTO `loginregister` (`name`, `email`, `password`) VALUES
('agk', 'abc@gmail.com', '123'),
('mp', 'abc@gmail.com', '1234'),
('gk', 'abc@gmail.com', '1234'),
('lk', 'lk@gmail.com', '678'),
('bs', 'bs@gmail.com', '1234'),
('', '', ''),
('kag', 'kag@gmail.com', '1234'),
('ps', 'abc@gmail.com', '1111'),
('sp', 'abc@gmail.com', '1234'),
('asgk', 'asgk@gmail.com', '1234'),
('disha', 'di@gmail.com', '1234'),
('Radha', 'radha@gmail.com', '1234'),
('pqr', 'pqr@gmail.com', '1234'),
('nnppd', 'nnppd@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `firstname`, `lastname`) VALUES
(4, 'kag', 'mp'),
(5, 'gka', 'mp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add`
--
ALTER TABLE `add`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addvertise`
--
ALTER TABLE `addvertise`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loginregister`
--
ALTER TABLE `loginregister`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add`
--
ALTER TABLE `add`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `addvertise`
--
ALTER TABLE `addvertise`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
