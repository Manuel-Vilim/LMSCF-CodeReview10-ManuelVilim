-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 21. Mrz 2020 um 16:00
-- Server-Version: 10.4.11-MariaDB
-- PHP-Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `cr10_manuelvilim_biglibrary`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `author`
--

CREATE TABLE `author` (
  `author_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `fk_ID` int(1) NOT NULL DEFAULT 0,
  `fk_publisher` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `publisher` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `short_description` varchar(400) NOT NULL,
  `publish_date` date NOT NULL,
  `ISBN_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `media`
--

INSERT INTO `media` (`id`, `title`, `image`, `author`, `publisher`, `type`, `short_description`, `publish_date`, `ISBN_code`) VALUES
(30, 'Der Wald', 'Wald', 'Johny Braun', 'Alex Weiß', 'Crime', 'A love Strory you will never forget', '2020-03-10', 0),
(33, 'Das Buch', '', 'Rolf Rüdiger', 'Markus Winte', 'Roman', 'The perfect Book for bad wether', '2020-03-10', 2598),
(34, 'The Book', '', 'Hannes Green', 'Thomas Blau', 'Crime', 'A love Strory you will never forget', '2020-03-09', 2255),
(35, 'LOLO Lauf', '', 'Hannes Green', 'Thomas Blau', 'Roman ', 'A love Strory you will never forget', '2020-03-17', 8870),
(36, 'LOLO Lauf2', '', 'Hannes Green', 'Thomas Blau', 'Roman ', 'A love Strory you will never forget', '2020-03-19', 8871),
(37, 'LOLO Lauf3', '', 'Hannes Green', 'Thomas Blau', 'Roman ', 'A love Strory you will never forget', '2020-03-20', 8873),
(38, 'Der Wald2', 'Wald', 'Johny Braun', 'Alex Weiß', 'Crime', 'A love Strory you will never forget', '2020-03-11', 1),
(39, 'Das Buch2', '', 'Rolf Rüdiger', 'Markus Winte', 'Roman', 'The perfect Book for bad wether', '2020-03-12', 2599),
(40, 'The Book2', '', 'Hannes Green', 'Thomas Blau', 'Crime', 'A love Strory you will never forget', '2020-03-11', 2256),
(41, 'The Book3', '', 'Hannes Green', 'Thomas Blau', 'Crime', 'A love Strory you will never forget', '2020-03-12', 2258);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `publisher`
--

CREATE TABLE `publisher` (
  `publisher_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `active` int(1) NOT NULL DEFAULT 0,
  `fk_ID` int(11) DEFAULT NULL,
  `fk_author` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`author_id`),
  ADD KEY `fk_ID` (`fk_ID`),
  ADD KEY `fk_publisher` (`fk_publisher`);

--
-- Indizes für die Tabelle `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`publisher_id`),
  ADD KEY `fk_ID` (`fk_ID`),
  ADD KEY `fk_author` (`fk_author`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `author`
--
ALTER TABLE `author`
  MODIFY `author_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT für Tabelle `publisher`
--
ALTER TABLE `publisher`
  MODIFY `publisher_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `author`
--
ALTER TABLE `author`
  ADD CONSTRAINT `author_ibfk_1` FOREIGN KEY (`fk_ID`) REFERENCES `media` (`id`),
  ADD CONSTRAINT `author_ibfk_2` FOREIGN KEY (`fk_publisher`) REFERENCES `publisher` (`publisher_id`);

--
-- Constraints der Tabelle `publisher`
--
ALTER TABLE `publisher`
  ADD CONSTRAINT `publisher_ibfk_1` FOREIGN KEY (`fk_ID`) REFERENCES `media` (`id`),
  ADD CONSTRAINT `publisher_ibfk_2` FOREIGN KEY (`fk_author`) REFERENCES `author` (`author_id`),
  ADD CONSTRAINT `publisher_ibfk_3` FOREIGN KEY (`fk_author`) REFERENCES `author` (`author_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
