<?php
       include_once "view/top.php";
    
     include_once "systemgen/membership.php";
      
   
     if(isset($_POST["submit"])){
        $username=$_POST["username"];
        $email=$_POST["email"];
        $password=$_POST["password"];
       $ret= registerUser($username,$email,$password);
       $message="";
        switch ($ret) {
            case 'register successful':
                $message="register successful"; 
                setSession("username",$username);
                setSession("email",$username);
                if($username==="zwewathone" && $email="zwewathone77@gmail.com"){
                    header("location:admin.php");
                }else{
                    header("location:index.php"); 
                }
                break;
            case 'email is already exit':
                $message="email is already exit";   # code...
                 break;
            case 'register fail':
                $message="register fail";    # code...
                break;
            case 'fail':
                $message="password do not strong";   # code...
            break;
            
            default:
                # code...
                break;
        }
     }
     echo "<div class='container'><div class='alert alert-warning alert-dismissible fade show' role='alert'>"
     .$message.
     "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
   </div></div>";
?>
<div class="container my-3">
    <div class="col-md-8 offset-md-2 border p-5">
        <h1 class="english text-center text-primary">Register to be member</h1>
        <form action="<?php $_PHP_SELF ?>" method="POST">
        <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" id="username">
               
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="email">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <label for="inputPassword5" class="form-label">Password</label>
                <input type="password" id="password" class="form-control" name="password">
                    <div id="passwordHelpBlock" class="form-text">
                        Your password must be 6-20 characters long, contain letters,numbers, and special characters.
                    </div>
                <p></p>
                <button type="submit" value="submit" name="submit" class="btn btn-primary justify-content-md-end">login</button> 
                
        </form>
    </div>
</div>
<?php 
include_once "view/footer.php";
include_once "view/botton.php";
?>


