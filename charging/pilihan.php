<!doctype html>
<html>
<head>
<meta name = "judul" content="belajar coding">
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.button {
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button1 {background-color: #04AA6D; width:620px; height : 100px;border-radius:30px;} /* Green */
.button2 {background-color: #008CBA;width:620px; height : 100px;border-radius:30px;} /* Blue */
.button3 {background-color: #04AA6D;width:620px; height : 100px;border-radius:30px;} /* Green */
.button4 {background-color: #008CBA;width:620px; height : 100px;border-radius:30px;} /* Blue */
</style>
</head>
<body>

<body>
<!-- Sidebar -->
<div class="w3-sidebar w3-bar-block w3-border-right" style="display:none" id="mySidebar">
    <button onclick="w3_close()" class="w3-bar-item w3-large">x</button>
    <a href="#" class="w3-bar-item w3-button">kembali</a>
  
  </div>
  
  <!-- Page Content -->
  <div class="w3-teal">
    <button class="w3-button w3-teal w3-xlarge" onclick="w3_open()">☰</button>
    <div class="w3-container">
    </div>
  </div>

  
  <div class="w3-container">
  </div>
  
  <script>
  function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
  }
  
  function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
  }
  </script>
 <br><br><br><br><br>
 <table align="center">
    <tr>
        <th> <a class="button button1" href="../esp2/guest1.php" ><h1 align="center">Charging 1</h1></a\></th> </tr>
        <tr><th> <a class="button button2" href="../esp2/guest2.php"><h1 align="center">Charging 2</h1></a></th> </tr>
        <tr><th> <a class="button button3" href="../esp2/guest3.php"><h1 align="center">Charging 3</h1></a></th> </tr>
        <tr><th> <a class="button button4" href="../esp2/guest4.php"><h1 align="center">Charging 4</h1></a></th>
    </tr>
</table>




</body>
</html>