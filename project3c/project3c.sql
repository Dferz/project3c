-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 28 Jan 2016 pada 12.30
-- Versi Server: 5.5.32
-- Versi PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `project3c`
--
CREATE DATABASE IF NOT EXISTS `project3c` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `project3c`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `username` varchar(50) NOT NULL,
  `password` varchar(64) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `account`
--

INSERT INTO `account` (`username`, `password`) VALUES
('mayaananta', '3f2229c2b628a83c1caf1f3e4eb3fd4a42285c0029019d4aafa89a8fbcf9bd33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `posting`
--

CREATE TABLE IF NOT EXISTS `posting` (
  `judul` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `nama_gambar` text NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`judul`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `posting`
--

INSERT INTO `posting` (`judul`, `deskripsi`, `nama_gambar`, `waktu`) VALUES
('adasd', 'egaeasd', 'centang.png', '2016-01-28 10:17:26'),
('asd', 'testes', '', '2016-01-28 10:15:46'),
('asdasdasd', 'keoakowd', 'Logo 3C.jpg', '2016-01-28 10:48:15'),
('asdd', 'Sebuah paragraf biasanya terdiri dari pikiran, gagasan, atau ide pokok yang dibantu dengan kalimat pendukung. Paragraf non-fiksi biasanya dimulai dengan umum dan bergerak lebih spesifik sehingga dapat memunculkan argumen atau sudut pandang. Setiap paragraf berawal dari apa yang datang sebelumnya dan berhenti untuk dilanjutkan. Paragraf umumnya terdiri dari tiga hingga tujuh kalimat semuanya tergabung dalam pernyataan berparagraf tunggal. Dalam<a href="https://id.wikipedia.org/wiki/Fiksi" title="Fiksi">fiksi</a><a href="https://id.wikipedia.org/wiki/Prosa" title="Prosa">prosa</a>, contohnya; tapi hal ini umum bila paragraf prosa terjadi di tengah atau di akhir. Sebuah paragraf dapat sependek satu kata atau berhalaman-halaman, dan dapat terdiri dari satu atau banyak kalimat. Ketika dialog dikutip dalam fiksi, paragraf baru digunakan setiap kali orang yang dikutip berganti.', '12620552_10201029228770959_177145898_o.jpg', '2016-01-28 09:33:14'),
('Bladder Cancer', '<p>A bladder cancer diagnosis is\r\nlife-changing. At Cancer Treatment Centers of America? (CTCA), we?re here to\r\nhelp you and your loved ones make a more informed treatment decision. We\r\nencourage you to explore this area to learn more about the disease, what lies\r\nahead and your treatment options.</p>\r\n\r\n<p>Hear\r\ninspiring patient stories. Learn how our doctors create a personalized\r\ntreatment plan for your diagnosis and needs. And if you have any questions\r\nalong the way, please don?t hesitate to contact our team of cancer experts.\r\nWe?re here to help you make sense of it all.</p>', 'HEAD-KONTAK.png', '2016-01-28 10:15:34'),
('CHARITY NIGHT', 'Charity Night merupakan kegiatan rutin setiap bulan yang dilakukan komunitas Childhood Cancer Care. Kegiatan rutin ini bertujuan untuk menggalang dana untuk membiayai program support children with cancer. Kegiatan ini berlangsung sejak bulan Mei tahun 2014 sampai sekarang ini,pada awalnya kegiatan ini hanya berada di satu caf? saja yaitu Tiga Tjeret Caf? pada hari sabtu pertama setiap bulan,tetapi karena berjalannya waktu sampai saat ini kegiatan ini juga diadakan di Play Ground Caf? pada minggu ketiga. Charity night bukan hanya sekedar malam penggalangan dana berupa pendonasian melalui merchandise dan kebutuhan untuk anak dengan kanker saja tetapi melalui kegiatan ini kami juga menyelipkan mini sosialisasi tentang kanker anak dan komunitas Childhood Cancer Care sehingga masyarakat luas mengetahui bahwa ada kanker pada anak,mengetahui tanda-tandanya dan juga mengenal komunitas 3C.\r\n', '1.jpg', '2016-01-24 11:45:21'),
('CHILDREN CANCER''S DAY', 'Komunitas Childhood Cancer Care lahir pada 15 Februari 2013 bertepatan dengan hari kanker anak Indonesia, sehingga setiap tanggal tersebut kami merayakan hari kanker anak dan hari ulang tahun komunitas kami sehingga kegiatan ini rutin di peringati setiap tahunnya. Sampai saat ini kegiatan ini telah berlangsung sebanyak dua kali,tahun pertama berlangsung pada 16 Februari 2014 di Car Free Day, untuk memperingatinya kami mengadakan pawai (lari dan odong-odong) dari Gladag dan finish di depan Sriwedari untuk menyerukan kepada masyarakat umum bahwa hari itu adalah hari kanker anak nasional dan juga mengajak pengunjung peduli dengan anak dengan kanker, di garis finish kami juga menyediakan kain panjang yang dapat pengunjung isi dengan motivasi dan tanda tangan pengunjung car free day sebagai wujud mereka peduli anak-anak dengan kanker,kami juga membagikan 1000 pita emas yang merupakan lambang kanker pada anak dan hal ini bertujuan untuk memberitahu kepada masyarakat luas bahwa lambang kanker pada anak adalah pita emas dan turut mengajak mereka untuk peduli dengan mereka karena ?they can?t beat the cancer alone?.', '2.jpeg', '2016-01-24 11:46:42'),
('cobaa', '<p>A kidney cancer diagnosis is life-changing. At Cancer Treatment Centers of America? (CTCA), we?re here to help you and your loved ones make a more informed treatment decision. We encourage you to explore this area to learn more about the disease, what lies ahead and your treatment options.</p><p>Hear inspiring patient stories. Learn how our doctors create a personalized treatment plan for your diagnosis and needs. And if you have any questions along the way, please don?t hesitate to contact our team of cancer experts. We?re here to help you make sense of it all.</p>', '12630690_10201029244651356_387558653_o.jpg', '2016-01-28 10:17:00'),
('eee', 'gagaga', 'uns-active.png', '2016-01-28 10:18:39'),
('haha', 'Pada suatu hari di sebuah keluarga kecil, ada seorang ibu yang memiliki dua orang anak. Sebagaimana adik kakak pada umumnya, mereka kadang tak akur dan tak mau mengalah satu sama lain. Mereka selalu ingin mendapatkan keinginanya lebih dari yang satunya. Ketika yang satu memiliki sesuatu, maka yang satu juga ingin memilikinya juga. Sifat iri dan serakah di miliki oleh mereka berdua.<br><br>Sang ibu tahu akan sifat buruk kedua anaknya. Tapi karena mereka masih kecil, sang ibu tak ingin memarahi mereka. Sang ibu mencari ide yang dapat menyampaikan pesan moral tentang jeleknya sifat egois dan tamak. Akhrnya ibu yang baik hati itu menemukan sebuah ide yang cukup brilian. Pada suatu hari, ibu itu pergi ke pasar. Dia membeli setoples kacang. Karena dia tahu, kedua anaknya sangat menyukai kacang.Setelah sampai di rumah, dia memangggil kedua anaknya dan menunjukan setoples kacang yang dia bawa. Melihat kacang kesukaan mereka, kedua anak itu merasa senang sekali. Lalu muncul nita tamak dan serakahdi hati mereka untuk dapat memiliki kacang itu sendiri. Tapi sang ibu tahu akan hal itu. Oleh karena itu, sang ibu kemudian berkata. ? Ambilah kacang ini secara bergantian, dan ingat jangan rebutan?. Kata sang ibu.<br>Lalu sang ibu menyuruh anak pertama yang lebih tua untuk mengambil. Anak itu pun memasukan tanganya ke dalam toples kacang tadi. Karena ingin mendapatkan bagian yang banyak, dia menggenggam kacang itu sebanyak-banyaknya semampu yang dapat dia genggam. Tapi sial, ketika ingin mengeluarkan tanganya, tanganya tersangkut. Lubang toples yang kecil tak muat untuk genggaman tanganya yang cukup besar.Anak itu tetap tak mau menyerah. Dia tetap memaksakan untuk menarik tanganya keluar. Tapi sial, karena dia menarik terlalu kuat, toples kacang itu ikut terpental dan pecah. Hingga semua kacang yang ada berserakan di lantai dan tak bisa lagi di makan karena kotor. Kedua anak itu pun memasang raut wajah kecewa. Dan menyalahkan satu sama lain. Melihat anaknya berseteru, sang ibu kemudian menghampiri mereka.<br>?Itulah akibatnya jika kalian bersifat tamak. Kalian tak akan mendapat apa-apa kecuali kekecewaan dan penyesalan. Coba tadi kalian mau saling mengalah dan berbagi serta tidak bersifat serakah, tentu kita semua masih dapat memakan kacang itu?. Kata sang ibu. Mendengar kata-kata sang ibu tersebut, kedua anak itu terdiam dan mulai menyadari kesalahan mereka selama ini.<br>Hikmah yang dapat kita petik dari kisah ini adalah, keserakahan selalu menghasilkan perseteruan satu sama lain. Dan keserakahan selalu mendatangkan penyesalan di kemudian hari.', 'Desert.jpg', '2016-01-28 10:20:37'),
('haloo', 'asdasd', 'CERT_001.jpg', '2016-01-28 10:17:43'),
('lol', 'Musim kemarau panjang semakin menjadi, hingga kekeringan terjadi di mana-mana. Banyak sumber air yang telah mengering. Hingga membuat para hewan menjadi putus asa. Pada suatu hari, para hewan memutuskan untuk pindah mencari tempat baru yang memiliki sumber air yang masih mengalir. Mereka sengaja tidak memberi tahu burung gagak karena mereka ingin membiarkan burung gagak yang mereka benci mati kehausan. Ahirnya, pada suatu malam para hewan berbondong-nondong pergi dengan diam-diam ketika si burung gagak tengah asik tidur di sarangnya.<br><br>Pada ke esokan harinya, si burung gagak merasa bingung. Karena hanya tinggal dia sendiri di tempat itu. Hewan-hewan yang lain telah tak ada di sana, dan dia tak tahu kemana mereka pergi. Ahirnya dia memutuskan untuk terbang tak tentu arah untuk mencari kemana teman-temanya pergi. Matahari yang panas menyengat dan rasa haus yang sangat menyiksa, membuat burung gagak itu kelelahan dan memutuskan turun untuk berteduh di bawah sebuah pohon. Rasa haus yang di rasakan semakin menjadi, hingga mendorongnya untuk berusaha mencari air. Setelah lama dia berputar-putar mengitari tempat itu, dia tak menemukan ada satu pun sumber air yang ada. Ketika dia hampir menyerah, burung gagak itu menemukan sebuah kendi yang berisi air di dalamnya.', 'Lighthouse.jpg', '2016-01-28 10:21:17'),
('NATIONAL INDEPENDENT''S DAY', 'Setiap tahun Indonesia merayakan hari lahirnya kemerdekaan yaitu pada tanggal 17 Agustus. Selain upacara, tradisi merayakan hari kemerdekaan di Indonesia bermacam-macam. Salah satunya adalah lomba anak-anak. Tidak ketinggalan anak-anak dengan kanker (Fighters) di Maya Ananta RSUD Dr. Moewardi juga turut mengikuti tradisi ini. Ini sudah kali kedua diadakan lomba tujuhbelasan di Maya Ananta. Acara ini diharapkan agar para Fighters juga merasakan meriahnya lomba 17 an seperti di kampung halaman. Sebelum acara dimulai, Volunteers menghias Ruang Bermain Maya Ananta dengan hiasan ala-tujuhbelasan yang serba merah putih.\r\n\r\nAcara dimulai pukul 09.30 pagi. Adik-adik Fighters yang ditemain para orang tua sudah berkumpul untuk bersiap-siap mengikuti lomba 17-an tahun ini. Acara dibuka dengan pembukaan oleh Kak Tania sebagai ketua 3C dan kak Sheren sebagai ketua acara ini. Lomba ini diikuti adik-adik Fighters dari berbagai usia, setelah mengelompokkan menjadi beberapa rentang usia, lomba pertama dimulai yaitu memasukkan bola ke dalam keranjang. Walaupun bolanya banyak yang meleset mereka tetap terus mencoba.Setelah itu, dilanjutkan lomba yang kedua yaitu memasukkan pensil ke dalam botol. Lomba semakin seru dan meriah.\r\n\r\nSetelah mengikuti dua lomba yang melelahkan, saatnya lomba makan donat! Mereka semakin antusias mengikuti perlombaan. Selain Fighters, Volunteers juga ditantang untuk ikut perlombaan ini. Fighters dengan semangat menyoraki kami para Volunteers untuk menghabiskan donat tersebut.', '3.jpg', '2016-01-24 11:47:23'),
('testes', 'eqqe', 'DIES-40-UNS.jpg', '2016-01-28 10:17:58');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
