<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\CalculatorUser;
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

//                mail($email, $subject, $html, $headers);

                $mail = new PHPMailer(true);
                $mail->isSMTP();
                $mail->Host = 'smtp.office365.com';
                $mail->Port       = 587;
                $mail->SMTPSecure = 'tls';
                $mail->Host = 'https://giw.com.au';
                $mail->SMTPAuth = false;
                $mail->Username = 'info@giw.com.au';
                $mail->Password = 'k}[ep~6=S$ea8]f';
                $mail->SetFrom('info@giw.com.au', 'FromEmail');
                $mail->addAddress($email, 'ToEmail');

                $mail->IsHTML(true);

                $mail->Subject = $subject;
                $mail->Body    = $html;

                $mail->send();

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
