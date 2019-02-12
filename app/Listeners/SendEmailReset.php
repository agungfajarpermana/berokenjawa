<?php

namespace App\Listeners;

use App\Events\CreateEmailReset;
use App\Mail\ViewEmailReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendEmailReset
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
    public function handle(CreateEmailReset $event)
    {
        // dd($event->user);
        Mail::to('berokenjava@gmail.com')->send(new ViewEmailReset($event->user));
    }
}
