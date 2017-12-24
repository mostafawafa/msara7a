<?php
/**
 * Created by PhpStorm.
 * User: Mostafa
 * Date: 20/08/2017
 * Time: 03:56 ص
 */

namespace App\Factories\RequestTypes;


use App\User;

class Message implements IType
{

    public function getPublished(User $user)
    {
        return  $user->messages()->latest()->with(['sender','response'])->where('category','messages')->where('published',1)->get();
    }
}