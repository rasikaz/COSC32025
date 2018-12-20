<?php require_once("./include/connection.php")?>

<?php

if(isset($_GET["btnSearch"])){
  $nic = $_GET["snic"];

?>
<html>
  <head>
    <link href="./css/main.css" type="text/css" rel="stylesheet">
  </head>
  <body>
  <h2>Your Details are Registered With NIC : <?php echo $nic?> </h2>
  <table id="searchtbl">
    <tr>
      <th>Full Name</th>
      <th>contact_number</th>
      <th>course</th>
      <th>NIC</th>
      <th>email</th>
    </tr>
    <?php 
      $sql = "SELECT * FROM registertbl_041 WHERE nic = '$nic'";
      $rec = mysqli_query($conn,$sql);
      while($rd = mysqli_fetch_array($rec)){
        $fname = $rd["full_name"];
        $cno = $rd["contact_no"];
        $course = $rd["course"];
        $email = $rd["email"];

    ?>
    <tr>
      <td><?php echo $fname;?></td>
      <td><?php echo $cno;?></td>
      <td><?php echo $course;?></td>
      <td><?php echo $nic;?></td>
      <td><?php echo $email;?></td>

    </tr>
    <?php }?>
  </table>
  </body>
</html>

<?php }?>
