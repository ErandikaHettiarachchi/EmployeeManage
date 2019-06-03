CREATE TABLE `emergencydetails` (
  `id` int(11) NOT NULL,
  `cntperson` varchar(100) NOT NULL,
  `address` varchar(150) NOT NULL,
  `contact` int(12) NOT NULL,
  `blood` varchar(5) NOT NULL,
  `allergic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `emergencydetails` (`id`, `cntperson`, `address`, `contact`, `blood`, `allergic`) VALUES
(1, '545', '545', 54, '545', '54'),
(1, 'Ariyarathne Hettiarachchi', 'No.34,Karapitiya,Galle.', 716279285, 'A+', 'No'),
(0, 'Ariyarathne Hettiarachchi', 'No.34,Karapitiya,Galle.', 716279285, 'A+', 'No'),
(123, 'sd', 'asd', 0, 'asd', 'sa'),
(1, 'Ariyarathne Hettiarachchi', 'suwasewana', 716279285, 'A+', 'No'),
(1, 'suwan', 'abc', 716279285, 'B+', 'No'),
(120, 'Shanu', 'suwasewana', 71445767, 'A+', 'no');


CREATE TABLE `employee` (
  `id` int(20) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `gendar` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(150) NOT NULL,
  `phone` int(10) NOT NULL,
  `hireddate` date NOT NULL,
  `department` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `employee` (`id`, `fname`, `lname`, `gendar`, `email`, `address`, `phone`, `hireddate`, `department`) VALUES
(1, 'Erandika', 'Hettiarachchi', 'Female', 'erandishanu@gmail.com', 'No.773,Dampe,piliyandala.', 717275722, '2012-01-02', 'Detailing'),
(2, 'Erandika', 'Medis', 'Male', 'erandishanu@gmail.com', 'No.773,Dampe,piliyandala.', 717275722, '2013-02-12', 'Detailing'),
(3, 'Dinuka', 'Medis', 'Male', 'dinuka@gmail.com', 'No.73,papiliyana,boralasgamuwa.', 714563728, '2014-10-14', 'Wash'),
(4, 'Jayanada', 'Gamage', 'Female', 'sajun@gmail.com', 'No.32,Gonapola,Horana.', 714537658, '2009-12-10', 'Wheel Alignment'),
(5, 'Buddhi', 'Abiman', 'Male', 'buddhi@gmail.com', 'No87,Piladuwa,Matara.', 765427658, '2010-03-20', 'Efi engine tunning'),
(6, 'Nirmal', 'Fonseka', 'Male', 'nirmal@gmail.com', 'Jayaniwasa,kohuwala.', 765432456, '2002-10-02', 'Detailing'),
(7, 'Shenika', 'Nilukshan', 'Male', 'emp@gmail.com', 'No.56,Piladuwa,Matara.', 712345654, '2018-01-08', 'Wash');

CREATE TABLE `employee_leave` (
  `id` int(20) NOT NULL,
  `startdate` datetime NOT NULL,
  `enddate` datetime NOT NULL,
  `starttime` time NOT NULL,
  `endtime` time NOT NULL,
  `reason` varchar(150) NOT NULL,
  `approved` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_leave`
--

INSERT INTO `employee_leave` (`id`, `startdate`, `enddate`, `starttime`, `endtime`, `reason`, `approved`) VALUES
(16, '2019-01-16 00:00:00', '2019-01-22 00:00:00', '00:00:00', '00:00:00', 'boring', 0),
(17, '2019-01-01 00:00:00', '2019-01-22 00:00:00', '00:00:00', '00:00:00', 'for wedding', 0),
(18, '2019-01-09 00:00:00', '2019-01-16 00:00:00', '00:00:00', '00:00:00', 'Sick', 0),
(19, '2019-01-02 00:00:00', '2019-02-22 00:00:00', '00:00:00', '00:00:00', 'wedding', 0),
(20, '2019-01-02 00:00:00', '2019-02-22 00:00:00', '00:00:00', '00:00:00', 'personal matter', 0);
