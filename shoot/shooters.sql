-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25-Mar-2016 às 22:06
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shooters`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `players`
--

CREATE TABLE IF NOT EXISTS `players` (
  `id_session` int(11) NOT NULL AUTO_INCREMENT,
  `player_name ` varchar(30) NOT NULL,
  `pass ` varchar(200) NOT NULL,
  `time_played ` int(11) NOT NULL,
  `coins ` int(11) NOT NULL,
  `SETTINGS` int(11) NOT NULL,
  `SCORES` int(11) NOT NULL,
  `WEAPONS` int(11) NOT NULL,
  PRIMARY KEY (`id_session`),
  UNIQUE KEY `ID` (`id_session`),
  UNIQUE KEY `player_name ` (`player_name `),
  UNIQUE KEY `player_name _2` (`player_name `),
  UNIQUE KEY `player_name _3` (`player_name `),
  UNIQUE KEY `player_name _4` (`player_name `),
  UNIQUE KEY `player_name _5` (`player_name `)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Extraindo dados da tabela `players`
--

INSERT INTO `players` (`id_session`, `player_name `, `pass `, `time_played `, `coins `, `SETTINGS`, `SCORES`, `WEAPONS`) VALUES
(11, 'BOBY', 'f54f5fc8a4673693d9e642ee5cb460591ee496ff83ecbc3028e437b5750a73c02d0a935919434bb0c507f84ee328c9d5ba3c9d3db2f9cfbf3ab8344a265483a6', 0, 0, 0, 0, 0),
(13, 'BABA', 'c6267d09f0cd20b6aa691e91965e1f1f1e0e1204e8ce59b4e828cdaa059f31e1a0a4cdde7c70f9b12fd2d66a718bd6402675df4a0c851e7543febd3ba8fe79b9', 0, 0, 0, 0, 0),
(14, 'AS', '2f6bb74272ea9ed4176db79759068f530a4e4ef05d307e37533231863c063c538ce4bde28f17e029b86b3d7e7f79f98b1caec4ccf52637e9c6f04e68cfb1328f', 0, 0, 0, 0, 0),
(18, 'new', 'aa54def9e0bb11c1ebbfc97a9ee63af9e95c4fdf1d032b1ddcc0f21661f748651d2b2b8fb94e9ae041780554db29815daa1c0fe991ddae54eff0c4c28cd9d20c', 0, 0, 2, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `scores`
--

CREATE TABLE IF NOT EXISTS `scores` (
  `ID_SCORES` int(11) NOT NULL AUTO_INCREMENT,
  `id_session` int(11) NOT NULL,
  `BEST_SCORE` int(11) NOT NULL DEFAULT '0',
  `last_score ` int(11) NOT NULL DEFAULT '0',
  `game_mode ` varchar(20) NOT NULL DEFAULT 'LOW',
  UNIQUE KEY `ID_SCORES` (`ID_SCORES`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `scores`
--

INSERT INTO `scores` (`ID_SCORES`, `id_session`, `BEST_SCORE`, `last_score `, `game_mode `) VALUES
(3, 11, 1, 0, 'LOW'),
(4, 11, 0, 0, 'LOW'),
(5, 13, 2, 0, 'LOW'),
(6, 14, 0, 0, 'LOW'),
(7, 14, 0, 0, 'LOW'),
(8, 14, 0, 0, 'LOW'),
(9, 14, 0, 0, 'LOW'),
(10, 18, 15300, 5200, 'only one minute');

-- --------------------------------------------------------

--
-- Estrutura da tabela `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `ID_SETTINGS` int(11) NOT NULL AUTO_INCREMENT,
  `id_session` int(11) NOT NULL,
  `presets` int(11) NOT NULL DEFAULT '1',
  `AUD_EFFECTS` float NOT NULL DEFAULT '1',
  `aud_musics ` float NOT NULL DEFAULT '1',
  `aud_ambiances ` float NOT NULL DEFAULT '1',
  `aud_weapons ` float NOT NULL DEFAULT '1',
  `aud_birds ` float NOT NULL DEFAULT '1',
  PRIMARY KEY (`ID_SETTINGS`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `settings`
--

INSERT INTO `settings` (`ID_SETTINGS`, `id_session`, `presets`, `AUD_EFFECTS`, `aud_musics `, `aud_ambiances `, `aud_weapons `, `aud_birds `) VALUES
(1, 0, 0, 0, 0, 0, 0, 0),
(2, 14, 0, 0, 0, 0, 0, 0),
(3, 18, 2, 1, 0.3, 0.3, 1, 0.3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `weapons`
--

CREATE TABLE IF NOT EXISTS `weapons` (
  `ID_WEAPON` int(11) NOT NULL,
  `MAG_CAPACITY` int(11) NOT NULL,
  `DAMAGE` int(11) NOT NULL,
  `HANDLE` int(11) NOT NULL,
  `AMMO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
