<?php
require_once 'autoload.php';

use App\Subjects\BulletinBoard;
use App\Listeners\LoggingListener;
use App\Listeners\MailListener;
use App\Listeners\SlackListener;

// 掲示板クラス　インスタンス生成
$user_1 = new BulletinBoard('rito');

// リスナー登録
$user_1->addObserver(new LoggingListener());
$user_1->addObserver(new MailListener());
$user_1->addObserver(new SlackListener());


$user_1->comment('おはよう');
echo '<hr>';

$user_1->comment('こんにちは');
echo '<hr>';

$user_1->comment('こんばんは');
echo '<hr>';

