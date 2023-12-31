<?php
   
       include_once "view/top.php";
       
    
    if(checkSession("username")==null){
        header("location:index.php"); 
    }
    
    else if(checkSession("username")){

       if(getsession("username")==="zwewathone"){

            if(isset($_POST['submit'])){
                $posttitle=$_POST["posttitle"];
                $postwriter=$_POST["postwriter"];
                $posttype=$_POST["posttype"];
                $category=$_POST["category"];
                $postcontent=$_POST["postcontent"];
                $imglink=mt_rand(time(),time())."-".$_FILES["file"]["name"];
                move_uploaded_file($_FILES['file']['tmp_name'],'assets/upload/'.$imglink);
                
               $bol = insertPost($posttitle,$postwriter,$posttype,$category,$postcontent,$imglink);
                if($bol>0){
                    echo "<div class='container'><div class='alert alert-warning alert-dismissible fade show' role='alert'>
                    New Product created successfully!
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div></div>";
                }else{
                    echo "<div class='container'><div class='alert alert-warning alert-dismissible fade show' role='alert'>
                    Post insert failed!
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div></div>";
                }
            }
       ?>
       <div class="container my-3">
    <div class="row">
        <?php include_once "view/sidebar.php"?>
      <section class="col-sm-9">
       <form method="POST" action="<?php $_PHP_SELF ?>" enctype="multipart/form-data" class="border p-4 rounded mb-5">
        <h2 class="text-center text-primary english">Admin Post</h2>
            <div class="form-group">
                <label for="posttitle" class="english">Post Title</label>
                <input type="text" class="form-control english" id="posttitle" name="posttitle">
                <label for="postwriter" class="english">content writer</label>
                <input type="text" class="form-control english" id="postwriter" name="postwriter">
            </div>
            <label for="posttype" class="english">Post Type</label>
                <select class="form-select english" name="posttype" aria-label="select post type">
                    <option selected> select menu</option>
                    <option value="1">free</option>
                    <option value="2">paid</option>
                </select>
                <label for="category" class="english">Post category</label>
                <select class="form-select english" name="category" aria-label="select post type">
                    <option selected> select category</option>
                    <?php generate_category(); ?>
                </select>
                <div class="mb-3">
                    <label for="formFile" class="form-label english">Default file input example</label>
                    <input class="form-control english" type="file" id="formFile" name="file">
                </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label english">Type your content</label>
                <textarea class="form-control english" id="postcontent" name="postcontent" rows="10"></textarea>
            </div>   
            <div class="d-flex justify-content-end">
            <button class="btn btn-outline-primary me-2" type="submit" name="cancel">Cancel</button>
            <button class="btn btn-primary" type="submit" name="submit">Post</button>
            </div>
        </form>
       </section>
    </div>
</div>
       
       <?php 
       }
       else{
        header("location:index.php");
       }
    }
    
    include_once "view/footer.php";
    include_once "view/botton.php";
       
?>