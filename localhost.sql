-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- 생성 시간: 18-12-28 07:30
-- 서버 버전: 5.7.24-0ubuntu0.16.04.1
-- PHP 버전: 7.2.6-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `nalsaem_m`
--
CREATE DATABASE IF NOT EXISTS `nalsaem_m` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `nalsaem_m`;

-- --------------------------------------------------------

--
-- 테이블 구조 `users_info`
--

CREATE TABLE `users_info` (
  `u_no` int(10) NOT NULL,
  `u_id` varchar(40) CHARACTER SET utf8 NOT NULL,
  `u_pw` varchar(50) CHARACTER SET utf8 NOT NULL,
  `u_nick` varchar(10) CHARACTER SET utf8 NOT NULL,
  `u_cheese` int(10) NOT NULL DEFAULT '0',
  `u_heart` int(2) NOT NULL DEFAULT '5',
  `u_email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 테이블의 덤프 데이터 `users_info`
--

INSERT INTO `users_info` (`u_no`, `u_id`, `u_pw`, `u_nick`, `u_cheese`, `u_heart`, `u_email`) VALUES
(1, 'aaa', '74A3A3E97F45BC08CA87AC90599A0CD0AF7FF75B', '123', 0, 5, '1hk_star@naver.com'),
(2, 'aa', '487a095d0e92b508da4cf730ad3e85070cdcf8c6', 'aa', 0, 0, 'aa'),
(3, '111', '16e1275e5ac7c164f7aabbf408fb1fbe0e3364ae', '111', 0, 5, '111'),
(4, 'a', '05eef37966a13f784c60d982762b8be56ec9946e', 'a', 0, 5, 'a');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `users_info`
--
ALTER TABLE `users_info`
  ADD PRIMARY KEY (`u_no`),
  ADD UNIQUE KEY `u_id` (`u_id`),
  ADD UNIQUE KEY `u_nick` (`u_nick`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `users_info`
--
ALTER TABLE `users_info`
  MODIFY `u_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
