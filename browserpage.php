<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>IEEE Conference</title>
    <link rel="stylesheet" href="time.css">
    <style>
body {
  font-family: Arial, Helvetica, sans-serif;
    background-image: url(cover.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
}

.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: blue;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
  </head>
  <body>
    <header>
      <section>
        <h1 style = "color: blue; text-align: center; ">Welcome to the IEEE Conference platform</h1>
      </section>
      <section>
        <div class="navbar">
  <a href="browserpage.php">Home</a>
  <a href="admin.php">Admin</a>

  <!--Contact us dropdown-->
  <div class="dropdown">
    <button class="dropbtn">Contact Us
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <ul>
        <li><button type="button" name="button" id="email" onclick="myFunction()">Email</button> </li>
        <li><button type="button" name="button" id="phone" onclick="myFunction1()">Phone Number</button> </li>
        <li><button type="button" name="button" id="address" onclick="myFunction2()">Address</button> </li>
      </ul>
    </div>
  </div>

  <!--participation dropdown-->
  <div class="dropdown">
    <button class="dropbtn">Participate
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="user-registration.php">Register</a>
      <a href="login.php">Login</a>
    </div>
  </div>
</div>
</section>
    </header>
<!--Time-->
<br><br><br><br>
<div class="container">
  <h2 style="color: blue;"> <span> Countdown to the Conference</span> </h2>
  <div class="countdown">
    <div id="day"></div>
    <div id="hour"></div>
    <div id="minute"></div>
    <div id="second"></div>

  </div>

</div>


<script type="text/javascript">
  var countDate = new Date('Dec 12, 2021 00:00:00').getTime();

  function newYear(){
    var now = new Date().getTime();
      gap = countDate - now;

        var second = 1000;
        var minute = second * 60;
        var hour = minute * 60;
        var day = hour * 24;

        var d = Math.floor(gap / (day));
        var h = Math.floor((gap % (day)) / (hour));
        var m = Math.floor((gap % (hour)) / (minute));
        var s = Math.floor((gap % (minute)) / (second));

        document.getElementById('day').innerText = d;
        document.getElementById('hour').innerText = h;
        document.getElementById('minute').innerText = m;
        document.getElementById('second').innerText = s;
  }

  setInterval(newYear, 1000);
</script>

<!--FOOTER-->
<footer style="position: fixed; bottom: 0; color: blue; ">&copy; Copyright 2021 IEEE PLATFORM</footer>

</body>

</html>
<script type="text/javascript">
function myFunction() {
document.getElementById("email").innerHTML = "ieeesupportteam@gmail.com";
}
function myFunction1() {
document.getElementById("phone").innerHTML = "+256390456789";
}
function myFunction2() {
document.getElementById("address").innerHTML = "Uganda Christian University!";
}
</script>
