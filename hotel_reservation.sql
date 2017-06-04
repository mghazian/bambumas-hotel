-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.8-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for hotel_reservation
DROP DATABASE IF EXISTS `hotel_reservation`;
CREATE DATABASE IF NOT EXISTS `hotel_reservation` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `hotel_reservation`;

-- Dumping structure for table hotel_reservation.data_staff
DROP TABLE IF EXISTS `data_staff`;
CREATE TABLE IF NOT EXISTS `data_staff` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `pass` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table hotel_reservation.data_staff: ~1 rows (approximately)
/*!40000 ALTER TABLE `data_staff` DISABLE KEYS */;
REPLACE INTO `data_staff` (`id`, `nama`, `username`, `pass`) VALUES
	(1, NULL, 'wakimin', '$2y$10$VbEUf2ltT5D7d9EH7Y6k9OKw.f4TFViabVz03JMid6FlC.Ucgh6ju');
/*!40000 ALTER TABLE `data_staff` ENABLE KEYS */;

-- Dumping structure for table hotel_reservation.ref_kamar
DROP TABLE IF EXISTS `ref_kamar`;
CREATE TABLE IF NOT EXISTS `ref_kamar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_kamar` int(11) DEFAULT NULL,
  `terisi` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table hotel_reservation.ref_kamar: ~0 rows (approximately)
/*!40000 ALTER TABLE `ref_kamar` DISABLE KEYS */;
/*!40000 ALTER TABLE `ref_kamar` ENABLE KEYS */;

-- Dumping structure for table hotel_reservation.transaksi_pemesanan_kamar
DROP TABLE IF EXISTS `transaksi_pemesanan_kamar`;
CREATE TABLE IF NOT EXISTS `transaksi_pemesanan_kamar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_kamar` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_kamar` (`id_kamar`),
  CONSTRAINT `transaksi_pemesanan_kamar_ibfk_1` FOREIGN KEY (`id_kamar`) REFERENCES `ref_kamar` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table hotel_reservation.transaksi_pemesanan_kamar: ~0 rows (approximately)
/*!40000 ALTER TABLE `transaksi_pemesanan_kamar` DISABLE KEYS */;
/*!40000 ALTER TABLE `transaksi_pemesanan_kamar` ENABLE KEYS */;

-- Dumping structure for table hotel_reservation.transaksi_reservasi
DROP TABLE IF EXISTS `transaksi_reservasi`;
CREATE TABLE IF NOT EXISTS `transaksi_reservasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pemesan` varchar(100) DEFAULT NULL,
  `no_telp_pemesan` varchar(15) DEFAULT NULL,
  `waktu_pesan` datetime DEFAULT CURRENT_TIMESTAMP,
  `waktu_terjadwal_check_in` datetime DEFAULT NULL,
  `waktu_terjadwal_check_out` datetime DEFAULT NULL,
  `waktu_check_in` datetime DEFAULT NULL,
  `waktu_check_out` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table hotel_reservation.transaksi_reservasi: ~0 rows (approximately)
/*!40000 ALTER TABLE `transaksi_reservasi` DISABLE KEYS */;
/*!40000 ALTER TABLE `transaksi_reservasi` ENABLE KEYS */;

-- Dumping structure for view hotel_reservation.v_transaksi_pemesanan_kamar
DROP VIEW IF EXISTS `v_transaksi_pemesanan_kamar`;
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `v_transaksi_pemesanan_kamar` (
	`id` INT(11) NOT NULL,
	`no_kamar` INT(11) NULL
) ENGINE=MyISAM;

-- Dumping structure for view hotel_reservation.v_transaksi_pemesanan_kamar
DROP VIEW IF EXISTS `v_transaksi_pemesanan_kamar`;
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `v_transaksi_pemesanan_kamar`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` VIEW `v_transaksi_pemesanan_kamar` AS SELECT
	transaksi_pemesanan_kamar.id,
	ref_kamar.no_kamar
FROM transaksi_pemesanan_kamar
JOIN ref_kamar on ref_kamar.id = transaksi_pemesanan_kamar.id_kamar  WITH CASCADED CHECK OPTION ;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
