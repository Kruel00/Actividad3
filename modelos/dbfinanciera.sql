CREATE TABLE criptomoneda(
	CriptomonedaId INT PRIMARY KEY IDENTITY, 
	nombre CHAR(80) NOT NULL,
	tipoDeCambio float NOT NULL
);

CREATE TABLE transaccion(
	transaccionId INT PRIMARY KEY NOT NULL IDENTITY,
    criptomoneda int not null,
	tipoTransaccion bit NOT NULL,
    cantidadCriptomonedas int not null,
	tipodeCambioDll decimal(5,2),
	totalTransacction float,
	comision float,
	valorSinComicion float
    foreign key (criptomoneda) references criptomoneda(CriptomonedaId) ON DELETE CASCADE
);


insert into criptomoneda values 
( 'BTH',59000),
( 'ETH',3923),
( 'XRP',1.5597),
( 'DODGE',0.7021);


select * from criptomoneda

insert into transaccion values ($cn,$tt,$cc,$pd,$st,$cm,$ttr); 

insert into criptomoneda values 
( 'BTH',59000),