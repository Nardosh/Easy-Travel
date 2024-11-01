<?php
 $username ="root";
 $password = "";
 $server = 'localhost';
 $db = 'easytravel';

   $connection = mysqli_connect($server, $username, $password, $db);

if($connection){
   ?>
   <script>
      alert('Connection Successfull')
   </script>
   <?php
}else{
   echo "No connection";
}
?>