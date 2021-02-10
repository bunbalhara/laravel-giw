<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\CalculatorUser;
use App\Models\User;
use Illuminate\Http\Request;
use Mail;
use Illuminate\Support\Facades\Validator;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

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
            $user = User::where('email', $request->email)->first();
            if($user == null){
                $user = new CalculatorUser();
            }
            $user->email = $request->email;
            $user->name = $request->name;
            $user->save();
            return response()->json([
                'status'=>1,
                'data'=>$request->all(),
            ]);
        }

        return response()->json([
            'status'=>0,
            'errors'=>$validator->errors(),
        ]);
    }

    public function sendEmail(Request $request){
        $validator = Validator::make($request->all(), [
            'email'=>'required',
            'result'=>'required'
        ]);

        if($validator->passes()){
            try {

                $headers = 'From: info@giw.com.au' . "\r\n" .
                    'Reply-To: info@giw.com.au' . "\r\n" .
                    "Content-type: text/html;charset=UTF-8" . "\r\n".
                    'X-Mailer: PHP/' . phpversion();

                $email = $request->email;
                $subject = "Window-to-Wall Ratio Calculator Results";
                $html = $request->result;

                mail($email, $subject, $html, $headers);

                return response()->json([
                    'status'=> 1,
                    'data'=> $request->all(),
                    'message'=>'The calculation sent to '.$email.' successfully!'
                ]);

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
            'data'=>$request->all(),
            'message'=>'success'
        ]);

    }
}
