-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Jun 2023 pada 05.57
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `belajar_laravel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `class`
--

CREATE TABLE `class` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class` varchar(255) NOT NULL,
  `teacher_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `class`
--

INSERT INTO `class` (`id`, `class`, `teacher_id`, `created_at`, `updated_at`) VALUES
(1, '11', 1, '2023-03-16 21:13:30', '2023-03-16 21:13:30'),
(2, '12', 2, '2023-03-16 21:13:30', '2023-03-16 21:13:30'),
(3, '13', 3, '2023-03-16 21:13:30', '2023-03-16 21:13:30'),
(4, '14', 4, '2023-03-16 21:13:30', '2023-03-16 21:13:30'),
(5, '15', 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `extracurriculars`
--

CREATE TABLE `extracurriculars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `extracurriculars`
--

INSERT INTO `extracurriculars` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'football', NULL, NULL),
(2, 'hockey', NULL, NULL),
(3, 'basket', NULL, NULL),
(4, 'volley', NULL, NULL),
(5, 'badminton', NULL, NULL),
(6, 'swimming', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `formstudents`
--

CREATE TABLE `formstudents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(100) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `asal_sekolah` varchar(100) NOT NULL,
  `image` varchar(500) NOT NULL,
  `no_pendaftaran` varchar(10000) NOT NULL,
  `hasil_peserta` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `formstudents`
--

INSERT INTO `formstudents` (`id`, `nama`, `ttl`, `alamat`, `asal_sekolah`, `image`, `no_pendaftaran`, `hasil_peserta`, `created_at`, `updated_at`) VALUES
(52, 'WIZARD', 'PEKANBARU, 01-01-2001', 'JL.RIAU NO.01', 'SMP N 123', 'WIZARD-1686731380.jpg', '00001', 11, '2023-06-14 01:29:40', '2023-06-14 19:26:45'),
(53, 'Anonymous', 'PEKANBARU, 01-01-2001', 'JL.RIAU NO.02', 'SMP N 321', 'Anonymous-1686796529.jpg', '00002', 12, '2023-06-14 19:35:29', '2023-06-18 20:50:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil`
--

CREATE TABLE `hasil` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hasil` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `hasil`
--

INSERT INTO `hasil` (`id`, `hasil`, `created_at`, `updated_at`) VALUES
(10, 'Menunggu Hasil...', '2023-05-29 02:28:51', '2023-05-29 02:28:51'),
(11, 'Lulus', '2023-05-29 02:28:51', '2023-05-29 02:28:51'),
(12, 'Tidak Lulus', '2023-05-29 02:28:51', '2023-05-29 02:28:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id`, `class`, `created_at`, `updated_at`) VALUES
(27, '11', '2023-05-24 00:51:22', '2023-05-24 00:51:22'),
(28, '12', '2023-05-25 21:25:56', '2023-05-25 21:25:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_03_15_015159_create_students_table', 2),
(7, '2023_03_15_021002_add_gender_column_to_students_table', 3),
(9, '2023_03_15_021944_change_gender_attributes_in_students_table', 4),
(10, '2023_03_15_024139_create_class_table', 4),
(12, '2023_03_15_024849_add_class_id_column_to_students_table', 5),
(14, '2023_03_15_074541_add_unique_rule_in_class_table', 6),
(16, '2023_03_18_035801_create_extracurriculars_table', 7),
(18, '2023_03_18_044654_create_student_extracurricular_table', 8),
(19, '2023_03_20_074248_create_teachers_table', 9),
(20, '2023_03_24_035334_add_teacher_id_column_to_class_table', 10),
(22, '2023_03_30_040321_add_soft_delete_column_to_students_table', 11),
(23, '2023_03_31_084142_create_roles_table', 12),
(24, '2023_03_31_085311_add_role_id_column_to_users_table', 13),
(25, '2023_04_17_073813_create_kelas_table', 14),
(29, '2023_04_17_074011_create_siswa_table', 15),
(60, '2023_04_18_031252_add_class_id_column_to_siswa_table', 16),
(61, '2023_05_20_041810_create_formstudents_table', 16),
(62, '2023_05_23_040818_create_code_table', 16),
(64, '2023_05_26_024336_create_hasil_table', 17),
(65, '2023_05_26_024637_add_hasil_peserta_column_to_formstudents_table', 18),
(66, '2023_05_26_084644_create_hasil_table', 19);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nis` varchar(20) NOT NULL,
  `kelas` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `nama`, `nis`, `kelas`, `created_at`, `updated_at`) VALUES
(22, 'aaaa', '766', 27, '2023-05-25 21:25:49', '2023-05-25 21:25:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(100) NOT NULL,
  `gender` varchar(1) DEFAULT NULL,
  `nis` varchar(10) NOT NULL,
  `class_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `students`
--

INSERT INTO `students` (`id`, `nama`, `gender`, `nis`, `class_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Steve Warden', 'L', '216', 4, '2023-03-16 00:48:48', '2023-03-29 22:13:00', NULL),
(2, 'Pete Runolfsson', 'P', '766', 1, '2023-03-16 00:48:48', '2023-03-27 23:22:23', NULL),
(3, 'Misty Steuber II', 'P', '317', 2, '2023-03-16 00:48:48', '2023-03-16 00:48:48', NULL),
(4, 'Brianne Hauck', 'L', '416', 1, '2023-03-16 00:48:48', '2023-03-16 00:48:48', NULL),
(5, 'Efrain Hettinger', 'L', '111', 3, '2023-03-16 00:48:48', '2023-03-16 00:48:48', NULL),
(17, 'Annabell Purdy I', 'P', '23', 4, '2023-03-30 00:57:09', '2023-03-30 00:57:09', NULL),
(18, 'Betty Haley', 'L', '125', 1, '2023-03-30 00:57:09', '2023-03-30 00:57:09', NULL),
(19, 'King Beahan', 'L', '922', 1, '2023-03-30 00:57:09', '2023-03-30 00:57:09', NULL),
(20, 'Gwen Rempel', 'P', '678', 4, '2023-03-30 00:57:09', '2023-03-30 00:57:09', NULL),
(21, 'Mr. Herminio Maggio', 'P', '358', 1, '2023-03-30 00:57:09', '2023-03-30 00:57:09', NULL),
(22, 'Nicola Adams', 'L', '792', 2, '2023-03-30 00:57:09', '2023-03-30 00:57:09', NULL),
(23, 'Mr. Erin Goyette MD', 'L', '20', 3, '2023-03-30 00:57:09', '2023-03-30 00:57:09', NULL),
(24, 'Prof. Anika Rempel', 'P', '64', 1, '2023-03-30 00:57:09', '2023-03-30 00:57:09', NULL),
(25, 'Mckenna Abernathy', 'P', '294', 1, '2023-03-30 00:57:09', '2023-03-30 00:57:09', NULL),
(26, 'Makenna Weissnat', 'L', '782', 2, '2023-03-30 00:57:09', '2023-03-30 00:57:09', NULL),
(27, 'Ed Douglas', 'L', '560', 2, '2023-03-30 00:57:09', '2023-03-30 00:57:09', NULL),
(28, 'Loraine Rowe', 'L', '703', 2, '2023-03-30 00:57:09', '2023-03-30 00:57:09', NULL),
(29, 'Alexis Steuber Jr.', 'P', '973', 4, '2023-03-30 00:57:09', '2023-03-30 00:57:09', NULL),
(30, 'Eunice Morissette', 'L', '97', 4, '2023-03-30 00:57:09', '2023-03-30 00:57:09', NULL),
(31, 'Dr. Vena Koepp PhD', 'P', '167', 2, '2023-03-30 00:57:09', '2023-03-30 00:57:09', NULL),
(32, 'Trudie Hermiston', 'L', '829', 4, '2023-03-30 00:57:09', '2023-03-30 00:57:09', NULL),
(33, 'Jarvis Rolfson', 'P', '286', 4, '2023-03-30 00:57:09', '2023-03-30 00:57:09', NULL),
(34, 'Dr. Edwardo Nicolas MD', 'P', '898', 2, '2023-03-30 00:57:09', '2023-03-30 00:57:09', NULL),
(35, 'Mrs. Treva Wilderman', 'P', '22', 1, '2023-03-30 00:57:09', '2023-03-30 00:57:09', NULL),
(36, 'Chase Hilpert Sr.', 'P', '439', 2, '2023-03-30 00:57:09', '2023-03-30 00:57:09', NULL),
(37, 'Jazlyn Kohler', 'P', '761', 5, '2023-03-30 01:43:37', '2023-03-30 01:43:37', NULL),
(38, 'Kaela Nicolas', 'P', '574', 5, '2023-03-30 01:43:37', '2023-03-30 01:43:37', NULL),
(39, 'Darron Labadie', 'L', '491', 4, '2023-03-30 01:43:37', '2023-03-30 01:43:37', NULL),
(40, 'Norval Steuber', 'L', '818', 5, '2023-03-30 01:43:37', '2023-03-30 01:43:37', NULL),
(41, 'Linnie Hilpert', 'L', '505', 5, '2023-03-30 01:43:37', '2023-04-03 22:52:43', '2023-04-03 22:52:43'),
(42, 'AAA', 'L', '1279217', 1, '2023-05-25 01:13:23', '2023-05-25 01:13:23', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `student_extracurricular`
--

CREATE TABLE `student_extracurricular` (
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `extracurriculer_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `student_extracurricular`
--

INSERT INTO `student_extracurricular` (`student_id`, `extracurriculer_id`) VALUES
(4, 1),
(5, 6),
(1, 4),
(2, 2),
(3, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `teachers`
--

INSERT INTO `teachers` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'naruto', NULL, NULL),
(2, 'sasuke', NULL, NULL),
(3, 'sakura', NULL, NULL),
(4, 'kakashi', NULL, NULL),
(5, 'konohamaru', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(225) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@email.com', NULL, '$2y$10$.9jvUTKGa8L/Zyix2Bq/6.w9CM64xhxiQnjXuk8RmCKc6Ctu.tpgi', NULL, NULL, NULL),
(2, 'Teacher', 'teacher@email.com', NULL, '$2y$10$9dEIlk2QNGQoiA1fG6aQseRod7iwvm64Vr5oHej/4gP.JyE1csJlu', NULL, NULL, NULL),
(3, 'Student', 'student@email.com', NULL, '$2y$10$EgDno6kZCluW136GbYxeFORTFssSFNgRIIDmmka78DsL4g08035Su', NULL, NULL, NULL),
(16, 'WIZARD', 'wizard@email.com', NULL, '$2y$10$C.wPQykyLsOZEorKd4hqIupLJI3Kuh14M3ivUSx5z16n6hKhqEPuO', NULL, '2023-06-07 21:19:59', '2023-06-07 21:19:59');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `class_class_unique` (`class`),
  ADD KEY `class_teacher_id_foreign` (`teacher_id`);

--
-- Indeks untuk tabel `extracurriculars`
--
ALTER TABLE `extracurriculars`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `formstudents`
--
ALTER TABLE `formstudents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `formstudents_hasil_peserta_foreign` (`hasil_peserta`);

--
-- Indeks untuk tabel `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `siswa_kelas_foreign` (`kelas`);

--
-- Indeks untuk tabel `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `students_class_id_foreign` (`class_id`);

--
-- Indeks untuk tabel `student_extracurricular`
--
ALTER TABLE `student_extracurricular`
  ADD KEY `student_extracurricular_student_id_foreign` (`student_id`),
  ADD KEY `student_extracurricular_extracurriculer_id_foreign` (`extracurriculer_id`);

--
-- Indeks untuk tabel `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `class`
--
ALTER TABLE `class`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `extracurriculars`
--
ALTER TABLE `extracurriculars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `formstudents`
--
ALTER TABLE `formstudents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT untuk tabel `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT untuk tabel `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `class`
--
ALTER TABLE `class`
  ADD CONSTRAINT `class_teacher_id_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`);

--
-- Ketidakleluasaan untuk tabel `formstudents`
--
ALTER TABLE `formstudents`
  ADD CONSTRAINT `formstudents_hasil_peserta_foreign` FOREIGN KEY (`hasil_peserta`) REFERENCES `hasil` (`id`);

--
-- Ketidakleluasaan untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_kelas_foreign` FOREIGN KEY (`kelas`) REFERENCES `kelas` (`id`);

--
-- Ketidakleluasaan untuk tabel `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_class_id_foreign` FOREIGN KEY (`class_id`) REFERENCES `class` (`id`);

--
-- Ketidakleluasaan untuk tabel `student_extracurricular`
--
ALTER TABLE `student_extracurricular`
  ADD CONSTRAINT `student_extracurricular_extracurriculer_id_foreign` FOREIGN KEY (`extracurriculer_id`) REFERENCES `extracurriculars` (`id`),
  ADD CONSTRAINT `student_extracurricular_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
