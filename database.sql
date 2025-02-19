-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2022 at 11:34 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hostel management`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `id` int(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `title`, `description`, `photo`) VALUES
(24, 'Hostel', '<p>A little bit of hostel&nbsp;creativity and fun is important too, both in content and design. Remember we are talking about hostels, where the majority of guests are young people, and laid back. Try to bring the same energy that you&#39;ve already used to build your physical hostel into the online world.</p>\r\n', '4.jpg'),
(28, 'Relevant Content ', '<p>&nbsp;People tend to make this too complex! Don&#39;t drown the traveler in information. Be concise. Many times (in the case of hospitality), photos sell much better than words do. So, show your hostel and your rooms, show the location of your hostel on an interactive map, along with your area&#39;s relevant landmarks or attractions. Give them a quick idea of price range, or point them to your website&#39;s booking engine for checking out rates. It&#39;s this simple stuff that really matters.</p>\r\n', '30.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin_registration`
--

CREATE TABLE `admin_registration` (
  `aid` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `aname` varchar(10) NOT NULL,
  `mobileno` int(10) NOT NULL,
  `password` varchar(8) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_registration`
--

INSERT INTO `admin_registration` (`aid`, `email`, `aname`, `mobileno`, `password`, `photo`) VALUES
(20, 'bansi0528@gmail.com', 'bansi', 63, '1234567', 'c010.jfif'),
(22, 'jshihora4@gmail.com', 'jeni', 2147483647, '1234', 'jeni.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bid` int(200) NOT NULL,
  `roomid` varchar(300) NOT NULL,
  `name` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `dob` date NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `phoneno` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bid`, `roomid`, `name`, `address`, `date`, `dob`, `checkin`, `checkout`, `email`, `phoneno`) VALUES
(1, '4', 'jeni', 'b,203', '0000-00-00', '2022-03-13', '2022-03-19', '2022-03-23', 'jshihora4@gmail.com', 2147483647),
(2, '24', 'jeni', 'b,203', '0000-00-00', '2022-03-04', '2022-03-10', '2022-04-10', 'kuldipdhanani18@gmail.com', 2147483647),
(3, '21', 'bansi', 'b,203', '0000-00-00', '2022-03-23', '2022-03-24', '2022-03-04', 'bansi0528@gmail.com', 2147483647),
(4, '', 'The bunks', 'b,203', '0000-00-00', '2022-03-09', '2022-03-29', '2022-04-01', 'bansi0528@gmail.com', 2147483647),
(5, '20', 'bansi sava', '98,vbvhvbvvjv,jcnj,', '2022-04-02', '2022-03-28', '2022-04-03', '2022-07-03', 'abc@gmail.com', 2147483647),
(6, '20', 'bansi sava', '98,vbvhvbvvjv,jcnj,', '2022-04-02', '2022-03-29', '2022-04-04', '2022-11-03', 'bansi0528@gmail.com', 2147483647),
(7, '20', 'bansi sava', '', '2022-04-02', '2022-03-29', '2022-04-03', '2022-07-03', 'abc@gmail.com', 2147483647),
(8, '20', 'bansi sava', '98,vbvhvbvvjv,jcnj,', '2022-04-02', '2022-03-28', '2022-04-03', '2022-10-03', 'bansi0528@gmail.com', 2147483647),
(9, '26', 'Dorms With', '98,vbvhvbvvjv,jcnj,', '2022-04-02', '2022-04-03', '2022-04-03', '2022-09-03', 'jajh@gmail.com', 2147483647),
(10, '20', 'bansi sava', '98,vbvhvbvvjv,jcnj,', '2022-04-02', '2022-03-30', '2022-04-03', '2022-07-03', 'bansi0528@gmail.com', 2147483647),
(11, '20', 'bansi sava', '98,vbvhvbvvjv,jcnj,', '2022-04-02', '2022-03-30', '2022-04-03', '2022-06-03', 'bansi0528@gmail.com', 2147483647),
(12, '20', 'Dormitory ', '98,vbvhvbvvjv,jcnj,', '2022-04-02', '2022-04-03', '2022-04-09', '2022-06-12', 'jajh@gmail.com', 2147483647),
(13, '20', 'bansi sava', '98,vbvhvbvvjv,jcnj,', '2022-04-02', '2021-12-01', '2022-04-03', '2022-07-03', 'bansi0528@gmail.com', 2147483647),
(14, '20', 'bansi sava', '98,vbvhvbvvjv,jcnj,', '2022-04-02', '2021-12-01', '2022-04-03', '2022-07-03', 'bansi0528@gmail.com', 2147483647),
(15, '20', 'bansi sava', '98,vbvhvbvvjv,jcnj,', '2022-04-02', '2022-03-28', '2022-04-03', '2022-07-03', 'bansi0528@gmail.com', 2147483647),
(16, '20', 'bansi sava', '98,vbvhvbvvjv,jcnj,', '2022-04-02', '2022-03-28', '2022-04-03', '2022-07-03', 'bansi0528@gmail.com', 2147483647),
(17, '20', 'bansi sava', '98,vbvhvbvvjv,jcnj,', '2022-04-02', '2022-03-28', '2022-04-03', '2022-07-03', 'bansi0528@gmail.com', 2147483647),
(18, '20', 'bansi sava', '98,vbvhvbvvjv,jcnj,', '2022-04-02', '2022-03-28', '2022-04-06', '2022-06-06', 'bansi0528@gmail.com', 2147483647),
(19, '20', 'bansi sava', '98,vbvhvbvvjv,jcnj,', '2022-04-02', '2022-03-28', '2022-04-03', '2022-07-03', 'bansi0528@gmail.com', 2147483647),
(20, '33', 'Room With ', 'b,203', '2022-04-02', '2022-03-28', '2022-04-03', '2022-06-03', 'jshihora4@gmail.com', 2147483647),
(21, '33', 'Room With ', 'b,203', '2022-04-02', '2022-03-28', '2022-04-03', '2022-06-03', 'jshihora4@gmail.com', 2147483647),
(22, '27', 'Female Onl', 'b,203', '2022-04-02', '2022-03-28', '2022-04-03', '2022-08-03', 'jshihora4@gmail.com', 2147483647),
(23, '20', 'bansi sava', '98,vbvhvbvvjv,jcnj,', '2022-04-02', '2022-03-31', '2022-04-02', '2022-08-01', 'bansi0528@gmail.com', 2147483647),
(24, '20', 'bansi sava', '98,vbvhvbvvjv,jcnj,', '2022-04-04', '2022-01-04', '2022-04-05', '2022-07-05', 'abc@gmail.com', 2147483647),
(25, '20', 'Dormitory ', 'f/502,silvae maxima', '2022-04-05', '2022-01-03', '2022-04-06', '2022-06-06', 'jshihora4@gmail.com', 2147483647),
(26, '20', 'Dormitory ', 'b,anjani', '2022-04-05', '2022-03-16', '2022-04-06', '2022-07-06', 'abc@gmail.com', 2147483647),
(27, '27', 'Female Onl', 'F-502 silver mexima', '2022-04-05', '2022-05-30', '2022-04-29', '2022-07-05', 'jshihora4@gmail.com', 2147483647),
(28, '20', 'Dormitory ', 'surat', '2022-04-07', '2002-04-01', '2022-04-08', '2022-04-15', 'jshihora4@gmail.com', 342342),
(29, '26', 'Dorms With', 'sdfghm', '2022-04-12', '2022-05-30', '2022-04-23', '2022-09-23', 'jshihora4@gmail.com', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobileno` int(10) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `mobileno`, `address`) VALUES
(14, 'Steelworks', ' steelworks@thisisfresh.com', 2147483647, 'Steelworks 29 Rockingham Street Sheffield S1 4WB');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `eventid` int(11) NOT NULL,
  `eventname` varchar(100) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `photo1` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`eventid`, `eventname`, `description`, `photo1`) VALUES
(23, 'ganesh chaturthi', '<p>ganesh Chaturthi is celebrated on Shukla Chaturthi of the Hindu month of Bhadra (generally falls between August and September). This festival is celebrated by Hindus with a great enthusiasm. People bring idols of Lord Ganesh to their homes and do worship. The duration of this festival varies from 1 day to 11 days, depending on the place and tradition. On the last day of the festival the idols are taken out in a colorful and musical procession and immersed traditionally in water.</p>\r\n', 'gn2.jpg'),
(27, 'janmastmi', '<p>Janmashtami celebrates the birth of Lord Krishna and will be celebrated on&nbsp;<strong>30th and 31st August this year</strong>. The festival is celebrated by Hindus all over the world and many devotees fast on this day and offer prays to God. This day signifies goodwill and the victory of good over evil</p>\r\n', 'j8.jpg'),
(30, 'HOLI', '<p>Holi celebrations start on the night before Holi with a holika dhan&nbsp;where people gather, perform religious rituals in front of the bonfire, and pray that their internal evil be destroyed the way&nbsp;, the sister of the demon king&nbsp;, was killed in the fire. The next morning is celebrated as Rangwali Holi (Dhuleti) &ndash; a free-for-all festival of colours,where people smear each other with colours and drench each other. Water guns and water-filled balloons are also used to play and colour each other. Anyone and everyone is fair game, friend or stranger, rich or poor, man or woman, children, and elders.&nbsp;</p>\r\n', 'p.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `facility_master`
--

CREATE TABLE `facility_master` (
  `fid` int(100) NOT NULL,
  `facility_name` varchar(100) NOT NULL,
  `facility_description` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facility_master`
--

INSERT INTO `facility_master` (`fid`, `facility_name`, `facility_description`) VALUES
(7, 'Swimming pool', 'This is a very good hostel with a great atmosphere the facilities are well mentioned and features a nice courtyard a pool, table.'),
(8, 'Rent a car', 'All day seems like plenty of time, but we had a lot that we needed todo: checkout of the hostel, pic up rental car, go back to the hostel. '),
(9, 'Gymnasium', '<p>Gym is open in the evening.Elevator&nbsp;flor gym, hair dryer, hanger, hostel, hotel, icecubes, key lamp, light manager, pillow, reservation room safe.</p>\r\n'),
(10, 'Sports club ', 'Sports club is for a variety of indoor and outdoor sports, like table tennis, squash, snookers, badminton, cricket, football, etc. '),
(14, 'Free WI-FI', '<p>Friendly staff and eassy to meet people with their nightly activities but free wi fi is not available at every hostel.</p>\r\n'),
(15, 'Laundry', '<p>There is a central and fully automated and mechanised laundry in the campus. The charges for laundry are included in the hostel fees.</p>\r\n'),
(16, '24*7  Reception', '<p>It&#39;s times generally a morning and late afternoon only too, that unless otherwise confirm reservation are held until 6 pm. After that a reserved room may be given to another guest.</p>\r\n'),
(17, 'Hot shower', '<p>Before the decline in services shirt the hot water tap in many hostels ,township males flock to the hostel to use showers which were unavailable in the township&nbsp;but the hostels were providing best.</p>\r\n'),
(18, 'TV', '<p>By, evening exhausted skiers drift into the comman room where theirs often a fireplace and TV.&nbsp; Allthough&nbsp; most hostelers are young families and older guest are welcome.</p>\r\n'),
(19, 'Air conditioner', '<p>Don&#39;t expect to return late at night and throw a party in a hostel as walls are thin and visitors are excepted to sleep not entertain.</p>\r\n'),
(20, 'Lockers', '<p>Each dorm room has thick mattresses, cleanbedding a locker for each guest the hostel provide locker for each and private room.</p>\r\n'),
(21, 'Security &CCTV  surveillance', '<p>For security purposes, the entire campus is fully equipped with CCTV cameras along with security guards at different posts 24*7.&nbsp;</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `question` varchar(100) NOT NULL,
  `answer` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `question`, `answer`) VALUES
(31, 'WELL, WHAT IS A HOSTEL?', 'A hostel is a form of accommodation that is popular with the backpacker and budget travelers as it is often much cheaper than a hotel or B&B – especially if you’re a solo traveler on a tight budget.  Hostels consist of dormitories mainly. In a hostel dorm, there are others sleeping in the same room as you. This shared accommodation extends to the washrooms and any other facilities available in the hostel.  Staying in a hostel is a great way to not only save money while traveling but meet new peo'),
(32, 'HOW DO I KEEP MY THINGS SAFE IN A HOSTEL?', 'Keeping your valuables, like passport, phone, wallet etc out of sight is an important way of keeping your things safe in hostels. By keeping your bag tidy, preferably zipped up and out of the way, makes it much more of a challenge for some would-be thief.  Most hostels will provide some sort of locker. This might be only a small size – a day pack with the most valuable items being able to fit, while other lockers can store your whole bag. A decent padlock is a must-have item if you’re getting in'),
(33, 'WHAT IS THE BEST HOSTEL BOOKING SITE?', 'Sometimes, a town, and even sometimes a city, won’t have any hostels. It’s rare but it does happen. In this case, you’re already on a site that provides great hotel prices and deals to go along with it. There’s also a pretty generous cancellation policy.  Booking.com is especially budget-friendly throughout Asia.  Another trusted website is Hostelworld.com. During my travels throughout Europe, Hostelworld is primarily my source for booking hostels. As you can probably guess by the name, Hostelwo');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_details`
--

CREATE TABLE `gallery_details` (
  `gdid` int(100) NOT NULL,
  `gid` int(100) NOT NULL,
  `photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery_details`
--

INSERT INTO `gallery_details` (`gdid`, `gid`, `photo`) VALUES
(1, 11, '4.jfif'),
(2, 13, '4.jfif'),
(9, 25, 'm1.jpg'),
(10, 25, 'm2.png'),
(12, 25, 'm4.jpg'),
(15, 25, 'm9.jpg'),
(16, 25, 'm21.jpg'),
(17, 25, 'kl.jpg'),
(18, 25, 'm18.jpg'),
(19, 25, 'm24.jpg'),
(20, 25, 'm22.jpg'),
(21, 25, 'm10.jpg'),
(22, 24, 'kitchen13.jpg'),
(23, 24, 'il.jpg'),
(24, 24, 'kitchen.jpg'),
(25, 24, 'kitchen9.jpg'),
(26, 24, 'kitchen30.jpg'),
(27, 24, 'kitchen10.jpg'),
(28, 24, 'kitchen11.jpg'),
(29, 24, 'kitchen3.jpg'),
(31, 24, 'gh.jpg'),
(32, 24, 'kitchen17.jpg'),
(33, 24, 'kitchen26.jpg'),
(34, 24, 'kitchen27.jpg'),
(35, 25, 'm6.jpg'),
(36, 25, 'm20.jpg'),
(37, 26, 'nihar.jpg'),
(38, 26, 'r.jpg'),
(39, 26, 'reservation1.jfif'),
(40, 26, 'reservation5.jpg'),
(41, 26, 'reservation2.jpg'),
(42, 26, 'honey3.cms'),
(43, 26, 'df.webp'),
(44, 26, 'mn.jpg'),
(45, 26, 'honey.webp'),
(46, 26, 'ah.jpg'),
(47, 26, 'op.jpg'),
(48, 26, 'r7.jpg'),
(49, 27, 'CL1.jpg'),
(50, 27, 'CL2.jpg'),
(51, 27, 'CL3.jpg'),
(52, 27, 'CL4.jpg'),
(53, 27, 'CL5.jpg'),
(54, 27, 'cl15.jpg'),
(55, 27, 'CL7.jpg'),
(56, 27, 'CL8.jpg'),
(57, 27, 'cl10.jpg'),
(58, 27, 'cl13.jpg'),
(59, 27, 'cl16.jpg'),
(60, 27, 'cl11.jpg'),
(61, 20, 'c1.webp'),
(62, 20, 'c2.jpg'),
(63, 20, 'c3.jpg'),
(64, 20, 'c4.jpg'),
(65, 20, 'c5.jpg'),
(66, 20, 'c6.jpg'),
(67, 22, '29.jpg'),
(68, 22, '27.jpg'),
(69, 22, '26.jpg'),
(70, 22, '25.jpg'),
(71, 22, '38.jpg'),
(72, 22, 'double bad.jpg'),
(73, 22, 'drom w bunk.jpg'),
(74, 22, 'Female-only-dorms.jpg'),
(75, 22, 'r1.jpg'),
(76, 22, 'r2.jpg'),
(77, 22, 'r3.jpg'),
(78, 22, 'r4.jpg'),
(79, 21, 'g1.jpg'),
(80, 21, 'g2.jpg'),
(81, 21, 'g3.jpg'),
(82, 21, 'g4.jpg'),
(83, 21, 'g5.jpg'),
(84, 21, 'g6.jpg'),
(85, 21, 'g12.jpg'),
(86, 21, 'g7.jpg'),
(87, 21, 'g10.jpg'),
(88, 21, 'g8.jpg'),
(89, 21, 'g11.jpg'),
(90, 21, 'g9.jpg'),
(91, 28, 'f1.jpg'),
(92, 28, 'f2.jpg'),
(93, 28, 'f3.jpg'),
(94, 28, 'f5.jpg'),
(95, 28, 'f4.jpg'),
(96, 28, 'f6.jpg'),
(97, 28, 'f7.jpg'),
(98, 28, 'f8.jpg'),
(99, 28, 'f9.jpg'),
(100, 28, 'f10.jpg'),
(101, 28, 'f11.jpg'),
(102, 28, 'f12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_master`
--

CREATE TABLE `gallery_master` (
  `gid` int(100) NOT NULL,
  `gname` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery_master`
--

INSERT INTO `gallery_master` (`gid`, `gname`, `photo`) VALUES
(20, 'hostel', '8.jfif'),
(21, 'ground', '20.jfif'),
(22, 'Room', '4.jfif'),
(24, 'kitchen', 'kitchen7.jpg'),
(25, 'medical', 'm9.jpg'),
(26, 'reservation office', 'reservation3.jfif'),
(27, 'celebration', 'vf.jpg'),
(28, 'facality', 'sd.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `fid` int(100) NOT NULL,
  `day` varchar(100) NOT NULL,
  `breakfast` varchar(100) NOT NULL,
  `lunch` varchar(100) NOT NULL,
  `eveningsnacks` varchar(100) NOT NULL,
  `dinner` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`fid`, `day`, `breakfast`, `lunch`, `eveningsnacks`, `dinner`) VALUES
(6, 'monday', 'tea,coffee/ bateka pava', 'chole bhature', 'chai/bistect', 'dal fly/ jeera rice/ panjabi sak/ naan'),
(7, 'tuesday', 'tea,coffee/ sev khamni', 'mix vegetable/ roti/ bttuermilk', 'coffee', 'pav bhaji/ salad/ buttermilk'),
(8, 'wednesday', 'tea,coffee/thepla', 'bataka nu sak/ roti/ buttermilk', 'chai/milk', 'pani puri/chaat/ragda puri'),
(9, 'thursday', 'tea,coffee/alo paratha', 'mug nu dsak/ roti/ buttermilk', 'milk', 'types of pizza/cold drink'),
(10, 'friday', 'tea,coffe/idli/dosa', 'green vegetable/roti/buttermilk', 'tea/coffee', 'matka buryani with sabji'),
(11, 'saturday', 'tea,coffee/pakoda', 'mix kathol/roti/buttermilk', 'chai/milk', 'all chinese varities/cold drink'),
(12, 'sunday', 'tea,coffee/khakhra/dry food', 'turiya patra sabji/roti/buttermilk', 'coffee', 'fruitsalad/puri/mixsak/gulab jambu/cheese samosa/ pulav');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(100) NOT NULL,
  `news` varchar(100) NOT NULL,
  `doc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `news`, `doc`) VALUES
(2, 'Visit Alia Bhatt', '2022-02-25'),
(4, 'DJ party ', '2022-05-17'),
(5, 'Visit C R Patil', '2022-06-11');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `aid` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `aname` varchar(100) NOT NULL,
  `mobileno` int(10) NOT NULL,
  `pass` varchar(8) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`aid`, `email`, `aname`, `mobileno`, `pass`, `photo`) VALUES
(1, 'bansi@gmail.com', 'bansi', 0, '12345', ''),
(2, 'bansi@gmail.com', 'bansi', 0, '12345', ''),
(3, 'bansi@gmail.com', 'bansi', 0, '12345', ''),
(4, 'bansi@gmail.com', 'bansi', 0, '12345', ''),
(5, 'bansi@gmail.com', 'bansi', 0, '12345', ''),
(6, 'bansi@gmail.com', 'bansi', 0, '12345', ''),
(7, 'gagan4@gmail.com', 'bansi', 0, '12345', '1.jfif'),
(8, 'bansi@gmail.com', 'bansi', 0, '12345', '1.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `receipt`
--

CREATE TABLE `receipt` (
  `rid` int(100) NOT NULL,
  `bid` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `price` int(10) NOT NULL,
  `totalpayment` int(20) NOT NULL,
  `photo` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `room_details`
--

CREATE TABLE `room_details` (
  `rdid` int(100) NOT NULL,
  `roomid` int(100) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `price` int(100) NOT NULL,
  `terms` varchar(5000) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_details`
--

INSERT INTO `room_details` (`rdid`, `roomid`, `description`, `price`, `terms`, `photo`) VALUES
(17, 20, '<p>Most often referred to as &lsquo;dorms&rsquo;, these shared sleeping arrangements are the reason why hostels are so cheap. You share a room of varying size with other guests. Sometimes there are bunks, sometimes there are single beds, sometimes there are even triple bunks. They can be&nbsp;<em>huge</em>&nbsp;&ndash; rooms of 20+ beds aren&rsquo;t that unusual &ndash; or they can be fairly intimate, with three beds to a room.</p>\r\n', 8000, '<ul>\r\n	<li>General 5 Washroom</li>\r\n	<li>Non A/C</li>\r\n	<li>Not providing Blanket</li>\r\n	<li>Not providing TV</li>\r\n	<li>25 Person Limited</li>\r\n</ul>\r\n', 'dor.jpg'),
(18, 21, '<p>Dorm rooms at hostels are&nbsp;<strong>notorious</strong>&nbsp;for their bunk beds. And let me tell you from experience that not every bunk bed is created equally &ndash;&nbsp;<em>far from it</em>. Bunks can be downright awful, or they can be incredible.</p>\r\n\r\n<p>Bunks at the lower end of the quality spectrum can be rickety, metal frame affairs with thin or tired mattresses. If you&rsquo;re in the bottom bunk, expect squeaking as the person in the top bunk clambers up to their bed. They won&rsquo;t have power sockets or reading lights, though some might.&nbsp;</p>\r\n', 10000, '<ul>\r\n	<li>General Washroom</li>\r\n	<li>Non A/C</li>\r\n	<li>Not Providing Blanket</li>\r\n	<li>Not Providing TV</li>\r\n	<li>10 Person Limit</li>\r\n</ul>\r\n', '1.jfif'),
(19, 26, '<p>These exist. But, as with bunks, hostel dorm rooms with non-bunk beds can range wildly in terms of quality and comfort. The plus side is that you don&rsquo;t have to worry about who&rsquo;s on the top or bottom bunk. The downside is that they don&rsquo;t come with privacy curtains or many amenities to speak of.</p>\r\n\r\n<p>These can be a unique experience, though. Hostels in warmer parts of the world (<a href=\"https://www.thebrokebackpacker.com/where-to-stay-in-gili-air-indonesia/\" target=\"_blank\">Gili Air</a>, for example) have bamboo-crafted lodges with separate, standalone beds for its guests. Lodges like this are often open-air, and so come with mosquito nets (and privacy curtains) to keep your skin safe from bugs.</p>\r\n', 12000, '<ul>\r\n	<li>General Washroom</li>\r\n	<li>Non A/C</li>\r\n	<li>Not Providing Blanket</li>\r\n	<li>Not Providing TV</li>\r\n	<li>5 Person Limit</li>\r\n</ul>\r\n', 'bb.jpg'),
(20, 27, '<p>Female travelers rejoice. If you&rsquo;re solo or hanging out with your girlfriends, you have the choice of staying in a female only space. These are ideal if you want to feel safe and need a little more privacy away from other guests, and feel more comfortable in the company of other females.&nbsp;</p>\r\n\r\n<p>If you are&nbsp;<a href=\"https://www.thebrokebackpacker.com/solo-female-travel/\" target=\"_blank\">travelling as a female solo traveller</a>, it&rsquo;s good to check reviews from other solo females who have stayed in the dorm before you. Even though a dorm isn&rsquo;t mixed doesn&rsquo;t mean it&rsquo;s going to be sparklingly clean with top security. You will still need to keep an eye on your belongings and may have to put up with messy or noisy roommates.&nbsp;</p>\r\n\r\n<p>Sometimes the female dorms consist of a whole floor and other times, the whole hostel is only for female travellers.&nbsp;</p>\r\n', 11000, '<ul>\r\n	<li>General Washroom</li>\r\n	<li>Non A/C</li>\r\n	<li>Not Providing Blanket</li>\r\n	<li>Not Providing TV</li>\r\n	<li>8 Person Limit</li>\r\n</ul>\r\n', 'Female-only-dorms.jpg'),
(21, 28, '<p>You might find that some hostels have dorms just for men. These are good for those who aren&rsquo;t keen on mixed sleeping arrangements and just want somewhere to sleep. Mens dorm rooms won&rsquo;t differ too much for a normal dorm, but they can be at the cheaper end of the scale.&nbsp;</p>\r\n', 11000, '<ul>\r\n	<li>General Washroom</li>\r\n	<li>Non A/C</li>\r\n	<li>Not providing Blanket</li>\r\n	<li>Not providing TV</li>\r\n	<li>8 Person Limit</li>\r\n</ul>\r\n', 'male.jpg'),
(22, 29, '<p>Solo travelers, this one is for you &ndash; behold the single private room.</p>\r\n\r\n<p>A commodity among the backpacker crowd, single rooms are normally compact, low-budget alternatives to booking into a hotel. Bagging one of these means you don&rsquo;t have to spend the night in a dorm room, but don&rsquo;t need to fork out for a hotel room.&nbsp;</p>\r\n\r\n<p>Beds can either be single beds or small doubles &ndash; you may even get a seating area, desk and your own window to gaze out onto the world.</p>\r\n', 15000, '<ul>\r\n	<li>Private Washroom</li>\r\n	<li>&nbsp;A/C with Fan</li>\r\n	<li>Providing Blanket</li>\r\n	<li>Providing TV</li>\r\n	<li>1 Person</li>\r\n</ul>\r\n', 'Shutterstock-Single-private-rooms.jpg'),
(23, 30, '<p>Family rooms and private apartments are also an option at some hostels. These can be great for big groups or families and can sometimes come with full kitchens and lounges! Who said travelling as a group needs to be pricey?</p>\r\n', 18000, '<ul>\r\n	<li>Private Washroom</li>\r\n	<li>&nbsp;A/C with Fan</li>\r\n	<li>Providing Blanket</li>\r\n	<li>Providing TV</li>\r\n	<li>5 Person</li>\r\n</ul>\r\n', 'Family-rooms-.jpg'),
(24, 31, '<p>A double private room at a hostel is ideal for couples travelling the world together &ndash; or equally for solo backpackers who want a little more space and luxury in their hostel stay.</p>\r\n\r\n<p>For a couple on the same budget, they can work out as a bargain! The price of two dorm beds can sometimes be higher than the nightly rate for a double room. It just makes sense if you&rsquo;re really watching the pennies.</p>\r\n\r\n<p>They&rsquo;re not always luxurious. Like all hostel rooms, the quality varies. You may find yourself in something very basic (and therefore, very affordable), but you may luck out with a double room in a&nbsp;<a href=\"https://www.thebrokebackpacker.com/best-boutique-hostels/\" target=\"_blank\">boutique hostel</a>&nbsp;that feels like an actual hotel room.</p>\r\n', 16000, '<ul>\r\n	<li>Private Washroom</li>\r\n	<li>&nbsp;A/C with Fan</li>\r\n	<li>Providing Blanket</li>\r\n	<li>Providing TV</li>\r\n	<li>2 Person</li>\r\n</ul>\r\n', 'Double-room.jpg'),
(25, 32, '<p>For those of you who are travelling with a buddy and don&rsquo;t want to cuddle up in a double bed, twin rooms are the answer. These rooms are ideal if you want to have some space for yourselves to chill out and unwind but also want to be social and enjoy hostel life.</p>\r\n\r\n<p>Beds in twin rooms might still be in bunk form, so make sure you double check before you book. We don&rsquo;t want any fights over the top bunk!</p>\r\n\r\n<p>These are ideal if you&rsquo;re catching an early flight or partying late into the night. You don&rsquo;t have to disturb the whole dorm with bag packing and early morning alarms.&nbsp;</p>\r\n', 16000, '<ul>\r\n	<li>Private Washroom</li>\r\n	<li>&nbsp;A/C with Fan</li>\r\n	<li>Providing Blanket</li>\r\n	<li>Providing TV</li>\r\n	<li>2 Person</li>\r\n</ul>\r\n', 't.jpg'),
(26, 33, '<p>a luxury living room may feature a selection of rich textures and a particular sei of materials and finishes which are less common than others. as far as style is concerned , it&#39;s usually very easy to distinguished a luxury living room decaor from one that&#39;s more modest in hostel</p>\r\n', 20000, '<ul>\r\n	<li>private washroom&nbsp;</li>\r\n	<li>A/C&nbsp;and fan both available</li>\r\n	<li>providing TV</li>\r\n	<li>provide blankets from hostel</li>\r\n	<li>limitated 2 person in room</li>\r\n	<li>provide food from hostel</li>\r\n</ul>\r\n', 'bedroom-balcony.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `room_master`
--

CREATE TABLE `room_master` (
  `roomid` int(100) NOT NULL,
  `roomtype` varchar(100) NOT NULL,
  `photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_master`
--

INSERT INTO `room_master` (`roomid`, `roomtype`, `photo`) VALUES
(20, 'Dormitory Hall', 'dormi.jpg'),
(21, 'The Bunks', 'the bunk.jpg.jfif'),
(26, 'Dorms Without Bunks Bed', 'drom w bunk2.jpg'),
(27, 'Female Only Dorms', '30.jpg'),
(28, 'Male only Dorms', 'male1.jpg'),
(29, 'Private Room', 'private1.jpg'),
(30, 'Family Room', 'family.jpg'),
(31, 'Double Bed', 'double bad.jpg'),
(32, 'Twin Private Room', 'twin.jfif'),
(33, 'Room With Balcony', 'balcony.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `staff_details`
--

CREATE TABLE `staff_details` (
  `staffdetailid` int(100) NOT NULL,
  `staffid` int(100) NOT NULL,
  `staffname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(8) NOT NULL,
  `doj` date NOT NULL,
  `jobstatus` varchar(100) NOT NULL,
  `salary` int(100) NOT NULL,
  `aadharphoto` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff_details`
--

INSERT INTO `staff_details` (`staffdetailid`, `staffid`, `staffname`, `email`, `password`, `doj`, `jobstatus`, `salary`, `aadharphoto`, `photo`) VALUES
(17, 10, 'Srushti', 's01@gmail.com', '12345', '0000-00-00', 'asdfghj', 10000, '6.jfif', 'reservation4.jpg'),
(19, 10, 'Isha', 'i22@gmail.com', '12345', '0000-00-00', 'asdfghj', 10000, '6.jfif', 'reservation5.jpg'),
(20, 10, 'Nihar', 'n99@gmail.com', '12345', '0000-00-00', 'asdfghj', 10000, '6.jfif', 'nihar.jpg'),
(21, 11, 'Mahesh', 'm32@gmail.com', '12345', '0000-00-00', 'asdfghj', 8000, '6.jfif', 'secur.jpg'),
(22, 11, 'Naresh', 'n67@gmail.com', '12345', '0000-00-00', 'qwerty', 8000, '6.jfif', 'sec.jpg'),
(23, 12, 'Honey', 'H78@gmail.com', '12345', '0000-00-00', 'rggr', 10000, '6.jfif', 'c2.jpg'),
(24, 12, 'Shital', 'S03@gmail.com', '8769', '0000-00-00', 'duyf', 10000, '6.jfif', 'c11.jpg'),
(25, 12, 'Nilam', 'N10@gmail.com', '12345', '0000-00-00', 'jyfj', 10000, '6.jfif', 'c10.jpg'),
(27, 12, 'Tanvi', 'T57@gmail.com', '7658', '0000-00-00', 'hgdj', 10000, '6.jfif', 'c12.jpg'),
(28, 12, 'Dinesh', 'D45@gmail.com', '7890', '0000-00-00', 'ewjyf', 10000, '6.jfif', 'c13.jpg'),
(30, 13, 'Dhruv', 'd36@gmail.com', '9080', '0000-00-00', 'ehgd', 12000, '6.jfif', 'm1.png'),
(31, 13, 'Krishna', 'k34@gmail.com', '7586', '0000-00-00', 'eeydft', 12000, '6.jfif', 'm6.jpg'),
(32, 13, 'Jemi', 'j25@gmail.com', '4865', '0000-00-00', 'eriuy', 12000, '6.jfif', 'm5.jpg'),
(33, 13, 'Prachi', 'p14@gmail.com', '9630', '0000-00-00', 'htdhy', 12000, '6.jfif', 'm3.jpg'),
(34, 13, 'Manan', 'm78@gmail.com', '7944', '0000-00-00', 'sdgs', 12000, '6.jfif', 'm8.jpg'),
(35, 14, 'Pritesh', 'P47@gmail.com', '8561', '0000-00-00', 'eudj', 15000, '6.jfif', 'co4.jpg'),
(36, 14, 'Yash', 'y09@gmail.com', '2365', '0000-00-00', 'jdhk', 15000, '6.jfif', 'co6.jpg'),
(37, 14, 'Vikram ', 'V56@gmail.com', '5698', '0000-00-00', 'dfku', 15000, '6.jfif', 'co11.jpg'),
(38, 14, 'Jenshi', 'j89@gamil.com', '1542', '0000-00-00', 'regw', 15000, '6.jfif', 'co7.jpg'),
(39, 14, 'Dhruvi', 'd36@gmail.com', '1256', '0000-00-00', 'jhjhu', 15000, '6.jfif', 'co9.jpg'),
(40, 15, 'Vasu', 'V12@gmail.com', '4587', '0000-00-00', 'ydhv', 8000, '6.jfif', 'e4.jpg'),
(41, 15, 'Dev', 'Dev132@gmail.com', '2541', '0000-00-00', 'duef', 8000, '6.jfif', 'e3.jpg'),
(42, 15, 'Harsh', 'h67@gmail.com', '5894', '0000-00-00', 'fndj', 8000, '6.jfif', 'e5.jpg'),
(44, 15, 'vamika', 'v34@gmail.com', '2544', '0000-00-00', 'hduyh', 8000, '6.jfif', 'e6.jpg'),
(45, 15, 'Nehal', 'N11@gmail.com', '2385', '0000-00-00', 'dfeg', 8000, '6.jfif', 'e8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `staff_master`
--

CREATE TABLE `staff_master` (
  `staffid` int(100) NOT NULL,
  `stafftype` varchar(100) NOT NULL,
  `photo` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff_master`
--

INSERT INTO `staff_master` (`staffid`, `stafftype`, `photo`) VALUES
(10, 'Reservation  Department', 'reservation.jpg'),
(11, 'Security Department', 'security1.jfif'),
(12, 'Cleaning Department', 'cleaning jpg.webp'),
(13, 'Medical Department', 'medical.jpg'),
(14, 'Cooking Department', 'cooking.jpg'),
(15, 'Electrician Department ', 'electricion.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `id` int(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_master`
--

CREATE TABLE `user_master` (
  `uid` int(100) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(8) NOT NULL,
  `mobileno` int(10) NOT NULL,
  `birthdate` date NOT NULL,
  `purpose` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `otp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_master`
--

INSERT INTO `user_master` (`uid`, `uname`, `email`, `password`, `mobileno`, `birthdate`, `purpose`, `status`, `otp`) VALUES
(1, 'jeni', 'jshihora4@gmail.com', '123', 2147483647, '0000-00-00', 'study', 0, 0),
(2, 'jeni', 'jshihora4@gmail.com', '123', 9897987, '0000-00-00', 'gvhjgh', 0, 3296),
(3, 'jeni', 'jshihora4@gmail.com', '123', 9897987, '0000-00-00', 'gvhjgh', 0, 5813),
(4, 'jeni', 'jshihora4@gmail.com', '123', 877, '0000-00-00', 'hjgh', 0, 3809),
(5, 'jeni', 'jshihora4@gmail.com', '123', 7656, '0000-00-00', 'gh', 0, 2919),
(6, 'jeni', 'jshihora4@gmail.com', '123', 7656, '0000-00-00', 'gh', 0, 4700),
(7, 'jeni', 'jshihora4@gmail.com', '123', 2147483647, '0000-00-00', 'werthj', 0, 7828),
(8, 'jeni', 'jshihora4@gmail.com', '123', 2147483647, '0000-00-00', 'werthjsdfg', 0, 3744),
(9, 'bansi', 'bansi0528@gmail.com', 'bansi@12', 2147483647, '0000-00-00', 'werthj', 0, 7907),
(10, 'bansi', 'bansi0528@gmail.com', 'bansi@12', 987987, '0000-00-00', '98798', 0, 3053),
(11, 'jeni', 'jshihora4@gmail.com', '123', 2147483647, '0000-00-00', 'werthj', 0, 9839),
(12, 'jeni', 'jshihora4@gmail.com', '123', 2147483647, '0000-00-00', 'werthjsdfg', 0, 2101),
(13, 'jeni', 'jshihora4@gmail.com', '123', 2147483647, '0000-00-00', 'werthjsdfg', 0, 3588),
(15, 'jeni', 'jshihora4@gmail.com', '12345678', 2147483647, '0000-00-00', 'werthjsdfg', 0, 1112),
(16, 'jeni', 'jshihora4@gmail.com', '1234', 2147483647, '0000-00-00', 'werthjsdfg', 0, 1433),
(17, 'jeni', 'jshihora4@gmail.com', '123', 2147483647, '0000-00-00', 'werthjsdfg', 0, 1664),
(18, 'jeni', 'jshihora4@gmail.com', '123', 1111111, '0000-00-00', '98798', 0, 7245),
(19, 'bansi', 'bansi0528@gmail.com', 'bansi@12', 2147483647, '2022-04-13', 'werthjsdfg', 0, 4173),
(20, 'hani', 'hani123@gmail.com', 'hani@123', 2147483647, '2021-12-03', 'join', 1, 2882),
(21, 'jeni', 'jshihora4@gmail.com', '123', 2147483647, '2022-05-30', 'study', 0, 8931),
(22, 'jeni', 'jshihora4@gmail.com', '93284579', 2147483647, '2022-05-30', 'study', 0, 2650),
(23, 'jeni', 'jshihora4@gmail.com', '123', 2147483647, '2022-05-30', 'study', 0, 2377),
(24, 'jeni', 'jshihora4@gmail.com', '123', 2147483647, '2022-05-30', 'study', 0, 3397),
(25, 'jeni', 'jshihora4@gmail.com', '123', 2147483647, '2022-05-30', 'study', 0, 3056),
(26, 'jeni', 'jshihora4@gmail.com', '123', 2147483647, '2022-04-30', 'study', 0, 3271),
(27, 'jeni', 'jshihora4@gmail.com', '123', 2147483647, '2022-04-30', 'study', 0, 1821),
(28, 'jeni', 'jshihora4@gmail.com', '123', 2147483647, '2022-04-30', 'study', 0, 1539),
(29, 'jeni', 'jshihora4@gmail.com', '123', 2147483647, '2022-04-30', 'study', 0, 1060),
(30, 'jeni', 'jshihora4@gmail.com', '123', 2147483647, '2022-04-30', 'study', 0, 1369),
(31, 'jeni', 'jshihora4@gmail.com', '123', 2147483647, '2022-01-04', 'study', 0, 3369),
(32, 'jeni', 'jshihora4@gmail.com', '123', 2147483647, '2022-04-20', 'Study', 0, 1048),
(33, 'jeni', 'jshihora4@gmail.com', '123', 2147483647, '2022-05-30', 'study', 0, 6045),
(34, 'jeni', 'jshihora4@gmail.com', '123', 934578865, '2022-05-28', 'study', 0, 3311),
(35, 'jeni', 'jshihora4@gmail.com', '123', 2147483647, '2022-05-30', 'study', 0, 8052),
(36, 'vimal sir', 'vimal.sdjic@gmail.com', '123', 2147483647, '2022-03-31', 'study', 0, 9050);

-- --------------------------------------------------------

--
-- Table structure for table `user_query`
--

CREATE TABLE `user_query` (
  `uqid` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(5000) NOT NULL,
  `status` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_query`
--

INSERT INTO `user_query` (`uqid`, `name`, `email`, `message`, `status`) VALUES
(1, 'abc', 'abc@gmail.com', 'asdfghkljhgfzfgh', 0),
(2, 'abc', 'abc@gmail.com', 'asdfghjkl;lkjhg', 0),
(3, 'abc', 'abc@gmail.com', 'sdfghgfdsadfbnmnhg', 0),
(4, 'abc', 'abc@gmail.com', 'sdfghgfdsadfbnmnhg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `v_id` int(11) NOT NULL,
  `video_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`v_id`, `video_name`) VALUES
(7, 'istockphoto-1093103858-640_adpp_is.mp4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_registration`
--
ALTER TABLE `admin_registration`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bid`),
  ADD KEY `rdid` (`roomid`),
  ADD KEY `roomid` (`roomid`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`eventid`);

--
-- Indexes for table `facility_master`
--
ALTER TABLE `facility_master`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_details`
--
ALTER TABLE `gallery_details`
  ADD PRIMARY KEY (`gdid`),
  ADD KEY `gid` (`gid`);

--
-- Indexes for table `gallery_master`
--
ALTER TABLE `gallery_master`
  ADD PRIMARY KEY (`gid`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `receipt`
--
ALTER TABLE `receipt`
  ADD PRIMARY KEY (`rid`),
  ADD KEY `bid` (`bid`);

--
-- Indexes for table `room_details`
--
ALTER TABLE `room_details`
  ADD PRIMARY KEY (`rdid`),
  ADD KEY `roomid` (`roomid`);

--
-- Indexes for table `room_master`
--
ALTER TABLE `room_master`
  ADD PRIMARY KEY (`roomid`);

--
-- Indexes for table `staff_details`
--
ALTER TABLE `staff_details`
  ADD PRIMARY KEY (`staffdetailid`),
  ADD KEY `staffid` (`staffid`);

--
-- Indexes for table `staff_master`
--
ALTER TABLE `staff_master`
  ADD PRIMARY KEY (`staffid`);

--
-- Indexes for table `terms`
--
ALTER TABLE `terms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_master`
--
ALTER TABLE `user_master`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `user_query`
--
ALTER TABLE `user_query`
  ADD PRIMARY KEY (`uqid`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`v_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `admin_registration`
--
ALTER TABLE `admin_registration`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `eventid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `facility_master`
--
ALTER TABLE `facility_master`
  MODIFY `fid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `gallery_details`
--
ALTER TABLE `gallery_details`
  MODIFY `gdid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `gallery_master`
--
ALTER TABLE `gallery_master`
  MODIFY `gid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `fid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `receipt`
--
ALTER TABLE `receipt`
  MODIFY `rid` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `room_details`
--
ALTER TABLE `room_details`
  MODIFY `rdid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `room_master`
--
ALTER TABLE `room_master`
  MODIFY `roomid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `staff_details`
--
ALTER TABLE `staff_details`
  MODIFY `staffdetailid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `staff_master`
--
ALTER TABLE `staff_master`
  MODIFY `staffid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_master`
--
ALTER TABLE `user_master`
  MODIFY `uid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `user_query`
--
ALTER TABLE `user_query`
  MODIFY `uqid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `room_details`
--
ALTER TABLE `room_details`
  ADD CONSTRAINT `room_details_ibfk_1` FOREIGN KEY (`roomid`) REFERENCES `room_master` (`roomid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
