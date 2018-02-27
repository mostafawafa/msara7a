<?php

namespace App\Http\Controllers;

use App\Factories\RequestTypes\Question;
use App\Factories\RequestTypes\TypeFactory;
use App\Repositories\UserRepository;
use App\User;
use Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{

    function show(User $user){


        return view('userProfile',compact('user'));
    }

    public function showPublished(User $user,$type){
        $questions = TypeFactory::make($type)->getPublished($user);
        return view('published_questions',compact('questions','user'));
    }

    public function showSetting(){

        return view('setting');

    }

    public function showUserProfile($id){
        $user = User::find($id);
        //dd(Storage::url($user->profile_photo));

        if(is_null($user)){
            return redirect('/home');
        }
        return view('userProfile',compact('user'));
    }

    public function saveSetting(){

        $this->validate(request(),[
            'name' => 'required' ,
            'email' => 'required|unique:users,email,'. auth()->id(),
            'user_name' => 'required|unique:users,user_name,'.auth()->id() . '|alpha_dash',
            'profilePicture' => 'image',


        ]);

//        $name = auth()->check()?auth()->user()->name:'ahmed';
        if(request()->hasFile('profilePicture')){
//            $img= Image::make(request('profilePicture'))->fit(150,150)->save("images/$name.png");
//            $imgSrc = $img->dirname . '/' . $img->basename;
//            auth()->user()->profile_photo = $imgSrc;
            $src = request()->file('profilePicture')->store('avatares/' . auth()->id() ,'public');
            auth()->user()->profile_photo = $src;

        }
        auth()->user()->name = request('name');
        auth()->user()->email = request('email');
        auth()->user()->user_name = request('user_name');
        auth()->user()->facebook = request('facebook');
        auth()->user()->twitter = request('twitter');
        auth()->user()->google_plus = request('google');

        auth()->user()->save();
        return back();
    }


    public function logout(){
        auth()->logout();
        return redirect('home');
    }



    public function delete(User $user){
        $user->forceDelete();
        return back();
    }

}
