<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Dashboard</title>
</head>
<body>
    <h1>List Data User</h1>
    <div id="fieldset">
    <table border="solid">
        <tr>
            <td id="no1">USERNAME</td>
            <td id="no2">EMAIL</td>
            <td id="no3">PASSWORD</td>
        </tr>
        <?php
        if (!empty($data)) {
            foreach ($data as $user_list): ?>
                <tr>
                    <td><?php echo $user_list['username']; ?></td>
                    <td><?php echo $user_list['email']; ?></td>
                    <td><?php echo $user_list['password']; ?></td>
                </tr>
            <?php endforeach;
        } else {
            echo "<tr><td colspan='4'><button id='message_empty'>Tidak ada data</button></td></tr>";
        }
        ?>
    </table>
    </div>
    <br><br>
    <a href="add/">
        <button id="tambah">Tambah Data</button>
    </a>
</body>
</html>
