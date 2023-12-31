-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 30 Nov 2023 pada 10.14
-- Versi server: 10.6.12-MariaDB-0ubuntu0.22.04.1
-- Versi PHP: 8.1.2-1ubuntu2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_fashion_gemilang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_telp` varchar(20) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`admin_id`, `admin_name`, `username`, `password`, `admin_telp`, `admin_email`, `admin_address`) VALUES
(1, 'Rgi Shop', 'admin', '21232f297a57a5a743894a0e4a801fc3', '+6282110568914', 'agungiky12@gmail.com', 'Kampus RGI 01Sawangan - Depok Jl. Raya Pengasinan, RT/RW 001/006 Kel. Pengasinan Kec. Sawangan Kota Depok - Jawa Barat 16518');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_category`
--

CREATE TABLE `tb_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_category`
--

INSERT INTO `tb_category` (`category_id`, `category_name`) VALUES
(11, 'Kemeja'),
(12, 'Gaun'),
(13, 'Kokoh Pria'),
(14, 'Batik'),
(15, 'Mukena');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_product`
--

CREATE TABLE `tb_product` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_description` text NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `product_status` tinyint(1) NOT NULL,
  `data_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_product`
--

INSERT INTO `tb_product` (`product_id`, `category_id`, `product_name`, `product_price`, `product_description`, `product_image`, `product_status`, `data_created`) VALUES
(29, 12, 'gaun hitam', 150000, '<p><strong>bagus digunkakan</strong></p>\r\n', 'produk1699842709.JPG', 1, '2023-11-13 02:31:49'),
(30, 12, 'gaun merah', 150000, '<p>bagus</p>\r\n', 'produk1699861451.JPG', 1, '2023-11-13 07:44:11'),
(31, 12, 'gaun', 150000, '<p>ada</p>\r\n', 'produk1699861491.JPG', 1, '2023-11-13 07:44:51'),
(32, 13, 'kokoh merah', 150000, '<p>Dilarang Mengambil dan Mengedit foto ini karena mempunyai Hak Milik❗️ Kemeja Koko yang kami jual merupakan foto asli dari Baju Koko Elrumi Official Store dan bukan Baju Koko motif Tiruan, dengan kualitas terbaik dan telah terbukti kenyamanannya. Spesifikasi : - Kain katun Toyobo (adem, lembut dan menyerap keringat) - Jahitan rapih - Ukuran M L XL 2XL M : Lingkar Dada : 100 cm Panjang Baju : 70 cm Panjang Lengan : 56 cm L : Lingkar Dada : 106 cm Panjang Baju : 71,5 cm Panjang Lengan : 58 cm XL : Lingkar Dada : 112 cm Panjang Baju : 73 cm Panjang Lengan : 60 cm XXL : Lingkar Dada : 118 cm Panjang Baju : 74,5 cm Panjang Lengan : 62 cm Garansi : - Jaminan uang kembali jika pesanan tidak sesuai - Baju Cacat kami tukar yang baru - Sertakan video unboxing untuk bisa klaim garansi (tanpa video unboxing klaim garansi tidak dilayani) #kokohadroh #koko #kokopria #kokomurah #kokokurta #kokodewasa #kokopakistan #kokopremium #kokogaul #kokoexclusive #kokokekinian #kokomuslim #kokoazzahir #kokoterbaru #kokohadroh #kokokombinasi #kokogusazmi #kokobatik #kokolebaran #bajumuslim #bajukoko #bajupria #bajulebaran #bajukokoelrumi #kokoelrumi #bajukokopria</p>\r\n', 'produk1699861527.JPG', 1, '2023-11-13 07:45:27'),
(33, 14, 'batik abu-abu', 150000, '<p>ada</p>\r\n', 'produk1699861602.JPG', 1, '2023-11-13 07:46:42'),
(34, 15, 'mukena putih', 150000, '<p>**Ukuran** : Dewasa JUMBO max. berat badan 95kg max. tinggi badan 178cm **Bahan** : - Katun Rayon (halus, adem, tidak nerawang.) - Renda Katun (mewah, berkualitas) **Size Mukena** Panjang Bawahan Rok: 115cm Lingkar Rok Melar sampai: 115cm Panjang Atasan Belakang: 115cm Panjang Atasan Depan: 120cm Panjang Atasan Samping: 125cm (Produk dibuat secara handmade, Ukuran di atas diambil berdasarkan rata-rata) **Berat** 500 gram/pcs</p>\r\n', 'produk1699861664.JPG', 1, '2023-11-13 07:47:44'),
(35, 13, 'kokoh biru', 150000, '<p>Dilarang Mengambil dan Mengedit foto ini karena mempunyai Hak Milik❗️ Kemeja Koko yang kami jual merupakan foto asli dari Baju Koko Elrumi Official Store dan bukan Baju Koko motif Tiruan, dengan kualitas terbaik dan telah terbukti kenyamanannya. Spesifikasi : - Kain katun Toyobo (adem, lembut dan menyerap keringat) - Jahitan rapih - Ukuran M L XL 2XL M : Lingkar Dada : 100 cm Panjang Baju : 70 cm Panjang Lengan : 56 cm L : Lingkar Dada : 106 cm Panjang Baju : 71,5 cm Panjang Lengan : 58 cm XL : Lingkar Dada : 112 cm Panjang Baju : 73 cm Panjang Lengan : 60 cm XXL : Lingkar Dada : 118 cm Panjang Baju : 74,5 cm Panjang Lengan : 62 cm Garansi : - Jaminan uang kembali jika pesanan tidak sesuai - Baju Cacat kami tukar yang baru - Sertakan video unboxing untuk bisa klaim garansi (tanpa video unboxing klaim garansi tidak dilayani) #kokohadroh #koko #kokopria #kokomurah #kokokurta #kokodewasa #kokopakistan #kokopremium #kokogaul #kokoexclusive #kokokekinian #kokomuslim #kokoazzahir #kokoterbaru #kokohadroh #kokokombinasi #kokogusazmi #kokobatik #kokolebaran #bajumuslim #bajukoko #bajupria #bajulebaran #bajukokoelrumi #kokoelrumi #bajukokopria</p>\r\n', 'produk1699861701.JPG', 1, '2023-11-13 07:48:21'),
(36, 13, 'jubah', 150000, '<p>Dilarang Mengambil dan Mengedit foto ini karena mempunyai Hak Milik❗️ Kemeja Koko yang kami jual merupakan foto asli dari Baju Koko Elrumi Official Store dan bukan Baju Koko motif Tiruan, dengan kualitas terbaik dan telah terbukti kenyamanannya. Spesifikasi : - Kain katun Toyobo (adem, lembut dan menyerap keringat) - Jahitan rapih - Ukuran M L XL 2XL M : Lingkar Dada : 100 cm Panjang Baju : 70 cm Panjang Lengan : 56 cm L : Lingkar Dada : 106 cm Panjang Baju : 71,5 cm Panjang Lengan : 58 cm XL : Lingkar Dada : 112 cm Panjang Baju : 73 cm Panjang Lengan : 60 cm XXL : Lingkar Dada : 118 cm Panjang Baju : 74,5 cm Panjang Lengan : 62 cm Garansi : - Jaminan uang kembali jika pesanan tidak sesuai - Baju Cacat kami tukar yang baru - Sertakan video unboxing untuk bisa klaim garansi (tanpa video unboxing klaim garansi tidak dilayani) #kokohadroh #koko #kokopria #kokomurah #kokokurta #kokodewasa #kokopakistan #kokopremium #kokogaul #kokoexclusive #kokokekinian #kokomuslim #kokoazzahir #kokoterbaru #kokohadroh #kokokombinasi #kokogusazmi #kokobatik #kokolebaran #bajumuslim #bajukoko #bajupria #bajulebaran #bajukokoelrumi #kokoelrumi #bajukokopria</p>\r\n', 'produk1699861763.JPG', 1, '2023-11-13 07:49:23'),
(37, 15, 'mukena hitam', 150000, '<p>**Ukuran** : Dewasa JUMBO max. berat badan 95kg max. tinggi badan 178cm **Bahan** : - Katun Rayon (halus, adem, tidak nerawang.) - Renda Katun (mewah, berkualitas) **Size Mukena** Panjang Bawahan Rok: 115cm Lingkar Rok Melar sampai: 115cm Panjang Atasan Belakang: 115cm Panjang Atasan Depan: 120cm Panjang Atasan Samping: 125cm (Produk dibuat secara handmade, Ukuran di atas diambil berdasarkan rata-rata) **Berat** 500 gram/pcs</p>\r\n', 'produk1699861826.JPG', 1, '2023-11-13 07:50:26'),
(38, 12, 'gaun hitam 2', 150000, '<p>Launching terbaru produk kami nih bestyy😍😍😍😍 produksi langsung dari Purnama grosir pekalongan Langsung kepoin bestyy🥳🥳🥳 Harga Murmer kualitas superr. Dress satin kualitas premium Untuk keyakinan produk kami bisa lihat keseluruhan penilaian toko kami ya kak. Semua memuaskan dan tidak di ragukan lagi. Amanah dalam segala hal. Dalam pengiriman juga tidak asal-asalan Tampil feminin dan anggun dengan Darla Dress. Dress dengan desain yang sederhana namun tetap memberikan kesan elegan. Dengan aksen kerut dari pundak hingga bawah dress memberikan kesan unik dan lux untuk pemakainyaDetail : ○ Bahan: Premium Silk ○ Tanpa Furing (Tidak Nerawang) ○ Terdapat Resleting di bagian belakang yang cukup panjang ○ Pergelangan lengan karet sehingga mudah untuk wudhu ○ Aksen drappery dibagian samping depan memberikan look yang mewah dan elegant SIZE Size M &bull; Lingkar dada : 98 cm &bull; Lingkar pinggang : 75 cm &bull; Lingkar panggul : 94 cm &bull; Lingkar ketiak : 44 cm &bull; Panjang lengan : 55 cm &bull; Panjang dress : 137 cm Size L &bull; Lingkar dada : 100 cm &bull; Lingkar pinggang : 80 cm &bull; Lingkar panggul : 98 cm &bull; Lingkar ketiak : 46 cm &bull; Panjang lengan : 55 cm &bull; Panjang dress : 137 cm Size XL &bull; Lingkar dada : 104 cm &bull; Lingkar pinggang : 85 cm &bull; Lingkar panggul : 102 cm &bull; Lingkar ketiak : 52 cm &bull; Panjang lengan : 57 cm &bull; Panjang dress : 137 cm Kombinasikan dengan hijab dan heels favoritmu untuk tampil memesona. Mohon melakukan video unboxing ketika membuka paket untuk mengklaim retur jika terjadi kerusakan/kesalahan pakaian. Terima kasih</p>\r\n', 'produk1700487149.JPG', 1, '2023-11-20 13:32:29');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indeks untuk tabel `tb_category`
--
ALTER TABLE `tb_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indeks untuk tabel `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_category`
--
ALTER TABLE `tb_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_product`
--
ALTER TABLE `tb_product`
  ADD CONSTRAINT `tb_product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `tb_category` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
