<?php
   $category = $_POST['category'];
   $location = $_POST['location'];
   $description = $_POST['description'];
   $name_place = $_POST['name_place'];
   $nearby_landmarks = $_POST['nearby_landmarks'];
   $photo = $_POST['photo'];//eedit ni verds
   $photo_date = $_POST['photo_date'];
   $date_uploaded = $_POST['date_uploaded'];

   $fields = "category,location,description,name_place,nearby_landmarks,photo,photo_date,date_uploaded";
   $values = "$category,$location,$description,$name_place,$nearby_landmarks,$photo,$photo_date,$date_uploaded";

   $query = "insert into problem($fields) values($values)";
   if(mysqli_query($conn,$query)){

   }
   else{
      
   }

   function add_problem($category,$location,$description,$name_place,$nearby_landmarks,$photo,$photo_date){
      $query = "insert into problem(category,location,description,name_place,nearby_landmarks,photo,photo_date,date_uploaded) values($category,$location,$description,$name_place,$nearby_landmarks,$photo,$photo_date,now())";
      mysqli_query($conn,$query);
   }
?>