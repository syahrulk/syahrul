CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `id_mahasiswa` int(5) NOT NULL AUTO_INCREMENT,
  `nim` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `nama` varchar(50) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id_mahasiswa`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=100001 ;

CREATE TABLE IF NOT EXISTS `nilai` (
  `id_nilai` int(5) NOT NULL AUTO_INCREMENT,
  `id_mahasiswa` int(50) COLLATE latin1_general_ci NOT NULL,
  `nilai_tugas` int(50) COLLATE latin1_general_ci NOT NULL,
  `nilai_mid` int(50) COLLATE latin1_general_ci NOT NULL,
  `nilai_final` int(50) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id_nilai`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=100001 ;
