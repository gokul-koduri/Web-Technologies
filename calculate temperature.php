<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Calculate dew point temperature</h1>
    <form action="index.php" method="POST">
        <label for="temp">temperature: </label>
        <input type="number" name="temp">
        <label for="hum">humidity:</label>
        <input type="number" name="humidity">
        <button type="submit" value="submit" name="submit">submit</button>
    </form>
    <div>
        <?php
            if(isset($_POST['submit'])){
                $temp=$_POST['temp'];
                $hum=$_POST['humidity'];
                $res= ((17.27*$temp)/(237.7+$temp))+log($hum);
                echo $res;
            }
        ?>
    </div>
</body>

</html>