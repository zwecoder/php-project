<?php
   
       include_once "view/top.php";
     include_once "view/nav.php";
    include_once "view/header.php";
    include_once "systemgen/postgenerator.php";
    if(isset($_GET['category'])){
      $categoryId = $_GET['category'];
      
    }
?>
<div class="container my-3">
    <div class="row g-0">
        <?php //include_once "view/sidebar.php"; ?>
      <section class="col-md-12">
        <div class="row justify-content-center">
          <?php
         
          if(checkSession("username")){
            
            categoryPost($categoryId,2);
           
          }else{
            categoryPost($categoryId,1);
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


