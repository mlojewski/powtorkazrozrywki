-- phpMyAdmin SQL Dump
-- version 4.6.6deb1+deb.cihar.com~xenial.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Czas generowania: 04 Maj 2017, 17:35
-- Wersja serwera: 5.7.18-0ubuntu0.16.04.1
-- Wersja PHP: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `moj_twitter`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `comments`
--

CREATE TABLE `comments` (
  `id` int(10) NOT NULL,
  `userId` int(10) NOT NULL,
  `tweetId` int(10) NOT NULL,
  `creationDate` datetime NOT NULL,
  `text` varchar(60) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `comments`
--

INSERT INTO `comments` (`id`, `userId`, `tweetId`, `creationDate`, `text`) VALUES
(6, 15, 26, '2017-02-24 01:04:51', 'fdsfs'),
(7, 15, 26, '2017-02-24 01:05:17', ''),
(8, 15, 62, '2017-02-24 01:06:20', 'gfdgd'),
(9, 15, 26, '2017-02-24 01:06:45', ''),
(10, 17, 18, '2017-03-01 00:02:06', 'fdg'),
(11, 17, 19, '2017-03-01 00:32:28', ''),
(12, 17, 19, '2017-03-01 00:32:56', ''),
(13, 17, 62, '2017-03-01 00:46:41', 'fdsfd'),
(14, 17, 19, '2017-03-01 00:47:45', ''),
(15, 17, 31, '2017-04-17 18:05:58', ''),
(21, 15, 63, '2017-04-24 16:50:13', ''),
(22, 15, 64, '2017-04-24 16:52:45', ''),
(24, 15, 26, '2017-04-24 17:25:16', 'rtr'),
(25, 15, 26, '2017-04-24 17:38:34', 'jkjkj'),
(26, 15, 69, '2017-04-24 17:42:50', 'fgfdg'),
(27, 15, 69, '2017-04-24 17:44:27', 'fdf'),
(28, 15, 69, '2017-04-24 17:44:33', 'fdf'),
(29, 15, 69, '2017-04-24 17:49:15', 'fdfdfdf'),
(30, 15, 71, '2017-04-24 17:54:35', 'dasdqwdq'),
(31, 17, 67, '2017-04-24 17:58:03', 'hkjhgjk'),
(32, 17, 72, '2017-04-24 18:52:37', 'affs'),
(33, 17, 72, '2017-04-24 18:55:22', 'kjjhj'),
(34, 17, 70, '2017-04-24 22:49:49', 'kokpkook'),
(35, 21, 72, '2017-04-29 12:31:17', 'fwefwef'),
(36, 22, 70, '2017-05-03 22:29:41', 'komentuje tweeta');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `messages`
--

CREATE TABLE `messages` (
  `message_id` int(10) NOT NULL,
  `sender_id` int(10) NOT NULL,
  `recipient_id` int(10) NOT NULL,
  `text` varchar(500) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `date` datetime NOT NULL,
  `readconfirm` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `messages`
--

INSERT INTO `messages` (`message_id`, `sender_id`, `recipient_id`, `text`, `date`, `readconfirm`) VALUES
(1, 21, 15, 'dd', '2017-05-03 11:59:15', 0),
(2, 21, 18, 'adad', '2017-05-03 11:59:57', 0),
(3, 21, 18, 'ada', '2017-05-03 12:00:30', 0),
(4, 21, 15, 'sss', '2017-05-03 12:05:34', 0),
(5, 21, 17, 'sss', '2017-05-03 12:09:59', 0),
(6, 21, 22, 'aa', '2017-05-03 12:10:32', 1),
(7, 21, 15, 'aaa', '2017-05-03 12:12:06', 0),
(8, 22, 21, 'hdhdhhd', '2017-05-03 14:10:34', 0),
(9, 22, 21, 'wuwuwuwu', '2017-05-03 14:10:40', 1),
(10, 22, 17, 'dasafsf', '2017-05-03 18:18:33', 0),
(11, 21, 22, 'fsdfsds', '2017-05-03 22:16:06', 0),
(12, 21, 22, 'prÃ³bna wiadomoÅ›Ä‡', '2017-05-03 22:16:43', 1),
(13, 22, 21, 'prÃ³bna odpowiedÅº', '2017-05-03 22:17:05', 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `tweet`
--

CREATE TABLE `tweet` (
  `id` int(20) NOT NULL,
  `userId` int(20) NOT NULL,
  `text` varchar(160) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `creationDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_roman_ci;

--
-- Zrzut danych tabeli `tweet`
--

INSERT INTO `tweet` (`id`, `userId`, `text`, `creationDate`) VALUES
(15, 15, 'pierszy tweet', '2017-02-22 14:42:35'),
(16, 15, 'pierszy tweet', '2017-02-22 14:45:05'),
(17, 16, 'drugi tÅ‚yt', '2017-02-22 14:45:24'),
(18, 17, 'trzeci tÅ‚yt', '2017-02-22 14:45:37'),
(19, 17, 'czwarty tÅ‚yt', '2017-02-22 14:45:44'),
(20, 15, 'pjonty tÅ‚yt', '2017-02-22 14:45:59'),
(26, 15, 'pjonty tÅ‚yt', '2017-02-22 15:03:55'),
(27, 16, 'lll\r\n', '2017-02-23 00:34:01'),
(30, 17, 'ffaaffaa', '2017-02-23 10:03:50'),
(31, 15, 'hohoho', '2017-02-23 23:03:16'),
(35, 15, 'kk', '2017-04-21 07:56:10'),
(49, 15, 'dd', '2017-04-21 08:12:08'),
(50, 15, 'dd', '2017-04-21 08:13:10'),
(61, 15, 'ss', '2017-04-21 08:33:35'),
(62, 15, 'dd', '2017-04-21 08:54:45'),
(63, 15, 'fffaaa', '2017-04-24 16:40:27'),
(64, 15, 'fffaaa', '2017-04-24 16:48:54'),
(65, 15, 'jpopj', '2017-04-24 17:31:04'),
(66, 15, 'jpopj', '2017-04-24 17:31:14'),
(67, 15, 'jpopj', '2017-04-24 17:31:20'),
(68, 15, 'jpopj', '2017-04-24 17:33:17'),
(69, 15, 'jpopj', '2017-04-24 17:33:45'),
(70, 15, 'fsdfsdf', '2017-04-24 17:51:38'),
(71, 15, 'fwefw', '2017-04-24 17:52:41'),
(72, 17, '', '2017-04-24 18:00:57'),
(73, 21, 'hahoaohee', '2017-04-29 12:31:07'),
(74, 22, 'wysylam tweeta', '2017-05-03 22:29:26');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(250) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `username` varchar(250) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `hashedPassword` varchar(100) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `hashedPassword`) VALUES
(15, 'as@a.pl', 'ss', 'fafafafa'),
(16, 'fff@o.pl', 'kfkf', '$2y$10$bg8gxTosz7xBCZZwOs7Kc.lEyaKeB2/SfGKG4kVrl94hI89gN4Ixa'),
(17, 'a@a.pl', 'hh', '$2y$10$56n8bg1bcZiZHA93NyCbgOM4UyJ72VOSlzdWF3JuHXZDf.znwg1Xi'),
(18, 'haha@ha.pl', 'Jureczek', 'hohohoho'),
(20, 'baba@ba.pl', 'Basienka', '$2y$10$Slzk7wXyDYRY0g7Qtb9WdOYYdvKsx4cx.4HAJORcmr5dbuUlpscFu'),
(21, 'kk@kk.pl', 'kokoszka', '$2y$10$SRlhOHfwcOirgnpr3MGqS.zs4e6dJQUMFsn2J1uu3oLjnZAwSbg4G'),
(22, 'pa@pa.pl', 'panienka', '$2y$10$UY/uLsMrqK07F2gOLAn.VOIFkLwCyoCKajmKl5137h8F.TSerWuX6');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_ibfk_1` (`tweetId`),
  ADD KEY `comments_ibfk_2` (`userId`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `tweet`
--
ALTER TABLE `tweet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT dla tabeli `messages`
--
ALTER TABLE `messages`
  MODIFY `message_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT dla tabeli `tweet`
--
ALTER TABLE `tweet`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`tweetId`) REFERENCES `tweet` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `tweet`
--
ALTER TABLE `tweet`
  ADD CONSTRAINT `tweet_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
