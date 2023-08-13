-- PLEASE USE THIS SQL FILE TO IMPORT TO DATABASE

-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table company_profile_tutorial.class
CREATE TABLE IF NOT EXISTS `class` (
  `id` int NOT NULL AUTO_INCREMENT,
  `class_name` varchar(50) DEFAULT NULL,
  `age_range` varchar(50) DEFAULT NULL,
  `total_seats` int DEFAULT NULL,
  `available_seats` int NOT NULL DEFAULT '0',
  `class_time` varchar(50) DEFAULT NULL,
  `tution_fee` varchar(50) DEFAULT NULL,
  `class_image_directory` text,
  `class_description` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table company_profile_tutorial.class: ~3 rows (approximately)
INSERT INTO `class` (`id`, `class_name`, `age_range`, `total_seats`, `available_seats`, `class_time`, `tution_fee`, `class_image_directory`, `class_description`) VALUES
	(1, 'Drawing Class', '3 - 6 Years', 40, 39, '08:00 - 10:00', '$290 / Month', 'img/class-1.jpg', 'Dive into colors, shapes, and create artistic wonders with friends.'),
	(2, 'Language Learning', '3 - 6 Years', 40, 40, '08:00 - 10:00', '$290 / Month', 'img/class-2.jpg', 'Journey through languages, communicate globally, expand your world.'),
	(3, 'Basic Science', '3 - 6 Years', 40, 40, '08:00 - 10:00', '$290 / Month', 'img/class-3.jpg', 'Explore the mysteries of nature, ignite curiosity, hands-on experiments await.');

-- Dumping structure for table company_profile_tutorial.class_booking
CREATE TABLE IF NOT EXISTS `class_booking` (
  `id` int NOT NULL AUTO_INCREMENT,
  `client_name` varchar(50) DEFAULT NULL,
  `client_email` varchar(50) DEFAULT NULL,
  `class_id` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table company_profile_tutorial.class_booking: ~1 rows (approximately)
INSERT INTO `class_booking` (`id`, `client_name`, `client_email`, `class_id`) VALUES
	(1, 'asd', 'test@mail.com', 1);

-- Dumping structure for table company_profile_tutorial.features
CREATE TABLE IF NOT EXISTS `features` (
  `id` int NOT NULL AUTO_INCREMENT,
  `icon_classname` varchar(50) DEFAULT NULL,
  `feature_title` varchar(50) DEFAULT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table company_profile_tutorial.features: ~6 rows (approximately)
INSERT INTO `features` (`id`, `icon_classname`, `feature_title`, `description`) VALUES
	(1, 'flaticon-050-fence', 'Play Ground', 'Our playground is a joyful oasis of laughter and active exploration, where kids can run, jump, swing, and have endless adventures!'),
	(2, 'flaticon-022-drum', 'Music and Dance', 'Groove to melodies, express through dance, and let imagination soar in our rhythm-filled world of creativity! 🎶💃'),
	(3, 'flaticon-030-crayons', 'Arts and Crafts', 'Paint, craft, and create – our colorful space is where imaginations bloom, turning ideas into artistic wonders! 🎨✂️'),
	(4, 'flaticon-017-toy-car', 'Safe Transportation', 'Worry not; our secure transport ensures a comfortable journey, putting safety at the forefront for your child! 🚗👦'),
	(5, 'flaticon-025-sandwich', 'Healthy food', 'Nutrient-rich, tasty bites nourish growing bodies, fostering healthy habits and happy taste buds! 🍏🥕'),
	(6, 'flaticon-047-backpack', 'Educational Tour', 'Explore, learn, and expand horizons on captivating tours, making knowledge an exciting adventure! 🌍🔍');

-- Dumping structure for table company_profile_tutorial.page_content
CREATE TABLE IF NOT EXISTS `page_content` (
  `id` int NOT NULL AUTO_INCREMENT,
  `page_name` varchar(50) DEFAULT NULL,
  `content` longtext,
  `content_title` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table company_profile_tutorial.page_content: ~11 rows (approximately)
INSERT INTO `page_content` (`id`, `page_name`, `content`, `content_title`) VALUES
	(1, 'index_page', 'KidKinder - Kindergarten Website Template', 'page_title'),
	(2, 'index_page', 'KidKinder', 'company_name'),
	(3, 'index_page', 'Welcome to our Kid Learning Center, where curious minds thrive through interactive adventures! Our engaging programs, led by passionate educators, spark creativity, foster friendships, and prepare kids for a bright future. Join us for a world of fun and growth at the Kid Learning Center! 🌟', 'welcome_text'),
	(4, 'index_page', 'Kids Learning Center', 'welcome_title'),
	(5, 'index_page', 'New Approach to Kids Education', 'welcome_subtitle'),
	(6, 'index_page', 'Best School For Your Kids', 'learn_about_us_title'),
	(7, 'index_page', 'We\'re a dedicated team of educators and creators passionate about nurturing young minds. Our mission is to provide a joyful, safe, and enriching environment where children can explore, learn, and grow. With engaging programs, inspiring activities, and a commitment to your child\'s well-being, we\'re excited to be part of your educational journey. Join us in creating wonderful memories and shaping a brighter future for the next generation! 🌟', 'learn_about_us_description'),
	(8, 'index_page', 'Enriched social skills.', 'learn_about_us_point_one'),
	(9, 'index_page', 'Enhanced cognitive development.', 'learn_about_us_point_two'),
	(10, 'index_page', 'Safe, supervised environment.', 'learn_about_us_point_three'),
	(11, 'index_page', 'Secure your child\'s spot for an exciting learning adventure! Book a seat now and watch them flourish in a nurturing environment, guided by passionate educators. Join us for engaging activities, growth, and unforgettable memories that shape a brighter future.', 'book_seat_description');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
