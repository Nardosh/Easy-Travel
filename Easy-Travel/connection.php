<?php
 $username ="root";
 $password = "";
 $server = 'localhost';
 $db = 'book_db';

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