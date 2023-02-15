<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Player</title>
</head>
<body>
    <?php include 'login.php';
    $sql = mysqli_query($con, "SELECT * FROM log_player");?>
    <table border="1">
        <th>Username</th>
        <th>Jenis Waktu</th>
        <th>Waktu</th>
    <?php while($log = mysqli_fetch_array($sql)):?>
        <tr>
            <td><?php echo "$log[nama_player]"?></td>
            <td><?php echo "$log[jenis_waktu]"?></td>
            <td><?php echo "$log[waktu]"?></td>
        </tr>
    <?php endwhile?>
    </table>
</body>
</html>