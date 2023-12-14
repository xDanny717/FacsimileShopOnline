create database ShopOnlineDb;

use ShopOnlineDb;

create table Users (
    Use_Id         int not null AUTO_INCREMENT ,
    Use_Name       varchar(20) not null,
    Use_SecondName varchar(20) not null,
    Use_PostCode   int not null,
    Use_Email      varchar(45) not null,
    Use_Pswd       varchar(30) not null,
    Use_Addr       varchar(45) not null,
    Use_CardNumber varchar(16) not null,
    Use_Telephone  varchar(13) not null,
    PRIMARY KEY (Use_Id)
);

create table Categorys (
    Cat_Id int not null AUTO_INCREMENT,
    Cat_Name varchar(20) not null,
    Cat_Description varchar(50) not null,
    PRIMARY KEY(Cat_Id)
);

create table Products(
    Pro_Id          int  not null AUTO_INCREMENT,
    Pro_Name        varchar(20) not null,
    Pro_Description varchAr(50) not null,
    Pro_Price       float not null,
    Pro_Remaining   int  not null,
    Pro_Image       varchar(20) not null,
    Pro_Cat_Id      int  not null,
    PRIMARY KEY (Pro_Id),
    FOREIGN KEY (Pro_Cat_Id) REFERENCES Categorys(Cat_Id)
);

create table Orders(
    Ord_Id  int not null AUTO_INCREMENT,
    Ord_Use_Id int not null,
    Ord_Pro_Id int not null,
    Ord_Quantity int not null,
    PRIMARY KEY (Ord_Id),
    FOREIGN KEY (Ord_Use_Id) REFERENCES Users(Use_Id)
);


UPDATE `shoponlinedb`.`categorys` SET `Cat_Image` = 'category1.jpeg' WHERE (`Cat_Id` = '1');
UPDATE `shoponlinedb`.`categorys` SET `Cat_Image` = 'category2.jpeg' WHERE (`Cat_Id` = '2');
UPDATE `shoponlinedb`.`categorys` SET `Cat_Image` = 'category3.jpeg' WHERE (`Cat_Id` = '3');
INSERT INTO `shoponlinedb`.`products` (`Pro_Id`, `Pro_Name`, `Pro_Description`, `Pro_Price`, `Pro_Remaining`, `Pro_Image`, `Pro_Cat_Id`) VALUES ('8', 'Seat Racing', 'The most comfortable and safe, approved for professional races and for the road', '523.99', '11', 'prod8.jpg', '5');
