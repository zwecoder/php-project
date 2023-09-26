<?php
   
       include_once "view/top.php";
     include_once "view/nav.php";
    include_once "view/header.php";
    if(checkSession("username")){
       if(getsession("username")==="zwewathone"){

       ?>
       <div class="container my-3">
    <div class="row">
        <?php include_once "view/sidebar.php"?>
      <section class="col-sm-9">
       <form enctype="multipart/form-data" class="border p-4 rounded mb-5">
        <h2 class="text-center text-primary english">Admin Post</h2>
    
            <div class="form-group">
                <label for="posttitle" class="english">Post Title</label>
                <input type="text" class="form-control english" id="posttitle" name="posttitle">
                <label for="postwriter" class="english">content writer</label>
                <input type="text" class="form-control english" id="postwriter" name="postwriter">
            </div>
            <label for="posttype" class="english">Post Type</label>
                <select class="form-select english" aria-label="select post type">
                    <option selected> select menu</option>
                    <option value="1">free</option>
                    <option value="2">paid</option>
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
       </section>
    </div>
</div>
       
       <?php 
       }else{
        header("location:index.php");
       }
    }
    
?>