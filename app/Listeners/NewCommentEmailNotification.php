<?php

namespace App\Listeners;

use App\Events\CommentCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class NewCommentEmailNotification implements ShouldQueue
{
    /**
     * Handle the event.
     *
     * @param  CommentCreated  $event
     * return void
     */
    public function handle(CommentCreated $event)
    {
        //
    }
}
