<?php
require_once "db_connect.php";

function insertPost($posttitle,$postwriter,$posttype,$category,$postcontent,$imglink){
   $created_at = created_at();
   $db=dbConnect();
  
   $qry ="INSERT INTO post (posttitle,postwriter,posttype,category,postcontent,imglink,created_at)
        VALUES
        ('$posttitle','$postwriter',$posttype,$category,'$postcontent','$imglink','$created_at')";
   $result=mysqli_query($db,$qry);
   return $result; 
}
function editPost($editPostTilte,$editPostWriter,$editPostType,$editpostcategory,$editPostContent,$imglink,$pid){
   $created_at = created_at();
   $db=dbConnect();
  
   $qry ="UPDATE post SET 
   posttitle='$editPostTilte', 
   postwriter='$editPostWriter',
   posttype=$editPostType,
   category=$editpostcategory,
   postcontent='$editPostContent',
   imglink='$imglink',
   created_at='$created_at' WHERE id=$pid";
   $result=mysqli_query($db,$qry);
   if($result){
      header("location: showallpost.php");
   }else{
      echo "<script>alert('post insert fail!')</alert>";
   }
}

          

?>