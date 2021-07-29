-- leer, sobre funciones de cadena en mysql--->

select mm.*, replace(a.idtipotr,"-",",") as xidtipotr from tbtiponegociotr mm, tborganizacion a where mm.idtipotr IN (SELECT replace(a.idtipotr,"-",",") from tborganizacion a where a.idciudad=39)




SELECT a.* from tbtiponegociotr a where a.idtipotr in (select mid(b.idtipotr, locate(a.idtipotr, b.idtipotr,length(a.idtipotr)), length(a.idtipotr)) from tborganizacion b where idciudad = 10) order by a.idTipoTr