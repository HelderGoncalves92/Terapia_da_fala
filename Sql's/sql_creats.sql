
DROP TABLE Artigos;
DROP TABLE Categorias;


create table Categorias(
	ID_CATEGORIA int primary key,
	NOME varchar(30)
);

create table Artigos(
	ID_ARTIGO INT primary key,
	TITULO VARCHAR(100),
	CORPO TEXT,
	IMAGEM VARCHAR(37),
	ID_CATEGORIA INT, 
    FOREIGN KEY (ID_CATEGORIA) references Categorias(ID_CATEGORIA) ON UPDATE CASCADE
);