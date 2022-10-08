<?php include "connect.php" ?>

<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            $stmt = $pdo->prepare("SELECT * FROM member WHERE username=? ");
            $stmt->bindParam(1, $_GET["username"]);
            $stmt->execute();
        ?>
        <?php while ($row = $stmt->fetch()) : ?>
            ชื่อสมาชิก: <?=$row ["name"]?><br>
            ที่อยู่: <?=$row ["address"]?><br>
            อีเมล์:  <?=$row ["email"]?><br>
        <div>
            <?php endwhile; ?>
        </div>
    </body>
</html>
