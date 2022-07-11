
 



 
 
 
 create table person(
 id Serial primary key,
  Name varchar(60),
  level varchar(20),
  Licence varchar(20)
);

create table credentials(
 username varchar(30) primary key,
 password varchar(20),
 id int,
 

 foreign key (id) references person(id) 
 on delete cascade on update cascade


);
create table fine(
    id Serial primary key,
    fine varchar(20),
    person int,
    Fine_date Date default CURRENT_TIMESTAMP,
    Status varchar(3),
    cost int,
    payment int,
    foreign key (person) references person(id)
    on delete cascade on update cascade
);
create table payment(
  id Serial primary key,
  fine int,
  cost int,


  foreign key (fine) references fine(id)
  on delete cascade on update cascade


);
