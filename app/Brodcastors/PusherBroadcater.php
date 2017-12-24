<?php
/**
 * Created by PhpStorm.
 * User: Mostafa
 * Date: 08/07/2017
 * Time: 05:56 ص
 */

namespace App\Repositories;

use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class PusherBroadcater implements ShouldBroadcast
{
    public $text;

    public function __construct($text)
    {
        $this->text = $text;
    }

    public function broadcastOn()
    {
        return ['test-channel'];
    }
}