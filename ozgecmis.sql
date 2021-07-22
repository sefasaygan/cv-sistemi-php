-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 22 Tem 2021, 21:58:34
-- Sunucu sürümü: 10.4.17-MariaDB
-- PHP Sürümü: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `github-sil`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ozgecmis`
--

CREATE TABLE `ozgecmis` (
  `id` int(50) NOT NULL,
  `adsoyad` varchar(200) COLLATE utf8_bin NOT NULL,
  `sifre` varchar(200) COLLATE utf8_bin NOT NULL,
  `unvan` varchar(200) COLLATE utf8_bin NOT NULL,
  `geti` varchar(200) COLLATE utf8_bin NOT NULL,
  `hakkinda` text COLLATE utf8_bin NOT NULL,
  `twitter` varchar(200) COLLATE utf8_bin NOT NULL,
  `facebook` varchar(200) COLLATE utf8_bin NOT NULL,
  `instagram` varchar(200) COLLATE utf8_bin NOT NULL,
  `eposta` varchar(100) COLLATE utf8_bin NOT NULL,
  `telefon` varchar(200) COLLATE utf8_bin NOT NULL,
  `adres` varchar(200) COLLATE utf8_bin NOT NULL,
  `resim` varchar(250) COLLATE utf8_bin NOT NULL,
  `isdeneyimi` text COLLATE utf8_bin NOT NULL,
  `dilbilgisi` varchar(200) COLLATE utf8_bin NOT NULL,
  `egitimbilgisi` text COLLATE utf8_bin NOT NULL,
  `tezproje` text COLLATE utf8_bin NOT NULL,
  `uzmanlikalanim` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Tablo döküm verisi `ozgecmis`
--

INSERT INTO `ozgecmis` (`id`, `adsoyad`, `sifre`, `unvan`, `geti`, `hakkinda`, `twitter`, `facebook`, `instagram`, `eposta`, `telefon`, `adres`, `resim`, `isdeneyimi`, `dilbilgisi`, `egitimbilgisi`, `tezproje`, `uzmanlikalanim`) VALUES
(1, 'SEFA SAYĞAN', '1', 'Software Developer', 'sefasaygan', 'SEFA SAYĞAN 1997 doğumludur', '', '', 'se', 'info@sayganweb.com', '05323060915', 'yenişehir mahallesi      ', 'img/3d-duvar-kagitlari-161.jpg', 'Proactively extend market-driven e-tailers rather than enterprise-wide supply chains. Collaboratively embrace 24/7 processes rather than adaptive users. Seamlessly monetize alternative e-business.', 'ingilizce', '<b>İLKOKUL</b> ibrahimtatlises<br><br> <b>ORTAOKUL</b> DENEME<br><br> <b>ÜNİVERSİTE</b> HARRAN ÜNİVERSİTESİ', '<b>İLKOKUL</b> ibrahimtatlises<br><br> <b>ORTAOKUL</b> DENEME<br><br> <b>ÜNİVERSİTE</b> HARRAN ÜNİVERSİTESİ', 'Php ,C, C++ C#, Css, Html5, vmware sunucu yönetim sistemi, Linux, Mikrotik, Soap, Rest api , Photoshop , SQL Gibi bilgilere sahibim ve halen de gelişmekteyim :)'),
(2, 'Ahmet İnan', '123', 'Bilgisayar Mühendisi', 'ahmetinan', ' 1980 doğumludur', '', '', '', 'info@ahmetinan.com', '0532680xxxx', 'yenişehir mahallesi    ', 'img/1473eb9a0203f0ba5541ceb04d1d4142.jpg', 'iş deneyiim', '', 'yokki', 'yok', 'heryerde uzman'),
(3, 'Halit erbaş', '123', 'Elektrik elektronik Mühendisi', 'haliterbas', '', '', '', '', 'haliterbas@gmail.com', '4412412412', '', '', '', '', '', '', ''),
(4, 'deneme', '1234', 'Bilgisayar teknikeri', 'deneme', '', '', '', '', 'ddeneme@deneme.com', '123442412', '', '', '', '', '', '', ''),
(5, 'Şevket İnan', '123', 'Web tasarım uzmanı', 'sevket-inan', '', '', '', '', 'sevketin@hotmail.com', '5555', '', '', '', '', '', '', ''),
(6, 'Fatih selamet', '4', 'Web yazılımcı', 'fatih-selamet', '', '', '', '', 'fxxxxxxx@gmail.com', '432', '', '', '', '', '', '', ''),
(7, 'sefas', '123', 'Bilgisayar Öğretmeni', 'sefas', 'x', 'x', 'x', 'x', 'sefa@xx.com', '532306xxxxx', ' x', '', 'x', 'x', 'x', 'x', 'x'),
(8, 'deneme2', '1', '', 'deneme2', '', '', '', '', 'deneme2@hotmail.com', '5053035555', '', '', '', '', '', '', '');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `ozgecmis`
--
ALTER TABLE `ozgecmis`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `ozgecmis`
--
ALTER TABLE `ozgecmis`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
