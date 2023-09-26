<?php
require_once "systemgen/db_connect.php";
function loginUser($email,$password){
    if(emailCheck($email) && passwordCheck($password)){
    return loginUserCheck($email,$password);
}else {
    return "auth fail";
}
}
function registerUser($username,$email,$password){
    if(usernameCheck($username) AND emailCheck($email) && passwordCheck($password)){
        return insertUser($username,$email,$password);
    }else {
        return "fail";
    }
}
function usernameCheck($username){
    if(strlen($username)>=6){
        $bol = preg_match('/^[\w]+$/',$username);
        return $bol;

    }else{
        return false;
    }
}
// email Check
function emailCheck($email){
if(strlen($email)>=15){
 $bol=preg_match('/^[a-zA-Z0-9]+@+[a-z]+\.[a-z]{2,4}+$/',$email);
 return $bol;
}else{
    return false;
}
}
//password check
function passwordCheck($password){
if(strlen($password)>=6){
$bol=preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*(_|[^\w]))(?=.*\d).+$/',$password);
return $bol;
}else{
    return false;
}
}


?>