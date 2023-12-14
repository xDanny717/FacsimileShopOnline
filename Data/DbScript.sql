/*
    La sintassi dei nomi del database per ogni attributo è quella di usare le prime tre lettere della tabella
    poi il nome dell'attributo , ogni parola ha la prima lettera maiuscola , in oltre per le chiavi esterne la sintassi
    è quella di usare : NomeTabella_TabellaEsterna_Id (Tutti i nomi delle tabelle fatti da 3 lettere).
    Oppure mettendo le lettere iniziali.
*/
create database MagazzinoProdotti;
use MagazzinoProdotti;
create table Cliente(
    Cli_IdCliente int identity(1,1) primary key,
    Cli_Nome varchar(30) not null,
    Cli_Cognome varchar(30) not null,
    Cli_Telefono varchar(15) not null,
    Cli_Citta varchar(30) not null,
    Cli_Indirizzo varchar(50) not null,
    Cli_Email varchar(50) not null,
    Cli_UserName varchar(30) not null,
    Cli_Password  varchar(30) not null
);

create tabele Admin(
        Ad_Id int identity(1,1) primary key,
        Ad_UserName varchar(30) not null,
        Ad_Password varchar(30) not null,
);

create table Prodotto(
    Pro_IdProdotto int identity(1,1) primary key,
    Pro_Nome varchar(30) not null,
    Pro_Prezzo decimal(5,2) not null
);

create table Ordine (
    Ord_IdOrdine int identity(1,1) primary key,
    Ord_Data timestamp not null,
    Ord_Cli_IdCliente int foreign key references Cliente (Cli_IdCliente)
);

create table Dettagli_Ordine (
    DO_Id int identity(1,1) primary key,
    DO_Ord_IdOrdine int foreign key references  Ordine(Ord_IdOrdine),
    DO_Pro_IdProdotto int foreign key references Prodotto(Pro_IdProdotto),
    DO_Quantità int not null
);