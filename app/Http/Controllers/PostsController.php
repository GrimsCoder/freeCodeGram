<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;



class PostsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    } 

    public function index(Request $request, User $user, Post $post){
        
        $userMain = auth()->user()->id;

        $users = auth()->user()->following()->pluck('profiles.user_id');
       
   
        $posts = Post::whereIn('user_id', $users)->with('user')->latest()->simplePaginate(5);
        
        

        return view('posts.index', compact('posts'));
    }


    public function create(){
        return view('posts.create');
    }

    public function store(){

        $data = request()->validate([
            'caption' => 'required',
            'image' => ['required', 'image'],
        ]);

        $imagePath = request('image')->store('uploads', 'public');

        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200);
        $image->save();

        auth()->user()->posts()->create([
            'caption' =>$data['caption'],
            'image' => $imagePath,
        ]);
        
        return redirect('/profile/' . auth()->user()->id);
    }

    public function show(Post $post, User $user){

        
        
        return view('posts.show', compact ('post'));
    }
    public function destroy($id)
    {

        $this->authorize('update', $user->profile);

        Post::find($id)->delete();
  
        return redirect('/profile/' . auth()->user()->id);
    }

    public function restore($id)
    {
        Post::withTrashed()->find($id)->restore();
  
        return redirect()->back();
    }  
    public function restoreAll()
    {
        Post::onlyTrashed()->restore();
  
        return redirect()->back();
    }
}
