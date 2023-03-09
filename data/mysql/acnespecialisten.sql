-- Adminer 4.8.1 MySQL 8.0.32 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `ix_result_treatment_procedure`;
CREATE TABLE `ix_result_treatment_procedure` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `result_treatment_id` int unsigned NOT NULL,
  `result_procedure_id` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `result_treatment_id` (`result_treatment_id`),
  KEY `result_procedure_id` (`result_procedure_id`),
  CONSTRAINT `ix_result_treatment_procedure_ibfk_1` FOREIGN KEY (`result_treatment_id`) REFERENCES `result_treatment` (`id`) ON DELETE CASCADE,
  CONSTRAINT `ix_result_treatment_procedure_ibfk_2` FOREIGN KEY (`result_procedure_id`) REFERENCES `result_procedure` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;


DROP TABLE IF EXISTS `result_category`;
CREATE TABLE `result_category` (
  `id` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `title` varchar(128) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `description_1` varchar(1024) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `description_2` varchar(1024) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

INSERT INTO `result_category` (`id`, `title`, `description_1`, `description_2`) VALUES
('acne',	'Acne',	'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type.',	'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type.');

DROP TABLE IF EXISTS `result_customer`;
CREATE TABLE `result_customer` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `image_before_small` varchar(256) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `image_after_small` varchar(256) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `image_before_large` varchar(256) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `image_after_large` varchar(256) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `age` int NOT NULL,
  `gender` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `problem` varchar(128) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `type` varchar(128) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `result_treatment_id` int unsigned NOT NULL,
  `result_category_id` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `result_category_id` (`result_category_id`),
  KEY `result_treatment_id` (`result_treatment_id`),
  CONSTRAINT `result_customer_ibfk_1` FOREIGN KEY (`result_category_id`) REFERENCES `result_category` (`id`) ON DELETE CASCADE,
  CONSTRAINT `result_customer_ibfk_2` FOREIGN KEY (`result_treatment_id`) REFERENCES `result_treatment` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;


DROP TABLE IF EXISTS `result_employee`;
CREATE TABLE `result_employee` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `name` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;


DROP TABLE IF EXISTS `result_procedure`;
CREATE TABLE `result_procedure` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(128) COLLATE utf8mb4_bin NOT NULL,
  `name` varchar(128) COLLATE utf8mb4_bin NOT NULL,
  `count` varchar(128) COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;


DROP TABLE IF EXISTS `result_product`;
CREATE TABLE `result_product` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(256) COLLATE utf8mb4_bin NOT NULL,
  `name` varchar(256) COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;


DROP TABLE IF EXISTS `result_treatment`;
CREATE TABLE `result_treatment` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `duration` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `result_employee_id` int unsigned NOT NULL,
  `result_product_id` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `result_employee_id` (`result_employee_id`),
  KEY `result_product_id` (`result_product_id`),
  CONSTRAINT `result_treatment_ibfk_1` FOREIGN KEY (`result_employee_id`) REFERENCES `result_employee` (`id`) ON DELETE CASCADE,
  CONSTRAINT `result_treatment_ibfk_2` FOREIGN KEY (`result_product_id`) REFERENCES `result_product` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;


DROP TABLE IF EXISTS `result_visit`;
CREATE TABLE `result_visit` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `date` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `images` json NOT NULL,
  `title` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `description` varchar(1024) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `read_more_url` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `read_more_label` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `result_treatment_id` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `result_treatment_id` (`result_treatment_id`),
  CONSTRAINT `result_visit_ibfk_1` FOREIGN KEY (`result_treatment_id`) REFERENCES `result_treatment` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;


-- 2023-03-09 13:04:34