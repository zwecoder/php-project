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
            echo "<div class='card col-md-6 m-4' style='width: 20.5rem;'>";
            echo "<img src='assets/imgs/Call Of Duty Ghosts.jpg' class='card-img-top'>";
            echo "<div class='card-body'>";
            echo "<h5 class='card-title'>".$post['posttitle']."</h5>";
            echo "<p class='card-text'>".substr($post['postcontent'],0,100)."</p>";
            echo "<a href='#' class='btn btn-primary'>Go somewhere</a>";
            echo "</div></div>";
        }
    }	  

?>
