<?php
/**
 * Created by PhpStorm.
 * User: Mostafa
 * Date: 20/08/2017
 * Time: 03:30 ص
 */

namespace App\Factories\RequestTypes;


use App\Repositories\UserRepository;
use App\User;

interface IType
{

    public function getPublished(User $user);
}