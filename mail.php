<?php
if (mb_send_mail('taijiro.murata@onlineconsultant.jp', 'TEST SUBJECT', 'TEST BODY')) {
    echo '送信完了';
} else {
    echo '送信失敗';
}