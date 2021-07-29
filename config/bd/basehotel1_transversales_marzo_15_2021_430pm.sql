

USE `basehotel1`;
-- Nuevas tablas 
-- lo nuevo de manolo
-- tablas transversales -------
DROP TABLE IF EXISTS `tbServiciosTr`;
CREATE TABLE `tbServiciosTr` (
  `idServicioTr`  int not NULL primary key auto_increment,
  `descServicio`  varchar(40) DEFAULT NULL,
  `status`        tinyint  not null DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `TbInstalacionesTr`;
CREATE TABLE `TbInstalacionesTr` (
  `idInstalacionTr`    int not NULL primary key auto_increment,
  `desInstalacion`     varchar(40) DEFAULT NULL,
  `status`             tinyint  not null DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `TbDescripcionTr`;
CREATE TABLE `TbDescripcionTr` (
  `IdDescripcionTr`     int not NULL primary key auto_increment,
  `detalleDescripcion`  varchar(250) DEFAULT NULL,
  `status`              tinyint  not null DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `TbtipoNegocioTr`;
CREATE TABLE `TbtipoNegocioTr` (
  `idTipoTr`          int not NULL primary key auto_increment,  
   `desTiponegocio`   varchar(40) DEFAULT NULL,
  `status`            tinyint not null DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `tbAccesibilidadTr`;
CREATE TABLE `tbAccesibilidadTr` (
  `idAccesibilidadTr`  int not NULL primary key auto_increment,
  `desAccesibilidad`   varchar(45) DEFAULT NULL,
  `status`             tinyint not null DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `tbCapacidadTr`;
CREATE TABLE `tbCapacidadTr` (
  `idCapacidadTr`  int not NULL primary key auto_increment,
  `nitDni`         varchar(15) DEFAULT NULL,
  `Id_tipoTr`      int NULL,
  `nroPisos`       int default 0,
  `NroCabanas`     int default 0,
  `NroCarpas`      int NULL,
  `Aforo_persona`  int NULL,
  `status`         tinyint not null DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

insert into `tbServiciosTr`  values(1,  'Piscina',  1); 
insert into `tbServiciosTr`  values(2,  'WiFi',  1);  
insert into `tbServiciosTr`  values(3,  'Bar',  1); 
insert into `tbServiciosTr`  values(4,  'Restaurante',  1); 

insert into `TbInstalacionesTr`  values(1,  'Gimnasio',  1);  
insert into `TbInstalacionesTr`  values(2,  'Jakuzzi',  1); 
insert into `TbInstalacionesTr`  values(3,  'Parking',  1); 
insert into `TbInstalacionesTr`  values(4,  'Baños y Duchas(camping)',  1); 

insert into `TbDescripcionTr`  values(1,  'Situada en la vía Tocaima – Viotá y está especialmente diseñada para descansar y descomunicarse del mundo exterior, gozando de una piscina cómoda, mangos y limones propios de la finca. La cabaña cuenta con las siguientes características:',  1);
insert into `TbDescripcionTr`  values(2,  'Habitacion con vista al mar amobladas',  1);
insert into `TbDescripcionTr`  values(3,  'Hermosos paisajes de Antioquia',  1);
insert into `TbDescripcionTr`  values(4,  'El Bleu Hills Glamping Llanogrande está situado en Rionegro, en la región de Antioquia, y ofrece alojamiento con aparcamiento privado gratuito y acceso a una bañera de hidromasaje.',  1);
insert into `TbDescripcionTr`  values(5,  'El Chalet Ecoturismo La Nohelia, situado en Jericó, rodeado por los cultivos de café famosos de la zona, ofrece restaurante y préstamo de bicicletas.',  1);
insert into `TbDescripcionTr`  values(6,  'El Santa Fé Hostel se encuentra a 3,8 km del parque acuático Kanaloa. El camping proporciona WiFi gratuita. El aeropuerto Olaya Herrera, el más cercano, está a 62 km del camping.',  1);
insert into `TbDescripcionTr`  values(7,  'El Aguayacanes se encuentra en San Rafael y ofrece un jardín. Guatapé se encuentra a 15 km del camping, mientras que Barbosa está a 38 km.',  1);

insert into `TbtipoNegocioTr`  values(1,  'Hotel',  1);   
insert into `TbtipoNegocioTr`  values(2,  'Cabaña',  1);    
insert into `TbtipoNegocioTr`  values(3,  'Camping',  1);   
insert into `TbtipoNegocioTr`  values(4,  'Hotel & Cabaña',  1);    
insert into `TbtipoNegocioTr`  values(5,  'Hotel & camping',  1);   
insert into `TbtipoNegocioTr`  values(6,  'Cabaña & camping',  1);    
insert into `TbtipoNegocioTr`  values(7,  'Hotel, Cabaña y camping',  1);   

insert into `tbAccesibilidadTr`  values(1,  'ascensor',  1);    
insert into `tbAccesibilidadTr`  values(2,  'escalera electrica',  1);    
insert into `tbAccesibilidadTr`  values(3,  'accesible en silla de ruedas',  1);   
insert into `tbAccesibilidadTr`  values(4,  'WC con barras de apoyo',  1);    
insert into `tbAccesibilidadTr`  values(5,  'Bañera adaptada',  1);   
insert into `tbAccesibilidadTr`  values(6,  'WC Elevado',  1);    
insert into `tbAccesibilidadTr`  values(7,  'Via acceso asfaltada',  1);    
insert into `tbAccesibilidadTr`  values(8,  'Instalacion Electrica Subterranea',  1);   
insert into `tbAccesibilidadTr`  values(9,  'Sistema Iluninacion',  1);   
insert into `tbAccesibilidadTr`  values(10, 'Abastecimiento de agua',  1);   

insert into `tbCapacidadTr`  values(1,  '11111',1,3,0,0,100,  1);
insert into `tbCapacidadTr`  values(2,  '11112',2,0,10,0,120,  1);
insert into `tbCapacidadTr`  values(3,  '11113',3,0,0,100,150,  1);
insert into `tbCapacidadTr`  values(4,  '11114',4,0,8,0,200,  1);
insert into `tbCapacidadTr`  values(5,  '11115',5,3,0,20,130,  1);
insert into `tbCapacidadTr`  values(6,  '11116',6,0,10,30,250,  1);
insert into `tbCapacidadTr`  values(7,  '11117',7,5,8,20,350,  1);

DROP TABLE IF EXISTS `Tborganizacion`;
CREATE TABLE `Tborganizacion` (
  `idOrg`                         int not NULL primary key auto_increment,
  `nitDni`                       varchar(15) DEFAULT '',
  `nroPisos`                  int DEFAULT 0,
  `IdDescripcionTr`    varchar(200) DEFAULT '',
  `IdCiudad`                  int DEFAULT 0,
  `nombOrg`                 varchar(60) DEFAULT '',
  `dirbOrg`                     varchar(50) DEFAULT '',
  `noTelf1`                     varchar(15) DEFAULT '',
  `noTelf2`                     varchar(15) DEFAULT '',
  `emailOrg`                  varchar(80) DEFAULT '',
  `idTipoTr`                   varchar(180) DEFAULT '',
  `idredsocialtr`           varchar(200) DEFAULT '',
  `nroHabXpiso`           int DEFAULT 0,
  `aforoPersonas`        int DEFAULT 0,
  `idServicioTr`             varchar(200) DEFAULT '',
  `idInstalacionTr`       varchar(200) DEFAULT '',
  `idAccesibilidadTr`  varchar(200) DEFAULT '',
  `rutaImagen`         varchar(80) DEFAULT '',
  `status`                        tinyint  not null DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

insert into `Tborganizacion`  values(1, '11111'  , 2  ,  '01-03',  39,  'Hotel numero-1'  ,'direccion del hotel-1' , '315-315-3010'  ,'320-315-2015'  ,  'correohotel-2@hotel.com'  ,  '01-02'  , '01-03-04'  , 4  , 100  ,'01-02-04'  , '02-03-04'  , '01-02-03'  ,  'dir1/imgHotel/' , 1);
insert into `Tborganizacion`  values(2, '11112'  , 1  ,  '01-04',  39,  'Hotel numero-2'  ,'direccion del hotel-2' , '315-315-3031'  ,'320-315-3031'  ,  'correohotel-3@hotel.com'  ,  '02-03'  , '01-02-05'  , 10  , 100  ,'02-04'  , '02-03'  , '03-05'  ,  'dir2/imgHotel/' , 1);
insert into `Tborganizacion`  values(3, '11113'  , 0  ,  '01-05',  39,  'Hotel numero-3'  ,'direccion del hotel-3' , '315-315-3052'  ,'320-315-4047'  ,  'correohotel-4@hotel.com'  ,  '01-04'  , '01-03-05'  , 3  , 80  ,'01-02-05'  , '02-03-05'  , '01-02-04'  ,  'dir3/imgHotel/' , 1);
insert into `Tborganizacion`  values(4, '11114'  , 2  ,  '01-06',  39,  'Hotel numero-4'  ,'direccion del hotel-4' , '315-315-3073'  ,'320-315-5063'  ,  'correohotel-5@hotel.com'  ,  '01-05'  , '01-02-06'  , 5  , 70  ,'02-05'  , '02-04'  , '03-06'  ,  'dir4/imgHotel/' , 1);
insert into `Tborganizacion`  values(5, '11115'  , 1  ,  '01-07',  39,  'Hotel numero-5'  ,'direccion del hotel-5' , '315-315-3094'  ,'320-315-6079'  ,  'correohotel-a@hotel.com'  ,  '01-06'  , '01-03-06'  , 7  , 85  ,'01-02-06'  , '02-03-06'  , '01-02-05'  ,  'dir5/imgHotel/' , 1);


DROP TABLE IF EXISTS `tbHabitacionXpiso`;
CREATE TABLE `tbHabitacionXpiso` (
  `idppal`            int not NULL primary key auto_increment,
  `idOrg`             int not NULL,
  `nroPisoHab`        varchar(200) DEFAULT '',
  `areaHabitacion`    int DEFAULT 0,
  `idMobiliarioTr`    varchar(200) DEFAULT '',
  `cantidad`          varchar(200) DEFAULT '',
  `tbAccesibilidadTr` varchar(200) DEFAULT '',
  `rutaImagen`        varchar(100) DEFAULT '',
  `IdDescripcionTr`   varchar(200) DEFAULT '',
  `status`            tinyint  not null DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

insert into `tbHabitacionXpiso`  values(1  ,  1  ,  '1-01'  ,  24  ,  '01-02-03-04-06-09-11' ,  '1-1-1-1-3-2-1'  ,  '04-05-06'  ,  'dir1-01/imgHab/'  ,  '01-02-03'  ,  1);
insert into `tbHabitacionXpiso`  values(2  ,  1  ,  '1-02'  ,  26  ,  '02-03-04-06-09-11'    ,  '1-1-1-1-3-2-2'  ,  '04-06'  ,  'dir1-02/imgHab/'  ,  '01-03-04'  ,  1);
insert into `tbHabitacionXpiso`  values(3  ,  1  ,  '1-03'  ,  30  ,  '01-03-04-06-09-11'    ,  '1-1-1-1-3-2-3'  ,  '04-05-07'  ,  'dir1-03/imgHab/'  ,  '01-02-05'  ,  1);
insert into `tbHabitacionXpiso`  values(4  ,  1  ,  '1-04'  ,  24  ,  '01-02-03-04-09-11'    ,  '1-1-1-1-3-2-4'  ,  '04-07'  ,  'dir1-04/imgHab/'  ,  '01-02-06'  ,  1);
insert into `tbHabitacionXpiso`  values(5  ,  1  ,  '2-01'  ,  26  ,  '01-03-04-05-06-09'    ,  '1-1-1-1-3-2-5'  ,  '04-05-08'  ,  'dir2-01/imgHab/'  ,  '01-02-07'  ,  1);
insert into `tbHabitacionXpiso`  values(6  ,  1  ,  '2-02'  ,  30  ,  '01-02-03-04-06-09'    ,  '1-1-1-1-3-2-6'  ,  '04-08'  ,  'dir2-02/imgHab/'  ,  '01-02-03'  ,  1);
insert into `tbHabitacionXpiso`  values(7  ,  1  ,  '2-03'  ,  24  ,  '01-02-03-04-06-10'    ,  '1-1-1-1-3-2-7'  ,  '04-05-09'  ,  'dir2-03/imgHab/'  ,  '01-03-04'  ,  1);
insert into `tbHabitacionXpiso`  values(8  ,  1  ,  '2-04'  ,  26  ,  '01-02-03-04-06-10'    ,  '1-1-1-1-3-2-8'  ,  '04-09'  ,  'dir2-04/imgHab/'  ,  '01-02-05'  ,  1);
insert into `tbHabitacionXpiso`  values(9  ,  2  ,  '1-01'  ,  30  ,  '01-03-04-05'          ,  '2-1-1-1'  ,  '04-05-10'  ,  'dir1-01/imgHab/'  ,  '01-02-06'  ,  1);
