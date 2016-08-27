<?php
   $photo = $_POST['photo'];
   $date_uploaded = $_POST['date_uploaded'];
   $photo_date = $_POST['photo_date'];
   $problem_id = $_POST['problem_id'];
   $account_id = $_POST['account_id'];
   $points = $_POST['points'];

   $fields = "photo,date_uploaded,photo_date,problem_id,account_id,points";
   $values = "$photo,$date_uploaded,$photo_date,$problem_id,$account_id,$points";

   $query = "insert into resolved_problem($fields) values($values)";
   mysqli_query($conn,$query);
   //sample comment1
?>