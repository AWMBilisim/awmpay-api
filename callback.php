<?php
$seller_id = ""; //awmbilişim tarafından size verilen id
$seller_screet = ""; //awmbilişim tarafından size verilen özel kodunuz.
$get_data = $_POST['query'];
$get_data = explode("&awm&","$get_data")
$veriler=array();

foreach ($get_data as &$değer) {
    array_push($veriler,"$deger");
}

if($veriler[0] == $seller_screet AND $veriler[1] == $seller_id) {

$order_id = $veriler[2];



if($status == 'success') {

    //İç tarafınızda siparişi onaylayıp sepetten düşecek kodu buraya yazacaksınız.

}

if($status == 'fail') {

    

}
}