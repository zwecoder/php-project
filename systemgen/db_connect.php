<?php
define("DB_HOST","localhost");
define("DB_NAME","php_project");
define("DB_USER","root");
define("DB_PASSWORD","");

function dbConnect(){
    $db = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
    if(mysqli_connect_errno()){
        echo "database connection fail!";
    }else{
       return $db;
    }
}
function loginUserCheck($email,$password){
  $password=encodePass($password);
  $db =dbConnect();
  $qry ="SELECT name FROM member WHERE email='$email' AND password='$password'";
  $result=mysqli_query($db,$qry);
 if(mysqli_num_rows($result)>0){
    $username="";
  foreach($result as $res){
    $username=$res['name'];
  }
  echo $username;
  setSession("username",$username);
    setSession("email",$email);
  return "login success";
}else{
    return "login fail";
}
}
function insertUser($name,$email,$password){

  $password=encodePass($password);
   $current_Time=created_at();
 $db=dbConnect();
 $email_Check="SELECT * FROM member WHERE name='$name' OR email='$email'";
 $email_result=mysqli_query($db,$email_Check);
 if(mysqli_num_rows($email_result)>0){
    return "email is already exit";
 }else{


 $qry="INSERT INTO member (name,email,password,created_at,updated_at)
        VALUES 
       ('$name','$email','$password','$current_Time','$current_Time')";
$result=mysqli_query($db,$qry);
return $result >0? "register successful":"register fail";
 }
}


function encodePass($pass){
    $pass=md5($pass);
    $pass=sha1($pass);
    $pass=crypt($pass,$pass);
    return $pass; 
}
function created_at(){
    return date("Y-m-d H:m:s",time());
}

?>