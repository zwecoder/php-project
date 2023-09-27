<?php
require_once "db_connect.php";

function insertPost($posttitle,$postwriter,$posttype,$postcontent,$imglink){
   $created_at = created_at();
   $db=dbConnect();
  
   $qry ="INSERT INTO post (posttitle,postwriter,posttype,postcontent,imglink,created_at)
        VALUES
        ('$posttitle','$postwriter',$posttype,'$postcontent','$imglink','$created_at')";
   $result=mysqli_query($db,$qry);
   return $result; 
}

?>