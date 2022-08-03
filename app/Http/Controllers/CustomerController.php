<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CustomerController extends Controller
{
    public function index(){
        return view('front-end.contents.home');
    }
    public function contact(Request $request){
        //dd($request -> email);
        $request->validate([
            'email' => 'required|email',
            'first_name' => 'required',
            'last_name' => 'required'
        ]);
        $to_name = $request -> last_name;
        $to_email = $request -> email;
        try {
            Mail::send('email-contact', ['last_name' => $request->get('last_name'),], 
                function($message) use ($to_name, $to_email) {
                $message->to($to_email, $to_name)
                ->subject("Thông tin tuyển dụng YOPAZ");
                $message->from("phamhyta@gmail.com","YOPAZ.COM");
                });
        } catch (\Throwable $th) {
            return redirect() -> back() -> with('no', 'Temporary service failure');
        }
        return redirect() -> back() -> with('yes', 'Please check your email for more details');
    }
}
