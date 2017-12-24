<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Factories\SearchTypes\SearchFactory;
use Image;

class AdminController extends Controller
{

    public  function __construct()
    {
        $this->middleware(['auth','admin']);
    }

    public function index(){
        $users = User::paginate(15);
        return view('admin.users',compact('users'));
    }

    public function edit(User $user){
        return view('admin.edit',compact('user'));
    }

    public function submitEdit(User $user){

        $this->validate(request(),[
            'name' => 'required|unique:users,name,' . $user->id,
            'email' => 'required|unique:users,email,'. $user->id,
            'profilePicture' => 'image',


        ]);

        $name = $user->name;
        if(request()->hasFile('profilePicture')){
            $img= Image::make(request('profilePicture'))->fit(150,150)->save("images/$name.png");
            $imgSrc = $img->dirname . '/' . $img->basename;
           $user->profile_photo = $imgSrc;

        }
       $user->name = request('name');
       $user->email = request('email');
       $user->facebook = request('facebook');
       $user->twitter = request('twitter');
       $user->google_plus = request('google');

       $user->save();
        return back();
    }


    public function search()
    {
        $searchType = SearchFactory::make(request('type'));
        $users = $searchType->search();
        return view('admin.search',compact('users'));
    }
}
