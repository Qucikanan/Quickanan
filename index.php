<!DOCTYPE html>
<html>
<body>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
 
<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
 
 
<?php
$url = 'https://script.google.com/macros/s/AKfycbwiL6N4SPJ-JtJyIpNBbJ-DrFak1gjEAvb2SvAfJ1DSQhLLpmc/exec?action=selects&sheet_name=member' ; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$characters = json_decode($data); // decode the JSON feed
?>
 
 
<div class="container">
 
<div class="jumbotron jumbotron-fluid">
 <div class="container">
  <center><h1 class="display-4">API GOOGLE APPSCRIPT</h1>
   <p class="lead">ทะเบียนนักเรียน</p>
   <a class="btn btn-primary" href="index.php" role="button">เพิ่มสมาชิก</a></center>
 </div>
</div>
 
<table class="table">
 <thead>
   <tr>
     <th scope="col">num</th>
     <th scope="col">รหัสนักเรียน</th>
     <th scope="col">ชื่อ-สกุล</th>
     <th scope="col">อายุ</th>
     <th scope="col">จัดการ</th>
   </tr>
 </thead>
 <tbody>
 <?php foreach ($characters as $character) {
?>
   <tr>
     <td><?php  echo $character->num; ?> </td>
     <td><?php  echo $character->id; ?> </td>
     <td><?php  echo $character->name; ?></td>
     <td><?php  echo $character->age; ?></td>
     <td>
         <a href="delete.php?num=<?php echo $character->num ?>"> ลบ  </a>
         <a href="edit.php?num=<?php echo $character->num ?>"> แก้ไข </a>
   </td>
   </tr>
 <?php } ?>
 </tbody>
</table>
 
</div>
</body>
</html>
