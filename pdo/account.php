<?php
   // include "connectdb.php";
    
     function validated($name, $pass){
        $conn = connect();
         $stm = $conn->prepare("SELECT * FROM account WHERE username='$name' AND password='$pass'");
        $stm->execute();
        $result = $stm->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stm->fetchAll();
        if(count($kq)>0)
            return $kq[0]['role'];
        else
             return -1;
 }
?>
