<?php include "connect.php"?>

<html>
<head>
    <meta charset="utf-8">
    <style>
        .mid {
            display: flex;
            margin-top: 5%;            
            margin-left: 35%;
        }        
        .text {
            display: inline-block;
            font-size: 120%;
            padding-top: 8%;
            padding-left: 2%;
        }        
    </style>
</head>
<body>    
    <?php
        $stmt = $pdo->prepare("SELECT * FROM member WHERE username = ?");
        $stmt->bindParam(1, $_REQUEST["username"]);
        $stmt->execute();
        $row = $stmt->fetch();
    ?>

    <div class="mid">        
        <img src='member_photo/<?=$row["username"]?>.jpg' width="200">        
        <div class="text">
            ชื่อสมาชิก: <?=$row["name"]?><br>
            ที่อยู่: <?=$row["address"]?><br>
            อีเมล: <?=$row["email"]?><br>
        </div>
    </div>
    </div>
</body>
</html>