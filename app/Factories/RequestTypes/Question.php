<?php
/**
 * Created by PhpStorm.
 * User: Mostafa
 * Date: 20/08/2017
 * Time: 03:31 ص
 */

namespace App\Factories\RequestTypes;


use App\Repositories\UserRepository;
use App\User;
class Question implements IType
{

    public function getPublished(User $user)
    {
        return  $user->messages()->latest()->with(['sender','response'])->where('category','question')->where('published',1)->get();

    }

}