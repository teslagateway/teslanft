-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 15, 2022 at 04:43 AM
-- Server version: 10.1.46-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teslaga_nft`
--

-- --------------------------------------------------------

--
-- Table structure for table `alt_urun_kategori`
--

CREATE TABLE `alt_urun_kategori` (
  `id` int(11) NOT NULL,
  `sec_kat` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `ust_id` int(11) NOT NULL,
  `sira` int(11) NOT NULL,
  `kategori_adi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `seo` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `durum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bilgiler`
--

CREATE TABLE `bilgiler` (
  `id` int(11) NOT NULL,
  `adi` text COLLATE utf8_turkish_ci NOT NULL,
  `aciklama` longtext COLLATE utf8_turkish_ci NOT NULL,
  `resim` text COLLATE utf8_turkish_ci NOT NULL,
  `seo` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `durum` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `bilgiler`
--

INSERT INTO `bilgiler` (`id`, `adi`, `aciklama`, `resim`, `seo`, `durum`) VALUES
(2, 'Gizlilik ve Güvenlik', '<p><span style=\"color: rgb(51, 51, 51); font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" text-align:=\"\" justify;=\"\" background-color:=\"\" rgb(247,=\"\" 247,=\"\" 247);\"=\"\">Aşağıdaki maddeler&nbsp;</span><a href=\"https://www.dolarsepet.com/\">www.<span style=\"color: rgb(51, 51, 51); font-family: arial, helvetica, sans-serif; font-size: 12px;\">nft.teslagateway.com</span>.com</a><a href=\"https://www.ogretmentavsiyesi.com/\"></a><a href=\"http://www.kitapisler.com/\" style=\"font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" background-color:=\"\" rgb(247,=\"\" 247,=\"\" 247);=\"\" color:=\"\" rgb(102,=\"\" 102,=\"\" 102);=\"\" margin:=\"\" 0px;=\"\" padding:=\"\" border:=\"\" vertical-align:=\"\" baseline;=\"\" text-align:=\"\" justify;\"=\"\"></a><span style=\"color: rgb(51, 51, 51); font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" text-align:=\"\" justify;=\"\" background-color:=\"\" rgb(247,=\"\" 247,=\"\" 247);\"=\"\">&nbsp;web sitesi üzerindeki bilgi toplama ve dağıtımı işlemlerinin kurallarını içermektedir.</span><br style=\"font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" color:=\"\" rgb(51,=\"\" 51,=\"\" 51);=\"\" text-align:=\"\" justify;=\"\" background-color:=\"\" rgb(247,=\"\" 247,=\"\" 247);\"=\"\"><br style=\"font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" color:=\"\" rgb(51,=\"\" 51,=\"\" 51);=\"\" text-align:=\"\" justify;=\"\" background-color:=\"\" rgb(247,=\"\" 247,=\"\" 247);\"=\"\"><span style=\"color: rgb(51, 51, 51); font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" text-align:=\"\" justify;=\"\" background-color:=\"\" rgb(247,=\"\" 247,=\"\" 247);\"=\"\">IP adresinizi sunucularımızdaki sorunların giderilmesi ve internet sitemizi yönetmek için kullanacağız. IP adresiniz, sizi ve alışveriş sepetinizi tanımak ve açık demografik bilgilerinizin toplanması için kullanılacaktır.</span><br style=\"font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" color:=\"\" rgb(51,=\"\" 51,=\"\" 51);=\"\" text-align:=\"\" justify;=\"\" background-color:=\"\" rgb(247,=\"\" 247,=\"\" 247);\"=\"\"><br style=\"font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" color:=\"\" rgb(51,=\"\" 51,=\"\" 51);=\"\" text-align:=\"\" justify;=\"\" background-color:=\"\" rgb(247,=\"\" 247,=\"\" 247);\"=\"\"><span style=\"color: rgb(51, 51, 51); font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" text-align:=\"\" justify;=\"\" background-color:=\"\" rgb(247,=\"\" 247,=\"\" 247);\"=\"\">Sitemiz içerisinde başka sitelere de bağlantılar bulunmaktadır.&nbsp;</span><a href=\"https://www.dolarsepet.com/index.html\">www.</a><span style=\"color: rgb(51, 51, 51); font-family: arial, helvetica, sans-serif; font-size: 12px;\">nft.teslagateway.com</span><a href=\"https://www.dolarsepet.com/index.html\" style=\"background-color: rgb(255, 255, 255);\">.com</a><a href=\"https://www.ogretmentavsiyesi.com/index.html\" style=\"background-color: rgb(255, 255, 255);\"></a><a href=\"http://www.kitapisler.com/\" open=\"\" sans\",=\"\" sans-serif;=\"\" background-color:=\"\" rgb(247,=\"\" 247,=\"\" 247);=\"\" color:=\"\" rgb(102,=\"\" 102,=\"\" 102);=\"\" margin:=\"\" 0px;=\"\" padding:=\"\" border:=\"\" vertical-align:=\"\" baseline;=\"\" text-align:=\"\" justify;\"=\"\" style=\"background-color: rgb(255, 255, 255);\"></a><span open=\"\" sans\",=\"\" sans-serif;=\"\" text-align:=\"\" justify;=\"\" background-color:=\"\" rgb(247,=\"\" 247,=\"\" 247);\"=\"\" style=\"color: rgb(51, 51, 51);\">&nbsp;adlı web sitemiz diğer sitelerin gizlilik politikaları ve içeriklerinden sorumlu değildir.</span></p><p><br style=\"font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" color:=\"\" rgb(51,=\"\" 51,=\"\" 51);=\"\" text-align:=\"\" justify;=\"\" background-color:=\"\" rgb(247,=\"\" 247,=\"\" 247);\"=\"\"><span style=\"color: rgb(51, 51, 51); font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" text-align:=\"\" justify;=\"\" background-color:=\"\" rgb(247,=\"\" 247,=\"\" 247);\"=\"\">Sitemizin kayıt formunda kullanıcılarımız, iletişim bilgilerini (isim, adres, telefon, email adresi gibi), hiçbir şekilde 3. şahıslarla paylaşılmamaktadır.</span><br style=\"font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" color:=\"\" rgb(51,=\"\" 51,=\"\" 51);=\"\" text-align:=\"\" justify;=\"\" background-color:=\"\" rgb(247,=\"\" 247,=\"\" 247);\"=\"\"><br style=\"font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" color:=\"\" rgb(51,=\"\" 51,=\"\" 51);=\"\" text-align:=\"\" justify;=\"\" background-color:=\"\" rgb(247,=\"\" 247,=\"\" 247);\"=\"\"><span style=\"color: rgb(51, 51, 51); font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" text-align:=\"\" justify;=\"\" background-color:=\"\" rgb(247,=\"\" 247,=\"\" 247);\"=\"\">Üye Alıcının Gizlilik Yükümlülüğü</span><br style=\"font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" color:=\"\" rgb(51,=\"\" 51,=\"\" 51);=\"\" text-align:=\"\" justify;=\"\" background-color:=\"\" rgb(247,=\"\" 247,=\"\" 247);\"=\"\"><br style=\"font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" color:=\"\" rgb(51,=\"\" 51,=\"\" 51);=\"\" text-align:=\"\" justify;=\"\" background-color:=\"\" rgb(247,=\"\" 247,=\"\" 247);\"=\"\"><span style=\"color: rgb(51, 51, 51); font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" text-align:=\"\" justify;=\"\" background-color:=\"\" rgb(247,=\"\" 247,=\"\" 247);\"=\"\">İşbu&nbsp;</span><a href=\"https://www.dolarsepet.com/\">www.<span style=\"color: rgb(51, 51, 51); font-family: arial, helvetica, sans-serif; font-size: 12px;\">nft.teslagateway.com</span>.com</a><a href=\"https://www.ogretmentavsiyesi.com/\"></a><a href=\"http://www.kitapisler.com/\" style=\"font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" background-color:=\"\" rgb(247,=\"\" 247,=\"\" 247);=\"\" color:=\"\" rgb(102,=\"\" 102,=\"\" 102);=\"\" margin:=\"\" 0px;=\"\" padding:=\"\" border:=\"\" vertical-align:=\"\" baseline;=\"\" text-align:=\"\" justify;\"=\"\"></a><span style=\"color: rgb(51, 51, 51); font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" text-align:=\"\" justify;=\"\" background-color:=\"\" rgb(247,=\"\" 247,=\"\" 247);\"=\"\">&nbsp;sitesinde yer alan tüm ürün ve hizmetlerin bilgi ve görsel malzemeleri açısından&nbsp; markaların korunması hakkında Kanun Hükmünde Kararname, Patent Hukuku ve Haksız Rekabetin Önlenmesine dair mevzuat hükümleri uyarınca sair tüm hakları saklıdır. Üye, işbu web sitesi kapsamında sahip olacağı her türlü bilgi ve görsel malzemenin&nbsp;</span><font color=\"#333333\" face=\"Open Sans, sans-serif\"><span style=\"font-size: 14px;\">www.dolarsepet.com</span></font><span style=\"background-color: rgb(247, 247, 247); color: rgb(51, 51, 51); font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" text-align:=\"\" justify;\"=\"\">`a&nbsp;ait olduğunu, bu bilgi ve malzemeleri saklı tutacağını, başka yerde kullanmayacağını ve üçüncü kişilere hiçbir şekilde ifşa etmeyeceğini kabul, beyan ve taahhüt eder.\"</span></p><p><br style=\"font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" color:=\"\" rgb(51,=\"\" 51,=\"\" 51);=\"\" text-align:=\"\" justify;=\"\" background-color:=\"\" rgb(247,=\"\" 247,=\"\" 247);\"=\"\"><span style=\"color: rgb(51, 51, 51); font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" text-align:=\"\" justify;=\"\" background-color:=\"\" rgb(247,=\"\" 247,=\"\" 247);\"=\"\">Güvenlik</span><br style=\"font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" color:=\"\" rgb(51,=\"\" 51,=\"\" 51);=\"\" text-align:=\"\" justify;=\"\" background-color:=\"\" rgb(247,=\"\" 247,=\"\" 247);\"=\"\"><br style=\"font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" color:=\"\" rgb(51,=\"\" 51,=\"\" 51);=\"\" text-align:=\"\" justify;=\"\" background-color:=\"\" rgb(247,=\"\" 247,=\"\" 247);\"=\"\"><span style=\"color: rgb(51, 51, 51); font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" text-align:=\"\" justify;=\"\" background-color:=\"\" rgb(247,=\"\" 247,=\"\" 247);\"=\"\">Sitemizde bilgi kaybını, bilginin izin verilmeyen kullanımını ve izinsiz değiştirilmesini engellemek için firmamızca uygulanan güvenlik önlemleri bulunmaktadır. Bu güvenlik önlemleri şunlardır;</span><br style=\"font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" color:=\"\" rgb(51,=\"\" 51,=\"\" 51);=\"\" text-align:=\"\" justify;=\"\" background-color:=\"\" rgb(247,=\"\" 247,=\"\" 247);\"=\"\"><span style=\"color: rgb(51, 51, 51); font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" text-align:=\"\" justify;=\"\" background-color:=\"\" rgb(247,=\"\" 247,=\"\" 247);\"=\"\">1- 256&nbsp;bit SSL Güvenlik sistemi kullanılmaktadır.</span><br style=\"font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" color:=\"\" rgb(51,=\"\" 51,=\"\" 51);=\"\" text-align:=\"\" justify;=\"\" background-color:=\"\" rgb(247,=\"\" 247,=\"\" 247);\"=\"\"><span style=\"color: rgb(51, 51, 51); font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" text-align:=\"\" justify;=\"\" background-color:=\"\" rgb(247,=\"\" 247,=\"\" 247);\"=\"\">2- Müşterilerin Kredi Kartı Bilgileri sistemimizde tutulmamaktadır.</span><br style=\"font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" color:=\"\" rgb(51,=\"\" 51,=\"\" 51);=\"\" text-align:=\"\" justify;=\"\" background-color:=\"\" rgb(247,=\"\" 247,=\"\" 247);\"=\"\"><span style=\"color: rgb(51, 51, 51); font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" text-align:=\"\" justify;=\"\" background-color:=\"\" rgb(247,=\"\" 247,=\"\" 247);\"=\"\">3- Sisteme giriş şifreleriniz veritabanımızda şifreli olarak durmaktadır.</span><br style=\"font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" color:=\"\" rgb(51,=\"\" 51,=\"\" 51);=\"\" text-align:=\"\" justify;=\"\" background-color:=\"\" rgb(247,=\"\" 247,=\"\" 247);\"=\"\"><br style=\"font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" color:=\"\" rgb(51,=\"\" 51,=\"\" 51);=\"\" text-align:=\"\" justify;=\"\" background-color:=\"\" rgb(247,=\"\" 247,=\"\" 247);\"=\"\"><span style=\"color: rgb(51, 51, 51); font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" text-align:=\"\" justify;=\"\" background-color:=\"\" rgb(247,=\"\" 247,=\"\" 247);\"=\"\">Bilgi Birleştirilmesi</span><br style=\"font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" color:=\"\" rgb(51,=\"\" 51,=\"\" 51);=\"\" text-align:=\"\" justify;=\"\" background-color:=\"\" rgb(247,=\"\" 247,=\"\" 247);\"=\"\"><br style=\"font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" color:=\"\" rgb(51,=\"\" 51,=\"\" 51);=\"\" text-align:=\"\" justify;=\"\" background-color:=\"\" rgb(247,=\"\" 247,=\"\" 247);\"=\"\"><span style=\"color: rgb(51, 51, 51); font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" text-align:=\"\" justify;=\"\" background-color:=\"\" rgb(247,=\"\" 247,=\"\" 247);\"=\"\">Sitemizde verdiğiniz bilgilerinizle üçüncü partilerden alınan bilgiler birleştirilmektedir. Kullanıcılarımız siteye kayıt bıraktıkları her noktada, irtibat bilgilerinin firmamız veya tarafımızca belirlenen firmalar tarafından kullanılıp kullanılamayacağını belirtebilirler. Kullanıcılarımızın bu konuda yaptıkları seçimi her zaman değiştirme hakkı vardır. İsteğine bağlı olarak kullanıcı siteye kaydını iptal ederek kendi bilgilerini veritabanımızdan silebilir.</span><br style=\"font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" color:=\"\" rgb(51,=\"\" 51,=\"\" 51);=\"\" text-align:=\"\" justify;=\"\" background-color:=\"\" rgb(247,=\"\" 247,=\"\" 247);\"=\"\"><br style=\"font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" color:=\"\" rgb(51,=\"\" 51,=\"\" 51);=\"\" text-align:=\"\" justify;=\"\" background-color:=\"\" rgb(247,=\"\" 247,=\"\" 247);\"=\"\"><span style=\"color: rgb(51, 51, 51); font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" text-align:=\"\" justify;=\"\" background-color:=\"\" rgb(247,=\"\" 247,=\"\" 247);\"=\"\">Düzeltme / Yenileme</span><br style=\"font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" color:=\"\" rgb(51,=\"\" 51,=\"\" 51);=\"\" text-align:=\"\" justify;=\"\" background-color:=\"\" rgb(247,=\"\" 247,=\"\" 247);\"=\"\"><br style=\"font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" color:=\"\" rgb(51,=\"\" 51,=\"\" 51);=\"\" text-align:=\"\" justify;=\"\" background-color:=\"\" rgb(247,=\"\" 247,=\"\" 247);\"=\"\"><span style=\"color: rgb(51, 51, 51); font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" text-align:=\"\" justify;=\"\" background-color:=\"\" rgb(247,=\"\" 247,=\"\" 247);\"=\"\">Kullanıcılarımız sitemizde kayıtlı olan tüm bilgilerini dilediğinde değiştirme hakkına sahiptir.</span></p>', 'indir.jpg', 'Gizlilik-ve-Guvenlik', 1),
(4, 'İptal ve İade Şartları ', '<p style=\"font-size: 9pt; color: rgb(51, 51, 51); font-family: Calibri, \" calibri=\"\" bold\",=\"\" \"calibri=\"\" bold=\"\" italic\";\"=\"\"><span style=\"font-family: arial, helvetica, sans-serif;\">Değerli Müşterilerimiz</span></p><p style=\"font-size: 9pt; color: rgb(51, 51, 51); font-family: Calibri, \" calibri=\"\" bold\",=\"\" \"calibri=\"\" bold=\"\" italic\";\"=\"\">&nbsp; &nbsp;<span style=\"font-family: arial, helvetica, sans-serif; font-size: 9pt;\">Satın aldığınız ürünü, kargodan teslim aldığınız günden itibaren 14 gün içinde nft.teslagateway.com’a başvuruda bulunarak aşağıdaki koşullar dahilinde iade edebilirsiniz.</span></p><p style=\"font-size: 9pt; color: rgb(51, 51, 51); font-family: Calibri, \" calibri=\"\" bold\",=\"\" \"calibri=\"\" bold=\"\" italic\";\"=\"\"><span style=\"font-family: arial, helvetica, sans-serif;\">İadelerinizle Alakalı Her Türlü Sorularınızda www.dolarsepet.com Adresinin Size Atamış Olduğu Sipariş Numarasını Örneğin: (Ödeme Bilgileri Bölümündeki Sipariş ID) Belirtmeniz Gerekmektedir...</span></p><p style=\"font-size: 9pt; color: rgb(51, 51, 51); font-family: Calibri, \" calibri=\"\" bold\",=\"\" \"calibri=\"\" bold=\"\" italic\";\"=\"\"><span style=\"font-family: arial, helvetica, sans-serif;\">Dolarsepet.com</span><span style=\"font-family: arial, helvetica, sans-serif;\">&nbsp;tüketici lehine hareket etmeyi, her türlü sorunu yasaca belirlenmiş süreden daha erken ve kalite politikasına uygun olarak çözmeyi temel ilke edinmiştir.</span></p><p style=\"font-size: 9pt; color: rgb(51, 51, 51); font-family: Calibri, \" calibri=\"\" bold\",=\"\" \"calibri=\"\" bold=\"\" italic\";\"=\"\"><span style=\"font-family: arial, helvetica, sans-serif;\">&nbsp;</span><span style=\"font-family: arial, helvetica, sans-serif;\">nft.teslagateway.com</span><span style=\"font-family: arial, helvetica, sans-serif; font-size: 9pt;\">‘dan satın alınan ürünler, teslim tarihinden itibaren (14) gün içerisinde değişim yapabilmektedir.</span></p><p style=\"font-size: 9pt; color: rgb(51, 51, 51); font-family: Calibri, \" calibri=\"\" bold\",=\"\" \"calibri=\"\" bold=\"\" italic\";\"=\"\"><span style=\"font-family: arial, helvetica, sans-serif;\">Bir ürünün iade edilebilmesi genel olarak aşağıdaki şartlara bağlıdır:</span></p><p style=\"font-size: 9pt; color: rgb(51, 51, 51); font-family: Calibri, \" calibri=\"\" bold\",=\"\" \"calibri=\"\" bold=\"\" italic\";\"=\"\"><span style=\"font-family: arial, helvetica, sans-serif;\">Satın aldığınız ürünleri tahrip etmeden, kullanmadan ve ürünün tekrar satılabilirliğini bozmadan, teslim tarihinden itibaren yedi (14) günlük süre içinde neden belirterek iade edebilirsiniz.</span></p><p style=\"font-size: 9pt; color: rgb(51, 51, 51); font-family: Calibri, \" calibri=\"\" bold\",=\"\" \"calibri=\"\" bold=\"\" italic\";\"=\"\"><span style=\"font-family: arial, helvetica, sans-serif;\">Dolarsepet.com</span><span style=\"font-family: arial, helvetica, sans-serif;\">&nbsp;satılan tüm ürünler . orijinal olup üretici firmaların ve Dolarsepet</span><span style=\"font-family: arial, helvetica, sans-serif;\">.com</span><span style=\"font-family: arial, helvetica, sans-serif; font-size: 9pt;\">&nbsp; garantisi altındadır.</span></p><p style=\"font-size: 9pt; color: rgb(51, 51, 51); font-family: Calibri, \" calibri=\"\" bold\",=\"\" \"calibri=\"\" bold=\"\" italic\";\"=\"\"><span style=\"font-family: arial, helvetica, sans-serif;\">Kullanılmış, ambalajı açılmış, tahrip edilmiş vb. şekildeki ürünler iade edilemez.</span></p><p style=\"font-size: 9pt; color: rgb(51, 51, 51); font-family: Calibri, \" calibri=\"\" bold\",=\"\" \"calibri=\"\" bold=\"\" italic\";\"=\"\"><span style=\"font-family: arial, helvetica, sans-serif;\">Görüntülü DVD, Flash Disk görüntülü Eğitim Setleri &nbsp;vb. için; ürün kutusunda yer alan koruma bandı çıkarılmamış olmalıdır. Ürünlerin diğer yerlerinde çizik, hasar, darbe, sıvı teması vs. olmamalıdır.</span></p><p style=\"font-size: 9pt; color: rgb(51, 51, 51); font-family: Calibri, \" calibri=\"\" bold\",=\"\" \"calibri=\"\" bold=\"\" italic\";\"=\"\"><span style=\"font-family: arial, helvetica, sans-serif;\">Orijinal ambalaja sahip ürünlerin iadesi, orijinal ambalaj ile yapılmalıdır.</span></p><p style=\"font-size: 9pt; color: rgb(51, 51, 51); font-family: Calibri, \" calibri=\"\" bold\",=\"\" \"calibri=\"\" bold=\"\" italic\";\"=\"\"><span style=\"font-family: arial, helvetica, sans-serif;\">İade edilecek ürünün şirketimiz adına kesilecek bir iade faturası ile iade faturası düzenleme imkanı bulunmayan durumlarda, ürüne ait fatura ve sevk irsaliyesinin aslıyla birlikte veya yazarkasa fişi ile birlikte iade edilmesi gerekmektedir.</span></p><p style=\"font-size: 9pt; color: rgb(51, 51, 51); font-family: Calibri, \" calibri=\"\" bold\",=\"\" \"calibri=\"\" bold=\"\" italic\";\"=\"\"><span style=\"font-family: arial, helvetica, sans-serif;\">İade faturası ya da fatura ve sevk irsaliyesi asıllarının veya yazarkasa fişinin temin edilemediği durumlarda, bundan kaynaklanan KDV vb. mali yükümlülükler iade edilecek bedelden indirilir.</span></p><p style=\"font-size: 9pt; color: rgb(51, 51, 51); font-family: Calibri, \" calibri=\"\" bold\",=\"\" \"calibri=\"\" bold=\"\" italic\";\"=\"\"><span style=\"font-family: arial, helvetica, sans-serif;\">Üründe ve ambalajında herhangi bir yazı yazma, açılma, bozulma, kırılma, tahrip, yırtılma, kullanılma vb. durumlar tespit edildiği hallerde ve ürünün müşteriye teslim edildiği andaki hali ile iade edilememesi durumunda, ürün iade alınmaz ve bedeli iade edilmez.</span></p><p style=\"font-size: 9pt; color: rgb(51, 51, 51); font-family: Calibri, \" calibri=\"\" bold\",=\"\" \"calibri=\"\" bold=\"\" italic\";\"=\"\"><span style=\"font-family: arial, helvetica, sans-serif;\">İade şartlarına uygun durumlarda yapılan gönderimlerde taşıma masrafı &nbsp;gidiş – geliş müşteri tarafından ödenecektir.</span></p><p style=\"font-size: 9pt; color: rgb(51, 51, 51); font-family: Calibri, \" calibri=\"\" bold\",=\"\" \"calibri=\"\" bold=\"\" italic\";\"=\"\"><span style=\"font-family: arial, helvetica, sans-serif;\">İade edilen ürünler teslimatta kullanılan firma ile geri gönderilmelidir.&nbsp;</span></p><p style=\"font-size: 9pt; color: rgb(51, 51, 51); font-family: Calibri, \" calibri=\"\" bold\",=\"\" \"calibri=\"\" bold=\"\" italic\";\"=\"\"><span style=\"font-family: arial, helvetica, sans-serif;\">Baskısında hata bulunan,eksik,fazla veya yanlış basılmış ürünlerin iadesinde kargo ücreti geliş ve gidişde www.dolarsepet.com`a aittir.</span></p><p style=\"font-size: 9pt; color: rgb(51, 51, 51); font-family: Calibri, \" calibri=\"\" bold\",=\"\" \"calibri=\"\" bold=\"\" italic\";\"=\"\"><span style=\"font-family: arial, helvetica, sans-serif;\">Siparişin yanlış gönderilmesinden kaynaklanan değişimlerde kargo ücreti geliş ve gidiş olarak www.dolarsepet.com`a aittir.</span></p><p style=\"font-size: 9pt; color: rgb(51, 51, 51); font-family: Calibri, \" calibri=\"\" bold\",=\"\" \"calibri=\"\" bold=\"\" italic\";\"=\"\"><span style=\"font-family: arial, helvetica, sans-serif;\">Siparişin yanlış oluşturulmasından kaynaklanan değişimlerde hata müşteriye ait olduğu için kargo ücreti geliş ve gidiş olmak üzere müşteriye aittir.</span></p>', 'indir_1_1.jpg', 'Iptal-ve-Iade-Sartlari-', 1),
(5, 'Mesafeli Satış Sözleşmesi', '', 'indir_3.png', 'Mesafeli-Satis-Sozlesmesi', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bloglar`
--

CREATE TABLE `bloglar` (
  `id` int(11) NOT NULL,
  `durum` int(11) NOT NULL,
  `resim` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `adi` text COLLATE utf8_turkish_ci NOT NULL,
  `aciklama` longtext COLLATE utf8_turkish_ci NOT NULL,
  `tarih` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `etiket` text COLLATE utf8_turkish_ci NOT NULL,
  `seo` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `hit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `bloglar`
--

INSERT INTO `bloglar` (`id`, `durum`, `resim`, `adi`, `aciklama`, `tarih`, `etiket`, `seo`, `hit`) VALUES
(1, 1, 'nft_nedir_nasil_uretilir_dijital_eserlerden_nasil_para_kazanilir_h10199_e74d1.jpg', 'NFT Nedir?', '', '14 Mayıs 2022, 20:58', '', 'NFT-Nedir-', 0),
(2, 1, 'nft_nedir_3.jpg', 'NFT Nasıl Yapılır Nasıl Satılır?', '', '14 Mayıs 2022, 20:57', '', 'NFT-Nasil-Yapilir-Nasil-Satilir-', 1),
(3, 1, '645486_2089692839.jpg', 'NFT Sektörünün Gelişimi ve Geleceği', '<p style=\"overflow-wrap: break-word; margin-bottom: 20px; font-size: 15px; line-height: 1.85; color: rgb(27, 28, 42); font-family: Poppins;\"><br></p>', '14 Mayıs 2022, 20:57', '', 'NFT-Sektorunun-Gelisimi-ve-Gelecegi', 1),
(4, 1, 'Metaverse_750x375.jpg', 'Meta Evrene Geçiş', '<br>', '14 Mayıs 2022, 20:57', '', 'Meta-Evrene-Gecis', 2);

-- --------------------------------------------------------

--
-- Table structure for table `ebulten`
--

CREATE TABLE `ebulten` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `tarih` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ilceler`
--

CREATE TABLE `ilceler` (
  `id` int(11) NOT NULL,
  `il_id` int(11) DEFAULT NULL,
  `baslik` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ilceler`
--

INSERT INTO `ilceler` (`id`, `il_id`, `baslik`) VALUES
(1, 1, 'Seyhan'),
(2, 1, 'Ceyhan'),
(3, 1, 'Feke'),
(4, 1, 'Karaisalı'),
(5, 1, 'Karataş'),
(6, 1, 'Kozan'),
(7, 1, 'Pozantı'),
(8, 1, 'Saimbeyli'),
(9, 1, 'Tufanbeyli'),
(10, 1, 'Yumurtalık'),
(11, 1, 'Yüreğir'),
(12, 1, 'Aladağ'),
(13, 1, 'İmamoğlu'),
(14, 1, 'Sarıçam'),
(15, 1, 'Çukurova'),
(16, 2, 'Adıyaman Merkez'),
(17, 2, 'Besni'),
(18, 2, 'Çelikhan'),
(19, 2, 'Gerger'),
(20, 2, 'Gölbaşı / Adıyaman'),
(21, 2, 'Kahta'),
(22, 2, 'Samsat'),
(23, 2, 'Sincik'),
(24, 2, 'Tut'),
(25, 3, 'Afyonkarahisar Merkez'),
(26, 3, 'Bolvadin'),
(27, 3, 'Çay'),
(28, 3, 'Dazkırı'),
(29, 3, 'Dinar'),
(30, 3, 'Emirdağ'),
(31, 3, 'İhsaniye'),
(32, 3, 'Sandıklı'),
(33, 3, 'Sinanpaşa'),
(34, 3, 'Sultandağı'),
(35, 3, 'Şuhut'),
(36, 3, 'Başmakçı'),
(37, 3, 'Bayat / Afyonkarahisar'),
(38, 3, 'İscehisar'),
(39, 3, 'Çobanlar'),
(40, 3, 'Evciler'),
(41, 3, 'Hocalar'),
(42, 3, 'Kızılören'),
(43, 4, 'Ağrı Merkez'),
(44, 4, 'Diyadin'),
(45, 4, 'Doğubayazıt'),
(46, 4, 'Eleşkirt'),
(47, 4, 'Hamur'),
(48, 4, 'Patnos'),
(49, 4, 'Taşlıçay'),
(50, 4, 'Tutak'),
(51, 5, 'Amasya Merkez'),
(52, 5, 'Göynücek'),
(53, 5, 'Gümüşhacıköy'),
(54, 5, 'Merzifon'),
(55, 5, 'Suluova'),
(56, 5, 'Taşova'),
(57, 5, 'Hamamözü'),
(58, 6, 'Altındağ'),
(59, 6, 'Ayaş'),
(60, 6, 'Bala'),
(61, 6, 'Beypazarı'),
(62, 6, 'Çamlıdere'),
(63, 6, 'Çankaya'),
(64, 6, 'Çubuk'),
(65, 6, 'Elmadağ'),
(66, 6, 'Güdül'),
(67, 6, 'Haymana'),
(68, 6, 'Kalecik'),
(69, 6, 'Kızılcahamam'),
(70, 6, 'Nallıhan'),
(71, 6, 'Polatlı'),
(72, 6, 'Şereflikoçhisar'),
(73, 6, 'Yenimahalle'),
(74, 6, 'Gölbaşı / Ankara'),
(75, 6, 'Keçiören'),
(76, 6, 'Mamak'),
(77, 6, 'Sincan'),
(78, 6, 'Kazan'),
(79, 6, 'Akyurt'),
(80, 6, 'Etimesgut'),
(81, 6, 'Evren'),
(82, 6, 'Pursaklar'),
(83, 7, 'Akseki'),
(84, 7, 'Alanya'),
(85, 7, 'Elmalı'),
(86, 7, 'Finike'),
(87, 7, 'Gazipaşa'),
(88, 7, 'Gündoğmuş'),
(89, 7, 'Kaş'),
(90, 7, 'Korkuteli'),
(91, 7, 'Kumluca'),
(92, 7, 'Manavgat'),
(93, 7, 'Serik'),
(94, 7, 'Demre'),
(95, 7, 'İbradı'),
(96, 7, 'Kemer / Antalya'),
(97, 7, 'Aksu / Antalya'),
(98, 7, 'Döşemealtı'),
(99, 7, 'Kepez'),
(100, 7, 'Konyaaltı'),
(101, 7, 'Muratpaşa'),
(102, 8, 'Ardanuç'),
(103, 8, 'Arhavi'),
(104, 8, 'Artvin Merkez'),
(105, 8, 'Borçka'),
(106, 8, 'Hopa'),
(107, 8, 'Şavşat'),
(108, 8, 'Yusufeli'),
(109, 8, 'Murgul'),
(110, 9, 'Bozdoğan'),
(111, 9, 'Çine'),
(112, 9, 'Germencik'),
(113, 9, 'Karacasu'),
(114, 9, 'Koçarlı'),
(115, 9, 'Kuşadası'),
(116, 9, 'Kuyucak'),
(117, 9, 'Nazilli'),
(118, 9, 'Söke'),
(119, 9, 'Sultanhisar'),
(120, 9, 'Yenipazar / Aydın'),
(121, 9, 'Buharkent'),
(122, 9, 'İncirliova'),
(123, 9, 'Karpuzlu'),
(124, 9, 'Köşk'),
(125, 9, 'Didim'),
(126, 9, 'Efeler'),
(127, 10, 'Ayvalık'),
(128, 10, 'Balya'),
(129, 10, 'Bandırma'),
(130, 10, 'Bigadiç'),
(131, 10, 'Burhaniye'),
(132, 10, 'Dursunbey'),
(133, 10, 'Edremit / Balıkesir'),
(134, 10, 'Erdek'),
(135, 10, 'Gönen / Balıkesir'),
(136, 10, 'Havran'),
(137, 10, 'İvrindi'),
(138, 10, 'Kepsut'),
(139, 10, 'Manyas'),
(140, 10, 'Savaştepe'),
(141, 10, 'Sındırgı'),
(142, 10, 'Susurluk'),
(143, 10, 'Marmara'),
(144, 10, 'Gömeç'),
(145, 10, 'Altıeylül'),
(146, 10, 'Karesi'),
(147, 11, 'Bilecik Merkez'),
(148, 11, 'Bozüyük'),
(149, 11, 'Gölpazarı'),
(150, 11, 'Osmaneli'),
(151, 11, 'Pazaryeri'),
(152, 11, 'Söğüt'),
(153, 11, 'Yenipazar / Bilecik'),
(154, 11, 'İnhisar'),
(155, 12, 'Bingöl Merkez'),
(156, 12, 'Genç'),
(157, 12, 'Karlıova'),
(158, 12, 'Kiğı'),
(159, 12, 'Solhan'),
(160, 12, 'Adaklı'),
(161, 12, 'Yayladere'),
(162, 12, 'Yedisu'),
(163, 13, 'Adilcevaz'),
(164, 13, 'Ahlat'),
(165, 13, 'Bitlis Merkez'),
(166, 13, 'Hizan'),
(167, 13, 'Mutki'),
(168, 13, 'Tatvan'),
(169, 13, 'Güroymak'),
(170, 14, 'Bolu Merkez'),
(171, 14, 'Gerede'),
(172, 14, 'Göynük'),
(173, 14, 'Kıbrıscık'),
(174, 14, 'Mengen'),
(175, 14, 'Mudurnu'),
(176, 14, 'Seben'),
(177, 14, 'Dörtdivan'),
(178, 14, 'Yeniçağa'),
(179, 15, 'Ağlasun'),
(180, 15, 'Bucak'),
(181, 15, 'Burdur Merkez'),
(182, 15, 'Gölhisar'),
(183, 15, 'Tefenni'),
(184, 15, 'Yeşilova'),
(185, 15, 'Karamanlı'),
(186, 15, 'Kemer / Burdur'),
(187, 15, 'Altınyayla / Burdur'),
(188, 15, 'Çavdır'),
(189, 15, 'Çeltikçi'),
(190, 16, 'Gemlik'),
(191, 16, 'İnegöl'),
(192, 16, 'İznik'),
(193, 16, 'Karacabey'),
(194, 16, 'Keles'),
(195, 16, 'Mudanya'),
(196, 16, 'Mustafakemalpaşa'),
(197, 16, 'Orhaneli'),
(198, 16, 'Orhangazi'),
(199, 16, 'Yenişehir / Bursa'),
(200, 16, 'Büyükorhan'),
(201, 16, 'Harmancık'),
(202, 16, 'Nilüfer'),
(203, 16, 'Osmangazi'),
(204, 16, 'Yıldırım'),
(205, 16, 'Gürsu'),
(206, 16, 'Kestel'),
(207, 17, 'Ayvacık / Çanakkale'),
(208, 17, 'Bayramiç'),
(209, 17, 'Biga'),
(210, 17, 'Bozcaada'),
(211, 17, 'Çan'),
(212, 17, 'Çanakkale Merkez'),
(213, 17, 'Eceabat'),
(214, 17, 'Ezine'),
(215, 17, 'Gelibolu'),
(216, 17, 'Gökçeada'),
(217, 17, 'Lapseki'),
(218, 17, 'Yenice / Çanakkale'),
(219, 18, 'Çankırı Merkez'),
(220, 18, 'Çerkeş'),
(221, 18, 'Eldivan'),
(222, 18, 'Ilgaz'),
(223, 18, 'Kurşunlu'),
(224, 18, 'Orta'),
(225, 18, 'Şabanözü'),
(226, 18, 'Yapraklı'),
(227, 18, 'Atkaracalar'),
(228, 18, 'Kızılırmak'),
(229, 18, 'Bayramören'),
(230, 18, 'Korgun'),
(231, 19, 'Alaca'),
(232, 19, 'Bayat / Çorum'),
(233, 19, 'Çorum Merkez'),
(234, 19, 'İskilip'),
(235, 19, 'Kargı'),
(236, 19, 'Mecitözü'),
(237, 19, 'Ortaköy / Çorum'),
(238, 19, 'Osmancık'),
(239, 19, 'Sungurlu'),
(240, 19, 'Boğazkale'),
(241, 19, 'Uğurludağ'),
(242, 19, 'Dodurga'),
(243, 19, 'Laçin'),
(244, 19, 'Oğuzlar'),
(245, 20, 'Acıpayam'),
(246, 20, 'Buldan'),
(247, 20, 'Çal'),
(248, 20, 'Çameli'),
(249, 20, 'Çardak'),
(250, 20, 'Çivril'),
(251, 20, 'Güney'),
(252, 20, 'Kale / Denizli'),
(253, 20, 'Sarayköy'),
(254, 20, 'Tavas'),
(255, 20, 'Babadağ'),
(256, 20, 'Bekilli'),
(257, 20, 'Honaz'),
(258, 20, 'Serinhisar'),
(259, 20, 'Pamukkale'),
(260, 20, 'Baklan'),
(261, 20, 'Beyağaç'),
(262, 20, 'Bozkurt / Denizli'),
(263, 20, 'Merkezefendi'),
(264, 21, 'Bismil'),
(265, 21, 'Çermik'),
(266, 21, 'Çınar'),
(267, 21, 'Çüngüş'),
(268, 21, 'Dicle'),
(269, 21, 'Ergani'),
(270, 21, 'Hani'),
(271, 21, 'Hazro'),
(272, 21, 'Kulp'),
(273, 21, 'Lice'),
(274, 21, 'Silvan'),
(275, 21, 'Eğil'),
(276, 21, 'Kocaköy'),
(277, 21, 'Bağlar'),
(278, 21, 'Kayapınar'),
(279, 21, 'Sur'),
(280, 21, 'Yenişehir / Diyarbakır'),
(281, 22, 'Edirne Merkez'),
(282, 22, 'Enez'),
(283, 22, 'Havsa'),
(284, 22, 'İpsala'),
(285, 22, 'Keşan'),
(286, 22, 'Lalapaşa'),
(287, 22, 'Meriç'),
(288, 22, 'Uzunköprü'),
(289, 22, 'Süloğlu'),
(290, 23, 'Ağın'),
(291, 23, 'Baskil'),
(292, 23, 'Elazığ Merkez'),
(293, 23, 'Karakoçan'),
(294, 23, 'Keban'),
(295, 23, 'Maden'),
(296, 23, 'Palu'),
(297, 23, 'Sivrice'),
(298, 23, 'Arıcak'),
(299, 23, 'Kovancılar'),
(300, 23, 'Alacakaya'),
(301, 24, 'Çayırlı'),
(302, 24, 'Erzincan Merkez'),
(303, 24, 'İliç'),
(304, 24, 'Kemah'),
(305, 24, 'Kemaliye'),
(306, 24, 'Refahiye'),
(307, 24, 'Tercan'),
(308, 24, 'Üzümlü'),
(309, 24, 'Otlukbeli'),
(310, 25, 'Aşkale'),
(311, 25, 'Çat'),
(312, 25, 'Hınıs'),
(313, 25, 'Horasan'),
(314, 25, 'İspir'),
(315, 25, 'Karayazı'),
(316, 25, 'Narman'),
(317, 25, 'Oltu'),
(318, 25, 'Olur'),
(319, 25, 'Pasinler'),
(320, 25, 'Şenkaya'),
(321, 25, 'Tekman'),
(322, 25, 'Tortum'),
(323, 25, 'Karaçoban'),
(324, 25, 'Uzundere'),
(325, 25, 'Pazaryolu'),
(326, 25, 'Aziziye'),
(327, 25, 'Köprüköy'),
(328, 25, 'Palandöken'),
(329, 25, 'Yakutiye'),
(330, 26, 'Çifteler'),
(331, 26, 'Mahmudiye'),
(332, 26, 'Mihalıççık'),
(333, 26, 'Sarıcakaya'),
(334, 26, 'Seyitgazi'),
(335, 26, 'Sivrihisar'),
(336, 26, 'Alpu'),
(337, 26, 'Beylikova'),
(338, 26, 'İnönü'),
(339, 26, 'Günyüzü'),
(340, 26, 'Han'),
(341, 26, 'Mihalgazi'),
(342, 26, 'Odunpazarı'),
(343, 26, 'Tepebaşı'),
(344, 27, 'Araban'),
(345, 27, 'İslahiye'),
(346, 27, 'Nizip'),
(347, 27, 'Oğuzeli'),
(348, 27, 'Yavuzeli'),
(349, 27, 'Şahinbey'),
(350, 27, 'Şehitkamil'),
(351, 27, 'Karkamış'),
(352, 27, 'Nurdağı'),
(353, 28, 'Alucra'),
(354, 28, 'Bulancak'),
(355, 28, 'Dereli'),
(356, 28, 'Espiye'),
(357, 28, 'Eynesil'),
(358, 28, 'Giresun Merkez'),
(359, 28, 'Görele'),
(360, 28, 'Keşap'),
(361, 28, 'Şebinkarahisar'),
(362, 28, 'Tirebolu'),
(363, 28, 'Piraziz'),
(364, 28, 'Yağlıdere'),
(365, 28, 'Çamoluk'),
(366, 28, 'Çanakçı'),
(367, 28, 'Doğankent'),
(368, 28, 'Güce'),
(369, 29, 'Gümüşhane Merkez'),
(370, 29, 'Kelkit'),
(371, 29, 'Şiran'),
(372, 29, 'Torul'),
(373, 29, 'Köse'),
(374, 29, 'Kürtün'),
(375, 30, 'Çukurca'),
(376, 30, 'Hakkari Merkez'),
(377, 30, 'Şemdinli'),
(378, 30, 'Yüksekova'),
(379, 31, 'Altınözü'),
(380, 31, 'Dörtyol'),
(381, 31, 'Hassa'),
(382, 31, 'İskenderun'),
(383, 31, 'Kırıkhan'),
(384, 31, 'Reyhanlı'),
(385, 31, 'Samandağ'),
(386, 31, 'Yayladağı'),
(387, 31, 'Erzin'),
(388, 31, 'Belen'),
(389, 31, 'Kumlu'),
(390, 31, 'Antakya'),
(391, 31, 'Arsuz'),
(392, 31, 'Defne'),
(393, 31, 'Payas'),
(394, 32, 'Atabey'),
(395, 32, 'Eğirdir'),
(396, 32, 'Gelendost'),
(397, 32, 'Isparta Merkez'),
(398, 32, 'Keçiborlu'),
(399, 32, 'Senirkent'),
(400, 32, 'Sütçüler'),
(401, 32, 'Şarkikaraağaç'),
(402, 32, 'Uluborlu'),
(403, 32, 'Yalvaç'),
(404, 32, 'Aksu / Isparta'),
(405, 32, 'Gönen / Isparta'),
(406, 32, 'Yenişarbademli'),
(407, 33, 'Anamur'),
(408, 33, 'Erdemli'),
(409, 33, 'Gülnar'),
(410, 33, 'Mut'),
(411, 33, 'Silifke'),
(412, 33, 'Tarsus'),
(413, 33, 'Aydıncık / Mersin'),
(414, 33, 'Bozyazı'),
(415, 33, 'Çamlıyayla'),
(416, 33, 'Akdeniz'),
(417, 33, 'Mezitli'),
(418, 33, 'Toroslar'),
(419, 33, 'Yenişehir / Mersin'),
(420, 34, 'Adalar'),
(421, 34, 'Bakırköy'),
(422, 34, 'Beşiktaş'),
(423, 34, 'Beykoz'),
(424, 34, 'Beyoğlu'),
(425, 34, 'Çatalca'),
(426, 34, 'Eyüp'),
(427, 34, 'Fatih'),
(428, 34, 'Gaziosmanpaşa'),
(429, 34, 'Kadıköy'),
(430, 34, 'Kartal'),
(431, 34, 'Sarıyer'),
(432, 34, 'Silivri'),
(433, 34, 'Şile'),
(434, 34, 'Şişli'),
(435, 34, 'Üsküdar'),
(436, 34, 'Zeytinburnu'),
(437, 34, 'Büyükçekmece'),
(438, 34, 'Kağıthane'),
(439, 34, 'Küçükçekmece'),
(440, 34, 'Pendik'),
(441, 34, 'Ümraniye'),
(442, 34, 'Bayrampaşa'),
(443, 34, 'Avcılar'),
(444, 34, 'Bağcılar'),
(445, 34, 'Bahçelievler'),
(446, 34, 'Güngören'),
(447, 34, 'Maltepe'),
(448, 34, 'Sultanbeyli'),
(449, 34, 'Tuzla'),
(450, 34, 'Esenler'),
(451, 34, 'Arnavutköy'),
(452, 34, 'Ataşehir'),
(453, 34, 'Başakşehir'),
(454, 34, 'Beylikdüzü'),
(455, 34, 'Çekmeköy'),
(456, 34, 'Esenyurt'),
(457, 34, 'Sancaktepe'),
(458, 34, 'Sultangazi'),
(459, 35, 'Aliağa'),
(460, 35, 'Bayındır'),
(461, 35, 'Bergama'),
(462, 35, 'Bornova'),
(463, 35, 'Çeşme'),
(464, 35, 'Dikili'),
(465, 35, 'Foça'),
(466, 35, 'Karaburun'),
(467, 35, 'Karşıyaka'),
(468, 35, 'Kemalpaşa'),
(469, 35, 'Kınık'),
(470, 35, 'Kiraz'),
(471, 35, 'Menemen'),
(472, 35, 'Ödemiş'),
(473, 35, 'Seferihisar'),
(474, 35, 'Selçuk'),
(475, 35, 'Tire'),
(476, 35, 'Torbalı'),
(477, 35, 'Urla'),
(478, 35, 'Beydağ'),
(479, 35, 'Buca'),
(480, 35, 'Konak'),
(481, 35, 'Menderes'),
(482, 35, 'Balçova'),
(483, 35, 'Çiğli'),
(484, 35, 'Gaziemir'),
(485, 35, 'Narlıdere'),
(486, 35, 'Güzelbahçe'),
(487, 35, 'Bayraklı'),
(488, 35, 'Karabağlar'),
(489, 36, 'Arpaçay'),
(490, 36, 'Digor'),
(491, 36, 'Kağızman'),
(492, 36, 'Kars Merkez'),
(493, 36, 'Sarıkamış'),
(494, 36, 'Selim'),
(495, 36, 'Susuz'),
(496, 36, 'Akyaka'),
(497, 37, 'Abana'),
(498, 37, 'Araç'),
(499, 37, 'Azdavay'),
(500, 37, 'Bozkurt / Kastamonu'),
(501, 37, 'Cide'),
(502, 37, 'Çatalzeytin'),
(503, 37, 'Daday'),
(504, 37, 'Devrekani'),
(505, 37, 'İnebolu'),
(506, 37, 'Kastamonu Merkez'),
(507, 37, 'Küre'),
(508, 37, 'Taşköprü'),
(509, 37, 'Tosya'),
(510, 37, 'İhsangazi'),
(511, 37, 'Pınarbaşı / Kastamonu'),
(512, 37, 'Şenpazar'),
(513, 37, 'Ağlı'),
(514, 37, 'Doğanyurt'),
(515, 37, 'Hanönü'),
(516, 37, 'Seydiler'),
(517, 38, 'Bünyan'),
(518, 38, 'Develi'),
(519, 38, 'Felahiye'),
(520, 38, 'İncesu'),
(521, 38, 'Pınarbaşı / Kayseri'),
(522, 38, 'Sarıoğlan'),
(523, 38, 'Sarız'),
(524, 38, 'Tomarza'),
(525, 38, 'Yahyalı'),
(526, 38, 'Yeşilhisar'),
(527, 38, 'Akkışla'),
(528, 38, 'Talas'),
(529, 38, 'Kocasinan'),
(530, 38, 'Melikgazi'),
(531, 38, 'Hacılar'),
(532, 38, 'Özvatan'),
(533, 39, 'Babaeski'),
(534, 39, 'Demirköy'),
(535, 39, 'Kırklareli Merkez'),
(536, 39, 'Kofçaz'),
(537, 39, 'Lüleburgaz'),
(538, 39, 'Pehlivanköy'),
(539, 39, 'Pınarhisar'),
(540, 39, 'Vize'),
(541, 40, 'Çiçekdağı'),
(542, 40, 'Kaman'),
(543, 40, 'Kırşehir Merkez'),
(544, 40, 'Mucur'),
(545, 40, 'Akpınar'),
(546, 40, 'Akçakent'),
(547, 40, 'Boztepe'),
(548, 41, 'Gebze'),
(549, 41, 'Gölcük'),
(550, 41, 'Kandıra'),
(551, 41, 'Karamürsel'),
(552, 41, 'Körfez'),
(553, 41, 'Derince'),
(554, 41, 'Başiskele'),
(555, 41, 'Çayırova'),
(556, 41, 'Darıca'),
(557, 41, 'Dilovası'),
(558, 41, 'İzmit'),
(559, 41, 'Kartepe'),
(560, 42, 'Akşehir'),
(561, 42, 'Beyşehir'),
(562, 42, 'Bozkır'),
(563, 42, 'Cihanbeyli'),
(564, 42, 'Çumra'),
(565, 42, 'Doğanhisar'),
(566, 42, 'Ereğli / Konya'),
(567, 42, 'Hadim'),
(568, 42, 'Ilgın'),
(569, 42, 'Kadınhanı'),
(570, 42, 'Karapınar'),
(571, 42, 'Kulu'),
(572, 42, 'Sarayönü'),
(573, 42, 'Seydişehir'),
(574, 42, 'Yunak'),
(575, 42, 'Akören'),
(576, 42, 'Altınekin'),
(577, 42, 'Derebucak'),
(578, 42, 'Hüyük'),
(579, 42, 'Karatay'),
(580, 42, 'Meram'),
(581, 42, 'Selçuklu'),
(582, 42, 'Taşkent'),
(583, 42, 'Ahırlı'),
(584, 42, 'Çeltik'),
(585, 42, 'Derbent'),
(586, 42, 'Emirgazi'),
(587, 42, 'Güneysınır'),
(588, 42, 'Halkapınar'),
(589, 42, 'Tuzlukçu'),
(590, 42, 'Yalıhüyük'),
(591, 43, 'Altıntaş'),
(592, 43, 'Domaniç'),
(593, 43, 'Emet'),
(594, 43, 'Gediz'),
(595, 43, 'Kütahya Merkez'),
(596, 43, 'Simav'),
(597, 43, 'Tavşanlı'),
(598, 43, 'Aslanapa'),
(599, 43, 'Dumlupınar'),
(600, 43, 'Hisarcık'),
(601, 43, 'Şaphane'),
(602, 43, 'Çavdarhisar'),
(603, 43, 'Pazarlar'),
(604, 44, 'Akçadağ'),
(605, 44, 'Arapgir'),
(606, 44, 'Arguvan'),
(607, 44, 'Darende'),
(608, 44, 'Doğanşehir'),
(609, 44, 'Hekimhan'),
(610, 44, 'Pütürge'),
(611, 44, 'Yeşilyurt / Malatya'),
(612, 44, 'Battalgazi'),
(613, 44, 'Doğanyol'),
(614, 44, 'Kale / Malatya'),
(615, 44, 'Kuluncak'),
(616, 44, 'Yazıhan'),
(617, 45, 'Akhisar'),
(618, 45, 'Alaşehir'),
(619, 45, 'Demirci'),
(620, 45, 'Gördes'),
(621, 45, 'Kırkağaç'),
(622, 45, 'Kula'),
(623, 45, 'Salihli'),
(624, 45, 'Sarıgöl'),
(625, 45, 'Saruhanlı'),
(626, 45, 'Selendi'),
(627, 45, 'Soma'),
(628, 45, 'Turgutlu'),
(629, 45, 'Ahmetli'),
(630, 45, 'Gölmarmara'),
(631, 45, 'Köprübaşı / Manisa'),
(632, 45, 'Şehzadeler'),
(633, 45, 'Yunusemre'),
(634, 46, 'Afşin'),
(635, 46, 'Andırın'),
(636, 46, 'Elbistan'),
(637, 46, 'Göksun'),
(638, 46, 'Pazarcık'),
(639, 46, 'Türkoğlu'),
(640, 46, 'Çağlayancerit'),
(641, 46, 'Ekinözü'),
(642, 46, 'Nurhak'),
(643, 46, 'Dulkadiroğlu'),
(644, 46, 'Onikişubat'),
(645, 47, 'Derik'),
(646, 47, 'Kızıltepe'),
(647, 47, 'Mazıdağı'),
(648, 47, 'Midyat'),
(649, 47, 'Nusaybin'),
(650, 47, 'Ömerli'),
(651, 47, 'Savur'),
(652, 47, 'Dargeçit'),
(653, 47, 'Yeşilli'),
(654, 47, 'Artuklu'),
(655, 48, 'Bodrum'),
(656, 48, 'Datça'),
(657, 48, 'Fethiye'),
(658, 48, 'Köyceğiz'),
(659, 48, 'Marmaris'),
(660, 48, 'Milas'),
(661, 48, 'Ula'),
(662, 48, 'Yatağan'),
(663, 48, 'Dalaman'),
(664, 48, 'Ortaca'),
(665, 48, 'Kavaklıdere'),
(666, 48, 'Menteşe'),
(667, 48, 'Seydikemer'),
(668, 49, 'Bulanık'),
(669, 49, 'Malazgirt'),
(670, 49, 'Muş Merkez'),
(671, 49, 'Varto'),
(672, 49, 'Hasköy'),
(673, 49, 'Korkut'),
(674, 50, 'Avanos'),
(675, 50, 'Derinkuyu'),
(676, 50, 'Gülşehir'),
(677, 50, 'Hacıbektaş'),
(678, 50, 'Kozaklı'),
(679, 50, 'Nevşehir Merkez'),
(680, 50, 'Ürgüp'),
(681, 50, 'Acıgöl'),
(682, 51, 'Bor'),
(683, 51, 'Çamardı'),
(684, 51, 'Niğde Merkez'),
(685, 51, 'Ulukışla'),
(686, 51, 'Altunhisar'),
(687, 51, 'Çiftlik'),
(688, 52, 'Akkuş'),
(689, 52, 'Aybastı'),
(690, 52, 'Fatsa'),
(691, 52, 'Gölköy'),
(692, 52, 'Korgan'),
(693, 52, 'Kumru'),
(694, 52, 'Mesudiye'),
(695, 52, 'Perşembe'),
(696, 52, 'Ulubey / Ordu'),
(697, 52, 'Ünye'),
(698, 52, 'Gülyalı'),
(699, 52, 'Gürgentepe'),
(700, 52, 'Çamaş'),
(701, 52, 'Çatalpınar'),
(702, 52, 'Çaybaşı'),
(703, 52, 'İkizce'),
(704, 52, 'Kabadüz'),
(705, 52, 'Kabataş'),
(706, 52, 'Altınordu'),
(707, 53, 'Ardeşen'),
(708, 53, 'Çamlıhemşin'),
(709, 53, 'Çayeli'),
(710, 53, 'Fındıklı'),
(711, 53, 'İkizdere'),
(712, 53, 'Kalkandere'),
(713, 53, 'Pazar / Rize'),
(714, 53, 'Rize Merkez'),
(715, 53, 'Güneysu'),
(716, 53, 'Derepazarı'),
(717, 53, 'Hemşin'),
(718, 53, 'İyidere'),
(719, 54, 'Akyazı'),
(720, 54, 'Geyve'),
(721, 54, 'Hendek'),
(722, 54, 'Karasu'),
(723, 54, 'Kaynarca'),
(724, 54, 'Sapanca'),
(725, 54, 'Kocaali'),
(726, 54, 'Pamukova'),
(727, 54, 'Taraklı'),
(728, 54, 'Ferizli'),
(729, 54, 'Karapürçek'),
(730, 54, 'Söğütlü'),
(731, 54, 'Adapazarı'),
(732, 54, 'Arifiye'),
(733, 54, 'Erenler'),
(734, 54, 'Serdivan'),
(735, 55, 'Alaçam'),
(736, 55, 'Bafra'),
(737, 55, 'Çarşamba'),
(738, 55, 'Havza'),
(739, 55, 'Kavak'),
(740, 55, 'Ladik'),
(741, 55, 'Terme'),
(742, 55, 'Vezirköprü'),
(743, 55, 'Asarcık'),
(744, 55, '19 Mayıs'),
(745, 55, 'Salıpazarı'),
(746, 55, 'Tekkeköy'),
(747, 55, 'Ayvacık / Samsun'),
(748, 55, 'Yakakent'),
(749, 55, 'Atakum'),
(750, 55, 'Canik'),
(751, 55, 'İlkadım'),
(752, 56, 'Baykan'),
(753, 56, 'Eruh'),
(754, 56, 'Kurtalan'),
(755, 56, 'Pervari'),
(756, 56, 'Siirt Merkez'),
(757, 56, 'Şirvan'),
(758, 56, 'Tillo'),
(759, 57, 'Ayancık'),
(760, 57, 'Boyabat'),
(761, 57, 'Durağan'),
(762, 57, 'Erfelek'),
(763, 57, 'Gerze'),
(764, 57, 'Sinop Merkez'),
(765, 57, 'Türkeli'),
(766, 57, 'Dikmen'),
(767, 57, 'Saraydüzü'),
(768, 58, 'Divriği'),
(769, 58, 'Gemerek'),
(770, 58, 'Gürün'),
(771, 58, 'Hafik'),
(772, 58, 'İmranlı'),
(773, 58, 'Kangal'),
(774, 58, 'Koyulhisar'),
(775, 58, 'Sivas Merkez'),
(776, 58, 'Suşehri'),
(777, 58, 'Şarkışla'),
(778, 58, 'Yıldızeli'),
(779, 58, 'Zara'),
(780, 58, 'Akıncılar'),
(781, 58, 'Altınyayla / Sivas'),
(782, 58, 'Doğanşar'),
(783, 58, 'Gölova'),
(784, 58, 'Ulaş'),
(785, 59, 'Çerkezköy'),
(786, 59, 'Çorlu'),
(787, 59, 'Hayrabolu'),
(788, 59, 'Malkara'),
(789, 59, 'Muratlı'),
(790, 59, 'Saray / Tekirdağ'),
(791, 59, 'Şarköy'),
(792, 59, 'Marmaraereğlisi'),
(793, 59, 'Ergene'),
(794, 59, 'Süleymanpaşa'),
(795, 60, 'Almus'),
(796, 60, 'Artova'),
(797, 60, 'Erbaa'),
(798, 60, 'Niksar'),
(799, 60, 'Reşadiye'),
(800, 60, 'Tokat Merkez'),
(801, 60, 'Turhal'),
(802, 60, 'Zile'),
(803, 60, 'Pazar / Tokat'),
(804, 60, 'Yeşilyurt / Tokat'),
(805, 60, 'Başçiftlik'),
(806, 60, 'Sulusaray'),
(807, 61, 'Akçaabat'),
(808, 61, 'Araklı'),
(809, 61, 'Arsin'),
(810, 61, 'Çaykara'),
(811, 61, 'Maçka'),
(812, 61, 'Of'),
(813, 61, 'Sürmene'),
(814, 61, 'Tonya'),
(815, 61, 'Vakfıkebir'),
(816, 61, 'Yomra'),
(817, 61, 'Beşikdüzü'),
(818, 61, 'Şalpazarı'),
(819, 61, 'Çarşıbaşı'),
(820, 61, 'Dernekpazarı'),
(821, 61, 'Düzköy'),
(822, 61, 'Hayrat'),
(823, 61, 'Köprübaşı / Trabzon'),
(824, 61, 'Ortahisar'),
(825, 62, 'Çemişgezek'),
(826, 62, 'Hozat'),
(827, 62, 'Mazgirt'),
(828, 62, 'Nazımiye'),
(829, 62, 'Ovacık / Tunceli'),
(830, 62, 'Pertek'),
(831, 62, 'Pülümür'),
(832, 62, 'Tunceli Merkez'),
(833, 63, 'Akçakale'),
(834, 63, 'Birecik'),
(835, 63, 'Bozova'),
(836, 63, 'Ceylanpınar'),
(837, 63, 'Halfeti'),
(838, 63, 'Hilvan'),
(839, 63, 'Siverek'),
(840, 63, 'Suruç'),
(841, 63, 'Viranşehir'),
(842, 63, 'Harran'),
(843, 63, 'Eyyübiye'),
(844, 63, 'Haliliye'),
(845, 63, 'Karaköprü'),
(846, 64, 'Banaz'),
(847, 64, 'Eşme'),
(848, 64, 'Karahallı'),
(849, 64, 'Sivaslı'),
(850, 64, 'Ulubey / Uşak'),
(851, 64, 'Uşak Merkez'),
(852, 65, 'Başkale'),
(853, 65, 'Çatak'),
(854, 65, 'Erciş'),
(855, 65, 'Gevaş'),
(856, 65, 'Gürpınar'),
(857, 65, 'Muradiye'),
(858, 65, 'Özalp'),
(859, 65, 'Bahçesaray'),
(860, 65, 'Çaldıran'),
(861, 65, 'Edremit / Van'),
(862, 65, 'Saray / Van'),
(863, 65, 'İpekyolu'),
(864, 65, 'Tuşba'),
(865, 66, 'Akdağmadeni'),
(866, 66, 'Boğazlıyan'),
(867, 66, 'Çayıralan'),
(868, 66, 'Çekerek'),
(869, 66, 'Sarıkaya'),
(870, 66, 'Sorgun'),
(871, 66, 'Şefaatli'),
(872, 66, 'Yerköy'),
(873, 66, 'Yozgat Merkez'),
(874, 66, 'Aydıncık / Yozgat'),
(875, 66, 'Çandır'),
(876, 66, 'Kadışehri'),
(877, 66, 'Saraykent'),
(878, 66, 'Yenifakılı'),
(879, 67, 'Çaycuma'),
(880, 67, 'Devrek'),
(881, 67, 'Ereğli / Zonguldak'),
(882, 67, 'Zonguldak Merkez'),
(883, 67, 'Alaplı'),
(884, 67, 'Gökçebey'),
(885, 68, 'Aksaray Merkez'),
(886, 68, 'Ortaköy / Aksaray'),
(887, 68, 'Ağaçören'),
(888, 68, 'Güzelyurt'),
(889, 68, 'Sarıyahşi'),
(890, 68, 'Eskil'),
(891, 68, 'Gülağaç'),
(892, 69, 'Bayburt Merkez'),
(893, 69, 'Aydıntepe'),
(894, 69, 'Demirözü'),
(895, 70, 'Ermenek'),
(896, 70, 'Karaman Merkez'),
(897, 70, 'Ayrancı'),
(898, 70, 'Kazımkarabekir'),
(899, 70, 'Başyayla'),
(900, 70, 'Sarıveliler'),
(901, 71, 'Delice'),
(902, 71, 'Keskin'),
(903, 71, 'Kırıkkale Merkez'),
(904, 71, 'Sulakyurt'),
(905, 71, 'Bahşili'),
(906, 71, 'Balışeyh'),
(907, 71, 'Çelebi'),
(908, 71, 'Karakeçili'),
(909, 71, 'Yahşihan'),
(910, 72, 'Batman Merkez'),
(911, 72, 'Beşiri'),
(912, 72, 'Gercüş'),
(913, 72, 'Kozluk'),
(914, 72, 'Sason'),
(915, 72, 'Hasankeyf'),
(916, 73, 'Beytüşşebap'),
(917, 73, 'Cizre'),
(918, 73, 'İdil'),
(919, 73, 'Silopi'),
(920, 73, 'Şırnak Merkez'),
(921, 73, 'Uludere'),
(922, 73, 'Güçlükonak'),
(923, 74, 'Bartın Merkez'),
(924, 74, 'Kurucaşile'),
(925, 74, 'Ulus'),
(926, 74, 'Amasra'),
(927, 75, 'Ardahan Merkez'),
(928, 75, 'Çıldır'),
(929, 75, 'Göle'),
(930, 75, 'Hanak'),
(931, 75, 'Posof'),
(932, 75, 'Damal'),
(933, 76, 'Aralık'),
(934, 76, 'Iğdır Merkez'),
(935, 76, 'Tuzluca'),
(936, 76, 'Karakoyunlu'),
(937, 77, 'Yalova Merkez'),
(938, 77, 'Altınova'),
(939, 77, 'Armutlu'),
(940, 77, 'Çınarcık'),
(941, 77, 'Çiftlikköy'),
(942, 77, 'Termal'),
(943, 78, 'Eflani'),
(944, 78, 'Eskipazar'),
(945, 78, 'Karabük Merkez'),
(946, 78, 'Ovacık / Karabük'),
(947, 78, 'Safranbolu'),
(948, 78, 'Yenice / Karabük'),
(949, 79, 'Kilis Merkez'),
(950, 79, 'Elbeyli'),
(951, 79, 'Musabeyli'),
(952, 79, 'Polateli'),
(953, 80, 'Bahçe'),
(954, 80, 'Kadirli'),
(955, 80, 'Osmaniye Merkez'),
(956, 80, 'Düziçi'),
(957, 80, 'Hasanbeyli'),
(958, 80, 'Sumbas'),
(959, 80, 'Toprakkale'),
(960, 81, 'Akçakoca'),
(961, 81, 'Düzce Merkez'),
(962, 81, 'Yığılca'),
(963, 81, 'Cumayeri'),
(964, 81, 'Gölyaka'),
(965, 81, 'Çilimli'),
(966, 81, 'Gümüşova'),
(967, 81, 'Kaynaşlı');

-- --------------------------------------------------------

--
-- Table structure for table `iletisim`
--

CREATE TABLE `iletisim` (
  `id` int(11) NOT NULL,
  `isim` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `konu` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `mesaj` text COLLATE utf8_turkish_ci NOT NULL,
  `tarih` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `iller`
--

CREATE TABLE `iller` (
  `id` int(11) NOT NULL,
  `baslik` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `iller`
--

INSERT INTO `iller` (`id`, `baslik`) VALUES
(1, 'Adana'),
(2, 'Adıyaman'),
(3, 'Afyonkarahisar'),
(4, 'Ağrı'),
(5, 'Amasya'),
(6, 'Ankara'),
(7, 'Antalya'),
(8, 'Artvin'),
(9, 'Aydın'),
(10, 'Balıkesir'),
(11, 'Bilecik'),
(12, 'Bingöl'),
(13, 'Bitlis'),
(14, 'Bolu'),
(15, 'Burdur'),
(16, 'Bursa'),
(17, 'Çanakkale'),
(18, 'Çankırı'),
(19, 'Çorum'),
(20, 'Denizli'),
(21, 'Diyarbakır'),
(22, 'Edirne'),
(23, 'Elazığ'),
(24, 'Erzincan'),
(25, 'Erzurum'),
(26, 'Eskişehir'),
(27, 'Gaziantep'),
(28, 'Giresun'),
(29, 'Gümüşhane'),
(30, 'Hakkari'),
(31, 'Hatay'),
(32, 'Isparta'),
(33, 'Mersin'),
(34, 'İstanbul'),
(35, 'İzmir'),
(36, 'Kars'),
(37, 'Kastamonu'),
(38, 'Kayseri'),
(39, 'Kırklareli'),
(40, 'Kırşehir'),
(41, 'Kocaeli'),
(42, 'Konya'),
(43, 'Kütahya'),
(44, 'Malatya'),
(45, 'Manisa'),
(46, 'Kahramanmaraş'),
(47, 'Mardin'),
(48, 'Muğla'),
(49, 'Muş'),
(50, 'Nevşehir'),
(51, 'Niğde'),
(52, 'Ordu'),
(53, 'Rize'),
(54, 'Sakarya'),
(55, 'Samsun'),
(56, 'Siirt'),
(57, 'Sinop'),
(58, 'Sivas'),
(59, 'Tekirdağ'),
(60, 'Tokat'),
(61, 'Trabzon'),
(62, 'Tunceli'),
(63, 'Şanlıurfa'),
(64, 'Uşak'),
(65, 'Van'),
(66, 'Yozgat'),
(67, 'Zonguldak'),
(68, 'Aksaray'),
(69, 'Bayburt'),
(70, 'Karaman'),
(71, 'Kırıkkale'),
(72, 'Batman'),
(73, 'Şırnak'),
(74, 'Bartın'),
(75, 'Ardahan'),
(76, 'Iğdır'),
(77, 'Yalova'),
(78, 'Karabük'),
(79, 'Kilis'),
(80, 'Osmaniye'),
(81, 'Düzce');

-- --------------------------------------------------------

--
-- Table structure for table `metamask`
--

CREATE TABLE `metamask` (
  `ID` int(11) NOT NULL,
  `address` varchar(42) NOT NULL,
  `publicName` tinytext,
  `nonce` tinytext,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nft`
--

CREATE TABLE `nft` (
  `nft_id` int(11) NOT NULL,
  `nft_resim` text COLLATE utf8_turkish_ci NOT NULL,
  `nft_metod` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `nft_koleksiyon` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `nft_baslik` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `nft_tanim` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `nft_telif` varchar(150) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `numaralar`
--

CREATE TABLE `numaralar` (
  `id` int(11) NOT NULL,
  `adi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `durum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oranlar`
--

CREATE TABLE `oranlar` (
  `oranlar_id` int(11) NOT NULL,
  `satici_indirim_orani` int(11) NOT NULL,
  `satici_orani` int(11) NOT NULL,
  `kapida_odeme_oran` int(11) NOT NULL,
  `kargo_ust_limit` int(11) NOT NULL,
  `kapida_odeme_durum` int(11) NOT NULL,
  `kargo_odeme_oran` int(11) NOT NULL,
  `satici_indirim_durumu` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `oranlar`
--

INSERT INTO `oranlar` (`oranlar_id`, `satici_indirim_orani`, `satici_orani`, `kapida_odeme_oran`, `kargo_ust_limit`, `kapida_odeme_durum`, `kargo_odeme_oran`, `satici_indirim_durumu`) VALUES
(1, 5, 10, 7, 75, 1, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `poslar`
--

CREATE TABLE `poslar` (
  `id` int(11) NOT NULL,
  `yontem` tinyint(4) NOT NULL,
  `secenek` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `poslar`
--

INSERT INTO `poslar` (`id`, `yontem`, `secenek`) VALUES
(1, 1, '{\"merchant_id\":\"224630\",\"merchant_key\":\"kTh2Ypbjcwx9WDEe\",\"merchant_salt\":\"bKHrDAqahT2kmCLz\",\"success\":\"https://nft.teslagateway.com/sepet-sonuc.html?durum=basarili\",\"fail\":\"https://nft.teslagateway.com/sepet-sonuc.html?durum=basarisiz\"}');

-- --------------------------------------------------------

--
-- Table structure for table `satici`
--

CREATE TABLE `satici` (
  `satici_id` int(11) NOT NULL,
  `satici_ad_soyad` char(55) COLLATE utf8_turkish_ci DEFAULT NULL,
  `satici_kullanici` char(25) COLLATE utf8_turkish_ci DEFAULT NULL,
  `satici_sifre` char(25) COLLATE utf8_turkish_ci DEFAULT NULL,
  `satici_email` char(55) COLLATE utf8_turkish_ci DEFAULT NULL,
  `satici_son_giris` char(55) COLLATE utf8_turkish_ci DEFAULT NULL,
  `satici` int(11) NOT NULL,
  `satici_odenen` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `satici`
--

INSERT INTO `satici` (`satici_id`, `satici_ad_soyad`, `satici_kullanici`, `satici_sifre`, `satici_email`, `satici_son_giris`, `satici`, `satici_odenen`) VALUES
(1, 'Şeyma Kaya', 'seyma', '1234', 'kyseymaa@gmail.com', '14 Mayıs 2022, 22:45', 1, 1),
(2, 'Mehmet IŞIK', 'misik', '123456', 'mhmt.cmpe@gmail.com', '14 Mayıs 2022, 22:47', 1, 57),
(3, 'Yaşar Şahin', 'ysahin', '123456', 'ysahin@hotmail.com', '14 Mayıs 2022, 22:48', 1, 15),
(4, 'Yasemin kara', 'ykara', '123456', 'ykara@gmail.com', '14 Mayıs 2022, 22:30', 1, 0),
(5, 'Suat Karaytu', 'skaraytu', '123456', 'skaraytu@gmail.com', '14 Mayıs 2022, 22:31', 1, 0),
(6, 'Deniz Çelebi', 'dcelebi', '123456', 'dcelebi@gmail.com', '14 Mayıs 2022, 22:32', 1, 0),
(7, 'Tesla Group', 'teslagateway', '123456', 'teslagateway@teslagateway.com', '14 Mayıs 2022, 22:33', 1, 0),
(8, 'Winston Light', 'winstonlight', '123456', 'winstonlight@gmail.com', '14 Mayıs 2022, 22:35', 1, 0),
(9, 'Mustafa Öztürk', 'mozturk', '123456', 'mozturk@gmail.com', '14 Mayıs 2022, 22:36', 1, 0),
(10, 'Yunus Yağız Yıldırım', 'yurmix', '123456', 'yurmix@gmail.com', '14 Mayıs 2022, 22:49', 1, 99),
(11, 'Dilek Önal', 'dilekonal', '123456', 'dilekonal@hotmail.com', '14 Mayıs 2022, 22:39', 1, 0),
(12, 'Nazli Bişmiş', 'nazlibismis', '123456', 'nazlibismis@gmail.com', '14 Mayıs 2022, 22:49', 1, 0),
(13, 'Abdulsamet Öztürk', 'asamet', '123456', 'asamet@hotmail.com', '14 Mayıs 2022, 22:47', 1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `sayfalar`
--

CREATE TABLE `sayfalar` (
  `id` int(11) NOT NULL,
  `adi` text COLLATE utf8_turkish_ci NOT NULL,
  `aciklama` longtext COLLATE utf8_turkish_ci NOT NULL,
  `resim` text COLLATE utf8_turkish_ci NOT NULL,
  `seo` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `durum` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `sayfalar`
--

INSERT INTO `sayfalar` (`id`, `adi`, `aciklama`, `resim`, `seo`, `durum`) VALUES
(1, 'Yardım', '<p>Hazırlanıyor..</p>', '', 'Yardim', 1),
(2, 'Ortaklarımız', '<p>Hazırlanıyor..</p>', '', 'Ortaklarimiz', 1),
(3, 'Öneriler', '<p>Hazırlanıyor..</p>', '', 'Oneriler', 1),
(4, 'Dökümanlar', '<p>Hazırlanıyor..</p>', '', 'Dokumanlar', 1),
(5, 'Bülten', '<p>&nbsp; Hazırlanıyor..</p>', '', 'Bulten', 1);

-- --------------------------------------------------------

--
-- Table structure for table `secenek`
--

CREATE TABLE `secenek` (
  `id` int(11) NOT NULL,
  `kategori` int(11) NOT NULL,
  `adi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `seo` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `durum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `secenek_kategori`
--

CREATE TABLE `secenek_kategori` (
  `id` int(11) NOT NULL,
  `kategori_adi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `seo` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `durum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `site_ayar`
--

CREATE TABLE `site_ayar` (
  `id` int(11) NOT NULL,
  `site_title` text COLLATE utf8_turkish_ci NOT NULL,
  `site_meta` text COLLATE utf8_turkish_ci NOT NULL,
  `site_desc` text COLLATE utf8_turkish_ci NOT NULL,
  `firma_logo` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `firma_adi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `renk` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `firma_tel` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `firma_fax` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `firma_email` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `firma_adres` text COLLATE utf8_turkish_ci NOT NULL,
  `google_maps` text COLLATE utf8_turkish_ci NOT NULL,
  `google_analytics` text COLLATE utf8_turkish_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `gplus` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `pinterest` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `copyright` text COLLATE utf8_turkish_ci NOT NULL,
  `ksozlesme` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `site_ayar`
--

INSERT INTO `site_ayar` (`id`, `site_title`, `site_meta`, `site_desc`, `firma_logo`, `firma_adi`, `renk`, `firma_tel`, `firma_fax`, `firma_email`, `firma_adres`, `google_maps`, `google_analytics`, `facebook`, `twitter`, `gplus`, `instagram`, `pinterest`, `copyright`, `ksozlesme`) VALUES
(1, 'TeslaNFT –  Marketplace and NFT Creating', 'TeslaNFT –  Marketplace and NFT Creating', 'TeslaNFT –  Marketplace and NFT Creating', 'nftteslaa.png', '', 'multicolor', '+9(0262) 754 14 14', '+9(0262) 754 14 14', 'info@bilisimvadisi.com', 'Muallimköy Mahallesi, Deniz Cd. No:143-5, 41400 Gebze/Kocaeli', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12082.48121275916!2d29.5099529!3d40.7923609!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5e5dbea1b92cca7f!2sBili%C5%9Fim%20Vadisi!5e0!3m2!1str!2str!4v1652571008559!5m2!1str!2str\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '', 'bilisimvadisitr', 'bilisimvadisitr', 'bilisimvadisitr', 'bilisimvadisitr', 'bilisimvadisitr', 'Copyright 2001 - 2022 TeslaGate® - Robotic Coding and Information Technologies All Rights Reserved.', '<div style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\"><b>SİTE KULLANIM ŞARTLARI</b></div><div style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\">Lütfen sitemizi kullanmadan evvel bu ‘site kullanım şartlarını dikkatlice okuyunuz. </div><div style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\">Bu alışveriş sitesini kullanan ve alışveriş yapan müşterilerimiz aşağıdaki şartları kabul etmiş varsayılmaktadır:</div><div style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\">Sitemizdeki web sayfaları ve ona bağlı tüm sayfalar (‘site’) <b>www.nft.teslagateway.com</b> adresindeki ……………………………….firmasının (Firma) malıdır ve onun tarafından işletilir. Sizler (‘Kullanıcı’) sitede sunulan tüm hizmetleri kullanırken aşağıdaki şartlara tabi olduğunuzu, sitedeki hizmetten yararlanmakla ve kullanmaya devam etmekle; Bağlı olduğunuz yasalara göre sözleşme imzalama hakkına, yetkisine ve hukuki ehliyetine sahip ve 18 yaşın üzerinde olduğunuzu, bu sözleşmeyi okuduğunuzu, anladığınızı ve sözleşmede yazan şartlarla bağlı olduğunuzu kabul etmiş sayılırsınız. </div><div style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\"><br style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\"></div><div style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\">İşbu sözleşme taraflara sözleşme konusu site ile ilgili hak ve yükümlülükler yükler ve taraflar işbu sözleşmeyi kabul ettiklerinde bahsi geçen hak ve yükümlülükleri eksiksiz, doğru, zamanında, işbu sözleşmede talep edilen şartlar dâhilinde yerine getireceklerini beyan ederler.</div><div style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\"><br style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\"></div><div style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\"><b>1. SORUMLULUKLAR</b></div><div style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\">a.<span class=\"Apple-tab-span\" style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; white-space: pre; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\"></span>Firma, fiyatlar ve sunulan ürün ve hizmetler üzerinde değişiklik yapma hakkını her zaman saklı tutar. </div><div style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\">b.<span class=\"Apple-tab-span\" style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; white-space: pre; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\"></span>Firma, üyenin sözleşme konusu hizmetlerden, teknik arızalar dışında yararlandırılacağını kabul ve taahhüt eder.</div><div style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\">c.<span class=\"Apple-tab-span\" style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; white-space: pre; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\"></span>Kullanıcı, sitenin kullanımında tersine mühendislik yapmayacağını ya da bunların kaynak kodunu bulmak veya elde etmek amacına yönelik herhangi bir başka işlemde bulunmayacağını aksi halde ve 3. Kişiler nezdinde doğacak zararlardan sorumlu olacağını, hakkında hukuki ve cezai işlem yapılacağını peşinen kabul eder. </div><div style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\">d.<span class=\"Apple-tab-span\" style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; white-space: pre; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\"></span>Kullanıcı, site içindeki faaliyetlerinde, sitenin herhangi bir bölümünde veya iletişimlerinde genel ahlaka ve adaba aykırı, kanuna aykırı, 3. Kişilerin haklarını zedeleyen, yanıltıcı, saldırgan, müstehcen, pornografik, kişilik haklarını zedeleyen, telif haklarına aykırı, yasa dışı faaliyetleri teşvik eden içerikler üretmeyeceğini, paylaşmayacağını kabul eder. Aksi halde oluşacak zarardan tamamen kendisi sorumludur ve bu durumda ‘Site’ yetkilileri, bu tür hesapları askıya alabilir, sona erdirebilir, yasal süreç başlatma hakkını saklı tutar. Bu sebeple yargı mercilerinden etkinlik veya kullanıcı hesapları ile ilgili bilgi talepleri gelirse paylaşma hakkını saklı tutar.</div><div style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\">e.<span class=\"Apple-tab-span\" style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; white-space: pre; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\"></span>Sitenin üyelerinin birbirleri veya üçüncü şahıslarla olan ilişkileri kendi sorumluluğundadır. </div><div style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\"><br style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\"></div><div style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\"><b>2.  Fikri Mülkiyet Hakları</b></div><div style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\"><br style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\"></div><div style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\">2.1. İşbu Site’de yer alan ünvan, işletme adı, marka, patent, logo, tasarım, bilgi ve yöntem gibi tescilli veya tescilsiz tüm fikri mülkiyet hakları site işleteni ve sahibi firmaya veya belirtilen ilgilisine ait olup, ulusal ve uluslararası hukukun koruması altındadır. İşbu Site’nin ziyaret edilmesi veya bu Site’deki hizmetlerden yararlanılması söz konusu fikri mülkiyet hakları konusunda hiçbir hak vermez.</div><div style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\">2.2. Site’de yer alan bilgiler hiçbir şekilde çoğaltılamaz, yayınlanamaz, kopyalanamaz, sunulamaz ve/veya aktarılamaz. Site’nin bütünü veya bir kısmı diğer bir internet sitesinde izinsiz olarak kullanılamaz. </div><div style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\"><br style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\"></div><div style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\"><b>3. Gizli Bilgi</b></div><div style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\">3.1. Firma, site üzerinden kullanıcıların ilettiği kişisel bilgileri 3. Kişilere açıklamayacaktır. Bu kişisel bilgiler; kişi adı-soyadı, adresi, telefon numarası, cep telefonu, e-posta adresi gibi Kullanıcı’yı tanımlamaya yönelik her türlü diğer bilgiyi içermekte olup, kısaca ‘Gizli Bilgiler’ olarak anılacaktır.</div><div style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\"><br style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\"></div><div style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\">3.2. Kullanıcı, sadece tanıtım, reklam, kampanya, promosyon, duyuru vb. pazarlama faaliyetleri kapsamında kullanılması ile sınırlı olmak üzere, Site’nin sahibi olan firmanın kendisine ait iletişim, portföy durumu ve demografik bilgilerini iştirakleri ya da bağlı bulunduğu grup şirketleri ile paylaşmasına muvafakat ettiğini kabul ve beyan eder. Bu kişisel bilgiler firma bünyesinde müşteri profili belirlemek, müşteri profiline uygun promosyon ve kampanyalar sunmak ve istatistiksel çalışmalar yapmak amacıyla kullanılabilecektir.</div><div style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\"><br style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\"></div><div style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\">3.3. Gizli Bilgiler, ancak resmi makamlarca usulü dairesinde bu bilgilerin talep edilmesi halinde ve yürürlükteki emredici mevzuat hükümleri gereğince resmi makamlara açıklama yapılmasının zorunlu olduğu durumlarda resmi makamlara açıklanabilecektir.</div><div style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\"><br style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\"></div><div style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\"><b>4. Garanti Vermeme: İŞBU SÖZLEŞME MADDESİ UYGULANABİLİR KANUNUN İZİN VERDİĞİ AZAMİ ÖLÇÜDE GEÇERLİ OLACAKTIR. FİRMA TARAFINDAN SUNULAN HİZMETLER \"OLDUĞU GİBİ” VE \"MÜMKÜN OLDUĞU” TEMELDE SUNULMAKTA VE PAZARLANABİLİRLİK, BELİRLİ BİR AMACA UYGUNLUK VEYA İHLAL ETMEME KONUSUNDA TÜM ZIMNİ GARANTİLER DE DÂHİL OLMAK ÜZERE HİZMETLER VEYA UYGULAMA İLE İLGİLİ OLARAK (BUNLARDA YER ALAN TÜM BİLGİLER DÂHİL) SARİH VEYA ZIMNİ, KANUNİ VEYA BAŞKA BİR NİTELİKTE HİÇBİR GARANTİDE BULUNMAMAKTADIR. </b></div><div style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\"><br style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\"></div><div style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\"><b>5. Kayıt ve Güvenlik</b> </div><div style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\">Kullanıcı, doğru, eksiksiz ve güncel kayıt bilgilerini vermek zorundadır. Aksi halde bu Sözleşme ihlal edilmiş sayılacak ve Kullanıcı bilgilendirilmeksizin hesap kapatılabilecektir.</div><div style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\">Kullanıcı, site ve üçüncü taraf sitelerdeki şifre ve hesap güvenliğinden kendisi sorumludur. Aksi halde oluşacak veri kayıplarından ve güvenlik ihlallerinden veya donanım ve cihazların zarar görmesinden Firma sorumlu tutulamaz.</div><div style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\"><br style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\"></div><div style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\"><b>6. Mücbir Sebep</b></div><div style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\"><br style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\"></div><div style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\">Tarafların kontrolünde olmayan; tabii afetler, yangın, patlamalar, iç savaşlar, savaşlar, ayaklanmalar, halk hareketleri, seferberlik ilanı, grev, lokavt ve salgın hastalıklar, altyapı ve internet arızaları, elektrik kesintisi gibi sebeplerden (aşağıda birlikte \"Mücbir Sebep” olarak anılacaktır.) dolayı sözleşmeden doğan yükümlülükler taraflarca ifa edilemez hale gelirse, taraflar bundan sorumlu değildir. Bu sürede Taraflar’ın işbu Sözleşme’den doğan hak ve yükümlülükleri askıya alınır. </div><div style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\"><br style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\"></div><div style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\"><b>7. Sözleşmenin Bütünlüğü ve Uygulanabilirlik</b></div><div style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\"><br style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\"></div><div style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\">İşbu sözleşme şartlarından biri, kısmen veya tamamen geçersiz hale gelirse, sözleşmenin geri kalanı geçerliliğini korumaya devam eder.</div><div style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\"><br style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\"></div><div style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\"><b>8. Sözleşmede Yapılacak Değişiklikler</b></div><div style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\"><br style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\"></div><div style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\">Firma, dilediği zaman sitede sunulan hizmetleri ve işbu sözleşme şartlarını kısmen veya tamamen değiştirebilir. Değişiklikler sitede yayınlandığı tarihten itibaren geçerli olacaktır. Değişiklikleri takip etmek Kullanıcı’nın sorumluluğundadır. Kullanıcı, sunulan hizmetlerden yararlanmaya devam etmekle bu değişiklikleri de kabul etmiş sayılır.</div><div style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\"><br style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\"></div><div style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\"><b>9. Tebligat</b></div><div style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\">İşbu Sözleşme ile ilgili taraflara gönderilecek olan tüm bildirimler, Firma’nın bilinen e.posta adresi ve kullanıcının üyelik formunda belirttiği e.posta adresi vasıtasıyla yapılacaktır. Kullanıcı, üye olurken belirttiği adresin geçerli tebligat adresi olduğunu, değişmesi durumunda 5 gün içinde yazılı olarak diğer tarafa bildireceğini, aksi halde bu adrese yapılacak tebligatların geçerli sayılacağını kabul eder.</div><div style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\"><br style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\"></div><div style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\"><b>10. Delil Sözleşmesi</b></div><div style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\">Taraflar arasında işbu sözleşme ile ilgili işlemler için çıkabilecek her türlü uyuşmazlıklarda Taraflar’ın defter, kayıt ve belgeleri ile ve bilgisayar kayıtları ve faks kayıtları 6100 sayılı Hukuk Muhakemeleri Kanunu uyarınca delil olarak kabul edilecek olup, kullanıcı bu kayıtlara itiraz etmeyeceğini kabul eder.</div><div style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\"><br style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\"></div><div style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\"><b>11. Uyuşmazlıkların Çözümü</b></div><div style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\">İşbu Sözleşme’nin uygulanmasından veya yorumlanmasından doğacak her türlü uyuşmazlığın çözümünde İstanbul (Merkez) Adliyesi Mahkemeleri ve İcra Daireleri yetkilidir.</div>');

-- --------------------------------------------------------

--
-- Table structure for table `sss`
--

CREATE TABLE `sss` (
  `id` int(11) NOT NULL,
  `adi` text COLLATE utf8_turkish_ci NOT NULL,
  `aciklama` longtext COLLATE utf8_turkish_ci NOT NULL,
  `seo` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `durum` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `id` int(11) NOT NULL,
  `uyeid` int(11) NOT NULL,
  `isim` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `baslik` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `departman` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `oncelik` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `mesaj` text COLLATE utf8_turkish_ci NOT NULL,
  `durum` int(11) NOT NULL,
  `guncelleme` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `tarih` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ticket_cevap`
--

CREATE TABLE `ticket_cevap` (
  `id` int(11) NOT NULL,
  `uye_id` int(11) NOT NULL,
  `ticket_id` int(11) NOT NULL,
  `rutbe` int(11) NOT NULL,
  `mesaj` text COLLATE utf8_turkish_ci NOT NULL,
  `guncelleme` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `durum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `urunler`
--

CREATE TABLE `urunler` (
  `id` int(11) NOT NULL,
  `kategori` int(11) NOT NULL,
  `altkategori` int(11) NOT NULL,
  `markakategori` int(11) NOT NULL,
  `adi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `seo` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `resim` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `durum` int(11) NOT NULL,
  `indirim` int(11) NOT NULL,
  `secenek` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `urun_kodu` varchar(15) COLLATE utf8_turkish_ci NOT NULL,
  `urun_barkod` varchar(15) COLLATE utf8_turkish_ci NOT NULL,
  `stok` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `fiyat` decimal(9,2) NOT NULL,
  `ifiyat` decimal(9,2) NOT NULL,
  `yuzde` int(11) NOT NULL,
  `aciklama` longtext COLLATE utf8_turkish_ci NOT NULL,
  `ozellik` text COLLATE utf8_turkish_ci NOT NULL,
  `iade` text COLLATE utf8_turkish_ci NOT NULL,
  `coksatan` int(11) NOT NULL,
  `tarih` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `urunler`
--

INSERT INTO `urunler` (`id`, `kategori`, `altkategori`, `markakategori`, `adi`, `seo`, `resim`, `durum`, `indirim`, `secenek`, `urun_kodu`, `urun_barkod`, `stok`, `fiyat`, `ifiyat`, `yuzde`, `aciklama`, `ozellik`, `iade`, `coksatan`, `tarih`) VALUES
(1, 1, 0, 0, 'Rainbow Style', 'Rainbow-Style', 'static_3.jpg', 1, 0, '', '', '', '10', '0.50', '0.00', 0, '<span style=\"color: rgb(32, 33, 36); font-family: consolas, &quot;lucida console&quot;, &quot;courier new&quot;, monospace; font-size: 12px; white-space: pre-wrap;\">Rainbow Style</span>', '', '', 0, '14-05-2022'),
(2, 1, 0, 0, 'Brave tigers NFT', 'Brave-tigers-NFT', 'product_1.jpg', 1, 0, '', '', '', '', '0.60', '0.00', 0, '<p>Cooming Soon</p>', '', '', 0, '14-05-2022'),
(3, 2, 0, 0, 'musics NFT', 'musics-NFT', 'Nifty_Souq_Logo.jpg', 1, 0, '', '', '', '', '0.04', '0.00', 5, '<p>Hazırlanıyor...</p>', '', '', 0, '14-05-2022'),
(4, 2, 0, 0, 'musics2 NFT', 'musics2-NFT', 'musmus.png', 1, 0, '', '', '', '', '0.42', '0.00', 0, '', '', '', 0, '14-05-2022'),
(5, 3, 0, 0, 'moda NFT', 'moda-NFT', 'modaas.jfif', 1, 0, '', '', '', '2', '0.03', '0.00', 0, '<p>Hazırlanıyor...</p>', '', '', 0, '14-05-2022'),
(6, 3, 0, 0, 'moda2 NFT', 'moda2-NFT', '1649685601430_1w4rae5ttj6ro7wtdi4095902g3xhfpp.png', 1, 0, '', '', '', '', '0.03', '0.00', 0, '<p>Hazırlanıyor...</p>', '', '', 0, '14-05-2022'),
(7, 4, 0, 0, 'Sanaldünya1 NFT', 'Sanaldunya1-NFT', 'indir.jfif', 1, 0, '', '', '', '3', '0.90', '0.00', 3, '<p>Hazırlanıyor..</p>', '', '', 0, '14-05-2022'),
(8, 4, 0, 0, 'Sanaldünya2 NFT', 'Sanaldunya2-NFT', 'indir_3.jfif', 1, 0, '', '', '', '', '1.00', '0.00', 0, '<p>Hazırlanıyor..</p>', '', '', 0, '14-05-2022'),
(9, 5, 0, 0, 'money1 NFT', 'money1-NFT', 'money1.jfif', 1, 0, '', '', '', '10', '0.21', '0.00', 0, '<p>Hazırlanıyor..</p>', '', '', 0, '14-05-2022'),
(10, 5, 0, 0, 'Money2 NFT', 'Money2-NFT', 'Money2.jfif', 1, 0, '', '', '', '', '0.33', '0.00', 0, '<p>&nbsp; Hazırlanıyor..</p>', '', '', 0, '14-05-2022'),
(11, 6, 0, 0, 'Kolleksiyon1 NFT', 'Kolleksiyon1-NFT', 'kolleksiyon1.jfif', 1, 0, '', '', '', '2', '0.55', '0.00', 3, '<p>Hazırlanıyor..</p>', '', '', 0, '14-05-2022'),
(12, 6, 0, 0, 'Kolleksiyon2 NFT', 'Kolleksiyon2-NFT', 'Kolleksiyon2.jpg', 1, 0, '', '', '', '', '0.66', '0.00', 0, '<p>&nbsp;&nbsp;Hazırlanıyor..</p>', '', '', 0, '14-05-2022');

-- --------------------------------------------------------

--
-- Table structure for table `urun_kategori`
--

CREATE TABLE `urun_kategori` (
  `id` int(11) NOT NULL,
  `kategori_adi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `resim` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `seo` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `durum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `urun_kategori`
--

INSERT INTO `urun_kategori` (`id`, `kategori_adi`, `resim`, `seo`, `icon`, `durum`) VALUES
(1, 'Sanat', 'images.jfif', 'Sanat', 'fa fa-paint-brush', 1),
(2, 'Müzik', '1434_aHR0cHM6Ly9zMy5jb2ludGVsZWdyYXBoLmNvbS91cGxvYWRzLzIwMjEtMTEvMmFkNjg1ZGQtMzA2Mi00ZTQ4LThjODUtYWVkMDdmMTdlOTRkLmpwZw.jpg', 'Muzik', 'fa fa-music', 1),
(3, 'Moda', 'images_1jfiffdfrdgrf.jfif', 'Moda', 'fa fa-modx', 1),
(4, 'Sanal Dünyalar', 'imagejjjjjjjjs_1.jfif', 'Sanal-Dunyalar', 'fa fa-internet-explorer', 1),
(5, 'Ticaret Kartları', 'ssssssss.jfif', 'Ticaret-Kartlari', 'fa fa-money', 1),
(6, 'Kolleksiyon', 'ppppppppp_1.jfif', 'Kolleksiyon', 'fa fa-arrows-alt', 1);

-- --------------------------------------------------------

--
-- Table structure for table `urun_resim`
--

CREATE TABLE `urun_resim` (
  `id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL,
  `resim_yolu` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `uyeler`
--

CREATE TABLE `uyeler` (
  `id` int(11) NOT NULL,
  `ad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `soyad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `telefon` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `gun` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `ay` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `yil` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `cinsiyet` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `durum` int(11) NOT NULL,
  `tarih` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `satici_indirim_durumu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `uyeler`
--

INSERT INTO `uyeler` (`id`, `ad`, `soyad`, `email`, `telefon`, `sifre`, `gun`, `ay`, `yil`, `cinsiyet`, `ip`, `durum`, `tarih`, `satici_indirim_durumu`) VALUES
(1, 'Abdulsamet', 'ÖZTÜRK', 'info@teslagateway.com', '5073590080', '06300630', '', '', '', '', '176.235.107.246', 1, '14 Mayıs 2022, 12:37', 0);

-- --------------------------------------------------------

--
-- Table structure for table `yonetici`
--

CREATE TABLE `yonetici` (
  `yonetici_id` int(11) NOT NULL,
  `yonetici_ad_soyad` char(55) COLLATE utf8_turkish_ci DEFAULT NULL,
  `yonetici_kullanici` char(25) COLLATE utf8_turkish_ci DEFAULT NULL,
  `yonetici_sifre` char(25) COLLATE utf8_turkish_ci DEFAULT NULL,
  `yonetici_email` char(55) COLLATE utf8_turkish_ci DEFAULT NULL,
  `yonetici_son_giris` char(55) COLLATE utf8_turkish_ci DEFAULT NULL,
  `satici` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `yonetici`
--

INSERT INTO `yonetici` (`yonetici_id`, `yonetici_ad_soyad`, `yonetici_kullanici`, `yonetici_sifre`, `yonetici_email`, `yonetici_son_giris`, `satici`) VALUES
(1, 'Abdulsamet ÖZTÜRK', 'OzBilgSoft', '06300630', 'info@ozbilgsoft.com', '04 Kasım 2021, 19:25', 0),
(5, 'NFT Tesla', 'NFT', '06300630', 'info@teslagateway.com', '14 Mayıs 2022, 11:38', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alt_urun_kategori`
--
ALTER TABLE `alt_urun_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bilgiler`
--
ALTER TABLE `bilgiler`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bloglar`
--
ALTER TABLE `bloglar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ebulten`
--
ALTER TABLE `ebulten`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ilceler`
--
ALTER TABLE `ilceler`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_DF2497D4BAF0B6B8` (`il_id`);

--
-- Indexes for table `iletisim`
--
ALTER TABLE `iletisim`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iller`
--
ALTER TABLE `iller`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `metamask`
--
ALTER TABLE `metamask`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `address` (`address`);

--
-- Indexes for table `nft`
--
ALTER TABLE `nft`
  ADD PRIMARY KEY (`nft_id`);

--
-- Indexes for table `numaralar`
--
ALTER TABLE `numaralar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oranlar`
--
ALTER TABLE `oranlar`
  ADD PRIMARY KEY (`oranlar_id`);

--
-- Indexes for table `poslar`
--
ALTER TABLE `poslar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `satici`
--
ALTER TABLE `satici`
  ADD PRIMARY KEY (`satici_id`);

--
-- Indexes for table `sayfalar`
--
ALTER TABLE `sayfalar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `secenek`
--
ALTER TABLE `secenek`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `secenek_kategori`
--
ALTER TABLE `secenek_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_ayar`
--
ALTER TABLE `site_ayar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sss`
--
ALTER TABLE `sss`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket_cevap`
--
ALTER TABLE `ticket_cevap`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `urunler`
--
ALTER TABLE `urunler`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `urun_kategori`
--
ALTER TABLE `urun_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `urun_resim`
--
ALTER TABLE `urun_resim`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uyeler`
--
ALTER TABLE `uyeler`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yonetici`
--
ALTER TABLE `yonetici`
  ADD PRIMARY KEY (`yonetici_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alt_urun_kategori`
--
ALTER TABLE `alt_urun_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bilgiler`
--
ALTER TABLE `bilgiler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bloglar`
--
ALTER TABLE `bloglar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ebulten`
--
ALTER TABLE `ebulten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ilceler`
--
ALTER TABLE `ilceler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=968;

--
-- AUTO_INCREMENT for table `iletisim`
--
ALTER TABLE `iletisim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `iller`
--
ALTER TABLE `iller`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `metamask`
--
ALTER TABLE `metamask`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nft`
--
ALTER TABLE `nft`
  MODIFY `nft_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `numaralar`
--
ALTER TABLE `numaralar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oranlar`
--
ALTER TABLE `oranlar`
  MODIFY `oranlar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `poslar`
--
ALTER TABLE `poslar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `satici`
--
ALTER TABLE `satici`
  MODIFY `satici_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sayfalar`
--
ALTER TABLE `sayfalar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `secenek`
--
ALTER TABLE `secenek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `secenek_kategori`
--
ALTER TABLE `secenek_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `site_ayar`
--
ALTER TABLE `site_ayar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sss`
--
ALTER TABLE `sss`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ticket_cevap`
--
ALTER TABLE `ticket_cevap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `urunler`
--
ALTER TABLE `urunler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `urun_kategori`
--
ALTER TABLE `urun_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `urun_resim`
--
ALTER TABLE `urun_resim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uyeler`
--
ALTER TABLE `uyeler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `yonetici`
--
ALTER TABLE `yonetici`
  MODIFY `yonetici_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ilceler`
--
ALTER TABLE `ilceler`
  ADD CONSTRAINT `FK_DF2497D4BAF0B6B8` FOREIGN KEY (`il_id`) REFERENCES `iller` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
