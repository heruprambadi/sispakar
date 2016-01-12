CREATE TABLE `gejala` (
  `kd_gejala` varchar(10),
  `nm_gejala` varchar(100),
  `id_gejala` int(10) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_gejala`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*split*/

CREATE TABLE `analisa` (
  `id_analisa` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(60),
  PRIMARY KEY (`id_analisa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*split*/

CREATE TABLE `relasi_gejala` (
  `id_relasi_gejala` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_analisa` varchar(10),
  `kd_gejala` varchar(10),
  PRIMARY KEY (`id_relasi_gejala`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;