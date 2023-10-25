<?php
require_once "db_connect.php";
function showAllPost($type,$start){
    $db =dbConnect();
    if($type==1){
        $qry = "SELECT * FROM post WHERE posttype=$type LIMIT $start,9";
    }else{
        $qry= "SELECT * FROM post LIMIT $start,9";
    }
        $result=mysqli_query($db,$qry);
        while($post=mysqli_fetch_array($result)){
            $postId=$post['id'];
            echo "<div class='card col-md-4 mx-4 my-2' style='width: 20.5rem;'>";
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
function getAllPostAdmin(){
    $db=dbConnect();
    $qry="SELECT * FROM post";
    $result=mysqli_query($db,$qry);
    return $result;
}
function getCategory($postid){//$postid
    $db=dbConnect();
    $qry="SELECT * FROM post INNER JOIN category on category.id=post.category AND post.id=$postid";
    $result=mysqli_query($db,$qry);
     foreach($result as $category){
        return $category['name'];
     }
}

function categoryPost($categoryId,$type,$start){
    $db=dbConnect();
    if($type==1){
        $qry = "SELECT * FROM post WHERE posttype=$type AND category=$categoryId LIMIT $start,9";
    }else{
        $qry= "SELECT * FROM post WHERE category=$categoryId LIMIT $start,9";
    }
    $result=mysqli_query($db,$qry);
    foreach($result as $post){
        $postId=$post['id'];
        echo "<div class='card col-md-4 mx-4 my-2' style='width: 20.5rem;'>";
        echo "<img src='assets/upload/".$post['imglink']."' class='card-img-top img-fluid'>";
        echo "<div class='card-body'>";
        echo "<h5 class='card-title'>".$post['posttitle']."</h5>";
        echo "<p class='card-text'>".substr($post['postcontent'],0,100)."</p>";
        echo "<a href='postdetail.php?pid=$postId' class='btn btn-primary'>More Detail</a>";
        echo "</div></div>";
    }
}

//pagination  
    function getPostCountMember(){
    $db=dbConnect();
    $qry="SELECT * FROM post";
    $result=mysqli_query($db,$qry);
   return $row=mysqli_num_rows($result);
    }
    function getPostCountNonMember(){
        $db=dbConnect();
        $qry="SELECT * FROM post WHERE posttype=1";
        $result=mysqli_query($db,$qry);
       return $row=mysqli_num_rows($result);
        }

//pagination for category
        function getPostCountMemberCategory($categoryId){
            $db=dbConnect();
            $qry="SELECT * FROM post where category=$categoryId";
            $result=mysqli_query($db,$qry);
           return $row=mysqli_num_rows($result);
            }
            function getPostCountNonMemberCategory($categoryId){
                $db=dbConnect();
                $qry="SELECT * FROM post WHERE posttype=1 AND category=$categoryId";
                $result=mysqli_query($db,$qry);
               return $row=mysqli_num_rows($result);
                }
        

  

    

?>
