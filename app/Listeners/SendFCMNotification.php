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

        if ($baby->usia < 25) {
            if (Carbon::now()->dayOfWeek == Carbon::SUNDAY) {
                $notifikasi = Notification::where('week_number', $baby->usia)
                    ->whereTime('scheduled_time', '>=', Carbon::now())
                    ->whereTime('scheduled_time', '<=', Carbon::now()->addHour())
                    ->first();

                if (!$notifikasi) return;

                OneSignal::sendToUser($baby->user->email, $notifikasi->message);
            }
        }
        if ($baby->usia == 25) {
            if (Carbon::now()->dayOfWeek == Carbon::MONDAY) {
                $notifikasi = Notification::where('week_number', 25)
                    ->whereTime('scheduled_time', '>=', Carbon::now())
                    ->whereTime('scheduled_time', '<=', Carbon::now()->addHour())
                    ->first();

                if (!$notifikasi) return;

                OneSignal::sendToUser($baby->user->email, $notifikasi->message);
            }
        }
    }
}
