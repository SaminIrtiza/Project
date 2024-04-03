<!DOCTYPE html>
<html>
<head>
    <title>Entity Form</title>
</head>
<body>
    <form action="process.php" method="post">
        Greenshop: <input type="text" name="greenshop"><br>
        Cart: <input type="text" name="cart"><br>
        Customer: <input type="text" name="customer"><br>
        Project Plan: <input type="text" name="project_plan"><br>
        Project Category: <input type="text" name="project_category"><br>
        Architecture: <input type="text" name="architecture"><br>
        <input type="submit">
    </form>
</body>
</html>

<!DOCTYPE html>
<html>
<body>

Greenshop: <?php echo $_POST["greenshop"]; ?><br>
Cart: <?php echo $_POST["cart"]; ?><br>
Customer: <?php echo $_POST["customer"]; ?><br>
Project Plan: <?php echo $_POST["project_plan"]; ?><br>
Project Category: <?php echo $_POST["project_category"]; ?><br>
Architecture: <?php echo $_POST["architecture"]; ?><br>

</body>
</html>
