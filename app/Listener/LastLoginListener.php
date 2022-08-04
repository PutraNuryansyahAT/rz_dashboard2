<?php

namespace App\Listener;

use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Events\Logined;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class LastLoginListener
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
     * @param  \App\Events\Logined  $event
     * @return void
     */
    public function handle(Logined $event)
    {
        $user = Auth::user();
        $user->last_login_date = Carbon::now();
        $user->save();
        //
    }
}
