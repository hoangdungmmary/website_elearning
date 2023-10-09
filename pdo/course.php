<?php
     include "connectdb.php";


    function getAll_course(){  
      $conn = connect();    
      $sql =" SELECT * FROM course order by id DESC";
      $stm = $conn->prepare($sql);
      $stm->execute();
      // tra ve 1 mang
     $stm->setFetchMode(PDO::FETCH_ASSOC);
    $kq =$stm->fetchAll();
      return $kq;
    }
    
?>






