-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2022 at 11:49 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(3) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Nature'),
(2, 'Space');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(3) NOT NULL,
  `post_category_id` int(3) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_author` varchar(255) NOT NULL,
  `post_date` date NOT NULL,
  `post_image` text NOT NULL,
  `post_content` text NOT NULL,
  `post_tags` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_category_id`, `post_title`, `post_author`, `post_date`, `post_image`, `post_content`, `post_tags`) VALUES
(1, 1, 'My first blog post', 'Mirza ', '2022-02-19', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce pharetra lacus pretium porta mollis. Curabitur fermentum, tellus at varius malesuada, arcu orci sollicitudin nulla, sed posuere urna orci at nibh. Proin vel mauris id leo venenatis facilisis. Nunc egestas quam luctus sapien imperdiet, vel pulvinar orci molestie. Aliquam placerat, eros a pretium sollicitudin, mauris libero viverra leo, a ultrices elit velit in lacus. Aliquam erat volutpat. Cras fermentum fermentum libero non pretium. Aliquam leo urna, sagittis vitae felis laoreet, maximus vulputate ipsum.\r\n\r\nVivamus quis metus vestibulum, egestas eros et, viverra risus. Aenean libero urna, ultricies ac ante ut, volutpat aliquet risus. In vitae dapibus neque. Donec sollicitudin metus a ligula imperdiet sodales. Nullam pellentesque tortor sed augue luctus malesuada. Fusce at viverra velit. Pellentesque condimentum, enim non laoreet euismod, est orci sodales quam, vitae maximus dolor ipsum id felis. Donec mi nisl, laoreet quis pulvinar nec, gravida id nisl. Nam elementum rhoncus justo id porttitor. Sed eu tincidunt arcu. Fusce lacinia sem nulla, vulputate maximus purus eleifend a. Proin ac tincidunt leo, vestibulum interdum velit.\r\n\r\nProin nec felis dapibus, maximus libero eu, accumsan nulla. Morbi ultrices volutpat leo, at egestas felis finibus sed. Nulla finibus nisl lobortis libero tristique, ac fermentum neque tincidunt. Integer pretium arcu felis, vel imperdiet dui cursus a. Curabitur elementum, neque at mattis iaculis, est nulla ultrices enim, sit amet iaculis sapien mi quis augue. Proin accumsan felis nec nisi semper suscipit. Sed accumsan est eu auctor dictum. In egestas in arcu eget cursus. Vestibulum quis hendrerit enim, id aliquet nunc. Vivamus congue lacinia lorem, ut volutpat arcu placerat at. Integer imperdiet tristique diam sed placerat.\r\n\r\nCurabitur mauris magna, fringilla quis placerat non, tempus at tellus. Etiam viverra accumsan libero, vel auctor quam rhoncus eget. Ut ultrices ex ut imperdiet convallis. Sed rutrum, justo in aliquam consequat, urna magna pretium nibh, non varius magna enim semper nibh. Maecenas ac purus eu nisi hendrerit pulvinar. Vestibulum a felis sit amet quam pulvinar varius. Maecenas lobortis nunc ut nisl iaculis tincidunt. Donec massa sapien, tincidunt eget metus sed, venenatis dictum est. Sed mauris arcu, porta non velit in, congue congue magna.\r\n\r\nPellentesque facilisis lobortis posuere. Pellentesque faucibus nulla id consectetur dictum. Cras porttitor congue luctus. Morbi vitae mi eu ante semper tincidunt id non nunc. Morbi aliquet magna eget arcu aliquam faucibus. Maecenas orci diam, ullamcorper sed tellus quis, dignissim vestibulum enim. Ut pulvinar elementum justo, vel vulputate nisi dictum at. Nam nec ante congue, lobortis enim sed, faucibus neque.', 'lorem, mirza, first'),
(2, 2, 'Second Blog Post', 'Mirza', '2022-02-19', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus faucibus elementum iaculis. Nullam tincidunt tempus tempor. Quisque nec sapien id tortor tempor commodo eget pellentesque lacus. Nulla pellentesque luctus congue. In magna elit, feugiat in augue consectetur, pellentesque tempus est. Sed dictum leo eu ex accumsan dictum. Nullam cursus quam vel orci ullamcorper, et lacinia lacus imperdiet.\r\n\r\nNam condimentum id mi vel imperdiet. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean id volutpat tellus. Duis urna quam, volutpat id tempus eget, tincidunt ac purus. Donec tempor at ante vel ornare. In id bibendum magna. Maecenas ullamcorper, nisl id ornare mollis, nisi risus suscipit lacus, sit amet tincidunt libero velit ac augue. Vestibulum lobortis ac justo quis vestibulum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ut lectus malesuada, eleifend enim sed, porttitor purus.        ', 'lorem, mirza, second');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(3) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `randSalt` varchar(255) NOT NULL DEFAULT '$2y$10$1234512345123451234512'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `role`, `randSalt`) VALUES
(43, 'admin', '$2y$10$123451234512345123451ujdbNOQF.98MW.NKZDYMje30tdDsZxYW', 'admin', '$2y$10$1234512345123451234512'),
(52, 'user', '$2y$10$123451234512345123451uPnd6pUGcVw9WlJQAYsowmHZLaJwl0TO', '', '$2y$10$1234512345123451234512');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
