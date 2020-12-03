CREATE DATABASE relasi;
USE relasi
CREATE TABLE manusia(
    manusia_id int NOT NULL AUTO_INCREMENT,
    nama varchar (30),
    umur int (4),
   PRIMARY KEY (manusia_id));
   INSERT INTO manusia (manusia_id,nama,umur) VALUES 
   (null,'Akil',12),
   (null,'Nurul',17),
   (null,'Huda',20);
CREATE TABLE pinjam(
     pinjam_id int NOT NULL AUTO_INCREMENT,
     nobuku int (15),
     person_id int,
     PRIMARY KEY (pinjam_id),
     FOREIGN KEY (person_id) REFERENCES manusia(manusia_id)
     );
     INSERT INTO pinjam (pinjam_id,nobuku,person_id) VALUES
     (null,144,2),
     (null,242,3),
     (null,255,2),
     (null,345,1),
     (null,122,1);
CREATE TABLE dosen_wali(
    id_dosen_wali int not null AUTO_INCREMENT,
    nama varchar (40),
    nidn varchar(45),
    PRIMARY KEY (id_dosen_wali));
    INSERT INTO dosen_wali(id_dosen_wali,nama,nidn) VALUES
    (null,'agus','A001'),
    (null,'saka','A002'),
    (null,'cumi','A003');
CREATE TABLE mahasiswa(
    id_mahasiswa int not null AUTO_INCREMENT,
    nama varchar (20),
    alamat varchar(50),
    id_dosen_wali int,
    PRIMARY KEY (id_mahasiswa));
    INSERT INTO mahasiswa(id_mahasiswa,nama,alamat,id_dosen_wali) VALUES
    (null,'adfsd','patuanan',1),
    (null,'rgfdh','leuwimunding',2),
Home » MySQL » Perintah Alter Table di Database MySQL
Perintah Alter Table di Database MySQL
in MySQL - on 6:22 AM - 7 comments
Apa Itu Alter Table?
ALTER TABLE adalah salah satu perintah di database MySQL untuk merubah struktur table baik itu merubah nama table, merubah nama kolom, merubah tipe data, dan lain-lain.



Sebagai latihan, mari kita mulai dengan membuat table sebagai eksperimen.

    Login ke database MySQL

    # mysql -u root -p
    Enter password:
    Welcome to the MySQL monitor.  Commands end with ; or \g.
    Your MySQL connection id is 1
    Server version: 5.5.36 MySQL Community Server (GPL)

    Copyright (c) 2000, 2014, Oracle and/or its affiliates. All rights reserved.

    Oracle is a registered trademark of Oracle Corporation and/or its
    affiliates. Other names may be trademarks of their respective
    owners.

    Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

    mysql> use akademik;
    Database changed


    Buat Table TEST di MySQL, seperti berikut

    mysql> CREATE table TEST(
        -> kolom_1  varchar(5),
        -> kolom_2  int(3),
        -> kolom_3  date
        -> );
    Query OK, 0 rows affected (0.15 sec)


    Untuk melihat struktur table TEST diatas, gunakan perintah dibawah ini

    mysql> desc test;
    +---------+------------+------+-----+---------+-------+
    | Field   | Type       | Null | Key | Default | Extra |
    +---------+------------+------+-----+---------+-------+
    | kolom_1 | varchar(5) | YES  |     | NULL    |       |
    | kolom_2 | int(3)     | YES  |     | NULL    |       |
    | kolom_3 | date       | YES  |     | NULL    |       |
    +---------+------------+------+-----+---------+-------+
    3 rows in set (0.02 sec)


    (null,'gghhjf','babakantipes',3);
SELECT dosen_wali.nidn, mahasiswa.nama
FROM dosen_wali
INNER JOIN mahasiswa ON dosen_wali.id_dosen_wali = mahasiswa.id_dosen_wali; 
CREATE TABLE mhs(
    id_mahasiswa int not null AUTO_INCREMENT,
    nama varchar (20),
    alamat varchar(50),
    PRIMARY KEY (id_mahasiswa)); 
    INSERT INTO mhs(id_mahasiswa,nama,alamat) VALUES
    (null,'jhfgd','leuwiseeng'),
    (null,'mnjhg','leuwikujangng'),
    (null,'kljiu','lemahsugih');
CREATE TABLE nilai(
    mahasiswa_id_mahasiswa int not null AUTO_INCREMENT,
    matakuliah_id_matakuliah int,
    nilai varchar (30),
    PRIMARY KEY (mahasiswa_id_mahasiswa));
    INSERT INTO nilai(mahasiswa_id_mahasiswa,matakuliah_id_matakuliah,nilai) VALUES
    (null,001,85),
    (null,002,90),
    (null,003,100);
CREATE TABLE matakuliah(
    id_matakuliah int NOT NULL AUTO_INCREMENT,
    nama_matakuliah varchar (60),
    sks int,
    semester int,
    PRIMARY KEY (id_matakuliah));
    INSERT INTO matakuliah(id_matakuliah,nama_matakuliah,sks,semester) VALUES
    (null,'Bahasa dan Sastra',2,1),
    (null,'Ortopedi',1,4),
    (null,'Matematika',4,5);
