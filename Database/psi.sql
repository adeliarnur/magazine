-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11 Jun 2019 pada 16.36
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.1.10

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
-- Struktur dari tabel `dataorang`
--

CREATE TABLE `dataorang` (
  `ID_Orang` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `nilai` int(11) NOT NULL,
  `Nama` varchar(20) NOT NULL,
  `NamaAyah` varchar(20) NOT NULL,
  `NamaIbu` varchar(20) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Usia` varchar(20) NOT NULL,
  `TempatLahir` varchar(20) NOT NULL,
  `AlamatAkhir` varchar(20) NOT NULL,
  `Kewarganegaraan` varchar(20) NOT NULL,
  `Tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Deskripsi` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dataorang`
--

INSERT INTO `dataorang` (`ID_Orang`, `status`, `nilai`, `Nama`, `NamaAyah`, `NamaIbu`, `Gender`, `Usia`, `TempatLahir`, `AlamatAkhir`, `Kewarganegaraan`, `Tanggal`, `Deskripsi`) VALUES
(5, 1, 1, 'nama', 'Masukkan Nama Ayah', 'Masukkan Nama Ibu', 'Gender', 'Usia', 'Kota Lahir', 'Alamat Terakhir', 'Kewarganegaraan', '2019-04-07 01:49:27', 'deskripsi'),
(6, 1, 1, 'Ika', 'Budi', 'Kia', 'Perempuan', '25', 'Maluku', 'Solo', 'Indonesia', '2019-04-07 01:51:34', 'Kulit Hitam, Kulit Hitam, Kulit Hitam, Kulit Hitam, Kulit Hitam, Kulit Hitam, Kulit Hitam, Kulit Hitam, Kulit Hitam, '),
(7, 1, 0, 'Mia', 'Andik', 'Nia', 'Perempuan', '20', 'Pandeglang', 'Lorem Ipsum', 'Indonesia', '2019-04-08 07:35:32', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. '),
(8, 1, 0, 'Lor', 'Lo', 'Ipsum', 'Perempuan', '18', 'Pandeglang', 'Lo', 'Indonesia', '2019-04-15 07:14:15', 'Loremullamco'),
(9, 2, 1, 'HAM', 'IL', 'BU IL', 'Laki-laki', '100', 'Sidoarjo', 'Sidoarjo Sebelah Kir', 'Indonesia', '2019-04-22 05:17:07', 'tampan dan berani'),
(10, 1, 0, 'Tes', 'tes', 'tes', 'Laki-laki', '11', 'tes', 'tes', 'tes', '2019-04-30 02:20:33', 'tes'),
(11, 1, 0, 'Niar', 'Remi', 'Midela', 'Perempuan', '25', 'Kotabaru', 'Desa Sukamaju', 'Indonesia', '2019-05-08 04:47:59', 'Berbaju putih, Jangkung'),
(12, 1, 0, 'Miki', 'Miko', 'Mika', 'Laki-laki', '11', 'Kotabaru', 'Desa Sukamaju', 'Indonesia', '2019-05-08 13:36:18', 'Botak, Pendek');

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

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` int(5) NOT NULL,
  `nama_kota` varchar(15) NOT NULL,
  `lembaga` varchar(30) NOT NULL,
  `nama_kontak` varchar(30) NOT NULL,
  `no_kontak` varchar(20) NOT NULL,
  `cluster` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `nama_kota`, `lembaga`, `nama_kontak`, `no_kontak`, `cluster`) VALUES
(1, 'Surabaya', 'Tim SAR', 'Kantor SAR Surabaya', '0318666611', 'Evakuasi'),
(2, 'Surabaya', 'BASARNAS', 'Kantor BASARNAS Surabaya', '0218669611', 'Pertolongan'),
(4, 'Surabaya', 'Dinas Pemadam Kebakaran', 'Kantor Dinas', '0218669611', 'Evakuasi'),
(5, 'Jakarta', 'Tim SAR', 'Kantor SAR Jakarta', '0215501512', 'Evakuasi'),
(6, 'Jakarta', 'BASARNAS', 'Kantor BASARNAS Jakarta', '02165701116', 'Pertolongan'),
(7, 'Jakarta', 'Dinas Pemadam Kebakaran', 'Kantor Dinas', '02144835555', 'Evakuasi'),
(8, 'Palu', 'POLRESTA PALU', 'Kantor POLRESTA Palu', '0451421015', 'Evakuasi'),
(9, 'Palu', 'Rumah Sakit', 'RSU BALA KESELAMATAN', '0451425351', 'Medis'),
(10, 'Palu', 'Tim SAR', 'Kantor SAR Palu', '0451481110', 'Evakuasi'),
(11, 'Jakarta', 'Badan Penanganan Bencana', 'Rumah Sakit Bencana', '0822143765990', 'Medis'),
(12, 'Palu', 'Dinas Kesehatan Bencana', 'Rumah Sakit Besae', '082*143765098', 'Medis'),
(13, 'Surabaya', 'Ikatan Psikiater Indonesia', 'Rumah Sehat Mental', '081234566543', 'Kesehatan Mental');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokasi`
--

CREATE TABLE `lokasi` (
  `ID_lokasi` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `desa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lokasi`
--

INSERT INTO `lokasi` (`ID_lokasi`, `nama`, `provinsi`, `kecamatan`, `desa`) VALUES
(1, 'Posko 1 Kab, Utara', 'Lombok barat', 'sukomaju', 'kaliasem'),
(2, 'Posko 2 Kab, Utara', 'Lombok barat', 'sukamari', 'kaliasin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `makanan`
--

CREATE TABLE `makanan` (
  `id_makanan` int(11) NOT NULL,
  `id_lokasi` int(11) NOT NULL,
  `nama_makanan` varchar(30) NOT NULL,
  `penanggung_jawab` varchar(30) NOT NULL,
  `kelebihan` varchar(30) NOT NULL,
  `kekurangan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `makanan`
--

INSERT INTO `makanan` (`id_makanan`, `id_lokasi`, `nama_makanan`, `penanggung_jawab`, `kelebihan`, `kekurangan`) VALUES
(1, 1, 'Beras merah', 'sugiyo', '0', '10 kg'),
(2, 2, 'Air minum', 'sugiyo', '0', '60 Lt');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penilaian`
--

CREATE TABLE `penilaian` (
  `id_nilai` int(11) NOT NULL,
  `nilai_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penilaian`
--

INSERT INTO `penilaian` (`id_nilai`, `nilai_status`) VALUES
(0, 'Belum Dinilai'),
(1, 'Diterima'),
(2, 'Ditolak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pra-bencana_kategori`
--

CREATE TABLE `pra-bencana_kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pra-bencana_kategori`
--

INSERT INTO `pra-bencana_kategori` (`id`, `nama`) VALUES
(1, 'Persiapan Diri'),
(2, 'Persiapan Di Dalam Rumah'),
(3, 'Persiapan Di Luar Rumah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pra-bencana_konten`
--

CREATE TABLE `pra-bencana_konten` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `konten` text NOT NULL,
  `kategori` int(11) NOT NULL,
  `thumbnail` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pra-bencana_konten`
--

INSERT INTO `pra-bencana_konten` (`id`, `judul`, `konten`, `kategori`, `thumbnail`) VALUES
(1, ' Adakan Pertemuan Keluarga Sekarang!', '<p>\r\n										Berdiskusilah dengan anggota keluarga anda terkait pembagian \r\ntanggung jawab sebelum terjadi gempa bumi, seperti siapa yang akan \r\nbertugas memadamkan api (jika ada api) dan siapa yang akan mengevakuasi \r\nseluruh anggota keluarga untuk mengarahkan ke jalur keluar terdekat. \r\n									</p>\r\n									<p>\r\n										Anda juga harus menentukan titik kumpul  yang cocok di rumah \r\nanda dan bagaimana metode yang digunakan untuk memastikan seluruh \r\nanggota keluarga lainnya selain anda, tetap selamat. Juga, jangan lupa \r\nuntuk membuat area evakuasi beserta dengan rutenya, serta pastikan \r\nseluruh anggota keluarga mengerti cara pengoperasian sirkuit listrik \r\nbeserta cara mematikannya (ketika korslet). Banyaklah memperdalam ilmu \r\nterkait bencana dan bagaimana cara meminimalisir kerugian bagi korban \r\njiwa maupun materiil. Sumber untuk info tersebut seperti buku panduan \r\nkhusus bencana dan juga internet, seperti website ini.\r\n									</p>', 1, 'asdfa'),
(2, 'Adakan Pertemuan Keluarga', '<p>Berdiskusilah dengan anggota keluarga anda terkait pembagian \r\ntanggung jawab sebelum terjadi gempa bumi, seperti siapa yang akan \r\nbertugas memadamkan api (jika ada api) dan siapa yang akan mengevakuasi \r\nseluruh anggota keluarga untuk mengarahkan ke jalur keluar terdekat. \r\n									</p><p>\r\n									</p><p>\r\n										Anda juga harus menentukan titik kumpul  yang cocok di rumah \r\nanda dan bagaimana metode yang digunakan untuk memastikan seluruh \r\nanggota keluarga lainnya selain anda, tetap selamat. Juga, jangan lupa \r\nuntuk membuat area evakuasi beserta dengan rutenya, serta pastikan \r\nseluruh anggota keluarga mengerti cara pengoperasian sirkuit listrik \r\nbeserta cara mematikannya (ketika korslet). Banyaklah memperdalam ilmu \r\nterkait bencana dan bagaimana cara meminimalisir kerugian bagi korban \r\njiwa maupun materiil. Sumber untuk info tersebut seperti buku panduan \r\nkhusus bencana dan juga internet, seperti website ini</p>', 1, 'asdfa'),
(11, 'asdkjf ajsfkj', '<p>sajflk ajslkfja;sifjoiejf akfjoaiejfa&nbsp; <b>salkfjaklsjfals fk<b>asf asjfklajs dfkajflk fasjlj </b></b>as faskjflaks f<br></p>', 1, 'img/prabencana_thumbnail/photo_2019-05-14_00-35-09.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status`
--

CREATE TABLE `status` (
  `ID_Status` int(11) NOT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `status`
--

INSERT INTO `status` (`ID_Status`, `Status`) VALUES
(1, 'Hilang'),
(2, 'Ditemukan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_bencana`
--

CREATE TABLE `status_bencana` (
  `id_status_bencana` int(255) NOT NULL,
  `id_lokasi` int(11) NOT NULL,
  `lokasi_bencana` varchar(400) NOT NULL,
  `tanggal_bencana` date NOT NULL,
  `status_bencana` varchar(400) NOT NULL,
  `keterangan_bencana` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `status_bencana`
--

INSERT INTO `status_bencana` (`id_status_bencana`, `id_lokasi`, `lokasi_bencana`, `tanggal_bencana`, `status_bencana`, `keterangan_bencana`) VALUES
(26, 1, 'Lombok', '2019-05-09', 'Pemulihan', 'Gempa dengan kekuatan 5 SR sedang menjalani proses pemulihan mental dan fisik'),
(27, 1, 'Lombok', '2019-06-05', 'Kritis', 'Gempa Besar dengan kekuatan 6.1 SR dengan korban sementara 120 orang luka luka');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(1, 'ali', 'qwer', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_role`
--

CREATE TABLE `users_role` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `deskripsi` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users_role`
--

INSERT INTO `users_role` (`id`, `nama`, `deskripsi`) VALUES
(1, 'Admin', 'Mengupdate konten pra-bencana, pasca bencana, dll'),
(2, 'LSM', 'Mengupdate data barang di lokasi bencana');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `creatingtool`
--
ALTER TABLE `creatingtool`
  ADD PRIMARY KEY (`id_CT`);

--
-- Indexes for table `dataorang`
--
ALTER TABLE `dataorang`
  ADD PRIMARY KEY (`ID_Orang`),
  ADD KEY `ID_Orang` (`ID_Orang`),
  ADD KEY `dataorang_ibfk_1` (`status`),
  ADD KEY `dataorang_ibfk_2` (`nilai`);

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
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`ID_lokasi`),
  ADD KEY `nama` (`nama`);

--
-- Indexes for table `makanan`
--
ALTER TABLE `makanan`
  ADD PRIMARY KEY (`id_makanan`),
  ADD KEY `id_lokasi` (`id_lokasi`);

--
-- Indexes for table `penilaian`
--
ALTER TABLE `penilaian`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `pra-bencana_kategori`
--
ALTER TABLE `pra-bencana_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pra-bencana_konten`
--
ALTER TABLE `pra-bencana_konten`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategori` (`kategori`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`ID_Status`),
  ADD KEY `ID_Status` (`ID_Status`);

--
-- Indexes for table `status_bencana`
--
ALTER TABLE `status_bencana`
  ADD PRIMARY KEY (`id_status_bencana`,`id_lokasi`),
  ADD KEY `id_lokasi` (`id_lokasi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role` (`role`);

--
-- Indexes for table `users_role`
--
ALTER TABLE `users_role`
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
-- AUTO_INCREMENT for table `dataorang`
--
ALTER TABLE `dataorang`
  MODIFY `ID_Orang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `desease`
--
ALTER TABLE `desease`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `drug`
--
ALTER TABLE `drug`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_kontak` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `makanan`
--
ALTER TABLE `makanan`
  MODIFY `id_makanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pra-bencana_kategori`
--
ALTER TABLE `pra-bencana_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pra-bencana_konten`
--
ALTER TABLE `pra-bencana_konten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `status_bencana`
--
ALTER TABLE `status_bencana`
  MODIFY `id_status_bencana` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users_role`
--
ALTER TABLE `users_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `dataorang`
--
ALTER TABLE `dataorang`
  ADD CONSTRAINT `dataorang_ibfk_1` FOREIGN KEY (`status`) REFERENCES `status` (`ID_Status`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dataorang_ibfk_2` FOREIGN KEY (`nilai`) REFERENCES `penilaian` (`id_nilai`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `makanan`
--
ALTER TABLE `makanan`
  ADD CONSTRAINT `makanan_ibfk` FOREIGN KEY (`id_lokasi`) REFERENCES `lokasi` (`ID_lokasi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pra-bencana_konten`
--
ALTER TABLE `pra-bencana_konten`
  ADD CONSTRAINT `pra-bencana_konten_ibfk_1` FOREIGN KEY (`kategori`) REFERENCES `pra-bencana_kategori` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `status_bencana`
--
ALTER TABLE `status_bencana`
  ADD CONSTRAINT `status_bencana_ibfk_1` FOREIGN KEY (`id_lokasi`) REFERENCES `lokasi` (`ID_lokasi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role`) REFERENCES `users_role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
