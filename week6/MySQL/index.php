<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $con = mysqli_connect('localhost','root','');
    if(!$con){
        echo 'Not connected to the server';
    }
    if(!mysqli_select_db($con,'insert')){
        echo 'Database is not selected';
    }
    $name = $_POST['user_name']
    $email = $_POST['user_email']
    $sql = "INSERT INTO user (user_name, user_email) VALUES('$name','$email')";
    if(!mysqli_query($con, $sql)){
        echo 'Not inserted/saved';
    }
    else{
        echo 'Inserted/saved';
    }
    header("refresh:2, url=index.html");
    ?>
</body>
</html>