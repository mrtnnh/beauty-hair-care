<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\InquiryRequest;
use App\Models\Inquiry;
use \Symfony\Component\HttpFoundation\Response;
use App\Mail\ContactMail;
use Mail;

class InquiryController extends Controller
{
  public function showminquiry()
  {
    return view('inquiry');
  }

  public function validator(InquiryRequest $request)
  {
    $request = Inquiry::create([
      'name' => $request['name'],
      'email' =>$request['email'],
      'inquiry' =>$request['inquiry'],
    ]);

    $to = [
	    [
	        'email' => 'mrtnnh78@gmail.com',
	        'name' => 'Test',
	    ]
	];

    Mail::to($to)->send(new ContactMail());

   return view('send', ['successMessage' => '送信が完了しました']);

  }
}
