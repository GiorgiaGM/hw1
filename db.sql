USE hw1;

CREATE TABLE users (
    id integer primary key auto_increment,
    username varchar(16) not null unique,
    password varchar(255) not null,
    email varchar(255) not null unique,
    name varchar(255) not null,
    surname varchar(255) not null,
    propic varchar(255)
) Engine = InnoDB;




CREATE TABLE opera4(
    id integer primary key auto_increment unique,
    user integer not null,
    content json,
    foreign key (user) references users(id)
) Engine = InnoDB;


CREATE TABLE evento(
    id integer primary key auto_increment unique,
    user integer not null,
    content json,
    foreign key(user) references users(id)
) Engine = InnoDB;








