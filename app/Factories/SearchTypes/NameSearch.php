<?php
/**
 * Created by PhpStorm.
 * User: Mostafa
 * Date: 22/09/2017
 * Time: 03:33 م
 */

namespace App\Factories\SearchTypes;

use App\User;

class NameSearch implements ISearch
{

    public function search()
    {
        $s = request('s');
        return User::where('name','like',"%$s%")->paginate();
    }
}