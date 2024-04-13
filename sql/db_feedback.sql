-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Apr 2024 pada 15.25
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_feedback`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_feedback`
--

CREATE TABLE `tb_feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `feedback` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_feedback`
--

INSERT INTO `tb_feedback` (`id`, `name`, `email`, `feedback`, `date`) VALUES
(1, 'John Doe', 'john.doe@example.com', 'I just wanted to say how much I appreciate the content you\'re creating. Your videos are incredibly informative and well-presented. I\'ve learned so much from watching your tutorials and reviews. Keep up the fantastic work!', '2024-04-06 19:46:22'),
(2, 'Jane Smith', 'jane.smith@example.com', 'I wanted to take a moment to express my gratitude for the excellent content you consistently produce. Your videos are not only enjoyable to watch but also highly educational. Your dedication to providing valuable insights and tips is truly commendable. Thank you for enriching the YouTube community with your expertise.', '2024-04-06 19:46:22'),
(3, 'Michael Johnson', 'michael.johnson@example.com', 'I just wanted to drop you a quick note to express my gratitude for the amazing content you consistently produce. Your videos are not only entertaining but also incredibly insightful. I find myself eagerly awaiting each new upload, knowing that I&#039;ll learn something valuable. Thank you for sharing your expertise with the world!', '2024-04-06 20:39:55'),
(4, 'Emily Davis', 'emily.davis@example.com', 'I hope this message finds you well. I wanted to take a moment to let you know how much I appreciate the effort you put into your YouTube channel. Your dedication to delivering high-quality content shines through in every video. Your insights and advice have been invaluable to me, and I&#039;m grateful for the impact you&#039;ve had on my learning journey. Keep up the fantastic work!', '2024-04-06 20:40:36');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_feedback`
--
ALTER TABLE `tb_feedback`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_feedback`
--
ALTER TABLE `tb_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
