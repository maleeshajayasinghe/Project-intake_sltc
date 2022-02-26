SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


-- Database: `ccintake`

-- Table structure for table `application`

CREATE TABLE `application` (
  `appid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `jobid` int(11) NOT NULL,
  `document` varchar(1000) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table `application`
--

INSERT INTO `application` (`appid`, `userid`, `jobid`, `document`, `date`) VALUES
(1, 2, 2, 'AdaGrad Project Proposal .pdf', '2021-07-21'),
(2, 2, 3, 'CYBERHAT 1.0_Article.pdf', '2021-07-26');

-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `catid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`catid`, `name`) VALUES
(1, 'Front End'),
(2, 'Back End'),
(3, 'Android Development');

-- Table structure for table `employer`
--

CREATE TABLE `student` (
  `studentid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employer`
--

INSERT INTO `student` (`studentid`, `name`, `email`, `password`, `type`) VALUES
(2, 'approxsol', 'ali@gmail.com', '123', 1),
(3, 'LG', 'lg123@gmail.com', '123', 1);

-- table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `jobid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `catid` int(11) NOT NULL,
  `description` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `skills` varchar(50) NOT NULL,
  `studentid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`jobid`, `name`, `catid`, `description`, `position`, `skills`,  `studentid`) VALUES
(1, 'Front end Designer', 1, 'Bid documents are used to solicit proposals from prospective sellers. Terms such as bid, tender, or quotation are generally used when the seller selection decision is based on price (as when buying commercial or standard items), while a term such as proposal is generally used when other considerations such as technical capability or technical approach are the most important', 'UX/UI Engineer, Software Engineer', 'Java, C, C++',  2),
(2, 'Android developer', 3, 'Bid documents are used to solicit proposals from prospective sellers. Terms such as bid, tender, or quotation are generally used when the seller selection decision is based on price (as when buying commercial or standard items), while a term such as proposal is generally used when other considerations such as technical capability or technical approach are the most important', 'Software Engineer, Software Developer', 'Java, Pyhton, C, C++',  2),
(3, 'Asp.net developer', 2, 'Bid documents are used to solicit proposals from prospective sellers. Terms such as bid, tender, or quotation are generally used when the seller selection decision is based on price (as when buying commercial or standard items), while a term such as proposal is generally used when other considerations such as technical capability or technical approach are the most important', 'Fron End Developer', 'Java, C, C++, PHP',2);

-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `profileid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `qulification` varchar(50) NOT NULL,
  `exp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `name`, `email`, `password`, `type`) VALUES
(2, 'usman', 'usman@gmail.com', '123', 2),
(4, 'zeeshan', 'zeeshan@gmail.com', '123', 2),
(5, 'arzoo', 'arzoo@gmail.com', '000', 2),
(6, 'akbar', 'akbar@gmail.com', '123', 2),
(7, 'demo', 'demo', '', 2),
(8, 'demo', 'demo@gmail.com', '123', 2);

-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`appid`),
  ADD KEY `FK_application` (`userid`);
  
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`catid`);

--
-- Indexes for table `employer`

ALTER TABLE `student`
  ADD PRIMARY KEY (`studentid`);
  
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`jobid`),
  ADD KEY `FK_jobs` (`studentid`);


-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`profileid`),
  ADD KEY `FK_profile` (`userid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);


-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `appid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `catid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employer`
--
ALTER TABLE `student`
  MODIFY `studentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `jobid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `profileid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `application`
--
ALTER TABLE `application`
  ADD CONSTRAINT `FK_application` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



