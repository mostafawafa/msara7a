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

       return $this->getUserByCategory('message')->simplePaginate(5);

    }

    public function getUserQuestions(){

        return $this->getUserByCategory('question')->simplePaginate(5);

    }

    protected function getUserByCategory($category){


        return auth()->user()->messages()->latest()->with(['sender','response'])->where('category',$category);

    }


    public function getRandomUsers($number){  
        return  User::inRandomOrder()->take($number);
    }


}