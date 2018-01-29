<script src='https://www.google.com/recaptcha/api.js'></script>
	<div class="container">
		<div class="col-md-12">
                    <form action="" method="post">
                        Naam: <br><input type="text" class="form-control" name="name" required><br>
                        E-mail: <br><input type="email" class="form-control" name="email" required><br>
                        Telefoonnummer: <br><input type="text" class="form-control" name="telnummer"><br>
                        Onderwerp: <br><input type="text" class="form-control" name="subject" required><br>
                        
                        Uw bericht:<br><textarea rows="5" class="form-control" name="message" cols="30" required></textarea><br>
                        
                        
                        <div class="g-recaptcha" data-sitekey="6Lcbwj8UAAAAALC-fcDk9s1ZzWcAJbsCOyBoaE13"></div>
                        <input type="submit" name="submit" class="btn btn-primary" value="Verzenden">
                    </form>
		</div>
	</div>
