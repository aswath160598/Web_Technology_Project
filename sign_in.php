<?php
session_start();
extract($_POST);
$fl=fopen("login.txt","r");
//$fl1=fopen("login.txt","a");
$s=fgets($fl);
$acc=explode(",",$s);
for($i=0;$i<count($acc);$i++){
$user[$i]=explode("-",$acc[$i]);
}
$c=0;
for($i=0;$i<count($user);$i++){
    $x=$user[$i];
    if($uname==trim($x[0]) && $psw==trim($x[1])){
        include("abc.html");
        echo "<div style='display: inline-block;position:fixed;text-shadow:2px 2px 0 rgba(128,128,128,0.5);top:25%;right:1%;padding: 0 25px;height: 60px;font-size: 28px;line-height: 50px;border-radius: 25px;background-color: ghostwhite;'><img src='acc1.png' width='5%' style='float: left;margin: 0 10px 0 -25px;height: 60px;width: 60px;border-radius: 50%;'>$x[0] <i style='font-size:15px;color:blue;text-shadow:0 0 0 black;'> (Logged in)</i></div>
        ";
        $c=1;
        echo "<script>
        var x=document.getElementById('d2');
        var x1=document.getElementById('bt1');
        x.removeChild(x1);
        </script>";
        break;
    }
}
if($c==0)
       echo "User Credentials Not Found!!!<br>Please sign up";
//fclose($fl1);
fclose($fl);
?>