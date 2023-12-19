<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="style.css">
    <title>Monitoring</title>

    <script type="text/javascript" src="jquery/jquery.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            setInterval(function(){
                $('#ach1').load("ach1.php");
                $('#vch1').load("vch1.php");
                $('#baterai1').load("baterai1.php");
                
            }, 500);
        }) ;
    </script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
  <div class="w3-sidebar w3-bar-block w3-border-right" style="display:none" id="mySidebar">
  <button onclick="w3_close()" class="w3-bar-item w3-large">X</button>
    
    <a href="../esp2/pilihan.php"class="w3-bar-item w3-button">Kembali</a>

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
  <br>
  <br>
  <table style="width:100%" align="center" >
  <tr>
  <td  align ="center"><div  style = "width:620px; height : 330px; border-radius:30px;  background: rgb(12, 192, 223); clip-path: polygon();" > 
  <h1>Charging 1</h1>
  <table style="width:100%" align="center">
  <tr>
  <td > <div class="speedometer-container">
        <div class="speedometer-text">
            <div class="static">Arus</div>
            <div class="dynamic">
                <span id="ach1">0</span>
                <span class="unit">A</span>
            </div>
        </div>
        <div class="center-point"></div>
        <div class="speedometer-center-hide"></div>
        <div class="speedometer-bottom-hide"></div>
        <div class="arrow-container">
            <div class="arrow-wrapper speed-0">
                <div class="arrow"></div>
            </div>
        </div>
        <div class="speedometer-scale speedometer-scale-1 active"></div>
        <div class="speedometer-scale speedometer-scale-2"></div>
        <div class="speedometer-scale speedometer-scale-3"></div>
        <div class="speedometer-scale speedometer-scale-4"></div>
        <div class="speedometer-scale speedometer-scale-5"></div>
        <div class="speedometer-scale speedometer-scale-6"></div>
        <div class="speedometer-scale speedometer-scale-7"></div>
        <div class="speedometer-scale speedometer-scale-8"></div>
        <div class="speedometer-scale speedometer-scale-9"></div>
        <div class="speedometer-scale speedometer-scale-10"></div>
        <div class="speedometer-scale speedometer-scale-11"></div>
        <div class="speedometer-scale speedometer-scale-12"></div>
        <div class="speedometer-scale speedometer-scale-13"></div>
        <div class="speedometer-scale speedometer-scale-14"></div>
        <div class="speedometer-scale speedometer-scale-15"></div>
        <div class="speedometer-scale speedometer-scale-16"></div>
        <div class="speedometer-scale speedometer-scale-17"></div>
        <div class="speedometer-scale speedometer-scale-18"></div>
        <div class="speedometer-scale speedometer-scale-19"></div>
    </div>
 
    <script src="logic.js"></script>
</td>
<td><div style = "width:10px; height : 330px; border-radius:30px;  background: rgb(12, 192, 223); clip-path: polygon(); " align ="center"> </div></td>

<td > <div class="speedometer-container">
        <div class="speedometer-text">
            <div class="static">tegangan</div>
            <div class="dynamic">
                <span id="vch1">0</span>
                <span class="unit">V</span>
            </div>
        </div>
        <div class="center-point"></div>
        <div class="speedometer-center-hide"></div>
        <div class="speedometer-bottom-hide"></div>
        <div class="arrow-container">
            <div class="arrow-wrapper speed-0">
                <div class="arrow"></div>
            </div>
        </div>
        <div class="speedometer-scale speedometer-scale-1 active"></div>
        <div class="speedometer-scale speedometer-scale-2"></div>
        <div class="speedometer-scale speedometer-scale-3"></div>
        <div class="speedometer-scale speedometer-scale-4"></div>
        <div class="speedometer-scale speedometer-scale-5"></div>
        <div class="speedometer-scale speedometer-scale-6"></div>
        <div class="speedometer-scale speedometer-scale-7"></div>
        <div class="speedometer-scale speedometer-scale-8"></div>
        <div class="speedometer-scale speedometer-scale-9"></div>
        <div class="speedometer-scale speedometer-scale-10"></div>
        <div class="speedometer-scale speedometer-scale-11"></div>
        <div class="speedometer-scale speedometer-scale-12"></div>
        <div class="speedometer-scale speedometer-scale-13"></div>
        <div class="speedometer-scale speedometer-scale-14"></div>
        <div class="speedometer-scale speedometer-scale-15"></div>
        <div class="speedometer-scale speedometer-scale-16"></div>
        <div class="speedometer-scale speedometer-scale-17"></div>
        <div class="speedometer-scale speedometer-scale-18"></div>
        <div class="speedometer-scale speedometer-scale-19"></div>
    </div>
 
    <script src="logic.js"></script>
</td>
</div></td> </td>

</tr> </table>

  </tr>
  
  </table>
  <br> <br><br><br><br><br><br><br><br>
  <table style="width:100%" align="center" >
  <tr>
  <td  align ="center"><div  style = "width:400px; height : 250px; border-radius:30px;  background: rgb(12, 192, 223); clip-path: polygon();" > <h1>Baterai</h1>
<br><br><br><h1>
<span id="baterai1">0</span>
  <span class="unit">%</span>
</h1>
</tr>
</table>      

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>