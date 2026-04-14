-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 16 Şub 2026, 15:41:55
-- Sunucu sürümü: 8.0.36
-- PHP Sürümü: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `yeniteknolojiler`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayarlar`
--

CREATE TABLE `ayarlar` (
  `id` int NOT NULL,
  `site_url` varchar(161) NOT NULL,
  `site_baslik` varchar(161) NOT NULL,
  `site_desc` text NOT NULL,
  `site_keyw` varchar(61) NOT NULL,
  `site_tema` varchar(17) NOT NULL,
  `site_durum` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Tablo döküm verisi `ayarlar`
--

INSERT INTO `ayarlar` (`id`, `site_url`, `site_baslik`, `site_desc`, `site_keyw`, `site_tema`, `site_durum`) VALUES
(1, 'http://localhost/furkan', 'Furkan AYDIN Kişisel Site', 'Eğitim hayatına Alibeyköy Endüstri Meslek Lisesi\'nde başlamış, sonrasında Sakarya Üniversitesi\'nde Bilgisayar ve Öğretim Teknolojileri Eğitimi alanında lisans ve yüksek lisansını tamamlmıştır. Doktora eğitimini ise Hacettepe Üniversitesi yine aynı programda tamamlayarak 2021 yılında tamamlayarak, yapay zeka, makine öğrenmesi, siber zorbalık, eğitim teknolojileri ve bilişim sistemleri konusunda derin bir bilgi birikimi edinmiştir.\r\n\r\nLisans ve yüksek lisans eğitimini Sakarya Üniversitesi\'nde başarıyla tamamladıktan sonra, Hacettepe Üniversitesi\'nde Bilgisayar ve Öğretim Teknolojileri Eğitimi alanında doktora yapmaya başlamıştır. Akademik kariyerine Kahramanmaraş Sütçü İmam Üniversitesi’nde Öğretim Görevlisi olarak adım atmış ve burada öğrencilere eğitim teknolojileri üzerine dersler vererek tecrübe kazanmıştır. Ardından, Cumhurbaşkanlığı İnsan Kaynakları Ofisi’nde Uzman olarak görev almış ve kamu sektöründeki dijital dönüşüm projelerine katkı sağlamıştır.\r\n\r\nŞu an, Bartın Üniversitesi Bilgisayar Teknolojileri ve Bilişim Sistemleri Bölümü\'nde Doktor Öğretim Üyesi olarak görev yapmaktadır. Yapay Zeka, veri bilim, veri madenciliği zeki öğretim sistemleri yazılım geliştirme, siber zorbalık farkındalığı ve siber zorbalıkla baş etme gibi konularda geniş bir uzmanlık yelpazesi bulunan AYDIN, akademik ve profesyonel çalışmalarına aktif olarak devam etmektedir.', 'Furkan, AYDIN, Furkan AYDIN', 'deafult', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `kullanici_no` int NOT NULL,
  `kullanici_adi` varchar(27) NOT NULL,
  `kullanici_soyadi` varchar(27) NOT NULL,
  `kullanici_eposta` varchar(61) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `kullanici_sifre` varchar(161) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `kullanici_cinsiyet` int DEFAULT NULL,
  `rutbe` int NOT NULL DEFAULT '2',
  `kayit_tarih` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sil` int NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`kullanici_no`, `kullanici_adi`, `kullanici_soyadi`, `kullanici_eposta`, `kullanici_sifre`, `kullanici_cinsiyet`, `rutbe`, `kayit_tarih`, `sil`) VALUES
(2, 'Yuşa', 'SAĞLAM', 'yusa@gmail.com', '12345', 2, 2, '2025-11-26 11:01:07', 1),
(4, 'EMRE', 'Demir', 'fatihdemir@gmail.com', '546879', 2, 2, '2025-11-26 11:35:05', 1),
(8, 'Furkan', 'AYDIN', 'Furkan@live.com', '$argon2id$v=19$m=131072,t=4,p=2$empCdVRwV1BDcWdxN09OQQ$3zSeMmqKY0qsMr7XZK/ngZ30EowrgxmTuN66Ijk7Vz8', 2, 2, '2025-12-10 09:23:23', 1),
(11, 'Furkan', 'AYDIN', 'Furkan2@live.com', '$argon2id$v=19$m=131072,t=4,p=2$RWhLd1dUMzFaT0IzVjhJbQ$Arc/FL6WXWTi6hsu3AMJez+FoUKKiY1m5iuJR2ep7cA', 2, 2, '2025-12-17 10:24:23', 2),
(12, 'Furkan', 'AYDIN', 'Furkan3@live.com', '$argon2id$v=19$m=131072,t=4,p=2$MGIwci5uVmhoUmouNldNaA$inby5XjokbY/Ii3LSDIelmoDx4ObGXf2bcWHUnGqLEk', 2, 7, '2025-12-24 09:56:12', 2),
(13, 'Furkan', 'AYDIN', 'Furkan4@live.com', '$argon2id$v=19$m=131072,t=4,p=2$azF3dTNycHdnUlZrRmdSWg$48BJcUbNOxZBL+5iNFK9SX/80rbXzD7weAyUsEIzqKM', 2, 2, '2025-12-31 11:16:23', 2),
(14, 'Furkan', 'AYDIN', 'Furkan11@live.com', '$argon2id$v=19$m=131072,t=4,p=1$S21lM0pSalQwekdDRnVqQQ$VjxhtWReqFTIcSyiqGzlYFWOYuP5gVTnVapO+ZwSQRg', 2, 2, '2026-02-09 14:38:26', 2);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `ayarlar`
--
ALTER TABLE `ayarlar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`kullanici_no`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `ayarlar`
--
ALTER TABLE `ayarlar`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `kullanici_no` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
