-- phpMyAdmin SQL Dump
-- version 4.2.7
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Oct 09, 2016 at 02:08 AM
-- Server version: 5.6.17-debug-log
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `phploversblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Tutorials'),
(2, 'Questions'),
(3, 'News'),
(4, 'Misc'),
(7, 'Events');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
`id` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category`, `title`, `body`, `author`, `tags`, `date`) VALUES
(1, 1, 'First post', 'askdfjhsad lfhasd kjfsadhl fkjsdhflk jsdfhkj sdhfkljsdahfkljsadhfk ljsahdfkjsda hfkjsdahfkjsdahlfkjsadhfasdfh a aslkjdf hsdjkf hlsadkjfhskjdfh shdfksdahfkhwoperu;alkf nmx,vbads fhs;adfkhnvm,xzcv;;irweqpythkdfjhsad lfhasd kjfsadhl fkjsdhflk jsdfhkj sdhfkljsdahfkljsadhfk ljsahdfkjsda hfkjsdahfkjsdahlfkjsadhfasdfh a aslkjdf hsdjkf hlsadkjfhskjdfh shdfksdahfkhwoperu;alkf nmx,vbads fhs;adfkhnvm,xzcv;;irweqpythkdfjhsad lfhasd kjfsadhl fkjsdhflk jsdfhkj sdhfkljsdahfkljsadhfk ljsahdfkjsda hfkjsdahfkjsdahlfkjsadhfasdfh a aslkjdf hsdjkf hlsadkjfhskjdfh shdfksdahfkhwoperu;alkf nmx,vbads fhs;adfkhnvm,xzcv;;irweqpythkdfjhsad lfhasd kjfsadhl fkjsdhflk jsdfhkj sdhfkljsdahfkljsadhfk ljsahdfkjsda hfkjsdahfkjsdahlfkjsadhfasdfh a aslkjdf hsdjkf hlsadkjfhskjdfh shdfksdahfkhwoperu;alkf nmx,vbads fhs;adfkhnvm,xzcv;;irweqpythkdfjhsad lfhasd kjfsadhl fkjsdhflk jsdfhkj sdhfkljsdahfkljsadhfk ljsahdfkjsda hfkjsdahfkjsdahlfkjsadhfasdfh a aslkjdf hsdjkf hlsadkjfhskjdfh shdfksdahfkhwoperu;alkf nmx,vbads fhs;adfkhnvm,xzcv;;irweqpythkdfjhsad lfhasd kjfsadhl fkjsdhflk jsdfhkj sdhfkljsdahfkljsadhfk ljsahdfkjsda hfkjsdahfkjsdahlfkjsadhfasdfh a aslkjdf hsdjkf hlsadkjfhskjdfh shdfksdahfkhwoperu;alkf nmx,vbads fhs;adfkhnvm,xzcv;;irweqpyth', 'Besho', 'WEb, PHP', '2016-10-07 23:39:47'),
(2, 2, 'Second', 'asdasd asdf sadf df s sdfsdfsad fsdf sdfdfsaasdasd asdf sadf df s sdfsdfsad fsdf sdfdfsaasdasd asdf sadf df s sdfsdfsad fsdf sdfdfsaasdasd asdf sadf df s sdfsdfsad fsdf sdfdfsaasdasd asdf sadf df s sdfsdfsad fsdf sdfdfsaasdasd asdf sadf df s sdfsdfsad fsdf sdfdfsaasdasd asdf sadf df s sdfsdfsad fsdf sdfdfsaasdasd asdf sadf df s sdfsdfsad fsdf sdfdfsaasdasd asdf sadf df s sdfsdfsad fsdf sdfdfsaasdasd asdf sadf df s sdfsdfsad fsdf sdfdfsaasdasd asdf sadf df s sdfsdfsad fsdf sdfdfsaasdasd asdf sadf df s sdfsdfsad fsdf sdfdfsaasdasd asdf sadf df s sdfsdfsad fsdf sdfdfsaasdasd asdf sadf df s sdfsdfsad fsdf sdfdfsaasdasd asdf sadf df s sdfsdfsad fsdf sdfdfsaasdasd asdf sadf df s sdfsdfsad fsdf sdfdfsaasdasd asdf sadf df s sdfsdfsad fsdf sdfdfsaasdasd asdf sadf df s sdfsdfsad fsdf sdfdfsaasdasd asdf sadf df s sdfsdfsad fsdf sdfdfsaasdasd asdf sadf df s sdfsdfsad fsdf sdfdfsaasdasd asdf sadf df s sdfsdfsad fsdf sdfdfsaasdasd asdf sadf df s sdfsdfsad fsdf sdfdfsaasdasd asdf sadf df s sdfsdfsad fsdf sdfdfsaasdasd asdf sadf df s sdfsdfsad fsdf sdfdfsaasdasd asdf sadf df s sdfsdfsad fsdf sdfdfsa', 'Mina', 'C#, SQL Server', '2016-10-07 23:44:42'),
(5, 4, 'New Post', 'I dont know what i should write here asda sdasd asdsadf aslkdf hjsaldkfh sdlkfh ash but finally you can repeat that many timesI dont know what i should write here asda sdasd asdsadf aslkdf hjsaldkfh sdlkfh ash but finally you can repeat that many timesI dont know what i should write here asda sdasd asdsadf aslkdf hjsaldkfh sdlkfh ash but finally you can repeat that many timesI dont know what i should write here asda sdasd asdsadf aslkdf hjsaldkfh sdlkfh ash but finally you can repeat that many timesI dont know what i should write here asda sdasd asdsadf aslkdf hjsaldkfh sdlkfh ash but finally you can repeat that many timesI dont know what i should write here asda sdasd asdsadf aslkdf hjsaldkfh sdlkfh ash but finally you can repeat that many timesI dont know what i should write here asda sdasd asdsadf aslkdf hjsaldkfh sdlkfh ash but finally you can repeat that many timesI dont know what i should write here asda sdasd asdsadf aslkdf hjsaldkfh sdlkfh ash but finally you can repeat that many timesI dont know what i should write here asda sdasd asdsadf aslkdf hjsaldkfh sdlkfh ash but finally you can repeat that many timesI dont know what i should write here asda sdasd asdsadf aslkdf hjsaldkfh sdlkfh ash but finally you can repeat that many timesI dont know what i should write here asda sdasd asdsadf aslkdf hjsaldkfh sdlkfh ash but finally you can repeat that many timesI dont know what i should write here asda sdasd asdsadf aslkdf hjsaldkfh sdlkfh ash but finally you can repeat that many timesI dont know what i should write here asda sdasd asdsadf aslkdf hjsaldkfh sdlkfh ash but finally you can repeat that many timesI dont know what i should write here asda sdasd asdsadf aslkdf hjsaldkfh sdlkfh ash but finally you can repeat that many timesI dont know what i should write here asda sdasd asdsadf aslkdf hjsaldkfh sdlkfh ash but finally you can repeat that many timesI dont know what i should write here asda sdasd asdsadf aslkdf hjsaldkfh sdlkfh ash but finally you can repeat that many timesI dont know what i should write here asda sdasd asdsadf aslkdf hjsaldkfh sdlkfh ash but finally you can repeat that many timesI dont know what i should write here asda sdasd asdsadf aslkdf hjsaldkfh sdlkfh ash but finally you can repeat that many timesI dont know what i should write here asda sdasd asdsadf aslkdf hjsaldkfh sdlkfh ash but finally you can repeat that many timesI dont know what i should write here asda sdasd asdsadf aslkdf hjsaldkfh sdlkfh ash but finally you can repeat that many timesI dont know what i should write here asda sdasd asdsadf aslkdf hjsaldkfh sdlkfh ash but finally you can repeat that many timesI dont know what i should write here asda sdasd asdsadf aslkdf hjsaldkfh sdlkfh ash but finally you can repeat that many timesI dont know what i should write here asda sdasd asdsadf aslkdf hjsaldkfh sdlkfh ash but finally you can repeat that many timesI dont know what i should write here asda sdasd asdsadf aslkdf hjsaldkfh sdlkfh ash but finally you can repeat that many timesI dont know what i should write here asda sdasd asdsadf aslkdf hjsaldkfh sdlkfh ash but finally you can repeat that many timesI dont know what i should write here asda sdasd asdsadf aslkdf hjsaldkfh sdlkfh ash but finally you can repeat that many timesI dont know what i should write here asda sdasd asdsadf aslkdf hjsaldkfh sdlkfh ash but finally you can repeat that many timesI dont know what i should write here asda sdasd asdsadf aslkdf hjsaldkfh sdlkfh ash but finally you can repeat that many timesI dont know what i should write here asda sdasd asdsadf aslkdf hjsaldkfh sdlkfh ash but finally you can repeat that many timesI dont know what i should write here asda sdasd asdsadf aslkdf hjsaldkfh sdlkfh ash but finally you can repeat that many timesI dont know what i should write here asda sdasd asdsadf aslkdf hjsaldkfh sdlkfh ash but finally you can repeat that many timesI dont know what i should write here asda sdasd asdsadf aslkdf hjsaldkfh sdlkfh ash but finally you can repeat that many timesI dont know what i should write here asda sdasd asdsadf aslkdf hjsaldkfh sdlkfh ash but finally you can repeat that many timesI dont know what i should write here asda sdasd asdsadf aslkdf hjsaldkfh sdlkfh ash but finally you can repeat that many timesI dont know what i should write here asda sdasd asdsadf aslkdf hjsaldkfh sdlkfh ash but finally you can repeat that many timesI dont know what i should write here asda sdasd asdsadf aslkdf hjsaldkfh sdlkfh ash but finally you can repeat that many timesI dont know what i should write here asda sdasd asdsadf aslkdf hjsaldkfh sdlkfh ash but finally you can repeat that many timesI dont know what i should write here asda sdasd asdsadf aslkdf hjsaldkfh sdlkfh ash but finally you can repeat that many timesI dont know what i should write here asda sdasd asdsadf aslkdf hjsaldkfh sdlkfh ash but finally you can repeat that many timesI dont know what i should write here asda sdasd asdsadf aslkdf hjsaldkfh sdlkfh ash but finally you can repeat that many timesI dont know what i should write here asda sdasd asdsadf aslkdf hjsaldkfh sdlkfh ash but finally you can repeat that many timesI dont know what i should write here asda sdasd asdsadf aslkdf hjsaldkfh sdlkfh ash but finally you can repeat that many timesI dont know what i should write here asda sdasd asdsadf aslkdf hjsaldkfh sdlkfh ash but finally you can repeat that many timesI dont know what i should write here asda sdasd asdsadf aslkdf hjsaldkfh sdlkfh ash but finally you can repeat that many times', 'Sasa', '', '2016-10-08 06:47:44'),
(7, 4, 'C# Post', 'C# is the best Programming language thanks to microsoft that made it for us today', 'Mina', '', '2016-10-08 06:51:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
