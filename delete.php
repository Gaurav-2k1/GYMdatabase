<?php
   
   include 'connection.php';

   $ids = $_GET['ids'];

   $delequery = "DELETE from gymdb where Srno=$ids";

   $query = mysqli_query($con,$delequery);

   if($query){
       ?>
       <script>
           alert("deleted successfull");
       </script>
       <?php
       header('location:members.php');

   }
   else{
       ?>
       <script>
           alert("Not deleted");
       </script>
       <?php
   }

?>