<?php
   function add_comment($type,$id,$title,$comment,$account_id){
      switch ($type){
         case "problem":
            $ac_query = "insert into comment(account_id,problem_id,title,comment,date_time) values($account_id,$id,$title,$comment,now())";
         break;

         case "resolved":
            $ac_query = "insert into comment(account_id,resolved_problem_id,title,comment,date_time) values($account_id,$id,$title,$comment,now())";
         break;
      }
   }
?>