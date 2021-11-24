create database lab7_mvc;

use lab7_mvc;

create table departments(
id int not null auto_increment primary key,
Name varchar(50) not null,
NumberOfStaff int not null
);

create table employees(
id int not null auto_increment primary key,
Name varchar(50) not null,
Surname varchar(50) not null,
email varchar(50) not null,
phone int not null,
departmentId int not null,
foreign key (departmentId) references departments (id)
);
insert into departments(Name, NumberOfStaff) values 
('Quản lý', 3),
('Kế toán', 5),
('Marketing', 7),
('Kỹ thuật', 10);
select * from departments;

insert into employees(Name, SurName, email, phone, departmentId) values 
('Tứ', 'Trần Văn', 'tu4vip@gmail.com', '0936665628',1),
('Quang', 'Hoàng Anh', 'trumittk@gmail.com','0659984512',2),
('Quân', 'Lê Tiến', 'quanteobk@gmail.com','0569998457',2),
('Gon', 'Trần Nguyễn Đông', 'spfeed@gmail.com','0599985471',3),
('Huy', 'Lê Tiến', 'huyemgiai@gmail.com','0584551258',4);
insert into employees(Name, SurName, email, phone, departmentId) values 
('Thịnh', 'Nguyễn Quốc', 'thinhrua10k@gmail.com','0598854128',4);

select * from employees;