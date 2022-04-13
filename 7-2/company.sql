-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:8111
-- 生成日時: 2022-04-13 10:14:24
-- サーバのバージョン： 10.4.20-MariaDB
-- PHP のバージョン: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `company`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `companies`
--

CREATE TABLE `companies` (
  `id` int(255) NOT NULL COMMENT 'id',
  `companyid` varchar(20) DEFAULT NULL COMMENT 'ログインID',
  `companyname` varchar(255) NOT NULL COMMENT '会社名',
  `companykana` varchar(255) NOT NULL COMMENT '社名（フリガナ）',
  `postcode` int(255) NOT NULL COMMENT '郵便番号',
  `location` varchar(255) NOT NULL COMMENT '経理所在地',
  `tell` int(255) NOT NULL COMMENT '電話番号',
  `fax` int(255) DEFAULT NULL COMMENT 'FAX番号',
  `representative` varchar(255) NOT NULL COMMENT '会社代表者　役職/氏名',
  `capital` varchar(255) NOT NULL COMMENT '資本金',
  `edate` varchar(255) NOT NULL COMMENT '設立年月日',
  `employees` varchar(255) NOT NULL COMMENT '従業員数',
  `content` varchar(255) NOT NULL COMMENT '事業内容',
  `url` varchar(255) NOT NULL COMMENT 'URL',
  `site` varchar(255) NOT NULL COMMENT '取引条件（支払いサイト）',
  `payee` varchar(255) NOT NULL COMMENT '振込先　金融機関名',
  `branch` varchar(255) NOT NULL COMMENT '支店名',
  `accountinformation` varchar(255) NOT NULL COMMENT '口座情報　種別',
  `accountnumber` varchar(255) NOT NULL COMMENT '口座番号',
  `authorization` varchar(255) NOT NULL COMMENT '人材派遣許認可',
  `name` varchar(255) NOT NULL COMMENT '発注書送付先担当者（フルネーム）',
  `mail` varchar(255) NOT NULL COMMENT '発注書送付先担当者（メールアドレス）',
  `created-at` datetime NOT NULL COMMENT '登録日時',
  `updated-at` datetime NOT NULL COMMENT '更新日時',
  `del_flg` int(11) NOT NULL DEFAULT 0 COMMENT '権限(0:表示 1:非表示)',
  `status` varchar(50) NOT NULL COMMENT '登録状況',
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `companies`
--

INSERT INTO `companies` (`id`, `companyid`, `companyname`, `companykana`, `postcode`, `location`, `tell`, `fax`, `representative`, `capital`, `edate`, `employees`, `content`, `url`, `site`, `payee`, `branch`, `accountinformation`, `accountnumber`, `authorization`, `name`, `mail`, `created-at`, `updated-at`, `del_flg`, `status`, `password`) VALUES
(109, '123456', 'かいしゃ', '', 0, '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '', '$2y$10$qz0rocBlwfoYgCB3EyUvwe88noJfw7TraPG7UuVxVGhzU8o5Pcq2O'),
(110, '123456', 'かいしゃ000', '', 0, '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '$2y$10$qz0rocBlwfoYgCB3EyUvwe88noJfw7TraPG7UuVxVGhzU8o5Pcq2O'),
(111, '220329', '', '', 0, '', 0, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '', '$2y$10$/GLf/aFhI87yOP/yqJ/z0uQSsAcC/sG1Ni8JAvOU0LBmVXXpaVYLe'),
(112, '333', '', '', 0, '', 0, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '', '$2y$10$y4VWcezsK5FN1iIRm6uvbeth.hemP0n/ToP4lvnlvFlFz5/Arzf3a'),
(113, '444', '444', '444', 222, '222', 12345678, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '', '$2y$10$f4mltZsT/3.QtVpdqgQn8uykpn1/rc.2C3XHmQITkSGdclbJHDWt2'),
(114, '100', 'a', 'a', 123456, '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '', '$2y$10$NuIPfC44Y17dOunogfoNHutzVKXSAsnHbRkqtgY8DwK.Q5aoluHV6'),
(115, '100', 'a', 'a', 0, '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '$2y$10$NuIPfC44Y17dOunogfoNHutzVKXSAsnHbRkqtgY8DwK.Q5aoluHV6'),
(116, '3030', '3030', '3030', 0, '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '$2y$10$jvMBnzzUQkYfwWhORG7oGu/i7alsO1OUW/7Ql28sAFgZRRoyP15Hu'),
(117, '1234567', 'TEST', 'テスト', 1111111, 'test', 12345678, 12345678, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '', '$2y$10$lyRWu1jQbwAnpM4rpfCaw.wd/zLnmcag3EOsYvuYuWi65YXrJSv32'),
(118, '12345678', '会社', 'カイシャ', 112233, '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '$2y$10$yP5W9jvcpUt4jre1.U9urOcY33sFuPO1iuZQtMXChvdBfxcAhK4k6'),
(119, '1234', 'カイシャ', 'カイシャ', 112233, '渋谷', 12345678, 12345678, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '', '$2y$10$A.Xt6JYC94.4zcGie3H3beFmp2hTVpsP5CAtFvj1ouRYsDvwNMbl6'),
(120, '1000', '株式会社テスト', 'カブシキガイシャテスト', 1111111, '東京都渋谷区', 2147483647, 2147483647, 'テスト/テスト', '1000万円', '2022/1/1', '100人', 'テスト', 'テスト', 'テスト', 'テスト', 'テスト', 'テスト', 'テスト', 'テスト', 'テスト', 'test@test.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '$2y$10$UdcGGr9r.QiVSuIRgIx/z.m.hBQoSA66FELvqB1Gx6x2ZqY1QhH9i'),
(121, '11111', 'aaaaa', 'aaaaa', 0, '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '$2y$10$kLx.zLhR2Fd2Gy/Q.5C4uO8RQ.fIRiiNBgXO9t0eGtBd3A53KveQ6'),
(122, '55555', 'qqqqq', '', 0, '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '$2y$10$H6crqqa4YmYHHglm5IGKW.BAZBJ.cMH1nI8sLyLKURNDMwXtCzgUe'),
(123, '999', 'ooo', 'フリガナ', 0, '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '$2y$10$7dspIGytvIcGer2hDi6LbeGVMM/GBbkdj.xujZMVRHmis5p1cCkB.'),
(124, 'kkk', 'kkk', '', 0, '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '', '$2y$10$TvLy1midJFMttDyGVpk5Be74liacOg4LILJ7FxqvBQ1bKhZgOqfoW'),
(125, '8888', 'jjj', 'フリガナ', 0, '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '$2y$10$mfyLjotD1241DR88Ez1i5ObdSIke.UzoyWMy9hfbeilIwH8wS7pfG'),
(126, '98', '発表', 'ハッピョウ', 0, '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '', ''),
(127, '345', 'takayama', 'フリガナ', 0, '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '', '$2y$10$lyKHuXGqvr.Rv/ZKLUsNtuOKGOAq8lRBMMIp0VDkMKzm6oHobGDVC'),
(128, '6789', 'ダイレクト', 'フリガナ', 0, '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '', '$2y$10$/ksu.u6Y9cKc3HdZyZpcyO5cxf7rBXQgt4vhemp2uRCOnVL7svmre');

-- --------------------------------------------------------

--
-- テーブルの構造 `managers`
--

CREATE TABLE `managers` (
  `id` int(20) DEFAULT NULL,
  `userid` int(4) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL,
  `created-at` datetime NOT NULL,
  `updated-at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `managers`
--

INSERT INTO `managers` (`id`, `userid`, `password`, `created-at`, `updated-at`) VALUES
(1, 123456, '123456', '2022-03-03 06:23:32', '2022-03-03 06:23:32');

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `companyname` varchar(100) NOT NULL,
  `companyid` varchar(10) NOT NULL,
  `password` varchar(200) DEFAULT NULL,
  `created-at` datetime NOT NULL,
  `updated-at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `users`
--

INSERT INTO `users` (`id`, `companyname`, `companyid`, `password`, `created-at`, `updated-at`) VALUES
(43, 'てすと000', '112233', '$2y$10$bU0Ay5t8fEHFPOn7Cu6d0eKprEAIAFttkSfAHVGTvJulIvATv/JNi', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, '222', '222', '$2y$10$zDfUuMqGa8AbQju4/J.A5.0H4IQtmCJeizxjDItvn4ibbGGWbn7em', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, '2022', '328', '$2y$10$2XXEyjM9bRvYgKy.5uzTUuLhmxY9.XQLLJwP2aaMdASuOrAnExEaa', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, 'かいしゃ', '123', '$2y$10$pC5KNdxKkcq8xDfkEyMfYOydLYum.3/LpfFY1jOPfbnI3oR2oF1zG', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, '20220328', '220328', '$2y$10$gGwS4ENl4XUg3cTz0MV1uOFq0iItZPCJZpcmWkxTwdr6to3CXDFQa', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, 'かいしゃ', '12345', '$2y$10$dXlRVbz/JYR.K.40UjOBK.cbsrTZM721ODlOPp7UyWcCikQF5f1Ni', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, 'てすと000', '112233', '$2y$10$bU0Ay5t8fEHFPOn7Cu6d0eKprEAIAFttkSfAHVGTvJulIvATv/JNi', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, '2022', '220329', '$2y$10$/GLf/aFhI87yOP/yqJ/z0uQSsAcC/sG1Ni8JAvOU0LBmVXXpaVYLe', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, 'test', '333', '$2y$10$y4VWcezsK5FN1iIRm6uvbeth.hemP0n/ToP4lvnlvFlFz5/Arzf3a', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, '444', '444', '$2y$10$f4mltZsT/3.QtVpdqgQn8uykpn1/rc.2C3XHmQITkSGdclbJHDWt2', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, 'a', '100', '$2y$10$NuIPfC44Y17dOunogfoNHutzVKXSAsnHbRkqtgY8DwK.Q5aoluHV6', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(54, '3030', '3030', '$2y$10$jvMBnzzUQkYfwWhORG7oGu/i7alsO1OUW/7Ql28sAFgZRRoyP15Hu', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, 'TEST', '1234567', '$2y$10$lyRWu1jQbwAnpM4rpfCaw.wd/zLnmcag3EOsYvuYuWi65YXrJSv32', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(56, '会社', '12345678', '$2y$10$yP5W9jvcpUt4jre1.U9urOcY33sFuPO1iuZQtMXChvdBfxcAhK4k6', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(57, 'カイシャ', '1234', '$2y$10$A.Xt6JYC94.4zcGie3H3beFmp2hTVpsP5CAtFvj1ouRYsDvwNMbl6', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(58, '株式会社テスト', '1000', '$2y$10$UdcGGr9r.QiVSuIRgIx/z.m.hBQoSA66FELvqB1Gx6x2ZqY1QhH9i', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(59, 'aaaaa', '11111', '$2y$10$kLx.zLhR2Fd2Gy/Q.5C4uO8RQ.fIRiiNBgXO9t0eGtBd3A53KveQ6', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(60, 'qqqqq', '55555', '$2y$10$H6crqqa4YmYHHglm5IGKW.BAZBJ.cMH1nI8sLyLKURNDMwXtCzgUe', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(61, 'ooo', '999', '$2y$10$7dspIGytvIcGer2hDi6LbeGVMM/GBbkdj.xujZMVRHmis5p1cCkB.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(62, 'kkk', 'kkk', '$2y$10$TvLy1midJFMttDyGVpk5Be74liacOg4LILJ7FxqvBQ1bKhZgOqfoW', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(63, 'jjj', '8888', '$2y$10$mfyLjotD1241DR88Ez1i5ObdSIke.UzoyWMy9hfbeilIwH8wS7pfG', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(64, '発表', '987', '$2y$10$BxdBt.lSyMus9W83wPvxLekMG/2W3vmzChIB/ZaWr2v9lwFAP4tDu', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(65, 'takayama', '345', '$2y$10$lyKHuXGqvr.Rv/ZKLUsNtuOKGOAq8lRBMMIp0VDkMKzm6oHobGDVC', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(66, 'ダイレクト', '6789', '$2y$10$/ksu.u6Y9cKc3HdZyZpcyO5cxf7rBXQgt4vhemp2uRCOnVL7svmre', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT COMMENT 'id', AUTO_INCREMENT=129;

--
-- テーブルの AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
