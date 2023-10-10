Create database BDCrud;

Create table TBCrud(
	Codi_Crud int  primary key auto_increment,
    Nome_Crud varchar(40) not null,
    Email_Crud varchar(30) not null,
    Senha_Crud varchar(8) not null,
    Sexo_Crud varchar(1) not null,
    Nasc_Crud date not null
);

describe tbcrud;