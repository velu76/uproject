<?php

namespace upro\Listeners;

use upro\Events\NewClientAdded;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewClientNotification
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
     * @param  NewClientAdded  $event
     * @return void
     */
    public function handle(NewClientAdded $event)
    {
        // dd("New Client Added!");
    }
}
