-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 10 Sie 2023, 15:55
-- Wersja serwera: 10.4.22-MariaDB
-- Wersja PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `myshop`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `produkty`
--

CREATE TABLE `produkty` (
  `id` int(10) NOT NULL,
  `nazwa` text CHARACTER SET utf8 NOT NULL,
  `price` float NOT NULL,
  `opis` text NOT NULL,
  `product_url` varchar(200) CHARACTER SET utf8 NOT NULL,
  `thumbnail` varchar(200) NOT NULL,
  `special_offer` tinyint(1) DEFAULT NULL,
  `price_old` float NOT NULL,
  `kategoria` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `produkty`
--

INSERT INTO `produkty` (`id`, `nazwa`, `price`, `opis`, `product_url`, `thumbnail`, `special_offer`, `price_old`, `kategoria`) VALUES
(1, 'Aparat Fujitsu Siemens', 99.99, 'Lorem ipsum dolor sir amet', 'basicaparat', 'produkt1.jpg', 0, 99.99, 'elektronika'),
(2, 'Karta pamięci SDHC Kingston SDC10/128GB 128 GB', 9.99, 'Lorem ipsum dolor sit amet', 'kartasd', 'produkt2.jpg', 1, 12.99, 'elektronika'),
(3, 'Powerbank Baseus 30000 mAh czarny', 19.99, 'Lorem ipsum', 'powerbank', 'produkt3.jpg', 0, 19.99, 'elektronika'),
(4, 'Laptop HP 250 G9 15,6\" Intel Core i3 16 GB / 512 GB czarny', 199.99, 'Lorem ipsum dolor sit amet', 'laptop', 'produkt4.jpg', 0, 199.99, 'elektronika'),
(5, 'Alkaliczne baterie Duracell AA LR6 24szt.', 12.99, 'lorem ipsum dolor sit amet', 'baterie', 'produkt5.jpg', 1, 14.99, 'elektronika');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `produkty`
--
ALTER TABLE `produkty`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `produkty`
--
ALTER TABLE `produkty`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
