<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

use Illuminate\Support\Facades\Auth;




class AdminController extends Controller
{
    public function adoption_post()
    {
        return view('admin.adoption_post');
    }

    public function add_post(Request $request)
    {
        $request->validate([
            'title' => 'required|min:5|max:30',
            'description'=> 'required|min:20|max:5000',
            'image'=>'required|image'
        ]);

        $user=Auth()->user();

        $userid = $user->id;

        $name = $user->name;

        $usertype = $user->usertype;
         
        $post=new Post;

        $post->title = $request->title;

        $post->description = $request->description;

        $post->post_staus = 'active';

        $post->user_id = $userid;

        $post->name = $name;

        $post->usertype = $usertype;

        $image=$request->image;

        if($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();

            $request->image->move('postimage',$imagename);

            $post->image = $imagename;

        }

        $post->save();

        return redirect()->back()->with('message','Post Added Successfully');

    }

    public function adoption_details()
    {
        $post=Post::select('*');
        if(isset($request->title) && $request->title != null){
            
            $post=$Post->where('title','like','%'.$request->title.'%');
        }
        $post = Post::all();

        return view('admin.adoption_details',compact('post'));   
    }

    public function delete_post($id)
    {
        $post=Post::find($id);

        $post->delete();

        return redirect()->back()->with('message','Post Deleted Successfully');
    }

    public function edit_post($id)
    {
        $post=Post::find($id);

        return view('admin.edit_page',compact('post'));
    }
    public function update_post(Request $request,$id)
    {
        $request->validate([
            'title' => 'required|min:5|max:30',
            'description'=> 'required|min:20|max:5000',
            'image'=>'required|image'
        ]);

        $data=Post::find($id);

        $data->title=$request->title;
        
        $data->description=$request->description;
        
        $image=$request->image;

        if($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();

            $request->image->move('postimage',$imagename);

            $data->image = $imagename;
        }

        $data->save();
        return redirect()->back()->with('message','Post Updated Successfully');
    }
}
 