-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 31, 2024 at 10:29 PM
-- Server version: 10.3.39-MariaDB-cll-lve
-- PHP Version: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ygf28`
--

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `about` varchar(255) NOT NULL,
  `performed` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `merchandise`
--

CREATE TABLE `merchandise` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `materials` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `merchandise`
--

INSERT INTO `merchandise` (`id`, `name`, `price`, `picture`, `materials`) VALUES
(1, 'URDHVA', '', '1.jpg', ''),
(2, 'Eka Yana', '', '2.jpg', ''),
(3, 'Lineup Instrumen', '', '3.jpg', ''),
(4, 'Lineup Artist', '', '4.jpg', ''),
(5, 'Totebag', '', '5.jpg', ''),
(6, 'Slingbag', '', '6.jpg', ''),
(7, 'Tumbler Bag', '', '7.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2023-08-05-101637', 'App\\Database\\Migrations\\CreateArtist', 'default', 'App', 1692176183, 1),
(2, '2023-08-05-110437', 'App\\Database\\Migrations\\CreateMerchandise', 'default', 'App', 1692176183, 1),
(3, '2023-08-05-110737', 'App\\Database\\Migrations\\CreateMessage', 'default', 'App', 1692176183, 1),
(4, '2023-08-05-111937', 'App\\Database\\Migrations\\CreatePress', 'default', 'App', 1692176183, 1),
(5, '2023-08-05-112537', 'App\\Database\\Migrations\\CreateSchedule', 'default', 'App', 1692176183, 1),
(6, '2023-08-08-110737', 'App\\Database\\Migrations\\ModifyMessage', 'default', 'App', 1692176183, 1),
(7, '2023-08-13-225837', 'App\\Database\\Migrations\\ModifyPress', 'default', 'App', 1692176183, 1);

-- --------------------------------------------------------

--
-- Table structure for table `press`
--

CREATE TABLE `press` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `intro` text NOT NULL,
  `content` text NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `press`
--

INSERT INTO `press` (`id`, `title`, `slug`, `image`, `intro`, `content`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Perhelatan Yogyakarta Gamelan Festival ke-28 Kembali Digelar, Gamelan yang Melampaui Dengungnya', 'perhelatan-yogyakarta-gamelan-festival-ke-28-kembali-digelar-gamelan-yang-melampaui-dengungnya', 'pressconf.jpg', 'Yogyakarta, 9 Agustus 2023- Perhelatan gamelan skala internasional Yogyakarta Gamelan Festival (YGF) kembali digelar pada tahun ini. YGF ke-28 (YGF28) akan digelar selama satu minggu penuh mulai 20 Agustus sampai 26 Agustus 2023.', '<p>Yogyakarta, 9 Agustus 2023- Perhelatan gamelan skala internasional Yogyakarta Gamelan Festival (YGF) kembali digelar pada tahun ini. YGF ke-28 (YGF28) akan digelar selama satu minggu penuh mulai 20 Agustus sampai 26 Agustus 2023.</p>\n<p>Menurut Project Director YGF28 Ishari Sahida atau Ari Wulu, YGF merupakan sebuah perayaan atas gamelan, yang menjadi tempat berkumpul para pemain dan pecinta gamelan seluruh dunia, dan sudah diselenggarakan sejak tahun 1994 oleh Sapto Raharjo (alm).</p>\n<p>“Peristiwa ini penting untuk dilakukan sebagai salah satu langkah strategis dalam memajukan kebudayaan Indonesia untuk memberikan kontribusi kepada peradaban dunia,” ujarnya.</p>\n<p>Pada tahun ini, YGF ingin mengapresiasi usaha-usaha yang telah dilakukan dalam melestarikan dan mengembangkan gamelan sebagai budaya bangsa oleh para pendahulu. Usaha ini telah menciptakan ruang kemungkinan yang semakin membesar. </p>\n<p>Banyak pelaku seni lintas disiplin melibatkan gamelan dalam proses kreatif mereka yang menjadi bukti gamelan telah dan sedang berkembang. Sementara, keadiluhungan gamelan tetap dijaga oleh para punggawanya.</p>\n<p>“Gamelan telah melampaui dengungnya, gamelan beyond sound,” ucap Ari Wulu.</p>\n<p>Ada sejumlah hal yang berbeda dengan YGF sebelumnya pada penyelenggaraan YGF 28 kali ini, mulai dari rangkaian kegiatan sampai kemasan konser gamelan. Selain konser gamelan, lokakarya, dan rembug budaya, YGF 28 kembali menghadirkan Gaung Gamelan. Tidak hanya itu, ada pula acara baru yang diberi nama Gamelan Dinner pada YGF 2023.</p>\n<p>Gaung Gamelan sebagai penanda dimulainya YGF 28 akan digelar di Stadion Kridosono pada Minggu, 20 Agustus 2023 dan terbuka untuk umum. Akan ada sekitar 700 pengrawit dari 28 kelompok karawitan yang terlibat dalam Gaung Gamelan dengan 28 pangkon gamelan.</p>\n<p>Kelompok karawitan dari seluruh DIY yang terlibat dalam Gaung Gamelan dikurasi olah Gayam 16 serta kelompok karawitan yang sudah menerima bantuan gamelan dari Dinas Kebudayaan Yogyakarta.</p>\n<p>Seluruh kelompok karawitan akan memainkan dua gending, yakni Ladrang Prosesi karya Sapto Raharjo dan ladrang Santi Mulya.</p>\n<p>Notasi dari ladrang ini akan dikirimkan ke masing-masing kelompok karawitan satu bulan sebelumnya, serta disebarkan melalui berbagai media dengan tujuan agar dapat dipelajari atau dibaca oleh masyarakat luas.</p>\n<p>Gaung Gamelan terbuka untuk umum dan akan menghadirkan karya tari serta pertunjukan musik. Pertunjukan wayang kulit menjadi penutup Gaung Gamelan akan digelar pada malam hari.</p>\n<p>Lokakarya Gamelan akan digelar pada 21 sampai 23 Agustus 2023 di Rumah Gayam16. Pengisi lokakarya merupakan seniman, praktisi, maupun akademisi yang ditunjuk oleh YGF28.</p>\n<p>Lokakarya pengembangan gamelan, baik karya penciptaan maupun pengembangan instrumentasi gamelan, ini dapat diikuti oleh masyarakat dengan mendaftar terlebih dulu.</p>\n<p>Sementara, Rembug Budaya diadakan pada 23 Agustus 2023. Kegiatan diskusi seni budaya ini sebagai ruang komunikasi yang bertujuan untuk merawat dan mengembangkan gamelan serta seni lainnya. </p>\n<p>Terbaru, YGF28 menghadirkan Gamelan Dinner di Pendopo Agung Royal Ambarrukmo pada 23 Agustus mulai pukul 19.00 sampai 21.00 WIB. Program ini dibuat untuk menyatukan para pencinta dan pemain gamelan dalam acara makan malam bersama. </p>\n<p>Dalam Gamelan Dinner juga akan ada paparan rencana strategi kebudayaan yang akan dilakukan Gayam16 melalui kegiatan-kegiatan reguler. Rencananya, selain pencinta dan pemain gamelan, pengunjung dapat mengikuti Gamelan Dinner ini dengan reservasi terlebih dahulu.</p>\n<h3>Gamelan Dinner akan menampilkan pertunjukan gamelan Komunitas Gayam 16</h3>\n<p>Sebagai puncak acara YGF28 menghadirkan Konser Gamelan di Plaza Ngasem pada 24 sampai 26 Agustus 2023 mulai pukul 19.00 sampai 22.00 WIB. Seperti biasanya, Konser Gamelan akan menghadirkan seniman dari dalam dan luar negeri, seperti Yogyakarta, Jepara, Cirebon, Pamekasan, Padang, India, Semarang, Lombok Barat, Meksiko, dan Malaysia.</p>\n<h3>Sekilas YGF</h3>\n<p>Yogyakarta Gamelan Festival atau yang sering disebut YGF merupakan festival berskala Internasional yang mewadahi pertemuan antara pemain dan pecinta musik gamelan dari seluruh dunia. YGF lahir pertama kali pada 1994 dari keresahan Sapto Raharjo yang melihat gamelan mulai dilupakan dalam kehidupan masyarakat sehari-hari.</p>\n<p>Perhelatan YGF yang diselenggarakan di bawah naungan Komunitas Gayam16 digelar dan menandai lahirnya tempat atau wadah bagi eksistensi gamelan untuk dikenal di 36 negara. Sesuai dengan misinya, menggagas kehidupan seni gamelan yang dinamis, selalu menyelaraskan diri dengan zaman tanpa harus kehilangan latar belakang budayanya, dan saling menghargai keanekaragaman kebudayaan di dunia, YGF berupaya untuk menciptakan dan mengelola media yang secara kontinu menjadi sarana berkumpul, berkomunikasi, dan berinteraksi bagi para pencinta seni gamelan.</p><p><a href=\"http://bit.ly/SiaranPersdanFotoPresscon\" target=\"_blank\">Unduh Press Release</a></p>', '2023-08-09 10:00:00', '2023-08-09 10:00:00', NULL),
(2, 'Kemegahan Gaung Gamelan Awali Festival Internasional Yogyakarta Gamelan Festival ke-28', 'kemegahan-gaung-gamelan-awali-festival-internasional-yogyakarta-gamelan-festival-ke-28', 'DSCF3409.jpg', 'Yogyakarta Gamelan Festival ke-28 (YGF28) dibuka dengan perhelatan Gaung Gamelan di Stadion Kridosono sekitar pukul 15.30 WIB. Sekitar 700 pengrawit dari 28 kelompok karawitan yang terlibat dalam Gaung Gamelan dengan 28 pangkon gamelan.', '<p><b>Yogyakarta, 20 Agustus 2023</b> - Yogyakarta Gamelan Festival ke-28 (YGF28) dibuka dengan perhelatan Gaung Gamelan di Stadion Kridosono sekitar pukul 15.30 WIB. Sekitar 700 pengrawit dari 28 kelompok karawitan yang terlibat dalam Gaung Gamelan dengan 28 pangkon gamelan.</p>\n<p>YGF28 yang kali ini mengusung tema Gamelan: Beyond Sound, dibuka langsung oleh Gubernur DIY Sri Sultan HB X.</p>\n<p>Perhelatan ini juga dihadiri sejumlah pejabat forkopimda DIY, seperti, Kajati DIY Ponco Hartanto, Kapolda DIY Irjen Pol Suwondo Nainggolan, Danrem 072/Pamungkas Brigjen TNI Joko Purnomo, Danlanal Yogyakarta Kolonel Laut Devi Erlita, Pj Wali Kota Yogyakarta Singgih Raharjo, Kepala Dinas Kebudayaan DIY Dian Lakshmi Pratiwi.</p>\n<p>Menurut Project Director YGF28 Ishadi Sahida atau Ari Wulu, Keberadaan perhelatan kali ini tidak lepas dari para pendahulu yang sudah menggunakan waktunya untuk memperkenalkan gamelan.</p>\n<p>“Kami yang berdiri di sini bukan semuanya pengrawit yang bisa memainkan gamelan, kami di sini hadir sebagai satu kesatuan sepakat gamelan adalah semangat yang kami bawa sekarang untuk bisa berkontribusi dalam peradaban dunia saat ini,” kata Ari Wulu.</p>\n<p>Gaung Gamelan sebagai bentuk kontribusi merayakan gamelan sebagai warisan budaya takbenda yang ditabuh tanpa amplifikasi elektrik. Harapannya, dengung dan suara gamelan bisa mencapai seluruh penjuru semesta dan menyadarkan manusia serta mengandung doa setelah melewati dua tahun pandemic Covid-19.</p>\n<p>“Tidak ada yang tidak bisa dilakukan manusia selama kita bersama-sama. Semoga YGF bisa bermanfaat dan memberkahi semua sehingga manusia bisa berbahagia semua,” ucapnya.\nYGF merupakan sebuah perayaan atas gamelan, yang menjadi tempat berkumpul para pemain dan pecinta gamelan seluruh dunia, dan sudah diselenggarakan sejak tahun 1994 oleh Sapto Raharjo (alm).</p>\n<p>“Peristiwa ini penting untuk dilakukan sebagai salah satu langkah strategis dalam memajukan kebudayaan Indonesia untuk memberikan kontribusi kepada peradaban dunia,” ujarnya.\nSementara, Kepala Dinas Kebudayaan DIY Dian Lakshmi Pratiwi menuturkan gamelan telah ditetapkan sebagai warisan budaya tak benda ke-12 yang dimiliki Indonesia pada 15 Desember 2021 oleh Unesco.</p>\n<p>“Kami berterima kasih atas kerja sama Pemprov DIY dan komunitas, spirit Gamelan mampu menyatukan semua, mampu berkolaborasi,” ujarnya.</p>\n<p>Ia menyebutkan penampil yang terlibat dalam Gaung Gamelan berasal dari 22 kelurahan yang dengan 400 sampai 700 pengrawit yang sudah mendapat bantuan hibah gamelan perunggu.</p>\n<p>Dalam pidato pembukaannya, Sultan HB X berpendapat GF28 bukan sekadar pentas seni, YGF akan mengajak untuk memasuki momentum pembelajaran hidup melalui harmonisasi irama yang dilakukan dengan merenungkan makna mendalam dibalut orkestrasi gamelan.\n“Yang sejatinya merupakan gambaran perjalanan luar biasa, yang menghubungkan jiwa dalam simpul keindahan, slendro pelog mengajarkan keselarasan hidup,” ucap Sultan HB X.\nMenurut Sultan HB X Ladrang menceritakan kisah alam bawah sadar mengajak menggali makna dalam nada yang meliuk. Gamelan bukan sekadar alat musik, tetapi penjelajah jiwa yang membawa kepada meditasi.</p>\n<p>Sementara, karawitan merujuk pada kelembutan perasaan yang terukir dalam seni gamelan, begitu pula kehidupan yang seharusnya mengilhami harmoni keberagaman.</p>\n<p>“Memang tidak ditampik ada perbedaan, tetapi dengan rasa cinta dan kemanusiaan ada nyawiji,” tuturnya.</p>\n<p>Dalam setiap alunan gending tersembunyi makna yang tidak terucapkan mengajak untuk menafsirkan, gamelan adalah seni realitas yang menuntun manusia untuk hidup dalam nilai kebijaksanaan dan kesadaran.</p>\n<p>Tidak hanya gaung gamelan sebagai sajian utama, YGF28 akan kian bermakna karena mengajak merayakan keberagaman, konser gamelan yang mempertemukan musik tradisional dengan pop culture dan Gamelan Dinner yang mempertemukan pemain dan pencinta gamelan menjadi portal pembelajaran hidup dan melestarikan budaya.</p>\n<p>Prosesi pembukaan Gaung Gamelan dimulai dengan Sultan HB X melepaskan burung perkutut jawa yang merupakan fauna identitas Daerah Istimewa Yogyakarta berdasarkan Keputusan Gubernur Nomor 385 Tahun 1992.</p>\n<p>Kelompok karawitan dari seluruh DIY yang terlibat dalam Gaung Gamelan dikurasi olah Gayam 16 serta kelompok karawitan yang sudah menerima bantuan gamelan dari Dinas Kebudayaan Yogyakarta.</p>\n<p>Seluruh kelompok karawitan akan memainkan dua gending, yakni Ladrang Prosesi karya Sapto Raharjo dan Ladrang Santi Mulya.</p>\n<p>Notasi dari ladrang ini akan dikirimkan ke masing-masing kelompok karawitan satu bulan sebelumnya, serta disebarkan melalui berbagai media dengan tujuan agar dapat dipelajari atau dibaca oleh masyarakat luas.</p>\n<p>Gaung Gamelan terbuka untuk umum dan akan menghadirkan karya tari serta pertunjukan musik.</p>\n<p>Kemeriahan Gaung Gamelan semakin terasa dengan stan kuliter dan kerajinan di sekitar area pertunjukan. Stan ini menghadirkan aneka camilan, antara lain menu angkringan, kacang rebus, jagung rebus, wedang ronde, sate kere, dan sebagainya.</p>\n<p>Wayang kulit lakon Pandu Jumeneng Ratu dengan dalang Ki Edi Soewondo menjadi penutup Gaung Gamelan.</p>\n<h3>Digelar Satu Minggu</h3>\n<p>YGF kali ini akan digelar selama satu minggu penuh mulai 20 Agustus sampai 26 Agustus 2023. Setelah Gaung Gamelan, ada sederet rangkaian acara festival gamelan internasional ini.</p>\n<p>Rembug Budaya diadakan pada 22 Agustus 2023 di IFI-LIP, Sagan Yogyakarta. Kegiatan diskusi seni budaya ini sebagai ruang komunikasi yang bertujuan untuk merawat dan mengembangkan gamelan serta seni lainnya. Lokakarya Gamelan akan digelar pada 23 Agustus 2023 di Pendopo Gayam16, Jl. Mantrigawen No. 9 Yogyakarta. Pengisi lokakarya merupakan seniman, praktisi, maupun akademisi yang ditunjuk oleh YGF28.</p>\n<p>Lokakarya pengembangan gamelan, baik karya penciptaan maupun pengembangan instrumentasi gamelan, ini dapat diikuti oleh masyarakat dengan mendaftar terlebih dulu.</p>\n<p>Untuk pertama kalinya, YGF28 juga menghadirkan Gamelan Dinner di Plaza Pasar Ngasem pada 23 Agustus mulai pukul 19.00 sampai 21.00 WIB. Program ini dibuat untuk menyatukan para pencinta dan pemain gamelan dalam acara makan malam bersama.</p>\n<p>Dalam Gamelan Dinner juga akan ada paparan rencana strategi kebudayaan yang akan dilakukan Gayam16 melalui kegiatan-kegiatan reguler.</p>\n<p>Sebagai puncak acara YGF28 menghadirkan Konser Gamelan di Plaza Pasar Ngasem pada 24 sampai 26 Agustus 2023 mulai pukul 19.00 sampai 22.00 WIB. Seperti biasanya, Konser Gamelan akan menghadirkan seniman dari dalam dan luar negeri, seperti Yogyakarta, Jepara, Cirebon, Pamekasan, Padang, India, Semarang, Lombok Barat, Meksiko, dan Malaysia.</p>\n<h3>Daftar Penampil Gaung Gamelan YGF28</h3>\n<ol>\n<li>Komunitas Gayam16</li>\n<li>Kalurahan Kricak, Tegalrejo, Yogyakarta</li>\n<li>Kalurahan Terban, Gondokusuman, Yogyakarta</li>\n<li>Kalurahan Bangunjiwo, Kasihan, Bantul</li>\n<li>Kalurahan Trimurti, Srandakan, Bantul</li>\n<li>Kalurahan Panggungharjo, Sewon Bantul</li>\n<li>Kalurahan Sabdodadi, Bantul, Bantul</li>\n<li>Kalurahan Gilangharjo, Pandak, Bantul</li>\n<li>Kalurahan Seloharjo, Pundong, Bantul</li>\n<li>Kalurahan Triwidadi, Pajangan, Bantul</li>\n<li>Kalurahan Wedomartani, Ngemplak, Sleman</li>\n<li>Kalurahan Margoagung, Seyegan, Sleman</li>\n<li>Kalurahan Sendangagung, Minggir, Sleman</li>\n<li>Kalurahan Banyurejo, Tempel, Sleman</li>\n<li>Kalurahan Sinduharjo, Ngaglik, Sleman</li>\n<li>Kalurahan Girikerto, Turi, Sleman</li>\n<li>Kalurahan Sukoreno, Sentolo, Kulon Progo</li>\n<li>Kalurahan Putat, Patuk, Gunung Kidul</li>\n<li>Kalurahan Tuksono, Sentolo, Kulon Progo</li>\n<li>Kalurahan Bangunkerto, Turi, Sleman</li>\n<li>Kalurahan Tanjungharjo, Nanggulan, Kulon Progo</li>\n<li>Kalurahan Kepek, Wonosari, Gunung Kidul</li>\n<li>Kalurahan Giripurwo, Purwosari, Gunung Kidul</li>\n<li>Canda Nada Art Community</li>\n<li>Pradangga Sawokembar</li>\n<li>Formatasindo</li>\n<li>Padmasangita</li>\n<li>Karawitan Tunjung Jene UGM</li>\n<li>Yayasan Pamulangan Beksa Sasminta Mardawa</li>\n<li>Omah Cangkem</li>\n</ol>\n<h3>Agenda YGF28 Gamelan: Beyond Sound</h3>\n<h4 class=\"uk-margin-remove-bottom\">Gaung Gamelan</h4>\n<div>20 Agustus 2023</div>\n<div>Stadion Kridosono</div>\n<h4 class=\"uk-margin-remove-bottom\">Rembug Budaya</h4>\n<div>22 Agustus 2023</div>\n<div>IFI-LIP</div>\n<h4 class=\"uk-margin-remove-bottom\">Lokakarya</h4>\n<div>23 Agustus 2023</div>\n<div>Gayam16</div>\n<h4 class=\"uk-margin-remove-bottom\">Gamelan Dinner</h4>\n<div>23 Agustus 2023</div>\n<div>Plaza Pasar Ngasem</div>\n<h4 class=\"uk-margin-remove-bottom\">Konser Gamelan</h4>\n<div>24 - 26 Agustus 2023</div>\n<div>Plaza Pasar Ngasem</div><p><a href=\"https://bit.ly/SiaranPersOpeningCeremony28thYGF\" target=\"_blank\">Unduh Press Release</a></p>', '2023-08-20 18:02:00', '2023-08-20 18:02:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(11) UNSIGNED NOT NULL,
  `time` datetime NOT NULL,
  `content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `merchandise`
--
ALTER TABLE `merchandise`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `press`
--
ALTER TABLE `press`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `merchandise`
--
ALTER TABLE `merchandise`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `press`
--
ALTER TABLE `press`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
