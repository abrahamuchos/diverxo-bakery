<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactUsRequest;
use App\Mail\ContactUs;
use App\Mail\Clients\ContactUs as ClientsContactUs;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
  private $_adminMail;
  public function __construct()
  {
    $this->_adminMail = env('MAIL_ADMIN');
  }

  public function contactUs(ContactUsRequest $request){
    try{
      Mail::to($this->_adminMail)->send(new ContactUs($request));

      Mail::to($request->email)->send(new ClientsContactUs());

    }catch (\Exception $e){
      return response()->json([
        'success' => false,
        'code' => 1001,
        'error' => $e->getMessage()
      ], 500);
    }
    return response()->json([
      'success' => true,
      'message' => 'hello'
    ]);
  }
}
