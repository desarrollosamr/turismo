<?php
    $pie='
	<section class="contact-w3ls" id="contact">
		<div class="container">
			<div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile2" data-aos="flip-left">
				<div class="contact-agileits">
					<h4>Contáctenos</h4>
					<p class="contact-agile2">Inscribete a nuestros boletines</p>
					<form method="post" name="sentMessage" id="contactForm">
						<div class="control-group form-group">
							<label class="contact-p1">Nombre completo:</label>
							<input type="text" class="form-control" name="name" id="name" required>
							<p class="help-block"></p>
						</div>
						<div class="control-group form-group">
							<label class="contact-p1">Número de teléfono:</label>
							<input type="tel" class="form-control" name="phone" id="phone" required>
							<p class="help-block"></p>
						</div>
						<div class="control-group form-group">
							<label class="contact-p1">Dirección de correo electrónico:</label>
							<input type="email" class="form-control" name="correo" id="correo" required>
							<p class="help-block"></p>
						</div>
						<input type="submit" name="sub" value="Enviar" class="btn btn-primary">
					</form>
                </div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile1" data-aos="flip-right">
				<h4>Conéctate con nosotros</h4>
				<p class="contact-agile1"><strong>Teléfono :</strong>304 588 6029</p>
				<p class="contact-agile1"><strong>Email :</strong> <a href="mailto:desarrollosamr@gmail" target="_blank">desarrollosamr@gmail</a></p>
				<p class="contact-agile1"><strong>Direccion :</strong> Medell&iacute;n, Colombia</p>
				<div class="social-bnr-agileits">
					<ul class="social-menu">
						<li><a href="https://facebook.com/"><i class="fa fa-facebook"></i></a></li>
						<li><a href="https://linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
						<li><a href="https://instagram.com/"><i class="fa fa-instagram"></i> </a></li>
						<li><a href="https://youtube.com/"><i class="fa fa-youtube"></i> </a></li>
					</ul>
				</div>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d151289.2558867176!2d-75.71667090602438!3d4.8417680393197955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e38586be5555555%3A0x58dbd78c288cd97b!2sZona%20Cafetera!5e0!3m2!1ses-419!2sco!4v1623185746400!5m2!1ses-419!2sco" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				<!-- Parque+del+Café/@4.5390253,-75.7718392,17z/data=!3m1!4b1!4m5!3m4!1s0x8e385ef825fa221d:0xd35336082b9ca116!8m2!3d4.5390253!4d-75.7696505 -->
				<!-- <iframe src="https://www.google.com/maps/embed?pb=!3m1!4b1!4m5!3m4!1s0x8e385ef825fa221d:0xd35336082b9ca116!8m2!3d4.5390253!4d-75.7696505" ></iframe>	 -->
			</div>
			<div class="clearfix"></div>
		</div>
	</section>
	<div class="copy">
		<p>© 2021 <a href="index.php">GRAMTour</a> </p>
	</div>';
    echo $pie;
					if (isset($_POST['sub'])) {
						$name = $_POST['name'];
						$phone = $_POST['phone'];
						$email = $_POST['correo'];
						$approval = "Allowed";
						$sql = "INSERT INTO tbcontact(cname, phoneno, email,cdate,approval) VALUES ('$name','$phone','$email',now(),'$approval')";
						if (mysqli_query($con, $sql)){echo "OK";}
					}
?>