<?php
   
       include_once "view/top.php";
       
   
    if(checkSession("username")==null){
        header("location:index.php"); 
    }
    
    else if(checkSession("username")){

       if(getsession("username")==="zwewathone"){
        if(isset($_GET['pid'])){
        $pid=$_GET['pid'];
        $result=getSinglePost($pid);
        $post=array();
        foreach($result as $data){
            
           $post["posttitle"]=$data["posttitle"];
           $post["postwriter"]=$data["postwriter"];
           $post["imglink"]=$data["imglink"];
          $post["postcontent"]=$data["postcontent"];
          }
          //update post
        if(isset($_POST["submit"])){
       
            if($_FILES["file"]["name"]==null){
           $newImg=$post["imglink"];//old image
            }else{
             $newImg=mt_rand(time(),time())."-".$_FILES["file"]["name"];
            move_uploaded_file($_FILES["file"]["tmp_name"],"assets/upload/".$newImg);
            }
           $editPostTilte=$_POST["posttitle"];
           $editPostWriter=$_POST["postwriter"];
           $editPostType=$_POST["posttype"];
           $editPostContent=$_POST["postcontent"];
           $editpostcategory=$_POST["editpostcategory"];  
           $imglink = $newImg;
           editPost($editPostTilte,$editPostWriter,$editPostType,$editpostcategory,$editPostContent,$imglink,$pid);
           
        }
        }
       ?>
       <div class="container my-3">
    <div class="row">
        <?php include_once "view/sidebar.php"?>
      <section class="col-sm-9">
       <form method="POST" action="<?php $_PHP_SELF ?>" enctype="multipart/form-data" class="border p-4 rounded mb-5">
        <h2 class="text-center text-primary english">Edit Post</h2>
            <div class="form-group">
                <label for="posttitle" class="english" >Edit Post Title</label>
                <input type="text" class="form-control english" id="posttitle" name="posttitle" value="<?php echo $post["posttitle"];?>">
                <label for="postwriter" class="english">Edit content writer</label>
                <input type="text" class="form-control english" id="postwriter" name="postwriter" value="<?php echo $post["postwriter"];?>">
            </div>
            <label for="posttype" class="english">Edit Post Type</label>
                <select class="form-select english" name="posttype" aria-label="select post type">
                    <option selected> select menu</option>
                    <option value="1">free</option>
                    <option value="2">paid</option>
                </select>
                <label for="editpostcategory" class="english">Edit Post category</label>
                <select class="form-select english" name="editpostcategory" aria-label="select post type">
                    <option selected> select category</option>
                    <?php generate_category(); ?>
                </select>
                <div class="mb-3" style="width:200px;">
                <label for="formFile" class="form-label english">edit image</label>
                <img src='assets/upload/<?php echo $post["imglink"];?>' class="rounded img-fluid" alt="...">
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label english">Edit file input</label>
                    <input class="form-control english" type="file" id="formFile" name="file">
                    
                </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label english">Type your content</label>
                <textarea class="form-control english" id="postcontent" name="postcontent" rows="10"><?php echo $post["postcontent"];?></textarea>
            </div>   
            <div class="d-flex justify-content-end">
            <button class="btn btn-outline-primary me-2" type="submit" name="cancel">Cancel</button>
            <button class="btn btn-primary" type="submit" name="submit">update Post</button>
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