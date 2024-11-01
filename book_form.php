<?php

   $connection = mysqli_connect('localhost','root','','easytravel');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $location = $_POST['location'];
      $guests = $_POST['guests'];
      $arrivals = $_POST['arrivals'];
      $leaving = $_POST['leaving'];

      $request = " insert into booking(name, email, phone, address, location, guests, arrivals, leaving) values('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving') ";
      
      $res = mysqli_query($connection, $request);
      if($res){
         ?>
         <script>
            alert('Data inserted properly');
         </script>
         <?php
      }

      // die("something went wrong please try again!");
   }

   header('location:thanks.php'); 
   
?>