<?php

namespace App\Events;

use App\Models\Baby;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class PushNotification
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $baby;

    /**
     * Create a new event instance.
     */
    public function __construct(Baby $baby)
    {
        $this->baby = $baby;
    }
}
