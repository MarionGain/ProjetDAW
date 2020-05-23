SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `seriousGame`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `ID` int(11) NOT NULL,
  `LOGIN` varchar(50) NOT NULL,
  `MESSAGE` text NOT NULL,
  `COULEUR` varchar(200) NOT NULL DEFAULT 'black'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`ID`, `LOGIN`, `MESSAGE`, `COULEUR`) VALUES
(1, 'Moi', 'Hey ! tu fais quoi ?', 'blue'),
(2, 'Papa', 'CE PROJET ME SORT DES YEUX', 'red'),
(3, 'Testt', 'coucou !', 'yellow'),
(4, 'Mathieu', '1 2 1 2 test test', 'blue'),
(5, 'Mathieu', 'CA MARCHE !!!!', 'blue'),
(6, 'Testt', 'Salut !', 'yellow'),
(7, 'Mathieu', 'Coucou', 'blue'),
(9, 'Mathieu', 'EST CE QUE QUELQU\'UN M\'ENTEND ?', 'red');

-- --------------------------------------------------------

--
-- Table structure for table `chat_individuel`
--

CREATE TABLE `chat_individuel` (
  `ID` int(11) NOT NULL,
  `EXPEDITEUR` varchar(50) NOT NULL,
  `DESTINATAIRE` varchar(50) NOT NULL,
  `MESSAGE` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_individuel`
--

INSERT INTO `chat_individuel` (`ID`, `EXPEDITEUR`, `DESTINATAIRE`, `MESSAGE`) VALUES
(1, 'Mathieu', 'Beelzeed', 'Ce chat est génial !'),
(2, 'Mathieu', 'Testt', 'Testt'),
(3, 'Testt', 'Mathieu', 'coucou'),
(4, 'Marion', 'Chat', 'Chat'),
(5, 'Marion', 'Chat', 'Chat'),
(6, 'Mathieu', 'Ghislain', 'Coucou');

-- --------------------------------------------------------

--
-- Table structure for table `CONNECTES`
--

CREATE TABLE `CONNECTES` (
  `LOGIN` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `CONNECTES`
--

INSERT INTO `CONNECTES` (`LOGIN`) VALUES
('Baptiste'),
('Beeel'),
('Marion'),
('Mathieu'),
('Testeur'),
('Testt');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `LOGIN` varchar(30) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `MAIL` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`LOGIN`, `PASSWORD`, `MAIL`) VALUES
('Gamemaster', '5396e38d7e1c3568eaf274cea87bbb84a86c60ec', 'gamemaster@gmail.com'),
('Ghislain', '8c99f215b3249d88078e8dac81008dbe9449888b', 'Ghislain@gmail.com'),
('Mathieu', '437ec6a7ec9d72cce42ff4c1f4d31be2a8ed1431', 'trevor.verney@gmail.com'),
('Testt', 'f352b7770535ce604d383a76b65450f5241b47bc', 'Test@gmail.com'),
('Coucou', '5ed25af7b1ed23fb00122e13d7f74c4d8262acd8', 'coucou@gmail.com'),
('Beelzeed', '6b3d444a8b7f413274dac1dd0b15c8440d02b50d', 'beelzeed@gmail.com'),
('Testeur', '211ca8fec2f55109d67d34947d0f7fc7f1842340', 'testeur@gmail.com'),
('Marion', 'd73d339754129ed677781da2b3bb166a2089eaba', 'marion@gmail.com'),
('testAlex', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'htefdht@rfdtg.com'),
('Beeel', '6b3d444a8b7f413274dac1dd0b15c8440d02b50d', 'bee@gmail.com'),
('Baptiste', '8a09756d48861d0c1884ca0847275f0b7880354c', 'baptiste@bla.com');

-- --------------------------------------------------------

--
-- Table structure for table `ROLE`
--

CREATE TABLE `ROLE` (
  `login` varchar(50) NOT NULL,
  `role` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ROLE`
--

INSERT INTO `ROLE` (`login`, `role`) VALUES
('Mathieu', 'COPG'),
('Marion', 'COPG'),
('Beeel', 'COPG');

-- --------------------------------------------------------

--
-- Table structure for table `TEST`
--

CREATE TABLE `TEST` (
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `TEST`
--

INSERT INTO `TEST` (`id`) VALUES
(1),
(2),
(3),
(4),
(5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `chat_individuel`
--
ALTER TABLE `chat_individuel`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `CONNECTES`
--
ALTER TABLE `CONNECTES`
  ADD PRIMARY KEY (`LOGIN`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`LOGIN`),
  ADD UNIQUE KEY `MAIL` (`MAIL`);

--
-- Indexes for table `ROLE`
--
ALTER TABLE `ROLE`
  ADD PRIMARY KEY (`login`);

--
-- Indexes for table `TEST`
--
ALTER TABLE `TEST`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `chat_individuel`
--
ALTER TABLE `chat_individuel`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
