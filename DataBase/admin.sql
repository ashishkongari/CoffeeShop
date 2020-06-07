-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2018 at 06:49 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `user_pass` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`user_id`, `user_name`, `user_pass`) VALUES
(1, 'insha', 'insha');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `Price` varchar(50) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `serial` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(80) COLLATE latin1_general_ci NOT NULL,
  `address` varchar(80) COLLATE latin1_general_ci NOT NULL,
  `phone` varchar(20) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`serial`, `name`, `email`, `address`, `phone`) VALUES
(1, 'Stovetop Espresso', 'arnabpl24@gmail.com27', 'sadsad', '896'),
(2, 'asdas', 'jk@.com', 'sqwxs', '896'),
(3, 'insha', 'ar@gmail.com', 'jamu', '785632'),
(4, 'dfgh', 'naval9315@gmail.com', 'rt34', '8975'),
(5, 'dfgh', 'naval9315@gmail.com', 'rt34', '8975'),
(6, 'arnab', 'r@g,com', 'kolkata', '9569'),
(7, 'ashish', 'as@g.com', 'ranchi', '963214'),
(8, 'insha', 'q13@gmail.com', 'lpu gh3', '987654321');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `serial` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `customerid` int(11) NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`serial`, `date`, `customerid`) VALUES
(1, '2016-04-19', 1),
(2, '2016-04-19', 2),
(3, '2016-04-20', 3),
(4, '2016-04-21', 4),
(5, '2016-04-21', 5),
(6, '2016-05-03', 6),
(7, '2016-05-03', 7),
(8, '2017-05-05', 8);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE IF NOT EXISTS `order_detail` (
  `orderid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`orderid`, `productid`, `quantity`, `price`) VALUES
(1, 58, 2, 299),
(2, 58, 2, 299),
(2, 57, 1, 199),
(2, 51, 1, 1999),
(3, 53, 2, 198),
(4, 57, 3, 199),
(5, 57, 3, 199),
(6, 41, 1, 349),
(7, 51, 1, 1999),
(8, 41, 2, 349);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `post_id` int(100) NOT NULL AUTO_INCREMENT,
  `post_date` varchar(55) NOT NULL,
  `post_image` text NOT NULL,
  `post_content` text NOT NULL,
  `post_categories` varchar(100) NOT NULL,
  `post_subcategories` varchar(100) NOT NULL,
  `post_price` decimal(10,0) NOT NULL,
  `post_name` varchar(50) NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=72 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_date`, `post_image`, `post_content`, `post_categories`, `post_subcategories`, `post_price`, `post_name`) VALUES
(41, '04-13-16', 'coffee_times_-_7_bean_-_1.jpg', 'Black Cup', 'mugs_cups', 'cups_saucers', '349', 'CoffeeTimesCup-Black'),
(42, '04-13-16', 'coffee_times_-_7_bean_-_white_1_web_3.jpg', 'White Cup', 'mugs_cups', 'cups_saucers', '198', 'CoffeeTimesCup-White'),
(51, '04-13-16', 'milk_frother_white_for_web.jpg', 'Whips up Milk', 'coffeemaker', 'automatic_coffeemaker', '1999', 'Milk Frother'),
(52, '04-13-16', 'kl.jpg', 'A coffee maker with stovetop', 'coffeemaker', 'stovetop_espressomaker', '499', 'Stovetop Espresso'),
(53, '04-13-16', 'ccd-espresso-cup-and-saucer_1.jpg', 'Espresso cup & saucers', 'mugs_cups', 'cups_saucers', '198', 'EspressoCup'),
(57, '04-14-16', 'indian_-_web.jpg', 'Nothing brings a smile like sipping coffee in your very own Cool Mug. And there is always something more to smile about, with new designs. Just perfect for your desk! Category : Cool Mugs Size : 210 ml ', 'mugs_cups', 'cool_mugs', '199', 'Cool Mugs-Indian'),
(58, '04-14-16', 'tall_mug_3_-_web.jpg', 'Nothing brings a smile like sipping beverage in your very own Tall Mug. And there is always something more to smile about, with new designs. Just perfect for your desk! Category : Cool Mugs Size : 590 ml ', 'mugs_cups', 'cool_mugs', '299', 'Tall Mug - Quirky India'),
(59, '04-15-16', 'mysore_royal_for_web.jpg', 'Mysore Royal : a premium coffee powder with flavors of bitter chocolate and caramel with whisper of rich fruit, with flecks of sweetness makes you feel like royalty .This is not an instant coffee. For best result please use a Plunger to brew this coffee.\r\n\r\nCategory : Coffee Powder Weight : 200g ', 'coffeepowder', 'coffee_on_the_go', '199', 'Mysore Royal Coffee'),
(61, '04-15-16', 'trist_coffee_premix_1.jpg', 'Take home a flavourful, aromatic and easy to brew coffee premix or gift it to your friends and watch them brew happiness. Comes in a pack of 2, 125g each. Each pack contains 5 sachet of 25g each. This mix contains coffee, milk solids & sugar. Just add hot water and enjoy. Category : Instant Coffee Premix Contents: 2 packs of Trist Coffee Premix Weight : 250 gms of Coffee', 'coffeepowder', 'coffee_on_the_go', '250', 'Trist Coffee Premix'),
(63, '04-18-16', 'so_-_costa_rican-web.jpg', 'Single Origin Coffee Powder - Costa Rican Tarrazu. A strictly hard bean, a really sublime coffee. Grown in Costa Rica’s high mountain valley 4,500 feet above sea-level in an area blessed with rich volcanic soil, temperate climate and rarefied air. Near-perfect conditions that are just the pampering a coffee plant needs. Taste experience: Silky. Sweet tangs of citrus with a playful hint of bitter rind.', 'coffeepowder', 'single_origin_international', '200', 'Costa Rican Tarrazu - Single Origin Coffee Powder'),
(66, '04-18-16', 'ccd-mysore-nuggets_1.jpg', 'These aren’t coffees to be sipped. They’re adventures waiting to be had. This is the business class of coffee drinking, if you will. The single malt of coffee, to cut a more familiar analogy. Click here to read more about Single Origin Coffee Mysore Nuggets Extra Bold - The speciality beans of Indian Arabica coffee, Mysore Nuggets Extra Bold comes from Coffee Day’s Yelnoorkhan Estate in the Bababudangiri range, the birthplace of coffee in India. ‘Nuggets’ denote their precious similarity to gold while ‘extra bold’ talks of the bean’s large size. Mysore Nuggets Extra Bold is a subtle, tantalizing drink for the discerning coffee connoisseur', 'coffeepowder', 'single_origin_india', '200', 'Mysore Nuggets Extra Bold - Single Origin Coffee P'),
(67, '04-18-16', 'ccd-indian-kathlekhan_1.jpg', 'These aren’t coffees to be sipped. They’re adventures waiting to be had. This is the business class of coffee drinking, if you will. The single malt of coffee, to cut a more familiar analogy. Click here to read more about Single Origin Coffee Indian Kathlekan Superior - From the Kathlekhan (Dark Forest) Estate of Coffee Day. Legend has it that the bean is direct descendant of the 7 seeds brought into India secretly by Saint Baba Budan and planted around his hut in the mystic Bababudangiri Mountains.', 'coffeepowder', 'single_origin_india', '200', 'Indian Kathlekhan Superior - Single Origin Coffee '),
(68, '04-18-16', 'ceramic_mug_-_festive_1_1.jpg', 'Enjoy your favorite drink on the go with the newly launched Ceramic Mug with lid, gives you freedom from spills and the design is just a perfect match to your style. Category : Sippers Capacity : 400ml ', 'mugs_cups', 'sippers', '299', 'Ceramic Mug - Festive'),
(71, '03-02-17', 'mason_sipper_combo_-_web.jpg', 'ggyggfewfuweuf', 'mugs_cups', 'sippers', '600', 'sippers');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `serial` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `description` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `price` float NOT NULL,
  `picture` varchar(80) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`serial`, `name`, `description`, `price`, `picture`) VALUES
(1, 'View Sonic LCD', '19" View Sonic Black LCD, with 10 months warranty', 250, 'images/lcd.jpg'),
(2, 'IBM CDROM Drive', 'IBM CDROM Drive', 80, 'images/cdrom-drive.jpg'),
(3, 'Laptop Charger', 'Dell Laptop Charger with 6 months warranty', 50, 'images/charger.jpg'),
(4, 'Seagate Hard Drive', '80 GB Seagate Hard Drive in 10 months warranty', 40, 'images/hard-drive.jpg'),
(5, 'Atech Mouse', 'Black colored laser mouse. No warranty', 5, 'images/mouse.jpg'),
(6, 'Nokia 5800', 'Nokia 5800 XpressMusic is a mobile device with 3.2" widescreen display brings photos, video clips and web content to life', 299, 'images/mobile.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
