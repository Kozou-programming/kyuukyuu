<?php
require_once ("database.php");
class Method{
    //郵便番号検索
    public function seachHouseNumber(){
        $address=$_POST['seachHouseNumber'];
        
        $rtn = preg_match('/\A\d{7}\z/u',$address);
        if(!$rtn){
            echo "郵便番号は７桁の数字を入力してください";
            exit;
        }
        $url = "https://zipcloud.ibsnet.co.jp/api/search?zipcode=".(int)$address;
        $response = file_get_contents($url);
        $response = json_decode($response, true);

    }
    //データベースに登録する
    public function insert(){
        $result="";
        if(isset($POST['add'])) {
        $sql = "INSERT INTO member(id, password, firstName, lastName, furiganaFirstName, furiganaLastName,sex, houseNumber, address1, address2, address3, tel, email, addDay)VALUES(NULL, :password, :firstName, :lastName, :furiganaFirstName, :furiganaLastName,:sex, :houseNumber, :address1, :address2, :address3, :tel, :email, :addDay)";
        }
        //$stmt = $dbh->prepare($sql);
    }
    //登録完了画面
    public function answer(){
        $answer="";
        if($answer=$_POST['member']){
            echo "ご登録ありがとうございました。";
        }
        elseif($answer=$_POST['']){
            echo "送信が完了しました。";
        }
    }
}
?>