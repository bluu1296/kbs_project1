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
		
            
            if(isset($_POST['submit'])){
                $to = "jb.bijles@gmail.com"; 
                $from = ($_POST['email']); 
                $name = $_POST['name'];
                $subject = $_POST['subject'];
                $telnummer = $_POST['telnummer'];
                $subject2 = "Kopie van uw bericht";
                $message =  "Gegevens" . "\n\n" . "\n" . "Naam: " . $name . "\n" . "Telefoonnummer: " . $telnummer . "\n" . "Email: " . $from . "\n\n" . "Bericht:" . "\n\n" . $_POST['message'];
                $message2 = "Bijgaand ontvangt u een kopie van uw bericht " . $name . "\n\n" . $_POST['message'];

                $headers = "From:" . $from;
                $headers2 = "From:" . $to;
                mail($to,$subject,$message,$headers);
                mail($from,$subject2,$message2,$headers2);
                echo "We hebben uw bericht ontvangen " . $name . ". Er wordt spoedig mogelijk contact opgenomen.";
            }
	}
}
	

