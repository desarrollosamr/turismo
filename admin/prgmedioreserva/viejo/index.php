<?php error_reporting (E_ALL);?>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <script type="text/javascript" src="../js/newVersion/jquery-3.4.1.min.js"></script>
    <!-- <link href="../css/paginator.css" rel="stylesheet" type="text/css"> -->
    <link href="../css/icon.css" rel="stylesheet" type="text/css">
    <link href="../css/general.css" rel="stylesheet" type="text/css">
    <link href="../css/stylefrm01.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="../js/newVersion/functions.js"></script>
    <script>
    function enviarPDF() {
        var busqueda = document.datos.busqueda.value;
        window.open("reporte_tipodocumento.php?busqueda=" + busqueda, 'win2',
            'status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=640,height=480,directories=no,location=no'
        );
        return false;
    }

    function enviarPrinter() {
        var busqueda = document.datos.busqueda.value;
        window.open("imprimir_tipodocumento.php?busqueda=" + busqueda, 'win2',
            'status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=640,height=480,directories=no,location=no'
        );
        return false;
    }
    </script>
</head>


<body>
    <?php
    session_start();
    if(isset($_SESSION["usuario"])){
                // Variables obligatorias en los otros  formularios
                $registra  = "addMunicipio.php";  // Programa a ejecutar para ingresar un resgitro
                $titPpal   = "Tipos de Documentos"; // Titulo del formulario(class="titulo_head")
                $imgTitulo = "../img/Iconfinder/archiver-32.png"; // Imagen antes del titulo(class="imagen_head")
                $imgNuevo  = "style='background-image:url(../img/header/doc_32x32.png)'"; // Icono boton nuevo
                //$prgDetalis = "<a href=detalle_tipodocumento.php?id="; // programa que se ejecuta cuando selecciona editar registro
                $prgDetails = "<a class= 'showtipoDocumento' href='#' id="; // programa que se ejecuta cuando selecciona detalle del registro                
                $prgEditar = "<a href=detalle_tipodocumento.php?id="; // programa que se ejecuta cuando selecciona editar registro
                $criterio  = '';
                $busqueda  = '';
?>

    <div class="wrapper">
        <div class="block">
            <div class="modal">
                <div id="modalMuni" class="bodyModal">
                </div>
            </div>
            <?php // Incluir el archivo cabecera general) headergeneral.php 
                // Desde la linea-37(Dice-> class="block_head")
                // Hasta la linea-70(Dice->) Cierra block_head
                include_once("../utilidades/headergeneral.php");
            ?>
            <div class="block_content">
                <form autocomplete="off" name="datos" action="" method="post">
                    Filtro:<input type="text" name="txtDato">
                    <input name="buscar_dato" type="submit" value="Buscar">
                    <input name="restablecer" type="submit" value="Restablecer">
                    <input type="hidden" name="busqueda" id="busqueda" value="<?php echo $busqueda ?>">
                    <input type="hidden" name="municipio" id="municipio" value="1">
                </form>
                <table class="adminlist" cellspacing="1">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Descripción</th>
                            <th>ID</th>
                            <th>Ver</th>
                            <th>Editar</th>
                        </tr>
                    </thead>
                    <?php
                        include_once("../clases/clsTipoDocumento.php");
                        $objtipoDocumento = new clsTipoDocumento;
                        $data1 = mysqli_fetch_assoc($objtipoDocumento->consultarTotalTipoDocumentos());
                        $total_registro = $data1['total'];
                        //echo $total_registro; exit();
                        $por_pagina = 20;
                        if (empty($_GET['pagina'])) {
                            $pagina = 1;
                        } else {
                            $pagina = $_GET['pagina'];
                        }
                        $desde = ($pagina - 1) * $por_pagina;
                        $total_paginas = ceil($total_registro / $por_pagina);
                        $limit = "limit ".$desde.",".$por_pagina;
              
                        $rst = $objtipoDocumento->consultarTipoDocumentoPorParametro($criterio, $busqueda, $limit);
                        //echo "tipo devuelto ".gettype($result)." total_registro->".$total_registro;
                        //exit();
                        if (isset($_POST['buscar_dato'])) {
                            $busqueda = $_POST["txtDato"];
                            $rst = $objtipoDocumento->consultarTipoDocumentoPorParametro('descripcion', $busqueda, '');
                        }
                        if (isset($_POST['restablecer'])) {
                            $rst = $objtipoDocumento->consultarTipoDocumentoPorParametro($criterio, $busqueda, '');
                        }
                    ?>
                    <tbody class="adminlist">
                        <?php
                            $i = 0;
                            $c = 0;
                            while ($row = mysqli_fetch_array($rst)) {
                                $i = $i + 1;
                                if ($c == 1) {
                                    //echo "<tr class='row1'>";
                                    echo "<tr class='row1 row".$row['IdTipoDocumento']."'>";                                    
                                    $c = 2;
                                } else {
                                    echo "<tr class='row0 row".$row['IdTipoDocumento']."'>";
                                    //echo "<tr class='row0'>";
                                    $c = 1;
                                }
                                echo "<td width='10'>" . $i . "</td>";
                                echo "<td>" . $row['Descripcion'] . "</td>";
                                echo "<td width='1%' align='center'>" . $row['IdTipoDocumento'] . "</td>";
                                echo "<td width='5%' align='center'>" . $prgDetails . $row['IdTipoDocumento'] . " title='Ver Detalle'><img src='../img/Iconfinder/search-16.png'></a></td>";
                                echo "<td width='5%' align='center'>" . $prgEditar . $row['IdTipoDocumento'] . " title='Editar'><img src='../img/Iconfinder/page_edit.png'></a></td>";
                                echo "</tr>";
                            }
                        ?>
                    </tbody>
                </table>
                <div class="paginador">
                    <ul>
                        <?php
                            if ($pagina != 1) {                        
                        ?>
                        <li><a href="?pagina=<?php echo 1; ?>"><i class="fas fa-step-backward"></i></a></li>
                        <li><a href="?pagina=<?php echo $pagina - 1; ?>"><i class="fas fa-backward"></i></a></li>
                        <?php
                            }
                            for ($i = 1; $i <= $total_paginas; $i++) {
                                if ($i == $pagina) {
                                    echo '<li class="pageSelected">' . $i . '</li>';
                                } else {
                                    echo '<li><a href="?pagina=' . $i . '">' . $i . '</a></li>';
                                }
                            }
                            if ($pagina != $total_paginas) {
                        ?>
                        <li><a href="?pagina=<?php echo $pagina + 1; ?>"><i class="fas fa-forward"></i></a></li>
                        <li><a href="?pagina=<?php echo $total_paginas; ?> "><i class="fas fa-step-forward"></i></a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <!--Cierra block_content-->
        </div>
    </div>
    <!--Cierra Wrapper-->
    <?php 
} else {         
  header("Location:../index.php");
}
?>
</body>

</html>