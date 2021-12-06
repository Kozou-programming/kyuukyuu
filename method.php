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
        $sql = "INSERT INTO member(id, name, furigana, sex, email, address, addDay)VALUES(NULL, :name, :furigana, :sex, :email, :address, :addDay)";
        //$stmt = $dbh->prepare($sql);
    }
    //登録完了画面
    public function completeProfile(){
        echo '登録しました';
    }
}
?>