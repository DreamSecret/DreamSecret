<?php
   /*$id=$_POST['id'];
   $organization=$_POST['organization'];
   $first_name=$_POST['first_name'];
   $last_name=$_POST['last_name'];
   $codename=$_POST['codename'];
   $display_picture=$_POST['display_picture'];
   $address=$_POST['address'];
   $municipality=$_POST['municipality'];

   $fields = "organization,first_name,last_name,codename,display_picture,address,municipality";
   $values = "$organization,$first_name,$last_name,$codename,$display_picture,$address,$municipality";

   $query="insert into accounts($fields) values($values)";
   if(mysqli_query($conn,$query)){}
   else{
      echo"<script>alert('Error');</script>";
   }*/

   function add_account($organization,$first_name,$last_name,$codename,$display_picture,$address,$municipality,$password){
      include("../connection.php");
      echo("<script>alert('21');</script>");
      $query = "insert into accounts(organization,first_name,last_name,codename,display_picture,address,municipality,password) values($organization,$first_name,$last_name,$codename,$display_picture,$address,$password)";
      if(mysqli_query($conn,$query)){
         echo("<script>alert('Success');</script>");
      }
      else{
         echo("<script>alert('Error');</script>");
      }
      
   }
?>