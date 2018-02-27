<?php


namespace App\Repositories;


use App\Message;
use App\Response;


interface IMessagesRepository
{

    public function publish(Message $message);

    public function unpublish(Message $message);

    public function validateMessageOwner(Message $message);

    public function addResponseTo(Message $message);

    public function getSentMessages();


}