-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Bulan Mei 2022 pada 12.05
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cookwithme`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `makanan`
--

CREATE TABLE `makanan` (
  `id` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `bahan` varchar(1000) NOT NULL,
  `cara` varchar(1000) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `makanan`
--

INSERT INTO `makanan` (`id`, `nama`, `bahan`, `cara`, `gambar`) VALUES
(1, 'Nasi Goreng', '<ul>\n<li>1 potong paha ayam atas bawah rebus, suwir ayamnya</li>\n<li>2 butir telur, kocok lepas</li>\n<li>150 gram udang tanpa kulit  </li>\n<li>5 buah bakso sapi, potong-potong</li>\n<li>5 buah bakso ikan, potong-potong</li>\n<li>500 gram nasi putih </li>\n<li>2 sendok makan KECAP MANIS BANGO <br> </strong></li>\n<li>1 sendok teh garam </li>\n<li>1/2 sendok teh gula pasir</li>\n<li>1 batang daun bawang, diiris tipis </li>\n<li>1 1/2 sendok makan bawang goreng untuk taburan </li>\n<li>3 sendok makan minyak untuk menumis </li>\n</ul>\n<p> </p>\n<p><strong>Bumbu Tumbuk Kasar:</strong></p>\n<p> </p>\n<ul>\n<li>1 sendok teh terasi, bakar </li>\n<li>3 buah cabai merah besar </li>\n<li>3 buah cabai merah keriting </li>\n<li>2 siung bawang putih </li>\n<li>6 butir bawang merah </li>\n</ul>\n<p> </p>\n<p><strong>Bahan Pelengkap:</strong></p>\n<p> </p>\n<ul>\n<li>3 buah telur ceplok </li>\n</ul>', '<ul>\n<li>Panaskan minyak. Tumis bumbu tumbuk kasar sampai harum. Sisihkan di pinggir wajan. Masukkan telur. Aduk sampai berbutir.</li>\n<li>Tambahkan  ayam, udang, bakso. Aduk rata. Tambahkan nasi putih. Aduk- aduk. Masukkan KECAP MANIS BANGO</strong>, garam, dan gula pasir. Aduk sampai matang.</li>\n<li>Masukkan daun bawang. Aduk rata. Sajikan bersama telur ceplok dan taburan bawang merah goreng.  </li>\n</ul>', 'https://blog.cokro.com/wp-content/uploads/2022/02/opt__aboutcom__coeus__resources__content_migration__serious_eats__seriouseats.com__2019__06__20190604-nasi-goreng-fried-rice-vicky-wasik-7-617f5404fb49463a8b37e02df7d78def.jpg'),
(2, 'Soto', '<strong>Bahan</strong>\r\n<ul>\r\n<li>12 ceker ayam</li>\r\n<li>4 potong sayap ayam</li>\r\n<li>4 potong kepala ayam</li>\r\n<li>1 potong dada ayam</li>\r\n<li>1 liter air</li>\r\n<li>3 sdm minyak untuk menumis</li>\r\n</ul>\r\n<p><strong>Bumbu soto ayam bening</strong></p>\r\n<ul>\r\n<li>6 butir bawang merah</li>\r\n<li>6 siung bawang putih</li>\r\n<li>3 cm kunyit</li>\r\n<li>3 cm jahe, memarkan</li>\r\n<li>&frac12; sdt merica bubuk</li>\r\n<li>4 butir kemiri</li>\r\n<li>2 batang serai, memarkan</li>\r\n<li>5 lembar daun jeruk</li>\r\n<li>1 ruas lengkuas, memarkan</li>\r\n<li>2 lembar daun salam</li>\r\n</ul>\r\n<p><strong>Pelengkap soto ayam bening</strong></p>\r\n<ul>\r\n<li>Lontong</li>\r\n<li>Telur rebus, potong jadi empat</li>\r\n<li>Kentang, iris tipis dan goreng</li>\r\n<li>Bihun, seduh dengan air panas dan goreng sebentar</li>\r\n<li>Tomat, potong jadi delapan</li>\r\n<li>Taoge pendek, seduh dengan air panas</li>\r\n<li>Seledri diiris halus</li>\r\n</ul>', '<strong>Cara membuat bakwan</strong>\r\n<ul>\r\n<li>Wortel dan kol diiris tipis, aduk dengan tepung bumbu. Beri gula, garam, dan sedikit merica. Goreng bakwan sayur hingga matang dan potong-potong.</li>\r\n</ul>\r\n<p><strong>Cara membuat soto ayam bening</strong></p>\r\n<ul>\r\n<li>Rebus ceker, sayap, kepala, dan daging dada ayam dengan serai, daun jeruk, daun salam, lengkuas, jahe menggunakan api kompor kecil. Kalau ayam matang, angkat dada ayam, goreng, tiriskan kemudian suwir-suwir.</li>\r\n<li>Haluskan bawang merah, bawnag putih, kemiri, jahe, merica, dan kunyit.</li>\r\n<li>Tumis bumbu yang sudah dihaluskan hingga tercium aroma harum. Masukkan ke dalam kaldu dan didihkan kembali. Tambahkan garam dan gula secukupnya, aduk dan masak hingga mendidih dan matang.</li>\r\n</ul>', 'https://awsimages.detik.net.id/community/media/visual/2021/12/14/resep-soto-ayam-jawa_43.jpeg?w=1200'),
(3, 'SATE', 'Bahan sate: <ul>\n<li>4 buah paha ayam fillet, diambil dagingnya dan disisihkan kulitnya</li> \n<li>5 sendok makan kecap manis </li>\n<li>1 sendok makan minyak goreng </li>\n<li>22 buah tusuk sate</li> </ul>\n<br>\nBahan sambal kacang: \n<ul>\n<li>200 gram kacang tanah kulit, disangrai, dihaluskan </li> \n<li>3 buah cabai merah keriting, digoreng </li>\n<li>4 butir kemiri, digoreng </li>\n<li>2 buah cabai merah besar, digoreng </li>\n<li>3 sendok makan gula merah sisir </li>\n<li>1 sendok teh garam 500 ml air panas </li> </ul>\n<br>\nBahan pelengkap: \n<ul>\n<li>4 buah lontong</li> \n<li>2 sendok makan kecap manis </li> \n<li>3 buah jeruk limau </li>\n<li>2 sendok makan bawang merah goreng untuk taburan </li>\n</ul>\n<br>\nBahan sambal (haluskan): \n<ul>\n<li>15 buah cabai rawit merah, direbus </li>\n<li>4 buah cabai merah keriting, direbus </li>\n<li>1/4 sendok teh garam </li>\n</ul>\n<br>\n', '<ul>\r\n<li>Bikin sambal kacang dahulu. Haluskan kacang tanah, cabai merah keriting, kemiri, cabai merah besar, gula merah, dan garam. Tuang air. Masak sampai matang dan kental\r\n</li><li>Ambil 150 gram sambal kacang, kecap manis, dan minyak goreng. Aduk rata. Celup ayam di dalamnya. Lumuri sampai rata. </li><li>Tusukkan ayam di tusuk sate. Bakar sampai setengah matang. Lumuri lagi dengan campuran kacang. Bakar lagi sampai matang. </li><li>Lanjutkan membuat sambal, blender cabai. Tambahkan garam. Aduk rata.</li>\r\n<li>Sajikan sate bersama sambal kacang, pelengkap, dan sambalnya.</li>\r\n</ul>', 'https://asset.kompas.com/crops/89gV9XIgLw8Tzv2im_h4C9aEjd8=/0x0:993x662/750x500/data/photo/2021/03/27/605ed24c33816.jpg'),
(4, 'Ayam Goreng', '<strong> Bahan </strong></p> <ul> <li>1 ekor ayam (potong menjadi 12 bagian)</li> </ul> <Strong>Bumbu:</Strong></p> <ul> <li>4 siung bawang putih</li> <li>1 ruas jahe</li> <li>1 ruas kunyit</li> <li>½ sdt ketumbar</li> <li>kaldu ayam bubuk secukupnya </li> <li>Garam secukupnya</li> <li>4 lbr daun salam</li> <li>air secukupnya</li> <li>kelapa parut secukupnya</li> </ul>\n', '<ul> <li>Cuci bersih ayam kemudian tiriskan.</li> <li>Haluskan semua bumbu seperti bawang putih, jahe, kunyit, dan ketumbar.</li> <li>Kemudian campurkan bumbu halus dengan ayam di dalam panci.</li> <li>Tambahkan garam, penyedap rasa, bubuk kaldu ayam, santan, air, parutan kelapa dan daun salam.</li> <li>Ungkep hingga ayam empuk dan bumbu meresap.</li> <li>Goreng ayam dan serundeng dengan minyak panas. Goreng hingga berwarna kuning keemasan.</li> <li>Ayam goreng serundeng bumbu santan siap disajikan.</li> </ul>', '628a46bb32443.png'),
(5, 'CUMI GORENG TEPUNG', '<strong>Bahan :</strong></p>\n<ul>\n<li>300 gr cumi ukuran besar, potong melingkar bentuk cincin</li>\n<li>2 siung bawang putih, haluskan</li>\n<li>2 cm jahe, haluskan</li>\n<li>1/2 sdt merica bubuk</li>\n<li>1 butir telur</li>\n<li>Garam secukupnya</li>\n<li>Kaldu jamur bubuk secukupnya</li>\n</ul>\n<p><strong>Pelapis :</strong></p>\n<ul>\n<li>5 sdm tepung terigu\n</li><li>1 sdm tepung maizena\n</li></ul>', '<ul>\r\n<li>Bumbui cumi dengan bawang putih, jahe, merica bubuk, dan garam. Remas-remas sebentar, diamkan minimal 1 jam.\r\n</li><li>Kocok telur, celupkan cumi ke dalam telur kocok, lalu gulingkan ke dalam campuran tepung pelapis sampai berbalut rata. Cubit-cubit tepung agar cantik tampilan cuminya.\r\n</li><li>Panaskan minyak dalam wajan. Goreng cumi sampai matang, sajikan.\r\n</li>\r\n</ul>', 'https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2021/11/07/2612066607.jpg'),
(12, 'PECEL LELE', '<strong>Bahan :</strong>\r\n<li>1 kg ikan lele, beri air perasan jeruk nipis\r\n</li><li>3 siung bawang putih\r\n</li><li>3 cm jahe\r\n</li><li>1 telunjuk kunyit\r\n</li><li>1 sdm garam\r\n</li><li>1 sdm ketumbar\r\n</li><li>Minyak goreng\r\n</li></ul>\r\n<p><strong>Bahan sambal : <strong></p>\r\n<ul>\r\n<li>10 buah cabai rawit merah (tergantung selera)\r\n</li><li>2 buah tomat\r\n</li><li>6 butir bawang merah\r\n</li><li>2 siung bawang putih\r\n</li><li>1 sdt terasi matang\r\n</li><li>1 sdm kacang tanah sangrai\r\n</li><li>Gula merah secukupnya\r\n</li><li>1 sdt garam\r\n</li><li>1/2 sdt kaldu jamur\r\n</li><li>Daun kemangi\r\n</li><li>Jeruk limau, peras airnya\r\n</li></ul>\r\n<p><strong>Lalapan :<strong></p>\r\n<ul>\r\n<li>Aneka sayuran (timun, tomat, dan selada)</li>\r\n</ul>', '<ul>\r\n<li>Bumbui cumi dengan bawang putih, jahe, merica bubuk, dan garam. Remas-remas sebentar, diamkan minimal 1 jam.\r\n</li><li>Kocok telur, celupkan cumi ke dalam telur kocok, lalu gulingkan ke dalam campuran tepung pelapis sampai berbalut rata. Cubit-cubit tepung agar cantik tampilan cuminya.\r\n</li><li>Panaskan minyak dalam wajan. Goreng cumi sampai matang, sajikan.</li>', 'https://img.kurio.network/OpH6XcpyRpN0qV_bjh4Xp8sKOx0=/1200x900/filters:quality(80)/https://kurio-img.kurioapps.com/20/11/21/b2aecfb2-fefd-415f-9424-2485a95d41ef.png'),
(15, 'Tempe Masak Tauco', '- 1 papan tempe, potong-potong\n- 1 1/2 sdm tauco\n- 5 sdm kecap manis atau secukupnya\n- Santan secukupnya\n- Air secukupnya\n- Garam\n- Gula\nBahan bumbu:\n- 10 bawang merah, iris\n- 5 bawang putih, iris\n- 5 cabe merah, iris\n- 5 cabe ijo, iris\n- 10 cabe rawit utuh\n- 2 lembar daun salam\n- Sejempol Lengkuas, geprek\n- 1 sereh, geprek', '1. Tumis bawang merah bawang putih sampai wangi, masukkan sisa bumbu lainnya tumis sampai wangi dan matang. Tambahkan tauco, tumis sebentar.\r\n2. Masukkan tempe dan air sampai tempe terendam semua, bumbui dengan garam, gula dan kecap manis, cek rasa. Masak sampai tempe matang\r\n3. Lalu masukkan santan, aduk dan tambahkan cabe rawit utuh. Masak terus sampai air sedikit menyusut dan bumbu menyerap.\r\n4. Siap disajikan.', 'https://i.ytimg.com/vi/ceAvMZWv_Fs/maxresdefault.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `user`, `password`) VALUES
(1, 'bayu', '$2y$10$yyFTQ8rAKnXK4lb3VeX1n.eniYSYwxUIksy0EGqXmYFNbDScsGV.u'),
(2, 'bayu1', '$2y$10$boDv0IiOLrOK3QUZnngjCO699/cykkme/QsagvEwYnFQVeEcbtBVO'),
(3, '', '$2y$10$A3fFaZo205dv8woU/JUb.u3zjY/3hX0.rsYO65XCAL24KceqSRTYq'),
(4, 'asep', '$2y$10$pABh/tUuMTRmHLNKTUxgY.HAyKvQ.RZWd2jq2g9HaDUtZRA1hY3dK'),
(5, 'admin', '$2y$10$HPqFznISiSqR1a.skbqoBekLQjywO6/3N.FqAzaXMTKscF1N9OZLm');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `makanan`
--
ALTER TABLE `makanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `makanan`
--
ALTER TABLE `makanan`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
