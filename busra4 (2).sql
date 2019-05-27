-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 23 May 2019, 00:57:23
-- Sunucu sürümü: 5.7.24
-- PHP Sürümü: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `busra4`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `musteri`
--

DROP TABLE IF EXISTS `musteri`;
CREATE TABLE IF NOT EXISTS `musteri` (
  `musteri_id` int(11) NOT NULL AUTO_INCREMENT,
  `musteri_ad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `musteri_soyad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `musteri_sehir` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`musteri_id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `musteri`
--

INSERT INTO `musteri` (`musteri_id`, `musteri_ad`, `musteri_soyad`, `musteri_sehir`) VALUES
(31, 'ayfer', 'demirguresci', 'izmir'),
(32, 'buse', 'demirguresci', 'aydın'),
(33, 'esra', 'nalkesen', 'londra'),
(34, 'gulnur', 'nalkesen', 'mugla'),
(37, 'evrim', 'demirguresci', 'ankara'),
(38, 'mustafa', 'nalkesen', 'antalya'),
(39, 'sinem', 'akbas', 'rize'),
(40, 'aynur ', 'inci', 'amsterdam'),
(41, 'buse', 'demirguresci', 'IzmÄ±r');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

DROP TABLE IF EXISTS `urunler`;
CREATE TABLE IF NOT EXISTS `urunler` (
  `urun_id` int(11) NOT NULL AUTO_INCREMENT,
  `urun_ad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `urun_tur` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `urun_fiyat` int(11) NOT NULL,
  `urun_siparis_adet` int(11) NOT NULL,
  `urun_maliyet` int(11) NOT NULL,
  PRIMARY KEY (`urun_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1286 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`urun_id`, `urun_ad`, `urun_tur`, `urun_fiyat`, `urun_siparis_adet`, `urun_maliyet`) VALUES
(1281, 'yagli kagit', 'dayaniksiz', 5, 100, 1),
(1282, 'sari saman', 'dayanikli', 8, 20, 2),
(1283, 'kuse_kagit', 'yari mat', 10, 380, 2),
(1284, 'tuale kagit', 'kendinden desenli', 12, 66, 4),
(1285, 'aydınger kagit', 'yari saydam ', 20, 50, 6);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ur_mus`
--

DROP TABLE IF EXISTS `ur_mus`;
CREATE TABLE IF NOT EXISTS `ur_mus` (
  `urun_id` int(11) NOT NULL,
  `musteri_id` int(11) NOT NULL,
  KEY `urun_id` (`urun_id`),
  KEY `musteri_id` (`musteri_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ur_mus`
--

INSERT INTO `ur_mus` (`urun_id`, `musteri_id`) VALUES
(1285, 31),
(1283, 40),
(1283, 31),
(1282, 32),
(1284, 37),
(1284, 34),
(1281, 32),
(1283, 39),
(1285, 33),
(1281, 38);

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `ur_mus`
--
ALTER TABLE `ur_mus`
  ADD CONSTRAINT `ur_mus_ibfk_1` FOREIGN KEY (`urun_id`) REFERENCES `urunler` (`urun_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ur_mus_ibfk_2` FOREIGN KEY (`musteri_id`) REFERENCES `musteri` (`musteri_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
