<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class TestBroadcastEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $message;

    public function __construct()
    {
        $this->message = "Hello Sahal! This is a test event.";
    }

    public function broadcastOn(): array
    {
        return [new Channel('test-channel')];
    }

    public function broadcastAs()
    {
        return 'test-event';
    }

    public $broadcastQueue = null; // disable queue for now
}
