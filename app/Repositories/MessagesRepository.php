<?php
/**
 * Created by PhpStorm.
 * User: Mostafa
 * Date: 01/07/2017
 * Time: 03:51 ص
 */

namespace App\Repositories;


use App\Message;
use App\Response;

class MessagesRepository
{

    function publish(Message $message){
        $message->published = true;
        $this->validateMessageOwner($message);
        $message->save();

    }


    function unpublish(Message $message){
        $message->published = false;
        $message->save();

    }

    public function validateMessageOwner(Message $message){
        if($message->owner->id !== auth()->id()){
           throw new \Exception('fuck off');
        };
    }

      public function addResponseTo(Message $message)
      {

          $response = new Response(['body'=>request('response')]);
         $message->response()->save($response);
         return back();
      }



}