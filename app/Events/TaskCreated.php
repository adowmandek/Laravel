<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;

class TaskCreated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;


    /**
    * Create a new event instance.
    *
    * @param $task
    * @return void
    */

    public $task;
    public function __construct($task)
    {
        //
        // $this-&gt;task = $task;
    }

    /**
    * Get the channels the event should broadcast on.
    *
    * @return \Illuminate\Broadcasting\Channel|array
    */

    public function broadcastOn()
    {
        return new Channel('newTask');
    }

    public function broadcastAs(){
        return 'task-created';

    /**
     * Create a new event instance.
     *
     * @return void
     */
    // public function __construct()
    {
        //
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    // public function broadcastOn()
    {
        // return new PrivateChannel('channel-name');
    }
}









    }


