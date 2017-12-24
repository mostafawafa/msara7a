<?php
/**
 * Created by PhpStorm.
 * User: Mostafa
 * Date: 30/06/2017
 * Time: 08:11 م
 */

namespace App\Repositories;


use App\User;

class UserRepository
{

    public function getUserMessages(){

       return $this->getUserByCategory('message');

    }

    public function getUserQuestions(){

        return $this->getUserByCategory('question');

    }

    public function getUserByCategory($category){


        return auth()->user()->messages()->latest()->with(['sender','response'])->where('category',$category)->get();

    }


    public function getPublishedQuestions($user){



    }

    public function getRandomUsers($number){
        return  User::inRandomOrder()->take($number);

    }


}