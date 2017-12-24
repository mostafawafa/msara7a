<?php
/**
 * Created by PhpStorm.
 * User: Mostafa
 * Date: 20/08/2017
 * Time: 03:43 ص
 */

namespace App\Factories\RequestTypes;


class TypeFactory
{


    public static function make($type){
        switch ($type){
            case 'messages':
                return new Message();
                break;
            case 'questions':
                return new Question();
                break;
        }
    }
}