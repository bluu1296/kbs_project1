<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>De BijlesGuru</title>
		
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
		<link rel="stylesheet" href=<?php echo $config["paths"]["style"]; ?>>
		
		<?php session_start() ?>
	</head>
	<body>
	<nav class="navbar navbar-inverse navbar-fixed-top header">
			<div class="container-fluid">
			  <div class="navbar-header">
				  <a class="navbar-brand" href="index.php">De BijlesGuru</a>
			  </div>
				<ul class="nav navbar-nav navbar-right">
					<li class=""><a href="index.php">Home</a></li>
					<li class=""><a href="vak">Vakken</a></li>
					<?php 
                                        
                                        if (isset($_SESSION['rol'])) {
                                            if($_SESSION['rol'] == 0) {
                                                echo '<li class=""><a href="afspraak">Afspraak maken</a></li>';
                                            }
                                        } 
                                        
                                        ?>
					<li class=""><a href="contact">Contact</a></li>
                                        <?php
                                        if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
                                            echo '<a href="logout"><button class="btn btn-success inlog">Uitloggen</button></a>';
                                        } else {
                                            echo '<a href="login"> <button class="btn btn-success inlog">Inloggen</button></a>';
                                        }
                                        ?>
				</ul>
				
			</div>
		</nav>
		