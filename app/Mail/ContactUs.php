<?php

namespace App\Mail;


use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactUs extends Mailable
{
  use Queueable, SerializesModels;

  public $info;
  protected $mailFrom;
  protected $mailAdmin;

  /**
   * ContactUs constructor.
   * @param Request $request
   */
  public function __construct(Request $request)
  {
    $this->info = $request->all();
    $this->mailFrom = env('MAIL_FROM_NAME');
    $this->mailAdmin = env('MAIL_ADMIN');
  }

  /**
   * Build the message.
   *
   * @return $this
   */
  public function build()
  {
    return $this->subject('Diverxo\'s user left a message')->view('emails.contact-us')
      ->with($this->info);
  }
}
