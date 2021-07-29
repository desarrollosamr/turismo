<?php
$ds = DIRECTORY_SEPARATOR;  
 
/*$storeFolder = '/uploads';   
 
if (!empty($_FILES)) {
     
$countfiles = count($_FILES['file']['name']);
 
 // Looping all files
 for($i=0;$i<$countfiles;$i++){
   $filename = $_FILES['file']['name'][$i];
   
   // Upload file
   move_uploaded_file($_FILES['file']['tmp_name'][$i],'/home/u669320997/domains/gramtour.com.co/public_html/uploads'.$ds.$filename);
    
 }
     
}*/
if(isset($_POST['submit'])){
 // Count total files
 $countfiles = count($_FILES['file']['name']);
 
 // Looping all files
 for($i=0;$i<$countfiles;$i++){
   $filename = $_FILES['file']['name'][$i];
   
   // Upload file
   move_uploaded_file($_FILES['file']['tmp_name'][$i],'d:\xampp_new\htdocs\turismo\uploads'.$ds.$filename);
   
 }
?>
<div>Los archivos fueron subidos satisfactoriamente</div>
<p class="lead">Sus documentos serán revisados a la mayor brevedad, y una vez validados, recibirá un mensaje para la activación de su cuenta.</p>
<div>¡Estamos para servirle!</div>
<?php
} 
?>