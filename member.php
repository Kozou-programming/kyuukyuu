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
        'name' => $_POST['name'],
        'furigana' => $_POST['furigana'],
        'sex' => $_POST['sex'],
        'email' => $_POST['email'],
        'address' => $_POST['address1'].$_POST['address2'].$_POST['address3'],
        'addDay' =>$_POST['addDay'],
        'tel' => $_POST['tel']
    ];
    foreach ($profiles as $profile) {
        echo $profile .'<br>';
    }
    ?>
</p>
<form action="index.php" method="post">
    <input type="text" name="add2" value=<?php echo $profiles; ?>>
    <input type="text" name="add" value=<?php echo $_POST['address1']; ?>>
    <button type="submit">登録する</button>
</form><br>
<form action="index.php" method="post" name="fix">
    <button type="submit">修正する</button>
</form><br>
</body>
</html>