<?php include "connect.php"?>

<html>
<head>
    <meta charset="utf-8">
    <script>
        function confirmDelete(username) {
            var ans = confirm("ต้องการลบสมาชิก" +" "+name);
            if(ans == true){
                document.location = "delete.php?username="+username;
            }
        }
    </script>
</head>
<body>
    <?php
        $stmt = $pdo->prepare("SELECT * FROM member");
        $stmt->execute();

        while($row = $stmt->fetch()){
    ?>
            รหัสสินค้า : <?=$row["name"]?><br>
            ชื่อสินค้า : <?=$row["address"]?><br>
            รายละเอียด : <?=$row["email"]?><br>      
            <a href='editmember.php?username=<?=$row["username"]?>'>แก้ไข</a>
            <a href='#' onclick='confirmDelete("<?=$row["username"]?>")'>ลบ</a>
            <hr><br>
    <?php
        }
    ?>
</body>
</html>