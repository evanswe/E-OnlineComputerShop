-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2014 at 04:41 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `four_ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE IF NOT EXISTS `card` (
  `sl` varchar(20) NOT NULL,
  `pin` varchar(20) NOT NULL,
  `amount` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`sl`, `pin`, `amount`, `status`) VALUES
('02hyoO3itXnhYdZ', 'kFldqhUZCVUbDl8', 2000, 1),
('708DzImY0Csncsa', 'NUUg4MUPvermP1f', 6000, 0),
('8mgTs9U6lcYqwed', 'xh11oSwtISRHg1M', 2000, 0),
('ao5lXbumVQX6O7d', 'RmRrxGfbOwAOpED', 6000, 0),
('ASYflNUsoH1wwm5', 'BNU4iaCFcGUN56y', 6000, 0),
('aTqJLcb27rx9Wmh', 'GyUC8hYVumiWuwE', 6000, 0),
('b6cvgEAtTrpxPeo', 'ubmi6wBubgGstam', 6000, 0),
('bUlikrRM9kVwpki', 'Ucj6LyCDHWnzt7l', 6000, 0),
('CL1oqOhfAqNxSkj', 'rK32sXKnvDQykv4', 2000, 0),
('crvOfUTYpHgjrxo', 'cFagCHDPOXfXwbK', 6000, 0),
('DCg8SYx0SyYsp4i', 'bs5YeUOdzlIjYxy', 1000, 0),
('DgLLr8azSO33F2c', 'gJEO8lOchGDFstQ', 6000, 0),
('fdjg721DPDV98LN', '1ad36V80iZ37m6H', 1000, 0),
('fElFYg59byccDhq', 'vfhkJcudCeIzT6J', 2000, 0),
('fMh1t63ZK9LzPI9', 'XuF1UivVOZF6qlU', 2000, 0),
('fPdJIcHXFfzKSIx', 'EQNhDxLVgjK2iVu', 6000, 0),
('G3pceqwR74ma5KE', '77ZnquTGmFiFEoV', 1000, 0),
('i10y4NAB8iNJcfq', 'HiYnmJ3lOFOFOP0', 1000, 0),
('jEw5kPyuxa9qJo6', 'z0Kpyv01xb7HfNS', 1000, 0),
('jXRMo7QHIIXU2uV', 'MIdV27PEGmcAub6', 6000, 0),
('kduZSaHJI76kCNr', 'XIIzOv55Sq27Ufk', 6000, 0),
('loK2Powaiz8lwGo', '66M9MCHSCJ8ylbQ', 6000, 0),
('M8pmXaEycXPmfeG', 'p3xSWcsDrfIEEW4', 6000, 0),
('O1I8M5eRNTHcDcP', 'qTvN7r5rLT0n8Z0', 6000, 0),
('phF2utuUJePLRkr', 'Mnr54FmAxPjPVB5', 1000, 0),
('pJM2YKZziIPT5l2', 'tdC4wiMdtHc54cE', 6000, 0),
('Q4moZ0WRWqdGs6T', 'ls8MDxGkCgiU4nL', 6000, 0),
('qC8wLQFFGBaIWCm', 'SnuvcywKoNiVcQz', 1000, 0),
('QIouAXoRjohiMLL', 's1LGoNVFt9BBrQz', 2000, 0),
('rJtHhGIg5xh6C2W', 'U0UA0OaoQy20bYg', 1000, 0),
('T0KoIHh8przOIZk', 'kXuQ3Z7giZF1PHR', 6000, 0),
('tPLk2CMVXY2Y0Di', 'XIXnJFotx5eo6Id', 6000, 0),
('TTb9Kh9Cv0oNVPF', '44qyFmvWbgoNnwQ', 1000, 0),
('u1x6w4bmKYUmTup', 'Mlp3IU22e0CV4nV', 2000, 0),
('U40FIjNvsbpQSqz', 'fJzduin438TzIZS', 6000, 0),
('UTOdp9qb5h7UH1B', 'j7BmkwPHWs0VTFU', 6000, 0),
('UvuLK19sHPOkvHe', '9V4CInb442s7WFC', 2000, 0),
('VtjqM1jZnwVlsGU', 'hI8oZHrXA11eQqD', 2000, 0),
('vXLAz5qDg0znjtX', 'uwueBoUR0YYAq1r', 2000, 0),
('wJNDjVhBp7Vsy3v', 'f4Dyl6fjFhsAWlZ', 2000, 0),
('wRJYPLfrYIuPKue', 'Hj1fwcg1R2o7tAb', 6000, 0),
('x4bwWg1e8WwjTRt', '8jyfFDl3UBdSBYV', 2000, 0),
('XAWqAMZvKWWVaNx', 'aLOCDkQQaDNGurr', 1000, 0),
('XAyk3n9c4MxzLxu', 'YoucRRrs5B7npmg', 6000, 0),
('xsvYBoiXxoPT6bQ', 'iu50hMYFM1LGyZd', 2000, 0),
('xtgkSv5s89J45aV', '8Ch3hluzKkpJjlN', 2000, 0),
('z5a0w7mRUfRIsfq', 'rw6U0xutpj5aoDE', 6000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
`id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(2, 'Desktop'),
(3, 'Gaming accessories'),
(6, 'Hardware'),
(1, 'Notebook'),
(4, 'Printer'),
(5, 'Software');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
`id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `countryid` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `name`, `countryid`) VALUES
(1, 'Satkhira', 1),
(5, 'New York', 4),
(6, 'Dhaka', 1),
(7, 'Rajshahi', 1);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `productid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `comment` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
`id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `name`) VALUES
(1, 'Bangladesh'),
(6, 'Canada'),
(8, 'Finland'),
(2, 'India'),
(3, 'Pakistan'),
(7, 'Sri Lanka'),
(5, 'UK'),
(4, 'USA');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
`id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `description` varchar(40) NOT NULL,
  `price` float(8,2) NOT NULL,
  `subcategoryid` int(11) NOT NULL,
  `unitid` int(11) NOT NULL,
  `vat` float(5,2) NOT NULL,
  `picture` varchar(40) NOT NULL,
  `discount` float(5,2) NOT NULL,
  `stock` float(6,2) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `price`, `subcategoryid`, `unitid`, `vat`, `picture`, `discount`, `stock`) VALUES
(1, 'Dell Vostro 5460', '1409162036180298.txt', 52345.00, 6, 3, 0.00, '21671409162036dell2.jpg', 0.00, 18.00),
(2, 'Dell Vostro 5560', '1409162170169495.txt', 67000.00, 2, 3, 0.00, '32041409162170hp2.jpg', 0.00, 19.00),
(3, 'Apple 11 Macbookair', '1409205157912231.txt', 85000.00, 4, 3, 0.00, '24751409205157apple1.jpg', 0.00, 21.00),
(4, 'Apple 27 Inch IMAC', '1409205327772522.txt', 62000.00, 6, 3, 0.00, '30041409205327elleww.jpg', 0.00, 23.00),
(5, 'HP Compaq Pro', '1409206728444794.txt', 45000.00, 8, 3, 0.00, '49991409206728hp2.jpg', 0.00, 21.00),
(6, 'HP Printer', '1409207015425934.txt', 78888.00, 9, 3, 0.00, '85041409207015hp.jpg', 0.00, 21.00),
(7, 'HP 112', '1409329315394745.txt', 28000.00, 10, 3, 0.00, '2171409329315cpuq.jpg', 0.00, 21.00),
(8, 'Hp112', '1409294182377808.txt', 23456.00, 1, 3, 0.00, '62031409294182hp3.jpg', 0.00, 13.00),
(9, 'Apple 114', '1409294246533020.txt', 89000.00, 4, 3, 0.00, '81961409294246apple.png', 0.00, 45.00),
(10, 'Hp115', '1409294333531372.txt', 140993.00, 1, 3, 0.00, '73381409294333dell4.jpg', 0.00, 46.00),
(11, 'Apple 115', '1409294407782287.txt', 76555.00, 4, 3, 0.00, '36491409294407apple2.jpg', 0.00, 98.00),
(12, 'Apple Mac', '1409294474477386.txt', 87777.00, 4, 3, 0.00, '86501409294474dell4.jpg', 0.00, 43.00),
(13, 'Apple Mac 114', '140929453767322.txt', 65777.00, 4, 3, 0.00, '99601409294537apple.png', 0.00, 98.00),
(14, 'Apple Mac 116', '1409294584785675.txt', 89654.00, 4, 3, 0.00, '37471409294584dell12.jpg', 0.00, 32.00),
(15, 'Apple Mac 1161', '1409294663338257.txt', 78654.00, 4, 3, 0.00, '55921409294663amsung.jpg', 0.00, 96.00),
(16, 'Apple Mac 11422', '1409294715776458.txt', 67542.00, 4, 3, 0.00, '33891409294715hp4.jpg', 0.00, 45.00),
(17, 'Apple MacAir', '1409294773222168.txt', 98765.00, 4, 3, 0.00, '84301409294773wnload.jpg', 0.00, 43.00),
(18, 'Apple Mac 114', '1409294815124726.txt', 78654.00, 4, 3, 0.00, '48741409294815dell12.jpg', 0.00, 90.00),
(19, 'Apple MacSky', '1409294862130188.txt', 98888.00, 4, 3, 0.00, '16101409294862hp4.jpg', 0.00, 97.00),
(20, 'Apple MacCse', '1409294916813263.txt', 76999.00, 4, 3, 0.00, '25681409294916hp3.jpg', 0.00, 76.00),
(21, 'Apple MacSwe', '1409294964253357.txt', 78888.00, 4, 3, 0.00, '2391409294964dell3.jpg', 0.00, 92.00),
(22, 'Apple Macsw', '1409295008924072.txt', 98762.00, 4, 3, 0.00, '97561409295008elleww.jpg', 0.00, 56.00),
(23, 'Apple Ma22', '1409295051376709.txt', 76890.00, 4, 3, 0.00, '56301409295051hp2.jpg', 0.00, 90.00),
(24, 'Apple 1152', '1409295097646454.txt', 90032.00, 4, 3, 0.00, '23091409295097apple2.jpg', 0.00, 45.00),
(25, 'Dell 1988', '1409321753808014.txt', 45678.00, 11, 3, 0.00, '87211409321753dell1.jpg', 0.00, 23.00),
(26, 'Dell 1989', '1409321800157807.txt', 34566.00, 11, 3, 0.00, '65571409321800dell2.jpg', 0.00, 89.00),
(27, 'Dell 1990', '1409321861104767.txt', 35000.00, 11, 3, 0.00, '78071409321861dell3.png', 0.00, 71.00),
(28, 'Dell 1991', '1409321904600769.txt', 31000.00, 11, 3, 0.00, '1691409321904dell4.jpg', 0.00, 43.00),
(29, 'Dell 1992', '1409321948975219.txt', 35900.00, 11, 3, 0.00, '86321409321948dell5.jpg', 0.00, 34.00),
(30, 'Dell 1993', '1409321994636291.txt', 39000.00, 11, 3, 0.00, '20131409321994dell6.jpg', 0.00, 68.00),
(31, 'Dell 1994', '1409322045683105.txt', 36789.00, 11, 3, 0.00, '8531409322045dell8.jpg', 0.00, 85.00),
(32, 'Dell 1995', '1409322155142578.txt', 32999.00, 11, 3, 0.00, '91771409322155dell9.jpg', 0.00, 21.00),
(33, 'Dell 1996', '1409322206960144.txt', 33000.00, 11, 3, 0.00, '18871409322206dell10.jpg', 0.00, 33.00),
(34, 'Dell 1997', '1409322259651794.txt', 43000.00, 11, 3, 0.00, '45361409322259dell11.jpg', 0.00, 34.00),
(35, 'Dell 1999', '1409322419957885.txt', 47890.00, 11, 3, 0.00, '84881409322419dll10.jpg', 0.00, 21.00),
(36, 'Dell 2001', '1409322464441223.txt', 34521.00, 11, 3, 0.00, '81381409322464dell14.jpg', 0.00, 56.00),
(37, 'HP 2990', '1409322957654388.txt', 41500.00, 8, 3, 0.00, '53321409322957hp1.jpg', 0.00, 23.00),
(38, 'HP 2991', '1409323003495880.txt', 43890.00, 11, 3, 0.00, '16211409323003hp2.jpg', 0.00, 65.00),
(39, 'HP 2992', '1409323054285401.txt', 45900.00, 8, 3, 0.00, '36041409323054hp3.png', 0.00, 43.00),
(40, 'HP 2993', '1409323111767761.txt', 32789.00, 8, 3, 0.00, '71891409323111hp4.jpg', 0.00, 21.00),
(41, 'HP 2994', '1409323161729217.txt', 43678.00, 8, 3, 0.00, '87701409323161hp7.jpg', 0.00, 43.00),
(42, 'Apple MacMini', '1409324429504364.txt', 62000.00, 6, 3, 0.00, '49301409324429ap2.jpg', 0.00, 23.00),
(43, 'Apple MacMini2', '1409324472180817.txt', 64566.00, 6, 3, 0.00, '63261409324472ap4.jpg', 0.00, 43.00),
(44, 'Apple MacMini3', '1409324516677093.txt', 329991.00, 6, 3, 0.00, '38311409324516ap6.jpg', 0.00, 33.00),
(45, 'Apple MacMini4', '1409324556146424.txt', 367891.00, 6, 3, 0.00, '11821409324556ap7.jpg', 0.00, 23.00),
(46, 'Samsung Cms1', '1409328303821258.txt', 36789.00, 5, 3, 0.00, '78451409328303sam5.jpg', 0.00, 34.00),
(47, 'Samsung Cms2', '1409328356704742.txt', 51111.00, 5, 3, 0.00, '49051409328356sam4.png', 0.00, 85.00),
(49, 'Delta Zero Optical Sensor Gaming mouse', '1409329126786651.txt', 2345.00, 12, 3, 0.00, '98111409329126mouse1.jpg', 0.00, 786.00),
(50, 'Delta Zero Optical Sensor Gaming mouse1', '1409329189727264.txt', 3211.00, 12, 3, 0.00, '66421409329189mouse5.jpg', 0.00, 34.00);

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE IF NOT EXISTS `purchase` (
`id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `delivery` varchar(200) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=58 ;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`id`, `userid`, `delivery`, `date`) VALUES
(22, 6, '', '2013-09-28'),
(23, 6, 'dhanmondi shankar ', '2013-09-28'),
(24, 6, 'shankar 344', '2013-09-28'),
(25, 5, 'dhanmondi 27', '2013-09-28'),
(26, 5, '16,Shahi Mosjid,Mirpur-1', '2013-09-28'),
(27, 5, '', '2013-09-28'),
(28, 5, '', '2013-09-28'),
(29, 6, 'dhanmondi ', '2013-09-28'),
(30, 6, '', '2013-09-28'),
(31, 6, '', '2013-09-28'),
(32, 6, '', '2013-09-28'),
(33, 6, '', '2013-09-28'),
(34, 6, '', '2013-09-28'),
(35, 6, '', '2013-09-28'),
(36, 5, '', '2013-09-28'),
(37, 5, '', '2013-09-28'),
(38, 5, '', '2013-09-28'),
(39, 5, '', '2013-09-28'),
(40, 5, '', '2013-09-28'),
(41, 5, '', '2013-09-28'),
(42, 5, '', '2013-09-28'),
(43, 5, '', '2013-09-28'),
(44, 5, '', '2013-09-28'),
(45, 5, '', '2013-09-28'),
(46, 6, '', '2013-09-30'),
(47, 6, '', '2013-09-30'),
(48, 6, '', '2013-09-30'),
(49, 6, '', '2013-09-30'),
(50, 6, '', '2013-09-30'),
(51, 6, '', '2013-09-30'),
(52, 6, '', '2013-09-30'),
(53, 6, '', '2013-09-30'),
(54, 6, '', '2013-09-30'),
(55, 6, '', '2013-09-30'),
(56, 6, '', '2013-09-30'),
(57, 5, 'Dhaka, Bangladesh', '2014-06-21');

-- --------------------------------------------------------

--
-- Table structure for table `purchasereport`
--

CREATE TABLE IF NOT EXISTS `purchasereport` (
  `productid` int(11) NOT NULL,
  `purchaseid` int(11) NOT NULL,
  `quantity` float(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE IF NOT EXISTS `subcategory` (
`id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `categoryid` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `name`, `categoryid`) VALUES
(1, 'HP Probook', 1),
(2, 'Dell 112', 1),
(3, 'Samsung', 1),
(4, 'Apple', 1),
(5, 'Samsung ccn', 2),
(6, 'Aplle  mac ', 2),
(7, 'Toshiba', 2),
(8, 'HP Desktop', 2),
(9, 'HP Printer', 4),
(10, 'CPU', 6),
(11, 'Dell Desktop', 2),
(12, 'Gaming Mouse', 3);

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE IF NOT EXISTS `unit` (
`id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`id`, `name`) VALUES
(4, 'Dozen'),
(5, 'gram'),
(1, 'Kg'),
(2, 'Liter'),
(6, 'pair'),
(3, 'Piece');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `fullname` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `usertype` varchar(1) NOT NULL,
  `balance` float(9,2) NOT NULL,
  `address` varchar(40) NOT NULL,
  `cityid` int(11) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `status` varchar(30) NOT NULL,
  `chat` varchar(2) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fullname`, `email`, `password`, `usertype`, `balance`, `address`, `cityid`, `gender`, `contact`, `status`, `chat`) VALUES
(5, 'sadia', 'sadia@yahoo.com', '123', 'a', 96640.00, 'dhanmondi', 6, 'f', '01722434545', '1', '1'),
(6, 'admin', 'admin@gmail.com', '123', 'a', 4670.00, 'dhanmondi', 6, 'f', '0987655544', '1', ''),
(11, 'Sazzad Hossain', 'sazzad@gmail.com', '123456', 'u', 0.00, '', 6, 'm', '0237834783338', '', ''),
(12, 'Bojjat Rifat', 'rifat@gmail.com', '123456', 'u', 0.00, '', 7, 'm', '8734837483', '', ''),
(13, 'evan', 'farhad.evan@gmail.com', '123456', 'u', 0.00, '', 6, 'm', '01938161058', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `card`
--
ALTER TABLE `card`
 ADD PRIMARY KEY (`sl`,`pin`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `name` (`name`), ADD KEY `countryid` (`countryid`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
 ADD PRIMARY KEY (`productid`,`userid`), ADD KEY `userid` (`userid`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
 ADD PRIMARY KEY (`id`), ADD KEY `subcategoryid` (`subcategoryid`), ADD KEY `unitid` (`unitid`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
 ADD PRIMARY KEY (`id`), ADD KEY `userid` (`userid`);

--
-- Indexes for table `purchasereport`
--
ALTER TABLE `purchasereport`
 ADD PRIMARY KEY (`productid`,`purchaseid`), ADD KEY `purchaseid` (`purchaseid`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `name` (`name`), ADD KEY `categoryid` (`categoryid`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`), ADD KEY `cityid` (`cityid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `city`
--
ALTER TABLE `city`
ADD CONSTRAINT `city_ibfk_1` FOREIGN KEY (`countryid`) REFERENCES `country` (`id`);

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`productid`) REFERENCES `product` (`id`),
ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`userid`) REFERENCES `user` (`id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`subcategoryid`) REFERENCES `subcategory` (`id`),
ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`unitid`) REFERENCES `unit` (`id`);

--
-- Constraints for table `purchase`
--
ALTER TABLE `purchase`
ADD CONSTRAINT `purchase_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`id`);

--
-- Constraints for table `purchasereport`
--
ALTER TABLE `purchasereport`
ADD CONSTRAINT `purchasereport_ibfk_1` FOREIGN KEY (`productid`) REFERENCES `product` (`id`),
ADD CONSTRAINT `purchasereport_ibfk_2` FOREIGN KEY (`purchaseid`) REFERENCES `purchase` (`id`);

--
-- Constraints for table `subcategory`
--
ALTER TABLE `subcategory`
ADD CONSTRAINT `subcategory_ibfk_1` FOREIGN KEY (`categoryid`) REFERENCES `category` (`id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`cityid`) REFERENCES `city` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
