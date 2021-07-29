
USE `basehotel1`;
-- Nuevas tablas 
-- lo nuevo de manolo
-- tablas transversales -------
DROP TABLE IF EXISTS `tbServiciosTr`;
CREATE TABLE `tbServiciosTr` (
  `idServicioTr`   int not NULL primary key auto_increment,
  `descServicio`   varchar(40) DEFAULT NULL,
  `status`         tinyint  not null DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `TbInstalacionesTr`;
CREATE TABLE `TbInstalacionesTr` (
  `idInstalacionTr`    int not NULL primary key auto_increment,
  `desInstalacion`     varchar(50) DEFAULT NULL,
  `status`             tinyint  not null DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `TbDescripcionTr`;
CREATE TABLE `TbDescripcionTr` (
  `IdDescripcionTr`         int not NULL primary key auto_increment,
  `detalleDescripcion`  varchar(250) DEFAULT NULL,
  `status`                            tinyint  not null DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `TbtipoNegocioTr`;
CREATE TABLE `TbtipoNegocioTr` (
  `idTipoTr`         int not NULL primary key auto_increment,  
  `desTiponegocio`   varchar(40) DEFAULT NULL,
  `status`           tinyint not null DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `tbAccesibilidadTr`;
CREATE TABLE `tbAccesibilidadTr` (
  `idAccesibilidadTr`  int not NULL primary key auto_increment,
  `desAccesibilidad`   varchar(25) DEFAULT NULL,
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

-- tabla Organizacion --
DROP TABLE IF EXISTS `Tborganizacion`;
CREATE TABLE `Tborganizacion` (
  `idOrg`                         int not NULL primary key auto_increment,
  `nitDni`                       varchar(15) DEFAULT '',
  `nroPisos`                  int DEFAULT 0,
  `desGeneral`           varchar(250) DEFAULT '',
  `IdCiudad`                  int DEFAULT 0,
  `nombOrg`                 varchar(60) DEFAULT '',
  `dirbOrg`                     varchar(50) DEFAULT '',
  `noTelf1`                     varchar(15) DEFAULT '',
  `noTelf2`                     varchar(15) DEFAULT '',
  `emailOrg`                  varchar(100) DEFAULT '',
  `idTipoTr`                   varchar(180) DEFAULT '',
  `idredsocialtr`           varchar(200) DEFAULT '',
  `nroHabXpiso`           int DEFAULT 0,
  `aforoPersonas`        int DEFAULT 0,
  `idServicioTr`             varchar(250) DEFAULT '',
  `idInstalacionTr`       varchar(250) DEFAULT '',
  `idAccesibilidadTr`  varchar(250) DEFAULT '',
  `rutaImagen`              varchar(100) DEFAULT '',
  `status`                        tinyint  not null DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- Se llenan las tablas
insert into `tbServiciosTr` values(1,  'Piscina',  1);   
insert into `tbServiciosTr` values(2,  'WiFi',  1);    
insert into `tbServiciosTr` values(3,  'Bar',  1);   
insert into `tbServiciosTr` values(4,  'Restaurante',  1);   
insert into `tbServiciosTr` values(5,  'Parqueadero',  1);   
insert into `tbServiciosTr` values(6,  'Paseo millonario',  1);    
insert into `tbServiciosTr` values(7,  'Zonas fumadores',  1);   
insert into `tbServiciosTr` values(8,  'servicio-1-2-3-con-3035 abc 65454',  1);   
insert into `tbServiciosTr` values(9,  'servicio-1-con-2525 abc 25002',  1);   
insert into `tbServiciosTr` values(10,  'servicio-1-con-4651 abc 82168',  1);    
insert into `tbServiciosTr` values(11,  'servicio-1-2-3-con-3837 abc 70062',  1);    
insert into `tbServiciosTr` values(12,  'servicio-1-con-2405 abc 52542',  1);    
insert into `tbServiciosTr` values(13,  'servicio-1-con-2942 abc 49092',  1);    
insert into `tbServiciosTr` values(14,  'servicio-1-con-4671 abc 64280',  1);    
insert into `tbServiciosTr` values(15,  'servicio-1-2-3-con-1769 abc 41898',  1);    
insert into `tbServiciosTr` values(16,  'servicio-1-con-1791 abc 36463',  1);    
insert into `tbServiciosTr` values(17,  'Servicio-1-2-con-1788 abc 84120',  1);    
insert into `tbServiciosTr` values(18,  'Servicio-1-2-con-4964 abc 26296',  1);    
insert into `tbServiciosTr` values(19,  'servicio-1-con-4852 abc 84673',  1);    
insert into `tbServiciosTr` values(20,  'servicio-1-con-4788 abc 30457',  1);    
insert into `tbServiciosTr` values(21,  'servicio-1-con-3767 abc 13342',  1);    

insert into `TbInstalacionesTr`  values(1,  'Gimnasio',  1);    
insert into `TbInstalacionesTr`  values(2,  'Jakuzzi',  1);   
insert into `TbInstalacionesTr`  values(3,  'Parking',  1);   
insert into `TbInstalacionesTr`  values(4,  'Baños y Duchas(camping)',  1);   
insert into `TbInstalacionesTr`  values(5,  'Pileta tonificante',  1);    
insert into `TbInstalacionesTr`  values(6,  'Ducha escocesa',  1);    
insert into `TbInstalacionesTr`  values(7,  'Sauna finlandesa',  1);    
insert into `TbInstalacionesTr`  values(8,  'Cabinas de tratamientos y masajes',  1);   
insert into `TbInstalacionesTr`  values(9,  'Baño turco',  1);    
insert into `TbInstalacionesTr`  values(10,  'Spa propio',  1);   
insert into `TbInstalacionesTr`  values(11,  'Cajeros automaticos',  1);    
insert into `TbInstalacionesTr`  values(12,  'Servicio médico externo, primeros auxilios',  1);   
insert into `TbInstalacionesTr`  values(13,  'Servicio de transfer',  1);   
insert into `TbInstalacionesTr`  values(14,  'Servicio de habitaciones',  1);   
insert into `TbInstalacionesTr`  values(15,  'Servicio de lavandería',  1);   
insert into `TbInstalacionesTr`  values(16,  'Servicios de teleconferencia disponibles',  1);   
insert into `TbInstalacionesTr`  values(17,  'Salón de juegos',  1);    
insert into `TbInstalacionesTr`  values(18,  'Estanque de Peces',  1);    

insert into `TbDescripcionTr`  values(1,'Situada en la vía Tocaima – Viotá y está especialmente diseñada para descansar y descomunicarse del mundo exterior, gozando de una piscina cómoda, mangos y limones propios de la finca. La cabaña cuenta con las siguientes características:', 1);                  
insert into `TbDescripcionTr`  values(2,'Habitacion con vista al mar amobladas', 1);                  
insert into `TbDescripcionTr`  values(3,'Hermosos paisajes de Antioquia', 1);                 
insert into `TbDescripcionTr`  values(4,'El Bleu Hills Glamping Llanogrande está situado en Rionegro, en la región de Antioquia, y ofrece alojamiento con aparcamiento privado gratuito y acceso a una bañera de hidromasaje.', 1);                 
insert into `TbDescripcionTr`  values(5,'El Chalet Ecoturismo La Nohelia, situado en Jericó, rodeado por los cultivos de café famosos de la zona, ofrece restaurante y préstamo de bicicletas.', 1);                  
insert into `TbDescripcionTr`  values(6,'El Santa Fé Hostel se encuentra a 3,8 km del parque acuático Kanaloa. El camping proporciona WiFi gratuita. El aeropuerto Olaya Herrera, el más cercano, está a 62 km del camping.', 1);                 
insert into `TbDescripcionTr`  values(7,'El Aguayacanes se encuentra en San Rafael y ofrece un jardín. Guatapé se encuentra a 15 km del camping, mientras que Barbosa está a 38 km.', 1);                 
insert into `TbDescripcionTr`  values(8,'Colombia cuenta con un sistema de Parques Nacionales Naturales que permite al visitante apreciar la majestuosidad de nuestra geografía, así como la riqueza de nuestra fauna y flora. Conoce algunas curiosidades de Colombia ', 1);                 
insert into `TbDescripcionTr`  values(9,' El primer Parque Nacional Natural de Colombia fue La Cueva de los Guácharos, declarado el 9 de noviembre de 1960. Por esa razón, en esta fecha se celebra el Día de los Parques Naturales en nuestro país. ', 1);                 
insert into `TbDescripcionTr`  values(10,'El Parque Nacional Natural Uramba Bahía Málaga.  se ubica en las costas del pacífico colombiano y es reconocido internacionalmente por ser un privilegiado escenario para apreciar la migración de ballenas jorobadas', 1);                 
insert into `TbDescripcionTr`  values(11,'El Parque Las Orquídeas se presenta como uno de los lugares ideales para observar nuestra diversidad de flora y fauna.', 1);                  
insert into `TbDescripcionTr`  values(12,'Las 15.000 hectáreas del Parque Natural Nacional Tayrona ofrecen al visitante una paradisíaca combinación de naturaleza, historia precolombina, aventura y relajación.', 1);                  
insert into `TbDescripcionTr`  values(13,'La Playa La Aguada, ubicada en el Parque Natural Utría, es la primera playa de Colombia con certificación en turismo sostenible.', 1);                  
insert into `TbDescripcionTr`  values(14,'Colombia es uno de los países con más biodiversidad en el mundo, los colores, la fauna y la flora que lo caracterizan son motivo de orgullo.', 1);                  
insert into `TbDescripcionTr`  values(15,'Parque Nacional Natural Amacayacu,  en el Amazonas, con más de 40 años de historia representa el 40% del Trapecio Amazónico y debido a su ecosistema de selva húmeda tropical cálida y bosques inundables', 1);                 
insert into `TbDescripcionTr`  values(16,'Parque Nacional Natural Farallones de Cali, son formaciones rocosas que se encuentran en la Cordillera Occidental de los Andes. Si tu elección es la vertiente oriental, la recomendación es ir en enero y marzo y luego de julio a agosto.', 1);                 
insert into `TbDescripcionTr`  values(17,'Santuario de Fauna y Flora Otún Quimbaya, Ubicado en el flanco occidental de la Cordillera Central, en el departamento de Risaralda, el Santuario de Fauna y Flora Otún Quimbaya es un destino ecoturístico del Paisaje Cultural Cafetero.', 1);                  
insert into `TbDescripcionTr`  values(18,'Parque Nacional Natural Tatamá,  podrás conocer tres importantes páramos colombianos, el Tatamá, el Frontino y el Duende, sin duda será una experiencia invaluable que te hará disfrutar de la biodiversidad colombiana.', 1);
insert into `TbDescripcionTr`  values(19,'Reserva Natural Cañón del Río Claro Ubicado en Antioquia, la biodiversidad de esta región es conocida como la cuenca media del Río Magdalena, además está situada en el piedemonte oriental de la Cordillera Central colombiana.', 1);
insert into `TbDescripcionTr`  values(20,'Parque Nacional Natural Las Orquídeas,  sus variados paisajes, además de una gran biodiversidad de ecosistemas, abundantes orquídeas y otras especies asociadas.', 1);

insert into `TbtipoNegocioTr`  values(1,  'Hotel',  1);   
insert into `TbtipoNegocioTr`  values(2,  'Cabaña',  1);    
insert into `TbtipoNegocioTr`  values(3,  'Camping',  1);   
insert into `TbtipoNegocioTr`  values(4,  'Hotel & Cabaña',  1);    
insert into `TbtipoNegocioTr`  values(5,  'Hotel & camping',  1);   
insert into `TbtipoNegocioTr`  values(6,  'Cabaña & camping',  1);    
insert into `TbtipoNegocioTr`  values(7,  'Hotel, Cabaña y camping',  1);   

insert into `tbAccesibilidadTr`  values(1,  'ascensor',  1);    
insert into `tbAccesibilidadTr`  values(2,  'escalera electrica',  1);    
insert into `tbAccesibilidadTr`  values(3,  ' accesible en silla de ruedas',  1);   
insert into `tbAccesibilidadTr`  values(4,  'WC con barras de apoyo',  1);    
insert into `tbAccesibilidadTr`  values(5,  'Bañera adaptada',  1);   
insert into `tbAccesibilidadTr`  values(6,  'WC Elevado',  1);    
insert into `tbAccesibilidadTr`  values(7,  'Via acceso asfaltada',  1);    
insert into `tbAccesibilidadTr`  values(8,  'Instalacion Electrica Subterranea',  1);   
insert into `tbAccesibilidadTr`  values(9,  'Sistema Iluninacion',  1);   
insert into `tbAccesibilidadTr`  values(10,  'Abastecimiento de agua',  1);   
insert into `tbAccesibilidadTr`  values(11,  'Acceso con-ingreso-KL-3',  1);    
insert into `tbAccesibilidadTr`  values(12,  'Acceso con-pasadizo-ST-1',  1);   
insert into `tbAccesibilidadTr`  values(13,  'Acceso con-acometida-MN-3',  1);    
insert into `tbAccesibilidadTr`  values(14,  'Acceso con-garaje-GH-3',  1);   
insert into `tbAccesibilidadTr`  values(15,  'Acceso con-camino-ST-2',  1);   
insert into `tbAccesibilidadTr`  values(16,  'Acceso con-paso-TU-4',  1);   
insert into `tbAccesibilidadTr`  values(17,  'Acceso con-acometida-IJ-4',  1);    
insert into `tbAccesibilidadTr`  values(18,  'Acceso con-camino-WX-4',  1);   
insert into `tbAccesibilidadTr`  values(19,  'Acceso con-camino-DE-5',  1);   
insert into `tbAccesibilidadTr`  values(20,  'Acceso con-ingreso-KL-5',  1);    
insert into `tbAccesibilidadTr`  values(21,  'Acceso con-camino-VW-4',  1);   
insert into `tbAccesibilidadTr`  values(22,  'Acceso con-garaje-NO-4',  1);   
insert into `tbAccesibilidadTr`  values(23,  'Acceso con-entrada-QR-2',  1);    
insert into `tbAccesibilidadTr`  values(24,  'Acceso con-ingreso-ST-2',  1);    

insert into `tbCapacidadTr`  values(1,  '11111',1,3,0,0,100,  1);
insert into `tbCapacidadTr`  values(2,  '11112',2,0,10,0,120,  1);
insert into `tbCapacidadTr`  values(3,  '11113',3,0,0,100,150,  1);
insert into `tbCapacidadTr`  values(4,  '11114',4,0,8,0,200,  1);
insert into `tbCapacidadTr`  values(5,  '11115',5,3,0,20,130,  1);
insert into `tbCapacidadTr`  values(6,  '11116',6,0,10,30,250,  1);
insert into `tbCapacidadTr`  values(7,  '11117',7,5,8,20,350,  1);

-- datos tabla organizacion -- 
insert into `Tborganizacion`  values(1, '11111'  , 2  ,  'Situada en la vía Tocaima – Viotá y está especialmente diseñada para descansar y descomunicarse del mundo exterior, gozando de una piscina cómoda, mangos y limones propios de la finca. La cabaña cuenta con las siguientes características:',  39,  'Hotel numero-1'  ,'direccion del hotel-1' , '315-315-3010'  ,'320-315-2015'  ,  'correohotelnumero116@correo.com'  ,  '6-1'  , '1-2-3-4-5'  , 10  , 119  ,'1-4-20-7-10-12-19'  , '9-10-11-6-14'  , '24-20-10-7-19'  ,  'dir1/imgHotel/' , 1);
insert into `Tborganizacion`  values(2, '11112'  , 1  ,  'Habitacion con vista al mar amobladas',  39,  'Hotel numero-2'  ,'direccion del hotel-2' , '315-315-3031'  ,'320-315-2231'  ,  'correohotelnumero132@correo.com'  ,  '1-6'  , '1-2-3-4-5'  , 2  , 55  ,'2-10-17-11-9-3-8'  , '9-6-11-14'  , '16-6-5-20-19'  ,  'dir2/imgHotel/' , 1);
insert into `Tborganizacion`  values(3, '11113'  , 1  ,  'Hermosos paisajes de Antioquia',  39,  'Hotel numero-3'  ,'direccion del hotel-3' , '315-315-3052'  ,'320-315-2447'  ,  'correohotelnumero172@correo.com'  ,  '1-5'  , '1-2-3-4-5'  , 1  , 89  ,'3-4-6-11-15-5'  , '8-6-9-12-14'  , '17-2-21-15-14'  ,  'dir3/imgHotel/' , 1);
insert into `Tborganizacion`  values(4, '11114'  , 2  ,  'El Bleu Hills Glamping Llanogrande está situado en Rionegro, en la región de Antioquia, y ofrece alojamiento con aparcamiento privado gratuito y acceso a una bañera de hidromasaje.',  39,  'Hotel numero-4'  ,'direccion del hotel-4' , '315-315-3073'  ,'320-315-2663'  ,  'correohotelnumero153@correo.com'  ,  '2-1'  , '1-2-3-4-5'  , 8  , 110  ,'4-2-18-20-8-9-14'  , '2-10-5-9'  , '15-9-13-4-3'  ,  'dir4/imgHotel/' , 1);
insert into `Tborganizacion`  values(5, '11115'  , 1  ,  'El Chalet Ecoturismo La Nohelia, situado en Jericó, rodeado por los cultivos de café famosos de la zona, ofrece restaurante y préstamo de bicicletas.',  39,  'Hotel numero-5'  ,'direccion del hotel-5' , '315-315-3094'  ,'320-315-2879'  ,  'correohotelnumero166@correo.com'  ,  '5-4'  , '1-2-3-4-5'  , 2  , 51  ,'5-20-10-4-19-6-13'  , '8-14-2-1-13'  , '15-8-19-3-22'  ,  'dir5/imgHotel/' , 1);
insert into `Tborganizacion`  values(6, '11116'  , 2  ,  'El Santa Fé Hostel se encuentra a 3,8 km del parque acuático Kanaloa. El camping proporciona WiFi gratuita. El aeropuerto Olaya Herrera, el más cercano, está a 62 km del camping.',  39,  'Hotel numero-6'  ,'direccion del hotel-6' , '315-315-3115'  ,'320-315-3095'  ,  'correohotelnumero160@correo.com'  ,  '1-5'  , '1-2-3-4-5'  , 4  , 113  ,'6-4-13-14-10-20-19'  , '2-12-15-13-4'  , '15-2-3-18-13'  ,  'dir6/imgHotel/' , 1);
insert into `Tborganizacion`  values(7, '11117'  , 1  ,  'El Aguayacanes se encuentra en San Rafael y ofrece un jardín. Guatapé se encuentra a 15 km del camping, mientras que Barbosa está a 38 km.',  39,  'Hotel numero-7'  ,'direccion del hotel-7' , '315-315-3136'  ,'320-315-3311'  ,  'correohotelnumero171@correo.com'  ,  '2-6'  , '1-2-3-4-5'  , 3  , 81  ,'7-19-12-16-13-3-10'  , '13-12-14-7'  , '7-10-14-6'  ,  'dir7/imgHotel/' , 1);
insert into `Tborganizacion`  values(8, '11118'  , 1  ,  'Colombia cuenta con un sistema de Parques Nacionales Naturales que permite al visitante apreciar la majestuosidad de nuestra geografía, así como la riqueza de nuestra fauna y flora. Conoce algunas curiosidades de Colombia ',  39,  'Hotel numero-8'  ,'direccion del hotel-8' , '315-315-3157'  ,'320-315-3527'  ,  'correohotelnumero162@correo.com'  ,  '2-6'  , '1-2-3-4-5'  , 5  , 85  ,'8-19-5-18-12-6-13'  , '3-14-15-13-6'  , '17-22-4-15'  ,  'dir8/imgHotel/' , 1);
insert into `Tborganizacion`  values(9, '11119'  , 3  ,  ' El primer Parque Nacional Natural de Colombia fue La Cueva de los Guácharos, declarado el 9 de noviembre de 1960. Por esa razón, en esta fecha se celebra el Día de los Parques Naturales en nuestro país. ',  39,  'Hotel numero-9'  ,'direccion del hotel-9' , '315-315-3178'  ,'320-315-3743'  ,  'correohotelnumero110@correo.com'  ,  '6'  , '1-2-3-4-5'  , 4  , 214  ,'9-3-16-1-4-7-10'  , '4-13-14-8-1'  , '21-1-4-9-14'  ,  'dir9/imgHotel/' , 1);
insert into `Tborganizacion`  values(10, '11120'  , 2  ,  'El Parque Nacional Natural Uramba Bahía Málaga.  se ubica en las costas del pacífico colombiano y es reconocido internacionalmente por ser un privilegiado escenario para apreciar la migración de ballenas jorobadas',  39,  'Hotel numero-10'  ,'direccion del hotel-10' , '315-315-3199'  ,'320-315-3959'  ,  'correohotelnumero181@correo.com'  ,  '2-1'  , '1-2-3-4-5'  , 3  , 106  ,'10-9-7-1-17-8'  , '7-11-15-11'  , '10-11-22-1-8'  ,  'dir10/imgHotel/' , 1);
insert into `Tborganizacion`  values(11, '11121'  , 2  ,  'El Parque Las Orquídeas se presenta como uno de los lugares ideales para observar nuestra diversidad de flora y fauna.',  39,  'Hotel numero-11'  ,'direccion del hotel-11' , '315-315-3220'  ,'320-315-4175'  ,  'correohotelnumero143@correo.com'  ,  '5-4'  , '1-2-3-4-5'  , 5  , 111  ,'11-3-14-9-15-2'  , '1-3-13-10-4'  , '14-22-11-18-24'  ,  'dir11/imgHotel/' , 1);
insert into `Tborganizacion`  values(12, '11122'  , 2  ,  'Las 15.000 hectáreas del Parque Natural Nacional Tayrona ofrecen al visitante una paradisíaca combinación de naturaleza, historia precolombina, aventura y relajación.',  39,  'Hotel numero-12'  ,'direccion del hotel-12' , '315-315-3241'  ,'320-315-4391'  ,  'correohotelnumero103@correo.com'  ,  '6-1'  , '1-2-3-4-5'  , 10  , 102  ,'12-17-20-2-15-1-11'  , '12-2-6-9-14'  , '10-4-2-3-12'  ,  'dir12/imgHotel/' , 1);
insert into `Tborganizacion`  values(13, '11123'  , 2  ,  'La Playa La Aguada, ubicada en el Parque Natural Utría, es la primera playa de Colombia con certificación en turismo sostenible.',  39,  'Hotel numero-13'  ,'direccion del hotel-13' , '315-315-3262'  ,'320-315-4607'  ,  'correohotelnumero138@correo.com'  ,  '5-4'  , '1-2-3-4-5'  , 4  , 112  ,'13-8-2-17-1-10-14'  , '15-7-1-12-2'  , '10-13-7-21-11'  ,  'dir13/imgHotel/' , 1);
insert into `Tborganizacion`  values(14, '11124'  , 1  ,  'Colombia es uno de los países con más biodiversidad en el mundo, los colores, la fauna y la flora que lo caracterizan son motivo de orgullo.',  39,  'Hotel numero-14'  ,'direccion del hotel-14' , '315-315-3283'  ,'320-315-4823'  ,  'correohotelnumero152@correo.com'  ,  '3-6'  , '1-2-3-4-5'  , 2  , 62  ,'14-5-16-19-11-1-15'  , '15-7-11-4'  , '4-12-18-16-14'  ,  'dir14/imgHotel/' , 1);
insert into `Tborganizacion`  values(15, '11125'  , 1  ,  'Parque Nacional Natural Amacayacu,  en el Amazonas, con más de 40 años de historia representa el 40% del Trapecio Amazónico y debido a su ecosistema de selva húmeda tropical cálida y bosques inundables',  39,  'Hotel numero-15'  ,'direccion del hotel-15' , '315-315-3304'  ,'320-315-5039'  ,  'correohotelnumero151@correo.com'  ,  '3-6'  , '1-2-3-4-5'  , 3  , 70  ,'15-10-6-13-17-12'  , '8-9-1-10-12'  , '2-8-21-1-12'  ,  'dir15/imgHotel/' , 1);
insert into `Tborganizacion`  values(16, '11126'  , 2  ,  'Parque Nacional Natural Farallones de Cali, son formaciones rocosas que se encuentran en la Cordillera Occidental de los Andes. Si tu elección es la vertiente oriental, la recomendación es ir en enero y marzo y luego de julio a agosto.',  39,  'Hotel numero-16'  ,'direccion del hotel-16' , '315-315-3325'  ,'320-315-5255'  ,  'correohotelnumero103@correo.com'  ,  '1-5'  , '1-2-3-4-5'  , 9  , 102  ,'16-9-12-2-14-1'  , '11-9-7-10-5'  , '7-22-19-4-5'  ,  'dir16/imgHotel/' , 1);
insert into `Tborganizacion`  values(17, '11127'  , 1  ,  'Santuario de Fauna y Flora Otún Quimbaya, Ubicado en el flanco occidental de la Cordillera Central, en el departamento de Risaralda, el Santuario de Fauna y Flora Otún Quimbaya es un destino ecoturístico del Paisaje Cultural Cafetero.',  39,  'Hotel numero-17'  ,'direccion del hotel-17' , '315-315-3346'  ,'320-315-5471'  ,  'correohotelnumero166@correo.com'  ,  '6-1'  , '1-2-3-4-5'  , 1  , 56  ,'17-7-16-18-3-10'  , '7-10-12-5-14'  , '11-22-14-6-15'  ,  'dir17/imgHotel/' , 1);
insert into `Tborganizacion`  values(18, '11128'  , 3  ,  'Parque Nacional Natural Tatamá,  podrás conocer tres importantes páramos colombianos, el Tatamá, el Frontino y el Duende, sin duda será una experiencia invaluable que te hará disfrutar de la biodiversidad colombiana.',  39,  'Hotel numero-18'  ,'direccion del hotel-18' , '315-315-3367'  ,'320-315-5687'  ,  'correohotelnumero110@correo.com'  ,  '1-5'  , '1-2-3-4-5'  , 2  , 206  ,'18-15-9-14-10-3-12'  , '15-6-8-2-11'  , '5-15-13-24-23'  ,  'dir18/imgHotel/' , 1);
"insert into `Tborganizacion`  values(19, '11129'  , 2  ,  'Reserva Natural Cañón del Río Claro
Ubicado en Antioquia, la biodiversidad de esta región es conocida como la cuenca media del Río Magdalena, además está situada en el piedemonte oriental de la Cordillera Central colombiana.',  39,  'Hotel numero-19'  ,'direccion del hotel-19' , '315-315-3388'  ,'320-315-5903'  ,  'correohotelnumero196@correo.com'  ,  '3-4'  , '1-2-3-4-5'  , 7  , 98  ,'19-11-2-3-4-7-10'  , '4-13-14-1-12'  , '2-23-8-20-18'  ,  'dir19/imgHotel/' , 1);"
insert into `Tborganizacion`  values(20, '11130'  , 1  ,  'Parque Nacional Natural Las Orquídeas,  sus variados paisajes, además de una gran biodiversidad de ecosistemas, abundantes orquídeas y otras especies asociadas.',  39,  'Hotel numero-20'  ,'direccion del hotel-20' , '315-315-3409'  ,'320-315-6119'  ,  'correohotelnumero153@correo.com'  ,  '2-4'  , '1-2-3-4-5'  , 5  , 54  ,'20-12-7-5-4-18'  , '14-10-3-5-15'  , '20-18-14-3'  ,  'dir20/imgHotel/' , 1);
insert into `Tborganizacion`  values(21, '11131'  , 3  ,  'Situada en la vía Tocaima – Viotá y está especialmente diseñada para descansar y descomunicarse del mundo exterior, gozando de una piscina cómoda, mangos y limones propios de la finca. La cabaña cuenta con las siguientes características:',  39,  'Hotel numero-21'  ,'direccion del hotel-21' , '315-315-3410'  ,'320-315-6120'  ,  'correohotelnumero165@correo.com'  ,  '3-6'  , '1-2-3-4-5'  , 6  , 189  ,'5-16-20-15-21'  , '14-10-3-5-16'  , '20-18-14-4'  ,  'dir21/imgHotel/' , 1);
insert into `Tborganizacion`  values(22, '11132'  , 1  ,  'Habitacion con vista al mar amobladas',  39,  'Hotel numero-22'  ,'direccion del hotel-22' , '315-315-3411'  ,'320-315-6121'  ,  'correohotelnumero157@correo.com'  ,  '3-5'  , '1-2-3-4-5'  , 1  , 69  ,'2-10-19-16-17'  , '14-10-3-5-17'  , '20-18-14-5'  ,  'dir22/imgHotel/' , 1);
insert into `Tborganizacion`  values(23, '11133'  , 2  ,  'Hermosos paisajes de Antioquia',  39,  'Hotel numero-23'  ,'direccion del hotel-23' , '315-315-3412'  ,'320-315-6122'  ,  'correohotelnumero170@correo.com'  ,  '1-4'  , '1-2-3-4-5'  , 4  , 114  ,'3-16-19-12-21'  , '14-10-3-5-18'  , '20-18-14-6'  ,  'dir23/imgHotel/' , 1);
insert into `Tborganizacion`  values(24, '11134'  , 2  ,  'El Bleu Hills Glamping Llanogrande está situado en Rionegro, en la región de Antioquia, y ofrece alojamiento con aparcamiento privado gratuito y acceso a una bañera de hidromasaje.',  39,  'Hotel numero-24'  ,'direccion del hotel-24' , '315-315-3413'  ,'320-315-6123'  ,  'correohotelnumero164@correo.com'  ,  '1-4'  , '1-2-3-4-5'  , 10  , 117  ,'5-18-21-14-1'  , '14-10-3-5-19'  , '20-18-14-7'  ,  'dir24/imgHotel/' , 1);
insert into `Tborganizacion`  values(25, '11135'  , 1  ,  'El Chalet Ecoturismo La Nohelia, situado en Jericó, rodeado por los cultivos de café famosos de la zona, ofrece restaurante y préstamo de bicicletas.',  39,  'Hotel numero-25'  ,'direccion del hotel-25' , '315-315-3414'  ,'320-315-6124'  ,  'correohotelnumero126@correo.com'  ,  '1-5'  , '1-2-3-4-5'  , 1  , 90  ,'8-17-18-15-2'  , '14-10-3-5-20'  , '20-18-14-8'  ,  'dir25/imgHotel/' , 1);
insert into `Tborganizacion`  values(26, '11136'  , 3  ,  'El Santa Fé Hostel se encuentra a 3,8 km del parque acuático Kanaloa. El camping proporciona WiFi gratuita. El aeropuerto Olaya Herrera, el más cercano, está a 62 km del camping.',  39,  'Hotel numero-26'  ,'direccion del hotel-26' , '315-315-3415'  ,'320-315-6125'  ,  'correohotelnumero182@correo.com'  ,  '3-4'  , '1-2-3-4-5'  , 1  , 138  ,'3-12-19-15-20'  , '14-10-3-5-21'  , '20-18-14-9'  ,  'dir26/imgHotel/' , 1);
insert into `Tborganizacion`  values(27, '11137'  , 3  ,  'El Aguayacanes se encuentra en San Rafael y ofrece un jardín. Guatapé se encuentra a 15 km del camping, mientras que Barbosa está a 38 km.',  39,  'Hotel numero-27'  ,'direccion del hotel-27' , '315-315-3416'  ,'320-315-6126'  ,  'correohotelnumero161@correo.com'  ,  '2-6'  , '1-2-3-4-5'  , 7  , 166  ,'4-13-21-14-17'  , '14-10-3-5-22'  , '20-18-14-10'  ,  'dir27/imgHotel/' , 1);
insert into `Tborganizacion`  values(28, '11138'  , 1  ,  'Colombia cuenta con un sistema de Parques Nacionales Naturales que permite al visitante apreciar la majestuosidad de nuestra geografía, así como la riqueza de nuestra fauna y flora. Conoce algunas curiosidades de Colombia ',  39,  'Hotel numero-28'  ,'direccion del hotel-28' , '315-315-3417'  ,'320-315-6127'  ,  'correohotelnumero152@correo.com'  ,  '3-5'  , '1-2-3-4-5'  , 1  , 76  ,'5-18-2-17-1'  , '14-10-3-5-23'  , '20-18-14-11'  ,  'dir28/imgHotel/' , 1);
insert into `Tborganizacion`  values(29, '11139'  , 1  ,  ' El primer Parque Nacional Natural de Colombia fue La Cueva de los Guácharos, declarado el 9 de noviembre de 1960. Por esa razón, en esta fecha se celebra el Día de los Parques Naturales en nuestro país. ',  39,  'Hotel numero-29'  ,'direccion del hotel-29' , '315-315-3418'  ,'320-315-6128'  ,  'correohotelnumero196@correo.com'  ,  '1-4'  , '1-2-3-4-5'  , 2  , 79  ,'2-14-21-15-18'  , '14-10-3-5-24'  , '20-18-14-12'  ,  'dir29/imgHotel/' , 1);
insert into `Tborganizacion`  values(30, '11140'  , 3  ,  'El Parque Nacional Natural Uramba Bahía Málaga.  se ubica en las costas del pacífico colombiano y es reconocido internacionalmente por ser un privilegiado escenario para apreciar la migración de ballenas jorobadas',  39,  'Hotel numero-30'  ,'direccion del hotel-30' , '315-315-3419'  ,'320-315-6129'  ,  'correohotelnumero174@correo.com'  ,  '2-4'  , '1-2-3-4-5'  , 1  , 229  ,'7-16-19-11-18'  , '14-10-3-5-25'  , '20-18-14-13'  ,  'dir30/imgHotel/' , 1);
insert into `Tborganizacion`  values(31, '11141'  , 2  ,  'El Parque Las Orquídeas se presenta como uno de los lugares ideales para observar nuestra diversidad de flora y fauna.',  39,  'Hotel numero-31'  ,'direccion del hotel-31' , '315-315-3420'  ,'320-315-6130'  ,  'correohotelnumero130@correo.com'  ,  '3-6'  , '1-2-3-4-5'  , 4  , 95  ,'1-13-18-15-21'  , '14-10-3-5-26'  , '20-18-14-14'  ,  'dir31/imgHotel/' , 1);
insert into `Tborganizacion`  values(32, '11142'  , 1  ,  'Las 15.000 hectáreas del Parque Natural Nacional Tayrona ofrecen al visitante una paradisíaca combinación de naturaleza, historia precolombina, aventura y relajación.',  39,  'Hotel numero-32'  ,'direccion del hotel-32' , '315-315-3421'  ,'320-315-6131'  ,  'correohotelnumero188@correo.com'  ,  '3-4'  , '1-2-3-4-5'  , 1  , 74  ,'8-15-18-2-21'  , '14-10-3-5-27'  , '20-18-14-15'  ,  'dir32/imgHotel/' , 1);
insert into `Tborganizacion`  values(33, '11143'  , 3  ,  'La Playa La Aguada, ubicada en el Parque Natural Utría, es la primera playa de Colombia con certificación en turismo sostenible.',  39,  'Hotel numero-33'  ,'direccion del hotel-33' , '315-315-3422'  ,'320-315-6132'  ,  'correohotelnumero138@correo.com'  ,  '1-5'  , '1-2-3-4-5'  , 5  , 175  ,'3-18-20-13-1'  , '14-10-3-5-28'  , '20-18-14-16'  ,  'dir33/imgHotel/' , 1);
insert into `Tborganizacion`  values(34, '11144'  , 3  ,  'Colombia es uno de los países con más biodiversidad en el mundo, los colores, la fauna y la flora que lo caracterizan son motivo de orgullo.',  39,  'Hotel numero-34'  ,'direccion del hotel-34' , '315-315-3423'  ,'320-315-6133'  ,  'correohotelnumero162@correo.com'  ,  '3-6'  , '1-2-3-4-5'  , 1  , 165  ,'5-11-18-14-20'  , '14-10-3-5-29'  , '20-18-14-17'  ,  'dir34/imgHotel/' , 1);
insert into `Tborganizacion`  values(35, '11145'  , 2  ,  'Santuario de Fauna y Flora Otún Quimbaya, Ubicado en el flanco occidental de la Cordillera Central, en el departamento de Risaralda, el Santuario de Fauna y Flora Otún Quimbaya es un destino ecoturístico del Paisaje Cultural Cafetero.',  39,  'Hotel numero-35'  ,'direccion del hotel-35' , '315-315-3424'  ,'320-315-6134'  ,  'correohotelnumero131@correo.com'  ,  '1-4'  , '1-2-3-4-5'  , 6  , 119  ,'4-13-19-1-20'  , '14-10-3-5-30'  , '20-18-14-18'  ,  'dir35/imgHotel/' , 1);
insert into `Tborganizacion`  values(36, '11146'  , 1  ,  'Parque Nacional Natural Tatamá,  podrás conocer tres importantes páramos colombianos, el Tatamá, el Frontino y el Duende, sin duda será una experiencia invaluable que te hará disfrutar de la biodiversidad colombiana.',  39,  'Hotel numero-36'  ,'direccion del hotel-36' , '315-315-3425'  ,'320-315-6135'  ,  'correohotelnumero100@correo.com'  ,  '1-5'  , '1-2-3-4-5'  , 2  , 96  ,'7-15-20-10-19'  , '14-10-3-5-31'  , '20-18-14-19'  ,  'dir36/imgHotel/' , 1);
