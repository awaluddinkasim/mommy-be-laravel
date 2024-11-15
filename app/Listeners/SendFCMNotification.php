<?php

namespace App\Listeners;

use App\Events\PushNotification;
use App\Http\Utils\OneSignal;
use App\Models\Notification;
use Carbon\Carbon;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendFCMNotification
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
    public function handle(PushNotification $event): void
    {
        $baby = $event->baby;

        if (!$baby) return;

        $notifikasi = Notification::where('week_number', $baby->usia)->first();

        if (!$notifikasi) return;

        $startTime = Carbon::parse($notifikasi->scheduled_time)->gte(Carbon::now());
        $endTime = Carbon::parse($notifikasi->scheduled_time)->addHour()->lte(Carbon::now());

        if (!$startTime || !$endTime) return;

        OneSignal::sendToUser($baby->user->email, $notifikasi->message);
    }
}
