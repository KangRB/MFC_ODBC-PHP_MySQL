/*
Navicat MySQL Data Transfer

Source Server         : root
Source Server Version : 50528
Source Host           : localhost:3306
Source Database       : studentgrade

Target Server Type    : MYSQL
Target Server Version : 50528
File Encoding         : 65001

Date: 2018-06-25 09:47:41
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `Anum` varchar(6) NOT NULL,
  `Uname` varchar(20) NOT NULL,
  `Pwd` varchar(20) NOT NULL,
  PRIMARY KEY (`Anum`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('01', 'admin', 'admin');

-- ----------------------------
-- Table structure for ccc
-- ----------------------------
DROP TABLE IF EXISTS `ccc`;
CREATE TABLE `ccc` (
  `Stunum` varchar(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Core1` int(3) DEFAULT NULL,
  `Core2` int(3) DEFAULT NULL,
  `Core3` int(3) DEFAULT NULL,
  `Remarks` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`Stunum`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ccc
-- ----------------------------
INSERT INTO `ccc` VALUES ('201577F0601', '张三', '61', '70', '88', '');
INSERT INTO `ccc` VALUES ('201577F0602', '李四', '90', '70', '80', '');
INSERT INTO `ccc` VALUES ('201577F0603', '王五', '90', '90', '90', '');
INSERT INTO `ccc` VALUES ('201577F0605', '哈哈哈', '66', '77', '88', null);
INSERT INTO `ccc` VALUES ('201577F0616', '赵六', '66', '77', '88', null);

-- ----------------------------
-- Table structure for core-state
-- ----------------------------
DROP TABLE IF EXISTS `core-state`;
CREATE TABLE `core-state` (
  `Clnum-cnum` varchar(15) NOT NULL,
  `State` int(1) NOT NULL,
  PRIMARY KEY (`Clnum-cnum`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of core-state
-- ----------------------------

-- ----------------------------
-- Table structure for course
-- ----------------------------
DROP TABLE IF EXISTS `course`;
CREATE TABLE `course` (
  `Cnum` varchar(6) NOT NULL,
  `Cname` varchar(20) NOT NULL,
  PRIMARY KEY (`Cnum`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of course
-- ----------------------------
INSERT INTO `course` VALUES ('01', 'JAVA');
INSERT INTO `course` VALUES ('02', 'PHP');
INSERT INTO `course` VALUES ('03', 'C#');
INSERT INTO `course` VALUES ('04', '软件工程导论');
INSERT INTO `course` VALUES ('05', 'QTP');
INSERT INTO `course` VALUES ('06', 'C++');

-- ----------------------------
-- Table structure for major
-- ----------------------------
DROP TABLE IF EXISTS `major`;
CREATE TABLE `major` (
  `Mnum` varchar(3) NOT NULL,
  `Mname` varchar(20) NOT NULL,
  PRIMARY KEY (`Mnum`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of major
-- ----------------------------
INSERT INTO `major` VALUES ('01', '软件开发与测试');
INSERT INTO `major` VALUES ('02', '传媒');
INSERT INTO `major` VALUES ('03', '网络工程');
INSERT INTO `major` VALUES ('04', '计算机科学');

-- ----------------------------
-- Table structure for student
-- ----------------------------
DROP TABLE IF EXISTS `student`;
CREATE TABLE `student` (
  `Stunum` varchar(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Pwd` varchar(6) NOT NULL,
  `Remarks` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`Stunum`),
  KEY `Name` (`Name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of student
-- ----------------------------
INSERT INTO `student` VALUES ('201577F0601', '张三', '1111', null);
INSERT INTO `student` VALUES ('201577F0602', '李四', '111', null);
INSERT INTO `student` VALUES ('201577F0603', '王五', '111', null);
INSERT INTO `student` VALUES ('201577F0604', 'AA1', '111', null);
INSERT INTO `student` VALUES ('201577F0605', '哈哈哈', '111', null);
INSERT INTO `student` VALUES ('201577F0616', '赵六', '111', null);

-- ----------------------------
-- Table structure for tcc
-- ----------------------------
DROP TABLE IF EXISTS `tcc`;
CREATE TABLE `tcc` (
  `Tnum` varchar(6) NOT NULL,
  `Cnum` varchar(6) NOT NULL,
  `Mnum` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tcc
-- ----------------------------
INSERT INTO `tcc` VALUES ('01', '03', '01');
INSERT INTO `tcc` VALUES ('01', '01', '03');
INSERT INTO `tcc` VALUES ('03', '03', '03');
INSERT INTO `tcc` VALUES ('02', '04', '03');

-- ----------------------------
-- Table structure for teacher
-- ----------------------------
DROP TABLE IF EXISTS `teacher`;
CREATE TABLE `teacher` (
  `Tnum` varchar(6) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Pwd` varchar(20) NOT NULL,
  `Remarks` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`Tnum`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of teacher
-- ----------------------------
INSERT INTO `teacher` VALUES ('01', '张老师', '111', null);
INSERT INTO `teacher` VALUES ('02', '王老师', '111', null);
INSERT INTO `teacher` VALUES ('03', '李老师', '111', null);
INSERT INTO `teacher` VALUES ('04', '赵老师', '22211', null);
SET FOREIGN_KEY_CHECKS=1;
