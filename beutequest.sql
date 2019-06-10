/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 10.1.40-MariaDB : Database - beautequest
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`beautequest` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `beautequest`;

/*Table structure for table `business_information` */

DROP TABLE IF EXISTS `business_information`;

CREATE TABLE `business_information` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `product_user_since` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_of_referrer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `existing_business` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `existing_business_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dti_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tin_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` tinyint(1) NOT NULL,
  `instagram` tinyint(1) NOT NULL,
  `lazada` tinyint(1) NOT NULL,
  `shopee` tinyint(1) NOT NULL,
  `personalcontacts` tinyint(1) NOT NULL,
  `existingbusiness` tinyint(1) NOT NULL,
  `others` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_business_account` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_business_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instragram_business_account` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lazada_account` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shopee_account` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `business_information` */

insert  into `business_information`(`id`,`product_user_since`,`name_of_referrer`,`existing_business`,`existing_business_address`,`dti_number`,`tin_number`,`facebook`,`instagram`,`lazada`,`shopee`,`personalcontacts`,`existingbusiness`,`others`,`facebook_business_account`,`facebook_business_url`,`instragram_business_account`,`lazada_account`,`shopee_account`,`user_id`,`created_at`,`updated_at`) values (1,'1985-01-22','Sonia Short','Tatyana David','Rebekah Holden','Holly Massey','Latifah Gay',1,1,0,0,1,0,'Julian Gould','Trevor Pittman','Malcolm Valentine','Abdul Brady','James Cantu','Casey Peck',1,'2019-06-08 17:32:17','2019-06-08 17:32:17'),(2,'1990-04-17','Omar Levy','Judah Walker','Hedda Ayers','Claire Cameron','Peter Barnes',0,1,1,0,1,1,'Alisa Byrd','Ciara Howe','Rhonda Kemp','Leila Olson','Alexandra Carey','Freya Mercado',2,'2019-06-08 18:23:22','2019-06-08 18:23:22'),(3,'1975-03-05','Lesley Pratt','Amethyst Macias','Benjamin Griffith','Naomi Shaffer','Whitney Delgado',0,0,0,0,1,0,'Salvador Spence','Felix Savage','Christen Wolf','Iona Lang','Ifeoma Rojas','Amity Tucker',3,'2019-06-08 18:24:01','2019-06-08 18:24:01'),(4,'1980-07-09','Nathan Valenzuela','India Newton','Oren Duke','Priscilla Medina','September Fernandez',0,1,1,1,1,1,'Davis Garza','Chancellor Reid','Kimberley Koch','Hanae Dickerson','Skyler Foster','Ignacia Collins',4,'2019-06-08 18:24:39','2019-06-08 18:24:39'),(5,'2014-07-04','Nora Walters','Bert Richards','Judith Hendrix','Burke Frazier','Zenaida Fleming',0,0,0,1,0,1,'Geraldine Spears','Alana Henderson','Elmo Shields','Shannon Oneil','Astra Larsen','Idona Horton',5,'2019-06-08 18:25:53','2019-06-08 18:25:53'),(6,'1990-01-06','Magee Payne','Jenette Donovan','Jena Wheeler','Graiden Mendez','Devin Wright',0,1,1,0,0,1,'Maxine Hancock','Roary Hansen','Dora Gibbs','Hyacinth Mann','Astra Wheeler','Levi Rosa',6,'2019-06-08 18:26:29','2019-06-08 18:26:29'),(7,'2017-01-06','Sybil Hansen','Leo Graves','Maisie Dejesus','Connor Moran','Melyssa Lott',1,0,1,0,0,0,'Leah Petty','Gareth Merrill','Adam Holman','Leonard Woodard','Ashely Blair','Cameron Lancaster',7,'2019-06-08 18:28:02','2019-06-08 18:28:02'),(8,'1970-08-03','Curran Hicks','Yasir Fisher','Bevis Steele','Madonna Vance','Hadley Rojas',0,0,0,1,0,0,'Sawyer Maddox','Magee Huffman','Herman Riley','Maite Carlson','Cameron Jensen','Jaden Wall',8,'2019-06-08 18:30:21','2019-06-08 18:30:21'),(9,'1993-06-19','August Baxter','Fiona Herring','Beau Mckee','Gavin Ingram','Lamar Meyers',0,0,0,1,0,1,'Amela Arnold','Destiny Bush','Natalie Carroll','Otto Ramos','Rhoda Myers','Raya Lindsay',9,'2019-06-08 20:50:47','2019-06-08 20:50:47'),(10,'2015-09-05','Leslie Bowen','Grady Pope','Octavius Franklin','Risa Stafford','Jason Torres',0,1,1,1,0,0,'Blythe Sharp','Ezra Sweeney','Marny Morris','Logan Maldonado','Zoe Stokes','Cameran Santos',10,'2019-06-08 21:46:44','2019-06-08 21:46:44'),(11,'1999-11-18','Ali Lancaster','Aladdin Mercer','Beck Sawyer','Lenore Obrien','Drake Colon',1,0,1,1,1,1,'Ora Gay','Leah Mccormick','Holly Olson','Odette Hendrix','Camden Murphy','Regan Hurley',11,'2019-06-08 21:47:49','2019-06-08 21:47:49'),(12,'1988-05-11','Kylynn Patrick','Anthony Benjamin','Kelsie Erickson','Christian Brewer','Lois Sexton',0,0,1,1,1,0,'Lewis Walters','Unity Willis','Edan Justice','Callum Koch','Giselle Richard','Ella White',12,'2019-06-09 00:40:26','2019-06-09 00:40:26'),(13,'1980-09-01','Azalia Rogers','Alvin Tyson','Keaton Hayes','Xavier Blair','Sonya Hudson',1,0,1,0,0,0,'Xander Johns','Xaviera Montgomery','Morgan Mays','Georgia Tate','Hoyt Mercado','Nicholas King',13,'2019-06-09 01:19:15','2019-06-09 01:19:15'),(14,'2004-11-12','Pearl Yates','Burke Buckley','Madeline Mathews','Sebastian Huber','Nero Hudson',1,0,0,1,1,0,'Flavia Owen','Nerea Larsen','Ella Franks','Taylor Ellison','Elaine Villarreal','Lois Woodward',14,'2019-06-10 03:27:06','2019-06-10 03:27:06');

/*Table structure for table `items` */

DROP TABLE IF EXISTS `items`;

CREATE TABLE `items` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `suggested_retail_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reseller` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `distributor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mega_distributor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `items_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `items` */

insert  into `items`(`id`,`name`,`suggested_retail_price`,`reseller`,`distributor`,`mega_distributor`,`category`,`created_at`,`updated_at`) values (1,'Colton Velasquez','96','74','100','52','Under_Arm_Whitening_Set','2019-06-08 17:43:07','2019-06-08 17:43:07');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_06_05_230341_create_user_details_table',1),(4,'2019_06_06_175515_create_business_information_table',1),(5,'2019_06_07_162702_create_items_table',1);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `user_details` */

DROP TABLE IF EXISTS `user_details`;

CREATE TABLE `user_details` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middle_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `home_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `land_line_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram_account` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `user_details` */

insert  into `user_details`(`id`,`first_name`,`middle_name`,`last_name`,`birth_date`,`home_address`,`shipping_address`,`land_line_number`,`mobile_number`,`facebook_name`,`facebook_url`,`instagram_account`,`user_id`,`created_at`,`updated_at`) values (1,'Quon','Colton Winters','Kelly','2005-04-01','Sed commodo reprehen','Consequatur nesciun','+1 (242) 536-5549','+1 (141) 145-3611','Chancellor Velazquez','Quis sunt eveniet a','Blanditiis aut animi',1,'2019-06-08 17:31:47','2019-06-08 17:31:47'),(2,'Ulysses','Oscar Murray','Miranda','2005-08-10','Quis aute consequatu','Obcaecati fugiat com','+1 (467) 925-9958','+1 (569) 321-2118','Ila Mendoza','Consequat Quos qui','Fugit deserunt dolo',2,'2019-06-08 18:16:04','2019-06-08 18:16:04'),(3,'Valentine','Briar Roy','Whitney','1976-10-18','Accusamus enim labor','Minus esse iure ad','+1 (754) 599-7107','+1 (226) 665-6758','Chester Gordon','Est corrupti enim','Deleniti alias in au',3,'2019-06-08 18:23:57','2019-06-08 18:23:57'),(4,'Vielka','Cade Finch','Buckner','2013-02-22','Nulla qui amet cons','Harum quam adipisci','+1 (653) 612-9521','+1 (315) 305-8221','Gay Diaz','Esse exercitationem','Nulla explicabo Acc',4,'2019-06-08 18:24:37','2019-06-08 18:24:37'),(5,'Camille','Amy Fleming','Cain','1978-07-10','Laborum aliquam nemo','Qui voluptatem Simi','+1 (394) 815-3217','+1 (402) 321-9057','Judah Collier','Magni esse commodi','In sapiente sint ten',5,'2019-06-08 18:25:50','2019-06-08 18:25:50'),(6,'Griffith','Gannon Mccarthy','Navarro','2009-10-23','Veritatis id nostru','Incidunt et ut fugi','+1 (687) 884-6738','+1 (573) 189-6957','Abdul Alford','Error qui ea sunt ap','Non officia odio et',6,'2019-06-08 18:26:27','2019-06-08 18:26:27'),(7,'Lisandra','Sonia Woodward','Wheeler','1998-03-19','Ad est magna volupt','Non sit est est sit','+1 (187) 523-9283','+1 (969) 186-9309','Signe Terrell','Doloremque repudiand','Voluptates dolore un',7,'2019-06-08 18:28:00','2019-06-08 18:28:00'),(8,'Alea','Meghan Schmidt','Rios','2011-01-11','Optio quisquam tene','Autem non quia disti','+1 (904) 803-6741','+1 (202) 441-4554','Clinton Langley','Fugit natus ut mole','Commodo expedita qui',8,'2019-06-08 18:30:19','2019-06-08 18:30:19'),(9,'Farrah','Nora Blair','Mckinney','2014-09-24','Ratione pariatur Se','Est accusamus perfer','+1 (145) 935-2108','+1 (331) 534-7863','Jennifer Campos','Vel aperiam dolorem','Veniam amet sunt',9,'2019-06-08 20:50:41','2019-06-08 20:50:41'),(10,'Price','Graiden Neal','Mayer','1987-11-11','Laboriosam incidunt','Est ut error ut arch','+1 (359) 339-1539','+1 (225) 327-7013','Norman Strickland','Veritatis nulla est','In ab dignissimos qu',10,'2019-06-08 21:46:40','2019-06-08 21:46:40'),(11,'Ryder','Hilel Schwartz','Kerr','1979-11-02','Nostrum similique di','Repudiandae vitae am','+1 (718) 276-8002','+1 (463) 202-5686','Chiquita Wong','Atque deserunt est r','Adipisci et ut volup',11,'2019-06-08 21:47:45','2019-06-08 21:47:45'),(12,'Jael','Amena Pitts','Sanders','1994-10-01','Consequatur Incidun','Vero perspiciatis o','+1 (858) 581-4784','+1 (136) 419-4116','Celeste Mcdonald','Aute commodi incidid','Deserunt do laboris',12,'2019-06-09 00:40:24','2019-06-09 00:40:24'),(13,'Alea','Ivory Dickson','Deleon','1975-04-23','Omnis facilis perspi','Hic rem id dolor qu','+1 (906) 521-8101','+1 (117) 181-3986','Lionel Banks','Excepteur dolor dict','Nobis sequi facilis',13,'2019-06-09 01:19:14','2019-06-09 01:19:14'),(14,'Rhiannon','Mari Garrison','Carver','2003-04-10','Qui neque adipisci c','Amet aspernatur ea','+1 (308) 228-7365','+1 (358) 338-5678','Cherokee Avery','Totam tempora quos l','Ut sunt veniam qui',14,'2019-06-10 03:27:05','2019-06-10 03:27:05');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`password`,`created_at`,`updated_at`) values (1,'Linda Bowen','sanifevy@mailinator.net','$2y$10$/tsphoeZlBSsznNyvMQN6eD3YsExjndt1J.lD99PC16A75QiL/CoO','2019-06-08 16:41:07','2019-06-08 16:41:07'),(2,'Gemma Buckner','ziqylivas@mailinator.com','$2y$10$pWTza3Cla4JhQ9o1j8uwi.Cegd3435OQMNtioryju6PeOOVGMmcj6','2019-06-08 18:15:57','2019-06-08 18:15:57'),(3,'Yolanda Craft','qimaji@mailinator.net','$2y$10$Z553JcQeIGdstggDgg6eV.GCJs.xos.MfGTz24Y6LMKCl2Gn2UBzW','2019-06-08 18:23:55','2019-06-08 18:23:55'),(4,'Akeem Rosales','ziwogepudu@mailinator.com','$2y$10$sdPhRw4nbyViOTLU0g/N9Owjb4arXDseYq/.JfOqrdJUEWv3eJF/K','2019-06-08 18:24:35','2019-06-08 18:24:35'),(5,'Hayes Orr','tywaza@mailinator.net','$2y$10$OCVjxe2MljLaFx9Bzxvjo.Qhsz6ZCAQv6J5GXxBiETHJhXilI7owq','2019-06-08 18:25:39','2019-06-08 18:25:39'),(6,'Casey Le','jamuxi@mailinator.net','$2y$10$vW0hm9tZ.0ZxIhXjB4PFqeUAxzR/qvq8GBpk26.YV7HX/kNJwmVMS','2019-06-08 18:26:24','2019-06-08 18:26:24'),(7,'Calista Roth','tewa@mailinator.net','$2y$10$QJFzuy87C.NJ04Rc5booXufHBAcgu1qd3i.hlk.fQIoGcZw/nMJLu','2019-06-08 18:27:58','2019-06-08 18:27:58'),(8,'Tarik Rodgers','lyxiciky@mailinator.net','$2y$10$3oQg/7npE5OatI6fGUiXtu5.tl1/M14tJ/UHybe9t25DgHUTAP76G','2019-06-08 18:30:17','2019-06-08 18:30:17'),(9,'Hector Hewitt','buwurygimu@mailinator.net','$2y$10$vTiiYjb4XiJUMjz.XjVcuezNqfVWgPU1B13q5/hLJCqKQX06YMgFS','2019-06-08 20:50:38','2019-06-08 20:50:38'),(10,'Candace Hayes','pisajufu@mailinator.com','$2y$10$blEzjG3Nlw0wOzf08cc2Gut0gD/ROgOnc2afC3WbmkAledAYQ2rai','2019-06-08 21:46:31','2019-06-08 21:46:31'),(11,'king','ghostproject50@gmail.com','$2y$10$6qiKSU1XgRMbWiPEaDUDcOQX4VfY6QGLWpjZh0PdWXfqq/svzYpei','2019-06-08 21:47:43','2019-06-08 21:47:43'),(12,'Maggy Duncan','jigucikad@mailinator.com','$2y$10$klSlyTdGBUD54arGTF2oQOjhL0g6hpPrmwsTpdmNQlP2xZYqVBKmu','2019-06-09 00:40:22','2019-06-09 00:40:22'),(13,'Alexa Blair','tamelov@mailinator.net','$2y$10$w6UJuE.8yqG87IjANWryxOLhxm2sMRb2WIDjpL1EnpLsE6re/dpZG','2019-06-09 01:19:08','2019-06-09 01:19:08'),(14,'Aristotle Cantrell','xiliwokika@mailinator.com','$2y$10$4RN2Hsg/CUEAMMu8jkczVeE/4M8fnNh9XyTumLyUYzx21WJHU2B32','2019-06-10 03:27:03','2019-06-10 03:27:03');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
