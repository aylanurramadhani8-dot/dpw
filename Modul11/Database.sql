CREATE DATABASE IF NOT EXISTS db_praktikum11;
USE db_praktikum11;

CREATE TABLE t_dosen (
    idDosen INT(11) NOT NULL AUTO_INCREMENT,
    namaDosen VARCHAR(50) DEFAULT NULL,
    noHP VARCHAR(25) DEFAULT NULL,
    PRIMARY KEY (idDosen)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE t_mahasiswa (
    npm INT(11) NOT NULL,
    namaMhs VARCHAR(50) DEFAULT NULL,
    prodi VARCHAR(25) DEFAULT NULL,
    alamat VARCHAR(70) DEFAULT NULL,
    noHP VARCHAR(25) DEFAULT NULL,
    PRIMARY KEY (npm)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE t_matakuliah (
    kodeMK INT(11) NOT NULL,
    namaMK VARCHAR(70) DEFAULT NULL,
    sks INT(11) DEFAULT NULL,
    jam INT(11) DEFAULT NULL,
    PRIMARY KEY (kodeMK)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;