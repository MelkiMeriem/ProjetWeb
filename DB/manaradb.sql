-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 05 avr. 2024 à 02:30
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
  `Purpose` varchar(100) NOT NULL,
  `OwnerEmail` varchar(50) NOT NULL,
  `OwnerPassword` varchar(50) NOT NULL,
  `CampaignID` int(11) NOT NULL,
  `Budget` int(11) NOT NULL,
  `Imagelink` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `campaign`
--

INSERT INTO `campaign` (`Name`, `Purpose`, `OwnerEmail`, `OwnerPassword`, `CampaignID`, `Budget`, `Imagelink`) VALUES
(' Help the people of Gaza', 'Civilians are paying a horrific price for the ongoing war.', 'melkimariem150@gmail.com', 'insat2024', 26, 0, 'img1.jpg'),
(' Raising funds to evacuate civilians from Gaza', 'Here are directions and tips if you want to raise money for those trying to leave Gaza.', 'melkimariem150@gmail.com', 'insat2024', 27, 100, 'img2.jpg'),
('Help my family in Gaza get to safety', 'My cousin Mahmoud lives in Gaza and he lost his business and his house.\r\nHelp him evacuate the Gaza ', 'melkimariem150@gmail.com', 'insat2024', 28, 0, 'img3.jpg');

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
(3, 27, 'melkimariem150@gmail.com', 'insat2024', '2024-04-05 02:29:24', 40);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `Name` varchar(50) NOT NULL,
  `Age` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`Name`, `Age`, `Email`, `Password`) VALUES
('Melki Mariem', 20, 'melkimariem150@gmail.com', 'insat2024');

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
  MODIFY `CampaignID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT pour la table `fund`
--
ALTER TABLE `fund`
  MODIFY `FundID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
