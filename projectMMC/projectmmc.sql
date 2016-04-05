-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 05 Apr 2016 pada 12.33
-- Versi Server: 10.1.10-MariaDB
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectmmc`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `account`
--

CREATE TABLE `account` (
  `username` varchar(50) NOT NULL,
  `password` varchar(64) NOT NULL,
  `status` varchar(10) NOT NULL,
  `tgl_aktif` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `account`
--

INSERT INTO `account` (`username`, `password`, `status`, `tgl_aktif`) VALUES
('adit', '099847b3d25463886411103aa0f89bdcd2555d1e34d31c240c96841c12cf2477', 'umum', '2015-12-21'),
('adminsuper', '541e984103d4099bb8383050c56d511e733d85e6ab889a1c363ced651762eee0', 'admin', '2015-12-17'),
('adnan', '78fe3f05768ff3a95c74ffafe366cc3474022d925ad5593af733bf8ac1ab0de6', 'umum', '2015-12-29'),
('asd', '5fd924625f6ab16a19cc9807c7c506ae1813490e4ba675f843d5a10e0baacdb8', 'umum', '2016-04-05'),
('aselole', '2b9c15eb89efe0e0ad2c7b3279bf92247e35e4a92160ca8678d974e11a10ac6b', 'mahasiswa', '2015-12-11'),
('bontang', '65e84be33532fb784c48129675f9eff3a682b27168c0ea744b2cf58ee02337c5', 'umum', '2015-12-21'),
('donny', '1e6bf38be7457f3ab8730d73eaf9899ff6140838deddf320c9fc05ccbc778334', 'admin', '2015-12-02'),
('gabut', 'd8a928b2043db77e340b523547bf16cb4aa483f0645fe0a290ed1f20aab76257', 'umum', '2015-12-18'),
('lala', '5fd924625f6ab16a19cc9807c7c506ae1813490e4ba675f843d5a10e0baacdb8', 'umum', '2015-12-21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_darurat`
--

CREATE TABLE `daftar_darurat` (
  `id` int(10) NOT NULL,
  `no_ktp` int(10) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(1) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `gol_darah` varchar(2) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `deskripsi_penyakit` text NOT NULL,
  `tgl_periksa` date NOT NULL,
  `hari` varchar(10) NOT NULL,
  `jam` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `daftar_darurat`
--

INSERT INTO `daftar_darurat` (`id`, `no_ktp`, `nama_pasien`, `alamat`, `tgl_lahir`, `jenis_kelamin`, `no_telp`, `gol_darah`, `pekerjaan`, `deskripsi_penyakit`, `tgl_periksa`, `hari`, `jam`) VALUES
(1, 123123, 'asd', 'sooloo', '2015-12-03', 'L', '3123213', 'B', 'babu', 'sakit hati', '2015-12-13', 'minggu', '08.00-10.00'),
(2, 2143124, 'feasd', 'saaa', '2015-12-06', 'P', '24123', 'A', 'ibu', 'sakit kaki', '2015-12-12', 'sabtu', '18.00-20.00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_admin`
--

CREATE TABLE `data_admin` (
  `id_admin` int(3) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `alamat_admin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_admin`
--

INSERT INTO `data_admin` (`id_admin`, `username`, `nama_admin`, `alamat_admin`) VALUES
(1, 'donny', 'ferz', 'solo'),
(2, 'adminsuper', 'admin yeye', 'salatiga');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_dokter`
--

CREATE TABLE `data_dokter` (
  `id_dokter` varchar(3) NOT NULL,
  `nama_dokter` varchar(50) NOT NULL,
  `profesi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_dokter`
--

INSERT INTO `data_dokter` (`id_dokter`, `nama_dokter`, `profesi`) VALUES
('m01', 'Alex', 'dokter umum'),
('m02', 'Laila', 'dokter umum');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_mahasiswa_ums`
--

CREATE TABLE `data_mahasiswa_ums` (
  `nim_mahasiswa` varchar(8) NOT NULL,
  `nama_mahasiswa` varchar(50) NOT NULL,
  `alamat_mahasiswa` varchar(50) NOT NULL,
  `tgl_lahir_mahasiswa` date NOT NULL,
  `jenis_kelamin` varchar(1) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `fakultas` varchar(20) NOT NULL,
  `jurusan` varchar(20) NOT NULL,
  `angkatan` int(4) NOT NULL,
  `gol_darah` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_mahasiswa_ums`
--

INSERT INTO `data_mahasiswa_ums` (`nim_mahasiswa`, `nama_mahasiswa`, `alamat_mahasiswa`, `tgl_lahir_mahasiswa`, `jenis_kelamin`, `no_telp`, `fakultas`, `jurusan`, `angkatan`, `gol_darah`) VALUES
('m0513002', 'aditya', 'solo', '1995-11-03', 'L', '08564304950', 'mipa', 'biologi', 2013, 'A'),
('m0513003', 'adnan widya iswara', 'klaten', '1995-02-20', 'L', '08582139201', 'mipa', 'fisika', 2011, 'AB'),
('m0513022', 'doonny', 'solo', '2015-11-10', 'L', '085642224602', 'mipa', 'informatika', 2013, 'O'),
('m0513028', 'lutfi aristian febrianto', 'jakarta', '1994-10-11', 'L', '085730212502', 'mipa', 'matematika', 2012, 'B'),
('m0513040', 'rifqi imadudin irfan', 'bontang', '1995-05-08', 'L', '08581234321', 'mipa', 'farmasi', 2014, 'O');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pasien`
--

CREATE TABLE `data_pasien` (
  `id_pasien` int(5) NOT NULL,
  `no_ktp` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `alamat_pasien` varchar(50) NOT NULL,
  `tgl_lahir_pasien` date NOT NULL,
  `jenis_kelamin` varchar(1) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `gol_darah` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_pasien`
--

INSERT INTO `data_pasien` (`id_pasien`, `no_ktp`, `username`, `nama_pasien`, `alamat_pasien`, `tgl_lahir_pasien`, `jenis_kelamin`, `no_telp`, `pekerjaan`, `gol_darah`) VALUES
(2, '303019', 'bontang', 'booon', 'solo', '2010-06-09', 'L', '3030', 'designer', 'B'),
(4, '252530', 'aselole', 'doonny', 'solo', '2015-11-10', 'L', '085642224602', 'mahasiswa', 'O'),
(6, '1110002244223939', 'gabut', 'Gabut Master', 'salatiga', '1995-05-11', 'L', '085642123425', 'swasta', 'AB'),
(7, '12321312312', 'adit', 'Adityaa', 'Solo', '1989-12-10', 'L', '085642123425', 'swasta', 'A');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_mmc`
--

CREATE TABLE `jadwal_mmc` (
  `id_jadwal` varchar(5) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `jam` varchar(11) NOT NULL,
  `id_dokter` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwal_mmc`
--

INSERT INTO `jadwal_mmc` (`id_jadwal`, `hari`, `jam`, `id_dokter`) VALUES
('fri01', 'jumat', '08.00-10.00', 'm01'),
('fri02', 'jumat', '10.00-12.00', 'm01'),
('fri03', 'jumat', '12.00-14.00', 'm01'),
('fri04', 'jumat', '14.00-16.00', 'm02'),
('fri05', 'jumat', '16.00-18.00', 'm02'),
('fri06', 'jumat', '18.00-20.00', 'm02'),
('fri07', 'jumat', '20.00-22.00', 'm02'),
('mon01', 'senin', '08.00-10.00', 'm01'),
('mon02', 'senin', '10.00-12.00', 'm01'),
('mon03', 'senin', '12.00-14.00', 'm01'),
('mon04', 'senin', '14.00-16.00', 'm01'),
('mon05', 'senin', '16.00-18.00', 'm02'),
('mon06', 'senin', '18.00-20.00', 'm02'),
('mon07', 'senin', '20.00-22.00', 'm02'),
('sat01', 'sabtu', '08.00-10.00', 'm01'),
('sat02', 'sabtu', '10.00-12.00', 'm01'),
('sat03', 'sabtu', '12.00-14.00', 'm01'),
('sat04', 'sabtu', '14.00-16.00', 'm02'),
('sat05', 'sabtu', '16.00-18.00', 'm02'),
('sat06', 'sabtu', '18.00-20.00', 'm02'),
('sat07', 'sabtu', '20.00-22.00', 'm02'),
('sun01', 'minggu', '08.00-10.00', 'm01'),
('sun02', 'minggu', '10.00-12.00', 'm01'),
('sun03', 'minggu', '12.00-14.00', 'm01'),
('sun04', 'minggu', '14.00-16.00', 'm01'),
('sun05', 'minggu', '16.00-18.00', 'm02'),
('sun06', 'minggu', '18.00-20.00', 'm02'),
('sun07', 'minggu', '20.00-22.00', 'm02'),
('thu01', 'kamis', '08.00-10.00', 'm01'),
('thu02', 'kamis', '10.00-12.00', 'm01'),
('thu03', 'kamis', '12.00-14.00', 'm01'),
('thu04', 'kamis', '14.00-16.00', 'm01'),
('thu05', 'kamis', '16.00-18.00', 'm02'),
('thu06', 'kamis', '18.00-20.00', 'm02'),
('thu07', 'kamis', '20.00-22.00', 'm02'),
('tue01', 'selasa', '08.00-10.00', 'm01'),
('tue02', 'selasa', '10.00-12.00', 'm01'),
('tue03', 'selasa', '12.00-14.00', 'm01'),
('tue04', 'selasa', '14.00-16.00', 'm02'),
('tue05', 'selasa', '16.00-18.00', 'm02'),
('tue06', 'selasa', '18.00-20.00', 'm02'),
('tue07', 'selasa', '20.00-22.00', 'm02'),
('wed01', 'rabu', '08.00-10.00', 'm01'),
('wed02', 'rabu', '10.00-12.00', 'm01'),
('wed03', 'rabu', '12.00-14.00', 'm01'),
('wed04', 'rabu', '14.00-16.00', 'm01'),
('wed05', 'rabu', '16.00-18.00', 'm02'),
('wed06', 'rabu', '18.00-20.00', 'm02'),
('wed07', 'rabu', '20.00-22.00', 'm02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kartu_pasien`
--

CREATE TABLE `kartu_pasien` (
  `no_kartu` int(10) NOT NULL,
  `id_pasien` int(5) NOT NULL,
  `tgl_cetak` date NOT NULL,
  `count_cetak` int(3) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kartu_pasien`
--

INSERT INTO `kartu_pasien` (`no_kartu`, `id_pasien`, `tgl_cetak`, `count_cetak`, `status`) VALUES
(2147483647, 2, '2015-12-12', 8, 'memesan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sistem_pendaftaran`
--

CREATE TABLE `sistem_pendaftaran` (
  `id_pendaftaran` int(10) NOT NULL,
  `no_kartu` int(10) NOT NULL,
  `id_jadwal` varchar(5) NOT NULL,
  `id_admin` int(3) NOT NULL,
  `deskripsi_penyakit` text NOT NULL,
  `tgl_daftar` date NOT NULL,
  `no_antrian` int(3) NOT NULL,
  `status_pendaftaran` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sistem_pendaftaran`
--

INSERT INTO `sistem_pendaftaran` (`id_pendaftaran`, `no_kartu`, `id_jadwal`, `id_admin`, `deskripsi_penyakit`, `tgl_daftar`, `no_antrian`, `status_pendaftaran`) VALUES
(5, 2147483647, 'tue07', 1, 'perut sakit, mual', '2015-12-08', 3, 'FINISH'),
(12, 2147483647, 'sat01', 1, 'sakit kepala, badan panas', '2015-12-12', 3, 'ACCEPTED'),
(20, 2147483647, 'sun01', 1, 'hati rasanya sesak', '2015-12-13', 1, 'REJECTED'),
(21, 2147483647, 'sun02', 1, 'tubuh meriang', '2015-12-13', 2, 'WAITING'),
(22, 2147483647, 'sat01', 1, 'sakit hati', '2015-12-12', 7, 'FINISH'),
(23, 2147483647, 'tue04', 1, 'pilek, batuk dan panas', '2015-12-01', 1, 'FINISH'),
(25, 2147483647, 'sun02', 1, 'sakit mata', '2015-12-20', 1, 'FINISH'),
(26, 2147483647, 'wed01', 1, 'sakit kutil', '2015-12-16', 1, 'WAITING'),
(32, 2147483647, 'tue01', 1, 'tubuh meriang', '2015-12-08', 2, 'WAITING'),
(34, 2147483647, 'sat06', 1, 'sakit gigi', '2015-12-26', 1, 'WAITING');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `daftar_darurat`
--
ALTER TABLE `daftar_darurat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_admin`
--
ALTER TABLE `data_admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `data_dokter`
--
ALTER TABLE `data_dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `data_mahasiswa_ums`
--
ALTER TABLE `data_mahasiswa_ums`
  ADD PRIMARY KEY (`nim_mahasiswa`);

--
-- Indexes for table `data_pasien`
--
ALTER TABLE `data_pasien`
  ADD PRIMARY KEY (`id_pasien`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `jadwal_mmc`
--
ALTER TABLE `jadwal_mmc`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `id_dokter` (`id_dokter`);

--
-- Indexes for table `kartu_pasien`
--
ALTER TABLE `kartu_pasien`
  ADD PRIMARY KEY (`no_kartu`),
  ADD KEY `id_pasien` (`id_pasien`);

--
-- Indexes for table `sistem_pendaftaran`
--
ALTER TABLE `sistem_pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`),
  ADD KEY `id_admin` (`id_admin`),
  ADD KEY `id_jadwal` (`id_jadwal`),
  ADD KEY `no_kartu` (`no_kartu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_darurat`
--
ALTER TABLE `daftar_darurat`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `data_admin`
--
ALTER TABLE `data_admin`
  MODIFY `id_admin` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `data_pasien`
--
ALTER TABLE `data_pasien`
  MODIFY `id_pasien` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `sistem_pendaftaran`
--
ALTER TABLE `sistem_pendaftaran`
  MODIFY `id_pendaftaran` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `data_admin`
--
ALTER TABLE `data_admin`
  ADD CONSTRAINT `data_admin_ibfk_1` FOREIGN KEY (`username`) REFERENCES `account` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `data_pasien`
--
ALTER TABLE `data_pasien`
  ADD CONSTRAINT `data_pasien_ibfk_1` FOREIGN KEY (`username`) REFERENCES `account` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `jadwal_mmc`
--
ALTER TABLE `jadwal_mmc`
  ADD CONSTRAINT `jadwal_mmc_ibfk_1` FOREIGN KEY (`id_dokter`) REFERENCES `data_dokter` (`id_dokter`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kartu_pasien`
--
ALTER TABLE `kartu_pasien`
  ADD CONSTRAINT `kartu_pasien_ibfk_1` FOREIGN KEY (`id_pasien`) REFERENCES `data_pasien` (`id_pasien`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `sistem_pendaftaran`
--
ALTER TABLE `sistem_pendaftaran`
  ADD CONSTRAINT `sistem_pendaftaran_ibfk_4` FOREIGN KEY (`id_jadwal`) REFERENCES `jadwal_mmc` (`id_jadwal`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sistem_pendaftaran_ibfk_5` FOREIGN KEY (`id_admin`) REFERENCES `data_admin` (`id_admin`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `sistem_pendaftaran_ibfk_6` FOREIGN KEY (`no_kartu`) REFERENCES `kartu_pasien` (`no_kartu`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
