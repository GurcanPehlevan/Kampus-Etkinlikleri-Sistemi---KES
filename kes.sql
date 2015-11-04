-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 26 May 2015, 02:09:18
-- Sunucu sürümü: 5.6.17
-- PHP Sürümü: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `kes`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `abone`
--

CREATE TABLE IF NOT EXISTS `abone` (
  `eposta` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `abone`
--

INSERT INTO `abone` (`eposta`) VALUES
('pehlevangurcan@gmail.com'),
('cannuhlar@gmail.com'),
('kartal_lokman@hotmail.com'),
('asdasda@hotmail.com'),
('asldjaslkd@hotmail.com'),
('asdasd'),
('asdasdsad'),
('asdasd'),
('sadasd');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `a_id` int(2) NOT NULL AUTO_INCREMENT COMMENT 'admin idleri',
  `a_k_adi` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `a_sifre_md5` varchar(64) NOT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `etiket`
--

CREATE TABLE IF NOT EXISTS `etiket` (
  `etiket_id` int(3) NOT NULL AUTO_INCREMENT COMMENT 'etiketlerin alacağı id',
  `etiket_string` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL COMMENT 'etiketlerin ismi',
  `etiket_e_id` int(3) NOT NULL COMMENT 'etiketlerin hangi idli etkinliğe ait olduğu',
  PRIMARY KEY (`etiket_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Tablo döküm verisi `etiket`
--

INSERT INTO `etiket` (`etiket_id`, `etiket_string`, `etiket_e_id`) VALUES
(1, 'aaa', 17),
(2, 'bbb', 17),
(3, 'cc', 17),
(4, 'dd', 17),
(9, 'aaa', 18),
(11, 'aaa', 17),
(12, 'aa', 5),
(13, 'iü, şenlik', 0),
(14, 'şenlik', 0),
(15, 'şenlik, iü', 19),
(16, 'iü,liderler,kulubü', 20),
(17, 'android, odtü', 21),
(18, 'odtü, tog, kütüphane', 22),
(19, 'müzikfest, koç', 23),
(20, 'bilteg, iü', 24),
(21, 'cmyk', 25),
(22, 'iltek, ytü', 26),
(23, 'koç', 27),
(24, 'hmt', 28),
(25, 'google, marmara', 29),
(26, 'getek', 30),
(27, 'saü, kariyer', 31),
(28, 'iü, yönetim', 32),
(29, 'çanakkale, liderlik, girişimcilik, zirvesi', 33),
(30, 'hairspray', 34),
(31, 'akıllı,telefon', 35),
(32, 'yönetim', 36),
(34, 'eğitim', 37),
(35, 'kişisel gelişim', 37),
(36, 'eğitim kampı', 37),
(37, 'hayvan', 38),
(38, 'yardım', 38);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `etkinlik`
--

CREATE TABLE IF NOT EXISTS `etkinlik` (
  `e_id` int(5) unsigned NOT NULL AUTO_INCREMENT COMMENT 'etkinlik id',
  `e_isim` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL COMMENT 'etkinlik ismi',
  `e_kategori_id` int(2) NOT NULL COMMENT 'etkinlik kategori id',
  `e_universite` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL COMMENT 'etkinlik universitesi',
  `e_kampus` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL COMMENT 'etkinlik kampüsü',
  `e_baslangic_tarihi` varchar(11) NOT NULL COMMENT 'etkinlik başlangıç tarihi',
  `e_bitis_tarihi` varchar(11) DEFAULT NULL COMMENT 'etkinlik bitis tarihi (varsa)',
  `e_iletisim` varchar(50) NOT NULL COMMENT 'etkinlik iletisim bilgisi',
  `e_etiket` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL COMMENT 'etkinlik etiket string',
  `e_detayliaciklama` varchar(1500) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL COMMENT 'etkinlik detayli aciklama',
  `e_kapakfoto` varchar(100) NOT NULL COMMENT 'etkinlik kapak fotosu',
  `e_fotolar` varchar(500) NOT NULL COMMENT 'etkinlik fotolari string',
  `e_eklenmetarihi` datetime NOT NULL COMMENT 'etkinlik eklenme sql tarihi',
  `e_ekleyen_id` int(5) NOT NULL COMMENT 'ekleyen kullanıcının kullanıcı idsi',
  `e_rating` varchar(5) NOT NULL,
  `e_ratingsayisi` varchar(5) NOT NULL COMMENT 'etkinligi kac kisi derecelendirdi',
  `e_rating_k_id` varchar(10000) NOT NULL,
  `e_hit` int(5) NOT NULL COMMENT 'etkinlik tiklanma sayisi',
  `e_onay` int(1) NOT NULL COMMENT 'etkinlik onay durumu',
  PRIMARY KEY (`e_id`),
  KEY `e_id` (`e_id`),
  KEY `e_id_2` (`e_id`),
  KEY `e_id_3` (`e_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Tablo döküm verisi `etkinlik`
--

INSERT INTO `etkinlik` (`e_id`, `e_isim`, `e_kategori_id`, `e_universite`, `e_kampus`, `e_baslangic_tarihi`, `e_bitis_tarihi`, `e_iletisim`, `e_etiket`, `e_detayliaciklama`, `e_kapakfoto`, `e_fotolar`, `e_eklenmetarihi`, `e_ekleyen_id`, `e_rating`, `e_ratingsayisi`, `e_rating_k_id`, `e_hit`, `e_onay`) VALUES
(19, 'İstanbul Üniversitesi Bahar Şenlikleri', 2, 'İstanbul Üniversitesi', 'Avcılar Kampüsü', '18-05-2015', '22-05-2015', '05549891202', 'şenlik, iü', '', 'etkinlikgaleri/94506-istanbul-uni-afis-2015.jpg', 'etkinlikgaleri/33518-istanbul-uni-afis-2015.jpg', '2015-05-18 15:22:10', 5, '0', '0', '0, ', 3, 0),
(20, 'İstanbul Üniversitesi Liderler Kulübü', 3, 'İstanbul Üniversitesi', 'Beyazıt Kampüsü', '18-05-2015', '', '05549891202', 'iü,liderler,kulubü', '<p><span style="color: #636363; font-family: ''Roboto Slab'', serif; font-size: 14px; line-height: 18px;">Eğitim ve Sertifikalar</span><br style="color: #636363; font-family: ''Roboto Slab'', serif; font-size: 14px; line-height: 18px;" /><span style="color: #636363; font-family: ''Roboto Slab'', serif; font-size: 14px; line-height: 18px;">Etkin İletişim Teknikleri</span><br style="color: #636363; font-family: ''Roboto Slab'', serif; font-size: 14px; line-height: 18px;" /><span style="color: #636363; font-family: ''Roboto Slab'', serif; font-size: 14px; line-height: 18px;">İmaj Y&ouml;netimi</span><br style="color: #636363; font-family: ''Roboto Slab'', serif; font-size: 14px; line-height: 18px;" /><span style="color: #636363; font-family: ''Roboto Slab'', serif; font-size: 14px; line-height: 18px;">Hitabet Sanatı</span><br style="color: #636363; font-family: ''Roboto Slab'', serif; font-size: 14px; line-height: 18px;" /><span style="color: #636363; font-family: ''Roboto Slab'', serif; font-size: 14px; line-height: 18px;">Beden Dili</span><br style="color: #636363; font-family: ''Roboto Slab'', serif; font-size: 14px; line-height: 18px;" /><span style="color: #636363; font-family: ''Roboto Slab'', serif; font-size: 14px; line-height: 18px;">İş Hayatına Merhaba</span><br style="color: #636363; font-family: ''Roboto Slab'', serif; font-size: 14px; line-height: 18px;" /><span style="color: #636363; font-family: ''Roboto Slab'', serif; font-size: 14px; line-height: 18px;">Etkin M&uuml;lakat Teknikleri</spa', 'etkinlikgaleri/22002-11174941_1592708274345619_8422571197765263782_n.jpg', 'etkinlikgaleri/83556-11174941_1592708274345619_8422571197765263782_n.jpg', '2015-05-18 15:28:51', 5, '0', '0', '0, ', 2, 0),
(21, 'Android Developer Days', 6, 'Orta Doğu Teknik Üniversitesi', 'Kampüs', '19-05-2015', '', '05549891202', 'android,odtü', '', 'etkinlikgaleri/85146-1465177_595392777164162_2012279369_n.jpg', 'etkinlikgaleri/89373-1465177_595392777164162_2012279369_n.jpg', '2015-05-18 15:31:40', 5, '0', '0', '0, ', 2, 0),
(22, 'ODTÜ TOG Yaşayan Kütüphane', 6, 'Orta Doğu Teknik Üniversitesi', 'Kampüs', '19-05-2015', '', '05549891202', 'odtü,tog,kütüphane', '', 'etkinlikgaleri/56532-11132058_881296395266143_1395339413_n.jpg', 'etkinlikgaleri/97651-11132058_881296395266143_1395339413_n.jpg', '2015-05-18 15:33:45', 5, '0', '0', '0, ', 1, 0),
(23, 'MüzikFest', 1, 'Koç Üniversitesi', 'Kampüs', '18-05-2015', '20-05-2015', '05549891202', 'müzikfest,koç', '', 'etkinlikgaleri/82674-11069644_971242966220653_3248831629136230561_n.jpg', 'etkinlikgaleri/78771-11069644_971242966220653_3248831629136230561_n.jpg', '2015-05-18 15:36:49', 5, '5', '0', '0, ', 1, 0),
(24, 'BİLTEG', 3, 'İstanbul Üniversitesi', 'Avcılar Kampüsü', '18-05-2015', '', '05549891202', 'bilteg,iü', '', 'etkinlikgaleri/41195-2zyeus41.jpg', 'etkinlikgaleri/89873-2zyeus41.jpg', '2015-05-18 15:39:09', 5, '0', '0', '0, ', 1, 0),
(25, 'CMYK Medya Günleri 7', 3, 'Anadolu Üniversitesi', 'Kampüs', '19-05-2015', '', '05549891202', 'cmyk', '', 'etkinlikgaleri/92309-11150322_846859742035569_5680974011449007799_n.jpg', 'etkinlikgaleri/14095-11150322_846859742035569_5680974011449007799_n.jpg', '2015-05-18 15:41:00', 5, '0', '0', '0, ', 1, 0),
(26, '10. İLTEK Günleri', 6, 'Yıldız Teknik Üniversitesi', 'Davutpaşa Kampüsü', '20-05-2015', '', '05549891202', 'iltek,ytü', '', 'etkinlikgaleri/51292-11037654_1011284398900552_8639037179327835625_o.jpg', 'etkinlikgaleri/21175-11037654_1011284398900552_8639037179327835625_o.jpg', '2015-05-18 15:43:15', 5, '0', '0', '0, ', 0, 0),
(27, 'Bi'' Fikir Bi'' Şirket', 6, 'Koç Üniversitesi', 'Merkez Kampüs', '22-05-2015', '', '05549891202', 'koç', '', 'etkinlikgaleri/23548-Son_Eklenen-01.jpg', 'etkinlikgaleri/26688-Son_Eklenen-01.jpg', '2015-05-18 15:45:22', 5, '0', '0', '0, ', 0, 0),
(28, 'HMT KARİYER AKADEMİSİ''15 FİNAL', 1, 'Hacettepe Üniversitesi', 'Beytepe Kampüsü', '22-05-2015', '', '05549891202', 'hmt', '', 'etkinlikgaleri/21799-11046655_866097010120799_5549268116105225_n_(1).jpg', 'etkinlikgaleri/75684-11046655_866097010120799_5549268116105225_n_(1).jpg', '2015-05-18 15:48:48', 5, '0', '0', '0, ', 0, 0),
(30, 'GETEK''14', 6, 'İstanbul Üniversitesi', 'Avcılar Kampüsü', '25-05-2015', '', '?leti?im Bilgisi (Telefon, Whatsapp, Twitter vb.)', 'getek', '', 'etkinlikgaleri/60993-10384346_10204550895388989_6465800186534097134_n_(1).jpg', 'etkinlikgaleri/58782-10384346_10204550895388989_6465800186534097134_n_(1).jpg', '2015-05-18 15:53:28', 5, '0', '0', '0, ', 0, 0),
(31, 'KARİYER KAMPÜSTE!', 3, 'Sakarya Üniversitesi', 'Merkez Kampüs', '18-05-2015', '', '05549891202', 'saü,kariyer', '', 'etkinlikgaleri/99854-kariyer_kampu-ste_(1).jpg', 'etkinlikgaleri/84954-kariyer_kampu-ste_(1).jpg', '2015-05-18 15:55:09', 5, '0', '0', '0, ', 0, 0),
(32, 'Beyazıt Yönetim Zirvesi''15', 3, 'İzmir Üniversitesi', 'Beyazıt Kampüsü', '25-05-2015', '', '05549891202', 'iü,yönetim', '', 'etkinlikgaleri/89771-10986909_962779450434208_6808945740913177583_o.jpg', 'etkinlikgaleri/81210-10986909_962779450434208_6808945740913177583_o.jpg', '2015-05-18 15:56:49', 5, '0', '0', '0, ', 0, 0),
(34, 'HAIRSPRAY MÜZİKALİ', 8, 'İstanbul Teknik Üniversitesi', 'Maçka Kampüsü', '25-05-2015', '', '05549891202', 'hairspray', '', 'etkinlikgaleri/83844-11082609_890398594331798_871975690924726017_n.jpg', 'etkinlikgaleri/26789-11082609_890398594331798_871975690924726017_n.jpg', '2015-05-18 16:01:18', 5, '0', '0', '0, ', 1, 0),
(35, 'AKILLI TELEFONLAR; MOBİL DEVRİM', 6, 'Ankara Üniversitesi', 'Gölbaşı Yerleşkesi', '25-05-2015', '', '05549891202', 'akıllı,telefon', '', 'etkinlikgaleri/31623-abc.jpg', 'etkinlikgaleri/91320-abc.jpg', '2015-05-18 16:02:56', 5, '0', '0', '0, ', 0, 0),
(36, '14. Yönetim ve Mühendislik Günleri', 6, 'Orta Doğu Teknik Üniversitesi', 'Merkez Kampüs', '25-05-2015', '', '05549891202', 'yönetim', '', 'etkinlikgaleri/50819-odtuinovasyon1.jpg', 'etkinlikgaleri/83149-odtuinovasyon1.jpg', '2015-05-18 16:05:02', 5, '0', '0', '0, ', 1, 0),
(37, '5. Etkileşim Gelişim Kampı', 6, 'Ardahan Üniversitesi', 'Merkez Kampüs', '31-05-2015', '05-06-2015', 'E-posta info@3ik.org, Telefon: 05548352500', 'eğitim, kişisel gelişim, eğitim kampı', '<h1 style="border: 0px; margin: 0px 0px 5px; padding: 0px; font-size: 22px; line-height: 26px; color: #636363; font-family: ''Roboto Slab'', serif;">5. Etkileşim &amp; Gelişim Kampı Başlıyor!</h1>\r\n<p style="border: 0px; margin: 0px; padding: 5px 0px; font-size: 14px; color: #636363; font-family: ''Roboto Slab'', serif; line-height: 18px;">Yer &nbsp; &nbsp;:&nbsp;Caliente Garden Legend Hotel<br />Tarih :&nbsp;2-5 Ekim 2013<br /><br />3İK, İstanbul''da bulunan saygın &uuml;niversitelerinde faaliyet g&ouml;steren birka&ccedil; &ouml;ğrenci kul&uuml;b&uuml;n&uuml;n y&ouml;neticileri tarafından kurulan bir oluşumdur. Bundan 4 sene &ouml;nce kurulan bu yapı, şu anda T&uuml;rkiye genelinde 45 farklı &uuml;niversiteden 80 İş&amp;Kariyer kul&uuml;b&uuml;ne hitap eden bir kul&uuml;pler birliği haline gelmiştir.<br /><br />3İK''nın gelenekselleşen, " yıldızların arasında olmak " sloganı ile yola &ccedil;ıkan ve " gelecek bizimle daha g&uuml;zel " sloganı ile devam eden Etkileşim &amp; Gelişim Kampı''nın 5.si bu sene yine Caliente Garden Legend Hotel Polonezk&ouml;y''de 2 - 5 Ekim tarihleri arasında yapılıyor..<br /><br />Bu seneki kampımızda 30 farklı ilden 45 farklı &uuml;niversiteden toplamda 80 İş&amp;Kariyer Kul&uuml;b&uuml; olacak.<br />&nbsp;<br />Kamp İ&ccedil;eriği :<br /><br />* Vaka Analizleri<br />* İnteraktif Şirket Sunumları<br />* M&uuml;lakat Sim&uuml;lasyonları<br />* Birebir Şirket G&ouml;r&uuml;şmeleri<br />* Şirket ve Kul&uuml;p Proje Ortaklığı<br />* Şirket Outdoor Aktivite', 'etkinlikgaleri/70578-DSC_0075[1].JPG', 'etkinlikgaleri/41066-gopta_yepyeni_bir_egitim_projesi_h12707[1].jpg, etkinlikgaleri/67821-gumushane-de-umke-egitim-kampi-yapildi-7204343_o[1].jpg, etkinlikgaleri/97025-fidic-egitim-semineri-1605120934_m[1].jpg, etkinlikgaleri/83899-TOSFED_Egitim_Seminerleri[1].jpg, etkinlikgaleri/74893-personel-egitim-seminerleri-devam-ediyor[1].jpg', '2015-05-18 18:26:29', 5, '0', '0', '0, ', 4, 0),
(38, 'Hayvanlara Yardım', 1, 'Abant İzzet Baysal Üniversitesi', 'ads', '22-05-2015', '', '05025456465', 'hayvan, yardım', '<p>Para toplanıcak Hayvanlara yardım</p>', 'etkinlikgaleri/84707-%.jpg', 'etkinlikgaleri/67488-02_CLP.jpg', '2015-05-21 19:04:59', 13, '5', '1', '0, , 13', 2, 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `kat_id` int(2) NOT NULL AUTO_INCREMENT COMMENT 'kategori idleri',
  `kat_isim` varchar(20) COLLATE utf8_turkish_ci NOT NULL COMMENT 'kategori isimleri',
  `kat_foto` varchar(50) COLLATE utf8_turkish_ci NOT NULL COMMENT 'kategori fotoları',
  `kat_ikon` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL COMMENT 'kategori ikon yolu',
  `kat_sira` int(2) DEFAULT NULL,
  PRIMARY KEY (`kat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=9 ;

--
-- Tablo döküm verisi `kategori`
--

INSERT INTO `kategori` (`kat_id`, `kat_isim`, `kat_foto`, `kat_ikon`, `kat_sira`) VALUES
(1, 'Konser', 'web/images/e1.jpg', NULL, NULL),
(2, 'Şenlik', 'web/images/e1.jpg', NULL, NULL),
(3, 'Konferans', 'web/images/e1.jpg', NULL, NULL),
(5, 'Yarışma', 'web/images/e1.jpg', NULL, NULL),
(6, 'Eğitim', 'web/images/e1.jpg', NULL, NULL),
(7, 'Gezi', 'web/images/e1.jpg', NULL, NULL),
(8, 'Performans', 'web/images/e1.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE IF NOT EXISTS `kullanici` (
  `k_id` int(5) NOT NULL AUTO_INCREMENT COMMENT 'kullaniciya atanan id',
  `k_adi` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_520_ci NOT NULL COMMENT 'kullanicinin adi',
  `k_soyadi` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_520_ci NOT NULL COMMENT 'kullanicinin soyadi',
  `k_kullaniciadi` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_520_ci NOT NULL COMMENT 'kullanicinin kullaniciadi',
  `k_email` varchar(50) CHARACTER SET utf32 COLLATE utf32_unicode_520_ci NOT NULL COMMENT 'kullanici maili',
  `k_telefonu` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_520_ci NOT NULL COMMENT 'kullanici telefonu',
  `k_universitesi` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL COMMENT 'kullanici universitesi',
  `k_avatar` varchar(100) DEFAULT NULL COMMENT 'kullanici avatarlari',
  `k_twitter` varchar(50) DEFAULT NULL COMMENT 'kullanici twitter adresi',
  `k_facebook` varchar(50) DEFAULT NULL COMMENT 'kullanici facebook adresi',
  `k_instagram` varchar(50) DEFAULT NULL COMMENT 'kullanici instagram adresi',
  `k_gplus` varchar(50) DEFAULT NULL COMMENT 'kullanici google plus adresi',
  `k_hakkinda` varchar(200) DEFAULT NULL,
  `k_sifre_md5` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_520_ci NOT NULL COMMENT 'kullanici sifresi md5 hali',
  PRIMARY KEY (`k_id`),
  UNIQUE KEY `k_kullaniciadi` (`k_kullaniciadi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`k_id`, `k_adi`, `k_soyadi`, `k_kullaniciadi`, `k_email`, `k_telefonu`, `k_universitesi`, `k_avatar`, `k_twitter`, `k_facebook`, `k_instagram`, `k_gplus`, `k_hakkinda`, `k_sifre_md5`) VALUES
(5, 'Lokman', 'Hekimoğlu', 'Equal1zer', 'lokmanhekimoglu@gmail.com', '05075668831', 'İstanbul Üniversitesi', 'profilfoto/24812-be36ce78560c3e9cf7af81460f58ea5b[1].jpeg', 'lokman', 'lokman', 'lokman', NULL, NULL, '7b0be4c74217c2f6c046f23c242a46df'),
(7, 'Gürcan', 'Pehlevan', 'gurcanphlvn', 'grcnphlvn54@gmail.com', '05549891292', 'İstanbul Üniversitesi', NULL, NULL, NULL, NULL, NULL, NULL, 'e10adc3949ba59abbe56e057f20f883e'),
(13, 'Lokman', 'Hekimoğlu', 'Lokman', 'lokmanhekimoglu@gmail.com', '6465556', 'İstanbul Üniversitesi', 'profilfoto/89249-BY85qPUIQAAnTZM.jpg', 'Lokumunuzz', 'LokmanHekimogli', 'lkmnhekm', NULL, NULL, 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(2) NOT NULL AUTO_INCREMENT COMMENT 'slider id',
  `s_baslik` varchar(50) COLLATE utf8_turkish_ci NOT NULL COMMENT 'slider basliklari',
  `s_alt_baslik` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_520_ci NOT NULL COMMENT 'slider alt basliklari',
  `s_resim_yolu` varchar(50) CHARACTER SET utf32 COLLATE utf32_unicode_520_ci NOT NULL COMMENT 'slider resim urlleri',
  `s_link` varchar(50) CHARACTER SET utf32 COLLATE utf32_unicode_520_ci NOT NULL COMMENT 'sliderin gidecegi link',
  `s_sira` int(2) NOT NULL COMMENT 'slider sirasi',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=6 ;

--
-- Tablo döküm verisi `slider`
--

INSERT INTO `slider` (`id`, `s_baslik`, `s_alt_baslik`, `s_resim_yolu`, `s_link`, `s_sira`) VALUES
(3, 'İstanbul Üniversitesi Bahar Şenlikleri', 'Bahar şenlikleri çılgınlığı başladı!', 'slider1.jpg', 'http://deneme1.com', 0),
(4, 'Koç Üniversitesi Müzik Fest', 'Müziğe doyacağınız bir festival!', 'slider2.jpg', '', 0),
(5, 'Hairspray Müzikalı', 'Müzikal sevenlere müjde!', 'slider3.jpg', '', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
