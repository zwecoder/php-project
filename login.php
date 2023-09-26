

<?php 
 include_once "view/top.php";
include_once "view/nav.php";
include_once "systemgen/membership.php";
     
        if(isset($_POST["submit"])){
$email = $_POST['email'];
$password=$_POST['password'];
$login=loginUser($email,$password);
$message="";
switch ($login) {
    case 'login success':
        $message="login success"; 
        if(checkSession("username")){
            if(getSession("username")==="zwewathone"&& getSession("email")==="zwewathone77@gmail.com");
            header("location:admin.php");
        }else{
        header("location:index.php");
        }
        break;
    case 'login fail':
        $message="login fail";   # code...
         break;
    case 'auth fail':
        $message="auth fail";   # code...
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
        <h1 class="english text-center text-primary">Login to my page</h1>
        <form action="<?php $_PHP_SELF ?>" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                 <label for="exampleInputPassword1" class="form-label">Password</label>
                 <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="check">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
             </div>
                <button type="submit" name="submit" value="submit" class="btn btn-primary justify-content-md-end">login</button> 
                
        </form>
    </div>
</div>
<?php 
include_once "view/footer.php";
include_once "view/botton.php";
?>


