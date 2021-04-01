<?php  
 session_start();  
 if(isset($_SESSION["user"]))  
 {  
  header("location:home.php");
 } 
 ?>
<!DOCTYPE html>
<html class="bg-black">
<head>
  <meta charset="UTF-8">
  <title>Acceso</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div id="clouds">
	<div class="cloud x1"></div>
	<!-- Time for multiple clouds to dance around -->
	<div class="cloud x2"></div>
	<div class="cloud x3"></div>
	<div class="cloud x4"></div>
	<div class="cloud x5"></div>
    <div class="container">
      <div id="login">
        <form method="post" autocomplete="off">
          <fieldset class="clearfix">
            <p><span class="fontawesome-user"></span><input type="text"  name="user" value="Username" onBlur="if(this.value == '') this.value = 'Username'" onFocus="if(this.value == 'Username') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
            <p><span class="fontawesome-lock"></span><input type="password" name="pass"  value="Password" onBlur="if(this.value == '') this.value = 'Password'" onFocus="if(this.value == 'Password') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Password" -->
            <p><input type="submit" name="sub"  value="Login"></p>
          </fieldset>
        </form>
      </div> <!-- end login -->
    </div>
</div>
<!-- <div class="bottom">  <h3><a href="../index.php">Pagina</a></h3></div>   -->
</body>
</html>
<?php
   include('modpublicos/conexion.php');
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
    //$con = new Conect_MySql();
  // username and password sent from form      
    //$sel = $con->execute($sql);
     $mysqli = new mysqli("localhost", "root", "", "basehotel1");
    //$ciudad = $mysqli->real_escape_string($ciudad);     
     $myusername = $mysqli->real_escape_string($_POST['user']);
     $mypassword = $mysqli->real_escape_string($_POST['pass']);
     $sql = "SELECT id FROM tblogin WHERE usname = '$myusername' and pass = '$mypassword'";
     $result = $mysqli->query($sql);
     $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     //$active = $row['active'];    
     /*
     echo "index de admin, voy para home"; 
     echo "<pre>";
     print_r($row);
     echo "</pre>";
     die();*/
     $count = mysqli_num_rows($result);      
     // If result matched $myusername and $mypassword, table row must be 1 row		
     if($count == 1) {         
       $_SESSION['user'] = $myusername;         
       header("location: home.php");
    }else {
       echo '<script>alert("Su nombre de usuario o contraseña no es válido") </script>';
       header("location: ../");
    }
   }
?>
