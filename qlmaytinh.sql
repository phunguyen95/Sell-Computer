-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2015 at 12:00 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `qlmaytinh`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_order`
--

CREATE TABLE IF NOT EXISTS `detail_order` (
  `number` int(11) NOT NULL,
  `contact_numb` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `Dongia` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `each_product`
--

CREATE TABLE IF NOT EXISTS `each_product` (
`masp` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `tensp` varchar(50) CHARACTER SET utf8 NOT NULL,
  `dongia` float NOT NULL,
  `hinh` varchar(50) CHARACTER SET utf8 NOT NULL,
  `mota` varchar(1000) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `each_product`
--

INSERT INTO `each_product` (`masp`, `id`, `tensp`, `dongia`, `hinh`, `mota`) VALUES
(17, 1, 'Laptop Toshiba C50 - B206E', 6790000, '18170_laptop-toshiba-c50-b202eE.jpg', '- Intel Celeron N2830 2.16GHz - 1M\r\n- DDRAM 2GB/1600 (2 Slots)\r\n- HDD 500GB\r\n- DVD-RW\r\n- Card Reader  - USB 3.0\r\n- Intel HD\r\n- 15.6" WXGA HD LED TFT  - HDMI - Webcam\r\n- LAN 10/100 - Wireless N - Bluetooth\r\n- Weight 2.2Kg - Battery 4 Cell\r\n- OS Option\r\n- Bảo hành 1 năm \r\n'),
(18, 1, 'NB Toshiba C50-B202E', 9790000, '3271_nb-toshiba-c50-b202eE.jpg', '- Intel Core i3-3217U 1.8GHz - 3M\r\n- DDRAM 4GB/1600 (2 Slots)\r\n- HDD 500GB\r\n- DVD-RW\r\n- Card Reader  - USB 3.0\r\n- Intel HD 4000\r\n- 15.6" HD - HDMI - Webcam\r\n- LAN 10/100 - Wireless N - Bluetooth\r\n- Weight 2.2Kg - Battery 4 Cell\r\n- OS Option\r\n- Bảo hành 1 năm \r\n'),
(19, 1, 'NB Toshiba C40 - A138 Đen', 11290000, '23044_c40-blackk.jpg', '- Intel Core i3-3110M 2.4GHz - 3M\r\n- DDRAM 2GB/1600 (1 Slot)\r\n- HDD 500GB\r\n- DVD-RW\r\n- Card Reader  - USB 3.0\r\n- Intel HD 4000\r\n- 14.0" WXGA HD LED - HDMI - Webcam\r\n- LAN 10/100 - Wireless N - Bluetooth\r\n- Weight 2.02Kg - Battery 6 Cell\r\n- OS Win 8 Single Language 64Bits\r\n- Bảo hành 1 năm \r\n'),
(21, 1, 'NB Toshiba C40 - A128', 12590000, '15423_c400.jpg', '- Intel Core i5-4200M 2.5GHz\r\n- DDRAM 4GB/1600\r\n- HDD 500GB\r\n- DVD-RW\r\n- Card Reader  - USB 3.0\r\n- Intel HD 4600\r\n- 14.0" HD 200 CSV LD - HDMI - Webcam\r\n- LAN 10/100 - Wireless N - Bluetooth\r\n- Weight 2.1Kg - Battery 6 Cell\r\n- OS Option\r\n- Bảo hành 1 năm '),
(22, 1, 'Laptop Toshiba L40 - B201B', 12925000, '21547_laptop-toshiba-l40-b201bB.jpg', '- Intel Core i5-4200U 1.6GHz - 3M\r\n- DDRAM 4GB/1600 (2 slots)\r\n- HDD 500GB\r\n- DVD-RW\r\n- Card Reader - USB 3.0\r\n- Intel HD 4400\r\n- 14.0" WXGA HD TFT - HDMI - Webcam\r\n- Lan 10/100 - Wireless N - Bluetooth\r\n- Weight  1.87Kg - Battery 4 Cell\r\n- OS Option\r\n- Bảo hành 1 năm '),
(23, 1, 'Laptop Toshiba L50-B216G', 13590000, '14888_laptop-toshiba-l50-b216gG.jpg', '- Intel Core i5-4210U 1.7GHz - 3M\r\n- DDRAM 4GB/1600 (2 Slots)\r\n- HDD 500GB\r\n- DVD-RW\r\n- Card Reader - USB 3.0\r\n- Intel HD 4400\r\n- 15.6" WXGA TrueBrite HD - HDMI - Webcam\r\n- Lan 10/100 - Wireless N - Bluetooth\r\n- Weight  2.2Kg - Battery 4 Cell\r\n- OS Option\r\n- Bảo hành 1 năm '),
(24, 1, 'NB Toshiba L40 - AS104XG (Đồng)', 13990000, '11563_l40-gG.jpg', '- Intel ULV Core i5-3337U 1.8GHz\r\n- DDRAM 4GB/1600\r\n- HDD 500GB\r\n- DVD-RW\r\n- Card Reader 2.1 - USB 3.0\r\n- NVIDIA GF GT740M // Intel HD 4000\r\n- 14.0" HD 200 CSV LD - HDMI - Webcam\r\n- Lan Gigabits - Wireless N - Bluetooth\r\n- Weight  2.3Kg - Battery 4 Cell\r\n- OS Option\r\n- Bảo hành 1 năm '),
(25, 1, 'Laptop Toshiba L50-B205BX', 14190000, '21412_laptop-toshiba-l50-b205bxX.jpg', '- Intel Core i5-4200M 1.6GHz - 3M\r\n- DDRAM 4GB/1600 (2 Slots)\r\n- HDD 500GB\r\n- DVD-RW\r\n- Card Reader - USB 3.0\r\n- AMD R7 M260 2GB DDR3 // Intel HD 4400\r\n- 15.6" WXGA HD TFT - HDMI - Webcam\r\n- Lan Gigabits - Wireless N - Bluetooth\r\n- Weight  2.2Kg - Battery 4 Cell\r\n- OS Option\r\n- Bảo hành 1 năm '),
(26, 1, 'Laptop Toshiba L40 - B214GX (Vàng đồng)', 14890000, '2274_laptop-toshiba-l40-b201gG.jpg', '- Intel Core i5-4210U 1.7GHz - 3M\r\n- DDRAM 4GB/1600 (2 slots)\r\n- HDD 1.0TB 5400rpm\r\n- DVD-RW\r\n- Card Reader - USB 3.0\r\n- AMD Radeon R7 M260 2GB DDR3 // Intel HD 4400\r\n- 14.0" WXGA HD TFT - HDMI - Webcam\r\n- Lan 10/100 - Wireless N - Bluetooth\r\n- Weight  1.87Kg - Battery 4 Cell\r\n- OS Option\r\n- Bảo hành 1 năm '),
(27, 1, 'NB Toshiba L50 - B203BX (Đen)', 15590000, '2550_l50-w8-11.jpg', '- Intel Core i5-4200U 1.6GHz - 3M\r\n- DDRAM 4GB/1600 (2 slots)\r\n- HDD 1.0TB SATA\r\n- AMD Radeon R7 M260 2GB DDR3 // Intel HD 4400\r\n- DVD-RW\r\n- Card Reader - USB 3.0\r\n- 15.6" WXGA LED - HDMI - Webcam\r\n- LAN 10/100/1000 - Wireless N - Bluetooth\r\n- Weight 2.2Kg - Battery 4 Cell\r\n- OS Win 8 Single Language 64Bits\r\n- Bảo hành 1 năm '),
(28, 2, 'NB Dell 7737 MNWWF3 (I7-4510U) Bạc', 32990000, '16554_laptop-dell-7737-mnwwf3-i7-4510u-bacc.jpg', '- Intel Core i7-4510U 2.0GHz - 3M\r\n- DDRAM 2x 8GB/1600 (2 slots)\r\n- HDD 1.0TB SSHD 8GB Flash Driver\r\n- NVIDIA GF GT 750M 2GB GDDR5 // Intel HD 4400\r\n- DVD-RW\r\n- Card Reader 8.1 - USB 3.0\r\n- 17.3" Touch LED FHD  - HDMI - Webcam\r\n- LAN 10/100/1000 - Wireless - Bluetooth\r\n- Weight 3.29Kg - Battery 4 Cell\r\n- OS Win 8.1 Single Language 64bits\r\n- Bảo hành 1 năm'),
(29, 2, 'Laptop Dell 7447-MJWKV1 (Đen)', 24890000, '6595_laptop-dell-7447-mjwkv1-aen).jpg', '- Intel Core i7-4710HQ 2.5GHz - 6M\r\n- DDRAM 2x 4GB/1600 (2 slot)\r\n- HDD 1.0TB SATA 5400rpm 8GB Flash Drive\r\n- NVIDIA GF GTX 850M 4GB // Intel HD 4600\r\n- DVD-RW\r\n- Card Reader 3.1 - USB3.0\r\n- 14.0" FHD IPS - HDMI - Webcam\r\n- LAN 10/100/1000 - Wireless N - Bluetooth\r\n- Weight 2.23Kg - Battery 65Wh\r\n- OS Win 8.1 Single Language 64Bits\r\n- Bảo hành 1 năm '),
(30, 2, 'Laptop Dell 7447 (F7447-70048992) (Đen)', 22490000, '16012_laptop-dell-7447-mjwkv1-denn.jpg', '- Intel Core i7-4710HQ 2.5GHz - 6M\r\n- DDRAM 2x 4GB/1600 (2 slot)\r\n- HDD 1.0TB SATA 5400rpm\r\n- NVIDIA GF GTX 850M 4GB DDR3 // Intel HD 4600\r\n- DVD-RW\r\n- Card Reader - USB3.0\r\n- 14.0" LED - HDMI - Webcam\r\n- LAN 10/100/1000 - Wireless N - Bluetooth\r\n- Weight 2.23Kg - Battery 65WHr\r\n- OS Win 8.1 Single Language 64Bits\r\n- Bảo hành 1 năm '),
(31, 2, 'Laptop Dell Inspiron 15 3543-696TP3 (Đen)', 20490000, '18122_dell-inspiron-35433.jpg', '- Intel Core i7-5500U 2.4GHz - 4M\r\n- DDRAM 8GB/1600 (1 slot)\r\n- HDD 1.0TB SATA 5400rpm\r\n- NVIDIA GF 840M 2GB DDR3 // Intel HD 5500\r\n- DVD-RW\r\n- Card Reader 3.1 - USB3.0\r\n- 15.6" LED - HDMI - Webcam\r\n- LAN 10/100 - Wireless N - Bluetooth\r\n- Weight 2.37Kg - Battery 40Wh\r\n- OS Windows 8.1 Single Language 64Bits\r\n- Bảo hành 1 năm '),
(32, 2, 'NB Dell 5547 (N5547C) (Bạc)', 19900000, '2580_55477.jpg', '- Intel Core i7-4510U 2.0GHz - 3M\r\n- DDRAM 2x4GB/1600\r\n- HDD 1.0TB SATA\r\n- AMD HD R7 M265 2GB // Intel HD 4400\r\n- Card Reader 5.1 - USB3.0\r\n- 15.6" - HDMI - Webcam\r\n- LAN 10/100 - Wireless N - Bluetooth\r\n- Weight 2.38Kg - Battery 3 Cell\r\n- OS Win 8.1 Single Language 64Bits\r\n- Bảo hành 1 năm '),
(33, 2, 'Laptop Dell 3542-DND6X8 (Đen)', 18390000, '556_laptop-dell-3542-dnd6x8-denn.jpg', '- Intel Core i7-4510U 2.0GHz - 4M\r\n- DDRAM 4GB/1600 (chỉ 1 slot)\r\n- HDD 500GB SATA 5400rpm\r\n- NVIDIA GF GT 840M 2GB DDR3 // Intel HD 4400\r\n- DVD-RW\r\n- Card Reader 3.1 - USB 3.0\r\n- 15.6" HD LED - HDMI - Webcam\r\n- LAN 10/100 - Wireless N - Bluetooth\r\n- Weight 2.4Kg - Battery 40Wh\r\n- OS Win 8.1 Single Language 64Bits\r\n- Bảo hành 1 năm '),
(34, 2, 'NB Dell 3542 DND6X5 (Đen)', 18200000, '11337_35422.jpg', '- Intel Core i7-4510U 2.0GHz - 4M\r\n- DDRAM 8GB/1600 (1 slot)\r\n- HDD 1.0TB SATA\r\n- NVIDIA GF 840M 2GB DDR3 // Intel HD 4400\r\n- DVD-RW\r\n- Card Reader 3.1 - USB3.0\r\n- 15.6" LED - HDMI - Webcam\r\n- LAN 10/100 - Wireless N - Bluetooth\r\n- Weight 2.4Kg - Battery 4 Cell\r\n- OS Option\r\n- Bảo hành 1 năm '),
(35, 2, 'Laptop Dell 5447 (F5447-70044442) (Bạc)', 18190000, '19625_laptop-lenovo-g4070-594382733.jpg', '- Intel Core i7-4510U 2.0GHz - 4M\r\n- DDRAM 8GB/1600 (2 slot)\r\n- HDD 1.0TB SATA\r\n- AMD HD R7 M265 2GB DDR3 // Intel HD 4400\r\n- Card Reader - USB3.0\r\n- 14.0" HD LED - HDMI - Webcam\r\n- LAN 10/100 - Wireless N - Bluetooth 4.0\r\n- Weight 1.93Kg - Battery 43WHr\r\n- OS Option\r\n- Bảo hành 1 năm '),
(36, 3, 'Laptop Lenovo Y7070-80DU0024VN (Đen)', 34990000, '25984_laptop-lenovo-y7070-80du0024vn-denn.jpg', '- Intel Core i7-4710HQ 2.5GHz - 6M\r\n- DDRAM 2x 8GB/1600 (2 slot)\r\n- HDD 1.0TB (5400rpm)\r\n- NVIDIA GF GTX 860M 4GB GDDR5 // Intel HD 4600\r\n- Card reader 4.1 - USB 3.0\r\n- DVD-RW\r\n- 17.3" FHD LED Touch - HDMI - Webcam\r\n- LAN 10/100/1000 - Wireless - Bluetooth\r\n- Weight 3.4Kg - Battery 7300mAh\r\n- OS Win 8.1 Single Language 64Bits\r\n- Bảo hành 2 năm '),
(37, 3, 'Laptop Lenovo YoGa3-Pro-1370-80HE000WVN (Bạc)', 31990000, '26024_laptop-lenovo-yoga3-1370-80he000wvn-bacc.JPG', '- Intel Core M-5Y70 1.1GHz - 4M\r\n- DDRAM 4GB/1600 Onboard\r\n- SSD 256GB SATA 3\r\n- Intel HD 5300\r\n- Card Reader 2.1 - USB 3.0\r\n- 13.3" QHD LED Touch - HDMI - Webcam\r\n- Wireless - Bluetooth\r\n- Weight 1.2Kg - Battery 5900mAh\r\n- OS Win 8.1 Single Language 64Bit\r\n- Bảo hành 2 năm '),
(38, 4, 'Laptop HP Envy 15-K211TX (L1J71PA)', 22990000, '23985_hp-envy-155.jpg', '- Intel Core i7-5500U 2.4GHz - 4M\r\n- DDRAM 8GB/1600 (2 slot)\r\n- HDD 1.0TB 5400rpm SATA\r\n- NVIDIA GF GT 840M 2GB DDR3 // Intel HD 5500\r\n- Card Reader - USB 3.0\r\n- 15.6" HD LED - HDMI - Webcam\r\n- LAN 10/100/1000 - Wireless - Bluetooth\r\n- Weight 2.19Kg - Battery 4 Cell\r\n- OS Win 8.1 Single Language 64Bits\r\n- Bảo hành 2 năm '),
(39, 4, 'Laptop HP Probook 450-K9R21PA', 20490000, '6462_hp-probook-4500.jpg', '- Intel Core i7-4510U 2.0GHz - 4M\r\n- DDRAM 8GB/1600 (2 slot)\r\n- HDD 1.0TB 5400rpm\r\n- AMD Radeon R5 M255 2GB DDR3 // Intel HD 4400\r\n- DVD-RW\r\n- 15.6" HD LED - HDMI - Webcam\r\n- LAN 10/100/1000 - Wireless N - Bluetooth\r\n- Weight 2.06Kg - Battery 44Whrs\r\n- OS Option\r\n- Bảo hành 2 năm ');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `number` int(11) NOT NULL,
  `mem_id` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
`id` int(11) NOT NULL,
  `product_name` varchar(60) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`) VALUES
(1, 'Toshiba'),
(2, 'Dell'),
(3, 'Lenovo'),
(4, 'HP'),
(5, 'Asus'),
(6, 'Acer'),
(7, '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`mem_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `contact` varchar(1000) NOT NULL,
  `role` int(11) NOT NULL DEFAULT '2'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`mem_id`, `username`, `password`, `fname`, `lname`, `address`, `contact`, `role`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', '', '', 1),
(2, 'player', 'player', 'player', 'player', '', '', 2),
(4, 'trietcoi', '123456', 'Triết', 'Còi', '112 sư vạn hạnh', '09081111111', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `each_product`
--
ALTER TABLE `each_product`
 ADD PRIMARY KEY (`masp`), ADD KEY `id` (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
 ADD PRIMARY KEY (`number`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`mem_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `each_product`
--
ALTER TABLE `each_product`
MODIFY `masp` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `each_product`
--
ALTER TABLE `each_product`
ADD CONSTRAINT `each_product_ibfk_1` FOREIGN KEY (`id`) REFERENCES `products` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
