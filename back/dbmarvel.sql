create table doenca (
    Id int primary key not null AUTO_INCREMENT,
    Nome varchar(200)  not null,
    Descricao varchar(500) not null,
    Precaucao varchar(500) not null
);

create table sintoma (
    Id int primary key not null AUTO_INCREMENT,
    Nome varchar(200)
);

create table doenca_x_sintoma (
    Id int primary key not null AUTO_INCREMENT
);

ALTER TABLE `doenca_x_sintoma` ADD CONSTRAINT `fk_doenca` FOREIGN KEY ( `Id` ) REFERENCES `doenca` ( `Id` );
ALTER TABLE `doenca_x_sintoma` ADD CONSTRAINT `fk_sintoma` FOREIGN KEY ( `Id` ) REFERENCES `sintoma` ( `Id` );