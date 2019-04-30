-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 29, 2019 at 10:28 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lab8`
--

-- --------------------------------------------------------

--
-- Table structure for table `ReadingList`
--

CREATE TABLE `ReadingList` (
  `ID` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `URL` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Description` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ReadingList`
--

INSERT INTO `ReadingList` (`ID`, `Date`, `Name`, `URL`, `Description`) VALUES
(1, '1990-04-13', 'Aurore', 'http://www.wyman.com/', 'Atque similique deserunt mollitia impedit odio aperiam. Non aut provident illum id. Facere enim et quasi inventore quo. Doloremque asperiores molestiae ut voluptatibus ullam quisquam non.'),
(2, '2017-05-14', 'Rene', 'http://www.halvorson.com/', 'Aut et consequatur magnam assumenda nam. Ipsum quo rerum repellat sapiente ad. At ratione alias nihil sint alias aut reprehenderit.'),
(3, '1977-10-02', 'Eveline', 'http://kuhlman.org/', 'Voluptatibus sed aliquam soluta dicta asperiores. Consectetur quasi iste aliquid. Quaerat magnam quas exercitationem vel sit doloremque voluptatem.'),
(4, '1974-06-14', 'Effie', 'http://www.friesen.org/', 'Eaque deleniti nobis illo dolor quas et assumenda. Aperiam eum rem ut autem labore deserunt. Harum sed dicta ea voluptas in dolores tempora.'),
(5, '2001-06-08', 'Alverta', 'http://murazikrosenbaum.info/', 'Voluptas veritatis laboriosam sunt dolores est. Rerum voluptate magni placeat repudiandae. Sed voluptate et consequatur ut similique eos. Laboriosam laborum voluptates aut nihil et ea occaecati quidem.'),
(6, '2010-11-30', 'Douglas', 'http://www.okeefewhite.com/', 'Minus optio doloribus quo. Iure corrupti ut officiis soluta minus distinctio. Harum dolorum quas quam iusto. Rerum fugiat error ut laborum excepturi.'),
(7, '2000-10-29', 'Rhiannon', 'http://thielrempel.org/', 'Provident quisquam eum aliquam non architecto explicabo. Sequi qui suscipit non nam.'),
(8, '2016-06-18', 'Erin', 'http://www.stehr.com/', 'Minima consequuntur quia voluptas sint nihil quo laborum ea. Itaque voluptas velit eum sapiente aut. Dicta excepturi placeat veniam enim nisi nulla. Doloribus incidunt consectetur voluptas omnis temporibus quo voluptatem.'),
(9, '1978-06-22', 'Karine', 'http://www.torp.com/', 'Quod amet tempore et. Dolores ad libero placeat porro. Omnis neque vel fugit modi sequi. Cumque nam totam sunt nisi nisi.'),
(10, '1992-06-30', 'Jessyca', 'http://kuhlman.info/', 'Consectetur et accusamus veniam quae sed officia velit. Rerum laudantium sunt est rerum omnis laborum. Ut in corporis fuga sunt maxime pariatur sit.'),
(11, '1985-01-24', 'Chanel', 'http://cartwright.info/', 'Illum autem repellendus ut. Aliquid eum ipsa et distinctio aut. Sequi qui eaque consequatur totam quae nostrum molestiae. Harum dolore amet illo quo aut sapiente. Eveniet aperiam veritatis et commodi libero aliquam.'),
(12, '2000-10-15', 'Willis', 'http://boylemorar.net/', 'Assumenda facere laudantium perferendis atque. Aut quos consequatur dignissimos.'),
(13, '2000-07-30', 'Alex', 'http://becker.com/', 'Alias nemo corporis sed enim reiciendis voluptatem. Soluta pariatur quo libero ipsam et odio. Et quo quo ipsa eum ut. Consequatur rerum quasi ut harum.'),
(14, '2010-03-21', 'Dominique', 'http://www.ratkekirlin.com/', 'Cumque corporis aut eligendi voluptatem. Harum libero sed libero explicabo nobis est. Quibusdam ut sint blanditiis voluptas ut et nisi reiciendis. Culpa in dolor veniam molestiae asperiores.'),
(15, '2004-07-08', 'Imelda', 'http://www.wilkinson.net/', 'Saepe rerum minus exercitationem quasi voluptates magnam molestiae. Modi omnis non quos alias. Sit beatae quas totam non porro saepe ex. Dolorem voluptatem officia ipsam nemo nisi.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ReadingList`
--
ALTER TABLE `ReadingList`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ReadingList`
--
ALTER TABLE `ReadingList`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
