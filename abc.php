<?php
session_start();
extract($_POST);
$fl=fopen("login.txt","a") or die("Unable to open file!!");
if(count($_POST)>0){
$s=",".$uname."-".$pword;
fwrite($fl,$s);
echo "<div style='position:absolute;top:40%;left:30%;width:20%;padding:5%;font-size:200%;border:1px solid grey;box-shadow:10px 10px 0 rgba(128,128,128,0.5)'>You can now Login with<br> Username: $uname and <br>Password:$pword<br><center><a href='abc.html'><button>Log In</button></a></center</div>";
}
else{
 include("abc.html");
 echo "<script>alert('Session Timed Out!!! Please re-enter the details')</script>";
}
fclose($fl);
?>
