<?php 

include 'func.php';

$datavoting = query("SELECT * FROM voting");

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
    <table>
        <tr>
            <th>1</th>
            <th>2</th>
            <th>3</th>
        </tr>
        <?php foreach($datavoting as $data) : ?>
        <tr>
            <td><?= $data['jumlah']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>