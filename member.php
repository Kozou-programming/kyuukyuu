<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member</title>
</head>
<body>
    <!-- プロフィールデータを取得 -->
<p>下記の内容で登録してよろしいですか</p>
<p>
<?php echo
    $profiles = [
        'id' => $_POST['id'],
        'pass' => $_POST['pass'],
        'firstName' => $_POST['firstName'],
        'lastName' => $_POST['lastName'],
        'furiganaFirstName' => $_POST['furiganaFirstName'],
        'furiganaLastName' => $_POST['furiganaLastName'],
        'sex' => $_POST['sex'],
        'houseNumber' => $_POST['houseNumber'],
        'address1' => $_POST['address1'],
        'address2' => $_POST['address2'],
        'address3' => $_POST['address3'],
        'tel' => $_POST['tel'],
        'email' => $_POST['email'],
        'addDay' => $_POST['addDay']
    ];
    foreach ($profiles as $profile) {
        echo $profile .'<br>';
    }
    ?>
</p>
<form action="index.php" method="post">
    <input type="text" name="add2" value=<?php echo $profiles; ?>>
    <input type="text" name="add" value=<?php echo $_POST['address1']; ?>>
    <button type="submit" name="add">登録する</button>
</form><br>

<form action="index.php" method="post" name="fix">
    <button type="submit">修正する</button>
</form><br>
</body>
</html>