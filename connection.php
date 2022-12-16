    <?php
    
    $hostName='localhost';
    $userName='root';
    $userPass='';
    $dbName='apratim';

    $con=mysqli_connect($hostName,$userName,$userPass,$dbName);
     if(!$con){
        echo "connection failed";
     }
     else
         echo "connection success";
    ?>
