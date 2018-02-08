-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2018 年 2 月 08 日 13:45
-- サーバのバージョン： 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gs_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_table`
--

CREATE TABLE IF NOT EXISTS `gs_table` (
`id` int(12) NOT NULL,
  `title` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `day` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `impression` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `url` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `time` datetime NOT NULL,
  `starring` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `director` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_id` varchar(12) NOT NULL,
  `pass` varchar(12) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `gs_table`
--

INSERT INTO `gs_table` (`id`, `title`, `day`, `impression`, `url`, `time`, `starring`, `director`, `u_id`, `pass`) VALUES
(14, 'クレイマークレイマー', '2018-02-04', '面白い', 'https://movies.yahoo.co.jp/movie/%E3%82%B8%E3%83%A7%E3%83%BC%E3%83%BB%E3%83%96%E3%83%A9%E3%83%83%E3%82%AF%E3%82%92%E3%82%88%E3%82%8D%E3%81%97%E3%81%8F/84617/', '2018-02-07 00:47:42', 'ダスティンホフマン', 'ロバート・ベントン', 'tomita', '123'),
(15, 'ジョーブラックをよろしく', '2018-01-09', 'かなしい', 'https://movies.yahoo.co.jp/movie/%E3%82%AF%E3%83%AC%E3%82%A4%E3%83%9E%E3%83%BC%E3%80%81%E3%82%AF%E3%83%AC%E3%82%A4%E3%83%9E%E3%83%BC/6556/', '2018-02-07 00:51:59', 'ブラッドピット', 'マーティン・ブレスト', 'yamada', '111'),
(16, 'スターウォーズ', '2017-12-05', '古い', 'http://starwars.disney.co.jp/movie/lastjedi.html', '2018-02-08 21:37:53', 'マークハミル', 'ジョージルーカス', '', ''),
(17, 'ララランド', '2017-09-06', '楽しい悲しい', 'http://eiga.com/movie/82024/', '2018-02-08 21:39:51', 'ライアン・ゴズリング', 'デイミアン・チャゼル', '', ''),
(18, '美女と野獣', '2017-11-01', '感動', 'http://eiga.com/movie/83472/', '2018-02-08 21:40:48', 'エマワトソン', 'ビル・コンドン', '', ''),
(19, 'メッセージ', '2017-07-04', '不明', 'http://eiga.com/movie/85583/', '2018-02-08 21:41:48', 'エイミーアダムス', 'ドゥニ・ビルヌーブ', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gs_table`
--
ALTER TABLE `gs_table`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gs_table`
--
ALTER TABLE `gs_table`
MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
