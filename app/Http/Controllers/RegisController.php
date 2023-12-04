<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisController extends Controller
{
    public function register(Request $request){

            Register::create([
            'name'=>$request->name,
            'surname'=>$request->surname,
            'email'=>$request->email,
            'password'=> Hash::make($request->password)
        ]);

        return response(["message"=>'Register created successfully!'], 201);
        
    }

    public function createBlog(Request $request){

        $info = Blog::create([
            'title'=>$request->title,
            'text'=>$request->text,
            'user_id'=>$request->user_id
        ]);

        return response(["message"=>'Blog created successfully!'], 201);
    }

    public function updateBlog(Request $request, $id){
        $findBlog = Blog::find($id);

        $findBlog->update([
            'title'=>$request->title,
            'text'=>$request->text,
            'user_id'=>$request->user_id
        ]);

        return response(["message"=>'Blog updated succesfully!'], 200);
    }

}
