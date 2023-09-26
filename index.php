<?php
   
       include_once "view/top.php";
     include_once "view/nav.php";
    include_once "view/header.php";
?>
<div class="container my-3">
    <div class="row">
        <?php include_once "view/sidebar.php"?>
      <section class="col-md-9">
        <div class="row">
            <div class="card col-md-6" style="width: 20.4rem;"><!--card start-->
             <img src="assets/img/card_img/1.jpg" class="card-img-top" alt="...">
             <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div><!--card end-->
            <div class="card col-md-6" style="width: 20.4rem;"><!--card start-->
              <img src="assets/img/card_img/1.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
           </div><!--card end-->
           <div class="card col-md-6" style="width: 20.4rem;"><!--card start-->
              <img src="assets/img/card_img/1.jpg" class="card-img-top" alt="...">
              <div class="card-body">
               <h5 class="card-title">Card title</h5>
               <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
               <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div><!--card end-->
         </div>  
       </section>
    </div>
</div>
<?php 
include_once "view/footer.php";
include_once "view/botton.php";
?>


