
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 17, 2016 at 01:44 PM
-- Server version: 10.0.20-MariaDB
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `u206790186_spbd`
--

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `id_files` int(11) NOT NULL AUTO_INCREMENT,
  `id_session` int(11) NOT NULL,
  `name_file` varchar(50) NOT NULL,
  `path_file` varchar(200) NOT NULL,
  PRIMARY KEY (`id_files`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id_files`, `id_session`, `name_file`, `path_file`) VALUES
(8, 1, 'shooters.png', 'downloads/shooters.png'),
(10, 0, 'Eq32Studio.exe', 'downloads/Eq32Studio.exe'),
(18, 2, 'Screenshot from 2015-09-29 10:04:37.png', 'downloads/Screenshot from 2015-09-29 10:04:37.png'),
(17, 2, 'hyteksnippets_1.7.zip', 'downloads/hyteksnippets_1.7.zip'),
(22, 2, 'settings_local.py', 'downloads/settings_local.py'),
(21, 2, 'running_hytek4_project.zip', 'downloads/running_hytek4_project.zip'),
(30, 2, 'projects.sh', 'downloads/projects.sh'),
(29, 2, 'hyteksnippets_2.1.tar.gz', 'downloads/hyteksnippets_2.1.tar.gz'),
(27, 2, 'hyteksnippets_2.0.tar.gz', 'downloads/hyteksnippets_2.0.tar.gz'),
(31, 0, 'settings_local.py', 'downloads/settings_local.py'),
(32, 2, 'boby.txt', 'downloads/boby.txt'),
(33, 17, 'h3.png', '../../HYTEK3/downloads/h3.png'),
(34, 2, 'com.freepie.android.imu.apk', '../../HYTEK3/downloads/com.freepie.android.imu.apk'),
(35, 2, 'apontamentos.html', '../../HYTEK3/downloads/apontamentos.html'),
(36, 2, 'apontamentos.html', '../../HYTEK3/downloads/apontamentos.html');

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE IF NOT EXISTS `friends` (
  `id_msg` int(11) NOT NULL AUTO_INCREMENT,
  `id_session` int(11) NOT NULL,
  `id_him` int(11) DEFAULT NULL,
  `content` varchar(500) NOT NULL,
  `data` datetime NOT NULL,
  PRIMARY KEY (`id_msg`),
  UNIQUE KEY `id_msg` (`id_msg`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`id_msg`, `id_session`, `id_him`, `content`, `data`) VALUES
(1, 2, 4, 'te st', '0000-00-00 00:00:00'),
(2, 4, 2, 'c ets kev', '0000-00-00 00:00:00'),
(3, 2, 7, '', '0000-00-00 00:00:00'),
(4, 2, 4, 'test d envoie de msg pour kev num 4', '2014-10-07 21:36:43'),
(5, 2, 4, 'eu sou o 2 por isso podes tentar mandar mensagem', '2014-10-08 08:21:54'),
(6, 2, 7, '', '0000-00-00 00:00:00'),
(7, 2, 7, 'oi eu sou o 2 por isso podes tantar mandar mensagem', '2014-10-08 08:22:50'),
(8, 7, 2, '', '0000-00-00 00:00:00'),
(9, 3, 2, '', '0000-00-00 00:00:00'),
(10, 3, 2, 'test', '2014-10-09 12:10:22'),
(11, 2, 3, '', '0000-00-00 00:00:00'),
(12, 2, 3, 'yo pedro', '2014-10-09 12:11:07'),
(13, 4, 2, 'http://uploaded.net/file/r5kx8wi2', '2014-10-10 22:01:07'),
(14, 2, 3, 'magnet:?xt=urn:btih:bcd1156cbbfdc9ab1970126b7b3458b6ca2eef41&dn=Monaco+whats+yours+is+mine+LAN+fixed&tr=udp%3A%2F%2Ftracker.openbittorrent.com%3A80&tr=udp%3A%2F%2Ftracker.publicbt.com%3A80&tr=udp%3A%2F%2Ftracker.istole.it%3A6969&tr=udp%3A%2F%2Fopen.demonii.com%3A1337', '2014-10-14 21:29:41'),
(15, 2, 3, 'http://thepiratebay.se/search/monaco/0/7/400', '2014-10-14 21:33:15'),
(16, 2, 0, 'dfkjbn', '2014-12-31 13:08:32');

-- --------------------------------------------------------

--
-- Table structure for table `mostimportant`
--

CREATE TABLE IF NOT EXISTS `mostimportant` (
  `id_mostimportant` int(11) NOT NULL AUTO_INCREMENT,
  `id_most` int(11) NOT NULL DEFAULT '0',
  `title` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Content',
  `url` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '#',
  UNIQUE KEY `id_mostaimportant` (`id_mostimportant`),
  KEY `id_tabs` (`id_mostimportant`),
  KEY `id_tabs_2` (`id_mostimportant`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=58 ;

--
-- Dumping data for table `mostimportant`
--

INSERT INTO `mostimportant` (`id_mostimportant`, `id_most`, `title`, `url`) VALUES
(3, 2, 'localhost', '0.0.0.0:8000/'),
(4, 2, 'host', '192.168.1.30:8000/pt/'),
(5, 2, 'Gmail', 'www.gmail.com'),
(6, 2, 'tradutor', 'translate.google.com/?hl=pt-PT'),
(54, 17, 'youtube', 'www.youtube.com'),
(8, 11, 'google', 'www.google.com'),
(9, 11, 'youtube', 'www.youtube.com'),
(10, 11, 'gmail', 'www.gmail.com'),
(11, 11, 'facebook', 'www.facebook.com'),
(12, 11, 'spotify', 'play.spotify.com'),
(13, 12, 'google', 'www.google.com'),
(14, 12, 'youtube', 'www.youtube.com'),
(15, 12, 'gmail', 'www.gmail.com'),
(16, 12, 'facebook', 'www.facebook.com'),
(17, 12, 'spotify', 'play.spotify.com'),
(18, 1, 'google', 'www.google.com'),
(19, 1, 'youtube', 'www.youtube.com'),
(20, 1, 'gmail', 'www.gmail.com'),
(21, 1, 'facebook', 'www.facebook.com'),
(22, 1, 'spotify', 'play.spotify.com'),
(23, 13, 'google', 'www.google.com'),
(24, 13, 'youtube', 'www.youtube.com'),
(25, 13, 'gmail', 'www.gmail.com'),
(26, 13, 'facebook', 'www.facebook.com'),
(27, 13, 'spotify', 'play.spotify.com'),
(28, 4, 'Youtube', 'www.youtube.com'),
(29, 4, 'FaceBook', 'facebook.com'),
(30, 4, 'Patch FR', 'http://traductionjeux.com/'),
(31, 4, 'Socialclub', 'pt.socialclub.rockstargames.com'),
(32, 4, 'kickass', 'http://kat.cr/'),
(52, 2, 'gitlab', 'gitlab.dengun.org/project/easybookings/network/master'),
(43, 15, 'google', 'www.google.com'),
(44, 15, 'youtube', 'www.youtube.com'),
(38, 14, 'google', 'www.google.com'),
(39, 14, 'youtube', 'www.youtube.com'),
(40, 14, 'gmail', 'www.gmail.com'),
(41, 14, 'facebook', 'www.facebook.com'),
(42, 14, 'spotify', 'play.spotify.com'),
(45, 15, 'gmail', 'www.gmail.com'),
(46, 15, 'facebook', 'www.facebook.com'),
(47, 15, 'spotify', 'play.spotify.com'),
(53, 17, 'google', 'www.google.com'),
(49, 2, 'facebook', 'www.facebook.com'),
(50, 2, 'admin', '0.0.0.0:8000/admin/'),
(55, 17, 'gmail', 'www.gmail.com'),
(56, 17, 'facebook', 'www.facebook.com'),
(57, 17, 'spotify', 'play.spotify.com');

-- --------------------------------------------------------

--
-- Table structure for table `mytabs`
--

CREATE TABLE IF NOT EXISTS `mytabs` (
  `id_tab` int(11) NOT NULL AUTO_INCREMENT,
  `id_tabs` int(11) NOT NULL DEFAULT '0',
  `title` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Content',
  `url` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '#',
  `data` datetime DEFAULT NULL,
  `view` int(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_tab`),
  KEY `id_tabs` (`id_tabs`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=407 ;

--
-- Dumping data for table `mytabs`
--

INSERT INTO `mytabs` (`id_tab`, `id_tabs`, `title`, `url`, `data`, `view`) VALUES
(1, 1, 'link', '#', '0000-00-00 00:00:00', 0),
(2, 5, 'Content', '#', '0000-00-00 00:00:00', 0),
(183, 2, 'google.com', 'google.com', '2015-07-21 08:43:42', 0),
(186, 2, 'nitgames.blogspot.pt', 'nitgames.blogspot.pt/search/label/Games%20Campactado', '2015-07-25 14:38:13', 0),
(6, 2, 'Youtube', 'www.youtube.com', '2014-08-14 15:01:55', 15),
(7, 2, 'Facebook', 'www.facebook.com', '2014-08-13 15:02:08', 18),
(163, 2, 'youtube addon', 'addons.mozilla.org/firefox/downloads/latest/124500/addon-124500-latest.xpi?src=search', '2015-06-20 23:07:20', 0),
(9, 2, 'Gmail', 'www.gmail.com', '2014-08-13 15:03:02', 12),
(10, 2, 'Hostinger', 'www.hostinger.pt', '2014-08-13 15:07:25', 0),
(11, 2, 'Gitlab', 'gitlab.dengun.org/groups/project', '2014-08-13 18:17:32', 7),
(184, 2, 'tradutor', 'translate.google.pt/#en/pt/', '2015-07-21 09:54:43', 0),
(13, 2, 'Mega', 'mega.co.nz', '2014-08-14 09:01:48', 0),
(14, 2, 'listen2youtube', 'www.listentoyoutube.com', '2014-08-14 16:59:45', 1),
(15, 2, 'color picker', 'www.colorpicker.com/', '2014-10-04 16:29:32', 0),
(16, 3, '', 'google.com', '2014-10-09 12:12:09', 1),
(18, 2, 'tradutor', 'translate.google.com.br/#en/pt', '2014-10-08 22:04:13', 0),
(20, 2, 'media queries list', 'css-tricks.com/snippets/css/media-queries-for-standard-devices/', '2014-09-30 14:24:36', 2),
(21, 0, '', 'hytek.url.ph/index.php', '2014-11-16 18:03:23', 5),
(24, 2, 'list design', 'lab.hakim.se/scroll-effects/', '2014-09-18 17:15:54', 0),
(25, 2, 'list design 1', 'designshack.net/articles/css/scrolljs/', '2014-09-18 17:16:46', 0),
(185, 2, 'gunsmoke.github.io/d', 'gunsmoke.github.io/diggy/', '2015-07-22 12:04:35', 1),
(27, 2, '', 'www.codeschool.com/courses/assembling-sass-part-2', '2014-10-31 14:54:09', 2),
(29, 0, '', 'hytek.url.ph/', '2014-11-16 18:03:01', 4),
(30, 2, '', 'dengun.apollohq.com/#/overview', '2014-10-31 09:16:18', 0),
(31, 6, 'Content', '#', NULL, 0),
(32, 7, 'Content', '#', NULL, 0),
(33, 3, '', 'youtube.com', '2014-10-09 12:12:16', 1),
(34, 3, '', 'facebook.com', '2014-10-09 12:12:26', 0),
(35, 2, '', 'designshack.net/articles/css/6-awesome-emmet-css-time-saving-tips/', '2015-01-19 12:57:47', 0),
(36, 2, '', 'scripts.reloadlab.net/customYtPlayer/', '2014-12-18 01:02:06', 0),
(37, 2, '', 'en.wikipedia.org/wiki/List_of_common_resolutions', '2015-03-05 14:14:39', 0),
(38, 2, '', 'play.nrj.fr/nrj/nrj-edm.html', '2014-12-04 10:53:27', 3),
(39, 8, 'Content', '#', NULL, 0),
(40, 7, 'Gamespot', 'www.gamespot.com', '2014-10-03 12:53:14', 1),
(41, 7, 'Be(i)fica', 'www.slb.pt', '2014-10-03 13:09:19', 1),
(42, 2, 'crossrider', 'crossrider.com/developers', '2015-01-06 12:15:02', 0),
(43, 2, '', 'stackoverflow.com/questions/6960406/add-css-to-iframe?lq=1', '2014-12-18 14:12:51', 0),
(44, 2, '', 'mrdoob.github.io/three.js/examples/css3d_periodictable.html', '2014-11-12 00:23:33', 0),
(45, 2, '', 'cambrlino.deviantart.com/art/Bookolio-a-Google-Chrome-startpage-183120358', '2014-12-02 18:59:32', 2),
(46, 0, '', 'vimeo.com/16444041', '2014-10-12 00:11:38', 8),
(48, 0, '', 'www.photoshoponlinefree.com/', '2014-10-10 21:59:49', 5),
(52, 2, '', 'www.picresize.com/', '2015-01-14 15:31:21', 0),
(53, 2, '', 'addons.videolan.org/content/show.php/+Youtube+playlist+importer?content=149909', '2015-01-20 15:03:38', 0),
(55, 2, '', 'codecall.net/2014/02/20/best-cross-platform-editors/', '2014-10-31 16:05:09', 1),
(56, 2, '', 'bes-sec.bes.pt/wt/BesPN20/service.aspx/3011', '2014-11-02 14:23:37', 0),
(57, 2, '', 'isobar-idev.github.io/code-standards/', '2015-01-06 01:29:46', 3),
(58, 2, '', 'flaticon.sodhanalibrary.com/jFlat.html', '2014-11-06 16:20:40', 1),
(59, 2, 'newpen', 'codepen.io/pen', '2014-11-10 09:20:09', 3),
(60, 2, '', 'caniuse.com/', '2014-12-23 12:37:41', 0),
(61, 2, '', 'css-tricks.com/child-and-sibling-selectors/', '2015-01-02 16:39:59', 3),
(62, 2, 'hytek', 'codepen.io/HYTEK/public/', '2015-01-12 14:07:44', 2),
(63, 2, '', 'trello.com/', '2014-11-17 10:39:41', 4),
(64, 2, '', 'feedly.com/', '2014-11-18 16:12:38', 1),
(65, 2, '', 'realfavicongenerator.net/', '2014-11-18 18:43:14', 1),
(66, 2, '', 'askubuntu.com/questions/373292/change-directory-subdirectory-folder-and-file-permissions-in-ubuntu-g', '2014-11-19 08:27:17', 0),
(67, 2, '', 'fontfabric.com/metropolis-free-font/', '2014-12-10 11:30:04', 0),
(68, 2, '', 'www.cssportal.com', '2014-11-19 14:52:05', 0),
(69, 2, '', 'www.axe1221.fr/', '2014-11-21 01:24:31', 1),
(70, 2, '', 'www.onlineocr.net/', '2015-01-13 17:35:22', 3),
(71, 2, '', 'plus.google.com/+MartinGauer/posts', '2014-11-25 00:16:40', 0),
(72, 2, '', 'www.atozcss.com/', '2014-11-26 17:14:41', 0),
(73, 8, 'Content', '#', NULL, 0),
(74, 2, '', 'codeforgeek.com/2014/12/google-recaptcha-tutorial/', '2015-01-05 16:17:23', 1),
(75, 2, '', 'www.racedepartment.com/downloads/ultimate-cam-pack.860/', '2014-11-28 14:19:43', 3),
(76, 2, '', 'adf.ly/DZaxo', '2014-11-28 14:23:04', 0),
(78, 2, '', 'www.mixcloud.com/ClassicHouseSessions/chs-podcast-04-cpt-luvlace/', '2014-12-01 11:46:23', 2),
(79, 2, '', 'www.wikihow.com/Extend-Laptop-Battery-Life', '2015-01-21 09:24:49', 0),
(80, 2, '', 'www.fakeinbox.com/', '2015-01-21 21:31:15', 0),
(81, 2, '', 'www.layoutit.com/', '2015-01-22 17:38:03', 0),
(82, 2, '', 'www.myfonts.com/WhatTheFont/', '2015-01-23 10:38:37', 1),
(83, 2, '', 'ubuntuforums.org/showthread.php?t=2234551', '2015-01-27 09:11:34', 1),
(166, 2, 'cpt luvlace', 'www.mixcloud.com/cptluvlace/', '2015-07-02 08:52:04', 0),
(167, 2, 'marquee', 'www.hongkiat.com/blog/css3-animation-advanced-marquee/', '2015-07-04 11:08:46', 0),
(86, 2, '', 'launchpad.net/ubuntu/+source/broadcom-sta', '2015-01-27 22:54:20', 0),
(168, 2, 'boots. classes', 'getbootstrap.com/2.3.2/base-css.html', '2015-07-08 09:06:48', 0),
(169, 0, 'drum', 'www.virtualdrumming.com/drums/windows/travis-barker-drum.html', '2015-07-11 12:53:25', 10),
(88, 2, '', 'evernote.com/', '2015-01-30 11:10:48', 3),
(89, 2, '', 'f1carsetup.com/index.php?/forum/130-f1-2013-setups/', '2015-01-31 22:50:25', 2),
(90, 2, '', 'www.staples.pt/produtos/370860', '2015-02-10 09:49:48', 3),
(91, 2, '', 'www.udacity.com/course/viewer#!/c-cs255/l-74901984/m-75439252', '2015-02-03 08:24:26', 0),
(93, 2, '', 'www.streamingbb.com/film-welcome-to-new-york-2014-gratuit.html', '2015-02-08 14:04:59', 1),
(107, 1, 'are', '#', '2015-04-12 01:33:06', 0),
(108, 1, 'amazing', '#', '2015-04-12 01:33:20', 0),
(95, 2, 'dell', 'm.dell.com/mt/www.dell.com/us/business/p/xps-13-linux/pd?mboxDisable=1&un_jtt_redirect', '2015-02-13 07:58:54', 0),
(96, 2, '', 'www.unlockpwd.com/dell-xps-13-2015-developer-edition-with-linux-and-broadwell-u/', '2015-02-14 00:18:32', 0),
(109, 1, '!!!', '#', '2015-04-12 01:33:41', 0),
(178, 2, 'lorem ipsum', 'www.lipsum.com/feed/html', '2015-07-17 08:14:06', 0),
(114, 2, 'adblock', 'update.adblockplus.org/latest/adblockplusfirefox.xpi', '2015-04-23 09:31:40', 0),
(112, 2, 'games in linux', 'www.diolinux.com.br/2014/05/como-rodar-o-mortal-kombat-9-no-linux.html', '2015-04-18 08:30:59', 0),
(115, 2, 'stylish', 'addons.mozilla.org/firefox/downloads/latest/2108/addon-2108-latest.xpi?src=dp-btn-primary', '2015-04-23 09:32:56', 0),
(116, 13, 'test', 'test', '2015-04-30 08:11:28', 0),
(117, 2, 'quick translator plu', 'addons.mozilla.org/firefox/downloads/latest/58606/addon-58606-latest.xpi?src=dp-btn-primary', '2015-04-30 08:44:35', 0),
(118, 2, 'compass', 'compass-style.org/index/mixins/', '2015-04-30 09:50:58', 0),
(119, 1, 'Game', 'hytek.url.ph/shoot/', '2015-05-04 08:30:21', 0),
(120, 1, 'FrontingFast', 'hytek.url.ph/FrontingFast/', '2015-05-05 08:32:21', 0),
(121, 2, 'upload file php', 'www.dzone.com/snippets/very-simple-php-file-upload', '2015-05-05 13:20:48', 0),
(122, 2, 'asus', 'www.asus.com/Notebooks_Ultrabooks/K53U/gallery/', '2015-05-06 13:26:17', 0),
(123, 2, 'css-tricks.com/fight', 'css-tricks.com/fighting-the-space-between-inline-block-elements/', '2015-05-06 17:56:26', 0),
(124, 0, 'hostinger panel', 'hytek.url.ph/_file-manager/elfinder.php?access=82.154.196.19_20761377e6c8e105863c2788399444e8b8f4b31', '2015-05-07 07:13:32', 2),
(126, 2, 'host. panel', 'hytek.url.ph/_file-manager/elfinder.php?access=85.244.89.145_2cb718624459629b7bf16ea3c1ddedbd127a64b', '2015-05-07 07:16:25', 0),
(128, 2, 'www.videojs.com/', 'www.videojs.com/', '2015-05-11 09:10:05', 0),
(129, 2, 'grid bootstrap', 'alefeuvre.github.io/foundation-grid-displayer/', '2015-05-12 10:07:41', 0),
(130, 2, 'youtube API', 'developers.google.com/youtube/player_parameters?hl=pt-br', '2015-05-14 09:20:29', 0),
(131, 0, 'copy ubuntu to anoth', 'eggsonbread.com/2010/01/28/move-ubuntu-to-another-computer-in-3-simple-steps/', '2015-05-18 08:17:55', 16),
(132, 2, 'copy ubuntu to anoth', 'eggsonbread.com/2010/01/28/move-ubuntu-to-another-computer-in-3-simple-steps/', '2015-05-18 08:18:14', 0),
(175, 2, 'pikock.github.io/boo', 'pikock.github.io/bootstrap-magic/app/index.html#!/editor', '2015-07-15 16:40:33', 0),
(176, 2, 'www.snipplr.com/', 'www.snipplr.com/', '2015-07-15 16:46:33', 0),
(177, 2, 'coveloping.com/', 'coveloping.com/', '2015-07-15 16:53:36', 0),
(170, 2, 'drum', 'www.virtualdrumming.com/drums/windows/travis-barker-drum.html', '2015-07-11 12:53:52', 0),
(171, 2, 'www.globaldata.pt/co', 'www.globaldata.pt/computadores/desktop/computador-global-arts-essential-19682.html', '2015-07-12 09:51:13', 0),
(143, 1, 'pianogame youtube', 'hytek.url.ph/shoot/index.php', '2015-05-22 23:08:54', 0),
(172, 2, 'www.globaldata.pt/co', 'www.globaldata.pt/computadores/desktop/computador-global-gamer-advanced-19681.html', '2015-07-12 09:51:18', 0),
(173, 2, 'VM', 'dev.modern.ie/tools/vms/', '2015-07-14 13:08:37', 0),
(174, 2, 'wakatime', 'teamopz.meteor.com/', '2015-07-14 14:19:34', 0),
(147, 2, 'gameserrors.com/how-', 'gameserrors.com/how-to-fix-mortal-kombat-x-errors-random-crashes-low-fps-not-starting/', '2015-05-31 21:30:14', 0),
(149, 2, '20.okeanelzy.com/en/', '20.okeanelzy.com/en/', '2015-06-04 23:30:19', 0),
(150, 2, 'www.ebay.com/bhp/del', 'www.ebay.com/bhp/dell-xps-14-ultrabook', '2015-06-05 07:18:16', 0),
(151, 2, 'www.amazon.com/Dell-', 'www.amazon.com/Dell-Inspiron-i5447-6250sLV-14-Inch-Touchscreen/dp/B00K4PAPG0/ref=pd_sim_sbs_147_10?i', '2015-06-05 07:29:05', 0),
(152, 2, 'hp sleekbook', 'www.ubuntu.com/certification/hardware/201209-11787/', '2015-06-05 17:54:20', 0),
(153, 2, 'gsettings set org.gn', 'gsettings set org.gnome.nautilus.preferences always-use-location-entry true', '2015-06-08 08:27:42', 0),
(154, 2, 'toshiba', 'www.fnac.pt/Toshiba-Satellite-L50-A-1EF-Computador-Portatil-Computador-Portatil/a745535#ficheDt', '2015-06-09 13:33:37', 0),
(155, 2, 'css specificity', 'specificity.keegan.st/', '2015-06-09 15:27:52', 0),
(249, 0, 'hangouts.google.com/', 'hangouts.google.com/', '2015-09-03 08:07:16', 4),
(250, 2, 'hangouts.google.com/', 'hangouts.google.com/', '2015-09-03 08:07:24', 0),
(157, 2, 'ubuntuforums.org/sho', 'ubuntuforums.org/showthread.php?t=2212391', '2015-06-17 09:15:03', 0),
(158, 2, 'ad block', 'addons.mozilla.org/firefox/downloads/latest/1865/addon-1865-latest.xpi?src=dp-btn-primary', '2015-06-17 11:09:17', 0),
(160, 2, 'ad block', 'addons.mozilla.org/firefox/downloads/latest/1865/addon-1865-latest.xpi?src=dp-btn-primary', '2015-06-17 11:42:12', 0),
(161, 2, 'quick translator', 'addons.mozilla.org/firefox/downloads/latest/58606/addon-58606-latest.xpi?src=dp-btn-primary', '2015-06-17 11:50:14', 0),
(162, 2, 'play.spotify.com/use', 'play.spotify.com/user/1188639242/playlist/2DlMA4R9yNAmF6L3W3LNyM', '2015-06-19 12:40:11', 0),
(164, 0, 'php upload bar', 'www.johnboyproductions.com/php-upload-progress-bar/', '2015-06-23 08:57:13', 7),
(165, 2, 'www.skidrowreloaded.', 'www.skidrowreloaded.com/project-cars-reloaded/', '2015-06-30 22:46:39', 0),
(187, 2, 'nitgames.blogspot.co', 'nitgames.blogspot.com.br/', '2015-07-25 14:42:26', 0),
(188, 2, 'ruler addon', 'addons.mozilla.org/firefox/downloads/latest/539/addon-539-latest.xpi?src=dp-btn-primary', '2015-07-27 11:26:17', 0),
(189, 2, 'quantityqueries', 'quantityqueries.com/', '2015-07-27 14:51:51', 0),
(190, 2, 'teamopz.meteor.com/', 'teamopz.meteor.com/', '2015-07-28 10:49:21', 0),
(191, 2, 'socket.io', 'pt.stackoverflow.com/questions/31921/integrar-aplica%C3%A7%C3%A3o-nodejs-a-site-php-em-servidores-di', '2015-07-29 08:27:01', 0),
(192, 2, 'nodejs hosting', 'www.openshift.com/', '2015-07-29 08:54:14', 0),
(194, 2, 'pdf to png', 'pdf2png.com/pt/', '2015-07-31 13:27:55', 0),
(195, 2, 'px to em', 'pxtoem.com/', '2015-07-31 16:17:04', 0),
(197, 2, 'Browser protect', 'addons.mozilla.org/en-us/firefox/addon/browserprotect/', '2015-08-02 09:48:22', 0),
(198, 2, 'rgb hex', 'www.javascripter.net/faq/rgbtohex.htm', '2015-08-03 08:32:12', 0),
(199, 2, 'static page django', 'stackoverflow.com/questions/1123898/django-static-page', '2015-08-04 13:09:34', 0),
(200, 2, 'live reload', 'download.livereload.com/2.0.8/LiveReload-2.0.8.xpi', '2015-08-05 08:16:53', 0),
(201, 2, 'low gmail', 'mail.google.com/mail/u/0/h/vdasypl4brpn/?zy=d&f=1', '2015-08-05 08:41:30', 0),
(202, 2, 'glyphicons', 'netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css', '2015-08-06 12:43:37', 0),
(203, 2, 'selector regex css', 'css-tricks.com/attribute-selectors/', '2015-08-07 09:56:17', 0),
(204, 2, 'css selectors', 'www.w3schools.com/cssref/css_selectors.asp', '2015-08-07 14:48:20', 0),
(205, 2, 'ruby', 'rubyinstaller.org/', '2015-08-08 12:33:36', 0),
(206, 2, 'keycode', 'css-tricks.com/snippets/javascript/javascript-keycodes/', '2015-08-08 17:10:35', 0),
(207, 2, 'ninite.com/', 'ninite.com/', '2015-08-09 22:05:37', 0),
(208, 2, 'bybeau', 'file:///home/hytek/Pictures/bybeau/ByBeau-Web-Preview-v3.pdf', '2015-08-10 08:38:25', 0),
(209, 2, 'rgbtohex', 'www.javascripter.net/faq/hextorgb.htm', '2015-08-10 11:18:06', 0),
(210, 2, 'font awesome', 'fortawesome.github.io/Font-Awesome/icons/', '2015-08-10 12:46:25', 0),
(211, 2, 'bybeau pdf', 'file:///home/hytek/Pictures/bybeau/ByBeau-Web-Preview-v3.pdf', '2015-08-11 08:32:25', 0),
(212, 2, 'fullpage.js', 'github.com/alvarotrigo/fullPage.js', '2015-08-11 12:38:12', 0),
(213, 2, 'package control subl', 'packagecontrol.io/installation', '2015-08-11 22:24:21', 0),
(214, 2, 'user-experience', 'ux.stackexchange.com/questions/46207/how-to-highlight-the-selected-option-when-there-are-only-2-elem', '2015-08-13 14:30:48', 0),
(215, 2, 'file:///home/hytek/P', 'file:///home/hytek/Pictures/vale%20do%20lobo/desktop_v4.pdf', '2015-08-13 14:44:09', 0),
(217, 15, 'www.pandora.com', 'www.pandora.com', '2015-08-14 08:54:11', 0),
(218, 2, 'image gallery', 'blueimp.github.io/Bootstrap-Image-Gallery/', '2015-08-14 09:59:07', 0),
(219, 2, 'mp3 cutter', 'mp3cut.net/pt/', '2015-08-16 15:56:13', 0),
(220, 0, 'title:codepen', 'url:codepen.io', '2015-08-17 06:26:22', 2),
(221, 2, 'chrome css', 'www.google.pt/search?client=ubuntu&channel=fs&q=userchromecss&ie=utf-8&oe=utf-8&gfe_rd=cr&ei=uIbUVZ3', '2015-08-19 13:47:07', 0),
(222, 2, 'inspect', 'chrome://inspect/#devices', '2015-08-19 16:09:30', 0),
(223, 1, '192.168.1.27:8000/pt', '192.168.1.27:8000/pt/home/', '2015-08-20 09:49:24', 0),
(224, 1, '127.0.0.1:8000/pt/ho', '127.0.0.1:8000/pt/home/', '2015-08-20 09:49:47', 0),
(225, 1, 'jsfiddle.net/2QyY3/2', 'jsfiddle.net/2QyY3/2/', '2015-08-20 10:42:23', 0),
(226, 1, 'codepen.io/sarath704', 'codepen.io/sarath704/pen/LhvFt', '2015-08-20 11:01:31', 0),
(227, 2, 'userstyles.org/', 'userstyles.org/', '2015-08-20 13:10:54', 0),
(228, 2, 'www.photoshoponline.', 'www.photoshoponline.com.br/editor/', '2015-08-20 14:06:57', 0),
(229, 2, 'input range slider', 'danielstern.ca/range.css/#/', '2015-08-20 16:16:46', 0),
(230, 2, 'tympanus.net/Develop', 'tympanus.net/Development/CreativeLinkEffects/', '2015-08-24 17:15:32', 0),
(231, 2, 'valedolobo pdf', 'file:///home/hytek/Pictures/vale%20do%20lobo/desktop_v2.pdf', '2015-08-27 08:36:35', 0),
(232, 2, 'adblock chrome', 'chrome.google.com/webstore/detail/adblock-plus/cfhdojbkjhnklbpkdaibdccddilifddb/related?hl=pt-PT', '2015-08-27 08:38:11', 0),
(233, 0, 'chrome.google.com/we', 'chrome.google.com/webstore/detail/stylish/fjnbnpbmkenffdnngjfgmeleoegfcffe?hl=pt-PT', '2015-08-28 08:05:07', 3),
(234, 2, 'stylish chrome', 'chrome.google.com/webstore/detail/stylish/fjnbnpbmkenffdnngjfgmeleoegfcffe?hl=pt-PT', '2015-08-28 08:05:56', 0),
(235, 2, 'google map styles', 'www.mapstylr.com/map-style-editor/', '2015-08-28 10:44:18', 0),
(236, 2, 'answers.unrealengine', 'answers.unrealengine.com/questions/59044/how-to-changeset-vehicle-transform.html', '2015-08-30 17:54:20', 0),
(237, 7, 'w7', 'microsofthup.com/hupus/error404.html', '2015-08-30 22:42:51', 0),
(238, 2, 'w7', 'microsofthup.com/hupus/error404.html', '2015-08-30 22:43:13', 0),
(239, 2, 'w7', '85.25.103.164/Getintopc.com/Win_7_64Bit.iso', '2015-08-30 22:44:00', 0),
(240, 2, 'answers.unrealengine', 'answers.unrealengine.com/questions/68804/how-to-teleport-vehicle-player-pawn.html', '2015-08-31 08:17:51', 0),
(241, 2, 'translator addon', 'chrome.google.com/webstore/detail/google-translate/aapbdbdomjkkjkaonfhkkikfgjllcleb/related?hl=bg', '2015-08-31 11:17:39', 0),
(243, 2, 'ruler chrome', 'chrome.google.com/webstore/detail/page-ruler/jlpkojjdgbllmedoapgfodplfhcbnbpn', '2015-08-31 14:33:41', 0),
(244, 2, 'css generator chrome', 'chrome.google.com/webstore/detail/css3-generator/dmlgmehijaodgkkooghkknjjkddahmej?utm_source=page_ru', '2015-08-31 14:36:49', 0),
(245, 2, 'answers.unrealengine', 'answers.unrealengine.com/questions/68324/change-in-position-affect-particles.html', '2015-09-01 12:52:04', 0),
(246, 2, 'held down ue4', 'forums.unrealengine.com/showthread.php?476-Input-Held-Down', '2015-09-02 08:56:24', 0),
(247, 2, 'Turbo ue4', 'answers.unrealengine.com/questions/1970/sprinting-with-shift.html', '2015-09-02 12:28:49', 0),
(248, 2, 'localhost:8000/packa', 'localhost:8000/packages/?destiny=&category=all&date_start=&date_end=&people=&ages=', '2015-09-02 13:41:33', 0),
(251, 2, 'www.easybookings.com', 'www.easybookings.com.pt/hotels/search/results/?search=Faro&t=1&q=2&checkin=07%2F09%2F2015&checkout=2', '2015-09-03 09:50:14', 0),
(252, 2, 'easybookin detail li', 'localhost:8000/packages/?destiny=name&category=all&date_start=&date_end=&people=', '2015-09-03 10:27:56', 0),
(253, 2, 'google form', 'docs.google.com/forms/d/14VDFVHGN9EkFWVPrgJUWVYbgGbJCH9joyVn4R-tOnIg/edit#', '2015-09-04 11:14:44', 0),
(254, 2, 'docs.unrealengine.co', 'docs.unrealengine.com/latest/INT/Engine/Landscape/Custom/index.html', '2015-09-06 18:08:42', 0),
(255, 2, 'answers.unrealengine', 'answers.unrealengine.com/questions/22934/how-to-convert-an-object-to-a-prefab.html', '2015-09-08 08:56:40', 0),
(256, 2, 'responsive table', 'zurb.com/playground/projects/responsive-tables/index.html', '2015-09-08 12:50:31', 0),
(257, 2, '3d model ue4', 'www.yobi3d.com/#!/', '2015-09-08 23:29:03', 0),
(258, 2, 'css content attr', 'davidwalsh.name/css-content-attr', '2015-09-10 08:30:18', 0),
(259, 2, 'html to javascript', 'www.accessify.com/tools-and-wizards/developer-tools/html-javascript-convertor/', '2015-09-11 12:41:51', 0),
(260, 2, 'skidrowreloaded.com/', 'skidrowreloaded.com/project-cars-reloaded/', '2015-09-14 20:00:23', 0),
(261, 2, 'google form', 'docs.google.com/forms/', '2015-09-15 17:16:16', 0),
(262, 2, 'twitch', 'www.twitch.tv/wallstark/profile', '2015-09-15 22:06:47', 0),
(263, 2, 'path bar for ubuntu', 'www.howtogeek.com/189777/how-to-show-the-location-entry-instead-of-the-breadcrumb-bar-in-nautilus-in', '2015-09-16 09:01:13', 0),
(264, 2, 'roccat project cars', 'www.roccat.org/en-PT/Home/Overview/', '2015-09-16 17:25:12', 0),
(265, 2, 'projectcarssetups.eu', 'projectcarssetups.eu/#/bycar', '2015-09-16 21:32:05', 0),
(266, 1, '192.168.1.31:8000/', '192.168.1.31:8000/', '2015-09-17 14:03:47', 0),
(267, 2, 'pcars skidrow', 'www.skidrowreloaded.com/project-cars-reloaded/', '2015-09-19 23:39:42', 0),
(268, 2, 'www.hardware.com.br/', 'www.hardware.com.br/comunidade/loader-windows/1300410/', '2015-09-19 23:46:34', 0),
(269, 2, 'tunngle', 'www.tunngle.net/community/topic/202022-how-to-play-project-cars-online-using-tunngle/', '2015-09-20 11:31:58', 0),
(270, 2, 'www.tunngle.net/wiki', 'www.tunngle.net/wiki/Network:Project_CARS', '2015-09-20 19:07:24', 0),
(271, 2, 'hover buttons', 'ianlunn.github.io/Hover/', '2015-09-25 10:16:59', 0),
(272, 2, 'pcars all reloaded', 'www.skidrowreloaded.com/?s=project+cars', '2015-09-27 21:54:19', 0),
(273, 2, 'developers.google.co', 'developers.google.com/speed/pagespeed/insights/', '2015-09-29 10:48:07', 0),
(274, 0, 'title: codepen', 'url:codepen.io/', '2015-09-29 13:16:23', 2),
(275, 2, 'bybeau.dengun.com/en', 'bybeau.dengun.com/en/#intro', '2015-10-01 08:22:50', 0),
(277, 2, 'php runnable', 'code.runnable.com/', '2015-10-03 12:48:43', 0),
(278, 2, 'jquery filter', 'kilianvalkhof.com/2010/javascript/how-to-build-a-fast-simple-list-filter-with-jquery/', '2015-10-03 13:11:43', 0),
(282, 2, 'firefox new tab', 'addons.mozilla.org/firefox/downloads/latest/626810/platform:5/addon-626810-latest.xpi?src=dp-btn-pri', '2015-10-03 23:06:38', 0),
(283, 2, 'localhost hytek 4', 'localhost/apontamentos', '2015-10-03 23:20:46', 0),
(284, 2, 'localhost:8000/', 'localhost:8000/', '2015-10-05 08:36:42', 0),
(291, 2, 'https:localhost', 'localhost:8000', '2015-10-09 08:10:09', 0),
(286, 2, 'elevator js', 'tholman.com/elevator.js/', '2015-10-06 13:43:32', 0),
(292, 2, 'slick js', 'kenwheeler.github.io/slick/', '2015-10-09 09:41:32', 0),
(405, 2, 'fffff', 'hvhvhv', '2016-02-16 14:05:26', 0),
(406, 2, 'scss live edit', 'usetakana.com/', '2016-02-17 09:52:33', 0),
(294, 2, 'online converter', 'www.online-convert.com/', '2015-10-11 20:45:47', 0),
(295, 2, '192.168.1.35:8000/pt', '192.168.1.35:8000/pt/', '2015-10-12 08:48:38', 0),
(296, 2, 'tf3dm.com', 'tf3dm.com', '2015-10-15 20:33:18', 0),
(297, 2, 'hex to rgb', 'www.javascripter.net/faq/hextorgb.htm', '2015-10-16 16:28:31', 0),
(298, 2, 'convert to html', 'www.webtoolhub.com/tn561393-html-to-text-converter.aspx', '2015-10-16 21:30:01', 0),
(299, 2, 'www.skidrowreloaded.', 'www.skidrowreloaded.com/dirt-rally-early-access-cracked/', '2015-10-18 00:03:07', 0),
(300, 2, 'www.blumen-hotel.at/', 'www.blumen-hotel.at/', '2015-10-20 14:08:43', 0),
(301, 2, 'google font', 'www.google.com/fonts', '2015-10-20 14:49:12', 0),
(302, 2, 'malhadinha', 'www.malhadinhanova.pt/en/', '2015-10-20 15:57:02', 0),
(303, 2, 'marques', 'marques.dengun.com/en/', '2015-10-20 16:28:15', 0),
(304, 2, 'addon snappysnippets', 'chrome.google.com/webstore/detail/snappysnippet/blfngdefapoapkcdibbdkigpeaffgcil', '2015-10-21 08:50:01', 0),
(305, 2, 'docker', 'training.docker.com/self-paced-training', '2015-10-21 17:22:28', 0),
(306, 2, 'preloader gif', 'preloaders.net/en/', '2015-10-22 14:59:02', 0),
(308, 2, 'sticky footer', 'ryanfait.com/resources/footer-stick-to-bottom-of-page/', '2015-10-26 13:42:44', 0),
(309, 2, 'hotspotShield VPN', 'www.filedropper.com/newwinrarziparchive_4', '2015-10-27 23:58:21', 0),
(310, 2, 'linux firefox crashe', 'support.mozilla.org/en-US/questions/1002029', '2015-10-28 16:40:11', 0),
(311, 2, 'dsbl update hotsopt', 'windowsvc.com/bbs/board.php?bo_table=windowsvc&wr_id=1675', '2015-10-28 21:49:12', 0),
(312, 2, 'anturio', 'www.anturio.com/', '2015-10-29 16:22:24', 0),
(313, 2, 'sublime shortcut', 'webdesign.tutsplus.com/tutorials/useful-shortcuts-for-a-faster-workflow-in-sublime-text-3--cms-22185', '2015-10-30 14:12:08', 0),
(314, 2, 'translator addon fif', 'addons.mozilla.org/firefox/downloads/latest/493406/addon-493406-latest.xpi?src=dp-btn-primary', '2015-10-30 14:35:05', 0),
(315, 2, 'vpn', 'chrome.google.com/webstore/detail/proxmate/ifalmiidchkjjmkkbkoaibpmoeichmki', '2015-10-30 18:30:54', 0),
(316, 2, 'licinia docs', 'docs.google.com/document/d/1Dw718wxO_EC0XM6uPpmi5AcIQ_n5otpHKM39MU1ojlU/edit#heading=h.2tt64y7dz8or', '2015-11-02 14:19:38', 0),
(317, 2, 'blumen booking', 'blumen-hotel.book-onlinenow.net/', '2015-11-03 18:24:14', 0),
(318, 2, 'drag n drop', 'interactjs.io/', '2015-11-04 00:08:54', 0),
(319, 2, 'www.youtube.com/play', 'www.youtube.com/playlist?list=PLKuQ7K5yAxT40UfbIKtOrdnXdEYfdK3Wq', '2015-11-04 00:12:37', 0),
(320, 2, 'spline js', 'mbostock.github.io/protovis/ex/splines.html', '2015-11-04 16:30:18', 0),
(321, 2, 'js.cytoscape.org/dem', 'js.cytoscape.org/demos/18504640d9a03c178fff/', '2015-11-04 16:34:40', 0),
(322, 2, 'noflojs.org/', 'noflojs.org/', '2015-11-04 16:43:02', 0),
(323, 2, 'app.flowhub.io/#exam', 'app.flowhub.io/#example/6699161', '2015-11-04 16:45:24', 0),
(324, 2, 'noflojs.org/example/', 'noflojs.org/example/', '2015-11-04 16:45:41', 0),
(325, 2, 'prettyloader', 'www.prettyloaded.com/', '2015-11-09 15:13:24', 0),
(326, 2, 'dengun start', 'docs.google.com/document/d/1u8uv2sYo-i4f-pb9y-wCeSeCTy1cMqXAlIHAjxuwEGA/edit?hl=pt-PT&forcehl=1#head', '2015-11-10 13:03:09', 0),
(327, 2, 'android codes', ' cannot import name GEOSException', '2015-11-10 14:39:43', 0),
(328, 2, 'dengun start 2', 'mail.google.com/mail/u/0/#inbox/150f1d7f00740249?projector=1', '2015-11-10 15:29:48', 0),
(329, 2, 'install rvm', 'www.webupd8.org/2014/11/how-to-install-rvm-ruby-version-manager.html', '2015-11-10 15:57:59', 0),
(330, 2, 'pulse audio', 'www.webupd8.org/2013/10/system-wide-pulseaudio-equalizer.html', '2015-11-10 21:19:27', 0),
(331, 2, 'change permissions', 'pedrorocha.net/2011/10/mudar-permiss%C3%B5es-com-chmod-somente-em-arquivos-ou-somente-em-pastas', '2015-11-11 12:56:57', 0),
(332, 2, 'backspace to back pa', 'itsfoss.com/enable-backspace-firefox-ubuntu-linux/', '2015-11-12 11:26:19', 0),
(333, 2, 'sublime comment fix', 'stackoverflow.com/questions/17742781/keyboard-shortcut-to-comment-lines-in-sublime-text-3', '2015-11-12 12:27:35', 0),
(334, 2, 'gyazo for linux', 'github.com/gyazo/Gyazo-for-Linux', '2015-11-13 10:52:17', 0),
(335, 2, 'ue4 take cube', 'wiki.unrealengine.com/Pick_Up_Physics_Object_Tutorial', '2015-11-15 14:22:28', 0),
(336, 2, 'remove packages of t', 'www.commandlinefu.com/commands/view/1858/remove-todays-installed-packages', '2015-11-16 09:36:38', 0),
(337, 2, 'rocketchat.dengun.or', 'rocketchat.dengun.org/home', '2015-11-16 14:04:05', 0),
(338, 2, 'ratio converter', 'size43.com/jqueryVideoTool-4x3.html', '2015-11-19 09:59:41', 0),
(339, 2, 'linux rar files', 'www.cyberciti.biz/faq/open-rar-file-or-extract-rar-files-under-linux-or-unix/', '2015-11-24 11:45:42', 0),
(340, 2, 'www.screenleap.com/', 'www.screenleap.com/', '2015-11-24 23:51:50', 0),
(341, 2, 'sisgarbe.w1.dengun.n', 'sisgarbe.w1.dengun.net/', '2015-11-25 09:13:57', 0),
(342, 2, 'hansoftx.com', 'hansoftx.com', '2015-11-26 12:20:13', 0),
(343, 2, 'custom number input', 'bootsnipp.com/snippets/featured/bootstrap-number-spinner', '2015-11-30 15:45:20', 0),
(348, 2, 'github.com/opentrack', 'github.com/opentrack/opentrack/releases', '2015-12-05 00:50:01', 0),
(345, 2, 'smartdudetricks.blog', 'smartdudetricks.blogspot.in/p/how-to-download-deep-freeze-full.html', '2015-12-02 00:39:11', 0),
(346, 2, 'webmail.dengun.com', 'webmail.dengun.com', '2015-12-02 15:42:03', 0),
(347, 2, 'shortstayflat.pr.den', 'shortstayflat.pr.dengun.net', '2015-12-03 18:24:56', 0),
(349, 2, 'earphones', 'www.radiopopular.pt/catalogo/detalhesproduto.php?idprod=35516', '2015-12-09 10:52:25', 0),
(350, 2, 'exclude filesfrom se', 'stackoverflow.com/questions/13706965/limit-file-search-scope-in-sublime-text-2', '2015-12-10 09:47:17', 0),
(351, 2, 'stackoverflow.com/qu', 'stackoverflow.com/questions/10241744/sublime-text-filter-out-files-with-given-extension', '2015-12-10 10:04:34', 0),
(352, 2, 'youtube api', 'developers.google.com/youtube/iframe_api_reference', '2015-12-10 22:59:37', 0),
(353, 2, 'youtube api', 'developers.google.com/youtube/iframe_api_reference', '2015-12-10 23:17:01', 0),
(354, 2, 'mailtrap.io', 'mailtrap.io', '2015-12-11 14:58:20', 0),
(356, 2, '127.0.0.1:8000/hotel', '127.0.0.1:8000/hotels/search/results/?search=Colina+Village&t=4&q=145&checkin=22%2F03%2F2016&checkou', '2015-12-11 15:12:11', 0),
(357, 2, 'www.hongkiat.com/blo', 'www.hongkiat.com/blog/sublime-text-plugins/', '2015-12-11 18:44:20', 0),
(358, 2, 'HYTEK localhost', 'localhost/hytekwebsite/HYTEK4/index2.php', '2015-12-12 12:14:31', 0),
(359, 2, 'docs.google.com/docu', 'docs.google.com/document/d/1SMfqWeRZnAtYPte19n5xmIUNcZJlk_c9yLS_V93uiLg/edit#heading=h.6o2tju8j3kuz', '2015-12-14 11:10:21', 0),
(360, 2, 'docs.djangoproject.c', 'docs.djangoproject.com/en/1.9/ref/templates/builtins/', '2015-12-15 14:53:41', 0),
(361, 2, 'docs.djangoproject.c', 'docs.djangoproject.com/en/1.9/ref/templates/builtins/', '2015-12-15 14:53:41', 0),
(362, 2, 'ironsummitmedia.gith', 'ironsummitmedia.github.io/startbootstrap-modern-business/', '2015-12-19 00:58:54', 0),
(363, 2, 'startbootstrap.com/t', 'startbootstrap.com/template-categories/all/', '2015-12-19 00:59:41', 0),
(364, 2, 'bes', 'www.novobanco.pt/', '2015-12-24 10:37:18', 0),
(365, 2, 'bioshock fov', 'forums.steampowered.com/forums/showthread.php?t=1142694', '2015-12-27 02:58:02', 0),
(366, 2, 'creategamesfromscrat', 'creategamesfromscratch.blogspot.pt/2014/06/prototype-rail-weapon.html', '2015-12-29 00:40:52', 0),
(367, 2, 'addons.mozilla.org/p', 'addons.mozilla.org/pt-pt/firefox/addon/imtranslator/', '2015-12-31 15:14:28', 0),
(368, 2, 'ue4 errors', 'www.smartftp.com/support/kb/the-program-cant-start-because-api-ms-win-crt-runtime-l1-1-0dll-is-missi', '2016-01-01 15:22:56', 0),
(369, 2, 'github.com/tomlooman', 'github.com/tomlooman/EpicSurvivalGameSeries', '2016-01-01 18:21:45', 0),
(370, 2, 'qta do marco drive', 'drive.google.com/folderview?id=0B2lI5OicspdHYmVYaC1uRTRqamc&usp=sharing_eid&invite=CKvVkK8L&ts=56782', '2016-01-04 09:56:05', 0),
(371, 2, 'gems', 'rubygems.org/', '2016-01-04 17:05:40', 0),
(372, 2, 'www.skidrowreloaded.', 'www.skidrowreloaded.com/alice-madness-returns-skidrow/', '2016-01-05 00:10:54', 0),
(373, 2, 'cssslider.com/pt/boo', 'cssslider.com/pt/bootstrap-slider-10.html', '2016-01-05 15:37:02', 0),
(374, 2, 'markdown previewer', 'markdownlivepreview.com/', '2016-01-06 17:04:13', 0),
(375, 2, 'keyboard debug ubunt', 'superuser.com/questions/152738/how-to-debug-a-keyboard-in-linux-like-pressing-a-key-and-seeing-a-cod', '2016-01-07 11:34:23', 0),
(376, 2, 'deepfreeze ubuntu', 'askubuntu.com/questions/637587/how-to-deepfreeze-ubuntu-like-windows-deepfreeze', '2016-01-07 16:01:19', 0),
(377, 2, 'www.hotelquintadomar', 'www.hotelquintadomarco.com/en/', '2016-01-08 16:07:38', 0),
(378, 2, 'slack dengun', 'dengun.slack.com/messages/@slackbot/team/mickael/', '2016-01-08 16:40:38', 0),
(381, 2, 'www.dev.hotelquintad', 'www.dev.hotelquintadomarco.w1.dengun.net/en/#', '2016-01-12 10:04:39', 0),
(380, 2, 'vilajoya photologues', 'www.vilajoya.com/admin/photologue/', '2016-01-11 15:06:33', 0),
(382, 2, 'www.series-ddl.com/g', 'www.series-ddl.com/gangland-undercover-saison-01-vostfr-streaming.html', '2016-01-12 20:52:58', 0),
(383, 2, 'bootstrap classes', 'gist.github.com/geksilla/6543145', '2016-01-19 11:14:08', 0),
(384, 2, 'bootstrap customize', 'getbootstrap.com/customize/', '2016-01-19 11:17:37', 0),
(385, 2, 'bootstrap customize', 'getbootstrap.com/customize/', '2016-01-19 11:17:49', 0),
(386, 2, 'quinta do marco driv', 'docs.google.com/document/d/1AzncgKxP5zWnq1bMmXnTu8-ve3SzUtUEVQVimGVXvi0/edit', '2016-01-19 17:25:06', 0),
(387, 2, 'cms videos', 'drive.google.com/folderview?id=0By0hxJcmCxIVUkwwd1ZEcDhKVlE&usp=sharing', '2016-01-20 11:28:03', 0),
(388, 2, 'dev edition theme fi', 'addons.mozilla.org/firefox/downloads/latest/642786/addon-642786-latest.xpi?src=dp-btn-primary', '2016-01-24 14:06:12', 0),
(389, 2, 'etnik', 'soundcloud.com/etnikhh', '2016-01-24 23:14:01', 0),
(390, 2, 'gyazo', 'files.gyazo.com/setup/Gyazo-3.2.exe', '2016-01-27 02:14:19', 0),
(391, 2, 'convite convite', 'docs.google.com/spreadsheets/d/1iGK6yXQY986oV5DYhqqAyB7UrJbKtTZPhIMarwhhCUU/edit#gid=1471911128', '2016-01-28 18:53:40', 0),
(392, 2, 'minecraft accounts', 'mcleaks.net/get', '2016-01-29 00:24:04', 0),
(394, 2, 'drag n drop 2', 'codepen.io/m-e-conroy/pen/jCdhu', '2016-01-30 12:23:01', 0),
(395, 2, 'multiple ckeditor', 'ckeditor.com/forums/CKEditor-3.x/Multiple-CK-Editors', '2016-01-31 13:50:10', 0),
(397, 2, 'www.pythonanywhere.c', 'www.pythonanywhere.com/user/MickaelMorgado/consoles/', '2016-02-02 13:54:11', 0),
(398, 2, 'shortstay amenities', 'shortstayflat.pr.dengun.net/admin/properties_details/detail/33/', '2016-02-02 18:42:10', 0),
(399, 2, 'python', 'learnpythonthehardway.org/book/', '2016-02-04 16:48:48', 0),
(400, 2, 'backup pc', 'www.howtogeek.com/howto/4241/how-to-create-a-system-image-in-windows-7/', '2016-02-07 21:17:08', 0),
(401, 2, 'dev tool styles', 'stackoverflow.com/questions/27273389/increase-code-font-size-in-firefox-developer-tool', '2016-02-08 15:55:57', 0),
(403, 2, 'new engine', 'aws.amazon.com/lumberyard/', '2016-02-09 15:33:58', 0),
(404, 2, 'pionner', 'touji666.blogspot.pt/2013/10/pioneer-se-cl711-earphone-review.html', '2016-02-12 14:48:51', 0);

-- --------------------------------------------------------

--
-- Table structure for table `notas`
--

CREATE TABLE IF NOT EXISTS `notas` (
  `id_note` int(11) NOT NULL AUTO_INCREMENT,
  `id_session` int(11) DEFAULT NULL,
  `content` text,
  PRIMARY KEY (`id_note`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=60 ;

--
-- Dumping data for table `notas`
--

INSERT INTO `notas` (`id_note`, `id_session`, `content`) VALUES
(17, 2, '<p><strong>EASYBOOKING</strong>:</p><p>workon django1.5;</p><p>cd dengun/easybookings/;</p><p>sudo service docker restart;</p><p>sudo service mysql stop;</p><p>sudo docker-compose start;</p><p>compass watch easybookings/;</p>'),
(38, 13, '<p>bobyddd</p>'),
(46, 2, '<p>embed youtube :</p><ul><li>http://www.vtubetools.com/</li></ul>'),
(50, 4, '<p>Shooter do HYTEK : <a href="http://hytek.url.ph/shoot/">http://hytek.url.ph/shoot/</a></p>'),
(45, 2, '<p>compass create my-new-project -r bootstrap-sass --using bootstrap</p>'),
(57, 2, '<p>#!/bin/bash<br />clear</p><p># VARIABLES</p><p>folder=&quot;~/dengun&quot;</p><p>host=&quot;127.0.0.1:8000&quot;<br />ext_host=&quot;192.168.1.125:8000&quot;</p><p>rvm=&quot;rvm use 2.1.1@bootstrap&quot;<br />rvm2=&quot;rvm use 2.1.1&quot;<br />rvm3=&quot;rvm use 2.1.1@compass012&quot;</p><p>source &#39;/usr/local/bin/virtualenvwrapper.sh&#39;</p><p># END OF VARIABLES</p><p><br /># VIRTUAL ENVS<br />envs(){<br />&nbsp; lsvirtualenv -b<br />}</p><p># PYTHON<br />funcpython(){<br />&nbsp;<br />&nbsp; echo -e &quot;\n	1 - &quot; $host<br />&nbsp; echo -e &quot;	2 - &quot; $ext_host<br />&nbsp; echo -e &quot;	3 -&nbsp; custom ip&quot;<br />&nbsp; echo -e &quot;\nopc:&quot;<br />&nbsp; read vp<br />&nbsp; funcip() {<br />&nbsp;&nbsp;&nbsp; case $vp in<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1 )<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; lehost=$host<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ;;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2 )<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; lehost=$ext_host<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ;;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3 )<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; echo -e &quot;	 ethernet&quot;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; hostname -I | awk &#39;{print $1}&#39;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; # echo `ifconfig eth0 2&gt;/dev/null|awk &#39;/inet addr:/ {print $2}&#39;|sed &#39;s/addr://&#39;`<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; echo -e &quot;\n	 wireless&quot;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; hostname -I | cut -f2 -d&#39; &#39;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; echo -e &quot;\n192.168.1.XXX&quot;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; read cip<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; lcip=&quot;192.168.1.$cip:8000&quot;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; lehost=$lcip<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ;;<br />&nbsp;&nbsp;&nbsp; esac<br />&nbsp; }<br />&nbsp; funcip<br />&nbsp; #clear<br />&nbsp; echo -e &quot;running @ http://&quot;$lehost<br />}</p><p># DOCKER<br />docker(){<br />&nbsp; funccopyrvm<br />&nbsp; echo -e &quot;	e[34msudo service mysql stop&quot;<br />&nbsp; echo -e &quot;	e[34mcd $folder/$project&quot;<br />&nbsp; echo -e &quot;	e[34mdocker-compose starte[0m&quot;<br />&nbsp; echo -e &quot;\n	http://127.0.0.1:8000&quot;<br />&nbsp; echo -e &quot;\n&quot;<br />}</p><p># GOTOFOLDER<br />#funcgtf(){}</p><p># WORKON FOR PROJECT<br />workonProject(){<br />&nbsp; echo &quot;workon &quot;$workon<br />&nbsp; workon django1.5<br />}</p><p># OPEN FIFI<br />funcopenfifi(){<br />&nbsp; echo -e &quot;open fifi(firefox)? [y/n]&quot;<br />&nbsp; read open<br />&nbsp; if [ $open = &quot;y&quot; ]; then<br />&nbsp;&nbsp;&nbsp;&nbsp; echo &quot;opening fifi&quot;<br />&nbsp;&nbsp;&nbsp;&nbsp; firefox http://$lehost<br />&nbsp;&nbsp;&nbsp;&nbsp; true<br />&nbsp; else<br />&nbsp;&nbsp;&nbsp;&nbsp; false<br />&nbsp; fi<br />}</p><p># SHOW FOR COPY RVM<br />funccopyrvm(){<br />&nbsp; echo -e &quot;\n	e[31mcd $folder/$project/$project&quot;<br />&nbsp; echo -e &quot;	e[31mclear&quot;<br />&nbsp; echo -e &quot;	e[31m$lervm&quot;<br />&nbsp; echo -e &quot;	e[31mcompass watche[0m\n&quot;<br />}</p><p># GO TO FOLDER<br />funcgtf(){<br />&nbsp; case $gtf in<br />&nbsp;&nbsp;&nbsp; 1)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; project=&quot;jbtours&quot;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; gnome-terminal -x bash -c &quot;cd $folder/$project&quot;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ;;<br />&nbsp;&nbsp;&nbsp; 2)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; project=&quot;etic&quot;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; gnome-terminal -x bash -c &quot;cd $folder/$project&quot;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ;;<br />&nbsp; esac<br />}</p><p># GIT<br />funcgit(){<br />&nbsp; # case $gtf in<br />&nbsp; #&nbsp;&nbsp; jbtours)<br />&nbsp; #&nbsp;&nbsp;&nbsp;&nbsp; project=&quot;jbtours&quot;<br />&nbsp; #&nbsp;&nbsp;&nbsp;&nbsp; ;;<br />&nbsp; #&nbsp;&nbsp; etic)<br />&nbsp; #&nbsp;&nbsp;&nbsp;&nbsp; project=&quot;etic&quot;<br />&nbsp; #&nbsp;&nbsp;&nbsp;&nbsp; ;;&nbsp;&nbsp; &nbsp;<br />&nbsp; #&nbsp;&nbsp; easybookings)<br />&nbsp; #&nbsp;&nbsp;&nbsp;&nbsp; project=&quot;easybookings&quot;<br />&nbsp; #&nbsp;&nbsp;&nbsp;&nbsp; ;;<br />&nbsp; #&nbsp;&nbsp; bybeau)<br />&nbsp; #&nbsp;&nbsp;&nbsp;&nbsp; project=&quot;bybeau&quot;<br />&nbsp; #&nbsp;&nbsp;&nbsp;&nbsp; ;;<br />&nbsp; # esac<br />&nbsp; clear<br />&nbsp; echo -e &quot;project name\n&quot;<br />&nbsp; for each in ${ARRAY[@]}<br />&nbsp; do<br />&nbsp;&nbsp;&nbsp; echo -e &quot; $each&quot;<br />&nbsp; done<br />&nbsp; echo -e &quot;\n	project name:\n&quot;<br />&nbsp; read gtf<br />&nbsp; echo -e &quot;\n	commit message:\n&quot;<br />&nbsp; read cm<br />&nbsp; echo -e &quot;\n	branch to push origin [mickael]:\n&quot;<br />&nbsp; read bp<br />&nbsp; cd &quot;dengun/$gtf&quot;<br />&nbsp; echo -e &quot;Current folder: $folder/$gtf\n&quot;<br />&nbsp; echo -e &quot;e[31m	cd $folder/$gtfe[0m\n&quot;<br />&nbsp; echo -e &quot;	git status\n&quot;<br />&nbsp; echo -e &quot;e[34m	git add .&quot;<br />&nbsp; echo -e &quot;	git commit -a -m &#39;$cm&#39;&quot;<br />&nbsp; echo -e &quot;	git push origin $bp\ne[0m&quot;<br />&nbsp; #git status<br />&nbsp; #echo &quot;want to add . ? [y/n]&quot;<br />&nbsp; #read add<br />&nbsp; # condition(){<br />&nbsp; #&nbsp;&nbsp; if [ $add = &#39;y&#39; ]; then<br />&nbsp; #&nbsp;&nbsp;&nbsp;&nbsp; echo &quot;commit message: &quot;<br />&nbsp; #&nbsp;&nbsp;&nbsp;&nbsp; read commitmsg<br />&nbsp; #&nbsp;&nbsp;&nbsp;&nbsp; git add .<br />&nbsp; #&nbsp;&nbsp;&nbsp;&nbsp; echo &quot;executing: git add .&quot;<br />&nbsp; #&nbsp;&nbsp;&nbsp;&nbsp; echo executing: git commit -m &quot;&#39;&quot;$commitmsg&quot;&#39;&quot;<br />&nbsp; #&nbsp;&nbsp;&nbsp;&nbsp; git commit -m &quot;&#39;&quot;$commitmsg&quot;&#39;&quot;<br />&nbsp; #&nbsp;&nbsp;&nbsp;&nbsp; echo &quot;want to push ? [y/n]&quot;<br />&nbsp; #&nbsp;&nbsp;&nbsp;&nbsp; read push<br />&nbsp; #&nbsp;&nbsp;&nbsp;&nbsp; if [ $push = &#39;y&#39; ]; then<br />&nbsp; #&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; echo -e &quot;where ? (example: origin [mickael])&quot;<br />&nbsp; #&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; read pushWhere<br />&nbsp; #&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; git push origin $pushWhere<br />&nbsp; #&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; echo &quot;git push origin $pushWhere&quot;<br />&nbsp; #&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; echo &quot;Check that out: \n http://gitlab.dengun.org/project/$project/network/master \n http://gitlab.dengun.org/project/$project/activity&quot;<br />&nbsp; #&nbsp;&nbsp;&nbsp;&nbsp; fi<br />&nbsp; #&nbsp;&nbsp; else<br />&nbsp; #&nbsp;&nbsp;&nbsp;&nbsp; clear<br />&nbsp; #&nbsp;&nbsp;&nbsp;&nbsp; echo -e &quot;Current folder: $folder/$project\n&quot;<br />&nbsp; #&nbsp;&nbsp;&nbsp;&nbsp; git status<br />&nbsp; #&nbsp;&nbsp;&nbsp;&nbsp; echo &quot;copy/paste this: cd $folder/$project&quot;<br />&nbsp; #&nbsp;&nbsp; fi<br />&nbsp; # }<br />&nbsp; # condition</p><p>}</p><p># RUNSERVER<br />runserver(){<br />&nbsp; # cd &quot;dengun/easybookings/&quot;<br />&nbsp; # docker-compose stop<br />&nbsp; # cd<br />&nbsp; # sudo service mysql start<br />&nbsp; # cd &quot;$folder/$project&quot;<br />&nbsp; # python manage.py runserver $lehost</p><p>&nbsp; echo -e &quot;	e[34mcd $folder/easybookings/&quot;<br />&nbsp; echo -e &quot;	e[34mdocker-compose stop&quot;<br />&nbsp; echo -e &quot;	e[34msudo service mysql start&quot;<br />&nbsp; echo -e &quot;	e[34mworkon $workon&quot;<br />&nbsp; echo -e &quot;	e[34mcd $folder/$project&quot;<br />&nbsp; echo -e &quot;	e[34mpython manage.py runserver $lehoste[0m&quot;</p><p>&nbsp; echo -e &quot;\n&quot;<br />}</p><p>clear<br />echo -e &quot;Environements available:\n&quot;<br />envs<br />echo -e &quot;\n\nCurrent projects\n&quot;</p><p><br />#--------------------------------------------------------------<br />i=0<br />ARRAY=(</p><p>&nbsp; jbtours<br />&nbsp; etic<br />&nbsp; easybookings<br />&nbsp; fegan<br />&nbsp; valedoloboalgarve<br />&nbsp; bybeau<br />&nbsp; malhadinha<br />&nbsp; vilajoya<br />&nbsp; montedaquinta</p><p>)<br />#--------------------------------------------------------------<br />for each in ${ARRAY[@]}<br />do<br />&nbsp; i=$((i+1))<br />&nbsp; echo -e &quot;	$i - $each&quot;<br />done</p><p>echo -e &quot;\n\nOther stuffs\n&quot;<br />echo -e &quot;	a - go to folder&quot;<br />echo -e &quot;	b - open $folder folder&quot;<br />echo -e &quot;	c - open pictures folder&quot;<br />echo -e &quot;	d - open downloads folder&quot;<br />echo -e &quot;	e - git&quot;</p><p>echo -e &quot;\n\ne[31mDont forget WORKON enve[0m&quot;<br />echo -e &quot;\nopc:&quot;</p><p>read name<br />echo $name<br />case $name in<br />&nbsp;&nbsp;&nbsp; 1 )<br />&nbsp;&nbsp;&nbsp; clear<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; project=&quot;jbtours&quot;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; lervm=$rvm<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; workon=&quot;django&quot;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; funcpython<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; funccopyrvm<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; runserver<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ;;<br />&nbsp;&nbsp;&nbsp; 2 )<br />&nbsp;&nbsp;&nbsp; clear<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; project=&quot;etic&quot;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; lervm=$rvm<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; workon=&quot;django&quot;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; funcpython<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; funccopyrvm<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; runserver<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ;;<br />&nbsp;&nbsp;&nbsp; 3 )<br />&nbsp;&nbsp;&nbsp; clear<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; project=&quot;easybookings&quot;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; lervm=$rvm2<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; docker<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ;;<br />&nbsp;&nbsp;&nbsp; 4 )<br />&nbsp;&nbsp;&nbsp; clear<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; project=&quot;fegan&quot;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; lervm=$rvm3<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; workon=&quot;django1.5&quot;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; funcpython<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; funccopyrvm<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; runserver<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ;;<br />&nbsp;&nbsp;&nbsp; 5 )<br />&nbsp;&nbsp;&nbsp; clear<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; project=&quot;valedoloboalgarve&quot;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; lervm=$rvm<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; workon=&quot;django1.8&quot;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; funcpython<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; funccopyrvm<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; runserver<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ;;<br />&nbsp;&nbsp;&nbsp; 6 )<br />&nbsp;&nbsp;&nbsp; clear<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; project=&quot;bybeau&quot;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; lervm=$rvm<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; workon=&quot;django&quot;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; funcpython<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; funccopyrvm<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; runserver<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ;;<br />&nbsp;&nbsp;&nbsp; 7 )<br />&nbsp;&nbsp;&nbsp; clear<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; project=&quot;malhadinha&quot;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; funcpython<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; runserver<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ;;<br />&nbsp;&nbsp;&nbsp; 8 )<br />&nbsp;&nbsp;&nbsp; clear<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; project=&quot;vilajoya&quot;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; workon=&quot;django1.4&quot;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; funcpython<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; runserver<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ;;<br />&nbsp;&nbsp;&nbsp; 9 )<br />&nbsp;&nbsp;&nbsp; clear<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; project=&quot;montedaquinta&quot;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; workon=&quot;django1.5&quot;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; funcpython<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; runserver<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ;;<br />&nbsp;&nbsp;&nbsp; a )<br />&nbsp;&nbsp;&nbsp; clear<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; echo -e &quot;Go to folder\n&quot;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; echo -e &quot;	1 - jbtours&quot;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; echo -e &quot;	2 - etic&quot;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; echo -e &quot;	3 - easybookings&quot;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; echo -e &quot;\n	opc:\n&quot;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; read gtf<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; funcgtf<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ;;<br />&nbsp;&nbsp;&nbsp; b )<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; nautilus dengun<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ;;<br />&nbsp;&nbsp;&nbsp; c )<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; nautilus Pictures<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ;;<br />&nbsp;&nbsp;&nbsp; d )<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; nautilus Downloads<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ;;<br />&nbsp;&nbsp;&nbsp; e )<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; funcgit<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ;;<br />&nbsp;&nbsp;&nbsp; w)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; envs<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; read workon<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; echo -e &quot;\n choose one: &quot;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; workonProject &quot;$workon&quot;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ;;<br />esac</p>'),
(52, 4, '<p>JUGA-KFL7-QQGL-5CC7</p><div style="display:none;" id="__hggasdgjhsagd_once">&nbsp;</div>'),
(54, 2, '<p>pdfs:</p><ul><li>bybeau: file:///home/hytek/Pictures/bybeau/ByBeau-Web-Preview-v3.pdf</li></ul>'),
(58, 0, ''),
(59, 17, '<p>take out the trash</p>'),
(56, 1, '<p>next update:</p><ul><li>when youtube play open all link in target blank</li></ul>');

-- --------------------------------------------------------

--
-- Table structure for table `playlists`
--

CREATE TABLE IF NOT EXISTS `playlists` (
  `id_playlist` int(11) NOT NULL AUTO_INCREMENT,
  `ID_session` int(11) DEFAULT NULL,
  `youtubeplaylistlink` varchar(100) COLLATE utf8_swedish_ci DEFAULT '//www.youtube.com/embed/7-7knsP2n5w?list=PLFgquLnL59alCl_2TQvOiD5Vgm1hCaGSI',
  `spotifyplaylistlink` varchar(100) COLLATE utf8_swedish_ci DEFAULT 'https://embed.spotify.com/?uri=spotify:track:6c1hFCCh7JtC84gKIYzPb7',
  `spotifyplaylistlinkradio` varchar(100) COLLATE utf8_swedish_ci DEFAULT 'https://embed.spotify.com/?uri=spotify:track:6c1hFCCh7JtC84gKIYzPb7',
  UNIQUE KEY `id_playlist_2` (`id_playlist`),
  KEY `id_playlist` (`id_playlist`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `playlists`
--

INSERT INTO `playlists` (`id_playlist`, `ID_session`, `youtubeplaylistlink`, `spotifyplaylistlink`, `spotifyplaylistlinkradio`) VALUES
(1, 1, 'https://www.youtube.com/embed/videoseries?list=PLFgquLnL59alCl_2TQvOiD5Vgm1hCaGSI', 'https://embed.spotify.com/?uri=spotify:track:6c1hFCCh7JtC84gKIYzPb7', 'https://embed.spotify.com/?uri=spotify:track:6c1hFCCh7JtC84gKIYzPb7'),
(2, 2, 'PLOj6XJW_fcjxs6OHAKoYSKN8zGECJtu9_', 'https://play.spotify.com/collection/songs', 'https://embed.spotify.com/?uri=spotify:track:6c1hFCCh7JtC84gKIYzPb7'),
(3, 3, '//www.youtube.com/embed/7-7knsP2n5w?list=PLFgquLnL59alCl_2TQvOiD5Vgm1hCaGSI', 'https://embed.spotify.com/?uri=spotify:track:6c1hFCCh7JtC84gKIYzPb7', 'https://embed.spotify.com/?uri=spotify:track:6c1hFCCh7JtC84gKIYzPb7'),
(4, 4, '//www.youtube.com/embed/videoseries?list=PLi7nKa6JtPlk6vN4iJR38eOB_ySv02UwZ', 'https://play.spotify.com/collection/songs', 'https://embed.spotify.com/?uri=spotify:track:6c1hFCCh7JtC84gKIYzPb7'),
(5, 5, '//www.youtube.com/embed/7-7knsP2n5w?list=PLFgquLnL59alCl_2TQvOiD5Vgm1hCaGSI', 'https://embed.spotify.com/?uri=spotify:track:6c1hFCCh7JtC84gKIYzPb7', 'https://embed.spotify.com/?uri=spotify:track:6c1hFCCh7JtC84gKIYzPb7'),
(6, 6, '//www.youtube.com/embed/7-7knsP2n5w?list=PLFgquLnL59alCl_2TQvOiD5Vgm1hCaGSI', 'https://embed.spotify.com/?uri=spotify:track:6c1hFCCh7JtC84gKIYzPb7', 'https://embed.spotify.com/?uri=spotify:track:6c1hFCCh7JtC84gKIYzPb7'),
(7, 7, '//www.youtube.com/embed/7-7knsP2n5w?list=PLFgquLnL59alCl_2TQvOiD5Vgm1hCaGSI', 'https://embed.spotify.com/?uri=spotify:track:6c1hFCCh7JtC84gKIYzPb7', 'https://embed.spotify.com/?uri=spotify:track:6c1hFCCh7JtC84gKIYzPb7'),
(8, 8, '//www.youtube.com/embed/7-7knsP2n5w?list=PLFgquLnL59alCl_2TQvOiD5Vgm1hCaGSI', 'https://embed.spotify.com/?uri=spotify:track:6c1hFCCh7JtC84gKIYzPb7', 'https://embed.spotify.com/?uri=spotify:track:6c1hFCCh7JtC84gKIYzPb7'),
(9, 13, '//www.youtube.com/embed/7-7knsP2n5w?list=PLFgquLnL59alCl_2TQvOiD5Vgm1hCaGSI', 'https://embed.spotify.com/?uri=spotify:track:6c1hFCCh7JtC84gKIYzPb7', 'https://embed.spotify.com/?uri=spotify:track:6c1hFCCh7JtC84gKIYzPb7'),
(12, 15, '//www.youtube.com/embed/7-7knsP2n5w?list=PLFgquLnL59alCl_2TQvOiD5Vgm1hCaGSI', 'https://embed.spotify.com/?uri=spotify:track:6c1hFCCh7JtC84gKIYzPb7', 'https://embed.spotify.com/?uri=spotify:track:6c1hFCCh7JtC84gKIYzPb7'),
(11, 14, '//www.youtube.com/embed/7-7knsP2n5w?list=PLFgquLnL59alCl_2TQvOiD5Vgm1hCaGSI', 'https://embed.spotify.com/?uri=spotify:track:6c1hFCCh7JtC84gKIYzPb7', 'https://embed.spotify.com/?uri=spotify:track:6c1hFCCh7JtC84gKIYzPb7'),
(13, 17, 'https://www.youtube.com/playlist?list=PL8WvZFiJpAr1jrn05h6O1c97-wCT984D6', 'https://embed.spotify.com/?uri=spotify:track:6c1hFCCh7JtC84gKIYzPb7', 'https://embed.spotify.com/?uri=spotify:track:6c1hFCCh7JtC84gKIYzPb7');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `id_settings` int(11) NOT NULL DEFAULT '0',
  `tabs_order` varchar(20) NOT NULL DEFAULT 'data DESC',
  `n_asc_desc` varchar(4) NOT NULL DEFAULT 'DESC',
  `bg` varchar(500) NOT NULL DEFAULT 'http://bgfons.com/upload/ornaments_texture1141.jpg',
  `hbg` varchar(150) NOT NULL,
  `tgb` int(11) DEFAULT '0',
  `columns` int(1) NOT NULL DEFAULT '3',
  `id_theme` int(11) NOT NULL DEFAULT '1',
  UNIQUE KEY `id_settings_2` (`id_settings`),
  KEY `id_settings` (`id_settings`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id_settings`, `tabs_order`, `n_asc_desc`, `bg`, `hbg`, `tgb`, `columns`, `id_theme`) VALUES
(2, 'data DESC', 'DESC', 'https://newevolutiondesigns.com/images/freebies/hd-wallpaper-40.jpg', '', 0, 4, 1),
(6, 'data DESC', 'DESC', 'bg.png', 'topbar.png', 0, 3, 1),
(1, 'data DESC', 'DESC', 'bg.png', 'topbar.png', 0, 3, 1),
(3, 'data DESC', 'DESC', 'bg.png', 'topbar.png', 0, 3, 1),
(4, 'data DESC', 'DESC', '', '', 1, 1, 3),
(5, 'data DESC', 'DESC', 'bg.png', 'topbar.png', 0, 3, 1),
(7, 'data DESC', 'DESC', 'http://www.planwallpaper.com/static/images/2022725-wallpaper_625864.jpg', 'topbar.png', 0, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `shooters`
--

CREATE TABLE IF NOT EXISTS `shooters` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `id_session` int(11) NOT NULL,
  `last_score` int(11) DEFAULT NULL,
  `score` int(10) DEFAULT NULL,
  `gamemode` varchar(50) DEFAULT NULL,
  `timeplayed` varchar(20) DEFAULT NULL,
  `settings` int(11) NOT NULL DEFAULT '1',
  `effects` int(11) NOT NULL DEFAULT '1',
  `music` float NOT NULL DEFAULT '1',
  `ambiance` float NOT NULL DEFAULT '1',
  `weapons` float NOT NULL DEFAULT '1',
  `birds` float NOT NULL DEFAULT '1',
  UNIQUE KEY `ID_2` (`ID`),
  KEY `ID` (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `shooters`
--

INSERT INTO `shooters` (`ID`, `id_session`, `last_score`, `score`, `gamemode`, `timeplayed`, `settings`, `effects`, `music`, `ambiance`, `weapons`, `birds`) VALUES
(1, 1, 2850, 14950, 'only one minute', '', 2, 1, 1, 0.2, 1, 0.6),
(2, 2, 0, 1800, 'only one minute', '', 2, 1, 1, 1, 1, 1),
(11, 14, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 1, 1),
(7, 7, 15900, 15900, 'only one minute', NULL, 0, 1, 1, 1, 1, 1),
(12, 15, 2800, 2800, 'only one minute', NULL, 1, 1, 1, 1, 1, 1),
(13, 17, 2150, 4100, 'only one minute', NULL, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `themes`
--

CREATE TABLE IF NOT EXISTS `themes` (
  `id_theme` int(11) NOT NULL AUTO_INCREMENT,
  `css` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_theme`),
  UNIQUE KEY `id_theme` (`id_theme`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `themes`
--

INSERT INTO `themes` (`id_theme`, `css`) VALUES
(1, '1'),
(2, '2'),
(3, '3'),
(4, '4'),
(5, '5'),
(6, '6');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id_session` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `pass` varchar(900) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_session`),
  UNIQUE KEY `id_session` (`id_session`),
  UNIQUE KEY `id_session_2` (`id_session`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_session`, `name`, `pass`, `mail`) VALUES
(1, 'admin', '6200fc24c488ddb86e659136b067328a8f0edc7a399b23e6262e2409268f9686be76573eac2dd2d30b60c44554ea42b116bd5bede398ec76942a0d169c310a1e', 'admin'),
(2, 'Mickael', '6200fc24c488ddb86e659136b067328a8f0edc7a399b23e6262e2409268f9686be76573eac2dd2d30b60c44554ea42b116bd5bede398ec76942a0d169c310a1e', NULL),
(7, 'Kevin', '5480f5d69e5314e376dd1a504e6e6e5b47ffb26b52783ee65bf1edf158508e46fffaeb5d833f32fd17b013bf8b2a37caae0ead210578dc729100585c4fc7d3bd', 'kevindmorgado@outlook.pt'),
(15, 'Bomany', 'c332c50f47f486d5dab9541eb4448c5ec6ecd1e085d7827c0e770d1c9c729eee8bb8cccea8301a1daf2d6a703675007d86e4bb3e2b03031af3b00b44608f2e32', NULL),
(16, 'Painatalma', '04d6109748fdd5ffda8197f42bdf752df189af1863723ba872566eae97049ad0fd49415f08ceecf35a09ded57bf995ba5775a3f6a07c61e542a911745a716502', NULL),
(17, 'jacobsway', 'ebd56190fb5dc89254563f35213a21ebb8044eab5f5a669285a60dac4991aace449a98179586384e688859fcef28478669d023857008e1ef1de9e3c4e6b2b517', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
