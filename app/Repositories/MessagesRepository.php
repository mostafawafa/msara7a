<?php


namespace App\Repositories;


use App\Message;
use App\Response;

class MessagesRepository implements IMessagesRepository
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

      public function getSentMessages(){
        return auth()->user()->sentMessages()->latest()->with('owner','response')->get();
      }



}