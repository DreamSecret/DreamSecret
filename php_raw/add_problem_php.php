<?php
   // $category = $_POST['category'];
   // $location = $_POST['location'];
   // $description = $_POST['description'];
   // $name_place = $_POST['name_place'];
   // $nearby_landmarks = $_POST['nearby_landmarks'];
   // $photo = $_POST['photo'];//eedit ni verds
   // $photo_date = $_POST['photo_date'];
   // $date_uploaded = $_POST['date_uploaded'];

   // $fields = "category,location,description,name_place,nearby_landmarks,photo,photo_date,date_uploaded";
   // $values = "$category,$location,$description,$name_place,$nearby_landmarks,$photo,$photo_date,$date_uploaded";

   // $query = "insert into problem($fields) values($values)";
   // if(mysqli_query($conn,$query)){

   // }
   // else{
      
   // }

   function add_problem($category,$location,$description,$name_place,$nearby_landmarks,$photo,$photo_date,$account_id){
      //$query = 'insert into problem(category,location,description,name_place,nearby_landmarks,photo,photo_date,date_uploaded) values($category,$location,$description,$name_place,$nearby_landmarks,$photo,$photo_date,now())';

      //echo("<script>alert('line 24');</script>");
      $conn = mysqli_connect("localhost","root","","dreamsecret_fh");
      $query = 'insert into problem(category,location,description,name_place,nearby_landmarks,photo,photo_date,date_uploaded,account_id) values("'.$category.'","'.$location.'","'.$description.'","'.$name_place.'","'.$nearby_landmarks.'","'.$photo.'","'.$photo_date.'",now(),"'.$account_id.'")';
      
      if(mysqli_query($conn,$query)){
      echo("<script>alert('Your data is saved');</script>");
      }
      else{
      echo("<script>alert('Error:".$query."');</script>");
      }
   }
?>