CREATE DATABASE data;
use data;

CREATE TABLE `priceScanner` (
  `DateTime` timestamp NOT NULL DEFAULT current_timestamp(),
  `Price` decimal(10,2) DEFAULT NULL,
  `Volume` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `priceScanner` WRITE;
/*!40000 ALTER TABLE `priceScanner` DISABLE KEYS */;
INSERT INTO `priceScanner` VALUES ('2021-02-23 00:00:00',562.74,4),('2021-02-22 23:00:00',549.14,161),('2021-02-22 22:00:00',543.01,143),('2021-02-22 21:00:00',581.70,159);

UNLOCK TABLES;