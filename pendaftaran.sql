-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.18 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for pendaftaran
CREATE DATABASE IF NOT EXISTS `pendaftaran` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `pendaftaran`;

-- Dumping structure for table pendaftaran.calonpeperiksaan
CREATE TABLE IF NOT EXISTS `calonpeperiksaan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kodPeperiksaan` varchar(50) DEFAULT '0',
  `angkaGiliran` varchar(50) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table pendaftaran.calonpeperiksaan: ~0 rows (approximately)
/*!40000 ALTER TABLE `calonpeperiksaan` DISABLE KEYS */;
/*!40000 ALTER TABLE `calonpeperiksaan` ENABLE KEYS */;

-- Dumping structure for table pendaftaran.kelas
CREATE TABLE IF NOT EXISTS `kelas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `namaKelas` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table pendaftaran.kelas: ~0 rows (approximately)
/*!40000 ALTER TABLE `kelas` DISABLE KEYS */;
/*!40000 ALTER TABLE `kelas` ENABLE KEYS */;

-- Dumping structure for table pendaftaran.pentadbir
CREATE TABLE IF NOT EXISTS `pentadbir` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emel` varchar(50) NOT NULL,
  `idNama` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kataLaluan` varchar(50) NOT NULL,
  `pangkat` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table pendaftaran.pentadbir: ~0 rows (approximately)
/*!40000 ALTER TABLE `pentadbir` DISABLE KEYS */;
/*!40000 ALTER TABLE `pentadbir` ENABLE KEYS */;

-- Dumping structure for table pendaftaran.peperiksaan
CREATE TABLE IF NOT EXISTS `peperiksaan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kodPeperiksaan` varchar(50) NOT NULL,
  `mulaPeperiksaan` datetime NOT NULL,
  `tamatPeperiksaan` datetime NOT NULL,
  `jenisPeperiksaan` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table pendaftaran.peperiksaan: ~0 rows (approximately)
/*!40000 ALTER TABLE `peperiksaan` DISABLE KEYS */;
/*!40000 ALTER TABLE `peperiksaan` ENABLE KEYS */;

-- Dumping structure for table pendaftaran.profilmurid
CREATE TABLE IF NOT EXISTS `profilmurid` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `noKP` int(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `angkaGiliran` varchar(50) NOT NULL,
  `bangsa` varchar(50) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `tarikhMendaftar` date NOT NULL,
  `jantina` varchar(50) NOT NULL,
  `gambar` blob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table pendaftaran.profilmurid: ~0 rows (approximately)
/*!40000 ALTER TABLE `profilmurid` DISABLE KEYS */;
/*!40000 ALTER TABLE `profilmurid` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
