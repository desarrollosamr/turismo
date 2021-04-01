USE `basehotel1`;

DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_deleteTemporal`(IN `pnro` int,  IN `pkeyh` int, IN `flag` int)
-- CREATE DATABASE  IF NOT EXISTS `basehotel1` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

BEGIN
  -- DECLARE a int;
  -- set a = 20;
  -- SET a = (SELECT COUNT(*) FROM tbhabitacion WHERE nrohabitacion  =pnro);
  -- IF a = 0 THEN
	Delete from tmpmobiliario where idtmp = pnro;
     IF  flag = 2 THEN     
--      SELECT idMobiliario, nomMobiliario FROM tbmobiliario where idmobiliario not in (SELECT keymob FROM tmpmobiliario where keyhab = pkeyh and nrohab= pnro);
        SELECT idMobiliario, nomMobiliario FROM tbmobiliario where idmobiliario not in (SELECT keymob FROM tmpmobiliario where keyhab = pkeyh);
	 END IF; 
END ;;
DELIMITER ;

DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_newHabitacion`(IN `pnro` int,  IN `pest`int, IN `pprecio` float, IN  `ptipoh` int)
BEGIN
  DECLARE a int;
  set a = 20;
  SET a = (SELECT COUNT(*) FROM tbhabitacion WHERE nrohabitacion  =pnro);
  IF a = 0 THEN
    INSERT INTO tbhabitacion(nrohabitacion, idestadoh, preciohab, idtipohab) VALUES(pnro, pest, pprecio, ptipoh );
    select 5 as xx;
   else
    select 1 as xx;
   END IF;
END ;;
DELIMITER ;

DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_newMedyoreserva`(IN `pnom` VARCHAR(80) )
BEGIN
  DECLARE a int;
  set a = 20;
  SET a = (SELECT COUNT(*) FROM tbmedioreserva WHERE nommedio =pnom);
  IF a = 0 THEN
    INSERT INTO tbmedioreserva(nommedio) VALUES(pnom);
    select 0 as xx;
   else
    select 1 as xx;
   END IF;
END ;;
DELIMITER ;

DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_newMobiliario`(IN `pnom` VARCHAR(80), IN `pdes` VARCHAR(80), IN `pprecio` float )
BEGIN
  DECLARE a int;
  set a = 20;
  SET a = (SELECT COUNT(*) FROM tbmobiliario WHERE nommobiliario =pnom);
  IF a = 0 THEN
    INSERT INTO tbmobiliario(nommobiliario, desMobiliario, preciocompra) VALUES(pnom, pdes, pprecio );
    select 0 as xx;
   else
    select 1 as xx;
   END IF;
END ;;
DELIMITER ;

DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_newOcupaciones`(IN `pdescripcion` VARCHAR(80))
BEGIN
  DECLARE a int;
  set a = 20;
  SET a = (SELECT COUNT(*) FROM tbocupaciones WHERE nomocupacion =pdescripcion);
  IF a = 0 THEN
    INSERT INTO tbocupaciones(nomocupacion) VALUES(pdescripcion);   
    select 0 as xx;
   else
    select 1 as xx;
   END IF;
END ;;
DELIMITER ;

DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_newProducto`(IN `pnom` varchar(80), IN`punidad` float, IN  `pimpto` float,IN  `piva` float,   IN  `pprecio` float, IN  `pcan` int)
BEGIN
  DECLARE a int;
  set a = 20;
  SET a = (SELECT COUNT(*) FROM tbproductos WHERE nomproducto  =pnom);
  IF a = 0 THEN
    INSERT INTO tbproductos(nomproducto, idunidadm, impto, precio, iva, canExiste) VALUES(pnom, punidad, pimpto,  pprecio, piva, pcan );
    select "ok" as xx;
   else
    select "Nombre repetido" as xx;
   END IF;
END ;;
DELIMITER ;

DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_newstateHabitacion`(IN `pdescripcion` VARCHAR(80))
BEGIN
  DECLARE a int;
  set a = 20;
  SET a = (SELECT COUNT(*) FROM tbestadohabitacion WHERE nomestado =pdescripcion);
  IF a = 0 THEN
    INSERT INTO tbestadohabitacion(nomestado) VALUES(pdescripcion);   
    select 0 as xx;
   else
    select 1 as xx;
   END IF;
END ;;
DELIMITER ;

DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_newstateReserva`(IN `pdescripcion` VARCHAR(80))
BEGIN
  DECLARE a int;
  set a = 20;
  SET a = (SELECT COUNT(*) FROM tbestadoreserva WHERE nomestador =pdescripcion);
  IF a = 0 THEN
    INSERT INTO tbestadoreserva(nomestador) VALUES(pdescripcion);   
    select 0 as xx;
   else
    select 1 as xx;
   END IF;
END ;;
DELIMITER ;

DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_newTemporal`(IN `pnro` int,  IN `pkeyh` int, IN `pnommob` VARCHAR(50), IN `keym` int,  IN  `pcan` int, IN `flag` int)
BEGIN
  -- DECLARE a int;
  -- set a = 20;
  -- SET a = (SELECT COUNT(*) FROM tbhabitacion WHERE nrohabitacion  =pnro);
  -- IF a = 0 THEN
    INSERT INTO tmpmobiliario(nrohab, keyhab, keymob, nommob, canmov) VALUES(pnro, pkeyh, keym, pnommob , pcan );
     IF  flag = 1 THEN
        SELECT idMobiliario, nomMobiliario FROM tbmobiliario where idmobiliario not in (SELECT keymob FROM tmpmobiliario where keyhab = pkeyh and nrohab= pnro);
	 END IF; 
END ;;
DELIMITER ;

DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_newtypeHabitacion`(IN `pnom` VARCHAR(80), IN `pdes` VARCHAR(80) )
BEGIN
  DECLARE a int;
  set a = 20;
  SET a = (SELECT COUNT(*) FROM tbtypohabitacion WHERE nomtipo =pnom);
  IF a = 0 THEN
    INSERT INTO tbtypohabitacion(nomtipo, destipo) VALUES(pnom, pdes);
    select 0 as xx;
   else
    select 1 as xx;
   END IF;
END ;;
DELIMITER ;

DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_newTypoDocumento`(IN `pdescripcion` VARCHAR(80))
BEGIN
  DECLARE a int;
  set a = 20;
  SET a = (SELECT COUNT(*) FROM tbtypodocumento WHERE nomtipodoc =pdescripcion);
  IF a = 0 THEN
    INSERT INTO tbtypodocumento(nomtipodoc) VALUES(pdescripcion);   
    select 0 as xx;
   else
    select 1 as xx;
   END IF;
END ;;
DELIMITER ;

DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_newunidadMedida`(IN `pnom` VARCHAR(80) )
BEGIN
  DECLARE a int;
  set a = 20;
  SET a = (SELECT COUNT(*) FROM tbundmedida WHERE nomunidadm =pnom);
  IF a = 0 THEN
    INSERT INTO tbundmedida(nomunidadm) VALUES(pnom);
    select 0 as xx;
   else
    select 1 as xx;
   END IF;
END ;;
DELIMITER ;

DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_oneTypoDocumento`(IN `pcriterio` INT)
BEGIN
	SELECT e.* FROM tbtypodocumento as e Where 1=1 and e.IdtipoDoc=pcriterio;
END ;;
DELIMITER ;

DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_paghabitacion`(`_flag` INT, `_busca` VARCHAR(200), `_pagina` INT, `_registro` INT)
BEGIN
	if _flag = 1 then
-- select * from tbestadohabitacion where nomestado like concat('%',_busca,'%') order by nomestado desc limit _pagina,_registro;
		
        select a.idHabitacion, a.nroHabitacion, a.precioHab, b.nomEstado, c.desTipo, c.nomTipo
			  From tbhabitacion a, tbestadohabitacion b, tbtypohabitacion c
			  where (a.idestadoh = b.idestadoh and a.idtipohab = c.idtipohab) and              
              (b.nomEstado like concat('%',_busca,'%') or c.desTipo like concat('%',_busca,'%') or c.nomTipo like concat('%',_busca,'%') ) 
              order by a.nroHabitacion desc limit _pagina,_registro;
	else
		SELECT count(*) as total FROM tbhabitacion; -- WHERE nomestado LIKE CONCAT('%',_busca,'%');
	end if;	
END ;;
DELIMITER ;

DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_paginamobiliario`(`_flag` INT, `_busca` VARCHAR(200), `_pagina` INT, `_registro` INT)
BEGIN
	if _flag = 1 then
		select * from tbmobiliario where nommobiliario like concat('%',_busca,'%') order by nommobiliario desc limit _pagina,_registro;
	else
		SELECT count(*) as total FROM tbmobiliario WHERE nommobiliario LIKE CONCAT('%',_busca,'%');
	end if;	
END ;;
DELIMITER ;

DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_pagmedioreserva`(`_flag` INT, `_busca` VARCHAR(200), `_pagina` INT, `_registro` INT)
BEGIN
	if _flag = 1 then
		select * from tbmedioreserva where nommedio like concat('%',_busca,'%') order by nommedio desc limit _pagina,_registro;
	else
		SELECT count(*) as total FROM tbmedioreserva WHERE nommedio LIKE CONCAT('%',_busca,'%');
	end if;	
END ;;
DELIMITER ;

DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_pagOcupaciones`(`_flag` INT, `_busca` VARCHAR(200), `_pagina` INT, `_registro` INT)
BEGIN
	if _flag = 1 then
		select * from tbocupaciones where nomocupacion like concat('%',_busca,'%') order by nomocupacion desc limit _pagina,_registro;
	else
		SELECT count(*) as total FROM tbocupaciones WHERE nomocupacion LIKE CONCAT('%',_busca,'%');
	end if;	
END ;;
DELIMITER ;

DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_pagproductos`(`_flag` INT, `_busca` VARCHAR(200), `_pagina` INT, `_registro` INT)
BEGIN
	if _flag = 1 then
-- select * from tbestadohabitacion where nomestado like concat('%',_busca,'%') order by nomestado desc limit _pagina,_registro;
		
        select a.*, b.nomUnidadm
			  From tbproductos a, tbundmedida b
			  where (a.idunidadm = b.idunidadm and (a.nomproducto like concat('%',_busca,'%') or b.nomUnidadm like concat('%',_busca,'%') ) )
              order by a.idproducto desc limit _pagina,_registro;         
     else
		SELECT count(*) as total FROM tbproductos; -- WHERE nomestado LIKE CONCAT('%',_busca,'%');
	end if;	
END ;;
DELIMITER ;

DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_pagstatehabitacion`(`_flag` INT, `_busca` VARCHAR(200), `_pagina` INT, `_registro` INT)
BEGIN
	if _flag = 1 then
		select * from tbestadohabitacion where nomestado like concat('%',_busca,'%') order by nomestado desc limit _pagina,_registro;
	else
		SELECT count(*) as total FROM tbestadohabitacion WHERE nomestado LIKE CONCAT('%',_busca,'%');
	end if;	
END ;;
DELIMITER ;

DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_pagstatereserva`(`_flag` INT, `_busca` VARCHAR(200), `_pagina` INT, `_registro` INT)
BEGIN
	if _flag = 1 then
		select * from tbestadoreserva where nomestador like concat('%',_busca,'%') order by nomestador desc limit _pagina,_registro;
	else
		SELECT count(*) as total FROM tbestadoreserva WHERE nomestador LIKE CONCAT('%',_busca,'%');
	end if;	
END ;;
DELIMITER ;

DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_pagtipodocumento`(`_flag` INT, `_busca` VARCHAR(200), `_pagina` INT, `_registro` INT)
BEGIN
	if _flag = 1 then
		select * from tbtypodocumento where nomtipodoc like concat('%',_busca,'%') order by nomtipodoc desc limit _pagina,_registro;
	else
		SELECT count(*) as total FROM tbtypodocumento WHERE nomtipodoc LIKE CONCAT('%',_busca,'%');
	end if;	
END ;;
DELIMITER ;

DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_pagtypehabitacion`(`_flag` INT, `_busca` VARCHAR(200), `_pagina` INT, `_registro` INT)
BEGIN
	if _flag = 1 then
		select * from tbtypohabitacion where nomtipo like concat('%',_busca,'%') order by nomtipo desc limit _pagina,_registro;
	else
		SELECT count(*) as total FROM tbtypohabitacion WHERE nomtipo LIKE CONCAT('%',_busca,'%');
	end if;	
END ;;
DELIMITER ;

DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_pagunidadMedida`(`_flag` INT, `_busca` VARCHAR(200), `_pagina` INT, `_registro` INT)
BEGIN
	if _flag = 1 then
		select * from tbundmedida where nomunidadm like concat('%',_busca,'%') order by nomunidadm desc limit _pagina,_registro;
	else
		SELECT count(*) as total FROM tbundmedida WHERE nomunidadm LIKE CONCAT('%',_busca,'%');
	end if;	
END ;;
DELIMITER ;

DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_pasarelacion`( IN `pkeyh` int, IN `pnro` int)
BEGIN
	insert into tbhabmobiliario(nrohabitacion, idhabitacion, idmobiliario, cantidad) Select a.nrohab, a.keyhab, a.keymob, a.canmov from tmpmobiliario a where a.nrohab= pnro;
    Delete from tmpmobiliario where nrohab = pnro;    
END ;;
DELIMITER ;

DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_readTemporal`(IN `pnro` int,  IN `keym` int,  IN `flag` int)
BEGIN
    Select * FROM tmpmobiliario where (nrohab= pnro);

END ;;
DELIMITER ;

DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_updateMedyoreserva`(IN `pcriterio` INT, IN `pdescripcion` VARCHAR(80))
BEGIN
  DECLARE a int;
  set a = 20;
  SET a = (SELECT COUNT(*) FROM tbmedioreserva WHERE nommedio =pdescripcion);
  IF a = 0 THEN
    Update tbmedioreserva set nommedio = pdescripcion where idmedio=pcriterio;   
    select 0 as xx;
   else
    select 1 as xx;
   END IF; 
END ;;
DELIMITER ;

DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_updateMobiliario`(IN `pcriterio` INT, IN `pnom` VARCHAR(80), IN `pdes` VARCHAR(80), IN `pprecio` float)
BEGIN
  DECLARE a int;

  set a = 20;

  SET a = (SELECT COUNT(*) FROM tbmobiliario WHERE nommobiliario =pnom);
  IF a = 0 THEN
    Update tbmobiliario set nommobiliario = pnom,
						    desmobiliario = pdes,
                            preciocompra  = pprecio
			where Idmobiliario =pcriterio;   
    select 0 as xx;
   else
    select 1 as xx;
   END IF; 
END ;;
DELIMITER ;

DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_updateOcupaciones`(IN `pcriterio` INT, IN `pdescripcion` VARCHAR(80))
BEGIN
  DECLARE a int;
  set a = 20;
  SET a = (SELECT COUNT(*) FROM tbocupaciones WHERE nomocupacion =pdescripcion);
  IF a = 0 THEN
    Update tbocupaciones set nomocupacion = pdescripcion where idocupacion=pcriterio;   
    select 0 as xx;
   else
    select 1 as xx;
   END IF; 
END ;;
DELIMITER ;

DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_updaterecordproducto`(IN `pcriterio` INT,  IN `pnom` VARCHAR(80),  IN `punidad` float, 
																	  IN `pimpto` float,   IN `pprecio` float, IN  `piva` float, IN  `pcan` int)
BEGIN
  DECLARE a int;
  set a = 20;
  SET a = (SELECT COUNT(*) FROM tbproductos WHERE nomproducto = pnom and idproducto  !=pcriterio);
  IF a > 0 THEN
    select 'Nombre repetido' as xx;
   else
       Update tbproductos set nomproducto = pnom ,
							idUnidadm   = punidad,
                            impto       = pimpto,
						    precio      = pprecio,
                            iva         = piva,
                            canExiste   = pcan
				where idproducto  =pcriterio;   
    select 'ok' as xx;
   END IF; 
END ;;
DELIMITER ;

DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_updatestateHabitacion`(IN `pcriterio` INT, IN `pdescripcion` VARCHAR(80))
BEGIN
  DECLARE a int;
  set a = 20;
  SET a = (SELECT COUNT(*) FROM tbestadohabitacion WHERE nomestado =pdescripcion);
  IF a = 0 THEN
    Update tbestadohabitacion set nomestado = pdescripcion where idestadoh=pcriterio;   
    select 0 as xx;
   else
    select 1 as xx;
   END IF; 
END ;;
DELIMITER ;

DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_updatestateReserva`(IN `pcriterio` INT, IN `pdescripcion` VARCHAR(80))
BEGIN
  DECLARE a int;
  set a = 20;
  SET a = (SELECT COUNT(*) FROM tbestadoreserva WHERE nomestador =pdescripcion);
  IF a = 0 THEN
    Update tbestadoreserva set nomestador = pdescripcion where idestador=pcriterio;   
    select 0 as xx;
   else
    select 1 as xx;
   END IF; 
END ;;
DELIMITER ;

DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_updatetypeHabitacion`(IN `pcriterio` INT, IN `pnom` VARCHAR(80), IN `pdes` VARCHAR(80))
BEGIN
  DECLARE a int;

  set a = 20;

  SET a = (SELECT COUNT(*) FROM tbtypohabitacion WHERE nomtipo =pnom);
  IF a = 0 THEN
    Update tbtypohabitacion set nomtipo = pnom,
						        destipo = pdes                            
			where idtipohab =pcriterio;   
    select 0 as xx;
   else
    select 1 as xx;
   END IF; 
END ;;
DELIMITER ;

DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_updateTypoDocumento`(IN `pcriterio` INT, IN `pdescripcion` VARCHAR(80))
BEGIN
  DECLARE a int;
  set a = 20;
  SET a = (SELECT COUNT(*) FROM tbtypodocumento WHERE nomtipodoc =pdescripcion);
  IF a = 0 THEN
    Update tbtypodocumento set nomtipodoc = pdescripcion where IdTipoDoc=pcriterio;   
    select 0 as xx;
   else
    select 1 as xx;
   END IF; 
END ;;
DELIMITER ;

DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_updateunidadMedida`(IN `pcriterio` INT, IN `pdescripcion` VARCHAR(80))
BEGIN
  DECLARE a int;
  set a = 20;
  SET a = (SELECT COUNT(*) FROM tbundmedida WHERE nomunidadm =pdescripcion);
  IF a = 0 THEN
    Update tbundmedida set nomunidadm = pdescripcion where idunidadm=pcriterio;   
    select 0 as xx;
   else
    select 1 as xx;
   END IF; 
END ;;
DELIMITER ;

DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_viewmobiliario`( IN `pkeyh` int, IN `pnro` int)
BEGIN
  DECLARE a int;
  -- set a = -1;
  -- SET a = (SELECT COUNT(*) FROM tbhabmobiliario WHERE nrohabitacion =  pnro);
  -- IF a > 0 THEN
	SELECT a.cantidad, b.nomMobiliario FROM tbhabmobiliario a, tbmobiliario b where a.idmobiliario = b.idmobiliario and a.nrohabitacion =  pnro;
  -- else
  --  select '1010101' xx;
  -- END IF;
END ;;
DELIMITER ;

