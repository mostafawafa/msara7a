<?php

namespace App\Http\Controllers;

use App\Message;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(UserRepository $userRepository)
    {
        $users = $userRepository->getRandomUsers(6)->where('id','<>',auth()->id())->get();

        return view('test',[
            'users' => $users
        ]);

    }
}
