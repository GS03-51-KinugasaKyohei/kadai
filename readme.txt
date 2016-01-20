【japan tourアプリ】

■概要
訪日観光客向けのツアー紹介サイト。

・topページ(index.php)にはツアーカテゴリとツアー一覧が表示される。
・topページよりログインが可能
・ログインページよりログインが可能
・ログイン後、自分の作成した記事の編集が可能

■ファイル内容(1/20現在)

・index.php
カテゴリとツアー一覧を表示。
ログインボタンからlogin.phpに遷移。

・login.php
idとpasswordを入力してログイン
id:guest pass:guest

・mypage.php
ログイン後表示される管理画面
自分が作成したツアーの内容の編集が可能(update)

・nature.php
index.phpから「自然を楽しむツアー」を押下して表示されるツアーカテゴリ一覧ページ


■tour_listテーブル作成

-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: 2016 年 1 月 20 日 23:06
-- サーバのバージョン： 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `tour`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `tour_list`
--

CREATE TABLE `tour_list` (
  `id` int(8) NOT NULL,
  `title` varchar(100) CHARACTER SET utf8 NOT NULL,
  `description` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `image_url` varchar(200) CHARACTER SET utf8 NOT NULL,
  `category` int(8) NOT NULL,
  `author_id` int(8) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `tour_list`
--

INSERT INTO `tour_list` (`id`, `title`, `description`, `image_url`, `category`, `author_id`) VALUES
(1, 'title13', 'Japan is one of the most popular travel destinations in the world. It is a unique blend of traditional and modern, with many temples and buildings from the past co-existing with modern achievements in architecture and technology.', '01.jpg', 1, 1),
(2, 'title2', 'Japan is one of the most popular travel destinations in the world. It is a unique blend of traditional and modern, with many temples and buildings from the past co-existing with modern achievements in architecture and technology.', '02.jpg', 1, 0),
(3, 'title3', 'Japan is one of the most popular travel destinations in the world. It is a unique blend of traditional and modern, with many temples and buildings from the past co-existing with modern achievements in architecture and technology.', '03.jpg', 1, 0),
(4, 'title4', 'Japan is one of the most popular travel destinations in the world. It is a unique blend of traditional and modern, with many temples and buildings from the past co-existing with modern achievements in architecture and technology.', '04.jpg', 2, 0),
(5, 'title5', 'Japan is one of the most popular travel destinations in the world. It is a unique blend of traditional and modern, with many temples and buildings from the past co-existing with modern achievements in architecture and technology.', '05.jpg', 2, 0),
(6, 'title6', 'Japan is one of the most popular travel destinations in the world. It is a unique blend of traditional and modern, with many temples and buildings from the past co-existing with modern achievements in architecture and technology.', '06.jpg', 2, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tour_list`
--
ALTER TABLE `tour_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tour_list`
--
ALTER TABLE `tour_list`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;




■tour_listテーブル作成
-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: 2016 年 1 月 20 日 23:09
-- サーバのバージョン： 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `tour`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `user_mst`
--

CREATE TABLE `user_mst` (
  `id` int(8) NOT NULL,
  `user_name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `password` varchar(200) CHARACTER SET utf8 NOT NULL,
  `email` varchar(200) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `user_mst`
--

INSERT INTO `user_mst` (`id`, `user_name`, `password`, `email`) VALUES
(1, 'guest', '4d773b6faa6ce64f0898e328bddcae53', 'kingskyohei@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_mst`
--
ALTER TABLE `user_mst`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_mst`
--
ALTER TABLE `user_mst`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;

