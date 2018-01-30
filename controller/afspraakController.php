<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of afspraak
 *
 * @author binh_
 */
class Afspraak {

    public function __construct() {
        require_once './pages/afspraak.php';
        $this->_other();
    }

    protected function _other() {
        include 'DB-connectie.php';

        if(isset($_POST['vak'])) {
            
            $vak = filter_input(INPUT_POST, "vak");
            $email = $_SESSION['id'];
            
            $btijd = filter_input(INPUT_POST, "begintijd");
            $etijd = filter_input(INPUT_POST, "eindtijd");
            
            
            $begintijd = date('Y-m-d H:i:s', strtotime($btijd));
            $eindtijd = date('Y-m-d H:i:s', strtotime($etijd));
            
            
            
            
            try{ //'try' zodat er foutmelding gegeven wordt als het niet lukt met de catch
                $transStart = $pdo->prepare("START TRANSACTION"); //start transactie

                $afspraakmakenA = $pdo->prepare("INSERT INTO `afspraak` (`email`, `vak_id`, `eindtijd`, `begintijd`, `afgerond`) "
                        . "VALUES('" . $email . "', '" . $vak . "', '" . $eindtijd . "','" . $begintijd . "', 0)");

                $transCommit = $pdo->prepare("COMMIT"); //commit

                $transStart->execute();
                $afspraakmakenA->execute();
                $transCommit->execute();
                
                echo 'Afspraak maken gelukt!';
                die();
            }
            catch(PDOException $e) //foutmelding als iets niet werkt
            {
                print("Fout:" . $e->getMessage());
                $transRolback->execute(); //rollback uitvoeren
            }
        }
    }

}
