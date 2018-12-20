<?php require("./include/connection.php");?>

<?php
  if(isset($_POST["reg"])){
    $fname = $_POST["fname"];
    $cno = $_POST["cno"];
    $nic = $_POST["nic"];
    $course = $_POST["course"];
    $email = $_POST["email"];
  
    $sql = "INSERT INTO registertbl_041(full_name,contact_no,nic,course,email)  
VALUES('$fname','$cno','$nic','$course','$email');";
    
    if(mysqli_query($conn,$sql)) {
      $msg = "Record Inserted";
      echo "<script>alert('$msg');</script>";
    }else{
      $msg = "Record Inserted failed";
      echo "<script>alert('$msg');</script>";
    }
   
    
  }
?>

<html>

    <head>
      <link rel="stylesheet" href="./css/main.css" type="text/css" />
      <script src="./js/main.js" type="text/javascript"></script>
        
        
        
    </head>
    <body>
      
      <div id="container">
        <div class="form-container">
          <form action="index.php" method="post" onsubmit="return validateForm()" name="stuForm">
            <table>
              <tr>
                <td class="field-name">Full Name:</td>
                <td class="field-data"><input type="text" name=fname id="fname" required></td>
                <td rowspan="5"></td>
              </tr>
              <tr>
                <td class="field-name">Contact Number:</td>
                <td class="field-data"><input type="text" name=cno id="cno"></td>
                
              </tr>
              <tr>
                <td class="field-name">NIC:</td>
                <td class="field-data"><input type="text" name=nic id="nic" required></td>
            
              </tr>
              <tr>
                <td class="field-name">Course:</td>
                <td class="field-data">
                  <select name=course id="course">
                    <option value="BIT">BIT</option>
                    <option value="BCS">BCS</option>
                    <option value="CIMA">CIMA</option>
                    <option value="AAT">AAT</option>
                  </select>
                
                </td>
               
              </tr>
              <tr>
                <td class="field-name">Email:</td>
                <td class="field-data"><input type="text" name=email id="email" required></td>
      
              </tr >
              <tr style="margin-top:20px">
                <td colspan="2" >
                  <input type="submit" value="REGISTER" name="reg" style ="float:left">
                  <input type="submit" value="CLEAR" name=clear onclick="clear()" style="float:right">
                </td>
                
              </tr>
            </table>
          </form>
        </div>
        <div class="search">
          <h3>If You are already registered , View Your Details Here</h3>
          <form action="view.php" method="get">
            <table>
              <tr>
                <td class="field-name">NIC:</td>
                <td class="field-data"><input type="text" name="snic" id="snic"></td>
                <td><input type="submit" name=btnSearch value="VIEW"></td>
              </tr>
            </table>
          </form>
        </div>
        <div class="result">
          
        
        </div>
      
      
      </div>
      
    </body>

</html>