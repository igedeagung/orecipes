-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2020 at 06:53 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `orecipes`
--

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_recipes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`id`, `id_user`, `judul`, `isi`) VALUES
(1, 1, 'ayam goreng', 'Bahan-bahan : <br />\r\nayam<br />\r\ngaram, lada<br />\r\nLangkah : <br />\r\nbumbui ayam dengan garam dan lada, lalu goreng'),
(2, 1, 'es teh', 'Bahan-bahan :<br />\r\nkantung teh<br />\r\nair<br />\r\ngula dan es batu secukupnya<br />\r\nLangkah : <br />\r\ncampur semua bahan kecuali es batu<br />\r\naduk-aduk hingga gula larut<br />\r\ntambahkan es batu'),
(3, 1, 'tahu kriuk', 'Bahan-bahan : <br />\r\ntahu<br />\r\nbumbu kremes<br />\r\nLangkah : <br />\r\ngoreng tahu dengan kremesannya'),
(4, 1, 'dalgona coffe', 'Bahan-bahan : <br />\r\nkopi<br />\r\ngula<br />\r\nair<br />\r\nsusu<br />\r\nLangkah : <br />\r\nmixer kopi, gula, dan air hingga mengembang<br />\r\ntuang susu ke dalam gelas, lalu adonan mixer tadi'),
(5, 1, 'telur mata sapi', 'Bahan-bahan : <br />\r\ntelur<br />\r\ngaram dan lada<br />\r\nLangkah : <br />\r\npecahkan telur diatas penggorengan (jangan sampai kuning telur pecah)<br />\r\ntambahkan garam dan lada'),
(6, 1, 'es soda gembira', 'Bahan-bahan : <br />\r\nsoda plain<br />\r\nsirup leci (merah)<br />\r\nsusu kental manis<br />\r\nLangkah : <br />\r\ntuang sirup, susu, lalu tambahkan soda<br />\r\naduk sebelum diminum'),
(7, 1, 'ikan goreng', 'Bahan-bahan : <br />\r\nikan<br />\r\ngaram, lada, jeruk nipis<br />\r\nLangkah : <br />\r\nmarinasi ikan dengan garam, lada dan jeruk nipis selama 15 menit<br />\r\ngoreng ikan di minyak panas'),
(8, 1, 'jelly susu', 'Bahan-bahan : <br />\r\nnutrijell plain<br />\r\nsusu cair<br />\r\ngula<br />\r\nLangkah : <br />\r\ncampurkan semua bahan lalu rebus hingga matang<br />\r\ntuang dalam cetakan lalu dinginkan'),
(9, 1, 'indomie goreng spesial', 'Bahan-bahan : <br />\r\nindomie goreng<br />\r\ntelur<br />\r\nsawi dan cabai rawit<br />\r\nLangkah : <br />\r\nmasak mie hingga matang<br />\r\ntambahkan bumbu<br />\r\nmasukkan telur, lalu orak arik<br />\r\nangkat mie, letakkan pada wadah<br />\r\ntambahkan sawi yang sudah direbus dan irisan cabai rawit'),
(10, 1, 'es cao', 'Bahan-bahan : <br />\r\ncao<br />\r\ngula merah<br />\r\npandan<br />\r\nsantan<br />\r\nLangkah : <br />\r\npotong dadu cao<br />\r\nrebus santan dengan pandan<br />\r\ntuang gula merah pada gelas, lalu cao<br />\r\ntambahkan santan');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `count_likes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `password`, `count_likes`) VALUES
(1, 'Maya', 'maya@gmail.com', 'maya', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_foreign_key_post` (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `recipes`
--
ALTER TABLE `recipes`
  ADD CONSTRAINT `fk_foreign_key_post` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
