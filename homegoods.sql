-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2022 at 08:41 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homegoods`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `text`) VALUES
(1, '   HomeGoods is a global home furnishing brand that brings affordability, design and comfort to people all over the world. To offer a wide range of well-designed, functional home furnishing products at prices so low, that as many people as possible will be able to afford them. We may have come a long way since our humble beginnings, but our vision remains the same: to create a better everyday life for many people.  ');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `user_id` int(15) NOT NULL,
  `product_id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`user_id`, `product_id`) VALUES
(105, 10003);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `emri` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`emri`) VALUES
('Bed'),
('Chair'),
('Desk'),
('Gaming'),
('Kitchen'),
('Library'),
('Shelve'),
('Sofa'),
('Tables'),
('TV table'),
('Wardrobe');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `emri` varchar(255) NOT NULL,
  `mbiemri` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `msg` text NOT NULL,
  `is_read` smallint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `emri`, `mbiemri`, `email`, `msg`, `is_read`) VALUES
(104, '', '', '', '', 0),
(105, '', '', '', '', 0),
(107, '', '', '', '', 0),
(108, 'jnkjn', 'khgbhikbh', 'jhjnjlnjl@sakda.com', 'oiajdmkamsdklwmadsrgargarsgarfggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggg', 1),
(109, 'dvsdgsrfs', 'esfsefesf', 'aiodiaj@aasd.com', 'sadasffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `emri` varchar(255) NOT NULL,
  `cmimi` float NOT NULL,
  `pershkrimi` text NOT NULL,
  `sasia` int(10) NOT NULL,
  `kategoria` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `admin_id` int(15) NOT NULL,
  `is_promoted` smallint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `emri`, `cmimi`, `pershkrimi`, `sasia`, `kategoria`, `image`, `admin_id`, `is_promoted`) VALUES
(1002, 'GAMLEHULT', 99.95, 'Stool with storage, rattan / anthracite color.', 50, 'Chair', '../images/ImagesDb/furniture2.jpg', 100, 1),
(10001, 'LINANÄS', 149.95, 'Two-seater sofa, Vissle beige', 10, 'Sofa', '../images/ImagesDb/furniture1.jpg', 100, 1),
(10002, 'GRUNNARP', 149.95, 'Three-seater bed, light gray', 20, 'Sofa', '../images/ImagesDb/furniture3.jpg', 100, 1),
(10003, 'FRIHETEN', 179.95, 'Sofa bed, Skiftebo blue', 30, 'Sofa', '../images/ImagesDb/furniture4.jpg', 100, 1),
(10004, 'GRIMHULT', 229.95, 'Three-seater bed, gray', 50, 'Sofa', '../images/imagesDb/furniture5.jpg', 104, NULL),
(10005, 'GRUNNARP', 399.95, 'Three-seater bed, light gray', 20, 'Sofa', '../images/ImagesDb/furniture6.jpg', 104, NULL),
(10006, 'FRIHETEN', 449.95, 'Sofa bed, Skiftebo dark gray', 25, 'Sofa', '../images/ImagesDb/furniture7.jpg', 104, NULL),
(10007, 'ODGER', 89.95, 'Chair, blue', 40, 'Chair', '../images/ImagesDb/furniture8.jpg', 104, NULL),
(10008, 'SVENBERTIL', 59.95, 'Chair, black / Broringe white', 60, 'Chair', '../images/ImagesDb/furniture9.jpg', 104, NULL),
(10009, 'EKENÄSET', 209.95, 'Armchair, Hillared anthracite color', 48, 'Chair', '../images/ImagesDb/furniture10.jpg', 104, NULL),
(10010, 'VEDBO', 249.95, 'Armchair, Gunnared light brown-pink', 80, 'Chair', '../images/ImagesDb/furniture11.jpg', 104, NULL),
(10011, 'FRÖSET', 89.95, 'Armchair without handrails, black stained oak veneer', 50, 'Chair', '../images/ImagesDb/furniture12.jpg', 104, NULL),
(10012, 'EKERÖ', 189.95, 'Armchair, Skiftebo yellow', 25, 'Chair', '../images/ImagesDb/furniture13.jpg', 104, NULL),
(10013, 'STRANDMON', 349.95, 'Armchair and chair, Nordvalla dark gray', 80, 'Chair', '../images/ImagesDb/furniture14.jpg', 104, NULL),
(10014, 'SAKARIAS', 209.95, 'Armchair, black / Sporda dark gray', 40, 'Chair', '../images/ImagesDb/furniture15.jpg', 104, NULL),
(10015, 'MALM', 449.95, 'Bed frame, height with 4 corner storage, black-brown / Lönset 160x200 cm', 25, 'Bed', '../images/ImagesDb/furniture16.jpg', 104, NULL),
(10016, 'HEMNES', 649.95, 'Bed frame with 4 corners. for storage, gray stained / Leirsund 160x200 cm', 90, 'Bed', '../images/ImagesDb/furniture17.jpg', 104, NULL),
(10017, 'IDANÄS', 489.95, 'Bed frame with storage, dark brown stained 140x200 cm', 25, 'Bed', '../images/ImagesDb/furniture18.jpg', 104, NULL),
(10018, 'HAUGA', 449.95, 'Upholstered bed, 4 corner storage, Vissle gray 140x200 cm', 60, 'Bed', '../images/ImagesDb/furniture19.jpg', 104, NULL),
(10019, 'BILLY / OXBERG', 199.95, 'Library, black-brown 80x30x202 cm', 40, 'Library', '../images/ImagesDb/furniture20.jpg', 104, NULL),
(10020, 'BILLY / OXBERG', 349.95, 'Library with glass. door, brown ash veneer 120x30x202 cm', 20, 'Library', '../images/ImagesDb/furniture21.jpg', 104, NULL),
(10021, 'HAVSTA', 899.95, 'Combined storage, glass door, gray 203x47x212 cm', 25, 'Library', '../images/ImagesDb/furniture22.jpg', 104, NULL),
(10022, 'KALLAX', 45.95, 'Connected shelves, white 77x77 cm', 15, 'Shelve', '../images/ImagesDb/furniture23.jpg', 104, NULL),
(10023, 'EKET', 299.95, 'Combination of wall cabinets, white 175x35x210 cm', 15, 'Shelve', '../images/ImagesDb/furniture24.jpg', 104, NULL),
(10024, 'MÖRBYLÅNGA', 599.95, 'Table, oak veneer brown stained 140x85 cm', 26, 'Desk', '../images/ImagesDb/furniture27.jpg', 104, NULL),
(10025, 'VEDBO', 499.95, 'Dining table, black 160x95 cm', 40, 'Tables', '../images/ImagesDb/furniture28.jpg', 104, NULL),
(10026, 'BEKANT', 249.95, 'Corner desk, left, black stained ash veneer / black 160x110 cm160x110 cm', 10, 'Desk', '../images/ImagesDb/furniture29.jpg', 104, NULL),
(10027, 'KNOXHULT', 699.95, 'Kitchen, gray 220x61x220 cm', 30, 'Kitchen', '../images/ImagesDb/furniture30.jpg', 104, NULL),
(10028, 'KNOXHULT ', 699.95, 'Corner kitchen, gray 243x164x220 cm', 25, 'Kitchen', '../images/ImagesDb/furniture31.jpg', 104, NULL),
(10029, 'VINTERKALL', 1229.95, 'Fridge / freezer with double doors, IKEA 700 freestanding / stainless steel 341/171 l', 90, 'Kitchen', '../images/ImagesDb/furniture33.jpg', 104, NULL),
(10030, 'METOD', 59.95, 'Floor element for 2-door sink, white / Askersund im. light ash 60x60 cm', 25, 'Kitchen', '../images/ImagesDb/furniture35.jpg', 104, 1),
(10031, 'UPPSPEL', 89.95, 'Showcase, dark gray 76x56 cm', 20, 'Gaming', '../images/ImagesDb/furniture44.jpg', 104, NULL),
(10032, 'LEDBERG', 44.95, 'LED flexible strip, multicolored 5 m', 90, 'Gaming', '../images/ImagesDb/furniture43.jpg', 104, NULL),
(10033, 'UPPSPEL', 129.95, 'Wheeled drawer, black 40x58 cm', 20, 'Gaming', '../images/ImagesDb/furniture42.jpg', 104, NULL),
(10034, 'LÅNESPELARE', 9.95, 'Cup holder, black', 15, 'Gaming', '../images/ImagesDb/furniture41.jpg', 104, NULL),
(10035, 'MATCHSPEL', 149.95, 'Gaming chair, Bomstad black', 25, 'Gaming', '../images/ImagesDb/furniture40.jpg', 104, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `time_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_admin` smallint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `time_created`, `is_admin`) VALUES
(20, 'Bardhyl', 'Sahiti', 'bs47933@homegoods', 'Admin123', '2022-02-26 20:15:12', 0),
(25, 'Bardhyl', 'Sahiti', 'bs47933@homegoods', 'Admin123', '2022-02-26 20:15:42', 0),
(101, 'User2', 'Demo', 'user2@homegoods.com', '$2y$10$dYP5eD0OsYJxjgX7bDV.G.kZRaak0ftiBTEQFOk825r0LHLtdlGlO', '2022-02-26 17:30:14', 1),
(102, 'Admin', 'Admin', 'admin@homegoods.com', '$2y$10$8wBr7DFkqoT4q4dedzAfs.5eiPjnT7msOBsW4kO1mjGR3SswGcUre', '2022-02-26 17:32:14', 1),
(103, 'Feston', 'User', 'festonuser@homegoods.com', '$2y$10$0no8w5wnPfLR8.1dJAgsTOsc9dSAqmc8rh1lOLlQggPz.BDIU7PjW', '2022-02-26 18:32:14', 0),
(104, 'tauuu', 'nevvv', 'tau@homegoods.com', '$2y$10$1p.3OfXYhNrmoYd80clhPungj2FZq9Hwc6v1BB4/qeBVnP7H3zPjW', '2022-02-26 23:51:33', 1),
(105, 'Taulant', 'Nevzadi', 'taulant@homegoods.com', '$2y$10$xOaka9yaMygxKm1ThstXguAHl0e7Ibr8gT0gJ8HGhW7EVUiSmyNxa', '2022-02-27 13:57:23', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`user_id`,`product_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`emri`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategoria` (`kategoria`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10036;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`kategoria`) REFERENCES `categories` (`emri`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
