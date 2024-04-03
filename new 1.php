<!DOCTYPE html>
<html>
<head>
    <title>Simple Form</title>
</head>
<body>
    <form action="welcome.php" method="post">
        Name: <input type="text" name="name"><br>
        <input type="submit">
    </form>
</body>
</html>




<!DOCTYPE html>
<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>

</body>
</html>



