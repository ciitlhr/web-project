<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Image;
use Auth;

class DashBoardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('loggeduser.dashboard');
    }

    public function myprofile(){
        $user = auth()->user();
        return view('loggeduser.myprofile')->with('user',$user);
    }

    public function blog(){
        $posts = Post::orderBy('title','desc')->paginate(3);
        return view('loggeduser.blog')->with('posts',$posts);
    }

    public function update_avatar(Request $request){
        $user = Auth::user();
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300,300)->save( public_path('/uploads/avatars/'.$filename) );

            
            $user->avatar = $filename;
            $user->save();
        }

        return view('loggeduser.myprofile')->with('user',$user);

    }
}
