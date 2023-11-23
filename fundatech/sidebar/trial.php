<!DOCTYPE HTML>
<html>
<title></title>
<head>
    
    <style> table, th, td {border : 3px solid rgba(5, 240, 36, 0.349);}</style>
</head> 
<body>

<form action="" method="POST" class="main-form">

<table>
<tr>
<th bgcolor="yellow">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2017-03&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
</tr>
<div class="form-group">
    <td><input type="text" name="s1" placeholder="s1"  class="gt-input" size="4" value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $s1 ?>"></td>
    <td><input type="text" name="s2" placeholder="s2"  class="gt-input" size="4" value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $s2 ?>"></td>
    <td><input type="text" name="s3" placeholder="s3"  class="gt-input" size="4"  value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $s3 ?>"></td>
    <td><input type="text" name="s4" placeholder="s4"  class="gt-input" size="4" value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $s4 ?>"></td> 
    <td><input type="text" name="s5" placeholder="s5"  class="gt-input" size="4" value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $s5 ?>"></td> 

    <table align="center">
    </br>
    
    
    <td  bgcolor="sky blue" >
    <input type="submit" bgcolor="black" class="gt-button" value="Submit" name="submit" style="width: 500px;"  ></td>
    </table>


    <?php
    
       

        $dbHost = "localhost";
        $dbUser = "root";
        $dbPassword = "";
        $dbName = "phpproject";


        try {
            $dsn = "mysql:host=" . $dbHost . ";dbname=" . $dbName;
            $pdo = new PDO($dsn, $dbUser, $dbPassword);
          } catch(PDOException $e) 
          {
            echo "DB Connection Failed: " . $e->getMessage();
          }
         
          if($_SERVER['REQUEST_METHOD'] == 'POST') 
          {
            $s1 = $_POST['s1'];
            $s2 = $_POST['s2'];
            $s3 = $_POST['s3'];
            $s4 = $_POST['s4'];
            $s5 = $_POST['s5'];
          
            if(empty($s1) || empty($s2) || empty($s3)) 
            {
              echo "All fields are compulsory.";
            } else 
            
            {
                $sql = "INSERT INTO addfunda(s1, s2, s3,s4,s5) VALUES (:s1, :s2, :s3,:s4,:s5)";

                $stmt = $pdo->prepare($sql);
                
                $stmt->execute(['s1' => $s1, 's2' => $s2, 's3' => $s3,'s4' => $s4,'s5' => $s5]);
          
                echo "Your message was sent";
                $name = "";
                $email = "";
                $message = "";
              }
          }
          
          
          
          ?>
        


    </table>
</form>
</body>
</html>