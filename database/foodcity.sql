-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2019 at 01:28 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodcity`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_ID` varchar(45) NOT NULL,
  `Admin_Pass` varchar(45) NOT NULL,
  `onoff` varchar(100) NOT NULL,
  `L_Date` varchar(100) NOT NULL,
  `L_Time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_ID`, `Admin_Pass`, `onoff`, `L_Date`, `L_Time`) VALUES
('abdul', '123', 'offline', '2019-02-27', '09:14:47 PM'),
('afham', '123', 'online', '2019-02-28', '07:08:45 PM'),
('ASD', '123', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `Cart_ID` varchar(45) NOT NULL,
  `Order_ID` varchar(45) NOT NULL,
  `Product_ID` varchar(45) NOT NULL,
  `Pro_Name` varchar(45) NOT NULL,
  `Imgurl` varchar(100) NOT NULL,
  `Price` varchar(45) NOT NULL,
  `Quantity` int(20) NOT NULL,
  `Amount` int(20) NOT NULL,
  `Cus_ID` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`Cart_ID`, `Order_ID`, `Product_ID`, `Pro_Name`, `Imgurl`, `Price`, `Quantity`, `Amount`, `Cus_ID`) VALUES
('CRT0002', 'ORD0001', 'PRO0009', '150', 'mk9.jpg', '150', 2, 300, 'CUS0001'),
('CRT0003', 'ORD0001', 'PRO0006', '400', 'mk6.jpg', '400', 1, 400, 'CUS0001'),
('CRT0004', 'ORD0001', 'PRO0004', '100', 'mk4.jpg', '100', 1, 100, 'CUS0001'),
('CRT0006', 'ORD0004', 'PRO0003', '520', 'm3.jpg', '520', 7, 3640, 'CUS0001'),
('CRT0007', 'ORD0004', 'PRO0006', '400', 'mk6.jpg', '400', 1, 400, 'CUS0001'),
('CRT0008', 'ORD0004', 'PRO0007', '250', 'mk7.jpg', '250', 1, 250, 'CUS0001'),
('CRT0009', 'ORD0005', 'PRO0003', '520', 'm3.jpg', '520', 7, 3640, 'CUS0001'),
('CRT0011', 'ORD0005', 'PRO0006', 'Fortune Oil, 5L', 'mk6.jpg', '400', 1, 400, 'CUS0001'),
('CRT0012', 'ORD0006', 'PRO0002', 'Cashew Nuts, 100g', 'm2.jpg', '200', 1, 200, 'CUS0001'),
('CRT0013', 'ORD0007', 'PRO0001', 'Almonds, 100g', 'm1.jpg', '1500', 1, 1500, 'CUS0001'),
('CRT0014', 'ORD0007', 'PRO0005', 'Saffola Gold, 1L', 'mk5.jpg', '130', 1, 130, 'CUS0001'),
('CRT0015', 'ORD0008', 'PRO0002', 'Cashew Nuts, 100g', 'm2.jpg', '200', 1, 200, 'CUS0001'),
('CRT0016', 'ORD0008', 'PRO0001', 'Almonds, 100g', 'm1.jpg', '1500', 1, 1500, 'CUS0001'),
('CRT0017', 'ORD0009', 'PRO0003', 'Pista, 250g', 'm3.jpg', '520', 1, 520, 'CUS0001');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `Cat_ID` varchar(45) NOT NULL,
  `Cat_Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`Cat_ID`, `Cat_Name`) VALUES
('CAT0001', 'Bakery'),
('CAT0002', 'Baking Supplies'),
('CAT0003', 'Coffee, Tea & Beverages'),
('CAT0004', 'Dried Fruits, Nuts'),
('CAT0005', 'Sweets, Chocolate'),
('CAT0006', 'Spices & Masalas'),
('CAT0007', 'Nuts'),
('CAT0008', 'Oils'),
('CAT0009', 'Pasta & Noodles');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `Chat_ID` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `Mail` varchar(100) NOT NULL,
  `Message` varchar(200) NOT NULL,
  `Date` date NOT NULL,
  `Time` varchar(100) NOT NULL,
  `To_Status` varchar(100) NOT NULL,
  `Type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`Chat_ID`, `Name`, `Subject`, `Mail`, `Message`, `Date`, `Time`, `To_Status`, `Type`) VALUES
('CHT0001', 'asdas', 'asdas', 'asdasd@adssad.com', 'wqdwwc', '2019-02-25', '00:00:00', 'Read', 'contact'),
('CHT0002', 'afham', 'request', 'afh@gamil.com', 'asdffvcwev', '2019-02-25', '00:00:00', 'Read', 'contact'),
('CHT0003', 'asdsa', 'wqewqe', 'asdasd@adssad.com', 'asdcsac', '2019-02-25', '02:02:13', 'Read', 'contact'),
('CHT0004', 'asd', 'asd', 'asdasd@adssad.com', 'adwqdwq', '2019-02-25', '03:02:11', 'Read', 'contact'),
('CHT0005', 'sakeer', 'asdfgh', 'asdasd@adssad.com', 'vcbnm', '2019-02-26', '06:02:01', 'Read', 'contact'),
('CHT0006', 'qwertyu', 'zxcvbnm', 'ads@asd.com', 'ghjk', '2019-02-26', '04:02:50pm PM', 'Read', 'contact'),
('CHT0007', 'poiuyt', 'lkjhgf', 'ads@asd.com', 'jhbfvjhfvbdfhvbjhdfbvjhdfbvdfhbvjdfhbvjdfhbvdfvf\r\ndfvdfjvdfiuv', '2019-02-26', '04:23:29 PM', 'Read', 'contact'),
('CHT0008', 'nbxvbnc', 'gfxgf', 'adsasd@sd.com', 'jhbdjfhv', '2019-02-26', '09:09:47 PM', 'Read', 'contact'),
('CHT0009', 'Basith', 'Request', 'ads@asd.com', 'dfvgbhjkl', '2019-02-27', '09:02:50 AM', 'Read', 'contact'),
('CHT0010', 'asd', 'asdsad', 'dffs@dgf.com', 'ssdfdsfdsfd', '2019-03-02', '05:57:30 PM', 'Read', 'contact');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Customer_ID` varchar(45) NOT NULL,
  `Cus_Name` varchar(45) NOT NULL,
  `Cus_Pass` varchar(45) NOT NULL,
  `Cus_Address` varchar(50) NOT NULL,
  `Cus_Phone` int(10) NOT NULL,
  `Cus_Mail` varchar(45) NOT NULL,
  `Admin_ID` varchar(45) NOT NULL,
  `onoff` varchar(100) NOT NULL,
  `last` varchar(100) NOT NULL,
  `lastdate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Customer_ID`, `Cus_Name`, `Cus_Pass`, `Cus_Address`, `Cus_Phone`, `Cus_Mail`, `Admin_ID`, `onoff`, `last`, `lastdate`) VALUES
('CUS0001', 'ABDULLAH AFHAM', '12345', '165/A, Sehu moulana road, Nin - 01', 770573918, 'afhamrazik@gmail.com', 'AFH', 'online', '05:32:09 PM', '2019-03-02'),
('CUS0002', 'sad', '123', 'weasdf', 342324, 'asdasd@adssad.com', '', 'offline', '09:09:19 PM', ''),
('CUS0003', 'aweqwe', '123', 'afdsfd', 234234324, 'asd@dsa.com', '', 'offline', '10:02:09 PM', '2019-02-28'),
('CUS0004', 'asd', '123', 'sadasd', 324324, 'asd@dfsf.com', '', 'offline', '06:24:37 PM', '2019-02-28'),
('CUS0005', 'wqeqwe', '234', 'sfsdf', 23423423, 'adsasd@asd.com', '', 'offline', '06:26:03 PM', '2019-02-28');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `F_ID` varchar(100) NOT NULL,
  `Cus_ID` varchar(100) NOT NULL,
  `Pro_ID` varchar(100) NOT NULL,
  `Message` varchar(500) NOT NULL,
  `F_Date` varchar(100) NOT NULL,
  `F_Time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`F_ID`, `Cus_ID`, `Pro_ID`, `Message`, `F_Date`, `F_Time`) VALUES
('FED0001', 'CUS0001', 'PRO0003', 'AFHAM', '05:37:46 PM', '2019-03-02'),
('FED0002', 'CUS0001', 'PRO0003', 'asdasdasd', '2019-03-02', '05:43:34 PM'),
('FED0003', 'CUS0001', 'PRO0001', 'asdasdasdsad', '2019-03-02', '05:51:41 PM'),
('FED0004', 'CUS0001', 'PRO0003', 'asdasdasdasxzvxcv', '2019-03-02', '05:52:52 PM');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `Order_ID` varchar(45) NOT NULL,
  `Cus_ID` varchar(45) NOT NULL,
  `Amount` varchar(45) NOT NULL,
  `Date` date NOT NULL,
  `Status` varchar(56) NOT NULL,
  `D_Date` varchar(100) NOT NULL,
  `D_Time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`Order_ID`, `Cus_ID`, `Amount`, `Date`, `Status`, `D_Date`, `D_Time`) VALUES
('ORD0001', 'CUS0001', '3400', '0000-00-00', 'Delivered', '2019-02-28', '10:17:29 PM'),
('ORD0003', 'CUS0001', '3000', '2019-02-18', 'Delivered', '2019-02-28', '09:08:49 AM'),
('ORD0004', 'CUS0001', '1170', '2019-02-19', 'Delivered', '2019-02-27', '06:45:54 PM'),
('ORD0005', 'CUS0001', '2420', '2019-02-19', 'Delivered', '2019-02-27', '06:21:38 PM'),
('ORD0006', 'CUS0001', '3200', '2019-02-22', 'Delivered', '2019-02-28', '10:17:31 PM'),
('ORD0007', 'CUS0001', '1630', '2019-02-27', 'Delivered', '2019-02-28', '10:17:35 PM'),
('ORD0008', 'CUS0001', '1700', '2019-02-28', 'Delivered', '2019-02-28', '10:17:33 PM');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Product_ID` varchar(45) NOT NULL,
  `Name` varchar(45) NOT NULL,
  `Quantity` int(100) NOT NULL,
  `Price` int(45) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `Admin_ID` varchar(45) NOT NULL,
  `Cat_ID` varchar(45) NOT NULL,
  `Date` date NOT NULL,
  `Imgurl` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Product_ID`, `Name`, `Quantity`, `Price`, `Description`, `Admin_ID`, `Cat_ID`, `Date`, `Imgurl`) VALUES
('PRO0001', 'Almonds, 100g', 10, 1500, 'Zeeba Basmati rice grains attain an extra ordinary length', 'afham', 'CAT0007', '2019-02-17', 'm1.jpg'),
('PRO0002', 'Cashew Nuts, 100g', 18, 200, 'Zeeba Basmati rice grains attain an extra ordinary length', 'afham', 'CAT0007', '2019-02-03', 'm2.jpg'),
('PRO0003', 'Pista, 250g', 16, 520, ' Zeeba Basmati rice grains attain an extra ordinary length', 'afham', 'CAT0007', '2019-02-03', 'm3.jpg'),
('PRO0004', 'Freedom Oil, 1L', 39, 100, 'Zeeba Basmati rice grains attain an extra ordinary length', 'afham', 'CAT0008', '2019-02-03', 'mk4.jpg'),
('PRO0005', 'Saffola Gold, 1L', 75, 130, 'Zeeba Basmati rice grains attain an extra ordinary length', 'afham', 'CAT0008', '2019-02-03', 'mk5.jpg'),
('PRO0006', 'Fortune Oil, 5L', 19, 400, 'Zeeba Basmati rice grains attain an extra ordinary length', 'afham', 'CAT0008', '2019-02-03', 'mk6.jpg'),
('PRO0007', 'Yippee Noodles, 65g', 49, 250, 'Zeeba Basmati rice grains attain an extra ordinary length', 'afham', 'CAT0009', '2019-02-03', 'mk7.jpg'),
('PRO0008', 'Wheat Pasta, 500g', 37, 100, 'Zeeba Basmati rice grains attain an extra ordinary length', 'afham', 'CAT0009', '2019-02-03', 'mk8.jpg'),
('PRO0009', 'Chinese Noodles, 68g', 60, 150, 'Zeeba Basmati rice grains attain an extra ordinary length', 'afham', 'CAT0009', '2019-02-03', 'mk9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `Stock_ID` varchar(45) NOT NULL,
  `Supplier_ID` varchar(45) NOT NULL,
  `Pro_ID` varchar(45) NOT NULL,
  `Quantity` int(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`Stock_ID`, `Supplier_ID`, `Pro_ID`, `Quantity`) VALUES
('STK0001', 'SUP0001', 'PRO0008', 10),
('STK0002', 'SUP0001', 'PRO0001', 20),
('STK0004', 'SUP0001', 'PRO0001', 10),
('STK0005', 'SUP0001', 'PRO0008', 10),
('STK0006', 'SUP0001', 'PRO0001', 10),
('STK0007', 'SUP0001', 'PRO0005', 30),
('STK0008', 'SUP0001', 'PRO0001', 10),
('STK0009', 'SUP0001', 'PRO0002', 20),
('STK0010', 'SUP0001', 'PRO0003', 20),
('STK0011', 'SUP0002', 'PRO0004', 40),
('STK0012', 'SUP0001', 'PRO0005', 50),
('STK0013', 'SUP0001', 'PRO0006', 20),
('STK0014', 'SUP0001', 'PRO0007', 50),
('STK0015', 'SUP0001', 'PRO0008', 30),
('STK0016', 'SUP0002', 'PRO0009', 60);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `Supplier_ID` varchar(45) NOT NULL,
  `Sup_Name` varchar(100) NOT NULL,
  `Sup_Address` varchar(100) NOT NULL,
  `Sup_Mail` varchar(100) NOT NULL,
  `Sup_Phone` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`Supplier_ID`, `Sup_Name`, `Sup_Address`, `Sup_Mail`, `Sup_Phone`) VALUES
('SUP0001', 'AFHAM', '12, Nedfs , Street , Nin - 01', 'afh@gamil.comasd', '123456'),
('SUP0002', 'dvv', 'dvfd', 'hjm', '78'),
('SUP0003', 'asdad', 'asd', 'werfef', '234324');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_ID`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`Cart_ID`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`Cat_ID`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`Chat_ID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Customer_ID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`F_ID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`Order_ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Product_ID`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`Stock_ID`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`Supplier_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
