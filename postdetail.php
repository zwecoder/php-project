<?php
   
       include_once "view/top.php";
     include_once "view/nav.php";
    include_once "view/header.php";
    include_once "systemgen/postgenerator.php";
    if(isset($_GET['pid'])){
        $pid =$_GET['pid'];
        $result=getSinglePost($pid);
    }
?>
<div class="container my-3">
    <div class="row g-0">
    <h1>Post Detail</h1> 
        <div class="card col-md-8 offset-md-2">
            <?php
            foreach($result as $data){
            echo '<img src="assets/upload/'.$data["imglink"].'" class="card-img-top" alt="...">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">'.$data["posttitle"].'</h5>';
            echo '<div class="card-text">'.$data["postcontent"].'</div>';
            echo '<p class="card-text"><small class="text-muted">Last updated '.$data["created_at"].'</small></p>';
            echo '<div class="card-footer bg-transparent">'.$data["postwriter"].'</div>';
            
        
        }?>
            
        </div>
    </div>
</div>
<?php 
include_once "view/footer.php";
include_once "view/botton.php";
?>


