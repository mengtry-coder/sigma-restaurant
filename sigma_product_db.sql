/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100411
 Source Host           : localhost:3306
 Source Schema         : sigma_product_db

 Target Server Type    : MySQL
 Target Server Version : 100411
 File Encoding         : 65001

 Date: 23/10/2020 23:11:36
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for about_us
-- ----------------------------
DROP TABLE IF EXISTS `about_us`;
CREATE TABLE `about_us` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(255) DEFAULT NULL,
  `feature_image` varchar(255) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of about_us
-- ----------------------------
BEGIN;
INSERT INTO `about_us` VALUES (5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.   Ullamco laboris nisi ut aliquip ex ea commodo consequat.  Duis aute irure dolor in reprehenderit in voluptate velit.  Ullamco lab', '/uploads/about-us/Kane-Restaurant-Interiors-Bucharest-Feature_20200828171955.jpg', 'Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.', '2020-08-28 17:19:55', 1, 4, 4, '2020-08-25 10:20:27');
COMMIT;

-- ----------------------------
-- Table structure for chef
-- ----------------------------
DROP TABLE IF EXISTS `chef`;
CREATE TABLE `chef` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `feature_image` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `position` varchar(250) DEFAULT NULL,
  `facebook_link` varchar(255) DEFAULT NULL,
  `instagram_link` varchar(100) DEFAULT NULL,
  `linkedin_link` varchar(100) DEFAULT NULL,
  `twitter_link` varchar(100) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of chef
-- ----------------------------
BEGIN;
INSERT INTO `chef` VALUES (2, 'Walter White', '/uploads/chef/chefs-1_20200903065056.jpg', '', 'Master Chef', '', '', '', '', NULL, 1, 4, NULL, '2020-09-03 06:50:56');
INSERT INTO `chef` VALUES (3, 'Sarah Jhonson', '/uploads/chef/chefs-2_20200903065116.jpg', '', 'Patissier', '', '', '', '', NULL, 1, 4, NULL, '2020-09-03 06:51:16');
INSERT INTO `chef` VALUES (4, 'William Anderson', '/uploads/chef/chefs-3_20200903065131.jpg', '', 'Cook', '', '', '', '', NULL, 1, 4, NULL, '2020-09-03 06:51:31');
COMMIT;

-- ----------------------------
-- Table structure for city
-- ----------------------------
DROP TABLE IF EXISTS `city`;
CREATE TABLE `city` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(100) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `feature_image` varchar(250) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=370 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of city
-- ----------------------------
BEGIN;
INSERT INTO `city` VALUES (1, 'PNH', '\nភ្នំពេញ', '', NULL, 1000016, '2018-08-12 19:46:33', 1, 1000016, '2018-08-12 19:45:12');
INSERT INTO `city` VALUES (2, 'BMC', '\nបន្ទាយមានជ័យ', '', NULL, 1000016, '2018-08-12 20:43:53', 1, 1000016, '2018-08-12 20:43:53');
INSERT INTO `city` VALUES (3, 'BBM', '\nបាត់ដំបង', '', NULL, 1000016, '2018-08-12 20:44:12', 1, 1000016, '2018-08-12 20:44:12');
INSERT INTO `city` VALUES (4, 'KPC', '\nកំពង់ចាម', '', NULL, 1000016, '2018-08-12 20:44:57', 1, 1000016, '2018-08-12 20:44:57');
INSERT INTO `city` VALUES (5, 'KZC', '\nកំពង់ឆ្នាំង', '', NULL, 1000016, '2018-08-12 20:45:45', 1, 1000016, '2018-08-12 20:45:45');
INSERT INTO `city` VALUES (6, 'KPS', '\nកំពង់ស្ពឺ', '', NULL, 1000016, '2018-08-12 20:46:13', 1, 1000016, '2018-08-12 20:46:13');
INSERT INTO `city` VALUES (7, 'KZK', 'កំពង់ធំ', '', NULL, 1000016, '2018-08-12 20:46:32', 1, 1000016, '2018-08-12 20:46:32');
INSERT INTO `city` VALUES (8, 'KMT', 'កំពត', '', NULL, 1000016, '2018-08-12 20:46:59', 1, 1000016, '2018-08-12 20:46:59');
INSERT INTO `city` VALUES (9, 'KDL', 'កណ្តាល', '', NULL, 1000016, '2018-08-12 20:47:18', 1, 1000016, '2018-08-12 20:47:18');
INSERT INTO `city` VALUES (10, 'KKZ', 'កោះកុង', '', NULL, 1000016, '2018-08-12 20:47:44', 1, 1000016, '2018-08-12 20:47:44');
INSERT INTO `city` VALUES (11, 'KEP', 'កែប', '', NULL, 1000016, '2018-08-12 20:38:22', 1, 1000016, '2018-08-12 20:38:22');
INSERT INTO `city` VALUES (12, 'KTI', 'ក្រចេះ', '', NULL, 1000016, '2018-08-12 20:38:51', 1, 1000016, '2018-08-12 20:38:51');
INSERT INTO `city` VALUES (13, 'MWV', '\nមណ្ឌលគីរី', '', NULL, 1000016, '2018-08-12 20:39:19', 1, 1000016, '2018-08-12 20:39:19');
INSERT INTO `city` VALUES (14, 'OMC', 'ឧត្តរមានជ័យ', '', NULL, 1000016, '2018-08-12 20:39:41', 1, 1000016, '2018-08-12 20:39:41');
INSERT INTO `city` VALUES (15, 'PAI', '\nប៉ៃលិន', '', NULL, 1000016, '2018-08-12 20:40:35', 1, 1000016, '2018-08-12 20:40:35');
INSERT INTO `city` VALUES (16, 'KOS', 'ក្រុងព្រះសីហនុ', '', NULL, 1000016, '2018-08-12 20:41:11', 1, 1000016, '2018-08-12 20:41:11');
INSERT INTO `city` VALUES (17, 'OMY', '\nព្រះវិហារ', '', NULL, 1000016, '2018-08-12 20:42:09', 1, 1000016, '2018-08-12 20:42:09');
INSERT INTO `city` VALUES (18, 'KZD', '\nពោធិសាត់', '', NULL, 1000016, '2018-08-12 20:42:41', 1, 1000016, '2018-08-12 20:42:41');
INSERT INTO `city` VALUES (19, 'PVG', '\nព្រៃវែង', '', NULL, 1000016, '2018-08-12 20:43:07', 1, 1000016, '2018-08-12 20:43:07');
INSERT INTO `city` VALUES (20, 'RBE', '\nរតនគីរី', '', NULL, 1000016, '2018-08-12 20:43:27', 1, 1000016, '2018-08-12 20:43:27');
INSERT INTO `city` VALUES (21, 'REP', 'សៀមរាបd', '', NULL, 4, '2020-08-27 07:10:03', 1, 1000016, '2018-08-12 20:33:40');
INSERT INTO `city` VALUES (22, 'TNX', 'ស្ទឹងត្រែង', '', NULL, 4, '2020-08-24 07:34:44', 1, 1000016, '2018-08-12 20:34:20');
INSERT INTO `city` VALUES (23, 'SVR', 'ស្វាយរៀង', '', NULL, 1000016, '2018-08-12 20:36:23', 1, 1000016, '2018-08-12 20:36:23');
INSERT INTO `city` VALUES (24, 'TKO', 'តាកែវ', '', NULL, 1000016, '2018-08-12 20:36:59', 1, 1000016, '2018-08-12 20:36:59');
INSERT INTO `city` VALUES (25, 'TBK', 'ត្បូងឃ្មុំ', '', NULL, 1000016, '2018-08-12 20:37:25', 1, 1000016, '2018-08-12 20:37:25');
INSERT INTO `city` VALUES (367, 'asdf', 'asfd', 'afsd', NULL, NULL, NULL, 1, 4, '2020-08-25 06:56:18');
INSERT INTO `city` VALUES (368, 'qwer', 'wqer', 'qre', NULL, NULL, NULL, 1, 4, '2020-08-25 06:57:46');
INSERT INTO `city` VALUES (369, 'asdf', 'sdf', 'adsf', NULL, NULL, NULL, 1, 4, '2020-08-25 07:58:53');
COMMIT;

-- ----------------------------
-- Table structure for contact
-- ----------------------------
DROP TABLE IF EXISTS `contact`;
CREATE TABLE `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(250) DEFAULT NULL,
  `location` varchar(250) DEFAULT NULL,
  `open_day` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `contact` varchar(250) DEFAULT NULL,
  `short_description` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `twitter_url` varchar(250) DEFAULT NULL,
  `facebook_url` varchar(250) DEFAULT NULL,
  `instagram_url` varchar(250) DEFAULT NULL,
  `skype_url` varchar(250) DEFAULT NULL,
  `linkedin_url` varchar(250) DEFAULT NULL,
  `open_time` time(6) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of contact
-- ----------------------------
BEGIN;
INSERT INTO `contact` VALUES (1, 'Sigma Pro', 'A108 Adam Street, New York, NY 535022', 'Monday-Saturday: 11:00 AM - 2300 PM', 'info@example.com', '+1 5589 55488 55', 'CONTACT', 'Delivering great food for more than 18 years!', 'Contact Us', NULL, NULL, NULL, NULL, NULL, NULL, '2020-08-25 05:13:47', 1, 4, 4, '2020-08-24 11:49:06');
COMMIT;

-- ----------------------------
-- Table structure for controller_action
-- ----------------------------
DROP TABLE IF EXISTS `controller_action`;
CREATE TABLE `controller_action` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `controller_id` int(11) DEFAULT NULL,
  `action_name` varchar(100) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for controller_name
-- ----------------------------
DROP TABLE IF EXISTS `controller_name`;
CREATE TABLE `controller_name` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `controller_name` varchar(255) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for custom_content
-- ----------------------------
DROP TABLE IF EXISTS `custom_content`;
CREATE TABLE `custom_content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `key` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of custom_content
-- ----------------------------
BEGIN;
INSERT INTO `custom_content` VALUES (1, 'Why Choose Our Restaurant', 'F2Z4Cc2UbBS8');
INSERT INTO `custom_content` VALUES (2, 'WHY US', 'BkdHcUpvaqkF');
INSERT INTO `custom_content` VALUES (3, 'MENU', '_x-01Nk01yB0');
INSERT INTO `custom_content` VALUES (4, 'Check Our Tasty Menu', 'A3r09kxbeyV8');
INSERT INTO `custom_content` VALUES (5, 'SPECIALS', 'iOmtxxTAKbue');
INSERT INTO `custom_content` VALUES (6, 'Check Our Specials', 'Hbge1JO-bHKf');
INSERT INTO `custom_content` VALUES (7, 'EVENTS', 'MB1nkUrS9jp5');
INSERT INTO `custom_content` VALUES (8, 'Organize Your Events in our Restaurant', 'ch-cIncaK13A');
INSERT INTO `custom_content` VALUES (9, 'RESERVATION', 'cRVUGEZ-5KCv');
INSERT INTO `custom_content` VALUES (10, 'Book a Table', 'LPv2iCP3IMO4');
INSERT INTO `custom_content` VALUES (11, 'TESTIMONIALS', 'dlO_rWnfgUX1');
INSERT INTO `custom_content` VALUES (12, 'What they\'re saying about us', 'rQ_3EoqDCdu8');
INSERT INTO `custom_content` VALUES (13, 'GALLERY', 'v8zyxo_vrku7');
INSERT INTO `custom_content` VALUES (14, 'Some photos from Our Restaurant', '37HyJaURg1td');
INSERT INTO `custom_content` VALUES (15, 'CHEFS', '6RDR080EfxHf');
INSERT INTO `custom_content` VALUES (16, 'Our Proffesional Chefs', 'QcKgX3JamTMT');
INSERT INTO `custom_content` VALUES (19, 'Sigma Pro', 'QjKvQFDji4Pu');
INSERT INTO `custom_content` VALUES (20, 'Recent Link', 'kpNl-VrHLgZm');
INSERT INTO `custom_content` VALUES (21, 'About Us', 'Mz054SEOuM90');
INSERT INTO `custom_content` VALUES (22, 'Our Newsletter', 'kr8j5A7yGHIe');
INSERT INTO `custom_content` VALUES (23, '<iframe style=\"border:0; width: 100%; height: 350px;\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15527.94348668745!2d103.85678612786906!3d13.351154549721567!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3110179f68ba5c29%3A0xc5db2aea4', 'T3MG-IOKU6PI');
INSERT INTO `custom_content` VALUES (24, 'Subscribe us if you don\'t want to miss something about us!', 'VuuEWtnYEMGA');
INSERT INTO `custom_content` VALUES (25, 'Siem Reap Restaurant, Cooktail and swimming pool', 'KlBEc1PQ98eN');
INSERT INTO `custom_content` VALUES (26, 'Discover the widest variety of restaurants from the comfort of your home. Order now & enjoy delicious food & great deals! View Deals. Download Our Mobile App. Order Online. Highlights: Mobile App Available, Help Center Available.', 'wjEX0NO2vKWt');
INSERT INTO `custom_content` VALUES (27, 'https://sigma-pro.com', 'RjMTITobzqqq');
INSERT INTO `custom_content` VALUES (28, 'Sigma Angkor Resturant, Siem Reap Resturant', 'GUNwGDpq5470');
INSERT INTO `custom_content` VALUES (29, 'Perfectly located merely 15 minute from the world re-known Angkor Complex and only 8 minutes from Siem Reap International Airport.', 'bp_PTmIPzPt0');
INSERT INTO `custom_content` VALUES (30, 'https://youtu.be/NjDCH6SiMgo', '-TWp3eYH9-R-');
COMMIT;

-- ----------------------------
-- Table structure for custom_field
-- ----------------------------
DROP TABLE IF EXISTS `custom_field`;
CREATE TABLE `custom_field` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `feature_image` varchar(255) DEFAULT NULL,
  `key` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of custom_field
-- ----------------------------
BEGIN;
INSERT INTO `custom_field` VALUES (1, '/uploads/custom-field/Sugaryfoods._20200912111750.jpg', 'vflbl1_bSY4n');
INSERT INTO `custom_field` VALUES (2, '/uploads/custom-field/Kane-Restaurant-Interiors-Bucharest-Feature_20200905060759.jpg', 'CkXyf8Pro20L');
INSERT INTO `custom_field` VALUES (3, '/uploads/custom-field/howcuttingdo_20200905061541.jpg', 'ixN6k7eNYbTa');
INSERT INTO `custom_field` VALUES (4, '/uploads/custom-field/Nutrition-scientists-top-ten-festive-foods-for-a-delicious-nutritious-Christmas_news_large_20200905061646.jpg', 'KL6T8pWM2ar9');
COMMIT;

-- ----------------------------
-- Table structure for event
-- ----------------------------
DROP TABLE IF EXISTS `event`;
CREATE TABLE `event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `feature_image` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of event
-- ----------------------------
BEGIN;
INSERT INTO `event` VALUES (1, 'Birthday Party', 'Lorem, ipsum dolor, sit amet consectetur adipisicing elit. Nobis expedita est sed distinctio exercitationem vitae, dolorum nihil nostrum reprehenderit non numquam explicabo quo illum id nesciunt laborum rerum necessitatibus magni?', '/uploads/event/plan-kids-birthday-party-budget-1068x713_20200915142854.jpg', 100.00, '2020-09-15 14:29:40', 1, 4, 4, '2020-09-01 08:38:06');
COMMIT;

-- ----------------------------
-- Table structure for food_type
-- ----------------------------
DROP TABLE IF EXISTS `food_type`;
CREATE TABLE `food_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of food_type
-- ----------------------------
BEGIN;
INSERT INTO `food_type` VALUES (1, 'Starters', '', NULL, 1, 4, NULL, '2020-08-29 17:48:21');
INSERT INTO `food_type` VALUES (2, 'Salads', '', NULL, 1, 4, NULL, '2020-08-29 17:48:27');
INSERT INTO `food_type` VALUES (3, 'Specialty', '', NULL, 1, 4, NULL, '2020-08-29 17:48:39');
COMMIT;

-- ----------------------------
-- Table structure for menu
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `food_type_id` int(11) DEFAULT NULL,
  `feature_image` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of menu
-- ----------------------------
BEGIN;
INSERT INTO `menu` VALUES (1, 'Cake', 'A delicate crab cake served on a toasted roll with lettuce and tartar sauce\r\n', 2, '/uploads/menu/cake_20200826113806.jpg', 7.95, '2020-08-29 18:43:39', 1, 4, 4, '2020-08-26 11:38:06');
INSERT INTO `menu` VALUES (3, 'Noodle Soup', 'A delicate crab cake served on a toasted roll with lettuce and tartar sauce', 1, '/uploads/menu/caesar_20200830172543.jpg', 10.00, NULL, 1, 4, NULL, '2020-08-30 17:25:43');
INSERT INTO `menu` VALUES (4, 'Duck Grill', 'A delicate crab cake served on a toasted roll with lettuce and tartar sauce', 3, '/uploads/menu/tuscan-grilled_20200830172631.jpg', 20.00, NULL, 1, 4, NULL, '2020-08-30 17:26:31');
COMMIT;

-- ----------------------------
-- Table structure for message
-- ----------------------------
DROP TABLE IF EXISTS `message`;
CREATE TABLE `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `text_message` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of message
-- ----------------------------
BEGIN;
INSERT INTO `message` VALUES (2, 'test', 'test@gmail.com', 'test', 'test', '2020-09-15 05:12:39');
COMMIT;

-- ----------------------------
-- Table structure for migration
-- ----------------------------
DROP TABLE IF EXISTS `migration`;
CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of migration
-- ----------------------------
BEGIN;
INSERT INTO `migration` VALUES ('m000000_000000_base', 1570432386);
INSERT INTO `migration` VALUES ('m130524_201442_init', 1570432392);
INSERT INTO `migration` VALUES ('m190124_110200_add_verification_token_column_to_user_table', 1570432392);
COMMIT;

-- ----------------------------
-- Table structure for role
-- ----------------------------
DROP TABLE IF EXISTS `role`;
CREATE TABLE `role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `controller_id` int(11) DEFAULT NULL,
  `controller_name` varchar(255) DEFAULT NULL,
  `action_name` varchar(255) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `user_type_id` int(11) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for role_action_name
-- ----------------------------
DROP TABLE IF EXISTS `role_action_name`;
CREATE TABLE `role_action_name` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL COMMENT '1 = added; 0 = no added;',
  `action_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for subscriber
-- ----------------------------
DROP TABLE IF EXISTS `subscriber`;
CREATE TABLE `subscriber` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of subscriber
-- ----------------------------
BEGIN;
INSERT INTO `subscriber` VALUES (4, 'measmengtry191@gmail.com', '2020-09-05 09:09:14');
INSERT INTO `subscriber` VALUES (5, 'bunchhay@eocambo.com', '2020-09-05 09:09:51');
INSERT INTO `subscriber` VALUES (8, 'maranet@eocambo.com', '2020-09-12 08:09:29');
INSERT INTO `subscriber` VALUES (11, 'measmengtry191@gmail.com', '2020-09-14 11:09:52');
INSERT INTO `subscriber` VALUES (12, 'measmengtry19ss1@gmail.com', '2020-09-14 11:09:54');
INSERT INTO `subscriber` VALUES (13, 'measmengtry19ssss1@gmail.com', '2020-09-14 11:09:55');
COMMIT;

-- ----------------------------
-- Table structure for testimonial
-- ----------------------------
DROP TABLE IF EXISTS `testimonial`;
CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `feature_image` varchar(255) DEFAULT NULL,
  `position` varchar(250) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of testimonial
-- ----------------------------
BEGIN;
INSERT INTO `testimonial` VALUES (1, 'Goal Shotman', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus tenetur, odit iure repudiandae sint eius, sed adipisci placeat a quam nobis nostrum accusantium aliquam rerum officiis fuga temporibus itaque. Accusamus!', '/uploads/testimonial/testimonials-1_20200826051249.jpg', 'CEO & Founder', NULL, 1, 4, NULL, '2020-08-26 05:12:49');
INSERT INTO `testimonial` VALUES (2, 'Matt Brandon', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus tenetur, odit iure repudiandae sint eius, sed adipisci placeat a quam nobis nostrum accusantium aliquam rerum officiis fuga temporibus itaque. Accusamus!', '/uploads/testimonial/testimonials-4_20200826051552.jpg', 'Frelancer', NULL, 1, 4, NULL, '2020-08-26 05:15:52');
INSERT INTO `testimonial` VALUES (3, 'Jorn Larson', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus tenetur, odit iure repudiandae sint eius, sed adipisci placeat a quam nobis nostrum accusantium aliquam rerum officiis fuga temporibus itaque. Accusamus!', '/uploads/testimonial/testimonials-5_20200826051621.jpg', 'Intreprenurs', NULL, 1, 4, NULL, '2020-08-26 05:16:21');
COMMIT;

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` smallint(6) DEFAULT 10,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `username` (`username`) USING BTREE,
  UNIQUE KEY `email` (`email`) USING BTREE,
  UNIQUE KEY `password_reset_token` (`password_reset_token`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of user
-- ----------------------------
BEGIN;
INSERT INTO `user` VALUES (4, 'superadmin', 'qCcB8nwcY1zj1e35JXfTwPNg5I7-V3Uy', '$2y$13$X3fdZq9n3FeJzGJ261fv1eg7Wei5lHuFjG/ZdSJGsbKSEulxK/1RG', NULL, 'measmengtry191@gmail.com', 10, 'ryS-q0U57qGxIpWkttPkKkzWgrADd6Lo_1570433592');
INSERT INTO `user` VALUES (5, 'admin', 'msV30zc9XCtr0bsu6YXlNkqXVv18vqA8', '$2y$13$SaoORYc3jLCIzFWEcBToy.bG/wd6UegLCKqESHkLAbGrmCDvnvC8.', NULL, 'dane@eocambo.com', 10, 'O-fnA9yLvMpcAhjRjkFtXh2jfPBIUGIs_1599276726');
COMMIT;

-- ----------------------------
-- Table structure for user_type
-- ----------------------------
DROP TABLE IF EXISTS `user_type`;
CREATE TABLE `user_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` bit(1) DEFAULT NULL,
  `user_type_name` varchar(500) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for why_us
-- ----------------------------
DROP TABLE IF EXISTS `why_us`;
CREATE TABLE `why_us` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `short_description` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `sub_title` varchar(250) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of why_us
-- ----------------------------
BEGIN;
INSERT INTO `why_us` VALUES (2, 'Why Choose Our Restaurant', 'Ulamco laboris nisi ut aliquip ex ea commodo consequat. Et consectetur ducimus vero placeat', 'WHY US', 'Lorem Ipsum', NULL, 1, 4, NULL, '2020-08-25 04:51:19');
INSERT INTO `why_us` VALUES (3, 'WHY US', 'Dolorem est fugiat occaecati voluptate velit esse. Dicta veritatis dolor quod et vel dire leno para dest', 'Why Choose Our Restaurant', 'Repellat Nihil', NULL, 1, 4, NULL, '2020-08-25 04:52:05');
INSERT INTO `why_us` VALUES (4, '', 'Molestiae officiis omnis illo asperiores. Aut doloribus vitae sunt debitis quo vel nam quis', '', 'Ad ad velit qui', NULL, 1, 4, NULL, '2020-08-25 04:52:25');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
