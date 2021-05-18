<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\EmailDemo;
use Symfony\Component\HttpFoundation\Response;

class MailController extends Controller
{
    public function create(){

    }

    public function store(Request $request){
        $mailData = request()->validate([
            "name"=>"required",
            "email"=>"required",
            "msg"=>"required",
            "url"=>"http://127.0.0.1:8000",
        ]);

         $email = $mailData['email'];

        Mail::to($email)->send(new EmailDemo($mailData));
    }
}
