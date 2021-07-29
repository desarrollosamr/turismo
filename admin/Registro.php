
<?php
//CONTROLADOR
if(isset($_POST['registro']))
{
    $doc = $_POST['Documento'];
    $tel = $_POST['Telefono'];
    $nom = $_POST['Nombre'];
    $dir = $_POST['Direccion'];
    $correoU = $_POST['Correo'];
    $contraU = $_POST['Contrasena'];
	$ControladorUsuarios->RegistrarUsuario($doc,$tel,$nom,$dir,$correoU,$correoU);
}

//MODELO

public function RegistrarUsuario($usuario)
        {
            $Db = Db::Conectar(); // conectar bd
            $sql = $Db->prepare('INSERT INTO usuarios(Documento,Nombre,
            Telefono,Direccion,Correo,Contrasena,Estado,IdRol)
            VALUES (:Documento,:Nombre,:Telefono,:Direccion,:Correo,:Contrasena,:Estado,:IdRol)'); //definir sentencia sql
            $sql->bindvalue('Documento',$usuario->getDocumento());
            $sql->bindvalue('Nombre',$usuario->getNombre());
            $sql->bindvalue('Telefono',$usuario->getTelefono());
            $sql->bindvalue('Direccion',$usuario->getDireccion());
            $sql->bindvalue('Correo',$usuario->getCorreo());
            $sql->bindvalue('Contrasena',$usuario->getContrasena());
            $sql->bindvalue('Estado',$usuario->getEstado());
            $sql->bindvalue('IdRol',$usuario->getIdRol());

            try{
                $sql->execute();
                 echo "<script> 
                Swal.fire({
                    icon: 'success',
                    html: '<h3>Registro exitoso.</h3><br>',
                    allowOutsideClick: false,
                    background: '#fff',
                    confirmButtonColor: '#FC3E3E',
                    confirmButtonText: 'Cerrar'
                  }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = '../index.php';
                    }
                  });
                </script>";
            }
            catch(Exception $e)
            {
                echo "<script> 
                Swal.fire({
                    icon: 'error',
                    html: '<h4>Los datos no son validos.<br>Intentalo nuevamente.</h4>',
                    allowOutsideClick: false,
                    background: '#fff',
                    confirmButtonColor: '#FC3E3E',
                    confirmButtonText: 'Cerrar'
                  }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = '../Vista/registro.php';
                    }
                  });
                </script>";
            }
            Db::CerrarConexion($Db);
        }
?>