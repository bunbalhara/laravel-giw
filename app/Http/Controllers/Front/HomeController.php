<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Mail\SimpleMail;
use App\Models\CalculatorUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
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
            'data'=>'required'
        ]);

        if($validator->passes()){
            try {

                $headers = 'From: info@giw.com.au' . "\r\n" .
                    'Reply-To: info@giw.com.au' . "\r\n" .
                    "Content-type: text/html;charset=UTF-8" . "\r\n".
                    'X-Mailer: PHP/' . phpversion();

                $data = json_decode($request->data);

                $email = $request->email;
                $subject = "Window-to-Wall Ratio Calculator Results";
                $html = view('mail', compact('data'))->render();

                mail($email, $subject, $html, $headers);

//                Mail::to($email)->send(new SimpleMail($subject, $data));

                return response()->json([
                    'status'=> 1,
                    'data'=> $request->all(),
                    'message'=>'The calculation sent to '.$email.' successfully!'
                ]);

            }catch (\Exception $err){
                Log::info($err);
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

    public function test(){
        $data = [
            'fullName'=>'Full Name',
            'project'=>'Project Name',
            'climateZone'=>'Climate Zone',
            'buildingClassification'=> 'Building Classification',
            'windowProperties'=>[
                [
                    'property'=>'property',
                    'totalSystemUValue' => 0,
                    'totalSystemSHGC' => 0
                ],
                [
                    'property'=>'property',
                    'totalSystemUValue' => 1,
                    'totalSystemSHGC' => 1
                ]
            ],
            'projection'=>[
                'north'=>[
                    'northProjection'=>0,
                    'northW'=>0,
                    'northH=>0'
                ],
                'east'=>[
                    'eastProjection'=>0,
                    'eastW'=>0,
                    'eastH'=>0
                ],
                'south'=>[
                    'southProjection'=>0,
                    'southW'=>0,
                    'southH'=>0
                ],
                'west'=>[
                    'westProjection'=>0,
                    'westW'=>0,
                    'westH'=>0
                ],
            ],
            'result'=>[
                [
                    'property'=>'property',
                    'output'=>[
                        'north'=>0,
                        'east'=>0,
                        'south'=>0,
                        'west'=>0
                    ]
                ],
                [
                    'property'=>'property',
                    'output'=>[
                        'north'=>0,
                        'east'=>0,
                        'south'=>0,
                        'west'=>0
                    ]
                ],
                [
                    'property'=>'property',
                    'output'=>[
                        'north'=>0,
                        'east'=>0,
                        'south'=>0,
                        'west'=>0
                    ]
                ],
                [
                    'property'=>'property',
                    'output'=>[
                        'north'=>0,
                        'east'=>0,
                        'south'=>0,
                        'west'=>0
                    ]
                ]
            ]
        ];

        $data = json_decode(json_encode($data));

        return view('mail', compact('data'));
    }
}
