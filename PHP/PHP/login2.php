
<?php
session_start();
if(isset($_POST['name'])){
    $_SESSION['name']=$_POST['name'];
     $_SESSION['pname']=$_POST['pname'];
     $_SESSION['qname']=$_POST['qname'];
      $_SESSION['pprice']=$_POST['pprice'];
    header('location: profile.php');
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Form1</title>
</head>
<body>
    <form method='post'>
        <label>Name:
            <input type="text" id="name" name="name"><br><br>
</label>
 <label>Product Name:
            <input type="text" id="pname" name="pname"><br><br>
</label>
 <label>Quantity:
            <input type="number" id="qname" name="qname"><br><br>
</label>
<label>Product Price:
            <input type="number" id="pprice" name="pprice"><br><br>
</label>
<input type="submit" value="submit">
</form>

</body>

