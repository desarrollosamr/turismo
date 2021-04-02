BEGIN
Declare r int default 0;
Declare i int default 0;
Declare n int default 0;
Declare xx int default 0;
Declare maxcad int default 0;
Declare nrocam int default 0;
Declare letra    varchar(150) default '';
Declare strTipo  varchar(150) default '';
Declare lsCampos varchar(150) default '';
Declare strcampo text default '';

-- se crea la tabla temporal(en memoria)
set @strsql = concat("CREATE TEMPORARY TABLE `",otro,"` (c int not null auto_increment primary key, \n\t\t\t\t\t\t\t\t\t\t\t\t\t\t idorg      int, \n                                                         nitdni     varchar(15), \n                                                         nomborg    varchar(60), \n                                                         rutaimagen varchar(100), \n                                                         iddescripciontr varchar(250),\n                                                         nro int);");
 PREPARE consulta FROM @strsql;
 EXECUTE consulta; 

set @strsql = concat("insert into ",otro," (idorg, nitdni, nomborg, rutaimagen, iddescripciontr, nro)\n  Select idorg, nitdni, nomborg, rutaimagen , iddescripciontr, length(trim(iddescripciontr)) as nro From tborganizacion where idciudad=",idb, " and (idTipoTr like '%",typob,"-%' or idTipoTr like '%-",typob,"' or idTipoTr like '%-",typob,"-%');");
PREPARE consulta FROM @strsql;
EXECUTE consulta;

-- set strcampo = @strsql;
-- select strcampo;
set @mios = concat("select trim(iddescripciontr) into @letra from ",otro," where length(trim(iddescripciontr)) = (select max(length(iddescripciontr)) from ",otro,") limit 1;");
PREPARE consulta FROM @mios;
EXECUTE consulta;  

set @mios = concat("select count(*) into @can from ",otro);
PREPARE consulta FROM @mios;
EXECUTE consulta;  
set n = @can;
 set strcampo = @mios;
-- select @mios;
--  select strcampo, n;
 set strTipo = @letra;
-- select @letra, strTipo;
 set lsCampos ="";
 set strcampo ="";
 set r =  0;
 while i < length(trim(strTipo)) do   
  Set letra = substring(strTipo, i , 1);
  if trim(letra)  <> '-' then
   Set lsCampos = concat(lsCampos, trim(letra));   
  else
   set r = r + 1;
   set strcampo = concat(strcampo, "`des",r,"` varchar(255) default ' ', ");
   set lsCampos="";
  end if;
  set i = i + 1;		                        
 end while;
set r = r + 1;
set nrocam = r;
set strcampo = concat(strcampo, "`des",r,"` varchar(255) default ' '");
-- select strcampo;
set @strsql = concat("drop table if exists  `", token ,"`");
PREPARE consulta FROM @strsql;
EXECUTE consulta;	

-- crear la tabla temporal(fisica)
set @strsql = concat("create table `", token ,"` (id int not null auto_increment primary key, \n\t\t\t\t\t\t\t\t\t\t\t\t\t\t idorg      int, \n                                                         nitdni     varchar(15), \n                                                         nomborg    varchar(60), \n                                                         rutaimagen varchar(100), \n                                                         iddescripciontr varchar(250),\n                                                         nro        int,",
                                                         strcampo,"\n                                                         );");
 PREPARE consulta FROM @strsql;
 EXECUTE consulta;  
-- Se llena las descripciones en los campos(des) desde la tabla(tbdescripciontr)
set @strsql = concat("insert into ",token,"(idorg, nitdni, nomborg, rutaimagen, iddescripciontr, nro) \n   Select idorg, nitdni, nomborg, rutaimagen, iddescripciontr, ",nrocam," From ",otro);  
PREPARE consulta FROM @strsql;
EXECUTE consulta;
 
 set xx = 0;
 repeat
  set xx = xx + 1;
  set @mios = concat("select trim(iddescripciontr) into @letra from ",token," where id=",xx);
  PREPARE consulta FROM @mios;
  EXECUTE consulta;
  set strTipo = @letra;
  set i =  0;
  set r =  0;
  set lsCampos="";
  while i <= length(trim(strTipo)) do   
   Set letra = substring(strTipo, i , 1);
   if trim(letra)  <> '-' then
    Set lsCampos = concat(lsCampos, trim(letra));   
   else
    set r = r + 1;
    set strcampo = concat("update ",token," set des",r,"= (select detalledescripcion from tbdescripciontr where iddescripciontr =",lsCampos,")  where id=",xx);
    set @mios = strcampo;
    PREPARE consulta FROM @mios;
    EXECUTE consulta;
    set lsCampos="";
--    select  strcampo;
   end if;
   set i = i + 1;		                        
  end while;  
  set r = r + 1;
  set strcampo = concat("update ",token," set des",r,"= (select detalledescripcion from tbdescripciontr where iddescripciontr =",lsCampos,")  where id=",xx);  
  set @mios = strcampo;
  PREPARE consulta FROM @mios;
  EXECUTE consulta;  
--  select  strcampo;
  until xx = n
 end repeat;
 
-- select strTipo, r, i,n, xx,maxcad,letra,lsCampos, strcampo;
/*set @strsql = concat("select * from  `",otro,"`;");
PREPARE consulta FROM @strsql;
EXECUTE consulta; 
*/
set @strsql = concat("Truncate `",otro,"`;");
PREPARE consulta FROM @strsql;
EXECUTE consulta; 

set @strsql = concat("select * from  `",token,"`;");
PREPARE consulta FROM @strsql;
EXECUTE consulta; 


  
END