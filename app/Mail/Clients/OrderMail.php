<?php

namespace App\Mail\Clients;

use http\Env\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderMail extends Mailable
{
  use Queueable, SerializesModels;

  public $idOrder;

  /**
   * OrderMail constructor.
   * @param $idOrder
   */
  public function __construct($idOrder)
  {
    $this->idOrder = $idOrder;
  }

  /**
   * Build the message.
   *
   * @return $this
   */
  public function build()
  {
    return $this->subject('Your order was successfuls')->view('emails.clients.order')
      ->with($this->idOrder);
  }
}
