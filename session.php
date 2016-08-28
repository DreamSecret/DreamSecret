<?php
   session_start();
   if(!isset($_SESSION['user_id'])){
<<<<<<< HEAD
      header("location:index.php");
=======
      header("location:login.php");
>>>>>>> f35903894c087895c0d3ae04ca80c909a8e2b04b
   }
?>