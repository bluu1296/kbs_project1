<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of contact
 *
 * @author binh_
 */
class Contact {

	public function __construct() {
		require_once './pages/contact.php';
		$this->_other();
	}
	protected function _other() {
		//$to is de email van Admin en $from is de email van Gebruiker
		//$Variabel2 stuurt een kopie naar Gebruiker.
		
		$type = INPUT_POST;
		$to = "jb.bijles@gmail.com";
		$subject = filter_input($type, "subject");
		$name = filter_input($type, "name");
		$email = filter_input($type, "Email");
		$telnummer = filter_input($type, "telnummer");
		$bericht = filter_input($type, "bericht");
		
		
		if(isset($subject)==true){
			
//    			$from = ($_POST['email']); 
//    			$first_name = $_POST['first_name'];
//    			$last_name = $_POST['last_name'];
//    			$telnummer = $_POST['telnummer'];
//    			$subject = "subject";
    			$subject2 = "Kopie van uw bericht";
    			$message =  "Gegevens" . "\n\n" . "\n" . "Naam: " . $name . "\n" . "\n" . "Telefoonnummer: " . $telnummer . "\n" . "Email: " . $email . " schreef het volgende:" . "\n\n" . $bericht;
    			$message2 = "Bijgaand ontvangt u een kopie van uw bericht " . $name . "\n\n" . $bericht;
    			$headers = "From:" . $email;
    			$headers2 = "From:" . $to;
    			mail($to,$subject,$message,$headers);
    			mail($email,$subject2,$message2,$headers2);
				
    				echo "We hebben uw bericht ontvangen " . $name . ". Er wordt spoedig mogelijk contact opgenomen.";
    }
	
	}
	
}
