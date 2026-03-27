<?php

require __DIR__ . "/dbconnect.php";

$result = $conn->query("SELECT * FROM teams");

?>
<html>
    <body>
        <table>
            <tr>
                <th>Название команды</th>
            </tr>
            <?php while ($row=$result->fetch()): ?>
            <tr>
                <td><?= $row['team_name']?></td>
            </tr>
            <?php endwhile; ?>
        </table>
    </body>
</html>