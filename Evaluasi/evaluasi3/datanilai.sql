CREATE DATABASE datanilai;
USE datanilai
CREATE TABLE siswa(
    nama varcahar(30),
    nilai int(3),
    divisi varchar(25)),
    PRIMARY KEY (nama));
INSERT INTO siswa(nama,nilai,divisi) VALUES
('dadan',55,'multimedia'), 
('agus',68,'marketer'),
('maemunah',65,'multimedia'),
('ijah',80,'koki'),
('susi',90,'informatika'),
('faruk',85,'agro');
SELECT COUNT(nama)FROM siswa;
SELECT AVG(nilai)FROM siswa;
SELECT nama FROM siswa WHERE siswa.nilai>=80;
SELECT nama FROM siswa WHERE siswa.nilai<=65;