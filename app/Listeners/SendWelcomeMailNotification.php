<?php

namespace App\Listeners;

use App\Events\NewUserCreateEvent;
use App\Mail\UserCreatedMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendWelcomeMailNotification
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(NewUserCreateEvent $event): void
    {
        Mail::to($event->user->email)->send(new UserCreatedMail($event->user));  

    }
}
