-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2022 年 2 月 10 日 11:56
-- サーバのバージョン： 10.4.21-MariaDB
-- PHP のバージョン: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gsacf_d10_06`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `mydb`
--

CREATE TABLE `mydb` (
  `id` int(12) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- テーブルのデータのダンプ `mydb`
--

INSERT INTO `mydb` (`id`, `name`, `email`, `password`) VALUES
(1, '芳賀陽介', 'sample@gs.com', '$2y$10$Tcrow7W0.NTYJLBKsSrShu8TAO/SPAiVEmPPU2g5ibQ1Lczw062py'),
(2, '芳賀祥平', 'sample@kitayuu.com', '$2y$10$esqK9eX1jWDEkvdmqervQOlcpENe6lUOoPAtkrlD4ZQLisxtWubtK'),
(3, 'サトシ', 'sample@poke.com', '$2y$10$vGMVzR1JkY9J0s/Gy5FiZ.9O.BV/vXSi.wYNJztG7x/JSXLonPLKu'),
(4, 'takeshi', 'sample@iwa.com', '$2y$10$vB6pRLPPTGXeBUDdmMBk1.fWpKwTb1GuKiHmZng1.lJ9/cI6JrBqa'),
(5, 'カスミ', 'sample@mizu.com', '$2y$10$wGPC4MUIzQwvWBzKGTH/I.r12Pb4JozttWdCnmDp4fPSarwI2OuhW'),
(6, '刃牙', 'sample@punch.com', '$2y$10$/coszHWC/Hisw784IOzYl.XQp.iPAIo9C5VollFvzpOTP83Pi6byG'),
(7, 'マリオ', 'sample@kinoko.com', '$2y$10$4Zh3mLl0jkHRvAHqzgzOL.mtYKydMFT18NR/bClsHKciCl.yUs/KO'),
(8, '百足', 'sample@mushi.com', '$2y$10$A5CRGW0pK90kIfb37D3hFehJDt2TFloegJ7zim1T8jNOhyoFB14/y'),
(9, 'カカシ', 'sample@hatake.com', '$2y$10$F1.XUh.4EajZ11.j6o0Ov.bhNCgZi0TtTfc4ArCt3PGOwhkiRxKS6');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `mydb`
--
ALTER TABLE `mydb`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `mydb`
--
ALTER TABLE `mydb`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
