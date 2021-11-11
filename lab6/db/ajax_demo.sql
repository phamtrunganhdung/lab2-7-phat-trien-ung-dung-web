create database ajax_demo;

use ajax_demo;

create table user (
id int auto_increment not null primary key,
FirstName varchar(10) not null,
LastName varchar(10) not null,
Age int not null,
Hometown varchar(30) not null,
Job varchar(20) not null
);

insert into user (FirstName,Lastname,Age,Hometown,Job) values ('Peter','Griffin', 41, 'Quahog', 'Brewery');
insert into user (FirstName,Lastname,Age,Hometown,Job) values 
('Lois','Griffin', 40, 'Newport', 'Piano Teacher'),
('Joseph','Swanson', 39, 'Quahog', 'Pollice Officer'),
('Gren','Quagmine', 41, 'Quahog', 'Pilot');
select * from user;