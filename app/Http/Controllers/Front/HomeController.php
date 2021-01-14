<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index()
    {
        return view("frontend.home");
    }

    public function addUser(Request $request){
        $validator = Validator::make($request->all(), [
            'name'=>'required',
            'email'=>'required',
        ]);

        if($validator->passes()){
            $user = User::where('email', $request->email)->get()->first();
            if($user == null){
                $user = new User();
                $user->email = $request->email;
                $user->name = $request->name;
                $user->save();
            }
            return response()->json([
                'status'=>1,
                'data'=>$request->all(),
            ]);
        }

        return response()->json([
           'status'=> 0,
           'errors'=> $validator->errors(),
        ]);
    }

    public function sendEmail(Request $request){
        $validator = Validator::make($request->all(), [
           'email'=>'required',
           'name'=>'required',
        ]);

        if($validator->passes()){
            return response()->json([
               'status'=> 1,
               'data'=> $request->all(),
                'message'=>'success'
            ]);
        }

        return response()->json([
            'status'=> 0,
            'data'=> $validator->errors(),
            'message'=>'success'
        ]);

    }
}
