<?php


namespace App\Repositories;


use App\Message;
use App\Response;

class MessageTest implements IMessagesRepository
{

    function publish(Message $message){
     //

    }


    function unpublish(Message $message){
     //

    }

    public function validateMessageOwner(Message $message){
      //
    }

      public function addResponseTo(Message $message)
      {

      //
      }

      public function getSentMessages(){
      //
      }



}