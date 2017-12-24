<?php
/**
 * Created by PhpStorm.
 * User: Mostafa
 * Date: 22/09/2017
 * Time: 03:42 م
 */

namespace App\Factories\SearchTypes;


class SearchFactory
{

    public static function make($type){

        if($type == 'name'){
            return new NameSearch;
        }
        else if($type == 'email'){
            return new EmailSearch;

        }
        else if($type == 'username'){
            return new UserNameSearch;

        }
    }
}