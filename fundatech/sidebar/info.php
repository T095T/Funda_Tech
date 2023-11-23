<!DOCTYPE HTML>
<html>
<title></title>
<head>
    <link rel="stylesheet" href="dash.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style> table, th, td {border : 3px solid rgba(5, 240, 36, 0.349);}</style>
</head> 
<body>

<form action="" method="POST">

    <div class="area"></div><nav class="main-menu">
        <ul>
            <li>
                <a href="#">
                    <i class="fa fa-home fa-2x"></i>
                    <span class="nav-text">
                        Dashboard
                    </span>
                </a>
              
            </li>
            <li class="has-subnav">
                <a href="tttable.php">
                    <i class="fa fa-bar-chart-o fa-2x"></i>
                    <span class="nav-text">
                        Add Fundamentals
                    </span>
                </a>
                
            </li>
        </li>
        <li class="has-subnav">
            <a href="#">
                <i class="fa fa-bar-chart-o fa-2x"></i>
                <span class="nav-text">
                    Add Stocks Details
                        
                </span>
            </a>
            
        </li>
            <li class="has-subnav">
                <a href="">
                   <i class="fa fa-list fa-2x"></i>
                    <span class="nav-text">
                        Add News
                    </span>
                </a>
                
            </li>
            <li class="has-subnav">
                <a href="enquiry.php">
                   <i class="fa fa-folder-open fa-2x"></i>
                    <span class="nav-text">
                       Enquiry
                    </span>
                </a>
               
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-user fa-2x"></i>
                    <span class="nav-text">
                       Premium Member
                    </span>
                </a>
            </li>
           
            <li>
                <a href="indexx.php">
                   <i class="fa fa-info fa-2x"></i>
                    <span class="nav-text">
                      logout
                    </span>
                </a>
            </li>
        </ul>

        
    </nav>
 
        
  
        <table align="center">
            <tr>
            <th bgcolor="yellow"><font face="Arial black" size="3"
              color="black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;<input type="text" name="stname" placeholder="Enter Stock Name"  size="20" required>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;</br>.</font></th>
            
            <th bgcolor="yellow">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                DETAILS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </th>
            
              </tr>
          
            <tr>
             <td  bgcolor="sky blue"><font face="Arial black" size="3"
               color="black">Company Website&nbsp;&nbsp;</font><font face="Arial black" 
               size="1" color="black"></font>
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               &nbsp;&nbsp;&nbsp;&nbsp;
          
              </td>
          
              <td>  <textarea type="text" class="input-field" name="cmweb"  style="width: 500px;"
                placeholder="Add Your Details" required></textarea></td>
              
             </tr>
    
             
             
             
             <tr>
                <td  bgcolor="sky blue"><font face="Arial black" size="3"
                  color="black">BSE Website&nbsp;&nbsp;</font><font face="Arial black" 
                  size="1" color="black"></font>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;
             
                 </td>
             
                 <td><textarea type="text" class="input-field" name="bse" style="width: 500px;"
                    placeholder="Add Your Details" required></textarea></td>
                 
                </tr>
                  
                
                
                
             
                <tr>
                    <td  bgcolor="sky blue"><font face="Arial black" size="3"
                      color="black">NSE Website&nbsp;&nbsp;</font><font face="Arial black" 
                      size="1" color="black"></font>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;
                 
                     </td>
                 
                     <td><textarea type="text" class="input-field" name="nse" style="width: 500px;"
                         placeholder="Add Your Details"required></textarea></td>
                     
                    </tr>
    
    
    
    
                    <tr>
                        <td  bgcolor="sky blue"><font face="Arial black" size="3"
                          color="black">Current Price &nbsp;&nbsp;</font><font face="Arial black" 
                          size="1" color="black"></font>
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          &nbsp;&nbsp;&nbsp;&nbsp;
                     
                         </td>
                     
                         <td><textarea type="text" class="input-field" name="cp" style="width: 500px;"
                            placeholder="Add Your Details"required></textarea></td>
                         
                        </tr>
    
    
    
    
                        <tr>
                            <td  bgcolor="sky blue"><font face="Arial black" size="3"
                              color="black">Market Cap &nbsp;&nbsp;</font><font face="Arial black" 
                              size="1" color="black"></font>
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                              &nbsp;&nbsp;&nbsp;&nbsp;
                         
                             </td>
                         
                             <td><textarea type="text" class="input-field" name="mp" style="width: 500px;"
                                placeholder="Add Your Details"required></textarea></td>
                             
                            </tr>
    
    
    
    
    
                            <tr>
                                <td  bgcolor="sky blue"><font face="Arial black" size="3"
                                  color="black">Face Value &nbsp;&nbsp;</font><font face="Arial black" 
                                  size="1" color="black"></font>
                                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                  &nbsp;&nbsp;&nbsp;&nbsp;
                             
                                 </td>
                             
                                 <td><textarea type="text" class="input-field" name="fv" style="width: 500px;"
                                    placeholder="Add Your Details"required></textarea></td>
                                 
                                </tr>
    
    
    
    
    
                                <tr>
                                    <td  bgcolor="sky blue"><font face="Arial black" size="3"
                                      color="black">High/Low &nbsp;&nbsp;</font><font face="Arial black" 
                                      size="1" color="black"></font>
                                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                 
                                     </td>
                                 
                                     <td><textarea type="text" class="input-field" name="hl" style="width: 500px;"
                                        placeholder="Add Your Details"required></textarea></td>
                                     
                                    </tr>
    
    
                                    <tr>
                                        <td  bgcolor="sky blue"><font face="Arial black" size="3"
                                          color="black">PE Ratio &nbsp;&nbsp;</font><font face="Arial black" 
                                          size="1" color="black"></font>
                                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                     
                                         </td>
                                         <td><textarea type="text" class="input-field" name="pe" style="width: 500px;"
                                            placeholder="Add Your Details"required></textarea></td>
                                         
                                        </tr>
    
                                        <tr>
                                            <td  bgcolor="sky blue"><font face="Arial black" size="3"
                                              color="black">About Vodafone Idea&nbsp;&nbsp;</font><font face="Arial black" 
                                              size="1" color="black"></font>
                                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                              &nbsp;&nbsp;&nbsp;&nbsp;
                                         
                                             </td>
                                         
                                             <td><textarea type="text" class="input-field" name="abt" style="width: 500px;"
                                                placeholder="Add Your Details"required></textarea></td>
                                             
                                            </tr>
                               
     </table>     
    
    <table align="center">
    </br>
    
    
    <td  bgcolor="sky blue" >
    <input type="submit" bgcolor="black" value="Submit" name="submit" style="width: 500px;"  ></td>
    </table>


    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <?php
    if(isset($_POST['submit']))
    {
        $stname = $_POST['stname'];
        $cmweb = $_POST['cmweb'];
        $bse = $_POST['bse'];
        $nse = $_POST['nse'];
        $cp = $_POST['cp'];
        $mp = $_POST['mp'];
        $fv = $_POST['fv'];
        $hl= $_POST['hl'];
        $pe = $_POST['pe'];
        $abt = $_POST['abt'];



        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "phpproject";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);


        $enter = "INSERT INTO info(stname,cmweb,bse,nse,cp,mp,fv,hl,pe,abt)values('$stname','$cmweb','$bse','$nse','$cp','$mp','$fv','$hl','$pe','$abt'	)";
      
      $data = mysqli_query($conn,$enter);
     
      if($data)
      {
              echo"information has been updated successfully !! ";
      }
      else
      {
          echo" Sorry!! information has not been updated successfully !! ";
      }
  }
 ?>




</form>
  </body>
    </html>