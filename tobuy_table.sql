-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2020 年 6 月 09 日 00:45
-- サーバのバージョン： 10.4.11-MariaDB
-- PHP のバージョン: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gsacf_l03_06`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `tobuy_table`
--

CREATE TABLE `tobuy_table` (
  `id` int(12) NOT NULL,
  `store` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `tobuy_table`
--

INSERT INTO `tobuy_table` (`id`, `store`, `item`, `priority`) VALUES
(1, 'スーパー', '醤油（濃口）', 'ASAP'),
(2, 'スーパー', 'マヨネーズ', 'ASAP'),
(3, 'スーパー', 'バター', '安ければ'),
(4, 'スーパー', '粉チーズ', '安ければ'),
(5, 'スーパー', 'オリーブオイル', 'ASAP'),
(6, 'スーパー', 'にんにくチューブ', 'ASAP'),
(7, 'スーパー', '顆粒コンソメ', '安ければ'),
(9, 'ドラッグストア', '化粧水', 'ASAP'),
(10, 'ドラッグストア', '乳液', 'ASAP'),
(11, 'ドラッグストア', '歯ブラシ', 'ASAP'),
(12, 'ドラッグストア', 'ワセリン', '検討中'),
(13, 'ネット', 'センサー付き電球', 'ASAP'),
(14, 'ネット', '日焼け止め', 'ASAP'),
(15, 'ネット', 'プロジェクタ', '検討中'),
(16, 'ネット', 'ゴミ箱', '検討中'),
(17, 'ネット', 'トレーニングマット', '検討中'),
(27, 'スーパー', 'バナナ', '安ければ'),
(29, 'ドラッグストア', 'シャンプー', 'ASAP'),
(30, 'スーパー', 'ケチャップ', '安いのがあれば'),
(31, '薬局', 'tes', '検討中');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `tobuy_table`
--
ALTER TABLE `tobuy_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `tobuy_table`
--
ALTER TABLE `tobuy_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
