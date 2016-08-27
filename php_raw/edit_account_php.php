<?php
   $id=$_POST['id'];
   $organization=$_POST['organization'];
   $first_name=$_POST['first_name'];
   $last_name=$_POST['last_name'];
   $codename=$_POST['codename'];
   $display_picture=$_POST['display_picture'];
   $address=$_POST['address'];
   $municipality=$_POST['municipality'];

   $fields = "organization,first_name,last_name,codename,display_picture,address,municipality";
   $values = "$organization,$first_name,$last_name,$codename,$display_picture,$address,$municipality";

   $query="update accounts set organization=$organization,first_name=$first_name,last_name=$last_name,codename=$codename,display_picture=$display_picture,address=$address,municipality=$municipality where id=$id";
   if(mysqli_query($conn,$query)){}
   else{
      echo"<script>alert('Error');</script>";
   }

   function edit_account($id,$organization,$first_name,$last_name,$codename,$display_picture,$address,$municipality){
      $query = "update accounts set organization=$organization,first_name=$first_name,last_name=$last_name,codename=$codename,display_picture=$display_picture,address=$address,municipality=$municipality where id=$id";

      mysqli_query($conn,$query);
   }
?>