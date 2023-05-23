<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <form method="post">
        <label>Search</label>
        <input type="text" name="search">
        <input type="submit" name="submit">
</form>

    
</body>
</html>

<?php
$con = new PDO("mysql:host=localhost;dbname=trendy_shoe", 'root', '');

if(isset($_POST["submit"])) {
    $str = $_POST["search"];
    $sth = $con->prepare("SELECT * FROM 'product' WHERE shoe_name = '$str' ") ;

    $sth->setFetchMode(PDO:: FETCH_OBJ);
    $sth -> execute();

    if($row = $sth->fetch())

    {
        ?>
        <br><br>
        <table>
            <tr>
                <td><?php echo $row->shoe_name; ?></td>
                <td><?php echo $row->product_id; ?></td>
            </tr>
        </table>
        <?php

    }
    else{
        echo "Name doen't exist";

    }
    
}
?>