-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 22 Tem 2022, 20:06:07
-- Sunucu sürümü: 10.4.22-MariaDB
-- PHP Sürümü: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `eticaret_vt`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `adminuye`
--

CREATE TABLE `adminuye` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(300) NOT NULL,
  `email` varchar(150) NOT NULL,
  `eklenme` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `adminuye`
--

INSERT INTO `adminuye` (`id`, `username`, `password`, `email`, `eklenme`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@localhost.com', '2022-03-31 12:25:36');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `alisveris`
--

CREATE TABLE `alisveris` (
  `id` int(11) NOT NULL,
  `urunid` int(11) NOT NULL,
  `odemeid` int(11) NOT NULL,
  `adet` int(11) NOT NULL,
  `birimfiyat` double NOT NULL,
  `toplamfiyat` double NOT NULL,
  `eklenme` timestamp NOT NULL DEFAULT current_timestamp(),
  `durum` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `alisveris`
--

INSERT INTO `alisveris` (`id`, `urunid`, `odemeid`, `adet`, `birimfiyat`, `toplamfiyat`, `eklenme`, `durum`) VALUES
(32, 33, 16, 1, 34, 34, '2022-06-19 22:28:54', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

CREATE TABLE `iletisim` (
  `id` int(200) NOT NULL,
  `ad` varchar(35) NOT NULL,
  `eposta` varchar(50) NOT NULL,
  `konubaslik` varchar(50) NOT NULL,
  `mesaj` varchar(250) NOT NULL,
  `eklenme` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `iletisim`
--

INSERT INTO `iletisim` (`id`, `ad`, `eposta`, `konubaslik`, `mesaj`, `eklenme`) VALUES
(4, 'Burak', 'burak@com.tr', 'Siteniz Çok Güzel', 'bayıldımmmmm.... :))', '2022-03-26 16:34:01');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `odemeler`
--

CREATE TABLE `odemeler` (
  `id` int(11) NOT NULL,
  `uyeid` int(11) NOT NULL,
  `fiyat` int(11) NOT NULL,
  `sehir` varchar(55) NOT NULL,
  `adres` varchar(255) NOT NULL,
  `durum` int(11) NOT NULL DEFAULT 0,
  `eklenme` timestamp NOT NULL DEFAULT current_timestamp(),
  `baslik` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `odemeler`
--

INSERT INTO `odemeler` (`id`, `uyeid`, `fiyat`, `sehir`, `adres`, `durum`, `eklenme`, `baslik`) VALUES
(16, 16, 34, 'ad', 'fadfadf', 1, '2022-06-19 22:28:54', 'adfad');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sayfalar`
--

CREATE TABLE `sayfalar` (
  `id` int(11) NOT NULL,
  `baslik` varchar(250) NOT NULL,
  `icerik` text DEFAULT NULL,
  `durum` tinyint(4) NOT NULL DEFAULT 1,
  `tarih` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `sayfalar`
--

INSERT INTO `sayfalar` (`id`, `baslik`, `icerik`, `durum`, `tarih`) VALUES
(15, 'a simple e-commerce site', '<p>A simple e-commerce site I made for learning<font color=\"#000000\" style=\"background-color: rgb(255, 255, 0);\"> purposes</font><br></p>', 1, '2022-07-22 17:08:47');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

CREATE TABLE `urunler` (
  `id` int(11) NOT NULL,
  `baslik` varchar(255) NOT NULL,
  `aciklama` text DEFAULT NULL,
  `icerik` text DEFAULT NULL,
  `fiyat` double NOT NULL,
  `stok` int(11) NOT NULL DEFAULT 0,
  `gorsel` varchar(255) DEFAULT NULL,
  `durum` tinyint(4) NOT NULL DEFAULT 1,
  `eklenme` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`id`, `baslik`, `aciklama`, `icerik`, `fiyat`, `stok`, `gorsel`, `durum`, `eklenme`) VALUES
(25, 'Dönence Saksı', 'Dönence Ev Saksısı', '<p>Dönence Saksı, Masa Üstü, 3\'lü Set, Parlak Masa üstü için dizayn edilmiş modern bir tasarım. 4 ayrı parçadan oluşmaktadır. 3 adet saksı ve orta dikme demonte olarak gelmektedir.<br></p>', 40, 8, '1647796972-468782-dönence saksı.jpg', 1, '2022-03-20 17:22:52'),
(26, 'Elvan Saksı', 'Elvan Ev Saksısı', '<p><b><span style=\"color: rgb(102, 102, 102); font-family: Gotham-Light;\">Ortamınızı renk şenliğine büründürmek istiyorsanız o halde&nbsp;</span><span style=\"color: rgb(102, 102, 102); font-family: Gotham-Light;\">Elvan saksı</span><span style=\"color: rgb(102, 102, 102); font-family: Gotham-Light;\">&nbsp;modellerine başvurabilirsiniz. Odukça kibar göründüğünden dolayı ortamınızda çok fazla yer kaplamadığı gibi istenilen görüntüyü yeni baştan açığa çıkarmaya yardımcı olacaktır</span></b><br></p>', 10, 199, '1647797394-632609-elvan saksı.jpg', 1, '2022-03-20 17:29:54'),
(27, 'İstanbul Saksı', 'İstanbul Ev ve Balkon Saksı', '<p><span style=\"color: rgb(102, 102, 102); font-family: source_sans_proregular; font-size: 14px;\"><b>şık tasarımı ve deseniyle İstanbul Balkon Saksı hem iç hem dış mekanlarınızı süslemek için raflarımızda yerini aldı. Kullanımı oldukça rahattır. Çit görüntüsüyle bahçenizde, balkonunuzda veya evinizde dikkatleri üzerine çekecektir. Beş farklı renk seçeneğiyle her ortama uyum sağlayacaktır. Bu sayede balkonda görmek istediğiniz modern görünümlere çok rahat şekilde ulaşma şansına sahip olacaksınız. Şıklık isteyen kişilerin mutlaka balkonunda kullanması gereken saksı çeşitlerinden birisidir. Enine geniş şekilde tasarlanmıştır</b></span><br></p>', 100, 20, '1648737590-121362-istanbul saksı.jpg', 1, '2022-03-31 14:39:50'),
(28, 'Nergis Saksı', 'Nergis Dış Mekan Saksı', '<ul style=\"margin-bottom: 10px; color: rgb(51, 51, 51); font-family: Roboto; font-size: 11px;\"><li style=\"color: rgb(0, 0, 0); font-size: 16px;\">Renk seçenekleri sayesinde cafe, restaurant, ofis, yazlık, villa, balkon vb tüm mekanlara uyum sağlar</li><li style=\"color: rgb(0, 0, 0); font-size: 16px;\">Büyük boy çiçek ve bitkiler için idealdir</li><li style=\"color: rgb(0, 0, 0); font-size: 16px;\">Ham maddesi UV ışınlarına dayanıklıdır, dış mekanda uzun zaman kullanılabilir</li><li style=\"color: rgb(0, 0, 0); font-size: 16px;\">Saksıyı zeminden ayıran altlığı vardır</li></ul>', 198, 11, '1648737676-821677-nergis saksı.jpg', 1, '2022-03-31 14:41:16'),
(29, 'Ova Saksı', 'Ova Balkon Saksı', '<span style=\"color: rgb(51, 51, 51); font-family: source_sans_proregular; font-size: 12px;\"><b>Ürün Ebatları: 43x14.5x17 CmBalkon denildiğinde ilk akla gelen modelimiz olan Ova balkon saksı, sizlerin de dikkatini çekecek özel bir modelimizdir. Hem şıklığı hem sadeliği hem de geniş toprak alma haznesi sayesinde içerisinde en sevdiğiniz çiçekleri rahatlıkla yetiştirebilirsiniz. Farklı renk seçeneklerini tercih ederek balkonlarınızı adeta bir renk cümbüşüne dönüştürebilirsiniz</b></span>', 56, 22, '1648737785-734039-ova saksı.jpg', 1, '2022-03-31 14:43:05'),
(30, 'Tombik Saksı', 'Tombik Dış Mekan Saksı', '<ul style=\"margin-bottom: 10px; color: rgb(51, 51, 51); font-family: Roboto; font-size: 11px;\"><li style=\"color: rgb(0, 0, 0); font-size: 16px;\">Yaklaşık 6-7 cm genişliğindeki balkonlara kolayca monte edilir.<br></li><li style=\"color: rgb(0, 0, 0); font-size: 16px;\">Cafe, restoran, ofis, yazlık, villa, balkon vb tüm mekanlara uyum sağlar.</li><li style=\"color: rgb(0, 0, 0); font-size: 16px;\">Orta boy çiçek ve kaktüsler için idealdir.</li><li style=\"color: rgb(0, 0, 0); font-size: 16px;\">6.5 litre hacmi vardır.</li><li style=\"color: rgb(0, 0, 0); font-size: 16px;\">Kolay temizlenir.</li><li style=\"color: rgb(0, 0, 0); font-size: 16px;\">Fazla su tahliye delikleri vardır.</li><li style=\"color: rgb(0, 0, 0); font-size: 16px;\">İçerisindeki bitkiler bir başka saksıya kolaylıkla aktarılabilir.</li></ul>', 69, 31, '1648737840-599770-tombik saksı.jpg', 1, '2022-03-31 14:44:00'),
(33, 'Sümela Saksı', 'Sümela Ev Saksı', '<p><span style=\"color: rgb(102, 102, 102); font-family: Gotham-Light; text-align: justify;\">İster iç ister dış mekânlarda ortamlarınızda bu özel saksı modelini rahatlıkla tercih edebilirsiniz. Daha hareketli bir saksı görüntüsü isteyenler için özel olarak geliştirilmiş olan bu&nbsp;</span><strong style=\"font-weight: bold; color: rgb(102, 102, 102); font-family: Gotham-Light; text-align: justify;\">Sümela Saksı</strong><span style=\"color: rgb(102, 102, 102); font-family: Gotham-Light; text-align: justify;\">&nbsp;örgüye benzeyen desenleriyle sizlere harika göz zevki sunacaktır. Çok özel renkleri sayesinde çiçekleriniz hiç olmadığı kadar şık ve güzel bir görünüm kazanacak. Özel fiyat avantajına sahip olan&nbsp;</span><strong style=\"font-weight: bold; color: rgb(102, 102, 102); font-family: Gotham-Light; text-align: justify;\">Sümela Saksı</strong><span style=\"color: rgb(102, 102, 102); font-family: Gotham-Light; text-align: justify;\">&nbsp;sizlerin de beğenisini kazanacak özel bir modelimizdir.</span><br></p>', 34, 30, '1648738249-684551-sümela saksı.jpg', 1, '2022-03-31 14:50:49'),
(35, 'Villa Kare Saksı', 'Villa Dış Mekan Kare Saksı', '<span style=\"color: rgb(102, 102, 102); font-family: source_sans_proregular; font-size: 14px;\"><b>Villa saksı modelimiz oldukça şıktır. Şık olmakla birlkte istenen ebatlara sahip şekilde de tasarlanmıştır. Bu sayede küçük, büyük ya da orta boyda villa saksı istiyorsa hemen siparişlerinizi vermeniz yeterlidir. 2 farklı renk seçeneğinden istediğiniz birisini seçerek kullanabilirsiniz ayrıca 7 numara ve daha büyük boyları için antrasit seçeneğide bulunmaktadır. Son dönemin seçilen modellerinden birisidir. Villa saksı oldukça hoş görünüme sahiptir.</b></span>', 200, 25, '1650473851-925918-villa saksı.jpg', 1, '2022-04-20 16:57:31');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeler`
--

CREATE TABLE `uyeler` (
  `id` int(11) NOT NULL,
  `adsoyad` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `il` varchar(20) NOT NULL,
  `adres` varchar(2500) NOT NULL,
  `telefon` int(10) NOT NULL,
  `eklenme` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `uyeler`
--

INSERT INTO `uyeler` (`id`, `adsoyad`, `username`, `password`, `email`, `il`, `adres`, `telefon`, `eklenme`) VALUES
(20, 'test', 'test', '827ccb0eea8a706c4c34a16891f84e7b', 'tt@gmail.com', 'İzmir', 'lorem', 555555, '2022-07-22 17:53:51');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `adminuye`
--
ALTER TABLE `adminuye`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `alisveris`
--
ALTER TABLE `alisveris`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `iletisim`
--
ALTER TABLE `iletisim`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `odemeler`
--
ALTER TABLE `odemeler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sayfalar`
--
ALTER TABLE `sayfalar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `urunler`
--
ALTER TABLE `urunler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `uyeler`
--
ALTER TABLE `uyeler`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `adminuye`
--
ALTER TABLE `adminuye`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `alisveris`
--
ALTER TABLE `alisveris`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Tablo için AUTO_INCREMENT değeri `iletisim`
--
ALTER TABLE `iletisim`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `odemeler`
--
ALTER TABLE `odemeler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Tablo için AUTO_INCREMENT değeri `sayfalar`
--
ALTER TABLE `sayfalar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Tablo için AUTO_INCREMENT değeri `urunler`
--
ALTER TABLE `urunler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Tablo için AUTO_INCREMENT değeri `uyeler`
--
ALTER TABLE `uyeler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
