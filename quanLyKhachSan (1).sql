-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th12 07, 2021 lúc 08:46 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanLyKhachSan`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `passwordd` varchar(255) DEFAULT NULL,
  `userID` int(11) DEFAULT NULL,
  `role` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`id`, `username`, `passwordd`, `userID`, `role`) VALUES
(1, 'admin', 'admin', 1, 0),



-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orderr`
--

CREATE TABLE `orderr` (
  `id` int(11) NOT NULL,
  `userID` int(11) DEFAULT NULL,
  `roomtype` varchar(255) DEFAULT NULL,
  `roomSize` varchar(20) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `timee` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `type` varchar(50) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `isUsed` varchar(5) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `room`
--

INSERT INTO `room` (`id`, `type`, `size`, `location`, `isUsed`, `price`) VALUES
(1, 'Single', 'small', 'Ha Noi', 'yes', '1.500.000'),
(2, 'Single', 'small', 'NgheAn', 'no', '1.600.000'),
(3, 'Single', 'small', 'Ha Noi', 'no', '1.750.000'),
(4, 'Single', 'small', 'Ha Noi', 'no', '1.600.000'),
(5, 'Single', 'small', 'Ha Noi', 'no', '1.700.000'),
(6, 'Double', 'Big', 'Ha Noi', 'no', '1.750.000'),
(7, 'Double', 'Big', 'Ha Noi', 'no', '1.800.000'),
(9, 'Single', 'small', 'HaiPhong', 'no', '1.850.000'),
(10, 'Single', 'small', 'CaMau', 'no', '1.900.000'),
(11, 'Single', 'small', 'DaLat', 'no', '2.000.000'),
(12, 'Double', 'big', 'HoChiMinh', 'no', '2.500.00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tracking`
--

CREATE TABLE `tracking` (
  `id` int(11) NOT NULL,
  `roomID` int(11) DEFAULT NULL,
  `userID` int(11) DEFAULT NULL,
  `timee` varchar(255) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tracking`
--

INSERT INTO `tracking` (`id`, `roomID`, `userID`, `timee`, `type`, `price`) VALUES
(4, 7, 2, '', 'out', '1.800.000'),
(5, 2, 2, '2021-12-16T14:42', 'out', '1.600.000'),
(6, 2, 2, '2021-12-09T14:42', 'in', '0'),
(7, 2, 2, '2021-12-12T14:42', 'out', '1.600.000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `userr`
--

CREATE TABLE `userr` (
  `id` int(11) NOT NULL,
  `userName` varchar(255) DEFAULT NULL,
  `userAddress` varchar(255) DEFAULT NULL,
  `userPhone` varchar(20) DEFAULT NULL,
  `userMail` varchar(50) DEFAULT NULL,
  `userDoB` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `userr`
--

INSERT INTO `userr` (`id`, `userName`, `userAddress`, `userPhone`, `userMail`, `userDoB`) VALUES
(1, 'Nguyen Tran Admin', 'Ha Noi', '123456789', 'aaa@gmail.com', '2021-12-16'),
(2, 'Nguyen Van A', 'Ha Noi', '0123456789', 'a123@gmail.com', '2021-12-01'),
(9, 'Nguyen Van AB', 'HA noiiii', '48767476743', 'aaaa@123.com', '2021-12-17');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `usingRoom`
--

CREATE TABLE `usingRoom` (
  `id` int(11) NOT NULL,
  `roomID` int(11) DEFAULT NULL,
  `userID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `usingRoom`
--

INSERT INTO `usingRoom` (`id`, `roomID`, `userID`) VALUES
(6, 1, 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userID` (`userID`);

--
-- Chỉ mục cho bảng `orderr`
--
ALTER TABLE `orderr`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userID` (`userID`);

--
-- Chỉ mục cho bảng `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tracking`
--
ALTER TABLE `tracking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `roomID` (`roomID`),
  ADD KEY `userID` (`userID`);

--
-- Chỉ mục cho bảng `userr`
--
ALTER TABLE `userr`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `usingRoom`
--
ALTER TABLE `usingRoom`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userID` (`userID`),
  ADD KEY `roomID` (`roomID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `orderr`
--
ALTER TABLE `orderr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `tracking`
--
ALTER TABLE `tracking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `userr`
--
ALTER TABLE `userr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `usingRoom`
--
ALTER TABLE `usingRoom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `account_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `userr` (`id`);

--
-- Các ràng buộc cho bảng `orderr`
--
ALTER TABLE `orderr`
  ADD CONSTRAINT `orderr_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `userr` (`id`);

--
-- Các ràng buộc cho bảng `tracking`
--
ALTER TABLE `tracking`
  ADD CONSTRAINT `tracking_ibfk_1` FOREIGN KEY (`roomID`) REFERENCES `room` (`id`),
  ADD CONSTRAINT `tracking_ibfk_2` FOREIGN KEY (`userID`) REFERENCES `room` (`id`);

--
-- Các ràng buộc cho bảng `usingRoom`
--
ALTER TABLE `usingRoom`
  ADD CONSTRAINT `usingroom_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `userr` (`id`),
  ADD CONSTRAINT `usingroom_ibfk_2` FOREIGN KEY (`roomID`) REFERENCES `room` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
