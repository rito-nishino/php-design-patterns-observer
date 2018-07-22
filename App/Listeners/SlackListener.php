<?php

namespace App\Listeners;

use App\Interfaces\ObserverInterface;
use App\Subjects\BulletinBoard;

class SlackListener implements ObserverInterface
{
    public function execute(BulletinBoard $board)
    {
        // Slack通知処理
        echo'<small>Slackでの通知を行いました</small><br>';
    }
}