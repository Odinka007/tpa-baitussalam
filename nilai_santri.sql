-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2025 at 04:38 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nilai_santri`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `datasantris`
--

CREATE TABLE `datasantris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_santri` varchar(255) NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `nama_orang_tua` varchar(255) NOT NULL,
  `kelas_id` bigint(20) UNSIGNED NOT NULL,
  `alamat` text DEFAULT NULL,
  `bakat_prestasi` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `datasantris`
--

INSERT INTO `datasantris` (`id`, `nama_santri`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `nama_orang_tua`, `kelas_id`, `alamat`, `bakat_prestasi`, `created_at`, `updated_at`) VALUES
(5, 'Dewi 5', 'Laki-Laki', 'Kota E', '2015-03-29', 'Samsudinnn', 3, 'Jl. Contoh No. 46', 'Mengaji Cepat', '2025-05-05 10:07:14', '2025-05-07 03:46:55'),
(6, 'Omar 6', 'Laki-Laki', 'Kota X', '2015-02-02', 'Darma', 3, 'Jl. Contoh No. 46', 'Mengaji Cepat', '2025-05-05 10:07:15', '2025-05-05 10:07:15'),
(7, 'Omar 7', 'Laki-Laki', 'Kota N', '2015-08-22', 'Rina', 2, 'Jl. Contoh No. 24', NULL, '2025-05-05 10:07:15', '2025-05-05 10:07:15'),
(8, 'Iqbal 8', 'Laki-Laki', 'Kota K', '2016-11-08', 'Samsudin', 4, 'Jl. Contoh No. 43', NULL, '2025-05-05 10:07:15', '2025-05-05 10:07:15'),
(9, 'Tika 9', 'Perempuan', 'Kota G', '2019-11-10', 'Surya', 2, 'Jl. Contoh No. 26', NULL, '2025-05-05 10:07:15', '2025-05-05 10:07:15'),
(10, 'Vina 10', 'Perempuan', 'Kota D', '2019-02-09', 'Samsudin', 1, 'Jl. Contoh No. 67', 'Mengaji Cepat', '2025-05-05 10:07:15', '2025-05-05 10:43:37'),
(15, 'Kiki 1', 'Perempuan', 'Kota T', '2016-08-29', 'Hendrik', 3, 'Jl. Contoh No. 97', 'Mengaji Cepat', '2025-05-07 03:27:46', '2025-05-07 03:27:46'),
(16, 'Tika 2', 'Perempuan', 'Kota O', '2015-05-19', 'Hendrik', 3, 'Jl. Contoh No. 16', 'Mengaji Cepat', '2025-05-07 03:27:46', '2025-05-07 03:27:46'),
(17, 'Gina 3', 'Laki-Laki', 'Kota U', '2014-05-19', 'Hendrik', 4, 'Jl. Contoh No. 77', NULL, '2025-05-07 03:27:46', '2025-05-07 03:27:46'),
(18, 'Ahmad 4', 'Laki-Laki', 'Kota X', '2017-01-05', 'Hendrik', 4, 'Jl. Contoh No. 70', 'Mengaji Cepat', '2025-05-07 03:27:47', '2025-05-07 03:27:47'),
(19, 'Tika 5', 'Perempuan', 'Kota Y', '2015-04-06', 'Rina', 2, 'Jl. Contoh No. 73', 'Mengaji Cepat', '2025-05-07 03:27:47', '2025-05-07 03:27:47'),
(20, 'Lina 6', 'Perempuan', 'Kota H', '2017-06-30', 'Darma', 4, 'Jl. Contoh No. 30', NULL, '2025-05-07 03:27:47', '2025-05-07 03:27:47'),
(21, 'Lina 7', 'Laki-Laki', 'Kota H', '2016-02-18', 'Yati', 1, 'Jl. Contoh No. 100', NULL, '2025-05-07 03:27:47', '2025-05-07 03:27:47'),
(22, 'Ahmad 8', 'Laki-Laki', 'Kota F', '2019-11-19', 'Rina', 2, 'Jl. Contoh No. 96', NULL, '2025-05-07 03:27:47', '2025-05-07 03:27:47'),
(23, 'Ahmad 9', 'Laki-Laki', 'Kota M', '2020-01-18', 'Surya', 4, 'Jl. Contoh No. 95', NULL, '2025-05-07 03:27:47', '2025-05-07 03:27:47'),
(24, 'Dewi 10', 'Laki-Laki', 'Kota C', '2015-07-04', 'Hendrik', 1, 'Jl. Contoh No. 15', 'Mengaji Cepat', '2025-05-07 03:27:48', '2025-05-07 03:27:48'),
(25, 'Citra 11', 'Perempuan', 'Kota U', '2014-12-20', 'Hendrik', 3, 'Jl. Contoh No. 18', NULL, '2025-05-07 03:27:48', '2025-05-07 03:27:48'),
(26, 'Fauzi 12', 'Perempuan', 'Kota R', '2017-02-06', 'Surya', 1, 'Jl. Contoh No. 62', NULL, '2025-05-07 03:27:48', '2025-05-07 03:27:48'),
(27, 'Wira 13', 'Perempuan', 'Kota L', '2016-09-09', 'Samsudin', 2, 'Jl. Contoh No. 63', 'Mengaji Cepat', '2025-05-07 03:27:48', '2025-05-07 03:27:48'),
(28, 'Gina 14', 'Perempuan', 'Kota B', '2014-05-15', 'Abdullah', 4, 'Jl. Contoh No. 49', NULL, '2025-05-07 03:27:48', '2025-05-07 03:27:48'),
(29, 'Qori 15', 'Perempuan', 'Kota U', '2015-04-21', 'Hendrik', 4, 'Jl. Contoh No. 43', NULL, '2025-05-07 03:27:48', '2025-05-07 03:27:48'),
(30, 'Citra 16', 'Perempuan', 'Kota G', '2018-07-04', 'Rina', 1, 'Jl. Contoh No. 14', 'Mengaji Cepat', '2025-05-07 03:27:48', '2025-05-07 03:27:48'),
(31, 'Rani 17', 'Laki-Laki', 'Kota U', '2018-04-16', 'Yati', 4, 'Jl. Contoh No. 17', 'Mengaji Cepat', '2025-05-07 03:27:48', '2025-05-07 03:27:48'),
(32, 'Kiki 18', 'Laki-Laki', 'Kota C', '2019-08-25', 'Surya', 4, 'Jl. Contoh No. 20', 'Mengaji Cepat', '2025-05-07 03:27:48', '2025-05-07 03:27:48'),
(33, 'Siti 19', 'Perempuan', 'Kota S', '2017-04-20', 'Surya', 3, 'Jl. Contoh No. 24', 'Mengaji Cepat', '2025-05-07 03:27:48', '2025-05-07 03:27:48'),
(34, 'Budi 20', 'Laki-Laki', 'Kota Y', '2017-11-20', 'Abdullah', 4, 'Jl. Contoh No. 69', NULL, '2025-05-07 03:27:48', '2025-05-07 03:27:48'),
(35, 'Lina 21', 'Laki-Laki', 'Kota H', '2016-08-01', 'Darma', 2, 'Jl. Contoh No. 36', 'Mengaji Cepat', '2025-05-07 03:27:49', '2025-05-07 03:27:49'),
(36, 'Wira 22', 'Laki-Laki', 'Kota Y', '2014-08-22', 'Hendrik', 4, 'Jl. Contoh No. 47', NULL, '2025-05-07 03:27:49', '2025-05-07 03:27:49'),
(37, 'Umar 23', 'Perempuan', 'Kota E', '2014-09-04', 'Abdullah', 3, 'Jl. Contoh No. 11', NULL, '2025-05-07 03:27:49', '2025-05-07 03:27:49'),
(38, 'Rani 24', 'Laki-Laki', 'Kota Y', '2016-01-31', 'Rina', 3, 'Jl. Contoh No. 70', 'Mengaji Cepat', '2025-05-07 03:27:49', '2025-05-07 03:27:49'),
(39, 'Nina 25', 'Laki-Laki', 'Kota K', '2014-10-27', 'Surya', 1, 'Jl. Contoh No. 100', 'Mengaji Cepat', '2025-05-07 03:27:49', '2025-05-07 03:27:49'),
(40, 'Kiki 26', 'Perempuan', 'Kota I', '2018-10-14', 'Abdullah', 2, 'Jl. Contoh No. 43', NULL, '2025-05-07 03:27:49', '2025-05-07 03:27:49'),
(41, 'Joko 27', 'Perempuan', 'Kota W', '2014-07-12', 'Samsudin', 2, 'Jl. Contoh No. 75', NULL, '2025-05-07 03:27:49', '2025-05-07 03:27:49'),
(42, 'Dewi 28', 'Perempuan', 'Kota C', '2020-02-16', 'Surya', 2, 'Jl. Contoh No. 62', NULL, '2025-05-07 03:27:49', '2025-05-07 03:27:49'),
(43, 'Xena 29', 'Laki-Laki', 'Kota V', '2016-05-04', 'Surya', 2, 'Jl. Contoh No. 100', NULL, '2025-05-07 03:27:49', '2025-05-07 03:27:49'),
(44, 'Joko 30', 'Laki-Laki', 'Kota I', '2016-11-24', 'Darma', 3, 'Jl. Contoh No. 10', NULL, '2025-05-07 03:27:49', '2025-05-07 03:27:49'),
(45, 'Kiki 31', 'Perempuan', 'Kota D', '2019-01-14', 'Nuraini', 1, 'Jl. Contoh No. 15', 'Mengaji Cepat', '2025-05-07 03:27:49', '2025-05-07 03:27:49'),
(46, 'Yuni 32', 'Perempuan', 'Kota Z', '2016-03-17', 'Rina', 2, 'Jl. Contoh No. 45', 'Mengaji Cepat', '2025-05-07 03:27:49', '2025-05-07 03:27:49'),
(47, 'Rani 33', 'Laki-Laki', 'Kota O', '2017-03-14', 'Hendrik', 2, 'Jl. Contoh No. 54', NULL, '2025-05-07 03:27:49', '2025-05-07 03:27:49'),
(48, 'Joko 34', 'Laki-Laki', 'Kota K', '2014-08-19', 'Darma', 3, 'Jl. Contoh No. 55', NULL, '2025-05-07 03:27:50', '2025-05-07 03:27:50'),
(49, 'Ahmad 35', 'Perempuan', 'Kota H', '2016-08-05', 'Samsudin', 4, 'Jl. Contoh No. 80', 'Mengaji Cepat', '2025-05-07 03:27:50', '2025-05-07 03:27:50'),
(50, 'Budi 36', 'Perempuan', 'Kota F', '2017-05-06', 'Surya', 2, 'Jl. Contoh No. 57', NULL, '2025-05-07 03:27:50', '2025-05-07 03:27:50'),
(51, 'Wira 37', 'Laki-Laki', 'Kota S', '2017-02-05', 'Darma', 4, 'Jl. Contoh No. 56', 'Mengaji Cepat', '2025-05-07 03:27:50', '2025-05-07 03:27:50'),
(52, 'Siti 38', 'Laki-Laki', 'Kota E', '2017-04-20', 'Surya', 1, 'Jl. Contoh No. 39', NULL, '2025-05-07 03:27:50', '2025-05-07 03:27:50'),
(53, 'Fauzi 39', 'Perempuan', 'Kota P', '2018-12-05', 'Samsudin', 3, 'Jl. Contoh No. 73', 'Mengaji Cepat', '2025-05-07 03:27:50', '2025-05-07 03:27:50'),
(54, 'Kiki 40', 'Laki-Laki', 'Kota B', '2014-08-21', 'Samsudin', 4, 'Jl. Contoh No. 44', 'Mengaji Cepat', '2025-05-07 03:27:50', '2025-05-07 03:27:50'),
(55, 'Putra 41', 'Perempuan', 'Kota R', '2016-03-10', 'Hendrik', 3, 'Jl. Contoh No. 44', 'Mengaji Cepat', '2025-05-07 03:27:50', '2025-05-07 03:27:50'),
(56, 'Tika 42', 'Perempuan', 'Kota O', '2015-06-12', 'Rina', 1, 'Jl. Contoh No. 1', 'Mengaji Cepat', '2025-05-07 03:27:50', '2025-05-07 03:27:50'),
(57, 'Dewi 43', 'Laki-Laki', 'Kota M', '2016-08-22', 'Abdullah', 1, 'Jl. Contoh No. 94', 'Mengaji Cepat', '2025-05-07 03:27:50', '2025-05-07 03:27:50'),
(58, 'Nina 44', 'Perempuan', 'Kota N', '2014-06-17', 'Darma', 1, 'Jl. Contoh No. 55', 'Mengaji Cepat', '2025-05-07 03:27:51', '2025-05-07 03:27:51'),
(59, 'Qori 45', 'Perempuan', 'Kota T', '2017-06-29', 'Yati', 1, 'Jl. Contoh No. 85', 'Mengaji Cepat', '2025-05-07 03:27:51', '2025-05-07 03:27:51'),
(60, 'Joko 46', 'Laki-Laki', 'Kota L', '2017-10-23', 'Hendrik', 1, 'Jl. Contoh No. 66', 'Mengaji Cepat', '2025-05-07 03:27:51', '2025-05-07 03:27:51'),
(61, 'Tika 47', 'Perempuan', 'Kota T', '2018-12-08', 'Nuraini', 2, 'Jl. Contoh No. 57', 'Mengaji Cepat', '2025-05-07 03:27:51', '2025-05-07 03:27:51'),
(62, 'Vina 48', 'Perempuan', 'Kota H', '2020-04-27', 'Samsudin', 2, 'Jl. Contoh No. 14', 'Mengaji Cepat', '2025-05-07 03:27:51', '2025-05-07 03:27:51'),
(63, 'Citra 49', 'Perempuan', 'Kota I', '2016-01-15', 'Nuraini', 3, 'Jl. Contoh No. 32', NULL, '2025-05-07 03:27:51', '2025-05-07 03:27:51'),
(64, 'Qori 50', 'Perempuan', 'Kota F', '2017-10-15', 'Yati', 2, 'Jl. Contoh No. 57', NULL, '2025-05-07 03:27:51', '2025-05-07 03:27:51'),
(66, 'wwwwwwww', 'Perempuan', 'dsdsd', '2025-05-13', 'sdsd', 2, 'sdsd', 'sds', '2025-05-07 03:47:31', '2025-05-07 03:47:44'),
(67, 'arjun', 'Laki-Laki', 'adsad', '2025-05-12', 'aaaa', 1, 'sadad', 'sdsdadsd', '2025-05-09 23:09:46', '2025-05-09 23:09:46'),
(68, 'memed', 'Perempuan', 'sdad', '2025-05-21', 'asdad', 3, 'sdsd', 'sdsds', '2025-05-09 23:16:41', '2025-05-09 23:16:41');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kelas` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `nama_kelas`, `created_at`, `updated_at`) VALUES
(1, 'PAUD', '2025-05-05 10:07:13', '2025-05-05 10:07:13'),
(2, 'A1', '2025-05-05 10:07:13', '2025-05-05 10:07:13'),
(3, 'A2', '2025-05-05 10:07:13', '2025-05-05 10:07:13'),
(4, 'A3', '2025-05-05 10:07:14', '2025-05-05 10:07:14');

-- --------------------------------------------------------

--
-- Table structure for table `kelas_mata_pelajaran`
--

CREATE TABLE `kelas_mata_pelajaran` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kelas_id` bigint(20) UNSIGNED NOT NULL,
  `matapelajaran_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `matapelajarans`
--

CREATE TABLE `matapelajarans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kelas_id` bigint(20) UNSIGNED NOT NULL,
  `nama_matapelajaran` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `matapelajarans`
--

INSERT INTO `matapelajarans` (`id`, `kelas_id`, `nama_matapelajaran`, `created_at`, `updated_at`) VALUES
(1, 1, 'Bacaan Iqro Jilid 1', '2025-05-05 10:07:15', '2025-05-05 10:58:41'),
(3, 1, 'Praktek Wudhu', '2025-05-05 10:07:16', '2025-05-05 10:07:16'),
(4, 1, 'Praktek Sholat Wajib', '2025-05-05 10:07:16', '2025-05-05 10:07:16'),
(5, 1, 'Asmaul Husna 1-10', '2025-05-05 10:07:16', '2025-05-05 10:07:16'),
(6, 1, 'Hafalan Surat Pendek', '2025-05-05 10:07:16', '2025-05-05 10:07:16'),
(7, 1, 'Doa-Doa', '2025-05-05 10:07:16', '2025-05-05 10:07:16'),
(8, 1, 'Materi Tambahan', '2025-05-05 10:07:17', '2025-05-05 10:07:17'),
(9, 2, 'Bacaan Iqro Jilid 2', '2025-05-05 10:07:17', '2025-05-05 10:07:17'),
(10, 2, 'Menulis', '2025-05-05 10:07:17', '2025-05-05 10:07:17'),
(11, 2, 'Praktek Wudhu', '2025-05-05 10:07:17', '2025-05-05 10:07:17'),
(12, 2, 'Praktek Sholat Wajib', '2025-05-05 10:07:17', '2025-05-05 10:07:17'),
(13, 2, 'Asmaul Husna 1-20', '2025-05-05 10:07:17', '2025-05-05 10:07:17'),
(14, 2, 'Hafalan Surat Pendek', '2025-05-05 10:07:17', '2025-05-05 10:07:17'),
(15, 2, 'Doa-Doa Harian', '2025-05-05 10:07:17', '2025-05-05 21:34:25'),
(16, 2, 'Materi Tambahan', '2025-05-05 10:07:17', '2025-05-05 10:07:17'),
(17, 3, 'Bacaan Iqro Jilid 3', '2025-05-05 10:07:17', '2025-05-05 10:07:17'),
(18, 3, 'Menulis Pegon', '2025-05-05 10:07:17', '2025-05-05 10:07:17'),
(19, 3, 'Praktek Wudhu', '2025-05-05 10:07:17', '2025-05-05 10:07:17'),
(20, 3, 'Praktek Sholat Wajib', '2025-05-05 10:07:17', '2025-05-05 10:07:17'),
(21, 3, 'Asmaul Husna 1-30', '2025-05-05 10:07:17', '2025-05-05 10:07:17'),
(22, 3, 'Hafalan Surat Pendek', '2025-05-05 10:07:17', '2025-05-05 10:07:17'),
(23, 3, 'Doa-Doa', '2025-05-05 10:07:17', '2025-05-05 10:07:17'),
(24, 3, 'Materi Tambahan', '2025-05-05 10:07:18', '2025-05-05 10:07:18'),
(25, 4, 'Bacaan Iqro Jilid 4', '2025-05-05 10:07:18', '2025-05-05 10:07:18'),
(26, 4, 'Menulis Pegon', '2025-05-05 10:07:18', '2025-05-05 10:07:18'),
(27, 4, 'Praktek Wudhu', '2025-05-05 10:07:18', '2025-05-05 10:07:18'),
(28, 4, 'Praktek Sholat Wajib', '2025-05-05 10:07:18', '2025-05-05 10:07:18'),
(29, 4, 'Asmaul Husna 1-30', '2025-05-05 10:07:18', '2025-05-05 10:07:18'),
(30, 4, 'Hafalan Surat Pendek', '2025-05-05 10:07:18', '2025-05-05 10:07:18'),
(31, 4, 'Doa-Doa', '2025-05-05 10:07:18', '2025-05-05 10:07:18'),
(32, 4, 'Materi Tambahan', '2025-05-05 10:07:18', '2025-05-07 07:33:01'),
(34, 1, 'Menulis', '2025-05-05 10:58:59', '2025-05-05 10:58:59'),
(35, 1, 'Adzan', '2025-05-05 11:00:16', '2025-05-05 11:02:52');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_05_02_063518_create_kelas_table', 1),
(5, '2025_05_02_063538_create_datasantris_table', 1),
(6, '2025_05_02_063552_create_matapelajarans_table', 1),
(7, '2025_05_02_063608_create_nilais_table', 1),
(8, '2025_05_02_075708_create_kelas_mata_pelajaran_table', 1),
(9, '2025_05_10_045538_add_role_to_users_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `nilais`
--

CREATE TABLE `nilais` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `santri_id` bigint(20) UNSIGNED NOT NULL,
  `matapelajaran_id` bigint(20) UNSIGNED NOT NULL,
  `kelas_id` bigint(20) UNSIGNED DEFAULT NULL,
  `nilai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nilais`
--

INSERT INTO `nilais` (`id`, `santri_id`, `matapelajaran_id`, `kelas_id`, `nilai`, `created_at`, `updated_at`) VALUES
(129, 5, 1, 3, 58, '2025-05-05 10:07:29', '2025-05-05 10:07:29'),
(131, 5, 3, 3, 72, '2025-05-05 10:07:29', '2025-05-05 10:07:29'),
(132, 5, 4, 3, 51, '2025-05-05 10:07:29', '2025-05-05 10:07:29'),
(133, 5, 5, 3, 68, '2025-05-05 10:07:29', '2025-05-05 10:07:29'),
(134, 5, 6, 3, 61, '2025-05-05 10:07:29', '2025-05-05 10:07:29'),
(135, 5, 7, 3, 92, '2025-05-05 10:07:29', '2025-05-05 10:07:29'),
(136, 5, 8, 3, 86, '2025-05-05 10:07:29', '2025-05-05 10:07:29'),
(137, 5, 9, 3, 56, '2025-05-05 10:07:29', '2025-05-05 10:07:29'),
(138, 5, 10, 3, 58, '2025-05-05 10:07:29', '2025-05-05 10:07:29'),
(139, 5, 11, 3, 89, '2025-05-05 10:07:29', '2025-05-05 10:07:29'),
(140, 5, 12, 3, 60, '2025-05-05 10:07:30', '2025-05-05 10:07:30'),
(141, 5, 13, 3, 89, '2025-05-05 10:07:30', '2025-05-05 10:07:30'),
(142, 5, 14, 3, 66, '2025-05-05 10:07:30', '2025-05-05 10:07:30'),
(143, 5, 15, 3, 100, '2025-05-05 10:07:30', '2025-05-05 10:07:30'),
(144, 5, 16, 3, 66, '2025-05-05 10:07:30', '2025-05-05 10:07:30'),
(145, 5, 17, 3, 54, '2025-05-05 10:07:30', '2025-05-05 10:07:30'),
(146, 5, 18, 3, 57, '2025-05-05 10:07:30', '2025-05-05 10:07:30'),
(147, 5, 19, 3, 92, '2025-05-05 10:07:30', '2025-05-05 10:07:30'),
(148, 5, 20, 3, 64, '2025-05-05 10:07:30', '2025-05-05 10:07:30'),
(149, 5, 21, 3, 89, '2025-05-05 10:07:30', '2025-05-05 10:07:30'),
(150, 5, 22, 3, 87, '2025-05-05 10:07:30', '2025-05-05 10:07:30'),
(151, 5, 23, 3, 73, '2025-05-05 10:07:30', '2025-05-05 10:07:30'),
(152, 5, 24, 3, 93, '2025-05-05 10:07:30', '2025-05-05 10:07:30'),
(153, 5, 25, 3, 51, '2025-05-05 10:07:31', '2025-05-05 10:07:31'),
(154, 5, 26, 3, 65, '2025-05-05 10:07:31', '2025-05-05 10:07:31'),
(155, 5, 27, 3, 68, '2025-05-05 10:07:31', '2025-05-05 10:07:31'),
(156, 5, 28, 3, 84, '2025-05-05 10:07:31', '2025-05-05 10:07:31'),
(157, 5, 29, 3, 52, '2025-05-05 10:07:31', '2025-05-05 10:07:31'),
(158, 5, 30, 3, 50, '2025-05-05 10:07:31', '2025-05-05 10:07:31'),
(159, 5, 31, 3, 66, '2025-05-05 10:07:31', '2025-05-05 10:07:31'),
(160, 5, 32, 3, 91, '2025-05-05 10:07:31', '2025-05-05 10:07:31'),
(161, 6, 1, 3, 51, '2025-05-05 10:07:31', '2025-05-05 10:07:31'),
(163, 6, 3, 3, 57, '2025-05-05 10:07:31', '2025-05-05 10:07:31'),
(164, 6, 4, 3, 95, '2025-05-05 10:07:32', '2025-05-05 10:07:32'),
(165, 6, 5, 3, 58, '2025-05-05 10:07:32', '2025-05-05 10:07:32'),
(166, 6, 6, 3, 95, '2025-05-05 10:07:32', '2025-05-05 10:07:32'),
(167, 6, 7, 3, 62, '2025-05-05 10:07:32', '2025-05-05 10:07:32'),
(168, 6, 8, 3, 99, '2025-05-05 10:07:32', '2025-05-05 10:07:32'),
(169, 6, 9, 3, 61, '2025-05-05 10:07:32', '2025-05-05 10:07:32'),
(170, 6, 10, 3, 55, '2025-05-05 10:07:32', '2025-05-05 10:07:32'),
(171, 6, 11, 3, 62, '2025-05-05 10:07:32', '2025-05-05 10:07:32'),
(172, 6, 12, 3, 71, '2025-05-05 10:07:32', '2025-05-05 10:07:32'),
(173, 6, 13, 3, 68, '2025-05-05 10:07:33', '2025-05-05 10:07:33'),
(174, 6, 14, 3, 66, '2025-05-05 10:07:33', '2025-05-05 10:07:33'),
(175, 6, 15, 3, 89, '2025-05-05 10:07:33', '2025-05-05 10:07:33'),
(176, 6, 16, 3, 89, '2025-05-05 10:07:33', '2025-05-05 10:07:33'),
(177, 6, 17, 3, 73, '2025-05-05 10:07:33', '2025-05-05 10:07:33'),
(178, 6, 18, 3, 95, '2025-05-05 10:07:33', '2025-05-05 10:07:33'),
(179, 6, 19, 3, 61, '2025-05-05 10:07:33', '2025-05-05 10:07:33'),
(180, 6, 20, 3, 77, '2025-05-05 10:07:33', '2025-05-05 10:07:33'),
(181, 6, 21, 3, 72, '2025-05-05 10:07:33', '2025-05-05 10:07:33'),
(182, 6, 22, 3, 51, '2025-05-05 10:07:33', '2025-05-05 10:07:33'),
(183, 6, 23, 3, 100, '2025-05-05 10:07:34', '2025-05-05 10:07:34'),
(184, 6, 24, 3, 52, '2025-05-05 10:07:34', '2025-05-05 10:07:34'),
(185, 6, 25, 3, 50, '2025-05-05 10:07:34', '2025-05-05 10:07:34'),
(186, 6, 26, 3, 63, '2025-05-05 10:07:34', '2025-05-05 10:07:34'),
(187, 6, 27, 3, 96, '2025-05-05 10:07:34', '2025-05-05 10:07:34'),
(188, 6, 28, 3, 83, '2025-05-05 10:07:34', '2025-05-05 10:07:34'),
(189, 6, 29, 3, 85, '2025-05-05 10:07:34', '2025-05-05 10:07:34'),
(190, 6, 30, 3, 72, '2025-05-05 10:07:34', '2025-05-05 10:07:34'),
(191, 6, 31, 3, 68, '2025-05-05 10:07:34', '2025-05-05 10:07:34'),
(192, 6, 32, 3, 60, '2025-05-05 10:07:34', '2025-05-05 10:07:34'),
(193, 7, 1, 2, 70, '2025-05-05 10:07:35', '2025-05-05 10:07:35'),
(195, 7, 3, 2, 74, '2025-05-05 10:07:35', '2025-05-05 10:07:35'),
(196, 7, 4, 2, 62, '2025-05-05 10:07:35', '2025-05-05 10:07:35'),
(197, 7, 5, 2, 93, '2025-05-05 10:07:35', '2025-05-05 10:07:35'),
(198, 7, 6, 2, 50, '2025-05-05 10:07:35', '2025-05-05 10:07:35'),
(199, 7, 7, 2, 61, '2025-05-05 10:07:35', '2025-05-05 10:07:35'),
(200, 7, 8, 2, 60, '2025-05-05 10:07:35', '2025-05-05 10:07:35'),
(201, 7, 9, 2, 90, '2025-05-05 10:07:35', '2025-05-08 03:09:58'),
(202, 7, 10, 2, 99, '2025-05-05 10:07:35', '2025-05-05 10:07:35'),
(203, 7, 11, 2, 73, '2025-05-05 10:07:35', '2025-05-05 10:07:35'),
(204, 7, 12, 2, 80, '2025-05-05 10:07:35', '2025-05-05 10:07:35'),
(205, 7, 13, 2, 68, '2025-05-05 10:07:35', '2025-05-05 10:07:35'),
(206, 7, 14, 2, 53, '2025-05-05 10:07:35', '2025-05-05 10:07:35'),
(207, 7, 15, 2, 87, '2025-05-05 10:07:35', '2025-05-05 10:07:35'),
(208, 7, 16, 2, 71, '2025-05-05 10:07:35', '2025-05-05 10:07:35'),
(209, 7, 17, 2, 64, '2025-05-05 10:07:36', '2025-05-05 10:07:36'),
(210, 7, 18, 2, 96, '2025-05-05 10:07:36', '2025-05-05 10:07:36'),
(211, 7, 19, 2, 80, '2025-05-05 10:07:36', '2025-05-05 10:07:36'),
(212, 7, 20, 2, 93, '2025-05-05 10:07:36', '2025-05-05 10:07:36'),
(213, 7, 21, 2, 53, '2025-05-05 10:07:36', '2025-05-05 10:07:36'),
(214, 7, 22, 2, 67, '2025-05-05 10:07:36', '2025-05-05 10:07:36'),
(215, 7, 23, 2, 91, '2025-05-05 10:07:36', '2025-05-05 10:07:36'),
(216, 7, 24, 2, 67, '2025-05-05 10:07:36', '2025-05-05 10:07:36'),
(217, 7, 25, 2, 56, '2025-05-05 10:07:36', '2025-05-05 10:07:36'),
(218, 7, 26, 2, 82, '2025-05-05 10:07:36', '2025-05-05 10:07:36'),
(219, 7, 27, 2, 57, '2025-05-05 10:07:36', '2025-05-05 10:07:36'),
(220, 7, 28, 2, 68, '2025-05-05 10:07:36', '2025-05-05 10:07:36'),
(221, 7, 29, 2, 87, '2025-05-05 10:07:36', '2025-05-05 10:07:36'),
(222, 7, 30, 2, 93, '2025-05-05 10:07:36', '2025-05-05 10:07:36'),
(223, 7, 31, 2, 82, '2025-05-05 10:07:36', '2025-05-05 10:07:36'),
(224, 7, 32, 2, 82, '2025-05-05 10:07:36', '2025-05-05 10:07:36'),
(225, 8, 1, 4, 67, '2025-05-05 10:07:36', '2025-05-05 10:07:36'),
(227, 8, 3, 4, 50, '2025-05-05 10:07:37', '2025-05-05 10:07:37'),
(228, 8, 4, 4, 91, '2025-05-05 10:07:37', '2025-05-05 10:07:37'),
(229, 8, 5, 4, 65, '2025-05-05 10:07:37', '2025-05-05 10:07:37'),
(230, 8, 6, 4, 59, '2025-05-05 10:07:37', '2025-05-05 10:07:37'),
(231, 8, 7, 4, 54, '2025-05-05 10:07:37', '2025-05-05 10:07:37'),
(232, 8, 8, 4, 71, '2025-05-05 10:07:37', '2025-05-05 10:07:37'),
(233, 8, 9, 4, 69, '2025-05-05 10:07:37', '2025-05-05 10:07:37'),
(234, 8, 10, 4, 77, '2025-05-05 10:07:37', '2025-05-05 10:07:37'),
(235, 8, 11, 4, 68, '2025-05-05 10:07:37', '2025-05-05 10:07:37'),
(236, 8, 12, 4, 92, '2025-05-05 10:07:37', '2025-05-05 10:07:37'),
(237, 8, 13, 4, 91, '2025-05-05 10:07:38', '2025-05-05 10:07:38'),
(238, 8, 14, 4, 55, '2025-05-05 10:07:38', '2025-05-05 10:07:38'),
(239, 8, 15, 4, 88, '2025-05-05 10:07:38', '2025-05-05 10:07:38'),
(240, 8, 16, 4, 61, '2025-05-05 10:07:38', '2025-05-05 10:07:38'),
(241, 8, 17, 4, 64, '2025-05-05 10:07:38', '2025-05-05 10:07:38'),
(242, 8, 18, 4, 70, '2025-05-05 10:07:38', '2025-05-05 10:07:38'),
(243, 8, 19, 4, 94, '2025-05-05 10:07:38', '2025-05-05 10:07:38'),
(244, 8, 20, 4, 81, '2025-05-05 10:07:38', '2025-05-05 10:07:38'),
(245, 8, 21, 4, 72, '2025-05-05 10:07:38', '2025-05-05 10:07:38'),
(246, 8, 22, 4, 54, '2025-05-05 10:07:39', '2025-05-05 10:07:39'),
(247, 8, 23, 4, 89, '2025-05-05 10:07:39', '2025-05-05 10:07:39'),
(248, 8, 24, 4, 92, '2025-05-05 10:07:39', '2025-05-05 10:07:39'),
(249, 8, 25, 4, 65, '2025-05-05 10:07:39', '2025-05-05 10:07:39'),
(250, 8, 26, 4, 87, '2025-05-05 10:07:39', '2025-05-05 10:07:39'),
(251, 8, 27, 4, 63, '2025-05-05 10:07:40', '2025-05-05 10:07:40'),
(252, 8, 28, 4, 87, '2025-05-05 10:07:40', '2025-05-05 10:07:40'),
(253, 8, 29, 4, 92, '2025-05-05 10:07:40', '2025-05-05 10:07:40'),
(254, 8, 30, 4, 91, '2025-05-05 10:07:40', '2025-05-05 10:07:40'),
(255, 8, 31, 4, 82, '2025-05-05 10:07:41', '2025-05-05 10:07:41'),
(256, 8, 32, 4, 91, '2025-05-05 10:07:41', '2025-05-05 10:07:41'),
(257, 9, 1, 2, 86, '2025-05-05 10:07:41', '2025-05-05 10:07:41'),
(259, 9, 3, 2, 83, '2025-05-05 10:07:41', '2025-05-05 10:07:41'),
(260, 9, 4, 2, 91, '2025-05-05 10:07:41', '2025-05-05 10:07:41'),
(261, 9, 5, 2, 81, '2025-05-05 10:07:42', '2025-05-05 10:07:42'),
(262, 9, 6, 2, 60, '2025-05-05 10:07:42', '2025-05-05 10:07:42'),
(263, 9, 7, 2, 96, '2025-05-05 10:07:42', '2025-05-05 10:07:42'),
(264, 9, 8, 2, 85, '2025-05-05 10:07:42', '2025-05-05 10:07:42'),
(265, 9, 9, 2, 100, '2025-05-05 10:07:42', '2025-05-05 10:07:42'),
(266, 9, 10, 2, 53, '2025-05-05 10:07:42', '2025-05-05 10:07:42'),
(267, 9, 11, 2, 85, '2025-05-05 10:07:42', '2025-05-05 10:07:42'),
(268, 9, 12, 2, 72, '2025-05-05 10:07:42', '2025-05-05 10:07:42'),
(269, 9, 13, 2, 96, '2025-05-05 10:07:42', '2025-05-05 10:07:42'),
(270, 9, 14, 2, 85, '2025-05-05 10:07:42', '2025-05-05 10:07:42'),
(271, 9, 15, 2, 85, '2025-05-05 10:07:43', '2025-05-05 10:07:43'),
(272, 9, 16, 2, 93, '2025-05-05 10:07:43', '2025-05-05 10:07:43'),
(273, 9, 17, 2, 94, '2025-05-05 10:07:43', '2025-05-05 10:07:43'),
(274, 9, 18, 2, 55, '2025-05-05 10:07:43', '2025-05-05 10:07:43'),
(275, 9, 19, 2, 81, '2025-05-05 10:07:43', '2025-05-05 10:07:43'),
(276, 9, 20, 2, 85, '2025-05-05 10:07:43', '2025-05-05 10:07:43'),
(277, 9, 21, 2, 50, '2025-05-05 10:07:43', '2025-05-05 10:07:43'),
(278, 9, 22, 2, 51, '2025-05-05 10:07:43', '2025-05-05 10:07:43'),
(279, 9, 23, 2, 54, '2025-05-05 10:07:43', '2025-05-05 10:07:43'),
(280, 9, 24, 2, 68, '2025-05-05 10:07:44', '2025-05-05 10:07:44'),
(281, 9, 25, 2, 92, '2025-05-05 10:07:44', '2025-05-05 10:07:44'),
(282, 9, 26, 2, 72, '2025-05-05 10:07:44', '2025-05-05 10:07:44'),
(283, 9, 27, 2, 83, '2025-05-05 10:07:44', '2025-05-05 10:07:44'),
(284, 9, 28, 2, 53, '2025-05-05 10:07:44', '2025-05-05 10:07:44'),
(285, 9, 29, 2, 91, '2025-05-05 10:07:44', '2025-05-05 10:07:44'),
(286, 9, 30, 2, 57, '2025-05-05 10:07:44', '2025-05-05 10:07:44'),
(287, 9, 31, 2, 73, '2025-05-05 10:07:44', '2025-05-05 10:07:44'),
(288, 9, 32, 2, 81, '2025-05-05 10:07:44', '2025-05-05 10:07:44'),
(289, 10, 1, 3, 10, '2025-05-05 10:07:44', '2025-05-05 21:43:36'),
(291, 10, 3, 3, 10, '2025-05-05 10:07:44', '2025-05-05 21:43:49'),
(292, 10, 4, 3, 10, '2025-05-05 10:07:45', '2025-05-05 21:43:49'),
(293, 10, 5, 3, 10, '2025-05-05 10:07:45', '2025-05-05 21:43:49'),
(294, 10, 6, 3, 10, '2025-05-05 10:07:45', '2025-05-05 21:43:49'),
(295, 10, 7, 3, 10, '2025-05-05 10:07:45', '2025-05-05 21:43:49'),
(296, 10, 8, 3, 10, '2025-05-05 10:07:45', '2025-05-05 21:43:49'),
(297, 10, 9, 3, 67, '2025-05-05 10:07:45', '2025-05-05 10:07:45'),
(298, 10, 10, 3, 80, '2025-05-05 10:07:45', '2025-05-05 10:07:45'),
(299, 10, 11, 3, 86, '2025-05-05 10:07:45', '2025-05-05 10:07:45'),
(300, 10, 12, 3, 81, '2025-05-05 10:07:45', '2025-05-05 10:07:45'),
(301, 10, 13, 3, 64, '2025-05-05 10:07:45', '2025-05-05 10:07:45'),
(302, 10, 14, 3, 68, '2025-05-05 10:07:45', '2025-05-05 10:07:45'),
(303, 10, 15, 3, 58, '2025-05-05 10:07:46', '2025-05-05 10:07:46'),
(304, 10, 16, 3, 69, '2025-05-05 10:07:46', '2025-05-05 10:07:46'),
(305, 10, 17, 3, 50, '2025-05-05 10:07:46', '2025-05-05 10:07:46'),
(306, 10, 18, 3, 66, '2025-05-05 10:07:46', '2025-05-05 10:07:46'),
(307, 10, 19, 3, 78, '2025-05-05 10:07:46', '2025-05-05 10:07:46'),
(308, 10, 20, 3, 81, '2025-05-05 10:07:46', '2025-05-05 10:07:46'),
(309, 10, 21, 3, 70, '2025-05-05 10:07:46', '2025-05-05 10:07:46'),
(310, 10, 22, 3, 69, '2025-05-05 10:07:46', '2025-05-05 10:07:46'),
(311, 10, 23, 3, 74, '2025-05-05 10:07:46', '2025-05-05 10:07:46'),
(312, 10, 24, 3, 55, '2025-05-05 10:07:47', '2025-05-05 10:07:47'),
(313, 10, 25, 3, 76, '2025-05-05 10:07:47', '2025-05-05 10:07:47'),
(314, 10, 26, 3, 97, '2025-05-05 10:07:47', '2025-05-05 10:07:47'),
(315, 10, 27, 3, 80, '2025-05-05 10:07:47', '2025-05-05 10:07:47'),
(316, 10, 28, 3, 74, '2025-05-05 10:07:47', '2025-05-05 10:07:47'),
(317, 10, 29, 3, 52, '2025-05-05 10:07:47', '2025-05-05 10:07:47'),
(318, 10, 30, 3, 95, '2025-05-05 10:07:47', '2025-05-05 10:07:47'),
(319, 10, 31, 3, 76, '2025-05-05 10:07:47', '2025-05-05 10:07:47'),
(320, 10, 32, 3, 69, '2025-05-05 10:07:47', '2025-05-05 10:07:47'),
(345, 10, 1, NULL, 66, '2025-05-05 11:00:02', '2025-05-05 11:00:02'),
(346, 10, 3, NULL, 85, '2025-05-05 11:00:02', '2025-05-05 11:00:02'),
(347, 10, 4, NULL, 69, '2025-05-05 11:00:02', '2025-05-05 11:00:02'),
(348, 10, 5, NULL, 59, '2025-05-05 11:00:02', '2025-05-05 11:00:02'),
(349, 10, 6, NULL, 56, '2025-05-05 11:00:03', '2025-05-05 11:00:03'),
(350, 10, 7, NULL, 70, '2025-05-05 11:00:03', '2025-05-05 11:00:03'),
(351, 10, 8, NULL, 88, '2025-05-05 11:00:03', '2025-05-05 11:00:03'),
(352, 10, 34, NULL, 10, '2025-05-05 11:00:03', '2025-05-05 21:43:49'),
(353, 10, 1, NULL, 66, '2025-05-05 11:00:35', '2025-05-05 11:00:35'),
(354, 10, 3, NULL, 85, '2025-05-05 11:00:35', '2025-05-05 11:00:35'),
(355, 10, 4, NULL, 69, '2025-05-05 11:00:35', '2025-05-05 11:00:35'),
(356, 10, 5, NULL, 59, '2025-05-05 11:00:35', '2025-05-05 11:00:35'),
(357, 10, 6, NULL, 56, '2025-05-05 11:00:35', '2025-05-05 11:00:35'),
(358, 10, 7, NULL, 70, '2025-05-05 11:00:35', '2025-05-05 11:00:35'),
(359, 10, 8, NULL, 88, '2025-05-05 11:00:36', '2025-05-05 11:00:36'),
(360, 10, 34, NULL, 90, '2025-05-05 11:00:36', '2025-05-05 11:00:36'),
(361, 10, 35, NULL, 10, '2025-05-05 11:00:36', '2025-05-05 21:43:49'),
(371, 10, 1, NULL, 100, '2025-05-05 11:17:04', '2025-05-05 11:17:04'),
(372, 10, 3, NULL, 85, '2025-05-05 11:17:04', '2025-05-05 11:17:04'),
(373, 10, 4, NULL, 69, '2025-05-05 11:17:04', '2025-05-05 11:17:04'),
(374, 10, 5, NULL, 59, '2025-05-05 11:17:05', '2025-05-05 11:17:05'),
(375, 10, 6, NULL, 56, '2025-05-05 11:17:05', '2025-05-05 11:17:05'),
(376, 10, 7, NULL, 70, '2025-05-05 11:17:06', '2025-05-05 11:17:06'),
(377, 10, 8, NULL, 88, '2025-05-05 11:17:06', '2025-05-05 11:17:06'),
(378, 10, 34, NULL, 90, '2025-05-05 11:17:06', '2025-05-05 11:17:06'),
(379, 10, 35, NULL, 100, '2025-05-05 11:17:06', '2025-05-05 11:17:06'),
(380, 10, 1, NULL, 100, '2025-05-05 11:17:20', '2025-05-05 11:17:20'),
(381, 10, 3, NULL, 85, '2025-05-05 11:17:21', '2025-05-05 11:17:21'),
(382, 10, 4, NULL, 69, '2025-05-05 11:17:21', '2025-05-05 11:17:21'),
(383, 10, 5, NULL, 59, '2025-05-05 11:17:21', '2025-05-05 11:17:21'),
(384, 10, 6, NULL, 56, '2025-05-05 11:17:21', '2025-05-05 11:17:21'),
(385, 10, 7, NULL, 70, '2025-05-05 11:17:22', '2025-05-05 11:17:22'),
(386, 10, 8, NULL, 88, '2025-05-05 11:17:22', '2025-05-05 11:17:22'),
(387, 10, 34, NULL, 90, '2025-05-05 11:17:22', '2025-05-05 11:17:22'),
(388, 10, 35, NULL, 100, '2025-05-05 11:17:22', '2025-05-05 11:17:22'),
(389, 10, 1, NULL, 100, '2025-05-05 11:18:17', '2025-05-05 11:18:17'),
(390, 10, 3, NULL, 85, '2025-05-05 11:18:17', '2025-05-05 11:18:17'),
(391, 10, 4, NULL, 69, '2025-05-05 11:18:17', '2025-05-05 11:18:17'),
(392, 10, 5, NULL, 59, '2025-05-05 11:18:18', '2025-05-05 11:18:18'),
(393, 10, 6, NULL, 56, '2025-05-05 11:18:18', '2025-05-05 11:18:18'),
(394, 10, 7, NULL, 70, '2025-05-05 11:18:18', '2025-05-05 11:18:18'),
(395, 10, 8, NULL, 88, '2025-05-05 11:18:18', '2025-05-05 11:18:18'),
(396, 10, 34, NULL, 90, '2025-05-05 11:18:18', '2025-05-05 11:18:18'),
(397, 10, 35, NULL, 100, '2025-05-05 11:18:19', '2025-05-05 11:18:19'),
(407, 21, 1, NULL, 90, '2025-05-07 07:40:25', '2025-05-07 07:40:25'),
(408, 21, 3, NULL, 90, '2025-05-07 07:40:25', '2025-05-07 07:40:25'),
(409, 21, 4, NULL, 90, '2025-05-07 07:40:26', '2025-05-07 07:40:26'),
(410, 21, 5, NULL, 90, '2025-05-07 07:40:26', '2025-05-07 07:40:26'),
(411, 21, 6, NULL, 90, '2025-05-07 07:40:26', '2025-05-07 07:40:26'),
(412, 21, 7, NULL, 90, '2025-05-07 07:40:26', '2025-05-07 07:40:26'),
(413, 21, 8, NULL, 90, '2025-05-07 07:40:26', '2025-05-07 07:40:26'),
(414, 21, 34, NULL, 90, '2025-05-07 07:40:26', '2025-05-07 07:40:26'),
(415, 21, 35, NULL, 90, '2025-05-07 07:40:26', '2025-05-07 07:40:26'),
(416, 22, 9, NULL, 90, '2025-05-07 08:16:39', '2025-05-07 08:16:54'),
(417, 22, 10, NULL, 80, '2025-05-07 08:16:39', '2025-05-07 08:16:39'),
(418, 22, 11, NULL, 80, '2025-05-07 08:16:39', '2025-05-07 08:16:39'),
(419, 22, 12, NULL, 80, '2025-05-07 08:16:39', '2025-05-07 08:16:39'),
(420, 22, 13, NULL, 80, '2025-05-07 08:16:39', '2025-05-07 08:16:39'),
(421, 22, 14, NULL, 80, '2025-05-07 08:16:39', '2025-05-07 08:16:39'),
(422, 22, 15, NULL, 80, '2025-05-07 08:16:39', '2025-05-07 08:16:39'),
(423, 22, 16, NULL, 80, '2025-05-07 08:16:40', '2025-05-07 08:16:40');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('DFbXn2OkbAbbKAaid0KxnW3z6EkMuHJbqx4SAnco', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:138.0) Gecko/20100101 Firefox/138.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiZVpiWGdGdTE4TzZCeERhWnJzNTZhdkdQa0cyZVM4QlczWGpzcDVGcSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXRhc2FudHJpLzQ5L2VkaXQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO30=', 1746885928);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'pengajar'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(2, 'Admin', 'admin@example.com', NULL, '$2y$12$sGMyTjiDJQCgCht7lQkGV.nD51EHow3WXm99BT751hBl3b5MPXlfO', NULL, '2025-05-09 22:35:46', '2025-05-09 22:35:46', 'admin'),
(3, 'Pengajar', 'pengajar@example.com', NULL, '$2y$12$Bb2h5WMoNJFuyxLtXDULveEYkn3GGHliT.suSb3vNkxeUulUhWWVe', NULL, '2025-05-09 22:35:47', '2025-05-09 22:35:47', 'pengajar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `datasantris`
--
ALTER TABLE `datasantris`
  ADD PRIMARY KEY (`id`),
  ADD KEY `datasantris_kelas_id_foreign` (`kelas_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelas_mata_pelajaran`
--
ALTER TABLE `kelas_mata_pelajaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kelas_mata_pelajaran_kelas_id_foreign` (`kelas_id`),
  ADD KEY `kelas_mata_pelajaran_matapelajaran_id_foreign` (`matapelajaran_id`);

--
-- Indexes for table `matapelajarans`
--
ALTER TABLE `matapelajarans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `matapelajarans_kelas_id_foreign` (`kelas_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilais`
--
ALTER TABLE `nilais`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nilais_santri_id_foreign` (`santri_id`),
  ADD KEY `nilais_matapelajaran_id_foreign` (`matapelajaran_id`),
  ADD KEY `nilais_kelas_id_foreign` (`kelas_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `datasantris`
--
ALTER TABLE `datasantris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kelas_mata_pelajaran`
--
ALTER TABLE `kelas_mata_pelajaran`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `matapelajarans`
--
ALTER TABLE `matapelajarans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `nilais`
--
ALTER TABLE `nilais`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=424;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `datasantris`
--
ALTER TABLE `datasantris`
  ADD CONSTRAINT `datasantris_kelas_id_foreign` FOREIGN KEY (`kelas_id`) REFERENCES `kelas` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `kelas_mata_pelajaran`
--
ALTER TABLE `kelas_mata_pelajaran`
  ADD CONSTRAINT `kelas_mata_pelajaran_kelas_id_foreign` FOREIGN KEY (`kelas_id`) REFERENCES `kelas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `kelas_mata_pelajaran_matapelajaran_id_foreign` FOREIGN KEY (`matapelajaran_id`) REFERENCES `matapelajarans` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `matapelajarans`
--
ALTER TABLE `matapelajarans`
  ADD CONSTRAINT `matapelajarans_kelas_id_foreign` FOREIGN KEY (`kelas_id`) REFERENCES `kelas` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `nilais`
--
ALTER TABLE `nilais`
  ADD CONSTRAINT `nilais_kelas_id_foreign` FOREIGN KEY (`kelas_id`) REFERENCES `kelas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `nilais_matapelajaran_id_foreign` FOREIGN KEY (`matapelajaran_id`) REFERENCES `matapelajarans` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `nilais_santri_id_foreign` FOREIGN KEY (`santri_id`) REFERENCES `datasantris` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
