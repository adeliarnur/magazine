-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21 Mei 2019 pada 08.41
-- Versi Server: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `creatingtool`
--

CREATE TABLE `creatingtool` (
  `id_CT` int(11) NOT NULL,
  `judul_CT` varchar(12) NOT NULL,
  `bahan_CT` varchar(100) NOT NULL,
  `alat_CT` varchar(100) NOT NULL,
  `dir_img_CT` varchar(100) NOT NULL,
  `deskr` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `creatingtool`
--

INSERT INTO `creatingtool` (`id_CT`, `judul_CT`, `bahan_CT`, `alat_CT`, `dir_img_CT`, `deskr`) VALUES
(2, 'Sedotan filt', 'Sedotan', 'Filter Air', 'img/CT/9a14c861262b71e58e8ecef61dbd0199.jpg', 'Sedotan ini biasa digunakan oleh para backpacker yang sedang berpetualang ke daerah sulit air bersih. Nah, karena fungsinya itu, tentu alat ini sangat cocok digunakan pasca bencana. Karena biasanya saat itu air bersih akan sulit ditemukan. Sedotan ini banyak dijual bebas tentunya dengan kualitas berbeda tergantung harga.'),
(3, 'Penampung Ai', 'Mantel', '-', 'img/CT/$(KGrHqNHJBsFIm+9+y5FBSOOlDh0VQ~~60_35.JPG', 'Mantel tidak hanya bermanfaat melindung tas dan diri kita dari hujan. Mantel yang lebih besar bisa digunakan untuk membuat tenda darurat (bivak) , juga bisa digunakan sebagai wadah menampung air .'),
(4, 'Markah Jalan', 'Selotip dan Lakban', '-', 'img/CT/29793474_a62c6b27-c66e-43a0-a298-cdb7e18fad6a_700_525.jpg', 'Jangan kira lakban atau selotip (duct tape) hanya digunakan buat jilid makalah atau menempelin kardus. Lakban juga berfungsi untuk suvive. Potongan - potongan lakban bisa digunakan sebagai markah jalan  agar tidak tersesat atau  penanda supaya orang tahu keberadaan kita. Lakban juga bisa digunakan untuk menambal peralatan kita yang bocor seperti termos atau tempat yang terbuat dari plastik. Lakban juga digunakan untuk pemancing api , lakban / selotip sepanjang 6 inchi cukup untuk menghidupkan api hingga satu menit.  Selain itu lakban juga bermanfaat untuk menutup koyak pada baju hingga menjadi perban darurat untuk patah tangan hingga terluka .'),
(5, 'Tali Pancing', 'Tali Paracord', '-', 'img/CT/tali-paracord-7-core-31-meter-black-4.jpg', 'Tali paracord merupakan tali nilon yang biasa digunakan untuk penahan tali parasut juga dijadikan gelang atau kalung untuk anak-anak muda. Lebih dari itu paracord mempunyai fungsi yang luar biasa. Paracord bisa dirajut menjadi jaring ikan, tali tenda , jebakan , hingga tali pancing. Tali Paracord juga mampu menahan beban hingga 500 pound.  Didalam satu lembar paracord terdapat tujuh buah tali yang lebih kecil dan berguna untuk dibuat sebagai jala atau tali yang lebih panjang . Paracord juga digunakan untuk memancing api dan bisa dirajut keberbagai bentuk .\r\nBanyak kerajinan dari rajutan Paracord yang dijual dipasaran , seperti Tas , Gelang , Tempat Pluit pada pramuka dan sebagainya. Padahal sejak perang dunia II paracord digunakan tentara untuk melakukan kegiatan survival dihutan.'),
(6, 'Memotong Kay', 'Gergaji Kawat', '-', 'img/CT/.jpg', 'Selain lebih ringan dan mudah , gergaji kawan mampu mewakili gergaji tangan untuk menggergaji kayu yang berukuran kecil dan besar. Ini berguna ketika kalian ingin memotong kayu bakar atau ranting pohon . Walau bentuknya seperti kalung biasa , namun manfaat dan kekuatannya bisa kita acungi jempol. Benda ini sering digunakan untuk memotong kayu yang menghalangi jalan . Bahkan beberapa jenis gergaji kawat atau wire saw mampu menggergaji mesin dan besi.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `desease`
--

CREATE TABLE `desease` (
  `id` int(50) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Keterangan` varchar(1000) NOT NULL,
  `Gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `desease`
--

INSERT INTO `desease` (`id`, `Nama`, `Keterangan`, `Gambar`) VALUES
(1, 'Diare', 'Diare merupakan sebuah kondisi ketika pengidapnya melakukan buang air besar (BAB) lebih sering dari biasanya. Selain itu, diare juga ditandai dengan kondisi feses yang lebih encer dari biasanya. Penyakit ini biasanya berlangsung selama beberapa hari dan dalam kasus tertentu bisa berlangsung hingga berminggu-minggu.', 'img/PY/penyakit1.jpg'),
(2, 'Demam Berdarah', 'Demam berdarah dengue (DBD) adalah penyakit menular yang disebabkan oleh virus dengue yang ditularkan melalui gigitan nyamuk Aedes aegypti dan Aedes albopictus. Gejala umumnya timbul 4-7 hari sejak gigitan nyamuk, dan dapat berlangsung selama 10 hari. Beberapa gejala demam berdarah', 'img/PY/penyakit2.jpg'),
(3, 'Kolera', 'Kolera adalah infeksi usus yang disebabkan oleh bakteri Vibrio cholerae. Biasanya terjadi dari air minum atau makan makanan yang terkontaminasi bakteri tersebut.Infeksi ini menyebabkan diare berat sehingga memicu terjadinya dehidrasi secara cepat. Ini sering menjadi ancaman bagi para pengungsi setelah bencana alam.', 'img/PY/kolera.jpg'),
(4, 'Demam Tifoid', 'Penyakit ini disebabkan oleh bakteri Salmonella Typhi yang terkontaminasi di makanan atau minuman. Dari limbah bekas bencana juga bisa terkontaminasi bakteri ini. Gejalanya termasuk demam tinggi berkisar dari 39-40 derajat celsius, lemas, sakit perut, sakit kepala, dan kehilangan nafsu makan. Beberapa orang juga mengalami diare atau justru bisa mengalami konstipasi (sembelit).', 'img/PY/demamtf.jpg'),
(6, 'Disentri', 'Lagi-lagi disebabkan oleh makanan atau minuman yang terkontaminasi bakteri. Disentri bisa membuat seseorang mengalami diare akut hingga mengeluarkan darah.\r\n\r\nParahnya, diare dapat membahayakan nyawa seseorang dalam 24 jam. Namun, sebagian besar kasus sembuh dengan sendirinya tanpa pengobatan. Gejalanya yaitu diare cair berdarah, demam, sakit perut, kram perut dan kembung, hilangnya nafsu makan, sakit kepala, muntah, dan dehidrasi.', 'img/PY/disentri.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `drug`
--

CREATE TABLE `drug` (
  `id` int(100) NOT NULL,
  `judul_obat` varchar(100) DEFAULT NULL,
  `deskr` varchar(1000) DEFAULT NULL,
  `dir_img_obat` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `drug`
--

INSERT INTO `drug` (`id`, `judul_obat`, `deskr`, `dir_img_obat`) VALUES
(7, 'Hidrogen peroksida', 'Hidrogen peroksida adalah senyawa kimia yang memiliki banyak kegunaan mulai sebagai cairan pembersih hingga desinfektan. Sederhananya hidrogen peroksida berperan sebagai obat luar yang dioleskan pada luka untuk mencegah timbulnya infeksi.\r\n\r\nLuka karena kejatuhan benda atau sayatan akibat benda tajam seperti kaca menjadi salah satu hal yang sering terjadi pada korban saat gempa.', 'img/OB/201aa3cd-25f6-4ed6-8125-4a58a6c19638_169.jpg'),
(8, 'Perban', 'Perban diperlukan untuk melindungi luka korban gempa terhadap lingkungan yang kemungkinan sedang tidak dalam keadaan bersih mencegah risiko infeksi lebih jauh. Selain itu perban juga bisa dipakai sebagai pengikat menopang bagian tubuh korban yang cedera patah tulang.\r\n\r\nMenteri Kesehatan, Prof Dr dr Nila F Moeloek, SpM mengatakan bahwa memang sebagian besar korban bencana gempa dan tsunami mengalami cedera dan patah tulang serius.\r\n\r\n\"Kebanyakan dari korban itu mengalami patah tulang akibat reruntuhan bangunan. Kita juga sudah mengutus tim ortopedi untuk terbang ke sana (Palu),\" tuturnya.', 'img/OB/998e8197-599b-43fa-a067-352d5754eb38_169.jpeg'),
(9, 'Antibiotik', 'Dengan besarnya risiko kasus infeksi akibat luka korban gempa yang tidak ditangani dengan benar, kebutuhan terhadap obat antibiotik melambung tinggi. Antibiotik oles khususnya sangat diperlukan untuk memastikan luka para korban bisa sembuh dalam pengungsian.', 'img/OB/50904c82-6990-40a7-b66d-773c7415188d_169.jpg'),
(10, 'Aspirin', 'Aspirin adalah obat pereda nyeri, demam dan radang yang umum digunakan. Selain itu aspirin juga disarankan bagi para pengidap kondisi jantung karena dapat memperbesar kemungkinan selamat dari serangan jantung. Aspirin bisa dianggap sebagai obat darurat yang bisa diberikan untuk korban yang membutuhkan bantuan medis.', 'img/OB/3619f62f-acec-4be8-9dc3-500ef9410044_169.jpg'),
(11, 'Obat diare', 'Biasanya setelah bencana gempa bumi dan tsunami besar berlalu para korban yang selamat dihadapkan dengan kondisi membutuhkan akses air bersih darurat. Dalam keadaan kurangnya air bersih sanitasi yang buruk dapat berujung pada masalah kesehatan timbulnya penyakit gastroenteritis. Diare adalah contoh penyakit yang sering terjadi pada pengungsi.', 'img/OB/fc57b908-5454-4450-9d34-5265bf1df524_169.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `creatingtool`
--
ALTER TABLE `creatingtool`
  ADD PRIMARY KEY (`id_CT`);

--
-- Indexes for table `desease`
--
ALTER TABLE `desease`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drug`
--
ALTER TABLE `drug`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `creatingtool`
--
ALTER TABLE `creatingtool`
  MODIFY `id_CT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `desease`
--
ALTER TABLE `desease`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `drug`
--
ALTER TABLE `drug`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
