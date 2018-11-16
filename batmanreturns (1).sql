-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2018 at 11:26 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `batmanreturns`
--

-- --------------------------------------------------------

--
-- Table structure for table `battery`
--

CREATE TABLE `battery` (
  `mobileID-battery` bigint(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `capacity` int(11) NOT NULL,
  `removability` tinyint(1) NOT NULL,
  `wireless_charge` tinyint(1) NOT NULL,
  `fast_charge` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `battery`
--

INSERT INTO `battery` (`mobileID-battery`, `type`, `capacity`, `removability`, `wireless_charge`, `fast_charge`) VALUES
(10001, 'Li-Polymer', 3500, 0, 0, 1),
(10002, 'Li-Polymer', 4000, 0, 0, 0),
(10003, '-', 5000, 0, 0, 1),
(10004, '-', 3300, 0, 0, 1),
(10005, 'Li-ion', 4230, 0, 0, 0),
(10006, '-', 3060, 0, 0, 0),
(10007, 'Lithium-ion', 0, 0, 1, 1),
(10008, '-', 3000, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `connectivity`
--

CREATE TABLE `connectivity` (
  `mobileID-connectivity` bigint(20) NOT NULL,
  `bluetooth` varchar(30) NOT NULL,
  `wifi` varchar(30) NOT NULL,
  `hotspot` varchar(30) NOT NULL,
  `usb` varchar(20) NOT NULL,
  `nfc` tinyint(1) NOT NULL,
  `gps` tinyint(1) NOT NULL,
  `network` varchar(20) NOT NULL,
  `infrared` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `connectivity`
--

INSERT INTO `connectivity` (`mobileID-connectivity`, `bluetooth`, `wifi`, `hotspot`, `usb`, `nfc`, `gps`, `network`, `infrared`) VALUES
(10001, 'YES, 4.2', 'YES', 'YES', 'YES', 1, 1, '4G VoLTE, GSM, 4G LT', 0),
(10002, 'YES, 5', 'YES', 'YES', 'YES', 1, 1, '4G VoLTE, UMTS, GSM,', 1),
(10003, 'YES, 5.0', 'YES', 'YES', 'YES', 1, 1, '4G LTE, UMTS, GSM', 0),
(10004, 'YES, 5.0', 'YES', 'YES', 'YES', 1, 1, ' 4G VoLTE, UMTS, GSM', 0),
(10005, 'YES, v4.2', 'YES', 'YES', 'YES', 1, 1, '4G VoLTE, 4G LTE, WC', 0),
(10006, 'YES, 5', 'YES', 'YES', 'YES', 1, 1, 'GSM, UMTS, WCDMA, 4G', 0),
(10007, 'YES, 5', 'YES', 'YES', 'YES', 1, 1, '4G LTE, UMTS, GSM, W', 1),
(10008, 'YES, 4.2', 'YES', 'YES', 'YES', 1, 1, '4G VoLTE, GSM, 4G LT', 0);

-- --------------------------------------------------------

--
-- Table structure for table `design`
--

CREATE TABLE `design` (
  `mobileID-design` bigint(20) NOT NULL,
  `color` varchar(20) NOT NULL,
  `weight` int(11) NOT NULL,
  `dimensions` varchar(30) NOT NULL,
  `sim_type` varchar(20) NOT NULL,
  `external_card_slot` varchar(20) NOT NULL,
  `number_of_sims` int(11) NOT NULL,
  `water_resistance` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `design`
--

INSERT INTO `design` (`mobileID-design`, `color`, `weight`, `dimensions`, `sim_type`, `external_card_slot`, `number_of_sims`, `water_resistance`) VALUES
(10001, 'Starry Purple/Sunris', 169, '74 x 156.7 x 7.99', 'Dual Nano', 'dedicated microSD', 2, 'No'),
(10002, 'Red/Black/Blue/Gold', 181, '75.35 x 158.38 x 8.05', 'Dual Nano', 'Hybrid microSD', 2, 'No'),
(10003, 'Black', 205, '76 x 156 x 8.98', 'Dual Nano', 'Dedicated microSD', 2, 'No'),
(10004, 'Midnight Blue/Meteor', 165, '75.65 x 153 x 7.7', 'Nano', 'Hybrid microSD', 2, 'No'),
(10005, 'Diamond Black/Diamon', 168, '75.6 x 156.2 x 8.2', 'Dual Nano', 'Dedicated microSD', 2, 'No'),
(10006, 'Blue/Black/White', 151, '70.98 x 147.2 x 7.99', 'Dual Nano', 'Hybrid microSD', 2, 'No'),
(10007, 'Silver/Gold/Space Gr', 177, '70.9 x 143.6 x 177', 'Nano/eSim', 'No', 2, 'Resistant to liquid '),
(10008, 'Sapphire Blue/Midnig', 152, '71.8 x 149.2 x 7.7', 'Nano', 'Hybrid microSD', 2, 'No');

-- --------------------------------------------------------

--
-- Table structure for table `display`
--

CREATE TABLE `display` (
  `mobileID-display` bigint(20) NOT NULL,
  `display_type` varchar(20) NOT NULL,
  `resolution` varchar(30) NOT NULL,
  `screen_size` decimal(10,1) NOT NULL,
  `aspect_ratio` varchar(10) NOT NULL,
  `notch` tinyint(1) NOT NULL,
  `ppi` int(11) NOT NULL,
  `screen_ratio` decimal(10,0) NOT NULL,
  `color_reproduction` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `display`
--

INSERT INTO `display` (`mobileID-display`, `display_type`, `resolution`, `screen_size`, `aspect_ratio`, `notch`, `ppi`, `screen_ratio`, `color_reproduction`) VALUES
(10001, 'TFT-LTPS', '2340 x 1080', '6.3', '19.5 : 9', 1, 400, '91', 16),
(10002, 'IPS(in-cell)', '2160x1080', '6.0', '18:9', 0, 403, '77', 16),
(10003, 'LTPS IPS', '1080 x 2246', '6.2', '18.7:9', 1, 402, '82', 16),
(10004, 'Super IPS+', '2246 x 1080', '6.2', '19:9', 1, 402, '84', 16),
(10005, '-', '1520 x 720', '6.2', '19:9', 1, 409, '81', 16),
(10006, 'FHD+', '2280 x 1080', '5.8', '19:9', 1, 435, '81', 16),
(10007, 'Super Retina HD Disp', '2436 x 1125', '5.8', '19.5:9', 1, 458, '84', 16),
(10008, 'TFT-LCD', '2280 x 1080', '5.8', '19:9', 1, 432, '80', 16);

-- --------------------------------------------------------

--
-- Table structure for table `front_camera`
--

CREATE TABLE `front_camera` (
  `mobileID-fcamera` bigint(20) NOT NULL,
  `megapixels` varchar(20) NOT NULL,
  `flash` tinyint(1) NOT NULL,
  `video` varchar(20) NOT NULL,
  `dual_camera` tinyint(1) NOT NULL,
  `aperture` varchar(20) NOT NULL,
  `features` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `front_camera`
--

INSERT INTO `front_camera` (`mobileID-fcamera`, `megapixels`, `flash`, `video`, `dual_camera`, `aperture`, `features`) VALUES
(10001, '25MP', 1, 'YES', 0, 'F2.0', 'Sensor Size, Pixel Data: 1/2.78, 0.9 micrometer, Sensor Type: CMOS, Sensor Model, Manufacturer: IMX576, Sony, 79 Degree Wide Angle of Front, F2.0 Aperture, Flashlight, Lens Number: 5P, Video, Photo Ma'),
(10002, '20MP', 0, 'YES', 0, 'F2.2', 'Aperture - f/2.2, 1.0 microns Pixel Size\r\n'),
(10003, '12MP', 0, 'UHD at 30fps, FHD at', 0, 'f2.0', 'f2.0, 1.25 micrometer'),
(10004, '8MP', 0, 'YES', 0, 'f2.0', '8MP, F/2.0, EIS Support, Fixed Focus, 84Degree Wide FOV'),
(10005, '8MP', 0, 'YES', 0, 'F2.2', 'F2.2, AI Beautification 2.0, Bokeh Mode'),
(10006, '16MP', 1, 'YES', 0, 'f/2.0', '1.0um, f/2.0'),
(10007, '7MP', 0, 'Front Camera - 1080p', 0, '-f/2.2', 'TrueDepth Camera, Wide-angle Lens - f/2.2 Aperture, Portrait Mode with Advanced Bokeh and Depth Control, Portrait Lighting with Five Effects (Natural, Studio, Contour, Stage, Stage Mono), Animoji and '),
(10008, '16MP', 0, 'YES', 0, '', 'Supports Video up to 1920 x 1080 Pixels, Photo up to 4608 x 3456 Pixels, FF Focus Mode, Portrait Mode, Gesture Control');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `mobileID-media` bigint(20) NOT NULL,
  `imagelink1` varchar(500) NOT NULL,
  `imagelink2` varchar(500) NOT NULL,
  `imagelink3` varchar(500) NOT NULL,
  `imagelink4` varchar(500) NOT NULL,
  `videolink` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `overview`
--

CREATE TABLE `overview` (
  `mobileID` bigint(11) NOT NULL,
  `brand` varchar(20) NOT NULL,
  `mobile_name` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `date_of_launch` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `overview`
--

INSERT INTO `overview` (`mobileID`, `brand`, `mobile_name`, `price`, `date_of_launch`) VALUES
(10001, 'OPPO', 'F9 Pro', 23990, '2018-08-21'),
(10002, 'Redmi', 'Note 5 Pro', 16999, '2018-02-18'),
(10003, 'Motorola', 'One Power', 15999, '2018-09-24'),
(10004, 'Asus', 'Zenfone 5Z', 32999, '2018-07-04'),
(10005, 'Realme', '2', 10990, '2018-10-11'),
(10006, 'Nokia', '6.1 Plus', 15999, '2018-08-21'),
(10007, 'Apple', 'iPhone XS', 114900, '2018-09-21'),
(10008, 'Honor', '9N', 11999, '2018-07-24');

-- --------------------------------------------------------

--
-- Table structure for table `processors`
--

CREATE TABLE `processors` (
  `mobileID-processor` bigint(20) NOT NULL,
  `cpu` varchar(30) NOT NULL,
  `gpu` varchar(30) NOT NULL,
  `chipset` varchar(30) NOT NULL,
  `cores` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `processors`
--

INSERT INTO `processors` (`mobileID-processor`, `cpu`, `gpu`, `chipset`, `cores`) VALUES
(10001, '2.0 GHz', 'ARM Mali G72 MP3 800 MHz', 'Mediatek Helio P60 Octacore 2.', 4),
(10002, '1.8 Ghz', ' Adreno 509', 'Qualcomm Snapdragon 636', 8),
(10003, '1.8 GHz', '430 MHz Adreno 509', ' Qualcomm Snapdragon 636', 8),
(10004, '2.8 GHz', 'Adreno 630', 'Qualcomm Snapdragon 845 Octa C', 8),
(10005, '1.8 GHz', 'Adreno 506', ' Qualcomm Snapdragon 450 Octa ', 8),
(10006, '1.8 GHz', 'Adreno 509', 'Qualcomm Snapdragon 636 Octaco', 8),
(10007, '2.5 GHz', 'four-core GPU', ' A12 Bionic Chip', 6),
(10008, '1.7 GHz', 'ARM Mali-T830 MP2', 'Kirin 659 Octa Core', 8);

-- --------------------------------------------------------

--
-- Table structure for table `rear_camera`
--

CREATE TABLE `rear_camera` (
  `mobileID-rcamera` bigint(20) NOT NULL,
  `megapixels` varchar(20) NOT NULL,
  `flash` tinyint(1) NOT NULL,
  `video` varchar(20) NOT NULL,
  `dual_camera` tinyint(1) NOT NULL,
  `aperture` varchar(20) NOT NULL,
  `features` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rear_camera`
--

INSERT INTO `rear_camera` (`mobileID-rcamera`, `megapixels`, `flash`, `video`, `dual_camera`, `aperture`, `features`) VALUES
(10001, '16MP + 2MP', 1, '1080P, 720P', 1, 'F1.85', 'Sensor Size, Pixel Data: 1/3.1, 1.0 micrometer, Sensor Type: CMOS, Maximum Zoom Multiples: 4x, Aperture: F1.85, Focal Length: 3.62 mm, Flashlight, Lens Number: 5P, Video: 1080P, 720P, Photo Management'),
(10002, '12MP + 2Mp', 1, 'YES', 1, 'F2.2', 'Primary Sensor - f/2.2, 1.25 microns Pixel Size, 5P Lens, Secondary Sensor - f/2.0, 1.12 microns Pixel Size, 4P Lens, PDAF'),
(10003, '16MP + 5Mp', 1, 'YES', 1, 'F1.8', '16MP - PDAF (f1.8, 1.12 micrometer), 5MP - f2.2, 1.0 micrometer\r\n'),
(10004, '12Mp + 8MP', 1, 'YES', 1, '1.8', '12MP Sony IMX 363 Sensor, f/1.8, 1.4um, 0.03s Dual-Pixel PDAF, OIS & EIS, RAW File Support, 4K/ UHD Video Recording+ 8MP 120Degree Wide Angle camera'),
(10005, '13MP + 2Mp', 1, 'YES', 1, 'F2.2', 'F2.2 + F2.4, 5P Lens, Bokeh Mode, AF Focusing, Consecutive Capture Mode - 20 in a Row, Front Camera HDR'),
(10006, '16MP + 5MP', 1, 'YES', 1, 'F2.0', '\r\n1.0um + 1.12um, f2.0, AF, HDR (High Dynamic Range) Photography and AI Assistance Beauty Shot, Selfie Bokeh, Live Bokeh, Panorama, HDR, Hybrid Zoom (Digital), Spot Color, Color and Mono, Slow-motion '),
(10007, '12MP+12MP', 1, 'YES', 1, 'f2.4', 'Dual 12MP Wide-angle and Telephoto Cameras, Wide-angle Lens: f/1.8 Aperture, Telephoto: f/2.4 Aperture, 2x Optical Zoom, Portrait Mode with Advanced Bokeh and Depth Control, Portrait Lighting with Fiv'),
(10008, '13MP + 2MP', 1, 'YES', 1, 'f2.0', 'Supports Video up to 1920 x 1080 Pixels, Photo up to 4160 x 3120 Pixels, Focu Mode: AF/PDAF, Wide Aperture Mode, Portrait Mode');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `reviewID` bigint(20) NOT NULL,
  `mobileID-review` bigint(20) NOT NULL,
  `userID` int(11) NOT NULL,
  `heading` varchar(50) NOT NULL,
  `content` varchar(1500) NOT NULL,
  `stars` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sensors`
--

CREATE TABLE `sensors` (
  `mobileID-sensors` bigint(20) NOT NULL,
  `accelerometer` tinyint(1) NOT NULL,
  `proximity` tinyint(1) NOT NULL,
  `fingerprint` tinyint(1) NOT NULL,
  `gyroscope` tinyint(1) NOT NULL,
  `ambient_light` tinyint(1) NOT NULL,
  `extra` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sensors`
--

INSERT INTO `sensors` (`mobileID-sensors`, `accelerometer`, `proximity`, `fingerprint`, `gyroscope`, `ambient_light`, `extra`) VALUES
(10001, 1, 1, 1, 1, 1, 'Magnetic Induction'),
(10002, 1, 1, 1, 1, 1, ' E Compass, Hall Sensor'),
(10003, 1, 1, 1, 1, 1, 'Magnetometer, E-compass'),
(10004, 1, 1, 1, 1, 1, 'E-compass, Hall Sensor, RGB Sensor'),
(10005, 1, 1, 1, 1, 1, 'Pedometer'),
(10006, 1, 1, 1, 1, 1, 'E-compass'),
(10007, 1, 1, 1, 1, 1, ' Face ID, Barometer, Three-axis Gyro'),
(10008, 1, 1, 1, 1, 1, ' Phone Status Indicator');

-- --------------------------------------------------------

--
-- Table structure for table `storage`
--

CREATE TABLE `storage` (
  `mobileID-storage` bigint(20) NOT NULL,
  `ram` int(11) NOT NULL,
  `rom` int(11) NOT NULL,
  `expandable` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `storage`
--

INSERT INTO `storage` (`mobileID-storage`, `ram`, `rom`, `expandable`) VALUES
(10001, 6, 64, 1),
(10002, 6, 64, 1),
(10003, 4, 64, 1),
(10004, 6, 128, 1),
(10005, 4, 64, 1),
(10006, 4, 64, 1),
(10007, 4, 256, 0),
(10008, 3, 32, 1);

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE `stores` (
  `mobileID-stores` bigint(20) NOT NULL,
  `storeID` bigint(20) NOT NULL,
  `store_name` varchar(20) NOT NULL,
  `store_link` varchar(500) NOT NULL,
  `review_link` varchar(500) NOT NULL,
  `ratings` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone Number` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `username`, `Email`, `Phone Number`, `password`) VALUES
(40003, 'ravi', 'cse170001039@iiti.ac.in', '', '6eea9b7ef19179a06954edd0f6c05ceb'),
(40004, 'adminRAVI', 'cse170001039@gmail.com', '', '21232f297a57a5a743894a0e4a801fc3'),
(40005, 'adminADI', 'aditya.gupta04@rediff.com', '', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `battery`
--
ALTER TABLE `battery`
  ADD PRIMARY KEY (`mobileID-battery`);

--
-- Indexes for table `connectivity`
--
ALTER TABLE `connectivity`
  ADD PRIMARY KEY (`mobileID-connectivity`);

--
-- Indexes for table `design`
--
ALTER TABLE `design`
  ADD PRIMARY KEY (`mobileID-design`);

--
-- Indexes for table `display`
--
ALTER TABLE `display`
  ADD PRIMARY KEY (`mobileID-display`);

--
-- Indexes for table `front_camera`
--
ALTER TABLE `front_camera`
  ADD PRIMARY KEY (`mobileID-fcamera`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`mobileID-media`);

--
-- Indexes for table `overview`
--
ALTER TABLE `overview`
  ADD PRIMARY KEY (`mobileID`);

--
-- Indexes for table `processors`
--
ALTER TABLE `processors`
  ADD PRIMARY KEY (`mobileID-processor`);

--
-- Indexes for table `rear_camera`
--
ALTER TABLE `rear_camera`
  ADD PRIMARY KEY (`mobileID-rcamera`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`mobileID-review`);

--
-- Indexes for table `sensors`
--
ALTER TABLE `sensors`
  ADD PRIMARY KEY (`mobileID-sensors`);

--
-- Indexes for table `storage`
--
ALTER TABLE `storage`
  ADD PRIMARY KEY (`mobileID-storage`);

--
-- Indexes for table `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`mobileID-stores`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `battery`
--
ALTER TABLE `battery`
  MODIFY `mobileID-battery` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10009;

--
-- AUTO_INCREMENT for table `connectivity`
--
ALTER TABLE `connectivity`
  MODIFY `mobileID-connectivity` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10009;

--
-- AUTO_INCREMENT for table `design`
--
ALTER TABLE `design`
  MODIFY `mobileID-design` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10009;

--
-- AUTO_INCREMENT for table `display`
--
ALTER TABLE `display`
  MODIFY `mobileID-display` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10009;

--
-- AUTO_INCREMENT for table `front_camera`
--
ALTER TABLE `front_camera`
  MODIFY `mobileID-fcamera` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10009;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `mobileID-media` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `overview`
--
ALTER TABLE `overview`
  MODIFY `mobileID` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10009;

--
-- AUTO_INCREMENT for table `processors`
--
ALTER TABLE `processors`
  MODIFY `mobileID-processor` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10009;

--
-- AUTO_INCREMENT for table `rear_camera`
--
ALTER TABLE `rear_camera`
  MODIFY `mobileID-rcamera` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10009;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `mobileID-review` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sensors`
--
ALTER TABLE `sensors`
  MODIFY `mobileID-sensors` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10009;

--
-- AUTO_INCREMENT for table `storage`
--
ALTER TABLE `storage`
  MODIFY `mobileID-storage` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10009;

--
-- AUTO_INCREMENT for table `stores`
--
ALTER TABLE `stores`
  MODIFY `mobileID-stores` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40006;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
