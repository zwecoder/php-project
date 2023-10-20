<?php
   
       include_once "view/top.php";
  $start =0;
  if(isset($_GET['page'])){
    $start = $_GET['page'];
  }
 
?>

<div class="container my-3">


<div class="d-flex justify-content-center"> <!-- pagination start -->
  <ul class="pagination">
  <li class="page-item"><a class="page-link" href="index.php">previous</a></li>
  <?php
   $pagination=0;
   if(checkSession("username")){
    $row=getPostCountMember();
    
   }else{
    $row=getPostCountNonMember();
   }
   
   for($i=0; $i<$row ;$i+=9){
     $pagination++;
     echo '<li class="page-item"><a class="page-link" href="index.php?page='.$i.'">'.$pagination.'</a></li>';
 }
 ?>
  <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</div><!-- pagination end -->
    <div class="row g-0">
        <?php //include_once "view/sidebar.php"; ?>
      <section class="col-md-12">
        <div class="row justify-content-center">
          <?php
         
          if(checkSession("username")){
           showAllPost(2,$start);
           
          }else{
            showAllPost(1,$start);
          }
          
          ?>
        
          <!--card <div class="card col-md-6" style="width: 20.4rem;">
              <img src="assets/img/card_img/1.jpg" class="card-img-top" alt="...">
              <div class="card-body">
               <h5 class="card-title">Card title</h5>
               <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
               <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div> end-->
         </div>  
       </section>
    </div>
</div>
<?php 
include_once "view/footer.php";
include_once "view/botton.php";
?>


