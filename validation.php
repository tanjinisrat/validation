<!DOCTYPE HTML>
<html>

<head>
    <title>Registration Page </title>
</head>

<body>
<?php
$validatename=$validateemail=$name=$email=$validatepassword=$password=$validateusername=$username="";
$validatecpassword=$cpassword=$v1=$v2=$v3="";

if($_SERVER["REQUEST_METHOD"]= "POST"){
    $name = $_REQUEST["firstName"];
    $email = $_REQUEST["email"];
    $username = $_REQUEST["userName"];
    $password = $_REQUEST["password"];
    $cpassword = $_REQUEST["cpassword"];

    if(empty($_POST["firstName"])||!preg_match("/^[a-zA-Z-' ]*$/",$name))
    {
        $validatename="Valid Name is required.";
    }else{
            $validatename="Your name is ".$name;
        }
    if (empty($_POST["email"]) || !preg_match("@.",$email)) {
        $validateemail = "Valid Email is required";
    } 
    else{
        $email = "Your email is".$email;
    }
    if(empty($password) || (strlen($password))<6 || !preg_match("@#$%",$password))
    {
        $validatepassword = "Invalid password.";
    }
    if(empty($username)|| (strlen($username))<5){
        $validateusername = "Invalid user name";
    }
    else{
        $validateusername = "Your username is ".$username;
    }
    if($password!=$cpassword){
        $validatecpassword = "Password doesn't match.";
    }
if(!isset($_REQUEST["gender1"]) && !isset($_REQUEST["gender1"]) && !isset($_REQUEST["gender1"]))
{
    echo "Please select one gender.";
    
}else{

    if(isset($_REQUEST["gender1"])){
        echo $v1=$_REQUEST["gender1"];
    }
    elseif(isset($_REQUEST["gender2"])){
        echo $v2=$_REQUEST["gender2"];
    }elseif(isset($_REQUEST["gender3"])){
        echo $v3=$_REQUEST["gender3"];
    }

}
}







