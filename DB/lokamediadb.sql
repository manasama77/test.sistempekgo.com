/*
 Navicat Premium Data Transfer

 Source Server         : Mysql Local
 Source Server Type    : MySQL
 Source Server Version : 50724
 Source Host           : localhost:3306
 Source Schema         : lokamediadb

 Target Server Type    : MySQL
 Target Server Version : 50724
 File Encoding         : 65001

 Date: 10/08/2020 23:24:13
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for about_us
-- ----------------------------
DROP TABLE IF EXISTS `about_us`;
CREATE TABLE `about_us`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `content` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `photo` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of about_us
-- ----------------------------
INSERT INTO `about_us` VALUES (1, 'About Us', '<b>LOKAMEDIA SOLUTION</b> Berdiri pada tanggal <b>12 februari 2020</b> berlatar belakang dalam situasi pandemi virus corona (COVID 19), dalam situasi sulit ini kami mencoba membantu dalam hal teknologi dengan memberikan layanan konsultasi komunikasi ditengah pandemi virus (COVID 19) dan juga berionvasi dengan teknologi mulai dari:<div><ul><li>Sistem Informasi E-LAB<br /></li><li>E-NOTARIS<br /></li><li>E-POS<br /></li><li>E-COREBANK<br /></li></ul><br />LOKAMEDIA SOLUTION berdiri diatas PT. GUSTHIA SUKSES BERSAMA yang terdaftar di KEMENKUMHAM dengan nomor <b>1111111/1111/11/11</b>, <b>Hasbi Nurhaqi</b> selaku Founder LOKAMEDIA SOLUTION &amp; Direktur dari PT. GUSTHIA SUKSES BERSAMA berkomitmen untuk memberikan layanan transformasi digital dengan mudah dan berkualitas sesuai dengan tagline kami<br /><br /></div><h2><blockquote><b>\"Your Easy Way For Digital Solutions\"</b></blockquote></h2><div>Dengan tim kami yang solid dan sudah sangat berpengalaman dalam industri teknologi informasi, kami yakin akan dapat membantu transformasi digital usaha anda.<br /></div>', 'founder.png');

-- ----------------------------
-- Table structure for admins
-- ----------------------------
DROP TABLE IF EXISTS `admins`;
CREATE TABLE `admins`  (
  `id` int(191) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  `deleted_at` datetime(0) NULL DEFAULT NULL,
  `cookies` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `remember` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of admins
-- ----------------------------
INSERT INTO `admins` VALUES (1, 'admin', 'cbdc305ee6759b648df01b740e8bedf304291a26', '2020-07-17 17:41:11', '2020-07-17 17:41:11', NULL, 'kUlRIDEZ9DXihywKILm1z7JYSaMPqGdcCf5N4GkWmW06QznuvoJejThpRTHqrLc3', '1');
INSERT INTO `admins` VALUES (2, 'adam', '074e3a060b67266a0641c26876fd7ac1305de1b9', '2020-07-19 08:36:51', '2020-07-19 08:36:51', NULL, NULL, '0');

-- ----------------------------
-- Table structure for applications
-- ----------------------------
DROP TABLE IF EXISTS `applications`;
CREATE TABLE `applications`  (
  `app_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NOT NULL,
  `company_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NOT NULL,
  `company_address` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NULL DEFAULT NULL,
  `date_est` date NULL DEFAULT NULL,
  `company_phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NULL DEFAULT NULL,
  `company_email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NULL DEFAULT NULL,
  `logo` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`app_name`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of applications
-- ----------------------------
INSERT INTO `applications` VALUES ('Inventori APP', 'Departemen Agama', 'test', '2020-02-03', '0123', 'depag@gmail.com', '536e72d9290c995e4c8ffb9bc988b3f6.png');

-- ----------------------------
-- Table structure for carousel
-- ----------------------------
DROP TABLE IF EXISTS `carousel`;
CREATE TABLE `carousel`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `sequence` int(2) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of carousel
-- ----------------------------
INSERT INTO `carousel` VALUES (1, 'default.png', 1);
INSERT INTO `carousel` VALUES (2, 'default.png', 3);
INSERT INTO `carousel` VALUES (3, 'default.png', 2);

-- ----------------------------
-- Table structure for contact
-- ----------------------------
DROP TABLE IF EXISTS `contact`;
CREATE TABLE `contact`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `alamat_formal` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `alamat_operasional` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of contact
-- ----------------------------
INSERT INTO `contact` VALUES (1, '<h5>PT. GUSTHIA SUKSES BERSAMA</h5>\r\n<h5>Jln. Raya Tajur No.162G, Kec. Bogor Selatan, Kota Bogor, 16720, Jawa Barat.</h5>\r\n<h5>No.Ponsel : 081316628806</h5>\r\n<h5>Email : hasbinurhaqy@gmail.com</h5>', '<h5>LOKAMEDIA SOLUTION</h5>\r\n<h5>Ruko Perumahan Acropolis BLOK LB NO. 8B, Karadenan, Cibinong, Kab.Bogor, 16913, Jawa Barat.</h5>\r\n<h5>No.Ponsel : 081316628806</h5>\r\n<h5>Email : hasbinurhaqy@gmail.com</h5>');

-- ----------------------------
-- Table structure for our_services
-- ----------------------------
DROP TABLE IF EXISTS `our_services`;
CREATE TABLE `our_services`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of our_services
-- ----------------------------
INSERT INTO `our_services` VALUES (1, 'Our Services');

-- ----------------------------
-- Table structure for our_services_sub
-- ----------------------------
DROP TABLE IF EXISTS `our_services_sub`;
CREATE TABLE `our_services_sub`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_our_services` int(11) NULL DEFAULT NULL,
  `title` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `detail` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `picture` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of our_services_sub
-- ----------------------------
INSERT INTO `our_services_sub` VALUES (1, 1, 'DESKTOP DEVELOPMENT', 'LOKAMEDIA SOLUTION menyediakan jasa pembuatan aplikasi desktop, dengan teknologi yang kami gunakan memungkinkan aplikasi desktop anda berjalan di 3 platform besar WINDOWS, LINUX & MACOS.', 'DESKTOP_DEVELOPMENT.png');
INSERT INTO `our_services_sub` VALUES (2, 1, 'WEB DEVELOPMENT', 'LOKAMEDIA SOLUTION menyediakan jasa pembuatan berbagai macam jenis web mulai dari web design & website, web apps, web application dan yang lainya sesuai kebutuhan anda.', 'WEB_DEVELOPMENT.png');
INSERT INTO `our_services_sub` VALUES (3, 1, 'MOBILE DEVELOPMENT', 'LOKAMEDIA SOLUTION menyediakan jasa pembuatan aplikasi mobile berbasis native ataupun hybrid dan akan kami sesuaikan dengan kebutuhan anda.', 'MOBILE_DEVELOPMENT.png');
INSERT INTO `our_services_sub` VALUES (4, 1, 'UI/UX', 'LOKAMEDIA SOLUTION menyediakan jasa pembuatan desain grafis untuk banner, aplikasi mobile, web, poster campaign dan berbagai macam desain grafis lainya.', 'UIUX.png');
INSERT INTO `our_services_sub` VALUES (5, 1, 'DIGITAL MARKETING', 'LOKAMEDIA SOLUTION menyediakan jasa pemasaran secara digital dengan produk ini anda dapat meningkatkan market anda secara luas dengan skala global.', 'DIGITAL_MARKETING.png');
INSERT INTO `our_services_sub` VALUES (6, 1, 'MUTLIMEDIA DEVELOPMENT', 'LOKAMEDIA SOLUTION menyediakan jasa multimedia mulai dari VIDEO/AUDO recording & editing, ANIMASI 2D & VIDEO Company Profile.', 'MUTLIMEDIA_DEVELOPMENT.png');

-- ----------------------------
-- Table structure for why_us
-- ----------------------------
DROP TABLE IF EXISTS `why_us`;
CREATE TABLE `why_us`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `content` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `photo` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of why_us
-- ----------------------------
INSERT INTO `why_us` VALUES (1, 'Why Us', '<ol><li>Tim LOKAMEDIA SOLUTION terdiri dari profesional yang pernah bekerja di perusahaan besar yang sudah berpengalaman dalam industri teknologi informasi.</li><li>Dalam hal teknologi LOKAMEDIA SOLUTION akan menyesuaikan dengan kebutuhan dan keinginan anda tentu dengan teknologi terupdate saat ini.</li><li>LOKAMEDIA SOLUTION menawarkan metode development dengan tepat, efesien, &amp; terukur untuk menghasilkan produk yang berkualitas.</li></ol>', 'default.png');

SET FOREIGN_KEY_CHECKS = 1;
