-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26 يناير 2025 الساعة 20:11
-- إصدار الخادم: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `realestatephp`
--

-- --------------------------------------------------------

--
-- بنية الجدول `about`
--

CREATE TABLE `about` (
  `id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` longtext NOT NULL,
  `image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `about`
--

INSERT INTO `about` (`id`, `title`, `content`, `image`) VALUES
(10, 'معلومات عنا', '<div id=\"pgc-w5d0dcc3394ac1-0-0\" class=\"panel-grid-cell\">\r\n<div id=\"panel-w5d0dcc3394ac1-0-0-0\" class=\"so-panel widget widget_sow-editor panel-first-child panel-last-child\" data-index=\"0\">\r\n<div class=\"so-widget-sow-editor so-widget-sow-editor-base\">\r\n<div class=\"siteorigin-widget-tinymce textwidget\">\r\n<p style=\"direction: rtl;\">مرحبًا بكم في <strong>REAL ESTATE</strong>، الوجهة الأمثل لتلبية جميع احتياجاتكم العقارية! نحن نسعى جاهدين لتقديم تجربة سلسة وموثوقة في عالم العقارات، حيث يجتمع الشغف بالمهنية لتوفير حلول تناسب تطلعاتكم وأحلامكم السكنية أو الاستثمارية.</p>\r\n<p style=\"direction: rtl;\">نحن نؤمن بأن اختيار العقار المثالي ليس مجرد قرار، بل هو رحلة لبناء مستقبل أفضل. لذلك، قمنا بتطوير منصتنا لتكون مرجعًا شاملًا يُساعدكم على استكشاف الفرص العقارية بسهولة وفعالية. سواء كنت تبحث عن منزل الأحلام، شقة للإيجار، أو فرصة استثمارية واعدة، فإننا نضمن لك تجربة مريحة وآمنة بفضل أدواتنا الذكية وفريقنا المتميز.</p>\r\n<h3 style=\"direction: rtl;\">ما الذي يميزنا؟</h3>\r\n<p style=\"direction: rtl;\"><strong>عروض متنوعة</strong>: نوفر مجموعة واسعة من العقارات التي تناسب مختلف الميزانيات والاحتياجات.</p>\r\n<p style=\"direction: rtl;\"><strong>سهولة البحث</strong>: بفضل محرك بحث متطور وفلاتر دقيقة، يمكنك العثور على العقار المناسب بسرعة.</p>\r\n<p style=\"direction: rtl;\"><strong>شفافية وموثوقية</strong>: نحن نحرص على تقديم معلومات دقيقة وصور حقيقية للعقارات لضمان رضا عملائنا.</p>\r\n<p style=\"direction: rtl;\"><strong>دعم استثنائي</strong>: فريقنا من الخبراء العقاريين متوفر دائمًا للإجابة على استفساراتك وتقديم المشورة.</p>\r\n<h3 style=\"direction: rtl;\">رسالتنا</h3>\r\n<p style=\"direction: rtl;\">نهدف إلى إعادة تعريف تجربة البحث عن العقار عبر تقديم منصة مبتكرة تجمع بين التكنولوجيا الحديثة والقيم الإنسانية. رؤيتنا هي أن نصبح الخيار الأول لكل من يبحث عن عقار في منطقتنا وخارجها.</p>\r\n<p style=\"direction: rtl;\">شكرًا لثقتكم بـ [اسم الموقع]. نحن هنا لمساعدتكم على تحقيق أحلامكم العقارية بخطوات واثقة ومبسطة!</p>\r\n<p style=\"direction: rtl;\">هل أنت مستعد لاتخاذ الخطوة التالية؟ ابدأ رحلتك الآن مع [اسم الموقع]، ودعنا نكون جزءًا من نجاحك!</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', 'sann.jpg');

-- --------------------------------------------------------

--
-- بنية الجدول `admin`
--

CREATE TABLE `admin` (
  `aid` int(10) NOT NULL,
  `auser` varchar(50) NOT NULL,
  `aemail` varchar(50) NOT NULL,
  `apass` varchar(50) NOT NULL,
  `adob` date NOT NULL,
  `aphone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `admin`
--

INSERT INTO `admin` (`aid`, `auser`, `aemail`, `apass`, `adob`, `aphone`) VALUES
(9, 'admin', 'admin@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1994-12-06', '1470002569');

-- --------------------------------------------------------

--
-- بنية الجدول `city`
--

CREATE TABLE `city` (
  `cid` int(50) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `sid` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `city`
--

INSERT INTO `city` (`cid`, `cname`, `sid`) VALUES
(9, 'السبعين', 2),
(10, 'معين', 2),
(11, 'الثورة', 2),
(12, 'خولان', 2),
(13, 'بني الحارث', 2),
(14, 'سنحان', 2);

-- --------------------------------------------------------

--
-- بنية الجدول `contact`
--

CREATE TABLE `contact` (
  `cid` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `contact`
--

INSERT INTO `contact` (`cid`, `name`, `email`, `phone`, `subject`, `message`) VALUES
(7, 'codeastro', 'asda@asd.com', '8888885454', 'codeastro.com', 'asdasdasd'),
(8, 'Omar Khamis', 'omarkhamis088@gmail.com', '0775144511', 'Error', 'مرحبا اريد افتح حساب');

-- --------------------------------------------------------

--
-- بنية الجدول `feedback`
--

CREATE TABLE `feedback` (
  `fid` int(50) NOT NULL,
  `uid` int(50) NOT NULL,
  `fdescription` varchar(300) NOT NULL,
  `status` int(1) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `feedback`
--

INSERT INTO `feedback` (`fid`, `uid`, `fdescription`, `status`, `date`) VALUES
(7, 28, 'This is a demo feedback in order to use set it as Testimonial for the site. Just a simply dummy text rather than using lorem ipsum text lines.', 1, '2022-07-23 16:07:08'),
(8, 33, 'This is great. This is just great. Hmmm, just a dummy text for users feedback.', 1, '2022-07-23 21:51:09');

-- --------------------------------------------------------

--
-- بنية الجدول `property`
--

CREATE TABLE `property` (
  `pid` int(50) NOT NULL,
  `title` varchar(200) NOT NULL,
  `pcontent` longtext NOT NULL,
  `type` varchar(100) NOT NULL,
  `bhk` varchar(50) NOT NULL,
  `stype` varchar(100) NOT NULL,
  `bedroom` int(50) NOT NULL,
  `bathroom` int(50) NOT NULL,
  `balcony` int(50) NOT NULL,
  `kitchen` int(50) NOT NULL,
  `hall` int(50) NOT NULL,
  `floor` varchar(50) NOT NULL,
  `size` int(50) NOT NULL,
  `price` int(50) NOT NULL,
  `location` varchar(200) NOT NULL,
  `city_id` int(50) NOT NULL,
  `state` varchar(100) NOT NULL,
  `feature` longtext NOT NULL,
  `pimage` varchar(300) NOT NULL,
  `pimage1` varchar(300) NOT NULL,
  `pimage2` varchar(300) NOT NULL,
  `pimage3` varchar(300) NOT NULL,
  `pimage4` varchar(300) NOT NULL,
  `uid` int(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `mapimage` varchar(300) NOT NULL,
  `topmapimage` varchar(300) NOT NULL,
  `groundmapimage` varchar(300) NOT NULL,
  `totalfloor` varchar(50) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `isFeatured` int(11) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `property`
--

INSERT INTO `property` (`pid`, `title`, `pcontent`, `type`, `bhk`, `stype`, `bedroom`, `bathroom`, `balcony`, `kitchen`, `hall`, `floor`, `size`, `price`, `location`, `city_id`, `state`, `feature`, `pimage`, `pimage1`, `pimage2`, `pimage3`, `pimage4`, `uid`, `status`, `mapimage`, `topmapimage`, `groundmapimage`, `totalfloor`, `date`, `isFeatured`, `city`) VALUES
(25, 'منزل الاجرب', '', 'house', '4 BHK', 'بيع', 4, 2, 0, 1, 1, '2nd Floor', 1869, 219690, 'تقاطع شارع خولان مع تقاطع شارع 24', 0, 'صنعاء', '<p>&nbsp;</p>\r\n<!---feature area start--->\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Property Age : </span>10 Years</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Swiming Pool : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Parking : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">GYM : </span>Yes</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Type : </span>Appartment</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Security : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Dining Capacity : </span>10 People</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Church/Temple : </span>Yes</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">3rd Party : </span>No</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Elevator : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">CCTV : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Water Supply : </span>Ground Water / Tank</li>\r\n</ul>\r\n</div>\r\n<!---feature area end---->\r\n<p>&nbsp;</p>', 'zillhms1.jpg', 'zillhms2.jpg', 'zillhms3.jpg', 'zillhms4.jpg', 'zillhms5.jpg', 36, 'available', 'floorplan_sample.jpg', 'zillhms7.jpg', 'zillhms6.jpg', '2 Floor', '2022-07-22 22:29:20', 0, NULL),
(30, 'منزل', '<p>منزل جديد</p>', 'flat', '1 BHK', 'rent', 3, 2, 1, 1, 1, '1st Floor', 75, 200, '24st', 0, 'صنعاء', '<p>&nbsp;</p>\r\n<!---feature area start--->\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Property Age : </span>10 Years</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Swiming Pool : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Parking : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">GYM : </span>Yes</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Type : </span>Apartment</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Security : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Dining Capacity : </span>10 People</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Church/Temple : </span>No</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">3rd Party : </span>No</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Elevator : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">CCTV : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Water Supply : </span>Ground Water / Tank</li>\r\n</ul>\r\n</div>\r\n<!---feature area end---->\r\n<p>&nbsp;</p>', 'photo_4_2025-01-26_05-39-50.jpg', 'photo_2025-01-26_05-40-38.jpg', 'photo_5_2025-01-26_05-39-50.jpg', 'photo_1_2025-01-26_05-39-50.jpg', 'photo_6_2025-01-26_05-39-50.jpg', 39, 'available', 'photo_3_2025-01-26_05-39-50.jpg', 'photo_7_2025-01-26_05-39-50.jpg', 'photo_2_2025-01-26_05-39-50.jpg', '2 Floor', '2025-01-26 05:56:56', 1, 'السبعين');

-- --------------------------------------------------------

--
-- بنية الجدول `state`
--

CREATE TABLE `state` (
  `sid` int(50) NOT NULL,
  `sname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `state`
--

INSERT INTO `state` (`sid`, `sname`) VALUES
(2, 'صنعاء'),
(3, 'إب'),
(4, 'ذمار'),
(7, 'عمران'),
(9, 'صعدة'),
(10, 'الحديدة'),
(15, 'مارب');

-- --------------------------------------------------------

--
-- بنية الجدول `user`
--

CREATE TABLE `user` (
  `uid` int(50) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `uemail` varchar(100) NOT NULL,
  `uphone` varchar(20) NOT NULL,
  `upass` varchar(50) NOT NULL,
  `utype` varchar(50) NOT NULL,
  `uimage` varchar(300) NOT NULL,
  `allowed_number` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `user`
--

INSERT INTO `user` (`uid`, `uname`, `uemail`, `uphone`, `upass`, `utype`, `uimage`, `allowed_number`) VALUES
(28, 'Christine', 'christine@mail.com', '7777444455', '6812f136d636e737248d365016f8cfd5139e387c', 'user', 'gr7.png', 3),
(29, 'مكتب العالمية للعقار', 'howarda@mail.com', '7775552214', '6812f136d636e737248d365016f8cfd5139e387c', 'agent', 'sanaa.jpg', 20),
(30, 'Thomas Olson', 'thomas@mail.com', '7896665555', '6812f136d636e737248d365016f8cfd5139e387c', 'user', 'avatarm7-min.jpg', 3),
(31, 'مكتب السعادة للعقارات', 'moore@mail.com', '7896547855', '6812f136d636e737248d365016f8cfd5139e387c', 'agent', 'borj.jpg', 20),
(32, 'Alwaleed', 'carl@mail.com', '1458887969', '6812f136d636e737248d365016f8cfd5139e387c', 'agent', 'waleed.jpg', 20),
(33, 'Noah Stones', 'noah@mail.com', '7965555544', '6812f136d636e737248d365016f8cfd5139e387c', 'user', 'usersys-min.png', 3),
(34, 'Fred Godines', 'fred@mail.com', '7850002587', '6812f136d636e737248d365016f8cfd5139e387c', '	\nuser', 'user-a-min.png', 15),
(35, 'Michael', 'michael@mail.com', '8542221140', '6812f136d636e737248d365016f8cfd5139e387c', 'user', 'usric.png', 3),
(36, 'Omar Khamis', 'omarkhamis088@gmail.com', '775144511', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '	\nuser', '20220418_122718.jpg', 20),
(37, 'Omar Khamis', 'omarkhamis0888@gmail.com', '0775144511', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'user', '77.png', 10),
(38, 'Suheel Khamis', 'suheelkhamis088@gmail.com', '0775144511', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'user', '77.png', 3),
(39, 'Omar Khamis', 'omarkhamis8@gmail.com', '0775144511', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'user', '77.png', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`cid`),
  ADD KEY `fk_city_state` (`sid`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fid`),
  ADD KEY `fk_feedback_user` (`uid`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `cid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `cid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `pid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `sid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- قيود الجداول المُلقاة.
--

--
-- قيود الجداول `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `fk_city_state` FOREIGN KEY (`sid`) REFERENCES `state` (`sid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- قيود الجداول `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `fk_feedback_user` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
