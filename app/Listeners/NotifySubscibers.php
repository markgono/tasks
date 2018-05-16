<?php

namespace App\Listeners;

use App\Events\TaskCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class NotifySubscibers
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  TaskCreated  $event
     * @return void
     */
    public function handle(TaskCreated $event)
    {
        // to trigger, tinker: event(new App\Events\TaskCreated(Task::first()));
        dd('Task [' . $event->task->title . '] was created!');
    }
}
