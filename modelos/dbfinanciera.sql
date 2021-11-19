CREATE TABLE criptomoneda(
	CriptomonedaId INT PRIMARY KEY IDENTITY, 
	nombre CHAR(80) NOT NULL,
	tipoDeCambio float NOT NULL
);

CREATE TABLE transaccion(
	transaccionId INT PRIMARY KEY NOT NULL IDENTITY,
    criptomoneda int not null,
	tipoTransaccion bit not null,	
    cantidadCriptomonedas float not null,
	tipodeCambioDll float not null,
	totalTransacction float not null,
	comision float not null,
	valorSinComicion float not null,
    foreign key (criptomoneda) references criptomoneda(CriptomonedaId) on delete cascade
);


insert into criptomoneda values 
( 'BTC',59000),
( 'ETH',3923.08),
( 'XRP',1.5597),
( 'DODGE',0.7021);


select * from criptomoneda

insert into transaccion values ($cn,$tt,$cc,$pd,$st,$cm,$ttr); 

insert into criptomoneda values 
( 'BTH',59000)