-- --------------------------------------------------------
-- 호스트:                          127.0.0.1
-- 서버 버전:                        10.1.9-MariaDB - mariadb.org binary distribution
-- 서버 OS:                        Win64
-- HeidiSQL 버전:                  11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- 테이블 testdb.member_20200512 구조 내보내기
CREATE TABLE IF NOT EXISTS `member_20200512` (
  `id` varchar(16) NOT NULL COMMENT '아이디',
  `pw` varchar(30) NOT NULL COMMENT '비밀번호',
  `name` varchar(30) NOT NULL COMMENT '이름',
  `gender` char(1) NOT NULL COMMENT '성별',
  `mobilenumber` char(30) DEFAULT NULL COMMENT '스맛폰번호',
  `final_educational_attainment` varchar(20) NOT NULL COMMENT '최종학력',
  `job` varchar(50) DEFAULT NULL COMMENT '직업',
  `annual_salary` int(11) DEFAULT NULL COMMENT '연봉',
  `preference` varchar(100) DEFAULT NULL COMMENT '선호도',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- 테이블 데이터 testdb.member_20200512:~0 rows (대략적) 내보내기
/*!40000 ALTER TABLE `member_20200512` DISABLE KEYS */;
/*!40000 ALTER TABLE `member_20200512` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
