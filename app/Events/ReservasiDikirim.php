<?php

namespace App\Events;

use App\Models\Reservasi;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class ReservasiDikirim implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $reservasi;

    public function __construct(Reservasi $reservasi)
    {
        $this->reservasi = $reservasi;
    }

    public function broadcastOn()
    {
        return new Channel('reservasi');
    }
}
