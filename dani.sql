use mysql;
drop database danii;

create database danii;

use  danii;

create table WithDep(
 Que int(10) primary key not null,
 Phone varchar(20),
 Req_time time default current_timestamp()

);

create table Inqury(
 Que int(10) primary key not null,
 Phone varchar(20),
 Req_time time default current_timestamp()

);