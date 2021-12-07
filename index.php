<?php
if(isset($_POST['add2'])){
    //データベースに登録する
    $sql = "INSERT INTO member(id, password, firstName, lastName, furiganaFirstName, furiganaLastName,sex, houseNumber, address1, address2, address3, tel, email, addDay)
    VALUES(NULL, :password, :firstName, :lastName, :furiganaFirstName, :furiganaLastName,:sex, :houseNumber, :address1, :address2, :address3, :tel, :email, :addDay)";

    echo '登録しました';
}else{
    echo 'だめでした';
}
?>