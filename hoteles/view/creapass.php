<?php
include_once('d:\xampp_new\htdocs\turismo\hoteles\model\UserData.php');
include_once('d:\xampp_new\htdocs\turismo\hoteles\model\tbOrganizacionData.php');
$r = tbOrganizacionData::oneTbOrganizacion($_GET['clientid']);

$pepper = '023c9hp9433249ptry23p4rt3hfwed';
$pass = $_POST['pass'];
$p_peppered = hash_hmac("sha256", $pass, $pepper);
$p_hashed = password_hash($p_peppered, PASSWORD_BCRYPT);
$cpass = $_POST['cupass'];
$updated = "NOW()";
$msg = "Error:";

if (isset($_GET['client'])) {
  $email = $_GET['client'];
}
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['changepass']) && ($_POST['pass'] == $_POST['cupass']) && $_POST['pass']!="") {
  $user = new UserData();
  $user->password = $p_hashed;
  $user->email = $_POST['client'];
  $updatePass = $user->update_pass_by_email($user->password, $user->email);
  echo '<script type="text/javascript">
  swal.fire({
    position: "center",
    title: "La contraseña ha sido actualizada",
    showConfirmButton: true,
    allowOutsideClick: false,
    allowEscapeKey: false,
    icon: "success",
    confirmButtonText: "Cerrar"
  })
  </script>';

}else if($_POST['pass'] != $_POST['cupass']){
  echo '<script type="text/javascript">
  swal.fire({
    position: "center",
    title: "Las contraseñas no coinciden",
    showConfirmButton: true,
    allowOutsideClick: false,
    allowEscapeKey: false,
    icon: "error",
    confirmButtonText: "Cerrar"
  })
  </script>';
}
?>
<div style="margin-top:10px;margin-bottom:10px;">
  <div class="card" style="width:30%;border: 1px solid; border-radius: 14px;margin-left: auto;margin-right:auto;">
    <div class="card-header" style="background-color:#0f2453;color:white; border-top-left-radius: 14px;border-top-right-radius:14px;padding:10px;">
      <h3 class='text-center'>Crear o cambiar contraseña</h3>
    </div>
    <div style="background-color:#ffce14;text-align:center;font-weight:bold;padding:10px;">
        Negocio: <?php  echo $r[0]->nombOrg; ?>
    </div>
    <div class="cad-body" style="padding:10px;">
      <div>
        <form class="" action="" method="POST">
          <input type="hidden" name="client" value="<?php echo $_GET['client'] ?>">
          <input type="hidden" name="changepass" value="changepass">
          <div class="form-group pt-3">
            <label for="name">Contraseña</label>
            <input type="text" name="pass"  class="form-control">
          </div>
          <div class="form-group">
            <label for="username">Confirmar contraseña</label>
            <input type="text" name="cupass"  class="form-control">
          </div>
          <div class="form-group" style="text-align:center;">
            <button type="submit" name="addUser" class="btn btn-primary">Actualizar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
