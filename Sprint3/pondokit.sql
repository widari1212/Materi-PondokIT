CREATE DATABASE PONDOKIT;
USE PONDOKIT
CREATE TABLE santri(
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name varchar (40),
    age int (5),
    divisi varchar (20));
SHOW TABLES; 
INSERT INTO santri(id,name,age,divisi)VALUES
(null,'anis',16,'multimedia'),
(null,'caca',17,'bahasa dan sastra'),
(null,'bayu',20,'agroteknologi'),
(null,'bunga',16,'perkebunan'),
(null,'fajar',15,'sektor tanah'),
(null,'mane',19,'multimedia'),
(null,'faruk',21,'bisnis daring'),
(null,'muhidin',22,'akuntan'),
(null,'bella',19,'tidaktau'),
(null,'emi',24,'multimedia'),
(null,'susi',16,'programmer'),
(null,'hasan',25,'informatika'),
(null,'lina',19,'pertanian'),
(null,'mita',19,'bisnis daring'),
(null,'sukma',18,'multimedia'),
(null,'anggun',24,'multimedia'),
(null,'sarah',23,'akuntan'),
(null,'seli',21,'multimedia'),
(null,'iis',22,'bisnis daring'),
(null,'madha',20,'multimedia');
select * from santri where id=13;
update santri set name='Ahsan S',age=23,divisi='Programmer'  where id=17;
delete from santri where id=19;
INSERT INTO santri(id,name,age,divisi)VALUES
(null,'amel',18,'koki'),
(null,'nabil',17,'multimedia'),
(null,'faisal',23,'informatika'),
(null,'mey',19,'lieur'),
(null,'ikhsan',20,'pertambangan');
select * from santri order by age asc limit 15;
select * from santri order by age  desc limit 15;
select sum(age)from santri;
select avg(age)from santri;
select count(id),age from santri group by age;