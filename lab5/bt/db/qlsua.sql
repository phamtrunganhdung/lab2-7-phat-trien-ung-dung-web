create database qlsua;

use qlsua;

create table hangsua(
MaHS varchar(10) not null primary key,
TenHS varchar (15) not null,
DiachiHS varchar (50) not null,
SDTHS int not null,
Email varchar(30) not null
);

create table khachhang(
MaKH varchar (10) not null primary key,
TenKH varchar (30) not null,
GioiTinh varchar(5) not null,
DiaChiKH varchar (50) not null,
SDTKH int not null
);


create table loaisua(
MaLoai varchar(10) not null primary key,
TenLoai varchar(20) not null
);

create table sua(
MaSua varchar(10) not null primary key,
TenSua varchar(50) not null,
MaHS varchar(10) not null,
MaLoai varchar(10) not null,
TrongLuong int not null,
DonGia int not null,
TPDD varchar(300),
LoiIch varchar(300),
HinhAnh blob,
foreign key (MaHS) references hangsua(MaHS),
foreign key (MaLoai) references loaisua(MaLoai)
);


insert into hangsua (MaHS, TenHS, DiaChiHS, SDTHS, Email) values 
('VNM', 'Vinamilk', '123 - Nguyễn Du - Quận 1 - TP HCM', '8794561', 'vinamilk@vnm.com'),
('NTF', 'Nutifood', 'Khu công nghiệp sóng thần Bình Dương', '8795416', 'nutifood@ntf.com'),
('AB', 'Abbott', 'Công ty xuất nhập khẩu Việt Nam', '8796541', 'abbott@ab.com'),
('DS', 'Daisy', 'khu công nghiệp sóng thần Bình Dương', '895624', 'daisy@ds.com'),
('DL', 'DuctLady', 'Khu công nghiệp Biên Hòa Đồng Nai', '98546214', 'ductlady@dl.com'),
('DM', 'Dumex', 'khu công nghiệp sóng thần Bình Dương', '9563284', 'dumex@dm.com'),
('MJ', 'Mead Jonhson', 'Công ty xuất nhập khẩu Việt Nam', '5412369', 'meadjonhson@mj.com');
select * from hangsua;

insert into khachhang (MaKH, TenKH, GioiTinh, DiaChiKH, SDTKH) values 
('KH001', 'Trần Văn Tứ','Nam', '123 - Nguyễn Trãi - Quận 3 - TP HCM', '2658965'),
('KH002', 'Hoàng Anh Quang','Nam', '13 - Nguyễn Huệ - Quận 6 - TP HCM', '5896548'),
('KH003', 'Phạm Trung Anh Dũng','Nam', '69 - Nguyễn Bỉnh Khiêm - Quận 3 - TP HCM', '8546958'),
('KH004', 'Trần Nguyễn Việt Anh','Nam', '778 - Nguyễn Viết Xuân - Quận 7 - TP HCM', '6956228'),
('KH005', 'Trần Nguyễn Đông Gon','Nam', '58 - Nguyễn Hồng Vịnh - Quận 9 - TP HCM', '2365896'),
('KH006', 'Trịnh Nguyễn Hồng Phi','Nam', '223 - Nguyễn Công Trứ - Quận 6 - TP HCM', '6985478'),
('KH007', 'Lê Sỹ Hùng','Nam', '669 - Nguyễn Nhạc - Quận 5 - TP HCM', '36544865');
select * from khachhang;

insert into loaisua (MaLoai, TenLoai) values 
('SB','Sữa bột'),
('ST','Sữa tươi'),
('STT','Sữa tiệt trùng'),
('SD','Sữa đặc');
select * from loaisua;

insert into sua (MaSua, TenSua, MaHS, MaLoai, TrongLuong, DonGia, TPDD, LoiIch,HinhAnh) values 
('NTF008', 'Nutifood không đường','NTF', 'ST', '20','20000','','',''),
('VNM005', 'Vinamilk chocolate','VNM', 'ST', '20','22000','','',''),
('NTF006', 'Nutifood đặc cao cấp','NTF', 'SD', '50','25000','','',''),
('DS009', 'Daisy tăng trưởng chiều cao','DS', 'SB', '250','300000','','Giúp tăng trưởng chiều cao cho bé dưới 15 tuổi',''),
('DL225', 'DuctLady sạch khuẩn','DL', 'STT', '20','30000','','Quét sạch vi khuẩn mang lại sức khỏe tốt',''),
('NTF665', 'Nutifood cung cấp năng lượng','NTF', 'ST', '20','35000','B6,B12,FE,Vitamin,...','','');
select * from sua;
select MaSua, TenSua,
(select TenHS from hangsua hs where hs.MaHS = s.MaHS) as HangSua,
(select TenLoai from loaisua ls where ls.MaLoai = s.MaLoai) as LoaiSua, TrongLuong, DonGia, TPDD, LoiIch, HinhAnh
from sua s;

