<?php
session_start();
extract($_POST);
$s=explode("@",$email);
$str=$s[0];
$_SESSION["security"]="Deekshith";
if(strcmp($psw1,$psw)==0){
echo "<!DOCTYPE html>
<html>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
}

#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;
}

h1 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

input.invalid {
  background-color: #ffdddd;
}

.tab {
  display: none;
}

button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

.step.finish {
  background-color: #4CAF50;
}
</style>
<body>

<form id='regForm' method='POST' action='abc.php'>
  <h1>Register:</h1>
  
  <div class='tab'>Name:
    <p><input placeholder='First name...' oninput=\"this.className = ''\" name='fname'></p>
    <p><input placeholder='Last name...' oninput=\"this.className = ''\" name='lname'></p>
  </div>
  <div class='tab'>Contact Info:
    <p><input placeholder='E-mail...' oninput=\"this.className = ''\" name='email'></p>
    <p><input placeholder='Phone...' oninput=\"this.className = ''\" name='phone'></p>
  </div>
  <div class='tab'>Birthday:
    <p><input placeholder='dd' oninput=\"this.className = ''\" name='dd'></p>
    <p><input placeholder='mm' oninput=\"this.className = ''\" name='nn'></p>
    <p><input placeholder='yyyy' oninput=\"this.className = ''\" name='yyyy'></p>
  </div>
  <div class='tab'>Login Info:
    <p><input placeholder='Username...' oninput=\"this.className = ''\" name='uname'></p>
    <p><input placeholder='Password...' oninput=\"this.className = ''\" name='pword' type='password'></p>
  </div>
  <div style='overflow:auto;'>
    <div style='float:right;'>
      <button type='button' id='prevBtn' onclick='nextPrev(-1)'>Previous</button>
      <button type='button' id='nextBtn' onclick='nextPrev(1)'>Next</button>
    </div>
  </div>
  
  <div style='text-align:center;margin-top:40px;'>
    <span class='step'></span>
    <span class='step'></span>
    <span class='step'></span>
    <span class='step'></span>
  </div>
</form>

<script>
var currentTab = 0;
showTab(currentTab); 

function showTab(n) {
  
  var x = document.getElementsByClassName('tab');
  x[n].style.display = 'block';
  
  if (n == 0) {
    document.getElementById('prevBtn').style.display = 'none';
  } else {
    document.getElementById('prevBtn').style.display = 'inline';
  }
  if (n == (x.length - 1)) {
    document.getElementById('nextBtn').innerHTML = 'Submit';
  } else {
    document.getElementById('nextBtn').innerHTML = 'Next';
  }
  
}

function nextPrev(n) {
  var x = document.getElementsByClassName('tab');
  if (n == 1 && !validateForm()) return false;
  x[currentTab].style.display = 'none';
  currentTab = currentTab + n;
  if (currentTab >= x.length) {
    document.getElementById('regForm').submit();
    return false;
  }
  showTab(currentTab);
}

function validateForm() {
  var x, y, i, valid = true;
  x = document.getElementsByClassName('tab');
  y = x[currentTab].getElementsByTagName('input');
  for (i = 0; i < y.length; i++) {
    if (y[i].value == '') {
      y[i].className += ' invalid';
       valid = false;
    }
  }
   if (valid) {
    document.getElementsByClassName('step')[currentTab].className += ' finish';
  }
  return valid; 
}

</script>

</body>
</html>";
}
else{
    include("abc.html");
    echo "<script>
    alert('please re-enter the same password in \'Repeat Password\' ' )
    </script>";
}
?>