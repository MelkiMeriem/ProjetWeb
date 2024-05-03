-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 12 avr. 2024 à 03:01
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `manaradb`
--

-- --------------------------------------------------------

--
-- Structure de la table `campaign`
--

CREATE TABLE `campaign` (
  `Name` varchar(50) NOT NULL,
  `Purpose` text NOT NULL,
  `OwnerEmail` varchar(50) NOT NULL,
  `OwnerPassword` varchar(50) NOT NULL,
  `CampaignID` int(11) NOT NULL,
  `Budget` int(11) NOT NULL,
  `Imagelink` varchar(256) NOT NULL,
  `sum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `campaign`
--

INSERT INTO `campaign` (`Name`, `Purpose`, `OwnerEmail`, `OwnerPassword`, `CampaignID`, `Budget`, `Imagelink`, `sum`) VALUES
(' Help the people of Gaza', 'Civilians are paying a horrific price for the ongoing war.', 'melkimariem150@gmail.com', 'insat2024', 26, 12000, 'img1.jpg', 0),
(' Raising funds to evacuate civilians from Gaza', 'Here are directions and tips if you want to raise money for those trying to leave Gaza.', 'melkimariem150@gmail.com', 'insat2024', 27, 100, 'img2.jpg', 0),
('Help Raul for leg implebt', 'Rauls promising football journey took an unexpected turn when a tragic accident shattered his dreams and left him unable to walk. The incident, which occurred during a routine training session, cast a dark shadow over his once bright future in the sport. The injuries sustained were severe, robbing him not only of his physical mobility but also of his sense of purpose and identity as a footballer. In the blink of an eye, Rauls world was turned upside down, and the road to recovery seemed dauntingly long and uncertain. Yet, amidst the pain and despair, Rauls spirit remained unbroken, fueled by an unwavering determination to defy the odds and reclaim his place on the field. Though the journey ahead may be arduous, Rauls resilience and indomitable will serve as a beacon of hope, inspiring those around him to believe in the power of perseverance and the triumph of the human spirit.', 'idaniahmed72@gmail.com', 'bouhmid', 558, 5000, 'raul_leg.jpg', 200),
('Help the Brice Family Recover from House Fire', 'on 4/10/24, the Brice family home suffered a devastating fire leading to their home being destroyed and their two youngest children being air lifted to the Childrens Hospital with severe smoke inhalation injuries.\r\n\r\nReina and her family have been an incredible source of support for anyone going through a difficult time, have always kept their doors open to anyone in need. Please share and donate if you can for this INCREDIBLE family who needs all the help and support they can get at this time.', 'haythem.krid@insat.ucar.tn', 'haythemLinux', 559, 20000, 'burntHouse.jpg', 600),
('Support AKD School teaching English in Cambodia', 'Hello, we are volunteers who have spent the last month at the AKD School in Battambang, Cambodia.\r\nEvery day we teach English to individuals from 5 to 65 years old. Cambodian children only have 3 hours of school each morning. Government schools teach very little English, only one hour a week, despite it being fundamental to achieving further education and a better way of life. Private teachers charge a high price for extra English lessons, resulting in unequal access to education.\r\n\r\nAs a young boy, Kamnat, the founder of the school worked on his fathers farm. He stopped going to school when he was just seven years old because his family could not afford the student fees. However, he was still determined to study again. Thats why at the age of sixteen, he became a monk. This allowed him the opportunity to study every day for the next ten years. Now he is proud to help children who suffer from inequality as he did, by giving them the tools to build themselves a better future.\r\n\r\nKamnat and his family have been running the school since 2005. There are 6 classrooms operating 3 sessions a day utilizing 3 local teachers along with English speaking volunteers who come to teach English, support the local teachers and also learn more about Cambodian life.\r\n\r\nAs volunteers, we have been deeply touched by the dedication and perseverance of these kids to show up every day ready and willing to learn. This school is entirely dependent on donations to operate. The donations are needed for books, supplies, and improvements of the playground and facilities.\r\n\r\nIf you could help out in any way, it would be greatly appreciated.\r\n\r\n', 'idaniahmed72@gmail.com', 'bouhmid', 560, 2000, 'kids.jpg', 600),
('Help a student from Gaza complete his medical stud', 'Becoming a doctor has been my lifelong passion and a lifelong dream that I have striven to achieve. I have always been determined to shine to support those around me, even in the darkest of times.\r\nI have dreamed of becoming a doctor since I was a child, but due to the war on Gaza, my father is now unable to meet my needs and pay my tuition fees because he has now stopped working and does not receive any salary, and I have accumulated tuition expenses. If I do not pay the tuition and university fees, I will be dismissed from the university. I will continue my studies in medicine through your support and generosity. However, in order to continue my studies, I have to pay university fees.', 'oumaima.belgaied@insat.ucar.tn', 'oumaimaSfax', 561, 30000, 'medical.jpg', 600),
('Donate to help Moon get his kidney tumour surgery', 'Hi, my 8-year-old cat Moon was diagnosed with kidney tumour and he needs surgery to get it removed in order to stop spreading metastasis in his organism. The surgery is about 6k and unfortunately I cannot afford it without your help I dont want to loose Moon, please help us even with very little that would save his life. Thank you so much.', 'oumaima.belgaied@insat.ucar.tn', 'oumaimaSfax', 562, 5000, 'cat.jpg', 600),
('Donate to help me go on my first vacation', 'Fulfilling a Lifelong Dream .Dear friends, I am excited to share with you an incredible opportunity that means the world to me. For the first time, I have the chance to embark on a remarkable journey beyond the borders of my home country. This adventure isnt just about discovering new places; its about broadening my horizons, creating cherished memories, and immersing myself in diverse cultures. Traveling has always been a dream of mine, but financial constraints often stand in the way. Thats why I am reaching out to you today. I am seeking your support to help turn this dream into reality. Your generous contributions will be used to cover essential expenses such as airfare, accommodation, and daily costs during my trip.\r\nBy supporting my travel fund, you are not just backing me, you are investing in the joy of exploration, friendship, and personal development. Every donation, no matter the amount, brings me closer to experiencing the wonders of the world.\r\nThank you for considering supporting my adventure. Together, we can transform dreams into lasting memories.\r\nWith heartfelt gratitude, Rachid.', 'oumaima.belgaied@insat.ucar.tn', 'oumaimaSfax', 563, 5000, 'travel.jpg', 600);

-- --------------------------------------------------------

--
-- Structure de la table `fund`
--

CREATE TABLE `fund` (
  `FundID` int(11) NOT NULL,
  `CampaignID` int(11) NOT NULL,
  `UserEmail` varchar(50) NOT NULL,
  `userPassword` varchar(50) NOT NULL,
  `Date` datetime NOT NULL,
  `Amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `fund`
--

INSERT INTO `fund` (`FundID`, `CampaignID`, `UserEmail`, `userPassword`, `Date`, `Amount`) VALUES
(1, 27, 'melkimariem150@gmail.com', 'insat2024', '2024-04-05 02:28:05', 60),
(3, 27, 'melkimariem150@gmail.com', 'insat2024', '2024-04-05 02:29:24', 40),
(5, 27, 'oumaima.belgaied@insat.ucar.tn', 'OumaimaSfax', '2024-04-12 02:04:05', 600),
(6, 558, 'oumaima.belgaied@insat.ucar.tn', 'OumaimaSfax', '2024-04-12 02:05:02', 200),
(7, 558, 'idaniahmed72@gmail.com', 'bouhmid', '2024-04-12 02:15:08', 600),
(8, 26, 'oumaima.belgaied@insat.ucar.tn', 'OumaimaSfax', '2024-04-12 02:30:17', 1500);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `Name` varchar(50) NOT NULL,
  `Age` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `phone` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`Name`, `Age`, `Email`, `Password`, `phone`) VALUES
('hamza talbi', 20, 'hamza.talbi@insat.ucar.tn', 'hamzaKhalehaAlaAlah', 50332280),
('haythem krid', 20, 'haythem.krid@insat.ucar.tn', 'haythemLinux', 40332280),
('idani ahmed', 20, 'idaniahmed72@gmail.com', 'bouhmid', 95332285),
('Melki Mariem', 20, 'melkimariem150@gmail.com', 'insat2024', 0),
('oumaima belgaied', 20, 'oumaima.belgaied@insat.ucar.tn', 'OumaimaSfax', 50332280);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `campaign`
--
ALTER TABLE `campaign`
  ADD PRIMARY KEY (`CampaignID`),
  ADD KEY `OwnerId` (`OwnerEmail`),
  ADD KEY `OwnerPassword` (`OwnerPassword`);

--
-- Index pour la table `fund`
--
ALTER TABLE `fund`
  ADD PRIMARY KEY (`FundID`),
  ADD KEY `CampaignID` (`CampaignID`),
  ADD KEY `UserEmail` (`UserEmail`),
  ADD KEY `userPassword` (`userPassword`),
  ADD KEY `UserEmail_2` (`UserEmail`,`userPassword`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Email`,`Password`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `campaign`
--
ALTER TABLE `campaign`
  MODIFY `CampaignID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=564;

--
-- AUTO_INCREMENT pour la table `fund`
--
ALTER TABLE `fund`
  MODIFY `FundID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `campaign`
--
ALTER TABLE `campaign`
  ADD CONSTRAINT `campaign_ibfk_1` FOREIGN KEY (`OwnerEmail`) REFERENCES `user` (`Email`);

--
-- Contraintes pour la table `fund`
--
ALTER TABLE `fund`
  ADD CONSTRAINT `fund_ibfk_1` FOREIGN KEY (`CampaignID`) REFERENCES `campaign` (`CampaignID`),
  ADD CONSTRAINT `fund_ibfk_2` FOREIGN KEY (`UserEmail`,`userPassword`) REFERENCES `user` (`Email`, `Password`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 12 avr. 2024 à 03:01
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `manaradb`
--

-- --------------------------------------------------------

--
-- Structure de la table `campaign`
--

CREATE TABLE `campaign` (
  `Name` varchar(50) NOT NULL,
  `Purpose` text NOT NULL,
  `OwnerEmail` varchar(50) NOT NULL,
  `OwnerPassword` varchar(50) NOT NULL,
  `CampaignID` int(11) NOT NULL,
  `Budget` int(11) NOT NULL,
  `Imagelink` varchar(256) NOT NULL,
  `sum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `campaign`
--

INSERT INTO `campaign` (`Name`, `Purpose`, `OwnerEmail`, `OwnerPassword`, `CampaignID`, `Budget`, `Imagelink`, `sum`) VALUES
(' Help the people of Gaza', 'Civilians are paying a horrific price for the ongoing war.', 'melkimariem150@gmail.com', 'insat2024', 26, 12000, 'img1.jpg', 0),
(' Raising funds to evacuate civilians from Gaza', 'Here are directions and tips if you want to raise money for those trying to leave Gaza.', 'melkimariem150@gmail.com', 'insat2024', 27, 100, 'img2.jpg', 0),
('Help Raul for leg implebt', 'Rauls promising football journey took an unexpected turn when a tragic accident shattered his dreams and left him unable to walk. The incident, which occurred during a routine training session, cast a dark shadow over his once bright future in the sport. The injuries sustained were severe, robbing him not only of his physical mobility but also of his sense of purpose and identity as a footballer. In the blink of an eye, Rauls world was turned upside down, and the road to recovery seemed dauntingly long and uncertain. Yet, amidst the pain and despair, Rauls spirit remained unbroken, fueled by an unwavering determination to defy the odds and reclaim his place on the field. Though the journey ahead may be arduous, Rauls resilience and indomitable will serve as a beacon of hope, inspiring those around him to believe in the power of perseverance and the triumph of the human spirit.', 'idaniahmed72@gmail.com', 'bouhmid', 558, 5000, 'raul_leg.jpg', 200),
('Help the Brice Family Recover from House Fire', 'on 4/10/24, the Brice family home suffered a devastating fire leading to their home being destroyed and their two youngest children being air lifted to the Childrens Hospital with severe smoke inhalation injuries.\r\n\r\nReina and her family have been an incredible source of support for anyone going through a difficult time, have always kept their doors open to anyone in need. Please share and donate if you can for this INCREDIBLE family who needs all the help and support they can get at this time.', 'haythem.krid@insat.ucar.tn', 'haythemLinux', 559, 20000, 'burntHouse.jpg', 600),
('Support AKD School teaching English in Cambodia', 'Hello, we are volunteers who have spent the last month at the AKD School in Battambang, Cambodia.\r\nEvery day we teach English to individuals from 5 to 65 years old. Cambodian children only have 3 hours of school each morning. Government schools teach very little English, only one hour a week, despite it being fundamental to achieving further education and a better way of life. Private teachers charge a high price for extra English lessons, resulting in unequal access to education.\r\n\r\nAs a young boy, Kamnat, the founder of the school worked on his fathers farm. He stopped going to school when he was just seven years old because his family could not afford the student fees. However, he was still determined to study again. Thats why at the age of sixteen, he became a monk. This allowed him the opportunity to study every day for the next ten years. Now he is proud to help children who suffer from inequality as he did, by giving them the tools to build themselves a better future.\r\n\r\nKamnat and his family have been running the school since 2005. There are 6 classrooms operating 3 sessions a day utilizing 3 local teachers along with English speaking volunteers who come to teach English, support the local teachers and also learn more about Cambodian life.\r\n\r\nAs volunteers, we have been deeply touched by the dedication and perseverance of these kids to show up every day ready and willing to learn. This school is entirely dependent on donations to operate. The donations are needed for books, supplies, and improvements of the playground and facilities.\r\n\r\nIf you could help out in any way, it would be greatly appreciated.\r\n\r\n', 'idaniahmed72@gmail.com', 'bouhmid', 560, 2000, 'kids.jpg', 600),
('Help a student from Gaza complete his medical stud', 'Becoming a doctor has been my lifelong passion and a lifelong dream that I have striven to achieve. I have always been determined to shine to support those around me, even in the darkest of times.\r\nI have dreamed of becoming a doctor since I was a child, but due to the war on Gaza, my father is now unable to meet my needs and pay my tuition fees because he has now stopped working and does not receive any salary, and I have accumulated tuition expenses. If I do not pay the tuition and university fees, I will be dismissed from the university. I will continue my studies in medicine through your support and generosity. However, in order to continue my studies, I have to pay university fees.', 'oumaima.belgaied@insat.ucar.tn', 'oumaimaSfax', 561, 30000, 'medical.jpg', 600),
('Donate to help Moon get his kidney tumour surgery', 'Hi, my 8-year-old cat Moon was diagnosed with kidney tumour and he needs surgery to get it removed in order to stop spreading metastasis in his organism. The surgery is about 6k and unfortunately I cannot afford it without your help I dont want to loose Moon, please help us even with very little that would save his life. Thank you so much.', 'oumaima.belgaied@insat.ucar.tn', 'oumaimaSfax', 562, 5000, 'cat.jpg', 600),
('Donate to help me go on my first vacation', 'Fulfilling a Lifelong Dream .Dear friends, I am excited to share with you an incredible opportunity that means the world to me. For the first time, I have the chance to embark on a remarkable journey beyond the borders of my home country. This adventure isnt just about discovering new places; its about broadening my horizons, creating cherished memories, and immersing myself in diverse cultures. Traveling has always been a dream of mine, but financial constraints often stand in the way. Thats why I am reaching out to you today. I am seeking your support to help turn this dream into reality. Your generous contributions will be used to cover essential expenses such as airfare, accommodation, and daily costs during my trip.\r\nBy supporting my travel fund, you are not just backing me, you are investing in the joy of exploration, friendship, and personal development. Every donation, no matter the amount, brings me closer to experiencing the wonders of the world.\r\nThank you for considering supporting my adventure. Together, we can transform dreams into lasting memories.\r\nWith heartfelt gratitude, Rachid.', 'oumaima.belgaied@insat.ucar.tn', 'oumaimaSfax', 563, 5000, 'travel.jpg', 600);

-- --------------------------------------------------------

--
-- Structure de la table `fund`
--

CREATE TABLE `fund` (
  `FundID` int(11) NOT NULL,
  `CampaignID` int(11) NOT NULL,
  `UserEmail` varchar(50) NOT NULL,
  `userPassword` varchar(50) NOT NULL,
  `Date` datetime NOT NULL,
  `Amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `fund`
--

INSERT INTO `fund` (`FundID`, `CampaignID`, `UserEmail`, `userPassword`, `Date`, `Amount`) VALUES
(1, 27, 'melkimariem150@gmail.com', 'insat2024', '2024-04-05 02:28:05', 60),
(3, 27, 'melkimariem150@gmail.com', 'insat2024', '2024-04-05 02:29:24', 40),
(5, 27, 'oumaima.belgaied@insat.ucar.tn', 'OumaimaSfax', '2024-04-12 02:04:05', 600),
(6, 558, 'oumaima.belgaied@insat.ucar.tn', 'OumaimaSfax', '2024-04-12 02:05:02', 200),
(7, 558, 'idaniahmed72@gmail.com', 'bouhmid', '2024-04-12 02:15:08', 600),
(8, 26, 'oumaima.belgaied@insat.ucar.tn', 'OumaimaSfax', '2024-04-12 02:30:17', 1500);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `Name` varchar(50) NOT NULL,
  `Age` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `phone` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`Name`, `Age`, `Email`, `Password`, `phone`) VALUES
('hamza talbi', 20, 'hamza.talbi@insat.ucar.tn', 'hamzaKhalehaAlaAlah', 50332280),
('haythem krid', 20, 'haythem.krid@insat.ucar.tn', 'haythemLinux', 40332280),
('idani ahmed', 20, 'idaniahmed72@gmail.com', 'bouhmid', 95332285),
('Melki Mariem', 20, 'melkimariem150@gmail.com', 'insat2024', 0),
('oumaima belgaied', 20, 'oumaima.belgaied@insat.ucar.tn', 'OumaimaSfax', 50332280);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `campaign`
--
ALTER TABLE `campaign`
  ADD PRIMARY KEY (`CampaignID`),
  ADD KEY `OwnerId` (`OwnerEmail`),
  ADD KEY `OwnerPassword` (`OwnerPassword`);

--
-- Index pour la table `fund`
--
ALTER TABLE `fund`
  ADD PRIMARY KEY (`FundID`),
  ADD KEY `CampaignID` (`CampaignID`),
  ADD KEY `UserEmail` (`UserEmail`),
  ADD KEY `userPassword` (`userPassword`),
  ADD KEY `UserEmail_2` (`UserEmail`,`userPassword`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Email`,`Password`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `campaign`
--
ALTER TABLE `campaign`
  MODIFY `CampaignID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=564;

--
-- AUTO_INCREMENT pour la table `fund`
--
ALTER TABLE `fund`
  MODIFY `FundID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `campaign`
--
ALTER TABLE `campaign`
  ADD CONSTRAINT `campaign_ibfk_1` FOREIGN KEY (`OwnerEmail`) REFERENCES `user` (`Email`);

--
-- Contraintes pour la table `fund`
--
ALTER TABLE `fund`
  ADD CONSTRAINT `fund_ibfk_1` FOREIGN KEY (`CampaignID`) REFERENCES `campaign` (`CampaignID`),
  ADD CONSTRAINT `fund_ibfk_2` FOREIGN KEY (`UserEmail`,`userPassword`) REFERENCES `user` (`Email`, `Password`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;