<?php

namespace App\Events;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class MyEvent implements ShouldBroadcast
{
  use Dispatchable, InteractsWithSockets, SerializesModels;
 
  public $connection = 'sync';
  public $message;
  public $senderId;
  public $receiverId;


  public function __construct($message)
  {
    $this->senderId = $message['sender_id'];
    $this->receiverId = $message['receiver_id'];
      $this->message = $message;
  }

  public function broadcastOn()
  {
    return new Channel('chat');
  }

  public function broadcastAs()
  {
    return 'my-event';
  }
}
