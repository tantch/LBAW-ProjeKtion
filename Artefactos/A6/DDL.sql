DROP TABLE Administrador CASCADE
;
DROP TABLE alocado CASCADE
;
DROP TABLE Aprovada CASCADE
;
DROP TABLE Categoria CASCADE
;
DROP TABLE criar CASCADE
;
DROP TABLE Execução CASCADE
;
DROP TABLE Fórum CASCADE
;
DROP TABLE JoinCategoriaToProjeto CASCADE
;
DROP TABLE JoinExecuçãoToCategoria CASCADE
;
DROP TABLE Lista Contactos CASCADE
;
DROP TABLE Outros CASCADE
;
DROP TABLE Papel CASCADE
;
DROP TABLE Projeto CASCADE
;
DROP TABLE Rejeitada CASCADE
;
DROP TABLE Resposta CASCADE
;
DROP TABLE Tarefa CASCADE
;
DROP TABLE Tarefa Sugerida CASCADE
;
DROP TABLE Tópico CASCADE
;
DROP TABLE User CASCADE
;

CREATE TABLE Administrador ( 
	  ,
	administradorID integer NOT NULL
)
;

CREATE TABLE alocado ( 
	execuçãoID integer,
	outrosID integer
)
;

CREATE TABLE Aprovada ( 
	  ,
	aprovadaID integer NOT NULL,
	papelID integer
)
;

CREATE TABLE Categoria ( 
	Nome varchar(50),
	Descrição int,
	categoriaID integer NOT NULL
)
;

CREATE TABLE criar ( 
	execuçãoID integer,
	papelID integer
)
;

CREATE TABLE Execução ( 
	  ,
	execuçãoID integer NOT NULL
)
;

CREATE TABLE Fórum ( 
	  ,
	fórumID integer NOT NULL,
	projetoID integer NOT NULL
)
;

CREATE TABLE JoinCategoriaToProjeto ( 
	projetoID integer,
	categoriaID integer
)
;

CREATE TABLE JoinExecuçãoToCategoria ( 
	categoriaID integer,
	execuçãoID integer
)
;

CREATE TABLE Lista Contactos ( 
	  ,
	lista ContactosID integer NOT NULL
)
;

CREATE TABLE Outros ( 
	Nome varchar(50),
	Data Nascimento date,
	Genero varchar(50),
	Morada varchar(50),
	Telefone int,
	Email varchar(50),
	outrosID integer NOT NULL,
	lista ContactosID integer NOT NULL
)
;

CREATE TABLE Papel ( 
	  ,
	papelID integer NOT NULL
)
;

CREATE TABLE Projeto ( 
	Nome varchar(50),
	Observações varchar(50),
	Data Fim date,
	Estado varchar(50),
	projetoID integer NOT NULL,
	outrosID integer
)
;

CREATE TABLE Rejeitada ( 
	  ,
	rejeitadaID integer NOT NULL,
	papelID integer
)
;

CREATE TABLE Resposta ( 
	Texto varchar(50),
	Data Registo date,
	respostaID integer NOT NULL,
	outrosID integer,
	tópicoID integer
)
;

CREATE TABLE Tarefa ( 
	Nome varchar(50),
	Descrição varchar(50),
	Data Fim date,
	Estado varchar(50),
	tarefaID integer NOT NULL
)
;

CREATE TABLE Tarefa Sugerida ( 
	  ,
	tarefa SugeridaID integer NOT NULL,
	papelID integer
)
;

CREATE TABLE Tópico ( 
	Nome varchar(50),
	Descrição varchar(50),
	Data Criação date,
	Estado varchar(50),
	tópicoID integer NOT NULL,
	fórumID integer,
	outrosID integer
)
;

CREATE TABLE User ( 
	UserName varchar(50),
	Password hashed string,
	userID integer NOT NULL
)
;


ALTER TABLE Administrador ADD CONSTRAINT PK_Administrador 
	PRIMARY KEY (administradorID)
;


ALTER TABLE Aprovada ADD CONSTRAINT PK_Aprovada 
	PRIMARY KEY (aprovadaID)
;


ALTER TABLE Categoria ADD CONSTRAINT PK_Categoria 
	PRIMARY KEY (categoriaID)
;


ALTER TABLE Execução ADD CONSTRAINT PK_Execução 
	PRIMARY KEY (execuçãoID)
;


ALTER TABLE Fórum ADD CONSTRAINT PK_Fórum 
	PRIMARY KEY (fórumID)
;


ALTER TABLE Lista Contactos ADD CONSTRAINT PK_Lista Contactos 
	PRIMARY KEY (lista ContactosID)
;


ALTER TABLE Outros ADD CONSTRAINT PK_Outros 
	PRIMARY KEY (outrosID)
;


ALTER TABLE Papel ADD CONSTRAINT PK_Papel 
	PRIMARY KEY (papelID)
;


ALTER TABLE Projeto ADD CONSTRAINT PK_Projeto 
	PRIMARY KEY (projetoID)
;


ALTER TABLE Rejeitada ADD CONSTRAINT PK_Rejeitada 
	PRIMARY KEY (rejeitadaID)
;


ALTER TABLE Resposta ADD CONSTRAINT PK_Resposta 
	PRIMARY KEY (respostaID)
;


ALTER TABLE Tarefa ADD CONSTRAINT PK_Tarefa 
	PRIMARY KEY (tarefaID)
;


ALTER TABLE Tarefa Sugerida ADD CONSTRAINT PK_Tarefa Sugerida 
	PRIMARY KEY (tarefa SugeridaID)
;


ALTER TABLE Tópico ADD CONSTRAINT PK_Tópico 
	PRIMARY KEY (tópicoID)
;


ALTER TABLE User ADD CONSTRAINT PK_User 
	PRIMARY KEY (userID)
;




ALTER TABLE Administrador ADD CONSTRAINT FK_Administrador_User 
	FOREIGN KEY (administradorID) REFERENCES User (userID)
;

ALTER TABLE alocado ADD CONSTRAINT Execução 
	FOREIGN KEY (execuçãoID) REFERENCES Execução (execuçãoID)
;

ALTER TABLE alocado ADD CONSTRAINT Outros 
	FOREIGN KEY (outrosID) REFERENCES Outros (outrosID)
;

ALTER TABLE Aprovada ADD CONSTRAINT FK_Aprovada_Tarefa Sugerida 
	FOREIGN KEY (aprovadaID) REFERENCES Tarefa Sugerida (tarefa SugeridaID)
;

ALTER TABLE Aprovada ADD CONSTRAINT aprova 
	FOREIGN KEY (papelID) REFERENCES Papel (papelID)
;

ALTER TABLE criar ADD CONSTRAINT Execução 
	FOREIGN KEY (execuçãoID) REFERENCES Execução (execuçãoID)
;

ALTER TABLE criar ADD CONSTRAINT Papel 
	FOREIGN KEY (papelID) REFERENCES Papel (papelID)
;

ALTER TABLE Execução ADD CONSTRAINT FK_Execução_Tarefa 
	FOREIGN KEY (execuçãoID) REFERENCES Tarefa (tarefaID)
;

ALTER TABLE Fórum ADD CONSTRAINT tem um 
	FOREIGN KEY (projetoID) REFERENCES Projeto (projetoID)
;

ALTER TABLE JoinCategoriaToProjeto ADD CONSTRAINT Projeto 
	FOREIGN KEY (projetoID) REFERENCES Projeto (projetoID)
;

ALTER TABLE JoinCategoriaToProjeto ADD CONSTRAINT Categoria 
	FOREIGN KEY (categoriaID) REFERENCES Categoria (categoriaID)
;

ALTER TABLE JoinExecuçãoToCategoria ADD CONSTRAINT Categoria 
	FOREIGN KEY (categoriaID) REFERENCES Categoria (categoriaID)
;

ALTER TABLE JoinExecuçãoToCategoria ADD CONSTRAINT Execução 
	FOREIGN KEY (execuçãoID) REFERENCES Execução (execuçãoID)
;

ALTER TABLE Outros ADD CONSTRAINT possui 
	FOREIGN KEY (lista ContactosID) REFERENCES Lista Contactos (lista ContactosID)
;

ALTER TABLE Outros ADD CONSTRAINT agregado a uma 
	FOREIGN KEY (lista ContactosID) REFERENCES Lista Contactos (lista ContactosID)
;

ALTER TABLE Outros ADD CONSTRAINT FK_Outros_User 
	FOREIGN KEY (outrosID) REFERENCES User (userID)
;

ALTER TABLE Projeto ADD CONSTRAINT master dum  
	FOREIGN KEY (outrosID) REFERENCES Outros (outrosID)
;

ALTER TABLE Rejeitada ADD CONSTRAINT rejeita 
	FOREIGN KEY (papelID) REFERENCES Papel (papelID)
;

ALTER TABLE Rejeitada ADD CONSTRAINT FK_Rejeitada_Tarefa Sugerida 
	FOREIGN KEY (rejeitadaID) REFERENCES Tarefa Sugerida (tarefa SugeridaID)
;

ALTER TABLE Resposta ADD CONSTRAINT responde com uma 
	FOREIGN KEY (outrosID) REFERENCES Outros (outrosID)
;

ALTER TABLE Resposta ADD CONSTRAINT FK_Resposta_Tópico 
	FOREIGN KEY (tópicoID) REFERENCES Tópico (tópicoID)
;

ALTER TABLE Tarefa Sugerida ADD CONSTRAINT FK_Tarefa Sugerida_Papel 
	FOREIGN KEY (papelID) REFERENCES Papel (papelID)
;

ALTER TABLE Tarefa Sugerida ADD CONSTRAINT FK_Tarefa Sugerida_Tarefa 
	FOREIGN KEY (tarefa SugeridaID) REFERENCES Tarefa (tarefaID)
;

ALTER TABLE Tópico ADD CONSTRAINT FK_Tópico_Fórum 
	FOREIGN KEY (fórumID) REFERENCES Fórum (fórumID)
;

ALTER TABLE Tópico ADD CONSTRAINT FK_Tópico_Outros 
	FOREIGN KEY (outrosID) REFERENCES Outros (outrosID)
;
