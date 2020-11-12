<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMailable;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendMail(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'subject'=>'required',
            'message'=>'required',
        ]);

        try {
            Mail::to(config('app.email'))->send(new ContactMailable($request->name,$request->email,$request->subject,$request->message));
            $message = ['message'=>"Contact Submited successfully"];
            $code = 200;
            return redirect()->back()->setStatusCode($code)->with($message);
        } catch (\Throwable $th) {
            Log::error($th);
            $message =['error'=>["Contact Submited successfully"]];
            $code = 400;
            return redirect()->back()->setStatusCode($code)->withErrors(['Oops! failed to submit contact request']);
        }
        // return $returnable;

    }
}
