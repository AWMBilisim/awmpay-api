<?php
$seller_id = ""; //awmbilişim tarafından size verilen id
$seller_screet = ""; //awmbilişim tarafından size verilen özel kodunuz.
$client_name = ""; //müşterinizin ismi
$client_sname = "";//müşterinizin soyismi
$client_mobile = "";//müşterinizin telefon numarası
$client_address = "";//müşterinizin adresi
$product_name = "";//sattığınız ürünün ismi
$order_id= "";//kendi tarafınızda oluşturduğunuz sipariş numarası
$product_amount ="";//sipariş tutarı
$product_quantitiy = "";//kaç adet ürün sattığınız
$client_redirecturl = "";//Müşteriyi ödeme tamamlandıktan sonra yönlendirmek istediğiniz url

$string = "$seller_id&awm&$seller_screet&awm&$client_name&awm&$client_mobile&awm&$client_address&awm&$product_name&awm&$order_id&awm&$product_amount&awm&$product_quantitiy&awm&$client_redirecturl";
$string = base64_encode($string);

$url = "https://pay.awmbilisim.com/api.php";

$fields = [
    'query '      => $string
 
];

$fields_string = http_build_query($fields);

$ch = curl_init();

curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_POST, true);
curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);

curl_setopt($ch,CURLOPT_RETURNTRANSFER, true); 

$result = curl_exec($ch);
$created_order = $result;

header("Location: https://pay.awmbilisim.com/odeme.php?order_id=$created_order");