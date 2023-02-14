-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2023 at 02:42 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prefinal`
--

-- --------------------------------------------------------

--
-- Table structure for table `castlists`
--

CREATE TABLE `castlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cast_id` bigint(20) UNSIGNED NOT NULL,
  `movie_id` bigint(20) UNSIGNED NOT NULL,
  `Role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `castlists`
--

INSERT INTO `castlists` (`id`, `cast_id`, `movie_id`, `Role`) VALUES
(1, 1, 1, 'Jake Sully'),
(2, 2, 1, 'Neytiri'),
(3, 3, 1, 'Kiri Sully'),
(4, 4, 1, 'Ronal'),
(5, 5, 1, 'Colonel Quarithc'),
(6, 6, 2, 'Puss in Boots (voice)'),
(7, 7, 2, 'Kitty Softpaws (voice)'),
(8, 8, 2, 'Perrito (voice)'),
(9, 9, 2, 'Wolf (voice)'),
(10, 10, 2, 'Goldiliocks (voice)'),
(11, 11, 3, 'Da Guk'),
(20, 12, 3, 'Park Ji Woo'),
(21, 13, 3, 'Hong Gyu Ok'),
(23, 15, 3, 'Oh Mi Jeong\r\n'),
(24, 16, 3, 'Choi Tae Cheon');

-- --------------------------------------------------------

--
-- Table structure for table `casts`
--

CREATE TABLE `casts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Gender` enum('Female','Male','Other') COLLATE utf8mb4_unicode_ci NOT NULL,
  `DOB` date DEFAULT NULL,
  `Picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `casts`
--

INSERT INTO `casts` (`id`, `Name`, `Gender`, `DOB`, `Picture`) VALUES
(1, 'Sam Worthington', 'Male', '1976-08-02', '1676308646.jpg'),
(2, 'Zoe Saldaña', 'Female', '1978-06-16', '1676308792.jpg'),
(3, 'Sigourney Weaver', 'Female', '1949-10-08', '1676308991.jpg'),
(4, 'Kate Winslet', 'Female', '1975-05-10', '1676309031.jpg'),
(5, 'Stephen Lang', 'Male', '1952-07-11', '1676309092.jpg'),
(6, 'Antonio Banderas', 'Male', '1960-08-10', '1676309154.jpg'),
(7, 'Salma Hayek', 'Female', '1966-09-02', '1676309197.jpg'),
(8, 'Harvey Guillén', 'Male', '1990-03-05', '1676309250.jpg'),
(9, 'Wagner Moura', 'Male', '1976-07-27', '1676309302.jpg'),
(10, 'Florence Pugh', 'Male', '1996-01-03', '1676309392.jpg'),
(11, 'Ma Dong Seok', 'Male', '1976-03-01', '1676309765.jpg'),
(12, 'Jung Kyung Ho', 'Male', '1983-08-31', '1676309779.jpg'),
(13, 'Oh Yeon Seo', 'Male', '1987-06-22', '1676309796.jpg'),
(15, 'Oh Na Ra', 'Male', '1974-10-26', '1676309844.jpg'),
(16, 'Choi Byung Mo', 'Male', '1972-01-14', '1676309858.jpg'),
(17, 'David Harbour', 'Male', '1975-04-10', ''),
(18, 'John Leguizamo', 'Male', '1960-07-22', ''),
(19, 'Alex Hassell', 'Male', '1980-09-17', ''),
(20, 'Beverly D.Angelo', 'Female', '1951-11-15', ''),
(21, 'Alexis Louder', 'Female', '1996-08-24', ''),
(22, 'Hailee Steinfeld', 'Female', '1996-12-11', ''),
(23, 'Oscar Isaac', 'Male', '1979-03-09', ''),
(24, 'Shameik Moore', 'Male', '1995-05-04', ''),
(25, 'Brian Tyree Henry', 'Male', '1982-03-31', ''),
(26, 'Jake Johnson', 'Male', '1978-05-28', '');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `interstedmovies`
--

CREATE TABLE `interstedmovies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `UserID` bigint(20) UNSIGNED NOT NULL,
  `MovieID` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2023_02_12_150103_create_users_table', 1),
(5, '2023_02_12_150114_create_movies_table', 1),
(6, '2023_02_12_150131_create_interstedmovies_table', 1),
(7, '2023_02_12_150201_create_showtimes_table', 1),
(8, '2023_02_12_150213_create_casts_table', 1),
(9, '2023_02_12_150224_create_castlists_table', 1),
(10, '2023_02_12_150249_create_offers_table', 1),
(11, '2023_02_12_150258_create_shows_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `MovieName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Language` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Genre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Status` enum('Screening','Not Screening','Stop Screening') COLLATE utf8mb4_unicode_ci NOT NULL,
  `ReleaseDate` date NOT NULL,
  `Duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ImgURL` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Trailer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `MovieName`, `Language`, `Genre`, `Status`, `ReleaseDate`, `Duration`, `ImgURL`, `Trailer`, `Description`) VALUES
(1, 'Avatar: The way of water', 'English', 'Science fiction, Action', 'Screening', '2022-12-15', '03:15:00', '1676310536.jpg', 'https://www.youtube.com/embed/d9MyW72ELq0', 'Avatar: The Way of Water begins to tell the story of the Sully family (Jake, Neytiri, and their kids), the trouble that follows them, the lengths they go to keep each other safe, the battles they fight to stay alive, and the tragedies they endure.'),
(2, 'Puss in Boots', 'English', 'Adventure, Comedy', 'Screening', '2022-12-30', '01:43:00', '1676310618.jpg', 'https://www.youtube.com/embed/RqrXhwS33yc', 'Be one of the first to see Puss in Boots: The Last Wish on the big screen with our special advance screenings on Friday 16 to Sunday 18 December. This summer, everyone’s favourite leche-loving, swashbuckling, fear-defying feline returns. For the first time in more than a decade, DreamWorks Animation presents a new adventure in the Shrek universe as daring outlaw Puss in Boots discovers that his passion for peril and disregard for safety have taken their toll. Puss has burned through eight of his nine lives, though he lost count along the way. Getting those lives back will send Puss in Boots on his grandest quest yet. Don’t miss out - get your tickets today!'),
(3, 'Men of Plastic', 'Korean', 'Comedy, Drama', 'Screening', '2023-01-06', '01:52:00', '1676310676.jpg', 'https://youtube.com/embed/i_nUQvhqe6w', 'A natural-born networker is set out for his kingdom in Apgujeong The most glamorous part of Seoul, Apgujeong thrives with new possibilities. Dae Gook who`s a native of Apgujeong and rules its ground is eager to start his own groundbreaking plastic surgery business. Then he encounters Ji Woo, the most talented surgeon in the area who lost his medical license by misfortune. Without an effort, Dae Gook comes up with an idea how to make this business happen, and he does everything he can to make Ji Woo his partner. Together, Dae Gook and Ji Woo open a whole new primetime of Apgujeong.(Source: HanCinema)'),
(4, 'Violent Night', 'English', 'Comedy, Drama', 'Stop Screening', '2022-12-02', '01:52:00', '1676310738.jpg', 'https://youtube.com/embed/a53e4HHnx_s', 'When a group of mercenaries attack the estate of a wealthy family, Santa Claus must step in to save the day (and Christmas).'),
(5, 'Babylon', 'English', 'Drama, Comedy', 'Stop Screening', '2022-12-23', '03:09:00', '1676310809.jpg', 'https://youtube.com/embed/5muQK7CuFtY', 'A tale of outsized ambition and outrageous excess, it traces the rise and fall of multiple characters during an era of unbridled decadence and depravity in early Hollywood.'),
(6, 'Spider-Man: Across the Spider-Verse', 'English', 'Action, Adventure', 'Not Screening', '2023-06-02', '01:55:00', '1676310890.jpg', 'https://youtube.com/embed/cqGjhVJWtEg', 'Miles Morales catapults across the Multiverse, where he encounters a team of Spider-People charged with protecting its very existence. When the heroes clash on how to handle a new threat, Miles must redefine what it means to be a hero.'),
(7, 'Deleter', 'Tagalog', 'Horror, Thriller', 'Stop Screening', '2022-12-25', '01:33:00', '1676310984.jpg', 'https://youtube.com/embed/qgiSlTPj1Ic', 'An online content moderator who deletes a suicide video made by her co-worker. But the otherwise desensitized woman cannot escape from either her own troubled past or from a mysterious vengeful presence.'),
(8, 'Ant-Man and the Wasp: Quantumania', 'English', 'Adventure, Fantasy', 'Not Screening', '2023-02-17', '02:05:00', '1676311066.jpg', 'https://youtube.com/embed/5WfTEZJnv_8', 'Scott Lang and Hope Van Dyne, along with Hank Pym and Janet Van Dyne, explore the Quantum Realm, where they interact with strange creatures and embark on an adventure that goes beyond the limits of what they thought was possible.'),
(9, 'Fast X', 'English', 'Action, Adventure', 'Not Screening', '2023-05-19', '00:00:00', '1676311295.png', 'https://youtube.com/embed/SAhlmquynBY', 'Dom Toretto and his family are targeted by the vengeful son of drug kingpin Hernan Reyes.'),
(10, 'M3GAN', 'English', 'Horror, Science fiction', 'Screening', '2023-01-27', '01:42:00', '1676311369.jpg', 'https://youtube.com/embed/BRb4U99OU80', 'She`s more than just a toy. She`s part of the family. From the most prolific minds in horror—James Wan, the filmmaker behind the Saw, Insidious and The Conjuring franchises, and Blumhouse, the producer of the Halloween films, The Black Phone and The Invisible Man—comes a fresh new face in terror. M3GAN is a marvel of artificial intelligence, a life-like doll programmed to be a child`s greatest companion and a parent`s greatest ally. Designed by brilliant toy-company roboticist Gemma (Get Out`s Allison Williams), M3GAN can listen and watch and learn as she becomes friend and teacher, playmate and protector, for the child she is bonded to. When Gemma suddenly becomes the caretaker of her orphaned 8-year-old niece, Cady (Violet McGraw, The Haunting of Hill House), Gemma`s unsure and unprepared to be a parent. Under intense pressure at work, Gemma decides to pair her M3GAN prototype with Cady in an attempt to resolve both problems—a decision that will have unimaginable consequences.');

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ImgURL` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `Title`, `Content`, `ImgURL`) VALUES
(1, 'Puss in Boots is here!!', 'Don\'t feel sad if you have to meet Puss in Boots alone. There is a gift for you with only 180.000vnd you can enjoy your movie with the best mood.\r\n\r\nThe combo include: \r\n      One drink\r\n      One movie box\r\n      One popcorn (all flavor)', '1676306591.jpg'),
(2, 'Be apart of the movie Avatar', 'If you want to be an guardian in Avatar don\'t miss this combo. \r\n **Specially you can choose 2 flavor of popcorn in this combo**', '1676307007.jpeg'),
(3, 'Ant-Man and the Wasp: Quantumania', 'Tickets are on sale now for the next big Marvel blockbuster, Ant-Man and The Wasp: Quantumania.', '1676307207.jpg'),
(4, 'Our Weekend Family Flicks are back with a fun-filled movie line-up!', 'For a limited time, watch select family films for just $7* on all sessions before 5pm on Saturday and Sunday.', '1676307584.jpg'),
(6, 'LOVE IS IN THE AIR!', 'There is something for everyone to enjoy on the big screen this Valentine’s Day with an incredible line-up of films that feature Magic Mike’s Last Dance, What’s Love Got to Do With It?, Babylon and the re-release of Titanic!', '1676307807.jpg'),
(7, 'THE 51 MOST ANTICIPATED MOVIES OF 2023', 'The year boasts a wealth of superhero titles. plenty of explosive action, some spine-tingling honor, and even a few throwbacks to franchises of old, so smart marking your calendars.', '1676308178.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shows`
--

CREATE TABLE `shows` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `MovieID` bigint(20) UNSIGNED NOT NULL,
  `ShowtimeID` bigint(20) UNSIGNED NOT NULL,
  `ScreenNo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shows`
--

INSERT INTO `shows` (`id`, `MovieID`, `ShowtimeID`, `ScreenNo`) VALUES
(1, 1, 1, '1'),
(2, 2, 1, '3'),
(3, 10, 1, '4'),
(4, 3, 5, '7');

-- --------------------------------------------------------

--
-- Table structure for table `showtimes`
--

CREATE TABLE `showtimes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `StartTime` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `showtimes`
--

INSERT INTO `showtimes` (`id`, `StartTime`) VALUES
(64, '00:00:00'),
(65, '00:30:00'),
(1, '08:15:00'),
(2, '08:30:00'),
(3, '08:45:00'),
(4, '09:00:00'),
(5, '09:15:00'),
(6, '09:30:00'),
(7, '09:45:00'),
(8, '10:00:00'),
(9, '10:15:00'),
(10, '10:30:00'),
(11, '10:45:00'),
(12, '11:00:00'),
(13, '11:15:0'),
(14, '11:30:00'),
(15, '11:45:00'),
(16, '12:00:00'),
(17, '12:15:00'),
(18, '12:30:00'),
(19, '12:45:00'),
(20, '13:00:00'),
(21, '13:15:00'),
(22, '13:30:00'),
(23, '13:45:00'),
(24, '14:00:00'),
(25, '14:15:00'),
(26, '14:30:00'),
(27, '14:45:00'),
(28, '15:00:00'),
(29, '15:15:00'),
(30, '15:30:00'),
(31, '15:45:00'),
(32, '16:00:00'),
(33, '16:15:00'),
(34, '16:30:00'),
(35, '16:45:00'),
(36, '17:00:00'),
(37, '17:15:00'),
(38, '17:30:00'),
(39, '17:45:00'),
(40, '18:00:00'),
(41, '18:15:00'),
(42, '18:30:00'),
(43, '18:45:00'),
(44, '19:00:00'),
(45, '19:15:00'),
(46, '19:30:00'),
(47, '19:45:00'),
(48, '20:00:00'),
(49, '20:15:00'),
(50, '20:30:00'),
(51, '20:45:00'),
(52, '21:00:00'),
(53, '21:15:00'),
(54, '21:30:00'),
(55, '21:45:00'),
(56, '22:00:00'),
(57, '22:15:00'),
(58, '22:30:00'),
(59, '22:45:00'),
(60, '23:00:00'),
(61, '23:15:00'),
(62, '23:30:00'),
(63, '23:45:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonenum` int(11) DEFAULT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT 1,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `email`, `email_verified_at`, `password`, `phonenum`, `isAdmin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Anh', 'Chau', 'anhvdcts2202016@fpt.edu.vn', NULL, '$2y$10$kKPOTYOXsymDJg8nrCY62.fbBD8Sm2zZn.3S11zUNy5zcFtXgFTlC', 12345696, 1, NULL, '2023-02-13 08:14:51', '2023-02-13 08:14:51'),
(2, 'Phuong', 'Lam', 'phuong@gmail.com', NULL, '$2y$10$7LQtu79RaKOqQwpsXLjLo.CIPlUiCb3JTeuTv3epHfYJqs9Dna7Fq', 123456789, 0, NULL, '2023-02-13 08:17:23', '2023-02-13 08:17:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `castlists`
--
ALTER TABLE `castlists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `castlists_cast_id_foreign` (`cast_id`),
  ADD KEY `castlists_movie_id_foreign` (`movie_id`);

--
-- Indexes for table `casts`
--
ALTER TABLE `casts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `interstedmovies`
--
ALTER TABLE `interstedmovies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `interstedmovies_userid_foreign` (`UserID`),
  ADD KEY `interstedmovies_movieid_foreign` (`MovieID`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `movies_moviename_unique` (`MovieName`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `shows`
--
ALTER TABLE `shows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shows_movieid_foreign` (`MovieID`),
  ADD KEY `shows_showtimeid_foreign` (`ShowtimeID`);

--
-- Indexes for table `showtimes`
--
ALTER TABLE `showtimes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `showtimes_starttime_unique` (`StartTime`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `castlists`
--
ALTER TABLE `castlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `casts`
--
ALTER TABLE `casts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `interstedmovies`
--
ALTER TABLE `interstedmovies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shows`
--
ALTER TABLE `shows`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `showtimes`
--
ALTER TABLE `showtimes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `castlists`
--
ALTER TABLE `castlists`
  ADD CONSTRAINT `castlists_cast_id_foreign` FOREIGN KEY (`cast_id`) REFERENCES `casts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `castlists_movie_id_foreign` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `interstedmovies`
--
ALTER TABLE `interstedmovies`
  ADD CONSTRAINT `interstedmovies_movieid_foreign` FOREIGN KEY (`MovieID`) REFERENCES `movies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `interstedmovies_userid_foreign` FOREIGN KEY (`UserID`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `shows`
--
ALTER TABLE `shows`
  ADD CONSTRAINT `shows_movieid_foreign` FOREIGN KEY (`MovieID`) REFERENCES `movies` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `shows_showtimeid_foreign` FOREIGN KEY (`ShowtimeID`) REFERENCES `showtimes` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
