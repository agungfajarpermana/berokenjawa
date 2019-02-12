<?php

namespace App\Listeners;

use App\Events\CreateEmailUser;
use App\Mail\ViewEmailUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendEmailUser
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
     * @param  object  $event
     * @return void
     */
    public function handle(CreateEmailUser $event)
    {
        // dd($event->data);
        Mail::to('berokenjava@gmail.com')->send(new ViewEmailUser($event->data));
    }
}
