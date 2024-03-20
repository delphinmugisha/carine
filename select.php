<?php
include "conn.php";
$sql=$conn->query("select * from  identification");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <table>
            <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th>password</th>
                <th colspan="2">action</th>
</tr>
<?php
$i=1;
while ($rows=mysqli_fetch_array($sql)) {
    ?>
    <tr>
        <td> <?php echo $rows['id'];?></td>
        <td> <?php echo $rows['name'];?></td>
        <td> <?php echo $rows['email'];?></td>
        <td> <?php echo $rows['password'];?></td>
    </tr>
    <?php
    $i++;
}
?>
 </table>   
</body>
</html>

