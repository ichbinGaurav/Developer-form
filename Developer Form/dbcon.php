<?php
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "developer";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password,$db);
    if($con){
       ?>
       <script>
           alert("Connection successfull");
       </script>
       <?php
    }
    else
    {
        ?>
       <script>
           alert("NO Connection");
       </script>
       <?php
    }
?>
