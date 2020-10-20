<?php

$url = '/home/user/public_html/murata/';
//$url = 'C:/xampp2/htdocs/samples/';

// 昨日つくったファイルは消す
$last_file_date = date("Ymd",strtotime("-1 day"));;
$last_file_name = $url.$last_file_date . "_cron_test.txt";

if(file_exists($last_file_name)) {
	unlink($last_file_name);
}

// 新規で作成
$new_file_date = date("Ymd");
$new_file_name = $url . $new_file_date . "_cron_test.txt";
touch($new_file_name);

?>