<?php
require_once "db_connect.php";
function showAllPost($type){
    $db =dbConnect();
    if($type==1){
        $qry = "SELECT * FROM post WHERE posttype=$type";
    }else{
        $qry= "SELECT * FROM post";
    }
        $result=mysqli_query($db,$qry);
        while($post=mysqli_fetch_array($result)){
            $postId=$post['id'];
            echo "<div class='card col-md-6 m-4' style='width: 20.5rem;'>";
            echo "<img src='assets/upload/".$post['imglink']."' class='card-img-top img-fluid'>";
            echo "<div class='card-body'>";
            echo "<h5 class='card-title'>".$post['posttitle']."</h5>";
            echo "<p class='card-text'>".substr($post['postcontent'],0,100)."</p>";
            echo "<a href='postdetail.php?pid=$postId' class='btn btn-primary'>More Detail</a>";
            echo "</div></div>";
        }
    }	  
function getSinglePost($pid){
            $db =dbConnect();
            $qry= "SELECT * FROM post WHERE id=$pid";
            $result=mysqli_query($db,$qry);
            return $result;
}
?>
