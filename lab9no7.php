<?php include "connect.php" ?>
<html>
    <head><meta charset="utf-8"></head>
<body>
    <form action="addmember.php" method="POST">
        Username : <input type="text" name="username"><br>
        password : <input type="text" name="password"><br>
        ชื่อ  : <input type="text" name="name"><br>
        address :<br>
        <textarea name="address" rows="3" cols="40"></textarea><br>
        Mobile : <input type="text" name="mobile"><br>
        Email : <input type="email" name="email"><br>
        <input type="submit" value="เพื่มสมาชิก">
    </form>
</body>
</html>