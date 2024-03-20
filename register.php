<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
         <input type="text" name="name" placeholder="enter name"><br><br>
         <input type="email" name="email" placeholder="enter email"><br><br>
         <input type="password" name="password" placeholder="enter password"><br><br>
         <button type="submit" name="submit">submit</button>
         
    </form>
</body>
</html>
<?php
include "conn.php";
if (isset($_POST['submit'])) {
    $a=$_POST['name'];
    $b=$_POST['email'];
    $c=$_POST['password'];
    $insert=$conn->query("insert into identification(name,email,password)values('$a','$b','$c')");
    if ($insert) {
        ?>
        <script>
            window.alert("inserted")
            window.location.href="select.php";
        </script>
        <?php
    }
}
?>