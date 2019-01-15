SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+06:00";

--
-- Database: `Agridoc`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `catagory` varchar(23) COLLATE utf8_unicode_ci NOT NULL,
  `report` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `image` longblob NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `username`, `email`, `password`) VALUES
(1, 'AgriculturalOfficer', 'agriculturalofficer@gmail.com', '$2y$10$V3EGm.P/gim4JV.pFx7rR.xweIwM4pdTif1XtUPM3oB78CUAS0xQu'),
(2, 'FisheriesOfficer', 'fisheriesofficer@gmail.com', '$2y$10$ZBtYCJzF3a4cdAJbJcJpC.L9Hmqj68SiL31h9HWD4Kgd2azULnCGq'),
(3, 'CattleOfficer', 'cattleofficer@gmail.com', '$2y$10$8RbSLM2BPdDXsAUE4/MLHOjAH7ugEIbjv2QQRsVFoahWyt8R.h5Na'),
(4, 'AgriculturalUpazilaOfficer', 'aupazila@gmail.com', '$2y$10$H4.Qn50bz8sFKi/3xYCSI.NQ0Kwmdt4l387Z3v1lrv9eiR2Fv8XR.'),
(5, 'FisheriesUpazilaOfficer', 'fupazila@gmail.com', '$2y$10$UHZjdhqWp47ToewmplNq6OPkyUEUhENksZCI2ayx6utmaaijp3Ldm'),
(6, 'CattleUpazilaOfficer', 'cupazila@gmail.com', '$2y$10$ycr4XQkdAXXVvgEVRP8tVuLwApIm1Lr/.rchz2YBg8CgRJNaWB622');

-- --------------------------------------------------------

--
-- Table structure for table `users`


CREATE TABLE `adminsolution` (
  `usrid` int(11) NOT NULL,
  `message` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `adminupsolution` (
  `upid` int(11) NOT NULL,
  `message` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cellphone` int(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `cellphone`, `address`) VALUES
(1, 'test', 'test@test.com', '$2y$10$O8re7Fhl4nuwNci8j8BfieKSA.4ywBs6HRGjJ4RtWgfw6Enq9e2kC', 12345678, '1234frr');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;