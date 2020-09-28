<?php

date_default_timezone_set('Asia/Tokyo');

// 昨日つくったファイルは消す
$last_file_date = date("Y/m/d", strtotime('-1 day'));
$last_file_name = $last_file_date . "_cron_test.txt";

if(file_exists($last_file_name)) { 
    unlink($last_file_name);
}

// 新規で作成
$new_file_date = date("Y/m/d");
$new_file_name = $new_file_date . "_cron_test.txt";
touch($new_file_name);

?>