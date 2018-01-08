<head>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
	<div class="container">
		<div class="col-md-5">
			<div class="form-area">  
				<form role="form">

					<h3 style="margin-bottom: 25px; text-align: 125%;">Contactformulier</h3>
					
					<div class="form-group">
						<input type="text" class="form-control" id="name" name="name" placeholder="Naam" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="mobile" name="mobile" placeholder="Telefoonnummer" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="subject" name="subject" placeholder="Onderwerp" required>
					</div>
					<div class="form-group">
					<textarea class="form-control" type="textarea" id="message" placeholder="Bericht" maxlength="140" rows="7"></textarea>
						<span class="help-block"><p id="characterLeft" class="help-block "><!--You have reached the limit--></p></span>                    
					</div>
                                        <div class="g-recaptcha" data-sitekey="6Lcbwj8UAAAAALC-fcDk9s1ZzWcAJbsCOyBoaE13"></div>
					<button type="button" id="submit" name="submit" class="btn btn-primary pull-right">Verzenden</button>
				</form>
			</div>
		</div>
	</div>
