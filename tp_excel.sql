/*
Navicat MySQL Data Transfer

Source Server         : ewen_local
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : tp_excel

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2017-03-08 10:19:54
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for think_data
-- ----------------------------
DROP TABLE IF EXISTS `think_data`;
CREATE TABLE `think_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `account` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=121 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_data
-- ----------------------------
INSERT INTO `think_data` VALUES ('97', '应用汇（不再收录）', '15324407712/YYH6773845805', 'msyc@2016');
INSERT INTO `think_data` VALUES ('98', '小米开放平台（未上传）', '15324407712', 'msyc@2016');
INSERT INTO `think_data` VALUES ('99', '腾讯开发平台', '3446371037', 'msyc@2016');
INSERT INTO `think_data` VALUES ('100', '华为', 'android@msyc.com.cn', 'Msyc@2016');
INSERT INTO `think_data` VALUES ('101', '搜狗', 'android@msyc.com.cn', 'msyc@2016');
INSERT INTO `think_data` VALUES ('102', '百度', '13656120413', 'msyc@2016');
INSERT INTO `think_data` VALUES ('103', 'PP助手', 'android@msyc.com.cn', 'msyc@2016');
INSERT INTO `think_data` VALUES ('104', '360', 'android@msyc.com.cn', 'msyc@2016');
INSERT INTO `think_data` VALUES ('105', 'vivo开发者平台', 'android@msyc.com.cn', 'msyc@2016');
INSERT INTO `think_data` VALUES ('106', 'oppo开发者平台', '3446371037@qq.com', 'msyc@2016');
INSERT INTO `think_data` VALUES ('107', '豌豆荚（包含魅族商店）', 'android@msyc.com.cn', 'msyc@2016');
INSERT INTO `think_data` VALUES ('108', '魅族（豌豆荚上传成功即可）', '13656120413', 'msyc@2016');
INSERT INTO `think_data` VALUES ('109', '应用汇（不再收录）', '15324407712/YYH6773845805', 'msyc@2016');
INSERT INTO `think_data` VALUES ('110', '小米开放平台（未上传）', '15324407712', 'msyc@2016');
INSERT INTO `think_data` VALUES ('111', '腾讯开发平台', '3446371037', 'msyc@2016');
INSERT INTO `think_data` VALUES ('112', '华为', 'android@msyc.com.cn', 'Msyc@2016');
INSERT INTO `think_data` VALUES ('113', '搜狗', 'android@msyc.com.cn', 'msyc@2016');
INSERT INTO `think_data` VALUES ('114', '百度', '13656120413', 'msyc@2016');
INSERT INTO `think_data` VALUES ('115', 'PP助手', 'android@msyc.com.cn', 'msyc@2016');
INSERT INTO `think_data` VALUES ('116', '360', 'android@msyc.com.cn', 'msyc@2016');
INSERT INTO `think_data` VALUES ('117', 'vivo开发者平台', 'android@msyc.com.cn', 'msyc@2016');
INSERT INTO `think_data` VALUES ('118', 'oppo开发者平台', '3446371037@qq.com', 'msyc@2016');
INSERT INTO `think_data` VALUES ('119', '豌豆荚（包含魅族商店）', 'android@msyc.com.cn', 'msyc@2016');
INSERT INTO `think_data` VALUES ('120', '魅族（豌豆荚上传成功即可）', '13656120413', 'msyc@2016');
