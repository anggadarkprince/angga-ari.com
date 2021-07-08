<?php

namespace App\Events\Journal;

use App\Models\Notebook;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class NewNotebookCreated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    private $notebook;

    /**
     * Create a new event instance.
     *
     * @param Notebook $notebook
     */
    public function __construct(Notebook $notebook)
    {
        $this->notebook = $notebook;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
