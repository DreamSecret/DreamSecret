<?php
   $id = $_POST['id'];
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

   $query = "update problem set category=$category,location=$location,description=$description,name_place=$name_place,nearby_landmarks=$nearby_landmarks,photo=$photo,photo_date=$photo_date,date_uploaded=$date_uploaded";
   if(mysqli_query($conn,$query)){

   }
   else{
      
   }

   function edit_problem($id,$category,$location,$description,$name_place,$nearby_landmarks,$photo,$photo_date){
      $query = "update problem set category=$category,location=$location,description=$description,name_place=$name_place,nearby_landmarks=$nearby_landmarks,photo=$photo,$photo_date";

      mysqli_query($conn,$query);
   }
?>