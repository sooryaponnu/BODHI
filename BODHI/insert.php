<?php
error_reporting(0);
        
        $conn = mysqli_connect("localhost", "root", "", "contact");

        
        if($conn === false){
            die("ERROR: Could not connect. ". mysqli_connect_error());
        }

      
        $name = $_REQUEST['name'];
       
        $email = $_REQUEST['email'];
        $subject = $_REQUEST['subject'];
        $msg = $_REQUEST['message'];

        $sql = "INSERT INTO bodhi VALUES ('$name',
            '$email','$subject','$msg')";

      
         if(mysqli_query($conn, $sql))
         {
          
            
         } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }

   
        mysqli_close($conn);
        ?>