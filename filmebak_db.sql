-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 17 Haz 2022, 09:35:56
-- Sunucu sürümü: 5.7.36
-- PHP Sürümü: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `filmebak_db`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `filmler`
--

DROP TABLE IF EXISTS `filmler`;
CREATE TABLE IF NOT EXISTS `filmler` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `tur` varchar(100) NOT NULL,
  `cikistarihi` varchar(5) NOT NULL,
  `dakika` varchar(4) NOT NULL,
  `aciklama` varchar(500) NOT NULL,
  `puani` varchar(5) NOT NULL,
  `imgpath` text NOT NULL,
  `ytlink` varchar(255) NOT NULL,
  `videopath` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `filmler`
--

INSERT INTO `filmler` (`id`, `name`, `tur`, `cikistarihi`, `dakika`, `aciklama`, `puani`, `imgpath`, `ytlink`, `videopath`) VALUES
(1, 'Eternals', 'Bilim Kurgu', '2021', '125', '“The Eternals”, insanlığın varoluşundan beri dünyayı koruyan, olağanüstü güçlere sahip bir grup kahramanın hikayesini konu ediyor.', '7', 'eternals.jpg', '0bmGCsHXplY', '0'),
(2, 'Yenilmezler Endgame', 'Bilim Kurgu', '2019', '155', 'Dünya üzerinde kalan Black Widow, Kaptan Amerika, Thor ve Hulk kendi yaslarını tutmaktayken, Iron ve Nebula ise kontrol edemedikleri bir uzay gemisinin içinde, uzay boşluğunda sürüklenmektedirler. Süper kahramanlar takımı için işler pek de iyi görünmemektedir.', '8.9', 'endgame.jpg', 'BWJiQWF30ug', '0'),
(3, 'Sonic 2', 'Animasyon', '2022', '94', 'Dr. Robotnik, bu kez yeni ortağı Knuckles ile birlikte medeniyetleri yok etme gücüne sahip olan bir zümrüdün arayışıyla geri döndüğünde sınavı başlar.', '7', 'sonic2.jpg', 'FRsDnWQtVjk', '0'),
(4, 'The Boys', 'Aksiyon, Komedi/Dizi', '2021', '40', 'The Boys, ABD yapımı süper kahraman temalı bir internet dizisidir. The Boys, süper kahramanların güçlerini ve şöhretlerini kötüye kullandığı bir evrende geçiyor.', '8.5', 'boys.jpg', 'LyM2Lh6SxPw', '0'),
(5, 'Vikings Valhalla', 'Biografi Dram', '2022', '45', '11.yüzyılın başlarında başlar ve gelmiş geçmiş en ünlü Vikinglerden bazılarının efsanevi maceralarını anlatır – Leif Eriksson, Freydis Eriksdotter, Harald Hardrada ve Norman King William the Conqueror.', '8.1', 'vikings_valhalla.jpg', '45z6m0yBSsc', '0'),
(6, 'Yıldızlararası', 'Macera', '2014', '175', 'Başrollerinde Matthew McConaughey, Anne Hathaway, Jessica Chastain ve Michael Caine yer almaktadır. Filmde bir grup astronotun bir solucan deliğinden geçerek insanların yaşayabileceği yeni bir yer arayışı konu edilmektedir.', '9.1', 'interstaller.jpg', 'vVJeYMRam0o', '0'),
(7, 'Dune', 'Bilim Kurgu', '2021', '165', 'Dune filmi, uzak bir gelecekte geçiyor. Kendi ailesi ve halkının geleceğini garanti altına almak uğruna evrendeki en tehlikeli gezegene seyahat etmek zorunda olan Paul Atreides\'in hikayesini anlatıyor. Bu hayatta galaksinin farklı noktalarında bulunan gezegenler, rakip feodal aileler tarafından yönetiliyor.', '8.4', 'dune.jpg', '', '0'),
(8, 'Fantastik Canavarlar 3', 'Macera', '2022', '123', 'Test', '6.7', 'fantastic_beasts_the_secrets.jpg', 'yjv12rBqlow', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user_form`
--

DROP TABLE IF EXISTS `user_form`;
CREATE TABLE IF NOT EXISTS `user_form` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 NOT NULL,
  `user_type` varchar(255) CHARACTER SET latin1 NOT NULL DEFAULT 'user',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(1, 'meric', 'meric@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(4, 'asd', 'asd@gmail.com', '7815696ecbf1c96e6894b779456d330e', 'user'),
(12, 'test11', 'test11@gmail.com', 'adbf5a778175ee757c34d0eba4e932bc', 'admin'),
(10, 'asdad', 'adsad@gmail.com', 'adbf5a778175ee757c34d0eba4e932bc', 'user'),
(14, '123', '123@gmail.com', '202cb962ac59075b964b07152d234b70', 'user'),
(16, 'fgh', 'fgh@gmail.com', '0f98df87c7440c045496f705c7295344', 'user');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
