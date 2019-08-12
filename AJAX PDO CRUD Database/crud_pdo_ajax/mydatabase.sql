/*
Navicat MySQL Data Transfer

Source Server         : anaconda
Source Server Version : 50717
Source Host           : localhost:3306
Source Database       : mydatabase

Target Server Type    : MYSQL
Target Server Version : 50717
File Encoding         : 65001

Date: 2019-07-29 10:33:22
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for members
-- ----------------------------
DROP TABLE IF EXISTS `members`;
CREATE TABLE `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `address` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of members
-- ----------------------------
INSERT INTO `members` VALUES ('1', 'Pedro', 'Fernandez Mora', 'Jaume Brossa i Roger');
INSERT INTO `members` VALUES ('2', 'Janetsy del Valle', 'Briceno de Fernandez', 'Jaume Brossa i Roger');
INSERT INTO `members` VALUES ('3', 'Pedro Jose', 'Fernandez Briceno', 'Jaume Brossa i Roger');
INSERT INTO `members` VALUES ('4', 'Maria Victoria', 'Fernandez Briceno', 'Jaume Brossa i Roger');
INSERT INTO `members` VALUES ('5', 'Kira del Valle', 'Fernandez Briceno', 'Jaume Brossa i Roger');
SET FOREIGN_KEY_CHECKS=1;
