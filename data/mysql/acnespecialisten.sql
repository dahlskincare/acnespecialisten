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

INSERT INTO `ix_result_treatment_procedure` (`id`, `result_treatment_id`, `result_procedure_id`) VALUES
(1,	1,	1),
(2,	1,	2);

DROP TABLE IF EXISTS `result_category`;
CREATE TABLE `result_category` (
  `id` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `title` varchar(128) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `description_1` varchar(1024) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `description_2` varchar(1024) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

INSERT INTO `result_category` (`id`, `title`, `description_1`, `description_2`) VALUES
('acne',	'Acne',	'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type.',	'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type.'),
('acne-scars',	'Acne scars',	'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type.',	'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type.'),
('comedones',	'Comedones',	'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type.',	'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type.'),
('large-pores',	'Large pores',	'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type.',	'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type.'),
('mature-skin',	'Mature skin',	'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type.',	'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type.'),
('milier',	'Milier',	'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type.',	'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type.'),
('perioral-dermatitis',	'Perioral dermatitis',	'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type.',	'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type.'),
('pigmentation',	'Pigmentation',	'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type.',	'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type.'),
('rosacea',	'Rosacea',	'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type.',	'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type.'),
('seborrhea',	'Seborrhea',	'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type.',	'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type.');

DROP TABLE IF EXISTS `result_customer`;
CREATE TABLE `result_customer` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `slider_image_before_small` varchar(256) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `slider_image_after_small` varchar(256) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `slider_image_before_large` varchar(256) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `slider_image_after_large` varchar(256) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `age` int NOT NULL,
  `gender` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `problem` varchar(128) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `type` varchar(128) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `result_treatment_id` int unsigned NOT NULL,
  `result_category_id` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `before_images` json NOT NULL,
  `after_images` json NOT NULL,
  PRIMARY KEY (`id`),
  KEY `result_category_id` (`result_category_id`),
  KEY `result_treatment_id` (`result_treatment_id`),
  CONSTRAINT `result_customer_ibfk_1` FOREIGN KEY (`result_category_id`) REFERENCES `result_category` (`id`) ON DELETE CASCADE,
  CONSTRAINT `result_customer_ibfk_2` FOREIGN KEY (`result_treatment_id`) REFERENCES `result_treatment` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

INSERT INTO `result_customer` (`id`, `slider_image_before_small`, `slider_image_after_small`, `slider_image_before_large`, `slider_image_after_large`, `age`, `gender`, `problem`, `type`, `result_treatment_id`, `result_category_id`, `before_images`, `after_images`) VALUES
(2,	'https://via.placeholder.com/178x238.webm',	'https://via.placeholder.com/178x238.webm',	'https://via.placeholder.com/372x496.webm',	'https://via.placeholder.com/372x496.webm',	1,	'Female',	'Acne',	'Severe',	1,	'acne',	'{\"image_left_large\": \"https://via.placeholder.com/320x426.webm\", \"image_left_small\": \"https://via.placeholder.com/175x235.webm\", \"image_right_large\": \"https://via.placeholder.com/320x426.webm\", \"image_right_small\": \"https://via.placeholder.com/175x235.webm\"}',	'{\"image_left_large\": \"https://via.placeholder.com/320x426.webm\", \"image_left_small\": \"https://via.placeholder.com/175x235.webm\", \"image_right_large\": \"https://via.placeholder.com/320x426.webm\", \"image_right_small\": \"https://via.placeholder.com/175x235.webm\"}'),
(4,	'https://via.placeholder.com/178x238.webm',	'https://via.placeholder.com/178x238.webm',	'https://via.placeholder.com/372x496.webm',	'https://via.placeholder.com/372x496.webm',	2,	'Female',	'Acne',	'Severe',	1,	'acne',	'{\"image_left_large\": \"https://via.placeholder.com/320x426.webm\", \"image_left_small\": \"https://via.placeholder.com/175x235.webm\", \"image_right_large\": \"https://via.placeholder.com/320x426.webm\", \"image_right_small\": \"https://via.placeholder.com/175x235.webm\"}',	'{\"image_left_large\": \"https://via.placeholder.com/320x426.webm\", \"image_left_small\": \"https://via.placeholder.com/175x235.webm\", \"image_right_large\": \"https://via.placeholder.com/320x426.webm\", \"image_right_small\": \"https://via.placeholder.com/175x235.webm\"}'),
(5,	'https://via.placeholder.com/178x238.webm',	'https://via.placeholder.com/178x238.webm',	'https://via.placeholder.com/372x496.webm',	'https://via.placeholder.com/372x496.webm',	3,	'Female',	'Acne',	'Severe',	1,	'acne',	'{\"image_left_large\": \"https://via.placeholder.com/320x426.webm\", \"image_left_small\": \"https://via.placeholder.com/175x235.webm\", \"image_right_large\": \"https://via.placeholder.com/320x426.webm\", \"image_right_small\": \"https://via.placeholder.com/175x235.webm\"}',	'{\"image_left_large\": \"https://via.placeholder.com/320x426.webm\", \"image_left_small\": \"https://via.placeholder.com/175x235.webm\", \"image_right_large\": \"https://via.placeholder.com/320x426.webm\", \"image_right_small\": \"https://via.placeholder.com/175x235.webm\"}'),
(6,	'https://via.placeholder.com/178x238.webm',	'https://via.placeholder.com/178x238.webm',	'https://via.placeholder.com/372x496.webm',	'https://via.placeholder.com/372x496.webm',	4,	'Female',	'Acne',	'Severe',	1,	'acne',	'{\"image_left_large\": \"https://via.placeholder.com/320x426.webm\", \"image_left_small\": \"https://via.placeholder.com/175x235.webm\", \"image_right_large\": \"https://via.placeholder.com/320x426.webm\", \"image_right_small\": \"https://via.placeholder.com/175x235.webm\"}',	'{\"image_left_large\": \"https://via.placeholder.com/320x426.webm\", \"image_left_small\": \"https://via.placeholder.com/175x235.webm\", \"image_right_large\": \"https://via.placeholder.com/320x426.webm\", \"image_right_small\": \"https://via.placeholder.com/175x235.webm\"}'),
(8,	'https://via.placeholder.com/178x238.webm',	'https://via.placeholder.com/178x238.webm',	'https://via.placeholder.com/372x496.webm',	'https://via.placeholder.com/372x496.webm',	5,	'Female',	'Acne',	'Severe',	1,	'acne',	'{\"image_left_large\": \"https://via.placeholder.com/320x426.webm\", \"image_left_small\": \"https://via.placeholder.com/175x235.webm\", \"image_right_large\": \"https://via.placeholder.com/320x426.webm\", \"image_right_small\": \"https://via.placeholder.com/175x235.webm\"}',	'{\"image_left_large\": \"https://via.placeholder.com/320x426.webm\", \"image_left_small\": \"https://via.placeholder.com/175x235.webm\", \"image_right_large\": \"https://via.placeholder.com/320x426.webm\", \"image_right_small\": \"https://via.placeholder.com/175x235.webm\"}'),
(9,	'https://via.placeholder.com/178x238.webm',	'https://via.placeholder.com/178x238.webm',	'https://via.placeholder.com/372x496.webm',	'https://via.placeholder.com/372x496.webm',	6,	'Female',	'Acne',	'Severe',	1,	'acne',	'{\"image_left_large\": \"https://via.placeholder.com/320x426.webm\", \"image_left_small\": \"https://via.placeholder.com/175x235.webm\", \"image_right_large\": \"https://via.placeholder.com/320x426.webm\", \"image_right_small\": \"https://via.placeholder.com/175x235.webm\"}',	'{\"image_left_large\": \"https://via.placeholder.com/320x426.webm\", \"image_left_small\": \"https://via.placeholder.com/175x235.webm\", \"image_right_large\": \"https://via.placeholder.com/320x426.webm\", \"image_right_small\": \"https://via.placeholder.com/175x235.webm\"}'),
(10,	'https://via.placeholder.com/178x238.webm',	'https://via.placeholder.com/178x238.webm',	'https://via.placeholder.com/372x496.webm',	'https://via.placeholder.com/372x496.webm',	7,	'Female',	'Acne',	'Severe',	1,	'acne',	'{\"image_left_large\": \"https://via.placeholder.com/320x426.webm\", \"image_left_small\": \"https://via.placeholder.com/175x235.webm\", \"image_right_large\": \"https://via.placeholder.com/320x426.webm\", \"image_right_small\": \"https://via.placeholder.com/175x235.webm\"}',	'{\"image_left_large\": \"https://via.placeholder.com/320x426.webm\", \"image_left_small\": \"https://via.placeholder.com/175x235.webm\", \"image_right_large\": \"https://via.placeholder.com/320x426.webm\", \"image_right_small\": \"https://via.placeholder.com/175x235.webm\"}'),
(11,	'https://via.placeholder.com/178x238.webm',	'https://via.placeholder.com/178x238.webm',	'https://via.placeholder.com/372x496.webm',	'https://via.placeholder.com/372x496.webm',	8,	'Female',	'Acne',	'Severe',	1,	'acne',	'{\"image_left_large\": \"https://via.placeholder.com/320x426.webm\", \"image_left_small\": \"https://via.placeholder.com/175x235.webm\", \"image_right_large\": \"https://via.placeholder.com/320x426.webm\", \"image_right_small\": \"https://via.placeholder.com/175x235.webm\"}',	'{\"image_left_large\": \"https://via.placeholder.com/320x426.webm\", \"image_left_small\": \"https://via.placeholder.com/175x235.webm\", \"image_right_large\": \"https://via.placeholder.com/320x426.webm\", \"image_right_small\": \"https://via.placeholder.com/175x235.webm\"}'),
(15,	'https://via.placeholder.com/178x238.webm',	'https://via.placeholder.com/178x238.webm',	'https://via.placeholder.com/372x496.webm',	'https://via.placeholder.com/372x496.webm',	9,	'Female',	'Acne',	'Severe',	1,	'acne',	'{\"image_left_large\": \"https://via.placeholder.com/320x426.webm\", \"image_left_small\": \"https://via.placeholder.com/175x235.webm\", \"image_right_large\": \"https://via.placeholder.com/320x426.webm\", \"image_right_small\": \"https://via.placeholder.com/175x235.webm\"}',	'{\"image_left_large\": \"https://via.placeholder.com/320x426.webm\", \"image_left_small\": \"https://via.placeholder.com/175x235.webm\", \"image_right_large\": \"https://via.placeholder.com/320x426.webm\", \"image_right_small\": \"https://via.placeholder.com/175x235.webm\"}'),
(16,	'https://via.placeholder.com/178x238.webm',	'https://via.placeholder.com/178x238.webm',	'https://via.placeholder.com/372x496.webm',	'https://via.placeholder.com/372x496.webm',	10,	'Female',	'Acne',	'Severe',	1,	'acne',	'{\"image_left_large\": \"https://via.placeholder.com/320x426.webm\", \"image_left_small\": \"https://via.placeholder.com/175x235.webm\", \"image_right_large\": \"https://via.placeholder.com/320x426.webm\", \"image_right_small\": \"https://via.placeholder.com/175x235.webm\"}',	'{\"image_left_large\": \"https://via.placeholder.com/320x426.webm\", \"image_left_small\": \"https://via.placeholder.com/175x235.webm\", \"image_right_large\": \"https://via.placeholder.com/320x426.webm\", \"image_right_small\": \"https://via.placeholder.com/175x235.webm\"}'),
(17,	'https://via.placeholder.com/178x238.webm',	'https://via.placeholder.com/178x238.webm',	'https://via.placeholder.com/372x496.webm',	'https://via.placeholder.com/372x496.webm',	11,	'Female',	'Acne',	'Severe',	1,	'acne',	'{\"image_left_large\": \"https://via.placeholder.com/320x426.webm\", \"image_left_small\": \"https://via.placeholder.com/175x235.webm\", \"image_right_large\": \"https://via.placeholder.com/320x426.webm\", \"image_right_small\": \"https://via.placeholder.com/175x235.webm\"}',	'{\"image_left_large\": \"https://via.placeholder.com/320x426.webm\", \"image_left_small\": \"https://via.placeholder.com/175x235.webm\", \"image_right_large\": \"https://via.placeholder.com/320x426.webm\", \"image_right_small\": \"https://via.placeholder.com/175x235.webm\"}'),
(18,	'https://via.placeholder.com/178x238.webm',	'https://via.placeholder.com/178x238.webm',	'https://via.placeholder.com/372x496.webm',	'https://via.placeholder.com/372x496.webm',	12,	'Female',	'Acne',	'Severe',	1,	'acne',	'{\"image_left_large\": \"https://via.placeholder.com/320x426.webm\", \"image_left_small\": \"https://via.placeholder.com/175x235.webm\", \"image_right_large\": \"https://via.placeholder.com/320x426.webm\", \"image_right_small\": \"https://via.placeholder.com/175x235.webm\"}',	'{\"image_left_large\": \"https://via.placeholder.com/320x426.webm\", \"image_left_small\": \"https://via.placeholder.com/175x235.webm\", \"image_right_large\": \"https://via.placeholder.com/320x426.webm\", \"image_right_small\": \"https://via.placeholder.com/175x235.webm\"}'),
(19,	'https://via.placeholder.com/178x238.webm',	'https://via.placeholder.com/178x238.webm',	'https://via.placeholder.com/372x496.webm',	'https://via.placeholder.com/372x496.webm',	13,	'Female',	'Acne',	'Severe',	1,	'acne',	'{\"image_left_large\": \"https://via.placeholder.com/320x426.webm\", \"image_left_small\": \"https://via.placeholder.com/175x235.webm\", \"image_right_large\": \"https://via.placeholder.com/320x426.webm\", \"image_right_small\": \"https://via.placeholder.com/175x235.webm\"}',	'{\"image_left_large\": \"https://via.placeholder.com/320x426.webm\", \"image_left_small\": \"https://via.placeholder.com/175x235.webm\", \"image_right_large\": \"https://via.placeholder.com/320x426.webm\", \"image_right_small\": \"https://via.placeholder.com/175x235.webm\"}'),
(20,	'https://via.placeholder.com/178x238.webm',	'https://via.placeholder.com/178x238.webm',	'https://via.placeholder.com/372x496.webm',	'https://via.placeholder.com/372x496.webm',	14,	'Female',	'Acne',	'Severe',	1,	'acne',	'{\"image_left_large\": \"https://via.placeholder.com/320x426.webm\", \"image_left_small\": \"https://via.placeholder.com/175x235.webm\", \"image_right_large\": \"https://via.placeholder.com/320x426.webm\", \"image_right_small\": \"https://via.placeholder.com/175x235.webm\"}',	'{\"image_left_large\": \"https://via.placeholder.com/320x426.webm\", \"image_left_small\": \"https://via.placeholder.com/175x235.webm\", \"image_right_large\": \"https://via.placeholder.com/320x426.webm\", \"image_right_small\": \"https://via.placeholder.com/175x235.webm\"}'),
(21,	'https://via.placeholder.com/178x238.webm',	'https://via.placeholder.com/178x238.webm',	'https://via.placeholder.com/372x496.webm',	'https://via.placeholder.com/372x496.webm',	15,	'Female',	'Acne',	'Severe',	1,	'acne',	'{\"image_left_large\": \"https://via.placeholder.com/320x426.webm\", \"image_left_small\": \"https://via.placeholder.com/175x235.webm\", \"image_right_large\": \"https://via.placeholder.com/320x426.webm\", \"image_right_small\": \"https://via.placeholder.com/175x235.webm\"}',	'{\"image_left_large\": \"https://via.placeholder.com/320x426.webm\", \"image_left_small\": \"https://via.placeholder.com/175x235.webm\", \"image_right_large\": \"https://via.placeholder.com/320x426.webm\", \"image_right_small\": \"https://via.placeholder.com/175x235.webm\"}'),
(22,	'https://via.placeholder.com/178x238.webm',	'https://via.placeholder.com/178x238.webm',	'https://via.placeholder.com/372x496.webm',	'https://via.placeholder.com/372x496.webm',	16,	'Female',	'Acne',	'Severe',	1,	'acne',	'{\"image_left_large\": \"https://via.placeholder.com/320x426.webm\", \"image_left_small\": \"https://via.placeholder.com/175x235.webm\", \"image_right_large\": \"https://via.placeholder.com/320x426.webm\", \"image_right_small\": \"https://via.placeholder.com/175x235.webm\"}',	'{\"image_left_large\": \"https://via.placeholder.com/320x426.webm\", \"image_left_small\": \"https://via.placeholder.com/175x235.webm\", \"image_right_large\": \"https://via.placeholder.com/320x426.webm\", \"image_right_small\": \"https://via.placeholder.com/175x235.webm\"}');

DROP TABLE IF EXISTS `result_employee`;
CREATE TABLE `result_employee` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `name` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

INSERT INTO `result_employee` (`id`, `image`, `name`) VALUES
(1,	'https://via.placeholder.com/102x102.webm',	'Leslie Alexander');

DROP TABLE IF EXISTS `result_procedure`;
CREATE TABLE `result_procedure` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(128) COLLATE utf8mb4_bin NOT NULL,
  `name` varchar(128) COLLATE utf8mb4_bin NOT NULL,
  `count` varchar(128) COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

INSERT INTO `result_procedure` (`id`, `image`, `name`, `count`) VALUES
(1,	'https://via.placeholder.com/102x102.webm',	'Problem skin facials',	'5 times'),
(2,	'https://via.placeholder.com/102x102.webm',	'Laser for problem skin',	'2 times');

DROP TABLE IF EXISTS `result_product`;
CREATE TABLE `result_product` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(256) COLLATE utf8mb4_bin NOT NULL,
  `name` varchar(256) COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

INSERT INTO `result_product` (`id`, `image`, `name`) VALUES
(1,	'https://via.placeholder.com/102x102.webm',	'Product bundle for light acne');

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

INSERT INTO `result_treatment` (`id`, `duration`, `result_employee_id`, `result_product_id`) VALUES
(1,	'3 months',	1,	1);

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

INSERT INTO `result_visit` (`id`, `date`, `images`, `title`, `description`, `read_more_url`, `read_more_label`, `result_treatment_id`) VALUES
(1,	'Nov 30, 2022',	'{\"image_left_large\": \"https://via.placeholder.com/320x426.webm\", \"image_left_small\": \"https://via.placeholder.com/175x235.webm\", \"image_right_large\": \"https://via.placeholder.com/320x426.webm\", \"image_right_small\": \"https://via.placeholder.com/175x235.webm\"}',	'First free consultation',	'This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone.',	'https://dahlskincare.com/skin-consultation',	'Get a free consultation',	1),
(2,	'Nov 30, 2022',	'{\"image_left_large\": \"https://via.placeholder.com/320x426.webm\", \"image_left_small\": \"https://via.placeholder.com/175x235.webm\", \"image_right_large\": \"https://via.placeholder.com/320x426.webm\", \"image_right_small\": \"https://via.placeholder.com/175x235.webm\"}',	'Results after first problem skin facials',	'This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone.',	'/services/facials',	'Read more about facials',	1);

-- 2023-03-16 09:45:12