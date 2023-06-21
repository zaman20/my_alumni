<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class AppController extends Controller
{
    public function addPost(Request $request){
        $title = $request->has('title')? $request->get('title'):'';
        $description = $request->has('description')? $request->get('description'):'';
        $type = $request->has('type')? $request->get('type'):'';
        $created_by = $request->has('created_by')? $request->get('created_by'):'';
       // return $title.' '.$description.' '.$type.' '.$created_by;
       Post::insert([
        'title'=>$title,
        'description'=>$description,
        'type'=>$type,
        'created_by'=>$created_by,
       ]);

       return back()->with('msg','Post Created Successfully! ');
       
    }
    public function showPost(){
        $data = Post::select('*')->get();
        return view('backend.posts',compact('data'));
    }
    public function dltPost(Request $request){
       $id= $request->has('post_id')? $request->get('post_id'):'';
       Post::where('id','=',$id)->delete();
       return back()->with('msg','Post Deleted successfully!');
    }
    public function editPost($id){
        $data = Post::select('*')->where('id',$id)->first();
        return view('backend.post-edit',compact('data'));
    }
    public function updatePost(Request $request){
        $id= $request->has('post_id')? $request->get('post_id'):'';
        $title = $request->has('title')? $request->get('title'):'';
        $description = $request->has('description')? $request->get('description'):'';
        $type = $request->has('type')? $request->get('type'):'';
        $created_by = $request->has('created_by')? $request->get('created_by'):'';
       Post::where('id','=',$id)->update([
        'title'=>$title,
        'description'=>$description,
        'type'=>$type,
        'created_by'=>$created_by,
       ]);

       return back()->with('msg','Post Updated Successfully! ');
    }

    //home page
    public function homePage(){
        $news = Post::select('*')->where('type','=',1)->paginate(4);
        $events = Post::select('*')->where('type','=',2)->paginate(4);
        return view('home',compact('news','events'));
    }
    //single post
    public function singlePost($id){
        $post = Post::select('*')->where('id','=',$id)->first();
        return view('post-single',compact('post'));
    }
    //contact us
    public function contactUs(){
        return view('contact');
    }
}
