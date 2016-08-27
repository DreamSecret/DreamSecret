<?php
   $id = $_POST['id'];

   $query = "delete from accounts where id=$id";
   if(mysqli_query($conn,$query)){

   }
   else{
      echo("Error");
   }

   function delete_account($id){
      $query = "delete from accounts where id=$id";
      mysqli_query($conn,$query);
   }
?>