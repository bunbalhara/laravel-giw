<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Mail\SimpleMail;
use App\Models\CalculatorUser;
use Illuminate\Http\Request;
use Mail;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index()
    {
        return view("frontend.home");
    }

    public function addUser(Request $request){
        $validator = Validator::make($request->all(), [
            'email'=>'unique:calculator_users',
        ]);

        if($validator->passes()){
            $user = new CalculatorUser();
            $user->email = $request->email;
            $user->name = $request->name;
            $user->save();
        }

        return response()->json([
            'status'=>1,
            'data'=>$request->all(),
        ]);
    }

    public function sendEmail(Request $request){
        $validator = Validator::make($request->all(), [
            'email'=>'required',
            'name'=>'required',
            'result'=>'required'
        ]);

        if($validator->passes()){
            try {

                mail("nanjingzhe425@gmail.com","My subject",'This is test message');

//                $email = $request->email;
//                $name = $request->name;
//                $result = json_decode($request->result);
//                Mail::to($email)->send(new SimpleMail($name, $result));
//                return response()->json([
//                    'status'=> 1,
//                    'data'=> $request->all(),
//                    'message'=>'The calculation sent to '.$email.' successfully , Please check your email.'
//                ]);
            }catch (\Exception $err){
                return response()->json([
                    'status'=> 0,
                    'errors'=> $err->getMessage(),
                    'data'=> $request->all(),
                    'message'=>'failed'
                ]);
            }
        }

        return response()->json([
            'status'=> 0,
            'errors'=> $validator->errors(),
            'message'=>'success'
        ]);

    }
}
