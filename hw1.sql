-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 29, 2023 alle 15:10
-- Versione del server: 10.4.28-MariaDB
-- Versione PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hw1`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `evento`
--

CREATE TABLE `evento` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`content`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `evento`
--

INSERT INTO `evento` (`id`, `user`, `content`) VALUES
(9, 3, '{\"immagine\": \"https://s1.ticketm.net/dam/a/184/4204b209-9a66-44c7-8789-d46746ed0184_1665321_RETINA_PORTRAIT_16_9.jpg\", \"nome\": \"David Guetta & Morten present FUTURE RAVE\", \"data\": \"2023-06-02\", \"luogo\": \"Europe/Madrid\"}'),
(11, 3, '{\"immagine\": \"https://s1.ticketm.net/dam/a/1d1/47cc9b10-4904-4dec-b1d6-539e44a521d1_1825531_RETINA_PORTRAIT_3_2.jpg\", \"nome\": \"Shania Twain: Queen Of Me Tour\", \"data\": \"2023-06-07\", \"luogo\": \"America/Chicago\"}'),
(14, 1, '{\"immagine\": \"https://s1.ticketm.net/dam/a/300/88bcb3d0-aa78-428d-ad10-52514ea72300_RETINA_LANDSCAPE_16_9.jpg\", \"nome\": \"Hamilton (Touring)\", \"data\": \"2023-06-24\", \"luogo\": \"America/Chicago\"}');

-- --------------------------------------------------------

--
-- Struttura della tabella `opera4`
--

CREATE TABLE `opera4` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`content`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `opera4`
--

INSERT INTO `opera4` (`id`, `user`, `content`) VALUES
(43, 2, '{\"id\": \"\", \"immagine\": \"https://lh3.googleusercontent.com/9IVdEAG7VMwpR4Fodjsgh-C4oYdAE1mSialJGDUCboMUjmLFcZZVJXbgkJuI5euiv-dUBw80OBoViXQ-jsBzw_jYq1k=s0\", \"titolo\": \"Judith with the Head of Holofernes,Judith met het hoofd van Holofernes\"}'),
(53, 3, '{\"id\": \"\", \"immagine\": \"http://nationalmuseumse.iiifhosting.com/iiif/145ffbbfe05c4745fce768125d96eb64a0b2e310a4ca070d54d620aec7ca98d2/full/full/0/default.jpg\", \"titolo\": \"Den botfärdiga Magdalena,The Penitent Magdalen\"}'),
(54, 3, '{\"id\": \"\", \"immagine\": \"https://lh3.ggpht.com/-4GSQYSl0aR5uERjHzTPWvPMFYDAqYVHE2Q63PPARVhNxkOdD8d7vnZR73hgu2XsEmpNTl-yw6pizSHiTU5nlTr0pOQ=s0\", \"titolo\": \"Ontwerp voor een altaar met een Madonna met kind en heiligen\"}'),
(58, 3, '{\"id\": \"\", \"immagine\": \"https://lh3.ggpht.com/5oGxyvRd9E28rs_zRI-yjUff4XK1schyUK5s-2LyzZB1K8WjwtrMyq2cBbRUWNSjSoXbpRMgBcAc4avw6Xhbo3WxYis=s0\", \"titolo\": \"Gedrapeerde figuur, vrijwel frontaal gezien\"}'),
(59, 1, '{\"id\": \"\", \"immagine\": \"http://nationalmuseumse.iiifhosting.com/iiif/145ffbbfe05c4745fce768125d96eb64a0b2e310a4ca070d54d620aec7ca98d2/full/full/0/default.jpg\", \"titolo\": \"Den botfärdiga Magdalena,The Penitent Magdalen\"}');

-- --------------------------------------------------------

--
-- Struttura della tabella `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `propic` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `name`, `surname`, `propic`) VALUES
(1, 'Giorgia_M_', '$2y$10$Op5QTQUXdEMtVmIcLRWqDOOOrMCt9NpE6P0MHkOJdzmvM64WP77FO', 'uni394556@studium.unict.it', 'Giorgia Grazia', 'Mucciarella', 'assets/646f5daf493b96.95985708.jpg'),
(2, 'giorgia_m_99', '$2y$10$OyuLWKS.lQeUiDyk2LcpX.Z230DS1svtO5/P9w/.DYzFVA/c6TnGG', 'uni3946@studium.unict.it', 'giorgia', 'mucc', ''),
(3, 'giov_c', '$2y$10$AvmTUfCg/hq4cwuVJd31pOq3q/5ojNIHBWgQoXSH0bNBZc4PuIRvu', 'uni6@studium.unict.it', 'giov', 'c', '');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user` (`user`);

--
-- Indici per le tabelle `opera4`
--
ALTER TABLE `opera4`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user` (`user`);

--
-- Indici per le tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `evento`
--
ALTER TABLE `evento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT per la tabella `opera4`
--
ALTER TABLE `opera4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT per la tabella `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `evento`
--
ALTER TABLE `evento`
  ADD CONSTRAINT `evento_ibfk_1` FOREIGN KEY (`user`) REFERENCES `users` (`id`);

--
-- Limiti per la tabella `opera4`
--
ALTER TABLE `opera4`
  ADD CONSTRAINT `opera4_ibfk_1` FOREIGN KEY (`user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
