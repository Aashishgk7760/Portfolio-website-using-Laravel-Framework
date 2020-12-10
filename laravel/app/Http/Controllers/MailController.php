<?php
namespace App\Http\Controllers;
use Mail;
use App\Mail\SendEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class MailController extends Controller
{
    public function contact(){
        return view('users.contact');
    }
    public function sendemail(Request $request){
        $data = array(
            'Yourname' => $request->get('Yourname'),
            'Phone' => $request->get('Phone'),
            'Email' => $request->get('Email'),
            'Yourmessage'=>$request->get('Yourmessage'),
        );
        Mail::to(config('mail.from.address'))->send(new SendEmail($data));
        return view('users.contact');

        /*Mail::send(new SendEmail($data));
        return view('users.contact');*/
    }
}
