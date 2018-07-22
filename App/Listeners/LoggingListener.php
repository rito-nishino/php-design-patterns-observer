<?php

namespace App\Listeners;

use App\Interfaces\ObserverInterface;
use App\Subjects\BulletinBoard;

class LoggingListener implements ObserverInterface
{
    public function execute(BulletinBoard $board)
    {
        // ログ書き込み処理
        echo'<small>ログ書き込みを行いました</small><br>';
    }
}