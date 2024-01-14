-- phpMyAdmin SQL Dump
-- version 5.1.1
-- Host: 127.0.0.1
-- Server version: 10.4.21-MariaDB
CREATE Database 'amitislight';

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE 'admin' (
  'adminId' int(11) NOT NULL,
  'nameAdmin' varchar(20) COLLATE utf8_persian_ci NOT NULL,
  'password' int(16) NOT NULL,
  'firstname' varchar(20) COLLATE utf8_persian_ci NOT NULL,
  'lastname' varchar(20) COLLATE utf8_persian_ci NOT NULL,
  'phone' int(15) NOT NULL,
  'email' varchar(30) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;


INSERT INTO 'admin' ('adminId', 'nameAdmin', 'password', 'firstname', 'lastname', 'phone', 'email') VALUES
(1, 'Matinkiani', 1234, 'MohammadMAtin', 'Kiani', 9059207841, 'kiani@gmail.com');



CREATE TABLE 'products' (
  'product_id' int(11) NOT NULL,
  'product_name' varchar(20) COLLATE utf8_persian_ci NOT NULL,
  'width' int(50) NOT NULL,
  'hieght' int(50) NOT NULL,
  'price' int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;


INSERT INTO 'products' ('product_id', 'product_name', 'width', 'hieght','price') VALUES
(1, 'چراغ خطی توکار', '5', '10','600000'),


CREATE TABLE 'user' (
  'user_id' int(11) NOT NULL,
  'userName' varchar(30) COLLATE utf8_persian_ci NOT NULL,
  'password' int(16) NOT NULL,
  'firstname' varchar(20) COLLATE utf8_persian_ci NOT NULL,
  'lastname' varchar(20) COLLATE utf8_persian_ci NOT NULL,
  'phone' varchar(15) COLLATE utf8_persian_ci NOT NULL,
  'email' varchar(30) COLLATE utf8_persian_ci NOT NULL,
  'is_delete' int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;


INSERT INTO `user` ('user_id', 'userName', 'password', 'firstname', 'lastname', 'phone', 'email', 'is_delete') VALUES
(1, 'matin789', 12345, 'Mohammad Matin', 'Kiani', '09059207841',  'kiani@gmail,com', 0),



ALTER TABLE 'admin'
  ADD PRIMARY KEY ('adminId');


ALTER TABLE 'products'
  ADD PRIMARY KEY ('product_id');


ALTER TABLE 'user'
  ADD PRIMARY KEY ('user_id');


ALTER TABLE 'admin'
  MODIFY 'adminId' int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;


ALTER TABLE 'products'
  MODIFY 'product_id' int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;


ALTER TABLE 'user'
  MODIFY 'user_id' int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;