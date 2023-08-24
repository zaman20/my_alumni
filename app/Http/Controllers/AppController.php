<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class AppController extends Controller
{
    public function addPost(Request $request){
        $title = $request->has('title')? $request->get('title'):'';
        $description = $request->has('description')? $request->get('description'):'';
        $type = $request->has('type')? $request->get('type'):'';
        $status = $request->has('status')? $request->get('status'):'';
        $created_by = $request->has('created_by')? $request->get('created_by'):'';
       // return $title.' '.$description.' '.$type.' '.$created_by;
       Post::insert([
        'title'=>$title,
        'description'=>$description,
        'type'=>$type,
        'status'=>$status,
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
        'description'=> $description,
        'type'=> $type,
        'status'=> 1,
        'created_by'=>$created_by,
       ]);

       return back()->with('msg','Post Updated Successfully! ');
    }

    //home page
    public function homePage(){
        $news = Post::select('*')->where('type','=',1)->where('status','=',1)->paginate(4);
        $events = Post::select('*')->where('type','=',2)->where('status','=',1)->paginate(4);
        return view('home',compact('news','events'));
    }
    //news page
    public function news(){
        $news = Post::select('*')->where('type','=',1)->where('status','=',1)->paginate(4);
        return view('news',compact('news'));
    }
    //event page
    public function events(){
        $events = Post::select('*')->where('type','=',2)->where('status','=',1)->paginate(4);
        return view('events',compact('events'));
    }
    //job page
    public function jobs(){
        $jobs = Post::select('*')->where('type','=',3)->where('status','=',1)->paginate(4);
        return view('jobs',compact('jobs'));
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
    //register User
    public function registerUser(Request $request){
       $name = $request->has('name')? $request->get('name'):'';
       $email = $request->has('email')? $request->get('email'):'';
       $phone = $request->has('phone')? $request->get('phone'):'';
       $password = $request->has('password')? $request->get('password'):'';
       $details = $request->has('details')? $request->get('details'):'';
       $session = $request->has('session')? $request->get('session'):'';
       $st_id = $request->has('st_id')? $request->get('st_id'):'';
       $address = $request->has('address')? $request->get('address'):'';
       $organization = $request->has('organization')? $request->get('organization'):'';
       $image="";
       if($request->hasFile('pImage')){
        $file = $request->get('pImage');
        $imageLocation = array();
         
       }


       User::insert([
        'name' => $name ,
        'email' => $email ,
        'phone' => $phone,
        'address' => $address,
        'details' => $details,
        'password'=>$password,
        'student_id' =>$st_id ,
        'session' => $session,
        'organization' => $organization,
        'image' => $image,
       ]);
       return back()->with('msg','Registration done! Please wait for admin approve');
    }
    //all User
    public function allUser(){
        $datas = User::all();
        return view('backend.accounts',compact('datas'));
    }
    //check Login
    public function checkLogin(Request $request){
        $uName = $request->has('user_name')? $request->get('user_name'):'';
        $password = $request->has('password')? $request->get('password'):'';
        
        $data = User::select('*')->where('name',$uName)->first();
        if($data){
           $pass = $data->password;
           $status = $data->status;
           $role = $data->role;
           if($pass == $password && $status==1 && $role == 0){
                $news = Post::select('*')->where('type','=',1)->where('status','=',1)->paginate(4);
                $events = Post::select('*')->where('type','=',2)->where('status','=',1)->paginate(4);
                session()->put('name',$uName);
                session()->put('role',$role);

                return view('home',compact('news','events'));

           }else if($pass == $password && $status==1 && $role == 1){
                session()->put('name',$uName);
                return redirect('/dashboard');
           }else{
                return back()->with('msg','Password Not Correct');
           }
           
        }else{
            return back()->with('msg','User Name Not Found');
        }
        
    }

    //approve Member
    public function approveMember(Request $request){
        $id = $request->has('mId')? $request->get('mId'):'';
        User::where('id',$id)->update(['status'=>1,]);
        return back()->with('msg','Member Approved!');

    }

    //members
    public function members(){
        $datas = User::select('*')->where('status','=',1)->get();
        return view('members',compact('datas'));
    }

    //search members
    public function searchMembers(Request $request){
        $name = $request->has('name')? $request->get('name'):'';
        $datas = User::select('*')->where('name','LIKE','%'.$name.'%')->where('status','=',1)->get();
        return view('members',compact('datas'));
    }

    //logout
    public function logout(){
        session()->pull('name');
        session()->pull('role');
        return redirect('/');
    }

}
