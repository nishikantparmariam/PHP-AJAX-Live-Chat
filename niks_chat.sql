-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2019 at 01:51 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `niks_chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `id` varchar(500) NOT NULL,
  `name` varchar(500) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `day` varchar(20) NOT NULL,
  `time` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`id`, `name`, `message`, `day`, `time`) VALUES
('1531244903', 'niks', 'Hello', 'Tuesday', '11:18am'),
('1531244905', 'niks', 'Hi', 'Tuesday', '11:18am'),
('1531244913', 'niks', 'Hw are U man??', 'Tuesday', '11:18am'),
('1531244920', 'niks', 'Good', 'Tuesday', '11:18am'),
('1531244925', 'niks', 'I also good', 'Tuesday', '11:18am'),
('1531244929', 'niks', 'geg', 'Tuesday', '11:18am'),
('1531487277', 'niks', 'alops', 'Friday', '06:37am'),
('1531487279', 'niks', 'f', 'Friday', '06:37am'),
('1531487281', 'niks', 'dd', 'Friday', '06:38am'),
('1531487282', 'niks', 'dkdkdkdk', 'Friday', '06:38am'),
('1531487284', 'niks', 'ddkdkkdkd', 'Friday', '06:38am'),
('1531487287', 'niks', 'dkdkd', 'Friday', '06:38am'),
('1531487289', 'niks', 'dkdk', 'Friday', '06:38am'),
('1531487294', 'niks', 'fkfk', 'Friday', '06:38am'),
('1531659957', 'niks', 'kd;laskd;lsakd;lsakd;lk l;kd;lak ;laskd asl;kd a', 'Sunday', '06:35am'),
('1531659963', 'niks', 'ksd;lks d;ladkaslkdhsadjs kldjaskl djaslkdjalkdjaslkdjaslkdjsakl jsldk jsadlkjsa lkdsjdklsaj dlkasj lk', 'Sunday', '06:36am'),
('1531659971', 'niks', 'l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l', 'Sunday', '06:36am'),
('1531659981', 'niks', 'l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l ', 'Sunday', '06:36am'),
('1531660006', 'niks', 'alopssosos', 'Sunday', '06:36am'),
('1531660009', 'niks', 'c', 'Sunday', '06:36am'),
('1531660010', 'niks', 'csc', 'Sunday', '06:36am'),
('1531660011', 'niks', 'scsc', 'Sunday', '06:36am'),
('1531660012', 'niks', 'scscs', 'Sunday', '06:36am'),
('1531660013', 'niks', 'cscsc', 'Sunday', '06:36am'),
('1531660013', 'niks', 'scscs', 'Sunday', '06:36am'),
('1531660014', 'niks', 'csc', 'Sunday', '06:36am'),
('1531660014', 'niks', 'scs', 'Sunday', '06:36am'),
('1531660015', 'niks', 'cs', 'Sunday', '06:36am'),
('1531660016', 'niks', 'scscsc', 'Sunday', '06:36am'),
('1531660017', 'niks', 'cscscs', 'Sunday', '06:36am'),
('1531660018', 'niks', 'scscs', 'Sunday', '06:36am'),
('1531660020', 'niks', 'cscscscscscs', 'Sunday', '06:37am'),
('1531660021', 'niks', 'scscsc', 'Sunday', '06:37am'),
('1531660021', 'niks', 'cscscsc', 'Sunday', '06:37am'),
('1531660022', 'niks', 'scscc', 'Sunday', '06:37am'),
('1531660023', 'niks', 'cscsc', 'Sunday', '06:37am'),
('1531660025', 'niks', 'cc', 'Sunday', '06:37am'),
('1531660026', 'niks', 'ccs', 'Sunday', '06:37am'),
('1531660027', 'niks', 'cscscc', 'Sunday', '06:37am'),
('1531660028', 'niks', 'sccsc', 'Sunday', '06:37am'),
('1531660029', 'niks', 'cscscs', 'Sunday', '06:37am'),
('1531660038', 'niks', 'Computer Science !!', 'Sunday', '06:37am'),
('1531745994', 'niks', 'hello', 'Monday', '06:29am'),
('1531746000', 'niks', 'hi', 'Monday', '06:30am'),
('1531746004', 'niks', 'glg', 'Monday', '06:30am'),
('1531759579', 'niks', 'jklsd', 'Monday', '10:16am'),
('1531759584', 'niks', 'sl;fs', 'Monday', '10:16am'),
('1531759592', 'niks', 'loplop', 'Monday', '10:16am'),
('1531902977', 'niks', 'dffsd', 'Wednesday', '02:06pm'),
('1531902988', 'niks', 'df', 'Wednesday', '02:06pm'),
('1531902997', 'niks', 'df', 'Wednesday', '02:06pm'),
('1531903000', 'niks', ''';l;''', 'Wednesday', '02:06pm'),
('1531903005', 'niks', 'l;l;k;lk;lk', 'Wednesday', '02:06pm'),
('1532091300', 'niks', 's', 'Friday', '06:25am'),
('1532091313', 'niks', 'loploploploploploploploploploploplop', 'Friday', '06:25am'),
('1531244903', 'niks', 'Hello', 'Tuesday', '11:18am'),
('1531244905', 'niks', 'Hi', 'Tuesday', '11:18am'),
('1531244913', 'niks', 'Hw are U man??', 'Tuesday', '11:18am'),
('1531244920', 'niks', 'Good', 'Tuesday', '11:18am'),
('1531244925', 'niks', 'I also good', 'Tuesday', '11:18am'),
('1531244929', 'niks', 'geg', 'Tuesday', '11:18am'),
('1531487277', 'niks', 'alops', 'Friday', '06:37am'),
('1531487279', 'niks', 'f', 'Friday', '06:37am'),
('1531487281', 'niks', 'dd', 'Friday', '06:38am'),
('1531487282', 'niks', 'dkdkdkdk', 'Friday', '06:38am'),
('1531487284', 'niks', 'ddkdkkdkd', 'Friday', '06:38am'),
('1531487287', 'niks', 'dkdkd', 'Friday', '06:38am'),
('1531487289', 'niks', 'dkdk', 'Friday', '06:38am'),
('1531487294', 'niks', 'fkfk', 'Friday', '06:38am'),
('1531659957', 'niks', 'kd;laskd;lsakd;lsakd;lk l;kd;lak ;laskd asl;kd a', 'Sunday', '06:35am'),
('1531659963', 'niks', 'ksd;lks d;ladkaslkdhsadjs kldjaskl djaslkdjalkdjaslkdjaslkdjsakl jsldk jsadlkjsa lkdsjdklsaj dlkasj lk', 'Sunday', '06:36am'),
('1531659971', 'niks', 'l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l', 'Sunday', '06:36am'),
('1531659981', 'niks', 'l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l l ', 'Sunday', '06:36am'),
('1531660006', 'niks', 'alopssosos', 'Sunday', '06:36am'),
('1531660009', 'niks', 'c', 'Sunday', '06:36am'),
('1531660010', 'niks', 'csc', 'Sunday', '06:36am'),
('1531660011', 'niks', 'scsc', 'Sunday', '06:36am'),
('1531660012', 'niks', 'scscs', 'Sunday', '06:36am'),
('1531660013', 'niks', 'cscsc', 'Sunday', '06:36am'),
('1531660013', 'niks', 'scscs', 'Sunday', '06:36am'),
('1531660014', 'niks', 'csc', 'Sunday', '06:36am'),
('1531660014', 'niks', 'scs', 'Sunday', '06:36am'),
('1531660015', 'niks', 'cs', 'Sunday', '06:36am'),
('1531660016', 'niks', 'scscsc', 'Sunday', '06:36am'),
('1531660017', 'niks', 'cscscs', 'Sunday', '06:36am'),
('1531660018', 'niks', 'scscs', 'Sunday', '06:36am'),
('1531660020', 'niks', 'cscscscscscs', 'Sunday', '06:37am'),
('1531660021', 'niks', 'scscsc', 'Sunday', '06:37am'),
('1531660021', 'niks', 'cscscsc', 'Sunday', '06:37am'),
('1531660022', 'niks', 'scscc', 'Sunday', '06:37am'),
('1531660023', 'niks', 'cscsc', 'Sunday', '06:37am'),
('1531660025', 'niks', 'cc', 'Sunday', '06:37am'),
('1531660026', 'niks', 'ccs', 'Sunday', '06:37am'),
('1531660027', 'niks', 'cscscc', 'Sunday', '06:37am'),
('1531660028', 'niks', 'sccsc', 'Sunday', '06:37am'),
('1531660029', 'niks', 'cscscs', 'Sunday', '06:37am'),
('1531660038', 'niks', 'Computer Science !!', 'Sunday', '06:37am'),
('1531745994', 'niks', 'hello', 'Monday', '06:29am'),
('1531746000', 'niks', 'hi', 'Monday', '06:30am'),
('1531746004', 'niks', 'glg', 'Monday', '06:30am'),
('1531759579', 'niks', 'jklsd', 'Monday', '10:16am'),
('1531759584', 'niks', 'sl;fs', 'Monday', '10:16am'),
('1531759592', 'niks', 'loplop', 'Monday', '10:16am'),
('1531902977', 'niks', 'dffsd', 'Wednesday', '02:06pm'),
('1531902988', 'niks', 'df', 'Wednesday', '02:06pm'),
('1531902997', 'niks', 'df', 'Wednesday', '02:06pm'),
('1531903000', 'niks', ''';l;''', 'Wednesday', '02:06pm'),
('1531903005', 'niks', 'l;l;k;lk;lk', 'Wednesday', '02:06pm'),
('1532091300', 'niks', 's', 'Friday', '06:25am'),
('1532091313', 'niks', 'loploploploploploploploploploploplop', 'Friday', '06:25am'),
('1553690903', 'niks', 'aa', 'Wednesday', '05:18am');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
