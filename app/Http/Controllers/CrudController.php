<?php

namespace App\Http\Controllers;

use App\Models\user_Model;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function index()
    {
        return view('insert');
        
        
    }

    public function store(Request $request)
    {
       $post = new user_Model();
       $post->post_title=$request->get('post_title');
       $post->post_author=$request->get('post_author');
       $post->save();
       return view('/store')->with ("message" ,"1");
       return redirect()->back()->with('message', 'store');
       

       //echo "Insert Successfully!"; 
    }

    public function show(user_Model $post)
    {
       $post= user_Model::all();
       return view('show',['post'=>$post]);
    }


    public function edit(user_Model $post,$id)
    {
       $post= $post::find($id);
       return view('edit' ,['post'=>$post]);
    }

    public function update(Request $request, user_Model $post,$id)
    {
        $posts= $post::find($id);
       $posts->post_title=$request->get('post_title');
       $posts->post_author=$request->get('post_author');
       $posts->save();
       return redirect('show');
    }


    public function destroy(user_Model $post, $id)
    {
      $post=  $post::find($id);
      $post->delete();
      return redirect('show');
    }


   
}
