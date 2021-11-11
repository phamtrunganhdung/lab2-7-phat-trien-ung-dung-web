create database qlsinhvien;

use qlsinhvien;

create table lop (
MaLop varchar(7) not null primary key,
TenLop varchar(20) not null
);
create table sinhvien (
MSSV varchar(10) not null primary key,
HoTen varchar(30) not null,
Tuoi int not null,
MaLop varchar(7) not null,
foreign key (MaLop) references lop(MaLop)
);

insert  into lop(MaLop,TenLop) values 
('CTK40','Lop CNTT CTK40'),
('CTK41','Lop CNTT CTK41'),
('CTK42','Lop CNTT CTK42'),
('CTK43','Lop CNTT CTK43'),
('CTK44','Lop CNTT CTK44'),
('CTK45','Lop CNTT CTK45');

insert  into sinhvien(MSSV,HoTen,Tuoi,MaLop) values 
('1812745','Pham Trung Anh Dung', '21', 'CTK42');