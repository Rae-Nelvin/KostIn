-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2023 at 11:01 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_finpro_webprog_lec`
--

-- --------------------------------------------------------

--
-- Table structure for table `alamat_details`
--

CREATE TABLE `alamat_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `kabupaten_id` bigint(20) UNSIGNED NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `kode_pos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alamat_details`
--

INSERT INTO `alamat_details` (`id`, `alamat`, `kecamatan`, `kabupaten_id`, `provinsi`, `kode_pos`) VALUES
(1, 'Jl. Cendrawasih Raya No. 17, Pesanggrahan, DKI Jakarta, Indonesia', 'Pesanggrahan', 1, 'DKI Jakarta', 61322),
(2, 'Jl. Cendrawasih Raya No. 17, Pesanggrahan, DKI Jakarta, Indonesia', 'Pesanggrahan', 1, 'DKI Jakarta', 61321),
(3, 'Jl. Cendrawasih Raya No. 17, Pesanggrahan, DKI Jakarta, Indonesia', 'Pesanggrahan', 1, 'DKI Jakarta', 61321),
(4, 'Jl. Antene I No.9a, RT.10/RW.1, Gandaria Utara, Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12140, Indonesia', 'Kebayoran Baru', 1, 'DKI Jakarta', 12140),
(5, 'Jalan Paso no 6A, Jagakarsa, Cilandak, Jakarta Selatan', 'Cilandak', 1, 'DKI Jakarta', 12140),
(6, 'Jl. Bendungan Hilir Gang 7 Dalam No. 24 Jakarta Pusat', 'Jakarta Pusat', 1, 'DKI Jakarta', 12140),
(7, 'Jl. Prof Sudarto No. 42, Tembalang', 'Tembalang', 3, 'Jawa Tengah', 12140),
(8, 'Erlangga Tengah II, Semarang, Jawa Tengah.', 'Semarang', 3, 'DKI Jakarta', 12140),
(9, 'Jl. Ligu Tengah NO 1064 Semarang', 'Semarang', 3, 'Jawa Tengah', 12140),
(10, 'Jl. Gubeng Kertajaya XII C - No. 115, Surabaya, East Java, Indonesia', 'Surabaya', 2, 'Jawa Timur', 12140),
(11, 'PANTAI MENTARI D 12 A SURABAYA', 'Surabaya', 2, 'Jawa Timur', 12140),
(12, 'Jalan Kedondong no. 2C, Surabaya', 'Surabaya', 2, 'Jawa Timur', 12140),
(13, 'Jl. Ligu Tengah NO 1064 Semarang', 'Pesanggrahan', 3, 'DKI Jakarta', 12140),
(14, 'Jalan Kedondong no. 2C, Surabaya', 'Pesanggrahan', 1, 'DKI Jakarta', 12140);

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kost_id` bigint(20) UNSIGNED NOT NULL,
  `cover_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`id`, `kost_id`, `cover_id`, `created_at`, `updated_at`) VALUES
(1, 1, 7, '2023-01-15 04:45:34', '2023-01-15 04:45:34'),
(2, 2, 13, '2023-01-15 04:57:08', '2023-01-15 04:57:08'),
(3, 3, 19, '2023-01-15 04:58:28', '2023-01-15 04:58:28'),
(4, 4, 25, '2023-01-15 05:40:43', '2023-01-15 05:40:43'),
(5, 5, 29, '2023-01-15 05:42:34', '2023-01-15 05:42:34'),
(6, 6, 32, '2023-01-15 05:43:39', '2023-01-15 05:43:39'),
(7, 7, 36, '2023-01-15 05:45:34', '2023-01-15 05:45:34'),
(8, 8, 40, '2023-01-15 05:46:51', '2023-01-15 05:46:51'),
(9, 9, 45, '2023-01-15 05:48:07', '2023-01-15 05:48:07');

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`id`, `name`, `logo`) VALUES
(1, 'Kasur', '<i class=\'bx bx-bed\' ></i>'),
(2, 'KM Dalam', '<i class=\'bx bx-bath\' ></i>'),
(3, 'KM Luar', '<i class=\'bx bx-bath\' ></i>'),
(4, 'Internet', '<i class=\'bx bx-wifi\' ></i>'),
(5, 'Laundry', '<i class=\'bx bxs-washer\'></i>'),
(6, 'AC', '<i class=\'bx bx-wind\' ></i>'),
(7, 'Lemari', '<i class=\'bx bx-cabinet\'></i>'),
(8, 'Meja', '<i class=\'bx bxs-dock-bottom\'></i>'),
(9, 'Kursi', '<i class=\'bx bx-chair\' ></i>'),
(10, 'Lahan Parkir', '<i class=\'bx bxs-parking\' ></i>'),
(11, 'Dapur', '<i class=\'bx bx-fridge\'></i>'),
(12, 'Listrik', '<i class=\'bx bxs-bolt-circle\'></i>');

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
-- Table structure for table `kabupatens`
--

CREATE TABLE `kabupatens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `picture_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kabupatens`
--

INSERT INTO `kabupatens` (`id`, `name`, `picture_id`) VALUES
(1, 'DKI Jakarta', 1),
(2, 'Surabaya', 2),
(3, 'Semarang', 3),
(4, 'Malang', 4),
(5, 'Bandung', 5),
(6, 'DI Jogjakarta', 6);

-- --------------------------------------------------------

--
-- Table structure for table `kampuses`
--

CREATE TABLE `kampuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `alamat_id` bigint(20) UNSIGNED NOT NULL,
  `logo_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kosts`
--

CREATE TABLE `kosts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `owner_id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `price` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kosts`
--

INSERT INTO `kosts` (`id`, `name`, `owner_id`, `status`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Kost Rumah Antene Kebayoran Baru Jakarta Selatan', 2, 1, 2200000, '2023-01-15 04:45:34', '2023-01-15 23:15:05'),
(2, 'KOST EXECUTIVE JAGAKARSA PASO CILANDAK JAKARTA SELATAN', 2, 1, 2200000, '2023-01-15 04:57:07', '2023-01-15 23:15:01'),
(3, 'Kingfisher Residence Benhil', 2, 1, 4000000, '2023-01-15 04:58:27', '2023-01-15 23:15:45'),
(4, 'CORNERO HOUSE', 4, 1, 1450000, '2023-01-15 05:40:43', '2023-01-15 23:15:46'),
(5, 'KOST EXCLUSIVE LA ERLANGGA (SIMPANG LIMA)', 4, 1, 1700000, '2023-01-15 05:42:34', '2023-01-15 23:15:47'),
(6, 'PRIME KOST SMART LIVING SEMARANG', 4, 1, 2000000, '2023-01-15 05:43:39', '2023-01-15 23:15:48'),
(7, 'Graha Sekar Arum', 5, 1, 2250000, '2023-01-15 05:45:33', '2023-01-15 23:15:49'),
(8, 'KOS PANTAI MENTARI', 5, 1, 1500000, '2023-01-15 05:46:50', '2023-01-15 23:15:49'),
(9, 'Kos Florence Tipe A', 5, 1, 1250000, '2023-01-15 05:48:07', '2023-01-15 23:15:50');

-- --------------------------------------------------------

--
-- Table structure for table `kost_details`
--

CREATE TABLE `kost_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kost_id` bigint(20) UNSIGNED NOT NULL,
  `description` longtext NOT NULL,
  `tipe_kost` enum('Male','Female','Campur') NOT NULL,
  `jumlah_kamar` int(11) NOT NULL,
  `jumlah_penghuni` int(11) NOT NULL,
  `ukuran_kamar` varchar(255) NOT NULL,
  `jatuh_tempo` varchar(255) NOT NULL,
  `alamat_id` bigint(20) UNSIGNED NOT NULL,
  `favourites` int(11) NOT NULL DEFAULT 0,
  `cover_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kost_details`
--

INSERT INTO `kost_details` (`id`, `kost_id`, `description`, `tipe_kost`, `jumlah_kamar`, `jumlah_penghuni`, `ukuran_kamar`, `jatuh_tempo`, `alamat_id`, `favourites`, `cover_id`) VALUES
(1, 1, 'Kost Rumah Antene Kebayoran Baru Jakarta Selatan (Campur)', 'Campur', 20, 20, '4 x 5 M', 'Tanggal 5', 3, 0, 7),
(2, 2, 'KOST EXECUTIVE JAGAKARSA PASO CILANDAK JAKARTA SELATAN (putra)', 'Male', 15, 0, '4 x 5 M', 'Tanggal 5', 5, 0, 13),
(3, 3, 'Kingfisher Residence Benhil(Campur)', 'Campur', 10, 0, '4 x 5 M', 'Tanggal 5', 6, 0, 19),
(4, 4, 'CORNERO HOUSE(Campur)', 'Campur', 12, 0, '4 x 5 M', 'Tanggal 5', 7, 0, 25),
(5, 5, 'KOST EXCLUSIVE LA ERLANGGA (SIMPANG LIMA)(Campur)', 'Campur', 8, 0, '4 x 5 M', 'Tanggal 5', 8, 0, 29),
(6, 6, 'PRIME KOST SMART LIVING SEMARANG', 'Campur', 14, 0, '4 x 5 M', 'Tanggal 5', 9, 0, 32),
(7, 7, 'Graha Sekar Arum', 'Campur', 14, 0, '4 x 5 M', 'Tanggal 5', 10, 0, 36),
(8, 8, 'KOS PANTAI MENTARI', 'Campur', 6, 0, '4 x 5 M', 'Tanggal 5', 11, 0, 40),
(9, 9, 'Kos Florence Tipe A', 'Campur', 9, 0, '4 x 5 M', 'Tanggal 5', 12, 0, 45);

-- --------------------------------------------------------

--
-- Table structure for table `kost_facilities`
--

CREATE TABLE `kost_facilities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kost_id` bigint(20) UNSIGNED NOT NULL,
  `facility_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kost_facilities`
--

INSERT INTO `kost_facilities` (`id`, `kost_id`, `facility_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 4),
(4, 1, 6),
(5, 1, 7),
(6, 1, 8),
(7, 1, 9),
(8, 1, 12),
(9, 2, 1),
(10, 2, 2),
(11, 2, 4),
(12, 2, 6),
(13, 2, 7),
(14, 2, 8),
(15, 2, 9),
(16, 2, 10),
(17, 2, 11),
(18, 2, 12),
(19, 3, 1),
(20, 3, 2),
(21, 3, 4),
(22, 3, 6),
(23, 3, 7),
(24, 3, 8),
(25, 3, 9),
(26, 3, 10),
(27, 3, 11),
(28, 4, 1),
(29, 4, 2),
(30, 4, 3),
(31, 4, 4),
(32, 4, 6),
(33, 4, 7),
(34, 4, 8),
(35, 4, 9),
(36, 4, 10),
(37, 4, 11),
(38, 4, 12),
(39, 5, 1),
(40, 5, 2),
(41, 5, 4),
(42, 5, 5),
(43, 5, 7),
(44, 5, 8),
(45, 5, 9),
(46, 5, 10),
(47, 6, 1),
(48, 6, 2),
(49, 6, 4),
(50, 6, 6),
(51, 6, 7),
(52, 6, 8),
(53, 6, 9),
(54, 7, 1),
(55, 7, 2),
(56, 7, 4),
(57, 7, 6),
(58, 7, 7),
(59, 7, 8),
(60, 7, 9),
(61, 7, 12),
(62, 8, 2),
(63, 8, 4),
(64, 8, 6),
(65, 8, 10),
(66, 8, 11),
(67, 8, 12),
(68, 9, 1),
(69, 9, 2),
(70, 9, 6),
(71, 9, 7),
(72, 9, 10),
(73, 9, 12);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_01_10_091341_create_roles_table', 1),
(6, '2023_01_10_091447_create_pictures_table', 1),
(7, '2023_01_10_091658_create_kabupatens_table', 1),
(8, '2023_01_10_091754_create_alamat_details_table', 1),
(9, '2023_01_10_091911_add_relations_to_users_table', 1),
(10, '2023_01_10_092019_create_albums_table', 1),
(11, '2023_01_10_092123_add_relations_to_pictures_table', 1),
(12, '2023_01_10_092200_create_kosts_table', 1),
(13, '2023_01_10_092338_create_facilities_table', 1),
(14, '2023_01_10_092407_create_kost_facilities_table', 1),
(15, '2023_01_10_092454_create_kost_details_table', 1),
(16, '2023_01_10_092702_create_kampuses_table', 1),
(18, '2023_01_10_101934_add_relations_to_albums_table', 1),
(19, '2023_01_13_121913_create_requests_table', 1),
(20, '2023_01_10_092757_create_transactions_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

CREATE TABLE `pictures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `album_id` bigint(20) UNSIGNED DEFAULT NULL,
  `path` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pictures`
--

INSERT INTO `pictures` (`id`, `album_id`, `path`, `created_at`, `updated_at`) VALUES
(1, NULL, 'images/kabupaten/Jakarta.jpg', '2023-01-15 04:45:31', '2023-01-15 04:45:31'),
(2, NULL, 'images/kabupaten/Surabaya.jpg', '2023-01-15 04:45:31', '2023-01-15 04:45:31'),
(3, NULL, 'images/kabupaten/Semarang.jpg', '2023-01-15 04:45:31', '2023-01-15 04:45:31'),
(4, NULL, 'images/kabupaten/Malang.jpg', '2023-01-15 04:45:32', '2023-01-15 04:45:32'),
(5, NULL, 'images/kabupaten/Bandung.jpg', '2023-01-15 04:45:32', '2023-01-15 04:45:32'),
(6, NULL, 'images/kabupaten/Jogjakarta.jpg', '2023-01-15 04:45:32', '2023-01-15 04:45:32'),
(7, 1, 'images/kost/Kost Rumah Antene Kebayoran Baru Jakarta Selatan/cover/listing-1494873132.jpg', '2023-01-15 04:45:34', '2023-01-15 04:45:34'),
(8, 1, 'images/kost/Kost Rumah Antene Kebayoran Baru Jakarta Selatan/pictures/pq3vErzuX5QeUaKJQWOMoVHXljMnrEDmayAaOUVf.jpg', '2023-01-15 04:55:44', '2023-01-15 04:55:44'),
(9, 1, 'images/kost/Kost Rumah Antene Kebayoran Baru Jakarta Selatan/pictures/F7JS1LXT6yaYtufdQsSmgzdcCddcZcW0x8tHA3pi.jpg', '2023-01-15 04:55:47', '2023-01-15 04:55:47'),
(10, 1, 'images/kost/Kost Rumah Antene Kebayoran Baru Jakarta Selatan/pictures/KP3vgClrLyJZcEPgOc1zjZKBAc7J2BPFniJkg9SW.jpg', '2023-01-15 04:55:54', '2023-01-15 04:55:54'),
(11, 1, 'images/kost/Kost Rumah Antene Kebayoran Baru Jakarta Selatan/pictures/0tsNULzvakN35OFcZDePe1OVH6VP5q8iHco0jDKg.jpg', '2023-01-15 04:55:57', '2023-01-15 04:55:57'),
(12, 1, 'images/kost/Kost Rumah Antene Kebayoran Baru Jakarta Selatan/pictures/QSj2aEMcrOHxOp0dZVI66hf00fmaw0YMMynfT5qq.jpg', '2023-01-15 04:55:59', '2023-01-15 04:55:59'),
(13, 2, 'images/kost/KOST EXECUTIVE JAGAKARSA PASO CILANDAK JAKARTA SELATAN/cover/vPVltV48aMh1JKF3ZBezB3HyYLBdiawcWSC5JtOL.jpg', '2023-01-15 04:57:08', '2023-01-15 04:57:08'),
(14, 2, 'images/kost/KOST EXECUTIVE JAGAKARSA PASO CILANDAK JAKARTA SELATAN/pictures/s6BIjmubJDQ5SKU8sMJ3DLX7rTLGl10UPsKGyMzx.jpg', '2023-01-15 04:57:20', '2023-01-15 04:57:20'),
(15, 2, 'images/kost/KOST EXECUTIVE JAGAKARSA PASO CILANDAK JAKARTA SELATAN/pictures/Jc2bPqFIe5ekA6kaEuWzJszisBHxF5nqaByQ2Q9c.jpg', '2023-01-15 04:57:22', '2023-01-15 04:57:22'),
(16, 2, 'images/kost/KOST EXECUTIVE JAGAKARSA PASO CILANDAK JAKARTA SELATAN/pictures/a36BuFneB5DE3VKffEdfWbihyO2sVVRwZHlWQzji.jpg', '2023-01-15 04:57:26', '2023-01-15 04:57:26'),
(17, 2, 'images/kost/KOST EXECUTIVE JAGAKARSA PASO CILANDAK JAKARTA SELATAN/pictures/bJP8LnZjRjdJ84lNR32ow31hdw8naHK3bnXH7wA2.jpg', '2023-01-15 04:57:30', '2023-01-15 04:57:30'),
(18, 2, 'images/kost/KOST EXECUTIVE JAGAKARSA PASO CILANDAK JAKARTA SELATAN/pictures/NXIaNVQPGB2mE2nHsjAIauRXaVvfIWhQgARARu8r.jpg', '2023-01-15 04:57:32', '2023-01-15 04:57:32'),
(19, 3, 'images/kost/Kingfisher Residence Benhil/cover/SUJQMG8Vr1mbgOEQ6cFDQM7MZ2xFi1F6X5gO0Fop.jpg', '2023-01-15 04:58:28', '2023-01-15 04:58:28'),
(20, 3, 'images/kost/Kingfisher Residence Benhil/pictures/Lk9JMEhYHFcgBwoZYeHNc89cFNpPnagQR7n7swaM.jpg', '2023-01-15 04:58:34', '2023-01-15 04:58:34'),
(21, 3, 'images/kost/Kingfisher Residence Benhil/pictures/fklYj5hLwTsAV4I1TkGp5KwNMI6bv22KzLYYahMy.jpg', '2023-01-15 04:58:37', '2023-01-15 04:58:37'),
(22, 3, 'images/kost/Kingfisher Residence Benhil/pictures/CtbDyX286mnYQYUQGDegYfeSRKtgIoFMJfNTiWhF.jpg', '2023-01-15 04:58:40', '2023-01-15 04:58:40'),
(23, 3, 'images/kost/Kingfisher Residence Benhil/pictures/ZrcJzrwRqpug4CUy5Jzzkkbk89aUcFlnoT1Hix6i.jpg', '2023-01-15 04:58:43', '2023-01-15 04:58:43'),
(24, 3, 'images/kost/Kingfisher Residence Benhil/pictures/qqHveNeGfNOGqtYfXnvOWj60fz7AUeHlq2BlUPQI.jpg', '2023-01-15 04:58:48', '2023-01-15 04:58:48'),
(25, 4, 'images/kost/CORNERO HOUSE/cover/hWYrRhWC0I9cc40tqP0zZzbE9xmHnYsbg4qXKwUd.jpg', '2023-01-15 05:40:43', '2023-01-15 05:40:43'),
(26, 4, 'images/kost/CORNERO HOUSE/pictures/BwPtuNuiWlnw6WwdHc3LSnMR6g6LWQJ3qJaVsXmm.jpg', '2023-01-15 05:40:50', '2023-01-15 05:40:50'),
(27, 4, 'images/kost/CORNERO HOUSE/pictures/RZ5VebCXylH7xj1WImggDPfEJMA6Ks8w2kriSY2h.jpg', '2023-01-15 05:40:54', '2023-01-15 05:40:54'),
(28, 4, 'images/kost/CORNERO HOUSE/pictures/s8JPjhSbJnJHuo4XoiGzS7j2xjXz8R7j6ZXp8Ewo.jpg', '2023-01-15 05:40:57', '2023-01-15 05:40:57'),
(29, 5, 'images/kost/KOST EXCLUSIVE LA ERLANGGA (SIMPANG LIMA)/cover/LdaoC7LqGCQQQx4c2jWQMtDvMgAd3UdCCUiKPzeE.jpg', '2023-01-15 05:42:34', '2023-01-15 05:42:34'),
(30, 5, 'images/kost/KOST EXCLUSIVE LA ERLANGGA (SIMPANG LIMA)/pictures/ziiRkpHfssAZIvjhFt4RKdZSKVL9yPLHmXSDYQ6h.jpg', '2023-01-15 05:42:40', '2023-01-15 05:42:40'),
(31, 5, 'images/kost/KOST EXCLUSIVE LA ERLANGGA (SIMPANG LIMA)/pictures/s084IjzeOLA14pY514S9PmOP6Esj02wVMmSDpeBH.jpg', '2023-01-15 05:42:45', '2023-01-15 05:42:45'),
(32, 6, 'images/kost/PRIME KOST SMART LIVING SEMARANG/cover/iyTR8qQKGmAmUnLdX1ASaRrHFtZ4aEtS8sNnmUtZ.jpg', '2023-01-15 05:43:39', '2023-01-15 05:43:39'),
(33, 6, 'images/kost/PRIME KOST SMART LIVING SEMARANG/pictures/SuwZ0ZYd8veUrAAJvOtxKzRetCE9gjlPHUeLT9Ut.jpg', '2023-01-15 05:43:49', '2023-01-15 05:43:49'),
(34, 6, 'images/kost/PRIME KOST SMART LIVING SEMARANG/pictures/I3ADSAXXVFCSaVIjtbWNGF5Ha7OY3TXKMGThj5pr.jpg', '2023-01-15 05:43:52', '2023-01-15 05:43:52'),
(35, 6, 'images/kost/PRIME KOST SMART LIVING SEMARANG/pictures/SQjbRVKOMTMfxLawDKUGX9CfRD59zXEOpcyowW0p.jpg', '2023-01-15 05:43:54', '2023-01-15 05:43:54'),
(36, 7, 'images/kost/Graha Sekar Arum/cover/tFGHAwIQAFpH6df8nNAQj6oDg7ZpqCOcDOI2iYWn.jpg', '2023-01-15 05:45:34', '2023-01-15 05:45:34'),
(37, 7, 'images/kost/Graha Sekar Arum/pictures/rp9UKul4Ma026N3WgKGdaPixBehXR429pKy6IvOe.jpg', '2023-01-15 05:45:42', '2023-01-15 05:45:42'),
(38, 7, 'images/kost/Graha Sekar Arum/pictures/Rdfo1mIGS43j9ZfNG1SpWsI2wNOqZM2jGrHWQIep.jpg', '2023-01-15 05:45:44', '2023-01-15 05:45:44'),
(39, 7, 'images/kost/Graha Sekar Arum/pictures/IzC70VLIwqotNHoOC0GnivBON3wQqa20ZtfuNBNZ.jpg', '2023-01-15 05:45:48', '2023-01-15 05:45:48'),
(40, 8, 'images/kost/KOS PANTAI MENTARI/cover/iGW5JqsjBu0UlPpti8xqh8W8fgRppRkORI1sTN9f.jpg', '2023-01-15 05:46:50', '2023-01-15 05:46:51'),
(41, 8, 'images/kost/KOS PANTAI MENTARI/pictures/TCIWDzvqoOkL7EpkKYWlv00YWaVegVmPVxukKvT4.jpg', '2023-01-15 05:46:58', '2023-01-15 05:46:58'),
(42, 8, 'images/kost/KOS PANTAI MENTARI/pictures/YFvt5p95vwlGw9Ht8R9DpAxF1by5f0vTq3zDhXx7.jpg', '2023-01-15 05:47:01', '2023-01-15 05:47:01'),
(43, 8, 'images/kost/KOS PANTAI MENTARI/pictures/1wQYeYWUSOI9nw8STkJK3tLy79C0SBETntYO7UOj.jpg', '2023-01-15 05:47:03', '2023-01-15 05:47:03'),
(44, 8, 'images/kost/KOS PANTAI MENTARI/pictures/cKPG7zpyjWOXmM8TXaQUIN59S4KLWWiqoL37sH3G.jpg', '2023-01-15 05:47:07', '2023-01-15 05:47:07'),
(45, 9, 'images/kost/Kos Florence Tipe A/cover/2wVOOQQiqKTngHESS48sa39mo79ozuWtyN2KtDVb.jpg', '2023-01-15 05:48:07', '2023-01-15 05:48:07'),
(46, 9, 'images/kost/Kos Florence Tipe A/pictures/goyeOb75V1Y8rn4X8chXEOlFuroqpv1AZY2veyOR.jpg', '2023-01-15 05:48:14', '2023-01-15 05:48:14'),
(47, 9, 'images/kost/Kos Florence Tipe A/pictures/Y5Z3Ea1ch0v5UA8qJOgey1JFeoRIdAffOOfpmQmL.jpg', '2023-01-15 05:48:17', '2023-01-15 05:48:17'),
(48, 9, 'images/kost/Kos Florence Tipe A/pictures/fSlKgSn0sw09Fi1sQpObMvvMHkuiM2hTg4dqhKbH.jpg', '2023-01-15 05:48:20', '2023-01-15 05:48:20'),
(49, 9, 'images/kost/Kos Florence Tipe A/pictures/dNhupIp2Loz4wh9asWWIhVKJcsdrMniyLncU6rAy.jpg', '2023-01-15 05:48:22', '2023-01-15 05:48:22'),
(50, NULL, 'images/transactions/User 1/kost/Kost Rumah Antene Kebayoran Baru Jakarta Selatan/412tCZH3JmCujnj3WNuvi0tizouWM4ocuDOXubDn.png', '2023-01-16 01:54:06', '2023-01-16 01:54:06'),
(52, NULL, 'images/transactions/User 1/kost/KOST EXECUTIVE JAGAKARSA PASO CILANDAK JAKARTA SELATAN/Mhl2rS9Dun2Y0wXKnJAjAUgsgoOFKxqxNCCa5cNc.jpg', '2023-01-16 02:19:22', '2023-01-16 02:19:22');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('Pending','Accepted','Rejected') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 3, 'Accepted', '2023-01-16 02:06:45', '2023-01-16 02:09:49');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'Admin'),
(2, 'Owner'),
(3, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `kost_id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('Unpaid','Pending','Paid','Rejected') NOT NULL DEFAULT 'Pending',
  `mulai_stay` date NOT NULL,
  `akhir_stay` date NOT NULL,
  `total_price` bigint(20) NOT NULL,
  `bukti_pembayaran` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `user_id`, `kost_id`, `status`, `mulai_stay`, `akhir_stay`, `total_price`, `bukti_pembayaran`, `created_at`, `updated_at`) VALUES
(1, 3, 2, 'Paid', '2023-01-16', '2023-04-16', 2200000, 52, '2023-01-16 02:19:11', '2023-01-16 02:34:28');

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
  `alamat_id` bigint(20) UNSIGNED DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `alamat_id`, `phone`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Leo Leo', 'admin@admin.com', NULL, '$2y$10$U6xSgjM7kWN7VWiFffRbV.OCmMJq8ISpV4yo6RmYKdK.GIQwWJkE6', 1, '081231231231', 1, NULL, '2023-01-15 04:45:32', '2023-01-15 23:59:40'),
(2, 'Owner Jakarta', 'owner-jakarta@owner.com', NULL, '$2y$10$16tPooHUDeTz/z6r6yiaWOj5011/rGrZRAvXIofHw9F3H6Rv6H.ru', 2, '081231231231', 2, NULL, '2023-01-15 04:45:33', '2023-01-15 04:45:33'),
(3, 'User 1', 'user@user.com', NULL, '$2y$10$a.lkXds2QHQuEstwtchHu.LW4C1XWPd4WGWEwBC1WCrNMtm..wMIm', 2, '081231231231', 3, NULL, '2023-01-15 04:45:33', '2023-01-16 02:09:49'),
(4, 'Owner Semarang', 'owner-semarang@owner.com', NULL, '$2y$10$tOEuNpW.lLAZMeakM7arJuwZAioScNteivR0pFUgbwy.UfSWkRava', NULL, NULL, 2, NULL, '2023-01-15 05:39:20', '2023-01-15 05:39:20'),
(5, 'Owner Surabaya', 'owner-surabaya@owner.com', NULL, '$2y$10$AS3Yy7fdr.FSMSTzI3pN.eHdFSQYJ8CRhvpfLCEayUygRvv9b7xUS', NULL, NULL, 2, NULL, '2023-01-15 05:44:17', '2023-01-15 05:44:17'),
(6, 'User 2', 'user2@user.com', NULL, '$2y$10$1tTuLKfCwTR7WwTp2A8Dy.U/wdMQYJPsBC0GphiCUMxcykEd8aQGm', 13, '+6281330229959', 3, NULL, '2023-01-16 00:05:56', '2023-01-16 00:05:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alamat_details`
--
ALTER TABLE `alamat_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `alamat_details_kabupaten_id_foreign` (`kabupaten_id`);

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`),
  ADD KEY `albums_cover_id_foreign` (`cover_id`),
  ADD KEY `albums_kost_id_foreign` (`kost_id`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kabupatens`
--
ALTER TABLE `kabupatens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kabupatens_picture_id_foreign` (`picture_id`);

--
-- Indexes for table `kampuses`
--
ALTER TABLE `kampuses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kampuses_alamat_id_foreign` (`alamat_id`),
  ADD KEY `kampuses_logo_id_foreign` (`logo_id`);

--
-- Indexes for table `kosts`
--
ALTER TABLE `kosts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kosts_owner_id_foreign` (`owner_id`);

--
-- Indexes for table `kost_details`
--
ALTER TABLE `kost_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kost_details_kost_id_foreign` (`kost_id`),
  ADD KEY `kost_details_alamat_id_foreign` (`alamat_id`),
  ADD KEY `kost_details_cover_id_foreign` (`cover_id`);

--
-- Indexes for table `kost_facilities`
--
ALTER TABLE `kost_facilities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kost_facilities_kost_id_foreign` (`kost_id`),
  ADD KEY `kost_facilities_facility_id_foreign` (`facility_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- Indexes for table `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pictures_album_id_foreign` (`album_id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `requests_user_id_foreign` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_user_id_foreign` (`user_id`),
  ADD KEY `transactions_kost_id_foreign` (`kost_id`),
  ADD KEY `transactions_bukti_pembayaran_foreign` (`bukti_pembayaran`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_alamat_id_foreign` (`alamat_id`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alamat_details`
--
ALTER TABLE `alamat_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kabupatens`
--
ALTER TABLE `kabupatens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kampuses`
--
ALTER TABLE `kampuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kosts`
--
ALTER TABLE `kosts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `kost_details`
--
ALTER TABLE `kost_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `kost_facilities`
--
ALTER TABLE `kost_facilities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pictures`
--
ALTER TABLE `pictures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alamat_details`
--
ALTER TABLE `alamat_details`
  ADD CONSTRAINT `alamat_details_kabupaten_id_foreign` FOREIGN KEY (`kabupaten_id`) REFERENCES `kabupatens` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `albums`
--
ALTER TABLE `albums`
  ADD CONSTRAINT `albums_cover_id_foreign` FOREIGN KEY (`cover_id`) REFERENCES `pictures` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `albums_kost_id_foreign` FOREIGN KEY (`kost_id`) REFERENCES `kosts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `kabupatens`
--
ALTER TABLE `kabupatens`
  ADD CONSTRAINT `kabupatens_picture_id_foreign` FOREIGN KEY (`picture_id`) REFERENCES `pictures` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kampuses`
--
ALTER TABLE `kampuses`
  ADD CONSTRAINT `kampuses_alamat_id_foreign` FOREIGN KEY (`alamat_id`) REFERENCES `alamat_details` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `kampuses_logo_id_foreign` FOREIGN KEY (`logo_id`) REFERENCES `pictures` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `kosts`
--
ALTER TABLE `kosts`
  ADD CONSTRAINT `kosts_owner_id_foreign` FOREIGN KEY (`owner_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `kost_details`
--
ALTER TABLE `kost_details`
  ADD CONSTRAINT `kost_details_alamat_id_foreign` FOREIGN KEY (`alamat_id`) REFERENCES `alamat_details` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `kost_details_cover_id_foreign` FOREIGN KEY (`cover_id`) REFERENCES `pictures` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `kost_details_kost_id_foreign` FOREIGN KEY (`kost_id`) REFERENCES `kosts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `kost_facilities`
--
ALTER TABLE `kost_facilities`
  ADD CONSTRAINT `kost_facilities_facility_id_foreign` FOREIGN KEY (`facility_id`) REFERENCES `facilities` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `kost_facilities_kost_id_foreign` FOREIGN KEY (`kost_id`) REFERENCES `kosts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pictures`
--
ALTER TABLE `pictures`
  ADD CONSTRAINT `pictures_album_id_foreign` FOREIGN KEY (`album_id`) REFERENCES `albums` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `requests`
--
ALTER TABLE `requests`
  ADD CONSTRAINT `requests_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_bukti_pembayaran_foreign` FOREIGN KEY (`bukti_pembayaran`) REFERENCES `pictures` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `transactions_kost_id_foreign` FOREIGN KEY (`kost_id`) REFERENCES `kosts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `transactions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_alamat_id_foreign` FOREIGN KEY (`alamat_id`) REFERENCES `alamat_details` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
