-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jul 03, 2023 at 07:39 AM
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
-- Database: `ctiweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_soal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jawaban` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `score` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `konseps`
--

CREATE TABLE `konseps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `materi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soal` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `a` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `b` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `d` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kunci` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `konseps`
--

INSERT INTO `konseps` (`id`, `materi`, `soal`, `a`, `b`, `c`, `d`, `kunci`, `keterangan`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Algoritma', '<p>1. Merah (M)<br />\r\n2. Hijau (H)<br />\r\n3. Kuning (K)<br />\r\n4. Biru (B)</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Kiki membuat gelang dari manik-manik berbentuk bulat dengan urutan warna sesuai pada gambar diatas.</p>\r\n\r\n<p>Selama 4 warna manik-manik masih tersedia, urutan warna tidak berubah. Setelah memasukkan manik-manik Biru (B), Kiki akan kembali memasukkan manik-manik Merah (M). Jika salah satu warna manik-manik habis, Kiki akan meneruskan dengan warna yang tersisa. Manik-manik yang bersebelahan tidak boleh berwarna sama. Kiki memiliki:</p>\r\n\r\n<p>&bull; 5 buah manik-manik merah (M)<br />\r\n&bull; 3 buah manik-manik hijau (H)<br />\r\n&bull; 7 buah manik-manik kuning (K)<br />\r\n&bull; 2 buah manik-manik biru (B)</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Tantangan Algoritma</strong></p>\r\n\r\n<p>Berdasarkan ketersediaan manik-manik dan aturan urutan warnanya, berapa &nbsp;banyak manik-manik yang dapat dirangkai oleh Kiki?</p>', '8 manik manik', '17 manik manik', '15 manik manik', '5 manik manik', '15 manik manik', '<p>Jumlah manik-manik yang dapat dirangkai oleh Kiki sebanyak&nbsp;<strong><em>15 Manik-manik</em></strong>, dengan urutan:</p>\n\n<p>M, H, K, B, M, H, K, B, M, H, K, M, K, M, K</p>\n\n<p>dan menyisakan 2 manik-manik Kuning (K)&nbsp;dari total 17 buah manik-manik.</p>', 'uploads/konsep/ojiTrkI3D60TR2Y2KILgbSpfHLfjGH0Fj7BEbTPR.png', '2023-06-09 11:54:45', '2023-06-09 11:54:45'),
(2, 'Optimasi Penjadwalan', '<p>Bobo diminta oleh ayahnya untuk mengisi penuh tiga buah ember dengan air. Di rumah Bobo, hanya terdapat dua kran air yang dapat digunakan untuk mengisi ember-ember tersebut.&nbsp;</p>\r\n\r\n<p>Untuk memenuhi satu ember dengan air, diperlukan waktu lima puluh menit menggunakan satu kran air. Pengisian air pada setiap ember dapat dibagi menjadi beberapa tahap.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Tantangan&nbsp;Optimasi Penjadwalan</p>\r\n\r\n<p>Berapakah waktu tersingkat yang diperlukan oleh Bobo untuk mengisi penuh ketiga ember tersebut?</p>', '1 jam 15 menit', '2 jam 0 menit', '1 jam 40 menit', '2 jam 30 menit', '1 jam 40 menit', '<p>Waktu yang diperlukan Bobo untuk mengisi penuh tiga ember tersebut adalah&nbsp;<em><strong>100 menit = 1 jam 40 menit&nbsp;</strong></em>, dengan penyelesaian:</p>\r\n\r\n<p><strong>Waktu = waktu 2 ember : 2 kran</strong></p>\r\n\r\n<p><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;= 100 m : 2</strong></p>\r\n\r\n<p><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;= 50 menit</strong></p>\r\n\r\n<p><strong>= 50 menit + waktu 1 ember sisa<br />\r\n= 50 menit + 50 menit<br />\r\n= 100 menit<br />\r\n= 1 jam 40 menit</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>kenapa tidak 1 ember : 2 kran?</strong></p>\r\n\r\n<p>karena 1 ember cuma bisa diisi oleh<br />\r\n1 kran diwaktu yang sama</p>', 'uploads/konsep/W8mVkltBpRmDKTfMbW5A05Y0RbR6UkFI8eIniwfn.png', '2023-06-09 12:15:57', '2023-06-09 12:15:57'),
(3, 'Struktur Data', '<p>Xixi mengirimkan sebuah kata rahasia kepada Ben. Xixi memberi tahu petunjuk diatas ini kepada Ben:</p>\r\n\r\n<p>1. Bagian atas dari setiap kartu ditandai dengan persegi panjang berwarna hitam.<br />\r\n2. Pada setiap kartu, terdapat dua buah huruf. Huruf yang berada pada bagian bawah adalah huruf yang harus ditulis sebelum huruf yang berada pada bagian atas.<br />\r\n3. Terdapat satu buah kartu yang hanya terdiri atas satu buah huruf.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Tantangan Struktur Data</strong></p>\r\n\r\n<p>Berdasarkan kartu-kartu dan petunjuk yang dikirim oleh Xixi, kata apakah yang dikirimkan oleh Xixi kepada Ben ?</p>', 'KOMPAS TUA', 'KOMPUTERISASI', 'SITUASI', 'KOMPUTASI', 'KOMPUTASI', '<p><strong>Pembahasan:</strong></p>\n\n<p>1. kata yang terdiri dari 1 huruf pasti huruf pertama<br />\n2. diteruskan sesuai aturan, ditulis dan dibaca dari huruf yang di bawah, berarti urutannya :</p>\n\n<p>KOMPUTASI</p>\n\n<p>Kata yang dikirimkan oleh Xixi kepada Ben adalah</p>', 'uploads/konsep/k8RdeFnO6tWcqSZrrZJ0Y31hbhedeYyJY7V1QSzB.png', '2023-06-09 12:32:04', '2023-06-09 12:32:04'),
(4, 'Representasi Data', '<p>Pekan ini, Zoro sedang bertugas untuk mencatat peminjaman ruang kelas untuk kegiatan ekstra kurikuler yang dilaksanakan setelah jam pelajaran selesai. Terdapat dua belas ruang kelas, yaitu ruang A sampai dengan ruang L. Diatas adalah catatan peminjaman ruang yang dibuat oleh Zoro:</p>\r\n\r\n<p>Ruangan yang ditandai dengan tiga bintang (***) adalah ruangan yang dipinjam.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Tantangan Representasi Data</strong></p>\r\n\r\n<p>Berdasarkan catatan Zoro, berapa banyak tempat ruang yang tidak pernah dipinjam pada hari Senin maupun hari Selasa ?</p>', '4 : B, E, G, H', '5 : B, E, G, H, I', '6 : B, C, D, E, G, H', '7 : B, C, D, E, F, G, H', '4 : B, E, G, H', '<p><strong>Pembahasan:</strong></p>\r\n\r\n<p>1. Ruangan yang tidak ditandai tiga bintang (***):<br />\r\n<strong>&nbsp; &nbsp; &nbsp; Senin &nbsp;: B, D, E, G, H, J, L<br />\r\n&nbsp; &nbsp; &nbsp; Selasa : B, C, E, F, G, H, I</strong></p>\r\n\r\n<p>2. Lalu, ruangan yang sama pada hari Senin &amp; Selasa:<br />\r\n<strong>&nbsp; &nbsp; &nbsp; B, E, G, H</strong></p>\r\n\r\n<p>Ruang yang tidak pernah dipinjam pada hari Senin maupun Selasa sebanyak</p>\r\n\r\n<p>4 ruangan yaitu ruang B, E, G,&nbsp;</p>', 'uploads/konsep/ml28sT9UP5ouF1laP4d3kQpRir4jNUjboc9qDxdP.png', '2023-06-09 12:42:14', '2023-06-09 12:42:14');

-- --------------------------------------------------------

--
-- Table structure for table `materis`
--

CREATE TABLE `materis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `materi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `materis`
--

INSERT INTO `materis` (`id`, `materi`, `isi`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Algoritma', '<p>Menurut kalian, apa arti dari pola?</p>\r\n<p>&nbsp;</p>\r\n<p>Pola dapat digunakan untuk mendefinisikan sebuah bentuk atau struktur yang tetap. Dalam mengerjakan berbagai kegiatan, terkadang kita harus mengikuti pola atau aturan-aturan tertentu. Misalnya pola kehidupan Joni sebagai Anak Sekolah seperti gambar di atas.</p>\r\n<p>&nbsp;</p>\r\n<p>Kehidupan Joni sebagai Anak Sekolah memiliki pola yang sama bahkan berulang setiap harinya, yaitu diawali denga bangun tidur, mandi dan sarapan, lalu berangkat &amp; pulang sekolah, bermain dengan teman setelah pulang, hingga tidur malam, dan kembali lagi diawali hari dengan bangun tidur.</p>', 'uploads/materi/LneJvzo3Ft4hZy9K5tdyBAsvReMio8vmMtPI6qxd.png', '2023-06-09 12:48:07', '2023-06-09 12:48:07'),
(2, 'Optimasi Penjadwalan', '<p>Dalam kehidupan sehari-hari, terkadang kita perlu mengatur jadwal untuk berbagai kegiatan. Misalnya jadwal keseharian Joni sebagai Anak Sekolah seperti gambar diatas.</p>\r\n<p>&nbsp;</p>\r\n<p>Dengan demikian, kita harus bisa memilih kegiatan mana saja yang akan kita lakukan pada hari tertentu dan tentunya, kita perlu juga mengatur jadwal agar kegiatan-kegiatan tersebut tidak bertabrakan waktunya.</p>\r\n<p>&nbsp;</p>\r\n<p>Dalam mengatur rangkaian pekerjaan, terkadang ditemukan ada dua atau lebih pekerjaan yang dapat dilakukan secara paralel. Misalnya, ketika kalian akan mengerjakan PR, ibu meminta bantuan kalian untuk mendidihkan air yang berada pada sebuah panci besar. Kalian dapat menyalakan kompor dan menaruh panci berisi air di atas kompor tersebut.</p>\r\n<p>&nbsp;</p>\r\n<p>Tentunya, kalian tidak perlu menunggu air tersebut sampai mendidih terlebih dahulu baru mulai mengerjakan PR.</p>\r\n<p>&nbsp;</p>\r\n<p>Kalian bisa mengerjakan PR selagi menunggu air tersebut mendidih. Ingat, jangan keasyikan mengerjakan PR sampai air habis karena terlalu lama mendidih.</p>', 'uploads/materi/k3NWPmNH5uCKqnavGP9xCTeuh1IIYTmbFukSzGhU.png', '2023-06-09 12:50:25', '2023-06-09 12:50:25'),
(3, 'Struktur Data', '<p>Contoh: daftar belanja ibu yang dibawa ketika ibu akan ke pasar, &nbsp;&amp; daftar siswa dalam sebuah kelas.</p>\r\n<p>&nbsp;</p>\r\n<p>Dalam kehidupan sehari-hari, kalian pasti pernah mengetahui data yang disusun dalam bentuk sebuah daftar (dalam bidang Informatika, biasanya<br />\r\ndisebut list).</p>\r\n<p>&nbsp;</p>\r\n<p>Daftar tersebut ada yang memiliki keterurutan dan ada yang tidak. Daftar nama siswa dalam sebuah kelas mungkin terurut berdasarkan alfabet. Daftar belanja ibu mungkin tidak memiliki keterurutan tertentu sehingga tidak menjadi masalah kalau ibu membeli tomat terlebih dahulu sebelum membeli wortel, atau ibu membeli keduanya bersamaan, atau ibu membeli wortel terlebih dahulu sebelum membeli tomat.</p>', 'uploads/materi/6z0HxYoIbvzr06CzKkA20V1eVQ2rW881JoxDCpsp.png', '2023-06-09 12:56:00', '2023-06-09 12:56:00'),
(4, 'Representasi Data', '<p>Dalam kehidupan sehari-hari, sering kali kita dihadapkan pada banyak pilihan. Pilihannya bisa terdiri atas dua kemungkinan atau lebih. Jika hanya terdiri atas dua kemungkinan, biasanya jawabannya adalah &ldquo;ya&rdquo; atau &ldquo;tidak&rdquo;.</p>\r\n<p>&nbsp;</p>\r\n<p>Sebagai contoh:<br />\r\n<strong>Apakah hari ini kalian sarapan roti?<br />\r\nApakah kemarin turun hujan?</strong><br />\r\nJawabannya ialah ya atau tidak.</p>\r\n<p>&nbsp;</p>\r\n<p>Pertanyaan tersebut tentu berbeda dengan pertanyaan:<br />\r\n<strong>Apa warna kesukaan kalian?</strong><br />\r\nPertanyaan mengenai warna kesukaan tidak dapat dijawab dengan ya atau tidak. Jika pertanyaannya diubah menjadi Apakah warna kesukaan kalian adalah biru?, maka pertanyaan tersebut dapat dijawab dengan ya atau tidak.</p>', 'uploads/materi/CoVjlSxgQFInmxqg6FiPEsvG7HADIBda3We9o1iM.png', '2023-06-09 12:57:06', '2023-06-09 12:57:06'),
(6, 'Hastyana two threee', '<p>Rihardneswara yoi mamen asdacxzxc asccxzc</p>', 'C:\\Users\\Asus\\AppData\\Local\\Temp\\php426.tmp', '2023-06-16 21:38:31', '2023-06-17 05:47:17');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_06_07_101943_tb_materi', 1),
(6, '2023_06_07_101957_tb_konsep', 1),
(7, '2023_06_11_071352_tb_answer', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Akun Guru', 'guru', 'guru@example.com', NULL, '$2y$10$2FquRShrGHEa0F4G1n3Mr.u28/.AMJ9zMgq1tgtDWeA.6baTd/YP.', 'guru', NULL, '2023-06-11 00:25:04', '2023-06-11 00:25:04'),
(2, 'Akun Siswa', 'siswa', 'siswa@example.com', NULL, '$2y$10$fsW.7oStUxbEax159iA1S.qHgv59r8xXs/JBsKgGq8xugOxpm16sK', 'siswa', NULL, '2023-06-11 00:25:05', '2023-06-11 00:25:05'),
(3, 'Guru 1', 'guru1', 'guru1@email.com', NULL, '$2y$10$LKkaXHdAdwVUtv6gXgdbTOS9NabZjcgSbgsd4Q6QCJ2r9Ib1D9i12', 'guru', NULL, '2023-06-09 11:48:10', '2023-06-09 11:48:10'),
(4, 'Siswa 1', 'siswa1', 'siswa1@email.com', NULL, '$2y$10$2FwIGV9ytqoF33Hi2s6ak.pMMX0sFgEqoFKcbF41GkpakN5j.wkJm', 'siswa', NULL, '2023-06-09 11:48:41', '2023-06-09 11:48:41'),
(5, 'Guru 2', 'guru2', 'guru2@email.com', NULL, '$2y$10$pPMVRXGbfk8Wsb9PSZcj/OD5XiDjp8FHMV.N4IPkBZhzZ1efr94x2', 'guru', NULL, '2023-06-11 04:24:11', '2023-06-11 04:24:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `konseps`
--
ALTER TABLE `konseps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materis`
--
ALTER TABLE `materis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `konseps`
--
ALTER TABLE `konseps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `materis`
--
ALTER TABLE `materis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
