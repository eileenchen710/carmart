SET FOREIGN_KEY_CHECKS=0;

DROP TABLE IF EXISTS `wst_ads`;
CREATE TABLE `wst_ads` (
  `adId` int(11) NOT NULL AUTO_INCREMENT,
  `adPositionId` int(11) NOT NULL DEFAULT '0',
  `adFile` varchar(150) NOT NULL,
  `adName` varchar(100) NOT NULL,
  `adURL` varchar(150) NOT NULL,
  `adStartDate` date NOT NULL,
  `adEndDate` date NOT NULL,
  `adSort` int(11) NOT NULL DEFAULT '0',
  `adClickNum` int(11) NOT NULL DEFAULT '0',
  `positionType` tinyint(4) DEFAULT '0',
  `dataFlag` tinyint(4) NOT NULL DEFAULT '1',
  `createTime` datetime NOT NULL,
  PRIMARY KEY (`adId`),
  KEY `adPositionId` (`adPositionId`,`adStartDate`,`adEndDate`),
  KEY `adPositionId_2` (`adPositionId`)
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wst_ads
-- ----------------------------
INSERT INTO `wst_ads` VALUES ('15', '4', 'upload/adspic/2016-09/57eb93c940b03.jpg', '1F头部广告', '', '2016-09-09', '2017-09-30', '0', '0', '1', '-1', '2016-09-09 18:50:42'),
('16', '5', 'upload/adspic/2016-10/57f7281b79168.jpg', '1F左侧广告', '', '2016-09-09', '2017-09-30', '110', '0', '1', '1', '2016-09-09 18:51:30'),
('17', '6', 'upload/adspic/2016-09/57d29454d96d3.jpg', '1F右侧广告', '', '2016-09-09', '2017-09-30', '0', '0', '1', '-1', '2016-09-09 18:52:12'),
('18', '34', 'upload/adspic/2016-09/57d294c289e74.jpg', '首页广告1', '', '2016-09-09', '2017-09-30', '0', '0', '1', '-1', '2016-09-09 18:54:09'),
('19', '7', 'upload/adspic/2016-10/57f9c17be159b.gif', '2F头部广告', '', '2016-09-09', '2017-09-30', '200', '0', '1', '1', '2016-09-09 19:10:07'),
('20', '10', 'upload/adspic/2016-10/57f8bca4c8c3c.jpg', '3F头部广告', '', '2016-09-09', '2017-09-30', '0', '0', '1', '-1', '2016-09-09 19:10:41'),
('21', '8', 'upload/adspic/2016-10/57fa14787ab52.jpg', '2F左侧广告', '', '2016-09-09', '2017-09-30', '210', '0', '1', '1', '2016-09-09 19:11:51'),
('22', '11', 'upload/adspic/2016-10/57f9e4155fa99.jpg', '3F左侧广告', '', '2016-09-09', '2017-09-30', '310', '0', '1', '1', '2016-09-09 19:12:29'),
('23', '9', 'upload/adspic/2016-10/57f9cf1a694b8.jpg', '2F右侧广告1', '', '2016-09-09', '2017-09-30', '223', '0', '1', '1', '2016-09-09 19:12:59'),
('24', '12', 'upload/adspic/2016-10/57f8bdbcc9a3c.jpg', '3F右侧广告', '', '2016-09-09', '2017-09-30', '0', '0', '1', '-1', '2016-09-09 19:13:30'),
('25', '12', 'upload/adspic/2016-09/57eb95191deb7.jpg', '3242', '', '2016-09-28', '2016-09-30', '0', '0', '1', '-1', '2016-09-28 18:02:09'),
('26', '13', 'upload/adspic/2016-09/57ecbce01e6ad.jpg', '4楼横幅广告', '', '2016-09-29', '2020-09-11', '0', '0', '1', '-1', '2016-09-29 15:04:31'),
('27', '13', 'upload/adspic/2016-09/57ecbd8fd658c.jpg', '4楼横幅广告', '', '2016-09-14', '2020-09-11', '0', '0', '1', '-1', '2016-09-29 15:07:07'),
('28', '34', 'upload/adspic/2016-10/57f88f34d4550.jpg,upload/adspic/2016-10/57f88f34b5d07.jpg,upload/adspic/2016-10/57f88f3502862.jpg,upload/adspic/2016-10/57f88f35', '首页轮播广告', '', '2016-09-29', '2020-10-01', '0', '0', '1', '-1', '2016-09-29 19:49:11'),
('29', '34', 'upload/adspic/2016-09/57ed003634bef.jpg', '22', '', '2016-09-29', '2020-09-18', '0', '0', '1', '-1', '2016-09-29 19:51:28'),
('30', '6', 'upload/adspic/2016-10/57f8bbc7a1ed3.jpg', '1楼右侧广告位', '', '2016-09-30', '2020-09-17', '123', '0', '1', '1', '2016-09-30 15:07:33'),
('31', '6', 'upload/adspic/2016-09/57ee0fcfc5de3.jpg', '1楼右侧2', '', '2016-09-30', '2021-11-05', '0', '0', '1', '-1', '2016-09-30 15:08:34'),
('32', '6', 'upload/adspic/2016-09/57ee100c29a77.jpg', '1楼右侧3', '', '2016-09-30', '2020-09-03', '0', '0', '1', '-1', '2016-09-30 15:11:15'),
('33', '4', 'upload/adspic/2016-10/57f895cae2692.jpg', '1F顶部横幅', '', '2016-09-30', '2020-09-03', '100', '0', '1', '1', '2016-09-30 16:24:27'),
('34', '35', 'upload/adspic/2016-09/57ee2a4cca962.jpg', '首页顶部广告', '', '2013-09-25', '2022-09-09', '1', '0', '1', '1', '2016-09-30 17:03:30'),
('35', '36', 'upload/adspic/2016-10/57f9eb22c2618.jpg', '资讯下边广告', '', '2016-10-08', '2023-10-28', '2', '0', '1', '1', '2016-10-08 14:41:31'),
('36', '34', 'upload/adspic/2016-10/57f8c25cc1e53.jpg', '首页轮播广告1', '', '2016-10-08', '2025-10-10', '11', '0', '1', '1', '2016-10-08 17:54:48'),
('37', '34', 'upload/adspic/2016-10/57f8c2848c9d2.jpg', '首页轮播广告2', '', '2016-10-08', '2023-10-12', '12', '0', '1', '1', '2016-10-08 17:55:31'),
('38', '34', 'upload/adspic/2016-10/57f8c2f22d96c.jpg', '首页轮播广告3', '', '2016-10-08', '2022-10-14', '13', '0', '1', '1', '2016-10-08 17:56:03'),
('39', '34', 'upload/adspic/2016-10/57f8c306ec638.jpg', '首页轮播广告4', '', '2016-10-08', '2022-10-14', '14', '0', '1', '1', '2016-10-08 17:57:42'),
('40', '6', 'upload/adspic/2016-10/57f8c709293b4.jpg', '1F右侧广告2', '', '2016-10-08', '2020-10-16', '122', '0', '1', '1', '2016-10-08 18:14:42'),
('41', '6', 'upload/adspic/2016-10/57f8c9df2e4a8.jpg', '1F右侧广告3', '', '2016-10-08', '2021-10-07', '121', '0', '1', '1', '2016-10-08 18:17:42'),
('42', '9', 'upload/adspic/2016-10/57f9cf3519451.jpg', '2F右侧广告2', '', '2016-10-09', '2021-10-30', '222', '0', '1', '1', '2016-10-09 13:00:35'),
('43', '12', 'upload/adspic/2016-10/57f9e45639d1c.jpg', '3F右侧广告1', '', '2016-10-09', '2020-10-16', '311', '0', '1', '1', '2016-10-09 14:31:59'),
('44', '12', 'upload/adspic/2016-10/57f9e473bba85.jpg', '3F右侧广告2', '', '2016-10-09', '2022-10-13', '312', '0', '1', '1', '2016-10-09 14:32:40'),
('45', '12', 'upload/adspic/2016-10/57f9e49ecb1e3.jpg', '3F右侧广告3', '', '2016-10-09', '2022-10-21', '313', '0', '1', '1', '2016-10-09 14:33:22'),
('46', '12', 'upload/adspic/2016-10/57f9e4c3ed9fd.jpg', '3F右侧广告4', '', '2016-10-09', '2022-10-28', '314', '0', '1', '1', '2016-10-09 14:33:50'),
('47', '9', 'upload/adspic/2016-10/57f9f3910a63f.jpg', '2F右侧广告1', '', '2016-10-09', '2022-10-09', '221', '0', '1', '1', '2016-10-09 15:37:21'),
('48', '10', 'upload/adspic/2016-10/57f9f5376ee48.jpg', '3F横幅广告', '', '2016-10-09', '2026-10-09', '300', '0', '1', '-1', '2016-10-09 15:40:50'),
('49', '14', 'upload/adspic/2016-10/57fa17de69967.jpg', '4F左侧广告', '', '2016-10-09', '2020-10-31', '410', '0', '1', '1', '2016-10-09 18:12:06'),
('50', '18', 'upload/adspic/2016-10/57fa1dd60c0b8.jpg', '5F右侧广告1', '', '2016-10-09', '2021-10-30', '521', '0', '1', '1', '2016-10-09 18:37:33'),
('51', '18', 'upload/adspic/2016-10/57fa1dfed299c.jpg', '5F右侧广告2', '', '2016-10-09', '2022-10-31', '522', '0', '1', '1', '2016-10-09 18:38:15'),
('52', '18', 'upload/adspic/2016-10/57fa1e5ce9ee0.jpg', '5F右侧广告3', '', '2016-10-09', '2023-10-31', '523', '0', '1', '1', '2016-10-09 18:39:43'),
('53', '18', 'upload/adspic/2016-10/57fa1e882f365.jpg', '5F右侧广告4', '', '2016-10-09', '2022-10-28', '524', '0', '1', '1', '2016-10-09 18:41:04'),
('54', '17', 'upload/adspic/2016-10/57fa1f3702416.jpg', '5F左侧广告', '', '2016-10-09', '2025-10-31', '510', '0', '1', '1', '2016-10-09 18:43:27'),
('55', '15', 'upload/adspic/2016-10/57fa2174acca9.jpg', '4F右侧广告1', '', '2016-10-09', '2020-10-09', '420', '0', '1', '1', '2016-10-09 18:52:59'),
('56', '24', 'upload/adspic/2016-10/57fa21c496471.jpg', '7F右侧广告2', '', '2016-10-09', '2026-10-09', '722', '0', '1', '1', '2016-10-09 18:54:28'),
('57', '24', 'upload/adspic/2016-10/57fa21fbd3926.png', '7F右侧广告3', '', '2016-10-09', '2025-10-16', '721', '0', '1', '1', '2016-10-09 18:55:14'),
('58', '20', 'upload/adspic/2016-10/57fb70aad10f3.jpg', '6F左侧广告', '', '2016-10-09', '2027-10-01', '610', '0', '1', '1', '2016-10-09 22:19:28'),
('59', '26', 'upload/adspic/2016-10/57fa527d608c9.jpeg', '8F左侧广告', '', '2016-10-09', '2026-10-31', '810', '0', '1', '1', '2016-10-09 22:22:01'),
('60', '24', 'upload/adspic/2016-10/57fb04e076255.jpg', '7F右侧广告1', '', '2016-10-10', '2024-10-31', '720', '0', '1', '1', '2016-10-10 11:02:58'),
('61', '23', 'upload/adspic/2016-10/57fb06e78dd85.jpg', '7F左侧广告', '', '2016-10-10', '2025-10-31', '710', '0', '1', '1', '2016-10-10 11:11:48'),
('62', '15', 'upload/adspic/2016-10/57fb65a7e20ce.jpg', '4F右侧广告2', '', '2016-10-10', '2025-10-31', '420', '0', '1', '1', '2016-10-10 17:56:13'),
('63', '27', 'upload/adspic/2016-10/57fb6b01a8f8e.jpg', '8F右侧广告1', '', '2016-10-10', '2023-10-31', '821', '0', '1', '1', '2016-10-10 18:18:53'),
('64', '27', 'upload/adspic/2016-10/57fb71524840f.jpg', '8F右侧广告3', '', '2016-10-10', '2025-10-31', '820', '0', '1', '1', '2016-10-10 18:21:50'),
('65', '27', 'upload/adspic/2016-10/57fb6dad94d5a.jpg', '8F右侧广告2', '', '2016-10-10', '2026-10-10', '822', '0', '1', '1', '2016-10-10 18:30:30'),
('66', '15', 'upload/adspic/2016-10/57fb74d98fbdb.jpg', '4F右侧广告3', '', '2016-10-10', '2026-10-10', '423', '0', '1', '1', '2016-10-10 19:00:54'),
('67', '21', 'upload/adspic/2016-10/57fc66d54a25c.jpg', '6F右侧广告1', '', '2016-10-11', '2032-10-01', '620', '0', '1', '1', '2016-10-11 12:13:19'),
('68', '21', 'upload/adspic/2016-10/57fc66f0e2c75.jpg', '6F右侧广告2', '', '2016-10-11', '2028-10-19', '621', '0', '1', '1', '2016-10-11 12:13:55'),
('69', '21', 'upload/adspic/2016-10/57fc671fa9a19.jpg', '6F右侧广告3', '', '2016-10-11', '2026-10-11', '622', '0', '1', '1', '2016-10-11 12:14:29'),
('70', '21', 'upload/adspic/2016-10/57fc67352f983.jpg', '6F右侧广告4', '', '2016-10-11', '2026-10-11', '623', '0', '1', '1', '2016-10-11 12:14:53');
