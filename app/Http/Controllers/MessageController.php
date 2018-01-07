<?php

namespace App\Http\Controllers;

use App\Events\SendMessage;
use App\Message;
use App\Repositories\MessagesRepository;
use App\Repositories\UserRepository;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Mail\Events\MessageSent;
use Intervention\Image\Exception\NotFoundException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class MessageController extends Controller
{

        public function __construct()
        {
            $this->middleware('auth')->except(['store','create']);
        }





        public function store(User $user){
            //validate
                $this->validate(request(),[
                    'message' =>'required',
                ]);
            ;

            //store
                $message = new Message();
                $message->user_id = $user->id;
                $message->sender_id = auth()->check()?auth()->id():null;
                $message->body = request('message');
                $message->category = request('category');
                $message->save();

            event(new SendMessage($user->id,auth()->user(),request('message')));
                session()->flash('message','thanks');
                return back();


        }

        public function showMessages(UserRepository $user){

            $messages = $user->getUserMessages();

            return view('home',compact('messages'));
        }

        public function showQuestions(UserRepository $user){

            $questions = $user->getUserQuestions();

            return view('questions',compact('questions'));
        }



        public function publish(Message $message,MessagesRepository $messageRepository){
            //publish

            if(request('response') !== null){
                $messageRepository->addResponseTo($message);
            }
            if($message->published == false){

                $messageRepository->publish($message);
                return back();


            };

            //remove
            $messageRepository->unpublish($message);

            return back();

        }


}
