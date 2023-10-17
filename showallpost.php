<?php
   
       include_once "view/top.php";
       
    if(checkSession("username")==null){
        header("location:index.php"); 
    }
    
    else if(checkSession("username")){

       if(getsession("username")==="zwewathone"){

            
       ?>
       <div class="container my-3">
    <div class="row">
        <?php include_once "view/sidebar.php"?>
      <section class="col-sm-9">

            <table id="example1" class="table table-bordered">
                <thead>
                    <th>posttitle</th>
                    <th>postwriter</th>
                    <th>postcontent</th>
                    <th>imglink</th>
                    <th>category</th>
                    <th>created_at</th>
                    <th>tool</th>
                </thead>
                <?php
                $result=getAllPostAdmin();
                foreach($result as $data){
                        $postid=$data['id'];
            echo    "<tbody>";
            echo        "<tr>";
            echo            "<td>".$data['posttitle']."</td>";
            echo            "<td>".$data['postwriter']."</td>";
            echo            "<td>".substr($data['postcontent'],0,100)."</td>";
            echo            "<td>".$data['imglink']."</td>";                   
            echo            "<td>".$data['category']."</td>";
            echo            "<td>".$data['created_at']."</td>";
            echo            "<td><a href='postEdit.php?pid=$postid' class='btn btn-sm btn-danger'>Edit</a></td>";
            echo        "</tr>";
            echo    "</tbody>";
            }
            ?>
            </table>
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